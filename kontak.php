<?php

$save_file = __DIR__ . '/laporan.txt';
$success = '';
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil dan sanitasi input
    $nama = trim($_POST['nama'] ?? '');
    $jenis = trim($_POST['jenis'] ?? '');
    $lokasi = trim($_POST['lokasi'] ?? '');
    $keterangan = trim($_POST['keterangan'] ?? '');
    date_default_timezone_set('Asia/Jakarta');
    $waktu = date('Y-m-d H:i:s');

    if ($nama === '' || $jenis === '' || $lokasi === '' || $keterangan === '') {
        $error = 'Mohon isi semua kolom sebelum mengirim laporan.';
    } else {
        // Buat baris laporan (CSV-like, aman untuk teks)
        $line = "WAKTU: {$waktu}\nNAMA: " . str_replace("\n", ' ', $nama) .
            "\nJENIS: " . str_replace("\n", ' ', $jenis) .
            "\nLOKASI: " . str_replace("\n", ' ', $lokasi) .
            "\nKETERANGAN: " . str_replace("\n", ' ', $keterangan) .
            "\n---\n";

        // Coba simpan
        try {
            file_put_contents($save_file, $line, FILE_APPEND | LOCK_EX);
            $success = 'Laporan berhasil dikirim. Terima kasih telah melapor.';
            // kosongkan input agar form kosong setelah submit
            $nama = $jenis = $lokasi = $keterangan = '';
        } catch (Exception $e) {
            $error = 'Terjadi masalah saat menyimpan laporan. Coba lagi nanti.';
        }
    }
}
?>
<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Kontak - Laporan Bencana</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .contact-container {
            max-width: 720px;
            margin: 40px auto;
            padding: 0 20px;
        }

        .report-card {
            background: var(--card-bg, #fff);
            padding: 28px;
            border-radius: 12px;
            box-shadow: 0 8px 22px rgba(13, 27, 49, 0.06);
        }

        .report-card h2 {
            margin: 0 0 12px;
            color: var(--blue-700, #145b8a);
        }

        .form-row {
            margin-bottom: 12px;
        }

        label {
            display: block;
            margin-bottom: 6px;
            font-weight: 600;
            color: #23485f;
        }

        input[type=text],
        textarea,
        select {
            width: 100%;
            padding: 10px 12px;
            border-radius: 8px;
            border: 1px solid #e6eef8;
            font-size: 15px;
            box-sizing: border-box;
        }

        textarea {
            min-height: 120px;
            resize: vertical;
        }

        .btn-send {
            display: inline-block;
            padding: 10px 16px;
            background: #0e4a8b;
            color: #fff;
            border-radius: 8px;
            text-decoration: none;
            border: none;
            cursor: pointer;
            font-weight: 700;
        }

        .msg-success {
            background: #e6fbef;
            color: #0b7a3b;
            padding: 10px 12px;
            border-radius: 8px;
            margin-bottom: 12px;
            border: 1px solid #d7f3df;
        }

        .msg-error {
            background: #fff1f0;
            color: #a52a2a;
            padding: 10px 12px;
            border-radius: 8px;
            margin-bottom: 12px;
            border: 1px solid #ffd6d6;
        }

        .small-note {
            font-size: 13px;
            color: #6b7b8a;
            margin-top: 8px;
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
                <li><a href="kontak.php">Kontak</a></li>
            </ul>
        </div>
    </nav>

    <div class="contact-container">
        <div class="report-card">
            <h2>Laporkan Bencana</h2>
            <p class="small-note">Form sederhana untuk melaporkan kejadian bencana. Informasi akan disimpan ke server.</p>

            <?php if ($success): ?>
                <div class="msg-success"><?= htmlspecialchars($success) ?></div>
            <?php endif; ?>
            <?php if ($error): ?>
                <div class="msg-error"><?= htmlspecialchars($error) ?></div>
            <?php endif; ?>

            <form method="post" action="kontak.php">
                <div class="form-row">
                    <label for="nama">Nama Pelapor</label>
                    <input id="nama" name="nama" type="text" value="<?= htmlspecialchars($nama ?? '') ?>" placeholder="Nama Anda">
                </div>

                <div class="form-row">
                    <label for="jenis">Jenis Bencana</label>
                    <select id="jenis" name="jenis">
                        <option value="">-- Pilih jenis --</option>
                        <option value="Puting Beliung" <?= (isset($jenis) && $jenis === 'Puting Beliung') ? 'selected' : '' ?>>Puting Beliung</option>
                        <option value="Depresi Tropis" <?= (isset($jenis) && $jenis === 'Depresi Tropis') ? 'selected' : '' ?>>Depresi Tropis</option>
                        <option value="Badai" <?= (isset($jenis) && $jenis === 'Badai') ? 'selected' : '' ?>>Badai</option>
                        <option value="Angin Kencang" <?= (isset($jenis) && $jenis === 'Angin Kencang') ? 'selected' : '' ?>>Angin Kencang</option>
                        <option value="Lainnya" <?= (isset($jenis) && $jenis === 'Lainnya') ? 'selected' : '' ?>>Lainnya</option>
                    </select>
                </div>

                <div class="form-row">
                    <label for="lokasi">Lokasi (kota / desa / koordinat)</label>
                    <input id="lokasi" name="lokasi" type="text" value="<?= htmlspecialchars($lokasi ?? '') ?>" placeholder="Contoh: Desa Sukamaju, Kec. A, Kab. B">
                </div>

                <div class="form-row">
                    <label for="keterangan">Keterangan / Kondisi</label>
                    <textarea id="keterangan" name="keterangan" placeholder="Deskripsikan kondisi: kerusakan, korban, kebutuhan, dsb."><?= htmlspecialchars($keterangan ?? '') ?></textarea>
                </div>

                <div class="form-row">
                    <button class="btn-send" type="submit">Kirim Laporan</button>
                </div>
            </form>

            <p class="small-note">Catatan: ini adalah fitur pelaporan sederhana—untuk keadaan darurat, hubungi layanan darurat setempat.</p>
        </div>
    </div>

    <footer>
        &copy; 2025 SIMBAT – Sistem Informasi Manajemen Bencana Topan. Semua hak dilindungi.
    </footer>
</body>

</html>