
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin - GoLaundry</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            background: #f1f8fd;
            min-height: 100vh;
            color: #253c50;
        }

        /* HEADER */
        .header {
            background: #1596d2;
            padding: 20px 7%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: white;
        }

        .brand h1 {
            font-size: 26px;
            margin-bottom: 4px;
        }

        .brand p {
            font-size: 12px;
            opacity: 0.9;
        }

        .home-button {
            text-decoration: none;
            color: #1596d2;
            background: white;
            padding: 11px 19px;
            border-radius: 8px;
            font-size: 13px;
            font-weight: bold;
        }

        .home-button:hover {
            background: #eaf6fd;
        }

        /* LOGIN AREA */
        .login-wrapper {
            min-height: calc(100vh - 100px);
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 40px 20px;
        }

        .login-card {
            width: 100%;
            max-width: 440px;
            background: white;
            border-radius: 15px;
            padding: 38px;
            box-shadow: 0 8px 30px rgba(31, 91, 130, 0.09);
        }

        .login-logo {
            text-align: center;
            font-size: 28px;
            font-weight: bold;
            color: #1596d2;
            margin-bottom: 8px;
        }

        .login-subtitle {
            text-align: center;
            font-size: 13px;
            color: #8998a5;
            margin-bottom: 30px;
        }

        .divider {
            height: 1px;
            background: #e8eff5;
            margin-bottom: 28px;
        }

        .login-card h2 {
            text-align: center;
            font-size: 23px;
            margin-bottom: 10px;
        }

        .description {
            text-align: center;
            color: #8494a2;
            font-size: 13px;
            line-height: 1.6;
            margin-bottom: 28px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-size: 14px;
            font-weight: bold;
            margin-bottom: 9px;
            color: #425667;
        }

        .form-group input {
            width: 100%;
            padding: 14px;
            border: 1px solid #dce7ef;
            border-radius: 8px;
            font-size: 14px;
            outline: none;
            background: #fcfdff;
        }

        .form-group input:focus {
            border-color: #1596d2;
            box-shadow: 0 0 0 3px rgba(21, 150, 210, 0.10);
        }

        .forgot {
            display: block;
            text-align: right;
            margin-top: -8px;
            margin-bottom: 20px;
            color: #1596d2;
            text-decoration: none;
            font-size: 13px;
        }

        .forgot:hover {
            text-decoration: underline;
        }

        .remember {
            display: flex;
            align-items: center;
            gap: 8px;
            color: #718096;
            font-size: 13px;
            margin-bottom: 22px;
        }

        .remember input {
            accent-color: #1596d2;
        }

        .login-button {
            width: 100%;
            padding: 15px;
            border: none;
            border-radius: 8px;
            background: #1596d2;
            color: white;
            font-size: 15px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.2s;
        }

        .login-button:hover {
            background: #087eb9;
        }

        .error-message {
            background: #fff0f0;
            color: #ce3434;
            border: 1px solid #ffd5d5;
            padding: 12px;
            border-radius: 8px;
            font-size: 13px;
            margin-bottom: 20px;
        }

        .footer {
            text-align: center;
            margin-top: 28px;
            font-size: 12px;
            color: #9aa8b5;
        }

        /* RESPONSIVE */
        @media (max-width: 550px) {
            .header {
                padding: 17px 5%;
            }

            .brand h1 {
                font-size: 22px;
            }

            .login-card {
                padding: 28px 22px;
            }
        }
    </style>
</head>

<body>

    <!-- HEADER -->
    <header class="header">
        <div class="brand">
            <h1>GoLaundry</h1>
            <p>Pelacakan Status Cucian Digital</p>
        </div>

        <a href="{{ url('/') }}" class="home-button">
            Halaman Utama
        </a>
    </header>

    <!-- LOGIN -->
    <main class="login-wrapper">

        <div class="login-card">

            <div class="login-logo">GoLaundry</div>

            <p class="login-subtitle">
                Sistem Informasi Manajemen Laundry
            </p>

            <div class="divider"></div>

            <h2>Login Admin</h2>

            <p class="description">
                Silakan masuk menggunakan akun Admin
                untuk mengelola data dan pesanan laundry.
            </p>

            @if ($errors->any())
                <div class="error-message">
                    @foreach ($errors->all() as $error)
                        <div>{{ $error }}</div>
                    @endforeach
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-group">
                    <label for="email">Email</label>

                    <input
                        type="email"
                        id="email"
                        name="email"
                        value="{{ old('email') }}"
                        placeholder="Masukkan email Admin"
                        required
                        autofocus
                        autocomplete="username"
                    >
                </div>

                <div class="form-group">
                    <label for="password">Kata Sandi</label>

                    <input
                        type="password"
                        id="password"
                        name="password"
                        placeholder="Masukkan kata sandi"
                        required
                        autocomplete="current-password"
                    >
                </div>

                <a href="{{ route('password.request') }}" class="forgot">
                    Lupa Password?
                </a>

                <label class="remember">
                    <input type="checkbox" name="remember">
                    Ingat Saya
                </label>

                <button type="submit" class="login-button">
                    Masuk ke Dashboard
                </button>

            </form>

            <div class="footer">
                © {{ date('Y') }} GoLaundry. All Rights Reserved.
            </div>

        </div>

    </main>

</body>
</html>
