<!DOCTYPE html>
<html lang="ms">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Jodohku.my — Platform Ultra-Premium Perkahwinan Islam</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&family=Tajawal:wght@300;400;500;700&family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="styles.css">
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
          Tahniah! Anda telah berjaya mendaftar untuk beta access Jodohku.my. 
          Kami akan menghubungi anda dalam 24-48 jam.
        </p>
        <div class="success-id" id="generatedId"></div>
      </div>
    </div>
  </div>
</section>
<div class="gold-shimmer-line"></div>

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
        <div class="slide">
          <img src="https://images.unsplash.com/photo-1604881988758-f76ad2f7aac1?w=900&h=260&fit=crop&q=80" alt="Muslim Couple Discussion">
          <div class="slide-overlay">
            <div class="slide-content">
              <h3 class="slide-title">Padanan Berdasarkan Nilai Islam</h3>
              <p class="slide-desc">AI menganalisis keserasian agama, akhlak dan nilai hidup</p>
            </div>
          </div>
        </div>

        <div class="slide">
          <img src="https://images.unsplash.com/photo-1620712943543-bcc4688e7485?w=900&h=260&fit=crop&q=80" alt="AI Interface">
          <div class="slide-overlay">
            <div class="slide-content">
              <h3 class="slide-title">Teknologi AI Terdepan</h3>
              <p class="slide-desc">115 soalan psikologi dianalisis menggunakan machine learning</p>
            </div>
          </div>
        </div>

        <div class="slide">
         <img src="https://images.unsplash.com/photo-1555949963-aa79dcee981c?w=900&h=260&fit=crop&q=80" alt="Cyber Security">
          <div class="slide-overlay">
            <div class="slide-content">
              <h3 class="slide-title">Keselamatan Maksimum</h3>
              <p class="slide-desc">Identiti dilindungi dengan kod unik sehingga kedua-dua pihak bersetuju</p>
            </div>
          </div>
        </div>

        <div class="slide">
          <img src="https://images.unsplash.com/photo-1591604466107-ec97de577aff?w=900&h=260&fit=crop&q=80" alt="Family Discussion Muslim">
          <div class="slide-overlay">
            <div class="slide-content">
              <h3 class="slide-title">Sistem Wali Digital</h3>
              <p class="slide-desc">Platform pertama yang mewajibkan penglibatan wali dalam proses ta'aruf</p>
            </div>
          </div>
        </div>

        <div class="slide">
          <img src="https://images.unsplash.com/photo-1542810634-71277d95dcbb?w=900&h=260&fit=crop&q=80" alt="Muslim Professionals">
          <div class="slide-overlay">
            <div class="slide-content">
              <h3 class="slide-title">Komuniti Premium Muslim</h3>
              <p class="slide-desc">Eksklusif untuk Muslim profesional yang serius mencari jodoh</p>
            </div>
          </div>
        </div>

        <div class="slide">
          <img src="https://images.unsplash.com/photo-1522673607200-164d1b6ce486?w=900&h=260&fit=crop&q=80" alt="Wedding Couple Muslim">
          <div class="slide-overlay">
            <div class="slide-content">
              <h3 class="slide-title">Ekosistem Perkahwinan</h3>
              <p class="slide-desc">Dari padanan hingga pelamin — semua dalam satu platform</p>
            </div>
          </div>
        </div>

        <div class="slide">
          <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=900&h=260&fit=crop&q=80" alt="Data Dashboard">
          <div class="slide-overlay">
            <div class="slide-content">
              <h3 class="slide-title">Analitik Mendalam</h3>
              <p class="slide-desc">Laporan keserasian terperinci berdasarkan 14 dimensi personaliti</p>
            </div>
          </div>
        </div>

        <div class="slide">
         <img src="https://images.unsplash.com/photo-1512499617640-c2f999098c01?w=900&h=260&fit=crop&q=80" alt="Mobile App UI">
          <div class="slide-overlay">
            <div class="slide-content">
              <h3 class="slide-title">Aplikasi Mobile Premium</h3>
              <p class="slide-desc">Interface yang elegant dan mudah digunakan untuk iOS dan Android</p>
            </div>
          </div>
        </div>

        <div class="slide">
          <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=900&h=260&fit=crop&q=80" alt="Counseling Session">
          <div class="slide-overlay">
            <div class="slide-content">
              <h3 class="slide-title">Bimbingan Kaunselor Islam</h3>
              <p class="slide-desc">Tim pakar relationship coach dan kaunselor Islam sentiasa siap membantu</p>
            </div>
          </div>
        </div>

        <div class="slide">
        <img src="https://images.unsplash.com/photo-1529634896164-bd4b3c3d9e2e?w=900&h=260&fit=crop&q=80" alt="Happy Muslim Couple">
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
            <td class="cross">✗ Tiada</td>
            <td class="cross">✗ Optional</td>
            <td class="jodohku check">✓ Diwajibkan</td>
          </tr>
          <tr>
            <td class="feature">Verifikasi Identiti Penuh</td>
            <td class="cross">✗ Selfie sahaja</td>
            <td class="cross">✗ Selfie sahaja</td>
            <td class="jodohku check">✓ MyKad + Biometrik</td>
          </tr>
          <tr>
            <td class="feature">AI Content Filtering Real-Time</td>
            <td class="cross">✗ Manual report</td>
            <td class="cross">✗ Manual report</td>
            <td class="jodohku check">✓ 0.3 saat response</td>
          </tr>
          <tr>
            <td class="feature">Psikologi Matching Algorithm</td>
            <td class="cross">✗ Appearance based</td>
            <td class="cross">✗ Basic preferences</td>
            <td class="jodohku check">✓ 115 soalan saintifik</td>
          </tr>
          <tr>
            <td class="feature">Wedding Ecosystem</td>
            <td class="cross">✗ Berhenti di match</td>
            <td class="cross">✗ Berhenti di match</td>
            <td class="jodohku check">✓ Hingga pelamin</td>
          </tr>
          <tr>
            <td class="feature">Shariah Compliance Audit</td>
            <td class="cross">✗ Tiada</td>
            <td class="cross">✗ Self-declared</td>
            <td class="jodohku check">✓ Board certified</td>
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
<div class="gold-shimmer-line"></div>

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
    alert('Ralat berlaku: ' + error.message);
    return;
  }

  // ── SUCCESS ──
  document.getElementById('formView').style.display = 'none';
  document.getElementById('successView').style.display = 'block';
  document.getElementById('generatedId').textContent = jdk_id;
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

  // Kill CSS animation and set up JS control
  track.style.animation = 'none';
  track.style.willChange = 'transform';
  slider.style.overflow = 'hidden';

  // Ensure each slide is exactly 100% of the slider width
  function sizeSLides() {
    const w = slider.offsetWidth;
    slides.forEach(s => { s.style.minWidth = w + 'px'; s.style.width = w + 'px'; });
    track.style.width = (w * total) + 'px';
  }

  function goTo(index, animate = true) {
    current = (index + total) % total;
    track.style.transition = animate ? 'transform 0.45s cubic-bezier(0.25,0.46,0.45,0.94)' : 'none';
    track.style.transform = `translateX(-${current * slider.offsetWidth}px)`;
  }

  function resetTimer() {
    clearInterval(autoTimer);
    autoTimer = setInterval(() => goTo(current + 1), 4000);
  }

  sizeSLides();
  goTo(0, false);
  resetTimer();

  window.addEventListener('resize', () => { sizeSLides(); goTo(current, false); });

  // Touch
  slider.addEventListener('touchstart', e => {
    startX = e.touches[0].clientX;
    isDragging = true;
    track.style.transition = 'none';
    clearInterval(autoTimer);
  }, { passive: true });

  slider.addEventListener('touchmove', e => {
    if (!isDragging) return;
    const diff = e.touches[0].clientX - startX;
    track.style.transform = `translateX(${-(current * slider.offsetWidth) + diff}px)`;
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

<?php include 'footer.php'; ?>

</body>
</html>
