<?php
// simbat_index.php
// Simple PHP page that outputs static HTML matching the provided wireframe.
// Save this file as simbat_index.php and open it in a PHP-capable server (e.g., XAMPP, MAMP, or php -S localhost:8000).
?>

<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>SIMBAT - Sistem Informasi Manajemen Bencana Alam Topan</title>
  <style>
    :root{
      --bg:#fbf3e8; /* page background */
      --nav-bg:#ffffff;
      --accent:#1f2b7a; /* deep blue for title */
      --subtitle:#1a2aa8; /* brighter blue for subtitle */
      --text:#222;
    }
    html,body{height:100%;}
    body{
      margin:0;
      font-family: 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
      background:var(--bg);
      color:var(--text);
      -webkit-font-smoothing:antialiased;
      -moz-osx-font-smoothing:grayscale;
    }

    /* Top bar */
    .topbar{
      position:fixed;
      left:0;right:0;top:0;
      height:60px;
      background:var(--nav-bg);
      display:flex;
      align-items:center;
      justify-content:center;
      box-shadow:0 1px 0 rgba(0,0,0,0.06);
      z-index:10;
    }
    .nav{
      display:flex;
      gap:28px;
      padding:0 12px;
      align-items:center;
      font-weight:600;
      font-size:15px;
    }
    .nav a{
      text-decoration:none;
      color:#333;
      padding:8px 12px;
      border-radius:12px;
    }
    .nav a.active{
      background:#f0f0f5;
      color:#222;
      box-shadow:0 1px 0 rgba(0,0,0,0.05) inset;
    }

    /* main hero area */
    .hero{
      min-height:100vh;
      display:flex;
      flex-direction:column;
      align-items:center;
      justify-content:center;
      padding:100px 24px 80px 24px; /* account for fixed topbar */
      box-sizing:border-box;    text-align:center;
    }
    .logo{
      width:330px;
      height:auto;
      display:block;
      margin:0 auto 0 auto;
    }
    h1.brand{
      margin:6px 0 8px 0;
      font-size:80px;
      letter-spacing:2px;
      font-weight:800;
      color:var(--accent);
      line-height:0.9;
    }
    p.subtitle{
      margin:0 0 48px 0;
      color:var(--subtitle);
      font-size:20px;
      font-weight:700;
    }

    .lead{
      max-width:760px;
      margin:0 auto;
      font-size:14px;
      font-weight:700;
      line-height:1.6;
      text-align:center;
      color:#0e0e0e;
    }

    /* small footer note bottom-right */
    .small-note{
      position:fixed;
      right:18px;
      bottom:12px;
      font-size:12px;
      color:#333;
    }

    /* responsive adjustments */
    @media (max-width:720px){
      h1.brand{font-size:48px}
      .logo{width:160px}
      .nav{gap:14px; font-size:14px}
    }
  </style>
</head>
<body>
  <div class="topbar">
    <nav class="nav" aria-label="Main navigation">
      <a href="#" class="active">Beranda</a>
      <a href="penyebab.php">Penyebab</a>
      <a href="#">Jenis</a>
      <a href="#">Penanggulangan</a>
      <a href="#">Mitigasi</a>
      <a href="#">Dampak</a>
    </nav>
  </div>

  <main class="hero">
    <img class="logo" src="assets/logo.png" alt="SIMBAT logo">

    <h1 class="brand">SIMBAT</h1>
    <p class="subtitle">Sistem Informasi Manajemen Bencana Alam Topan</p>

    <p class="lead">Bencana angin adalah peristiwa hidrometeorologis berupa angin kencang yang memiliki kecepatan sangat tinggi dan dapat menyebabkan kerusakan besar pada bangunan, tumbuhan serta membahayakan keselamatan manusia. Angin ini biasanya terjadi karena adanya tekanan udara yang membentuk pusaran dalam sistem cuaca, sering terjadi di masa peralihan musim atau di wilayah tropis tertentu.</p>
  </main>

  <div class="small-note">definisi, macam macam bencana angin, topan</div>

</body>
</html>
