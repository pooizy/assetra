
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Ruangan - ASSETRA</title>

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
            font-family: 'Plus Jakarta Sans', sans-serif;
            background:
                radial-gradient(circle at 15% 15%, rgba(23,100,84,.25), transparent 35%),
                radial-gradient(circle at 85% 80%, rgba(201,154,53,.10), transparent 35%),
                linear-gradient(135deg, var(--dark), var(--dark-2), #062A24);
            min-height: 100vh;
            margin: 0;
            color: var(--white);
            overflow-x: hidden;
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
            0% {
                opacity: 0;
                transform: scale(.7);
                filter: brightness(1);
            }
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
            max-width: 1100px;
            margin: auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
        }

        .header-brand h2 {
            margin: 0;
            font-size: 23px;
            font-weight: 800;
            letter-spacing: 1px;
            color: var(--gold-light);
        }

        .header-brand p {
            margin: 5px 0 0;
            color: var(--muted);
            font-size: 13px;
        }

        /* TOMBOL DASHBOARD */
        .btn-dashboard {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 9px;
            padding: 11px 17px;
            border-radius: 8px;
            background: rgba(23,100,84,.25);
            color: var(--gold-light);
            border: 1px solid rgba(233,189,97,.45);
            font-size: 12px;
            font-weight: 800;
            text-decoration: none;
            white-space: nowrap;
            transition: .3s ease;
            box-shadow: 0 4px 14px rgba(0,0,0,.15);
        }

        .btn-dashboard:hover {
            background: rgba(201,154,53,.16);
            border-color: var(--gold-light);
            color: var(--cream);
            transform: translateY(-2px);
            box-shadow: 0 7px 18px rgba(201,154,53,.18);
        }

        /* MAIN */
        main {
            position: relative;
            z-index: 1;
            max-width: 760px;
            margin: 40px auto;
            padding: 0 20px 40px;
            animation: fadeUp .8s ease;
        }

        .page-heading {
            margin-bottom: 22px;
        }

        .eyebrow {
            color: var(--gold-light);
            font-size: 11px;
            font-weight: 800;
            letter-spacing: 2px;
            text-transform: uppercase;
            margin-bottom: 8px;
        }

        .page-heading h1 {
            font-size: 27px;
            margin: 0;
            font-weight: 800;
            color: var(--white);
        }

        .page-heading p {
            color: var(--muted);
            font-size: 13px;
            margin: 8px 0 0;
            line-height: 1.7;
        }

        /* CARD FORM */
        .card {
            position: relative;
            overflow: hidden;
            background: linear-gradient(
                145deg,
                rgba(16,72,61,.88),
                rgba(4,31,27,.94)
            );
            padding: 28px;
            border-radius: 14px;
            border: 1px solid rgba(233,189,97,.35);
            box-shadow:
                0 15px 35px rgba(0,0,0,.30),
                0 5px 20px rgba(201,154,53,.10),
                inset 0 1px 0 rgba(255,255,255,.06);
            backdrop-filter: blur(14px);
            transition: .3s ease;
        }

        .card:hover {
            border-color: rgba(233,189,97,.55);
            box-shadow:
                0 18px 40px rgba(0,0,0,.35),
                0 5px 24px rgba(201,154,53,.16);
        }

        .section-title {
            display: flex;
            align-items: center;
            gap: 11px;
            margin: 0 0 24px;
            padding-bottom: 15px;
            border-bottom: 1px solid rgba(233,189,97,.22);
            font-size: 18px;
            font-weight: 800;
            color: var(--cream);
        }

        .section-icon {
            width: 36px;
            height: 36px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(201,154,53,.14);
            border: 1px solid rgba(233,189,97,.35);
            border-radius: 9px;
            color: var(--gold-light);
            font-size: 18px;
        }

        /* INFO RUANGAN */
        .room-info {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 14px 16px;
            margin-bottom: 24px;
            background: rgba(201,154,53,.08);
            border: 1px solid rgba(233,189,97,.22);
            border-radius: 9px;
        }

        .room-info-icon {
            width: 38px;
            height: 38px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            border-radius: 9px;
            background: rgba(201,154,53,.16);
            color: var(--gold-light);
            font-size: 19px;
        }

        .room-info-text strong {
            display: block;
            color: var(--cream);
            font-size: 12px;
            margin-bottom: 4px;
        }

        .room-info-text span {
            color: var(--muted);
            font-size: 11px;
        }

        /* FORM */
        .form-group {
            margin-bottom: 19px;
        }

        label {
            display: block;
            margin-bottom: 9px;
            font-size: 12px;
            font-weight: 700;
            color: var(--cream);
        }

        .required {
            color: #FCA5A5;
        }

        input,
        textarea {
            width: 100%;
            padding: 13px 14px;
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

        input:focus,
        textarea:focus {
            border-color: var(--gold-light);
            box-shadow:
                0 0 0 3px rgba(233,189,97,.10),
                0 0 15px rgba(201,154,53,.12);
            background: rgba(4,31,27,.9);
        }

        textarea {
            min-height: 115px;
            resize: vertical;
        }

        /* ERROR */
        .error-box {
            padding: 12px 15px;
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

        /* ACTION BUTTONS */
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
            background: linear-gradient(
                135deg,
                var(--gold),
                var(--gold-light)
            );
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

        /* POPUP BERHASIL */
        .success-modal-overlay {
            position: fixed;
            inset: 0;
            z-index: 10000;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            background: rgba(0,15,12,.75);
            backdrop-filter: blur(7px);
            opacity: 0;
            visibility: hidden;
            transition: opacity .3s ease, visibility .3s ease;
        }

        .success-modal-overlay.active {
            opacity: 1;
            visibility: visible;
        }

        .success-modal {
            width: 100%;
            max-width: 430px;
            padding: 35px 28px;
            text-align: center;
            background: linear-gradient(145deg, #10483D, #041F1B);
            border: 1px solid rgba(52,211,153,.55);
            border-radius: 20px;
            box-shadow:
                0 25px 70px rgba(0,0,0,.55),
                0 0 30px rgba(52,211,153,.10);
            transform: translateY(30px) scale(.9);
            opacity: 0;
            transition: .35s ease;
        }

        .success-modal-overlay.active .success-modal {
            transform: translateY(0) scale(1);
            opacity: 1;
        }

        .success-icon {
            width: 75px;
            height: 75px;
            margin: 0 auto 18px;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 1px solid #34D399;
            border-radius: 50%;
            color: #6EE7B7;
            font-size: 42px;
            box-shadow: 0 0 25px rgba(52,211,153,.18);
        }

        .success-modal h2 {
            margin: 0 0 12px;
            color: #A7F3D0;
            font-size: 23px;
        }

        .success-modal p {
            margin: 0 0 25px;
            color: #D5E2DC;
            font-size: 13px;
            line-height: 1.7;
        }

        .success-modal button {
            min-width: 150px;
            padding: 13px 22px;
            background: linear-gradient(135deg, #059669, #10B981);
            color: white;
            border: none;
            border-radius: 9px;
            font-family: inherit;
            font-size: 12px;
            font-weight: 800;
            cursor: pointer;
            transition: .3s ease;
        }

        .success-modal button:hover {
            transform: translateY(-2px);
            box-shadow: 0 7px 18px rgba(16,185,129,.25);
        }

        /* FOOTER */
        footer {
            position: relative;
            z-index: 1;
            text-align: center;
            padding: 20px;
            border-top: 1px solid rgba(233,189,97,.18);
            color: rgba(169,193,185,.65);
            font-size: 11px;
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
        @media (max-width: 600px) {
            header {
                padding: 18px 20px;
            }

            .header-content {
                align-items: flex-start;
                flex-direction: column;
                gap: 15px;
            }

            .header-brand h2 {
                font-size: 20px;
            }

            .btn-dashboard {
                width: 100%;
            }

            main {
                margin: 25px auto;
                padding: 0 14px 30px;
            }

            .page-heading h1 {
                font-size: 23px;
            }

            .card {
                padding: 20px 16px;
            }

            .section-title {
                font-size: 16px;
            }

            .form-actions {
                flex-direction: column;
                align-items: stretch;
            }

            .form-actions .btn {
                width: 100%;
            }

            .success-modal {
                padding: 28px 20px;
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
                <h2>ASSETRA BKPSDM</h2>
                <p>Pengelolaan Data Ruangan</p>
            </div>

        </div>
    </header>

    <!-- MAIN -->
    <main>

        <div class="page-heading">
            <div class="eyebrow">Manajemen Data</div>
            <h1>Edit Ruangan</h1>
            <p>
                Perbarui informasi ruangan agar data lokasi penyimpanan
                aset tetap akurat dan terorganisir.
            </p>
        </div>

        <div class="card">

            <h2 class="section-title">
                <span class="section-icon">✎</span>
                Form Edit Ruangan
            </h2>

            <!-- INFORMASI -->
            <div class="room-info">
                <div class="room-info-icon">▤</div>

                <div class="room-info-text">
                    <strong>Perubahan Data Ruangan</strong>
                    <span>Silakan periksa kembali informasi sebelum menyimpan perubahan.</span>
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

            <!-- FORM EDIT -->
            <form action="{{ route('rooms.update', $room->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="nama_ruangan">
                        Nama Ruangan <span class="required">*</span>
                    </label>

                    <input
                        type="text"
                        id="nama_ruangan"
                        name="nama_ruangan"
                        value="{{ old('nama_ruangan', $room->nama_ruangan) }}"
                        placeholder="Contoh: Ruang Arsip"
                        required
                    >
                </div>

                <div class="form-group">
                    <label for="kode_ruangan">
                        Kode Ruangan <span class="required">*</span>
                    </label>

                    <input
                        type="text"
                        id="kode_ruangan"
                        name="kode_ruangan"
                        value="{{ old('kode_ruangan', $room->kode_ruangan) }}"
                        placeholder="Contoh: R-001"
                        required
                    >
                </div>

                <div class="form-group">
                    <label for="keterangan">Keterangan</label>

                    <textarea
                        id="keterangan"
                        name="keterangan"
                        placeholder="Masukkan keterangan ruangan"
                    >{{ old('keterangan', $room->keterangan) }}</textarea>
                </div>

                <!-- TOMBOL -->
                <div class="form-actions">

                    <button type="submit" class="btn btn-save">
                        Simpan Perubahan
                    </button>

                    <a href="{{ route('rooms.index') }}" class="btn btn-back">
                        Kembali
                    </a>

                </div>
            </form>

        </div>
    </main>

    <!-- POPUP BERHASIL -->
    @if(session('success'))
        <div class="success-modal-overlay" id="successModal">
            <div
                class="success-modal"
                role="dialog"
                aria-modal="true"
                aria-labelledby="successTitle"
            >
                <div class="success-icon">✓</div>

                <h2 id="successTitle">Berhasil!</h2>

                <p>{{ session('success') }}</p>

                <button type="button" onclick="closeSuccessModal()">
                    OK, Mengerti
                </button>
            </div>
        </div>
    @endif

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

        // ==================================
        // POPUP BERHASIL
        // ==================================

        const successModal =
            document.getElementById('successModal');

        function closeSuccessModal() {
            if (successModal) {
                successModal.classList.remove('active');
                document.body.style.overflow = '';
            }
        }

        if (successModal) {
            setTimeout(() => {
                successModal.classList.add('active');
                document.body.style.overflow = 'hidden';
            }, 300);

            successModal.addEventListener('click', function(event) {
                if (event.target === successModal) {
                    closeSuccessModal();
                }
            });
        }

        // Tombol Escape
        document.addEventListener('keydown', function(event) {
            if (event.key === 'Escape') {
                closeSuccessModal();
            }
        });
    </script>

</body>
</html>
