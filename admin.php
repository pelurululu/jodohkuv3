<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['pw'])) {
  header('Content-Type: application/json');
  if ($_POST['pw'] === getenv('ADMIN_PASSWORD')) {
    $_SESSION['admin'] = true;
    echo json_encode(['ok' => true]);
  } else {
    echo json_encode(['ok' => false]);
  }
  exit;
}

  if (empty($_SESSION['admin'])) {
  http_response_code(403);
  echo 'Forbidden';
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin — Jodohku.my</title>
<script src="https://cdn.jsdelivr.net/npm/@supabase/supabase-js@2"></script>

<style>
  * { box-sizing: border-box; margin: 0; padding: 0; }
  body { background: #111; color: #eee; font-family: monospace; padding: 32px; }
  h1 { font-size: 20px; margin-bottom: 24px; color: #FFD700; }
  #count { color: #888; font-size: 13px; margin-bottom: 16px; }
  #status { color: #888; font-size: 13px; margin-bottom: 16px; }

  table { width: 100%; border-collapse: collapse; font-size: 13px; }
  th { text-align: left; padding: 10px 12px; background: #1a1a1a; color: #FFD700; border-bottom: 1px solid #333; }
  td { padding: 10px 12px; border-bottom: 1px solid #222; vertical-align: middle; }
  tr:hover td { background: #1a1a1a; }

  td img {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    object-fit: cover;
    cursor: pointer;
    transition: 0.2s;
  }

  td img:hover {
    transform: scale(1.1);
  }

  .no-photo { color: #555; }
  .jdk-id { color: #FFD700; }

  /* Modal */
  #imgModal {
    display: none;
    position: fixed;
    top: 0; left: 0;
    width: 100%; height: 100%;
    background: rgba(0,0,0,0.85);
    justify-content: center;
    align-items: center;
    z-index: 9999;
  }

  #imgModal img {
    max-width: 90%;
    max-height: 90%;
    border-radius: 10px;
  }
</style>
</head>

<body>
 <!-- Password Gate -->
<div id="gate" style="display:flex;align-items:center;justify-content:center;min-height:100vh;position:fixed;inset:0;background:#111;z-index:9999;">
  <div style="text-align:center;">
    <div style="color:#FFD700;font-size:18px;margin-bottom:20px;">🔐 Jodohku.my Admin</div>
    <input id="pwInput" type="password" placeholder="Enter password"
      style="background:#1a1a1a;border:1px solid #333;color:#eee;padding:12px 16px;border-radius:8px;font-family:monospace;font-size:14px;width:260px;outline:none;"
      onkeydown="if(event.key==='Enter')checkPw()">
    <div style="margin-top:12px;">
      <button onclick="checkPw()"
        style="background:#FFD700;color:#111;border:none;padding:10px 28px;border-radius:8px;font-weight:700;cursor:pointer;font-size:14px;">
        Enter
      </button>
    </div>
    <div id="pwError" style="color:#ff4444;font-size:13px;margin-top:12px;display:none;">Wrong password.</div>
  </div>
</div>

<h1>Jodohku.my — Registrations</h1>
<div id="status">Loading...</div>
<div id="count"></div>

<table>
  <thead>
    <tr>
      <th>#</th>
      <th>Photo</th>
      <th>JDK ID</th>
      <th>Nama</th>
      <th>IC</th>
      <th>Telefon</th>
      <th>Email</th>
      <th>Tarikh Daftar</th>
    </tr>
  </thead>
  <tbody id="tableBody"></tbody>
</table>

<!-- Image Modal -->
<div id="imgModal">
  <img id="modalImg">
</div>

<script>
async function load() {
  const res = await fetch('admin_data.php');
  const data = await res.json();
  if (data.error) {
    document.getElementById('status').textContent = 'Error: ' + data.error;
    return;
  }
  document.getElementById('status').textContent = '';
  document.getElementById('count').textContent = data.length + ' registrations';
  const tbody = document.getElementById('tableBody');
  tbody.innerHTML = data.map((r, i) => `
    <tr>
      <td>${i + 1}</td>
      <td>${r.photo_url ? `<img src="${r.photo_url}" onclick="openImg(this.src)">` : '<span class="no-photo">—</span>'}</td>
      <td class="jdk-id">${r.jdk_id}</td>
      <td>${r.nama}</td>
      <td>${r.ic}</td>
      <td>${r.telefon}</td>
      <td>${r.email}</td>
      <td>${new Date(r.created_at).toLocaleString('ms-MY')}</td>
    </tr>
  `).join('');
}

function checkPw() {
  const val = document.getElementById('pwInput').value;
  fetch('', {
    method: 'POST',
    headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
    body: 'pw=' + encodeURIComponent(val)
  }).then(r => r.json()).then(res => {
    if (res.ok) {
      document.getElementById('gate').style.display = 'none';
      load();
    } else {
      document.getElementById('pwError').style.display = 'block';
      document.getElementById('pwInput').value = '';
      document.getElementById('pwInput').focus();
    }
  });
}
</script>

</body>
</html>
