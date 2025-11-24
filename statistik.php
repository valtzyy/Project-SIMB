<?php include "konek.php";

// ambil data statistik awal
$q = mysqli_query($conn, "SELECT * FROM statistik_umum ORDER BY id DESC LIMIT 1");
$stat = mysqli_fetch_assoc($q);

// grafik tahunan
$q2 = mysqli_query($conn, "SELECT tahun, jumlah_topan FROM frekuensi_tahunan ORDER BY tahun");
$years = [];
$counts = [];

while($row=mysqli_fetch_assoc($q2)){
    $years[] = $row['tahun'];
    $counts[] = $row['jumlah_topan'];
}

// history table
$history = mysqli_query($conn, "SELECT * FROM riwayat_topan");

// kategori donut
$q3 = mysqli_query($conn, "SELECT kategori, jumlah FROM kategori_topan");
$donutLabels = [];
$donutData = [];

while($k=mysqli_fetch_assoc($q3)){
    $donutLabels[] = $k['kategori'];
    $donutData[] = $k['jumlah'];
}

?>


<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Statistik Bencana Topan - SIMBAT</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
  <!-- Leaflet CSS -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
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
        <h1>Statistik Bencana Topan</h1>
        <p>Data kejadian badai dan topan berdasarkan catatan nasional & internasional</p>
    </div>
    </header>


  <br><br>

  <main class="container">

    <!-- Top numbers -->
    <section class="cards-row fade-up">
      <div class="card">
        <div class="label">Total Topan (10 th)</div>
        <div class="value" id="count-storms">0</div>
        <div class="mini">Periode 2014 - 2023</div>
      </div>

      <div class="card">
        <div class="label">Korban Jiwa</div>
        <div class="value" id="count-deaths">0</div>
        <div class="mini">Total dilaporkan</div>
      </div>

      <div class="card">
        <div class="label">Infrastruktur Rusak</div>
        <div class="value" id="count-damage">0</div>
        <div class="mini">Bangunan & fasilitas</div>
      </div>

      <div class="card">
        <div class="label">Estimasi Kerugian</div>
        <div class="value" id="count-loss">$0</div>
        <div class="mini">USD (estimasi)</div>
      </div>
    </section>

    <!-- Main content -->
    <section class="main-grid">

      <!-- left: charts + table -->
      <div>
        <div class="panel fade-up">
          <h3>Frekuensi Topan Tahunan</h3>
          <div class="chart-wrap"><canvas id="chartLine"></canvas></div>
        </div>

        <div class="panel fade-up" style="margin-top:18px;">
          <h3>Distribusi Kategori Topan</h3>
          <div class="chart-wrap"><canvas id="chartDonut"></canvas></div>
        </div>

        <div class="panel fade-up" style="margin-top:18px;">
          <h3>Riwayat Topan (Contoh)</h3>
          <table>
            <thead>
              <tr><th>Nama</th><th>Tahun</th><th>Kategori</th><th>Dampak</th></tr>
            </thead>
            <tbody id="history-body">
              <!-- rows inserted by JS -->
            </tbody>
          </table>
        </div>
      </div>

      <!-- right: small stats + map -->
      <aside class="side-stack">

        <div class="small-card fade-up">
          <h4>Rata-rata Topan / Tahun</h4>
          <p id="avg-per-year">—</p>
        </div>

        <div class="small-card fade-up">
          <h4>Top 3 Wilayah Terdampak</h4>
          <p id="top-regions">—</p>
        </div>

        <div class="panel fade-up" style="padding:12px;">
          <h3>Peta Dampak</h3>
          <div id="map"></div>
        </div>

      </aside>

    </section>


  </main>

    <footer>
    &copy; 2025 SIMBAT – Sistem Informasi Manajemen Bencana Topan. Semua hak dilindungi.
  </footer>
  

  <!-- Dependencies -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>
  <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

  <script>
  // ========== SAMPLE DATA ==========
 const data = {
  totalStorms: <?= $stat['total_topan'] ?>,
  deaths: <?= $stat['korban_jiwa'] ?>,
  damagedInfra: <?= $stat['infrastruktur_rusak'] ?>,
  lossesUSD: <?= $stat['kerugian_usd'] ?>,
  yearly: {
    years: <?= json_encode($years) ?>,
    counts: <?= json_encode($counts) ?>
  },
  categoryDistribution: {
      labels: <?= json_encode($donutLabels) ?>,
      values: <?= json_encode($donutData) ?>
  }
};
const historyData = [
  <?php while($row=mysqli_fetch_assoc($history)): ?>
    {
      name: "<?= $row['nama'] ?>",
      year: <?= $row['tahun'] ?>,
      category: "<?= $row['kategori'] ?>",
      impact: "<?= $row['dampak'] ?>"
    },
  <?php endwhile; ?>
];
<footer>
  &copy; 2025 SIMBAT – Sistem Informasi Manajemen Bencana Topan. Semua hak dilindungi.
</footer>

<script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
<script src="statistik.js"></script>

</body>
</html>
