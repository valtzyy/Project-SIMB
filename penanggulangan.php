<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SIMBAT - Sistem Informasi Bencana Topan Nasional</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <style>
        /* TAB */
    .tab-container {
        display: flex;
        justify-content: center;
        margin-top: 30px;
        gap: 5px;
    }

    .tab {
        padding: 12px 40px;
        border: none;
        background: #e8eef5;
        font-size: 16px;
        border-radius: 8px;
        cursor: pointer;
        color: #354b6b;
        transition: 0.3s;
    }

    .tab.active {
        background: white;
        font-weight: 600;
        box-shadow: 0 3px 10px rgba(0,0,0,0.08);
    }

    /* SECTION */
    .section-wrapper {
        margin-top: 40px;
        text-align: center;
    }

    .section-title {
        font-size: 32px;
        color: #0e2954;
        font-weight: 700;
    }

    .section-subtitle {
        max-width: 750px;
        margin: 10px auto 40px;
        color: #6c7b8a;
        font-size: 17px;
    }

    /* PREP CARD */
    .prep-card {
        width: 80%;
        margin: 25px auto;
        background: white;
        border-radius: 16px;
        padding: 25px;
        display: flex;
        align-items: center;
        gap: 25px;
        box-shadow: 0 6px 12px rgba(0,0,0,0.05);
        position: relative;
    }

    .icon-box {
        background: #eef4ff;
        padding: 18px;
        border-radius: 12px;
        font-size: 28px;
    }

    .card-content h3 {
        margin: 0;
        font-size: 20px;
        color: #0e2954;
    }

    .card-content p {
        margin-top: 6px;
        color: #51627a;
        font-size: 15px;
    }

    /* NUMBER CIRCLE */
    .card-number {
        position: absolute;
        right: 25px;
        background: #d6efff;
        color: #1e5b82;
        font-weight: bold;
        width: 40px;
        height: 40px;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 50%;
        font-size: 18px;
    }
  </style>

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
        <h1>Penanggulangan Badai Topan</h1>
        <p>Selamatkan Diri dengan Penanggulangan yang Tepat</p>
    </div>
    </header>


    <!-- KONTENN -->
     <div class="tab-container">
    <button class="tab active" onclick="openTab('sebelum')">Sebelum Badai</button>
    <button class="tab" onclick="openTab('saat')">Saat Badai</button>
    <button class="tab" onclick="openTab('sesudah')">Sesudah Badai</button>
    </div>

<!-- ================= SEBELUM BADAI ================= -->
<div class="section-wrapper tab-content" id="sebelum" style="display: block;">
    <h2 class="section-title">Persiapan Sebelum Badai</h2>
    <p class="section-subtitle">
        Kesiapsiagaan adalah kunci keselamatan. Lakukan langkah-langkah ini jauh hari sebelum badai datang.
    </p>

    <div class="prep-card">
        <div class="icon-box">📡</div>
        <div class="card-content">
            <h3>Pantau Informasi Cuaca</h3>
            <p>Ikuti update BMKG, berita, atau aplikasi cuaca. Perhatikan peringatan dini badai atau topan.</p>
        </div>
        <div class="card-number">1</div>
    </div>

    <div class="prep-card">
        <div class="icon-box">📦</div>
        <div class="card-content">
            <h3>Siapkan Tas Siaga Bencana</h3>
            <p>Isi dengan makanan non-perishable, air minum, obat-obatan, senter, baterai, dan dokumen penting.</p>
        </div>
        <div class="card-number">2</div>
    </div>

    <div class="prep-card">
        <div class="icon-box">🏠</div>
        <div class="card-content">
            <h3>Amankan Rumah</h3>
            <p>Perkuat jendela, pintu, dan pindahkan barang yang mudah terbang tertiup angin.</p>
        </div>
        <div class="card-number">3</div>
    </div>
</div>

<!-- ================= SAAT BADAI ================= -->
<div class="section-wrapper tab-content" id="saat">
    <h2 class="section-title">Langkah Saat Badai Terjadi</h2>
    <p class="section-subtitle">
        Saat badai berlangsung, keselamatan diri adalah prioritas utama.
    </p>

    <div class="prep-card">
        <div class="icon-box">⚠️</div>
        <div class="card-content">
            <h3>Tetap di Dalam Rumah</h3>
            <p>Jauhi jendela dan pintu kaca. Cari tempat aman seperti ruangan tengah.</p>
        </div>
        <div class="card-number">1</div>
    </div>

    <div class="prep-card">
        <div class="icon-box">🔦</div>
        <div class="card-content">
            <h3>Gunakan Sumber Cahaya Darurat</h3>
            <p>Gunakan senter, bukan lilin, untuk mencegah kebakaran.</p>
        </div>
        <div class="card-number">2</div>
    </div>

    <div class="prep-card">
        <div class="icon-box">📻</div>
        <div class="card-content">
            <h3>Pantau Informasi Resmi</h3>
            <p>Dengarkan radio atau aplikasi resmi untuk update kondisi terbaru.</p>
        </div>
        <div class="card-number">3</div>
    </div>
</div>

<!-- ================= SESUDAH BADAI ================= -->
<div class="section-wrapper tab-content" id="sesudah">
    <h2 class="section-title">Tindakan Setelah Badai</h2>
    <p class="section-subtitle">
        Setelah badai berlalu, tetap berhati-hati dan pastikan lingkungan aman sebelum beraktivitas.
    </p>

    <div class="prep-card">
        <div class="icon-box">🔍</div>
        <div class="card-content">
            <h3>Periksa Kerusakan</h3>
            <p>Cek kondisi rumah, listrik, dan gas. Jangan sentuh kabel yang terputus.</p>
        </div>
        <div class="card-number">1</div>
    </div>

    <div class="prep-card">
        <div class="icon-box">🚰</div>
        <div class="card-content">
            <h3>Gunakan Air Bersih</h3>
            <p>Pastikan air aman untuk diminum. Gunakan air kemasan jika perlu.</p>
        </div>
        <div class="card-number">2</div>
    </div>

    <div class="prep-card">
        <div class="icon-box">🧹</div>
        <div class="card-content">
            <h3>Bersihkan Lingkungan</h3>
            <p>Hapus puing-puing dengan hati-hati, terutama yang tajam atau berbahaya.</p>
        </div>
        <div class="card-number">3</div>
    </div>
</div>

    <!-- KONTAK DARURAT -->
<div class="emergency-section">
    <h2 class="section-title">Kontak Darurat</h2>
    <p class="section-subtitle">Simpan nomor penting ini untuk keadaan darurat.</p>

    <div class="emergency-grid">

        <div class="emergency-card">
            <div class="em-icon">🚓</div>
            <h4>Polisi</h4>
            <p class="emergency-number">110</p>
        </div>

        <div class="emergency-card">
            <div class="em-icon">🚑</div>
            <h4>Ambulans</h4>
            <p class="emergency-number">119</p>
        </div>

        <div class="emergency-card">
            <div class="em-icon">🔥</div>
            <h4>Pemadam</h4>
            <p class="emergency-number">113</p>
        </div>

        <div class="emergency-card">
            <div class="em-icon">🌊</div>
            <h4>BASARNAS</h4>
            <p class="emergency-number">115</p>
        </div>

    </div>
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

    //TAB
    function openTab(tabName) {
    // sembunyikan semua konten
    document.querySelectorAll(".tab-content").forEach(content => {
        content.style.display = "none";
    });

    // hapus status active di semua tab
    document.querySelectorAll(".tab").forEach(tab => {
        tab.classList.remove("active");
    });

    // tampilkan konten yang dipilih
    document.getElementById(tabName).style.display = "block";

    // tambahkan active pada tombol tab
    event.target.classList.add("active");
    }
  </script>

</body>
</html>
