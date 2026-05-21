<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
?>

<html lang="ms">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
  <meta name="theme-color" content="#071017">
  <title>Jodohku.my | Platform Taaruf Premium Muslim Malaysia</title>
  <meta name="description" content="Platform taaruf premium Muslim Malaysia berasaskan AI, syariah, wali digital dan sistem taaruf serta keserasian mendalam.">
  <!--<link rel="stylesheet" href="styles.css">-->
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

  <style>
       :root {
      --ink: #050605;
      --ink-2: #0b0a08;
      --panel: #14110d;
      --panel-2: #1d1811;
      --cream: #f5ead8;
      --cream-2: #e8dac2;
      --text: #f7f0e6;
      --text-dark: #17202a;
      --muted: #b9ad98;
      --muted-dark: #615544;
      --champagne: #d8c08a;
      --gold: #b48a49;
      --gold-2: #83602d;
      --bronze: #68471f;
      --emerald: #14382f;
      --line: rgba(180, 138, 73, .24);
      --line-soft: rgba(255, 255, 255, .10);
      --shadow: 0 28px 90px rgba(0, 0, 0, .44);
      --radius-xl: 34px;
      --radius-lg: 26px;
      --radius-md: 18px;
      --max: 1180px;
    }

    * { box-sizing: border-box; }
    html { scroll-behavior: smooth; }
    body {
      margin: 0;
      color: var(--text-dark);
      background: #070706;
      font-family: Inter, ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
      line-height: 1.6;
      overflow-x: hidden;
    }
    img { display: block; max-width: 100%; }
    a { color: inherit; text-decoration: none; }
    button, input, select { font: inherit; }
    ::selection { background: rgba(199, 161, 94, .32); }

    .container { width: min(var(--max), calc(100% - 44px)); margin-inline: auto; }
    .section { padding: 96px 0; position: relative; }
    .section.compact { padding: 70px 0; }
    .dark {
      color: var(--text);
      background:
        radial-gradient(circle at 18% 0%, rgba(199, 161, 94, .18), transparent 34%),
        radial-gradient(circle at 90% 18%, rgba(20, 56, 47, .46), transparent 36%),
        linear-gradient(180deg, #08111a 0%, #0d1721 56%, #08111a 100%);
    }
    .cream {
      background:
        radial-gradient(circle at 6% 0%, rgba(199, 161, 94, .18), transparent 26%),
        linear-gradient(180deg, #f8f2e9 0%, #efe4d3 100%);
    }
    .section-head { max-width: 760px; margin: 0 auto 42px; text-align: center; }
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
    .dark .eyebrow { color: var(--champagne); background: rgba(255,255,255,.055); }
    h1, h2, h3 { margin: 0; line-height: 1.05; letter-spacing: -.03em; }
    h1, h2 { font-family: Georgia, "Times New Roman", ui-serif, serif; font-weight: 650; }
    h1 { font-size: clamp(42px, 7vw, 82px); margin-top: 22px; max-width: 830px; }
    h2 { font-size: clamp(34px, 5vw, 58px); margin-top: 18px; }
    h3 { font-size: 22px; }
    p { margin: 0; }
    .lead { font-size: clamp(16px, 2.2vw, 20px); color: rgba(255,255,255,.76); max-width: 720px; margin-top: 22px; }
    .cream .lead, .section-head .lead { color: var(--muted-dark); }
    .gold-text {
      background: linear-gradient(100deg, #f6e6bd 0%, #c69c55 42%, #866132 80%, #efd9a5 100%);
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
      text-shadow: none;
    }

    /* Header */
    .site-header {
      position: sticky;
      top: 0;
      z-index: 50;
      background: rgba(8, 7, 6, .88);
      backdrop-filter: blur(18px);
      border-bottom: 1px solid rgba(216, 192, 138, .16);
    }
    .nav { display: flex; align-items: center; justify-content: space-between; min-height: 76px; gap: 18px; }
    .brand { display: flex; align-items: center; gap: 12px; color: var(--text); font-weight: 900; letter-spacing: -.02em; }
    .brand-mark {
      width: 42px;
      height: 42px;
      border-radius: 15px;
      border: 1px solid rgba(229, 207, 151, .48);
      background: linear-gradient(135deg, rgba(216, 192, 138, .18), rgba(85, 56, 21, .32));
      display: grid;
      place-items: center;
      color: var(--champagne);
      position: relative;
      overflow: hidden;
    }
    .brand-mark:before, .brand-mark:after {
      content: "";
      position: absolute;
      border: 2px solid currentColor;
      border-radius: 999px 999px 999px 0;
      width: 16px;
      height: 22px;
      transform: rotate(-45deg);
      opacity: .95;
    }
    .brand-mark:after { transform: rotate(45deg); }
    .brand span { color: var(--champagne); font-size: 21px; }
    .nav-links { display: flex; gap: 28px; align-items: center; color: rgba(255,255,255,.72); font-size: 13px; font-weight: 800; }
    .nav-links a { transition: color .2s ease; }
    .nav-links a:hover { color: var(--champagne); }

    .btn {
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
    }
    .btn:hover { transform: translateY(-2px); }
    .btn.primary {
      color: #1f170d;
      background:
        linear-gradient(135deg, #e9d6a4 0%, #c4a064 24%, #8a622d 55%, #5f411c 78%, #d1b06f 100%);
      border-color: rgba(238, 215, 161, .38);
      box-shadow: 0 18px 44px rgba(67, 43, 17, .30), inset 0 1px 0 rgba(255,255,255,.28);
    }
    .btn.secondary { color: var(--text); border-color: rgba(229,207,151,.34); background: rgba(255,255,255,.05); }

    /* Hero */
    .hero {
      position: relative;
      color: var(--text);
      overflow: hidden;
      background:
        linear-gradient(90deg, rgba(5,6,5,.98) 0%, rgba(7,8,7,.91) 48%, rgba(8,9,8,.46) 100%),
        radial-gradient(circle at 82% 8%, rgba(180,138,73,.20), transparent 26%),
        linear-gradient(180deg, #050605 0%, #0a0e0d 100%);
    }
    .hero:before {
      content: "";
      position: absolute;
      inset: 0;
      background:
        linear-gradient(rgba(216,192,138,.024) 1px, transparent 1px),
        linear-gradient(90deg, rgba(216,192,138,.024) 1px, transparent 1px);
      background-size: 74px 74px;
      mask-image: linear-gradient(180deg, black, transparent 80%);
      pointer-events: none;
    }
    .hero-wrap {
      min-height: 790px;
      display: grid;
      grid-template-columns: minmax(0, 1.05fr) minmax(340px, .78fr);
      gap: 44px;
      align-items: center;
      padding: 72px 0 88px;
      position: relative;
      z-index: 1;
    }
    .hero-copy { max-width: 760px; }
    .hero-actions { display: flex; flex-wrap: wrap; gap: 14px; margin-top: 34px; }
    .trust-row { display: grid; grid-template-columns: repeat(3, 1fr); gap: 12px; margin-top: 38px; max-width: 700px; }
    .trust-item {
      border: 1px solid rgba(229,207,151,.20);
      background: rgba(255,255,255,.035);
      border-radius: 18px;
      padding: 16px;
      color: rgba(255,255,255,.84);
      font-weight: 800;
      font-size: 13px;
    }
    .trust-item strong { display: block; color: var(--champagne); font-size: 18px; margin-bottom: 3px; }
    .hero-side { display: grid; gap: 18px; }
    .hero-photo {
      position: relative;
      border-radius: 36px;
      overflow: hidden;
      aspect-ratio: 4 / 5;
      border: 1px solid rgba(229,207,151,.22);
      box-shadow: var(--shadow);
      background: #111;
    }
    .hero-photo img { width: 100%; height: 100%; object-fit: cover; }
    .hero-photo:after, .photo-card:after, .image-panel:after, .step-img:after {
      content: "";
      position: absolute;
      inset: 0;
      background:
        linear-gradient(180deg, rgba(0,0,0,.03), rgba(0,0,0,.55)),
        radial-gradient(circle at 18% 12%, rgba(245,222,174,.25), transparent 36%);
      pointer-events: none;
    }
    .form-card {
      border-radius: 28px;
      padding: 26px;
      background: linear-gradient(180deg, rgba(255,255,255,.09), rgba(255,255,255,.045));
      border: 1px solid rgba(229,207,151,.22);
      box-shadow: 0 22px 60px rgba(0,0,0,.24);
    }
    .form-card h3 { color: var(--champagne); margin-bottom: 8px; }
    .form-card p { color: rgba(255,255,255,.70); font-size: 14px; margin-bottom: 18px; }
    .form-grid { display: grid; gap: 12px; }
    .field { width: 100%; min-height: 48px; border: 1px solid rgba(255,255,255,.12); border-radius: 14px; background: rgba(255,255,255,.08); color: var(--text); padding: 0 15px; outline: none; }
    .field::placeholder { color: rgba(255,255,255,.45); }
    .upload {
      display: grid;
      gap: 4px;
      padding: 14px;
      border: 1px dashed rgba(229,207,151,.36);
      border-radius: 15px;
      color: rgba(255,255,255,.72);
      cursor: pointer;
      background: rgba(255,255,255,.035);
    }
    .upload strong { color: var(--champagne); font-size: 14px; }
    .mini-note { color: rgba(255,255,255,.55); font-size: 12px; margin-top: 12px; }

    /* Photo cards */
    .gallery-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 18px; }
    .photo-card {
      position: relative;
      min-height: 276px;
      border-radius: 24px;
      overflow: hidden;
      background: #111;
      border: 1px solid rgba(255,255,255,.12);
      box-shadow: 0 18px 46px rgba(46, 35, 20, .16);
      isolation: isolate;
    }
    .photo-card img { width: 100%; height: 100%; object-fit: cover; position: absolute; inset: 0; transition: transform .5s ease; }
    .photo-card:hover img { transform: scale(1.055); }
    .photo-card .card-copy { position: absolute; z-index: 2; left: 18px; right: 18px; bottom: 18px; color: white; }
    .photo-card h3 { font-size: 18px; margin-bottom: 8px; text-shadow: 0 8px 24px rgba(0,0,0,.6); }
    .photo-card p { font-size: 13px; color: rgba(255,255,255,.80); }
    .photo-label {
      position: absolute;
      top: 14px;
      left: 14px;
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

    .core-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; }
    .image-panel {
      min-height: 320px;
      position: relative;
      overflow: hidden;
      border-radius: 30px;
      border: 1px solid rgba(199, 161, 94, .20);
      box-shadow: 0 20px 60px rgba(68, 45, 21, .18);
    }
    .image-panel img { position: absolute; inset: 0; width: 100%; height: 100%; object-fit: cover; }
    .image-panel .panel-copy { position: absolute; z-index: 2; inset: auto 22px 22px 22px; color: white; }
    .image-panel h3 { font-family: Georgia, "Times New Roman", serif; font-size: 27px; margin-bottom: 10px; }
    .image-panel p { color: rgba(255,255,255,.78); font-size: 14px; }

    /* Comparison */
    .table-shell {
      overflow-x: auto;
      -webkit-overflow-scrolling: touch;
      border-radius: 26px;
      border: 1px solid rgba(229,207,151,.22);
      background: rgba(255,255,255,.04);
      box-shadow: 0 22px 60px rgba(0,0,0,.20);
    }
    table { width: 100%; border-collapse: collapse; min-width: 720px; }
    th, td { padding: 18px 22px; border-bottom: 1px solid rgba(255,255,255,.10); text-align: left; font-size: 14px; }
    th { color: var(--champagne); background: rgba(255,255,255,.05); font-weight: 900; }
    td { color: rgba(255,255,255,.78); }
    td:nth-child(2), th:nth-child(2) { background: rgba(199, 161, 94, .11); color: #fff4d8; }
    .tick { color: var(--champagne); font-weight: 900; }

    /* Science */
    .science-wrap { display: grid; gap: 24px; }
    .science-card {
      display: grid;
      grid-template-columns: .84fr 1.16fr;
      gap: 0;
      overflow: hidden;
      border-radius: 34px;
      border: 1px solid rgba(229,207,151,.23);
      background: rgba(255,255,255,.055);
      box-shadow: 0 26px 90px rgba(0,0,0,.25);
    }
    .science-card.reverse { grid-template-columns: 1.16fr .84fr; }
    .science-photo { min-height: 530px; position: relative; overflow: hidden; background: #111; }
    .science-photo img { width: 100%; height: 100%; object-fit: cover; position: absolute; inset: 0; }
    .science-photo:after {
      content: "";
      position: absolute;
      inset: 0;
      background: linear-gradient(180deg, rgba(0,0,0,.08), rgba(0,0,0,.42));
    }
    .section-badge {
      position: absolute;
      z-index: 2;
      top: 20px;
      left: 20px;
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
    .science-copy h3 { font-family: Georgia, "Times New Roman", serif; font-size: clamp(34px, 4vw, 48px); margin: 10px 0 16px; }
    .science-copy p { color: rgba(255,255,255,.72); max-width: 640px; }
    .title-list {
      list-style: none;
      padding: 0;
      margin: 26px 0 0;
      display: grid;
      grid-template-columns: repeat(2, minmax(0, 1fr));
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
    .title-list li:before {
      content: "";
      position: absolute;
      left: 12px;
      width: 10px;
      height: 10px;
      border-radius: 50%;
      background: linear-gradient(135deg, #e6d0a0, #a87836);
      box-shadow: 0 0 0 3px rgba(199,161,94,.16);
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
    .science-end {
      text-align: center;
      color: #f3dca5;
      font-weight: 800;
      max-width: 920px;
      margin: 28px auto 0;
    }

    /* Steps */
    .steps { display: grid; grid-template-columns: repeat(5, 1fr); gap: 16px; }
    .step-card {
      border-radius: 24px;
      background: rgba(255,255,255,.72);
      border: 1px solid rgba(199, 161, 94, .22);
      overflow: hidden;
      box-shadow: 0 18px 48px rgba(68, 45, 21, .12);
    }
    .step-img { position: relative; min-height: 150px; overflow: hidden; background: #111; }
    .step-img img { width: 100%; height: 100%; object-fit: cover; position: absolute; inset: 0; }
    .step-number {
      position: absolute;
      z-index: 3;
      left: 16px;
      bottom: 14px;
      width: 38px;
      height: 38px;
      border-radius: 50%;
      display: grid;
      place-items: center;
      background: linear-gradient(135deg, #e5cf9a, #94682f 58%, #62421b);
      color: #211508;
      font-weight: 1000;
      box-shadow: 0 12px 28px rgba(0,0,0,.26);
    }
    .step-body { padding: 18px; }
    .step-body h3 { font-size: 17px; margin-bottom: 8px; }
    .step-body p { color: var(--muted-dark); font-size: 13px; }

    /* Ecosystem */
    .ecosystem {
      display: grid;
      grid-template-columns: .9fr 1.1fr;
      align-items: stretch;
      min-height: 430px;
      overflow: hidden;
      border-radius: 36px;
      border: 1px solid rgba(199,161,94,.24);
      background: #f4eadc;
      box-shadow: 0 25px 70px rgba(68, 45, 21, .18);
    }
    .ecosystem-copy { padding: clamp(30px, 5vw, 58px); }
    .ecosystem-copy h2 { color: #191914; }
    .ecosystem-copy p { color: var(--muted-dark); margin-top: 18px; max-width: 540px; }
    .ecosystem-list { display: grid; grid-template-columns: repeat(2, minmax(0,1fr)); gap: 12px; margin-top: 26px; }
    .ecosystem-list span {
      border: 1px solid rgba(111,79,38,.15);
      background: rgba(255,255,255,.58);
      border-radius: 14px;
      padding: 12px 14px;
      font-weight: 800;
      color: #332613;
    }
    .ecosystem-photo { position: relative; min-height: 430px; }
    .ecosystem-photo img { width: 100%; height: 100%; object-fit: cover; position: absolute; inset: 0; }
    .ecosystem-photo:before {
      content: "";
      position: absolute;
      inset: 0;
      z-index: 1;
      background: linear-gradient(90deg, #f4eadc 0%, rgba(244,234,220,.12) 42%, transparent 100%);
    }

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
    .final-cta h2 { margin: 0; font-size: clamp(30px, 4vw, 46px); }
    .final-cta p { color: rgba(255,255,255,.68); margin-top: 8px; }

    .reveal { opacity: 0; transform: translateY(18px); transition: opacity .7s ease, transform .7s ease; }
    .reveal.show { opacity: 1; transform: none; }


    .brand-mark {
      font-family: Georgia, "Times New Roman", serif;
      font-size: 21px;
      font-weight: 700;
      text-shadow: 0 1px 0 rgba(255,255,255,.18);
    }
    .brand-mark:before, .brand-mark:after { display: none !important; }
    .dark {
      background:
        radial-gradient(circle at 18% 0%, rgba(180, 138, 73, .12), transparent 34%),
        radial-gradient(circle at 92% 18%, rgba(18, 54, 46, .34), transparent 34%),
        linear-gradient(180deg, #060706 0%, #0d0c09 56%, #060706 100%);
    }
    .cream {
      background:
        radial-gradient(circle at 6% 0%, rgba(180, 138, 73, .13), transparent 26%),
        linear-gradient(180deg, #f5ead8 0%, #eadcc5 100%);
    }
    .btn.primary:hover { box-shadow: 0 22px 54px rgba(69, 45, 18, .36), inset 0 1px 0 rgba(255,255,255,.30); }
    .photo-card, .image-panel, .science-card, .step-card, .ecosystem, .form-card, .trust-item {
      border-color: rgba(216, 192, 138, .22);
    }
    .site-footer {
      color: rgba(255,255,255,.62);
      background: #060706;
      border-top: 1px solid rgba(216,192,138,.16);
      padding: 26px 0;
      font-size: 13px;
    }
    .footer-wrap { display:flex; justify-content:space-between; align-items:center; gap:18px; flex-wrap:wrap; }
    .footer-wrap strong { color: var(--champagne); }
    .footer-wrap a { color: rgba(216,192,138,.86); text-decoration: underline; text-decoration-thickness: 1px; text-underline-offset: 3px; }

    /* Responsive */
    @media (max-width: 1100px) {
      .nav-links { gap: 16px; }
      .gallery-grid { grid-template-columns: repeat(2, 1fr); }
      .steps { grid-template-columns: repeat(3, 1fr); }
    }
    @media (max-width: 920px) {
      .container { width: min(100% - 32px, var(--max)); }
      .nav-links { display: none; }
      .nav { min-height: 68px; }
      .hero-wrap { grid-template-columns: 1fr; min-height: auto; padding: 48px 0 70px; gap: 30px; }
      .hero-photo { aspect-ratio: 16 / 10; max-height: 520px; }
      .hero-side { order: 2; }
      .trust-row { grid-template-columns: 1fr; }
      .core-grid { grid-template-columns: 1fr; }
      .science-card, .science-card.reverse { grid-template-columns: 1fr; }
      .science-card.reverse .science-photo { order: -1; }
      .science-photo { min-height: 390px; }
      .title-list { grid-template-columns: 1fr; }
      .ecosystem { grid-template-columns: 1fr; }
      .ecosystem-photo { min-height: 320px; order: -1; }
      .ecosystem-photo:before { background: linear-gradient(180deg, transparent 35%, #f4eadc 100%); }
      .final-cta { align-items: stretch; flex-direction: column; }
    }
    @media (max-width: 640px) {
      .section { padding: 70px 0; }
      .section.compact { padding: 56px 0; }
      .container { width: min(100% - 26px, var(--max)); }
      .brand span { font-size: 18px; }
      .brand-mark { width: 38px; height: 38px; border-radius: 14px; }
      .nav .btn { min-height: 42px; padding: 0 14px; font-size: 12px; }
      h1 { font-size: clamp(38px, 12vw, 58px); }
      h2 { font-size: clamp(31px, 9vw, 44px); }
      .hero-wrap { padding-top: 34px; }
      .hero-actions .btn { width: 100%; }
      .hero-photo { aspect-ratio: 4 / 5; border-radius: 26px; }
      .form-card { border-radius: 24px; padding: 20px; }
      .gallery-grid { grid-template-columns: 1fr; gap: 14px; }
      .photo-card { min-height: 260px; border-radius: 22px; }
      .image-panel { min-height: 280px; border-radius: 24px; }
      .science-card { border-radius: 24px; }
      .science-photo { min-height: 300px; }
      .science-copy { padding: 24px; }
      .title-list li { font-size: 13px; padding-top: 9px; padding-bottom: 9px; }
      .steps { grid-template-columns: 1fr; }
      .step-img { min-height: 210px; }
      .ecosystem-list { grid-template-columns: 1fr; }
      .final-cta { padding: 24px; border-radius: 24px; }
    }
    @media (max-width: 420px) {
      .container { width: min(100% - 22px, var(--max)); }
      .eyebrow { font-size: 10px; letter-spacing: .09em; }
      .lead { font-size: 15px; }
      .photo-card { min-height: 238px; }
      .science-photo { min-height: 265px; }
      .ecosystem-photo { min-height: 260px; }
      th, td { padding: 14px 16px; }
    }
.modal {
  display: none;
  position: fixed;
  inset: 0;
  z-index: 9999;
  background: rgba(0,0,0,0.85);
  backdrop-filter: blur(6px);
  align-items: center;
  justify-content: center;
  padding: 24px;
  overflow-y: auto;
}
.modal-overlay.active { display: flex; }
.modal-content {
  background: #0d1a14;
  border: 1px solid rgba(229,207,151,0.2);
  border-radius: 18px;
  max-width: 640px;
  width: 100%;
  max-height: 85vh;
  overflow-y: auto;
}
.modal-header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 24px 28px 16px;
  border-bottom: 1px solid rgba(229,207,151,0.15);
  position: sticky;
  top: 0;
  background: #0d1a14;
}
.modal-title { 
  font-family: Georgia, serif; 
  color: #E5CF97; 
  font-size: 20px; 
  margin: 0; 
}
.modal-close {
  background: none;
  border: none;
  color: #888;
  font-size: 20px;
  cursor: pointer;
  padding: 4px 8px;
}
.modal-close:hover { color: #fff; }
.modal-body { padding: 24px 28px; }
.modal-meta { 
  font-size: 11px; 
  color: #666; 
  margin-bottom: 20px; 
  padding-bottom: 12px;
  border-bottom: 1px solid rgba(255,255,255,0.06);
}
.modal-section { margin-bottom: 20px; }
.modal-section h3 { 
  color: #E5CF97; 
  font-size: 14px; 
  margin-bottom: 8px; 
}
.modal-section p, 
.modal-section ol, 
.modal-section ul { 
  color: #aaa; 
  font-size: 13px; 
  line-height: 1.7; 
  margin: 0;
}
.modal-section ol, 
.modal-section ul { 
  padding-left: 18px; 
}
  </style>
  
</head>
<body>
  <header class="site-header">
    <div class="container nav">
      <a class="brand" href="#top" aria-label="Jodohku.my"><span class="brand-mark" aria-hidden="true">J</span><span>jodohku.my</span></a>
      <nav class="nav-links" aria-label="Navigasi utama">
        <a href="#teras">Teras Kami</a>
        <a href="#cara">Bagaimana Ia Berfungsi</a>
        <a href="#kelebihan">Kelebihan</a>
        <a href="#padanan">Sistem Padanan</a>
        <a href="#ekosistem">Ekosistem</a>
      </nav>
      <a class="btn primary" href="#daftar">Daftar Sekarang</a>
    </div>
  </header>

  <main id="top">
    <section class="hero">
      <div class="container hero-wrap">
        <div class="hero-copy reveal">
          <span class="eyebrow">Platform Taaruf Premium Muslim Malaysia</span>
          <h1>AI Terdepan + Sistem Taaruf & Keserasian = <span class="gold-text">Padanan Jodoh Lebih Bermakna</span></h1>
          <p class="lead">Platform taaruf berasaskan nilai Islam, keselamatan berlapis dan analisis keserasian yang membantu anda mencari calon pasangan dengan lebih serius, sopan dan terarah.</p>
          <div class="hero-actions">
            <a class="btn primary" href="#daftar">Mohon Akses Awal</a>
            <a class="btn secondary" href="#padanan">Lihat Sistem Padanan</a>
          </div>
          <div class="trust-row" aria-label="Kepercayaan platform">
            <div class="trust-item"><strong>Syariah</strong>Beradab, sopan dan terpelihara</div>
            <div class="trust-item"><strong>AI</strong>Analisis nilai & keserasian</div>
            <div class="trust-item"><strong>Wali</strong>Proses lebih yakin dan tersusun</div>
          </div>
        </div>
       <aside class="hero-side reveal" id="daftar">
<div class="form-card">
  <h3>Mohon Akses Awal</h3>
  <p>Daftar sekarang dan jadilah antara yang pertama merasai pengalaman taaruf premium.</p>
<form class="form-grid" id="regForm">
  <input class="field" type="text" id="fullName" placeholder="Nama penuh" autocomplete="name" required>
  <input class="field" type="text" id="icNo" placeholder="XXXXXX-XX-XXXX" maxlength="14" required>
  <input class="field" type="email" id="emailAddr" placeholder="Emel" autocomplete="email" required>
  <input class="field" type="tel" id="phoneNo" placeholder="Nombor telefon" autocomplete="tel" required>
  <label class="upload" for="profilePhoto" id="uploadLabel">
    <strong id="uploadTitle">Pilih gambar profil</strong>
    <span>JPG, PNG atau WEBP — maksimum 5MB</span>
  </label>
  <input id="profilePhoto" name="profilePhoto" type="file" accept="image/jpeg,image/png,image/webp" hidden>
          <div class="checkbox-terms" style="display:flex;align-items:flex-start;gap:10px;margin-bottom:12px;">
  <input type="checkbox" id="agreeTerms" required 
         style="margin-top:3px;accent-color:#E5CF97;width:16px;height:16px;flex-shrink:0;">
  <label for="agreeTerms" style="font-size:12px;color:rgba(255,255,255,0.7);line-height:1.6;cursor:pointer;">
    Saya bersetuju dengan 
    <a href="#" onclick="openModal('termsModal');return false;" 
       style="color:#E5CF97;text-decoration:underline;">Terma &amp; Syarat</a> 
    dan 
    <a href="#" onclick="openModal('privacyModal');return false;" 
       style="color:#E5CF97;text-decoration:underline;">Dasar Privasi</a> 
    Jodohku.my yang mematuhi PDPA 2010
  </label>
</div>
  <button class="btn primary" type="submit" id="submitBtn">Mohon Akses Awal</button>
  <div id="successMsg" style="display:none; padding:12px; border-radius:14px; background:rgba(20,56,47,.18); border:1px solid rgba(20,200,120,.25); color:#8ff7c8; font-size:13px; line-height:1.6;"></div>
</form>
</div>
</aside>
      </div>
    </section>

    <section class="section cream" id="kelebihan">
      <div class="container">
        <div class="section-head reveal">
          <span class="eyebrow">Pengalaman Premium</span>
          <h2>Sistem Taaruf Premium Berteknologi AI</h2>
          <p class="lead">Direka supaya proses mencari pasangan menjadi lebih selamat, matang, visual dan dipercayai.</p>
        </div>
        <div class="gallery-grid">
  <article class="photo-card reveal">
    <img src="https://images.unsplash.com/photo-1604881991720-f91add269bed?w=600&q=80" alt="Taaruf beradab">
    <span class="photo-label">Taaruf</span>
    <div class="card-copy">
      <h3>Taaruf Beradab</h3>
      <p>Proses berkenalan yang sopan dan tersusun mengikut adab Islam.</p>
    </div>
  </article>
  <article class="photo-card reveal">
    <img src="https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?w=600&q=80" alt="Analisis AI">
    <span class="photo-label">AI</span>
    <div class="card-copy">
      <h3>Analisis AI</h3>
      <p>Teknologi terdepan menilai keserasian nilai dan pegangan hidup anda.</p>
    </div>
  </article>
  <article class="photo-card reveal">
    <img src="https://images.unsplash.com/photo-1529156069898-49953e39b3ac?w=600&q=80" alt="Sistem Wali">
    <span class="photo-label">Wali</span>
    <div class="card-copy">
      <h3>Sistem Wali Digital</h3>
      <p>Proses taaruf lebih yakin dengan penglibatan wali yang tersusun.</p>
    </div>
  </article>
  <article class="photo-card reveal">
    <img src="https://images.unsplash.com/photo-1516589178581-6cd7833ae3b2?w=600&q=80" alt="Privasi terlindung">
    <span class="photo-label">Privasi</span>
    <div class="card-copy">
      <h3>Privasi Terlindung</h3>
      <p>Identiti anda selamat dan terkawal sepanjang proses taaruf.</p>
    </div>
  </article>
</div>
      </div>
    </section>

    <section class="section compact cream" id="teras">
      <div class="container">
        <div class="section-head reveal">
          <span class="eyebrow">Teras Utama</span>
          <h2>Tiga Asas Yang Membuatkan Jodohku.my Berbeza</h2>
        </div>
     <div class="core-grid">
  <div class="image-panel reveal">
    <img src="https://images.unsplash.com/photo-1609743522653-52354461eb27?w=800&q=80" alt="Syariah">
    <div class="panel-copy">
      <h3>Berasaskan Syariah</h3>
      <p>Setiap ciri direka mengikut nilai dan adab Islam yang tulen.</p>
    </div>
  </div>
  <div class="image-panel reveal">
    <img src="https://images.unsplash.com/photo-1677442135703-1787eea5ce01?w=800&q=80" alt="Teknologi AI">
    <div class="panel-copy">
      <h3>Teknologi AI Terdepan</h3>
      <p>Sistem padanan kami menganalisis lebih 115 dimensi keserasian secara mendalam.</p>
    </div>
  </div>
  <div class="image-panel reveal">
    <img src="https://images.unsplash.com/photo-1511895426328-dc8714191011?w=800&q=80" alt="Ekosistem lengkap">
    <div class="panel-copy">
      <h3>Ekosistem Lengkap</h3>
      <p>Dari taaruf pertama hingga kehidupan selepas nikah, kami sentiasa ada.</p>
    </div>
  </div>
</div>
      </div>
    </section>

    <section class="section dark">
      <div class="container">
        <div class="section-head reveal">
          <span class="eyebrow">Kenapa Berbeza</span>
          <h2>Lebih Serius Daripada Aplikasi Biasa</h2>
        </div>
        <div class="table-shell reveal">
          <table aria-label="Perbandingan Jodohku.my dengan aplikasi biasa">
            <thead><tr><th>Ciri-Ciri</th><th>Jodohku.my</th><th>Aplikasi Biasa</th></tr></thead>
            <tbody>
              <tr><td>Tujuan</td><td><span class="tick">✓</span> Perkahwinan & jangka panjang</td><td>Kenalan, dating atau hiburan</td></tr>
              <tr><td>Pendekatan</td><td><span class="tick">✓</span> Taaruf berstruktur & kerahsiaan mendalam</td><td>Swipe, rupa dan lokasi</td></tr>
              <tr><td>Analisis</td><td><span class="tick">✓</span> AI + sistem taaruf & keserasian</td><td>Algoritma asas</td></tr>
              <tr><td>Keterlibatan Wali</td><td><span class="tick">✓</span> Ada sistem wali digital</td><td>Tiada</td></tr>
              <tr><td>Privasi</td><td><span class="tick">✓</span> Identiti terlindung & terkawal</td><td>Terhad</td></tr>
              <tr><td>Ekosistem</td><td><span class="tick">✓</span> Dari taaruf hingga selepas nikah</td><td>Tiada sokongan lanjutan</td></tr>
            </tbody>
          </table>
        </div>
      </div>
    </section>

    <section class="section dark" id="padanan">
      <div class="container">
        <div class="section-head reveal">
          <span class="eyebrow">Sains Padanan</span>
          <h2>Sistem Taaruf & Keserasian Revolusioner</h2>
          <p class="lead">Sistem kami menilai dua aspek utama supaya padanan yang dicadangkan bukan sekadar nampak sesuai, tetapi mempunyai asas hidup yang lebih serasi dan beradab.</p>
        </div>
        <div class="science-wrap">
          <article class="science-card reveal">
  <div class="science-photo">
    <img src="https://images.unsplash.com/photo-1604881991720-f91add269bed?w=800&q=80" alt="Taaruf">
    <span class="section-badge">Taaruf</span>
  </div>
  <div class="science-copy">
              <span class="eyebrow">Taaruf</span>
              <h3>Taaruf</h3>
              <p>Membantu pengguna memperkenalkan diri dengan tersusun, sopan dan jelas mengikut adab Islam sebelum proses padanan diteruskan.</p>
              <ul class="title-list">
                <li>Niat &amp; Tujuan Perkahwinan</li><li>Latar Diri &amp; Identiti</li><li>Agama &amp; Amalan Harian</li><li>Akhlak &amp; Adab</li><li>Keluarga &amp; Hubungan</li><li>Pendidikan &amp; Kerjaya</li><li>Kewangan &amp; Nafkah</li><li>Tempat Tinggal &amp; Gaya Hidup</li><li>Komunikasi</li><li>Emosi &amp; Konflik</li><li>Kesihatan &amp; Penjagaan Diri</li><li>Masa Lapang &amp; Minat</li><li>Rutin Harian</li><li>Perancangan Masa Depan</li><li>Anak &amp; Keibubapaan</li><li>Peranan Suami Isteri</li><li>Batas Pergaulan &amp; Media Sosial</li><li>Pengurusan Rumah</li><li>Cabaran Hidup</li><li>Sosial &amp; Komuniti</li><li>Nilai Peribadi</li><li>Proses Taaruf &amp; Istikharah</li>
              </ul>
              <div class="highlight">Taaruf bukan sekadar mengenal nama dan umur. Ia membantu memahami niat, pegangan agama, keluarga, emosi dan persediaan seseorang untuk membina rumah tangga.</div>
            </div>
          </article>

          <article class="science-card reverse reveal">
  <div class="science-photo">
    <img src="https://images.unsplash.com/photo-1516589178581-6cd7833ae3b2?w=800&q=80" alt="Keserasian">
    <span class="section-badge">Keserasian</span>
  </div>
  <div class="science-copy">
              <span class="eyebrow">Uji Keserasian</span>
              <h3>Uji Keserasian</h3>
              <p>Menilai kecocokan dua individu apabila mula dipadankan untuk melihat potensi kehidupan bersama selepas perkahwinan.</p>
              <ul class="title-list">
                <li>Matlamat Hidup &amp; Nilai</li><li>Agama &amp; Ibadah Bersama</li><li>Komunikasi Pasangan</li><li>Konflik &amp; Memaafkan</li><li>Kewangan Rumahtangga</li><li>Kerjaya &amp; Masa</li><li>Keluarga Mertua</li><li>Anak &amp; Pendidikan</li><li>Gaya Hidup &amp; Rutin</li><li>Rumah &amp; Kerja Domestik</li><li>Emosi &amp; Kasih Sayang</li><li>Sosial, Privasi &amp; Digital</li><li>Keputusan Besar</li><li>Cabaran &amp; Krisis</li><li>Romantik Selepas Nikah</li>
              </ul>
              <div class="highlight">Uji Keserasian membantu melihat bukan sahaja siapa yang nampak sesuai, tetapi siapa yang mampu hidup bersama dengan matang, realistik dan saling melengkapi.</div>
            </div>
          </article>
        </div>
        <p class="science-end reveal">Dua seksyen ini membolehkan Jodohku.my menilai calon pasangan dengan lebih adil, beradab dan mendalam — daripada niat perkahwinan hingga keserasian kehidupan selepas nikah.</p>
      </div>
    </section>

    <section class="section cream" id="cara">
      <div class="container">
        <div class="section-head reveal">
          <span class="eyebrow">Proses Taaruf</span>
          <h2>Bagaimana Ia Berfungsi?</h2>
        </div>
      <div class="steps">
  <article class="step-card reveal">
    <div class="step-img">
      <img src="https://images.unsplash.com/photo-1586281380349-632531db7ed4?w=400&q=80" alt="Daftar profil">
      <span class="step-number">1</span>
    </div>
    <div class="step-body"><h3>Daftar & Bina Profil</h3><p>Isikan maklumat diri, latar belakang dan nilai peribadi anda dengan jujur dan lengkap.</p></div>
  </article>
  <article class="step-card reveal">
    <div class="step-img">
      <img src="https://images.unsplash.com/photo-1517842645767-c639042777db?w=400&q=80" alt="Soalan taaruf">
      <span class="step-number">2</span>
    </div>
    <div class="step-body"><h3>Jawab Soalan Taaruf</h3><p>Lengkapkan soalan taaruf dan uji keserasian supaya AI dapat menilai profil anda dengan tepat.</p></div>
  </article>
  <article class="step-card reveal">
    <div class="step-img">
      <img src="https://images.unsplash.com/photo-1529156069898-49953e39b3ac?w=400&q=80" alt="Cadangan padanan">
      <span class="step-number">3</span>
    </div>
    <div class="step-body"><h3>Terima Cadangan Padanan</h3><p>AI kami akan mencadangkan calon yang sesuai berdasarkan nilai, agama dan keserasian hidup.</p></div>
  </article>
  <article class="step-card reveal">
    <div class="step-img">
      <img src="https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?w=400&q=80" alt="Taaruf beradab">
      <span class="step-number">4</span>
    </div>
    <div class="step-body"><h3>Mulakan Taaruf Beradab</h3><p>Berkomunikasi dalam persekitaran yang selamat, sopan dan terpantau mengikut adab Islam.</p></div>
  </article>
  <article class="step-card reveal">
    <div class="step-img">
      <img src="https://images.unsplash.com/photo-1511895426328-dc8714191011?w=400&q=80" alt="Taaruf dengan wali">
      <span class="step-number">5</span>
    </div>
    <div class="step-body"><h3>Taaruf Dengan Wali</h3><p>Teruskan proses dengan restu dan pemantauan yang sesuai.</p></div>
  </article>
</div>
    </section>

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
  </div>
  <div class="ecosystem-photo">
    <img src="https://images.unsplash.com/photo-1606216840931-69b10c1b1f7e?w=1200&q=80" alt="Ekosistem taaruf">
  </div>
</div>
      </div>
    </section>

    <section class="section dark compact">
      <div class="container">
        <div class="final-cta reveal">
          <div>
            <h2>Bersedia mencuba pengalaman taaruf yang lebih premium?</h2>
            <p>Daftar sekarang dan dapatkan akses awal ke platform Jodohku.my.</p>
          </div>
          <a class="btn primary" href="#daftar">Daftar Sekarang</a>
        </div>
      </div>
    </section>
  </main>


<footer class="site-footer">
    <div class="container footer-wrap">
      <div><strong>jodohku.my</strong> — platform taaruf premium Muslim Malaysia.</div>
      <div>Visual AI-photo embedded dalam fail. Sumber visual: <a href="https://easy-peasy.ai/" rel="nofollow">Easy-Peasy.AI</a></div>
    </div>
  </footer>
  

<div id="termsModal" class="modal" role="dialog" aria-modal="true" aria-labelledby="termsTitle">
    <div class="modal-content">
      <button class="modal-close" onclick="closeModal('termsModal')" aria-label="Tutup modal">&times;</button>
      <h2 id="termsTitle">Terma &amp; Syarat</h2>
      <div class="modal-body">
        <div class="modal-section"><h3>1. Pengenalan</h3><p>Selamat datang ke Jodohku.my. Dengan memohon akses awal, anda bersetuju untuk terikat dengan terma-terma di bawah.</p></div>
        <div class="modal-section"><h3>2. Kelayakan Pengguna</h3><p>Perkhidmatan ini terbuka khusus untuk Muslim warganegara Malaysia atau penduduk tetap yang berumur 18 tahun ke atas dan berstatus bujang, duda, atau janda yang serius ingin mencari pasangan hidup melalui kaedah taaruf yang sah.</p></div>
        <div class="modal-section"><h3>3. Ketepatan Maklumat</h3><p>Anda wajib memberikan maklumat yang benar, tepat, dan terkini (termasuk Nama Penuh, No. IC, Emel, dan No. Telefon). Penggunaan maklumat palsu boleh mengakibatkan penyertaan anda dibatalkan serta-merta.</p></div>
        <div class="modal-section"><h3>4. Pengesahan &amp; Saringan (KYC)</h3><p>Pihak Jodohku.my berhak melakukan saringan awal menggunakan algoritma AI dan semakan manual berasaskan No. IC yang diberikan bagi memastikan komuniti ini bebas daripada elemen penipuan (scam).</p></div>
        <div class="modal-section"><h3>5. Sekatan Liabiliti</h3><p>Jodohku.my menyediakan platform padanan awal dan tidak bertanggungjawab ke atas sebarang salah laku, penipuan, atau perselisihan yang berlaku di luar platform antara pengguna selepas fasa taaruf dimulakan.</p></div>
        <div class="modal-section"><h3>6. Perubahan Terma</h3><p>Kami berhak meminda Terma &amp; Syarat ini pada bila-bila masa tanpa notis awal bagi mematuhi undang-undang semasa atau meningkatkan kualiti perkhidmatan.</p></div>
      </div>
    </div>
  </div>

  <div id="privacyModal" class="modal" role="dialog" aria-modal="true" aria-labelledby="privacyTitle">
    <div class="modal-content">
      <button class="modal-close" onclick="closeModal('privacyModal')" aria-label="Tutup modal">&times;</button>
      <h2 id="privacyTitle">Dasar Privasi (PDPA 2010)</h2>
      <div class="modal-body">
        <div class="modal-section"><h3>1. Komitmen Kami</h3><p>Jodohku.my komited melindungi data peribadi anda mematuhi Akta Perlindungan Data Peribadi 2010 (PDPA 2010) Malaysia.</p></div>
        <div class="modal-section"><h3>2. Data Yang Kami Kumpul</h3><ul><li><strong>Maklumat identiti:</strong> nama penuh, nombor kad pengenalan/MyKad, tarikh lahir, umur, jantina, status perkahwinan.</li><li><strong>Maklumat hubungan:</strong> nombor telefon, alamat e-mel.</li><li><strong>Media:</strong> gambar profil rasmi untuk tujuan pengecaman wajah &amp; akaun.</li></ul></div>
        <div class="modal-section"><h3>3. Tujuan Pemprosesan Data</h3><ul><li>Mengesahkan identiti anda dan menapis pemohon yang tidak serius.</li><li>Menjalankan analisis keserasian berasaskan profil.</li><li>Menghantar kemas kini platform dan jemputan akses awal.</li></ul></div>
        <div class="modal-section"><h3>4. Persetujuan Pemprosesan</h3><p>Dengan menanda kotak persetujuan terma, anda memberikan kebenaran eksplisit kepada Jodohku.my untuk memproses data peribadi anda bagi tujuan perkahwinan yang dinyatakan.</p></div>
        <div class="modal-section"><h3>6. Pendedahan Kepada Pihak Ketiga</h3><ul><li>Penyedia hosting dan cloud</li><li>Penyedia pembayaran</li><li>Pasukan sokongan Jodohku</li><li>Pihak berkuasa jika diwajibkan undang-undang</li></ul></div>
        <div class="modal-section"><h3>7. Keselamatan Data</h3><p>Kami mengambil langkah keselamatan yang munasabah termasuk akses terhad, enkripsi dan pemantauan aktiviti mencurigakan.</p></div>
        <div class="modal-section"><h3>8. Tempoh Penyimpanan Data</h3><p>Data disimpan selama mana diperlukan untuk tujuan perkhidmatan, keselamatan dan pematuhan undang-undang.</p></div>
        <div class="modal-section"><h3>9. Hak Anda</h3><ol><li>Meminta akses kepada data anda</li><li>Membetulkan data yang tidak tepat</li><li>Menarik balik persetujuan</li><li>Meminta pemadaman akaun</li></ol></div>
        <div class="modal-section"><h3>10. Ketepatan Maklumat</h3><p>Anda bertanggungjawab memastikan maklumat yang diberikan adalah benar dan terkini.</p></div>
        <div class="modal-section"><h3>11. Data Yang Dipaparkan Kepada Pengguna Lain</h3><p>Nombor IC, nombor telefon dan e-mel <strong>tidak akan dipaparkan</strong> kepada pengguna lain.</p></div>
        <div class="modal-section"><h3>12. Hubungi Kami</h3><p><strong>Jodohku.my</strong><br>E-mel: <strong>inquiry@jodohku.my</strong><br><a href="https://www.jodohku.my" target="_blank" rel="noopener">www.jodohku.my</a></p></div>
      </div>
    </div>
  </div>

  <div id="popupOverlay" class="popup-overlay" style="display:none; position:fixed; top:0; left:0; width:100%; height:100%; background:rgba(4,9,14,0.85); backdrop-filter:blur(10px); z-index:10000; align-items:center; justify-content:center; padding:20px;">
    <div class="popup-box" style="background:#0c1924; border:1px solid rgba(229,207,151,0.2); border-radius:24px; padding:32px; max-width:440px; width:100%; text-align:center; box-shadow:0 20px 50px rgba(0,0,0,0.5); position:relative; transform:scale(0.95); transition:transform 0.3s ease;">
      <div id="popupIcon" style="font-size:48px; margin-bottom:16px;"></div>
      <h3 id="popupTitle" style="color:var(--champagne); font-family:var(--font-display); font-size:22px; margin-bottom:12px; font-weight:600;"></h3>
      <p id="popupDesc" style="color:rgba(255,255,255,0.7); font-size:14px; line-height:1.6; margin-bottom:24px;"></p>
      <button class="btn primary" onclick="closePopup()" style="width:100%;">Faham &amp; Tutup</button>
    </div>
  </div>

        <script>
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(e => {
      if (e.isIntersecting) {
        e.target.classList.add('show');
        observer.unobserve(e.target);
      }
    });
  }, { threshold: 0.12 });

  document.querySelectorAll('.reveal').forEach(el => observer.observe(el));
</script>

 <script>

   const GAS_URL = 'https://script.google.com/macros/s/XXXXXXXXXX/exec';
/* ── CONFIGURATION & INITIALIZATION ── */
    // Safely embed environment variables via PHP, then sanitize them for JavaScript
   const SUPABASE_URL = <?= json_encode(getenv("SUPABASE_URL")) ?>;
const SUPABASE_ANON_KEY = <?= json_encode(getenv("SUPABASE_ANON_KEY")) ?>;

    let db = null;
    
    // Split '<' and '?' to prevent older PHP environments from misinterpreting short tags
    const phpTagMarker = '<' + '?';

    if (SUPABASE_URL && SUPABASE_ANON_KEY && !SUPABASE_URL.startsWith(phpTagMarker) && !SUPABASE_ANON_KEY.startsWith(phpTagMarker)) {
      // Use the global window object configuration to initialize Supabase client safely
      db = window.supabase.createClient(SUPABASE_URL, SUPABASE_ANON_KEY);
    } else {
      console.warn("Supabase initialization skipped: Missing configuration keys or invalid environment variables.");
    }

    let selectedFile = null;

    /* ── UI HELPERS ── */
    function showFieldError(fieldId, msg) {
      const inputEl = document.getElementById(fieldId);
      if (!inputEl) return;
      inputEl.style.borderColor = '#ff6b6b';
      inputEl.style.background = 'rgba(255,107,107,0.03)';
      
      let errorEl = inputEl.nextElementSibling;
      if (!errorEl || !errorEl.classList.contains('field-error')) {
        errorEl = document.createElement('div');
        errorEl.className = 'field-error';
        errorEl.style.color = '#ff6b6b';
        errorEl.style.fontSize = '12px';
        errorEl.style.marginTop = '4px';
        errorEl.style.paddingLeft = '4px';
        inputEl.parentNode.insertBefore(errorEl, inputEl.nextSibling);
      }
      errorEl.textContent = msg;
    }

    function clearFieldError(fieldId) {
      const inputEl = document.getElementById(fieldId);
      if (!inputEl) return;
      inputEl.style.borderColor = '';
      inputEl.style.background = '';
      
      const errorEl = inputEl.nextElementSibling;
      if (errorEl && errorEl.classList.contains('field-error')) {
        errorEl.remove();
      }
    }

    function showICHint(res) {
      const inputEl = document.getElementById('icNo');
      if (!inputEl) return;
      let hintEl = document.getElementById('icHintBox');
      if (!hintEl) {
        hintEl = document.createElement('div');
        hintEl.id = 'icHintBox';
        hintEl.style.fontSize = '12px';
        hintEl.style.marginTop = '6px';
        hintEl.style.color = '#8ff7c8';
        hintEl.style.background = 'rgba(143,247,200,0.06)';
        hintEl.style.padding = '8px 12px';
        hintEl.style.borderRadius = '8px';
        hintEl.style.border = '1px solid rgba(143,247,200,0.15)';
        inputEl.parentNode.insertBefore(hintEl, inputEl.nextSibling);
      }
      hintEl.innerHTML = `✨ <strong>Saringan AI:</strong> Jantina: ${res.gender} | Umur: ${res.age} tahun (${res.dobStr}) | Negeri Lahir: ${res.state}`;
    }

    function clearICHint() {
      const hintEl = document.getElementById('icHintBox');
      if (hintEl) hintEl.remove();
    }

    function showUploadError(msg) {
      const label = document.getElementById('uploadLabel');
      if (!label) return;
      label.style.borderColor = '#ff6b6b';
      label.style.background = 'rgba(255,107,107,0.03)';
      
      let errorEl = document.getElementById('upError');
      if (!errorEl) {
        errorEl = document.createElement('div');
        errorEl.id = 'upError';
        errorEl.style.color = '#ff6b6b';
        errorEl.style.fontSize = '12px';
        errorEl.style.marginTop = '4px';
        label.parentNode.insertBefore(errorEl, label.nextSibling);
      }
      errorEl.textContent = msg;
    }

    function clearUploadError() {
      const label = document.getElementById('uploadLabel');
      if (!label) return;
      label.style.borderColor = '';
      label.style.background = '';
      const errorEl = document.getElementById('upError');
      if (errorEl) errorEl.remove();
    }

    function showCbError(msg) {
      const cbContainer = document.getElementById('agreeTerms')?.parentNode;
      if (!cbContainer) return;
      let errorEl = document.getElementById('cbError');
      if (!errorEl) {
        errorEl = document.createElement('div');
        errorEl.id = 'cbError';
        errorEl.style.color = '#ff6b6b';
        errorEl.style.fontSize = '12px';
        errorEl.style.marginTop = '4px';
        cbContainer.parentNode.insertBefore(errorEl, cbContainer.nextSibling);
      }
      errorEl.textContent = msg;
    }

    function clearCbError() {
      const errorEl = document.getElementById('cbError');
      if (errorEl) errorEl.remove();
    }

    /* ── POPUP AND MODAL ENGINE ── */
    function openModal(id) {
  const modal = document.getElementById(id);
  if (!modal) return;
  modal.style.display = 'flex';
  document.body.style.overflow = 'hidden';
}

    // Explicitly make modal handling globally available
    window.openModal = openModal;

    function closeModal(id) {
      const modal = document.getElementById(id);
      if (!modal) return;
      modal.style.display = 'none';
      document.body.style.overflow = '';
    }

    window.closeModal = closeModal;

    window.addEventListener('click', function(e) {
      if (e.target.classList.contains('modal')) {
        e.target.style.display = 'none';
        document.body.style.overflow = '';
      }
    });

    function showErrorPopup(title, desc) {
      document.getElementById('popupIcon').textContent = '⚠️';
      document.getElementById('popupIcon').style.color = '#ff6b6b';
      document.getElementById('popupTitle').textContent = title;
      document.getElementById('popupDesc').textContent = desc;
      const overlay = document.getElementById('popupOverlay');
      overlay.style.display = 'flex';
      setTimeout(() => { overlay.firstElementChild.style.transform = 'scale(1)'; }, 10);
    }

    function showMaintenancePopup(title, desc) {
      document.getElementById('popupIcon').textContent = '🔧';
      document.getElementById('popupIcon').style.color = '#e5cf97';
      document.getElementById('popupTitle').textContent = title;
      document.getElementById('popupDesc').textContent = desc;
      const overlay = document.getElementById('popupOverlay');
      overlay.style.display = 'flex';
      setTimeout(() => { overlay.firstElementChild.style.transform = 'scale(1)'; }, 10);
    }

    function closePopup() {
      const overlay = document.getElementById('popupOverlay');
      overlay.firstElementChild.style.transform = 'scale(0.95)';
      setTimeout(() => { overlay.style.display = 'none'; }, 200);
    }

    window.closePopup = closePopup;

    /* ── CORE COMPONENT LOGIC & ID GENERATORS ── */
    function generateId() {
      const prefix = "JDK";
      const timestamp = Date.now().toString(36).toUpperCase().slice(-4);
      const randomStr = Math.random().toString(36).toUpperCase().substring(2, 6);
      return `${prefix}-${timestamp}${randomStr}`;
    }

    function validateIC(ic) {
      ic = ic.replace(/-/g, '');
      if (ic.length !== 12) return { valid: false, error: 'No. IC mestilah mengandungi 12 digit.' };
      if (!/^\d+$/.test(ic)) return { valid: false, error: 'No. IC hanya boleh mengandungi nombor.' };

      let year = parseInt(ic.substring(0, 2));
      const month = parseInt(ic.substring(2, 4));
      const day = parseInt(ic.substring(4, 6));

      const currentYear = new Date().getFullYear();
      const currentCentury = Math.floor(currentYear / 100) * 100;
      year = (currentCentury + year > currentYear) ? (currentCentury - 100 + year) : (currentCentury + year);

      if (month < 1 || month > 12) return { valid: false, error: 'No. IC tidak sah — format bulan salah.' };
      
      const daysInMonth = new Date(year, month, 0).getDate();
      if (day < 1 || day > daysInMonth) return { valid: false, error: 'No. IC tidak sah — tarikh tidak wujud pada bulan tersebut.' };

      const dob = new Date(year, month - 1, day);
      if (dob > new Date()) return { valid: false, error: 'No. IC tidak sah — tarikh lahir pada masa hadapan.' };

      const age = (new Date() - dob) / (1000 * 60 * 60 * 24 * 365.25);
      if (age > 120) return { valid: false, error: 'No. IC tidak sah — tarikh lahir melebihi 120 tahun.' };

      const stateCode = parseInt(ic.substring(6, 8));
      const validStates = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16];
      const stateOk = validStates.includes(stateCode) || (stateCode >= 21 && stateCode <= 59);
      if (!stateOk) return { valid: false, error: 'No. IC tidak sah — kod negeri tidak sepadan.' };

      const monthsMs = ['Jan', 'Feb', 'Mac', 'Apr', 'Mei', 'Jun', 'Jul', 'Ogo', 'Sep', 'Okt', 'Nov', 'Dis'];
      const dobStr = `${day} ${monthsMs[month - 1]} ${year}`;

      const stateMap = {
        1: 'Johor', 2: 'Kedah', 3: 'Kelantan', 4: 'Melaka', 5: 'Negeri Sembilan', 
        6: 'Pahang', 7: 'Pulau Pinang', 8: 'Perak', 9: 'Perlis', 10: 'Selangor', 
        11: 'Terengganu', 12: 'Sabah', 13: 'Sarawak', 14: 'Wilayah Persekutuan (KL)', 
        15: 'Wilayah Persekutuan (Labuan)', 16: 'Wilayah Persekutuan (Putrajaya)',
        21: 'Johor', 22: 'Johor', 23: 'Johor', 24: 'Johor', 25: 'Kedah', 26: 'Kedah', 27: 'Kedah',
        28: 'Kelantan', 29: 'Kelantan', 30: 'Melaka', 31: 'Negeri Sembilan', 32: 'Pahang', 33: 'Pahang',
        34: 'Pulau Pinang', 35: 'Pulau Pinang', 36: 'Perak', 37: 'Perak', 38: 'Perak', 39: 'Perak',
        40: 'Perlis', 41: 'Selangor', 42: 'Selangor', 43: 'Selangor', 44: 'Selangor', 45: 'Terengganu',
        46: 'Terengganu', 47: 'Sabah', 48: 'Sabah', 49: 'Sabah', 50: 'Sarawak', 51: 'Sarawak',
        52: 'Sarawak', 53: 'Sarawak', 54: 'Wilayah Persekutuan (KL)', 55: 'Wilayah Persekutuan (KL)',
        56: 'Wilayah Persekutuan (KL)', 57: 'Wilayah Persekutuan (KL)', 58: 'Wilayah Persekutuan (Labuan)',
        59: 'Wilayah Persekutuan (Putrajaya)'
      };
      
      const state = stateMap[stateCode] || 'Luar Negara / Lain-lain';
      const lastDigit = parseInt(ic.slice(-1));
      const gender = (lastDigit % 2 === 0) ? 'Wanita' : 'Lelaki';

      return { valid: true, age: Math.floor(age), dobStr, state, gender, rawDob: dob.toISOString().split('T')[0] };
    }

    /* ── EVENT HANDLERS & REGISTRATION PIPELINE ── */
    document.getElementById('icNo')?.addEventListener('input', function(e) {
      let raw = e.target.value.replace(/\D/g, '');
      if (raw.length > 6 && raw.length <= 8) {
        raw = raw.slice(0, 6) + '-' + raw.slice(6);
      } else if (raw.length > 8) {
        raw = raw.slice(0, 6) + '-' + raw.slice(6, 8) + '-' + raw.slice(8, 12);
      }
      e.target.value = raw;

      const digits = raw.replace(/-/g, '');
      if (digits.length === 12) {
        const r = validateIC(raw);
        if (r.valid) {
          clearFieldError('icNo');
          showICHint(r);
        } else {
          showFieldError('icNo', r.error);
          clearICHint();
        }
      } else {
        clearFieldError('icNo');
        clearICHint();
      }
    });

    document.getElementById('profilePhoto')?.addEventListener('change', function(e) {
      clearUploadError();
      const file = e.target.files[0];
      if (!file) return;

      const validTypes = ['image/jpeg', 'image/png', 'image/webp'];
      if (!validTypes.includes(file.type)) {
        showUploadError('Format tidak sah. Gunakan JPG, PNG atau WEBP sahaja.');
        selectedFile = null;
        document.getElementById('uploadTitle').textContent = 'Pilih gambar profil';
        return;
      }

      if (file.size > 5 * 1024 * 1024) {
        showUploadError('Fail terlalu besar. Maksimum saiz dibenarkan adalah 5MB.');
        selectedFile = null;
        document.getElementById('uploadTitle').textContent = 'Pilih gambar profil';
        return;
      }

      selectedFile = file;
      document.getElementById('uploadTitle').textContent = file.name;
    });

    document.getElementById('fullName')?.addEventListener('input', () => clearFieldError('fullName'));
    document.getElementById('emailAddr')?.addEventListener('input', () => clearFieldError('emailAddr'));
    document.getElementById('phoneNo')?.addEventListener('input', () => clearFieldError('phoneNo'));
    document.getElementById('agreeTerms')?.addEventListener('change', (e) => { if(e.target.checked) clearCbError(); });

    function validateForm() {
      let ok = true;

      /* Name */
      const name = document.getElementById('fullName')?.value.trim() ?? '';
      if (!name) {
        showFieldError('fullName', 'Nama penuh diperlukan.');
        ok = false;
      } else if (name.length < 3) {
        showFieldError('fullName', 'Nama penuh mestilah sekurang-kurangnya 3 aksara.');
        ok = false;
      } else {
        clearFieldError('fullName');
      }

      /* IC */
      const icVal = document.getElementById('icNo')?.value ?? '';
      const icRes = validateIC(icVal);
      if (!icVal.replace(/-/g,'')) {
        showFieldError('icNo', 'No. Kad Pengenalan diperlukan.');
        clearICHint();
        ok = false;
      } else if (!icRes.valid) {
        showFieldError('icNo', icRes.error);
        clearICHint();
        ok = false;
      } else {
        clearFieldError('icNo');
        showICHint(icRes);
      }

      /* Email */
      const email = document.getElementById('emailAddr')?.value.trim() ?? '';
      if (!email) {
        showFieldError('emailAddr', 'Alamat e-mel diperlukan.');
        ok = false;
      } else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
        showFieldError('emailAddr', 'Format e-mel tidak sah.');
        ok = false;
      } else {
        clearFieldError('emailAddr');
      }

      /* Phone */
      const phone = document.getElementById('phoneNo')?.value.trim() ?? '';
      if (!phone) {
        showFieldError('phoneNo', 'Nombor telefon diperlukan.');
        ok = false;
      } else if (!/^\+?\d{9,15}$/.test(phone.replace(/[-\s]/g,''))) {
        showFieldError('phoneNo', 'Nombor telefon tidak sah (9-15 digit).');
        ok = false;
      } else {
        clearFieldError('phoneNo');
      }

      /* Photo */
      if (!selectedFile) {
        showUploadError('Gambar profil rasmi diperlukan untuk pengesahan awal.');
        ok = false;
      } else {
        clearUploadError();
      }

      /* Checkbox */
      const agree = document.getElementById('agreeTerms')?.checked ?? false;
      if (!agree) {
        showCbError('Anda mesti bersetuju dengan Terma dan Dasar Privasi untuk meneruskan.');
        ok = false;
      } else {
        clearCbError();
      }

      return ok;
    }

    async function handleFormSubmit(e) {
      e.preventDefault();
      if (!validateForm()) {
        const firstErr = document.querySelector('.field-error, #upError, #cbError');
        if (firstErr) firstErr.scrollIntoView({ behavior: 'smooth', block: 'center' });
        return;
      }

      if (!db) {
        showMaintenancePopup(
          'Sistem Sedang Dikemas Kini', 
          'Pangkalan data kami sedang dalam fasa konfigurasi penyelenggaraan. Sila cuba lagi dalam masa beberapa minit.'
        );
        return;
      }

      const btn = document.getElementById('submitBtn');
      btn.disabled = true;
      btn.textContent = 'Memproses…';

      try {
        const jdk_id = generateId();
        const icValue = document.getElementById('icNo').value;
        const icRes = validateIC(icValue);
        const ic_last4 = icValue.replace(/-/g, '').slice(-4);

        /* ── 1. Upload photo to Supabase Storage ── */
        const ext = selectedFile.name.split('.').pop();
        const filename = `${jdk_id}_profile.${ext}`;
        const filePath = `${jdk_id}/${filename}`;

        const { error: uploadError } = await db.storage
          .from('profiles')
          .upload(filePath, selectedFile, { cacheControl: '3600', upsert: true });

        if (uploadError) throw uploadError;

        /* ── 2. Get Public URL for the Uploaded Image ── */
        const { data: urlData } = db.storage.from('profiles').getPublicUrl(filePath);
        const photoUrl = urlData.publicUrl;

        /* ── 3. Insert Database Record ── */
        const payload = {
          id: jdk_id,
          full_name: document.getElementById('fullName').value.trim(),
          ic_number: icValue.replace(/-/g, ''),
          ic_last_four: ic_last4,
          email: document.getElementById('emailAddr').value.trim().toLowerCase(),
          phone: document.getElementById('phoneNo').value.trim(),
          photo_url: photoUrl,
          age: icRes.age,
          gender: icRes.gender,
          state_of_birth: icRes.state,
          date_of_birth: icRes.rawDob
        };

        const { error: dbError } = await db.from('early_access').insert([payload]);

        if (dbError) {
          if (dbError.code === '23505') {
            throw new Error('__DUPLICATE__');
          }
          throw dbError;
        }

        /* ── 4. Trigger External Automation Pipelines via Edge Functions ── */
        db.functions.invoke('on-early-access-reg', { body: { jdk_id } }).catch(err => {
          console.error("Non-blocking automation trigger failure:", err);
        });

        /* ── 4b. Send to Google Apps Script ── */
try {
  const reader = new FileReader();
  reader.readAsDataURL(selectedFile);
  reader.onload = async () => {
    const gasPayload = {
      reference_no:            jdk_id,
      full_name:               document.getElementById('fullName').value.trim(),
      phone:                   document.getElementById('phoneNo').value.trim(),
      email:                   document.getElementById('emailAddr').value.trim().toLowerCase(),
      ic_no:                   document.getElementById('icNo').value.replace(/-/g, ''),
      ic_last4:                document.getElementById('icNo').value.replace(/-/g, '').slice(-4),
      gender:                  icRes.gender,
      state:                   icRes.state,
      profile_image_filename:  selectedFile.name,
      profile_image_mime_type: selectedFile.type,
      profile_image_base64:    reader.result,
      consent_marketing:       true,
      source:                  'jodohku_landing',
      page_url:                window.location.href,
      user_agent:              navigator.userAgent,
      created_at:              new Date().toISOString(),
    };

    await fetch(GAS_URL, {
      method: 'POST',
      body:   JSON.stringify(gasPayload),
    });
  };
} catch (gasErr) {
  console.error('GAS sync error (non-blocking):', gasErr);
}

        /* ── 5. Show Success Screen UI Changes ── */
        const form = document.getElementById('regForm');
        const successMsg = document.getElementById('successMsg');
        if (form && successMsg) {
          form.style.pointerEvents = 'none';
          btn.style.display = 'none';
          successMsg.style.display = 'block';
          successMsg.innerHTML = `
            <div style="text-align:center;padding:10px 0;">
              <span style="font-size:40px; display:block; margin-bottom:12px;">🎉</span>
              <strong style="font-size:16px;color:#fff;display:block;margin-bottom:8px;font-family:var(--font-display);">Permohonan Akses Awal Diterima!</strong>
              <p style="margin-bottom:16px;color:rgba(255,255,255,0.85);font-size:13px;">Pendaftaran anda berjaya disaring oleh AI kami. Sila simpan ID unik anda di bawah sebagai rujukan rasmi. Kami akan menghubungi anda apabila slot onboarding dibuka. — Pasukan Jodohku</p>
              <div style="display:inline-block;padding:10px 24px;border-radius:20px;background:#0c1924;border:1px solid rgba(229,207,151,.4);color:var(--champagne);font-size:14px;letter-spacing:.08em;font-family:monospace;font-weight:bold;box-shadow:0 4px 12px rgba(0,0,0,0.3);">
                ${jdk_id}
              </div>
            </div>`;
          form.scrollIntoView({ behavior: 'smooth', block: 'center' });
        }

      } catch (err) {
        btn.disabled = false;
        btn.textContent = 'Mohon Akses Awal';
        if (err.message === '__DUPLICATE__') {
          showErrorPopup(
            'Pendaftaran Duplikat', 
            'Nombor IC atau alamat e-mel ini sudah pun didaftarkan di dalam sistem kami untuk akses awal.'
          );
        } else {
          console.error("Critical submission break:", err);
          showErrorPopup(
            'Gagal Menyimpan', 
            'Rangkaian tergendala atau pelayan sibuk. Sila pastikan sambungan internet anda stabil dan cuba sekali lagi.'
          );
        }
      }
    }

    // Attach handler dynamically to prevent global scope conflicts
    document.getElementById('regForm')?.addEventListener('submit', handleFormSubmit);
  </script>
</body>
</html>
