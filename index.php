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

<meta property="og:image" content="https://jodohku.my/logokut.png">

<meta property="og:url" content="https://www.jodohku.my">

<meta property="og:type" content="website">

<meta name="twitter:card" content="summary_large_image">

<meta name="twitter:title" content="Jodohku.my — Platform Ultra-Premium Perkahwinan Islam">

<meta name="twitter:description" content="AI Terdepan + 115 Soalan Psikologi = Jodoh Seumur Hidup">

<meta name="twitter:image" content="https://jodohku.my/logokut.png">

  

  <meta property="og:image:width" content="1200">

<meta property="og:image:height" content="630">

<meta property="og:image:type" content="image/png">
  
<script src="https://cdn.jsdelivr.net/npm/@supabase/supabase-js@2"></script>

  <style>
    /* ============================================================
   JODOHKU.MY — UNIFIED STYLESHEET
   Merges styles from index.php (dark gold theme) and the
   second HTML (champagne/cream premium theme)
   ============================================================ */

/* ── Google Fonts ─────────────────────────────────────────── */
@import url('https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&family=Tajawal:wght@300;400;500;700&family=Inter:wght@300;400;500;600;700;800&display=swap');

/* ============================================================
   CSS CUSTOM PROPERTIES
   ============================================================ */
:root {
  /* Dark palette (primary / hero sections) */
  --ink:            #050605;
  --ink-2:          #0b0a08;
  --panel:          #14110d;
  --panel-2:        #1d1811;
  --cream:          #f5ead8;
  --cream-2:        #e8dac2;
  --text:           #f7f0e6;
  --text-dark:      #17202a;
  --muted:          #b9ad98;
  --muted-dark:     #615544;

  /* Gold scale */
  --gold:           #b48a49;
  --gold-2:         #83602d;
  --gold-light:     #FFD700;
  --gold-warm:      #FFA000;
  --bronze:         #68471f;
  --champagne:      #d8c08a;
  --emerald:        #14382f;
  --emerald-light:  #1e5c47;

  /* Borders / lines */
  --line:           rgba(180, 138, 73, .24);
  --line-soft:      rgba(255, 255, 255, .10);

  /* Shadows */
  --shadow:         0 28px 90px rgba(0, 0, 0, .44);
  --shadow-gold:    0 0 20px rgba(255, 215, 0, .3);

  /* Radius */
  --radius-xl:      34px;
  --radius-lg:      26px;
  --radius-md:      18px;

  /* Layout */
  --max:            1180px;

  /* Pearl alias (used in dark sections) */
  --pearl:          #f7f0e6;
}

/* ============================================================
   RESET & BASE
   ============================================================ */
*, *::before, *::after { box-sizing: border-box; }

html { scroll-behavior: smooth; }

body {
  margin: 0;
  color: var(--text-dark);
  background: #070706;
  font-family: 'Inter', ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont,
               'Segoe UI', sans-serif;
  line-height: 1.6;
  overflow-x: hidden;
}

img { display: block; max-width: 100%; }
a  { color: inherit; text-decoration: none; }
button, input, select { font: inherit; }
::selection { background: rgba(199, 161, 94, .32); }

/* Arabic / RTL body override */
body[dir="rtl"] { font-family: 'Tajawal', sans-serif; }

/* ============================================================
   LAYOUT UTILITIES
   ============================================================ */
.container {
  width: min(var(--max), calc(100% - 44px));
  margin-inline: auto;
}

.section        { padding: 96px 0; position: relative; }
.section.compact { padding: 70px 0; }

/* ============================================================
   COLOUR SECTION HELPERS
   ============================================================ */

/* Dark sections */
.dark,
.hero-section,
.pillars-section,
.usp-section,
.taaruf-section,
.questions-section {
  color: var(--text);
  background:
    radial-gradient(circle at 18% 0%,  rgba(199, 161, 94, .18), transparent 34%),
    radial-gradient(circle at 90% 18%, rgba(20,  56,  47, .46), transparent 36%),
    linear-gradient(180deg, #08111a 0%, #0d1721 56%, #08111a 100%);
}

/* Cream / light sections */
.cream,
.slider-section,
.comparison-section,
.wedding-section {
  background:
    radial-gradient(circle at 6% 0%, rgba(199, 161, 94, .18), transparent 26%),
    linear-gradient(180deg, #f8f2e9 0%, #efe4d3 100%);
}

/* ============================================================
   SHIMMER DIVIDER
   ============================================================ */
.gold-shimmer-line {
  height: 2px;
  background: linear-gradient(90deg,
    transparent 0%,
    rgba(255, 215, 0, .6) 30%,
    rgba(255, 215, 0, 1)  50%,
    rgba(255, 215, 0, .6) 70%,
    transparent 100%);
  animation: shimmer 3s ease-in-out infinite;
}

@keyframes shimmer {
  0%, 100% { opacity: .5; }
  50%       { opacity: 1; }
}

/* ============================================================
   TYPOGRAPHY
   ============================================================ */
h1, h2, h3 { margin: 0; line-height: 1.05; letter-spacing: -.03em; }
h1, h2     { font-family: 'Playfair Display', Georgia, 'Times New Roman', ui-serif, serif; font-weight: 700; }
h1 { font-size: clamp(42px, 7vw, 82px);  margin-top: 22px; max-width: 830px; }
h2 { font-size: clamp(34px, 5vw, 58px);  margin-top: 18px; }
h3 { font-size: 22px; }
p  { margin: 0; }

.gold { color: var(--gold-light); }
.gold-text {
  background: linear-gradient(100deg, #f6e6bd 0%, #c69c55 42%, #866132 80%, #efd9a5 100%);
  -webkit-background-clip: text;
  background-clip: text;
  color: transparent;
  text-shadow: none;
}

.lead {
  font-size: clamp(16px, 2.2vw, 20px);
  color: rgba(255,255,255,.76);
  max-width: 720px;
  margin-top: 22px;
}
.cream .lead,
.section-head .lead { color: var(--muted-dark); }

/* ============================================================
   SECTION HEADER (shared component)
   ============================================================ */
.section-head,
.slider-header {
  max-width: 760px;
  margin: 0 auto 42px;
  text-align: center;
}

.section-label,
.eyebrow {
  display: inline-flex;
  align-items: center;
  gap: 9px;
  padding: 7px 12px;
  border: 1px solid rgba(199, 161, 94, .42);
  border-radius: 999px;
  color: var(--bronze);
  background: rgba(255, 255, 255, .45);
  font-size: 12px;
  letter-spacing: .12em;
  text-transform: uppercase;
  font-weight: 800;
}

.dark .eyebrow,
.dark .section-label,
.hero-section .section-label,
.pillars-section .section-label,
.usp-section    .section-label,
.questions-section .section-label,
.taaruf-section .section-label {
  color: var(--champagne);
  background: rgba(255,255,255,.055);
}

.section-title-main { color: var(--pearl); }
.cream .section-title-main { color: var(--text-dark); }

.section-desc-main {
  color: rgba(255,255,255,.72);
  font-size: clamp(15px, 1.8vw, 18px);
  margin-top: 14px;
}
.cream .section-desc-main { color: var(--muted-dark); }

/* ============================================================
   NAVBAR
   ============================================================ */
.navbar,
.site-header {
  position: sticky;
  top: 0;
  z-index: 50;
  background: rgba(8, 7, 6, .88);
  backdrop-filter: blur(18px);
  border-bottom: 1px solid rgba(216, 192, 138, .16);
  transition: background .3s;
}

.nav,
.navbar-container {
  display: flex;
  align-items: center;
  justify-content: space-between;
  min-height: 76px;
  gap: 18px;
  padding: 0 24px;
  max-width: var(--max);
  margin: 0 auto;
}

/* Brand / logo */
.brand,
.navbar-brand {
  display: flex;
  align-items: center;
  gap: 12px;
  color: var(--text);
  font-weight: 900;
  letter-spacing: -.02em;
  font-size: 21px;
}

.brand-mark {
  width: 42px; height: 42px;
  border-radius: 15px;
  border: 1px solid rgba(229, 207, 151, .48);
  background: linear-gradient(135deg, rgba(216,192,138,.18), rgba(85,56,21,.32));
  display: grid;
  place-items: center;
  color: var(--champagne);
  font-family: 'Playfair Display', serif;
  font-size: 21px;
  font-weight: 700;
}

.brand span,
.navbar-brand span { color: var(--champagne); }

/* Nav links */
.nav-links,
.nav-menu {
  display: flex;
  gap: 28px;
  align-items: center;
  color: rgba(255,255,255,.72);
  font-size: 13px;
  font-weight: 800;
  list-style: none;
  margin: 0; padding: 0;
}
.nav-links a:hover,
.nav-menu a:hover { color: var(--champagne); transition: color .2s; }

/* Language switcher */
.lang-switcher { display: flex; gap: 6px; }
.lang-btn {
  padding: 4px 10px;
  border-radius: 999px;
  border: 1px solid rgba(216,192,138,.3);
  color: rgba(255,255,255,.6);
  font-size: 12px;
  font-weight: 700;
  cursor: pointer;
  background: transparent;
  transition: all .2s;
}
.lang-btn.active,
.lang-btn:hover {
  background: var(--gold);
  color: #1f170d;
  border-color: var(--gold);
}

/* ============================================================
   BUTTONS
   ============================================================ */
.btn,
.btn-primary-hero,
.btn-secondary-hero,
.btn-submit-premium,
.btn-daftar-section {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  gap: 10px;
  min-height: 48px;
  padding: 0 22px;
  border-radius: 999px;
  border: 1px solid transparent;
  font-weight: 900;
  cursor: pointer;
  transition: transform .2s ease, box-shadow .2s ease, border-color .2s ease;
  white-space: nowrap;
  text-decoration: none;
  font-size: 14px;
}
.btn:hover,
.btn-primary-hero:hover,
.btn-secondary-hero:hover,
.btn-submit-premium:hover,
.btn-daftar-section:hover { transform: translateY(-2px); }

/* Primary gold button */
.btn.primary,
.btn-primary-hero,
.btn-submit-premium,
.btn-daftar-section {
  color: #1f170d;
  background:
    linear-gradient(135deg, #e9d6a4 0%, #c4a064 24%, #8a622d 55%, #5f411c 78%, #d1b06f 100%);
  border-color: rgba(238, 215, 161, .38);
  box-shadow: 0 18px 44px rgba(67,43,17,.30), inset 0 1px 0 rgba(255,255,255,.28);
}
.btn.primary:hover,
.btn-primary-hero:hover,
.btn-submit-premium:hover,
.btn-daftar-section:hover {
  box-shadow: 0 22px 54px rgba(69,45,18,.36), inset 0 1px 0 rgba(255,255,255,.30);
}

/* Secondary outline button */
.btn.secondary,
.btn-secondary-hero {
  color: var(--text);
  border-color: rgba(229,207,151,.34);
  background: rgba(255,255,255,.05);
}

/* Submit full-width */
.btn-submit-premium {
  width: 100%;
  min-height: 52px;
  font-size: 15px;
  letter-spacing: .04em;
  text-transform: uppercase;
}
.btn-submit-premium:disabled {
  opacity: .6;
  cursor: not-allowed;
  transform: none;
}

/* Nav CTA */
.nav .btn,
[data-i18n="nav_cta"] {
  min-height: 42px;
  padding: 0 18px;
  font-size: 13px;
}

/* ============================================================
   HERO SECTION
   ============================================================ */
.hero-section {
  position: relative;
  overflow: hidden;
}

.hero-bg-pattern {
  position: absolute;
  inset: 0;
  background:
    linear-gradient(rgba(216,192,138,.024) 1px, transparent 1px),
    linear-gradient(90deg, rgba(216,192,138,.024) 1px, transparent 1px);
  background-size: 74px 74px;
  mask-image: linear-gradient(180deg, black, transparent 80%);
  pointer-events: none;
}

.hero-container {
  width: min(var(--max), calc(100% - 44px));
  margin: 0 auto;
  min-height: 790px;
  display: grid;
  grid-template-columns: minmax(0, 1.05fr) minmax(340px, .78fr);
  gap: 44px;
  align-items: center;
  padding: 72px 0 88px;
  position: relative;
  z-index: 1;
}

.hero-content { max-width: 760px; }

.hero-badge {
  display: inline-flex;
  align-items: center;
  gap: 9px;
  padding: 7px 12px;
  border: 1px solid rgba(199,161,94,.42);
  border-radius: 999px;
  color: var(--champagne);
  background: rgba(255,255,255,.055);
  font-size: 12px;
  letter-spacing: .12em;
  text-transform: uppercase;
  font-weight: 800;
  margin-bottom: 16px;
}

.hero-crown-svg { flex-shrink: 0; }

.hero-title {
  font-family: 'Playfair Display', serif;
  font-size: clamp(42px, 7vw, 76px);
  font-weight: 700;
  line-height: 1.05;
  letter-spacing: -.03em;
  color: var(--pearl);
  margin: 0 0 20px;
}

.hero-subtitle {
  font-size: clamp(16px, 2vw, 20px);
  color: var(--champagne);
  font-weight: 600;
  margin-bottom: 16px;
}

.hero-description {
  font-size: clamp(14px, 1.6vw, 17px);
  color: rgba(255,255,255,.72);
  line-height: 1.75;
  max-width: 600px;
  margin-bottom: 32px;
}

.hero-cta-buttons {
  display: flex;
  flex-wrap: wrap;
  gap: 14px;
}

/* ============================================================
   PREMIUM REGISTRATION FORM (hero side)
   ============================================================ */
.form-premium-container,
.form-card {
  border-radius: var(--radius-lg);
  padding: 32px;
  background: linear-gradient(180deg, rgba(255,255,255,.09), rgba(255,255,255,.045));
  border: 1px solid rgba(229,207,151,.22);
  box-shadow: 0 22px 60px rgba(0,0,0,.24);
}

.form-header { text-align: center; margin-bottom: 28px; }

.form-crown {
  display: flex;
  justify-content: center;
  margin-bottom: 16px;
}

.form-title {
  font-family: 'Playfair Display', serif;
  font-size: clamp(22px, 3vw, 28px);
  color: var(--champagne);
  margin-bottom: 10px;
}

.form-subtitle {
  font-size: 13px;
  color: rgba(255,255,255,.68);
  line-height: 1.6;
  max-width: 320px;
  margin: 0 auto;
}

/* Form grid */
.form-premium,
.form-grid { display: grid; gap: 14px; }

.form-row {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 14px;
}

.input-group { display: flex; flex-direction: column; gap: 6px; }

.input-label {
  font-size: 12px;
  font-weight: 700;
  color: var(--champagne);
  letter-spacing: .06em;
  text-transform: uppercase;
}

.input-premium,
.field {
  width: 100%;
  min-height: 48px;
  border: 1px solid rgba(255,255,255,.12);
  border-radius: var(--radius-md);
  background: rgba(255,255,255,.08);
  color: var(--text);
  padding: 0 15px;
  outline: none;
  font-size: 14px;
  transition: border-color .2s, box-shadow .2s;
}
.input-premium:focus,
.field:focus {
  border-color: rgba(255,215,0,.45);
  box-shadow: 0 0 0 3px rgba(255,215,0,.12);
}
.input-premium::placeholder,
.field::placeholder { color: rgba(255,255,255,.38); }

/* Upload area */
.upload-area,
.upload {
  position: relative;
  display: grid;
  gap: 6px;
  padding: 18px 16px;
  border: 2px dashed rgba(229,207,151,.36);
  border-radius: var(--radius-md);
  color: rgba(255,255,255,.72);
  cursor: pointer;
  background: rgba(255,255,255,.035);
  text-align: center;
  transition: border-color .2s, background .2s;
}
.upload-area:hover,
.upload:hover {
  border-color: rgba(255,215,0,.6);
  background: rgba(255,215,0,.04);
}
.upload-area input[type="file"],
.upload input[type="file"] {
  position: absolute;
  inset: 0;
  opacity: 0;
  cursor: pointer;
  width: 100%;
}
.upload-icon { display: flex; justify-content: center; margin-bottom: 8px; }
.upload-text { font-size: 13px; line-height: 1.5; }
.upload-text strong { color: var(--champagne); display: block; }
.upload strong { color: var(--champagne); font-size: 14px; }

/* Checkbox */
.checkbox-premium {
  display: flex;
  align-items: flex-start;
  gap: 10px;
  font-size: 12px;
  color: rgba(255,255,255,.65);
  line-height: 1.5;
}
.checkbox-premium input[type="checkbox"] { margin-top: 2px; flex-shrink: 0; accent-color: var(--gold); }
.checkbox-premium a { color: var(--champagne); border-bottom: 1px solid rgba(255,215,0,.3); }
.checkbox-premium a:hover { color: var(--gold-light); }

/* Mini note */
.mini-note {
  color: rgba(255,255,255,.45);
  font-size: 11px;
  margin-top: 10px;
  line-height: 1.5;
  text-align: center;
}

/* Field validation */
.field-error { color: #FF6B6B; font-size: 12px; margin-top: 5px; }
.field-hint  { color: #4CAF50; font-size: 11px; margin-top: 5px; }

/* Success state */
.success-state {
  display: none;
  text-align: center;
  padding: 40px 24px;
}
.success-icon {
  width: 72px; height: 72px;
  border-radius: 50%;
  background: linear-gradient(135deg, var(--emerald), var(--emerald-light));
  border: 3px solid var(--gold-light);
  display: flex;
  align-items: center;
  justify-content: center;
  margin: 0 auto 20px;
  box-shadow: 0 0 30px rgba(20,56,47,.4);
}
.success-title {
  font-family: 'Playfair Display', serif;
  font-size: 26px;
  color: var(--champagne);
  margin-bottom: 14px;
}
.success-message {
  color: rgba(255,255,255,.72);
  font-size: 14px;
  line-height: 1.75;
  margin-bottom: 20px;
}
.success-id {
  display: inline-block;
  padding: 10px 24px;
  border: 1px solid rgba(255,215,0,.4);
  border-radius: 999px;
  color: var(--champagne);
  font-family: monospace;
  font-size: 16px;
  font-weight: 700;
  letter-spacing: .08em;
  background: rgba(255,215,0,.06);
}

/* ============================================================
   IMAGE SLIDER
   ============================================================ */
.slider-section { padding: 80px 0; }

.slider-container {
  width: min(var(--max), calc(100% - 44px));
  margin: 0 auto;
}

.image-slider {
  overflow: hidden;
  border-radius: var(--radius-lg);
  border: 1px solid rgba(229,207,151,.2);
  box-shadow: var(--shadow);
  position: relative;
  direction: ltr;
}

.slider-track {
  display: flex;
  will-change: transform;
  transition: transform .45s cubic-bezier(.25,.46,.45,.94);
}

.slide {
  position: relative;
  min-width: 100%;
  height: 260px;
  overflow: hidden;
  flex-shrink: 0;
}
.slide img {
  width: 100%; height: 100%;
  object-fit: cover;
  display: block;
}
.slide-overlay {
  position: absolute;
  inset: 0;
  background: linear-gradient(to top, rgba(0,0,0,.75) 0%, rgba(0,0,0,.15) 60%, transparent 100%);
  display: flex;
  align-items: flex-end;
}
.slide-content { padding: 24px 28px; }
.slide-title {
  font-family: 'Playfair Display', serif;
  font-size: clamp(18px, 2.5vw, 24px);
  color: #fff;
  margin-bottom: 6px;
  text-shadow: 0 2px 12px rgba(0,0,0,.5);
}
.slide-desc { font-size: 14px; color: rgba(255,255,255,.82); }

/* ============================================================
   PILLARS GRID
   ============================================================ */
.pillars-section { padding: 80px 0; }
.pillars-container {
  width: min(var(--max), calc(100% - 44px));
  margin: 0 auto;
}

.pillars-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 20px;
  margin-top: 48px;
}

.pillar-card {
  padding: 32px 24px;
  border-radius: var(--radius-lg);
  border: 1px solid rgba(216,192,138,.22);
  background: rgba(255,255,255,.055);
  text-align: center;
  transition: transform .3s ease, box-shadow .3s ease, border-color .3s ease;
}
.pillar-card:hover {
  transform: translateY(-6px);
  border-color: rgba(255,215,0,.4);
  box-shadow: 0 20px 50px rgba(0,0,0,.3);
}

.pillar-image {
  display: flex;
  justify-content: center;
  margin-bottom: 18px;
}

.pillar-number {
  font-size: 11px;
  font-weight: 800;
  letter-spacing: .12em;
  text-transform: uppercase;
  color: var(--champagne);
  opacity: .7;
  margin-bottom: 10px;
}

.pillar-title {
  font-family: 'Playfair Display', serif;
  font-size: 20px;
  color: var(--pearl);
  margin-bottom: 12px;
}

.pillar-desc { font-size: 14px; color: rgba(255,255,255,.65); line-height: 1.7; }

/* ============================================================
   USP GRID
   ============================================================ */
.usp-section { padding: 80px 0; }
.usp-container {
  width: min(var(--max), calc(100% - 44px));
  margin: 0 auto;
}

.usp-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 20px;
  margin-top: 48px;
}

.usp-card {
  padding: 32px 24px;
  border-radius: var(--radius-lg);
  border: 1px solid rgba(216,192,138,.22);
  background: rgba(255,255,255,.055);
  text-align: center;
  transition: transform .3s ease, border-color .3s ease, box-shadow .3s ease;
}
.usp-card:hover {
  transform: translateY(-6px);
  border-color: rgba(255,215,0,.4);
  box-shadow: 0 20px 50px rgba(0,0,0,.3);
}

.usp-image {
  display: flex;
  justify-content: center;
  margin-bottom: 18px;
}

.usp-title {
  font-family: 'Playfair Display', serif;
  font-size: 20px;
  color: var(--pearl);
  margin-bottom: 12px;
}
.usp-desc { font-size: 14px; color: rgba(255,255,255,.65); line-height: 1.7; }

/* ============================================================
   COMPARISON TABLE
   ============================================================ */
.comparison-section { padding: 80px 0; }
.comparison-container {
  width: min(var(--max), calc(100% - 44px));
  margin: 0 auto;
}

.comparison-highlight { margin-top: 40px; }

.comparison-title {
  font-family: 'Playfair Display', serif;
  font-size: clamp(22px, 3vw, 32px);
  color: var(--text-dark);
  margin-bottom: 28px;
  text-align: center;
}
.comparison-title .highlight { color: var(--gold); }

.comparison-table-scroll {
  overflow-x: auto;
  -webkit-overflow-scrolling: touch;
  border-radius: var(--radius-lg);
  border: 1px solid rgba(229,207,151,.22);
  background: rgba(255,255,255,.04);
  box-shadow: 0 22px 60px rgba(0,0,0,.10);
}

.comparison-table {
  width: 100%;
  border-collapse: collapse;
  min-width: 680px;
  background: #fff;
}

.comparison-table th,
.comparison-table td {
  padding: 18px 22px;
  border-bottom: 1px solid rgba(0,0,0,.07);
  font-size: 14px;
  text-align: left;
}

.comparison-table th {
  background: #f8f2e9;
  color: var(--text-dark);
  font-weight: 900;
  font-family: 'Playfair Display', serif;
  font-size: 15px;
}

.comparison-table th.jodohku,
.comparison-table td.jodohku {
  background: linear-gradient(135deg, rgba(255,215,0,.12), rgba(180,138,73,.08));
  color: var(--bronze);
}

.comparison-table td.feature {
  font-weight: 700;
  color: var(--text-dark);
}

.comparison-table td.cross { color: #999; }
.comparison-table td.check { color: #2e7d32; font-weight: 700; }
.comparison-table td.jodohku.check { color: var(--gold-2); }

/* table-shell alias */
.table-shell {
  overflow-x: auto;
  -webkit-overflow-scrolling: touch;
  border-radius: var(--radius-lg);
  border: 1px solid rgba(229,207,151,.22);
  background: rgba(255,255,255,.04);
  box-shadow: 0 22px 60px rgba(0,0,0,.20);
}
.table-shell table { width: 100%; border-collapse: collapse; min-width: 720px; }
.table-shell th, .table-shell td { padding: 18px 22px; border-bottom: 1px solid rgba(255,255,255,.10); text-align: left; font-size: 14px; }
.table-shell th  { color: var(--champagne); background: rgba(255,255,255,.05); font-weight: 900; }
.table-shell td  { color: rgba(255,255,255,.78); }
.table-shell td:nth-child(2), .table-shell th:nth-child(2) { background: rgba(199,161,94,.11); color: #fff4d8; }
.table-shell .tick { color: var(--champagne); font-weight: 900; }

/* ============================================================
   115 QUESTIONS SECTION
   ============================================================ */
.questions-section { padding: 80px 0; }
.questions-container {
  width: min(var(--max), calc(100% - 44px));
  margin: 0 auto;
}

.questions-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 20px;
  margin-top: 48px;
}

.dimension-card {
  padding: 28px 24px;
  border-radius: var(--radius-md);
  border: 1px solid rgba(216,192,138,.18);
  background: rgba(255,255,255,.05);
  transition: transform .3s ease, border-color .3s ease;
}
.dimension-card:hover {
  transform: translateY(-4px);
  border-color: rgba(255,215,0,.35);
}

.dimension-icon {
  display: flex;
  margin-bottom: 14px;
}

.dimension-name {
  font-family: 'Playfair Display', serif;
  font-size: 18px;
  color: var(--pearl);
  margin-bottom: 6px;
}

.dimension-count {
  font-size: 11px;
  font-weight: 800;
  letter-spacing: .1em;
  text-transform: uppercase;
  color: var(--champagne);
  margin-bottom: 10px;
}

.dimension-desc { font-size: 13px; color: rgba(255,255,255,.62); line-height: 1.65; }

/* ============================================================
   TA'ARUF FLOW
   ============================================================ */
.taaruf-section { padding: 80px 0; }
.taaruf-container {
  width: min(var(--max), calc(100% - 44px));
  margin: 0 auto;
}

.taaruf-flow {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 24px;
  margin-top: 48px;
}

.flow-step {
  padding: 36px 28px;
  border-radius: var(--radius-lg);
  border: 1px solid rgba(216,192,138,.2);
  background: rgba(255,255,255,.055);
  text-align: center;
  position: relative;
  transition: transform .3s ease, border-color .3s ease;
}
.flow-step:hover {
  transform: translateY(-6px);
  border-color: rgba(255,215,0,.4);
}

.flow-number {
  position: absolute;
  top: -18px;
  left: 50%;
  transform: translateX(-50%);
  width: 36px; height: 36px;
  border-radius: 50%;
  background: linear-gradient(135deg, #e5cf9a, #94682f 58%, #62421b);
  color: #211508;
  font-weight: 1000;
  font-size: 15px;
  display: flex;
  align-items: center;
  justify-content: center;
  box-shadow: 0 8px 24px rgba(0,0,0,.25);
}

.flow-image {
  display: flex;
  justify-content: center;
  margin: 10px 0 20px;
}

.flow-title {
  font-family: 'Playfair Display', serif;
  font-size: 20px;
  color: var(--pearl);
  margin-bottom: 12px;
}
.flow-desc { font-size: 14px; color: rgba(255,255,255,.65); line-height: 1.7; }

/* ============================================================
   WEDDING ECOSYSTEM
   ============================================================ */
.wedding-section { padding: 80px 0; }
.wedding-container {
  width: min(var(--max), calc(100% - 44px));
  margin: 0 auto;
}

.wedding-preview { margin-top: 40px; }

.wedding-mockup {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 16px;
  margin: 32px 0;
}

.wedding-card {
  padding: 24px 20px;
  border-radius: var(--radius-md);
  border: 1px solid rgba(111,79,38,.18);
  background: rgba(255,255,255,.55);
  text-align: center;
  transition: transform .3s ease, box-shadow .3s ease;
}
.wedding-card:hover {
  transform: translateY(-4px);
  box-shadow: 0 12px 36px rgba(68,45,21,.14);
}

.wedding-icon {
  display: flex;
  justify-content: center;
  margin-bottom: 12px;
}

.wedding-name {
  font-family: 'Playfair Display', serif;
  font-size: 16px;
  color: var(--text-dark);
  font-weight: 700;
  margin-bottom: 6px;
}

.wedding-price {
  font-size: 13px;
  color: var(--gold-2);
  font-weight: 700;
}

.wedding-explanation {
  padding: 24px;
  border-radius: var(--radius-md);
  border: 1px solid rgba(111,79,38,.15);
  background: rgba(255,255,255,.4);
  color: var(--muted-dark);
  font-size: 14px;
  line-height: 1.75;
}

/* ============================================================
   SCIENCE / SCIENCE CARDS
   ============================================================ */
.science-wrap { display: grid; gap: 24px; }

.science-card {
  display: grid;
  grid-template-columns: .84fr 1.16fr;
  gap: 0;
  overflow: hidden;
  border-radius: var(--radius-xl);
  border: 1px solid rgba(229,207,151,.23);
  background: rgba(255,255,255,.055);
  box-shadow: 0 26px 90px rgba(0,0,0,.25);
}
.science-card.reverse { grid-template-columns: 1.16fr .84fr; }

.science-photo {
  min-height: 530px;
  position: relative;
  overflow: hidden;
  background: #111;
}
.science-photo img {
  width: 100%; height: 100%;
  object-fit: cover;
  position: absolute;
  inset: 0;
}
.science-photo::after {
  content: "";
  position: absolute;
  inset: 0;
  background: linear-gradient(180deg, rgba(0,0,0,.08), rgba(0,0,0,.42));
}

.section-badge {
  position: absolute;
  z-index: 2;
  top: 20px; left: 20px;
  padding: 8px 12px;
  border-radius: 999px;
  background: linear-gradient(135deg, #e5cf9a, #a47738 58%, #65441b);
  color: #26180a;
  font-size: 12px;
  font-weight: 1000;
  letter-spacing: .08em;
  text-transform: uppercase;
}

.science-copy { padding: clamp(28px, 5vw, 54px); }
.science-copy h3 {
  font-family: 'Playfair Display', serif;
  font-size: clamp(34px, 4vw, 48px);
  margin: 10px 0 16px;
  color: var(--pearl);
}
.science-copy p { color: rgba(255,255,255,.72); max-width: 640px; }

.title-list {
  list-style: none;
  padding: 0;
  margin: 26px 0 0;
  display: grid;
  grid-template-columns: repeat(2, minmax(0,1fr));
  gap: 10px 14px;
}
.title-list li {
  position: relative;
  padding: 10px 12px 10px 34px;
  border-radius: 14px;
  background: rgba(255,255,255,.055);
  border: 1px solid rgba(255,255,255,.08);
  color: rgba(255,255,255,.86);
  font-size: 14px;
  min-height: 43px;
  display: flex;
  align-items: center;
}
.title-list li::before {
  content: "";
  position: absolute;
  left: 12px;
  width: 10px; height: 10px;
  border-radius: 50%;
  background: linear-gradient(135deg, #e6d0a0, #a87836);
  box-shadow: 0 0 0 3px rgba(199,161,94,.16);
}

.science-end {
  text-align: center;
  color: #f3dca5;
  font-weight: 800;
  max-width: 920px;
  margin: 28px auto 0;
}

.highlight {
  margin-top: 28px;
  padding: 18px 20px;
  border: 1px solid rgba(229,207,151,.26);
  border-radius: 20px;
  background: linear-gradient(135deg, rgba(216,192,138,.13), rgba(255,255,255,.035));
  color: rgba(255,255,255,.84);
  font-weight: 700;
}

/* ============================================================
   STEPS / PROCESS
   ============================================================ */
.steps {
  display: grid;
  grid-template-columns: repeat(5, 1fr);
  gap: 16px;
}

.step-card {
  border-radius: 24px;
  background: rgba(255,255,255,.72);
  border: 1px solid rgba(199,161,94,.22);
  overflow: hidden;
  box-shadow: 0 18px 48px rgba(68,45,21,.12);
}

.step-img {
  position: relative;
  min-height: 150px;
  overflow: hidden;
  background: #111;
}
.step-img img {
  width: 100%; height: 100%;
  object-fit: cover;
  position: absolute;
  inset: 0;
}
.step-img::after {
  content: "";
  position: absolute;
  inset: 0;
  background: linear-gradient(180deg, rgba(0,0,0,.03), rgba(0,0,0,.55)),
              radial-gradient(circle at 18% 12%, rgba(245,222,174,.25), transparent 36%);
}

.step-number {
  position: absolute;
  z-index: 3;
  left: 16px; bottom: 14px;
  width: 38px; height: 38px;
  border-radius: 50%;
  display: grid;
  place-items: center;
  background: linear-gradient(135deg, #e5cf9a, #94682f 58%, #62421b);
  color: #211508;
  font-weight: 1000;
  box-shadow: 0 12px 28px rgba(0,0,0,.26);
  font-size: 15px;
}

.step-body { padding: 18px; }
.step-body h3 { font-size: 17px; margin-bottom: 8px; color: var(--text-dark); }
.step-body p  { color: var(--muted-dark); font-size: 13px; }

/* ============================================================
   ECOSYSTEM BLOCK
   ============================================================ */
.ecosystem {
  display: grid;
  grid-template-columns: .9fr 1.1fr;
  align-items: stretch;
  min-height: 430px;
  overflow: hidden;
  border-radius: 36px;
  border: 1px solid rgba(199,161,94,.24);
  background: #f4eadc;
  box-shadow: 0 25px 70px rgba(68,45,21,.18);
}

.ecosystem-copy { padding: clamp(30px, 5vw, 58px); }
.ecosystem-copy h2 { color: #191914; }
.ecosystem-copy p  { color: var(--muted-dark); margin-top: 18px; max-width: 540px; }

.ecosystem-list {
  display: grid;
  grid-template-columns: repeat(2, minmax(0,1fr));
  gap: 12px;
  margin-top: 26px;
}
.ecosystem-list span {
  border: 1px solid rgba(111,79,38,.15);
  background: rgba(255,255,255,.58);
  border-radius: 14px;
  padding: 12px 14px;
  font-weight: 800;
  color: #332613;
}

.ecosystem-photo {
  position: relative;
  min-height: 430px;
}
.ecosystem-photo img {
  width: 100%; height: 100%;
  object-fit: cover;
  position: absolute;
  inset: 0;
}
.ecosystem-photo::before {
  content: "";
  position: absolute;
  inset: 0;
  z-index: 1;
  background: linear-gradient(90deg, #f4eadc 0%, rgba(244,234,220,.12) 42%, transparent 100%);
}

/* ============================================================
   GALLERY GRID (photo cards)
   ============================================================ */
.gallery-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 18px;
}

.photo-card {
  position: relative;
  min-height: 276px;
  border-radius: 24px;
  overflow: hidden;
  background: #111;
  border: 1px solid rgba(216,192,138,.22);
  box-shadow: 0 18px 46px rgba(46,35,20,.16);
  isolation: isolate;
}
.photo-card img {
  width: 100%; height: 100%;
  object-fit: cover;
  position: absolute;
  inset: 0;
  transition: transform .5s ease;
}
.photo-card:hover img { transform: scale(1.055); }
.photo-card::after {
  content: "";
  position: absolute;
  inset: 0;
  background:
    linear-gradient(180deg, rgba(0,0,0,.03), rgba(0,0,0,.55)),
    radial-gradient(circle at 18% 12%, rgba(245,222,174,.25), transparent 36%);
  pointer-events: none;
}
.photo-card .card-copy {
  position: absolute;
  z-index: 2;
  left: 18px; right: 18px; bottom: 18px;
  color: white;
}
.photo-card h3 { font-size: 18px; margin-bottom: 8px; text-shadow: 0 8px 24px rgba(0,0,0,.6); }
.photo-card p  { font-size: 13px; color: rgba(255,255,255,.80); }

.photo-label {
  position: absolute;
  top: 14px; left: 14px;
  z-index: 2;
  border-radius: 999px;
  padding: 6px 10px;
  color: #24180a;
  background: linear-gradient(135deg, #e6d1a0, #aa7f42 58%, #72501f);
  font-size: 11px;
  font-weight: 900;
  letter-spacing: .07em;
  text-transform: uppercase;
  box-shadow: 0 8px 26px rgba(0,0,0,.18);
}

/* Core 3-column image panels */
.core-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 20px;
}

.image-panel {
  min-height: 320px;
  position: relative;
  overflow: hidden;
  border-radius: 30px;
  border: 1px solid rgba(199,161,94,.20);
  box-shadow: 0 20px 60px rgba(68,45,21,.18);
}
.image-panel img {
  position: absolute;
  inset: 0;
  width: 100%; height: 100%;
  object-fit: cover;
}
.image-panel::after {
  content: "";
  position: absolute;
  inset: 0;
  background: linear-gradient(180deg, rgba(0,0,0,.08), rgba(0,0,0,.55));
}
.image-panel .panel-copy {
  position: absolute;
  z-index: 2;
  inset: auto 22px 22px 22px;
  color: white;
}
.image-panel h3 {
  font-family: 'Playfair Display', serif;
  font-size: 27px;
  margin-bottom: 10px;
}
.image-panel p { color: rgba(255,255,255,.78); font-size: 14px; }

/* ============================================================
   TRUST ROW
   ============================================================ */
.trust-row {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 12px;
  margin-top: 38px;
  max-width: 700px;
}

.trust-item {
  border: 1px solid rgba(229,207,151,.20);
  background: rgba(255,255,255,.035);
  border-radius: 18px;
  padding: 16px;
  color: rgba(255,255,255,.84);
  font-weight: 800;
  font-size: 13px;
}
.trust-item strong {
  display: block;
  color: var(--champagne);
  font-size: 18px;
  margin-bottom: 3px;
}

/* ============================================================
   FINAL CTA BLOCK
   ============================================================ */
.final-cta {
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 24px;
  padding: 34px;
  border-radius: 30px;
  background: linear-gradient(135deg, rgba(255,255,255,.08), rgba(255,255,255,.035));
  border: 1px solid rgba(229,207,151,.25);
}
.final-cta h2 { margin: 0; font-size: clamp(30px, 4vw, 46px); color: var(--pearl); }
.final-cta p  { color: rgba(255,255,255,.68); margin-top: 8px; }

/* ============================================================
   MODALS
   ============================================================ */
.modal-overlay {
  position: fixed;
  inset: 0;
  z-index: 1000;
  background: rgba(0,0,0,.85);
  backdrop-filter: blur(8px);
  display: none;
  align-items: center;
  justify-content: center;
  padding: 24px;
}
.modal-overlay.active { display: flex; }

.modal-box {
  background: linear-gradient(160deg, #12100d 0%, #0a0806 100%);
  border: 1px solid rgba(216,192,138,.25);
  border-radius: var(--radius-lg);
  max-width: 720px;
  width: 100%;
  max-height: 85vh;
  display: flex;
  flex-direction: column;
  overflow: hidden;
}

.modal-header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 24px 32px;
  border-bottom: 1px solid rgba(216,192,138,.15);
}

.modal-title {
  font-family: 'Playfair Display', serif;
  font-size: 22px;
  color: var(--champagne);
  margin: 0;
}

.modal-close {
  background: none;
  border: none;
  color: rgba(255,255,255,.5);
  font-size: 18px;
  cursor: pointer;
  padding: 4px 10px;
  border-radius: 6px;
  transition: color .2s, background .2s;
}
.modal-close:hover { color: var(--gold-light); background: rgba(255,215,0,.08); }

.modal-body {
  overflow-y: auto;
  padding: 28px 32px;
  flex: 1;
}

.modal-meta {
  font-size: 12px;
  color: rgba(255,255,255,.4);
  margin-bottom: 24px;
  padding-bottom: 16px;
  border-bottom: 1px solid rgba(255,255,255,.08);
}

.modal-section { margin-bottom: 24px; }
.modal-section h3 {
  font-family: 'Playfair Display', serif;
  font-size: 16px;
  color: var(--champagne);
  margin: 0 0 10px;
}
.modal-section p,
.modal-section ol,
.modal-section ul {
  color: rgba(255,255,255,.68);
  font-size: 14px;
  line-height: 1.75;
  margin: 0;
  padding-left: 20px;
}
.modal-section p { padding-left: 0; }
.modal-section strong { color: rgba(255,255,255,.88); }
.modal-section a { color: var(--champagne); }

/* ============================================================
   SCROLL REVEAL ANIMATIONS
   ============================================================ */
.reveal {
  opacity: 0;
  transform: translateY(18px);
  transition: opacity .7s ease, transform .7s ease;
}
.reveal.visible,
.reveal.show {
  opacity: 1;
  transform: none;
}

/* ============================================================
   FOOTER
   ============================================================ */
.site-footer,
footer {
  color: rgba(255,255,255,.55);
  background: #060706;
  border-top: 1px solid rgba(216,192,138,.16);
  padding: 30px 0;
  font-size: 13px;
}

.footer-wrap {
  display: flex;
  justify-content: space-between;
  align-items: center;
  gap: 18px;
  flex-wrap: wrap;
  width: min(var(--max), calc(100% - 44px));
  margin: 0 auto;
}
.footer-wrap strong { color: var(--champagne); }
.footer-wrap a {
  color: rgba(216,192,138,.75);
  text-decoration: underline;
  text-decoration-thickness: 1px;
  text-underline-offset: 3px;
}

.footer-privacy {
  width: 100%;
  padding-top: 16px;
  border-top: 1px solid rgba(255,255,255,.06);
  color: rgba(255,255,255,.42);
  font-size: 12px;
  line-height: 1.7;
}

/* ============================================================
   ERROR POPUP (JS-injected)
   ============================================================ */
#errorPopup {
  position: fixed;
  inset: 0;
  z-index: 99999;
}

/* ============================================================
   RESPONSIVE — 1100px
   ============================================================ */
@media (max-width: 1100px) {
  .nav-links { gap: 16px; }
  .gallery-grid { grid-template-columns: repeat(2, 1fr); }
  .steps { grid-template-columns: repeat(3, 1fr); }
  .pillars-grid, .usp-grid { grid-template-columns: repeat(2, 1fr); }
  .wedding-mockup { grid-template-columns: repeat(2, 1fr); }
}

/* ============================================================
   RESPONSIVE — 920px
   ============================================================ */
@media (max-width: 920px) {
  .container { width: min(100% - 32px, var(--max)); }
  .nav-links, .nav-menu { display: none; }
  .nav, .navbar-container { min-height: 68px; }

  .hero-container {
    grid-template-columns: 1fr;
    min-height: auto;
    padding: 48px 0 70px;
    gap: 30px;
  }

  .taaruf-flow { grid-template-columns: 1fr; }
  .questions-grid { grid-template-columns: repeat(2, 1fr); }
  .core-grid  { grid-template-columns: 1fr; }
  .science-card,
  .science-card.reverse { grid-template-columns: 1fr; }
  .science-card.reverse .science-photo { order: -1; }
  .science-photo { min-height: 390px; }
  .title-list { grid-template-columns: 1fr; }
  .ecosystem { grid-template-columns: 1fr; }
  .ecosystem-photo {
    min-height: 320px;
    order: -1;
  }
  .ecosystem-photo::before {
    background: linear-gradient(180deg, transparent 35%, #f4eadc 100%);
  }
  .final-cta { align-items: stretch; flex-direction: column; }
  .trust-row { grid-template-columns: 1fr; }
}

/* ============================================================
   RESPONSIVE — 640px
   ============================================================ */
@media (max-width: 640px) {
  .section        { padding: 70px 0; }
  .section.compact { padding: 56px 0; }
  .container { width: min(100% - 26px, var(--max)); }

  .brand span, .navbar-brand span { font-size: 18px; }
  .brand-mark { width: 38px; height: 38px; border-radius: 14px; }
  .nav .btn { min-height: 42px; padding: 0 14px; font-size: 12px; }

  .hero-cta-buttons .btn,
  .hero-cta-buttons a { width: 100%; }

  .form-row { grid-template-columns: 1fr; }

  .pillars-grid,
  .usp-grid,
  .wedding-mockup { grid-template-columns: 1fr; }

  .gallery-grid { grid-template-columns: 1fr; gap: 14px; }
  .photo-card   { min-height: 260px; border-radius: 22px; }
  .image-panel  { min-height: 280px; border-radius: 24px; }
  .science-card { border-radius: 24px; }
  .science-photo { min-height: 300px; }
  .science-copy  { padding: 24px; }
  .title-list li { font-size: 13px; }

  .taaruf-flow { grid-template-columns: 1fr; }
  .questions-grid { grid-template-columns: 1fr; }
  .steps { grid-template-columns: 1fr; }
  .step-img { min-height: 210px; }

  .ecosystem-list { grid-template-columns: 1fr; }
  .final-cta { padding: 24px; border-radius: 24px; }
  .comparison-table th,
  .comparison-table td { padding: 12px 14px; font-size: 12px; }
  .modal-header, .modal-body { padding: 18px 20px; }
}

/* ============================================================
   RESPONSIVE — 420px
   ============================================================ */
@media (max-width: 420px) {
  .container { width: min(100% - 22px, var(--max)); }
  .section-label, .eyebrow { font-size: 10px; letter-spacing: .09em; }
  .lead { font-size: 15px; }
  .photo-card    { min-height: 238px; }
  .science-photo { min-height: 265px; }
  .ecosystem-photo { min-height: 260px; }
  .hero-title { font-size: clamp(36px, 10vw, 52px); }
  .slide { height: 200px; }
}

/* ============================================================
   RTL OVERRIDES (Arabic)
   ============================================================ */
[dir="rtl"] .form-row            { direction: rtl; }
[dir="rtl"] .nav-links,
[dir="rtl"] .nav-menu            { direction: rtl; }
[dir="rtl"] .comparison-table   { direction: rtl; }
[dir="rtl"] .modal-body          { direction: rtl; text-align: right; }
[dir="rtl"] .checkbox-premium    { direction: rtl; }
[dir="rtl"] .slide-content       { direction: rtl; text-align: right; }
[dir="rtl"] .taaruf-flow         { direction: rtl; }
[dir="rtl"] .hero-container      { direction: rtl; }

/* ============================================================
   PRINT
   ============================================================ */
@media print {
  .navbar, .site-header, .modal-overlay, .btn-submit-premium { display: none !important; }
  body { background: #fff !important; color: #000 !important; }
}

/* Force footer styles */
.site-footer,
footer {
  background: var(--ink-2) !important;
  color: var(--muted) !important;
}

.site-footer *,
footer * {
  color: inherit;
}

.site-footer strong,
footer strong {
  color: var(--champagne) !important;
}

.site-footer a,
footer a {
  color: var(--champagne) !important;
}

.footer-bottom,
.footer-copyright,
.footer-parent {
  color: var(--muted) !important;
}

/* Override hardcoded inline styles */
[style*="color:#555"],
[style*="color:#777"],
[style*="color:#333"],
[style*="color:#2a2a2a"],
[style*="background:#000"] {
  color: var(--muted) !important;
  background: var(--ink-2) !important;
}

/* ============================================================
   NAVBAR OVERRIDES - Fix hardcoded styles
   ============================================================ */

/* Fix navbar background */
.navbar {
  background: rgba(8, 7, 6, 0.95) !important;
  backdrop-filter: blur(18px) !important;
  border-bottom: 1px solid rgba(216, 192, 138, 0.16) !important;
}

.nav-container {
  display: flex !important;
  align-items: center !important;
  justify-content: space-between !important;
  min-height: 76px !important;
  gap: 18px !important;
  padding: 0 24px !important;
  max-width: var(--max) !important;
  margin: 0 auto !important;
}

/* Fix brand colors */
.nav-brand a {
  text-decoration: none !important;
}

.nav-title-main {
  color: var(--text) !important;
  font-weight: 900 !important;
  letter-spacing: -0.02em !important;
  font-size: 21px !important;
}

.nav-dot-my {
  color: var(--champagne) !important;
}

/* Fix navigation menu colors */
.nav-menu {
  display: flex !important;
  gap: 28px !important;
  align-items: center !important;
  list-style: none !important;
  margin: 0 !important;
  padding: 0 !important;
}

.nav-menu li a {
  color: rgba(255, 255, 255, 0.72) !important;
  font-size: 13px !important;
  font-weight: 800 !important;
  text-decoration: none !important;
  transition: color 0.2s ease !important;
}

.nav-menu li a:hover {
  color: var(--champagne) !important;
}

/* Fix CTA button */
.nav-cta {
  display: inline-flex !important;
  align-items: center !important;
  justify-content: center !important;
  gap: 10px !important;
  min-height: 42px !important;
  padding: 0 18px !important;
  border-radius: 999px !important;
  border: 1px solid transparent !important;
  font-weight: 900 !important;
  cursor: pointer !important;
  transition: transform 0.2s ease, box-shadow 0.2s ease !important;
  text-decoration: none !important;
  font-size: 13px !important;
  color: #1f170d !important;
  background: linear-gradient(135deg, #e9d6a4 0%, #c4a064 24%, #8a622d 55%, #5f411c 78%, #d1b06f 100%) !important;
  border-color: rgba(238, 215, 161, 0.38) !important;
  box-shadow: 0 18px 44px rgba(67, 43, 17, 0.30), inset 0 1px 0 rgba(255, 255, 255, 0.28) !important;
}

.nav-cta:hover {
  transform: translateY(-2px) !important;
  box-shadow: 0 22px 54px rgba(69, 45, 18, 0.36), inset 0 1px 0 rgba(255, 255, 255, 0.30) !important;
}

/* Fix language switcher */
.lang-switcher {
  display: flex !important;
  gap: 6px !important;
}

.lang-btn {
  padding: 4px 10px !important;
  border-radius: 999px !important;
  border: 1px solid rgba(216, 192, 138, 0.3) !important;
  color: rgba(255, 255, 255, 0.6) !important;
  font-size: 12px !important;
  font-weight: 700 !important;
  cursor: pointer !important;
  background: transparent !important;
  transition: all 0.2s ease !important;
}

.lang-btn.active,
.lang-btn:hover {
  background: var(--gold) !important;
  color: #1f170d !important;
  border-color: var(--gold) !important;
}

/* Fix logo image */
.nav-logo-img img {
  width: 54px !important;
  height: 54px !important;
  object-fit: contain !important;
  filter: drop-shadow(0 0 10px rgba(255, 215, 0, 0.5)) !important;
}

/* Responsive fixes for navbar */
@media (max-width: 920px) {
  .nav-menu {
    display: none !important;
  }
  
  .nav-container {
    min-height: 68px !important;
  }
}
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
          <img src="images/muslim-family.jpg" alt="Keluarga Muslim berbincang">
          <div class="slide-overlay">
            <div class="slide-content">
              <h3 class="slide-title">Sistem Wali Digital</h3>
              <p class="slide-desc">Platform pertama yang mewajibkan penglibatan wali dalam proses ta'aruf</p>
            </div>
          </div>
        </div>

        <!-- 5. Komuniti Muslim Malaysia — Mosque/cultural gathering -->
        <div class="slide">
            <img src="images/komuniti-muslim.jpg" alt="Muslim Professionals">
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
          <img src="https://images.unsplash.com/photo-1551650975-87deedd944c3?w=900&h=260&fit=crop&q=80" alt="Aplikasi Mobile">
          <div class="slide-overlay">
            <div class="slide-content">
              <h3 class="slide-title">Aplikasi Mobile Premium</h3>
              <p class="slide-desc">Interface yang elegant dan mudah digunakan untuk iOS dan Android</p>
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
  let raw = e.target.value.replace(/\D/g, '');
  if (raw.length > 6 && raw.length <= 8) raw = raw.slice(0,6) + '-' + raw.slice(6);
  else if (raw.length > 8) raw = raw.slice(0,6) + '-' + raw.slice(6,8) + '-' + raw.slice(8,12);
  e.target.value = raw;
});

// ── VALIDATION TRANSLATION HELPER ──                          // ✅ NEW
function v() {
  const lang = localStorage.getItem('jdk_lang') || 'ms';
  return (i18n[lang] || i18n['ms']).validation;
}

// ── ADVANCED IC VALIDATION ──
function validateIC(icFormatted) {
  const vt = v();                                               // ✅ CHANGED
  const ic = icFormatted.replace(/-/g, '');

  if (!ic || ic.length !== 12 || !/^\d{12}$/.test(ic))
    return { valid: false, error: vt.ic_invalid };             // ✅ CHANGED
  if (/^(\d)\1{11}$/.test(ic))
    return { valid: false, error: vt.ic_repeat };              // ✅ CHANGED

  const sequential = '0123456789012345678901234567890';
  const reverseSeq = '9876543210987654321098765432109';
  if (sequential.includes(ic.slice(0, 10)) || reverseSeq.includes(ic.slice(0, 10)))
    return { valid: false, error: vt.ic_sequential };          // ✅ CHANGED

  const yy = parseInt(ic.substring(0, 2));
  const mm = parseInt(ic.substring(2, 4));
  const dd = parseInt(ic.substring(4, 6));

  if (mm < 1 || mm > 12)
    return { valid: false, error: vt.ic_month };               // ✅ CHANGED

  const currentYear = new Date().getFullYear();
  const fullYear = yy <= (currentYear % 100) ? 2000 + yy : 1900 + yy;
  const daysInMonth = new Date(fullYear, mm, 0).getDate();
  if (dd < 1 || dd > daysInMonth)
    return { valid: false, error: vt.ic_day(mm, daysInMonth) }; // ✅ CHANGED

  const dob = new Date(fullYear, mm - 1, dd);
  if (dob > new Date())
    return { valid: false, error: vt.ic_future };              // ✅ CHANGED

  const age = (new Date() - dob) / (1000 * 60 * 60 * 24 * 365.25);
  if (age > 120)
    return { valid: false, error: vt.ic_old };                 // ✅ CHANGED

  const stateCode = parseInt(ic.substring(6, 8));
  const validStateCodes = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16];
  const isValidState = validStateCodes.includes(stateCode) || (stateCode >= 21 && stateCode <= 59);
  if (!isValidState)
    return { valid: false, error: vt.ic_state(ic.substring(6, 8)) }; // ✅ CHANGED

  const lastDigit = parseInt(ic[11]);
  const gender = lastDigit % 2 === 0 ? v().gender_female : v().gender_male;
  return {
    valid: true,
    gender,
    dob: `${dd.toString().padStart(2,'0')}/${mm.toString().padStart(2,'0')}/${fullYear}`,
    age: Math.floor(age),
    stateCode
  };
}

// ── IC HINT HELPER ──
function showICHint(result) {
  const field = document.getElementById('icNo');
  const existing = field.parentElement.querySelector('.field-hint');
  if (existing) existing.remove();
  const hint = document.createElement('div');
  hint.className = 'field-hint';
  hint.style.cssText = 'color:#4CAF50;font-size:11px;margin-top:5px;';
  hint.textContent = v().ic_hint(result.gender, result.dob, result.age);
  field.parentElement.appendChild(hint);
}

function clearICHint() {
  const existing = document.getElementById('icNo')?.parentElement.querySelector('.field-hint');
  if (existing) existing.remove();
}

// ── IMAGE UPLOAD HANDLER ──
function handleImageUpload(event) {
  const file = event.target.files[0];
  if (!file) return;
  if (file.size > 5 * 1024 * 1024) {
    alert(v().image_too_large);
    event.target.value = '';
    return;
  }
  selectedFile = file;
  const reader = new FileReader();
  reader.onload = function(e) {
    const uploadArea = document.querySelector('.upload-area');
    uploadArea.innerHTML = `
      <div style="text-align:center;">
        <div style="position:relative; display:inline-block; margin-bottom:12px;">
          <img 
            src="${e.target.result}" 
            alt="Preview"
            style="
              width:110px; height:110px; object-fit:cover;
              border-radius:50%; border:3px solid var(--gold);
              box-shadow:0 0 20px rgba(255,215,0,0.3);
              display:block;
            "
          >
          <div style="
            position:absolute; bottom:4px; right:4px;
            width:28px; height:28px; border-radius:50%;
            background:linear-gradient(135deg,var(--emerald),var(--emerald-light));
            border:2px solid var(--gold);
            display:flex; align-items:center; justify-content:center;
            font-size:14px; color:#fff;
          ">✓</div>
        </div>
        <div style="font-size:13px; color:var(--gold); font-weight:600; margin-bottom:4px;">
          ${v().upload_success}
        </div>
        <div style="font-size:11px; color:#888; margin-bottom:10px;">
          ${file.name}
        </div>
        <label style="
          display:inline-block; cursor:pointer;
          font-size:11px; color:#666;
          border:1px solid rgba(255,255,255,0.1);
          padding:5px 14px; border-radius:20px;
          transition:all 0.3s;
        "
        onmouseover="this.style.borderColor='rgba(255,215,0,0.4)';this.style.color='var(--gold)'"
        onmouseout="this.style.borderColor='rgba(255,255,255,0.1)';this.style.color='#666'"
        >
          ${v().upload_change}
          <input type="file" accept="image/*" onchange="handleImageUpload(event)" style="display:none;">
        </label>
      </div>
    `;
  };
  reader.readAsDataURL(file);
}

// ── SHOW / CLEAR FIELD ERRORS ──
function showFieldError(id, message) {
  const field = document.getElementById(id);
  if (!field) return;
  field.style.borderColor = '#FF6B6B';
  const existing = field.parentElement.querySelector('.field-error');
  if (existing) existing.remove();
  const err = document.createElement('div');
  err.className = 'field-error';
  err.style.cssText = 'color:#FF6B6B;font-size:12px;margin-top:6px;';
  err.textContent = message;
  field.parentElement.appendChild(err);
}

function clearFieldError(id) {
  const field = document.getElementById(id);
  if (!field) return;
  field.style.borderColor = '';
  const existing = field.parentElement.querySelector('.field-error');
  if (existing) existing.remove();
}

function showUploadError(message) {
  const uploadArea = document.querySelector('.upload-area');
  if (!uploadArea) return;
  uploadArea.style.borderColor = '#FF6B6B';
  const existing = uploadArea.parentElement.querySelector('.field-error');
  if (existing) existing.remove();
  const err = document.createElement('div');
  err.className = 'field-error';
  err.style.cssText = 'color:#FF6B6B;font-size:12px;margin-top:6px;';
  err.textContent = message;
  uploadArea.parentElement.appendChild(err);
}

function clearUploadError() {
  const uploadArea = document.querySelector('.upload-area');
  if (!uploadArea) return;
  uploadArea.style.borderColor = '';
  const existing = uploadArea.parentElement.querySelector('.field-error');
  if (existing) existing.remove();
}

function showCheckboxError(message) {
  const cb = document.querySelector('.checkbox-premium');
  if (!cb) return;
  const existing = cb.querySelector('.field-error');
  if (existing) existing.remove();
  const err = document.createElement('div');
  err.className = 'field-error';
  err.style.cssText = 'color:#FF6B6B;font-size:12px;margin-top:6px;';
  err.textContent = message;
  cb.appendChild(err);
}

function clearCheckboxError() {
  const cb = document.querySelector('.checkbox-premium');
  if (!cb) return;
  const existing = cb.querySelector('.field-error');
  if (existing) existing.remove();
}

// ── MAIN FORM VALIDATION ──
function validateForm() {
  const vt = v();                                               // ✅ CHANGED
  let valid = true;

  // Full Name
  const name = document.getElementById('fullName').value.trim();
  const nameRegex = /^[a-zA-Z\u0600-\u06FF\s\/\'\-\.]+$/;
  if (!name) { showFieldError('fullName', vt.name_required); valid = false; }            // ✅ CHANGED
  else if (name.length < 3) { showFieldError('fullName', vt.name_short); valid = false; } // ✅ CHANGED
  else if (!nameRegex.test(name)) { showFieldError('fullName', vt.name_invalid); valid = false; } // ✅ CHANGED
  else { clearFieldError('fullName'); }

  // IC Number — advanced validation
  const icValue = document.getElementById('icNo').value;
  const icResult = validateIC(icValue);
  if (!icValue.replace(/-/g,'')) { showFieldError('icNo', vt.ic_required); clearICHint(); valid = false; } // ✅ CHANGED
  else if (!icResult.valid) { showFieldError('icNo', icResult.error); clearICHint(); valid = false; }
  else { clearFieldError('icNo'); showICHint(icResult); }

  // Phone Number
  const phone = document.getElementById('phoneNo').value.trim();
  const phoneRegex = /^(\+?60|0)[1-9]\d{7,9}$/;
  if (!phone) { showFieldError('phoneNo', vt.phone_required); valid = false; }           // ✅ CHANGED
  else if (!phoneRegex.test(phone.replace(/[\s-]/g, ''))) { showFieldError('phoneNo', vt.phone_invalid); valid = false; } // ✅ CHANGED
  else { clearFieldError('phoneNo'); }

  // Email
  const email = document.getElementById('emailAddr').value.trim();
  const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  if (!email) { showFieldError('emailAddr', vt.email_required); valid = false; }         // ✅ CHANGED
  else if (!emailRegex.test(email)) { showFieldError('emailAddr', vt.email_invalid); valid = false; } // ✅ CHANGED
  else { clearFieldError('emailAddr'); }

  // Profile Picture
  if (!selectedFile) { showUploadError(vt.photo_required); valid = false; }              // ✅ CHANGED
  else { clearUploadError(); }

  // Terms Checkbox
  if (!document.getElementById('agreeTerms').checked) { showCheckboxError(vt.terms_required); valid = false; } // ✅ CHANGED
  else { clearCheckboxError(); }

  return valid;
}

// ── CLEAR ERRORS ON INPUT ──
['phoneNo', 'emailAddr'].forEach(id => {
  document.getElementById(id)?.addEventListener('input', () => clearFieldError(id));
});

// Name — real-time letters only (translated)                   // ✅ CHANGED
document.getElementById('fullName')?.addEventListener('input', () => {
  const name = document.getElementById('fullName').value.trim();
  const nameRegex = /^[a-zA-Z\u0600-\u06FF\s\/\'\-\.]+$/;
  if (name && !nameRegex.test(name)) {
    showFieldError('fullName', v().name_invalid);               // ✅ CHANGED
  } else {
    clearFieldError('fullName');
  }
});

// IC — real-time advanced validation
document.getElementById('icNo')?.addEventListener('input', () => {
  const icValue = document.getElementById('icNo').value;
  const clean = icValue.replace(/-/g, '');
  if (clean.length === 12) {
    const result = validateIC(icValue);
    if (!result.valid) {
      showFieldError('icNo', result.error);
      clearICHint();
    } else {
      clearFieldError('icNo');
      showICHint(result);
    }
  } else {
    clearFieldError('icNo');
    clearICHint();
  }
});

document.getElementById('agreeTerms')?.addEventListener('change', clearCheckboxError);

// ── GENERATE ID ──
function generateId() {
  const year = new Date().getFullYear();
  const random = crypto.randomUUID().replace(/-/g,'').substring(0,8).toUpperCase();
  return `JDK-${year}-${random}`;
}

// ── ERROR POPUP ──
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
      position: relative;
    ">
      <div style="padding: 40px 36px; text-align: center;">
        <div style="font-size:32px; margin-bottom:16px;">✗</div>
        <h3 style="font-family:'Playfair Display',serif; font-size:22px; color:#fff; margin-bottom:14px;">${title}</h3>
        <p style="color:#B0B0B0; font-size:14px; line-height:1.7; margin-bottom:28px;">${message}</p>
        <button onclick="document.getElementById('errorPopup').remove()" style="
          background: linear-gradient(135deg, #FF4444, #FF8800);
          color:#fff; border:none; padding:12px 36px;
          border-radius:8px; font-weight:700; font-size:13px;
          cursor:pointer; text-transform:uppercase; letter-spacing:1px;
        ">${v().close_btn}</button>
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
  if (!validateForm()) {
    const firstError = document.querySelector('.field-error');
    if (firstError) firstError.scrollIntoView({ behavior: 'smooth', block: 'center' });
    return;
  }

  const submitBtn = e.target.querySelector('.btn-submit-premium');
  submitBtn.disabled = true;
  submitBtn.textContent = v().processing;                       // ✅ CHANGED

  try {
    const jdk_id = generateId();
    let photo_url = null;

   if (selectedFile) {
  const ext = selectedFile.name.split('.').pop();
  const filename = `${jdk_id}.${ext}`;
  const { data: uploadData, error: uploadError } = await db.storage
    .from('profile-pics')
    .upload(filename, selectedFile);

  if (uploadError) {
    console.error('Upload error:', uploadError.message);
    submitBtn.disabled = false;
   submitBtn.textContent = (i18n[localStorage.getItem('jdk_lang') || 'ms'] || i18n['ms']).btn_submit;
    showErrorPopup(v().photo_upload_fail_title, v().photo_upload_fail_msg);
    return;
  }

  const { data: urlData } = db.storage.from('profile-pics').getPublicUrl(filename);
  photo_url = urlData?.publicUrl || null;

  // ── HARD GUARD: block insert if URL is missing ──
  if (!photo_url) {
    console.error('photo_url is null after upload');
    submitBtn.disabled = false;
    submitBtn.textContent = (i18n[localStorage.getItem('jdk_lang') || 'ms'] || i18n['ms']).btn_submit;
    showErrorPopup(v().photo_upload_fail_title, v().photo_upload_fail_msg);
    return;
  }
}

// ── HARD GUARD: block insert if no file was selected ──
if (!photo_url) {
  submitBtn.disabled = false;
  submitBtn.textContent = (i18n[localStorage.getItem('jdk_lang') || 'ms'] || i18n['ms']).btn_submit;
  showErrorPopup(v().photo_upload_fail_title, v().photo_upload_fail_msg);
  return;
}

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
      submitBtn.textContent = (i18n[localStorage.getItem('jdk_lang') || 'ms'] || i18n['ms']).btn_submit;                 // ✅ CHANGED
      const isDuplicate = error.message.includes('unique') || error.code === '23505';
      showErrorPopup(
        isDuplicate ? v().duplicate_title : v().error_title,   // ✅ CHANGED
        isDuplicate ? v().duplicate_msg   : v().error_msg      // ✅ CHANGED
      );
      return;
    }

    document.getElementById('formView').style.display = 'none';
    document.getElementById('successView').style.display = 'block';
    document.getElementById('generatedId').textContent = jdk_id;

  } catch (err) {
    console.error('Unexpected error:', err);
    submitBtn.disabled = false;
   submitBtn.textContent = (i18n[localStorage.getItem('jdk_lang') || 'ms'] || i18n['ms']).btn_submit;                    // ✅ CHANGED
    showErrorPopup(v().unexpected_title, err.message || v().error_msg); // ✅ CHANGED
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
      <h2 class="modal-title">Dasar Privasi &amp; Notis Perlindungan Data Peribadi</h2>
      <button class="modal-close" onclick="closeModal('privacyModal')">✕</button>
    </div>
    <div class="modal-body">
      <div class="modal-meta">Berkuat kuasa: 01/05/2026 &nbsp;|&nbsp; Mematuhi: PDPA 2010 (Malaysia) &nbsp;|&nbsp; Versi: 3.0</div>
 
      <div class="modal-section"><h3>1. Pengenalan</h3><p>Polisi Privasi &amp; Notis Perlindungan Data Peribadi ini menerangkan bagaimana Jodohku.my ("Jodohku", "kami", "kita" atau "platform ini") mengumpul, menggunakan, menyimpan, melindungi dan mendedahkan data peribadi pengguna selaras dengan Akta Perlindungan Data Peribadi 2010 (PDPA/APDP) dan undang-undang berkaitan di Malaysia. Dengan menggunakan laman web, aplikasi, borang pendaftaran atau perkhidmatan Jodohku.my, anda bersetuju dengan pemprosesan data peribadi anda seperti yang dinyatakan dalam polisi ini.</p></div>
 
      <div class="modal-section"><h3>2. Data Peribadi Yang Kami Kumpul</h3><p>Kami mungkin mengumpul data peribadi berikut daripada anda:</p><ul><li><strong>Maklumat identiti:</strong> nama penuh, nombor kad pengenalan/MyKad, tarikh lahir, umur, jantina, status perkahwinan.</li><li><strong>Maklumat hubungan:</strong> nombor telefon, alamat e-mel, negeri/daerah tempat tinggal.</li><li><strong>Maklumat profil:</strong> gambar profil, biodata ringkas, maklumat latar belakang, minat, kriteria pasangan dan maklumat lain yang anda pilih untuk isi dalam profil.</li><li><strong>Maklumat akaun:</strong> username, kata laluan yang disulitkan, rekod log masuk, status verifikasi akaun.</li><li><strong>Maklumat teknikal:</strong> alamat IP, jenis peranti, pelayar internet, cookies, rekod penggunaan website.</li><li><strong>Maklumat komunikasi:</strong> mesej atau pertanyaan yang dihantar kepada pihak Jodohku, laporan aduan, rekod sokongan pelanggan.</li></ul></div>
 
      <div class="modal-section"><h3>3. Kenapa Kami Memerlukan Nama Penuh dan Nombor IC</h3><p>Jodohku.my ialah platform perkenalan dan pencarian jodoh yang melibatkan kepercayaan, keselamatan dan identiti pengguna. Kami memerlukan nama penuh dan nombor kad pengenalan untuk tujuan berikut:</p><ul><li><strong>Pengesahan identiti:</strong> untuk memastikan pengguna yang mendaftar ialah individu sebenar dan bukan akaun palsu.</li><li><strong>Pengesahan umur:</strong> untuk memastikan pengguna memenuhi syarat umur minimum yang ditetapkan.</li><li><strong>Pencegahan penipuan dan scam:</strong> untuk mengurangkan risiko penyamaran identiti, akaun berganda, scam percintaan dan penyalahgunaan platform.</li><li><strong>Keselamatan komuniti:</strong> untuk melindungi pengguna lain dan membantu pihak Jodohku mengambil tindakan sekiranya berlaku laporan salah laku.</li><li><strong>Pengurusan aduan dalaman:</strong> jika terdapat aduan berkaitan penipuan, gangguan atau penyamaran, maklumat identiti boleh digunakan untuk semakan dalaman.</li><li><strong>Pematuhan undang-undang:</strong> sekiranya diperlukan oleh undang-undang, perintah mahkamah, pihak berkuasa atau proses undang-undang yang sah.</li></ul><p style="margin-top:10px;"><em>Nombor IC anda tidak akan dipaparkan secara awam kepada pengguna lain.</em></p></div>
 
      <div class="modal-section"><h3>4. Tujuan Pemprosesan Data Peribadi</h3><p>Kami memproses data peribadi anda untuk tujuan berikut:</p><ol><li>Membuka dan mengurus akaun pengguna.</li><li>Mengesahkan identiti dan umur pengguna.</li><li>Menyediakan fungsi padanan atau pencarian jodoh.</li><li>Memaparkan maklumat profil yang anda pilih untuk dikongsi.</li><li>Menghubungi anda berkaitan akaun, keselamatan, transaksi atau kemas kini perkhidmatan.</li><li>Memproses pembayaran, langganan atau promosi jika berkaitan.</li><li>Mengurus aduan, pertanyaan dan sokongan pelanggan.</li><li>Mengesan, mencegah dan menangani penipuan, akaun palsu, gangguan atau penyalahgunaan platform.</li><li>Menambah baik website, aplikasi, keselamatan dan pengalaman pengguna.</li><li>Mematuhi kehendak undang-undang, peraturan, pihak berkuasa atau proses undang-undang.</li></ol></div>
 
      <div class="modal-section"><h3>5. Asas Persetujuan</h3><p>Dengan menghantar data peribadi anda kepada Jodohku.my, anda memberi persetujuan kepada kami untuk mengumpul, menyimpan, menggunakan dan memproses data tersebut bagi tujuan yang dinyatakan dalam polisi ini. Sekiranya anda tidak bersetuju untuk memberikan maklumat tertentu yang diperlukan, kami mungkin tidak dapat menyediakan akses penuh kepada perkhidmatan Jodohku.my, termasuk fungsi pendaftaran, verifikasi atau padanan pengguna.</p></div>
 
      <div class="modal-section"><h3>6. Pendedahan Data Peribadi Kepada Pihak Ketiga</h3><p>Kami tidak menjual data peribadi anda kepada pihak ketiga. Walau bagaimanapun, data peribadi anda mungkin didedahkan kepada pihak berikut jika perlu:</p><ul><li>Penyedia hosting, cloud, pangkalan data dan keselamatan sistem.</li><li>Penyedia pembayaran jika anda membuat transaksi.</li><li>Penyedia perkhidmatan e-mel, SMS atau notifikasi.</li><li>Pasukan sokongan, pentadbir atau moderator Jodohku.</li><li>Penasihat undang-undang, auditor atau perunding profesional.</li><li>Pihak berkuasa, mahkamah atau agensi penguatkuasaan jika diwajibkan oleh undang-undang.</li><li>Pihak lain yang anda sendiri benarkan.</li></ul><p style="margin-top:10px;">Semua pendedahan dibuat berdasarkan keperluan yang munasabah dan berkaitan dengan tujuan perkhidmatan Jodohku.my.</p></div>
 
      <div class="modal-section"><h3>7. Keselamatan Data Peribadi</h3><p>Kami akan mengambil langkah keselamatan yang munasabah untuk melindungi data peribadi anda daripada kehilangan, penyalahgunaan, akses tanpa kebenaran, pendedahan, perubahan atau pemusnahan. Langkah keselamatan termasuk:</p><ul><li>Akses terhad kepada pentadbir yang diberi kuasa sahaja.</li><li>Penggunaan kata laluan dan kawalan akses.</li><li>Penyimpanan data dalam sistem yang dilindungi.</li><li>Enkripsi atau perlindungan teknikal yang sesuai.</li><li>Pemantauan aktiviti mencurigakan.</li><li>Semakan keselamatan dari semasa ke semasa.</li></ul><p style="margin-top:10px;"><em>Walaupun kami berusaha melindungi data anda, tiada sistem atas talian yang boleh dijamin 100% selamat.</em></p></div>
 
      <div class="modal-section"><h3>8. Tempoh Penyimpanan Data</h3><p>Kami hanya akan menyimpan data peribadi anda selama mana ia diperlukan untuk tujuan yang dinyatakan dalam polisi ini, termasuk untuk tujuan akaun pengguna, keselamatan, pencegahan penipuan, rekod transaksi, penyelesaian pertikaian dan pematuhan undang-undang. Jika akaun anda dipadamkan atau tidak aktif, kami boleh memadam, menyahaktifkan atau menyimpan data tertentu untuk tempoh yang munasabah jika diperlukan bagi tujuan keselamatan, audit, rekod undang-undang atau pencegahan penyalahgunaan.</p></div>
 
      <div class="modal-section"><h3>9. Hak Anda Sebagai Pengguna</h3><p>Anda boleh menghubungi kami untuk:</p><ol><li>Meminta akses kepada data peribadi anda.</li><li>Membetulkan data yang tidak tepat atau tidak lengkap.</li><li>Menarik balik persetujuan tertakluk kepada had undang-undang dan operasi perkhidmatan.</li><li>Meminta pemadaman akaun atau data tertentu.</li><li>Bertanya bagaimana data anda digunakan.</li><li>Membuat aduan berkaitan pemprosesan data peribadi.</li></ol><p style="margin-top:10px;">Permintaan boleh dibuat melalui maklumat hubungan di bahagian akhir polisi ini.</p></div>
 
      <div class="modal-section"><h3>10. Ketepatan Maklumat</h3><p>Anda bertanggungjawab memastikan maklumat yang diberikan kepada Jodohku.my adalah benar, tepat, lengkap dan terkini. Kami berhak menggantung atau menamatkan akaun jika maklumat yang diberikan didapati palsu, mengelirukan, tidak lengkap atau digunakan untuk tujuan penipuan.</p></div>
 
      <div class="modal-section"><h3>11. Data Yang Dipaparkan Kepada Pengguna Lain</h3><p>Maklumat tertentu dalam profil anda mungkin dipaparkan kepada pengguna lain, contohnya nama paparan, umur atau lingkungan umur, negeri/daerah, gambar profil, biodata ringkas dan kriteria pasangan. Maklumat sensitif seperti nombor IC, nombor telefon, e-mel, alamat penuh dan maklumat dalaman verifikasi <strong>tidak akan dipaparkan secara awam</strong> kecuali anda sendiri memilih untuk mendedahkannya atau jika diwajibkan oleh undang-undang.</p></div>
 
      <div class="modal-section"><h3>12. Cookies dan Teknologi Penjejakan</h3><p>Jodohku.my mungkin menggunakan cookies atau teknologi serupa untuk membolehkan fungsi log masuk, menyimpan tetapan pengguna, menganalisis penggunaan website, meningkatkan prestasi dan keselamatan, serta menyediakan pengalaman pengguna yang lebih baik. Anda boleh mengubah tetapan cookies melalui pelayar internet anda, tetapi sesetengah fungsi website mungkin tidak berfungsi dengan sempurna.</p></div>
 
      <div class="modal-section"><h3>13. Pautan ke Laman Pihak Ketiga</h3><p>Website Jodohku.my mungkin mengandungi pautan ke laman pihak ketiga. Kami tidak bertanggungjawab terhadap kandungan, polisi privasi atau amalan keselamatan laman pihak ketiga tersebut. Anda digalakkan membaca polisi privasi mereka sebelum memberikan sebarang data peribadi.</p></div>
 
      <div class="modal-section"><h3>14. Pindaan Polisi</h3><p>Kami boleh mengemas kini polisi ini dari semasa ke semasa. Sebarang perubahan akan dipaparkan di website Jodohku.my dengan tarikh kuat kuasa terkini. Penggunaan berterusan terhadap perkhidmatan kami selepas perubahan dibuat dianggap sebagai persetujuan kepada polisi yang dikemas kini.</p></div>
 
      <div class="modal-section"><h3>15. Hubungi Kami</h3><p>Jika anda mempunyai pertanyaan, permintaan akses, pembetulan data, pemadaman akaun atau aduan berkaitan data peribadi, sila hubungi:<br><br><strong>Jodohku.my</strong><br>E-mel: <strong>inquiry@jodohku.my</strong><br>Website: <a href="https://www.jodohku.my" style="color:var(--gold, #FFD700);">https://www.jodohku.my</a><br><br><em>Tajuk e-mel cadangan: "Permintaan Data Peribadi / PDPA"</em></p></div>
    </div>
  </div>
</div>

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
    
</script>

<?php include 'footer.php'; ?>

</body>
</html>
