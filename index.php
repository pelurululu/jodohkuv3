<!DOCTYPE html>
<html lang="ms">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Jodohku.my — Platform Ultra-Premium Perkahwinan Islam</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&family=Tajawal:wght@300;400;500;700&family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="styles.css">
</head>
<body>
  
  <?php include 'nav.php'; ?>

<!-- HERO WITH FORM -->
<section id="hero" class="hero-section">
  <div class="hero-bg-pattern"></div>
  <div class="hero-container">
    <div class="hero-content">
      <div class="hero-badge">
        <span class="hero-crown">👑</span>
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
          <div class="form-crown">👑</div>
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
              <div class="upload-icon">📸</div>
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
        <div class="success-icon">✓</div>
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
        <div class="slide">
          <img src="https://images.unsplash.com/photo-1542816417-0983c9c9ad53?w=800&h=320&fit=crop" alt="Masjid Islam">
          <div class="slide-overlay">
            <div class="slide-content">
              <h3 class="slide-title">Padanan Berdasarkan Nilai Islam</h3>
              <p class="slide-desc">AI menganalisis keserasian agama, akhlak dan nilai hidup</p>
            </div>
          </div>
        </div>
        <div class="slide">
          <img src="https://images.unsplash.com/photo-1620712943543-bcc4688e7485?w=800&h=320&fit=crop" alt="AI Technology">
          <div class="slide-overlay">
            <div class="slide-content">
              <h3 class="slide-title">Teknologi AI Terdepan</h3>
              <p class="slide-desc">115 soalan psikologi dianalisis menggunakan machine learning</p>
            </div>
          </div>
        </div>
        <div class="slide">
          <img src="https://images.unsplash.com/photo-1563013544-824ae1b704d3?w=800&h=320&fit=crop" alt="Keselamatan Digital">
          <div class="slide-overlay">
            <div class="slide-content">
              <h3 class="slide-title">Keselamatan Maksimum</h3>
              <p class="slide-desc">Identiti dilindungi dengan kod unik sehingga kedua-dua pihak bersetuju</p>
            </div>
          </div>
        </div>
        <div class="slide">
          <img src="https://images.unsplash.com/photo-1609599006353-e629aaabfeae?w=800&h=320&fit=crop" alt="Seni Islam">
          <div class="slide-overlay">
            <div class="slide-content">
              <h3 class="slide-title">Sistem Wali Digital</h3>
              <p class="slide-desc">Platform pertama yang mewajibkan penglibatan wali dalam proses ta'aruf</p>
            </div>
          </div>
        </div>
        <div class="slide">
          <img src="https://images.unsplash.com/photo-1564769625392-651b89c25c20?w=800&h=320&fit=crop" alt="Masjid Komuniti">
          <div class="slide-overlay">
            <div class="slide-content">
              <h3 class="slide-title">Komuniti Premium Muslim</h3>
              <p class="slide-desc">Eksklusif untuk Muslim profesional yang serius mencari jodoh</p>
            </div>
          </div>
        </div>
        <div class="slide">
          <img src="https://images.unsplash.com/photo-1519225421980-715cb0215aed?w=800&h=320&fit=crop" alt="Ekosistem Perkahwinan">
          <div class="slide-overlay">
            <div class="slide-content">
              <h3 class="slide-title">Ekosistem Perkahwinan</h3>
              <p class="slide-desc">Dari padanan hingga pelamin — semua dalam satu platform</p>
            </div>
          </div>
        </div>
        <div class="slide">
          <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=800&h=320&fit=crop" alt="Analitik Data">
          <div class="slide-overlay">
            <div class="slide-content">
              <h3 class="slide-title">Analitik Mendalam</h3>
              <p class="slide-desc">Laporan keserasian terperinci berdasarkan 14 dimensi personaliti</p>
            </div>
          </div>
        </div>
        <div class="slide">
          <img src="https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?w=800&h=320&fit=crop" alt="Aplikasi Mobile">
          <div class="slide-overlay">
            <div class="slide-content">
              <h3 class="slide-title">Aplikasi Mobile Premium</h3>
              <p class="slide-desc">Interface yang elegant dan mudah digunakan untuk iOS dan Android</p>
            </div>
          </div>
        </div>
        <div class="slide">
          <img src="https://images.unsplash.com/photo-1609599006353-e629aaabfeae?w=800&h=320&fit=crop" alt="Panduan Islam">
          <div class="slide-overlay">
            <div class="slide-content">
              <h3 class="slide-title">Bimbingan Kaunselor Islam</h3>
              <p class="slide-desc">Tim pakar relationship coach dan kaunselor Islam sentiasa siap membantu</p>
            </div>
          </div>
        </div>
        <div class="slide">
          <img src="https://images.unsplash.com/photo-1529156069898-49953e39b3ac?w=800&h=320&fit=crop" alt="Kejayaan Bersama">
          <div class="slide-overlay">
            <div class="slide-content">
              <h3 class="slide-title">Kisah Kejayaan</h3>
              <p class="slide-desc">Beribu pasangan telah menemui jodoh melalui platform kami</p>
            </div>
          </div>
        </div>
      </div>

    <div style="text-align:center;margin-top:56px;">
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
          <img src="https://images.unsplash.com/photo-1542816417-0983c9c9ad53?w=200&h=200&fit=crop" alt="Mosque">
        </div>
        <div class="pillar-number">Teras 1</div>
        <h3 class="pillar-title">Kesucian Agama</h3>
        <p class="pillar-desc">Menghapuskan ruang zina, memelihara adab, dan menstrukturkan ta'aruf berlandaskan syariah.</p>
      </div>
      
      <div class="pillar-card">
        <div class="pillar-image">
          <img src="https://images.unsplash.com/photo-1563013544-824ae1b704d3?w=200&h=200&fit=crop" alt="Protection">
        </div>
        <div class="pillar-number">Teras 2</div>
        <h3 class="pillar-title">Perlindungan Sosial</h3>
        <p class="pillar-desc">Pemerkasaan Mod Wali, perlindungan identiti dan pembanterasan scam romantik.</p>
      </div>
      
      <div class="pillar-card">
        <div class="pillar-image">
          <img src="https://images.unsplash.com/photo-1559526324-4b87b5e36e44?w=200&h=200&fit=crop" alt="Economy">
        </div>
        <div class="pillar-number">Teras 3</div>
        <h3 class="pillar-title">Pemerkasaan Ekonomi</h3>
        <p class="pillar-desc">Rantaian nilai perkahwinan yang menyokong vendor PKS Muslim bersijil halal.</p>
      </div>
      
      <div class="pillar-card">
        <div class="pillar-image">
          <img src="https://images.unsplash.com/photo-1518709268805-4e9042af2176?w=200&h=200&fit=crop" alt="AI Technology">
        </div>
        <div class="pillar-number">Teras 4</div>
        <h3 class="pillar-title">Teknologi & Privasi</h3>
        <p class="pillar-desc">AI real-time filtering, kod identiti rahsia dan perlindungan data PDPA 2010.</p>
      </div>

    <div style="text-align:center;margin-top:56px;">
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
          <img src="https://images.unsplash.com/photo-1555949963-aa79dcee981c?w=200&h=200&fit=crop" alt="Identity Protection">
        </div>
        <h3 class="usp-title">Identiti Kod Rahsia</h3>
        <p class="usp-desc">Nama sebenar disembunyikan dengan kod unik (JDK-2025-XX) sehingga kedua-dua pihak bersetuju bertemu.</p>
      </div>
      
      <div class="usp-card">
        <div class="usp-image">
          <img src="https://images.unsplash.com/photo-1485827404703-89b55fcc595e?w=200&h=200&fit=crop" alt="AI Matching">
        </div>
        <h3 class="usp-title">AI Padanan Saintifik</h3>
        <p class="usp-desc">115 soalan psikologi dianalisis AI untuk padanan 847% lebih tepat berbanding swipe-based apps.</p>
      </div>
      
      <div class="usp-card">
        <div class="usp-image">
          <img src="https://images.unsplash.com/photo-1550751827-4bd374c3f58b?w=200&h=200&fit=crop" alt="Content Filter">
        </div>
        <h3 class="usp-title">Real-Time Content Shield</h3>
        <p class="usp-desc">AI menyekat kandungan haram, pertukaran nombor telefon dan ajakan tidak sesuai dalam 0.3 saat.</p>
      </div>
      
      <div class="usp-card">
        <div class="usp-image">
          <img src="https://images.unsplash.com/photo-1558494949-ef010cbdcc31?w=200&h=200&fit=crop" alt="Ecosystem">
        </div>
        <h3 class="usp-title">Ekosistem Komprehensif</h3>
        <p class="usp-desc">Satu-satunya platform dari padanan hingga pelamin — wedding planning, vendor booking, e-Nikah.</p>
      </div>

    <div style="text-align:center;margin-top:56px;">
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

    <div style="text-align:center;margin-top:56px;">
      <a href="#hero" class="btn-daftar-section" onclick="document.getElementById('hero').scrollIntoView({behavior:'smooth'});return false;">
        Daftar Sekarang
      </a>
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
        <div class="dimension-icon">🧭</div>
        <h3 class="dimension-name">Personality Core</h3>
        <div class="dimension-count">10 Soalan Mendalam</div>
        <p class="dimension-desc">Cara berfikir, bertindak dan membawa diri dalam situasi kehidupan harian.</p>
      </div>
      
      <div class="dimension-card">
        <div class="dimension-icon">🏠</div>
        <h3 class="dimension-name">Lifestyle Preferences</h3>
        <div class="dimension-count">10 Soalan Terperinci</div>
        <p class="dimension-desc">Rutin harian, gaya hidup, minat dan cara menghabiskan masa lapang.</p>
      </div>
      
      <div class="dimension-card">
        <div class="dimension-icon">💰</div>
        <h3 class="dimension-name">Financial Mindset</h3>
        <div class="dimension-count">10 Soalan Kritis</div>
        <p class="dimension-desc">Cara mengurus kewangan, komitmen dan matlamat hidup jangka panjang.</p>
      </div>
      
      <div class="dimension-card">
        <div class="dimension-icon">🕌</div>
        <h3 class="dimension-name">Religious Values</h3>
        <div class="dimension-count">10 Soalan Spiritual</div>
        <p class="dimension-desc">Tahap ketaqwaan, nilai agama dan jangkaan spiritual terhadap pasangan.</p>
      </div>
      
      <div class="dimension-card">
        <div class="dimension-icon">❤️</div>
        <h3 class="dimension-name">Love Language</h3>
        <div class="dimension-count">10 Soalan Emosi</div>
        <p class="dimension-desc">Cara menyatakan dan menerima kasih sayang dalam hubungan.</p>
      </div>
      
      <div class="dimension-card">
        <div class="dimension-icon">🧠</div>
        <h3 class="dimension-name">Emotional Intelligence</h3>
        <div class="dimension-count">10 Soalan Psikologi</div>
        <p class="dimension-desc">Empati, kawalan emosi dan kemampuan memahami perasaan orang lain.</p>
      </div>
      
      <div class="dimension-card">
        <div class="dimension-icon">👨‍👩‍👧‍👦</div>
        <h3 class="dimension-name">Family Dynamics</h3>
        <div class="dimension-count">10 Soalan Keluarga</div>
        <p class="dimension-desc">Hubungan dengan keluarga, pengaruh ibubapa dan nilai kekeluargaan.</p>
      </div>
      
      <div class="dimension-card">
        <div class="dimension-icon">⚡</div>
        <h3 class="dimension-name">Conflict Resolution</h3>
        <div class="dimension-count">10 Soalan Konflik</div>
        <p class="dimension-desc">Cara menangani pergaduhan, ego dan mencari penyelesaian bersama.</p>
      </div>
      
      <div class="dimension-card">
        <div class="dimension-icon">🔗</div>
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
          <img src="https://images.unsplash.com/photo-1677442135703-1787eea5ce01?w=200&h=200&fit=crop" alt="Matching">
        </div>
        <h3 class="flow-title">AI Smart Matching</h3>
        <p class="flow-desc">Algoritma menganalisis 115 jawapan anda dan mencari padanan terbaik berdasarkan keserasian mendalam.</p>
      </div>
      
      <div class="flow-step">
        <div class="flow-number">2</div>
        <div class="flow-image">
          <img src="https://images.unsplash.com/photo-1582213782179-e0d53f98f2ca?w=200&h=200&fit=crop" alt="Wali Approval">
        </div>
        <h3 class="flow-title">Persetujuan Wali</h3>
        <p class="flow-desc">Wali pihak perempuan menerima notifikasi dan menilai profil calon untuk memberikan kebenaran awal.</p>
      </div>
      
      <div class="flow-step">
        <div class="flow-number">3</div>
        <div class="flow-image">
          <img src="https://images.unsplash.com/photo-1556157382-97eda2d62296?w=200&h=200&fit=crop" alt="Protected Communication">
        </div>
        <h3 class="flow-title">Komunikasi Terlindung</h3>
        <p class="flow-desc">Perbualan dalam platform dengan AI monitoring 24/7 untuk memastikan adab Islam terpelihara.</p>
      </div>
    </div>
    
    <div style="text-align: center; margin-top: 60px;">
      <p style="color: #B0B0B0; font-size: 16px; line-height: 1.8; max-width: 600px; margin: 0 auto 32px;">
        Setiap langkah dipandu oleh tim kaunselor berpengalaman dan mematuhi garis panduan syariah yang ketat untuk memastikan proses ta'aruf yang berkah.
      </p>
      

    <div style="text-align:center;margin-top:56px;">
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
          <div class="wedding-icon">🏛️</div>
          <div class="wedding-name">Mutiara Barakah</div>
          <div class="wedding-price">RM 7K - 10K</div>
        </div>
        <div class="wedding-card">
          <div class="wedding-icon">🏨</div>
          <div class="wedding-name">Sakinah Mawaddah</div>
          <div class="wedding-price">RM 17K - 25K</div>
        </div>
        <div class="wedding-card">
          <div class="wedding-icon">👑</div>
          <div class="wedding-name">Mutiara Diraja</div>
          <div class="wedding-price">RM 56K - 80K</div>
        </div>
        <div class="wedding-card">
          <div class="wedding-icon">💎</div>
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
// IC FORMATTING
document.getElementById('icNo')?.addEventListener('input', function(e) {
  let v = e.target.value.replace(/\D/g, '');
  if (v.length > 6 && v.length <= 8) v = v.slice(0,6) + '-' + v.slice(6);
  else if (v.length > 8) v = v.slice(0,6) + '-' + v.slice(6,8) + '-' + v.slice(8,12);
  e.target.value = v;
});

// IMAGE UPLOAD HANDLER
function handleImageUpload(event) {
  const file = event.target.files[0];
  if (!file) return;
  
  if (file.size > 5 * 1024 * 1024) {
    alert('Saiz fail melebihi 5MB. Sila pilih gambar yang lebih kecil.');
    return;
  }
  
  const uploadArea = event.target.parentElement;
  const reader = new FileReader();
  reader.onload = function(e) {
    uploadArea.innerHTML = `
      <div style="text-align: center; color: var(--gold);">
        <div style="font-size: 24px; margin-bottom: 8px;">✓</div>
        <div style="font-size: 13px;">Gambar berjaya dimuat naik</div>
        <div style="font-size: 12px; color: #B0B0B0; margin-top: 4px;">${file.name}</div>
      </div>
    `;
  };
  reader.readAsDataURL(file);
}

// FORM VALIDATION
function validateForm() {
  let valid = true;
  const requiredFields = ['fullName', 'icNo', 'phoneNo', 'emailAddr'];
  
  requiredFields.forEach(id => {
    const field = document.getElementById(id);
    if (!field.value.trim()) {
      field.style.borderColor = '#FF6B6B';
      valid = false;
    } else {
      field.style.borderColor = '';
    }
  });
  
  // IC validation
  const ic = document.getElementById('icNo').value.replace(/-/g, '');
  if (ic.length !== 12 || !/^\d+$/.test(ic)) {
    document.getElementById('icNo').style.borderColor = '#FF6B6B';
    valid = false;
  }
  
  // Email validation
  const email = document.getElementById('emailAddr').value;
  if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
    document.getElementById('emailAddr').style.borderColor = '#FF6B6B';
    valid = false;
  }
  
  return valid;
}

// GENERATE ID
function generateId() {
  const year = new Date().getFullYear();
  const random = Math.random().toString(36).substr(2, 8).toUpperCase();
  return `JDK-${year}-${random}`;
}

// FORM SUBMIT HANDLER
function handleFormSubmit(e) {
  e.preventDefault();
  
  if (!validateForm()) return;
  
  if (!document.getElementById('agreeTerms').checked) {
    alert('Sila bersetuju dengan Terma & Syarat untuk meneruskan.');
    return;
  }
  
  const submitBtn = e.target.querySelector('.btn-submit-premium');
  submitBtn.disabled = true;
  submitBtn.textContent = 'Memproses...';
  
  const formData = {
    id: generateId(),
    nama: document.getElementById('fullName').value.trim(),
    ic: document.getElementById('icNo').value,
    telefon: document.getElementById('phoneNo').value.trim(),
    email: document.getElementById('emailAddr').value.trim(),
    timestamp: new Date().toISOString()
  };
  
  // Store in localStorage
  try {
    const existing = JSON.parse(localStorage.getItem('jodohku_registrations') || '[]');
    existing.push(formData);
    localStorage.setItem('jodohku_registrations', JSON.stringify(existing));
  } catch(err) { /* Storage not available */ }
  
  // Show success
  setTimeout(() => {
    document.getElementById('formView').style.display = 'none';
    const successView = document.getElementById('successView');
    successView.style.display = 'block';
    document.getElementById('generatedId').textContent = formData.id;
  }, 1500);
}

// SCROLL ANIMATIONS
const observerOptions = {
  threshold: 0.1,
  rootMargin: '0px 0px -50px 0px'
};

const observer = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add('visible');
    }
  });
}, observerOptions);

document.querySelectorAll('.reveal').forEach(el => observer.observe(el));

// NAVBAR SCROLL EFFECT
window.addEventListener('scroll', () => {
  const navbar = document.querySelector('.navbar');
  if (window.scrollY > 100) {
    navbar.style.background = 'rgba(0,0,0,0.95)';
  } else {
    navbar.style.background = 'rgba(0,0,0,0.9)';
  }
});

// SMOOTH SCROLL
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener('click', function (e) {
    e.preventDefault();
    const target = document.querySelector(this.getAttribute('href'));
    if (target) {
      target.scrollIntoView({ behavior: 'smooth', block: 'start' });
    }
  });
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
      <div class="modal-meta">
        Berkuat kuasa: 1 Januari 2025 &nbsp;|&nbsp; Versi: 2.1 &nbsp;|&nbsp; Bahasa: Bahasa Malaysia
      </div>

      <div class="modal-section">
        <h3>1. Penerimaan Terma</h3>
        <p>Dengan mengakses atau menggunakan platform Jodohku.my ("Platform"), anda bersetuju untuk terikat dengan Terma &amp; Syarat ini. Jika anda tidak bersetuju dengan mana-mana bahagian terma ini, anda tidak dibenarkan menggunakan Platform.</p>
        <p>Platform ini diuruskan oleh <strong>Noble Synergy Ventures</strong> ("Syarikat", "Kami") di bawah undang-undang Malaysia. Penggunaan Platform tertakluk kepada Akta Komunikasi dan Multimedia 1998, Akta Perlindungan Data Peribadi 2010 (PDPA), serta prinsip-prinsip Syariah Islam yang berkaitan.</p>
      </div>

      <div class="modal-section">
        <h3>2. Kelayakan Pengguna</h3>
        <ol>
          <li>Anda mesti seorang Muslim atau Muslimah yang telah mencapai umur 18 tahun atau ke atas.</li>
          <li>Anda mesti warganegara Malaysia atau pemastautin tetap yang sah.</li>
          <li>Anda mesti belum berkahwin atau telah bercerai/diceraikan mengikut undang-undang yang sah.</li>
          <li>Anda mesti tidak pernah disabitkan dengan mana-mana kesalahan jenayah serius.</li>
          <li>Anda bersetuju bahawa semua maklumat yang diberikan adalah tepat, terkini dan benar.</li>
          <li>Pengguna yang memberikan maklumat palsu akan ditamatkan akaun serta merta tanpa bayaran balik.</li>
        </ol>
      </div>

      <div class="modal-section">
        <h3>3. Pendaftaran dan Akaun</h3>
        <ol>
          <li>Setiap pengguna hanya dibenarkan memiliki satu (1) akaun sahaja.</li>
          <li>Pengesahan identiti menggunakan Kad Pengenalan Malaysia (MyKad) adalah wajib.</li>
          <li>Kata laluan akaun adalah tanggungjawab pengguna sepenuhnya.</li>
          <li>Kami berhak untuk menamatkan akaun yang mengesyaki penipuan atau penyalahgunaan tanpa notis awal.</li>
          <li>Akaun yang tidak aktif selama 12 bulan berturut-turut boleh dipadamkan secara automatik.</li>
        </ol>
      </div>

      <div class="modal-section">
        <h3>4. Kod Etika dan Tingkah Laku</h3>
        <p>Pengguna wajib mematuhi adab Islam dalam semua komunikasi di Platform. Perkara-perkara berikut adalah <strong>dilarang sama sekali</strong>:</p>
        <ul>
          <li>Menghantar kandungan lucah, tidak senonoh atau bertentangan dengan nilai Islam.</li>
          <li>Berkongsi maklumat hubungan peribadi (nombor telefon, alamat, media sosial) di luar Platform sebelum mendapat kebenaran Wali.</li>
          <li>Berhubung terus dengan pengguna wanita tanpa mematuhi protokol Mod Wali.</li>
          <li>Menggunakan Platform untuk tujuan selain daripada perkahwinan yang sah.</li>
          <li>Menyebarkan maklumat palsu atau menipu pengguna lain.</li>
          <li>Aktiviti penipuan romantik (romance scam) atau eksploitasi kewangan.</li>
          <li>Menyalin, menjual atau memindahkan akaun kepada pihak ketiga.</li>
        </ul>
      </div>

      <div class="modal-section">
        <h3>5. Sistem Wali dan Mahram</h3>
        <ol>
          <li>Penglibatan Wali adalah <strong>diwajibkan</strong> bagi setiap pengguna wanita sebelum sebarang komunikasi dibenarkan.</li>
          <li>Wali mesti memberikan kebenaran bertulis dalam Platform sebelum proses ta'aruf bermula.</li>
          <li>Platform akan menghantar notifikasi kepada Wali bagi setiap permintaan padanan.</li>
          <li>Perbualan antara calon pasangan adalah terbuka kepada pemantauan Wali pada bila-bila masa.</li>
          <li>Pengguna yang tidak mempunyai Wali yang sah perlu menghubungi pasukan syariah kami untuk panduan.</li>
        </ol>
      </div>

      <div class="modal-section">
        <h3>6. Langganan dan Pembayaran</h3>
        <ol>
          <li>Tier langganan: Rahmah (percuma), Mutiara, Sakinah, dan Mawaddah.</li>
          <li>Semua harga adalah dalam Ringgit Malaysia (RM) dan termasuk cukai berkenaan.</li>
          <li>Pembayaran diproses melalui Billplz yang mematuhi piawaian keselamatan PCI-DSS.</li>
          <li>Tiada bayaran balik setelah perkhidmatan premium diaktifkan, melainkan berlaku kegagalan teknikal yang disebabkan oleh Platform.</li>
          <li>Pembaharuan automatik akan dimaklumkan 7 hari sebelum tarikh tamat.</li>
          <li>Kami berhak mengubah harga dengan notis 30 hari kepada pelanggan semasa.</li>
        </ol>
      </div>

      <div class="modal-section">
        <h3>7. Hak Harta Intelek</h3>
        <p>Semua kandungan, reka bentuk, kod, logo, nama jenama dan bahan dalam Platform adalah hak milik eksklusif Noble Synergy Ventures dan dilindungi di bawah undang-undang hak cipta Malaysia. Pengguna dilarang menyalin, mengedar atau mengeksploitasi sebarang kandungan Platform tanpa kebenaran bertulis.</p>
      </div>

      <div class="modal-section">
        <h3>8. Penafian dan Had Liabiliti</h3>
        <ol>
          <li>Platform adalah perantara digital sahaja. Kami tidak menjamin keserasian atau kejayaan sesebuah perkahwinan.</li>
          <li>Kami tidak bertanggungjawab atas keputusan peribadi yang dibuat oleh pengguna berdasarkan maklumat dalam Platform.</li>
          <li>Had liabiliti maksimum kami adalah setara dengan jumlah langganan yang dibayar dalam 3 bulan terakhir.</li>
          <li>Kami tidak bertanggungjawab atas gangguan perkhidmatan akibat kuasa luar (force majeure).</li>
        </ol>
      </div>

      <div class="modal-section">
        <h3>9. Penghentian Perkhidmatan</h3>
        <p>Pengguna boleh menamatkan akaun pada bila-bila masa melalui tetapan akaun. Kami berhak menamatkan atau menggantung akaun yang melanggar Terma ini. Setelah penamatan, data pengguna akan dipadam dalam tempoh 90 hari mengikut dasar PDPA.</p>
      </div>

      <div class="modal-section">
        <h3>10. Undang-undang Yang Mengawal</h3>
        <p>Terma ini ditadbir oleh undang-undang Malaysia. Sebarang pertikaian akan diselesaikan di mahkamah yang mempunyai bidang kuasa di Kuala Lumpur, Malaysia. Pengguna bersetuju untuk menyelesaikan pertikaian melalui proses mediasi sebelum litigasi.</p>
      </div>

      <div class="modal-section">
        <h3>11. Pindaan Terma</h3>
        <p>Kami berhak mengubah Terma ini pada bila-bila masa. Pindaan akan dikuatkuasakan 14 hari selepas notifikasi kepada pengguna. Penggunaan berterusan Platform selepas tempoh tersebut dianggap sebagai penerimaan terma yang dipinda.</p>
      </div>

      <div class="modal-section">
        <h3>12. Hubungi Kami</h3>
        <p>Untuk sebarang pertanyaan berkaitan Terma ini:<br>
        <strong>Noble Synergy Ventures</strong><br>
        E-mel: legal@jodohku.my<br>
        Waktu pejabat: Isnin–Jumaat, 9:00 pagi–6:00 petang (WIB)</p>
      </div>
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
      <div class="modal-meta">
        Berkuat kuasa: 1 Januari 2025 &nbsp;|&nbsp; Mematuhi: PDPA 2010 (Malaysia) &nbsp;|&nbsp; Versi: 2.1
      </div>

      <div class="modal-section">
        <h3>1. Tanggungjawab Kami</h3>
        <p>Noble Synergy Ventures ("Kami") komited untuk melindungi privasi anda. Dasar ini menerangkan cara kami mengumpul, menggunakan, menyimpan dan melindungi data peribadi anda selaras dengan Akta Perlindungan Data Peribadi 2010 (PDPA 2010) Malaysia.</p>
      </div>

      <div class="modal-section">
        <h3>2. Data Peribadi Yang Dikumpul</h3>
        <p>Kami mengumpul kategori-kategori data berikut:</p>
        <ul>
          <li><strong>Data Identiti:</strong> Nama penuh, nombor Kad Pengenalan, tarikh lahir, jantina, kewarganegaraan.</li>
          <li><strong>Data Hubungan:</strong> Alamat e-mel, nombor telefon, alamat kediaman.</li>
          <li><strong>Data Profil:</strong> Gambar profil, tahap pendidikan, pekerjaan, pendapatan, minat, nilai agama.</li>
          <li><strong>Data Psikologi:</strong> Jawapan kepada 115 soalan penilaian keserasian (diproses secara tanpa nama).</li>
          <li><strong>Data Komunikasi:</strong> Log perbualan dalam Platform (dipantau oleh AI untuk mematuhi adab).</li>
          <li><strong>Data Teknikal:</strong> Alamat IP, jenis peranti, log akses, kuki sesi.</li>
          <li><strong>Data Kewangan:</strong> Rekod transaksi langganan (nombor kad kredit tidak disimpan oleh kami).</li>
        </ul>
      </div>

      <div class="modal-section">
        <h3>3. Tujuan Penggunaan Data</h3>
        <ol>
          <li>Memproses dan mengesahkan pendaftaran akaun pengguna.</li>
          <li>Menjalankan algoritma AI untuk padanan keserasian berdasarkan 115 soalan.</li>
          <li>Membolehkan komunikasi yang selamat dan terkawal antara pengguna.</li>
          <li>Menghantar notifikasi kepada Wali berkaitan aktiviti ta'aruf.</li>
          <li>Memproses bayaran langganan dengan selamat.</li>
          <li>Meningkatkan fungsi dan keselamatan Platform.</li>
          <li>Memenuhi obligasi undang-undang dan peraturan kerajaan.</li>
          <li>Menghantar maklumat perkhidmatan dan kemas kini penting (bukan pemasaran tanpa persetujuan).</li>
        </ol>
      </div>

      <div class="modal-section">
        <h3>4. Perlindungan Data dan Keselamatan</h3>
        <ol>
          <li>Semua data disulitkan menggunakan AES-256 untuk data statik dan TLS 1.3 untuk data dalam transit.</li>
          <li>Pelayan data berlokasi di Malaysia dan diuruskan oleh pembekal awan berlesen tempatan.</li>
          <li>Akses dalaman kepada data peribadi adalah terhad kepada kakitangan terlatih dengan kebenaran spesifik.</li>
          <li>Gambar profil disimpan secara berasingan daripada data identiti pengguna.</li>
          <li>Audit keselamatan dilakukan setiap suku tahun oleh firma bebas bertauliah.</li>
          <li>Data psikologi diproses dalam persekitaran terpencil tanpa pengenalan nama.</li>
        </ol>
      </div>

      <div class="modal-section">
        <h3>5. Perkongsian Data dengan Pihak Ketiga</h3>
        <p>Kami <strong>tidak menjual</strong> data peribadi anda kepada mana-mana pihak ketiga. Data hanya dikongsi dalam keadaan berikut:</p>
        <ul>
          <li>Pembekal perkhidmatan teknikal (hosting, pembayaran) di bawah perjanjian kerahsiaan yang ketat.</li>
          <li>Pihak berkuasa kerajaan jika dikehendaki oleh undang-undang atau perintah mahkamah.</li>
          <li>Penyedia perkhidmatan Ekosistem Perkahwinan hanya jika pengguna memberikan kebenaran nyata.</li>
          <li>Wali/Mahram yang telah didaftarkan oleh pengguna dalam sistem.</li>
        </ul>
      </div>

      <div class="modal-section">
        <h3>6. Hak Pengguna di bawah PDPA 2010</h3>
        <ol>
          <li><strong>Hak Akses:</strong> Meminta salinan data peribadi yang kami simpan tentang anda.</li>
          <li><strong>Hak Pindaan:</strong> Membetulkan data yang tidak tepat atau tidak lengkap.</li>
          <li><strong>Hak Menarik Balik Persetujuan:</strong> Menarik balik kebenaran pemprosesan data pada bila-bila masa.</li>
          <li><strong>Hak Untuk Dipadam:</strong> Meminta pemadaman data peribadi tertakluk kepada kewajipan undang-undang.</li>
          <li><strong>Hak Membantah:</strong> Membantah pemprosesan data untuk tujuan pemasaran.</li>
        </ol>
        <p>Untuk menggunakan hak-hak ini, hubungi: <strong>privasi@jodohku.my</strong></p>
      </div>

      <div class="modal-section">
        <h3>7. Tempoh Penyimpanan Data</h3>
        <ul>
          <li>Data akaun aktif: Sepanjang tempoh keahlian aktif.</li>
          <li>Data akaun yang ditamatkan: 90 hari selepas penamatan, kemudian dipadam secara kekal.</li>
          <li>Log komunikasi: 12 bulan.</li>
          <li>Rekod kewangan: 7 tahun mengikut Akta Syarikat 2016.</li>
          <li>Data audit keselamatan: 3 tahun.</li>
        </ul>
      </div>

      <div class="modal-section">
        <h3>8. Kuki dan Teknologi Penjejakan</h3>
        <p>Platform menggunakan kuki sesi untuk pengesahan log masuk dan kuki pilihan untuk menyimpan tetapan pengguna. Kami tidak menggunakan kuki pihak ketiga untuk pengiklanan atau penjejakan merentas tapak web. Anda boleh mematikan kuki dalam tetapan pelayar, namun ini mungkin menjejaskan fungsi tertentu Platform.</p>
      </div>

      <div class="modal-section">
        <h3>9. Perubahan Dasar Privasi</h3>
        <p>Kami berhak meminda Dasar Privasi ini dari semasa ke semasa. Pindaan material akan dimaklumkan kepada pengguna melalui e-mel dan notifikasi dalam Platform sekurang-kurangnya 14 hari sebelum berkuat kuasa.</p>
      </div>

      <div class="modal-section">
        <h3>10. Aduan dan Pertanyaan</h3>
        <p>Jika anda mempunyai aduan atau pertanyaan berkaitan privasi data:<br><br>
        <strong>Pegawai Perlindungan Data (DPO)</strong><br>
        Noble Synergy Ventures<br>
        E-mel: privasi@jodohku.my<br>
        Anda juga boleh membuat aduan kepada <strong>Jabatan Perlindungan Data Peribadi (JPDP)</strong> Malaysia jika tidak berpuas hati dengan respons kami.</p>
      </div>
    </div>
  </div>
</div>




<?php include 'footer.php'; ?>

</body>
</html>
