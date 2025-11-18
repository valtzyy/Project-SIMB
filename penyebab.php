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
            <li><a href="#kontak">Kontak</a></li>
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
        <h1>Penyebab Badai Topan</h1>
        <p>Memahami faktor-faktor alam yang memicu pembentukan fenomena cuaca ekstrem</p>
    </div>
    </header>

      <!-- PENYEBAB -->
     <!-- INFO TOPAN -->
  <section class="section-info" id="info">

  <h2>Faktor Faktor Utama</h2>

  <div class="cards">

    <div class="card">
      <h3>Perubahan Tekanan Udara</h3>
      <p>Badai sering terjadi ketika terjadi perbedaan tekanan udara yang signifikan antara dua wilayah. Udara dari daerah bertekanan tinggi bergerak cepat menuju daerah bertekanan rendah, menciptakan angin kencang dan pusaran. Ketika perbedaan tekanan ini sangat besar, angin menjadi semakin kuat dan membentuk badai      </p>
    </div>

    <div class="card">
      <h3>Pemanasan Permukaan Laut</h3>
      <p>
        Temperatur permukaan laut yang tinggi (biasanya ≥26,5°C) menyebabkan penguapan air laut meningkat. Uap air yang naik ke atmosfer akan mengembun, melepas energi panas (latent heat), dan memperkuat sistem tekanan rendah yang kemudian dapat berkembang menjadi badai tropis atau bahkan topan. Semakin hangat lautan, semakin besar potensi badai terjadi.
      </p>
    </div>

    <div class="card">
      <h3>Kelembapan Tinggi</h3>
      <p>Udara yang kaya uap air memberikan energi tambahan bagi pembentukan awan badai (cumulonimbus). Ketika uap air dalam jumlah besar naik dan mengembun pada lapisan atmosfer, proses ini dapat memicu hujan lebat, kilat, dan angin kencang. Kelembapan tinggi di atmosfer rendah hingga menengah memperkuat sistem badai.</p>
    </div>

    <div class="card">
      <h3>Gaya Coriolis yang Cukup</h3>
      <p>
        Rotasi bumi menyebabkan angin bergerak melengkung saat menuju daerah bertekanan rendah, membentuk pusaran badai. Di belahan bumi utara pusaran berlawanan arah jarum jam, sedangkan di selatan searah jarum jam. Tanpa efek Coriolis, badai tropis tidak akan terbentuk. Karena itu badai tidak terjadi tepat di garis khatulistiwa.
      </p>
    </div>

    <div class="card">
      <h3>Gangguan Atmosfer</h3>
      <p>
        Jika suhu permukaan bumi sangat panas sementara lapisan udara di atasnya lebih dingin, terjadi ketidakstabilan atmosfer. Udara hangat cepat naik ke atas dan bertemu dengan udara dingin, menyebabkan turbulensi dan dapat memicu badai petir, bahkan tornado jika kondisi mendukung.
      </p>
    </div>

    <div class="card">
      <h3>Angin Lapis Atmosfer(Wind Shear)</h3>
      <p>
        Dalam meteorologi, "wind shear" adalah perubahan arah atau kecepatan angin pada ketinggian berbeda. Wind shear yang tepat dapat membantu badai berkembang dengan membentuk rotasi vertikal pada massa udara. Namun jika terlalu kuat, justru bisa merusak struktur badai. Di wilayah tropis, wind shear moderat mendukung pembentukan badai.
    </div>

  </div>
  </section>

    <!--PROSES-->
    <section class="proses-section">
    <h2 class="proses-title">Proses Pembentukan</h2>

    <div class="step">
        <div class="step-number">1</div>
        <div class="step-content">
            <h3>Pemanasan dan Penguapan</h3>
            <p>
                 Air laut yang hangat menguap dan udara lembap naik dengan cepat.
            </p>
        </div>
    </div>

    <div class="step">
        <div class="step-number">2</div>
        <div class="step-content">
            <h3>Pembentukan Tekanan Rendah</h3>
            <p>
                 Udara hangat yang naik menciptakan area tekanan udara rendah di permukaan.
            </p>
        </div>
    </div>

    <div class="step">
        <div class="step-number">3</div>
        <div class="step-content">
            <h3>Perputaran Udara</h3>
            <p>
                Udara dingin dari area sekitar bertekanan lebih tinggi mengalir masuk ke area tekanan rendah, lalu ikut naik dan mendingin. Perputaran ini dipengaruhi oleh Gaya Coriolis (rotasi Bumi), sehingga membentuk pusaran.
            </p>
        </div>
    </div>

    <div class="step">
        <div class="step-number">4</div>
        <div class="step-content">
            <h3>Pembentukan Awan</h3>
            <p>
                Saat udara hangat mendingin, uap airnya mengembun membentuk awan besar seperti cumulonimbus.
            </p>
        </div>
    </div>

    <div class="step">
        <div class="step-number">5</div>
        <div class="step-content">
            <h3>Pembentukan Awan</h3>
            <p>
                Saat udara hangat mendingin, uap airnya mengembun membentuk awan besar seperti cumulonimbus.
            </p>
        </div>
    </div>

    <div class="step">
        <div class="step-number">6</div>
        <div class="step-content">
            <h3>Peningkatan Intensitas</h3>
            <p>
                Proses ini terus berlanjut, menarik lebih banyak udara lembap dan panas, yang memperkuat sistem pusaran angin dan awan.
            </p>
        </div>
    </div>

    <div class="step">
        <div class="step-number">7</div>
        <div class="step-content">
            <h3>Terbentuknya "Mata" Badai</h3>
            <p>
                Di pusat badai yang berputar sangat cepat, tercipta area yang tenang dan bebas awan bertekanan sangat rendah yang disebut "mata" topan.
            </p>
        </div>
    </div>

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
