<!DOCTYPE html>
<html lang="ms">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Jodohku.my — Platform Ultra-Premium Perkahwinan Islam</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&family=Tajawal:wght@300;400;500;700&family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="styles.css">
  <!-- Supabase CDN — add this in <head> -->
<script src="https://cdn.jsdelivr.net/npm/@supabase/supabase-js@2"></script>
</head>
<body>
  
  <?php include 'nav.php'; ?>

<!-- HERO WITH FORM -->
<section id="hero" class="hero-section">
  <div class="hero-bg-pattern"></div>
  <div class="hero-container">
    <div class="hero-content">
      <div class="hero-badge">
        <!-- Crown SVG -->
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
            <!-- Crown SVG large -->
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
                <!-- Camera SVG -->
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
          <!-- Checkmark SVG -->
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

<!-- IMAGE SLIDER -->
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
        <!-- Slide 1: Islamic values / couple ta'aruf -->
        <div class="slide">
          <img src="https://images.unsplash.com/photo-1591604129939-f1efa4d9f7fa?w=900&h=260&fit=crop&q=80" alt="Padanan Nilai Islam">
          <div class="slide-overlay">
            <div class="slide-content">
              <h3 class="slide-title">Padanan Berdasarkan Nilai Islam</h3>
              <p class="slide-desc">AI menganalisis keserasian agama, akhlak dan nilai hidup</p>
            </div>
          </div>
        </div>
        <!-- Slide 2: AI / data science -->
        <div class="slide">
          <img src="https://images.unsplash.com/photo-1677442135703-1787eea5ce01?w=900&h=260&fit=crop&q=80" alt="AI Technology">
          <div class="slide-overlay">
            <div class="slide-content">
              <h3 class="slide-title">Teknologi AI Terdepan</h3>
              <p class="slide-desc">115 soalan psikologi dianalisis menggunakan machine learning</p>
            </div>
          </div>
        </div>
        <!-- Slide 3: Digital security / shield -->
        <div class="slide">
          <img src="https://images.unsplash.com/photo-1614064641938-3bbee52942c7?w=900&h=260&fit=crop&q=80" alt="Keselamatan Digital">
          <div class="slide-overlay">
            <div class="slide-content">
              <h3 class="slide-title">Keselamatan Maksimum</h3>
              <p class="slide-desc">Identiti dilindungi dengan kod unik sehingga kedua-dua pihak bersetuju</p>
            </div>
          </div>
        </div>
        <!-- Slide 4: Family / wali -->
        <div class="slide">
          <img src="https://images.unsplash.com/photo-1511895426328-dc8714191011?w=900&h=260&fit=crop&q=80" alt="Sistem Wali">
          <div class="slide-overlay">
            <div class="slide-content">
              <h3 class="slide-title">Sistem Wali Digital</h3>
              <p class="slide-desc">Platform pertama yang mewajibkan penglibatan wali dalam proses ta'aruf</p>
            </div>
          </div>
        </div>
        <!-- Slide 5: Muslim community professionals -->
        <div class="slide">
          <img src="https://images.unsplash.com/photo-1519671482749-fd09be7ccebf?w=900&h=260&fit=crop&q=80" alt="Komuniti Muslim">
          <div class="slide-overlay">
            <div class="slide-content">
              <h3 class="slide-title">Komuniti Premium Muslim</h3>
              <p class="slide-desc">Eksklusif untuk Muslim profesional yang serius mencari jodoh</p>
            </div>
          </div>
        </div>
        <!-- Slide 6: Wedding / perkahwinan -->
        <div class="slide">
          <img src="https://images.unsplash.com/photo-1606216794074-735e91aa2c92?w=900&h=260&fit=crop&q=80" alt="Ekosistem Perkahwinan">
          <div class="slide-overlay">
            <div class="slide-content">
              <h3 class="slide-title">Ekosistem Perkahwinan</h3>
              <p class="slide-desc">Dari padanan hingga pelamin — semua dalam satu platform</p>
            </div>
          </div>
        </div>
        <!-- Slide 7: Data analytics -->
        <div class="slide">
          <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=900&h=260&fit=crop&q=80" alt="Analitik Data">
          <div class="slide-overlay">
            <div class="slide-content">
              <h3 class="slide-title">Analitik Mendalam</h3>
              <p class="slide-desc">Laporan keserasian terperinci berdasarkan 14 dimensi personaliti</p>
            </div>
          </div>
        </div>
        <!-- Slide 8: Mobile app -->
        <div class="slide">
          <img src="https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?w=900&h=260&fit=crop&q=80" alt="Aplikasi Mobile">
          <div class="slide-overlay">
            <div class="slide-content">
              <h3 class="slide-title">Aplikasi Mobile Premium</h3>
              <p class="slide-desc">Interface yang elegant dan mudah digunakan untuk iOS dan Android</p>
            </div>
          </div>
        </div>
        <!-- Slide 9: Islamic counsellor -->
        <div class="slide">
          <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=900&h=260&fit=crop&q=80" alt="Kaunselor Islam">
          <div class="slide-overlay">
            <div class="slide-content">
              <h3 class="slide-title">Bimbingan Kaunselor Islam</h3>
              <p class="slide-desc">Tim pakar relationship coach dan kaunselor Islam sentiasa siap membantu</p>
            </div>
          </div>
        </div>
        <!-- Slide 10: Happy Muslim couple / success -->
        <div class="slide">
          <img src="https://images.unsplash.com/photo-1583939003579-730e3918a45a?w=900&h=260&fit=crop&q=80" alt="Kisah Kejayaan">
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

<!-- PILLARS WITH AI IMAGES -->
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
      <div class="pillar-card">
        <div class="pillar-image">
          <!-- Masjid / mosque Malaysia -->
          <img src="https://images.unsplash.com/photo-1597138803812-c01534e1dbfc?w=200&h=200&fit=crop&q=80" alt="Mosque Malaysia">
        </div>
        <div class="pillar-number">Teras 1</div>
        <h3 class="pillar-title">Kesucian Agama</h3>
        <p class="pillar-desc">Menghapuskan ruang zina, memelihara adab, dan menstrukturkan ta'aruf berlandaskan syariah.</p>
      </div>
      
      <div class="pillar-card">
        <div class="pillar-image">
          <!-- Digital shield / cybersecurity -->
          <img src="https://images.unsplash.com/photo-1614064641938-3bbee52942c7?w=200&h=200&fit=crop&q=80" alt="Perlindungan Digital">
        </div>
        <div class="pillar-number">Teras 2</div>
        <h3 class="pillar-title">Perlindungan Sosial</h3>
        <p class="pillar-desc">Pemerkasaan Mod Wali, perlindungan identiti dan pembanterasan scam romantik.</p>
      </div>
      
      <div class="pillar-card">
        <div class="pillar-image">
          <!-- Malaysian small business / economy -->
          <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?w=200&h=200&fit=crop&q=80" alt="Ekonomi Muslim">
        </div>
        <div class="pillar-number">Teras 3</div>
        <h3 class="pillar-title">Pemerkasaan Ekonomi</h3>
        <p class="pillar-desc">Rantaian nilai perkahwinan yang menyokong vendor PKS Muslim bersijil halal.</p>
      </div>
      
      <div class="pillar-card">
        <div class="pillar-image">
          <!-- AI / neural network -->
          <img src="https://images.unsplash.com/photo-1677442135703-1787eea5ce01?w=200&h=200&fit=crop&q=80" alt="AI Teknologi">
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

<!-- USP WITH AI IMAGES -->
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
      <div class="usp-card">
        <div class="usp-image">
          <!-- Identity / MyKad / privacy -->
          <img src="https://images.unsplash.com/photo-1586953208448-b95a79798f07?w=200&h=200&fit=crop&q=80" alt="Identiti Selamat">
        </div>
        <h3 class="usp-title">Identiti Kod Rahsia</h3>
        <p class="usp-desc">Nama sebenar disembunyikan dengan kod unik (JDK-2025-XX) sehingga kedua-dua pihak bersetuju bertemu.</p>
      </div>
      
      <div class="usp-card">
        <div class="usp-image">
          <!-- AI brain / neural matching -->
          <img src="https://images.unsplash.com/photo-1620712943543-bcc4688e7485?w=200&h=200&fit=crop&q=80" alt="AI Padanan">
        </div>
        <h3 class="usp-title">AI Padanan Saintifik</h3>
        <p class="usp-desc">115 soalan psikologi dianalisis AI untuk padanan 847% lebih tepat berbanding swipe-based apps.</p>
      </div>
      
      <div class="usp-card">
        <div class="usp-image">
          <!-- Content filter / shield -->
          <img src="https://images.unsplash.com/photo-1550751827-4bd374c3f58b?w=200&h=200&fit=crop&q=80" alt="Content Shield">
        </div>
        <h3 class="usp-title">Real-Time Content Shield</h3>
        <p class="usp-desc">AI menyekat kandungan haram, pertukaran nombor telefon dan ajakan tidak sesuai dalam 0.3 saat.</p>
      </div>
      
      <div class="usp-card">
        <div class="usp-image">
          <!-- Wedding ecosystem / flowers -->
          <img src="https://images.unsplash.com/photo-1519225421980-715cb0215aed?w=200&h=200&fit=crop&q=80" alt="Ekosistem">
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
          <!-- Compass SVG -->
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
          <!-- Home SVG -->
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
          <!-- Money/coin SVG -->
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
          <!-- Mosque/crescent SVG -->
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
          <!-- Heart SVG -->
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
          <!-- Brain SVG -->
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
          <!-- Family SVG -->
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
          <!-- Lightning/conflict SVG -->
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
          <!-- Chain/link SVG -->
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
      <div class="flow-step">
        <div class="flow-number">1</div>
        <div class="flow-image">
          <!-- AI matching illustration -->
          <img src="https://images.unsplash.com/photo-1677442135703-1787eea5ce01?w=200&h=200&fit=crop&q=80" alt="AI Matching">
        </div>
        <h3 class="flow-title">AI Smart Matching</h3>
        <p class="flow-desc">Algoritma menganalisis 115 jawapan anda dan mencari padanan terbaik berdasarkan keserasian mendalam.</p>
      </div>
      
      <div class="flow-step">
        <div class="flow-number">2</div>
        <div class="flow-image">
          <!-- Family / wali approval -->
          <img src="https://images.unsplash.com/photo-1511895426328-dc8714191011?w=200&h=200&fit=crop&q=80" alt="Wali Approval">
        </div>
        <h3 class="flow-title">Persetujuan Wali</h3>
        <p class="flow-desc">Wali pihak perempuan menerima notifikasi dan menilai profil calon untuk memberikan kebenaran awal.</p>
      </div>
      
      <div class="flow-step">
        <div class="flow-number">3</div>
        <div class="flow-image">
          <!-- Secure chat / encrypted communication -->
          <img src="https://images.unsplash.com/photo-1614064641938-3bbee52942c7?w=200&h=200&fit=crop&q=80" alt="Komunikasi Terlindung">
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

<!-- WEDDING ECOSYSTEM COMING SOON -->
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
            <!-- Building SVG -->
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
            <!-- Hotel/stars SVG -->
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
            <!-- Crown SVG -->
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
            <!-- Diamond SVG -->
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
  const fileInput = document.getElementById('profilePic');
  if (fileInput && fileInput.files[0]) {
    const file = fileInput.files[0];
    const ext = file.name.split('.').pop();
    const filename = `${jdk_id}.${ext}`;

    const { error: uploadError } = await db.storage
      .from('profile-pics')
      .upload(filename, file);

    if (uploadError) {
      console.error('Upload error:', uploadError.message);
      // non-fatal — continue without photo
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
  const supabaseUrl = '<?php echo getenv("SUPABASE_URL"); ?>';
  const supabaseKey = '<?php echo getenv("SUPABASE_ANON_KEY"); ?>';
</script>

<?php include 'footer.php'; ?>

</body>
</html>
