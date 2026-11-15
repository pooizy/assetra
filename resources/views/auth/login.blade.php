
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login ASSETRA BKPSDM</title>

    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        :root {
            --emerald: #041F1B;
            --emerald2: #073D32;
            --emerald3: #10483D;
            --gold: #C99A35;
            --gold-light: #E9BD61;
            --gold-pale: #F5DDA6;
            --white: #FFFFFF;
            --muted: #B5CFC1;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            min-height: 100%;
        }

        body {
            min-height: 100vh;
            padding: 25px;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            overflow-x: hidden;
            font-family: 'Plus Jakarta Sans', sans-serif;
            color: white;
            background:
                radial-gradient(ellipse at 85% 5%, rgba(201,154,53,.22), transparent 35%),
                radial-gradient(ellipse at 10% 85%, rgba(23,107,89,.35), transparent 40%),
                linear-gradient(135deg, #041F1B, #073D32 48%, #062A25);
        }

        /* BACKGROUND */

        .background-image {
            position: fixed;
            inset: 0;
            z-index: 0;
            background:
                linear-gradient(
                    120deg,
                    rgba(4,31,27,.93),
                    rgba(4,31,27,.78),
                    rgba(4,31,27,.88)
                ),
                url('{{ asset("images/gedung-bkpsdm.png") }}') center/cover no-repeat;
            opacity: .75;
            pointer-events: none;
        }

        .background-image::after {
            content: "";
            position: absolute;
            inset: 0;
            background:
                radial-gradient(circle at 80% 20%, rgba(201,154,53,.17), transparent 30%),
                radial-gradient(circle at 15% 85%, rgba(0,169,130,.17), transparent 35%);
        }

        .ambient-glow {
            position: fixed;
            width: 350px;
            height: 350px;
            border-radius: 50%;
            filter: blur(90px);
            pointer-events: none;
            z-index: 1;
            opacity: .15;
            animation: glowMove 12s ease-in-out infinite alternate;
        }

        .glow-one {
            top: 5%;
            right: 5%;
            background: #C99A35;
        }

        .glow-two {
            bottom: 0;
            left: 5%;
            background: #00A982;
            animation-delay: 3s;
        }

        /* PARTICLES */

        #particles {
            position: fixed;
            inset: 0;
            overflow: hidden;
            pointer-events: none;
            z-index: 2;
        }

        .particle {
            position: absolute;
            bottom: -20px;
            border-radius: 50%;
            background: #E9BD61;
            opacity: 0;
            box-shadow: 0 0 12px rgba(233,189,97,.8);
            animation: particleFloat linear infinite;
        }

        /* LOGIN LAYOUT */

        .login-wrapper {
            width: 100%;
            max-width: 1050px;
            min-height: 570px;
            display: grid;
            grid-template-columns: 1.1fr .9fr;
            position: relative;
            z-index: 5;
            overflow: hidden;
            border: 1px solid rgba(233,189,97,.45);
            border-radius: 25px;
            background: rgba(6, 47, 42, .82);
            backdrop-filter: blur(18px);
            box-shadow:
                0 25px 70px rgba(0,0,0,.45),
                0 0 35px rgba(201,154,53,.10);
            animation: fadeUp .8s ease both;
        }

        /* LEFT PANEL */

        .login-info {
            min-height: 570px;
            padding: 45px;
            position: relative;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            overflow: hidden;
            background:
                linear-gradient(
                    145deg,
                    rgba(4,31,27,.91),
                    rgba(7,61,50,.78)
                ),
                url('{{ asset("images/gedung-bkpsdm.png") }}') center/cover;
            border-right: 1px solid rgba(233,189,97,.25);
        }

        .login-info::before {
            content: "";
            position: absolute;
            width: 340px;
            height: 340px;
            border: 1px solid rgba(233,189,97,.3);
            border-radius: 50%;
            right: -170px;
            top: -130px;
            box-shadow:
                0 0 0 35px rgba(233,189,97,.05),
                0 0 0 70px rgba(233,189,97,.03);
            animation: rotateSlow 50s linear infinite;
        }

        .login-info::after {
            content: "";
            position: absolute;
            width: 230px;
            height: 230px;
            border: 1px solid rgba(233,189,97,.2);
            border-radius: 50%;
            left: -130px;
            bottom: -110px;
            box-shadow: 0 0 0 30px rgba(233,189,97,.04);
        }

        .info-content,
        .info-footer {
            position: relative;
            z-index: 2;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .brand-logo {
            width: 65px;
            height: 65px;
            object-fit: contain;
            padding: 6px;
            border-radius: 15px;
            background: white;
            box-shadow: 0 8px 25px rgba(0,0,0,.25);
        }

        .brand-text h2 {
            font-size: 25px;
            font-weight: 800;
            letter-spacing: 2px;
            color: var(--gold-light);
        }

        .brand-text p {
            margin-top: 4px;
            font-size: 9px;
            line-height: 1.6;
            color: #D0E0D7;
            letter-spacing: 1px;
        }

        .info-main {
            margin-top: 70px;
            max-width: 430px;
        }

        .info-label {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 9px 15px;
            border: 1px solid rgba(233,189,97,.45);
            border-radius: 30px;
            background: rgba(201,154,53,.13);
            color: var(--gold-pale);
            font-size: 10px;
            font-weight: 800;
            letter-spacing: 1.5px;
            margin-bottom: 23px;
        }

        .info-main h1 {
            font-size: clamp(30px, 4vw, 43px);
            line-height: 1.2;
            font-weight: 800;
            letter-spacing: -1px;
        }

        .info-main h1 span {
            display: block;
            color: var(--gold-light);
            text-shadow: 0 5px 20px rgba(233,189,97,.2);
        }

        .info-main p {
            margin-top: 18px;
            color: #D5E8DC;
            font-size: 12px;
            line-height: 2;
        }

        .gold-line {
            width: 75px;
            height: 4px;
            border-radius: 10px;
            margin-top: 25px;
            background: linear-gradient(90deg, var(--gold), #F6E3B1);
        }

        .info-footer {
            padding-top: 25px;
            border-top: 1px solid rgba(255,255,255,.17);
            color: #C1D4C9;
            font-size: 10px;
            line-height: 1.8;
        }

        .info-footer strong {
            color: var(--gold-pale);
        }

        /* RIGHT PANEL */

        .login-panel {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 45px 38px;
            background:
                radial-gradient(circle at top right, rgba(201,154,53,.11), transparent 35%),
                linear-gradient(145deg, rgba(16,72,61,.95), rgba(4,31,27,.96));
        }

        .login-card {
            width: 100%;
            max-width: 370px;
            animation: fadeIn 1s ease both;
        }

        .login-heading {
            margin-bottom: 30px;
        }

        .login-heading h2 {
            font-size: 27px;
            font-weight: 800;
            color: #FFFFFF;
        }

        .login-heading p {
            margin-top: 8px;
            color: #B5CFC1;
            font-size: 11px;
            line-height: 1.7;
        }

        /* ERROR */

        .error {
            padding: 13px 15px;
            margin-bottom: 20px;
            border: 1px solid rgba(248,113,113,.4);
            border-radius: 11px;
            color: #FCA5A5;
            background: rgba(127,29,29,.2);
            font-size: 11px;
            line-height: 1.7;
            animation: fadeUp .35s ease;
        }

        /* FORM */

        .form-group {
            margin-bottom: 21px;
        }

        .form-group label {
            display: block;
            margin-bottom: 9px;
            color: #F5DDA6;
            font-size: 11px;
            font-weight: 700;
        }

        .input-wrapper {
            position: relative;
        }

        .input-icon {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--gold-light);
            font-size: 17px;
            pointer-events: none;
        }

        input {
            width: 100%;
            height: 49px;
            padding: 0 45px;
            outline: none;
            border: 1px solid rgba(233,189,97,.28);
            border-radius: 11px;
            background: rgba(4,31,27,.65);
            color: white;
            font-family: inherit;
            font-size: 11px;
            transition: .25s ease;
        }

        input::placeholder {
            color: #91ADA0;
        }

        input:focus {
            border-color: var(--gold-light);
            background: rgba(4,31,27,.9);
            box-shadow: 0 0 0 4px rgba(201,154,53,.13);
        }

        .password-toggle {
            position: absolute;
            right: 12px;
            top: 50%;
            transform: translateY(-50%);
            border: 0;
            background: transparent;
            color: #C5D8CF;
            font-size: 16px;
            cursor: pointer;
            padding: 5px;
        }

        .password-toggle:hover {
            color: var(--gold-light);
        }

        /* BUTTON */

        .login-button {
            width: 100%;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            margin-top: 10px;
            border: 1px solid rgba(255,255,255,.18);
            border-radius: 11px;
            color: #062F2A;
            background: linear-gradient(110deg, #C99A35, #E9BD61);
            font-family: inherit;
            font-size: 12px;
            font-weight: 800;
            letter-spacing: .5px;
            cursor: pointer;
            box-shadow: 0 8px 22px rgba(201,154,53,.2);
            transition: .3s ease;
        }

        .login-button:hover {
            transform: translateY(-3px);
            background: linear-gradient(110deg, #E9BD61, #F5DDA6);
            box-shadow: 0 12px 28px rgba(201,154,53,.32);
        }

        .login-button:active {
            transform: translateY(0);
        }

        .button-arrow {
            font-size: 17px;
            transition: transform .25s;
        }

        .login-button:hover .button-arrow {
            transform: translateX(5px);
        }

        /* REGISTER LINK */

        .register-link {
            margin-top: 22px;
            text-align: center;
            color: #B5CFC1;
            font-size: 10px;
        }

        .register-link a {
            color: var(--gold-light);
            font-weight: 800;
            text-decoration: none;
            margin-left: 4px;
            transition: .25s ease;
        }

        .register-link a:hover {
            color: var(--gold-pale);
            text-decoration: underline;
        }

        .footer {
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid rgba(255,255,255,.13);
            text-align: center;
            color: #A8C5B5;
            font-size: 9px;
            line-height: 1.8;
        }

        .footer strong {
            color: var(--gold-pale);
            letter-spacing: 1px;
        }

        .footer-mark {
            color: var(--gold-light);
            margin-bottom: 5px;
            font-size: 15px;
        }

        /* POPUP BERHASIL LOGOUT */

        .success-overlay {
            position: fixed;
            inset: 0;
            z-index: 1000;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            background: rgba(0, 15, 13, .78);
            backdrop-filter: blur(9px);
            opacity: 0;
            visibility: hidden;
            transition: opacity .35s ease, visibility .35s ease;
        }

        .success-overlay.show {
            opacity: 1;
            visibility: visible;
        }

        .success-modal {
            width: 100%;
            max-width: 390px;
            position: relative;
            overflow: hidden;
            padding: 38px 30px 30px;
            text-align: center;
            border: 1px solid rgba(233,189,97,.55);
            border-radius: 24px;
            background:
                radial-gradient(circle at top right, rgba(201,154,53,.15), transparent 40%),
                linear-gradient(145deg, #10483D, #041F1B);
            box-shadow:
                0 25px 80px rgba(0,0,0,.55),
                0 0 35px rgba(201,154,53,.15);
            transform: translateY(35px) scale(.88);
            opacity: 0;
            transition: transform .45s cubic-bezier(.2,.8,.2,1),
                        opacity .35s ease;
        }

        .success-overlay.show .success-modal {
            transform: translateY(0) scale(1);
            opacity: 1;
        }

        .success-modal::before,
        .success-modal::after {
            content: "";
            position: absolute;
            width: 180px;
            height: 180px;
            border: 1px solid rgba(233,189,97,.13);
            border-radius: 50%;
            pointer-events: none;
        }

        .success-modal::before {
            top: -115px;
            right: -75px;
            box-shadow: 0 0 0 20px rgba(233,189,97,.035);
        }

        .success-modal::after {
            bottom: -135px;
            left: -90px;
            box-shadow: 0 0 0 20px rgba(233,189,97,.035);
        }

        .success-close {
            position: absolute;
            top: 13px;
            right: 15px;
            width: 30px;
            height: 30px;
            display: grid;
            place-items: center;
            border: 1px solid rgba(255,255,255,.15);
            border-radius: 50%;
            background: rgba(255,255,255,.07);
            color: #D5E8DC;
            font-size: 18px;
            cursor: pointer;
            transition: .25s;
            z-index: 3;
        }

        .success-close:hover {
            color: var(--gold-light);
            background: rgba(201,154,53,.18);
            transform: rotate(90deg);
        }

        .success-content {
            position: relative;
            z-index: 2;
        }

        .success-icon {
            width: 85px;
            height: 85px;
            display: grid;
            place-items: center;
            margin: 0 auto 22px;
            border: 1px solid rgba(245,221,166,.75);
            border-radius: 50%;
            background: linear-gradient(145deg, #E9BD61, #C99A35);
            box-shadow:
                0 0 0 9px rgba(201,154,53,.10),
                0 0 35px rgba(233,189,97,.28);
            animation: successPulse 2s ease-in-out infinite;
        }

        .success-check {
            width: 34px;
            height: 34px;
            fill: none;
            stroke: #073D32;
            stroke-width: 4;
            stroke-linecap: round;
            stroke-linejoin: round;
            stroke-dasharray: 55;
            stroke-dashoffset: 55;
            animation: drawCheck .7s .35s ease forwards;
        }

        .success-label {
            display: inline-flex;
            align-items: center;
            gap: 7px;
            margin-bottom: 13px;
            padding: 7px 13px;
            border: 1px solid rgba(233,189,97,.3);
            border-radius: 30px;
            background: rgba(201,154,53,.12);
            color: var(--gold-pale);
            font-size: 9px;
            font-weight: 800;
            letter-spacing: 1.4px;
        }

        .success-modal h2 {
            color: #FFFFFF;
            font-size: 23px;
            font-weight: 800;
            margin-bottom: 12px;
        }

        .success-modal p {
            color: #BBD3C6;
            font-size: 11px;
            line-height: 1.9;
            margin-bottom: 25px;
        }

        .success-modal p strong {
            color: var(--gold-light);
        }

        .success-button {
            width: 100%;
            height: 46px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 9px;
            border: 1px solid rgba(255,255,255,.2);
            border-radius: 11px;
            background: linear-gradient(110deg, #C99A35, #E9BD61);
            color: #062F2A;
            font-family: inherit;
            font-size: 11px;
            font-weight: 800;
            cursor: pointer;
            box-shadow: 0 8px 22px rgba(201,154,53,.2);
            transition: .3s ease;
        }

        .success-button:hover {
            transform: translateY(-3px);
            background: linear-gradient(110deg, #E9BD61, #F5DDA6);
            box-shadow: 0 12px 28px rgba(201,154,53,.3);
        }

        .success-sparkle {
            position: absolute;
            color: var(--gold-light);
            pointer-events: none;
            animation: sparkle 2.5s ease-in-out infinite;
        }

        .sparkle-one {
            top: 45px;
            left: 45px;
            font-size: 17px;
        }

        .sparkle-two {
            top: 90px;
            right: 40px;
            font-size: 12px;
            animation-delay: .7s;
        }

        .sparkle-three {
            bottom: 75px;
            right: 55px;
            font-size: 15px;
            animation-delay: 1.2s;
        }

        /* ANIMATIONS */

        @keyframes fadeUp {
            from {
                opacity: 0;
                transform: translateY(25px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes rotateSlow {
            to { transform: rotate(360deg); }
        }

        @keyframes glowMove {
            from { transform: translate(0,0) scale(1); }
            to { transform: translate(45px,-35px) scale(1.2); }
        }

        @keyframes particleFloat {
            0% {
                transform: translateY(0) scale(.5);
                opacity: 0;
            }
            15% { opacity: .65; }
            85% { opacity: .45; }
            100% {
                transform: translateY(-110vh) scale(1.3);
                opacity: 0;
            }
        }

        @keyframes successPulse {
            0%, 100% {
                box-shadow:
                    0 0 0 9px rgba(201,154,53,.10),
                    0 0 35px rgba(233,189,97,.28);
                transform: scale(1);
            }
            50% {
                box-shadow:
                    0 0 0 15px rgba(201,154,53,.06),
                    0 0 48px rgba(233,189,97,.4);
                transform: scale(1.04);
            }
        }

        @keyframes drawCheck {
            to { stroke-dashoffset: 0; }
        }

        @keyframes sparkle {
            0%, 100% {
                opacity: .3;
                transform: scale(.7) rotate(0deg);
            }
            50% {
                opacity: 1;
                transform: scale(1.3) rotate(25deg);
            }
        }

        /* RESPONSIVE */

        @media(max-width: 800px) {
            body {
                padding: 18px;
            }

            .login-wrapper {
                max-width: 480px;
                grid-template-columns: 1fr;
            }

            .login-info {
                min-height: 280px;
                padding: 28px;
                border-right: 0;
                border-bottom: 1px solid rgba(233,189,97,.25);
            }

            .brand-logo {
                width: 53px;
                height: 53px;
            }

            .brand-text h2 {
                font-size: 21px;
            }

            .info-main {
                margin-top: 35px;
            }

            .info-main h1 {
                font-size: 29px;
            }

            .info-main p {
                font-size: 10px;
            }

            .info-footer {
                margin-top: 35px;
                padding-top: 15px;
            }

            .login-panel {
                padding: 35px 28px;
            }
        }

        @media(max-width: 400px) {
            body {
                padding: 12px;
            }

            .login-info {
                padding: 23px;
            }

            .login-panel {
                padding: 30px 22px;
            }

            .info-main h1 {
                font-size: 25px;
            }

            .login-heading h2 {
                font-size: 24px;
            }

            .success-modal {
                padding: 35px 22px 25px;
            }

            .success-modal h2 {
                font-size: 21px;
            }
        }

        @media(prefers-reduced-motion: reduce) {
            *,
            *::before,
            *::after {
                animation-duration: .01ms !important;
                animation-iteration-count: 1 !important;
                transition-duration: .01ms !important;
            }
        }
    </style>
</head>

<body>

    <!-- BACKGROUND -->
    <div class="background-image"></div>
    <div class="ambient-glow glow-one"></div>
    <div class="ambient-glow glow-two"></div>
    <div id="particles" aria-hidden="true"></div>

    <!-- LOGIN WRAPPER -->
    <div class="login-wrapper">

        <!-- PANEL KIRI -->
        <section class="login-info">

            <div class="info-content">

                <div class="brand">

                    <img
                        src="{{ asset('images/logo-bkpsdm.png') }}"
                        class="brand-logo"
                        alt="Logo BKPSDM"
                    >

                    <div class="brand-text">
                        <h2>ASSETRA</h2>
                        <p>SISTEM INFORMASI<br>PENGELOLAAN ASET</p>
                    </div>

                </div>

                <div class="info-main">

                    <div class="info-label">
                        ✦ SISTEM INFORMASI MANAJEMEN ASET
                    </div>

                    <h1>
                        Selamat Datang di
                        <span>ASSETRA BKPSDM</span>
                    </h1>

                    <p>
                        Sistem Informasi Pengelolaan Aset Daerah
                        BKPSDM Kota Pontianak. Kelola data aset
                        dengan lebih mudah, terstruktur, dan efisien.
                    </p>

                    <div class="gold-line"></div>

                </div>

            </div>

            <div class="info-footer">
                <strong>BKPSDM KOTA PONTIANAK</strong><br>
                Mewujudkan pengelolaan aset yang tertib,
                transparan, dan profesional.
            </div>

        </section>

        <!-- PANEL LOGIN -->
        <section class="login-panel">

            <div class="login-card">

                <div class="login-heading">
                    <h2>Login Pengguna</h2>

                    <p>
                        Silakan masuk menggunakan akun yang telah
                        terdaftar untuk mengakses sistem ASSETRA.
                    </p>
                </div>

                @if($errors->any())
                    <div class="error">
                        ⚠️ {{ $errors->first() }}
                    </div>
                @endif

                @if(session('success'))
                    <div class="error" style="border-color:rgba(52,211,153,.4);color:#6EE7B7;background:rgba(6,78,59,.25);">
                        ✓ {{ session('success') }}
                    </div>
                @endif

                <form action="{{ route('login.process') }}" method="POST">
                    @csrf

                    <div class="form-group">

                        <label for="email">Email Pengguna</label>

                        <div class="input-wrapper">

                            <span class="input-icon">✉</span>

                            <input
                                type="email"
                                id="email"
                                name="email"
                                placeholder="Masukkan email"
                                value="{{ old('email') }}"
                                autocomplete="username"
                                required
                            >

                        </div>

                    </div>

                    <div class="form-group">

                        <label for="password">Password</label>

                        <div class="input-wrapper">

                            <span class="input-icon">🔒</span>

                            <input
                                type="password"
                                id="password"
                                name="password"
                                placeholder="Masukkan password"
                                autocomplete="current-password"
                                required
                            >

                            <button
                                type="button"
                                class="password-toggle"
                                id="togglePassword"
                                aria-label="Tampilkan password"
                            >
                                ◉
                            </button>

                        </div>

                    </div>

                    <button type="submit" class="login-button">
                        <span>Login</span>
                        <span class="button-arrow"></span>
                    </button>

                </form>

                <!-- LINK REGISTER -->
                <div class="register-link">
                    Belum punya akun?
                    <a href="{{ route('register') }}">Daftar Sekarang</a>
                </div>

                <div class="footer">
                    <div class="footer-mark">✦ ✦ ✦</div>
                    <strong>ASSETRA BKPSDM</strong>
                    <p>© {{ date('Y') }} BKPSDM Kota Pontianak.<br>All Rights Reserved.</p>
                </div>

            </div>

        </section>

    </div>

    <!-- POPUP BERHASIL LOGOUT -->
    @if(session('logout_success'))
    <div class="success-overlay" id="successLogoutPopup">

        <div class="success-modal" role="dialog" aria-modal="true" aria-labelledby="successTitle">

            <button
                type="button"
                class="success-close"
                id="closeSuccessPopup"
                aria-label="Tutup popup"
            >
                ×
            </button>

            <span class="success-sparkle sparkle-one">✦</span>
            <span class="success-sparkle sparkle-two">✧</span>
            <span class="success-sparkle sparkle-three">✦</span>

            <div class="success-content">

                <div class="success-icon">
                    <svg class="success-check" viewBox="0 0 40 40" aria-hidden="true">
                        <path d="M8 21 L16 29 L32 11"></path>
                    </svg>
                </div>

                <div class="success-label">
                    <span>✦</span>
                    LOGOUT BERHASIL
                    <span>✦</span>
                </div>

                <h2 id="successTitle">Anda Berhasil Logout!</h2>

                <p>
                    Terima kasih telah menggunakan
                    <strong>ASSETRA BKPSDM</strong>.<br>
                    Sesi Anda telah berakhir dengan aman.
                </p>

                <button
                    type="button"
                    class="success-button"
                    id="successOkButton"
                >
                    <span>Kembali ke Halaman Login</span>
                    <span></span>
                </button>

            </div>

        </div>

    </div>
    @endif

    <script>
        /* ANIMASI PARTIKEL EMAS */

        const particleContainer = document.getElementById('particles');

        if (
            particleContainer &&
            !window.matchMedia('(prefers-reduced-motion: reduce)').matches
        ) {
            for (let i = 0; i < 45; i++) {

                const particle = document.createElement('span');

                particle.className = 'particle';

                particle.style.left = Math.random() * 100 + '%';

                particle.style.animationDuration =
                    (7 + Math.random() * 12) + 's';

                particle.style.animationDelay =
                    (Math.random() * 10) + 's';

                const size = 2 + Math.random() * 4;

                particle.style.width = size + 'px';
                particle.style.height = size + 'px';

                particleContainer.appendChild(particle);
            }
        }

        /* TAMPILKAN / SEMBUNYIKAN PASSWORD */

        const togglePassword = document.getElementById('togglePassword');
        const passwordInput = document.getElementById('password');

        if (togglePassword && passwordInput) {
            togglePassword.addEventListener('click', function () {

                const isPassword = passwordInput.type === 'password';

                passwordInput.type = isPassword ? 'text' : 'password';

                togglePassword.textContent = isPassword ? '◎' : '◉';

                togglePassword.setAttribute(
                    'aria-label',
                    isPassword ? 'Sembunyikan password' : 'Tampilkan password'
                );

            });
        }

        /* POPUP BERHASIL LOGOUT */

        const successPopup = document.getElementById('successLogoutPopup');
        const closeSuccessPopup = document.getElementById('closeSuccessPopup');
        const successOkButton = document.getElementById('successOkButton');

        function hideSuccessPopup() {
            if (!successPopup) return;

            successPopup.classList.remove('show');

            setTimeout(function () {
                successPopup.style.display = 'none';
            }, 400);
        }

        if (successPopup) {

            // Tampilkan popup setelah halaman selesai dimuat
            requestAnimationFrame(function () {
                setTimeout(function () {
                    successPopup.classList.add('show');
                }, 150);
            });

            if (closeSuccessPopup) {
                closeSuccessPopup.addEventListener('click', hideSuccessPopup);
            }

            if (successOkButton) {
                successOkButton.addEventListener('click', hideSuccessPopup);
            }

            // Tutup popup jika area luar modal diklik
            successPopup.addEventListener('click', function (event) {
                if (event.target === successPopup) {
                    hideSuccessPopup();
                }
            });

            // Tutup popup dengan tombol Escape
            document.addEventListener('keydown', function (event) {
                if (event.key === 'Escape') {
                    hideSuccessPopup();
                }
            });
        }
    </script>

</body>
</html>
