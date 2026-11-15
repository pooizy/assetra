
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Aset - ASSETRA BKPSDM</title>

    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        * {
            box-sizing: border-box;
        }

        :root {
            --dark: #041F1B;
            --dark-green: #073D32;
            --green: #10483D;
            --green-light: #176454;
            --gold: #C99A35;
            --gold-light: #E9BD61;
            --cream: #F5DDA6;
            --white: #ffffff;
            --muted: #A9C2B9;
        }

        body {
            margin: 0;
            padding: 25px;
            min-height: 100vh;
            font-family: 'Plus Jakarta Sans', sans-serif;
            color: var(--white);
            background:
                radial-gradient(circle at 10% 15%, rgba(201,154,53,.13), transparent 28%),
                radial-gradient(circle at 90% 80%, rgba(23,100,84,.30), transparent 30%),
                linear-gradient(135deg, #031713, #073D32 55%, #041F1B);
            overflow-x: hidden;
            position: relative;
        }

        /* BACKGROUND DECORATION */
        .ambient {
            position: fixed;
            width: 300px;
            height: 300px;
            border-radius: 50%;
            filter: blur(100px);
            opacity: .16;
            pointer-events: none;
            z-index: 0;
        }

        .ambient.one {
            background: #D9A441;
            top: -100px;
            left: -100px;
        }

        .ambient.two {
            background: #159879;
            bottom: -100px;
            right: -100px;
        }

        #particles {
            position: fixed;
            inset: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 0;
        }

        .container {
            max-width: 1200px;
            margin: auto;
            position: relative;
            z-index: 1;
            animation: pageIn .8s ease both;
        }

        @keyframes pageIn {
            from {
                opacity: 0;
                transform: translateY(18px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* HEADER */
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
            gap: 15px;
            padding-bottom: 20px;
            border-bottom: 1px solid rgba(233,189,97,.25);
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 13px;
        }

        .brand-icon {
            width: 55px;
            height: 55px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-shrink: 0;
            border-radius: 14px;
            background: white;
            padding: 5px;
            border: 1px solid rgba(233,189,97,.5);
            box-shadow: 0 5px 20px rgba(201,154,53,.25);
        }

        .brand-icon img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        .brand-name {
            font-size: 18px;
            font-weight: 800;
            letter-spacing: 1px;
            color: var(--cream);
        }

        .brand-subtitle {
            font-size: 10px;
            color: var(--muted);
            letter-spacing: 1.5px;
            margin-top: 4px;
        }

        /* HEADER BUTTONS */
        .header-actions {
            display: flex;
            align-items: center;
            gap: 9px;
            flex-wrap: wrap;
        }

        .button {
            display: inline-flex;
            justify-content: center;
            align-items: center;
            gap: 7px;
            border: 1px solid rgba(255,255,255,.12);
            padding: 11px 16px;
            border-radius: 9px;
            background: linear-gradient(135deg, #176454, #10483D);
            color: white;
            cursor: pointer;
            text-decoration: none;
            font-family: inherit;
            font-size: 12px;
            font-weight: 700;
            transition: .3s ease;
            box-shadow: 0 4px 12px rgba(0,0,0,.15);
        }

        .button:hover {
            transform: translateY(-3px);
            box-shadow: 0 7px 18px rgba(0,0,0,.25);
            border-color: var(--gold-light);
        }

        .export {
            background: linear-gradient(135deg, #D6A744, #A87921);
            color: #17291F;
            border-color: rgba(233,189,97,.5);
        }

        .export:hover {
            box-shadow: 0 7px 20px rgba(201,154,53,.3);
        }

        .back {
            background: rgba(255,255,255,.08);
            border: 1px solid rgba(233,189,97,.35);
            color: var(--cream);
        }

        .print-btn {
            background: linear-gradient(135deg, #176454, #073D32);
        }

        /* HERO BANNER */
        .hero-banner {
            width: 100%;
            min-height: 308px;
            margin-bottom: 25px;
            border-radius: 22px;
            overflow: hidden;
            position: relative;
            display: flex;
            align-items: center;
            padding: 45px 52px;

            background-image:
                linear-gradient(
                    90deg,
                    rgba(3, 35, 29, .96) 0%,
                    rgba(3, 35, 29, .83) 45%,
                    rgba(3, 35, 29, .42) 100%
                ),
                url("{{ asset('images/gedung-bkpsdm.png') }}");

            background-size: cover;
            background-position: center;
            border: 1px solid rgba(233,189,97,.45);

            box-shadow:
                0 12px 35px rgba(0,0,0,.25),
                inset 0 1px 0 rgba(255,255,255,.08);

            transition: .5s ease;
        }

        .hero-banner:hover {
            border-color: var(--gold-light);
            box-shadow: 0 15px 40px rgba(0,0,0,.32);
        }

        .hero-content {
            position: relative;
            z-index: 2;
            max-width: 800px;
            animation: heroAppear .9s ease both;
        }

        @keyframes heroAppear {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .hero-badge {
            display: inline-flex;
            align-items: center;
            padding: 11px 17px;
            margin-bottom: 22px;
            border: 1px solid rgba(233,189,97,.5);
            border-radius: 30px;
            background: rgba(201,154,53,.15);
            color: var(--gold-light);
            font-size: 13px;
            font-weight: 800;
            letter-spacing: 1.3px;
            box-shadow: 0 4px 15px rgba(0,0,0,.15);
        }

        .hero-content h1 {
            margin: 0 0 15px;
            color: white;
            font-size: 43px;
            font-weight: 800;
            letter-spacing: -1.5px;
            line-height: 1.2;
        }

        .hero-content p {
            max-width: 800px;
            margin: 0;
            color: #D6E4DE;
            font-size: 17px;
            line-height: 1.8;
            font-weight: 500;
        }

        /* SUMMARY */
        .summary {
            display: flex;
            gap: 15px;
            margin-bottom: 20px;
        }

        .summary-card {
            flex: 1;
            background:
                linear-gradient(135deg, rgba(255,255,255,.10), rgba(255,255,255,.035));
            padding: 20px;
            border-radius: 10px;
            border: 1px solid rgba(233,189,97,.30);
            box-shadow:
                0 8px 25px rgba(0,0,0,.18),
                inset 0 1px 0 rgba(255,255,255,.08);
            position: relative;
            overflow: hidden;
            transition: .3s ease;
        }

        .summary-card::before {
            content: "";
            position: absolute;
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background: rgba(233,189,97,.09);
            right: -30px;
            top: -40px;
        }

        .summary-card:hover {
            transform: translateY(-4px);
            border-color: var(--gold-light);
            box-shadow: 0 12px 30px rgba(0,0,0,.25);
        }

        .summary-card p {
            margin: 0 0 10px;
            color: var(--muted);
            font-size: 13px;
            font-weight: 600;
            position: relative;
        }

        .summary-card h2 {
            margin: 0;
            font-size: 27px;
            font-weight: 800;
            color: var(--gold-light);
            position: relative;
        }

        /* FILTER DAN TABLE PANEL */
        .filter,
        .table-container {
            background:
                linear-gradient(145deg, rgba(255,255,255,.105), rgba(255,255,255,.045));
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 20px;
            overflow-x: auto;
            border: 1px solid rgba(233,189,97,.28);
            box-shadow:
                0 8px 25px rgba(0,0,0,.20),
                inset 0 1px 0 rgba(255,255,255,.07);
            backdrop-filter: blur(12px);
            transition: .3s ease;
        }

        .filter:hover,
        .table-container:hover {
            border-color: rgba(233,189,97,.55);
            box-shadow: 0 12px 30px rgba(0,0,0,.25);
        }

        .section-title {
            display: flex;
            align-items: center;
            gap: 10px;
            margin: 0 0 18px;
            color: var(--cream);
            font-size: 16px;
            font-weight: 800;
        }

        .section-title::before {
            content: "";
            width: 4px;
            height: 20px;
            border-radius: 5px;
            background: linear-gradient(var(--gold-light), var(--gold));
            box-shadow: 0 0 10px rgba(233,189,97,.4);
        }

        /* FILTER */
        .filter form {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            align-items: end;
        }

        .filter-group {
            display: flex;
            flex-direction: column;
            gap: 7px;
        }

        .filter-group label {
            color: var(--cream);
            font-size: 12px;
            font-weight: 700;
        }

        select {
            min-width: 160px;
            padding: 10px 12px;
            border: 1px solid rgba(233,189,97,.35);
            border-radius: 7px;
            background: #0B382F;
            color: white;
            font-family: inherit;
            font-size: 12px;
            outline: none;
            transition: .3s ease;
        }

        select:focus {
            border-color: var(--gold-light);
            box-shadow: 0 0 0 3px rgba(233,189,97,.12);
        }

        select option {
            background: #073D32;
            color: white;
        }

        /* TABLE */
        table {
            width: 100%;
            border-collapse: collapse;
            min-width: 850px;
        }

        th,
        td {
            padding: 13px;
            border-bottom: 1px solid rgba(255,255,255,.10);
            text-align: left;
            font-size: 12px;
        }

        th {
            background: rgba(201,154,53,.14);
            color: var(--gold-light);
            font-weight: 800;
            white-space: nowrap;
            border-top: 1px solid rgba(233,189,97,.22);
            border-bottom: 1px solid rgba(233,189,97,.3);
        }

        td {
            color: #E0EBE6;
        }

        tbody tr {
            transition: .25s ease;
        }

        tbody tr:hover {
            background: rgba(233,189,97,.075);
        }

        tbody tr:last-child td {
            border-bottom: none;
        }

        tbody td:first-child {
            color: var(--gold-light);
            font-weight: 700;
        }

        .empty-row {
            text-align: center !important;
            color: var(--muted);
            padding: 25px !important;
        }

        /* FOOTER */
        .footer {
            text-align: center;
            padding: 15px 10px 5px;
            color: rgba(213,232,222,.55);
            font-size: 11px;
            letter-spacing: .5px;
        }

        .footer span {
            color: var(--gold-light);
            font-weight: 800;
        }

        /* LIGHTNING */
        .lightning {
            position: fixed;
            inset: 0;
            pointer-events: none;
            z-index: 2;
            background: rgba(233,189,97,.08);
            opacity: 0;
        }

        .lightning.flash {
            animation: lightningFlash .35s ease-out;
        }

        @keyframes lightningFlash {
            0% {
                opacity: 0;
            }

            15% {
                opacity: .8;
            }

            30% {
                opacity: .1;
            }

            45% {
                opacity: .45;
            }

            100% {
                opacity: 0;
            }
        }

        /* RESPONSIVE */
        @media (max-width: 768px) {
            .hero-banner {
                min-height: 270px;
                padding: 30px 25px;
                background-position: center;
            }

            .hero-content h1 {
                font-size: 30px;
            }

            .hero-content p {
                font-size: 14px;
            }

            .hero-badge {
                font-size: 10px;
                padding: 9px 13px;
            }
        }

        @media (max-width: 600px) {
            body {
                padding: 15px;
            }

            .header,
            .summary {
                flex-direction: column;
                align-items: stretch;
            }

            .header-actions {
                display: flex;
                flex-wrap: wrap;
                gap: 8px;
            }

            .header-actions .button {
                flex: 1;
            }

            .summary-card {
                width: 100%;
            }

            .filter form {
                align-items: stretch;
            }

            .filter-group,
            .filter-group select {
                width: 100%;
            }

            .filter form .button {
                flex: 1;
            }

            .hero-banner {
                min-height: 250px;
                padding: 25px 18px;
                border-radius: 15px;
            }

            .hero-content h1 {
                font-size: 26px;
            }
        }

        /* PRINT */
        @media print {
            body {
                background: white !important;
                color: #1e293b;
                padding: 0;
            }

            #particles,
            .ambient,
            .lightning {
                display: none !important;
            }

            .container {
                max-width: 100%;
            }

            .no-print {
                display: none !important;
            }

            .header {
                border-bottom: 1px solid #ddd;
            }

            .brand-name,
            .section-title,
            .summary-card h2 {
                color: #1e293b !important;
            }

            .brand-subtitle,
            .summary-card p,
            td {
                color: #475569 !important;
            }

            .hero-banner {
                print-color-adjust: exact;
                -webkit-print-color-adjust: exact;
            }

            .summary-card,
            .filter,
            .table-container {
                background: white !important;
                box-shadow: none !important;
                border: 1px solid #ddd !important;
                backdrop-filter: none !important;
            }

            th {
                background: #e2e8f0 !important;
                color: #1e293b !important;
            }

            td {
                border-bottom: 1px solid #ddd;
            }

            tbody tr:hover {
                background: transparent;
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

<div class="ambient one"></div>
<div class="ambient two"></div>

<canvas id="particles"></canvas>
<div class="lightning" id="lightning"></div>

<div class="container">

    <!-- HEADER -->
    <div class="header">

        <div class="brand">

            <div class="brand-icon">
                <img src="{{ asset('images/logo-bkpsdm.png') }}"
                     alt="Logo BKPSDM">
            </div>

            <div>
                <div class="brand-name">ASSETRA</div>
                <div class="brand-subtitle">
                    ASSET MANAGEMENT SYSTEM
                </div>
            </div>

        </div>

        <div class="header-actions no-print">

            <a href="{{ route('dashboard') }}" class="button back">
                Exit
            </a>

            <a href="{{ route('reports.export', request()->only([
                'category_id',
                'room_id',
                'kondisi'
            ])) }}" class="button export">
                ↓ Export Excel
            </a>

            <button onclick="window.print()" class="button print-btn">
                ▤ Cetak Laporan
            </button>

        </div>

    </div>

    <!-- HERO BANNER -->
    <div class="hero-banner">

        <div class="hero-content">

            <div class="hero-badge">
                ✦ SISTEM INFORMASI MANAJEMEN ASET
            </div>

            <h1>Laporan Data Aset</h1>

            <p>
                Kelola dan pantau seluruh data aset BKPSDM Kota Pontianak
                dengan lebih mudah, terstruktur, dan efisien.
            </p>

        </div>

    </div>

    <!-- SUMMARY -->
    <div class="summary">

        <div class="summary-card">
            <p>Total Jenis Aset</p>
            <h2>{{ $totalAset }}</h2>
        </div>

        <div class="summary-card">
            <p>Total Jumlah Barang</p>
            <h2>{{ $totalJumlah }}</h2>
        </div>

    </div>

    <!-- FILTER LAPORAN -->
    <div class="filter no-print">

        <h3 class="section-title">
            Filter Laporan
        </h3>

        <form method="GET" action="{{ route('reports.index') }}">

            <div class="filter-group">

                <label>Kategori</label>

                <select name="category_id">

                    <option value="">Semua Kategori</option>

                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}"
                            {{ request('category_id') == $category->id ? 'selected' : '' }}>
                            {{ $category->nama_kategori }}
                        </option>
                    @endforeach

                </select>

            </div>

            <div class="filter-group">

                <label>Ruangan</label>

                <select name="room_id">

                    <option value="">Semua Ruangan</option>

                    @foreach ($rooms as $room)
                        <option value="{{ $room->id }}"
                            {{ request('room_id') == $room->id ? 'selected' : '' }}>
                            {{ $room->nama_ruangan }}
                        </option>
                    @endforeach

                </select>

            </div>

            <div class="filter-group">

                <label>Kondisi</label>

                <select name="kondisi">

                    <option value="">Semua Kondisi</option>

                    <option value="Baik"
                        {{ request('kondisi') == 'Baik' ? 'selected' : '' }}>
                        Baik
                    </option>

                    <option value="Rusak Ringan"
                        {{ request('kondisi') == 'Rusak Ringan' ? 'selected' : '' }}>
                        Rusak Ringan
                    </option>

                    <option value="Rusak Berat"
                        {{ request('kondisi') == 'Rusak Berat' ? 'selected' : '' }}>
                        Rusak Berat
                    </option>

                </select>

            </div>

            <button type="submit" class="button">
                Terapkan
            </button>

            <a href="{{ route('reports.index') }}" class="button back">
                ↻ Reset
            </a>

        </form>

    </div>

    <!-- DAFTAR ASET -->
    <div class="table-container">

        <h3 class="section-title">
            Daftar Aset
        </h3>

        <table>

            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode Aset</th>
                    <th>Nama Aset</th>
                    <th>Kategori</th>
                    <th>Ruangan</th>
                    <th>Jumlah</th>
                    <th>Kondisi</th>
                </tr>
            </thead>

            <tbody>

                @forelse ($assets as $asset)

                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $asset->kode_aset }}</td>
                        <td>{{ $asset->nama_aset }}</td>
                        <td>{{ $asset->category->nama_kategori ?? '-' }}</td>
                        <td>{{ $asset->room->nama_ruangan ?? '-' }}</td>
                        <td>{{ $asset->jumlah }}</td>
                        <td>{{ $asset->kondisi }}</td>
                    </tr>

                @empty

                    <tr>
                        <td colspan="7" class="empty-row">
                            Tidak ada data aset.
                        </td>
                    </tr>

                @endforelse

            </tbody>

        </table>

    </div>

    <!-- FOOTER -->
    <div class="footer">
        © {{ date('Y') }}
        <span>ASSETRA</span>
        · BKPSDM Kota Pontianak
    </div>

</div>

<script>
    // ANIMASI PARTIKEL
    const canvas = document.getElementById('particles');
    const ctx = canvas.getContext('2d');

    let particles = [];

    function resizeCanvas() {
        canvas.width = window.innerWidth;
        canvas.height = window.innerHeight;
    }

    window.addEventListener('resize', resizeCanvas);
    resizeCanvas();

    class Particle {

        constructor() {
            this.reset();
        }

        reset() {
            this.x = Math.random() * canvas.width;
            this.y = Math.random() * canvas.height;
            this.size = Math.random() * 2 + .5;
            this.speedY = Math.random() * .45 + .1;
            this.speedX = (Math.random() - .5) * .3;
            this.opacity = Math.random() * .5 + .2;
        }

        update() {
            this.y -= this.speedY;
            this.x += this.speedX;

            if (this.y < -10) {
                this.y = canvas.height + 10;
                this.x = Math.random() * canvas.width;
            }

            if (this.x < 0 || this.x > canvas.width) {
                this.speedX *= -1;
            }
        }

        draw() {
            ctx.beginPath();

            ctx.arc(
                this.x,
                this.y,
                this.size,
                0,
                Math.PI * 2
            );

            ctx.fillStyle = `rgba(233,189,97,${this.opacity})`;
            ctx.shadowBlur = 10;
            ctx.shadowColor = '#E9BD61';
            ctx.fill();

            ctx.shadowBlur = 0;
        }

    }

    for (let i = 0; i < 55; i++) {
        particles.push(new Particle());
    }

    function animateParticles() {

        ctx.clearRect(
            0,
            0,
            canvas.width,
            canvas.height
        );

        particles.forEach(particle => {
            particle.update();
            particle.draw();
        });

        requestAnimationFrame(animateParticles);
    }

    animateParticles();

    // EFEK KILATAN CAHAYA
    const lightning = document.getElementById('lightning');

    function flashLightning() {

        lightning.classList.remove('flash');

        void lightning.offsetWidth;

        lightning.classList.add('flash');

        setTimeout(() => {
            lightning.classList.remove('flash');
        }, 400);

    }

    function scheduleLightning() {

        const delay = Math.random() * 9000 + 7000;

        setTimeout(() => {

            flashLightning();

            scheduleLightning();

        }, delay);

    }

    scheduleLightning();
</script>

</body>
</html>
