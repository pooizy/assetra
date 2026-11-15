
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Aset - ASSETRA</title>

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
            15% { opacity: .8; }
            75% { opacity: .5; }
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
            from { transform: translate(0, 0) scale(.8); }
            to { transform: translate(100px, -60px) scale(1.2); }
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

        /* DETAIL CARD */

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

        /* CARD TOP */

        .card-top {
            position: relative;
            z-index: 1;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 15px;
            flex-wrap: wrap;
            padding-bottom: 23px;
            margin-bottom: 15px;
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

        /* DATA GRID */

        .detail-grid {
            position: relative;
            z-index: 1;
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 14px 22px;
        }

        .detail-item {
            min-width: 0;
            padding: 19px 14px;
            border: 1px solid rgba(201,154,53,.48);
            border-bottom: 1px solid rgba(201,154,53,.58);
            border-radius: 10px;
            transition: .3s ease;
            box-shadow:
                0 5px 16px rgba(0,0,0,.20),
                0 4px 14px rgba(201,154,53,.22),
                0 0 8px rgba(201,154,53,.10),
                inset 0 0 7px rgba(201,154,53,.05);
            animation: fieldReveal .7s ease both;
        }

        .detail-item:hover {
            background: rgba(255,255,255,.035);
            transform: translateY(-3px);
            border-color: rgba(201,154,53,.75);
            box-shadow:
                0 7px 20px rgba(0,0,0,.26),
                0 5px 18px rgba(201,154,53,.30),
                0 0 12px rgba(201,154,53,.16),
                inset 0 0 8px rgba(201,154,53,.07);
        }

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

        .detail-item:nth-child(1) { animation-delay: .10s; }
        .detail-item:nth-child(2) { animation-delay: .16s; }
        .detail-item:nth-child(3) { animation-delay: .22s; }
        .detail-item:nth-child(4) { animation-delay: .28s; }
        .detail-item:nth-child(5) { animation-delay: .34s; }
        .detail-item:nth-child(6) { animation-delay: .40s; }
        .detail-item:nth-child(7) { animation-delay: .46s; }
        .detail-item:nth-child(8) { animation-delay: .52s; }
        .detail-item:nth-child(9) { animation-delay: .58s; }

        .detail-label {
            display: block;
            color: #A9C1B9;
            font-size: 10px;
            font-weight: 800;
            letter-spacing: 1px;
            text-transform: uppercase;
            margin-bottom: 9px;
        }

        .detail-value {
            color: #F4F8F5;
            font-size: 13px;
            font-weight: 700;
            line-height: 1.8;
            overflow-wrap: anywhere;
        }

        /* CONDITION BADGE */

        .condition {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 8px 13px;
            border-radius: 30px;
            font-size: 11px;
            font-weight: 800;
            border: 1px solid transparent;
        }

        .condition::before {
            content: "";
            width: 7px;
            height: 7px;
            border-radius: 50%;
            background: currentColor;
            box-shadow: 0 0 9px currentColor;
        }

        .condition.baik {
            color: #8EE0A8;
            background: rgba(34,197,94,.12);
            border-color: rgba(34,197,94,.25);
        }

        .condition.ringan {
            color: #F4CF7D;
            background: rgba(201,154,53,.12);
            border-color: rgba(201,154,53,.28);
        }

        .condition.berat {
            color: #F59B9B;
            background: rgba(239,68,68,.12);
            border-color: rgba(239,68,68,.25);
        }

        .condition.lainnya {
            color: #C5D9CF;
            background: rgba(255,255,255,.08);
            border-color: rgba(255,255,255,.16);
        }

        /* FOOTER CARD */

        .card-footer {
            position: relative;
            z-index: 1;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 15px;
            flex-wrap: wrap;
            margin-top: 27px;
            padding-top: 24px;
            border-top: 1px solid rgba(233,189,97,.18);
        }

        .footer-note {
            color: #A9C1B9;
            font-size: 10px;
            line-height: 1.8;
        }

        .footer-note span {
            color: var(--gold-light);
            font-weight: 700;
        }

        /* BUTTON */

        .btn-back {
            display: inline-flex;
            justify-content: center;
            align-items: center;
            gap: 9px;
            padding: 13px 21px;
            border-radius: 11px;
            color: #2D2109;
            background: linear-gradient(135deg, #F5DDA6, #E9BD61, #C99A35);
            border: 1px solid #E9BD61;
            text-decoration: none;
            font-family: inherit;
            font-size: 12px;
            font-weight: 800;
            box-shadow: 0 7px 20px rgba(201,154,53,.22);
            transition: .3s ease;
            position: relative;
            overflow: hidden;
        }

        .btn-back::before {
            content: "";
            position: absolute;
            top: 0;
            left: -120%;
            width: 65%;
            height: 100%;
            background: linear-gradient(100deg, transparent, rgba(255,255,255,.7), transparent);
            transform: skewX(-25deg);
            transition: left .7s ease;
        }

        .btn-back:hover::before {
            left: 150%;
        }

        .btn-back:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 30px rgba(201,154,53,.35);
        }

        .btn-back span {
            font-size: 17px;
            transition: .3s;
        }

        .btn-back:hover span {
            transform: translateX(-5px);
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
                padding: 21px 16px;
            }

            .detail-grid {
                grid-template-columns: 1fr;
                gap: 12px;
            }

            .detail-item {
                padding: 17px 11px;
            }

            .card-title h2 {
                font-size: 15px;
            }

            .card-title p {
                font-size: 10px;
            }

            .card-footer {
                flex-direction: column;
                align-items: stretch;
            }

            .btn-back {
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

<div id="particles" aria-hidden="true"></div>
<div class="ambient ambient-one"></div>
<div class="ambient ambient-two"></div>

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

    <div class="card">

        <div class="card-top">
            <div class="card-title">
                <div class="title-icon">📋</div>

                <div>
                    <h2>Informasi Detail Aset</h2>
                    <p>Rincian lengkap data inventaris yang tersimpan dalam sistem.</p>
                </div>
            </div>
        </div>

        <div class="detail-grid">

            <div class="detail-item">
                <span class="detail-label">Kode Aset</span>
                <div class="detail-value">
                    {{ $asset->kode_aset }}
                </div>
            </div>

            <div class="detail-item">
                <span class="detail-label">Nama Aset</span>
                <div class="detail-value">
                    {{ $asset->nama_aset }}
                </div>
            </div>

            <div class="detail-item">
                <span class="detail-label">Kategori</span>
                <div class="detail-value">
                    {{ $asset->category->nama_kategori ?? '-' }}
                </div>
            </div>

            <div class="detail-item">
                <span class="detail-label">Ruangan</span>
                <div class="detail-value">
                    {{ $asset->room->nama_ruangan ?? '-' }}
                </div>
            </div>

            <div class="detail-item">
                <span class="detail-label">Penanggung Jawab</span>
                <div class="detail-value">
                    {{ $asset->employee->nama_pegawai ?? '-' }}
                </div>
            </div>

            <div class="detail-item">
                <span class="detail-label">Jumlah</span>
                <div class="detail-value">
                    {{ $asset->jumlah }}
                </div>
            </div>

            <div class="detail-item">
                <span class="detail-label">Kondisi</span>
                <div class="detail-value">

                    @php
                        $kondisi = strtolower(trim($asset->kondisi ?? ''));

                        $conditionClass = match ($kondisi) {
                            'baik' => 'baik',
                            'rusak ringan' => 'ringan',
                            'rusak berat' => 'berat',
                            default => 'lainnya',
                        };
                    @endphp

                    <span class="condition {{ $conditionClass }}">
                        {{ $asset->kondisi ?? '-' }}
                    </span>

                </div>
            </div>

            <div class="detail-item">
                <span class="detail-label">Tanggal Perolehan</span>
                <div class="detail-value">
                    {{ $asset->tanggal_perolehan ?? '-' }}
                </div>
            </div>

            <div class="detail-item">
                <span class="detail-label">Keterangan</span>
                <div class="detail-value">
                    {{ $asset->keterangan ?? '-' }}
                </div>
            </div>

        </div>

        <div class="card-footer">

            <div class="footer-note">
                <span>ASSETRA BKPSDM</span><br>
                Sistem Informasi Manajemen Aset<br>
                Kota Pontianak
            </div>

            <a href="{{ route('assets.index') }}" class="btn-back">
                <span></span>
                Kembali ke Data Aset
            </a>

        </div>

    </div>

</main>

<footer class="page-footer">
    © {{ date('Y') }}
    <span>ASSETRA BKPSDM Kota Pontianak</span>
    · Sistem Informasi Manajemen Aset
</footer>

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
