
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GoLaundry - Laundry Jadi Mudah</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background: #f3fbf7;
            color: #20352d;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 22px 8%;
            background: white;
        }

        .logo {
            font-size: 27px;
            font-weight: bold;
            color: #15966a;
        }

        .logo span {
            color: #253c32;
        }

        nav a {
            text-decoration: none;
            color: #253c32;
            margin-left: 24px;
            font-weight: bold;
        }

        .login-btn {
            background: #15966a;
            color: white !important;
            padding: 12px 22px;
            border-radius: 9px;
        }

        .hero {
            min-height: 75vh;
            padding: 80px 8%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 40px;
        }

        .hero-text {
            max-width: 560px;
        }

        .label {
            display: inline-block;
            background: #d9f7e8;
            color: #11835b;
            padding: 10px 16px;
            border-radius: 30px;
            margin-bottom: 24px;
        }

        h1 {
            font-size: clamp(38px, 5vw, 60px);
            line-height: 1.15;
            margin-bottom: 22px;
        }

        h1 span {
            color: #15966a;
        }

        .description {
            color: #65756c;
            font-size: 17px;
            line-height: 1.8;
            margin-bottom: 30px;
        }

        .main-btn {
            display: inline-block;
            background: #15966a;
            color: white;
            padding: 16px 25px;
            border-radius: 10px;
            text-decoration: none;
            font-weight: bold;
        }

        .illustration {
            width: 42%;
            min-height: 320px;
            border-radius: 30px;
            background: linear-gradient(145deg, #d9f7e8, #a9e8ca);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 130px;
            box-shadow: 0 20px 50px #15966a18;
        }

        .features {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 22px;
            padding: 20px 8% 70px;
        }

        .feature {
            background: white;
            border-radius: 18px;
            padding: 28px;
            box-shadow: 0 8px 25px #20352d08;
        }

        .feature .icon {
            font-size: 32px;
            margin-bottom: 16px;
        }

        .feature h3 {
            margin-bottom: 10px;
        }

        .feature p {
            color: #718078;
            line-height: 1.7;
        }

        footer {
            text-align: center;
            padding: 25px;
            background: white;
            color: #718078;
        }

        @media (max-width: 700px) {
            nav {
                padding: 20px 5%;
            }

            nav a:not(.login-btn) {
                display: none;
            }

            .hero {
                padding: 55px 6%;
                flex-direction: column;
            }

            .illustration {
                width: 100%;
                min-height: 220px;
                font-size: 95px;
            }

            .features {
                grid-template-columns: 1fr;
                padding: 20px 6% 50px;
            }
        }
    </style>
</head>
<body>

    <nav>
        <div class="logo">Go<span>Laundry</span></div>
        <div>
            <a href="#beranda">Beranda</a>
            <a href="#layanan">Layanan</a>
            <a href="#layanan" class="login-btn">Mulai Sekarang</a>
        </div>
    </nav>

    <section class="hero" id="beranda">
        <div class="hero-text">
            <div class="label">✨ Solusi Laundry Modern</div>

            <h1>
                Cucian Bersih,<br>
                Hidup Lebih <span>Mudah.</span>
            </h1>

            <p class="description">
                Selamat datang di GoLaundry! Kelola layanan laundry
                dengan lebih praktis, mulai dari pencatatan pelanggan,
                transaksi, hingga pemantauan status cucian.
            </p>

            <a href="#layanan" class="main-btn">
                Jelajahi Layanan →
            </a>
        </div>

        <div class="illustration">
            🧺
        </div>
    </section>

    <section class="features" id="layanan">
        <div class="feature">
            <div class="icon">👕</div>
            <h3>Layanan Laundry</h3>
            <p>Kelola cucian pelanggan dengan pencatatan yang lebih teratur.</p>
        </div>

        <div class="feature">
            <div class="icon">📋</div>
            <h3>Data Transaksi</h3>
            <p>Catat pesanan, berat cucian, harga, dan pembayaran.</p>
        </div>

        <div class="feature">
            <div class="icon">⏱️</div>
            <h3>Status Cucian</h3>
            <p>Pantau cucian yang sedang diproses hingga selesai.</p>
        </div>
    </section>

    <footer>
        © 2026 GoLaundry. Laundry jadi lebih mudah.
    </footer>

</body>
</html>
