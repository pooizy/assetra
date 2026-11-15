
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Aset - ASSETRA BKPSDM</title>

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

        /* FORM CARD */

        .card {
            position: relative;
            overflow: hidden;
            max-width: 750px;
            margin: auto;
            background: rgba(10,54,46,.82);
            backdrop-filter: blur(18px);
            -webkit-backdrop-filter: blur(18px);
            padding: 30px;
            border: 1px solid rgba(233,189,97,.38);
            border-radius: 20px;

            box-shadow:
                0 20px 55px rgba(0,0,0,.28),
                0 5px 20px rgba(201,154,53,.12),
                0 0 15px rgba(233,189,97,.07);

            animation: cardReveal 1s .15s ease both;
            transition: box-shadow .4s, transform .4s;
        }

        .card:hover {
            box-shadow:
                0 22px 60px rgba(0,0,0,.30),
                0 7px 24px rgba(201,154,53,.18),
                0 0 20px rgba(233,189,97,.11);
        }

        .card::before {
            content: "";
            position: absolute;
            inset: 0;
            border-radius: inherit;
            padding: 1px;
            background: linear-gradient(
                135deg,
                rgba(233,189,97,.45),
                transparent 35%,
                transparent 65%,
                rgba(233,189,97,.25)
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

        /* CARD HEADER */

        .card-top {
            position: relative;
            z-index: 1;
            display: flex;
            align-items: center;
            gap: 13px;
            padding-bottom: 22px;
            margin-bottom: 24px;
            border-bottom: 1px solid rgba(233,189,97,.22);
        }

        .title-icon {
            width: 48px;
            height: 48px;
            flex-shrink: 0;
            display: grid;
            place-items: center;
            background: linear-gradient(
                145deg,
                rgba(201,154,53,.22),
                rgba(201,154,53,.06)
            );
            border: 1px solid rgba(233,189,97,.42);
            border-radius: 14px;
            font-size: 22px;
            transition: .4s;
        }

        .title-icon:hover {
            transform: rotate(12deg) scale(1.12);
            box-shadow: 0 0 20px rgba(233,189,97,.25);
        }

        .card-top h2 {
            font-size: 18px;
            font-weight: 800;
            color: var(--white);
        }

        .card-top p {
            color: var(--muted);
            font-size: 11px;
            margin-top: 5px;
            line-height: 1.7;
        }

        /* FORM */

        form {
            position: relative;
            z-index: 1;
        }

        .form-group {
            margin-bottom: 19px;
        }

        label {
            display: block;
            margin-bottom: 9px;
            color: var(--gold-light);
            font-size: 11px;
            font-weight: 800;
            letter-spacing: .8px;
            text-transform: uppercase;
        }

        input,
        select,
        textarea {
            width: 100%;
            padding: 13px 15px;
            border: 1px solid rgba(233,189,97,.32);
            border-radius: 10px;
            font-family: inherit;
            font-size: 13px;
            font-weight: 600;
            color: #F4F8F5;
            background: rgba(4,31,27,.55);
            outline: none;
            transition: .3s ease;

            box-shadow:
                0 4px 12px rgba(0,0,0,.12),
                0 2px 8px rgba(201,154,53,.06);
        }

        input::placeholder,
        textarea::placeholder {
            color: #78958B;
        }

        input:focus,
        select:focus,
        textarea:focus {
            border-color: var(--gold-light);
            background: rgba(4,31,27,.78);

            box-shadow:
                0 0 0 3px rgba(233,189,97,.12),
                0 5px 16px rgba(201,154,53,.16),
                0 0 12px rgba(233,189,97,.12);
        }

        select {
            cursor: pointer;
            color-scheme: dark;
        }

        select option {
            background: #073D32;
            color: white;
        }

        textarea {
            min-height: 100px;
            resize: vertical;
            line-height: 1.7;
        }

        input[type="date"] {
            color-scheme: dark;
        }

        input[type="number"] {
            appearance: textfield;
            -moz-appearance: textfield;
        }

        input[type="number"]::-webkit-inner-spin-button,
        input[type="number"]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        /* ERROR */

        .error {
            color: #FFAAAA;
            font-size: 11px;
            font-weight: 600;
            margin-top: 7px;
            padding-left: 3px;
        }

        /* BUTTON */

        .form-actions {
            display: flex;
            align-items: center;
            gap: 12px;
            flex-wrap: wrap;
            padding-top: 10px;
            margin-top: 25px;
            border-top: 1px solid rgba(233,189,97,.18);
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 9px;
            padding: 13px 21px;
            border: 1px solid transparent;
            border-radius: 11px;
            text-decoration: none;
            cursor: pointer;
            font-family: inherit;
            font-size: 12px;
            font-weight: 800;
            transition: .3s ease;
            position: relative;
            overflow: hidden;
        }

        .save {
            color: #2D2109;
            background: linear-gradient(
                135deg,
                #F5DDA6,
                #E9BD61,
                #C99A35
            );
            border-color: #E9BD61;
            box-shadow:
                0 7px 20px rgba(201,154,53,.25),
                0 0 12px rgba(233,189,97,.10);
        }

        .save::before,
        .back::before {
            content: "";
            position: absolute;
            top: 0;
            left: -120%;
            width: 65%;
            height: 100%;
            background: linear-gradient(
                100deg,
                transparent,
                rgba(255,255,255,.55),
                transparent
            );
            transform: skewX(-25deg);
            transition: left .7s ease;
        }

        .save:hover::before,
        .back:hover::before {
            left: 150%;
        }

        .save:hover {
            transform: translateY(-4px);
            box-shadow:
                0 12px 28px rgba(201,154,53,.35),
                0 0 18px rgba(233,189,97,.18);
        }

        .back {
            color: #E4F0EA;
            background: rgba(255,255,255,.07);
            border-color: rgba(255,255,255,.20);
            box-shadow: 0 5px 15px rgba(0,0,0,.15);
        }

        .back:hover {
            background: rgba(255,255,255,.13);
            border-color: rgba(233,189,97,.5);
            color: var(--gold-light);
            transform: translateY(-4px);
            box-shadow:
                0 9px 22px rgba(0,0,0,.22),
                0 0 12px rgba(233,189,97,.12);
        }

        .btn span {
            font-size: 16px;
            transition: .3s;
        }

        .back:hover span {
            transform: translateX(-4px);
        }

        .save:hover span {
            transform: translateX(3px);
        }

        /* PAGE FOOTER */

        .page-footer {
            position: relative;
            z-index: 1;
            text-align: center;
            color: #8EAAA0;
            font-size: 10px;
            padding: 22px;
            border-top: 1px solid rgba(233,189,97,.12);
            background: rgba(4,31,27,.3);
        }

        .page-footer span {
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

            .card {
                padding: 22px 17px;
            }

            .card-top h2 {
                font-size: 16px;
            }

            .card-top p {
                font-size: 10px;
            }

            .form-actions {
                flex-direction: column;
                align-items: stretch;
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

        /* ACCESSIBILITY */

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

    <!-- FORM CARD -->
    <div class="card">

        <div class="card-top">
            <div class="title-icon">📝</div>

            <div>
                <h2>Form Edit Aset</h2>
                <p>Silakan perbarui informasi aset pada kolom yang tersedia.</p>
            </div>
        </div>

        <form action="{{ route('assets.update', $asset->id) }}" method="POST">
            @csrf
            @method('PUT')

            <!-- KODE ASET -->
            <div class="form-group">
                <label>Kode Aset</label>
                <input
                    type="text"
                    name="kode_aset"
                    value="{{ old('kode_aset', $asset->kode_aset) }}"
                    placeholder="Masukkan kode aset"
                    required
                >

                @error('kode_aset')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <!-- NAMA ASET -->
            <div class="form-group">
                <label>Nama Aset</label>
                <input
                    type="text"
                    name="nama_aset"
                    value="{{ old('nama_aset', $asset->nama_aset) }}"
                    placeholder="Masukkan nama aset"
                    required
                >

                @error('nama_aset')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <!-- KATEGORI -->
            <div class="form-group">
                <label>Kategori</label>

                <select name="category_id" required>
                    <option value="">Pilih Kategori</option>

                    @foreach($categories as $category)
                        <option
                            value="{{ $category->id }}"
                            {{ old('category_id', $asset->category_id) == $category->id ? 'selected' : '' }}
                        >
                            {{ $category->nama_kategori }}
                        </option>
                    @endforeach
                </select>

                @error('category_id')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <!-- RUANGAN -->
            <div class="form-group">
                <label>Ruangan</label>

                <select name="room_id">
                    <option value="">Pilih Ruangan</option>

                    @foreach($rooms as $room)
                        <option
                            value="{{ $room->id }}"
                            {{ old('room_id', $asset->room_id) == $room->id ? 'selected' : '' }}
                        >
                            {{ $room->nama_ruangan }}
                        </option>
                    @endforeach
                </select>

                @error('room_id')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <!-- PENANGGUNG JAWAB -->
            <div class="form-group">
                <label>Penanggung Jawab</label>

                <select name="employee_id">
                    <option value="">Pilih Pegawai</option>

                    @foreach($employees as $employee)
                        <option
                            value="{{ $employee->id }}"
                            {{ old('employee_id', $asset->employee_id) == $employee->id ? 'selected' : '' }}
                        >
                            {{ $employee->nama_pegawai }}
                        </option>
                    @endforeach
                </select>

                @error('employee_id')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <!-- JUMLAH -->
            <div class="form-group">
                <label>Jumlah</label>

                <input
                    type="number"
                    name="jumlah"
                    value="{{ old('jumlah', $asset->jumlah) }}"
                    min="1"
                    placeholder="Masukkan jumlah aset"
                    required
                >

                @error('jumlah')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <!-- KONDISI -->
            <div class="form-group">
                <label>Kondisi</label>

                <select name="kondisi" required>
                    @foreach(['Baik', 'Rusak Ringan', 'Rusak Berat'] as $kondisi)
                        <option
                            value="{{ $kondisi }}"
                            {{ old('kondisi', $asset->kondisi) == $kondisi ? 'selected' : '' }}
                        >
                            {{ $kondisi }}
                        </option>
                    @endforeach
                </select>

                @error('kondisi')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <!-- TANGGAL PEROLEHAN -->
            <div class="form-group">
                <label>Tanggal Perolehan</label>

                <input
                    type="date"
                    name="tanggal_perolehan"
                    value="{{ old('tanggal_perolehan', $asset->tanggal_perolehan ? \Carbon\Carbon::parse($asset->tanggal_perolehan)->format('Y-m-d') : '') }}"
                >

                @error('tanggal_perolehan')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <!-- KETERANGAN -->
            <div class="form-group">
                <label>Keterangan</label>

                <textarea
                    name="keterangan"
                    placeholder="Tambahkan keterangan aset jika diperlukan"
                >{{ old('keterangan', $asset->keterangan) }}</textarea>

                @error('keterangan')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <!-- BUTTON -->
            <div class="form-actions">
                <button type="submit" class="btn save">
                    Simpan Perubahan
                    <span></span>
                </button>

                <a href="{{ route('assets.index') }}" class="btn back">
                    <span></span>
                    Kembali
                </a>
            </div>

        </form>

    </div>

</main>

<!-- FOOTER -->
<footer class="page-footer">
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
