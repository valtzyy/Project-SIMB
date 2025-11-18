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
        <h1>Jenis Badai Topan</h1>
        <p>Klasifikasi berbagai tipe badai</p>
    </div>
    </header>


    <!-- KONTENN -->
     <section class="intensity-section">
    <h2 class="intensity-title">Skala Intensitas Badai</h2>
    <p class="intensity-subtitle">
        Berdasarkan Skala Saffir–Simpson untuk hurikan dan klasifikasi serupa untuk topan
    </p>
</section>

    <section class="intensity-wrapper">

    <!-- ===== DEPRESI TROPIS ===== -->
    <div class="intensity-card">
        <div class="icon-area">
            <img src="icons/depresi.png" alt="Depresi Tropis">
        </div>

        <div class="info-area">

            <div class="header-row">
                <h2 class="title">Depresi Tropis</h2>
                <span class="badge green">Rendah</span>
                <span class="badge gray">&lt; 63 km/jam</span>
            </div>

            <p class="desc">
                Sistem tekanan rendah dengan angin lemah dan awan berputar.
            </p>

            <div class="content-split">
                <div class="left">
                    <h4>Karakteristik:</h4>
                    <ul>
                        <li>Angin &lt; 63 km/jam</li>
                        <li>Curah hujan sedang hingga lebat</li>
                        <li>Awan mulai berputar</li>
                        <li>Belum memiliki mata badai</li>
                    </ul>
                </div>

                <div class="right">
                    <h4 class="danger">Potensi Kerusakan:</h4>
                    <p>Dampak minimal – gangguan cuaca ringan.</p>
                </div>
            </div>

        </div>
    </div>

    <!-- ===== BADAI TROPIS ===== -->
    <div class="intensity-card">
        <div class="icon-area">
            <img src="icons/badai.png" alt="Badai Tropis">
        </div>

        <div class="info-area">

            <div class="header-row">
                <h2 class="title">Badai Tropis</h2>
                <span class="badge yellow">Sedang</span>
                <span class="badge gray">63 – 118 km/jam</span>
            </div>

            <p class="desc">
                Sistem badai tropis dengan angin kuat dan pola awan berputar jelas.
            </p>

            <div class="content-split">
                <div class="left">
                    <h4>Karakteristik:</h4>
                    <ul>
                        <li>Kecepatan angin 63–118 km/jam</li>
                        <li>Hujan lebat dan luas</li>
                        <li>Awan spiral mulai terorganisir</li>
                        <li>Mata badai samar mulai terbentuk</li>
                    </ul>
                </div>

                <div class="right">
                    <h4 class="danger">Potensi Kerusakan:</h4>
                    <p>Kerusakan ringan – pohon tumbang & banjir lokal.</p>
                </div>
            </div>

        </div>
    </div>

    <!-- ===== TOPAN KATEGORI 1 ===== -->
    <div class="intensity-card">
        <div class="icon-area">
            <img src="icons/kat1.png" alt="Kategori 1">
        </div>

        <div class="info-area">

            <div class="header-row">
                <h2 class="title">Topan Kategori 1</h2>
                <span class="badge yellow">Sedang</span>
                <span class="badge gray">119 – 153 km/jam</span>
            </div>

            <p class="desc">
                Topan dengan kekuatan angin yang mulai menyebabkan kerusakan struktural ringan.
            </p>

            <div class="content-split">
                <div class="left">
                    <h4>Karakteristik:</h4>
                    <ul>
                        <li>Angin 119–153 km/jam</li>
                        <li>Mata badai terlihat</li>
                        <li>Awan spiral teratur</li>
                        <li>Gelombang mulai meninggi</li>
                    </ul>
                </div>

                <div class="right">
                    <h4 class="danger">Potensi Kerusakan:</h4>
                    <p>Kerusakan ringan – atap rusak & pohon tumbang.</p>
                </div>
            </div>

        </div>
    </div>

    <!-- ===== TOPAN KATEGORI 2 ===== -->
    <div class="intensity-card">
        <div class="icon-area">
            <img src="icons/kat2.png" alt="Kategori 2">
        </div>

        <div class="info-area">

            <div class="header-row">
                <h2 class="title">Topan Kategori 2</h2>
                <span class="badge yellow">Sedang</span>
                <span class="badge gray">154 – 177 km/jam</span>
            </div>

            <p class="desc">
                Topan kuat dengan angin kencang yang mampu merusak bangunan ringan.
            </p>

            <div class="content-split">
                <div class="left">
                    <h4>Karakteristik:</h4>
                    <ul>
                        <li>Angin 154–177 km/jam</li>
                        <li>Mata badai lebih jelas</li>
                        <li>Hujan sangat lebat</li>
                        <li>Gelombang tinggi</li>
                    </ul>
                </div>

                <div class="right">
                    <h4 class="danger">Potensi Kerusakan:</h4>
                    <p>Banyak pohon tumbang, atap rusak parah.</p>
                </div>
            </div>

        </div>
    </div>

    <!-- ===== TOPAN KATEGORI 3 ===== -->
    <div class="intensity-card">
        <div class="icon-area">
            <img src="icons/kat3.png" alt="Kategori 3">
        </div>

        <div class="info-area">

            <div class="header-row">
                <h2 class="title">Topan Kategori 3</h2>
                <span class="badge red">Tinggi</span>
                <span class="badge gray">178 – 208 km/jam</span>
            </div>

            <p class="desc">
                Topan besar yang dapat menyebabkan kerusakan struktural serius.
            </p>

            <div class="content-split">
                <div class="left">
                    <h4>Karakteristik:</h4>
                    <ul>
                        <li>Angin 178–208 km/jam</li>
                        <li>Gelombang sangat besar</li>
                        <li>Pohon besar tumbang</li>
                        <li>Hujan ekstrem dan banjir parah</li>
                    </ul>
                </div>

                <div class="right">
                    <h4 class="danger">Potensi Kerusakan:</h4>
                    <p>Kerusakan besar – rumah rusak berat, banjir luas.</p>
                </div>
            </div>

        </div>
    </div>

    <!-- ===== TOPAN KATEGORI 4 ===== -->
    <div class="intensity-card">
        <div class="icon-area">
            <img src="icons/kat4.png" alt="Kategori 4">
        </div>

        <div class="info-area">

            <div class="header-row">
                <h2 class="title">Topan Kategori 4</h2>
                <span class="badge red">Tinggi</span>
                <span class="badge gray">209 – 251 km/jam</span>
            </div>

            <p class="desc">
                Topan sangat kuat dengan potensi kerusakan luas pada infrastruktur.
            </p>

            <div class="content-split">
                <div class="left">
                    <h4>Karakteristik:</h4>
                    <ul>
                        <li>Angin 209–251 km/jam</li>
                        <li>Gelombang ekstrem</li>
                        <li>Kerusakan struktural signifikan</li>
                        <li>Longsor & banjir besar</li>
                    </ul>
                </div>

                <div class="right">
                    <h4 class="danger">Potensi Kerusakan:</h4>
                    <p>Kerusakan sangat besar – wilayah bisa lumpuh total.</p>
                </div>
            </div>

        </div>
    </div>

    <!-- ===== TOPAN KATEGORI 5 ===== -->
    <div class="intensity-card">
        <div class="icon-area">
            <img src="icons/kat5.png" alt="Kategori 5">
        </div>

        <div class="info-area">

            <div class="header-row">
                <h2 class="title">Topan Kategori 5</h2>
                <span class="badge red">Ekstrem</span>
                <span class="badge gray">&gt; 252 km/jam</span>
            </div>

            <p class="desc">
                Tingkat tertinggi topan dengan angin yang sangat merusak.
            </p>

            <div class="content-split">
                <div class="left">
                    <h4>Karakteristik:</h4>
                    <ul>
                        <li>Angin &gt; 252 km/jam</li>
                        <li>Kerusakan total pada bangunan</li>
                        <li>Gelombang raksasa & badai ekstrem</li>
                        <li>Banjir dahsyat & kehancuran luas</li>
                    </ul>
                </div>

                <div class="right">
                    <h4 class="danger">Potensi Kerusakan:</h4>
                    <p>Bencana besar – kerusakan masif dan evakuasi wajib.</p>
                </div>
            </div>

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
