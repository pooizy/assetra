
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pegawai - ASSETRA</title>

    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        :root {
            --dark: #041F1B;
            --dark-2: #073D32;
            --green: #10483D;
            --green-light: #176454;
            --gold: #C99A35;
            --gold-light: #E9BD61;
            --cream: #F5DDA6;
            --white: #FFFFFF;
            --muted: #A9C1B9;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            min-height: 100vh;
            color: var(--white);
            background:
                radial-gradient(circle at 15% 15%, rgba(23,100,84,.35), transparent 30%),
                radial-gradient(circle at 85% 80%, rgba(201,154,53,.12), transparent 30%),
                linear-gradient(135deg, var(--dark), var(--dark-2), #062A24);
            overflow-x: hidden;
        }

        /* BACKGROUND EFFECTS */
        .ambient {
            position: fixed;
            width: 350px;
            height: 350px;
            border-radius: 50%;
            filter: blur(100px);
            opacity: .17;
            pointer-events: none;
            z-index: 0;
            animation: ambientMove 10s ease-in-out infinite alternate;
        }

        .ambient-one {
            background: #1A9879;
            top: -120px;
            left: -100px;
        }

        .ambient-two {
            background: #C99A35;
            bottom: -150px;
            right: -100px;
            animation-delay: 2s;
        }

        @keyframes ambientMove {
            from { transform: translate(0, 0); }
            to { transform: translate(35px, 25px); }
        }

        .particles {
            position: fixed;
            inset: 0;
            pointer-events: none;
            overflow: hidden;
            z-index: 0;
        }

        .particle {
            position: absolute;
            width: var(--particle-size, 3px);
            height: var(--particle-size, 3px);
            background: var(--gold-light);
            border-radius: 50%;
            opacity: .4;
            box-shadow:
                0 0 6px rgba(233,189,97,.65),
                0 0 12px rgba(233,189,97,.25);
            animation: floatParticle var(--particle-duration, 12s) linear infinite;
        }

        @keyframes floatParticle {
            0% {
                transform: translate3d(0, 100vh, 0);
                opacity: 0;
            }
            15% { opacity: .45; }
            50% { transform: translate3d(25px, 50vh, 0); }
            85% { opacity: .4; }
            100% {
                transform: translate3d(-20px, -10vh, 0);
                opacity: 0;
            }
        }

        /* HEADER */
        .top-header {
            position: relative;
            z-index: 2;
            background: linear-gradient(110deg, rgba(4,31,27,.97), rgba(7,61,50,.96));
            border-bottom: 1px solid rgba(233,189,97,.3);
            box-shadow: 0 5px 25px rgba(0,0,0,.25);
            overflow: hidden;
        }

        .top-header::after {
            content: "";
            position: absolute;
            bottom: 0;
            left: -100%;
            width: 100%;
            height: 2px;
            background: linear-gradient(90deg, transparent, var(--gold-light), transparent);
            animation: shimmer 5s linear infinite;
        }

        @keyframes shimmer {
            to { left: 100%; }
        }

        .header-content {
            max-width: 1200px;
            margin: auto;
            padding: 17px 25px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 13px;
        }

        .brand-logo {
            width: 49px;
            height: 49px;
            object-fit: contain;
            padding: 5px;
            background: rgba(255,255,255,.95);
            border-radius: 12px;
            box-shadow: 0 0 15px rgba(233,189,97,.18);
        }

        .brand-name {
            color: var(--gold-light);
            font-size: 22px;
            font-weight: 800;
            letter-spacing: 1.5px;
        }

        .brand-subtitle {
            color: var(--muted);
            font-size: 10px;
            letter-spacing: 1.5px;
            margin-top: 4px;
        }

        .header-user {
            display: flex;
            align-items: center;
            gap: 11px;
            padding: 8px 13px;
            background: rgba(255,255,255,.055);
            border: 1px solid rgba(233,189,97,.2);
            border-radius: 12px;
        }

        .user-avatar {
            width: 35px;
            height: 35px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            color: var(--dark);
            background: linear-gradient(135deg, var(--gold-light), var(--gold));
            font-size: 14px;
            font-weight: 800;
        }

        .user-name {
            color: var(--cream);
            font-size: 11px;
            font-weight: 800;
        }

        .user-role {
            color: var(--muted);
            font-size: 10px;
            margin-top: 3px;
        }

        /* MAIN */
        main {
            position: relative;
            z-index: 1;
            max-width: 1100px;
            margin: 30px auto;
            padding: 0 22px 35px;
            animation: fadeUp .8s ease both;
        }

        @keyframes fadeUp {
            from {
                opacity: 0;
                transform: translateY(22px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* HERO */
        .hero {
            position: relative;
            min-height: 190px;
            display: flex;
            align-items: center;
            padding: 30px 35px;
            margin-bottom: 28px;
            border-radius: 18px;
            overflow: hidden;
            border: 1px solid rgba(233,189,97,.35);
            box-shadow: 0 15px 35px rgba(0,0,0,.25);
            background:
                linear-gradient(90deg,
                    rgba(4,31,27,.96) 0%,
                    rgba(4,31,27,.82) 55%,
                    rgba(4,31,27,.42) 100%),
                url('{{ asset("images/gedung-bkpsdm.png") }}') center 43%/cover;
        }

        .hero::after {
            content: "";
            position: absolute;
            width: 230px;
            height: 230px;
            right: 8%;
            top: -110px;
            border-radius: 50%;
            background: rgba(233,189,97,.12);
            filter: blur(15px);
        }

        .hero-content {
            position: relative;
            z-index: 1;
            max-width: 650px;
        }

        .hero-label {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: var(--gold-light);
            font-size: 10px;
            font-weight: 800;
            letter-spacing: 2px;
            margin-bottom: 12px;
        }

        .hero-label::before {
            content: "";
            width: 22px;
            height: 2px;
            background: var(--gold-light);
        }

        .hero h1 {
            color: var(--white);
            font-size: 29px;
            font-weight: 800;
            margin-bottom: 9px;
        }

        .hero p {
            color: #D4E4DC;
            font-size: 12px;
            line-height: 1.8;
            max-width: 540px;
        }

        /* BREADCRUMB */
        .breadcrumb {
            display: flex;
            align-items: center;
            gap: 9px;
            margin-bottom: 20px;
            color: var(--muted);
            font-size: 11px;
        }

        .breadcrumb a {
            color: var(--gold-light);
            text-decoration: none;
            transition: .25s;
        }

        .breadcrumb a:hover {
            color: var(--cream);
        }

        .breadcrumb span {
            color: rgba(233,189,97,.5);
        }

        /* FORM CARD */
        .form-card {
            max-width: 780px;
            margin: 0 auto;
            padding: 30px;
            border-radius: 17px;
            background: linear-gradient(
                145deg,
                rgba(16,72,61,.88),
                rgba(4,31,27,.94)
            );
            border: 1px solid rgba(233,189,97,.35);
            box-shadow:
                0 18px 45px rgba(0,0,0,.28),
                0 5px 20px rgba(201,154,53,.08),
                inset 0 1px 0 rgba(255,255,255,.06);
            backdrop-filter: blur(16px);
            transition: .3s ease;
        }

        .form-card:hover {
            border-color: rgba(233,189,97,.5);
            box-shadow:
                0 20px 45px rgba(0,0,0,.32),
                0 5px 25px rgba(201,154,53,.13);
        }

        .section-heading {
            display: flex;
            align-items: center;
            gap: 13px;
            margin-bottom: 25px;
            padding-bottom: 18px;
            border-bottom: 1px solid rgba(233,189,97,.22);
        }

        .section-icon {
            width: 43px;
            height: 43px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 11px;
            color: var(--gold-light);
            background: rgba(201,154,53,.14);
            border: 1px solid rgba(233,189,97,.3);
            font-size: 20px;
        }

        .section-heading h2 {
            color: var(--cream);
            font-size: 17px;
            font-weight: 800;
        }

        .section-heading p {
            color: var(--muted);
            font-size: 11px;
            margin-top: 5px;
        }

        /* ALERT */
        .alert {
            max-width: 780px;
            margin: 0 auto 18px;
            padding: 13px 16px;
            border-radius: 10px;
            font-size: 12px;
            animation: fadeUp .4s ease;
        }

        .alert-success {
            color: #B8F5D5;
            background: rgba(34,197,94,.12);
            border: 1px solid rgba(74,222,128,.35);
        }

        .alert-error {
            color: #FFC1C1;
            background: rgba(239,68,68,.12);
            border: 1px solid rgba(248,113,113,.35);
        }

        .error-list {
            max-width: 780px;
            margin: 0 auto 18px;
        }

        .error-list .alert {
            margin-bottom: 7px;
        }

        /* FORM INPUTS */
        .form-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 21px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
        }

        .form-group.full {
            grid-column: 1 / -1;
        }

        label {
            color: var(--cream);
            font-size: 12px;
            font-weight: 700;
            margin-bottom: 9px;
        }

        .required {
            color: var(--gold-light);
        }

        input {
            width: 100%;
            padding: 13px 15px;
            color: var(--white);
            font-family: inherit;
            font-size: 13px;
            background: rgba(4,31,27,.65);
            border: 1px solid rgba(169,193,185,.27);
            border-radius: 9px;
            outline: none;
            transition: .3s ease;
        }

        input::placeholder {
            color: rgba(169,193,185,.55);
        }

        input:focus {
            border-color: var(--gold-light);
            background: rgba(4,31,27,.9);
            box-shadow:
                0 0 0 3px rgba(233,189,97,.10),
                0 0 15px rgba(201,154,53,.12);
        }

        /* BUTTONS */
        .button-group {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-top: 28px;
            padding-top: 20px;
            border-top: 1px solid rgba(233,189,97,.17);
            flex-wrap: wrap;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 9px;
            padding: 12px 21px;
            border-radius: 9px;
            font-family: inherit;
            font-size: 12px;
            font-weight: 800;
            text-decoration: none;
            cursor: pointer;
            transition: .3s ease;
        }

        .btn-save {
            color: #263027;
            background: linear-gradient(135deg, var(--gold-light), var(--gold));
            border: 1px solid rgba(255,255,255,.2);
            box-shadow: 0 5px 15px rgba(201,154,53,.2);
        }

        .btn-save:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 22px rgba(233,189,97,.35);
            filter: brightness(1.08);
        }

        .btn-back {
            color: var(--cream);
            background: rgba(255,255,255,.045);
            border: 1px solid rgba(233,189,97,.35);
        }

        .btn-back:hover {
            color: var(--gold-light);
            background: rgba(233,189,97,.12);
            border-color: var(--gold-light);
            transform: translateY(-2px);
        }

        /* FOOTER */
        footer {
            position: relative;
            z-index: 1;
            text-align: center;
            padding: 22px 15px;
            border-top: 1px solid rgba(233,189,97,.18);
            color: rgba(169,193,185,.65);
            font-size: 11px;
        }

        footer span {
            color: var(--gold-light);
            font-weight: 800;
        }

        /* RESPONSIVE */
        @media (max-width: 650px) {
            .header-content {
                padding: 15px 17px;
            }

            .brand-logo {
                width: 42px;
                height: 42px;
            }

            .brand-name {
                font-size: 18px;
            }

            .brand-subtitle {
                font-size: 8px;
            }

            .header-user {
                padding: 6px;
            }

            .header-user > div:last-child {
                display: none;
            }

            main {
                margin: 22px auto;
                padding: 0 14px 25px;
            }

            .hero {
                min-height: 175px;
                padding: 24px 21px;
                background-position: center;
            }

            .hero h1 {
                font-size: 23px;
            }

            .hero p {
                font-size: 11px;
            }

            .form-card {
                padding: 21px 17px;
            }

            .section-heading h2 {
                font-size: 15px;
            }

            .form-grid {
                grid-template-columns: 1fr;
                gap: 17px;
            }

            .form-group.full {
                grid-column: auto;
            }

            .button-group {
                flex-direction: column;
                align-items: stretch;
            }

            .btn {
                width: 100%;
            }
        }

        @media (prefers-reduced-motion: reduce) {
            *, *::before, *::after {
                animation-duration: .01ms !important;
                animation-iteration-count: 1 !important;
                scroll-behavior: auto !important;
                transition-duration: .01ms !important;
            }
        }
    </style>
</head>

<body>

    <!-- BACKGROUND -->
    <div class="ambient ambient-one"></div>
    <div class="ambient ambient-two"></div>
    <div class="particles" id="particles"></div>

    <!-- HEADER -->
    <header class="top-header">
        <div class="header-content">

            <div class="brand">
                <img
                    src="{{ asset('images/logo-bkpsdm.png') }}"
                    alt="Logo BKPSDM"
                    class="brand-logo"
                >

                <div>
                    <div class="brand-name">ASSETRA</div>
                    <div class="brand-subtitle">
                        BKPSDM KOTA PONTIANAK
                    </div>
                </div>
            </div>

            <div class="header-user">
                <div class="user-avatar">
                    {{ strtoupper(substr(auth()->user()->name ?? 'U', 0, 1)) }}
                </div>

                <div>
                    <div class="user-name">
                        {{ auth()->user()->name ?? 'Pengguna' }}
                    </div>
                    <div class="user-role">
                        {{ auth()->user()->peran ?? 'Administrator' }}
                    </div>
                </div>
            </div>

        </div>
    </header>

    <!-- MAIN -->
    <main>

        <!-- HERO GEDUNG -->
        

      
        <!-- SUCCESS MESSAGE -->
        @if(session('success'))
            <div class="alert alert-success">
                ✓ {{ session('success') }}
            </div>
        @endif

        <!-- VALIDATION ERRORS -->
        @if($errors->any())
            <div class="error-list">
                @foreach($errors->all() as $error)
                    <div class="alert alert-error">
                        ⚠ {{ $error }}
                    </div>
                @endforeach
            </div>
        @endif

        <!-- FORM CARD -->
        <section class="form-card">

            <div class="section-heading">
                <div class="section-icon">✎</div>

                <div>
                    <h2>Form Edit Pegawai</h2>
                    <p>
                        Silakan perbarui informasi pegawai pada kolom berikut.
                    </p>
                </div>
            </div>

            <form
                action="{{ route('employees.update', $employee->id) }}"
                method="POST"
            >
                @csrf
                @method('PUT')

                <div class="form-grid">

                    <!-- NIP -->
                    <div class="form-group">
                        <label for="nip">
                            Nomor Induk Pegawai (NIP)
                            <span class="required">*</span>
                        </label>

                        <input
                            type="text"
                            id="nip"
                            name="nip"
                            value="{{ old('nip', $employee->nip) }}"
                            placeholder="Masukkan NIP"
                            required
                        >
                    </div>

                    <!-- NAMA -->
                    <div class="form-group">
                        <label for="nama_pegawai">
                            Nama Pegawai
                            <span class="required">*</span>
                        </label>

                        <input
                            type="text"
                            id="nama_pegawai"
                            name="nama_pegawai"
                            value="{{ old('nama_pegawai', $employee->nama_pegawai) }}"
                            placeholder="Masukkan nama pegawai"
                            required
                        >
                    </div>

                    <!-- JABATAN -->
                    <div class="form-group">
                        <label for="jabatan">
                            Jabatan
                        </label>

                        <input
                            type="text"
                            id="jabatan"
                            name="jabatan"
                            value="{{ old('jabatan', $employee->jabatan) }}"
                            placeholder="Masukkan jabatan pegawai"
                        >
                    </div>

                    <!-- TELEPON -->
                    <div class="form-group">
                        <label for="no_telepon">
                            Nomor Telepon
                        </label>

                        <input
                            type="text"
                            id="no_telepon"
                            name="no_telepon"
                            value="{{ old('no_telepon', $employee->no_telepon) }}"
                            placeholder="Masukkan nomor telepon"
                        >
                    </div>

                </div>

                <!-- BUTTONS -->
                <div class="button-group">

                    <button type="submit" class="btn btn-save">
                        <span></span>
                        Simpan Perubahan
                    </button>

                    <a
                        href="{{ route('employees.index') }}"
                        class="btn btn-back"
                    >
                        Kembali ke Data Pegawai
                    </a>

                </div>

            </form>

        </section>

    </main>

    <!-- FOOTER -->
    <footer>
        © {{ date('Y') }}
        <span>ASSETRA</span>
        BKPSDM Kota Pontianak. Seluruh hak cipta dilindungi.
    </footer>

    <!-- PARTICLE ANIMATION -->
    <script>
        const particleContainer = document.getElementById('particles');

        for (let i = 0; i < 55; i++) {
            const particle = document.createElement('span');

            particle.className = 'particle';

            particle.style.left = Math.random() * 100 + '%';

            particle.style.setProperty(
                '--particle-size',
                (2 + Math.random() * 4) + 'px'
            );

            particle.style.setProperty(
                '--particle-duration',
                (8 + Math.random() * 14) + 's'
            );

            particle.style.animationDelay =
                (Math.random() * 15) + 's';

            particleContainer.appendChild(particle);
        }
    </script>

</body>
</html>
