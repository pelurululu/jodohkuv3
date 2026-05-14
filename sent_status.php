<?php
// ============================================================
//  sent_status.php — Read / write email-sent flags
//  Stored in data/sent_status.json on the server
//  so state syncs across all devices / browsers
// ============================================================

session_start();

// Must be logged-in admin
if (empty($_SESSION['admin'])) {
    http_response_code(403);
    echo json_encode(['error' => 'Unauthorized']);
    exit;
}

header('Content-Type: application/json');

$dataFile = __DIR__ . '/data/sent_status.json';

// ── Load current state ──────────────────────────────────────
function loadSent(string $file): array {
    if (!file_exists($file)) return [];
    $decoded = json_decode(file_get_contents($file), true);
    return is_array($decoded) ? $decoded : [];
}

// ── Save state ──────────────────────────────────────────────
function saveSent(string $file, array $data): void {
    file_put_contents($file, json_encode($data), LOCK_EX);
}

// ── GET — return full sent list ─────────────────────────────
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    echo json_encode(loadSent($dataFile));
    exit;
}

// ── POST — toggle a single jdk_id ──────────────────────────
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $body   = json_decode(file_get_contents('php://input'), true);
    $jdkId  = trim($body['jdk_id'] ?? '');
    $sent   = (bool)($body['sent']   ?? false);

    if (!$jdkId) {
        http_response_code(400);
        echo json_encode(['error' => 'Missing jdk_id']);
        exit;
    }

    $current = loadSent($dataFile);

    if ($sent) {
        $current[$jdkId] = true;
    } else {
        unset($current[$jdkId]);
    }

    saveSent($dataFile, $current);
    echo json_encode(['ok' => true, 'total_sent' => count($current)]);
    exit;
}

// ── DELETE — clear everything ───────────────────────────────
if ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
    saveSent($dataFile, []);
    echo json_encode(['ok' => true]);
    exit;
}

http_response_code(405);
echo json_encode(['error' => 'Method not allowed']);
