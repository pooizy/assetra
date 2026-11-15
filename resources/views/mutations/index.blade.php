
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mutasi Aset - ASSETRA</title>

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
            0% {
                opacity: 0;
                transform: scale(.7);
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
            min-height: 300px;
            display: flex;
            align-items: center;
            overflow: hidden;
            padding: 45px 52px;
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
            font-size: 16px;
            line-height: 1.9;
        }

        /* PAGE HEADING */
        .page-heading {
            margin-bottom: 32px;
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
            font-size: 35px;
            font-weight: 800;
        }

        .page-heading p {
            margin: 10px 0 0;
            color: var(--muted);
            font-size: 16px;
            line-height: 1.7;
        }

        /* CONTAINER */
        .container {
            width: 100%;
            background: linear-gradient(
                145deg,
                rgba(16,72,61,.88),
                rgba(4,31,27,.94)
            );
            padding: 25px;
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
            gap: 14px;
            margin: 0 0 22px;
            padding-bottom: 17px;
            border-bottom: 1px solid rgba(233,189,97,.22);
            color: var(--cream);
            font-size: 25px;
            font-weight: 800;
        }

        .section-icon {
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 12px;
            background: rgba(201,154,53,.14);
            border: 1px solid rgba(233,189,97,.35);
            color: var(--gold-light);
            font-size: 26px;
        }

        /* BUTTON TAMBAH */
        .add {
            display: inline-flex;
            align-items: center;
            gap: 9px;
            padding: 12px 18px;
            border-radius: 9px;
            background: linear-gradient(135deg, var(--gold), var(--gold-light));
            color: #263027;
            text-decoration: none;
            font-size: 13px;
            font-weight: 800;
            border: 1px solid rgba(255,255,255,.2);
            box-shadow: 0 5px 14px rgba(201,154,53,.18);
            transition: .3s ease;
        }

        .add:hover {
            transform: translateY(-3px);
            filter: brightness(1.08);
            box-shadow: 0 8px 20px rgba(201,154,53,.3);
        }

        /* TOMBOL HAPUS */
        .delete-form {
            display: inline;
            margin: 0;
        }

        .btn-delete {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 6px;
            padding: 8px 13px;
            border-radius: 7px;
            background: rgba(220,38,38,.12);
            color: #FCA5A5;
            border: 1px solid rgba(248,113,113,.38);
            font-family: inherit;
            font-size: 11px;
            font-weight: 800;
            cursor: pointer;
            transition: .3s ease;
        }

        .btn-delete:hover {
            background: rgba(220,38,38,.25);
            border-color: #FCA5A5;
            transform: translateY(-2px);
            box-shadow: 0 5px 14px rgba(220,38,38,.15);
        }

        /* TABLE */
        .table-wrapper {
            width: 100%;
            overflow-x: auto;
            border: 1px solid rgba(233,189,97,.28);
            border-radius: 10px;
            margin-top: 20px;
            box-shadow: 0 5px 15px rgba(0,0,0,.15);
        }

        table {
            width: 100%;
            min-width: 950px;
            border-collapse: collapse;
        }

        th, td {
            padding: 15px 14px;
            text-align: left;
            border-bottom: 1px solid rgba(169,193,185,.13);
            font-size: 13px;
        }

        th {
            background: rgba(201,154,53,.14);
            color: var(--gold-light);
            font-size: 11px;
            font-weight: 800;
            letter-spacing: .7px;
            text-transform: uppercase;
            white-space: nowrap;
        }

        td {
            color: #E0EBE6;
            line-height: 1.7;
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

        .empty-state {
            text-align: center;
            color: var(--muted);
            padding: 30px 12px;
        }

        /* POPUP OVERLAY */
        .modal-overlay,
        .notification-overlay {
            position: fixed;
            inset: 0;
            z-index: 9999;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            background: rgba(0,15,12,.75);
            backdrop-filter: blur(0);
            opacity: 0;
            visibility: hidden;
            transition: opacity .35s ease,
                        visibility .35s ease,
                        backdrop-filter .35s ease;
        }

        .modal-overlay.active,
        .notification-overlay.active {
            opacity: 1;
            visibility: visible;
            backdrop-filter: blur(8px);
        }

        /* POPUP KONFIRMASI */
        .modal-box,
        .notification-box {
            position: relative;
            width: 100%;
            max-width: 410px;
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

        .modal-overlay.active .modal-box,
        .notification-overlay.active .notification-box {
            transform: translateY(0) scale(1);
            opacity: 1;
        }

        .modal-icon,
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

        .modal-icon {
            color: #FCA5A5;
            background: rgba(220,38,38,.13);
            border: 1px solid rgba(248,113,113,.45);
            box-shadow: 0 0 25px rgba(220,38,38,.18);
            animation: warningPulse 2s ease-in-out infinite;
        }

        @keyframes warningPulse {
            0%, 100% {
                transform: scale(1);
                box-shadow: 0 0 15px rgba(220,38,38,.10);
            }
            50% {
                transform: scale(1.07);
                box-shadow: 0 0 28px rgba(220,38,38,.25);
            }
        }

        .modal-box h2,
        .notification-box h2 {
            margin: 0 0 10px;
            color: var(--cream);
            font-size: 21px;
            font-weight: 800;
        }

        .modal-box p,
        .notification-box p {
            margin: 0;
            color: var(--muted);
            font-size: 13px;
            line-height: 1.8;
        }

        .modal-actions {
            display: flex;
            justify-content: center;
            gap: 11px;
            margin-top: 27px;
        }

        .btn-cancel,
        .btn-confirm,
        .notification-close {
            padding: 12px 18px;
            border-radius: 9px;
            font-family: inherit;
            font-size: 12px;
            font-weight: 800;
            cursor: pointer;
            transition: .3s ease;
        }

        .btn-cancel {
            background: rgba(169,193,185,.10);
            color: var(--white);
            border: 1px solid rgba(169,193,185,.30);
        }

        .btn-cancel:hover {
            background: rgba(169,193,185,.18);
            border-color: var(--muted);
        }

        .btn-confirm {
            background: linear-gradient(135deg, #B83232, #E05252);
            color: white;
            border: 1px solid rgba(255,255,255,.15);
            box-shadow: 0 5px 15px rgba(220,38,38,.20);
        }

        .btn-confirm:hover {
            background: linear-gradient(135deg, #D13C3C, #F06464);
            transform: translateY(-2px);
            box-shadow: 0 7px 20px rgba(220,38,38,.30);
        }

        /* POPUP NOTIFIKASI */
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
            animation: warningPulse 2s ease-in-out infinite;
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

        .notification-close {
            width: 100%;
            margin-top: 25px;
            border: none;
            color: #263027;
            background: linear-gradient(135deg, var(--gold), var(--gold-light));
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
                min-height: 250px;
                padding: 28px 22px;
                border-radius: 15px;
            }

            .hero-content p {
                font-size: 13px;
            }

            .page-heading h2 {
                font-size: 27px;
            }

            .page-heading p {
                font-size: 13px;
            }

            .container {
                padding: 18px 15px;
            }

            .section-title {
                font-size: 19px;
            }

            .section-icon {
                width: 42px;
                height: 42px;
                font-size: 21px;
            }

            .modal-actions {
                flex-direction: column-reverse;
            }

            .modal-actions button {
                width: 100%;
            }

            .modal-box,
            .notification-box {
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
                    alt="Logo BKPSDM Kota Pontianak"
                    class="header-logo"
                >

                <div class="brand-text">
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

        <!-- HERO -->
        <section class="hero-banner">
            <div class="hero-content">

                <div class="hero-label">
                    ✦ SISTEM INFORMASI MANAJEMEN ASET
                </div>

                <h1>Manajemen Mutasi Aset</h1>

                <p>
                    Kelola perpindahan aset antar ruangan BKPSDM Kota Pontianak
                    dengan lebih mudah, terstruktur, dan efisien.
                </p>

            </div>
        </section>

        <!-- JUDUL HALAMAN -->
        <div class="page-heading">
            <div class="eyebrow">MANAJEMEN DATA</div>
            <h2>Mutasi Aset</h2>
            <p>
                Pantau dan kelola riwayat perpindahan aset dari ruangan asal
                ke ruangan tujuan secara terorganisir.
            </p>
        </div>

        <!-- CONTAINER UTAMA -->
        <div class="container">

            <h2 class="section-title">
                <span class="section-icon">🔄️</span>
                Daftar Mutasi Aset
            </h2>

            <a href="{{ route('mutations.create') }}" class="add">
                <span>＋</span>
                Tambah Mutasi
            </a>

            <!-- TABEL -->
            <div class="table-wrapper">
                <table>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode Aset</th>
                            <th>Nama Aset</th>
                            <th>Ruangan Asal</th>
                            <th>Ruangan Tujuan</th>
                            <th>Tanggal</th>
                            <th>Alasan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse($mutations as $mutation)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $mutation->asset->kode_aset ?? '-' }}</td>
                                <td>{{ $mutation->asset->nama_aset ?? '-' }}</td>
                                <td>{{ $mutation->fromRoom->nama_ruangan ?? '-' }}</td>
                                <td>{{ $mutation->toRoom->nama_ruangan ?? '-' }}</td>
                                <td>{{ $mutation->tanggal_mutasi }}</td>
                                <td>{{ $mutation->alasan ?? '-' }}</td>

                                <td>
                                    <form
                                        action="{{ route('mutations.destroy', $mutation->id) }}"
                                        method="POST"
                                        class="delete-form"
                                        onsubmit="return false;"
                                    >
                                        @csrf
                                        @method('DELETE')

                                        <button
                                            type="button"
                                            class="btn-delete"
                                            onclick="openDeleteModal(this)"
                                        >
                                            <span>🗑</span>
                                            Hapus
                                        </button>
                                    </form>
                                </td>
                            </tr>

                        @empty
                            <tr>
                                <td colspan="8" class="empty-state">
                                    Belum ada data mutasi aset.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

        </div>
    </main>

    <!-- POPUP KONFIRMASI HAPUS -->
    <div class="modal-overlay" id="deleteModal">

        <div class="modal-box" role="dialog" aria-modal="true">

            <div class="modal-icon">
                !
            </div>

            <h2>Hapus Riwayat Mutasi?</h2>

            <p>
                Apakah kamu yakin ingin menghapus riwayat mutasi aset ini?
                Lokasi aset akan dikembalikan ke ruangan asal jika penghapusan berhasil.
            </p>

            <div class="modal-actions">

                <button
                    type="button"
                    class="btn-cancel"
                    onclick="closeDeleteModal()"
                >
                    Batal
                </button>

                <button
                    type="button"
                    class="btn-confirm"
                    onclick="confirmDelete()"
                >
                    Ya, Hapus
                </button>

            </div>

        </div>

    </div>

    <!-- POPUP NOTIFIKASI -->
    @if(session('success') || session('error'))

        <div class="notification-overlay" id="notificationModal">

            <div class="notification-box" role="alert">

                @if(session('success'))

                    <div class="notification-icon success">
                        ✓
                    </div>

                    <h2>Berhasil!</h2>

                    <p>{{ session('success') }}</p>

                @else

                    <div class="notification-icon error">
                        !
                    </div>

                    <h2>Gagal!</h2>

                    <p>{{ session('error') }}</p>

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
        // ==================================
        // ANIMASI BOLA-BOLA PARTIKEL
        // ==================================

        const particleContainer = document.getElementById('particles');

        if (
            particleContainer &&
            !window.matchMedia('(prefers-reduced-motion: reduce)').matches
        ) {
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
        }

        // ==================================
        // ANIMASI PETIR
        // ==================================

        const lightningElements =
            document.querySelectorAll('.lightning');

        function createLightning() {

            if (!lightningElements.length) return;

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

            if (
                window.matchMedia('(prefers-reduced-motion: reduce)').matches
            ) return;

            const delay = 3500 + Math.random() * 5500;

            setTimeout(() => {
                createLightning();
                scheduleLightning();
            }, delay);
        }

        scheduleLightning();

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

        // Klik di luar popup untuk menutup
        deleteModal.addEventListener('click', function(event) {

            if (event.target === deleteModal) {
                closeDeleteModal();
            }

        });

        // ==================================
        // POPUP NOTIFIKASI
        // ==================================

        const notificationModal =
            document.getElementById('notificationModal');

        function closeNotification() {

            if (notificationModal) {

                notificationModal.classList.remove('active');

                document.body.style.overflow = '';
            }
        }

        document.addEventListener('DOMContentLoaded', function() {

            if (notificationModal) {

                setTimeout(function() {

                    notificationModal.classList.add('active');

                    document.body.style.overflow = 'hidden';

                }, 250);

                // Otomatis menutup setelah 5 detik
                setTimeout(function() {

                    closeNotification();

                }, 5250);

                notificationModal.addEventListener('click', function(event) {

                    if (event.target === notificationModal) {
                        closeNotification();
                    }

                });

            }

        });

        // ==================================
        // TOMBOL ESCAPE
        // ==================================

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
