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
        <h1>Mitigasi Bencana Topam</h1>
        <p>Upaya untuk mengurangi risiko dan dampak bencana topan</p>
    </div>
    </header>


    <!-- KONTENN -->
     <div class="container">

  <!--PENGERTIAN MITIGASI-->
  <h2 class="section-title">Apa Itu Mitigasi?</h2>
  <p class="section-sub">
    Mitigasi bencana adalah serangkaian upaya untuk mengurangi risiko dan dampak
    bencana melalui perencanaan, pembangunan, edukasi, dan penguatan sistem.
  </p>

  <div class="card-grid">
    <div class="m-card">
      <h3>Definisi Mitigasi</h3>
      <p>
        Mitigasi merupakan langkah jangka panjang untuk mengurangi potensi bahaya
        dan dampak bencana melalui upaya fisik maupun non-fisik.
      </p>
    </div>

    <div class="m-card">
      <h3>Tujuan Utama</h3>
      <p>
        Melindungi nyawa, mengurangi kerusakan infrastruktur, memperkuat sistem
        kesiapsiagaan, serta meningkatkan ketahanan masyarakat.
      </p>
    </div>
  </div><br><br>


  <!--MITIGASI STRUKTURAL-->
  <h2 class="section-title" style="margin-top:50px;">Mitigasi Struktural</h2>
  <p class="section-sub">
    Upaya fisik untuk mengurangi dampak bencana melalui pembangunan dan rekayasa teknis.
  </p>

  <div class="card-grid">

    <div class="m-card">
      <h3>Bangunan Tahan Angin</h3>
      <p>
        Menggunakan material kuat, rangka tahan angin, serta struktur yang dirancang
        menahan kecepatan angin ekstrem.
      </p>
    </div>

    <div class="m-card">
      <h3>Perbaikan Drainase</h3>
      <p>
        Pembuatan kanal air, selokan dalam, dan pintu air untuk mengurangi risiko
        banjir yang sering terjadi saat topan.
      </p>
    </div>

    <div class="m-card">
      <h3>Vegetasi & Penahan Angin</h3>
      <p>
        Menanam pohon besar, windbreak, serta barier alami untuk mengurangi hembasan
        angin kuat.
      </p>
    </div>

    <div class="m-card">
      <h3>Sistem Peringatan Dini</h3>
      <p>
        Radar cuaca, sensor angin, satelit, dan sistem alarm peringatan dini untuk
        mendeteksi topan lebih awal.
      </p>
    </div>

  </div><br><br>


  <!-- MITIGASI NON STRUKTURAL -->
  <h2 class="section-title" style="margin-top:50px;">Mitigasi Non-Struktural</h2>
  <p class="section-sub">
    Langkah non-fisik seperti edukasi, kebijakan, pelatihan, dan manajemen risiko.
  </p>

  <div class="card-grid">

    <div class="m-card">
      <h3>Edukasi & Sosialisasi</h3>
      <p>
        Memberikan pengetahuan kepada masyarakat mengenai bahaya topan,
        jalur evakuasi, dan tindakan keselamatan.
      </p>
    </div>

    <div class="m-card">
      <h3>Regulasi Pemerintah</h3>
      <p>
        Penetapan zona rawan, aturan pembangunan, tata ruang kota, serta
        pencegahan pembangunan di wilayah berisiko.
      </p>
    </div>

    <div class="m-card">
      <h3>Simulasi & Latihan</h3>
      <p>
        Melaksanakan latihan evakuasi, tanggap darurat, dan simulasi bencana
        di sekolah, kantor, serta desa.
      </p>
    </div>

    <div class="m-card">
      <h3>Manajemen Risiko</h3>
      <p>
        Melakukan pemetaan bahaya, analisis risiko, dan penyusunan dokumen
        rencana kontinjensi.
      </p>
    </div>

  </div><br><br>


  <!-- PERAN MITIGASI-->
  <h2 class="section-title" style="margin-top:50px;">Peran Dalam Mitigasi</h2>
  <p class="section-sub">
    Mitigasi berhasil bila dilakukan bersama–sama oleh pemerintah, masyarakat,
    lembaga, dan komunitas lokal.
  </p>

  <div class="card-grid">

    <div class="m-card">
      <h3>Peran Pemerintah</h3>
      <p>
        Menyusun kebijakan, membangun infrastruktur, peringatan dini, dan
        merancang rencana penanggulangan bencana nasional.
      </p>
    </div>

    <div class="m-card">
      <h3>Peran Masyarakat</h3>
      <p>
        Menyiapkan perlengkapan darurat, memahami jalur evakuasi, mengikuti
        pelatihan kesiapsiagaan, dan memperkuat rumah masing-masing.
      </p>
    </div>

    <div class="m-card">
      <h3>Peran Lembaga Swasta</h3>
      <p>
        Memberikan pendanaan, logistik, edukasi CSR, serta membangun budaya
        keselamatan di lingkungan kerja.
      </p>
    </div>

    <div class="m-card">
      <h3>Peran Komunitas</h3>
      <p>
        Membentuk kelompok siaga bencana, membantu evakuasi, dan melakukan
        pemetaan risiko di tingkat desa atau kelurahan.
      </p>
    </div>

  </div><br><br>

</div>


  
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
