
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register ASSETRA BKPSDM</title>

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

        /* REGISTER LAYOUT */

        .register-wrapper {
            width: 100%;
            max-width: 1050px;
            min-height: 650px;
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

        .register-info {
            min-height: 650px;
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

        .register-info::before {
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

        .register-info::after {
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

        .register-panel {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 38px;
            background:
                radial-gradient(circle at top right, rgba(201,154,53,.11), transparent 35%),
                linear-gradient(145deg, rgba(16,72,61,.95), rgba(4,31,27,.96));
        }

        .register-card {
            width: 100%;
            max-width: 370px;
            animation: fadeIn 1s ease both;
        }

        .register-heading {
            margin-bottom: 22px;
        }

        .register-heading h2 {
            font-size: 27px;
            font-weight: 800;
            color: #FFFFFF;
        }

        .register-heading p {
            margin-top: 8px;
            color: #B5CFC1;
            font-size: 11px;
            line-height: 1.7;
        }

        /* NOTICE */

        .notice {
            display: flex;
            align-items: flex-start;
            gap: 10px;
            padding: 12px 13px;
            margin-bottom: 20px;
            border: 1px solid rgba(233,189,97,.32);
            border-radius: 11px;
            background: rgba(201,154,53,.10);
            color: #F5DDA6;
            font-size: 10px;
            line-height: 1.8;
        }

        .notice-icon {
            color: var(--gold-light);
            font-size: 16px;
            flex-shrink: 0;
        }

        /* ERROR */

        .error {
            padding: 13px 15px;
            margin-bottom: 18px;
            border: 1px solid rgba(248,113,113,.4);
            border-radius: 11px;
            color: #FCA5A5;
            background: rgba(127,29,29,.2);
            font-size: 11px;
            line-height: 1.7;
            animation: fadeUp .35s ease;
        }

        .field-error {
            color: #FCA5A5;
            font-size: 10px;
            margin-top: 7px;
        }

        /* FORM */

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
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
            font-size: 16px;
            pointer-events: none;
        }

        input {
            width: 100%;
            height: 46px;
            padding: 0 43px;
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

        .register-button {
            width: 100%;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            margin-top: 8px;
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

        .register-button:hover {
            transform: translateY(-3px);
            background: linear-gradient(110deg, #E9BD61, #F5DDA6);
            box-shadow: 0 12px 28px rgba(201,154,53,.32);
        }

        .button-arrow {
            font-size: 17px;
            transition: transform .25s;
        }

        .register-button:hover .button-arrow {
            transform: translateX(5px);
        }

        /* LINK KEMBALI */

        .back-login {
            text-align: center;
            margin-top: 15px;
        }

        .back-login a {
            color: var(--gold-light);
            font-size: 11px;
            font-weight: 700;
            text-decoration: none;
            transition: .25s ease;
        }

        .back-login a:hover {
            color: var(--gold-pale);
            text-decoration: underline;
        }

        /* FOOTER */

        .footer {
            margin-top: 23px;
            padding-top: 17px;
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

        .footer a {
            color: var(--gold-light);
            font-weight: 800;
            text-decoration: none;
        }

        .footer a:hover {
            color: var(--gold-pale);
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

        /* RESPONSIVE */

        @media(max-width: 800px) {
            body {
                padding: 18px;
            }

            .register-wrapper {
                max-width: 480px;
                grid-template-columns: 1fr;
            }

            .register-info {
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

            .register-panel {
                padding: 35px 28px;
            }
        }

        @media(max-width: 400px) {
            body {
                padding: 12px;
            }

            .register-info {
                padding: 23px;
            }

            .register-panel {
                padding: 30px 22px;
            }

            .info-main h1 {
                font-size: 25px;
            }

            .register-heading h2 {
                font-size: 24px;
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

    <!-- REGISTER WRAPPER -->
    <div class="register-wrapper">

        <!-- PANEL KIRI -->
        <section class="register-info">

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
                        ✦ PENDAFTARAN PENGGUNA
                    </div>

                    <h1>
                        Bergabung dengan
                        <span>ASSETRA BKPSDM</span>
                    </h1>

                    <p>
                        Buat akun untuk mengakses Sistem Informasi
                        Pengelolaan Aset Daerah BKPSDM Kota Pontianak.
                        Pendaftaran akan ditinjau oleh Admin sebelum
                        akun dapat digunakan.
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

        <!-- PANEL REGISTER -->
        <section class="register-panel">

            <div class="register-card">

                <div class="register-heading">
                    <h2>Buat Akun Baru</h2>

                    <p>
                        Lengkapi formulir berikut untuk mendaftar
                        sebagai pengguna sistem ASSETRA.
                    </p>
                </div>

                <div class="notice">
                    <span class="notice-icon">ⓘ</span>
                    <span>
                        Akun yang didaftarkan akan menunggu persetujuan
                        Admin. Setelah disetujui, kamu dapat login
                        menggunakan email dan password yang didaftarkan.
                    </span>
                </div>

                @if($errors->any())
                    <div class="error">
                        ⚠️ {{ $errors->first() }}
                    </div>
                @endif

                <form action="{{ route('register.process') }}" method="POST">
                    @csrf

                    <!-- NAMA -->
                    <div class="form-group">

                        <label for="name">Nama Lengkap</label>

                        <div class="input-wrapper">

                            <span class="input-icon">👤</span>

                            <input
                                type="text"
                                id="name"
                                name="name"
                                placeholder="Masukkan nama lengkap"
                                value="{{ old('name') }}"
                                autocomplete="name"
                                required
                            >

                        </div>

                        @error('name')
                            <div class="field-error">{{ $message }}</div>
                        @enderror

                    </div>

                    <!-- EMAIL -->
                    <div class="form-group">

                        <label for="email">Email Pengguna</label>

                        <div class="input-wrapper">

                            <span class="input-icon">✉️</span>

                            <input
                                type="email"
                                id="email"
                                name="email"
                                placeholder="Masukkan email"
                                value="{{ old('email') }}"
                                autocomplete="email"
                                required
                            >

                        </div>

                        @error('email')
                            <div class="field-error">{{ $message }}</div>
                        @enderror

                    </div>

                    <!-- PASSWORD -->
                    <div class="form-group">

                        <label for="password">Password</label>

                        <div class="input-wrapper">

                            <span class="input-icon">🔒</span>

                            <input
                                type="password"
                                id="password"
                                name="password"
                                placeholder="Minimal 8 karakter"
                                autocomplete="new-password"
                                required
                            >

                            <button
                                type="button"
                                class="password-toggle"
                                data-target="password"
                                aria-label="Tampilkan password"
                            >
                                ◉
                            </button>

                        </div>

                        @error('password')
                            <div class="field-error">{{ $message }}</div>
                        @enderror

                    </div>

                    <!-- KONFIRMASI PASSWORD -->
                    <div class="form-group">

                        <label for="password_confirmation">Konfirmasi Password</label>

                        <div class="input-wrapper">

                            <span class="input-icon">🔒</span>

                            <input
                                type="password"
                                id="password_confirmation"
                                name="password_confirmation"
                                placeholder="Ulangi password"
                                autocomplete="new-password"
                                required
                            >

                            <button
                                type="button"
                                class="password-toggle"
                                data-target="password_confirmation"
                                aria-label="Tampilkan konfirmasi password"
                            >
                                ◉
                            </button>

                        </div>

                    </div>

                    <button type="submit" class="register-button">
                        <span>Daftar Sekarang</span>
                        <span class="button-arrow"></span>
                    </button>

                </form>

                <!-- KEMBALI KE LOGIN -->
                <div class="back-login">
                    <a href="{{ route('login') }}">
                        Kembali
                    </a>
                </div>

                <div class="footer">
                    <div class="footer-mark">✦ ✦ ✦</div>

                    <strong>ASSETRA BKPSDM</strong>

                    <p>
                        Sudah punya akun?
                        <a href="{{ route('login') }}">Login di sini</a>
                    </p>

                    <p>
                        © {{ date('Y') }} BKPSDM Kota Pontianak.<br>
                        All Rights Reserved.
                    </p>
                </div>

            </div>

        </section>

    </div>

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

        document.querySelectorAll('.password-toggle').forEach(function(button) {

            button.addEventListener('click', function() {

                const targetId = button.dataset.target;
                const passwordInput = document.getElementById(targetId);

                if (!passwordInput) return;

                const isPassword = passwordInput.type === 'password';

                passwordInput.type = isPassword ? 'text' : 'password';

                button.textContent = isPassword ? '◎' : '◉';

                button.setAttribute(
                    'aria-label',
                    isPassword ? 'Sembunyikan password' : 'Tampilkan password'
                );

            });

        });
    </script>

</body>
</html>
