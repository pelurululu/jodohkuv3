<?php
session_start();
if (!isset($_SESSION['attempts'])) $_SESSION['attempts'] = 0;

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['pw'])) {
  header('Content-Type: application/json');
  if ($_SESSION['attempts'] >= 5) {
    echo json_encode(['ok' => false, 'locked' => true]);
    exit;
  }
  if ($_POST['pw'] === getenv('ADMIN_PASSWORD')) {
    $_SESSION['admin'] = true;
    $_SESSION['attempts'] = 0;
    echo json_encode(['ok' => true]);
  } else {
    $_SESSION['attempts']++;
    echo json_encode(['ok' => false]);
  }
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
  #count  { color: #888; font-size: 13px; margin-bottom: 8px; }
  #status { color: #888; font-size: 13px; margin-bottom: 8px; }

  /* ── SENT STATS BAR ── */
  #sentBar {
    display: flex; align-items: center; gap: 20px;
    margin-bottom: 16px; padding: 10px 14px;
    background: #1a1a1a; border: 1px solid #2a2a2a;
    border-radius: 8px; font-size: 13px;
  }
  #sentBar .stat { display: flex; align-items: center; gap: 7px; }
  #sentBar .dot  { width: 8px; height: 8px; border-radius: 50%; }
  .dot-sent   { background: #22c55e; }
  .dot-unsent { background: #555; }
  .dot-total  { background: #FFD700; }
  #sentBar span.val { font-weight: 700; }
  .stat-sent   { color: #22c55e; }
  .stat-unsent { color: #aaa; }
  .stat-total  { color: #FFD700; }

  #syncStatus {
    margin-left: auto; font-size: 11px;
    color: #555; transition: color 0.3s;
  }
  #syncStatus.syncing { color: #FFD700; }
  #syncStatus.ok      { color: #22c55e; }
  #syncStatus.err     { color: #ff4444; }

  /* ── FILTER TABS ── */
  #filterBar { display: flex; gap: 8px; margin-bottom: 16px; }
  .ftab {
    padding: 6px 16px; border-radius: 6px;
    border: 1px solid #333; background: transparent;
    color: #888; font-family: monospace; font-size: 12px;
    cursor: pointer; transition: all 0.15s;
  }
  .ftab:hover  { border-color: #FFD700; color: #FFD700; }
  .ftab.active { background: #FFD700; color: #111; border-color: #FFD700; font-weight: 700; }
  #clearBtn {
    margin-left: auto; padding: 6px 14px; border-radius: 6px;
    border: 1px solid #444; background: transparent;
    color: #666; font-family: monospace; font-size: 11px;
    cursor: pointer; transition: all 0.15s;
  }
  #clearBtn:hover { border-color: #ff4444; color: #ff4444; }

  table { width: 100%; border-collapse: collapse; font-size: 13px; }
  th { text-align: left; padding: 10px 12px; background: #1a1a1a; color: #FFD700; border-bottom: 1px solid #333; }
  td { padding: 10px 12px; border-bottom: 1px solid #222; vertical-align: middle; }
  tr:hover td { background: #1a1a1a; }

  tr.sent-row td          { opacity: 0.4; }
  tr.sent-row td.chk-cell { opacity: 1; }

  td img {
    width: 40px; height: 40px; border-radius: 50%;
    object-fit: cover; cursor: pointer; transition: 0.2s;
  }
  td img:hover { transform: scale(1.1); }
  .no-photo { color: #555; }
  .jdk-id   { color: #FFD700; }

  /* ── CHECKBOX ── */
  .chk-cell { text-align: center; }
  .sent-checkbox {
    appearance: none; -webkit-appearance: none;
    width: 20px; height: 20px;
    border: 2px solid #444; border-radius: 5px;
    background: #1a1a1a; cursor: pointer;
    position: relative; transition: all 0.15s;
    display: inline-block; vertical-align: middle;
  }
  .sent-checkbox:hover   { border-color: #22c55e; }
  .sent-checkbox:checked { background: #22c55e; border-color: #22c55e; }
  .sent-checkbox:checked::after {
    content: '✓'; position: absolute;
    top: 50%; left: 50%; transform: translate(-50%, -50%);
    color: #111; font-size: 13px; font-weight: 900; line-height: 1;
  }
  .sent-checkbox:disabled { opacity: 0.4; cursor: wait; }

  /* ── MODAL ── */
  #imgModal {
    display: none; position: fixed; top: 0; left: 0;
    width: 100%; height: 100%;
    background: rgba(0,0,0,0.85);
    justify-content: center; align-items: center; z-index: 9999;
  }
  #imgModal img { max-width: 90%; max-height: 90%; border-radius: 10px; }
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

<!-- Stats bar -->
<div id="sentBar" style="display:none;">
  <div class="stat stat-total"><div class="dot dot-total"></div>Jumlah: <span class="val" id="statTotal">0</span></div>
  <div class="stat stat-sent"><div class="dot dot-sent"></div>Dah hantar: <span class="val" id="statSent">0</span></div>
  <div class="stat stat-unsent"><div class="dot dot-unsent"></div>Belum hantar: <span class="val" id="statUnsent">0</span></div>
  <div id="syncStatus">—</div>
</div>

<!-- Filter tabs -->
<div id="filterBar" style="display:none;">
  <button class="ftab active" onclick="setFilter('all',this)">Semua</button>
  <button class="ftab" onclick="setFilter('unsent',this)">Belum Hantar</button>
  <button class="ftab" onclick="setFilter('sent',this)">Dah Hantar</button>
  <button id="clearBtn" onclick="clearAllSent()">Reset semua ✕</button>
  <button id="exportBtn" onclick="exportToExcel()"
  style="padding:6px 14px;border-radius:6px;border:1px solid #444;background:transparent;
  color:#4ade80;font-family:monospace;font-size:11px;cursor:pointer;transition:all 0.15s;"
  onmouseover="this.style.borderColor='#4ade80'" onmouseout="this.style.borderColor='#444'">
  Export Excel ↓
</button>
</div>

<table>
  <thead>
    <tr>
      <th>#</th>
      <th style="text-align:center;">📧 Hantar</th>
      <th>Photo</th>
      <th>JDK ID</th>
      <th>Nama</th>
      <th>IC</th>
      <th>Tarikh Lahir</th>
      <th>Umur</th>
      <th>Jantina</th>
      <th>Negeri Lahir</th>
      <th>Telefon</th>
      <th>Email</th>
      <th>Tarikh Daftar</th>
    </tr>
  </thead>
  <tbody id="tableBody"></tbody>
</table>

<div id="imgModal"><img id="modalImg"></div>

<script>
  let sentSet   = new Set();
  let allData   = [];
  let curFilter = 'all';

  // ── Modal ──
  const modal    = document.getElementById('imgModal');
  const modalImg = document.getElementById('modalImg');
  function openImg(src) { modal.style.display = 'flex'; modalImg.src = src; }
  modal.onclick = () => { modal.style.display = 'none'; modalImg.src = ''; };

  // ── Sync indicator ──
  function setSyncStatus(state, msg) {
    const el = document.getElementById('syncStatus');
    el.className   = state;
    el.textContent = msg;
  }

  // ── IC decoder ──
  function decodeIC(ic) {
    const clean = ic.replace(/-/g, '');
    if (clean.length !== 12) return { umur: '—', jantina: '—', negeri: '—', dob: '—' };
    let yy = parseInt(clean.substring(0, 2));
    const mm = parseInt(clean.substring(2, 4));
    const dd = parseInt(clean.substring(4, 6));
    const currentYY = new Date().getFullYear() % 100;
    const fullYear  = yy <= currentYY ? 2000 + yy : 1900 + yy;
    const today = new Date();
    let age = today.getFullYear() - fullYear;
    if (today.getMonth() + 1 < mm || (today.getMonth() + 1 === mm && today.getDate() < dd)) age--;
    const lastDigit = parseInt(clean[11]);
    const jantina   = lastDigit % 2 === 0 ? 'Perempuan ♀' : 'Lelaki ♂';
    const pb = parseInt(clean.substring(6, 8));
    const states = {
      1:'Johor',2:'Kedah',3:'Kelantan',4:'Melaka',5:'Negeri Sembilan',
      6:'Pahang',7:'Pulau Pinang',8:'Perak',9:'Perlis',10:'Selangor',
      11:'Terengganu',12:'Sabah',13:'Sarawak',14:'WP Kuala Lumpur',
      15:'WP Labuan',16:'WP Putrajaya'
    };
    const negeri = pb >= 21 && pb <= 59 ? 'Luar Negara' : (states[pb] || 'Tidak Diketahui');
    const dobFormatted = `${dd.toString().padStart(2,'0')}/${mm.toString().padStart(2,'0')}/${fullYear}`;
    return { umur: age + ' tahun', jantina, negeri, dob: dobFormatted };
  }

  // ── Update stats ──
  function updateStats() {
    const total  = allData.length;
    const sent   = sentSet.size;
    document.getElementById('statTotal').textContent  = total;
    document.getElementById('statSent').textContent   = sent;
    document.getElementById('statUnsent').textContent = total - sent;
  }

  // ── Toggle sent — saves to server ──
  async function toggleSent(jdkId, checkbox) {
    checkbox.disabled = true;
    setSyncStatus('syncing', '⟳ Menyimpan…');

    const isSent = checkbox.checked;
    if (isSent) sentSet.add(jdkId); else sentSet.delete(jdkId);
    checkbox.closest('tr').classList.toggle('sent-row', isSent);
    updateStats();

    try {
      const res = await fetch('sent_status.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ jdk_id: jdkId, sent: isSent })
      });
      if (!res.ok) throw new Error();
      setSyncStatus('ok', '✓ Tersimpan');
    } catch {
      // Revert on failure
      if (isSent) sentSet.delete(jdkId); else sentSet.add(jdkId);
      checkbox.checked = !isSent;
      checkbox.closest('tr').classList.toggle('sent-row', !isSent);
      updateStats();
      setSyncStatus('err', '✕ Gagal simpan — cuba semula');
    } finally {
      checkbox.disabled = false;
      setTimeout(() => {
        if (document.getElementById('syncStatus').className !== 'err')
          setSyncStatus('', '—');
      }, 2000);
    }

    // Respect active filter
    const row = checkbox.closest('tr');
    if (curFilter === 'sent'   && !checkbox.checked) row.style.display = 'none';
    if (curFilter === 'unsent' &&  checkbox.checked) row.style.display = 'none';
  }

  // ── Filter ──
  function setFilter(type, btn) {
    curFilter = type;
    document.querySelectorAll('.ftab').forEach(b => b.classList.remove('active'));
    btn.classList.add('active');
    document.querySelectorAll('#tableBody tr').forEach(row => {
      const isSent = sentSet.has(row.dataset.jdkId);
      row.style.display =
        type === 'all'    ? '' :
        type === 'sent'   ? (isSent  ? '' : 'none') :
                            (!isSent ? '' : 'none');
    });
  }

  // ──  all ──
  async function AllSent() {
    if (!confirm('Reset semua tanda hantar? Ini tidak boleh diundo.')) return;
    setSyncStatus('syncing', '⟳ Memadam…');
    try {
      const res = await fetch('sent_status.php', { method: 'DELETE' });
      if (!res.ok) throw new Error();
      sentSet.clear();
      document.querySelectorAll('.sent-checkbox').forEach(cb => {
        cb.checked = false;
        cb.closest('tr').classList.remove('sent-row');
        cb.closest('tr').style.display = '';
      });
      curFilter = 'all';
      document.querySelectorAll('.ftab').forEach(b => b.classList.remove('active'));
      document.querySelector('.ftab').classList.add('active');
      updateStats();
      setSyncStatus('ok', '✓ Dipadam');
      setTimeout(() => setSyncStatus('', '—'), 2000);
    } catch {
      setSyncStatus('err', '✕ Gagal padam');
    }
  }

  // ── Render table ──
  function renderTable(data) {
    document.getElementById('tableBody').innerHTML = data.map((r, i) => {
      const d      = decodeIC(r.ic);
      const isSent = sentSet.has(r.jdk_id);
      return `
        <tr class="${isSent ? 'sent-row' : ''}" data-jdk-id="${r.jdk_id}">
          <td>${i + 1}</td>
          <td class="chk-cell">
            <input type="checkbox" class="sent-checkbox"
              ${isSent ? 'checked' : ''}
              onchange="toggleSent('${r.jdk_id}', this)"
              title="${isSent ? 'Dah hantar — klik untuk undo' : 'Klik bila dah hantar email'}">
          </td>
          <td>${r.photo_url ? `<img src="${r.photo_url}" onclick="openImg(this.src)">` : '<span class="no-photo">—</span>'}</td>
          <td class="jdk-id">${r.jdk_id}</td>
          <td>${r.nama}</td>
          <td>${r.ic}</td>
          <td>${d.dob}</td>
          <td>${d.umur}</td>
          <td>${d.jantina}</td>
          <td>${d.negeri}</td>
          <td>${r.telefon}</td>
          <td>${r.email}</td>
          <td>${new Date(r.created_at).toLocaleString('ms-MY')}</td>
        </tr>`;
    }).join('');
  }

  // ── Load both registrations + sent state in parallel ──
  async function load() {
    try {
      const [dataRes, sentRes] = await Promise.all([
        fetch('admin_data.php'),
        fetch('sent_status.php')
      ]);
      allData = await dataRes.json();
      const sentData = await sentRes.json();

      if (allData.error) {
        document.getElementById('status').textContent = 'Error: ' + allData.error;
        return;
      }

      sentSet = new Set(Object.keys(sentData));

      document.getElementById('status').textContent = '';
      document.getElementById('count').textContent  = allData.length + ' registrations';
      document.getElementById('sentBar').style.display   = 'flex';
      document.getElementById('filterBar').style.display = 'flex';

      renderTable(allData);
      updateStats();
      setSyncStatus('ok', '✓ Disegerakkan');
      setTimeout(() => setSyncStatus('', '—'), 2000);
    } catch (e) {
      document.getElementById('status').textContent = 'Gagal memuatkan data.';
      setSyncStatus('err', '✕ Ralat sambungan');
    }
  }

  // ── Password check ──
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

  function exportToExcel() {
  const headers = ['#','JDK ID','Nama','IC','Tarikh Lahir','Umur','Jantina','Negeri Lahir','Telefon','Email','Tarikh Daftar','Status Hantar'];
  const rows = allData.map((r, i) => {
    const d = decodeIC(r.ic);
    return [
      i + 1,
      r.jdk_id,
      r.nama,
      r.ic,
      d.dob,
      d.umur,
      d.jantina,
      r.negeri,
      r.telefon,
      r.email,
      new Date(r.created_at).toLocaleString('ms-MY'),
      sentSet.has(r.jdk_id) ? 'Dah Hantar' : 'Belum Hantar'
    ];
  });

  const csvContent = [headers, ...rows]
    .map(row => row.map(cell => `"${String(cell ?? '').replace(/"/g, '""')}"`).join(','))
    .join('\n');

  const BOM = '\uFEFF'; // ensures Excel reads UTF-8 (Malay characters) correctly
  const blob = new Blob([BOM + csvContent], { type: 'text/csv;charset=utf-8;' });
  const url  = URL.createObjectURL(blob);
  const a    = document.createElement('a');
  a.href     = url;
  a.download = `jodohku_registrations_${new Date().toISOString().slice(0,10)}.csv`;
  a.click();
  URL.revokeObjectURL(url);
}
  
</script>

</body>
</html>
