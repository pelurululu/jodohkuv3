<?php
session_start();
if (empty($_SESSION['admin'])) {
  http_response_code(403);
  echo json_encode(['error' => 'Forbidden']);
  exit;
}

$url = getenv('SUPABASE_URL') . '/rest/v1/registrations?select=*&order=created_at.desc';
$key = getenv('SUPABASE_SERVICE_KEY');

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
  'apikey: ' . $key,
  'Authorization: Bearer ' . $key,
  'Content-Type: application/json'
]);
$result = curl_exec($ch);
curl_close($ch);

header('Content-Type: application/json');
echo $result;
