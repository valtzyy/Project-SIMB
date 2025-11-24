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
        <h1>Pengertian Badai Topan</h1>
        <p>Memahami definisi dan karakteristik badai serta topan</p>
    </div>
    </header>


    <!-- KONTENN -->
  <section class="section-kontak" id="kontak">
  <div class="kontak-inner">

    <div class="definition-card">
      <h2>Definisi Bencana Angin</h2>
      <p>
        Bencana angin adalah peristiwa hidrometeorologis berupa angin kencang yang memiliki kecepatan sangat tinggi 
        dan dapat menyebabkan kerusakan besar pada bangunan, tumbuhan serta membahayakan keselamatan manusia. 
        Angin ini biasanya terjadi karena adanya tekanan udara yang membentuk pusaran dalam sistem cuaca, sering 
        terjadi di masa peralihan musim atau di wilayah tropis tertentu.
      </p>
    </div>
  </section>
      <h2>Definisi Badai</h2>
      <p>
        Secara ilmiah, badai (storm dalam bahasa Inggris, Latin modern: tempestas) adalah fenomena atmosfer yang 
        ditandai dengan kondisi cuaca ekstrem berupa hembusan angin kencang, curah hujan deras, petir, salju, atau 
        kombinasi dari unsur-unsur tersebut. Badai terbentuk karena adanya perbedaan tekanan udara yang besar dalam 
        suatu wilayah sehingga menimbulkan aliran angin kuat dan gangguan cuaca.
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
