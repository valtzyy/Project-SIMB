<?php
// simbat_index.php
// Simple PHP page that outputs static HTML matching the provided wireframe.
// Save this file as simbat_index.php and open it in a PHP-capable server (e.g., XAMPP, MAMP, or php -S localhost:8000).
?>


<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SIMBAT - Sistem Informasi Bencana Topan Nasional</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  
  <nav class="navbar">
    <div class="nav-container">

        <!-- LOGO -->
        <div class="nav-left">
            <img src="assets/logo.png" class="nav-logo" alt="Logo">
            <a href="#" class="navbar-brand">SIMBAT</a>
        </div>

        <!-- NAV LINKS -->
        <ul class="nav-links">
            <li><a href="index.php">Beranda</a></li>

            <!-- DROPDOWN INFO TOPAN -->
          <li class="nav-item dropdown">
              <button class="dropdown-btn">Informasi ▾</button>
              <ul class="dropdown-menu">
                  <li><a href="pengertian.php">Pengertian</a></li>
                  <li><a href="jenis.php">Jenis Badai</a></li>
                  <li><a href="penyebab.php">Penyebab</a></li>
                  <li><a href="penanggulangan.php">Penanggulangan</a></li>
                  <li><a href="dampak.php">Dampak</a></li>
              </ul>
          </li>
            <li><a href="statistik.php">Statistik</a></li>
            <li><a href="mitigasi.php">Mitigasi</a></li>
            <li><a href="kontak.php">Kontak</a></li>
        </ul>
      </div>
  </nav>

  <!-- BERANDA -->
  <section class="content" id="home">
    <div class="hero-container fade-in">
      <h1>Sistem Informasi Bencana Topan Nasional</h1>
      <p>
        Pemantauan topan real-time, edukasi bencana, statistik nasional,
        serta panduan keselamatan nasional yang dapat diakses kapan saja.
      </p>

      <div class="hero-stats">
        <div class="stat-card">
          <h2 class="counter" data-target="3">0</h2>
          <p>Topan Aktif</p>
        </div>
        <div class="stat-card">
          <h2 class="counter" data-target="27">0</h2>
          <p>Wilayah Terdampak</p>
        </div>
        <div class="stat-card">
          <h2 class="counter" data-target="15000">0</h2>
          <p>Pengungsi</p>
        </div>
      </div>

      <div class="hero-buttons">
        <a href="#info" class="btn">Lihat Info Topan</a>
        <a href="#galeri" class="btn">Galeri Bencana</a>
        <a href="#kontak" class="btn">Kontak & Bantuan</a>
      </div>
    </div>
  </section>


  <!-- ======== SECTION JELAJAHI TOPIK ======== -->
  <section class="topic-section" id="info">
    <h2 class="topic-title">Informasi Lengkap Tentang Topan</h2>
    <p class="topic-subtitle">Pelajari berbagai informasi lengkap tentang badai topan dengan mudah.</p>

    <div class="topic-container">

        <a href="penyebab.php" class="topic-card">
            <div class="topic-icon">🌊</div>
            <h3>Penyebab</h3>
            <p>Faktor pembentukan badai dan topan</p>
        </a>

        <a href="jenis.php" class="topic-card">
            <div class="topic-icon">🌪️</div>
            <h3>Jenis</h3>
            <p>Klasifikasi berbagai tipe badai</p>
        </a>

        <a href="penanggulangan.php" class="topic-card">
            <div class="topic-icon">🛡️</div>
            <h3>Penanggulangan</h3>
            <p>Langkah-langkah menghadapi bencana</p>
        </a>

        
        <a href="dampak.php" class="topic-card">
            <div class="topic-icon">💥</div>
            <h3>Dampak</h3>
            <p>Dampak terjadinya bencana</p>
        </a>

        
        <a href="pengertian.php" class="topic-card">
            <div class="topic-icon">💡</div>
            <h3>Pengertian</h3>
            <p>Definisi dan karakteristik badai serta topan</p>
        </a>
    </div>
  </section>



  <!-- GALERI -->
  <section class="section-galeri" id="galeri">
    <h2>Galeri Bencana Topan</h2>
    <div class="galeri-grid">
      <div class="galeri-item">
        <img src="assets/infrastruktur.jpeg" alt="Kerusakan infrastruktur">
        <div class="overlay"><span>Kerusakan Infrastruktur</span></div>
      </div>
      <div class="galeri-item">
        <img src="assets/banjir.jpeg" alt="Banjir akibat topan">
        <div class="overlay"><span>Banjir Akibat Topan</span></div>
      </div>
      <div class="galeri-item">
        <img src="assets/evakuasi.jpeg" alt="Evakuasi masyarakat">
        <div class="overlay"><span>Evakuasi Masyarakat</span></div>
      </div>
      <div class="galeri-item">
        <img src="assets/pemukiman.jpeg" alt="Kerusakan permukiman">
        <div class="overlay"><span>Kerusakan Permukiman</span></div>
      </div>
      <div class="galeri-item">
        <img src="assets/gelombang.jpeg" alt="Gelombang tinggi">
        <div class="overlay"><span>Gelombang Tinggi & Pesisir</span></div>
      </div>
      <div class="galeri-item">
        <img src="assets/tanggap.jpg" alt="Tanggap darurat">
        <div class="overlay"><span>Tanggap Darurat Bencana</span></div>
      </div>
    </div>
  </section>


  <!-- KONTAK -->
  <section class="section-kontak" id="kontak">
    <div class="kontak-inner">
      <div>
        <h2>Kontak Darurat & Informasi</h2>
        <p>
          Jika Anda berada di wilayah terdampak topan, segera hubungi layanan darurat setempat atau
          BPBD untuk mendapatkan bantuan. Periksa selalu informasi resmi dari lembaga pemerintah.
        </p>
        <ul class="kontak-list">
          <li><b>Call Center Darurat:</b> 112 / 117 (BPBD)</li>
          <li><b>Info Cuaca Resmi:</b> Website & kanal resmi BMKG</li>
          <li><b>Posko Bencana:</b> Dikelola oleh BPBD, BNPB, dan pemerintah daerah</li>
        </ul>
      </div>

      <div class="kontak-card">
        <b>Catatan:</b>
        <p>
          Simbat merupakan sistem informasi pendukung untuk edukasi dan pemantauan bencana topan.
          Untuk keputusan evakuasi dan kebijakan resmi, selalu ikuti arahan pemerintah dan instansi
          berwenang.
        </p>
      </div>
    </div>
  </section>

  <footer>
    &copy; 2025 SIMBAT – Sistem Informasi Manajemen Bencana Topan. Semua hak dilindungi.
  </footer>


  <script>
    //COUNTER
    const counters = document.querySelectorAll('.counter');

    counters.forEach(counter => {
      const updateCounter = () => {
        const target = +counter.getAttribute('data-target');
        const current = +counter.innerText;
        const increment = target / 200;

        if (current < target) {
          counter.innerText = Math.ceil(current + increment);
          setTimeout(updateCounter, 10);
        } else {
          counter.innerText = target.toLocaleString();
        }
      };
      updateCounter();
    });

   //DROPDOWN 
    const dropdownBtn = document.querySelector('.dropdown-btn');
    const dropdownMenu = document.querySelector('.dropdown-menu');

    dropdownBtn.addEventListener('click', () => {
        dropdownMenu.style.display =
            dropdownMenu.style.display === "block" ? "none" : "block";
    });

    // Klik di luar → tutup
    document.addEventListener('click', function(e){
        if (!dropdownBtn.contains(e.target) && !dropdownMenu.contains(e.target)) {
            dropdownMenu.style.display = "none";
        }
    });
  </script>

</body>
</html>

