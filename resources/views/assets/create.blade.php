
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Aset - ASSETRA</title>

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

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background:
                radial-gradient(ellipse at 10% 10%, rgba(23,100,84,.35), transparent 35%),
                radial-gradient(ellipse at 90% 80%, rgba(201,154,53,.10), transparent 35%),
                linear-gradient(135deg, #041F1B, #073D32 55%, #041F1B);
            min-height: 100vh;
            color: var(--white);
            overflow-x: hidden;
            position: relative;
        }

        /* PARTICLE BACKGROUND */
        #particles {
            position: fixed;
            inset: 0;
            pointer-events: none;
            overflow: hidden;
            z-index: 0;
        }

        .particle {
            position: absolute;
            bottom: -20px;
            width: 4px;
            height: 4px;
            border-radius: 50%;
            background: var(--gold-light);
            box-shadow: 0 0 12px 2px rgba(233,189,97,.55);
            opacity: 0;
            animation: particleRise linear infinite;
        }

        @keyframes particleRise {
            0% {
                transform: translateY(0) translateX(0) scale(.5);
                opacity: 0;
            }
            15% {
                opacity: .8;
            }
            75% {
                opacity: .5;
            }
            100% {
                transform: translateY(-110vh) translateX(45px) scale(1.3);
                opacity: 0;
            }
        }

        /* LIGHT ORBS */
        .ambient {
            position: fixed;
            width: 350px;
            height: 350px;
            border-radius: 50%;
            filter: blur(100px);
            pointer-events: none;
            z-index: 0;
            opacity: .13;
            animation: ambientMove 12s ease-in-out infinite alternate;
        }

        .ambient-one {
            background: #C99A35;
            top: 10%;
            left: -180px;
        }

        .ambient-two {
            background: #16A085;
            right: -180px;
            bottom: 5%;
            animation-delay: -5s;
        }

        @keyframes ambientMove {
            from {
                transform: translate(0, 0) scale(.8);
            }
            to {
                transform: translate(100px, -60px) scale(1.2);
            }
        }

        /* HEADER */
        header {
            position: relative;
            overflow: hidden;
            padding: 22px 7%;
            background: linear-gradient(110deg, #041F1B, #10483D);
            background-size: 200% 200%;
            animation: headerGlow 10s ease infinite;
            border-bottom: 1px solid rgba(233,189,97,.35);
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
            z-index: 2;
        }

        header::before {
            content: "";
            position: absolute;
            width: 250px;
            height: 250px;
            border: 1px solid rgba(233,189,97,.13);
            border-radius: 50%;
            right: 12%;
            top: -180px;
            box-shadow:
                0 0 0 25px rgba(233,189,97,.025),
                0 0 0 50px rgba(233,189,97,.02);
        }

        @keyframes headerGlow {
            0%, 100% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 15px;
            position: relative;
            z-index: 1;
            animation: slideRight .8s ease both;
        }

        @keyframes slideRight {
            from {
                opacity: 0;
                transform: translateX(-25px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .brand img {
            width: 55px;
            height: 55px;
            object-fit: contain;
            background: white;
            padding: 5px;
            border-radius: 13px;
            box-shadow: 0 5px 20px rgba(0,0,0,.2);
            transition: .4s;
        }

        .brand img:hover {
            transform: rotate(-7deg) scale(1.1);
            box-shadow: 0 0 25px rgba(233,189,97,.5);
        }

        .brand h2 {
            font-size: 19px;
            font-weight: 800;
            letter-spacing: .5px;
        }

        .brand p {
            color: var(--gold-light);
            font-size: 10px;
            margin-top: 5px;
            letter-spacing: 1.5px;
            text-transform: uppercase;
        }

        .header-label {
            color: var(--cream);
            font-size: 12px;
            font-weight: 600;
            position: relative;
            z-index: 1;
            animation: fadeIn 1.2s ease both;
        }

        /* MAIN */
        main {
            position: relative;
            z-index: 1;
            max-width: 1000px;
            margin: 38px auto;
            padding: 0 22px 45px;
        }

        /* HERO */
        .hero {
            position: relative;
            overflow: hidden;
            min-height: 200px;
            padding: 32px 36px;
            border-radius: 22px;
            margin-bottom: 27px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            background:
                linear-gradient(90deg, rgba(4,31,27,.96), rgba(7,61,50,.80)),
                url("{{ asset('images/gedung-bkpsdm.png') }}") center/cover;
            border: 1px solid rgba(233,189,97,.3);
            box-shadow: 0 18px 45px rgba(0,0,0,.25);
            animation: heroReveal .9s ease both;
        }

        .hero::before {
            content: "";
            position: absolute;
            top: -100%;
            left: -45%;
            width: 40%;
            height: 300%;
            background: linear-gradient(
                90deg,
                transparent,
                rgba(233,189,97,.15),
                transparent
            );
            transform: rotate(25deg);
            animation: goldSweep 7s ease-in-out infinite;
        }

        .hero::after {
            content: "";
            position: absolute;
            inset: 0;
            border-radius: inherit;
            background: linear-gradient(
                120deg,
                transparent 30%,
                rgba(255,255,255,.035) 50%,
                transparent 70%
            );
            background-size: 200% 100%;
            animation: glassSweep 6s linear infinite;
            pointer-events: none;
        }

        @keyframes goldSweep {
            0%, 15% { left: -50%; }
            75%, 100% { left: 140%; }
        }

        @keyframes glassSweep {
            from { background-position: 150% 0; }
            to { background-position: -150% 0; }
        }

        @keyframes heroReveal {
            from {
                opacity: 0;
                transform: translateY(25px) scale(.98);
            }
            to {
                opacity: 1;
                transform: translateY(0) scale(1);
            }
        }

        .hero-content {
            position: relative;
            z-index: 2;
        }

        .hero-tag {
            display: inline-block;
            color: var(--gold-light);
            background: rgba(201,154,53,.13);
            border: 1px solid rgba(233,189,97,.35);
            padding: 8px 14px;
            border-radius: 30px;
            font-size: 10px;
            font-weight: 800;
            letter-spacing: 1.5px;
            margin-bottom: 14px;
            animation: tagPulse 3s ease-in-out infinite;
        }

        @keyframes tagPulse {
            0%, 100% { box-shadow: 0 0 0 rgba(233,189,97,0); }
            50% { box-shadow: 0 0 18px rgba(233,189,97,.18); }
        }

        .hero h1 {
            font-size: clamp(24px, 4vw, 34px);
            font-weight: 800;
            margin-bottom: 9px;
            letter-spacing: -.8px;
        }

        .hero p {
            color: #C3D8D0;
            font-size: 13px;
            line-height: 1.8;
        }

        .hero-icon {
            font-size: 72px;
            position: relative;
            z-index: 2;
            filter: drop-shadow(0 8px 18px rgba(201,154,53,.3));
            animation: floating 3.5s ease-in-out infinite;
        }

        @keyframes floating {
            0%, 100% {
                transform: translateY(0) rotate(-5deg);
            }
            50% {
                transform: translateY(-15px) rotate(5deg);
            }
        }

        /* CARD FORM */
        .card {
            position: relative;
            overflow: hidden;
            background: rgba(10,54,46,.82);
            backdrop-filter: blur(18px);
            -webkit-backdrop-filter: blur(18px);
            border: 1px solid rgba(233,189,97,.28);
            border-radius: 22px;
            padding: 32px;
            box-shadow: 0 20px 55px rgba(0,0,0,.25);
            animation: cardReveal 1s .15s ease both;
            transition: box-shadow .4s, transform .4s;
        }

        .card::before {
            content: "";
            position: absolute;
            inset: 0;
            border-radius: inherit;
            padding: 1px;
            background: linear-gradient(
                135deg,
                rgba(233,189,97,.4),
                transparent 35%,
                transparent 65%,
                rgba(233,189,97,.2)
            );
            -webkit-mask:
                linear-gradient(#fff 0 0) content-box,
                linear-gradient(#fff 0 0);
            -webkit-mask-composite: xor;
            mask-composite: exclude;
            pointer-events: none;
        }

        .card::after {
            content: "";
            position: absolute;
            top: 0;
            left: -100%;
            width: 50%;
            height: 1px;
            background: linear-gradient(90deg, transparent, #E9BD61, transparent);
            animation: borderLight 6s linear infinite;
        }

        @keyframes borderLight {
            0% { left: -60%; }
            100% { left: 120%; }
        }

        @keyframes cardReveal {
            from {
                opacity: 0;
                transform: perspective(1000px) translateY(35px) rotateX(4deg);
            }
            to {
                opacity: 1;
                transform: perspective(1000px) translateY(0) rotateX(0);
            }
        }

        .card-top {
            position: relative;
            z-index: 1;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 15px;
            flex-wrap: wrap;
            padding-bottom: 23px;
            margin-bottom: 26px;
            border-bottom: 1px solid rgba(233,189,97,.18);
        }

        .card-title {
            display: flex;
            align-items: center;
            gap: 13px;
        }

        .title-icon {
            width: 48px;
            height: 48px;
            display: grid;
            place-items: center;
            background: linear-gradient(145deg, rgba(201,154,53,.2), rgba(201,154,53,.05));
            border: 1px solid rgba(233,189,97,.35);
            border-radius: 14px;
            font-size: 22px;
            transition: .4s;
        }

        .title-icon:hover {
            transform: rotate(12deg) scale(1.12);
            box-shadow: 0 0 20px rgba(233,189,97,.2);
        }

        .card-title h2 {
            font-size: 18px;
            font-weight: 800;
        }

        .card-title p {
            color: var(--muted);
            font-size: 11px;
            margin-top: 5px;
        }

        .back {
            display: inline-flex;
            align-items: center;
            gap: 7px;
            text-decoration: none;
            color: var(--gold-light);
            font-size: 12px;
            font-weight: 700;
            padding: 11px 16px;
            border: 1px solid rgba(233,189,97,.35);
            border-radius: 10px;
            transition: .3s;
        }

        .back:hover {
            background: var(--gold);
            color: var(--dark);
            transform: translateX(-4px);
            box-shadow: 0 5px 18px rgba(201,154,53,.2);
        }

        /* ERROR */
        .error {
            position: relative;
            z-index: 1;
            background: rgba(220,38,38,.12);
            border: 1px solid rgba(248,113,113,.4);
            color: #FCA5A5;
            border-radius: 12px;
            padding: 15px 20px;
            margin-bottom: 22px;
            font-size: 12px;
            animation: errorShake .45s ease;
        }

        @keyframes errorShake {
            0%, 100% { transform: translateX(0); }
            25% { transform: translateX(-5px); }
            75% { transform: translateX(5px); }
        }

        .error strong {
            display: block;
            margin-bottom: 8px;
        }

        .error ul {
            padding-left: 20px;
            line-height: 1.8;
        }

        /* FORM */
        .form-grid {
            position: relative;
            z-index: 1;
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 21px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            animation: fieldReveal .7s ease both;
        }

        .form-group:nth-child(1) { animation-delay: .10s; }
        .form-group:nth-child(2) { animation-delay: .16s; }
        .form-group:nth-child(3) { animation-delay: .22s; }
        .form-group:nth-child(4) { animation-delay: .28s; }
        .form-group:nth-child(5) { animation-delay: .34s; }
        .form-group:nth-child(6) { animation-delay: .40s; }
        .form-group:nth-child(7) { animation-delay: .46s; }
        .form-group:nth-child(8) { animation-delay: .52s; }
        .form-group:nth-child(9) { animation-delay: .58s; }

        @keyframes fieldReveal {
            from {
                opacity: 0;
                transform: translateY(15px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .form-group.full {
            grid-column: 1 / -1;
        }

        label {
            color: #E7F1EC;
            font-size: 12px;
            font-weight: 700;
            margin-bottom: 9px;
            transition: color .3s;
        }

        .required {
            color: var(--gold-light);
        }

        input, select, textarea {
            width: 100%;
            padding: 14px 15px;
            background: rgba(4,31,27,.7);
            border: 1px solid rgba(169,193,185,.25);
            border-radius: 11px;
            color: white;
            font-family: inherit;
            font-size: 12px;
            outline: none;
            transition: .3s ease;
        }

        input::placeholder,
        textarea::placeholder {
            color: #78958B;
        }

        select {
            cursor: pointer;
        }

        select option {
            background: #073D32;
            color: white;
        }

        input:focus,
        select:focus,
        textarea:focus {
            transform: translateY(-3px);
            border-color: var(--gold-light);
            background: rgba(4,31,27,.95);
            box-shadow:
                0 0 0 3px rgba(201,154,53,.13),
                0 8px 22px rgba(201,154,53,.08);
        }

        .form-group:focus-within label {
            color: var(--gold-light);
        }

        input[type="date"]::-webkit-calendar-picker-indicator {
            filter: invert(1);
            cursor: pointer;
        }

        textarea {
            resize: vertical;
            min-height: 110px;
        }

        .form-hint {
            color: #91AEA2;
            font-size: 10px;
            margin-top: 8px;
        }

        /* ACTION BUTTON */
        .form-actions {
            position: relative;
            z-index: 1;
            display: flex;
            justify-content: flex-end;
            gap: 12px;
            flex-wrap: wrap;
            margin-top: 30px;
            padding-top: 24px;
            border-top: 1px solid rgba(233,189,97,.18);
        }

        .btn {
            display: inline-flex;
            justify-content: center;
            align-items: center;
            gap: 8px;
            padding: 14px 23px;
            border-radius: 11px;
            font-family: inherit;
            font-size: 12px;
            font-weight: 800;
            text-decoration: none;
            cursor: pointer;
            transition: .3s ease;
        }

        .btn-cancel {
            color: #D3E2DC;
            background: rgba(255,255,255,.06);
            border: 1px solid rgba(255,255,255,.15);
        }

        .btn-cancel:hover {
            background: rgba(255,255,255,.13);
            transform: translateY(-3px);
        }

        .btn-submit {
            position: relative;
            overflow: hidden;
            isolation: isolate;
            color: #2D2109;
            background: linear-gradient(135deg, #F5DDA6, #E9BD61, #C99A35);
            background-size: 200% 200%;
            border: 1px solid #E9BD61;
            box-shadow: 0 7px 20px rgba(201,154,53,.22);
            animation: buttonGlow 4s ease infinite;
        }

        @keyframes buttonGlow {
            0%, 100% {
                background-position: 0% 50%;
                box-shadow: 0 7px 20px rgba(201,154,53,.2);
            }
            50% {
                background-position: 100% 50%;
                box-shadow: 0 7px 28px rgba(201,154,53,.38);
            }
        }

        .btn-submit::before {
            content: "";
            position: absolute;
            top: 0;
            left: -120%;
            width: 65%;
            height: 100%;
            background: linear-gradient(
                100deg,
                transparent,
                rgba(255,255,255,.7),
                transparent
            );
            transform: skewX(-25deg);
            transition: left .7s ease;
            z-index: -1;
        }

        .btn-submit:hover::before {
            left: 150%;
        }

        .btn-submit:hover {
            transform: translateY(-4px) scale(1.035);
            box-shadow: 0 12px 30px rgba(201,154,53,.4);
        }

        .btn-submit:active {
            transform: scale(.97);
        }

        /* FOOTER */
        footer {
            position: relative;
            z-index: 1;
            text-align: center;
            color: #8EAAA0;
            font-size: 10px;
            padding: 22px;
            border-top: 1px solid rgba(233,189,97,.12);
            background: rgba(4,31,27,.3);
        }

        footer span {
            color: var(--gold-light);
            font-weight: 700;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        /* RESPONSIVE */
        @media (max-width: 650px) {
            header {
                padding: 17px 20px;
            }

            .header-label {
                display: none;
            }

            main {
                margin-top: 22px;
                padding: 0 14px 30px;
            }

            .hero {
                padding: 25px 22px;
                min-height: 165px;
            }

            .hero-icon {
                font-size: 45px;
            }

            .card {
                padding: 21px 16px;
            }

            .form-grid {
                grid-template-columns: 1fr;
                gap: 18px;
            }

            .form-group.full {
                grid-column: auto;
            }

            .form-actions {
                flex-direction: column-reverse;
            }

            .btn {
                width: 100%;
            }

            .brand h2 {
                font-size: 16px;
            }

            .brand p {
                font-size: 9px;
                letter-spacing: 1px;
            }
        }

        /* AKSESIBILITAS */
        @media (prefers-reduced-motion: reduce) {
            *,
            *::before,
            *::after {
                animation: none !important;
                transition: none !important;
                scroll-behavior: auto !important;
            }
        }
    </style>
</head>

<body>

<!-- BACKGROUND EFFECTS -->
<div id="particles" aria-hidden="true"></div>
<div class="ambient ambient-one"></div>
<div class="ambient ambient-two"></div>

<!-- HEADER -->
<header>
    <div class="brand">
        <img src="{{ asset('images/logo-bkpsdm.png') }}" alt="Logo BKPSDM">

        <div>
            <h2>ASSETRA BKPSDM</h2>
            <p>Sistem Informasi Manajemen Aset</p>
        </div>
    </div>

    <div class="header-label">
        🏛️ Pemerintah Kota Pontianak
    </div>
</header>

<main>

    <!-- HERO -->
    <section class="hero">
        <div class="hero-content">
            <span class="hero-tag">MANAJEMEN INVENTARIS ✦</span>

            <h1>Tambah Data Aset</h1>

            <p>
                Lengkapi informasi aset untuk memperbarui data inventaris
                <br>BKPSDM Kota Pontianak.
            </p>
        </div>

        <div class="hero-icon">📦</div>
    </section>

    <!-- FORM CARD -->
    <div class="card">

        <div class="card-top">
            <div class="card-title">
                <div class="title-icon">📝</div>

                <div>
                    <h2>Form Tambah Aset</h2>
                    <p>Masukkan informasi aset dengan benar dan lengkap</p>
                </div>
            </div>

          
        </div>

        <!-- VALIDASI -->
        @if ($errors->any())
            <div class="error">
                <strong>⚠️ Terdapat kesalahan pada pengisian data:</strong>

                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- FORM -->
        <form action="{{ route('assets.store') }}" method="POST">
            @csrf

            <div class="form-grid">

                <div class="form-group">
                    <label>Kode Aset <span class="required">*</span></label>

                    <input
                        type="text"
                        name="kode_aset"
                        value="{{ old('kode_aset') }}"
                        placeholder="Contoh: AST-001"
                        required
                    >
                </div>

                <div class="form-group">
                    <label>Nama Aset <span class="required">*</span></label>

                    <input
                        type="text"
                        name="nama_aset"
                        value="{{ old('nama_aset') }}"
                        placeholder="Masukkan nama aset"
                        required
                    >
                </div>

                <div class="form-group">
                    <label>Kategori <span class="required">*</span></label>

                    <select name="category_id" required>
                        <option value="">Pilih Kategori</option>

                        @foreach ($categories as $category)
                            <option
                                value="{{ $category->id }}"
                                {{ old('category_id') == $category->id ? 'selected' : '' }}
                            >
                                {{ $category->nama_kategori }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label>Ruangan</label>

                    <select name="room_id">
                        <option value="">Pilih Ruangan</option>

                        @foreach ($rooms as $room)
                            <option
                                value="{{ $room->id }}"
                                {{ old('room_id') == $room->id ? 'selected' : '' }}
                            >
                                {{ $room->nama_ruangan }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label>Penanggung Jawab</label>

                    <select name="employee_id">
                        <option value="">Pilih Pegawai</option>

                        @foreach ($employees as $employee)
                            <option
                                value="{{ $employee->id }}"
                                {{ old('employee_id') == $employee->id ? 'selected' : '' }}
                            >
                                {{ $employee->nama_pegawai }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label>Jumlah <span class="required">*</span></label>

                    <input
                        type="number"
                        name="jumlah"
                        min="1"
                        value="{{ old('jumlah',) }}"
                        placeholder="Masukkan jumlah aset"
                        required
                    >
                </div>

                <div class="form-group">
                    <label>Pilih Kondisi <span class="required">*</span></label>

                    <select name="kondisi" required>
                        <option value="">Pilih Kondisi</option>

                        <option value="Baik" {{ old('kondisi') == 'Baik' ? 'selected' : '' }}>
                            Baik
                        </option>

                        <option value="Rusak Ringan" {{ old('kondisi') == 'Rusak Ringan' ? 'selected' : '' }}>
                            Rusak Ringan
                        </option>

                        <option value="Rusak Berat" {{ old('kondisi') == 'Rusak Berat' ? 'selected' : '' }}>
                            Rusak Berat
                        </option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Tanggal Perolehan</label>

                    <input
                        type="date"
                        name="tanggal_perolehan"
                        value="{{ old('tanggal_perolehan') }}"
                    >
                </div>

                <div class="form-group full">
                    <label>Keterangan</label>

                    <textarea
                        name="keterangan"
                        rows="4"
                        placeholder="Tambahkan keterangan atau informasi tambahan mengenai aset..."
                    >{{ old('keterangan') }}</textarea>

                    <span class="form-hint">
                        
                    </span>
                </div>

            </div>

            <!-- BUTTON -->
            <div class="form-actions">

                <a href="{{ route('assets.index') }}" class="btn btn-cancel">
                    Batal
                </a>

                <button type="submit" class="btn btn-submit">
                    Simpan Data Aset
                </button>

            </div>

        </form>
    </div>

</main>

<footer>
    © {{ date('Y') }}
    <span>ASSETRA BKPSDM Kota Pontianak</span>
    · Sistem Informasi Manajemen Aset
</footer>

<!-- PARTICLE ANIMATION -->
<script>
    (function () {
        const container = document.getElementById('particles');

        const reducedMotion = window.matchMedia(
            '(prefers-reduced-motion: reduce)'
        ).matches;

        if (reducedMotion || !container) return;

        const particleCount = window.innerWidth < 650 ? 12 : 24;

        for (let i = 0; i < particleCount; i++) {
            const particle = document.createElement('span');

            particle.className = 'particle';

            const size = Math.random() * 3 + 2;
            const duration = Math.random() * 12 + 9;
            const delay = Math.random() * 12;

            particle.style.left = Math.random() * 100 + '%';
            particle.style.width = size + 'px';
            particle.style.height = size + 'px';
            particle.style.animationDuration = duration + 's';
            particle.style.animationDelay = '-' + delay + 's';

            container.appendChild(particle);
        }
    })();
</script>

</body>
</html>
