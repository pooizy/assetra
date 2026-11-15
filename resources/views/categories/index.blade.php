
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kategori Aset - ASSETRA</title>

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

        /* BACKGROUND DECORATION */
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

        .particles {
            position: fixed;
            inset: 0;
            pointer-events: none;
            overflow: hidden;
            z-index: 0;
        }

        .particle {
            position: absolute;
            width: 3px;
            height: 3px;
            background: var(--gold-light);
            border-radius: 50%;
            opacity: .35;
            animation: floatParticle 12s linear infinite;
        }

        @keyframes floatParticle {
            0% {
                transform: translateY(100vh);
                opacity: 0;
            }
            15% { opacity: .4; }
            85% { opacity: .4; }
            100% {
                transform: translateY(-10vh);
                opacity: 0;
            }
        }

        /* HEADER */
        header {
            position: relative;
            z-index: 2;
            padding: 17px 30px;
            background: linear-gradient(110deg, rgba(4,31,27,.97), rgba(7,61,50,.95));
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

        .brand {
            display: flex;
            align-items: center;
            gap: 13px;
        }

        .brand img {
            width: 52px;
            height: 52px;
            object-fit: contain;
            filter: drop-shadow(0 3px 8px rgba(233,189,97,.18));
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
            font-size: 11px;
            letter-spacing: 1.2px;
            font-weight: 600;
        }

        /* DASHBOARD BUTTON */
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
            font-family: inherit;
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
            max-width: 1100px;
            margin: 30px auto;
            padding: 0 20px 40px;
            animation: fadeUp .8s ease;
        }

        /* HERO GEDUNG */
        .hero {
            position: relative;
            min-height: 190px;
            padding: 35px;
            margin-bottom: 25px;
            border-radius: 15px;
            overflow: hidden;
            display: flex;
            align-items: center;
            background:
                linear-gradient(
                    90deg,
                    rgba(4,31,27,.96) 0%,
                    rgba(4,31,27,.85) 48%,
                    rgba(4,31,27,.40) 100%
                ),
                url('{{ asset("images/gedung-bkpsdm.png") }}') center 43%/cover no-repeat;
            border: 1px solid rgba(233,189,97,.35);
            box-shadow:
                0 15px 35px rgba(0,0,0,.30),
                0 4px 20px rgba(201,154,53,.10);
        }

        .hero::after {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(
                120deg,
                transparent 50%,
                rgba(233,189,97,.08)
            );
            pointer-events: none;
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
            padding: 7px 12px;
            border-radius: 30px;
            background: rgba(201,154,53,.17);
            border: 1px solid rgba(233,189,97,.35);
            color: var(--gold-light);
            font-size: 10px;
            font-weight: 800;
            letter-spacing: 1.5px;
            margin-bottom: 13px;
        }

        .hero h1 {
            margin: 0;
            color: white;
            font-size: 30px;
            font-weight: 800;
            letter-spacing: -.5px;
        }

        .hero p {
            margin: 10px 0 0;
            color: #E0EBE6;
            font-size: 13px;
            line-height: 1.7;
            max-width: 540px;
        }

        /* PAGE HEADING */
        .page-heading {
            margin-bottom: 22px;
        }

        .page-heading .eyebrow {
            color: var(--gold-light);
            font-size: 11px;
            font-weight: 800;
            letter-spacing: 2px;
            text-transform: uppercase;
            margin-bottom: 8px;
        }

        .page-heading h2 {
            font-size: 24px;
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
            margin: 0 0 22px;
            padding-bottom: 14px;
            border-bottom: 1px solid rgba(233,189,97,.22);
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
            border: 1px solid rgba(233,189,97,.35);
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
            border: 1px solid rgba(233,189,97,.25);
            border-radius: 10px;
            margin-top: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,.15);
        }

        table {
            width: 100%;
            min-width: 620px;
            border-collapse: collapse;
        }

        th, td {
            padding: 13px 12px;
            text-align: left;
            border-bottom: 1px solid rgba(169,193,185,.13);
            font-size: 12px;
        }

        th {
            background: rgba(201,154,53,.14);
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
            background: rgba(233,189,97,.07);
        }

        tbody tr:last-child td {
            border-bottom: none;
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

        .empty-state {
            text-align: center;
            color: var(--muted);
            padding: 25px 12px;
        }

        /* POPUP KONFIRMASI HAPUS */
        .delete-modal-overlay {
            position: fixed;
            inset: 0;
            z-index: 9999;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            background: rgba(0, 15, 12, .72);
            backdrop-filter: blur(0px);
            opacity: 0;
            visibility: hidden;
            transition: opacity .3s ease, visibility .3s ease,
                        backdrop-filter .3s ease;
        }

        .delete-modal-overlay.active {
            opacity: 1;
            visibility: visible;
            backdrop-filter: blur(7px);
        }

        .delete-modal {
            position: relative;
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
            transition: transform .4s cubic-bezier(.2,.8,.2,1),
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

        /* POPUP NOTIFIKASI BERHASIL / GAGAL */
        .notification-overlay {
            position: fixed;
            inset: 0;
            z-index: 10000;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            background: rgba(0, 15, 12, .75);
            backdrop-filter: blur(0);
            opacity: 0;
            visibility: hidden;
            transition: opacity .35s ease, visibility .35s ease,
                        backdrop-filter .35s ease;
        }

        .notification-overlay.active {
            opacity: 1;
            visibility: visible;
            backdrop-filter: blur(8px);
        }

        .notification-modal {
            position: relative;
            width: 100%;
            max-width: 390px;
            padding: 32px 27px;
            text-align: center;
            border-radius: 20px;
            background: linear-gradient(145deg, #10483D, #041F1B);
            border: 1px solid rgba(233,189,97,.55);
            box-shadow:
                0 25px 70px rgba(0,0,0,.55),
                0 0 30px rgba(201,154,53,.15),
                inset 0 1px 0 rgba(255,255,255,.08);
            transform: translateY(35px) scale(.85);
            opacity: 0;
            transition: transform .4s cubic-bezier(.2,.8,.2,1),
                        opacity .3s ease;
        }

        .notification-overlay.active .notification-modal {
            transform: translateY(0) scale(1);
            opacity: 1;
        }

        .notification-icon {
            width: 76px;
            height: 76px;
            margin: 0 auto 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            font-size: 35px;
            font-weight: 800;
        }

        .notification-icon.success {
            color: #A7F3D0;
            background: rgba(16,185,129,.13);
            border: 1px solid rgba(52,211,153,.45);
            box-shadow: 0 0 25px rgba(52,211,153,.18);
            animation: successPulse 2s ease-in-out infinite;
        }

        .notification-icon.error {
            color: #FCA5A5;
            background: rgba(220,38,38,.13);
            border: 1px solid rgba(248,113,113,.45);
            box-shadow: 0 0 25px rgba(220,38,38,.18);
            animation: errorPulse 2s ease-in-out infinite;
        }

        @keyframes successPulse {
            0%, 100% {
                transform: scale(1);
                box-shadow: 0 0 15px rgba(52,211,153,.12);
            }
            50% {
                transform: scale(1.08);
                box-shadow: 0 0 30px rgba(52,211,153,.3);
            }
        }

        @keyframes errorPulse {
            0%, 100% {
                transform: scale(1);
                box-shadow: 0 0 15px rgba(220,38,38,.10);
            }
            50% {
                transform: scale(1.08);
                box-shadow: 0 0 28px rgba(220,38,38,.25);
            }
        }

        .notification-modal h2 {
            margin: 0 0 10px;
            color: var(--cream);
            font-size: 21px;
            font-weight: 800;
        }

        .notification-modal p {
            margin: 0;
            color: var(--muted);
            font-size: 13px;
            line-height: 1.8;
        }

        .notification-close {
            width: 100%;
            margin-top: 25px;
            padding: 12px 18px;
            border: none;
            border-radius: 9px;
            color: #263027;
            background: linear-gradient(135deg, var(--gold), var(--gold-light));
            font-family: inherit;
            font-size: 12px;
            font-weight: 800;
            cursor: pointer;
            transition: .3s ease;
        }

        .notification-close:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(201,154,53,.3);
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

        /* ANIMATION */
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

            .brand img {
                width: 45px;
                height: 45px;
            }

            .btn-dashboard {
                width: 100%;
            }

            main {
                margin: 25px auto;
                padding: 0 14px 30px;
            }

            .hero {
                min-height: 190px;
                padding: 25px 20px;
                background-position: center;
            }

            .hero h1 {
                font-size: 24px;
            }

            .page-heading h2 {
                font-size: 22px;
            }

            .card {
                padding: 18px 15px;
            }

            .section-title {
                font-size: 16px;
            }

            button {
                width: 100%;
            }

            .action-group button {
                width: auto;
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

            .notification-modal {
                padding: 28px 20px;
            }
        }

        @media (prefers-reduced-motion: reduce) {
            *, *::before, *::after {
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
<div class="particles" id="particles"></div>

<!-- HEADER -->
<header>
    <div class="header-content">

        <div class="brand">

            <img
                src="{{ asset('images/logo-bkpsdm.png') }}"
                alt="Logo BKPSDM Kota Pontianak"
            >

            <div class="header-brand">
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

    <!-- HERO GEDUNG BKPSDM -->
    <section class="hero">

        <div class="hero-content">

            <div class="hero-label">
                ✦ SISTEM INFORMASI MANAJEMEN ASET
            </div>

            <h1>Manajemen Kategori Aset</h1>

            <p>
                Kelola dan atur kategori aset BKPSDM Kota Pontianak
                dengan lebih mudah, terstruktur, dan efisien.
            </p>

        </div>

    </section>

    <!-- PAGE HEADING -->
    <div class="page-heading">

        <div class="eyebrow">MANAJEMEN DATA</div>

        <h2>Kategori Aset</h2>

        <p>
            Kelola data kategori aset untuk membantu pengelompokan
            inventaris secara terstruktur.
        </p>

    </div>

    <!-- CARD -->
    <div class="card">

        <h2 class="section-title">
            <span class="section-icon">＋</span>
            Tambah Kategori
        </h2>

        <!-- FORM TAMBAH KATEGORI -->
        <form action="{{ route('categories.store') }}" method="POST">
            @csrf

            <label>Nama Kategori</label>

            <input
                type="text"
                name="nama_kategori"
                value="{{ old('nama_kategori') }}"
                required
                placeholder="Tulis nama kategori"
            >

            <label>Deskripsi</label>

            <textarea
                name="deskripsi"
                placeholder="Masukkan keterangan kategori"
            >{{ old('deskripsi') }}</textarea>

            <button type="submit">
                Simpan Kategori
            </button>

        </form>

        <!-- DAFTAR KATEGORI -->
        <h2 class="section-title" style="margin-top: 35px;">

            <span class="section-icon">▤</span>

            Daftar Kategori

        </h2>

        <div class="table-wrapper">

            <table>

                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Kategori</th>
                        <th>Deskripsi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>

                    @forelse($categories as $category)

                        <tr>

                            <td>{{ $loop->iteration }}</td>

                            <td>{{ $category->nama_kategori }}</td>

                            <td>{{ $category->deskripsi ?? '-' }}</td>

                            <td>

                                <div class="action-group">

                                    <a
                                        class="edit-link"
                                        href="{{ route('categories.edit', $category->id) }}"
                                    >
                                        Edit
                                    </a>

                                    <form
                                        class="delete-form"
                                        action="{{ route('categories.destroy', $category->id) }}"
                                        method="POST"
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

                            <td colspan="4" class="empty-state">
                                Belum ada kategori yang tersedia.
                            </td>

                        </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </div>

</main>

<!-- POPUP KONFIRMASI HAPUS -->
<div class="delete-modal-overlay" id="deleteModal">

    <div
        class="delete-modal"
        role="dialog"
        aria-modal="true"
        aria-labelledby="deleteTitle"
    >

        <div class="delete-icon">
            !
        </div>

        <h2 id="deleteTitle">
            Hapus Kategori?
        </h2>

        <p>
            Apakah kamu yakin ingin menghapus kategori ini?
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

<!-- POPUP NOTIFIKASI BERHASIL / GAGAL -->
@if(session('success') || session('error') || $errors->any())

    <div
        class="notification-overlay"
        id="notificationModal"
        role="dialog"
        aria-modal="true"
        aria-labelledby="notificationTitle"
    >

        <div class="notification-modal">

            @if(session('success'))

                <div class="notification-icon success">
                    ✓
                </div>

                <h2 id="notificationTitle">
                    Berhasil!
                </h2>

                <p>
                    {{ session('success') }}
                </p>

            @else

                <div class="notification-icon error">
                    !
                </div>

                <h2 id="notificationTitle">
                    Terjadi Kesalahan!
                </h2>

                <p>
                    @if(session('error'))
                        {{ session('error') }}
                    @else
                        @foreach($errors->all() as $error)
                            {{ $error }}@if(!$loop->last)<br>@endif
                        @endforeach
                    @endif
                </p>

            @endif

            <button
                type="button"
                class="notification-close"
                onclick="closeNotification()"
            >
                Mengerti
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
    document.addEventListener('DOMContentLoaded', function () {

        // MEMBUAT PARTIKEL DEKORATIF
        const particleContainer = document.getElementById('particles');

        if (
            particleContainer &&
            !window.matchMedia('(prefers-reduced-motion: reduce)').matches
        ) {
            for (let i = 0; i < 35; i++) {

                const particle = document.createElement('span');

                particle.className = 'particle';

                particle.style.left = Math.random() * 100 + '%';

                particle.style.animationDuration =
                    (8 + Math.random() * 12) + 's';

                particle.style.animationDelay =
                    (Math.random() * 10) + 's';

                particle.style.opacity =
                    (0.15 + Math.random() * 0.3);

                particleContainer.appendChild(particle);
            }
        }

        // POPUP NOTIFIKASI
        const notificationModal = document.getElementById('notificationModal');

        if (notificationModal) {

            setTimeout(function () {
                notificationModal.classList.add('active');
                document.body.style.overflow = 'hidden';
            }, 250);

            // Otomatis tertutup setelah 5 detik
            setTimeout(function () {
                closeNotification();
            }, 5250);
        }

    });

    // MENUTUP POPUP NOTIFIKASI
    function closeNotification() {

        const notificationModal =
            document.getElementById('notificationModal');

        if (notificationModal) {
            notificationModal.classList.remove('active');
            document.body.style.overflow = '';
        }
    }

    // POPUP KONFIRMASI HAPUS
    const deleteModal = document.getElementById('deleteModal');

    let selectedDeleteForm = null;

    // MEMBUKA POPUP
    function openDeleteModal(button) {

        selectedDeleteForm = button.closest('form');

        deleteModal.classList.add('active');

        document.body.style.overflow = 'hidden';
    }

    // MENUTUP POPUP HAPUS
    function closeDeleteModal() {

        deleteModal.classList.remove('active');

        document.body.style.overflow = '';

        selectedDeleteForm = null;
    }

    // KONFIRMASI PENGHAPUSAN
    function confirmDelete() {

        if (selectedDeleteForm) {
            selectedDeleteForm.submit();
        }
    }

    // KLIK AREA LUAR POPUP HAPUS UNTUK MENUTUP
    deleteModal.addEventListener('click', function(event) {

        if (event.target === deleteModal) {
            closeDeleteModal();
        }
    });

    // KLIK AREA LUAR POPUP NOTIFIKASI
    const notificationModal =
        document.getElementById('notificationModal');

    if (notificationModal) {

        notificationModal.addEventListener('click', function(event) {

            if (event.target === notificationModal) {
                closeNotification();
            }
        });
    }

    // TOMBOL ESCAPE UNTUK MENUTUP POPUP
    document.addEventListener('keydown', function(event) {

        if (event.key === 'Escape') {

            if (deleteModal.classList.contains('active')) {
                closeDeleteModal();
            }

            if (
                notificationModal &&
                notificationModal.classList.contains('active')
            ) {
                closeNotification();
            }
        }
    });
</script>

</body>
</html>
