<!DOCTYPE html>
<html lang="ms">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Jodohku.my — Platform Ultra-Premium Perkahwinan Islam</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&family=Tajawal:wght@300;400;500;700&family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="styles.css">
<link rel="icon" type="images/logokut.png" href="favicon.png">
<link rel="apple-touch-icon" href="logokut.png">
<script src="https://cdn.jsdelivr.net/npm/@supabase/supabase-js@2"></script>

</style>
</head>
<body>
  
  <?php include 'nav.php'; ?>

<!-- HERO WITH FORM -->
<section id="hero" class="hero-section">
  <div class="hero-bg-pattern"></div>
  <div class="hero-container">
    <div class="hero-content">
      <div class="hero-badge">
        <svg class="hero-crown-svg" width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M2 19L4.5 9L9 14L12 6L15 14L19.5 9L22 19H2Z" fill="#FFD700" stroke="#FFD700" stroke-width="1.5" stroke-linejoin="round"/>
          <rect x="2" y="19" width="20" height="2" rx="1" fill="#FFD700"/>
        </svg>
        Platform Ultra-Premium Perkahwinan Islam
      </div>
      <h1 class="hero-title">
        Revolusi <span class="gold">Saintifik</span><br>
        Padanan Jodoh <span class="gold">Berkualiti</span>
      </h1>
      <p class="hero-subtitle">
        AI Terdepan + 115 Soalan Psikologi = Jodoh Seumur Hidup
      </p>
      <p class="hero-description">
        Jodohku.my menggantikan dating toxic dengan teknologi padanan yang dibangunkan khusus untuk budaya Muslim Malaysia — di mana setiap padanan berpotensi menjadi ikatan yang diberkati Allah.
      </p>
      <div class="hero-cta-buttons">
        <a href="#slider" class="btn-primary-hero">Lihat Platform</a>
        <a href="#comparison" class="btn-secondary-hero">Mengapa Berbeza?</a>
      </div>
    </div>
    
    <!-- PREMIUM FORM -->
    <div class="form-premium-container">
      <div id="formView">
        <div class="form-header">
          <div class="form-crown">
            <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M4 38L9 18L18 28L24 12L30 28L39 18L44 38H4Z" fill="#FFD700" stroke="#FFA000" stroke-width="2" stroke-linejoin="round"/>
              <rect x="4" y="38" width="40" height="4" rx="2" fill="#FFD700"/>
              <circle cx="24" cy="10" r="3" fill="#FFD700"/>
              <circle cx="7" cy="16" r="2.5" fill="#FFD700"/>
              <circle cx="41" cy="16" r="2.5" fill="#FFD700"/>
            </svg>
          </div>
          <h2 class="form-title">Akses Eksklusif</h2>
          <p class="form-subtitle">
            Jadi antara 500 pengguna terawal yang mendapat akses beta kepada platform revolusioner ini
          </p>
        </div>
        
        <form class="form-premium" onsubmit="handleFormSubmit(event)">
          <div class="form-row">
            <div class="input-group">
              <label class="input-label">Nama Penuh</label>
              <input class="input-premium" type="text" id="fullName" placeholder="Siti Aminah binti Abdullah" required>
            </div>
            <div class="input-group">
              <label class="input-label">No. Kad Pengenalan</label>
              <input class="input-premium" type="text" id="icNo" placeholder="XXXXXX-XX-XXXX" maxlength="14" required>
            </div>
          </div>
          
          <div class="form-row">
            <div class="input-group">
              <label class="input-label">No. Telefon</label>
              <input class="input-premium" type="tel" id="phoneNo" placeholder="01X-XXXXXXXX" required>
            </div>
            <div class="input-group">
              <label class="input-label">Alamat E-mel</label>
              <input class="input-premium" type="email" id="emailAddr" placeholder="nama@email.com" required>
            </div>
          </div>
          
          <div class="input-group">
            <label class="input-label">Gambar Profil</label>
            <div class="upload-area">
              <input type="file" id="profilePic" accept="image/*" onchange="handleImageUpload(event)">
              <div class="upload-icon">
                <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <rect x="3" y="10" width="30" height="22" rx="4" stroke="#FFD700" stroke-width="2"/>
                  <circle cx="18" cy="21" r="6" stroke="#FFD700" stroke-width="2"/>
                  <circle cx="18" cy="21" r="2.5" fill="#FFD700"/>
                  <path d="M13 10L15 6H21L23 10" stroke="#FFD700" stroke-width="2" stroke-linejoin="round"/>
                  <circle cx="28" cy="15" r="1.5" fill="#FFD700"/>
                </svg>
              </div>
              <div class="upload-text">
                Pilih gambar profil anda<br>
                <strong>JPG, PNG, WEBP</strong> — Maksimum 5MB
              </div>
            </div>
          </div>
          
          <div class="checkbox-premium">
            <input type="checkbox" id="agreeTerms" required>
            <label for="agreeTerms">
              Saya bersetuju dengan <a href="#" onclick="openModal('termsModal');return false;">Terma &amp; Syarat</a> dan <a href="#" onclick="openModal('privacyModal');return false;">Dasar Privasi</a> Jodohku.my yang mematuhi PDPA 2010
            </label>
          </div>
          
          <button type="submit" class="btn-submit-premium">
            Hantar Permohonan Beta Access
          </button>
        </form>
      </div>
      
      <!-- SUCCESS STATE -->
      <div class="success-state" id="successView">
        <div class="success-icon">
          <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M8 20L16 28L32 12" stroke="white" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </div>
        <h2 class="success-title">Pendaftaran Berjaya!</h2>
        <p class="success-message">
          Tahniah atas tindakan awal anda! Anda telah berjaya mendaftar untuk beta access Jodohku.my. Kami akan menghubungi anda setelah aplikasi jodohku.my berjaya didaftarkan di Playstore dan Appstore.Terima kasih -Admin-
        </p>
        <div class="success-id" id="generatedId"></div>
      </div>
    </div>
  </div>
</section>
<div class="gold-shimmer-line"></div>

<!-- IMAGE SLIDER (carousel — Malaysian Muslim relevant images) -->
<section id="slider" class="slider-section">
  <div class="slider-container">
    <div class="slider-header reveal">
      <div class="section-label">Galeri Platform</div>
      <h2 class="section-title-main">Pengalaman <span class="gold">Jodohku.my</span></h2>
      <p class="section-desc-main">
        10 aspek utama platform yang mengubah cara Muslim Malaysia mencari pasangan hidup
      </p>
    </div>
    
    <div class="image-slider reveal">
      <div class="slider-track">
        <!-- 1. Padanan Nilai Islam — Quran & marriage values -->
        <div class="slide">
          <img src="https://images.unsplash.com/photo-1564769625905-50e93615e769?w=900&h=260&fit=crop&q=80" alt="Padanan Nilai Islam">
          <div class="slide-overlay">
            <div class="slide-content">
              <h3 class="slide-title">Padanan Berdasarkan Nilai Islam</h3>
              <p class="slide-desc">AI menganalisis keserasian agama, akhlak dan nilai hidup</p>
            </div>
          </div>
        </div>

        <!-- 2. AI Technology — Modern tech with Islamic aesthetic -->
        <div class="slide">
          <img src="https://images.pexels.com/photos/8386440/pexels-photo-8386440.jpeg?auto=compress&cs=tinysrgb&w=900&h=260&fit=crop" alt="AI technology">
          <div class="slide-overlay">
            <div class="slide-content">
              <h3 class="slide-title">Teknologi AI Terdepan</h3>
              <p class="slide-desc">115 soalan psikologi dianalisis menggunakan machine learning</p>
            </div>
          </div>
        </div>

        <!-- 3. Keselamatan — Privacy & protection -->
        <div class="slide">
          <img src="https://images.unsplash.com/photo-1555949963-aa79dcee981c?w=900&h=260&fit=crop&q=80" alt="Cyber Security">
          <div class="slide-overlay">
            <div class="slide-content">
              <h3 class="slide-title">Keselamatan Maksimum</h3>
              <p class="slide-desc">Identiti dilindungi dengan kod unik sehingga kedua-dua pihak bersetuju</p>
            </div>
          </div>
        </div>

        <!-- 4. Sistem Wali — Family & elders blessing -->
        <div class="slide">
          <img src="https://images.pexels.com/photos/7551643/pexels-photo-7551643.jpeg?auto=compress&cs=tinysrgb&w=900&h=260&fit=crop" alt="Family discussion">
          <div class="slide-overlay">
            <div class="slide-content">
              <h3 class="slide-title">Sistem Wali Digital</h3>
              <p class="slide-desc">Platform pertama yang mewajibkan penglibatan wali dalam proses ta'aruf</p>
            </div>
          </div>
        </div>

        <!-- 5. Komuniti Muslim Malaysia — Mosque/cultural gathering -->
        <div class="slide">
          <img src="https://images.unsplash.com/photo-1542810634-71277d95dcbb?w=900&h=260&fit=crop&q=80" alt="Muslim Professionals">
          <div class="slide-overlay">
            <div class="slide-content">
              <h3 class="slide-title">Komuniti Premium Muslim</h3>
              <p class="slide-desc">Eksklusif untuk Muslim profesional yang serius mencari jodoh</p>
            </div>
          </div>
        </div>

        <!-- 6. Ekosistem Perkahwinan — Malay wedding decor/pelamin -->
        <div class="slide">
          <img src="https://images.unsplash.com/photo-1522673607200-164d1b6ce486?w=900&h=260&fit=crop&q=80" alt="Wedding Couple Muslim">
          <div class="slide-overlay">
            <div class="slide-content">
              <h3 class="slide-title">Ekosistem Perkahwinan</h3>
              <p class="slide-desc">Dari padanan hingga pelamin — semua dalam satu platform</p>
            </div>
          </div>
        </div>

        <!-- 7. Analitik Data — Compatibility charts/dashboard -->
        <div class="slide">
          <img src="https://images.unsplash.com/photo-1543286386-713bdd548da4?w=900&h=260&fit=crop&q=80" alt="Analitik Data">
          <div class="slide-overlay">
            <div class="slide-content">
              <h3 class="slide-title">Analitik Mendalam</h3>
              <p class="slide-desc">Laporan keserasian terperinci berdasarkan 14 dimensi personaliti</p>
            </div>
          </div>
        </div>

        <!-- 8. Aplikasi Mobile — Phone with Malay woman/hijabi user -->
        <div class="slide">
          <img src="	https://images.unsplash.com/photo-1551650975-87deedd944c3?w=900&h=260&fit=crop&q=80" alt="Aplikasi Mobile">
          <div class="slide-overlay">
            <div class="slide-content">
              <h3 class="slide-title">Aplikasi Mobile Premium</h3>
              <p class="slide-desc">Interface yang elegant dan mudah digunakan untuk iOS dan Android</p>
            </div>
          </div>
        </div>

        <!-- 9. Kaunselor Islam — Muslim counsellor/consultation -->
        <div class="slide">
        <img src="https://images.pexels.com/photos/4101143/pexels-photo-4101143.jpeg?auto=compress&cs=tinysrgb&w=900&h=260&fit=crop" alt="Counseling">
          <div class="slide-overlay">
            <div class="slide-content">
              <h3 class="slide-title">Bimbingan Kaunselor Islam</h3>
              <p class="slide-desc">Tim pakar relationship coach dan kaunselor Islam sentiasa siap membantu</p>
            </div>
          </div>
        </div>

        <!-- 10. Kisah Kejayaan — Malay wedding couple happily married -->
        <div class="slide">
          <img src="https://images.pexels.com/photos/1024993/pexels-photo-1024993.jpeg?auto=compress&cs=tinysrgb&w=900&h=260&fit=crop" alt="Happy couple">
          <div class="slide-overlay">
            <div class="slide-content">
              <h3 class="slide-title">Kisah Kejayaan</h3>
              <p class="slide-desc">Beribu pasangan telah menemui jodoh melalui platform kami</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div style="display:flex; justify-content:center; margin-top:56px;">
      <a href="#hero" class="btn-daftar-section" onclick="document.getElementById('hero').scrollIntoView({behavior:'smooth'});return false;">
        Daftar Sekarang
      </a>
    </div>
  </div>
</section>
<div class="gold-shimmer-line"></div>

<!-- PILLARS -->
<section id="pillars" class="pillars-section">
  <div class="pillars-container">
    <div class="slider-header reveal">
      <div class="section-label">4 Teras Utama</div>
      <h2 class="section-title-main">Senibina <span class="gold">Platform</span></h2>
      <p class="section-desc-main">
        Empat tonggak kukuh yang memastikan setiap aspek platform mematuhi nilai Islam dan memberikan pengalaman terbaik
      </p>
    </div>
    
    <div class="pillars-grid reveal">

      <!-- Teras 1: Kesucian Agama — Mosque/crescent -->
      <div class="pillar-card">
        <div class="pillar-image">
          <svg width="54" height="54" viewBox="0 0 54 54" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M9 42V24C9 18 13.5 13.5 19.5 13.5H34.5C40.5 13.5 45 18 45 24V42" stroke="#FFD700" stroke-width="2" stroke-linecap="round"/>
            <path d="M3 42H51" stroke="#FFD700" stroke-width="2" stroke-linecap="round"/>
            <path d="M27 3C27 3 33 7.5 27 13.5C21 7.5 27 3 27 3Z" fill="#FFD700"/>
            <rect x="21" y="30" width="12" height="12" rx="1.5" stroke="#FFD700" stroke-width="2"/>
            <!-- crescent moon top right -->
            <path d="M40 6C40 6 44 8 42 12C39 10 40 6 40 6Z" fill="#FFD700" opacity="0.7"/>
          </svg>
        </div>
        <div class="pillar-number">Teras 1</div>
        <h3 class="pillar-title">Kesucian Agama</h3>
        <p class="pillar-desc">Menghapuskan ruang zina, memelihara adab, dan menstrukturkan ta'aruf berlandaskan syariah.</p>
      </div>

      <!-- Teras 2: Perlindungan Sosial — Shield -->
      <div class="pillar-card">
        <div class="pillar-image">
          <svg width="54" height="54" viewBox="0 0 54 54" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M27 6L9 13.5V27C9 36.9 17.1 46.2 27 48C36.9 46.2 45 36.9 45 27V13.5L27 6Z" stroke="#FFD700" stroke-width="2" stroke-linejoin="round" fill="rgba(255,215,0,0.07)"/>
            <path d="M19 27L24 32L35 21" stroke="#FFD700" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </div>
        <div class="pillar-number">Teras 2</div>
        <h3 class="pillar-title">Perlindungan Sosial</h3>
        <p class="pillar-desc">Pemerkasaan Mod Wali, perlindungan identiti dan pembanterasan scam romantik.</p>
      </div>

      <!-- Teras 3: Pemerkasaan Ekonomi — Growth/chart -->
      <div class="pillar-card">
        <div class="pillar-image">
          <svg width="54" height="54" viewBox="0 0 54 54" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="9" y="30" width="8" height="15" rx="2" fill="rgba(255,215,0,0.15)" stroke="#FFD700" stroke-width="1.8"/>
            <rect x="23" y="21" width="8" height="24" rx="2" fill="rgba(255,215,0,0.15)" stroke="#FFD700" stroke-width="1.8"/>
            <rect x="37" y="12" width="8" height="33" rx="2" fill="rgba(255,215,0,0.2)" stroke="#FFD700" stroke-width="1.8"/>
            <path d="M9 27L23 18L37 9" stroke="#FFD700" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="3 2"/>
            <circle cx="37" cy="9" r="3" fill="#FFD700"/>
          </svg>
        </div>
        <div class="pillar-number">Teras 3</div>
        <h3 class="pillar-title">Pemerkasaan Ekonomi</h3>
        <p class="pillar-desc">Rantaian nilai perkahwinan yang menyokong vendor PKS Muslim bersijil halal.</p>
      </div>

      <!-- Teras 4: Teknologi & Privasi — Circuit/AI -->
      <div class="pillar-card">
        <div class="pillar-image">
          <svg width="54" height="54" viewBox="0 0 54 54" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="18" y="18" width="18" height="18" rx="3" stroke="#FFD700" stroke-width="2" fill="rgba(255,215,0,0.07)"/>
            <circle cx="27" cy="27" r="4" fill="#FFD700" opacity="0.8"/>
            <!-- circuit lines -->
            <line x1="27" y1="6" x2="27" y2="18" stroke="#FFD700" stroke-width="1.5" stroke-linecap="round"/>
            <line x1="27" y1="36" x2="27" y2="48" stroke="#FFD700" stroke-width="1.5" stroke-linecap="round"/>
            <line x1="6" y1="27" x2="18" y2="27" stroke="#FFD700" stroke-width="1.5" stroke-linecap="round"/>
            <line x1="36" y1="27" x2="48" y2="27" stroke="#FFD700" stroke-width="1.5" stroke-linecap="round"/>
            <circle cx="27" cy="6" r="2.5" fill="#FFD700" opacity="0.5"/>
            <circle cx="27" cy="48" r="2.5" fill="#FFD700" opacity="0.5"/>
            <circle cx="6" cy="27" r="2.5" fill="#FFD700" opacity="0.5"/>
            <circle cx="48" cy="27" r="2.5" fill="#FFD700" opacity="0.5"/>
            <line x1="18" y1="18" x2="10" y2="10" stroke="#FFD700" stroke-width="1.2" stroke-linecap="round" opacity="0.5"/>
            <line x1="36" y1="18" x2="44" y2="10" stroke="#FFD700" stroke-width="1.2" stroke-linecap="round" opacity="0.5"/>
            <line x1="18" y1="36" x2="10" y2="44" stroke="#FFD700" stroke-width="1.2" stroke-linecap="round" opacity="0.5"/>
            <line x1="36" y1="36" x2="44" y2="44" stroke="#FFD700" stroke-width="1.2" stroke-linecap="round" opacity="0.5"/>
          </svg>
        </div>
        <div class="pillar-number">Teras 4</div>
        <h3 class="pillar-title">Teknologi &amp; Privasi</h3>
        <p class="pillar-desc">AI real-time filtering, kod identiti rahsia dan perlindungan data PDPA 2010.</p>
      </div>

    </div>

    <div style="display:flex; justify-content:center; margin-top:56px;">
      <a href="#hero" class="btn-daftar-section" onclick="document.getElementById('hero').scrollIntoView({behavior:'smooth'});return false;">
        Daftar Sekarang
      </a>
    </div>
  </div>
</section>
<div class="gold-shimmer-line"></div>

<!-- USP -->
<section id="usp" class="usp-section">
  <div class="usp-container">
    <div class="slider-header reveal">
      <div class="section-label">Kelebihan Unik</div>
      <h2 class="section-title-main">Mengapa <span class="gold">Tiada Tandingan</span></h2>
      <p class="section-desc-main">
        Empat inovasi revolusioner yang memisahkan Jodohku.my daripada setiap platform perjodohan di dunia
      </p>
    </div>
    
    <div class="usp-grid reveal">

      <!-- USP 1: Identiti Kod Rahsia — ID card / lock -->
      <div class="usp-card">
        <div class="usp-image">
          <svg width="54" height="54" viewBox="0 0 54 54" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="7" y="15" width="40" height="28" rx="4" stroke="#FFD700" stroke-width="2" fill="rgba(255,215,0,0.06)"/>
            <circle cx="18" cy="27" r="5" stroke="#FFD700" stroke-width="1.8"/>
            <line x1="28" y1="23" x2="41" y2="23" stroke="#FFD700" stroke-width="1.8" stroke-linecap="round"/>
            <line x1="28" y1="28" x2="38" y2="28" stroke="#FFD700" stroke-width="1.8" stroke-linecap="round"/>
            <line x1="28" y1="33" x2="35" y2="33" stroke="#FFD700" stroke-width="1.8" stroke-linecap="round"/>
            <!-- lock overlay -->
            <rect x="34" y="33" width="14" height="11" rx="2" fill="#0a0a0a" stroke="#FFD700" stroke-width="1.5"/>
            <path d="M37 33V30C37 27.8 39.8 26 41 26C42.2 26 45 27.8 45 30V33" stroke="#FFD700" stroke-width="1.5" stroke-linecap="round"/>
            <circle cx="41" cy="38" r="1.5" fill="#FFD700"/>
          </svg>
        </div>
        <h3 class="usp-title">Identiti Kod Rahsia</h3>
        <p class="usp-desc">Nama sebenar disembunyikan dengan kod unik (JDK-2025-XX) sehingga kedua-dua pihak bersetuju bertemu.</p>
      </div>

      <!-- USP 2: AI Padanan Saintifik — Brain/neural -->
      <div class="usp-card">
        <div class="usp-image">
          <svg width="54" height="54" viewBox="0 0 54 54" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M27 12C21 12 15 16.5 15 22.5C15 25.5 16.5 28.5 18 30C15 31.5 12 34.5 12 39C12 42 14.3 45 18 45H36C39.8 45 42 42 42 39C42 34.5 39 31.5 36 30C37.5 28.5 39 25.5 39 22.5C39 16.5 33 12 27 12Z" stroke="#FFD700" stroke-width="2" stroke-linejoin="round" fill="rgba(255,215,0,0.06)"/>
            <line x1="27" y1="12" x2="27" y2="45" stroke="#FFD700" stroke-width="1.5" stroke-dasharray="3 2"/>
            <circle cx="21" cy="24" r="2.5" fill="#FFD700"/>
            <circle cx="33" cy="24" r="2.5" fill="#FFD700"/>
            <path d="M21 33C21 33 24 36 27 36C30 36 33 33 33 33" stroke="#FFD700" stroke-width="1.5" stroke-linecap="round"/>
          </svg>
        </div>
        <h3 class="usp-title">AI Padanan Saintifik</h3>
        <p class="usp-desc">115 soalan psikologi dianalisis AI untuk padanan 847% lebih tepat berbanding swipe-based apps.</p>
      </div>

      <!-- USP 3: Real-Time Content Shield — Filter/radar -->
      <div class="usp-card">
        <div class="usp-image">
          <svg width="54" height="54" viewBox="0 0 54 54" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="27" cy="27" r="20" stroke="#FFD700" stroke-width="1.5" opacity="0.3"/>
            <circle cx="27" cy="27" r="13" stroke="#FFD700" stroke-width="1.5" opacity="0.5"/>
            <circle cx="27" cy="27" r="6" stroke="#FFD700" stroke-width="1.5"/>
            <circle cx="27" cy="27" r="2.5" fill="#FFD700"/>
            <!-- sweep line -->
            <line x1="27" y1="27" x2="27" y2="7" stroke="#FFD700" stroke-width="2" stroke-linecap="round" opacity="0.8"/>
            <path d="M27 27 L42 17" stroke="#FFD700" stroke-width="1.5" stroke-linecap="round" opacity="0.4"/>
            <!-- blocked X -->
            <circle cx="42" cy="12" r="5" fill="rgba(255,80,80,0.15)" stroke="#FF6B6B" stroke-width="1.5"/>
            <line x1="39.5" y1="9.5" x2="44.5" y2="14.5" stroke="#FF6B6B" stroke-width="1.5" stroke-linecap="round"/>
            <line x1="44.5" y1="9.5" x2="39.5" y2="14.5" stroke="#FF6B6B" stroke-width="1.5" stroke-linecap="round"/>
          </svg>
        </div>
        <h3 class="usp-title">Real-Time Content Shield</h3>
        <p class="usp-desc">AI menyekat kandungan haram, pertukaran nombor telefon dan ajakan tidak sesuai dalam 0.3 saat.</p>
      </div>

      <!-- USP 4: Ekosistem Komprehensif — rings/chain -->
      <div class="usp-card">
        <div class="usp-image">
          <svg width="54" height="54" viewBox="0 0 54 54" fill="none" xmlns="http://www.w3.org/2000/svg">
            <!-- wedding rings -->
            <circle cx="21" cy="30" r="10" stroke="#FFD700" stroke-width="2.2" fill="none"/>
            <circle cx="33" cy="30" r="10" stroke="#FFD700" stroke-width="2.2" fill="rgba(255,215,0,0.07)"/>
            <!-- diamond on top -->
            <polygon points="27,8 32,14 27,17 22,14" stroke="#FFD700" stroke-width="1.5" fill="rgba(255,215,0,0.15)" stroke-linejoin="round"/>
            <line x1="22" y1="14" x2="32" y2="14" stroke="#FFD700" stroke-width="1"/>
            <line x1="27" y1="8" x2="27" y2="14" stroke="#FFD700" stroke-width="1" opacity="0.5"/>
          </svg>
        </div>
        <h3 class="usp-title">Ekosistem Komprehensif</h3>
        <p class="usp-desc">Satu-satunya platform dari padanan hingga pelamin — wedding planning, vendor booking, e-Nikah.</p>
      </div>

    </div>

    <div style="display:flex; justify-content:center; margin-top:56px;">
      <a href="#hero" class="btn-daftar-section" onclick="document.getElementById('hero').scrollIntoView({behavior:'smooth'});return false;">
        Daftar Sekarang
      </a>
    </div>
  </div>
</section>
<div class="gold-shimmer-line"></div>

<!-- COMPARISON HIGHLIGHT -->
<!-- COMPARISON HIGHLIGHT -->
<section id="comparison" class="comparison-section">
  <div class="comparison-container">
    <div class="slider-header reveal">
      <div class="section-label">Analisis Mendalam</div>
      <h2 class="section-title-main">Perbandingan <span class="gold">Teliti</span></h2>
    </div>

    <div class="comparison-highlight reveal">
      <h3 class="comparison-title">Memisahkan Standard: <span class="highlight">Tiada Tandingan</span></h3>
      <div class="comparison-table-scroll">
        <table class="comparison-table">
          <thead>
            <tr>
              <th style="text-align:left;">Kriteria Penting</th>
              <th>Tinder / Bumble</th>
              <th>MuzMatch</th>
              <th class="jodohku">Jodohku.my</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="feature">Penglibatan Wali Mandatory</td>
              <td class="cross" data-label="Tinder / Bumble">✗ Tiada</td>
              <td class="cross" data-label="MuzMatch">✗ Optional</td>
              <td class="jodohku check" data-label="Jodohku.my">✓ Diwajibkan</td>
            </tr>
            <tr>
              <td class="feature">Verifikasi Identiti Penuh</td>
              <td class="cross" data-label="Tinder / Bumble">✗ Selfie sahaja</td>
              <td class="cross" data-label="MuzMatch">✗ Selfie sahaja</td>
              <td class="jodohku check" data-label="Jodohku.my">✓ MyKad + Biometrik</td>
            </tr>
            <tr>
              <td class="feature">AI Content Filtering</td>
              <td class="cross" data-label="Tinder / Bumble">✗ Manual report</td>
              <td class="cross" data-label="MuzMatch">✗ Manual report</td>
              <td class="jodohku check" data-label="Jodohku.my">✓ 0.3 saat</td>
            </tr>
            <tr>
              <td class="feature">Psikologi Matching</td>
              <td class="cross" data-label="Tinder / Bumble">✗ Appearance</td>
              <td class="cross" data-label="MuzMatch">✗ Basic</td>
              <td class="jodohku check" data-label="Jodohku.my">✓ 115 soalan</td>
            </tr>
            <tr>
              <td class="feature">Wedding Ecosystem</td>
              <td class="cross" data-label="Tinder / Bumble">✗ Berhenti</td>
              <td class="cross" data-label="MuzMatch">✗ Berhenti</td>
              <td class="jodohku check" data-label="Jodohku.my">✓ Hingga pelamin</td>
            </tr>
            <tr>
              <td class="feature">Shariah Compliance</td>
              <td class="cross" data-label="Tinder / Bumble">✗ Tiada</td>
              <td class="cross" data-label="MuzMatch">✗ Self-declared</td>
              <td class="jodohku check" data-label="Jodohku.my">✓ Board certified</td>
            </tr>
          </tbody>
        </table>
      </div>

      <div style="display:flex; justify-content:center; margin-top:56px;">
        <a href="#hero" class="btn-daftar-section" onclick="document.getElementById('hero').scrollIntoView({behavior:'smooth'});return false;">
          Daftar Sekarang
        </a>
      </div>
    </div>
  </div>
</section>
<!-- 115 QUESTIONS SYSTEM -->
<section id="questions" class="questions-section">
  <div class="questions-container">
    <div class="slider-header reveal">
      <div class="section-label">Sains Padanan</div>
      <h2 class="section-title-main">Sistem <span class="gold">115 Soalan</span> Revolusioner</h2>
      <p class="section-desc-main">
        Formula paling canggih untuk menganalisis keserasian berdasarkan 14 dimensi kepribadian yang dibangunkan khusus untuk Muslim Malaysia
      </p>
    </div>
    
    <div class="questions-grid reveal">
      <div class="dimension-card">
        <div class="dimension-icon">
          <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="18" cy="18" r="15" stroke="#FFD700" stroke-width="2"/>
            <circle cx="18" cy="18" r="3" fill="#FFD700"/>
            <polygon points="18,6 20,17 18,15 16,17" fill="#FFD700"/>
            <polygon points="18,30 20,19 18,21 16,19" fill="#888"/>
            <polygon points="6,18 17,16 15,18 17,20" fill="#888"/>
            <polygon points="30,18 19,16 21,18 19,20" fill="#FFD700"/>
          </svg>
        </div>
        <h3 class="dimension-name">Personality Core</h3>
        <div class="dimension-count">10 Soalan Mendalam</div>
        <p class="dimension-desc">Cara berfikir, bertindak dan membawa diri dalam situasi kehidupan harian.</p>
      </div>
      
      <div class="dimension-card">
        <div class="dimension-icon">
          <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M4 16L18 4L32 16V32H22V22H14V32H4V16Z" stroke="#FFD700" stroke-width="2" stroke-linejoin="round" fill="none"/>
            <rect x="15" y="22" width="6" height="10" rx="1" stroke="#FFD700" stroke-width="1.5"/>
          </svg>
        </div>
        <h3 class="dimension-name">Lifestyle Preferences</h3>
        <div class="dimension-count">10 Soalan Terperinci</div>
        <p class="dimension-desc">Rutin harian, gaya hidup, minat dan cara menghabiskan masa lapang.</p>
      </div>
      
      <div class="dimension-card">
        <div class="dimension-icon">
          <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="18" cy="18" r="14" stroke="#FFD700" stroke-width="2"/>
            <path d="M18 10V12M18 24V26M13 16C13 14.3 15.2 13 18 13C20.8 13 23 14.3 23 16C23 17.7 21 18.7 18 19C15 19.3 13 20.3 13 22C13 23.7 15.2 25 18 25C20.8 25 23 23.7 23 22" stroke="#FFD700" stroke-width="2" stroke-linecap="round"/>
          </svg>
        </div>
        <h3 class="dimension-name">Financial Mindset</h3>
        <div class="dimension-count">10 Soalan Kritis</div>
        <p class="dimension-desc">Cara mengurus kewangan, komitmen dan matlamat hidup jangka panjang.</p>
      </div>
      
      <div class="dimension-card">
        <div class="dimension-icon">
          <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M6 28V16C6 12 9 9 13 9H23C27 9 30 12 30 16V28" stroke="#FFD700" stroke-width="2" stroke-linecap="round"/>
            <path d="M2 28H34" stroke="#FFD700" stroke-width="2" stroke-linecap="round"/>
            <path d="M18 2C18 2 22 5 18 9C14 5 18 2 18 2Z" fill="#FFD700"/>
            <rect x="14" y="20" width="8" height="8" rx="1" stroke="#FFD700" stroke-width="1.5"/>
          </svg>
        </div>
        <h3 class="dimension-name">Religious Values</h3>
        <div class="dimension-count">10 Soalan Spiritual</div>
        <p class="dimension-desc">Tahap ketaqwaan, nilai agama dan jangkaan spiritual terhadap pasangan.</p>
      </div>
      
      <div class="dimension-card">
        <div class="dimension-icon">
          <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M18 30C18 30 4 22 4 12C4 8.1 7.1 5 11 5C13.7 5 16 6.5 18 9C20 6.5 22.3 5 25 5C28.9 5 32 8.1 32 12C32 22 18 30 18 30Z" stroke="#FFD700" stroke-width="2" stroke-linejoin="round" fill="rgba(255,215,0,0.1)"/>
          </svg>
        </div>
        <h3 class="dimension-name">Love Language</h3>
        <div class="dimension-count">10 Soalan Emosi</div>
        <p class="dimension-desc">Cara menyatakan dan menerima kasih sayang dalam hubungan.</p>
      </div>
      
      <div class="dimension-card">
        <div class="dimension-icon">
          <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M18 8C14 8 10 11 10 15C10 17 11 19 12 20C10 21 8 23 8 26C8 28 9.5 30 12 30H24C26.5 30 28 28 28 26C28 23 26 21 24 20C25 19 26 17 26 15C26 11 22 8 18 8Z" stroke="#FFD700" stroke-width="2" stroke-linejoin="round" fill="none"/>
            <line x1="18" y1="8" x2="18" y2="30" stroke="#FFD700" stroke-width="1.5" stroke-dasharray="2 2"/>
            <circle cx="14" cy="16" r="1.5" fill="#FFD700"/>
            <circle cx="22" cy="16" r="1.5" fill="#FFD700"/>
          </svg>
        </div>
        <h3 class="dimension-name">Emotional Intelligence</h3>
        <div class="dimension-count">10 Soalan Psikologi</div>
        <p class="dimension-desc">Empati, kawalan emosi dan kemampuan memahami perasaan orang lain.</p>
      </div>
      
      <div class="dimension-card">
        <div class="dimension-icon">
          <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="18" cy="9" r="4" stroke="#FFD700" stroke-width="2"/>
            <circle cx="8" cy="12" r="3" stroke="#FFD700" stroke-width="1.5"/>
            <circle cx="28" cy="12" r="3" stroke="#FFD700" stroke-width="1.5"/>
            <path d="M10 28V22C10 20 13 18 18 18C23 18 26 20 26 22V28" stroke="#FFD700" stroke-width="2" stroke-linecap="round"/>
            <path d="M4 28V24C4 22.5 5.5 21.5 8 21" stroke="#FFD700" stroke-width="1.5" stroke-linecap="round"/>
            <path d="M32 28V24C32 22.5 30.5 21.5 28 21" stroke="#FFD700" stroke-width="1.5" stroke-linecap="round"/>
          </svg>
        </div>
        <h3 class="dimension-name">Family Dynamics</h3>
        <div class="dimension-count">10 Soalan Keluarga</div>
        <p class="dimension-desc">Hubungan dengan keluarga, pengaruh ibubapa dan nilai kekeluargaan.</p>
      </div>
      
      <div class="dimension-card">
        <div class="dimension-icon">
          <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M21 4L10 20H18L15 32L26 16H18L21 4Z" fill="rgba(255,215,0,0.15)" stroke="#FFD700" stroke-width="2" stroke-linejoin="round"/>
          </svg>
        </div>
        <h3 class="dimension-name">Conflict Resolution</h3>
        <div class="dimension-count">10 Soalan Konflik</div>
        <p class="dimension-desc">Cara menangani pergaduhan, ego dan mencari penyelesaian bersama.</p>
      </div>
      
      <div class="dimension-card">
        <div class="dimension-icon">
          <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M14 22L22 14" stroke="#FFD700" stroke-width="2" stroke-linecap="round"/>
            <path d="M10 18L8 20C5.8 22.2 5.8 25.8 8 28C10.2 30.2 13.8 30.2 16 28L18 26" stroke="#FFD700" stroke-width="2" stroke-linecap="round"/>
            <path d="M18 10L20 8C22.2 5.8 25.8 5.8 28 8C30.2 10.2 30.2 13.8 28 16L26 18" stroke="#FFD700" stroke-width="2" stroke-linecap="round"/>
          </svg>
        </div>
        <h3 class="dimension-name">Attachment Style</h3>
        <div class="dimension-count">10 Soalan Bonding</div>
        <p class="dimension-desc">Pola kelekatan emosi, keperluan keamanan dan intimacy preferences.</p>
      </div>
    </div>
    
    <div style="text-align: center; margin-top: 60px;">
      <p style="color: #B0B0B0; font-size: 16px; margin-bottom: 32px;">
        + 6 Dimensi Tambahan: Career Ambition (5), Mental Health (5), Marriage Readiness (5), 
        Social Behavior (5), Long-term Compatibility (5), Communication Style (5)
      </p>
    </div>
  </div>
</section>
<div class="gold-shimmer-line"></div>

<!-- TA'ARUF FLOW -->
<section id="taaruf" class="taaruf-section">
  <div class="taaruf-container">
    <div class="slider-header reveal">
      <div class="section-label">Perjalanan Suci</div>
      <h2 class="section-title-main">Proses <span class="gold">Ta'aruf Digital</span></h2>
      <p class="section-desc-main">
        Setiap langkah direka untuk memastikan proses perkenalan yang selamat, terhormat dan patuh syariah sepenuhnya
      </p>
    </div>
    
    <div class="taaruf-flow reveal">

      <!-- Step 1: AI Smart Matching -->
      <div class="flow-step">
        <div class="flow-number">1</div>
        <div class="flow-image">
          <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
            <!-- two profiles -->
            <circle cx="20" cy="22" r="8" stroke="#FFD700" stroke-width="2" fill="rgba(255,215,0,0.07)"/>
            <circle cx="44" cy="22" r="8" stroke="#FFD700" stroke-width="2" fill="rgba(255,215,0,0.07)"/>
            <path d="M8 48V42C8 38 13 35 20 35" stroke="#FFD700" stroke-width="2" stroke-linecap="round"/>
            <path d="M56 48V42C56 38 51 35 44 35" stroke="#FFD700" stroke-width="2" stroke-linecap="round"/>
            <!-- connecting heart -->
            <path d="M32 38C32 38 26 34 26 30C26 27.2 28.2 25 31 25C31.7 25 32.4 25.2 33 25.5C33.6 25.2 34.3 25 35 25C37.8 25 40 27.2 40 30C40 34 32 38 32 38Z" fill="rgba(255,215,0,0.2)" stroke="#FFD700" stroke-width="1.5" stroke-linejoin="round"/>
          </svg>
        </div>
        <h3 class="flow-title">AI Smart Matching</h3>
        <p class="flow-desc">Algoritma menganalisis 115 jawapan anda dan mencari padanan terbaik berdasarkan keserasian mendalam.</p>
      </div>

      <!-- Step 2: Persetujuan Wali -->
      <div class="flow-step">
        <div class="flow-number">2</div>
        <div class="flow-image">
          <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
            <!-- elder figure -->
            <circle cx="32" cy="16" r="8" stroke="#FFD700" stroke-width="2" fill="rgba(255,215,0,0.07)"/>
            <path d="M16 52V44C16 40 23 36 32 36C41 36 48 40 48 44V52" stroke="#FFD700" stroke-width="2" stroke-linecap="round"/>
            <!-- approval checkmark shield -->
            <path d="M32 36C32 36 24 39 24 46C24 50.4 27.6 54 32 54C36.4 54 40 50.4 40 46C40 39 32 36 32 36Z" fill="rgba(255,215,0,0.1)" stroke="#FFD700" stroke-width="1.5"/>
            <path d="M28 46L31 49L37 43" stroke="#FFD700" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </div>
        <h3 class="flow-title">Persetujuan Wali</h3>
        <p class="flow-desc">Wali pihak perempuan menerima notifikasi dan menilai profil calon untuk memberikan kebenaran awal.</p>
      </div>

      <!-- Step 3: Komunikasi Terlindung -->
      <div class="flow-step">
        <div class="flow-number">3</div>
        <div class="flow-image">
          <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
            <!-- chat bubble with lock -->
            <path d="M10 14C10 11.8 11.8 10 14 10H50C52.2 10 54 11.8 54 14V38C54 40.2 52.2 42 50 42H36L26 54V42H14C11.8 42 10 40.2 10 38V14Z" stroke="#FFD700" stroke-width="2" fill="rgba(255,215,0,0.06)" stroke-linejoin="round"/>
            <!-- lock icon inside chat -->
            <rect x="26" y="22" width="12" height="10" rx="2" stroke="#FFD700" stroke-width="1.8"/>
            <path d="M29 22V19.5C29 17.6 30.3 16 32 16C33.7 16 35 17.6 35 19.5V22" stroke="#FFD700" stroke-width="1.8" stroke-linecap="round"/>
            <circle cx="32" cy="27" r="1.5" fill="#FFD700"/>
          </svg>
        </div>
        <h3 class="flow-title">Komunikasi Terlindung</h3>
        <p class="flow-desc">Perbualan dalam platform dengan AI monitoring 24/7 untuk memastikan adab Islam terpelihara.</p>
      </div>

    </div>
    
    <div style="text-align: center; margin-top: 60px;">
      <p style="color: #B0B0B0; font-size: 16px; line-height: 1.8; max-width: 600px; margin: 0 auto 32px;">
        Setiap langkah dipandu oleh tim kaunselor berpengalaman dan mematuhi garis panduan syariah yang ketat untuk memastikan proses ta'aruf yang berkah.
      </p>
    </div>

    <div style="display:flex; justify-content:center; margin-top:56px;">
      <a href="#hero" class="btn-daftar-section" onclick="document.getElementById('hero').scrollIntoView({behavior:'smooth'});return false;">
        Daftar Sekarang
      </a>
    </div>
  </div>
</section>
<div class="gold-shimmer-line"></div>

<!-- WEDDING ECOSYSTEM -->
<section id="wedding" class="wedding-section">
  <div class="wedding-container">
    <div class="slider-header reveal">
      <div class="section-label">Ekosistem Komprehensif</div>
      <h2 class="section-title-main">Spektrum <span class="gold">Ekosistem Perkahwinan</span></h2>
    </div>
    
    <div class="wedding-preview reveal">
      <h3 style="font-family: 'Playfair Display', serif; font-size: 28px; color: var(--pearl); margin-bottom: 24px;">
        Dari Padanan Hingga Pelamin — Semua Dalam Satu Platform
      </h3>
      
      <div class="wedding-mockup">
        <div class="wedding-card">
          <div class="wedding-icon">
            <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
              <rect x="6" y="10" width="24" height="22" rx="2" stroke="#FFD700" stroke-width="1.5"/>
              <rect x="10" y="14" width="4" height="4" rx="1" stroke="#FFD700" stroke-width="1.2"/>
              <rect x="22" y="14" width="4" height="4" rx="1" stroke="#FFD700" stroke-width="1.2"/>
              <rect x="10" y="20" width="4" height="4" rx="1" stroke="#FFD700" stroke-width="1.2"/>
              <rect x="22" y="20" width="4" height="4" rx="1" stroke="#FFD700" stroke-width="1.2"/>
              <rect x="14" y="26" width="8" height="6" rx="1" stroke="#FFD700" stroke-width="1.2"/>
              <path d="M4 10H32" stroke="#FFD700" stroke-width="1.5"/>
              <path d="M14 4L18 10L22 4" stroke="#FFD700" stroke-width="1.5" stroke-linejoin="round"/>
            </svg>
          </div>
          <div class="wedding-name">Mutiara Barakah</div>
          <div class="wedding-price">RM 7K - 10K</div>
        </div>
        <div class="wedding-card">
          <div class="wedding-icon">
            <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
              <rect x="4" y="14" width="28" height="18" rx="2" stroke="#FFD700" stroke-width="1.5"/>
              <rect x="8" y="18" width="5" height="5" rx="1" stroke="#FFD700" stroke-width="1.2"/>
              <rect x="16" y="18" width="5" height="5" rx="1" stroke="#FFD700" stroke-width="1.2"/>
              <rect x="23" y="18" width="5" height="5" rx="1" stroke="#FFD700" stroke-width="1.2"/>
              <rect x="13" y="26" width="10" height="6" rx="1" stroke="#FFD700" stroke-width="1.2"/>
              <path d="M10 14V8C10 6.9 10.9 6 12 6H24C25.1 6 26 6.9 26 8V14" stroke="#FFD700" stroke-width="1.5"/>
              <circle cx="18" cy="10" r="1.5" fill="#FFD700"/>
            </svg>
          </div>
          <div class="wedding-name">Sakinah Mawaddah</div>
          <div class="wedding-price">RM 17K - 25K</div>
        </div>
        <div class="wedding-card">
          <div class="wedding-icon">
            <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M4 28L7 14L13 20L18 8L23 20L29 14L32 28H4Z" stroke="#FFD700" stroke-width="1.5" stroke-linejoin="round" fill="rgba(255,215,0,0.1)"/>
              <rect x="4" y="28" width="28" height="3" rx="1.5" fill="#FFD700"/>
              <circle cx="18" cy="7" r="2" fill="#FFD700"/>
            </svg>
          </div>
          <div class="wedding-name">Mutiara Diraja</div>
          <div class="wedding-price">RM 56K - 80K</div>
        </div>
        <div class="wedding-card">
          <div class="wedding-icon">
            <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
              <polygon points="18,4 32,14 26,32 10,32 4,14" stroke="#FFD700" stroke-width="1.5" fill="rgba(255,215,0,0.1)" stroke-linejoin="round"/>
              <polygon points="18,4 32,14 18,14 4,14" stroke="#FFD700" stroke-width="1" fill="rgba(255,215,0,0.05)"/>
              <line x1="4" y1="14" x2="10" y2="32" stroke="#FFD700" stroke-width="1"/>
              <line x1="32" y1="14" x2="26" y2="32" stroke="#FFD700" stroke-width="1"/>
              <line x1="18" y1="14" x2="18" y2="32" stroke="#FFD700" stroke-width="1"/>
              <line x1="4" y1="14" x2="18" y2="4" stroke="#FFD700" stroke-width="1"/>
              <line x1="32" y1="14" x2="18" y2="4" stroke="#FFD700" stroke-width="1"/>
            </svg>
          </div>
          <div class="wedding-name">Platinum Royal</div>
          <div class="wedding-price">RM 176K - 200K</div>
        </div>
      </div>
      
      <div class="wedding-explanation">
        <strong style="color: var(--gold); font-size: 18px;">Spektrum Ekosistem Perkahwinan</strong> adalah rangkaian lengkap vendor halal, pakej majlis, perkhidmatan fotografi, catering dan wedding planning yang terintegrasi dengan platform. Setiap vendor telah melalui proses audit ketat untuk memastikan kualiti premium dan pematuhan syariah. Sistem booking digital membolehkan pasangan merancang majlis impian mereka dengan mudah dan telus.
      </div>
    </div>
  </div>
</section>


<script>
// ── SUPABASE INIT ──
const { createClient } = supabase;
const supabaseUrl = '<?php echo getenv("SUPABASE_URL"); ?>';
const supabaseKey = '<?php echo getenv("SUPABASE_ANON_KEY"); ?>';
const db = createClient(supabaseUrl, supabaseKey);

// ── STORE SELECTED FILE ──
let selectedFile = null;

// ── IC FORMATTING ──
document.getElementById('icNo')?.addEventListener('input', function(e) {
  let v = e.target.value.replace(/\D/g, '');
  if (v.length > 6 && v.length <= 8) v = v.slice(0,6) + '-' + v.slice(6);
  else if (v.length > 8) v = v.slice(0,6) + '-' + v.slice(6,8) + '-' + v.slice(8,12);
  e.target.value = v;
});

// ── IMAGE UPLOAD HANDLER ──
function handleImageUpload(event) {
  const file = event.target.files[0];
  if (!file) return;
  if (file.size > 5 * 1024 * 1024) {
    alert('Saiz fail melebihi 5MB. Sila pilih gambar yang lebih kecil.');
    event.target.value = '';
    return;
  }
  selectedFile = file;
  const uploadArea = event.target.parentElement;
  uploadArea.innerHTML = `
    <div style="text-align:center; color:var(--gold);">
      <div style="font-size:24px; margin-bottom:8px;">✓</div>
      <div style="font-size:13px;">Gambar berjaya dimuat naik</div>
      <div style="font-size:12px; color:#B0B0B0; margin-top:4px;">${file.name}</div>
    </div>
  `;
}

// ── FORM VALIDATION ──
function validateForm() {
  let valid = true;
  ['fullName','icNo','phoneNo','emailAddr'].forEach(id => {
    const field = document.getElementById(id);
    if (!field.value.trim()) { field.style.borderColor = '#FF6B6B'; valid = false; }
    else { field.style.borderColor = ''; }
  });
  const ic = document.getElementById('icNo').value.replace(/-/g, '');
  if (ic.length !== 12 || !/^\d+$/.test(ic)) {
    document.getElementById('icNo').style.borderColor = '#FF6B6B'; valid = false;
  }
  const email = document.getElementById('emailAddr').value;
  if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
    document.getElementById('emailAddr').style.borderColor = '#FF6B6B'; valid = false;
  }
  return valid;
}

function generateId() {
  const year = new Date().getFullYear();
  const random = Math.random().toString(36).substr(2, 8).toUpperCase();
  return `JDK-${year}-${random}`;
}

  function showErrorPopup(title, message) {
  const existing = document.getElementById('errorPopup');
  if (existing) existing.remove();

  const popup = document.createElement('div');
  popup.id = 'errorPopup';
  popup.style.cssText = `
    position: fixed; inset: 0; z-index: 99999;
    background: rgba(0,0,0,0.85); backdrop-filter: blur(8px);
    display: flex; align-items: center; justify-content: center; padding: 24px;
  `;
  popup.innerHTML = `
    <div style="
      background: linear-gradient(160deg, #1a0000 0%, #000000 100%);
      border: 2px solid rgba(255,80,80,0.4);
      border-radius: 20px; max-width: 420px; width: 100%;
      position: relative; overflow: hidden;
    ">
      <div style="
        position: absolute; top: 0; left: 0; right: 0; height: 3px;
        background: linear-gradient(90deg, transparent, #FF4444, #FF8800, #FF4444, transparent);
      "></div>
      <div style="padding: 40px 36px; text-align: center;">
        <div style="
          width: 70px; height: 70px; margin: 0 auto 20px;
          background: rgba(255,60,60,0.1); border: 2px solid rgba(255,60,60,0.4);
          border-radius: 50%; display: flex; align-items: center; justify-content: center;
          font-size: 32px;
        ">✗</div>
        <h3 style="
          font-family: 'Playfair Display', serif; font-size: 22px;
          color: #fff; margin-bottom: 14px;
        ">${title}</h3>
        <p style="
          color: #B0B0B0; font-size: 14px; line-height: 1.7; margin-bottom: 28px;
        ">${message}</p>
        <button onclick="document.getElementById('errorPopup').remove()" style="
          background: linear-gradient(135deg, #FF4444, #FF8800);
          color: #fff; border: none; padding: 12px 36px;
          border-radius: 8px; font-weight: 700; font-size: 13px;
          cursor: pointer; text-transform: uppercase; letter-spacing: 1px;
        ">Tutup</button>
      </div>
    </div>
  `;
  popup.addEventListener('click', function(e) {
    if (e.target === popup) popup.remove();
  });
  document.body.appendChild(popup);
}

// ── MAIN FORM SUBMIT ──
async function handleFormSubmit(e) {
  e.preventDefault();
  if (!validateForm()) return;
  if (!document.getElementById('agreeTerms').checked) {
    alert('Sila bersetuju dengan Terma & Syarat untuk meneruskan.');
    return;
  }

  const submitBtn = e.target.querySelector('.btn-submit-premium');
  submitBtn.disabled = true;
  submitBtn.textContent = 'Memproses...';

  try {

  const jdk_id = generateId();
  let photo_url = null;

  // ── UPLOAD PHOTO if selected ──
  if (selectedFile) {
    const file = selectedFile;
    const ext = file.name.split('.').pop();
    const filename = `${jdk_id}.${ext}`;

    const { data: uploadData, error: uploadError } = await db.storage
      .from('profile-pics')
      .upload(filename, file);

    console.log('Upload result:', uploadData, uploadError);

    if (uploadError) {
      console.error('Upload error:', uploadError.message);
    } else {
      const { data: urlData } = db.storage
        .from('profile-pics')
        .getPublicUrl(filename);
      photo_url = urlData.publicUrl;
    }
  }

  // ── INSERT ROW ──
  const { error } = await db.from('registrations').insert([{
    jdk_id,
    nama:    document.getElementById('fullName').value.trim(),
    ic:      document.getElementById('icNo').value,
    telefon: document.getElementById('phoneNo').value.trim(),
    email:   document.getElementById('emailAddr').value.trim(),
    photo_url,
  }]);

if (error) {
    console.error('Supabase error:', error.message);
    submitBtn.disabled = false;
    submitBtn.textContent = 'Hantar Permohonan Beta Access';
    const isDuplicate = error.message.includes('unique') || error.code === '23505';
    showErrorPopup(isDuplicate
      ? 'Pendaftaran Didapati Duplikat'
      : 'Ralat Pendaftaran',
      isDuplicate
      ? 'Nombor IC atau e-mel ini telah didaftarkan sebelum ini. Setiap pengguna hanya boleh mendaftar sekali sahaja.'
      : 'Ralat berlaku semasa pendaftaran. Sila cuba sebentar lagi.'
    );
    return;
  }

  // ── SUCCESS ──
  document.getElementById('formView').style.display = 'none';
  document.getElementById('successView').style.display = 'block';
  document.getElementById('generatedId').textContent = jdk_id;

  } catch (err) {
    console.error('Unexpected error:', err);
    submitBtn.disabled = false;
    submitBtn.textContent = 'Hantar Permohonan Beta Access';
    showErrorPopup('Ralat Tidak Dijangka', err.message || 'Sila cuba sebentar lagi.');
  }
}
// ── TOUCH SWIPE CAROUSEL ──
(function() {
  const slider = document.querySelector('.image-slider');
  const track = document.querySelector('.slider-track');
  if (!track || !slider) return;

  const slides = track.querySelectorAll('.slide');
  const total = slides.length;
  let current = 0;
  let startX = 0;
  let isDragging = false;
  let autoTimer = null;

  track.style.animation = 'none';
  track.style.willChange = 'transform';
  track.style.direction = 'ltr';
  slider.style.overflow = 'hidden';
  slider.style.direction = 'ltr';

  function sizeSLides() {
    const w = slider.offsetWidth;
    slides.forEach(s => { s.style.minWidth = w + 'px'; s.style.width = w + 'px'; });
    track.style.width = (w * total) + 'px';
  }

  function goTo(index, animate = true) {
    current = (index + total) % total;
    const w = slides[0].offsetWidth;
    track.style.transition = animate ? 'transform 0.45s cubic-bezier(0.25,0.46,0.45,0.94)' : 'none';
    track.style.transform = `translateX(-${current * w}px)`;
  }

  function resetTimer() {
    clearInterval(autoTimer);
    autoTimer = setInterval(() => goTo(current + 1), 4000);
  }

  sizeSLides();
  goTo(0, false);
  resetTimer();

  window.addEventListener('resize', () => { sizeSLides(); goTo(current, false); });

  slider.addEventListener('touchstart', e => {
    startX = e.touches[0].clientX;
    isDragging = true;
    track.style.transition = 'none';
    clearInterval(autoTimer);
  }, { passive: true });

  slider.addEventListener('touchmove', e => {
    if (!isDragging) return;
    const diff = e.touches[0].clientX - startX;
    track.style.transform = `translateX(${-(current * slides[0].offsetWidth) + diff}px)`;
  }, { passive: true });

  slider.addEventListener('touchend', e => {
    if (!isDragging) return;
    isDragging = false;
    const diff = e.changedTouches[0].clientX - startX;
    if (diff < -50) goTo(current + 1);
    else if (diff > 50) goTo(current - 1);
    else goTo(current);
    resetTimer();
  });
})();

// ── SCROLL ANIMATIONS ──
const observer = new IntersectionObserver((entries) => {
  entries.forEach(e => { if (e.isIntersecting) e.target.classList.add('visible'); });
}, { threshold: 0.1, rootMargin: '0px 0px -50px 0px' });
document.querySelectorAll('.reveal').forEach(el => observer.observe(el));

// ── NAVBAR SCROLL ──
window.addEventListener('scroll', () => {
  const navbar = document.querySelector('.navbar');
  if (navbar) navbar.style.background = window.scrollY > 100 ? 'rgba(0,0,0,0.95)' : 'rgba(0,0,0,0.9)';
});

// ── SMOOTH SCROLL ──
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener('click', function(e) {
    e.preventDefault();
    const target = document.querySelector(this.getAttribute('href'));
    if (target) target.scrollIntoView({ behavior: 'smooth', block: 'start' });
  });
});

// ── MODALS ──
function openModal(id) { document.getElementById(id).classList.add('active'); document.body.style.overflow = 'hidden'; }
function closeModal(id) { document.getElementById(id).classList.remove('active'); document.body.style.overflow = ''; }
document.querySelectorAll('.modal-overlay').forEach(m => {
  m.addEventListener('click', function(e) { if (e.target === this) closeModal(this.id); });
});
</script>

<!-- TERMS & CONDITIONS MODAL -->
<div class="modal-overlay" id="termsModal">
  <div class="modal-box">
    <div class="modal-header">
      <h2 class="modal-title">Terma &amp; Syarat</h2>
      <button class="modal-close" onclick="closeModal('termsModal')">✕</button>
    </div>
    <div class="modal-body">
      <div class="modal-meta">Berkuat kuasa: 1 Januari 2025 &nbsp;|&nbsp; Versi: 2.1 &nbsp;|&nbsp; Bahasa: Bahasa Malaysia</div>
      <div class="modal-section"><h3>1. Penerimaan Terma</h3><p>Dengan mengakses atau menggunakan platform Jodohku.my ("Platform"), anda bersetuju untuk terikat dengan Terma &amp; Syarat ini. Platform ini diuruskan oleh <strong>Noble Synergy Ventures</strong> di bawah undang-undang Malaysia.</p></div>
      <div class="modal-section"><h3>2. Kelayakan Pengguna</h3><ol><li>Anda mesti seorang Muslim atau Muslimah yang telah mencapai umur 18 tahun.</li><li>Anda mesti warganegara Malaysia atau pemastautin tetap yang sah.</li><li>Anda mesti belum berkahwin atau telah bercerai mengikut undang-undang yang sah.</li><li>Semua maklumat yang diberikan mesti tepat, terkini dan benar.</li></ol></div>
      <div class="modal-section"><h3>3. Kod Etika</h3><p>Pengguna wajib mematuhi adab Islam dalam semua komunikasi. Kandungan lucah, pertukaran maklumat peribadi di luar platform, dan aktiviti penipuan adalah <strong>dilarang sama sekali</strong>.</p></div>
      <div class="modal-section"><h3>4. Sistem Wali</h3><p>Penglibatan Wali adalah <strong>diwajibkan</strong> bagi setiap pengguna wanita sebelum sebarang komunikasi dibenarkan.</p></div>
      <div class="modal-section"><h3>5. Hubungi Kami</h3><p><strong>Noble Synergy Ventures</strong><br>E-mel: legal@jodohku.my</p></div>
    </div>
  </div>
</div>

<!-- PRIVACY POLICY MODAL -->
<div class="modal-overlay" id="privacyModal">
  <div class="modal-box">
    <div class="modal-header">
      <h2 class="modal-title">Dasar Privasi</h2>
      <button class="modal-close" onclick="closeModal('privacyModal')">✕</button>
    </div>
    <div class="modal-body">
      <div class="modal-meta">Berkuat kuasa: 1 Januari 2025 &nbsp;|&nbsp; Mematuhi: PDPA 2010 (Malaysia) &nbsp;|&nbsp; Versi: 2.1</div>
      <div class="modal-section"><h3>1. Tanggungjawab Kami</h3><p>Noble Synergy Ventures komited untuk melindungi privasi anda selaras dengan Akta Perlindungan Data Peribadi 2010 (PDPA 2010) Malaysia.</p></div>
      <div class="modal-section"><h3>2. Data Yang Dikumpul</h3><ul><li><strong>Data Identiti:</strong> Nama penuh, nombor MyKad, tarikh lahir.</li><li><strong>Data Profil:</strong> Gambar, pendidikan, pekerjaan, nilai agama.</li><li><strong>Data Psikologi:</strong> Jawapan 115 soalan (diproses tanpa nama).</li><li><strong>Data Teknikal:</strong> Alamat IP, log akses.</li></ul></div>
      <div class="modal-section"><h3>3. Hak Pengguna</h3><p>Anda berhak untuk mengakses, meminda, menarik balik kebenaran, dan meminta pemadaman data anda. Hubungi: <strong>privasi@jodohku.my</strong></p></div>
    </div>
  </div>
</div>

  <script>
// ── TRANSLATIONS ──
const i18n = {
  ms: {
    footer_copyright: '&copy; 2025 <strong>Jodohku.my</strong>. Hak Cipta Terpelihara.',
footer_initiative: 'Sebuah Inisiatif',
footer_sub: 'Jodohku.my adalah jenama di bawah portfolio <strong style="color:#555;">Noble Synergy Ventures</strong>',
footer_tagline: 'Noble Synergy Ventures &nbsp;&#9670;&nbsp; Islamic Marriage Platform',
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
    slider_desc: '10 aspek utama platform yang mengubah cara Muslim Malaysia mencari pasangan hidup',
    slides: [
      { title: 'Padanan Berdasarkan Nilai Islam', desc: 'AI menganalisis keserasian agama, akhlak dan nilai hidup' },
      { title: 'Teknologi AI Terdepan', desc: '115 soalan psikologi dianalisis menggunakan machine learning' },
      { title: 'Keselamatan Maksimum', desc: 'Identiti dilindungi dengan kod unik sehingga kedua-dua pihak bersetuju' },
      { title: 'Sistem Wali Digital', desc: 'Platform pertama yang mewajibkan penglibatan wali dalam proses ta\'aruf' },
      { title: 'Komuniti Premium Muslim', desc: 'Eksklusif untuk Muslim profesional yang serius mencari jodoh' },
      { title: 'Ekosistem Perkahwinan', desc: 'Dari padanan hingga pelamin — semua dalam satu platform' },
      { title: 'Analitik Mendalam', desc: 'Laporan keserasian terperinci berdasarkan 14 dimensi personaliti' },
      { title: 'Aplikasi Mobile Premium', desc: 'Interface yang elegant dan mudah digunakan untuk iOS dan Android' },
      { title: 'Bimbingan Kaunselor Islam', desc: 'Tim pakar relationship coach dan kaunselor Islam sentiasa siap membantu' },
      { title: 'Kisah Kejayaan', desc: 'Beribu pasangan telah menemui jodoh melalui platform kami' },
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
    terms_title: 'Terma & Syarat', privacy_title: 'Dasar Privasi',
    terms_meta: 'Berkuat kuasa: 1 Januari 2025 &nbsp;|&nbsp; Versi: 2.1 &nbsp;|&nbsp; Bahasa: Bahasa Malaysia',
    privacy_meta: 'Berkuat kuasa: 1 Januari 2025 &nbsp;|&nbsp; Mematuhi: PDPA 2010 (Malaysia) &nbsp;|&nbsp; Versi: 2.1',
    close_btn: '✕',
    terms_sections: [
      { h: '1. Penerimaan Terma', p: 'Dengan mengakses atau menggunakan platform Jodohku.my ("Platform"), anda bersetuju untuk terikat dengan Terma & Syarat ini. Platform ini diuruskan oleh <strong>Noble Synergy Ventures</strong> di bawah undang-undang Malaysia.' },
      { h: '2. Kelayakan Pengguna', p: '<ol><li>Anda mesti seorang Muslim atau Muslimah yang telah mencapai umur 18 tahun.</li><li>Anda mesti warganegara Malaysia atau pemastautin tetap yang sah.</li><li>Anda mesti belum berkahwin atau telah bercerai mengikut undang-undang yang sah.</li><li>Semua maklumat yang diberikan mesti tepat, terkini dan benar.</li></ol>' },
      { h: '3. Kod Etika', p: 'Pengguna wajib mematuhi adab Islam dalam semua komunikasi. Kandungan lucah, pertukaran maklumat peribadi di luar platform, dan aktiviti penipuan adalah <strong>dilarang sama sekali</strong>.' },
      { h: '4. Sistem Wali', p: 'Penglibatan Wali adalah <strong>diwajibkan</strong> bagi setiap pengguna wanita sebelum sebarang komunikasi dibenarkan.' },
      { h: '5. Hubungi Kami', p: '<strong>Noble Synergy Ventures</strong><br>E-mel: legal@jodohku.my' },
    ],
    privacy_sections: [
      { h: '1. Tanggungjawab Kami', p: 'Noble Synergy Ventures komited untuk melindungi privasi anda selaras dengan Akta Perlindungan Data Peribadi 2010 (PDPA 2010) Malaysia.' },
      { h: '2. Data Yang Dikumpul', p: '<ul><li><strong>Data Identiti:</strong> Nama penuh, nombor MyKad, tarikh lahir.</li><li><strong>Data Profil:</strong> Gambar, pendidikan, pekerjaan, nilai agama.</li><li><strong>Data Psikologi:</strong> Jawapan 115 soalan (diproses tanpa nama).</li><li><strong>Data Teknikal:</strong> Alamat IP, log akses.</li></ul>' },
      { h: '3. Hak Pengguna', p: 'Anda berhak untuk mengakses, meminda, menarik balik kebenaran, dan meminta pemadaman data anda. Hubungi: <strong>privasi@jodohku.my</strong>' },
    ],
  },

  en: {
    footer_copyright: '&copy; 2025 <strong>Jodohku.my</strong>. All Rights Reserved.',
footer_initiative: 'An Initiative by',
footer_sub: 'Jodohku.my is a brand under the portfolio of <strong style="color:#555;">Noble Synergy Ventures</strong>',
footer_tagline: 'Noble Synergy Ventures &nbsp;&#9670;&nbsp; Islamic Marriage Platform',
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
    slider_desc: '10 key aspects of the platform transforming how Malaysian Muslims find their life partner',
    slides: [
      { title: 'Matching Based on Islamic Values', desc: 'AI analyses religious compatibility, character and life values' },
      { title: 'Leading AI Technology', desc: '115 psychology questions analysed using machine learning' },
      { title: 'Maximum Security', desc: 'Identity protected with a unique code until both parties agree to meet' },
      { title: 'Digital Wali System', desc: 'The first platform to make guardian involvement mandatory in ta\'aruf' },
      { title: 'Premium Muslim Community', desc: 'Exclusive for serious Muslim professionals seeking a life partner' },
      { title: 'Wedding Ecosystem', desc: 'From matching to the wedding ceremony — all in one platform' },
      { title: 'In-Depth Analytics', desc: 'Detailed compatibility report based on 14 personality dimensions' },
      { title: 'Premium Mobile App', desc: 'Elegant and easy-to-use interface for iOS and Android' },
      { title: 'Islamic Counsellor Guidance', desc: 'Our team of relationship coaches and Islamic counsellors is always ready to help' },
      { title: 'Success Stories', desc: 'Thousands of couples have found their match through our platform' },
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
    terms_title: 'Terms & Conditions', privacy_title: 'Privacy Policy',
    terms_meta: 'Effective: 1 January 2025 &nbsp;|&nbsp; Version: 2.1 &nbsp;|&nbsp; Language: English',
    privacy_meta: 'Effective: 1 January 2025 &nbsp;|&nbsp; Compliant with: PDPA 2010 (Malaysia) &nbsp;|&nbsp; Version: 2.1',
    close_btn: '✕',
    terms_sections: [
      { h: '1. Acceptance of Terms', p: 'By accessing or using the Jodohku.my platform ("Platform"), you agree to be bound by these Terms & Conditions. This platform is operated by <strong>Noble Synergy Ventures</strong> under the laws of Malaysia.' },
      { h: '2. User Eligibility', p: '<ol><li>You must be a Muslim who has reached the age of 18.</li><li>You must be a Malaysian citizen or a valid permanent resident.</li><li>You must be unmarried or lawfully divorced.</li><li>All information provided must be accurate, current and truthful.</li></ol>' },
      { h: '3. Code of Conduct', p: 'Users must observe Islamic etiquette in all communications. Obscene content, exchange of personal information outside the platform, and fraudulent activities are <strong>strictly prohibited</strong>.' },
      { h: '4. Guardian System', p: 'Guardian involvement is <strong>mandatory</strong> for every female user before any communication is permitted.' },
      { h: '5. Contact Us', p: '<strong>Noble Synergy Ventures</strong><br>Email: legal@jodohku.my' },
    ],
    privacy_sections: [
      { h: '1. Our Responsibility', p: 'Noble Synergy Ventures is committed to protecting your privacy in accordance with the Personal Data Protection Act 2010 (PDPA 2010) of Malaysia.' },
      { h: '2. Data Collected', p: '<ul><li><strong>Identity Data:</strong> Full name, MyKad number, date of birth.</li><li><strong>Profile Data:</strong> Photo, education, occupation, religious values.</li><li><strong>Psychology Data:</strong> Answers to 115 questions (processed anonymously).</li><li><strong>Technical Data:</strong> IP address, access logs.</li></ul>' },
      { h: '3. User Rights', p: 'You have the right to access, amend, withdraw consent, and request deletion of your data. Contact: <strong>privasi@jodohku.my</strong>' },
    ],
  },

  ar: {
    footer_copyright: '&copy; 2025 <strong>Jodohku.my</strong>. جميع الحقوق محفوظة.',
footer_initiative: 'مبادرة من',
footer_sub: 'Jodohku.my علامة تجارية ضمن محفظة <strong style="color:#555;">Noble Synergy Ventures</strong>',
footer_tagline: 'Noble Synergy Ventures &nbsp;&#9670;&nbsp; Islamic Marriage Platform',
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
    slider_desc: '١٠ جوانب رئيسية للمنصة تُغيّر طريقة بحث المسلمين الماليزيين عن شريك الحياة',
    slides: [
      { title: 'مطابقة مبنية على القيم الإسلامية', desc: 'يحلل الذكاء الاصطناعي التوافق الديني والأخلاقي وقيم الحياة' },
      { title: 'تقنية الذكاء الاصطناعي المتقدمة', desc: '١١٥ سؤالاً نفسياً يتم تحليلها باستخدام التعلم الآلي' },
      { title: 'أمان قصوى', desc: 'الهوية محمية برمز فريد حتى يوافق الطرفان على اللقاء' },
      { title: 'نظام الولي الرقمي', desc: 'المنصة الأولى التي تُلزم بمشاركة الولي في عملية التعارف' },
      { title: 'مجتمع المسلمين المتميز', desc: 'حصري للمسلمين المحترفين الجادين في البحث عن شريك الحياة' },
      { title: 'منظومة الزواج', desc: 'من المطابقة إلى حفل الزفاف — كل شيء في منصة واحدة' },
      { title: 'تحليلات معمّقة', desc: 'تقرير توافق مفصّل مبني على ١٤ بُعداً شخصياً' },
      { title: 'تطبيق جوال متميز', desc: 'واجهة أنيقة وسهلة الاستخدام لنظامَي iOS وAndroid' },
      { title: 'إرشاد المستشار الإسلامي', desc: 'فريق متخصص من مدربي العلاقات والمستشارين الإسلاميين دائماً في الخدمة' },
      { title: 'قصص النجاح', desc: 'آلاف الأزواج وجدوا شريك حياتهم عبر منصتنا' },
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
    terms_title: 'الشروط والأحكام', privacy_title: 'سياسة الخصوصية',
    terms_meta: 'نافذ المفعول: ١ يناير ٢٠٢٥ &nbsp;|&nbsp; الإصدار: ٢.١',
    privacy_meta: 'نافذ المفعول: ١ يناير ٢٠٢٥ &nbsp;|&nbsp; متوافق مع: PDPA 2010 (ماليزيا) &nbsp;|&nbsp; الإصدار: ٢.١',
    close_btn: '✕',
    terms_sections: [
      { h: '١. قبول الشروط', p: 'باستخدامك لمنصة Jodohku.my، فإنك توافق على الالتزام بهذه الشروط والأحكام. تُدار هذه المنصة من قِبَل <strong>Noble Synergy Ventures</strong> وفق قوانين ماليزيا.' },
      { h: '٢. أهلية المستخدم', p: '<ol><li>يجب أن تكون مسلماً أو مسلمة بلغت سن ١٨ عاماً.</li><li>يجب أن تكون مواطناً ماليزياً أو مقيماً دائماً شرعياً.</li><li>يجب أن تكون أعزباً أو مطلقاً وفق القانون النافذ.</li><li>يجب أن تكون جميع المعلومات المقدمة دقيقة وحديثة وصحيحة.</li></ol>' },
      { h: '٣. قواعد السلوك', p: 'يلتزم المستخدمون بمراعاة الآداب الإسلامية في جميع المراسلات. المحتوى الفاضح وتبادل المعلومات الشخصية خارج المنصة والأنشطة الاحتيالية <strong>محظورة تماماً</strong>.' },
      { h: '٤. نظام الولي', p: 'مشاركة الولي <strong>إلزامية</strong> لكل مستخدمة قبل السماح بأي تواصل.' },
      { h: '٥. تواصل معنا', p: '<strong>Noble Synergy Ventures</strong><br>البريد الإلكتروني: legal@jodohku.my' },
    ],
    privacy_sections: [
      { h: '١. مسؤوليتنا', p: 'تلتزم Noble Synergy Ventures بحماية خصوصيتك وفقاً لقانون حماية البيانات الشخصية لعام ٢٠١٠ (PDPA 2010) في ماليزيا.' },
      { h: '٢. البيانات المجمّعة', p: '<ul><li><strong>بيانات الهوية:</strong> الاسم الكامل، رقم بطاقة الهوية، تاريخ الميلاد.</li><li><strong>بيانات الملف الشخصي:</strong> الصورة، التعليم، المهنة، القيم الدينية.</li><li><strong>البيانات النفسية:</strong> إجابات الـ١١٥ سؤالاً (تتم معالجتها بصورة مجهولة).</li><li><strong>البيانات التقنية:</strong> عنوان IP، سجلات الوصول.</li></ul>' },
      { h: '٣. حقوق المستخدم', p: 'يحق لك الوصول إلى بياناتك وتعديلها وسحب الموافقة وطلب حذفها. تواصل عبر: <strong>privasi@jodohku.my</strong>' },
    ],
  }
};
    
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
  if (btnSub && !btnSub.disabled) btnSub.textContent = t.btn_submit;
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
</script>

<?php include 'footer.php'; ?>

</body>
</html>
