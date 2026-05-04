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
  const { createClient } = supabase;
  const db = createClient(
    '<?php echo getenv("SUPABASE_URL"); ?>',
    '<?php echo getenv("SUPABASE_SERVICE_KEY"); ?>'
  );

  const modal = document.getElementById('imgModal');
  const modalImg = document.getElementById('modalImg');

  function openImg(src) {
    modal.style.display = 'flex';
    modalImg.src = src;
  }

  modal.onclick = () => {
    modal.style.display = 'none';
    modalImg.src = '';
  };

  async function load() {
    const { data, error } = await db
      .from('registrations')
      .select('*')
      .order('created_at', { ascending: false });

    if (error) {
      document.getElementById('status').textContent = 'Error: ' + error.message;
      return;
    }

    document.getElementById('status').textContent = '';
    document.getElementById('count').textContent = data.length + ' registrations';

    const tbody = document.getElementById('tableBody');

    tbody.innerHTML = data.map((r, i) => `
      <tr>
        <td>${i + 1}</td>
        <td>
          ${r.photo_url 
            ? `<img src="${r.photo_url}" onclick="openImg(this.src)">`
            : '<span class="no-photo">—</span>'
          }
        </td>
        <td class="jdk-id">${r.jdk_id}</td>
        <td>${r.nama}</td>
        <td>${r.ic}</td>
        <td>${r.telefon}</td>
        <td>${r.email}</td>
        <td>${new Date(r.created_at).toLocaleString('ms-MY')}</td>
      </tr>
    `).join('');
  }

  load();
</script>

</body>
</html>
