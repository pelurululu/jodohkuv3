<?php
session_start();
if (empty($_SESSION['admin'])) {
    http_response_code(403);
    echo json_encode(['error' => 'Unauthorized']);
    exit;
}

header('Content-Type: application/json');

$url = getenv('SUPABASE_URL');
$key = getenv('SUPABASE_SERVICE_KEY');

function supabase(string $method, string $endpoint, ?array $body = null): string {
    global $url, $key;
    $ch = curl_init($url . '/rest/v1/' . $endpoint);
    $headers = [
        'apikey: ' . $key,
        'Authorization: Bearer ' . $key,
        'Content-Type: application/json',
        'Prefer: return=minimal'
    ];
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    if ($body !== null) {
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($body));
    }
    $res = curl_exec($ch);
    curl_close($ch);
    return $res ?: '[]';
}

// GET — return all sent jdk_ids as { jdk_id: true }
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $rows = json_decode(supabase('GET', 'sent_status?select=jdk_id'), true);
    $map  = [];
    foreach ($rows as $row) $map[$row['jdk_id']] = true;
    echo json_encode($map);
    exit;
}

// POST — mark one as sent or unsent
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $body  = json_decode(file_get_contents('php://input'), true);
    $jdkId = trim($body['jdk_id'] ?? '');
    $sent  = (bool)($body['sent'] ?? false);

    if (!$jdkId) {
        http_response_code(400);
        echo json_encode(['error' => 'Missing jdk_id']);
        exit;
    }

    if ($sent) {
        // Upsert
        supabase('POST', 'sent_status?on_conflict=jdk_id', [
            'jdk_id'  => $jdkId,
            'sent_at' => date('c')
        ]);
    } else {
        // Delete
        supabase('DELETE', 'sent_status?jdk_id=eq.' . urlencode($jdkId));
    }

    echo json_encode(['ok' => true]);
    exit;
}

// DELETE — clear all
if ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
    supabase('DELETE', 'sent_status?jdk_id=neq.null');
    echo json_encode(['ok' => true]);
    exit;
}

http_response_code(405);
echo json_encode(['error' => 'Method not allowed']);
