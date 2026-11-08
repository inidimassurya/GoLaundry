
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - GoLaundry</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            background: #f1f7fc;
            color: #263746;
        }

        .header {
            background: #1596d2;
            color: white;
            padding: 18px 6%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 15px;
            box-shadow: 0 3px 12px rgba(0, 0, 0, 0.08);
        }

        .brand h2 {
            font-size: 25px;
            margin-bottom: 4px;
        }

        .brand p {
            font-size: 13px;
            opacity: 0.9;
        }

        .header-right {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .admin-name {
            font-size: 14px;
        }

        .logout-btn {
            border: 1px solid white;
            background: white;
            color: #1389c3;
            padding: 10px 17px;
            border-radius: 8px;
            font-weight: bold;
            cursor: pointer;
        }

        .logout-btn:hover {
            background: #eaf6fd;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 30px auto;
        }

        .welcome {
            margin-bottom: 25px;
        }

        .welcome h2 {
            font-size: 25px;
            color: #253c50;
            margin-bottom: 8px;
        }

        .welcome p {
            color: #718096;
            font-size: 14px;
        }

        .menu {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-bottom: 25px;
        }

        .menu a {
            text-decoration: none;
            background: white;
            color: #526575;
            padding: 12px 18px;
            border-radius: 9px;
            font-size: 14px;
            border: 1px solid #e0eaf2;
            transition: 0.2s;
        }

        .menu a.active,
        .menu a:hover {
            background: #1596d2;
            color: white;
            border-color: #1596d2;
        }

        .section-title {
            font-size: 19px;
            margin-bottom: 15px;
            color: #253c50;
        }

        .stats {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 18px;
            margin-bottom: 30px;
        }

        .stat-card {
            background: white;
            padding: 22px;
            border-radius: 13px;
            border: 1px solid #e5edf4;
            box-shadow: 0 4px 15px rgba(35, 75, 105, 0.04);
        }

        .stat-card .label {
            color: #718096;
            font-size: 14px;
            margin-bottom: 13px;
        }

        .stat-card .number {
            color: #1596d2;
            font-size: 30px;
            font-weight: bold;
        }

        .stat-card .description {
            color: #9aa8b5;
            font-size: 12px;
            margin-top: 8px;
        }

        .content-card {
            background: white;
            padding: 23px;
            border-radius: 13px;
            border: 1px solid #e5edf4;
            box-shadow: 0 4px 15px rgba(35, 75, 105, 0.04);
            margin-bottom: 25px;
        }

        .card-heading {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 12px;
            margin-bottom: 20px;
            flex-wrap: wrap;
        }

        .card-heading h3 {
            font-size: 18px;
            color: #253c50;
        }

        .add-btn {
            background: #1596d2;
            color: white;
            text-decoration: none;
            padding: 10px 15px;
            border-radius: 8px;
            font-size: 13px;
            font-weight: bold;
        }

        .add-btn:hover {
            background: #087eb9;
        }

        .table-wrapper {
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            min-width: 650px;
        }

        th, td {
            text-align: left;
            padding: 14px 12px;
            border-bottom: 1px solid #edf1f5;
            font-size: 13px;
        }

        th {
            color: #718096;
            background: #f7fafc;
            font-weight: bold;
        }

        td {
            color: #526575;
        }

        .empty {
            text-align: center;
            padding: 35px 10px;
            color: #91a0ad;
        }

        .status {
            display: inline-block;
            padding: 6px 10px;
            background: #eaf5fc;
            color: #168ac3;
            border-radius: 20px;
            font-size: 11px;
        }

        .footer {
            text-align: center;
            padding: 20px;
            color: #91a0ad;
            font-size: 12px;
        }

        @media (max-width: 900px) {
            .stats {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 550px) {
            .header {
                padding: 17px 5%;
            }

            .header-right {
                width: 100%;
                justify-content: space-between;
            }

            .container {
                width: 92%;
                margin-top: 23px;
            }

            .stats {
                grid-template-columns: 1fr;
            }

            .welcome h2 {
                font-size: 21px;
            }
        }
    </style>
</head>

<body>

    <!-- HEADER -->
    <header class="header">
        <div class="brand">
            <h2>GoLaundry</h2>
            <p>Dashboard Admin - Sistem Informasi Laundry</p>
        </div>

        <div class="header-right">
            <span class="admin-name">
                Halo, {{ Auth::user()->name ?? 'Admin' }}
            </span>

            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="logout-btn">Logout</button>
            </form>
        </div>
    </header>

    <main class="container">

        <!-- SAPAAN -->
        <section class="welcome">
            <h2>Dashboard Admin</h2>
            <p>Selamat datang di halaman pengelolaan GoLaundry. Pantau aktivitas laundry melalui halaman ini.</p>
        </section>

        <!-- MENU NAVIGASI -->
        <nav class="menu">
            <a href="{{ url('/dashboard') }}" class="active">Dashboard</a>
            <a href="#pesanan">Data Pesanan</a>
            <a href="#pelanggan">Data Pelanggan</a>
            <a href="#layanan">Layanan & Harga</a>
            <a href="{{ url('/') }}">Halaman Publik</a>
        </nav>

        <!-- RINGKASAN -->
        <h3 class="section-title">Ringkasan Data Laundry</h3>

        <section class="stats">
            <div class="stat-card">
                <p class="label">Total Pesanan</p>
                <div class="number">0</div>
                <p class="description">Seluruh pesanan laundry</p>
            </div>

            <div class="stat-card">
                <p class="label">Sedang Dicuci</p>
                <div class="number">0</div>
                <p class="description">Pesanan dalam proses</p>
            </div>

            <div class="stat-card">
                <p class="label">Siap Diambil</p>
                <div class="number">0</div>
                <p class="description">Pesanan selesai diproses</p>
            </div>

            <div class="stat-card">
                <p class="label">Total Pelanggan</p>
                <div class="number">0</div>
                <p class="description">Pelanggan terdaftar</p>
            </div>
        </section>

        <!-- PESANAN TERBARU -->
        <section class="content-card" id="pesanan">
            <div class="card-heading">
                <h3>Pesanan Terbaru</h3>
                <a href="#pesanan" class="add-btn">+ Tambah Pesanan</a>
            </div>

            <div class="table-wrapper">
                <table>
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>No. Nota</th>
                            <th>Nama Pelanggan</th>
                            <th>Tanggal Masuk</th>
                            <th>Status</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td colspan="5" class="empty">
                                Belum ada data pesanan laundry.
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>

        <!-- INFORMASI -->
        <section class="content-card">
            <div class="card-heading">
                <h3>Informasi GoLaundry</h3>
            </div>

            <p style="font-size:14px; color:#718096; line-height:1.8;">
                Halaman ini digunakan oleh Admin untuk memantau dan mengelola
                kegiatan operasional laundry. Admin dapat mengelola data pesanan,
                pelanggan, layanan, harga, serta memperbarui status cucian.
            </p>
        </section>

    </main>

    <footer class="footer">
        © {{ date('Y') }} GoLaundry. Sistem Informasi Manajemen Laundry.
    </footer>

</body>
</html>
