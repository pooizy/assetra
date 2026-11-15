
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Ruangan - ASSETRA</title>

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

        /* AMBIENT BACKGROUND */
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

        /* PARTICLES */
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

        /* LIGHTNING */
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

        .header-brand {
            display: flex;
            align-items: center;
            gap: 18px;
        }

        .header-logo {
            width: 76px;
            height: 76px;
            object-fit: contain;
            background: #fff;
            padding: 5px;
            border-radius: 3px;
            box-shadow: 0 5px 18px rgba(0,0,0,.25);
        }

        .header-brand h2 {
            margin: 0;
            font-size: 30px;
            font-weight: 800;
            letter-spacing: 1px;
            color: var(--gold-light);
        }

        .header-brand p {
            margin: 5px 0 0;
            color: var(--muted);
            font-size: 13px;
            font-weight: 700;
            letter-spacing: 1.3px;
        }

        .btn-dashboard {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 9px;
            padding: 13px 19px;
            border-radius: 12px;
            background: rgba(23,100,84,.25);
            color: var(--gold-light);
            border: 1px solid rgba(233,189,97,.45);
            font-size: 13px;
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
            max-width: 1050px;
            margin: 35px auto;
            padding: 0 20px 40px;
            animation: fadeUp .8s ease;
        }

        /* HERO BANNER */
        .hero-banner {
            position: relative;
            min-height: 220px;
            display: flex;
            align-items: center;
            padding: 35px 40px;
            margin-bottom: 35px;
            overflow: hidden;
            border-radius: 22px;
            border: 1px solid rgba(233,189,97,.38);
            background:
                linear-gradient(
                    90deg,
                    rgba(4,31,27,.97) 0%,
                    rgba(4,31,27,.88) 48%,
                    rgba(4,31,27,.35) 100%
                ),
                url('{{ asset('images/gedung-bkpsdm.png') }}') center 48% / cover no-repeat;
            box-shadow:
                0 15px 35px rgba(0,0,0,.25),
                0 4px 20px rgba(201,154,53,.08);
            animation: fadeUp .9s ease;
        }

        .hero-content {
            position: relative;
            z-index: 1;
            max-width: 650px;
        }

        .hero-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 9px 15px;
            margin-bottom: 17px;
            border: 1px solid rgba(233,189,97,.45);
            border-radius: 30px;
            background: rgba(201,154,53,.13);
            color: var(--gold-light);
            font-size: 11px;
            font-weight: 800;
            letter-spacing: 1.3px;
        }

        .hero-banner h1 {
            margin: 0;
            color: white;
            font-size: 29px;
            font-weight: 800;
            line-height: 1.3;
        }

        .hero-banner p {
            max-width: 600px;
            margin: 12px 0 0;
            color: #D5E2DC;
            font-size: 13px;
            line-height: 1.8;
        }

        /* PAGE HEADING */
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

        /* CARD */
        .card {
            background: linear-gradient(
                145deg,
                rgba(16,72,61,.88),
                rgba(4,31,27,.94)
            );
            padding: 25px;
            border-radius: 14px;
            border: 1px solid rgba(233,189,97,.42);
            box-shadow:
                0 15px 35px rgba(0,0,0,.30),
                0 5px 20px rgba(201,154,53,.12),
                inset 0 1px 0 rgba(255,255,255,.06);
            backdrop-filter: blur(14px);
            transition: .3s ease;
        }

        .card:hover {
            border-color: rgba(233,189,97,.65);
            box-shadow:
                0 18px 40px rgba(0,0,0,.35),
                0 5px 24px rgba(201,154,53,.18);
        }

        .section-title {
            display: flex;
            align-items: center;
            gap: 11px;
            margin: 0 0 22px;
            padding-bottom: 14px;
            border-bottom: 1px solid rgba(233,189,97,.28);
            font-size: 18px;
            font-weight: 800;
            color: var(--cream);
        }

        .section-icon {
            width: 34px;
            height: 34px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(201,154,53,.14);
            border: 1px solid rgba(233,189,97,.45);
            border-radius: 9px;
            color: var(--gold-light);
            font-size: 17px;
        }

        /* FORM */
        label {
            display: block;
            margin-bottom: 8px;
            font-size: 12px;
            font-weight: 700;
            color: var(--cream);
        }

        input,
        textarea {
            width: 100%;
            padding: 12px 14px;
            margin: 0 0 18px;
            border: 1px solid rgba(169,193,185,.32);
            border-radius: 8px;
            background: rgba(4,31,27,.65);
            color: var(--white);
            font-family: inherit;
            font-size: 13px;
            outline: none;
            transition: .3s ease;
            box-shadow: inset 0 2px 5px rgba(0,0,0,.12);
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
            min-height: 100px;
            resize: vertical;
        }

        /* BUTTON */
        button {
            background: linear-gradient(135deg, var(--gold), var(--gold-light));
            color: #263027;
            border: 1px solid rgba(255,255,255,.2);
            padding: 11px 19px;
            border-radius: 8px;
            cursor: pointer;
            font-family: inherit;
            font-size: 12px;
            font-weight: 800;
            transition: .3s ease;
            box-shadow: 0 5px 14px rgba(201,154,53,.18);
        }

        button:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(201,154,53,.30);
            filter: brightness(1.08);
        }

        /* ALERT */
        .success {
            color: #A7F3D0;
            background: rgba(16,185,129,.10);
            border: 1px solid rgba(52,211,153,.30);
            padding: 12px 15px;
            border-radius: 8px;
            margin-bottom: 18px;
            font-size: 13px;
        }

        .error {
            color: #FCA5A5;
            background: rgba(220,38,38,.10);
            border: 1px solid rgba(248,113,113,.30);
            padding: 10px 15px;
            border-radius: 8px;
            margin-bottom: 18px;
            font-size: 12px;
        }

        .error p {
            margin: 5px 0;
        }

        /* TABLE */
        .table-wrapper {
            width: 100%;
            overflow-x: auto;
            border: 1px solid rgba(233,189,97,.35);
            border-radius: 10px;
            margin-top: 10px;
            box-shadow: 0 5px 18px rgba(0,0,0,.20);
        }

        table {
            width: 100%;
            min-width: 700px;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 13px 12px;
            text-align: left;
            border-bottom: 1px solid rgba(169,193,185,.17);
            font-size: 12px;
        }

        th {
            background: rgba(201,154,53,.16);
            color: var(--gold-light);
            font-size: 11px;
            font-weight: 800;
            letter-spacing: .5px;
            text-transform: uppercase;
            white-space: nowrap;
        }

        td {
            color: #E0EBE6;
            line-height: 1.6;
        }

        tbody tr {
            transition: .25s ease;
        }

        tbody tr:hover {
            background: rgba(233,189,97,.08);
        }

        tbody tr:last-child td {
            border-bottom: none;
        }

        .empty-state {
            text-align: center;
            color: var(--muted);
            padding: 25px 12px;
        }

        /* ACTION */
        .action-group {
            display: flex;
            align-items: center;
            gap: 8px;
            flex-wrap: wrap;
        }

        .edit-link {
            display: inline-block;
            text-decoration: none;
            padding: 7px 12px;
            border-radius: 6px;
            color: var(--gold-light);
            background: rgba(201,154,53,.12);
            border: 1px solid rgba(233,189,97,.30);
            font-size: 11px;
            font-weight: 700;
            transition: .3s ease;
        }

        .edit-link:hover {
            background: rgba(201,154,53,.25);
            border-color: var(--gold-light);
            transform: translateY(-1px);
        }

        .delete-form {
            display: inline;
            margin: 0;
        }

        .delete-button {
            background: rgba(220,38,38,.12);
            color: #FCA5A5;
            border: 1px solid rgba(248,113,113,.35);
            padding: 7px 12px;
            font-size: 11px;
            box-shadow: none;
        }

        .delete-button:hover {
            background: rgba(220,38,38,.25);
            border-color: #FCA5A5;
            box-shadow: 0 4px 12px rgba(220,38,38,.15);
        }

        /* SUCCESS POPUP */
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
            background: linear-gradient(
                145deg,
                #10483D,
                #041F1B
            );
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
        }

        /* DELETE MODAL */
        .delete-modal-overlay {
            position: fixed;
            inset: 0;
            z-index: 9999;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            background: rgba(0,15,12,.72);
            backdrop-filter: blur(0);
            opacity: 0;
            visibility: hidden;
            transition:
                opacity .3s ease,
                visibility .3s ease,
                backdrop-filter .3s ease;
        }

        .delete-modal-overlay.active {
            opacity: 1;
            visibility: visible;
            backdrop-filter: blur(7px);
        }

        .delete-modal {
            width: 100%;
            max-width: 390px;
            padding: 32px 27px;
            text-align: center;
            background: linear-gradient(
                145deg,
                rgba(16,72,61,.98),
                rgba(4,31,27,.99)
            );
            border: 1px solid rgba(233,189,97,.55);
            border-radius: 18px;
            box-shadow:
                0 25px 70px rgba(0,0,0,.55),
                0 0 30px rgba(201,154,53,.12),
                inset 0 1px 0 rgba(255,255,255,.08);
            transform: translateY(35px) scale(.85);
            opacity: 0;
            transition:
                transform .4s cubic-bezier(.2,.8,.2,1),
                opacity .3s ease;
        }

        .delete-modal-overlay.active .delete-modal {
            transform: translateY(0) scale(1);
            opacity: 1;
        }

        .delete-icon {
            width: 75px;
            height: 75px;
            margin: 0 auto 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            background: rgba(220,38,38,.12);
            border: 1px solid rgba(248,113,113,.40);
            color: #FCA5A5;
            font-size: 34px;
            box-shadow: 0 0 25px rgba(220,38,38,.12);
            animation: warningPulse 2s ease-in-out infinite;
        }

        @keyframes warningPulse {
            0%, 100% {
                transform: scale(1);
                box-shadow: 0 0 15px rgba(220,38,38,.10);
            }
            50% {
                transform: scale(1.07);
                box-shadow: 0 0 25px rgba(220,38,38,.22);
            }
        }

        .delete-modal h2 {
            margin: 0 0 10px;
            color: var(--cream);
            font-size: 21px;
            font-weight: 800;
        }

        .delete-modal p {
            margin: 0;
            color: var(--muted);
            font-size: 13px;
            line-height: 1.7;
        }

        .delete-modal-actions {
            display: flex;
            justify-content: center;
            gap: 11px;
            margin-top: 27px;
        }

        .btn-cancel {
            background: rgba(169,193,185,.10);
            color: var(--white);
            border: 1px solid rgba(169,193,185,.30);
            box-shadow: none;
        }

        .btn-cancel:hover {
            background: rgba(169,193,185,.18);
            border-color: var(--muted);
            box-shadow: none;
        }

        .btn-confirm-delete {
            background: linear-gradient(135deg, #B83232, #E05252);
            color: white;
            border: 1px solid rgba(255,255,255,.15);
            box-shadow: 0 5px 15px rgba(220,38,38,.20);
        }

        .btn-confirm-delete:hover {
            background: linear-gradient(135deg, #D13C3C, #F06464);
            box-shadow: 0 7px 20px rgba(220,38,38,.30);
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

        /* PAGE ANIMATION */
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

            .header-brand {
                gap: 12px;
            }

            .header-logo {
                width: 58px;
                height: 58px;
            }

            .header-brand h2 {
                font-size: 21px;
            }

            .header-brand p {
                font-size: 10px;
            }

            .btn-dashboard {
                width: 100%;
            }

            main {
                margin: 25px auto;
                padding: 0 14px 30px;
            }

            .hero-banner {
                min-height: 190px;
                padding: 25px 20px;
                border-radius: 15px;
                background-position: center;
            }

            .hero-banner h1 {
                font-size: 22px;
            }

            .hero-banner p {
                font-size: 12px;
            }

            .page-heading h1 {
                font-size: 23px;
            }

            .card {
                padding: 25px;
            }

            .section-title {
                font-size: 16px;
            }

            .delete-modal {
                padding: 28px 20px;
            }

            .delete-modal-actions {
                flex-direction: column-reverse;
            }

            .delete-modal-actions button {
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
                <img
                    src="{{ asset('images/logo-bkpsdm.png') }}"
                    alt="Logo BKPSDM"
                    class="header-logo"
                >

                <div>
                    <h2>ASSETRA</h2>
                    <p>BKPSDM KOTA PONTIANAK</p>
                </div>
            </div>

            <a href="{{ route('dashboard') }}" class="btn-dashboard">
                <span>⌂</span>
                Kembali ke Dashboard
            </a>

        </div>
    </header>

    <!-- MAIN -->
    <main>

        <!-- HERO BANNER -->
        <section class="hero-banner">
            <div class="hero-content">
                <div class="hero-badge">
                    ✦ SISTEM INFORMASI MANAJEMEN ASET
                </div>

                <h1>Manajemen Data Ruangan</h1>

                <p>
                    Kelola dan atur data ruangan BKPSDM Kota Pontianak
                    dengan lebih mudah, terstruktur, dan efisien.
                </p>
            </div>
        </section>

        <!-- PAGE HEADING -->
        <div class="page-heading">
            <div class="eyebrow">Manajemen Data</div>
            <h1>Data Ruangan</h1>
            <p>
                Kelola data ruangan untuk membantu pengelompokan
                lokasi penyimpanan aset secara terstruktur.
            </p>
        </div>

        <div class="card">

            <!-- FORM TAMBAH RUANGAN -->
            <h2 class="section-title">
                <span class="section-icon">＋</span>
                Tambah Ruangan
            </h2>

            @if($errors->any())
                <div class="error">
                    @foreach($errors->all() as $error)
                        <p>• {{ $error }}</p>
                    @endforeach
                </div>
            @endif

            <form action="{{ route('rooms.store') }}" method="POST">
                @csrf

                <label for="nama_ruangan">Nama Ruangan</label>
                <input
                    type="text"
                    id="nama_ruangan"
                    name="nama_ruangan"
                    value="{{ old('nama_ruangan') }}"
                    placeholder="Contoh: Ruang Arsip"
                    required
                >

                <label for="kode_ruangan">Kode Ruangan</label>
                <input
                    type="text"
                    id="kode_ruangan"
                    name="kode_ruangan"
                    value="{{ old('kode_ruangan') }}"
                    placeholder="Contoh: R-001"
                    required
                >

                <label for="keterangan">Keterangan</label>
                <textarea
                    id="keterangan"
                    name="keterangan"
                    placeholder="Keterangan ruangan"
                >{{ old('keterangan') }}</textarea>

                <button type="submit">
                    Simpan Ruangan
                </button>
            </form>

            <!-- DAFTAR RUANGAN -->
            <h2 class="section-title" style="margin-top: 35px;">
                <span class="section-icon">▤</span>
                Daftar Ruangan
            </h2>

            <div class="table-wrapper">
                <table>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Ruangan</th>
                            <th>Kode Ruangan</th>
                            <th>Keterangan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse($rooms as $room)
                            <tr>
                                <td>{{ $loop->iteration }}</td>

                                <td>{{ $room->nama_ruangan }}</td>

                                <td>{{ $room->kode_ruangan }}</td>

                                <td>{{ $room->keterangan ?? '-' }}</td>

                                <td>
                                    <div class="action-group">

                                        <a
                                            href="{{ route('rooms.edit', $room->id) }}"
                                            class="edit-link"
                                        >
                                            Edit
                                        </a>

                                        <form
                                            action="{{ route('rooms.destroy', $room->id) }}"
                                            method="POST"
                                            class="delete-form"
                                        >
                                            @csrf
                                            @method('DELETE')

                                            <button
                                                type="button"
                                                class="delete-button"
                                                onclick="openDeleteModal(this)"
                                            >
                                                Hapus
                                            </button>
                                        </form>

                                    </div>
                                </td>
                            </tr>

                        @empty
                            <tr>
                                <td colspan="5" class="empty-state">
                                    Belum ada data ruangan.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

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

    <!-- POPUP KONFIRMASI HAPUS -->
    <div class="delete-modal-overlay" id="deleteModal">

        <div
            class="delete-modal"
            role="dialog"
            aria-modal="true"
            aria-labelledby="deleteTitle"
        >

            <div class="delete-icon">!</div>

            <h2 id="deleteTitle">Hapus Ruangan?</h2>

            <p>
                Apakah kamu yakin ingin menghapus data ruangan ini?
                Data yang sudah dihapus tidak dapat dikembalikan.
            </p>

            <div class="delete-modal-actions">

                <button
                    type="button"
                    class="btn-cancel"
                    onclick="closeDeleteModal()"
                >
                    Batal
                </button>

                <button
                    type="button"
                    class="btn-confirm-delete"
                    onclick="confirmDelete()"
                >
                    Ya, Hapus
                </button>

            </div>
        </div>
    </div>

    <!-- FOOTER -->
    <footer>
        © {{ date('Y') }}
        <span>ASSETRA BKPSDM Kota Pontianak</span>.
        All Rights Reserved.
    </footer>

    <script>
        // ==================================
        // ANIMASI PARTIKEL
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

        // ==================================
        // POPUP KONFIRMASI HAPUS
        // ==================================

        const deleteModal =
            document.getElementById('deleteModal');

        let selectedDeleteForm = null;

        function openDeleteModal(button) {
            selectedDeleteForm = button.closest('form');

            if (!selectedDeleteForm) return;

            deleteModal.classList.add('active');
            document.body.style.overflow = 'hidden';
        }

        function closeDeleteModal() {
            deleteModal.classList.remove('active');
            document.body.style.overflow = '';
            selectedDeleteForm = null;
        }

        function confirmDelete() {
            if (selectedDeleteForm) {
                selectedDeleteForm.submit();
            }
        }

        // Klik di luar popup hapus
        deleteModal.addEventListener('click', function(event) {
            if (event.target === deleteModal) {
                closeDeleteModal();
            }
        });

        // Tombol Escape
        document.addEventListener('keydown', function(event) {
            if (event.key === 'Escape') {
                if (successModal && successModal.classList.contains('active')) {
                    closeSuccessModal();
                } else if (deleteModal.classList.contains('active')) {
                    closeDeleteModal();
                }
            }
        });
    </script>

</body>
</html>
