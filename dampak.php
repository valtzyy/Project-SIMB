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
            <li><a href="index.php">Kontak</a></li>
        </ul>
      </div>
  </nav>

   <header class="hero">

    <!-- Floating Clouds -->
    <img src="assets/awan.png" class="cloud c1">
    <img src="assets/awan.png" class="cloud c2">
    <img src="assets/awan.png" class="cloud c3">
    <img src="assets/awan.png" class="cloud c4">
    <img src="assets/awan.png" class="cloud c5">
    <img src="assets/awan.png" class="cloud c6">

    <!-- Overlay -->
    <div class="hero-overlay"></div>

    <!-- Content -->
    <div class="hero-content">
        <h1>Dampak Badai Topan</h1>
        <p>Konsekuensi luas bencana badai terhadap kehidupan, ekonomi, infrastruktur, dan lingkungan</p>
    </div>
    </header>


    <!-- KONTENN -->
     <!-- DESCRIPTION -->
<div class="impact-desc">
    Badai dan topan menimbulkan dampak multidimensi yang tidak hanya terbatas pada saat kejadian,
    namun juga berlanjut dalam jangka waktu panjang. Memahami berbagai dampak ini penting untuk
    perencanaan mitigasi, respons darurat, dan pemulihan pascabencana.
</div>

<!-- DAMPAK SOSIAL -->
<section class="impact-section">
    <div class="impact-title">
        <div class="icon-box-impact">👥</div>
        <h2>Dampak Sosial</h2>
    </div>

    <div class="impact-grid">
        <div class="impact-card">
            <h3>Korban Jiwa dan Luka-luka</h3>
            <p>Akibat angin kencang, banjir, reruntuhan, banyak masyarakat mengalami luka berat hingga kehilangan nyawa.</p>
        </div>

        <div class="impact-card">
            <h3>Pengungsian Massal</h3>
            <p>Jutaan warga harus mengungsi ke tempat aman karena rumah rusak atau terendam banjir.</p>
        </div>
    </div>
</section>

<!-- DAMPAK EKONOMI -->
<section class="impact-section">
    <div class="impact-title">
        <div class="icon-box-impact">💰</div>
        <h2>Dampak Ekonomi</h2>
    </div>

    <div class="impact-grid">
        <div class="impact-card">
            <h3>Kerugian Properti & Infrastruktur</h3>
            <p>Rumah, bangunan, usaha kecil, dan fasilitas umum mengalami kerusakan berat.</p>
        </div>

        <div class="impact-card">
            <h3>Gangguan Aktivitas Ekonomi</h3>
            <p>Transportasi terhenti, pasar ditutup, dan aktivitas regional lumpuh selama berhari-hari.</p>
        </div>
    </div>
</section>

<!-- DAMPAK INFRASTRUKTUR -->
<section class="impact-section">
    <div class="impact-title">
        <div class="icon-box-impact">🏗️</div>
        <h2>Dampak Infrastruktur</h2>
    </div>

    <div class="impact-grid">
        <div class="impact-card">
            <h3>Kerusakan Jalan & Jembatan</h3>
            <p>Banjir dan longsor merusak jalur transportasi utama sehingga memutus akses.</p>
        </div>

        <div class="impact-card">
            <h3>Gangguan Kelistrikan</h3>
            <p>Jaringan listrik padam akibat tiang tumbang dan gardu rusak.</p>
        </div>
    </div>
</section>

<!-- DAMPAK LINGKUNGAN -->
<section class="impact-section">
    <div class="impact-title">
        <div class="icon-box-impact">🌿</div>
        <h2>Dampak Lingkungan</h2>
    </div>

    <div class="impact-grid">
        <div class="impact-card">
            <h3>Kerusakan Ekosistem</h3>
            <p>Badai menghancurkan hutan pesisir, terumbu karang, dan habitat satwa liar.</p>
        </div>

        <div class="impact-card">
            <h3>Pencemaran Air & Tanah</h3>
            <p>Banjir membawa limbah, sampah, dan bahan kimia berbahaya yang mengkontaminasi lingkungan.</p>
        </div>
    </div>
</section>

<!-- DAMPAK KESEHATAN -->
<section class="impact-section">
    <div class="impact-title">
        <div class="icon-box-impact">🩺</div>
        <h2>Dampak Kesehatan</h2>
    </div>

    <div class="impact-grid">
        <div class="impact-card">
            <h3>Peningkatan Penyakit</h3>
            <p>Sanitasi buruk meningkatkan risiko diare, leptospirosis, ISPA, dan infeksi kulit.</p>
        </div>

        <div class="impact-card">
            <h3>Gangguan Psikologis</h3>
            <p>Trauma, kecemasan, hingga PTSD banyak dialami korban pascabencana.</p>
        </div>
    </div>
</section>

<!-- DAMPAK JANGKA PANJANG -->
<section class="impact-section">
    <div class="impact-title">
        <div class="icon-box-impact">⏳</div>
        <h2>Dampak Jangka Panjang</h2>
    </div>

    <div class="impact-grid">
        <div class="impact-card">
            <h3>Ketidakstabilan Ekonomi</h3>
            <p>Pemulihan memakan waktu lama dan dapat menimbulkan kemiskinan baru.</p>
        </div>

        <div class="impact-card">
            <h3>Perubahan Lingkungan Permanen</h3>
            <p>Pesisir rusak, erosi meningkat, dan pola cuaca berubah secara signifikan.</p>
        </div>
    </div>
</section>

<!-- CLOSING -->
<section class="closing-section">
    <h2>Memahami Dampak, Meningkatkan Kesiapsiagaan</h2>
    <p>Meningkatkan kesiapsiagaan adalah langkah penting untuk mengurangi risiko 
       dan melindungi masyarakat dari bahaya badai dan topan.</p>

    <a href="mitigasi.php" class="cta-button">Pelajari Mitigasi Badai →</a>
</section>






  
  <footer>
    &copy; 2025 SIMBAT – Sistem Informasi Manajemen Bencana Topan. Semua hak dilindungi.
  </footer>
  
  <script>
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
