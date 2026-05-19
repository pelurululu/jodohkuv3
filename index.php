<!DOCTYPE html>
<html lang="ms">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Jodohku.my — Platform Ultra-Premium Perkahwinan Islam</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&family=Tajawal:wght@300;400;500;700&family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

  
<link rel="stylesheet" href="styles.css">
<link rel="icon" type="image/png" href="logo.png">
<link rel="apple-touch-icon" href="logo.png">
  
<meta property="og:title" content="Jodohku.my - Platform Ultra-Premium Mencari Pasangan">

<meta property="og:description" content="Padanan AI + Sekufu">

<meta property="og:image" content="https://jodohku.my/thumbnail.png">

<meta property="og:url" content="https://www.jodohku.my">

<meta property="og:type" content="website">

<meta name="twitter:card" content="summary_large_image">

<meta name="twitter:title" content="Jodohku.my — Platform Ultra-Premium Perkahwinan Islam">

<meta name="twitter:description" content="AI Terdepan + 115 Soalan Psikologi = Jodoh Seumur Hidup">

<meta name="twitter:image" content="https://jodohku.my/thumbnail.png">

  

  <meta property="og:image:width" content="1200">

<meta property="og:image:height" content="630">

<meta property="og:image:type" content="image/png">
  
<script src="https://cdn.jsdelivr.net/npm/@supabase/supabase-js@2"></script>

 
</head>
<body>
  
  <?php include 'nav.php'; ?>

<!-- 
==============================================
REPLACEMENT INSTRUCTIONS
==============================================
In your index.php, find this line:
    <main id="top">
And this line (near the bottom, before the scripts):
    </main>

Replace EVERYTHING between and including those
two tags with the block below.

Keep everything else untouched:
- <nav> block (nav.php)
- All <script> tags
- Both modals (#termsModal, #privacyModal)
- <footer> block (footer.php)
- Cloudflare beacon script
==============================================
-->

<main id="top">

  <!-- ═══════════════════════════════════════
       HERO
  ═══════════════════════════════════════ -->
  <section class="hero" id="hero">
    <div class="container hero-wrap">

      <div class="hero-copy reveal">
        <span class="eyebrow hero-badge">Platform Taaruf Premium Muslim Malaysia</span>
        <h1 class="hero-title">AI Terdepan + Sistem Taaruf &amp; Keserasian = <span class="gold-text">Padanan Jodoh Lebih Bermakna</span></h1>
        <p class="lead hero-description">Platform taaruf berasaskan nilai Islam, keselamatan berlapis dan analisis keserasian yang membantu anda mencari calon pasangan dengan lebih serius, sopan dan terarah.</p>
        <p class="hero-subtitle" style="display:none;">AI Terdepan + Sistem Taaruf &amp; Keserasian = Padanan Jodoh Lebih Bermakna</p>
        <div class="hero-actions">
          <a class="btn primary btn-primary-hero" href="#daftar">Mohon Akses Awal</a>
          <a class="btn secondary btn-secondary-hero" href="#padanan">Lihat Sistem Padanan</a>
        </div>
        <div class="trust-row" aria-label="Kepercayaan platform">
          <div class="trust-item"><strong>Syariah</strong>Beradab, sopan dan terpelihara</div>
          <div class="trust-item"><strong>AI</strong>Analisis nilai &amp; keserasian</div>
          <div class="trust-item"><strong>Wali</strong>Proses lebih yakin dan tersusun</div>
        </div>
      </div>

      <aside class="hero-side reveal" id="daftar">
        <div class="form-card">
          <h3 class="form-title">Akses Awal Beta</h3>
          <p class="form-subtitle">Jadilah antara yang terawal mencuba platform premium ini.</p>
          <div class="form-grid" id="registrationForm">
            <label class="input-label" for="nameInput" style="display:none;">Nama Penuh</label>
            <input class="field" id="nameInput" type="text" name="name" placeholder="Nama penuh" autocomplete="name">

            <label class="input-label" for="icInput" style="display:none;">No. Kad Pengenalan</label>
            <input class="field" id="icInput" type="text" name="ic" placeholder="No. Kad Pengenalan (12 digit)">

            <label class="input-label" for="phoneInput" style="display:none;">No. Telefon</label>
            <input class="field" id="phoneInput" type="tel" name="phone" placeholder="Nombor telefon" autocomplete="tel">

            <label class="input-label" for="emailInput" style="display:none;">Alamat E-mel</label>
            <input class="field" id="emailInput" type="email" name="email" placeholder="Emel" autocomplete="email">

            <label class="input-label" for="profilePhoto" style="display:none;">Gambar Profil</label>
            <label class="upload" for="profilePhoto">
              <strong id="uploadTitle">Pilih gambar profil</strong>
              <span class="upload-text">JPG, PNG atau WEBP — maksimum 5MB</span>
            </label>
            <input id="profilePhoto" name="profilePhoto" type="file" accept="image/jpeg,image/png,image/webp" hidden>

            <div class="checkbox-premium" style="display:flex;align-items:flex-start;gap:10px;margin-top:4px;">
              <input type="checkbox" id="termsCheck" style="margin-top:3px;accent-color:#c4a064;min-width:16px;">
              <label for="termsCheck" style="font-size:12px;color:rgba(255,255,255,.65);line-height:1.5;">
                Saya bersetuju dengan <a href="#" onclick="openModal('termsModal');return false;" style="color:var(--champagne);">Terma &amp; Syarat</a> dan <a href="#" onclick="openModal('privacyModal');return false;" style="color:var(--champagne);">Dasar Privasi</a> Jodohku.my yang mematuhi PDPA 2010
              </label>
            </div>

            <button class="btn primary btn-submit-premium" type="button" onclick="handleFormSubmit()">Mohon Akses Awal</button>
          </div>
          <div id="successMessage" style="display:none;text-align:center;padding:20px 0;">
            <p class="success-title" style="color:var(--champagne);font-size:18px;font-weight:800;margin-bottom:8px;">Pendaftaran Berjaya!</p>
            <p class="success-message" style="color:rgba(255,255,255,.7);font-size:14px;">Tahniah atas tindakan awal anda! Kami akan menghubungi anda setelah aplikasi berjaya didaftarkan.</p>
          </div>
          <div class="mini-note">Maklumat anda disimpan secara sulit dan tidak dipaparkan tanpa izin.</div>
        </div>
      </aside>

    </div>
  </section>

  <!-- ═══════════════════════════════════════
       GALLERY / PENGALAMAN PREMIUM
  ═══════════════════════════════════════ -->
  <section class="section cream" id="kelebihan">
    <div class="container">
      <div class="section-head reveal">
        <span class="eyebrow">Pengalaman Premium</span>
        <h2>Sistem Taaruf Premium Berteknologi AI</h2>
        <p class="lead">Direka supaya proses mencari pasangan menjadi lebih selamat, matang, visual dan dipercayai.</p>
      </div>
      <div class="gallery-grid">

        <div class="photo-card reveal">
          <img src="https://images.pexels.com/photos/3184291/pexels-photo-3184291.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Taaruf Beradab">
          <span class="photo-label">Taaruf</span>
          <div class="card-copy">
            <h3>Taaruf Beradab</h3>
            <p>Proses perkenalan yang sopan, tersusun dan mengikut adab Islam.</p>
          </div>
        </div>

        <div class="photo-card reveal">
          <img src="https://images.pexels.com/photos/8386440/pexels-photo-8386440.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Analisis AI">
          <span class="photo-label">AI</span>
          <div class="card-copy">
            <h3>Analisis AI Pintar</h3>
            <p>Teknologi AI menganalisis keserasian nilai dan personaliti anda.</p>
          </div>
        </div>

        <div class="photo-card reveal">
          <img src="https://images.pexels.com/photos/3184338/pexels-photo-3184338.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Keluarga bahagia">
          <span class="photo-label">Keluarga</span>
          <div class="card-copy">
            <h3>Keluarga Bahagia</h3>
            <p>Matlamat akhir setiap padanan — rumah tangga yang harmoni dan diberkati.</p>
          </div>
        </div>

        <div class="photo-card reveal">
          <img src="https://images.pexels.com/photos/1024993/pexels-photo-1024993.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Majlis perkahwinan">
          <span class="photo-label">Nikah</span>
          <div class="card-copy">
            <h3>Majlis Perkahwinan</h3>
            <p>Dari taaruf hingga ke jenjang pelamin yang penuh keberkatan.</p>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- ═══════════════════════════════════════
       TERAS UTAMA (CORE GRID)
  ═══════════════════════════════════════ -->
  <section class="section compact cream" id="teras">
    <div class="container">
      <div class="section-head reveal">
        <span class="eyebrow">Teras Utama</span>
        <h2>Tiga Asas Yang Membuatkan Jodohku.my Berbeza</h2>
      </div>
      <div class="core-grid">

        <div class="image-panel reveal">
          <img src="https://images.pexels.com/photos/3184465/pexels-photo-3184465.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Keselamatan & Privasi">
          <span class="photo-label">Keselamatan</span>
          <div class="panel-copy">
            <h3>Keselamatan &amp; Privasi</h3>
            <p>Identiti anda dilindungi sepenuhnya. Nombor IC, telefon dan e-mel tidak didedahkan kepada mana-mana pengguna lain tanpa izin anda.</p>
          </div>
        </div>

        <div class="image-panel reveal">
          <img src="https://images.pexels.com/photos/8386440/pexels-photo-8386440.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Padanan AI">
          <span class="photo-label">AI</span>
          <div class="panel-copy">
            <h3>Padanan Berteknologi AI</h3>
            <p>Algoritma AI menganalisis keserasian nilai, akhlak dan personaliti anda untuk mencadangkan pasangan yang paling serasi.</p>
          </div>
        </div>

        <div class="image-panel reveal">
          <img src="https://images.pexels.com/photos/7014337/pexels-photo-7014337.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Taaruf Syariah">
          <span class="photo-label">Syariah</span>
          <div class="panel-copy">
            <h3>Taaruf Berlandaskan Syariah</h3>
            <p>Setiap langkah proses taaruf direka mengikut adab Islam — beradab, terkawal dan melibatkan wali dengan cara yang betul.</p>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- ═══════════════════════════════════════
       COMPARISON TABLE
  ═══════════════════════════════════════ -->
  <section class="section dark" id="comparison">
    <div class="container">
      <div class="section-head reveal">
        <span class="eyebrow section-label">Kenapa Berbeza</span>
        <h2 class="section-title-main">Lebih Serius Daripada Aplikasi Biasa</h2>
      </div>
      <div class="table-shell reveal">
        <table class="comparison-table" aria-label="Perbandingan Jodohku.my dengan aplikasi biasa">
          <thead>
            <tr>
              <th>Ciri-Ciri</th>
              <th>Jodohku.my</th>
              <th>Tinder / Bumble</th>
              <th>Aplikasi Biasa</th>
            </tr>
          </thead>
          <tbody>
            <tr><td>Tujuan</td><td><span class="tick">✓</span> Perkahwinan &amp; jangka panjang</td><td>✗ Kenalan, dating</td><td>Kenalan, dating atau hiburan</td></tr>
            <tr><td>Pendekatan</td><td><span class="tick">✓</span> Taaruf berstruktur &amp; kerahsiaan mendalam</td><td>✗ Swipe, rupa</td><td>Swipe, rupa dan lokasi</td></tr>
            <tr><td>Analisis</td><td><span class="tick">✓</span> AI + sistem taaruf &amp; keserasian</td><td>✗ Appearance</td><td>Algoritma asas</td></tr>
            <tr><td>Keterlibatan Wali</td><td><span class="tick">✓</span> Ada sistem wali digital</td><td>✗ Tiada</td><td>Tiada</td></tr>
            <tr><td>Privasi</td><td><span class="tick">✓</span> Identiti terlindung &amp; terkawal</td><td>✗ Selfie sahaja</td><td>Terhad</td></tr>
            <tr><td>Ekosistem</td><td><span class="tick">✓</span> Dari taaruf hingga selepas nikah</td><td>✗ Berhenti</td><td>Tiada sokongan lanjutan</td></tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <!-- ═══════════════════════════════════════
       PADANAN / SCIENCE CARDS
  ═══════════════════════════════════════ -->
  <section class="section dark" id="padanan">
    <div class="container">
      <div class="section-head reveal">
        <span class="eyebrow">Sains Padanan</span>
        <h2>Sistem Taaruf &amp; Keserasian Revolusioner</h2>
        <p class="lead">Sistem kami menilai dua aspek utama supaya padanan yang dicadangkan bukan sekadar nampak sesuai, tetapi mempunyai asas hidup yang lebih serasi dan beradab.</p>
      </div>

      <div class="science-wrap">

        <!-- TAARUF CARD -->
        <article class="science-card reveal">
          <div class="science-copy">
            <span class="eyebrow">Taaruf</span>
            <h3>Taaruf</h3>
            <p>Membantu pengguna memperkenalkan diri dengan tersusun, sopan dan jelas mengikut adab Islam sebelum proses padanan diteruskan.</p>
            <ul class="title-list">
              <li>Niat &amp; Tujuan Perkahwinan</li>
              <li>Latar Diri &amp; Identiti</li>
              <li>Agama &amp; Amalan Harian</li>
              <li>Akhlak &amp; Adab</li>
              <li>Keluarga &amp; Hubungan</li>
              <li>Pendidikan &amp; Kerjaya</li>
              <li>Kewangan &amp; Nafkah</li>
              <li>Tempat Tinggal &amp; Gaya Hidup</li>
              <li>Komunikasi</li>
              <li>Emosi &amp; Konflik</li>
              <li>Kesihatan &amp; Penjagaan Diri</li>
              <li>Masa Lapang &amp; Minat</li>
              <li>Rutin Harian</li>
              <li>Perancangan Masa Depan</li>
              <li>Anak &amp; Keibubapaan</li>
              <li>Peranan Suami Isteri</li>
              <li>Batas Pergaulan &amp; Media Sosial</li>
              <li>Pengurusan Rumah</li>
              <li>Cabaran Hidup</li>
              <li>Sosial &amp; Komuniti</li>
              <li>Nilai Peribadi</li>
              <li>Proses Taaruf &amp; Istikharah</li>
            </ul>
            <div class="highlight">Taaruf bukan sekadar mengenal nama dan umur. Ia membantu memahami niat, pegangan agama, keluarga, emosi dan persediaan seseorang untuk membina rumah tangga.</div>
          </div>
        </article>

        <!-- KESERASIAN CARD -->
        <article class="science-card reverse reveal">
          <div class="science-copy">
            <span class="eyebrow">Uji Keserasian</span>
            <h3>Uji Keserasian</h3>
            <p>Menilai kecocokan dua individu apabila mula dipadankan untuk melihat potensi kehidupan bersama selepas perkahwinan.</p>
            <ul class="title-list">
              <li>Matlamat Hidup &amp; Nilai</li>
              <li>Agama &amp; Ibadah Bersama</li>
              <li>Komunikasi Pasangan</li>
              <li>Konflik &amp; Memaafkan</li>
              <li>Kewangan Rumahtangga</li>
              <li>Kerjaya &amp; Masa</li>
              <li>Keluarga Mertua</li>
              <li>Anak &amp; Pendidikan</li>
              <li>Gaya Hidup &amp; Rutin</li>
              <li>Rumah &amp; Kerja Domestik</li>
              <li>Emosi &amp; Kasih Sayang</li>
              <li>Sosial, Privasi &amp; Digital</li>
              <li>Keputusan Besar</li>
              <li>Cabaran &amp; Krisis</li>
              <li>Romantik Selepas Nikah</li>
            </ul>
            <div class="highlight">Uji Keserasian membantu melihat bukan sahaja siapa yang nampak sesuai, tetapi siapa yang mampu hidup bersama dengan matang, realistik dan saling melengkapi.</div>
          </div>
        </article>

      </div>
      <p class="science-end reveal">Dua seksyen ini membolehkan Jodohku.my menilai calon pasangan dengan lebih adil, beradab dan mendalam — daripada niat perkahwinan hingga keserasian kehidupan selepas nikah.</p>
    </div>
  </section>

  <!-- ═══════════════════════════════════════
       STEPS / HOW IT WORKS
  ═══════════════════════════════════════ -->
  <section class="section cream" id="cara">
    <div class="container">
      <div class="section-head reveal">
        <span class="eyebrow">Proses Taaruf</span>
        <h2>Bagaimana Ia Berfungsi?</h2>
      </div>
      <div class="steps">

        <article class="step-card reveal">
          <div class="step-img">
            <img src="https://images.pexels.com/photos/8386440/pexels-photo-8386440.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Daftar dan lengkapkan profil">
            <span class="step-number">1</span>
          </div>
          <div class="step-body">
            <h3>Daftar &amp; Lengkapkan Profil</h3>
            <p>Cipta profil lengkap dengan maklumat diri, foto dan latar belakang anda secara peribadi dan selamat.</p>
          </div>
        </article>

        <article class="step-card reveal">
          <div class="step-img">
            <img src="https://images.pexels.com/photos/3184291/pexels-photo-3184291.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Jawab soalan taaruf">
            <span class="step-number">2</span>
          </div>
          <div class="step-body">
            <h3>Jawab Soalan Taaruf &amp; Keserasian</h3>
            <p>Lengkapkan borang taaruf dan uji keserasian untuk membantu sistem memahami diri dan nilai anda dengan mendalam.</p>
          </div>
        </article>

        <article class="step-card reveal">
          <div class="step-img">
            <img src="https://images.pexels.com/photos/3184465/pexels-photo-3184465.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Terima cadangan padanan AI">
            <span class="step-number">3</span>
          </div>
          <div class="step-body">
            <h3>Terima Cadangan Padanan AI</h3>
            <p>AI akan mencadangkan calon yang paling serasi berdasarkan analisis mendalam nilai, akhlak dan keserasian anda.</p>
          </div>
        </article>

        <article class="step-card reveal">
          <div class="step-img">
            <img src="https://images.pexels.com/photos/7014337/pexels-photo-7014337.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Semak profil calon">
            <span class="step-number">4</span>
          </div>
          <div class="step-body">
            <h3>Semak Profil Calon</h3>
            <p>Lihat profil calon yang dicadangkan dan nyatakan minat anda dengan sopan melalui platform yang selamat dan terkawal.</p>
          </div>
        </article>

        <article class="step-card reveal">
          <div class="step-img">
            <img src="https://images.pexels.com/photos/1024993/pexels-photo-1024993.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Taaruf dengan wali">
            <span class="step-number">5</span>
          </div>
          <div class="step-body">
            <h3>Taaruf Dengan Wali</h3>
            <p>Teruskan proses dengan restu dan pemantauan wali yang sesuai mengikut adab Islam.</p>
          </div>
        </article>

      </div>
    </div>
  </section>

  <!-- ═══════════════════════════════════════
       ECOSYSTEM
  ═══════════════════════════════════════ -->
  <section class="section compact cream" id="ekosistem">
    <div class="container">
      <div class="ecosystem reveal">
        <div class="ecosystem-copy">
          <span class="eyebrow">Ekosistem Lengkap</span>
          <h2>Daripada Taaruf Hingga Pelamin</h2>
          <p>Kami bukan sekadar platform taaruf. Kami menemani anda sepanjang perjalanan menuju ke jenjang pelamin dan kehidupan berumah tangga.</p>
          <div class="ecosystem-list">
            <span>Taaruf Beradab</span>
            <span>Bimbingan Perkahwinan</span>
            <span>Persiapan Rumah Tangga</span>
            <span>Sokongan Selepas Nikah</span>
          </div>
          <div style="margin-top:28px;">
            <a class="btn primary btn-daftar-section" href="#daftar">Daftar Sekarang</a>
          </div>
        </div>
        <div class="ecosystem-photo">
          <img src="https://images.pexels.com/photos/1024993/pexels-photo-1024993.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Ekosistem perkahwinan">
        </div>
      </div>
    </div>
  </section>

  <!-- ═══════════════════════════════════════
       FINAL CTA
  ═══════════════════════════════════════ -->
  <section class="section dark compact">
    <div class="container">
      <div class="final-cta reveal">
        <div>
          <h2>Bersedia mencuba pengalaman taaruf yang lebih premium?</h2>
          <p>Daftar sekarang dan dapatkan akses awal ke platform Jodohku.my.</p>
        </div>
        <a class="btn primary btn-daftar-section" href="#daftar">Daftar Sekarang</a>
      </div>
    </div>
  </section>

</main>

  <script>
// ── TRANSLATIONS ──
const i18n = {
  ms: {
    

    validation: {
  name_required: 'Nama penuh diperlukan.',
  name_short: 'Nama penuh terlalu pendek.',
  name_invalid: 'Nama penuh hanya boleh mengandungi huruf sahaja.',
  ic_required: 'No. Kad Pengenalan diperlukan.',
  ic_repeat: 'No. IC tidak sah — corak berulang dikesan.',
  ic_sequential: 'No. IC tidak sah — urutan nombor palsu dikesan.',
  ic_month: 'No. IC tidak sah — bulan lahir tidak wujud (digit 3-4).',
  ic_day: (mm, days) => `No. IC tidak sah — tarikh lahir tidak wujud (digit 5-6, bulan ${mm} hanya ${days} hari).`,
  ic_future: 'No. IC tidak sah — tarikh lahir adalah pada masa hadapan.',
  ic_old: 'No. IC tidak sah — tarikh lahir melebihi 120 tahun.',
  ic_state: (code) => `No. IC tidak sah — kod negeri tidak diiktiraf (digit 7-8: ${code}).`,
  ic_invalid: 'No. IC mesti mengandungi tepat 12 digit angka.',
  phone_required: 'No. telefon diperlukan.',
  phone_invalid: 'Format no. telefon tidak sah. Contoh: 011-12345678',
  email_required: 'Alamat e-mel diperlukan.',
  email_invalid: 'Format e-mel tidak sah. Contoh: nama@email.com',
  photo_required: 'Sila muat naik gambar profil anda.',
  photo_upload_fail_title: 'Ralat Muat Naik Gambar',
  photo_upload_fail_msg: 'Gambar profil anda gagal dimuat naik. Sila cuba gambar lain atau semak sambungan internet anda.',
  terms_required: 'Sila bersetuju dengan Terma & Syarat untuk meneruskan.',
  duplicate_title: 'Pendaftaran Didapati Duplikat',
  duplicate_msg: 'Nombor IC atau e-mel ini telah didaftarkan sebelum ini. Setiap pengguna hanya boleh mendaftar sekali sahaja.',
  error_title: 'Ralat Pendaftaran',
  error_msg: 'Ralat berlaku semasa pendaftaran. Sila cuba sebentar lagi.',
 unexpected_title: 'Ralat Tidak Dijangka',
  processing: 'Memproses...',
  close_btn: 'Tutup',
  upload_success: 'Gambar berjaya dimuat naik',
  image_too_large: 'Saiz fail melebihi 5MB. Sila pilih gambar yang lebih kecil.',
  ic_hint: (gender, dob, age) => `✓ ${gender} · Lahir: ${dob} · Umur: ${age} tahun`,
  gender_male: 'Lelaki',
  gender_female: 'Perempuan',
  upload_change: 'Tukar Gambar',
},
    
    footer_copyright: '&copy; 2025 <strong>Jodohku.my</strong>. Hak Cipta Terpelihara.',
footer_initiative: 'Sebuah Inisiatif',
footer_sub: 'Jodohku.my adalah jenama di bawah portfolio <strong style="color:#555;">Noble Synergy Ventures</strong>',
footer_tagline: 'Noble Synergy Ventures &nbsp;&#9670;&nbsp; Islamic Marriage Platform',
    footer_privacy_notice: '<strong style="color:#777;">Jodohku.my</strong> komited melindungi data peribadi pengguna. Data seperti nama penuh, nombor IC, nombor telefon dan maklumat profil dikumpul hanya untuk tujuan pendaftaran, pengesahan identiti, keselamatan komuniti, pencegahan penipuan dan penyediaan perkhidmatan. Maklumat IC tidak dipaparkan kepada pengguna lain. Dengan menggunakan Jodohku.my, anda bersetuju dengan <a href="#" onclick="openModal(\'privacyModal\');return false;" style="color:rgba(255,215,0,0.5);text-decoration:none;border-bottom:1px solid rgba(255,215,0,0.2);">Polisi Privasi &amp; Notis Perlindungan Data Peribadi</a> kami.',
    dir: 'ltr',
    nav_cta: 'Daftar Sekarang',
    nav_platform: 'Platform', nav_kelebihan: 'Kelebihan', nav_perbandingan: 'Perbandingan',
    hero_badge: 'Platform Ultra-Premium Perkahwinan Islam',
    hero_title: 'Revolusi <span class="gold">Saintifik</span><br>Padanan Jodoh <span class="gold">Berkualiti</span>',
    hero_subtitle: 'AI Terdepan + 115 Soalan Psikologi = Jodoh Seumur Hidup',
    hero_desc: 'Jodohku.my menggantikan dating toxic dengan teknologi padanan yang dibangunkan khusus untuk budaya Muslim Malaysia — di mana setiap padanan berpotensi menjadi ikatan yang diberkati Allah.',
    btn_platform: 'Lihat Platform', btn_mengapa: 'Mengapa Berbeza?',
    form_title: 'Akses Eksklusif',
    form_subtitle: 'Jadi antara 500 pengguna terawal yang mendapat akses beta kepada platform revolusioner ini',
    label_nama: 'Nama Penuh', label_ic: 'No. Kad Pengenalan', label_tel: 'No. Telefon', label_email: 'Alamat E-mel', label_gambar: 'Gambar Profil',
    upload_text: 'Pilih gambar profil anda', upload_size: 'Maksimum 5MB',
    checkbox_text: 'Saya bersetuju dengan ', terms_link: 'Terma & Syarat', and_text: ' dan ', privacy_link: 'Dasar Privasi', checkbox_suffix: ' Jodohku.my yang mematuhi PDPA 2010',
    btn_submit: 'Hantar Permohonan Beta Access',
    success_title: 'Pendaftaran Berjaya!',
    success_msg: 'Tahniah atas tindakan awal anda! Anda telah berjaya mendaftar untuk beta access Jodohku.my. Kami akan menghubungi anda setelah aplikasi jodohku.my berjaya didaftarkan di Playstore dan Appstore. Terima kasih -Admin-',
    daftar_btn: 'Daftar Sekarang',
    // SLIDER
    slider_label: 'Galeri Platform', slider_title: 'Pengalaman <span class="gold">Jodohku.my</span>',
    slider_desc: '8 aspek utama platform yang mengubah cara Muslim Malaysia mencari pasangan hidup',
    slides: [
      { title: 'Padanan Berdasarkan Nilai Islam', desc: 'AI menganalisis keserasian agama, akhlak dan nilai hidup' },
      { title: 'Teknologi AI Terdepan', desc: '115 soalan psikologi dianalisis menggunakan machine learning' },
      { title: 'Keselamatan Maksimum', desc: 'Identiti dilindungi dengan kod unik sehingga kedua-dua pihak bersetuju' },
      { title: 'Sistem Wali Digital', desc: 'Platform pertama yang mewajibkan penglibatan wali dalam proses ta\'aruf' },
      { title: 'Komuniti Premium Muslim', desc: 'Eksklusif untuk Muslim profesional yang serius mencari jodoh' },
      { title: 'Ekosistem Perkahwinan', desc: 'Dari padanan hingga pelamin — semua dalam satu platform' },
      { title: 'Analitik Mendalam', desc: 'Laporan keserasian terperinci berdasarkan 14 dimensi personaliti' },
      { title: 'Aplikasi Mobile Premium', desc: 'Interface yang elegant dan mudah digunakan untuk iOS dan Android' },
     
    ],
    // PILLARS
    pillars_label: '4 Teras Utama', pillars_title: 'Senibina <span class="gold">Platform</span>',
    pillars_desc: 'Empat tonggak kukuh yang memastikan setiap aspek platform mematuhi nilai Islam dan memberikan pengalaman terbaik',
    pillars: [
      { num: 'Teras 1', title: 'Kesucian Agama', desc: 'Menghapuskan ruang zina, memelihara adab, dan menstrukturkan ta\'aruf berlandaskan syariah.' },
      { num: 'Teras 2', title: 'Perlindungan Sosial', desc: 'Pemerkasaan Mod Wali, perlindungan identiti dan pembanterasan scam romantik.' },
      { num: 'Teras 3', title: 'Pemerkasaan Ekonomi', desc: 'Rantaian nilai perkahwinan yang menyokong vendor PKS Muslim bersijil halal.' },
      { num: 'Teras 4', title: 'Teknologi & Privasi', desc: 'AI real-time filtering, kod identiti rahsia dan perlindungan data PDPA 2010.' },
    ],
    // USP
    usp_label: 'Kelebihan Unik', usp_title: 'Mengapa <span class="gold">Tiada Tandingan</span>',
    usp_desc: 'Empat inovasi revolusioner yang memisahkan Jodohku.my daripada setiap platform perjodohan di dunia',
    usps: [
      { title: 'Identiti Kod Rahsia', desc: 'Nama sebenar disembunyikan dengan kod unik (JDK-2025-XX) sehingga kedua-dua pihak bersetuju bertemu.' },
      { title: 'AI Padanan Saintifik', desc: '115 soalan psikologi dianalisis AI untuk padanan 847% lebih tepat berbanding swipe-based apps.' },
      { title: 'Real-Time Content Shield', desc: 'AI menyekat kandungan haram, pertukaran nombor telefon dan ajakan tidak sesuai dalam 0.3 saat.' },
      { title: 'Ekosistem Komprehensif', desc: 'Satu-satunya platform dari padanan hingga pelamin — wedding planning, vendor booking, e-Nikah.' },
    ],
    // COMPARISON
    cmp_label: 'Analisis Mendalam', cmp_title: 'Perbandingan <span class="gold">Teliti</span>',
    cmp_heading: 'Memisahkan Standard: <span class="highlight">Tiada Tandingan</span>',
    cmp_col1: 'Kriteria Penting', cmp_col2: 'Tinder / Bumble', cmp_col3: 'MuzMatch', cmp_col4: 'Jodohku.my',
    cmp_rows: [
      ['Penglibatan Wali Mandatory','✗ Tiada','✗ Optional','✓ Diwajibkan'],
      ['Verifikasi Identiti Penuh','✗ Selfie sahaja','✗ Selfie sahaja','✓ MyKad + Biometrik'],
      ['AI Content Filtering','✗ Manual report','✗ Manual report','✓ 0.3 saat'],
      ['Psikologi Matching','✗ Appearance','✗ Basic','✓ 115 soalan'],
      ['Wedding Ecosystem','✗ Berhenti','✗ Berhenti','✓ Hingga pelamin'],
      ['Shariah Compliance','✗ Tiada','✗ Self-declared','✓ Board certified'],
    ],
    // QUESTIONS
    q_label: 'Sains Padanan', q_title: 'Sistem <span class="gold">115 Soalan</span> Revolusioner',
    q_desc: 'Formula paling canggih untuk menganalisis keserasian berdasarkan 14 dimensi kepribadian yang dibangunkan khusus untuk Muslim Malaysia',
    q_extra: '+ 6 Dimensi Tambahan: Career Ambition (5), Mental Health (5), Marriage Readiness (5), Social Behavior (5), Long-term Compatibility (5), Communication Style (5)',
    dimensions: [
      { name: 'Personality Core', count: '10 Soalan Mendalam', desc: 'Cara berfikir, bertindak dan membawa diri dalam situasi kehidupan harian.' },
      { name: 'Lifestyle Preferences', count: '10 Soalan Terperinci', desc: 'Rutin harian, gaya hidup, minat dan cara menghabiskan masa lapang.' },
      { name: 'Financial Mindset', count: '10 Soalan Kritis', desc: 'Cara mengurus kewangan, komitmen dan matlamat hidup jangka panjang.' },
      { name: 'Religious Values', count: '10 Soalan Spiritual', desc: 'Tahap ketaqwaan, nilai agama dan jangkaan spiritual terhadap pasangan.' },
      { name: 'Love Language', count: '10 Soalan Emosi', desc: 'Cara menyatakan dan menerima kasih sayang dalam hubungan.' },
      { name: 'Emotional Intelligence', count: '10 Soalan Psikologi', desc: 'Empati, kawalan emosi dan kemampuan memahami perasaan orang lain.' },
      { name: 'Family Dynamics', count: '10 Soalan Keluarga', desc: 'Hubungan dengan keluarga, pengaruh ibubapa dan nilai kekeluargaan.' },
      { name: 'Conflict Resolution', count: '10 Soalan Konflik', desc: 'Cara menangani pergaduhan, ego dan mencari penyelesaian bersama.' },
      { name: 'Attachment Style', count: '10 Soalan Bonding', desc: 'Pola kelekatan emosi, keperluan keamanan dan intimacy preferences.' },
    ],
    // TAARUF
    taaruf_label: 'Perjalanan Suci', taaruf_title: 'Proses <span class="gold">Ta\'aruf Digital</span>',
    taaruf_desc: 'Setiap langkah direka untuk memastikan proses perkenalan yang selamat, terhormat dan patuh syariah sepenuhnya',
    taaruf_footer: 'Setiap langkah dipandu oleh tim kaunselor berpengalaman dan mematuhi garis panduan syariah yang ketat untuk memastikan proses ta\'aruf yang berkah.',
    taaruf_steps: [
      { title: 'AI Smart Matching', desc: 'Algoritma menganalisis 115 jawapan anda dan mencari padanan terbaik berdasarkan keserasian mendalam.' },
      { title: 'Persetujuan Wali', desc: 'Wali pihak perempuan menerima notifikasi dan menilai profil calon untuk memberikan kebenaran awal.' },
      { title: 'Komunikasi Terlindung', desc: 'Perbualan dalam platform dengan AI monitoring 24/7 untuk memastikan adab Islam terpelihara.' },
    ],
    // WEDDING
    wed_label: 'Ekosistem Komprehensif', wed_title: 'Spektrum <span class="gold">Ekosistem Perkahwinan</span>',
    wed_heading: 'Dari Padanan Hingga Pelamin — Semua Dalam Satu Platform',
    wed_desc: '<strong style="color:var(--gold);font-size:18px;">Spektrum Ekosistem Perkahwinan</strong> adalah rangkaian lengkap vendor halal, pakej majlis, perkhidmatan fotografi, catering dan wedding planning yang terintegrasi dengan platform. Setiap vendor telah melalui proses audit ketat untuk memastikan kualiti premium dan pematuhan syariah. Sistem booking digital membolehkan pasangan merancang majlis impian mereka dengan mudah dan telus.',
    // MODALS
    terms_title: 'Terma & Syarat', 
    terms_meta: 'Berkuat kuasa: 1 Januari 2025 &nbsp;|&nbsp; Versi: 2.1 &nbsp;|&nbsp; Bahasa: Bahasa Malaysia',
   
    close_btn: '✕',
    terms_sections: [
      { h: '1. Penerimaan Terma', p: 'Dengan mengakses atau menggunakan platform Jodohku.my ("Platform"), anda bersetuju untuk terikat dengan Terma & Syarat ini. Platform ini diuruskan oleh <strong>Noble Synergy Ventures</strong> di bawah undang-undang Malaysia.' },
      { h: '2. Kelayakan Pengguna', p: '<ol><li>Anda mesti seorang Muslim atau Muslimah yang telah mencapai umur 18 tahun.</li><li>Anda mesti warganegara Malaysia atau pemastautin tetap yang sah.</li><li>Anda mesti belum berkahwin atau telah bercerai mengikut undang-undang yang sah.</li><li>Semua maklumat yang diberikan mesti tepat, terkini dan benar.</li></ol>' },
      { h: '3. Kod Etika', p: 'Pengguna wajib mematuhi adab Islam dalam semua komunikasi. Kandungan lucah, pertukaran maklumat peribadi di luar platform, dan aktiviti penipuan adalah <strong>dilarang sama sekali</strong>.' },
      { h: '4. Sistem Wali', p: 'Penglibatan Wali adalah <strong>diwajibkan</strong> bagi setiap pengguna wanita sebelum sebarang komunikasi dibenarkan.' },
      { h: '5. Hubungi Kami', p: '<strong>Noble Synergy Ventures</strong><br>E-mel: legal@jodohku.my' },
  ],
    privacy_title: 'Dasar Privasi & Notis Perlindungan Data Peribadi',
    privacy_meta: 'Berkuat kuasa: 01/05/2026 &nbsp;|&nbsp; Mematuhi: PDPA 2010 (Malaysia) &nbsp;|&nbsp; Versi: 3.0',
    privacy_sections: [
      { h: '1. Pengenalan', p: 'Polisi Privasi ini menerangkan bagaimana Jodohku.my mengumpul, menggunakan, menyimpan, melindungi dan mendedahkan data peribadi pengguna selaras dengan PDPA 2010.' },
      { h: '2. Data Peribadi Yang Kami Kumpul', p: '<ul><li><strong>Maklumat identiti:</strong> nama penuh, nombor kad pengenalan/MyKad, tarikh lahir, umur, jantina, status perkahwinan.</li><li><strong>Maklumat hubungan:</strong> nombor telefon, alamat e-mel, negeri/daerah.</li><li><strong>Maklumat profil:</strong> gambar profil, biodata, minat, kriteria pasangan.</li><li><strong>Maklumat teknikal:</strong> alamat IP, jenis peranti, pelayar, cookies.</li></ul>' },
      { h: '3. Kenapa Kami Memerlukan Nama Penuh dan Nombor IC', p: '<ul><li><strong>Pengesahan identiti</strong></li><li><strong>Pengesahan umur</strong></li><li><strong>Pencegahan penipuan dan scam</strong></li><li><strong>Keselamatan komuniti</strong></li><li><strong>Pematuhan undang-undang</strong></li></ul><p><em>Nombor IC anda tidak akan dipaparkan kepada pengguna lain.</em></p>' },
      { h: '4. Tujuan Pemprosesan Data', p: '<ol><li>Membuka dan mengurus akaun pengguna.</li><li>Mengesahkan identiti dan umur.</li><li>Menyediakan fungsi padanan jodoh.</li><li>Menghubungi anda berkaitan akaun dan perkhidmatan.</li><li>Mencegah penipuan dan penyalahgunaan platform.</li><li>Mematuhi kehendak undang-undang.</li></ol>' },
      { h: '5. Asas Persetujuan', p: 'Dengan menghantar data peribadi anda, anda memberi persetujuan kepada kami untuk mengumpul, menyimpan dan memproses data tersebut.' },
      { h: '6. Pendedahan Kepada Pihak Ketiga', p: '<ul><li>Penyedia hosting dan cloud</li><li>Penyedia pembayaran</li><li>Pasukan sokongan Jodohku</li><li>Pihak berkuasa jika diwajibkan undang-undang</li></ul>' },
      { h: '7. Keselamatan Data', p: 'Kami mengambil langkah keselamatan yang munasabah termasuk akses terhad, enkripsi dan pemantauan aktiviti mencurigakan.' },
      { h: '8. Tempoh Penyimpanan Data', p: 'Data disimpan selama mana diperlukan untuk tujuan perkhidmatan, keselamatan dan pematuhan undang-undang.' },
      { h: '9. Hak Anda', p: '<ol><li>Meminta akses kepada data anda</li><li>Membetulkan data yang tidak tepat</li><li>Menarik balik persetujuan</li><li>Meminta pemadaman akaun</li></ol>' },
      { h: '10. Ketepatan Maklumat', p: 'Anda bertanggungjawab memastikan maklumat yang diberikan adalah benar dan terkini.' },
      { h: '11. Data Yang Dipaparkan Kepada Pengguna Lain', p: 'Nombor IC, nombor telefon dan e-mel <strong>tidak akan dipaparkan</strong> kepada pengguna lain.' },
      { h: '12. Cookies', p: 'Kami menggunakan cookies untuk fungsi log masuk, tetapan pengguna dan analisis penggunaan.' },
      { h: '13. Pautan Pihak Ketiga', p: 'Kami tidak bertanggungjawab terhadap polisi privasi laman pihak ketiga.' },
      { h: '14. Pindaan Polisi', p: 'Polisi ini boleh dikemas kini dari semasa ke semasa. Penggunaan berterusan dianggap persetujuan kepada polisi terkini.' },
      { h: '15. Hubungi Kami', p: '<strong>Jodohku.my</strong><br>E-mel: <strong>inquiry@jodohku.my</strong><br><a href="https://www.jodohku.my" style="color:var(--gold,#FFD700);">https://www.jodohku.my</a>' },
    ],
  },

  en: {

    validation: {
  name_required: 'Full name is required.',
  name_short: 'Full name is too short.',
  name_invalid: 'Full name may only contain letters.',
  ic_required: 'IC Number is required.',
  ic_repeat: 'IC is invalid — repeated pattern detected.',
  ic_sequential: 'IC is invalid — sequential fake number detected.',
  ic_month: 'IC is invalid — birth month does not exist (digits 3-4).',
  ic_day: (mm, days) => `IC is invalid — birth date does not exist (digits 5-6, month ${mm} only has ${days} days).`,
  ic_future: 'IC is invalid — date of birth is in the future.',
  ic_old: 'IC is invalid — date of birth exceeds 120 years.',
  ic_state: (code) => `IC is invalid — state code not recognised (digits 7-8: ${code}).`,
  ic_invalid: 'IC must contain exactly 12 numeric digits.',
  phone_required: 'Phone number is required.',
  phone_invalid: 'Invalid phone number format. Example: 011-12345678',
  email_required: 'Email address is required.',
  email_invalid: 'Invalid email format. Example: name@email.com',
  photo_required: 'Please upload your profile picture.',
  photo_upload_fail_title: 'Image Upload Error',
  photo_upload_fail_msg: 'Your profile picture failed to upload. Please try another image or check your internet connection.',
  terms_required: 'Please agree to the Terms & Conditions to proceed.',
  duplicate_title: 'Duplicate Registration Found',
  duplicate_msg: 'This IC number or email has already been registered. Each user may only register once.',
  error_title: 'Registration Error',
  error_msg: 'An error occurred during registration. Please try again shortly.',
 unexpected_title: 'Unexpected Error',
  processing: 'Processing...',
  close_btn: 'Close',
  upload_success: 'Image uploaded successfully',
  image_too_large: 'File size exceeds 5MB. Please choose a smaller image.',
  ic_hint: (gender, dob, age) => `✓ ${gender} · DOB: ${dob} · Age: ${age}`,
  gender_male: 'Male',
  gender_female: 'Female',
  upload_change: 'Change Photo',
},
    
    footer_copyright: '&copy; 2025 <strong>Jodohku.my</strong>. All Rights Reserved.',
footer_initiative: 'An Initiative by',
footer_sub: 'Jodohku.my is a brand under the portfolio of <strong style="color:#555;">Noble Synergy Ventures</strong>',
footer_tagline: 'Noble Synergy Ventures &nbsp;&#9670;&nbsp; Islamic Marriage Platform',
    footer_privacy_notice: '<strong style="color:#777;">Jodohku.my</strong> is committed to protecting your personal data. Information such as full name, IC number, phone number and profile details are collected solely for registration, identity verification, community safety, fraud prevention and service delivery. Your IC number is not displayed to other users. By using Jodohku.my, you agree to our <a href="#" onclick="openModal(\'privacyModal\');return false;" style="color:rgba(255,215,0,0.5);text-decoration:none;border-bottom:1px solid rgba(255,215,0,0.2);">Privacy Policy &amp; Personal Data Protection Notice</a>.',
    dir: 'ltr',
    nav_cta: 'Register Now',
    nav_platform: 'Platform', nav_kelebihan: 'Features', nav_perbandingan: 'Comparison',
    hero_badge: 'Ultra-Premium Islamic Marriage Platform',
    hero_title: 'A Scientific <span class="gold">Revolution</span><br>in Quality <span class="gold">Matchmaking</span>',
    hero_subtitle: 'Advanced AI + 115 Psychology Questions = A Match for Life',
    hero_desc: 'Jodohku.my replaces toxic dating with matching technology built specifically for Malaysian Muslim culture — where every match has the potential to become a bond blessed by Allah.',
    btn_platform: 'View Platform', btn_mengapa: 'Why Different?',
    form_title: 'Exclusive Access',
    form_subtitle: 'Be among the first 500 users to get beta access to this revolutionary platform',
    label_nama: 'Full Name', label_ic: 'IC Number', label_tel: 'Phone Number', label_email: 'Email Address', label_gambar: 'Profile Picture',
    upload_text: 'Choose your profile picture', upload_size: 'Maximum 5MB',
    checkbox_text: 'I agree to the ', terms_link: 'Terms & Conditions', and_text: ' and ', privacy_link: 'Privacy Policy', checkbox_suffix: ' of Jodohku.my compliant with PDPA 2010',
    btn_submit: 'Submit Beta Access Application',
    success_title: 'Registration Successful!',
    success_msg: 'Congratulations on your early action! You have successfully registered for Jodohku.my beta access. We will contact you once the app is live on Playstore and Appstore. Thank you -Admin-',
    daftar_btn: 'Register Now',
    slider_label: 'Platform Gallery', slider_title: 'The <span class="gold">Jodohku.my</span> Experience',
    slider_desc: '8 key aspects of the platform transforming how Malaysian Muslims find their life partner',
    slides: [
      { title: 'Matching Based on Islamic Values', desc: 'AI analyses religious compatibility, character and life values' },
      { title: 'Leading AI Technology', desc: '115 psychology questions analysed using machine learning' },
      { title: 'Maximum Security', desc: 'Identity protected with a unique code until both parties agree to meet' },
      { title: 'Digital Wali System', desc: 'The first platform to make guardian involvement mandatory in ta\'aruf' },
      { title: 'Premium Muslim Community', desc: 'Exclusive for serious Muslim professionals seeking a life partner' },
      { title: 'Wedding Ecosystem', desc: 'From matching to the wedding ceremony — all in one platform' },
      { title: 'In-Depth Analytics', desc: 'Detailed compatibility report based on 14 personality dimensions' },
      { title: 'Premium Mobile App', desc: 'Elegant and easy-to-use interface for iOS and Android' },
      
    ],
    pillars_label: '4 Core Pillars', pillars_title: 'Platform <span class="gold">Architecture</span>',
    pillars_desc: 'Four strong pillars ensuring every aspect of the platform upholds Islamic values and delivers the best experience',
    pillars: [
      { num: 'Pillar 1', title: 'Religious Purity', desc: 'Eliminating spaces for sin, preserving conduct, and structuring ta\'aruf based on Shariah.' },
      { num: 'Pillar 2', title: 'Social Protection', desc: 'Empowering the Wali Mode, identity protection and combating romantic scams.' },
      { num: 'Pillar 3', title: 'Economic Empowerment', desc: 'A wedding value chain supporting halal-certified Muslim SME vendors.' },
      { num: 'Pillar 4', title: 'Technology & Privacy', desc: 'AI real-time filtering, secret identity codes and PDPA 2010 data protection.' },
    ],
    usp_label: 'Unique Advantages', usp_title: 'Why <span class="gold">Unrivalled</span>',
    usp_desc: 'Four revolutionary innovations that set Jodohku.my apart from every matchmaking platform in the world',
    usps: [
      { title: 'Secret Identity Code', desc: 'Real names are hidden with a unique code (JDK-2025-XX) until both parties agree to meet.' },
      { title: 'Scientific AI Matching', desc: '115 psychology questions analysed by AI for matches 847% more accurate than swipe-based apps.' },
      { title: 'Real-Time Content Shield', desc: 'AI blocks prohibited content, phone number exchanges and inappropriate requests in 0.3 seconds.' },
      { title: 'Comprehensive Ecosystem', desc: 'The only platform from matching to the aisle — wedding planning, vendor booking, e-Nikah.' },
    ],
    cmp_label: 'In-Depth Analysis', cmp_title: 'A <span class="gold">Detailed</span> Comparison',
    cmp_heading: 'Setting the Standard: <span class="highlight">Unrivalled</span>',
    cmp_col1: 'Key Criteria', cmp_col2: 'Tinder / Bumble', cmp_col3: 'MuzMatch', cmp_col4: 'Jodohku.my',
    cmp_rows: [
      ['Mandatory Guardian Involvement','✗ None','✗ Optional','✓ Mandatory'],
      ['Full Identity Verification','✗ Selfie only','✗ Selfie only','✓ MyKad + Biometric'],
      ['AI Content Filtering','✗ Manual report','✗ Manual report','✓ 0.3 seconds'],
      ['Psychology Matching','✗ Appearance','✗ Basic','✓ 115 questions'],
      ['Wedding Ecosystem','✗ Stops at matching','✗ Stops at matching','✓ Until the aisle'],
      ['Shariah Compliance','✗ None','✗ Self-declared','✓ Board certified'],
    ],
    q_label: 'The Science of Matching', q_title: 'The Revolutionary <span class="gold">115-Question</span> System',
    q_desc: 'The most sophisticated formula for analysing compatibility across 14 personality dimensions, developed specifically for Malaysian Muslims',
    q_extra: '+ 6 Additional Dimensions: Career Ambition (5), Mental Health (5), Marriage Readiness (5), Social Behavior (5), Long-term Compatibility (5), Communication Style (5)',
    dimensions: [
      { name: 'Personality Core', count: '10 In-Depth Questions', desc: 'How you think, act and carry yourself in everyday life situations.' },
      { name: 'Lifestyle Preferences', count: '10 Detailed Questions', desc: 'Daily routines, lifestyle, interests and how you spend your free time.' },
      { name: 'Financial Mindset', count: '10 Critical Questions', desc: 'How you manage finances, commitments and long-term life goals.' },
      { name: 'Religious Values', count: '10 Spiritual Questions', desc: 'Level of piety, religious values and spiritual expectations of a partner.' },
      { name: 'Love Language', count: '10 Emotional Questions', desc: 'How you express and receive love in a relationship.' },
      { name: 'Emotional Intelligence', count: '10 Psychology Questions', desc: 'Empathy, emotional control and the ability to understand others\' feelings.' },
      { name: 'Family Dynamics', count: '10 Family Questions', desc: 'Relationship with family, parental influence and family values.' },
      { name: 'Conflict Resolution', count: '10 Conflict Questions', desc: 'How you handle arguments, ego and find solutions together.' },
      { name: 'Attachment Style', count: '10 Bonding Questions', desc: 'Emotional attachment patterns, need for security and intimacy preferences.' },
    ],
    taaruf_label: 'A Sacred Journey', taaruf_title: 'The <span class="gold">Digital Ta\'aruf</span> Process',
    taaruf_desc: 'Every step is designed to ensure a safe, dignified and fully Shariah-compliant introduction process',
    taaruf_footer: 'Every step is guided by a team of experienced counsellors and adheres to strict Shariah guidelines to ensure a blessed ta\'aruf process.',
    taaruf_steps: [
      { title: 'AI Smart Matching', desc: 'The algorithm analyses your 115 answers and finds the best match based on deep compatibility.' },
      { title: 'Guardian Approval', desc: 'The female guardian receives a notification and evaluates the candidate\'s profile to grant initial consent.' },
      { title: 'Protected Communication', desc: 'Conversations within the platform with 24/7 AI monitoring to ensure Islamic conduct is maintained.' },
    ],
    wed_label: 'Comprehensive Ecosystem', wed_title: 'The <span class="gold">Wedding Ecosystem</span> Spectrum',
    wed_heading: 'From Matching to the Aisle — All in One Platform',
    wed_desc: '<strong style="color:var(--gold);font-size:18px;">The Wedding Ecosystem Spectrum</strong> is a complete network of halal vendors, event packages, photography services, catering and wedding planning integrated into the platform. Every vendor undergoes a rigorous audit to ensure premium quality and Shariah compliance. The digital booking system allows couples to plan their dream event easily and transparently.',
    terms_title: 'Terms & Conditions',
    terms_meta: 'Effective: 1 January 2025 &nbsp;|&nbsp; Version: 2.1 &nbsp;|&nbsp; Language: English',
   
    close_btn: '✕',
    terms_sections: [
      { h: '1. Acceptance of Terms', p: 'By accessing or using the Jodohku.my platform ("Platform"), you agree to be bound by these Terms & Conditions. This platform is operated by <strong>Noble Synergy Ventures</strong> under the laws of Malaysia.' },
      { h: '2. User Eligibility', p: '<ol><li>You must be a Muslim who has reached the age of 18.</li><li>You must be a Malaysian citizen or a valid permanent resident.</li><li>You must be unmarried or lawfully divorced.</li><li>All information provided must be accurate, current and truthful.</li></ol>' },
      { h: '3. Code of Conduct', p: 'Users must observe Islamic etiquette in all communications. Obscene content, exchange of personal information outside the platform, and fraudulent activities are <strong>strictly prohibited</strong>.' },
      { h: '4. Guardian System', p: 'Guardian involvement is <strong>mandatory</strong> for every female user before any communication is permitted.' },
      { h: '5. Contact Us', p: '<strong>Noble Synergy Ventures</strong><br>Email: legal@jodohku.my' },
    ],
    privacy_title: 'Privacy Policy & Personal Data Protection Notice',
    privacy_meta: 'Effective: 01/05/2026 &nbsp;|&nbsp; Compliant with: PDPA 2010 (Malaysia) &nbsp;|&nbsp; Version: 3.0',
    privacy_sections: [
      { h: '1. Introduction', p: 'This Privacy Policy explains how Jodohku.my collects, uses, stores, protects and discloses user personal data in accordance with PDPA 2010.' },
      { h: '2. Personal Data We Collect', p: '<ul><li><strong>Identity:</strong> full name, IC/MyKad number, date of birth, age, gender, marital status.</li><li><strong>Contact:</strong> phone number, email, state/district.</li><li><strong>Profile:</strong> profile photo, bio, interests, partner criteria.</li><li><strong>Technical:</strong> IP address, device type, browser, cookies.</li></ul>' },
      { h: '3. Why We Need Your Full Name and IC Number', p: '<ul><li><strong>Identity verification</strong></li><li><strong>Age verification</strong></li><li><strong>Fraud and scam prevention</strong></li><li><strong>Community safety</strong></li><li><strong>Legal compliance</strong></li></ul><p><em>Your IC number will not be displayed to other users.</em></p>' },
      { h: '4. Purpose of Data Processing', p: '<ol><li>Creating and managing user accounts.</li><li>Verifying identity and age.</li><li>Providing matchmaking functions.</li><li>Contacting you about your account and services.</li><li>Preventing fraud and platform abuse.</li><li>Complying with legal requirements.</li></ol>' },
      { h: '5. Basis of Consent', p: 'By submitting your personal data, you consent to us collecting, storing and processing it for the stated purposes.' },
      { h: '6. Disclosure to Third Parties', p: '<ul><li>Hosting and cloud providers</li><li>Payment providers</li><li>Jodohku support team</li><li>Authorities when required by law</li></ul>' },
      { h: '7. Data Security', p: 'We take reasonable security measures including restricted access, encryption and monitoring of suspicious activity.' },
      { h: '8. Data Retention', p: 'Data is retained as long as necessary for service, security and legal compliance purposes.' },
      { h: '9. Your Rights', p: '<ol><li>Request access to your data</li><li>Correct inaccurate data</li><li>Withdraw consent</li><li>Request account deletion</li></ol>' },
      { h: '10. Accuracy of Information', p: 'You are responsible for ensuring the information you provide is accurate and up to date.' },
      { h: '11. Data Displayed to Other Users', p: 'Your IC number, phone number and email <strong>will not be displayed</strong> to other users.' },
      { h: '12. Cookies', p: 'We use cookies for login functions, user settings and usage analytics.' },
      { h: '13. Third-Party Links', p: 'We are not responsible for the privacy policies of third-party websites.' },
      { h: '14. Policy Amendments', p: 'This policy may be updated from time to time. Continued use constitutes acceptance of the updated policy.' },
      { h: '15. Contact Us', p: '<strong>Jodohku.my</strong><br>Email: <strong>inquiry@jodohku.my</strong><br><a href="https://www.jodohku.my" style="color:var(--gold,#FFD700);">https://www.jodohku.my</a>' },
    ],
  },

  ar: {

    validation: {
  name_required: 'الاسم الكامل مطلوب.',
  name_short: 'الاسم الكامل قصير جداً.',
  name_invalid: 'يجب أن يحتوي الاسم الكامل على أحرف فقط.',
  ic_required: 'رقم بطاقة الهوية مطلوب.',
  ic_repeat: 'رقم الهوية غير صالح — تم اكتشاف نمط متكرر.',
  ic_sequential: 'رقم الهوية غير صالح — تم اكتشاف تسلسل رقمي مزيف.',
  ic_month: 'رقم الهوية غير صالح — شهر الميلاد غير موجود (الأرقام 3-4).',
  ic_day: (mm, days) => `رقم الهوية غير صالح — تاريخ الميلاد غير موجود (الأرقام 5-6، الشهر ${mm} يحتوي على ${days} يوماً فقط).`,
  ic_future: 'رقم الهوية غير صالح — تاريخ الميلاد في المستقبل.',
  ic_old: 'رقم الهوية غير صالح — تاريخ الميلاد يتجاوز 120 عاماً.',
  ic_state: (code) => `رقم الهوية غير صالح — رمز الولاية غير معترف به (الأرقام 7-8: ${code}).`,
  ic_invalid: 'يجب أن يحتوي رقم الهوية على 12 رقماً بالضبط.',
  phone_required: 'رقم الهاتف مطلوب.',
  phone_invalid: 'صيغة رقم الهاتف غير صالحة. مثال: 011-12345678',
  email_required: 'البريد الإلكتروني مطلوب.',
  email_invalid: 'صيغة البريد الإلكتروني غير صالحة. مثال: name@email.com',
  photo_required: 'يرجى رفع صورة الملف الشخصي.',
  photo_upload_fail_title: 'خطأ في رفع الصورة',
  photo_upload_fail_msg: 'فشل رفع صورة ملفك الشخصي. يرجى تجربة صورة أخرى أو التحقق من اتصالك بالإنترنت.',
  terms_required: 'يرجى الموافقة على الشروط والأحكام للمتابعة.',
  duplicate_title: 'تم اكتشاف تسجيل مكرر',
  duplicate_msg: 'رقم الهوية أو البريد الإلكتروني هذا مسجل بالفعل. يُسمح لكل مستخدم بالتسجيل مرة واحدة فقط.',
  error_title: 'خطأ في التسجيل',
  error_msg: 'حدث خطأ أثناء التسجيل. يرجى المحاولة مرة أخرى.',
unexpected_title: 'خطأ غير متوقع',
  processing: 'جارٍ المعالجة...',
  close_btn: 'إغلاق',
  upload_success: 'تم رفع الصورة بنجاح',
  image_too_large: 'حجم الملف يتجاوز 5 ميغابايت. يرجى اختيار صورة أصغر.',
  ic_hint: (gender, dob, age) => `✓ ${gender} · تاريخ الميلاد: ${dob} · العمر: ${age}`,
  gender_male: 'ذكر',
  gender_female: 'أنثى',
  upload_change: 'تغيير الصورة',
},
    footer_copyright: '&copy; 2025 <strong>Jodohku.my</strong>. جميع الحقوق محفوظة.',
footer_initiative: 'مبادرة من',
footer_sub: 'Jodohku.my علامة تجارية ضمن محفظة <strong style="color:#555;">Noble Synergy Ventures</strong>',
footer_tagline: 'Noble Synergy Ventures &nbsp;&#9670;&nbsp; Islamic Marriage Platform',
    footer_privacy_notice: '<strong style="color:#777;">Jodohku.my</strong> ملتزمة بحماية بياناتك الشخصية. يتم جمع المعلومات مثل الاسم الكامل ورقم الهوية ورقم الهاتف وتفاصيل الملف الشخصي فقط لأغراض التسجيل والتحقق من الهوية وسلامة المجتمع ومنع الاحتيال وتقديم الخدمات. لن يتم عرض رقم هويتك للمستخدمين الآخرين. باستخدامك Jodohku.my، فإنك توافق على <a href="#" onclick="openModal(\'privacyModal\');return false;" style="color:rgba(255,215,0,0.5);text-decoration:none;border-bottom:1px solid rgba(255,215,0,0.2);">سياسة الخصوصية وإشعار حماية البيانات الشخصية</a>.',
    dir: 'rtl',
    nav_cta: 'سجل الآن',
    nav_platform: 'المنصة', nav_kelebihan: 'المميزات', nav_perbandingan: 'المقارنة',
    hero_badge: 'منصة الزواج الإسلامي الفاخرة',
    hero_title: 'ثورة <span class="gold">علمية</span><br>في تطابق <span class="gold">عالي الجودة</span>',
    hero_subtitle: 'ذكاء اصطناعي متقدم + ١١٥ سؤالاً نفسياً = شريك العمر',
    hero_desc: 'تستبدل Jodohku.my المواعدة السامة بتقنية تطابق مبنية خصيصاً لثقافة المسلمين الماليزيين — حيث كل تطابق يحمل إمكانية أن يصبح رابطة يباركها الله.',
    btn_platform: 'عرض المنصة', btn_mengapa: 'لماذا مختلفة؟',
    form_title: 'وصول حصري',
    form_subtitle: 'كن من بين أول ٥٠٠ مستخدم يحصل على وصول تجريبي لهذه المنصة الثورية',
    label_nama: 'الاسم الكامل', label_ic: 'رقم بطاقة الهوية', label_tel: 'رقم الهاتف', label_email: 'البريد الإلكتروني', label_gambar: 'صورة الملف الشخصي',
    upload_text: 'اختر صورة ملفك الشخصي', upload_size: 'الحد الأقصى ٥ ميغابايت',
    checkbox_text: 'أوافق على ', terms_link: 'الشروط والأحكام', and_text: ' و', privacy_link: 'سياسة الخصوصية', checkbox_suffix: ' لـ Jodohku.my',
    btn_submit: 'إرسال طلب الوصول التجريبي',
    success_title: 'تم التسجيل بنجاح!',
    success_msg: 'تهانينا على تصرفك المبكر! لقد سجلت بنجاح للحصول على وصول تجريبي لـ Jodohku.my. سنتواصل معك بمجرد إطلاق التطبيق على Playstore وAppstore. شكراً لك -الإدارة-',
    daftar_btn: 'سجل الآن',
    slider_label: 'معرض المنصة', slider_title: 'تجربة <span class="gold">Jodohku.my</span>',
    slider_desc: '٨ جوانب رئيسية للمنصة تُغيّر طريقة بحث المسلمين الماليزيين عن شريك الحياة',
    slides: [
      { title: 'مطابقة مبنية على القيم الإسلامية', desc: 'يحلل الذكاء الاصطناعي التوافق الديني والأخلاقي وقيم الحياة' },
      { title: 'تقنية الذكاء الاصطناعي المتقدمة', desc: '١١٥ سؤالاً نفسياً يتم تحليلها باستخدام التعلم الآلي' },
      { title: 'أمان قصوى', desc: 'الهوية محمية برمز فريد حتى يوافق الطرفان على اللقاء' },
      { title: 'نظام الولي الرقمي', desc: 'المنصة الأولى التي تُلزم بمشاركة الولي في عملية التعارف' },
      { title: 'مجتمع المسلمين المتميز', desc: 'حصري للمسلمين المحترفين الجادين في البحث عن شريك الحياة' },
      { title: 'منظومة الزواج', desc: 'من المطابقة إلى حفل الزفاف — كل شيء في منصة واحدة' },
      { title: 'تحليلات معمّقة', desc: 'تقرير توافق مفصّل مبني على ١٤ بُعداً شخصياً' },
      { title: 'تطبيق جوال متميز', desc: 'واجهة أنيقة وسهلة الاستخدام لنظامَي iOS وAndroid' },
     
    ],
    pillars_label: '٤ ركائز أساسية', pillars_title: 'هندسة <span class="gold">المنصة</span>',
    pillars_desc: 'أربعة ركائز راسخة تضمن أن كل جانب من المنصة يلتزم بالقيم الإسلامية ويقدم أفضل تجربة',
    pillars: [
      { num: 'الركيزة ١', title: 'الطهارة الدينية', desc: 'القضاء على مواطن الفتنة، وصون الآداب، وهيكلة التعارف وفق أحكام الشريعة.' },
      { num: 'الركيزة ٢', title: 'الحماية الاجتماعية', desc: 'تعزيز وضع الولي، وحماية الهوية، ومكافحة عمليات الاحتيال العاطفي.' },
      { num: 'الركيزة ٣', title: 'التمكين الاقتصادي', desc: 'سلسلة قيمة الزواج التي تدعم موردي المشاريع الصغيرة والمتوسطة المسلمة المعتمدة حلالاً.' },
      { num: 'الركيزة ٤', title: 'التكنولوجيا والخصوصية', desc: 'تصفية الذكاء الاصطناعي في الوقت الفعلي، ورموز هوية سرية، وحماية البيانات وفق PDPA 2010.' },
    ],
    usp_label: 'مميزات فريدة', usp_title: 'لماذا <span class="gold">لا مثيل لها</span>',
    usp_desc: 'أربع ابتكارات ثورية تُميّز Jodohku.my عن كل منصة مواعدة في العالم',
    usps: [
      { title: 'رمز هوية سري', desc: 'يتم إخفاء الأسماء الحقيقية برمز فريد (JDK-2025-XX) حتى يوافق الطرفان على اللقاء.' },
      { title: 'مطابقة علمية بالذكاء الاصطناعي', desc: '١١٥ سؤالاً نفسياً يحللها الذكاء الاصطناعي لتطابق أدق بنسبة ٨٤٧٪ مقارنةً بتطبيقات السحب.' },
      { title: 'درع المحتوى الفوري', desc: 'يحجب الذكاء الاصطناعي المحتوى المحرّم وتبادل أرقام الهواتف والدعوات غير اللائقة في ٠.٣ ثانية.' },
      { title: 'منظومة متكاملة', desc: 'المنصة الوحيدة من المطابقة إلى حفل الزفاف — تخطيط الزفاف، حجز الموردين، النكاح الإلكتروني.' },
    ],
    cmp_label: 'تحليل معمّق', cmp_title: 'مقارنة <span class="gold">دقيقة</span>',
    cmp_heading: 'تحديد المعايير: <span class="highlight">لا مثيل لها</span>',
    cmp_col1: 'المعيار', cmp_col2: 'Tinder / Bumble', cmp_col3: 'MuzMatch', cmp_col4: 'Jodohku.my',
    cmp_rows: [
      ['مشاركة الولي الإلزامية','✗ غير موجود','✗ اختياري','✓ إلزامي'],
      ['التحقق الكامل من الهوية','✗ سيلفي فقط','✗ سيلفي فقط','✓ بطاقة هوية + بيومتري'],
      ['تصفية المحتوى بالذكاء الاصطناعي','✗ تقرير يدوي','✗ تقرير يدوي','✓ ٠.٣ ثانية'],
      ['المطابقة النفسية','✗ المظهر فقط','✗ أساسي','✓ ١١٥ سؤالاً'],
      ['منظومة الزواج','✗ تتوقف عند المطابقة','✗ تتوقف عند المطابقة','✓ حتى حفل الزفاف'],
      ['الامتثال للشريعة','✗ غير موجود','✗ تصريح ذاتي','✓ معتمد من مجلس'],
    ],
    q_label: 'علم المطابقة', q_title: 'نظام <span class="gold">١١٥ سؤالاً</span> الثوري',
    q_desc: 'الصيغة الأكثر تطوراً لتحليل التوافق عبر ١٤ بُعداً شخصياً، مُطوَّرة خصيصاً للمسلمين الماليزيين',
    q_extra: '+ ٦ أبعاد إضافية: الطموح المهني (٥)، الصحة النفسية (٥)، الاستعداد للزواج (٥)، السلوك الاجتماعي (٥)، التوافق طويل الأمد (٥)، أسلوب التواصل (٥)',
    dimensions: [
      { name: 'جوهر الشخصية', count: '١٠ أسئلة معمّقة', desc: 'طريقة تفكيرك وتصرفك وتقديم نفسك في مواقف الحياة اليومية.' },
      { name: 'تفضيلات أسلوب الحياة', count: '١٠ أسئلة مفصّلة', desc: 'الروتين اليومي ونمط الحياة والاهتمامات وطريقة قضاء وقت الفراغ.' },
      { name: 'العقلية المالية', count: '١٠ أسئلة حرجة', desc: 'طريقة إدارة الشؤون المالية والالتزامات والأهداف الحياتية بعيدة المدى.' },
      { name: 'القيم الدينية', count: '١٠ أسئلة روحية', desc: 'مستوى التقوى والقيم الدينية والتوقعات الروحية تجاه الشريك.' },
      { name: 'لغة الحب', count: '١٠ أسئلة عاطفية', desc: 'طريقة التعبير عن المحبة وتلقّيها في العلاقة.' },
      { name: 'الذكاء العاطفي', count: '١٠ أسئلة نفسية', desc: 'التعاطف والتحكم في المشاعر والقدرة على فهم مشاعر الآخرين.' },
      { name: 'ديناميكيات الأسرة', count: '١٠ أسئلة عائلية', desc: 'العلاقة مع الأسرة وتأثير الوالدين والقيم الأسرية.' },
      { name: 'حل النزاعات', count: '١٠ أسئلة نزاع', desc: 'طريقة التعامل مع الخلافات والأنا وإيجاد الحلول المشتركة.' },
      { name: 'نمط التعلق', count: '١٠ أسئلة ترابط', desc: 'أنماط الارتباط العاطفي والحاجة للأمان وتفضيلات الحميمية.' },
    ],
    taaruf_label: 'رحلة مقدسة', taaruf_title: 'عملية <span class="gold">التعارف الرقمي</span>',
    taaruf_desc: 'كل خطوة مصممة لضمان عملية تعارف آمنة وكريمة ومتوافقة تماماً مع أحكام الشريعة',
    taaruf_footer: 'كل خطوة يرشدها فريق من المستشارين المتمرسين وتلتزم بإرشادات الشريعة الصارمة لضمان عملية تعارف مباركة.',
    taaruf_steps: [
      { title: 'المطابقة الذكية بالذكاء الاصطناعي', desc: 'يحلل الخوارزم إجاباتك الـ١١٥ ويجد أفضل تطابق بناءً على توافق عميق.' },
      { title: 'موافقة الولي', desc: 'يتلقى ولي المرأة إشعاراً ويقيّم ملف المرشح لمنح الإذن الأولي.' },
      { title: 'التواصل المحمي', desc: 'المحادثات داخل المنصة مع مراقبة الذكاء الاصطناعي على مدار الساعة لضمان الحفاظ على الآداب الإسلامية.' },
    ],
    wed_label: 'منظومة متكاملة', wed_title: 'طيف <span class="gold">منظومة الزواج</span>',
    wed_heading: 'من المطابقة إلى حفل الزفاف — كل شيء في منصة واحدة',
    wed_desc: '<strong style="color:var(--gold);font-size:18px;">طيف منظومة الزواج</strong> هو شبكة متكاملة من الموردين الحلال، وباقات المناسبات، وخدمات التصوير، والطعام، وتخطيط الأفراح المتكاملة مع المنصة. خضع كل مورد لعملية تدقيق صارمة لضمان الجودة الفاخرة والامتثال للشريعة. يتيح نظام الحجز الرقمي للأزواج التخطيط لحفل أحلامهم بسهولة وشفافية.',
    terms_title: 'الشروط والأحكام',
    terms_meta: 'نافذ المفعول: ١ يناير ٢٠٢٥ &nbsp;|&nbsp; الإصدار: ٢.١',
  
    close_btn: '✕',
    terms_sections: [
      { h: '١. قبول الشروط', p: 'باستخدامك لمنصة Jodohku.my، فإنك توافق على الالتزام بهذه الشروط والأحكام. تُدار هذه المنصة من قِبَل <strong>Noble Synergy Ventures</strong> وفق قوانين ماليزيا.' },
      { h: '٢. أهلية المستخدم', p: '<ol><li>يجب أن تكون مسلماً أو مسلمة بلغت سن ١٨ عاماً.</li><li>يجب أن تكون مواطناً ماليزياً أو مقيماً دائماً شرعياً.</li><li>يجب أن تكون أعزباً أو مطلقاً وفق القانون النافذ.</li><li>يجب أن تكون جميع المعلومات المقدمة دقيقة وحديثة وصحيحة.</li></ol>' },
      { h: '٣. قواعد السلوك', p: 'يلتزم المستخدمون بمراعاة الآداب الإسلامية في جميع المراسلات. المحتوى الفاضح وتبادل المعلومات الشخصية خارج المنصة والأنشطة الاحتيالية <strong>محظورة تماماً</strong>.' },
      { h: '٤. نظام الولي', p: 'مشاركة الولي <strong>إلزامية</strong> لكل مستخدمة قبل السماح بأي تواصل.' },
      { h: '٥. تواصل معنا', p: '<strong>Noble Synergy Ventures</strong><br>البريد الإلكتروني: legal@jodohku.my' },
    ],
    privacy_title: 'سياسة الخصوصية وإشعار حماية البيانات الشخصية',
    privacy_meta: 'نافذ المفعول: 01/05/2026 &nbsp;|&nbsp; متوافق مع: PDPA 2010 (ماليزيا) &nbsp;|&nbsp; الإصدار: 3.0',
    privacy_sections: [
      { h: '١. مقدمة', p: 'توضح هذه السياسة كيفية قيام Jodohku.my بجمع بيانات المستخدمين الشخصية واستخدامها وحمايتها وفقاً لقانون PDPA 2010.' },
      { h: '٢. البيانات الشخصية التي نجمعها', p: '<ul><li><strong>الهوية:</strong> الاسم الكامل، رقم الهوية/MyKad، تاريخ الميلاد، العمر، الجنس، الحالة الاجتماعية.</li><li><strong>الاتصال:</strong> رقم الهاتف، البريد الإلكتروني، الولاية/المنطقة.</li><li><strong>الملف الشخصي:</strong> صورة الملف، السيرة الذاتية، الاهتمامات، معايير الشريك.</li><li><strong>التقنية:</strong> عنوان IP، نوع الجهاز، المتصفح، ملفات تعريف الارتباط.</li></ul>' },
      { h: '٣. لماذا نحتاج اسمك ورقم هويتك', p: '<ul><li><strong>التحقق من الهوية</strong></li><li><strong>التحقق من العمر</strong></li><li><strong>منع الاحتيال والنصب</strong></li><li><strong>سلامة المجتمع</strong></li><li><strong>الامتثال القانوني</strong></li></ul><p><em>لن يتم عرض رقم هويتك للمستخدمين الآخرين.</em></p>' },
      { h: '٤. أغراض معالجة البيانات', p: '<ol><li>إنشاء حسابات المستخدمين وإدارتها.</li><li>التحقق من الهوية والعمر.</li><li>توفير وظيفة المطابقة.</li><li>التواصل معك بشأن حسابك والخدمات.</li><li>منع الاحتيال وإساءة استخدام المنصة.</li><li>الامتثال للمتطلبات القانونية.</li></ol>' },
      { h: '٥. أساس الموافقة', p: 'بتقديم بياناتك الشخصية، فإنك توافق على جمعها وتخزينها ومعالجتها للأغراض المذكورة.' },
      { h: '٦. الإفصاح لأطراف ثالثة', p: '<ul><li>مزودو الاستضافة والسحابة</li><li>مزودو الدفع</li><li>فريق دعم Jodohku</li><li>الجهات المختصة حين يستوجبه القانون</li></ul>' },
      { h: '٧. أمان البيانات', p: 'نتخذ تدابير أمنية معقولة تشمل الوصول المقيد والتشفير ومراقبة الأنشطة المشبوهة.' },
      { h: '٨. مدة الاحتفاظ بالبيانات', p: 'تُحتفظ بالبيانات طالما كان ذلك ضرورياً لأغراض الخدمة والأمان والامتثال القانوني.' },
      { h: '٩. حقوقك', p: '<ol><li>طلب الاطلاع على بياناتك</li><li>تصحيح البيانات غير الدقيقة</li><li>سحب الموافقة</li><li>طلب حذف الحساب</li></ol>' },
      { h: '١٠. دقة المعلومات', p: 'أنت مسؤول عن التأكد من أن المعلومات المقدمة صحيحة ومحدّثة.' },
      { h: '١١. البيانات المعروضة للمستخدمين الآخرين', p: 'رقم هويتك ورقم هاتفك وبريدك الإلكتروني <strong>لن تُعرض</strong> للمستخدمين الآخرين.' },
      { h: '١٢. ملفات تعريف الارتباط', p: 'نستخدم ملفات تعريف الارتباط لوظائف تسجيل الدخول وإعدادات المستخدم وتحليل الاستخدام.' },
      { h: '١٣. روابط أطراف ثالثة', p: 'لسنا مسؤولين عن سياسات خصوصية مواقع الأطراف الثالثة.' },
      { h: '١٤. تعديلات السياسة', p: 'قد يتم تحديث هذه السياسة من حين لآخر. الاستمرار في الاستخدام يُعدّ موافقة على السياسة المحدّثة.' },
      { h: '١٥. تواصل معنا', p: '<strong>Jodohku.my</strong><br>البريد الإلكتروني: <strong>inquiry@jodohku.my</strong><br><a href="https://www.jodohku.my" style="color:var(--gold,#FFD700);">https://www.jodohku.my</a>' },
    ],
  }
};

    document.querySelector('.form-card form').addEventListener('submit', async function(e) {
  e.preventDefault();
  const btn = this.querySelector('button[type="submit"]');
  btn.textContent = 'Menghantar...';
  btn.disabled = true;

  const data = {
    name: this.name.value,
    email: this.email.value,
    phone: this.phone.value,
  };

  // Replace with your actual Supabase or API endpoint
  console.log('Form data:', data);
  
  // Show success
  this.innerHTML = '<p style="color:var(--champagne);text-align:center;padding:20px;">✅ Pendaftaran berjaya! Kami akan hubungi anda.</p>';
});

    function openModal(id) {
  const modal = document.getElementById(id);
  if (modal) {
    modal.style.display = 'flex';
    document.body.style.overflow = 'hidden';
  }
}

function closeModal(id) {
  const modal = document.getElementById(id);
  if (modal) {
    modal.style.display = 'none';
    document.body.style.overflow = '';
  }
}

// Close on backdrop click
document.addEventListener('click', function(e) {
  if (e.target.classList.contains('modal-overlay')) {
    e.target.style.display = 'none';
    document.body.style.overflow = '';
  }
});
   
    
    
function setLang(lang) {
  const t = i18n[lang];
  if (!t) return;

  document.querySelectorAll('.lang-btn').forEach(b => b.classList.remove('active'));
  document.querySelector(`.lang-btn[onclick="setLang('${lang}')"]`).classList.add('active');
  document.body.setAttribute('dir', t.dir);
  document.body.style.fontFamily = lang === 'ar' ? "'Tajawal', sans-serif" : "'Inter', sans-serif";

  const fCopy = document.getElementById('footerCopyright'); if (fCopy) fCopy.innerHTML = t.footer_copyright;
const fInit = document.getElementById('footerInitiative'); if (fInit) fInit.textContent = t.footer_initiative;
const fSubEl = document.getElementById('footerSub'); if (fSubEl) fSubEl.innerHTML = t.footer_sub;
const fTag = document.getElementById('footerTagline'); if (fTag) fTag.innerHTML = t.footer_tagline;
  const fPrivacy = document.getElementById('footerPrivacyNotice'); if (fPrivacy) fPrivacy.innerHTML = t.footer_privacy_notice;

  // NAV
  document.querySelectorAll('[data-i18n="nav_cta"]').forEach(el => el.textContent = t.nav_cta);
  const navLinks = document.querySelectorAll('.nav-menu a');
  if (navLinks[0]) navLinks[0].textContent = t.nav_platform;
  if (navLinks[1]) navLinks[1].textContent = t.nav_kelebihan;
  if (navLinks[2]) navLinks[2].textContent = t.nav_perbandingan;

  // HERO
  const badge = document.querySelector('.hero-badge');
  if (badge) { const svg = badge.querySelector('svg'); badge.textContent = t.hero_badge; if (svg) badge.prepend(svg); }
  const heroTitle = document.querySelector('.hero-title');
  if (heroTitle) heroTitle.innerHTML = t.hero_title;
  const heroSub = document.querySelector('.hero-subtitle'); if (heroSub) heroSub.textContent = t.hero_subtitle;
  const heroDesc = document.querySelector('.hero-description'); if (heroDesc) heroDesc.textContent = t.hero_desc;
  const btnP = document.querySelector('.btn-primary-hero'); if (btnP) btnP.textContent = t.btn_platform;
  const btnS = document.querySelector('.btn-secondary-hero'); if (btnS) btnS.textContent = t.btn_mengapa;

  // FORM
  const fTitle = document.querySelector('.form-title'); if (fTitle) fTitle.textContent = t.form_title;
  const fSub = document.querySelector('.form-subtitle'); if (fSub) fSub.textContent = t.form_subtitle;
  const labels = document.querySelectorAll('.input-label');
  ['label_nama','label_ic','label_tel','label_email','label_gambar'].forEach((k,i) => { if (labels[i]) labels[i].textContent = t[k]; });
  const uploadText = document.querySelector('.upload-text');
  if (uploadText) uploadText.innerHTML = `${t.upload_text}<br><strong>JPG, PNG, WEBP</strong> — ${t.upload_size}`;
  const cbLabel = document.querySelector('.checkbox-premium label');
  if (cbLabel) cbLabel.innerHTML = `${t.checkbox_text}<a href="#" onclick="openModal('termsModal');return false;">${t.terms_link}</a>${t.and_text}<a href="#" onclick="openModal('privacyModal');return false;">${t.privacy_link}</a>${t.checkbox_suffix}`;
  const btnSub = document.querySelector('.btn-submit-premium');
  if (btnSub) btnSub.textContent = t.btn_submit; // ✅
  const sTitle = document.querySelector('.success-title'); if (sTitle) sTitle.textContent = t.success_title;
  const sMsg = document.querySelector('.success-message'); if (sMsg) sMsg.textContent = t.success_msg;

  // SLIDER
  const sliderLabel = document.querySelector('#slider .section-label'); if (sliderLabel) sliderLabel.textContent = t.slider_label;
  const sliderTitle = document.querySelector('#slider .section-title-main'); if (sliderTitle) sliderTitle.innerHTML = t.slider_title;
  const sliderDesc = document.querySelector('#slider .section-desc-main'); if (sliderDesc) sliderDesc.textContent = t.slider_desc;
  document.querySelectorAll('.slide').forEach((slide, i) => {
    if (t.slides[i]) {
      const h3 = slide.querySelector('.slide-title'); if (h3) h3.textContent = t.slides[i].title;
      const p = slide.querySelector('.slide-desc'); if (p) p.textContent = t.slides[i].desc;
    }
  });

  // PILLARS
  const pilLabel = document.querySelector('#pillars .section-label'); if (pilLabel) pilLabel.textContent = t.pillars_label;
  const pilTitle = document.querySelector('#pillars .section-title-main'); if (pilTitle) pilTitle.innerHTML = t.pillars_title;
  const pilDesc = document.querySelector('#pillars .section-desc-main'); if (pilDesc) pilDesc.textContent = t.pillars_desc;
  document.querySelectorAll('.pillar-card').forEach((card, i) => {
    if (t.pillars[i]) {
      const num = card.querySelector('.pillar-number'); if (num) num.textContent = t.pillars[i].num;
      const h3 = card.querySelector('.pillar-title'); if (h3) h3.textContent = t.pillars[i].title;
      const p = card.querySelector('.pillar-desc'); if (p) p.textContent = t.pillars[i].desc;
    }
  });

  // USP
  const uspLabel = document.querySelector('#usp .section-label'); if (uspLabel) uspLabel.textContent = t.usp_label;
  const uspTitle = document.querySelector('#usp .section-title-main'); if (uspTitle) uspTitle.innerHTML = t.usp_title;
  const uspDesc = document.querySelector('#usp .section-desc-main'); if (uspDesc) uspDesc.textContent = t.usp_desc;
  document.querySelectorAll('.usp-card').forEach((card, i) => {
    if (t.usps[i]) {
      const h3 = card.querySelector('.usp-title'); if (h3) h3.textContent = t.usps[i].title;
      const p = card.querySelector('.usp-desc'); if (p) p.textContent = t.usps[i].desc;
    }
  });

  // COMPARISON
  const cmpLabel = document.querySelector('#comparison .section-label'); if (cmpLabel) cmpLabel.textContent = t.cmp_label;
  const cmpTitle = document.querySelector('#comparison .section-title-main'); if (cmpTitle) cmpTitle.innerHTML = t.cmp_title;
  const cmpHeading = document.querySelector('.comparison-title'); if (cmpHeading) cmpHeading.innerHTML = t.cmp_heading;
  const cmpTh = document.querySelectorAll('.comparison-table th');
  if (cmpTh[0]) cmpTh[0].textContent = t.cmp_col1;
  if (cmpTh[1]) cmpTh[1].textContent = t.cmp_col2;
  if (cmpTh[2]) cmpTh[2].textContent = t.cmp_col3;
  if (cmpTh[3]) cmpTh[3].textContent = t.cmp_col4;
 document.querySelectorAll('.comparison-table tbody tr').forEach((row, i) => {
    if (t.cmp_rows[i]) {
      const cells = row.querySelectorAll('td');
      cells.forEach((cell, j) => {
        // preserve data-label for mobile CSS
        if (j === 1) cell.setAttribute('data-label', t.cmp_col2);
        if (j === 2) cell.setAttribute('data-label', t.cmp_col3);
        if (j === 3) cell.setAttribute('data-label', t.cmp_col4);
        cell.textContent = t.cmp_rows[i][j];
      });
    }
  });

  // QUESTIONS
  const qLabel = document.querySelector('#questions .section-label'); if (qLabel) qLabel.textContent = t.q_label;
  const qTitle = document.querySelector('#questions .section-title-main'); if (qTitle) qTitle.innerHTML = t.q_title;
  const qDesc = document.querySelector('#questions .section-desc-main'); if (qDesc) qDesc.textContent = t.q_desc;
  const qExtra = document.querySelector('#questions p[style]'); if (qExtra) qExtra.textContent = t.q_extra;
  document.querySelectorAll('.dimension-card').forEach((card, i) => {
    if (t.dimensions[i]) {
      const name = card.querySelector('.dimension-name'); if (name) name.textContent = t.dimensions[i].name;
      const count = card.querySelector('.dimension-count'); if (count) count.textContent = t.dimensions[i].count;
      const desc = card.querySelector('.dimension-desc'); if (desc) desc.textContent = t.dimensions[i].desc;
    }
  });

  // TAARUF
  const tLabel = document.querySelector('#taaruf .section-label'); if (tLabel) tLabel.textContent = t.taaruf_label;
  const tTitle = document.querySelector('#taaruf .section-title-main'); if (tTitle) tTitle.innerHTML = t.taaruf_title;
  const tDesc = document.querySelector('#taaruf .section-desc-main'); if (tDesc) tDesc.textContent = t.taaruf_desc;
  const tFooter = document.querySelector('#taaruf p[style]'); if (tFooter) tFooter.textContent = t.taaruf_footer;
  document.querySelectorAll('.flow-step').forEach((step, i) => {
    if (t.taaruf_steps[i]) {
      const h3 = step.querySelector('.flow-title'); if (h3) h3.textContent = t.taaruf_steps[i].title;
      const p = step.querySelector('.flow-desc'); if (p) p.textContent = t.taaruf_steps[i].desc;
    }
  });

  // WEDDING
  const wLabel = document.querySelector('#wedding .section-label'); if (wLabel) wLabel.textContent = t.wed_label;
  const wTitle = document.querySelector('#wedding .section-title-main'); if (wTitle) wTitle.innerHTML = t.wed_title;
  const wHeading = document.querySelector('.wedding-preview h3'); if (wHeading) wHeading.textContent = t.wed_heading;
  const wDesc = document.querySelector('.wedding-explanation'); if (wDesc) wDesc.innerHTML = t.wed_desc;

  // ALL DAFTAR BUTTONS
  document.querySelectorAll('.btn-daftar-section').forEach(btn => btn.textContent = t.daftar_btn);

  // MODALS
  const termsTitle = document.querySelector('#termsModal .modal-title'); if (termsTitle) termsTitle.textContent = t.terms_title;
  const privTitle = document.querySelector('#privacyModal .modal-title'); if (privTitle) privTitle.textContent = t.privacy_title;
  const termsMeta = document.querySelector('#termsModal .modal-meta'); if (termsMeta) termsMeta.innerHTML = t.terms_meta;
  const privMeta = document.querySelector('#privacyModal .modal-meta'); if (privMeta) privMeta.innerHTML = t.privacy_meta;
  const termsSections = document.querySelectorAll('#termsModal .modal-section');
  t.terms_sections.forEach((s, i) => {
    if (termsSections[i]) {
      const h3 = termsSections[i].querySelector('h3'); if (h3) h3.textContent = s.h;
      const p = termsSections[i].querySelector('p,ol,ul'); if (p) p.innerHTML = s.p;
    }
  });
  const privSections = document.querySelectorAll('#privacyModal .modal-section');
  t.privacy_sections.forEach((s, i) => {
    if (privSections[i]) {
      const h3 = privSections[i].querySelector('h3'); if (h3) h3.textContent = s.h;
      const p = privSections[i].querySelector('p,ul'); if (p) p.innerHTML = s.p;
    }
  });

// Re-trigger carousel resize after language switch (delay for RTL reflow)
setTimeout(() => window.dispatchEvent(new Event('resize')), 50);

  localStorage.setItem('jdk_lang', lang);
}

    // ── RESTORE LANGUAGE ON LOAD ──
const savedLang = localStorage.getItem('jdk_lang');
if (savedLang && i18n[savedLang]) setLang(savedLang);

    <script>
// File input label update
const profilePhoto = document.getElementById('profilePhoto');
const uploadTitle = document.getElementById('uploadTitle');
if (profilePhoto && uploadTitle) {
  profilePhoto.addEventListener('change', () => {
    const file = profilePhoto.files && profilePhoto.files[0];
    uploadTitle.textContent = file ? file.name : 'Pilih gambar profil';
  });
}

// Reveal on scroll
const revealItems = document.querySelectorAll('.reveal');
const observer = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      entry.target.classList.add('show');
      observer.unobserve(entry.target);
    }
  });
}, { threshold: 0.12 });
revealItems.forEach((item) => observer.observe(item));

// Form submit handler
function handleFormSubmit() {
  const form = document.getElementById('registrationForm');
  const success = document.getElementById('successMessage');
  console.log('Form submitted');
  if (form && success) {
    form.style.display = 'none';
    success.style.display = 'block';
  }
}
</script>
    
</script>

<?php include 'footer.php'; ?>

  <!-- Terms Modal -->
<div id="termsModal" class="modal-overlay" style="display:none;position:fixed;inset:0;z-index:999;background:rgba(0,0,0,.7);align-items:center;justify-content:center;padding:20px;">
  <div style="background:#1a1610;border:1px solid rgba(216,192,138,.2);border-radius:24px;max-width:720px;width:100%;max-height:80vh;overflow-y:auto;padding:40px;">
    <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:24px;">
      <h2 class="modal-title" style="color:var(--champagne);font-family:Georgia,serif;font-size:28px;margin:0;">Terma & Syarat</h2>
      <button onclick="closeModal('termsModal')" style="background:none;border:none;color:rgba(255,255,255,.6);font-size:24px;cursor:pointer;">✕</button>
    </div>
    <p class="modal-meta" style="color:rgba(255,255,255,.4);font-size:12px;margin-bottom:24px;">Berkuat kuasa: 1 Januari 2025 | Versi: 2.1</p>
    <div class="modal-section"><h3 style="color:var(--champagne);margin-bottom:8px;">1. Penerimaan Terma</h3><p style="color:rgba(255,255,255,.7);font-size:14px;line-height:1.7;">Dengan mengakses atau menggunakan platform Jodohku.my, anda bersetuju untuk terikat dengan Terma & Syarat ini.</p></div>
    <div class="modal-section" style="margin-top:20px;"><h3 style="color:var(--champagne);margin-bottom:8px;">2. Kelayakan Pengguna</h3><p style="color:rgba(255,255,255,.7);font-size:14px;line-height:1.7;">Anda mesti seorang Muslim/Muslimah berumur 18 tahun ke atas, warganegara Malaysia, dan belum berkahwin atau telah bercerai secara sah.</p></div>
    <div class="modal-section" style="margin-top:20px;"><h3 style="color:var(--champagne);margin-bottom:8px;">3. Kod Etika</h3><p style="color:rgba(255,255,255,.7);font-size:14px;line-height:1.7;">Pengguna wajib mematuhi adab Islam dalam semua komunikasi. Kandungan lucah dan aktiviti penipuan adalah dilarang sama sekali.</p></div>
    <div class="modal-section" style="margin-top:20px;"><h3 style="color:var(--champagne);margin-bottom:8px;">4. Sistem Wali</h3><p style="color:rgba(255,255,255,.7);font-size:14px;line-height:1.7;">Penglibatan Wali adalah diwajibkan bagi setiap pengguna wanita sebelum sebarang komunikasi dibenarkan.</p></div>
    <div class="modal-section" style="margin-top:20px;"><h3 style="color:var(--champagne);margin-bottom:8px;">5. Hubungi Kami</h3><p style="color:rgba(255,255,255,.7);font-size:14px;line-height:1.7;">E-mel: legal@jodohku.my</p></div>
  </div>
</div>

<!-- Privacy Modal -->
<div id="privacyModal" class="modal-overlay" style="display:none;position:fixed;inset:0;z-index:999;background:rgba(0,0,0,.7);align-items:center;justify-content:center;padding:20px;">
  <div style="background:#1a1610;border:1px solid rgba(216,192,138,.2);border-radius:24px;max-width:720px;width:100%;max-height:80vh;overflow-y:auto;padding:40px;">
    <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:24px;">
      <h2 class="modal-title" style="color:var(--champagne);font-family:Georgia,serif;font-size:24px;margin:0;">Dasar Privasi & Notis Perlindungan Data</h2>
      <button onclick="closeModal('privacyModal')" style="background:none;border:none;color:rgba(255,255,255,.6);font-size:24px;cursor:pointer;">✕</button>
    </div>
    <p class="modal-meta" style="color:rgba(255,255,255,.4);font-size:12px;margin-bottom:24px;">Berkuat kuasa: 01/05/2026 | Mematuhi: PDPA 2010 | Versi: 3.0</p>
    <div class="modal-section"><h3 style="color:var(--champagne);margin-bottom:8px;">1. Pengenalan</h3><p style="color:rgba(255,255,255,.7);font-size:14px;line-height:1.7;">Polisi ini menerangkan bagaimana Jodohku.my mengumpul, menggunakan, menyimpan dan melindungi data peribadi pengguna selaras dengan PDPA 2010.</p></div>
    <div class="modal-section" style="margin-top:20px;"><h3 style="color:var(--champagne);margin-bottom:8px;">2. Data Yang Dikumpul</h3><ul style="color:rgba(255,255,255,.7);font-size:14px;line-height:1.9;padding-left:20px;"><li>Nama penuh, nombor IC, tarikh lahir, jantina</li><li>Nombor telefon, e-mel, negeri</li><li>Gambar profil, biodata, minat</li><li>Alamat IP, jenis peranti, cookies</li></ul></div>
    <div class="modal-section" style="margin-top:20px;"><h3 style="color:var(--champagne);margin-bottom:8px;">3. Kenapa Kami Perlukan IC Anda</h3><p style="color:rgba(255,255,255,.7);font-size:14px;line-height:1.7;">Untuk pengesahan identiti, pengesahan umur, pencegahan penipuan dan keselamatan komuniti. <strong style="color:var(--champagne);">Nombor IC tidak dipaparkan kepada pengguna lain.</strong></p></div>
    <div class="modal-section" style="margin-top:20px;"><h3 style="color:var(--champagne);margin-bottom:8px;">4. Hak Anda</h3><ul style="color:rgba(255,255,255,.7);font-size:14px;line-height:1.9;padding-left:20px;"><li>Meminta akses kepada data anda</li><li>Membetulkan data yang tidak tepat</li><li>Menarik balik persetujuan</li><li>Meminta pemadaman akaun</li></ul></div>
    <div class="modal-section" style="margin-top:20px;"><h3 style="color:var(--champagne);margin-bottom:8px;">5. Hubungi Kami</h3><p style="color:rgba(255,255,255,.7);font-size:14px;line-height:1.7;">E-mel: inquiry@jodohku.my</p></div>
  </div>
</div>

</body>
</html>
