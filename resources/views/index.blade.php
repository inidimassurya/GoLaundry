<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GoLaundry - Pelacakan Status Cucian Digital</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            background: #eef8ff;
            color: #182033;
        }

        .container {
            width: 100%;
            max-width: 1100px;
            margin: auto;
            background: white;
            min-height: 100vh;
            box-shadow: 0 0 10px rgba(0,0,0,.05);
        }

        .header {
            background: #10a5df;
            color: white;
            padding: 38px 45px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
        }

        .logo h1 {
            font-size: 42px;
            margin-bottom: 5px;
        }

        .logo p {
            font-size: 19px;
        }

        .login-button {
            background: #233f88;
            color: white;
            text-decoration: none;
            padding: 20px 28px;
            border-radius: 14px;
            font-weight: bold;
            font-size: 17px;
            text-align: center;
        }

        .login-button:hover {
            background: #172e6b;
        }

        .navigation {
            display: flex;
            background: #eef8ff;
            border-bottom: 1px solid #e1edf4;
        }

        .navigation a {
            flex: 1;
            text-align: center;
            padding: 23px 10px;
            color: #68717e;
            text-decoration: none;
            font-weight: bold;
            font-size: 17px;
            border-bottom: 4px solid transparent;
        }

        .navigation a.active,
        .navigation a:hover {
            color: #159dcc;
            border-bottom-color: #159dcc;
        }

        .content {
            padding: 45px;
        }

        .section {
            display: none;
        }

        .section.active {
            display: block;
        }

        .status-label {
            display: inline-block;
            background: #dff3fd;
            color: #159dcc;
            padding: 10px 20px;
            border-radius: 30px;
            font-weight: bold;
            margin-bottom: 18px;
        }

        .nota {
            font-size: 42px;
            margin-bottom: 15px;
        }

        .subtitle {
            color: #747b84;
            font-size: 21px;
            margin-bottom: 30px;
        }

        .progress-title {
            font-size: 25px;
            margin: 45px 0 25px;
            color: #3d4654;
        }

        .progress-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 18px;
        }

        .progress-item {
            padding: 24px 12px;
            text-align: center;
            border-radius: 23px;
            background: #f1f2f4;
            color: #9299a3;
            font-size: 20px;
            font-weight: bold;
        }

        .progress-item.done {
            background: #dff2fc;
            color: #159dcc;
        }

        .progress-item.current {
            background: #10a5df;
            color: white;
            box-shadow: 0 3px 5px rgba(0,0,0,.12);
        }

        .activity-box {
            margin-top: 45px;
            padding: 35px;
            background: #eff8ff;
            border: 1px solid #c8e5f2;
            border-radius: 28px;
        }

        .activity-box h3 {
            font-size: 25px;
            margin-bottom: 15px;
        }

        .activity-box p {
            color: #68717e;
            font-size: 19px;
            line-height: 1.7;
        }

        .detail-box {
            margin-top: 40px;
            padding: 35px;
            border: 1px solid #eeeeee;
            border-radius: 22px;
        }

        .detail-row {
            margin-bottom: 30px;
        }

        .detail-row:last-child {
            margin-bottom: 0;
        }

        .detail-row span {
            display: block;
            color: #a0a5aa;
            font-size: 18px;
            margin-bottom: 10px;
        }

        .detail-row strong {
            font-size: 19px;
        }

        .track-form {
            margin-top: 35px;
            display: flex;
            gap: 12px;
        }

        .track-form input {
            flex: 1;
            min-width: 0;
            padding: 17px;
            border: 1px solid #ddd;
            border-radius: 12px;
            font-size: 16px;
        }

        .track-form button {
            border: none;
            background: #10a5df;
            color: white;
            padding: 17px 25px;
            border-radius: 12px;
            font-weight: bold;
            cursor: pointer;
        }

        .info-card {
            background: #f0f8ff;
            border-radius: 20px;
            padding: 28px;
            margin-bottom: 20px;
        }

        .info-card h3 {
            color: #159dcc;
            font-size: 23px;
            margin-bottom: 12px;
        }

        .info-card p {
            color: #68717e;
            font-size: 17px;
            line-height: 1.7;
        }

        .footer {
            text-align: center;
            padding: 25px;
            color: #9299a3;
            background: #f5faff;
        }

        @media(max-width: 600px) {
            .header {
                padding: 35px 22px;
                align-items: flex-start;
            }

            .logo h1 {
                font-size: 34px;
            }

            .logo p {
                font-size: 16px;
                line-height: 1.5;
            }

            .login-button {
                padding: 17px 15px;
                font-size: 14px;
                min-width: 125px;
            }

            .navigation a {
                font-size: 15px;
                padding: 20px 7px;
                line-height: 1.4;
            }

            .content {
                padding: 35px 22px;
            }

            .nota {
                font-size: 34px;
            }

            .subtitle {
                font-size: 18px;
            }

            .progress-title {
                font-size: 22px;
            }

            .progress-item {
                font-size: 16px;
                padding: 23px 8px;
            }

            .activity-box {
                padding: 25px;
            }

            .activity-box h3 {
                font-size: 21px;
            }

            .activity-box p {
                font-size: 17px;
            }

            .detail-box {
                padding: 25px;
            }

            .track-form {
                flex-direction: column;
            }

            .track-form button {
                width: 100%;
            }
        }
    </style>
</head>

<body>

<div class="container">

    <header class="header">
        <div class="logo">
            <h1>GoLaundry</h1>
            <p>Pelacakan Status Cucian Digital</p>
        </div>

        <a href="{{ route('login') }}" class="login-button">
            Login Admin
        </a>
    </header>

    <nav class="navigation">
        <a href="#" class="active" onclick="showSection('tracking', this); return false;">
            Tracking Status
        </a>

        <a href="#" onclick="showSection('layanan', this); return false;">
            Layanan & Daftar Harga
        </a>

        <a href="#" onclick="showSection('informasi', this); return false;">
            Informasi Toko & Alamat
        </a>
    </nav>

    <main class="content">

        <!-- HALAMAN TRACKING -->
        <section id="tracking" class="section active">

            <div class="status-label">Status Aktif</div>

            <h2 class="nota">Nota: -</h2>

            <p class="subtitle">Belum ada transaksi aktif</p>

            <h3 class="progress-title">Tahapan Progres Pengerjaan</h3>

            <div class="progress-grid">
                <div class="progress-item done">1. Diterima</div>
                <div class="progress-item current">2. Dicuci</div>
                <div class="progress-item">3. Disetrika</div>
                <div class="progress-item">4. Siap Diambil</div>
            </div>

            <div class="activity-box">
                <h3>Belum Ada Aktivitas</h3>
                <p>
                    Silakan masukkan nomor nota transaksi untuk
                    melacak status pakaian Anda.
                </p>
            </div>

            <div class="detail-box">
                <div class="detail-row">
                    <span>Tanggal Masuk</span>
                    <strong>-</strong>
                </div>

                <div class="detail-row">
                    <span>Estimasi Selesai</span>
                    <strong>-</strong>
                </div>

                <div class="detail-row">
                    <span>Status Pembayaran</span>
                    <strong>-</strong>
                </div>
            </div>

            <form class="track-form" onsubmit="return demoTracking(event)">
                <input type="text" id="nomorNota"
                    placeholder="Masukkan nomor nota transaksi...">
                <button type="submit">Lacak Cucian</button>
            </form>

        </section>

        <!-- HALAMAN LAYANAN -->
        <section id="layanan" class="section">

            <h2 class="nota">Layanan & Daftar Harga</h2>
            <p class="subtitle">Pilihan layanan GoLaundry</p>

            <div class="info-card">
                <h3>Cuci Reguler</h3>
                <p>Harga: Rp7.000 / Kg</p>
                <p>Layanan pencucian reguler untuk pakaian sehari-hari.</p>
            </div>

            <div class="info-card">
                <h3>Cuci Express</h3>
                <p>Harga: Rp10.000 / Kg</p>
                <p>Layanan pencucian dengan proses lebih cepat.</p>
            </div>

            <div class="info-card">
                <h3>Cuci Komplit</h3>
                <p>Harga: Rp15.000 / Kg</p>
                <p>Layanan mencuci, mengeringkan, dan menyetrika pakaian.</p>
            </div>

        </section>

        <!-- HALAMAN INFORMASI TOKO -->
        <section id="informasi" class="section">

            <h2 class="nota">Informasi Toko & Alamat</h2>
            <p class="subtitle">Informasi mengenai GoLaundry</p>

            <div class="info-card">
                <h3>Alamat Toko</h3>
                <p>Alamat laundry dapat ditambahkan di bagian ini.</p>
            </div>

            <div class="info-card">
                <h3>Jam Operasional</h3>
                <p>Senin - Sabtu</p>
                <p>08.00 - 20.00 WIB</p>
            </div>

            <div class="info-card">
                <h3>Kontak</h3>
                <p>Informasi nomor WhatsApp dapat ditambahkan di sini.</p>
            </div>

        </section>

    </main>

    <footer class="footer">
        &copy; {{ date('Y') }} GoLaundry. Semua Hak Dilindungi.
    </footer>

</div>

<script>
    function showSection(sectionId, element) {
        document.querySelectorAll('.section').forEach(section => {
            section.classList.remove('active');
        });

        document.querySelectorAll('.navigation a').forEach(link => {
            link.classList.remove('active');
        });

        document.getElementById(sectionId).classList.add('active');
        element.classList.add('active');
    }

    function demoTracking(event) {
        event.preventDefault();

        const nomor = document.getElementById('nomorNota').value.trim();

        if (nomor === '') {
            alert('Silakan masukkan nomor nota terlebih dahulu.');
            return false;
        }

        alert('Fitur pelacakan nomor nota akan dihubungkan ke database pada tahap berikutnya.');

        return false;
    }
</script>

</body>
</html>