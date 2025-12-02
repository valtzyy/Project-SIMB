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
    <!-- KONTENN -->
<div class="container">
  <h2 class="section-title">Mengenal Bencana Angin di Indonesia</h2>
  <p class="section-sub">
    Bencana angin bukan sekadar hembusan kencang yang membuat pepohonan bergoyang.
    Dalam kondisi tertentu, angin dapat berubah menjadi ancaman serius yang merusak rumah,
    infrastruktur, hingga mengganggu keselamatan jiwa. Berikut tiga bentuk bencana angin
    yang paling sering ditemui dan perlu kita waspadai bersama.
  </p>

  <div class="card-grid">
    <div class="m-card">
      <h3>🌬️ Bencana Angin</h3>
      <p>
        Bencana angin adalah kejadian alam ketika hembusan angin bertiup dengan kecepatan
        tinggi dan berpotensi menimbulkan kerusakan di permukaan bumi. Angin kencang ini
        biasanya muncul akibat perbedaan tekanan udara dan perubahan sistem cuaca dalam
        skala tertentu. Meski tidak selalu terlihat mengerikan, bencana angin mampu
        merobohkan bangunan ringan, merusak atap rumah, hingga mengganggu jaringan listrik
        dan komunikasi.
      </p>
    </div>

    <div class="m-card">
      <h3>🌪️ Puting Beliung</h3>
      <p>
        Puting beliung adalah angin kencang yang berputar dengan pusat tekanan sangat rendah,
        bergerak secara lokal dan berlangsung singkat. Fenomena ini sering muncul saat cuaca
        panas disusul awan gelap dan hujan deras. Dalam hitungan menit, puting beliung bisa
        merobohkan rumah, menumbangkan pohon, serta mengakibatkan kerusakan terfokus pada
        satu jalur tertentu. Karena datangnya cepat dan sulit diprediksi, kewaspadaan dan
        respon yang sigap menjadi kunci mengurangi dampaknya.
      </p>
    </div>

    <div class="m-card">
      <h3>🌊 Badai</h3>
      <p>
        Badai adalah sistem cuaca berskala lebih luas yang membawa angin kencang, hujan
        lebat, petir, dan kadang disertai gelombang tinggi di wilayah pesisir. Badai
        terbentuk dari gangguan atmosfer yang kuat dan dapat berlangsung lebih lama
        dibandingkan puting beliung. Dampaknya tidak hanya dirasakan di daratan, tetapi
        juga di laut, seperti terhambatnya jalur pelayaran, rusaknya fasilitas pantai,
        serta meningkatnya risiko banjir dan tanah longsor di kawasan tertentu.
      </p>
    </div>
    <div class="m-card">
      <h3>🌪️ Angin Topan</h3>
      <p>
          Angin topan adalah badai besar yang
          memiliki sistem angin kencang berbentuk
          melingkar atau spiral. Angin topan ini
          biasanya memiliki diameter hingga
          ratusan kilometer. Angin ini berputar di
          sekitar wilayah dengan tekanan atmosfer
          yang rendah. Angin topan adalah
          fenomena cuaca yang bisa menimbulkan
          kerusakan parah di wilayah yang
          dilewatinya. Angin yang berhembus
          dengan kecepatan luar biasa ini dapat
          mengangkat, menerbangkan, dan
          merubuhkan objek apa pun yang ada di
          jalurnya.
      </p>
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
  </script>

</body>
</html>
