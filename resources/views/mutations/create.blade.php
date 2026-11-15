
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mutasi - ASSETRA</title>

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
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            font-family: 'Plus Jakarta Sans', sans-serif;
            color: var(--white);
            overflow-x: hidden;
            background:
                radial-gradient(circle at 15% 15%, rgba(23,100,84,.25), transparent 35%),
                radial-gradient(circle at 85% 80%, rgba(201,154,53,.10), transparent 35%),
                linear-gradient(135deg, var(--dark), var(--dark-2), #062A24);
        }

        /* BACKGROUND AMBIENT */
        .ambient {
            position: fixed;
            width: 350px;
            height: 350px;
            border-radius: 50%;
            filter: blur(100px);
            opacity: .15;
            pointer-events: none;
            z-index: 0;
            animation: ambientMove 9s ease-in-out infinite alternate;
        }

        .ambient.one {
            background: #1C9B77;
            top: -120px;
            left: -100px;
        }

        .ambient.two {
            background: #C99A35;
            bottom: -150px;
            right: -100px;
            animation-delay: 2s;
        }

        @keyframes ambientMove {
            from { transform: translate(0, 0); }
            to { transform: translate(40px, 30px); }
        }

        /* PARTIKEL */
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

        /* PETIR */
        .lightning-effects {
            position: fixed;
            inset: 0;
            overflow: hidden;
            pointer-events: none;
            z-index: 0;
        }

        .lightning {
            position: absolute;
            width: 55px;
            height: 100px;
            opacity: 0;
            background: linear-gradient(
                180deg,
                rgba(233,189,97,.95),
                rgba(23,100,84,.65)
            );
            clip-path: polygon(
                55% 0, 25% 42%, 48% 42%,
                20% 100%, 78% 35%, 53% 35%
            );
            filter: drop-shadow(0 0 8px rgba(233,189,97,.9));
        }

        .lightning.flash {
            animation: lightningFlash .65s ease-out;
        }

        @keyframes lightningFlash {
            0% { opacity: 0; transform: scale(.7); }
            15% {
                opacity: .8;
                transform: scale(1);
                filter: brightness(2);
            }
            30% { opacity: .15; }
            45% {
                opacity: .65;
                filter: brightness(1.8);
            }
            100% {
                opacity: 0;
                transform: scale(1.05);
            }
        }

        /* HEADER */
        header {
            position: relative;
            z-index: 2;
            padding: 22px 30px;
            background: linear-gradient(
                110deg,
                rgba(4,31,27,.97),
                rgba(7,61,50,.95)
            );
            border-bottom: 1px solid rgba(233,189,97,.35);
            box-shadow: 0 5px 25px rgba(0,0,0,.25);
            animation: slideDown .7s ease;
        }

        .header-content {
            max-width: 1500px;
            margin: auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
        }

        .header-brand {
            display: flex;
            align-items: center;
            gap: 18px;
        }

        .header-logo {
            width: 76px;
            height: 76px;
            object-fit: contain;
            background: white;
            padding: 5px;
            box-shadow: 0 5px 18px rgba(0,0,0,.2);
        }

        .brand-text h2 {
            margin: 0;
            font-size: 35px;
            font-weight: 800;
            letter-spacing: 1px;
            color: var(--gold-light);
        }

        .brand-text p {
            margin: 5px 0 0;
            color: var(--muted);
            font-size: 15px;
            font-weight: 700;
            letter-spacing: 1.5px;
        }

        .btn-dashboard {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            padding: 15px 23px;
            border-radius: 12px;
            background: rgba(23,100,84,.25);
            color: var(--gold-light);
            border: 1px solid rgba(233,189,97,.45);
            font-size: 14px;
            font-weight: 800;
            text-decoration: none;
            white-space: nowrap;
            transition: .3s ease;
        }

        .btn-dashboard:hover {
            background: rgba(201,154,53,.16);
            border-color: var(--gold-light);
            transform: translateY(-3px);
            box-shadow: 0 7px 20px rgba(201,154,53,.2);
        }

        /* MAIN */
        main {
            position: relative;
            z-index: 1;
            max-width: 1500px;
            margin: 0 auto;
            padding: 44px 30px 50px;
            animation: fadeUp .8s ease;
        }

        /* HERO BANNER */
        .hero-banner {
            position: relative;
            min-height: 280px;
            display: flex;
            align-items: center;
            overflow: hidden;
            padding: 40px 50px;
            margin-bottom: 35px;
            border: 1px solid rgba(233,189,97,.38);
            border-radius: 22px;
            background:
                linear-gradient(
                    90deg,
                    rgba(3,31,26,.96) 0%,
                    rgba(3,31,26,.84) 48%,
                    rgba(3,31,26,.28) 100%
                ),
                url('{{ asset('images/gedung-bkpsdm.png') }}') center/cover no-repeat;
            box-shadow: 0 15px 35px rgba(0,0,0,.22);
        }

        .hero-content {
            position: relative;
            z-index: 1;
            max-width: 780px;
        }

        .hero-label {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 11px 17px;
            margin-bottom: 20px;
            border: 1px solid rgba(233,189,97,.5);
            border-radius: 30px;
            background: rgba(201,154,53,.13);
            color: var(--gold-light);
            font-size: 12px;
            font-weight: 800;
            letter-spacing: 1.5px;
        }

        .hero-content h1 {
            margin: 0 0 15px;
            color: white;
            font-size: clamp(27px, 4vw, 43px);
            font-weight: 800;
            line-height: 1.2;
        }

        .hero-content p {
            max-width: 780px;
            margin: 0;
            color: #D6E5DF;
            font-size: 15px;
            line-height: 1.9;
        }

        /* PAGE HEADING */
        .page-heading {
            margin-bottom: 25px;
        }

        .eyebrow {
            color: var(--gold-light);
            font-size: 13px;
            font-weight: 800;
            letter-spacing: 2px;
            text-transform: uppercase;
            margin-bottom: 12px;
        }

        .page-heading h2 {
            margin: 0;
            color: var(--white);
            font-size: 32px;
            font-weight: 800;
        }

        .page-heading p {
            margin: 10px 0 0;
            color: var(--muted);
            font-size: 14px;
            line-height: 1.7;
        }

        /* FORM CONTAINER */
        .container {
            width: 100%;
            max-width: 850px;
            margin: auto;
            background: linear-gradient(
                145deg,
                rgba(16,72,61,.88),
                rgba(4,31,27,.94)
            );
            padding: 28px;
            border-radius: 14px;
            border: 1px solid rgba(233,189,97,.38);
            box-shadow:
                0 15px 35px rgba(0,0,0,.30),
                0 5px 20px rgba(201,154,53,.10),
                inset 0 1px 0 rgba(255,255,255,.06);
            backdrop-filter: blur(14px);
            transition: .3s ease;
        }

        .container:hover {
            border-color: rgba(233,189,97,.55);
            box-shadow:
                0 18px 40px rgba(0,0,0,.35),
                0 5px 24px rgba(201,154,53,.16);
        }

        /* SECTION TITLE */
        .section-title {
            display: flex;
            align-items: center;
            gap: 13px;
            margin: 0 0 25px;
            padding-bottom: 17px;
            border-bottom: 1px solid rgba(233,189,97,.22);
            color: var(--cream);
            font-size: 21px;
            font-weight: 800;
        }

        .section-icon {
            width: 45px;
            height: 45px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 11px;
            background: rgba(201,154,53,.14);
            border: 1px solid rgba(233,189,97,.35);
            color: var(--gold-light);
            font-size: 23px;
        }

        /* INFO FORM */
        .form-info {
            display: flex;
            align-items: center;
            gap: 13px;
            padding: 15px;
            margin-bottom: 24px;
            border: 1px solid rgba(233,189,97,.22);
            border-radius: 9px;
            background: rgba(201,154,53,.08);
        }

        .form-info-icon {
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            border-radius: 9px;
            background: rgba(201,154,53,.16);
            color: var(--gold-light);
            font-size: 20px;
        }

        .form-info strong {
            display: block;
            color: var(--cream);
            font-size: 12px;
            margin-bottom: 4px;
        }

        .form-info span {
            color: var(--muted);
            font-size: 11px;
            line-height: 1.6;
        }

        /* FORM GROUP */
        .form-group {
            margin-bottom: 19px;
        }

        label {
            display: block;
            margin-bottom: 9px;
            color: var(--cream);
            font-size: 12px;
            font-weight: 700;
        }

        .required {
            color: #FCA5A5;
        }

        input, select, textarea {
            width: 100%;
            padding: 13px 14px;
            margin-top: 6px;
            border: 1px solid rgba(169,193,185,.25);
            border-radius: 8px;
            background: rgba(4,31,27,.65);
            color: var(--white);
            font-family: inherit;
            font-size: 13px;
            outline: none;
            transition: .3s ease;
        }

        input::placeholder,
        textarea::placeholder {
            color: rgba(169,193,185,.55);
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
            border-color: var(--gold-light);
            box-shadow:
                0 0 0 3px rgba(233,189,97,.10),
                0 0 15px rgba(201,154,53,.12);
            background: rgba(4,31,27,.9);
        }

        textarea {
            min-height: 105px;
            resize: vertical;
        }

        /* ERROR */
        .error-box {
            padding: 13px 16px;
            margin-bottom: 20px;
            color: #FCA5A5;
            background: rgba(220,38,38,.10);
            border: 1px solid rgba(248,113,113,.30);
            border-radius: 8px;
            font-size: 12px;
        }

        .error-box p {
            margin: 5px 0;
        }

        /* FORM ACTIONS */
        .form-actions {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-top: 28px;
            padding-top: 21px;
            border-top: 1px solid rgba(233,189,97,.18);
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            padding: 12px 20px;
            border-radius: 8px;
            font-family: inherit;
            font-size: 12px;
            font-weight: 800;
            text-decoration: none;
            cursor: pointer;
            transition: .3s ease;
        }

        .btn-save {
            background: linear-gradient(135deg, var(--gold), var(--gold-light));
            color: #263027;
            border: 1px solid rgba(255,255,255,.2);
            box-shadow: 0 5px 14px rgba(201,154,53,.18);
        }

        .btn-save:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(201,154,53,.30);
            filter: brightness(1.08);
        }

        .btn-back {
            background: rgba(169,193,185,.10);
            color: var(--white);
            border: 1px solid rgba(169,193,185,.30);
        }

        .btn-back:hover {
            background: rgba(169,193,185,.18);
            border-color: var(--muted);
            transform: translateY(-2px);
        }

        /* FOOTER */
        footer {
            position: relative;
            z-index: 1;
            text-align: center;
            padding: 22px;
            border-top: 1px solid rgba(233,189,97,.18);
            color: rgba(169,193,185,.65);
            font-size: 12px;
        }

        footer span {
            color: var(--gold-light);
            font-weight: 700;
        }

        /* ANIMASI */
        @keyframes slideDown {
            from {
                opacity: 0;
                transform: translateY(-18px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* RESPONSIVE */
        @media (max-width: 700px) {
            header {
                padding: 18px;
            }

            .header-content {
                align-items: flex-start;
                flex-direction: column;
            }

            .header-logo {
                width: 58px;
                height: 58px;
            }

            .brand-text h2 {
                font-size: 25px;
            }

            .brand-text p {
                font-size: 10px;
            }

            .btn-dashboard {
                width: 100%;
            }

            main {
                padding: 25px 15px 35px;
            }

            .hero-banner {
                min-height: 240px;
                padding: 28px 22px;
                border-radius: 15px;
            }

            .hero-content p {
                font-size: 13px;
            }

            .page-heading h2 {
                font-size: 26px;
            }

            .container {
                padding: 20px 16px;
            }

            .section-title {
                font-size: 18px;
            }

            .form-actions {
                flex-direction: column;
                align-items: stretch;
            }

            .form-actions .btn {
                width: 100%;
            }
        }

        @media (prefers-reduced-motion: reduce) {
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
    <div class="ambient one"></div>
    <div class="ambient two"></div>
    <div class="particles" id="particles"></div>

    <!-- EFEK PETIR -->
    <div class="lightning-effects">
        <div class="lightning" style="top: 12%; left: 8%;"></div>
        <div class="lightning" style="top: 42%; right: 9%; transform: rotate(15deg);"></div>
        <div class="lightning" style="top: 72%; left: 17%; transform: rotate(-12deg);"></div>
    </div>

    <!-- HEADER -->
    <header>
        <div class="header-content">

            <div class="header-brand">
                <img
                    src="{{ asset('images/logo-bkpsdm.png') }}"
                    alt="Logo BKPSDM Kota Pontianak"
                    class="header-logo"
                >

                <div class="brand-text">
                    <h2>ASSETRA</h2>
                    <p>BKPSDM KOTA PONTIANAK</p>
                </div>
            </div>

          

        </div>
    </header>

    <!-- MAIN -->
    <main>

        <!-- FORM CONTAINER -->
        <div class="container">

            <h2 class="section-title">
                <span class="section-icon">＋</span>
                Tambah Mutasi Aset
            </h2>

            <div class="form-info">
              
                <div>
                    <strong>Formulir Mutasi Aset</strong>
                    <span>
                        Pastikan data aset dan ruangan tujuan sudah benar
                        sebelum menyimpan data mutasi.
                    </span>
                </div>
            </div>

            <!-- ERROR VALIDASI -->
            @if($errors->any())
                <div class="error-box">
                    <strong>Periksa kembali data berikut:</strong>

                    @foreach($errors->all() as $error)
                        <p>• {{ $error }}</p>
                    @endforeach
                </div>
            @endif

            <!-- FORM -->
            <form action="{{ route('mutations.store') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="asset_id">
                        Aset <span class="required">*</span>
                    </label>

                    <select name="asset_id" id="asset_id" required>
                        <option value="">Pilih Aset</option>

                        @foreach($assets as $asset)
                            <option
                                value="{{ $asset->id }}"
                                {{ old('asset_id') == $asset->id ? 'selected' : '' }}
                            >
                                {{ $asset->kode_aset }} - {{ $asset->nama_aset }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="from_room_id">Ruangan Asal</label>

                    <select name="from_room_id" id="from_room_id">
                        <option value="">Pilih Ruangan Asal</option>

                        @foreach($rooms as $room)
                            <option
                                value="{{ $room->id }}"
                                {{ old('from_room_id') == $room->id ? 'selected' : '' }}
                            >
                                {{ $room->nama_ruangan }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="to_room_id">
                        Ruangan Tujuan <span class="required">*</span>
                    </label>

                    <select name="to_room_id" id="to_room_id" required>
                        <option value="">Pilih Ruangan Tujuan</option>

                        @foreach($rooms as $room)
                            <option
                                value="{{ $room->id }}"
                                {{ old('to_room_id') == $room->id ? 'selected' : '' }}
                            >
                                {{ $room->nama_ruangan }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="tanggal_mutasi">
                        Tanggal Mutasi <span class="required">*</span>
                    </label>

                    <input
                        type="date"
                        name="tanggal_mutasi"
                        id="tanggal_mutasi"
                        value="{{ old('tanggal_mutasi') }}"
                        required
                    >
                </div>

                <div class="form-group">
                    <label for="alasan">Alasan Mutasi</label>

                    <textarea
                        name="alasan"
                        id="alasan"
                        placeholder="Masukkan alasan perpindahan aset"
                    >{{ old('alasan') }}</textarea>
                </div>

                <div class="form-group">
                    <label for="keterangan">Keterangan</label>

                    <textarea
                        name="keterangan"
                        id="keterangan"
                        placeholder="Masukkan keterangan tambahan"
                    >{{ old('keterangan') }}</textarea>
                </div>

                <!-- TOMBOL -->
                <div class="form-actions">

                    <button type="submit" class="btn btn-save">
                         Simpan Mutasi
                    </button>

                    <a href="{{ route('mutations.index') }}" class="btn btn-back">
                        Kembali
                    </a>

                </div>
            </form>

        </div>
    </main>

    <!-- FOOTER -->
    <footer>
        © {{ date('Y') }}
        <span>ASSETRA BKPSDM Kota Pontianak</span>.
        All Rights Reserved.
    </footer>

    <script>
        // ==================================
        // ANIMASI BOLA-BOLA PARTIKEL
        // ==================================

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

        // ==================================
        // ANIMASI PETIR
        // ==================================

        const lightningElements =
            document.querySelectorAll('.lightning');

        function createLightning() {
            const randomIndex = Math.floor(
                Math.random() * lightningElements.length
            );

            const selectedLightning =
                lightningElements[randomIndex];

            selectedLightning.classList.remove('flash');

            void selectedLightning.offsetWidth;

            selectedLightning.classList.add('flash');
        }

        function scheduleLightning() {
            const delay = 3500 + Math.random() * 5500;

            setTimeout(() => {
                createLightning();
                scheduleLightning();
            }, delay);
        }

        scheduleLightning();
    </script>

</body>
</html>
