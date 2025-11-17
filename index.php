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

  <!-- NAVBAR -->
  <nav class="navbar">
    <div class="container">
      <a class="navbar-brand" href="#">SIMBAT</a>

      <ul class="nav-links">
        <li><a href="#home">Beranda</a></li>
        <li><a href="#info">Info Topan</a></li>
        <li><a href="statistik.php">Statistik</a></li>
        <li><a href="mitigasi.php">Mitigasi</a></li>
        <li><a href="#kontak">Kontak</a></li>
      </ul>

      <div class="menu-icon" id="menu-icon">
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
      </div>
    </div>
  </nav>


  <!-- BERANDA -->
   <section class="content" id="home">
    <div class="hero-container fade-in">
      <h1>Sistem Informasi Bencana Topan Nasional</h1>
      <p>
        Pemantauan topan real-time, edukasi bencana, statistik nasional, peta interaktif,
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


  <!-- INFO TOPAN -->
  <section class="section-info" id="info">
>
  <h2>Informasi Lengkap Tentang Topan</h2>

  <div class="cards">

    <div class="card">
      <h3>Pengertian Topan</h3>
      <p>
        Topan adalah badai tropis kuat yang terbentuk di atas lautan hangat
        dengan pusat tekanan rendah dan angin berputar kencang lebih dari 
        119 km/jam. Topan dapat membawa hujan lebat, badai petir, dan gelombang tinggi.
      </p>
    </div>

    <div class="card">
      <h3>Proses Terbentuknya</h3>
      <p>
        • Suhu permukaan laut ≥ 26.5°C<br>
        • Udara hangat naik membentuk tekanan rendah<br>
        • Efek Coriolis memutar awan<br>
        • Kelembapan tinggi membentuk awan Cumulonimbus besar
      </p>
    </div>

    <div class="card">
      <h3>Penyebab Utama</h3>
      <p>
        • Pemanasan global<br>
        • Tekanan udara ekstrem<br>
        • Angin monsun kuat<br>
        • Interaksi udara hangat & dingin
      </p>
    </div>

    <div class="card">
      <h3>Jenis-Jenis Topan</h3>
      <p>
        • Tropical Depression<br>
        • Tropical Storm<br>
        • Typhoon / Hurricane<br>
        • Super Typhoon (≥ 220 km/jam)
      </p>
    </div>

    <div class="card">
      <h3>Dampak Topan</h3>
      <p>
        • Banjir & gelombang badai<br>
        • Infrastruktur rusak<br>
        • Pemadaman listrik<br>
        • Longsor & pohon tumbang<br>
        • Risiko keselamatan manusia
      </p>
    </div>

    <div class="card">
      <h3>Mitigasi & Pencegahan</h3>
      <p>
        • Peringatan dini<br>
        • Edukasi masyarakat<br>
        • Evakuasi cepat<br>
        • Infrastruktur tahan badai<br>
        • Pantau BMKG secara berkala
      </p>
    </div>

    <div class="card">
      <h3>Langkah Saat Terjadi Topan</h3>
      <p>
        • Tetap di tempat aman<br>
        • Matikan listrik bila banjir<br>
        • Hindari area pantai & jembatan<br>
        • Ikuti instruksi BPBD<br>
        • Siapkan tas darurat
      </p>
    </div>

    <div class="card">
      <h3>Topan di Indonesia</h3>
      <p>
        Indonesia tidak berada pada jalur utama topan, namun wilayah timur 
        (NTT, Maluku, Papua) sering terdampak lintasan topan dari Pasifik.
        Contoh: Seroja, Cempaka, Noru.
      </p>
    </div>

  </div>
  </section>



  <!-- GALERI -->
  <section class="section-galeri" id="galeri">
    <h2>Galeri Bencana Topan</h2>
    <div class="galeri-grid">
      <div class="galeri-item">
        <img src="assets/galeri/topan1.jpg" alt="Kerusakan infrastruktur">
        <div class="overlay"><span>Kerusakan Infrastruktur</span></div>
      </div>
      <div class="galeri-item">
        <img src="assets/galeri/topan2.jpg" alt="Banjir akibat topan">
        <div class="overlay"><span>Banjir Akibat Topan</span></div>
      </div>
      <div class="galeri-item">
        <img src="assets/galeri/topan3.jpg" alt="Evakuasi masyarakat">
        <div class="overlay"><span>Evakuasi Masyarakat</span></div>
      </div>
      <div class="galeri-item">
        <img src="assets/galeri/topan4.jpg" alt="Kerusakan permukiman">
        <div class="overlay"><span>Kerusakan Permukiman</span></div>
      </div>
      <div class="galeri-item">
        <img src="assets/galeri/topan5.jpg" alt="Gelombang tinggi">
        <div class="overlay"><span>Gelombang Tinggi & Pesisir</span></div>
      </div>
      <div class="galeri-item">
        <img src="assets/galeri/topan6.jpg" alt="Tanggap darurat">
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

  <!-- COUNTER -->
  <script>
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
  </script>

</body>
</html>

