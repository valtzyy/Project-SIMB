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
    totalStorms: 128,
    deaths: 5320,
    damagedInfra: 23810,
    lossesUSD: 8.2e9,
    yearly: { // example: years 2014..2023
      years: [2014,2015,2016,2017,2018,2019,2020,2021,2022,2023],
      counts: [9,11,14,12,20,10,13,15,16,18]
    },
    categoryDistribution: {
      labels:['Category 1','Category 2','Category 3+'],
      values:[58,40,30]
    },
    history:[
      {name:'Haiyan', year:2013, cat:'5', impact:'6,300 korban'},
      {name:'Mangkhut', year:2018, cat:'5', impact:'$3.7B'},
      {name:'Bopha', year:2012, cat:'5', impact:'1,901 korban'},
      {name:'Example A', year:2020, cat:'3', impact:'Kerusakan infrastruktur'}
    ],
    topRegions:['Region A','Region B','Region C']
  };

  // ========== COUNT-UP SIMPLE ==========
  function animateCount(id, start, end, duration=1400, prefix='', formatter) {
    const el = document.getElementById(id);
    if(!el) return;
    const startTs = performance.now();
    const step = (ts) => {
      const progress = Math.min((ts - startTs) / duration, 1);
      const value = Math.floor(start + (end - start) * easeOutCubic(progress));
      el.textContent = prefix + (formatter ? formatter(value) : value.toLocaleString());
      if(progress < 1) requestAnimationFrame(step);
    };
    requestAnimationFrame(step);
  }
  function easeOutCubic(t){ return 1 - Math.pow(1 - t, 3); }

  // initialize counts
  animateCount('count-storms', 0, data.totalStorms, 1200);
  animateCount('count-deaths', 0, data.deaths, 1400);
  animateCount('count-damage', 0, data.damagedInfra, 1400);
  animateCount('count-loss', 0, data.lossesUSD, 1500, '$', v => (v/1e9).toFixed(1) + 'B');

  // small-stats
  document.getElementById('avg-per-year').textContent = (data.totalStorms / data.yearly.years.length).toFixed(1) + ' topan per tahun';
  document.getElementById('top-regions').textContent = data.topRegions.join(', ');

  // history table
  const tbody = document.getElementById('history-body');
  data.history.forEach(row => {
    const tr = document.createElement('tr');
    tr.innerHTML = `<td>${row.name}</td><td>${row.year}</td><td>${row.cat}</td><td>${row.impact}</td>`;
    tbody.appendChild(tr);
  });

  // ========== Chart.js - Line (frequency) ==========
  const lineCtx = document.getElementById('chartLine').getContext('2d');
  const lineChart = new Chart(lineCtx, {
    type: 'line',
    data: {
      labels: data.yearly.years,
      datasets: [{
        label: 'Jumlah Topan',
        data: data.yearly.counts,
        borderColor: '#1f6fa8',
        backgroundColor: gradientLine(lineCtx, '#1f6fa8'),
        fill: true,
        tension: 0.35,
        pointRadius: 4,
        pointBackgroundColor: '#fff',
        pointBorderColor: '#1f6fa8',
      }]
    },
    options: {
      responsive:true,
      maintainAspectRatio:false,
      plugins:{
        legend:{display:false},
        tooltip:{mode:'index', intersect:false}
      },
      scales:{
        x:{grid:{display:false}},
        y:{beginAtZero:true, grid:{color:'#f1f5f9'}}
      }
    }
  });

  // helper gradient
  function gradientLine(ctx, hex){
    const gradient = ctx.createLinearGradient(0,0,0,300);
    gradient.addColorStop(0, hex + '40');
    gradient.addColorStop(1, 'rgba(255,255,255,0)');
    return gradient;
  }

  // ========== Chart.js - Donut (distribution) ==========
  const donutCtx = document.getElementById('chartDonut').getContext('2d');
  const donutChart = new Chart(donutCtx, {
    type:'doughnut',
    data:{
      labels: data.categoryDistribution.labels,
      datasets:[{
        data: data.categoryDistribution.values,
        backgroundColor:['#2b8cc4','#67b0e1','#cfe9fb'],
        hoverOffset:8,
        borderWidth:0
      }]
    },
    options:{
      responsive:true,
      maintainAspectRatio:false,
      plugins:{legend:{position:'bottom'}}
    }
  });

  // ========== Leaflet map ==========
  const map = L.map('map', {zoomControl:false}).setView([0.0, 120.0], 3); // center Indonesia-area
  L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',{
    attribution: '&copy; OpenStreetMap contributors'
  }).addTo(map);

  // sample markers (replace with your real data)
  const sampleLocations = [
    {lat:-6.2, lng:106.8, title:'Jakarta', info:'Topan ringan tercatat 2020'},
    {lat:14.6, lng:121.0, title:'Philippines', info:'Topan besar 2013: Haiyan'},
    {lat:15.5, lng:120.9, title:'Region B', info:'Banyak dampak banjir'}
  ];
  sampleLocations.forEach(loc=>{
    const m = L.circleMarker([loc.lat, loc.lng], {radius:8, color:'#ff6b6b', fill:true, fillOpacity:0.7}).addTo(map);
    m.bindPopup(`<strong>${loc.title}</strong><br>${loc.info}`);
  });

  // fit bounds
  const group = L.featureGroup(sampleLocations.map(l=>L.marker([l.lat,l.lng])));
  if(group.getLayers().length) map.fitBounds(group.getBounds().pad(0.6));

  // small UX: animate charts on load (fade-in)
  document.querySelectorAll('.fade-up').forEach((el,i)=> el.style.animationDelay = (i*120) + 'ms');


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



  
  <!-- <footer>
    &copy; 2025 SIMBAT – Sistem Informasi Manajemen Bencana Topan. Semua hak dilindungi.
  </footer>
   -->

</body>
</html>
