
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pegawai - ASSETRA</title>

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
            padding: 30px 20px;
            color: var(--white);
            background:
                radial-gradient(circle at 15% 15%, rgba(23,100,84,.35), transparent 30%),
                radial-gradient(circle at 85% 80%, rgba(201,154,53,.10), transparent 30%),
                linear-gradient(135deg, var(--dark), var(--dark-2), #062A24);
            overflow-x: hidden;
        }

        /* BACKGROUND */
        .ambient {
            position: fixed;
            width: 350px;
            height: 350px;
            border-radius: 50%;
            filter: blur(100px);
            opacity: .18;
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
            opacity: .12;
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
            box-shadow: 0 0 6px rgba(233,189,97,.65),
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
            background: linear-gradient(180deg,
                rgba(233,189,97,.95),
                rgba(23,100,84,.65));
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
            15% { opacity: .8; transform: scale(1); filter: brightness(2); }
            30% { opacity: .15; }
            45% { opacity: .65; filter: brightness(1.8); }
            100% { opacity: 0; transform: scale(1.05); }
        }

        /* PAGE */
        .page-wrapper {
            position: relative;
            z-index: 1;
            max-width: 1200px;
            margin: auto;
        }

        .container {
            background: rgba(255,255,255,.075);
            border: 1px solid rgba(233,189,97,.25);
            border-radius: 22px;
            padding: 30px;
            backdrop-filter: blur(18px);
            box-shadow:
                0 20px 60px rgba(0,0,0,.25),
                0 0 25px rgba(201,154,53,.07),
                inset 0 1px 0 rgba(255,255,255,.08);
            animation: pageAppear .8s ease both;
        }

        @keyframes pageAppear {
            from { opacity: 0; transform: translateY(25px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* HEADER */
        .header {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
            padding: 20px 25px;
            margin-bottom: 25px;
            border-radius: 17px;
            background: linear-gradient(120deg, #073D32, #176454);
            border: 1px solid rgba(233,189,97,.35);
            box-shadow: 0 10px 30px rgba(0,0,0,.2);
            overflow: hidden;
        }

        .header::before {
            content: "";
            position: absolute;
            width: 180px;
            height: 180px;
            right: 15%;
            top: -120px;
            border-radius: 50%;
            background: rgba(233,189,97,.13);
            filter: blur(5px);
        }

        .header-content {
            position: relative;
            z-index: 1;
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .logo {
            width: 58px;
            height: 58px;
            object-fit: contain;
            padding: 5px;
            border-radius: 12px;
            background: rgba(255,255,255,.95);
            box-shadow: 0 4px 15px rgba(0,0,0,.2);
        }

        .brand {
            font-size: 25px;
            font-weight: 800;
            letter-spacing: 1.5px;
            color: var(--cream);
        }

        .header-subtitle {
            color: var(--muted);
            font-size: 11px;
            margin-top: 5px;
            letter-spacing: 1.3px;
            text-transform: uppercase;
        }

        .dashboard-btn {
            position: relative;
            z-index: 2;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 11px 18px;
            text-decoration: none;
            color: var(--dark);
            background: linear-gradient(135deg, var(--gold-light), var(--gold));
            border-radius: 10px;
            font-size: 12px;
            font-weight: 800;
            box-shadow: 0 5px 15px rgba(201,154,53,.2);
            transition: .3s;
            white-space: nowrap;
        }

        .dashboard-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 22px rgba(233,189,97,.35);
        }

        /* BUILDING BANNER */
        .building-banner {
            position: relative;
            min-height: 190px;
            margin-bottom: 28px;
            border-radius: 17px;
            overflow: hidden;
            border: 1px solid rgba(233,189,97,.4);
            box-shadow: 0 12px 30px rgba(0,0,0,.25);
            background:
                linear-gradient(90deg,
                    rgba(4,31,27,.92),
                    rgba(4,31,27,.65),
                    rgba(4,31,27,.25)),
                url('{{ asset("images/gedung-bkpsdm.png") }}')
                center 43% / cover no-repeat;
            display: flex;
            align-items: center;
            padding: 30px;
        }

        .building-banner::after {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(0deg, rgba(4,31,27,.25), transparent);
            pointer-events: none;
        }

        .banner-content {
            position: relative;
            z-index: 1;
            max-width: 650px;
        }

        .banner-label {
            display: inline-block;
            padding: 7px 12px;
            margin-bottom: 12px;
            border-radius: 30px;
            color: var(--cream);
            background: rgba(201,154,53,.2);
            border: 1px solid rgba(233,189,97,.4);
            font-size: 10px;
            font-weight: 800;
            letter-spacing: 1.5px;
        }

        .banner-content h2 {
            color: white;
            font-size: 26px;
            font-weight: 800;
            margin-bottom: 8px;
            text-shadow: 0 3px 12px rgba(0,0,0,.5);
        }

        .banner-content p {
            color: #E3EDE8;
            font-size: 12px;
            line-height: 1.8;
            max-width: 550px;
        }

        /* PAGE TITLE */
        .page-title {
            margin-bottom: 25px;
        }

        .page-title h1 {
            font-size: 27px;
            font-weight: 800;
            color: var(--cream);
            margin-bottom: 7px;
        }

        .page-title p {
            font-size: 13px;
            color: var(--muted);
        }

        .gold-line {
            width: 65px;
            height: 4px;
            border-radius: 10px;
            background: linear-gradient(90deg, var(--gold), var(--gold-light));
            margin-top: 14px;
            box-shadow: 0 0 12px rgba(233,189,97,.4);
        }

        /* ALERT */
        .alert {
            padding: 14px 17px;
            margin-bottom: 20px;
            border-radius: 11px;
            font-size: 13px;
            animation: slideDown .4s ease;
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
            margin-bottom: 8px;
        }

        @keyframes slideDown {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* CARDS */
        .section-card {
            background: rgba(4,31,27,.58);
            border: 1px solid rgba(233,189,97,.25);
            border-radius: 16px;
            padding: 25px;
            margin-bottom: 25px;
            box-shadow:
                0 10px 30px rgba(0,0,0,.18),
                inset 0 1px 0 rgba(255,255,255,.05);
            transition: .3s;
        }

        .section-card:hover {
            border-color: rgba(233,189,97,.45);
            box-shadow:
                0 12px 35px rgba(0,0,0,.23),
                0 0 18px rgba(201,154,53,.08);
        }

        .section-heading {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 22px;
            padding-bottom: 15px;
            border-bottom: 1px solid rgba(233,189,97,.22);
        }

        .section-icon {
            width: 39px;
            height: 39px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 11px;
            color: var(--gold-light);
            background: rgba(201,154,53,.13);
            border: 1px solid rgba(233,189,97,.3);
            font-size: 18px;
        }

        .section-heading h3 {
            color: var(--cream);
            font-size: 16px;
            font-weight: 800;
        }

        .section-heading p {
            color: var(--muted);
            font-size: 11px;
            margin-top: 4px;
        }

        /* FORM */
        .form-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 18px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
        }

        label {
            color: var(--cream);
            font-size: 12px;
            font-weight: 700;
            margin-bottom: 9px;
        }

        input {
            width: 100%;
            padding: 13px 15px;
            color: var(--white);
            font-family: inherit;
            font-size: 13px;
            background: rgba(255,255,255,.055);
            border: 1px solid rgba(169,193,185,.3);
            border-radius: 10px;
            outline: none;
            transition: .3s;
        }

        input::placeholder {
            color: rgba(169,193,185,.55);
        }

        input:focus {
            border-color: var(--gold-light);
            background: rgba(255,255,255,.09);
            box-shadow: 0 0 0 3px rgba(233,189,97,.10);
        }

        .form-actions {
            margin-top: 22px;
        }

        .btn-save {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 9px;
            padding: 12px 22px;
            border: none;
            border-radius: 10px;
            color: var(--dark);
            background: linear-gradient(135deg, var(--gold-light), var(--gold));
            font-family: inherit;
            font-size: 12px;
            font-weight: 800;
            cursor: pointer;
            box-shadow: 0 5px 15px rgba(201,154,53,.2);
            transition: .3s;
        }

        .btn-save:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 22px rgba(233,189,97,.35);
        }

        /* TABLE */
        .table-wrapper {
            width: 100%;
            overflow-x: auto;
            border-radius: 12px;
            border: 1px solid rgba(233,189,97,.25);
        }

        table {
            width: 100%;
            min-width: 850px;
            border-collapse: collapse;
        }

        thead {
            background: linear-gradient(120deg, #10483D, #176454);
        }

        th {
            padding: 15px 13px;
            color: var(--cream);
            font-size: 11px;
            font-weight: 800;
            text-align: left;
            text-transform: uppercase;
            letter-spacing: .6px;
            white-space: nowrap;
            border-bottom: 1px solid rgba(233,189,97,.35);
        }

        td {
            padding: 14px 13px;
            color: #DCEAE5;
            font-size: 12px;
            border-bottom: 1px solid rgba(169,193,185,.15);
            vertical-align: middle;
        }

        tbody tr {
            background: rgba(255,255,255,.025);
            transition: .25s;
        }

        tbody tr:nth-child(even) {
            background: rgba(255,255,255,.055);
        }

        tbody tr:hover {
            background: rgba(201,154,53,.10);
        }

        tbody tr:last-child td {
            border-bottom: none;
        }

        .number-cell {
            color: var(--gold-light);
            font-weight: 800;
        }

        .nip-badge {
            display: inline-block;
            padding: 6px 9px;
            border-radius: 7px;
            color: var(--cream);
            background: rgba(201,154,53,.12);
            border: 1px solid rgba(233,189,97,.25);
            font-size: 11px;
            font-weight: 700;
        }

        .employee-name {
            color: var(--white);
            font-weight: 700;
        }

        .empty-state {
            text-align: center;
            padding: 35px 15px !important;
            color: var(--muted);
        }

        /* ACTION BUTTONS */
        .action-buttons {
            display: flex;
            align-items: center;
            gap: 7px;
        }

        .btn-edit,
        .btn-delete {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 8px 12px;
            border-radius: 7px;
            font-family: inherit;
            font-size: 11px;
            font-weight: 800;
            text-decoration: none;
            border: none;
            cursor: pointer;
            transition: .25s;
        }

        .btn-edit {
            color: #C4F2E1;
            background: rgba(22,163,116,.17);
            border: 1px solid rgba(52,211,153,.3);
        }

        .btn-edit:hover {
            background: rgba(22,163,116,.32);
            transform: translateY(-2px);
        }

        .btn-delete {
            color: #FFC1C1;
            background: rgba(220,38,38,.13);
            border: 1px solid rgba(248,113,113,.28);
        }

        .btn-delete:hover {
            background: rgba(220,38,38,.28);
            transform: translateY(-2px);
        }

        /* SUCCESS MODAL */
        .success-modal-overlay {
            position: fixed;
            inset: 0;
            z-index: 10000;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            background: rgba(0,0,0,.72);
            backdrop-filter: blur(8px);
            opacity: 0;
            visibility: hidden;
            transition: .35s ease;
        }

        .success-modal-overlay.active {
            opacity: 1;
            visibility: visible;
        }

        .success-modal {
            position: relative;
            width: 100%;
            max-width: 390px;
            padding: 32px 27px;
            text-align: center;
            border-radius: 20px;
            background: linear-gradient(145deg, #0A3A30, #041F1B);
            border: 1px solid rgba(233,189,97,.45);
            box-shadow:
                0 25px 80px rgba(0,0,0,.55),
                0 0 35px rgba(201,154,53,.15);
            transform: translateY(35px) scale(.85);
            transition: .4s cubic-bezier(.2,.8,.2,1);
        }

        .success-modal-overlay.active .success-modal {
            transform: translateY(0) scale(1);
        }

        .success-icon {
            width: 75px;
            height: 75px;
            margin: 0 auto 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            color: #B8F5D5;
            background: rgba(34,197,94,.15);
            border: 2px solid rgba(74,222,128,.55);
            font-size: 35px;
            font-weight: 800;
            box-shadow: 0 0 25px rgba(34,197,94,.18);
            animation: successPulse 1.8s infinite;
        }

        @keyframes successPulse {
            0%, 100% {
                box-shadow: 0 0 0 0 rgba(74,222,128,.2);
                transform: scale(1);
            }
            50% {
                box-shadow: 0 0 0 12px rgba(74,222,128,0);
                transform: scale(1.06);
            }
        }

        .success-modal h2 {
            color: var(--cream);
            font-size: 21px;
            font-weight: 800;
            margin-bottom: 10px;
        }

        .success-modal p {
            color: var(--muted);
            font-size: 12px;
            line-height: 1.8;
            margin-bottom: 23px;
        }

        .btn-success-ok {
            padding: 11px 28px;
            border: none;
            border-radius: 9px;
            color: var(--dark);
            background: linear-gradient(135deg, var(--gold-light), var(--gold));
            font-family: inherit;
            font-size: 12px;
            font-weight: 800;
            cursor: pointer;
            box-shadow: 0 5px 15px rgba(201,154,53,.2);
            transition: .3s;
        }

        .btn-success-ok:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 22px rgba(233,189,97,.35);
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
            background: rgba(0,0,0,.72);
            backdrop-filter: blur(8px);
            opacity: 0;
            visibility: hidden;
            transition: .3s;
        }

        .delete-modal-overlay.active {
            opacity: 1;
            visibility: visible;
        }

        .delete-modal {
            position: relative;
            width: 100%;
            max-width: 410px;
            padding: 32px 28px;
            text-align: center;
            border-radius: 20px;
            background: linear-gradient(145deg, #0A3A30, #041F1B);
            border: 1px solid rgba(233,189,97,.4);
            box-shadow:
                0 25px 80px rgba(0,0,0,.55),
                0 0 35px rgba(201,154,53,.12);
            transform: translateY(35px) scale(.88);
            transition: .35s cubic-bezier(.2,.8,.2,1);
        }

        .delete-modal-overlay.active .delete-modal {
            transform: translateY(0) scale(1);
        }

        .delete-icon {
            width: 70px;
            height: 70px;
            margin: 0 auto 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            color: #FFC1C1;
            background: rgba(220,38,38,.13);
            border: 1px solid rgba(248,113,113,.4);
            font-size: 30px;
            font-weight: 800;
            box-shadow: 0 0 25px rgba(239,68,68,.12);
            animation: warningPulse 2s infinite;
        }

        @keyframes warningPulse {
            0%, 100% { box-shadow: 0 0 0 0 rgba(239,68,68,.15); }
            50% { box-shadow: 0 0 0 12px rgba(239,68,68,0); }
        }

        .delete-modal h2 {
            color: var(--cream);
            font-size: 21px;
            font-weight: 800;
            margin-bottom: 10px;
        }

        .delete-modal p {
            color: var(--muted);
            font-size: 12px;
            line-height: 1.8;
            margin-bottom: 25px;
        }

        .delete-modal-actions {
            display: flex;
            justify-content: center;
            gap: 12px;
        }

        .btn-cancel,
        .btn-confirm-delete {
            padding: 11px 20px;
            border-radius: 9px;
            font-family: inherit;
            font-size: 12px;
            font-weight: 800;
            cursor: pointer;
            transition: .25s;
        }

        .btn-cancel {
            color: var(--muted);
            background: rgba(255,255,255,.07);
            border: 1px solid rgba(169,193,185,.2);
        }

        .btn-cancel:hover {
            background: rgba(255,255,255,.13);
        }

        .btn-confirm-delete {
            color: white;
            background: linear-gradient(135deg, #DC4545, #A91F1F);
            border: 1px solid rgba(248,113,113,.4);
            box-shadow: 0 5px 15px rgba(220,38,38,.2);
        }

        .btn-confirm-delete:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(220,38,38,.3);
        }

        /* FOOTER */
        .footer {
            text-align: center;
            padding: 22px 10px 5px;
            color: rgba(169,193,185,.65);
            font-size: 11px;
            letter-spacing: .5px;
        }

        .footer span {
            color: var(--gold-light);
            font-weight: 800;
        }

        /* RESPONSIVE */
        @media (max-width: 650px) {
            body { padding: 18px 12px; }

            .container {
                padding: 17px;
                border-radius: 17px;
            }

            .header {
                padding: 19px;
                align-items: flex-start;
                flex-direction: column;
            }

            .brand { font-size: 21px; }

            .logo {
                width: 48px;
                height: 48px;
            }

            .dashboard-btn { align-self: flex-start; }

            .building-banner {
                min-height: 180px;
                padding: 22px;
                background-position: center;
            }

            .banner-content h2 { font-size: 21px; }

            .page-title h1 { font-size: 23px; }

            .section-card { padding: 17px; }

            .form-grid {
                grid-template-columns: 1fr;
                gap: 15px;
            }

            .btn-save { width: 100%; }

            .delete-modal { padding: 27px 20px; }
            .success-modal { padding: 27px 20px; }
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

    <div class="lightning-effects">
        <div class="lightning" style="top: 12%; left: 8%;"></div>
        <div class="lightning" style="top: 42%; right: 9%; transform: rotate(15deg);"></div>
        <div class="lightning" style="top: 72%; left: 17%; transform: rotate(-12deg);"></div>
    </div>

    <div class="page-wrapper">
        <div class="container">

            <!-- HEADER -->
            <header class="header">
                <div class="header-content">
                    <img
                        src="{{ asset('images/logo-bkpsdm.png') }}"
                        alt="Logo BKPSDM"
                        class="logo"
                    >

                    <div>
                        <div class="brand">ASSETRA BKPSDM</div>
                        <div class="header-subtitle">
                            Sistem Informasi Pengelolaan Aset
                        </div>
                    </div>
                </div>

                <a href="{{ route('dashboard') }}" class="dashboard-btn">
                    Kembali ke Dashboard
                </a>
            </header>

            <!-- FOTO GEDUNG -->
            <section class="building-banner">
                <div class="banner-content">
                    <div class="banner-label">
                        SISTEM INFORMASI MANAJEMEN ASET
                    </div>
                    <h2>BKPSDM Kota Pontianak</h2>
                    <p>
                        Sistem pengelolaan data pegawai yang terintegrasi
                        untuk mendukung administrasi dan pengelolaan aset
                        secara tertib, akurat, dan terorganisir.
                    </p>
                </div>
            </section>

            <!-- TITLE -->
            <div class="page-title">
                <h1>Data Pegawai</h1>
                <p>Kelola informasi dan data pegawai BKPSDM Kota Pontianak.</p>
                <div class="gold-line"></div>
            </div>

            <!-- VALIDATION ERRORS -->
            @if($errors->any())
                <div style="margin-bottom: 20px;">
                    @foreach($errors->all() as $error)
                        <div class="alert alert-error">
                            ⚠ {{ $error }}
                        </div>
                    @endforeach
                </div>
            @endif

            <!-- FORM TAMBAH PEGAWAI -->
            <section class="section-card">
                <div class="section-heading">
                    <div class="section-icon">＋</div>
                    <div>
                        <h3>Tambah Data Pegawai</h3>
                        <p>Masukkan informasi pegawai pada formulir berikut.</p>
                    </div>
                </div>

                <form action="{{ route('employees.store') }}" method="POST">
                    @csrf

                    <div class="form-grid">
                        <div class="form-group">
                            <label for="nip">NIP</label>
                            <input
                                type="text"
                                id="nip"
                                name="nip"
                                value="{{ old('nip') }}"
                                placeholder="Masukkan NIP"
                                required
                            >
                        </div>

                        <div class="form-group">
                            <label for="nama_pegawai">Nama Pegawai</label>
                            <input
                                type="text"
                                id="nama_pegawai"
                                name="nama_pegawai"
                                value="{{ old('nama_pegawai') }}"
                                placeholder="Masukkan nama pegawai"
                                required
                            >
                        </div>

                        <div class="form-group">
                            <label for="jabatan">Jabatan</label>
                            <input
                                type="text"
                                id="jabatan"
                                name="jabatan"
                                value="{{ old('jabatan') }}"
                                placeholder="Masukkan jabatan"
                            >
                        </div>

                        <div class="form-group">
                            <label for="no_telepon">Nomor Telepon</label>
                            <input
                                type="text"
                                id="no_telepon"
                                name="no_telepon"
                                value="{{ old('no_telepon') }}"
                                placeholder="Masukkan nomor telepon"
                            >
                        </div>
                    </div>

                    <div class="form-actions">
                        <button type="submit" class="btn-save">
                            Simpan Pegawai
                        </button>
                    </div>
                </form>
            </section>

            <!-- DAFTAR PEGAWAI -->
            <section class="section-card">
                <div class="section-heading">
                    <div class="section-icon">👤</div>
                    <div>
                        <h3>Daftar Pegawai</h3>
                        <p>Informasi seluruh pegawai yang telah terdaftar.</p>
                    </div>
                </div>

                <div class="table-wrapper">
                    <table>
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NIP</th>
                                <th>Nama Pegawai</th>
                                <th>Jabatan</th>
                                <th>Nomor Telepon</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse($employees as $employee)
                                <tr>
                                    <td class="number-cell">
                                        {{ $loop->iteration }}
                                    </td>

                                    <td>
                                        <span class="nip-badge">
                                            {{ $employee->nip }}
                                        </span>
                                    </td>

                                    <td class="employee-name">
                                        {{ $employee->nama_pegawai }}
                                    </td>

                                    <td>
                                        {{ $employee->jabatan ?: '-' }}
                                    </td>

                                    <td>
                                        {{ $employee->no_telepon ?: '-' }}
                                    </td>

                                    <td>
                                        <div class="action-buttons">
                                            <a
                                                href="{{ route('employees.edit', $employee->id) }}"
                                                class="btn-edit"
                                            >
                                                🖋️ Edit
                                            </a>

                                            <form
                                                action="{{ route('employees.destroy', $employee->id) }}"
                                                method="POST"
                                                style="display:inline"
                                            >
                                                @csrf
                                                @method('DELETE')

                                                <button
                                                    type="button"
                                                    class="btn-delete"
                                                    onclick="openDeleteModal(this)"
                                                >
                                                    🗑️ Hapus
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="empty-state">
                                        <div style="font-size: 28px; margin-bottom: 10px;">
                                            ♙
                                        </div>
                                        Belum ada data pegawai yang terdaftar.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </section>

            <!-- FOOTER -->
            <footer class="footer">
                © {{ date('Y') }} <span>ASSETRA</span>
                BKPSDM Kota Pontianak. Seluruh hak cipta dilindungi.
            </footer>

        </div>
    </div>

    <!-- SUCCESS POPUP -->
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

                <p>
                    {{ session('success') }}
                </p>

                <button
                    type="button"
                    class="btn-success-ok"
                    onclick="closeSuccessModal()"
                >
                    OK, Mengerti
                </button>
            </div>
        </div>
    @endif

    <!-- DELETE CONFIRMATION MODAL -->
    <div class="delete-modal-overlay" id="deleteModal">
        <div
            class="delete-modal"
            role="dialog"
            aria-modal="true"
            aria-labelledby="deleteTitle"
        >
            <div class="delete-icon">!</div>

            <h2 id="deleteTitle">Hapus Data Pegawai?</h2>

            <p>
                Apakah kamu yakin ingin menghapus data pegawai ini?
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

    <script>
        /* FLOATING PARTICLES */
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

        /* LIGHTNING EFFECT */
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

        if (!window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
            scheduleLightning();
        }

        /* SUCCESS MODAL */
        const successModal = document.getElementById('successModal');

        function closeSuccessModal() {
            if (successModal) {
                successModal.classList.remove('active');
                document.body.style.overflow = '';
            }
        }

        if (successModal) {
            window.addEventListener('load', function() {
                setTimeout(function() {
                    successModal.classList.add('active');
                    document.body.style.overflow = 'hidden';
                }, 300);
            });

            successModal.addEventListener('click', function(event) {
                if (event.target === successModal) {
                    closeSuccessModal();
                }
            });

            document.addEventListener('keydown', function(event) {
                if (
                    event.key === 'Escape' &&
                    successModal.classList.contains('active')
                ) {
                    closeSuccessModal();
                }
            });
        }

        /* DELETE MODAL */
        const deleteModal = document.getElementById('deleteModal');
        let selectedDeleteForm = null;

        function openDeleteModal(button) {
            selectedDeleteForm = button.closest('form');

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

        /* CLOSE WHEN CLICK OUTSIDE */
        deleteModal.addEventListener('click', function(event) {
            if (event.target === deleteModal) {
                closeDeleteModal();
            }
        });

        /* CLOSE WITH ESCAPE */
        document.addEventListener('keydown', function(event) {
            if (
                event.key === 'Escape' &&
                deleteModal.classList.contains('active')
            ) {
                closeDeleteModal();
            }
        });
    </script>

</body>
</html>
