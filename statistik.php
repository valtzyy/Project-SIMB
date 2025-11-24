<?php 
// PASTIKAN FILE konek.php ADA DAN KONEKSI DATABASE BERHASIL
include "konek.php";

// Ambil data statistik awal
// Tambahkan pengecekan error untuk debug koneksi/query
$q = mysqli_query($conn, "SELECT * FROM statistik_umum ORDER BY id DESC LIMIT 1") 
    or die("Error query statistik_umum: " . mysqli_error($conn));

// Fetch data, gunakan nilai default 0 jika tidak ada baris ditemukan
$stat = mysqli_fetch_assoc($q);
if (!$stat) {
    // Jika tabel kosong, set nilai default agar JS tidak error
    $stat = [
        'total_topan' => 0, 
        'korban_jiwa' => 0, 
        'infrastruktur_rusak' => 0, 
        'kerugian_usd' => 0
    ];
}


// Grafik tahunan
$q2 = mysqli_query($conn, "SELECT tahun, jumlah_topan FROM frekuensi_tahunan ORDER BY tahun")
    or die("Error query frekuensi_tahunan: " . mysqli_error($conn));
$years = [];
$counts = [];

while($row=mysqli_fetch_assoc($q2)){
    // Pastikan data adalah integer, atau set 0 jika null/kosong
    $years[] = (int)$row['tahun']; 
    $counts[] = (int)$row['jumlah_topan'];
}

// History table
$history = mysqli_query($conn, "SELECT * FROM riwayat_topan")
    or die("Error query riwayat_topan: " . mysqli_error($conn));


// Kategori donut
$q3 = mysqli_query($conn, "SELECT kategori, jumlah FROM kategori_topan")
    or die("Error query kategori_topan: " . mysqli_error($conn));
$donutLabels = [];
$donutData = [];

while($k=mysqli_fetch_assoc($q3)){
    $donutLabels[] = $k['kategori'];
    // Pastikan data adalah integer, atau set 0 jika null/kosong
    $donutData[] = (int)$k['jumlah'];
}

// Rewind history result set untuk digunakan di dalam array JS
mysqli_data_seek($history, 0); 
$historyDataArray = [];
while($row=mysqli_fetch_assoc($history)){
    $historyDataArray[] = [
        'name' => $row['nama'],
        'year' => (int)$row['tahun'],
        'category' => $row['kategori'],
        'impact' => $row['dampak']
    ];
}

?>


<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Statistik Bencana Topan - SIMBAT</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
  <link rel="stylesheet" href="style.css">
</head>
<body>
  
  <nav class="navbar">
    <div class="nav-container">

        <div class="nav-left">
            <img src="assets/logo.png" class="nav-logo" alt="Logo">
            <a href="#" class="navbar-brand">SIMBAT</a>
        </div>

        <ul class="nav-links">
            <li><a href="index.php">Beranda</a></li>

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

    <img src="assets/awan.png" class="cloud c1">
    <img src="assets/awan.png" class="cloud c2">
    <img src="assets/awan.png" class="cloud c3">
    <img src="assets/awan.png" class="cloud c4">
    <img src="assets/awan.png" class="cloud c5">
    <img src="assets/awan.png" class="cloud c6">

    <div class="hero-overlay"></div>

    <div class="hero-content">
        <h1>Statistik Bencana Topan</h1>
        <p>Data kejadian badai dan topan berdasarkan catatan nasional & internasional</p>
    </div>
    </header>


  <br><br>

  <main class="container">

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

    <section class="main-grid">

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
              </tbody>
          </table>
        </div>
      </div>

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
  

  <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>
  <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

  <script>
  // ==========================================================
  // 1. DATA PHP DIKONVERSI KE JAVASCRIPT
  // ==========================================================
  const data = {
   totalStorms: <?= $stat['total_topan'] ?? 0 ?>, // PHP Null Coalescing, untuk amankan jika data kosong
   deaths: <?= $stat['korban_jiwa'] ?? 0 ?>,
   damagedInfra: <?= $stat['infrastruktur_rusak'] ?? 0 ?>,
   lossesUSD: <?= $stat['kerugian_usd'] ?? 0 ?>,
   yearly: {
     years: <?= json_encode($years) ?>,
     counts: <?= json_encode($counts) ?>
   },
   categoryDistribution: {
       labels: <?= json_encode($donutLabels) ?>,
       values: <?= json_encode($donutData) ?>
   }
  };

  const historyData = <?= json_encode($historyDataArray) ?>;



  // Fungsi untuk memformat angka dengan pemisah ribuan (misal: 1.234)
  function formatNumber(num) {
      if (typeof num === 'undefined' || num === null) return '0';
      return parseInt(num).toLocaleString('id-ID'); // Menggunakan format lokal Indonesia
  }

  document.addEventListener('DOMContentLoaded', () => {
    // A. Mengisi Kartu Statistik Utama
    document.getElementById('count-storms').textContent = formatNumber(data.totalStorms);
    document.getElementById('count-deaths').textContent = formatNumber(data.deaths);
    document.getElementById('count-damage').textContent = formatNumber(data.damagedInfra);
    document.getElementById('count-loss').textContent = '$' + formatNumber(data.lossesUSD); 

    // B. Mengisi Tabel Riwayat Topan
    const historyBody = document.getElementById('history-body');
    historyData.forEach(item => {
        const row = historyBody.insertRow();
        row.insertCell().textContent = item.name;
        row.insertCell().textContent = item.year;
        row.insertCell().textContent = item.category;
        row.insertCell().textContent = item.impact;
    });

    // C. Mengisi Rata-rata Topan / Tahun
    if (data.yearly.years.length > 0) {
        const sumCounts = data.yearly.counts.reduce((a, b) => a + b, 0);
        const totalYears = data.yearly.years.length;
        const avgPerYear = (sumCounts / totalYears).toFixed(1);
        document.getElementById('avg-per-year').textContent = avgPerYear;
    }

    // D. Inisialisasi Chart.js (Line Chart)
    // --- Pastikan Anda memiliki kode inisialisasi chart di sini atau di statistik.js ---
    const ctxLine = document.getElementById('chartLine').getContext('2d');
    new Chart(ctxLine, {
        type: 'line',
        data: {
            labels: data.yearly.years,
            datasets: [{
                label: 'Jumlah Topan',
                data: data.yearly.counts,
                borderColor: 'rgba(54, 162, 235, 1)',
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                tension: 0.4
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    // E. Inisialisasi Chart.js (Donut Chart)
    const ctxDonut = document.getElementById('chartDonut').getContext('2d');
    new Chart(ctxDonut, {
        type: 'doughnut',
        data: {
            labels: data.categoryDistribution.labels,
            datasets: [{
                data: data.categoryDistribution.values,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.7)',
                    'rgba(255, 159, 64, 0.7)',
                    'rgba(255, 205, 86, 0.7)',
                    'rgba(75, 192, 192, 0.7)',
                    'rgba(153, 102, 255, 0.7)',
                ],
                hoverOffset: 4
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top',
                },
                title: {
                    display: false
                }
            }
        }
    });
    
    // F. Inisialisasi Leaflet Map
    const map = L.map('map').setView([-2.5, 118.5], 5); // Lokasi di Indonesia

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    // Contoh Marker (Anda perlu data koordinat nyata)
    L.marker([-6.2088, 106.8456]).addTo(map) // Jakarta
        .bindPopup('Topan A, Kerusakan Tinggi');
    
    L.marker([-7.2575, 112.7521]).addTo(map) // Surabaya
        .bindPopup('Topan B, Korban Jiwa');
    
    L.marker([0.7893, 113.9213]).addTo(map) // Kalimantan
        .bindPopup('Topan C, Banjir Bandang');

  });

  
  </script>
  </body>
</html>