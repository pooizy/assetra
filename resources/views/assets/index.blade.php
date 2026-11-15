
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Aset | ASSETRA BKPSDM Kota Pontianak</title>

    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        :root {
            --emerald: #041F1B;
            --emerald2: #073D32;
            --emerald3: #10483D;
            --gold: #C99A35;
            --gold-light: #E9BD61;
            --gold-pale: #F5DDA6;
            --white: #FFFFFF;
            --text: #F5F1E8;
            --muted: #B5CFC1;
            --border: rgba(233,189,97,.25);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            min-height: 100vh;
            font-family: 'Plus Jakarta Sans', sans-serif;
            color: var(--text);
            background:
                radial-gradient(circle at 15% 10%, rgba(201,154,53,.12), transparent 28%),
                radial-gradient(circle at 90% 80%, rgba(16,72,61,.5), transparent 30%),
                linear-gradient(135deg, #031713, #062C25 50%, #041F1B);
            overflow-x: hidden;
        }

        /* BACKGROUND ANIMATION */

        #particles {
            position: fixed;
            inset: 0;
            z-index: 0;
            overflow: hidden;
            pointer-events: none;
        }

        .particle {
            position: absolute;
            bottom: -20px;
            border-radius: 50%;
            background: var(--gold-light);
            box-shadow: 0 0 12px var(--gold);
            opacity: .45;
            animation: particleRise linear infinite;
        }

        @keyframes particleRise {
            0% {
                transform: translateY(0) scale(.5);
                opacity: 0;
            }
            15% { opacity: .65; }
            85% { opacity: .35; }
            100% {
                transform: translateY(-110vh) scale(1.4);
                opacity: 0;
            }
        }

        .ambient {
            position: fixed;
            width: 320px;
            height: 320px;
            border-radius: 50%;
            filter: blur(100px);
            opacity: .12;
            pointer-events: none;
            z-index: 0;
            animation: ambientMove 12s ease-in-out infinite alternate;
        }

        .ambient.one {
            background: #D9A441;
            top: 10%;
            left: -150px;
        }

        .ambient.two {
            background: #0C9B76;
            right: -150px;
            bottom: 5%;
            animation-delay: 3s;
        }

        @keyframes ambientMove {
            from { transform: translate(0, 0) scale(1); }
            to { transform: translate(45px, -35px) scale(1.2); }
        }

        /* HEADER */

        .topbar {
            position: relative;
            z-index: 2;
            min-height: 82px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
            padding: 14px 5%;
            background: rgba(3,24,20,.85);
            border-bottom: 1px solid var(--border);
            backdrop-filter: blur(18px);
            box-shadow: 0 8px 30px rgba(0,0,0,.18);
            overflow: hidden;
        }

        .topbar::after {
            content: "";
            position: absolute;
            top: 0;
            left: -100%;
            width: 60%;
            height: 2px;
            background: linear-gradient(90deg, transparent, var(--gold-light), transparent);
            animation: shimmer 6s linear infinite;
        }

        @keyframes shimmer {
            to { left: 150%; }
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 13px;
        }

        .logo {
            width: 48px;
            height: 48px;
            object-fit: contain;
            filter: drop-shadow(0 0 9px rgba(233,189,97,.25));
        }

        .brand-text h2 {
            font-size: 17px;
            font-weight: 800;
            letter-spacing: 1px;
            color: var(--gold-pale);
        }

        .brand-text span {
            display: block;
            font-size: 10px;
            color: var(--muted);
            letter-spacing: 1.5px;
            margin-top: 3px;
        }

        .user-info {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .avatar {
            width: 42px;
            height: 42px;
            display: grid;
            place-items: center;
            border-radius: 50%;
            color: var(--emerald);
            font-weight: 800;
            background: linear-gradient(135deg, var(--gold-pale), var(--gold));
            box-shadow: 0 0 18px rgba(201,154,53,.3);
        }

        .user-detail strong {
            display: block;
            font-size: 12px;
            color: white;
        }

        .user-detail span {
            font-size: 10px;
            color: var(--gold-light);
        }

        /* MAIN */

        .main {
            position: relative;
            z-index: 1;
            width: 90%;
            max-width: 1450px;
            margin: 30px auto 60px;
            animation: fadeUp .8s ease both;
        }

        @keyframes fadeUp {
            from {
                opacity: 0;
                transform: translateY(25px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .breadcrumb {
            display: flex;
            align-items: center;
            gap: 9px;
            font-size: 11px;
            color: var(--muted);
            margin-bottom: 17px;
        }

        .breadcrumb span:last-child {
            color: var(--gold-light);
        }

        .breadcrumb span {
            font-weight: 800;
            font-style: italic;
            color: var(--gold-light);
        }

        /* BACK TO DASHBOARD */

        .back-navigation {
            margin-bottom: 22px;
            animation: fadeUp .7s ease both;
        }

        .btn-back {
            position: relative;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 11px 18px;
            color: var(--gold-pale);
            background: rgba(201,154,53,.10);
            border: 1px solid rgba(233,189,97,.4);
            border-radius: 11px;
            text-decoration: none;
            font-size: 11px;
            font-weight: 800;
            overflow: hidden;
            transition: .35s ease;
        }

        .btn-back::before {
            content: "";
            position: absolute;
            top: 0;
            left: -120%;
            width: 65%;
            height: 100%;
            background: rgba(255,255,255,.25);
            transform: skewX(-25deg);
            transition: .5s;
        }

        .btn-back:hover::before {
            left: 140%;
        }

        .btn-back:hover {
            color: var(--emerald);
            background: linear-gradient(135deg, var(--gold-pale), var(--gold));
            transform: translateX(-5px);
            box-shadow: 0 8px 22px rgba(201,154,53,.25);
        }

        .btn-back .arrow {
            font-size: 18px;
            transition: transform .3s ease;
        }

        .btn-back:hover .arrow {
            transform: translateX(-5px);
        }

        /* HERO */

        .hero {
            position: relative;
            min-height: 230px;
            display: flex;
            align-items: center;
            padding: 35px 40px;
            margin-bottom: 28px;
            border: 1px solid rgba(233,189,97,.35);
            border-radius: 23px;
            overflow: hidden;
            background:
                linear-gradient(90deg, rgba(3,31,25,.97), rgba(4,31,27,.83), rgba(4,31,27,.55)),
                url('{{ asset("images/gedung-bkpsdm.png") }}') center 43%/cover;
            box-shadow: 0 18px 45px rgba(0,0,0,.25);
        }

        .hero::before {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(110deg, transparent 30%, rgba(233,189,97,.12), transparent 65%);
            transform: translateX(-100%);
            animation: heroLight 7s ease-in-out infinite;
        }

        @keyframes heroLight {
            0%, 35% { transform: translateX(-100%); }
            75%, 100% { transform: translateX(100%); }
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
            padding: 7px 13px;
            margin-bottom: 15px;
            border: 1px solid rgba(233,189,97,.4);
            border-radius: 30px;
            background: rgba(201,154,53,.12);
            color: var(--gold-pale);
            font-size: 10px;
            font-weight: 700;
            letter-spacing: 1.5px;
        }

        .hero h1 {
            color: white;
            font-size: clamp(25px, 4vw, 37px);
            font-weight: 800;
            letter-spacing: -.8px;
            margin-bottom: 12px;
        }

        .hero h1 span {
            color: var(--gold-light);
        }

        .hero p {
            color: #D1E2D9;
            font-size: 12px;
            line-height: 1.9;
            max-width: 520px;
        }

        .hero-icon {
            position: absolute;
            right: 7%;
            top: 50%;
            transform: translateY(-50%);
            font-size: 85px;
            opacity: .85;
            filter: drop-shadow(0 0 20px rgba(233,189,97,.35));
            animation: floatIcon 4s ease-in-out infinite;
        }

        @keyframes floatIcon {
            0%, 100% { transform: translateY(-50%); }
            50% { transform: translateY(calc(-50% - 13px)); }
        }

        /* DATA CARD */

        .data-card {
            position: relative;
            padding: 27px;
            border: 1px solid var(--border);
            border-radius: 20px;
            background: linear-gradient(145deg, rgba(12,58,48,.88), rgba(4,31,27,.94));
            backdrop-filter: blur(18px);
            box-shadow: 0 20px 50px rgba(0,0,0,.2);
            overflow: hidden;
        }

        .data-card::before {
            content: "";
            position: absolute;
            inset: 0;
            border-radius: inherit;
            pointer-events: none;
            background: linear-gradient(120deg, rgba(233,189,97,.08), transparent 35%, transparent 70%, rgba(233,189,97,.05));
        }

        .card-heading {
            position: relative;
            z-index: 1;
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 18px;
            margin-bottom: 25px;
        }

        .heading-left {
            display: flex;
            align-items: center;
            gap: 13px;
        }

        .title-icon {
            width: 48px;
            height: 48px;
            display: grid;
            place-items: center;
            border-radius: 14px;
            background: rgba(201,154,53,.15);
            border: 1px solid rgba(233,189,97,.35);
            font-size: 22px;
            transition: .3s;
        }

        .title-icon:hover {
            transform: rotate(-10deg) scale(1.1);
            box-shadow: 0 0 20px rgba(233,189,97,.3);
        }

        .heading-text h2 {
            color: var(--gold-pale);
            font-size: 17px;
            font-weight: 800;
        }

        .heading-text p {
            color: var(--muted);
            font-size: 11px;
            margin-top: 5px;
        }

        /* BUTTON */

        .btn {
            position: relative;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            padding: 12px 19px;
            border: 1px solid transparent;
            border-radius: 10px;
            text-decoration: none;
            font-family: inherit;
            font-size: 11px;
            font-weight: 800;
            cursor: pointer;
            transition: .3s ease;
            overflow: hidden;
        }

        .btn::before {
            content: "";
            position: absolute;
            top: 0;
            left: -120%;
            width: 70%;
            height: 100%;
            transform: skewX(-25deg);
            background: rgba(255,255,255,.25);
            transition: .5s;
        }

        .btn:hover::before {
            left: 140%;
        }

        .btn-primary {
            color: #17251B;
            background: linear-gradient(135deg, var(--gold-pale), var(--gold), #B67D21);
            box-shadow: 0 7px 20px rgba(201,154,53,.2);
        }

        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 28px rgba(201,154,53,.35);
        }

        .btn-detail {
            color: var(--gold-pale);
            background: rgba(201,154,53,.13);
            border-color: rgba(233,189,97,.35);
        }

        .btn-edit {
            color: #BDE8FF;
            background: rgba(35,120,170,.16);
            border-color: rgba(80,170,220,.3);
        }

        .btn-delete {
            color: #FFC5C5;
            background: rgba(180,50,50,.15);
            border-color: rgba(230,90,90,.3);
        }

        .btn-detail:hover,
        .btn-edit:hover,
        .btn-delete:hover {
            transform: translateY(-2px);
            filter: brightness(1.2);
        }

        /* TABLE */

        .table-wrapper {
            position: relative;
            z-index: 1;
            width: 100%;
            overflow-x: auto;
            border-radius: 13px;
            border: 1px solid rgba(233,189,97,.17);
        }

        table {
            width: 100%;
            min-width: 850px;
            border-collapse: collapse;
        }

        thead {
            background: linear-gradient(90deg, #0C493C, #155747);
        }

        th {
            padding: 17px 14px;
            color: var(--gold-pale);
            text-align: left;
            font-size: 10px;
            font-weight: 800;
            letter-spacing: .8px;
            white-space: nowrap;
            border-bottom: 1px solid rgba(233,189,97,.3);
        }

        td {
            padding: 15px 14px;
            color: #E1EEE7;
            font-size: 11px;
            border-bottom: 1px solid rgba(233,189,97,.10);
            vertical-align: middle;
        }

        tbody tr {
            background: rgba(255,255,255,.015);
            transition: background .25s, transform .25s;
            animation: rowReveal .55s ease both;
        }

        tbody tr:nth-child(1) { animation-delay: .04s; }
        tbody tr:nth-child(2) { animation-delay: .08s; }
        tbody tr:nth-child(3) { animation-delay: .12s; }
        tbody tr:nth-child(4) { animation-delay: .16s; }
        tbody tr:nth-child(5) { animation-delay: .20s; }
        tbody tr:nth-child(6) { animation-delay: .24s; }
        tbody tr:nth-child(7) { animation-delay: .28s; }
        tbody tr:nth-child(8) { animation-delay: .32s; }
        tbody tr:nth-child(9) { animation-delay: .36s; }
        tbody tr:nth-child(10) { animation-delay: .40s; }

        @keyframes rowReveal {
            from {
                opacity: 0;
                transform: translateY(12px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        tbody tr:hover {
            background: rgba(233,189,97,.08);
        }

        tbody tr:last-child td {
            border-bottom: none;
        }

        .asset-code {
            color: var(--gold-light);
            font-weight: 800;
            white-space: nowrap;
        }

        .asset-name {
            color: white;
            font-weight: 700;
        }

        .condition {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 6px 10px;
            border-radius: 30px;
            font-size: 9px;
            font-weight: 800;
            white-space: nowrap;
        }

        .condition.baik {
            color: #B8F5CE;
            background: rgba(38,150,85,.17);
            border: 1px solid rgba(80,200,120,.3);
        }

        .condition.ringan {
            color: #FFE2A1;
            background: rgba(201,154,53,.16);
            border: 1px solid rgba(233,189,97,.3);
        }

        .condition.berat {
            color: #FFC1C1;
            background: rgba(190,50,50,.17);
            border: 1px solid rgba(255,100,100,.3);
        }

        .action-group {
            display: flex;
            align-items: center;
            gap: 6px;
            flex-wrap: wrap;
        }

        .action-group .btn {
            padding: 8px 10px;
            font-size: 9px;
        }

        .empty-state {
            padding: 55px 20px;
            text-align: center;
            color: var(--muted);
        }

        .empty-state .empty-icon {
            font-size: 48px;
            margin-bottom: 15px;
            opacity: .8;
        }

        .empty-state h3 {
            color: var(--gold-pale);
            font-size: 16px;
            margin-bottom: 8px;
        }

        .empty-state p {
            font-size: 11px;
        }

        /* FOOTER */

        .footer {
            position: relative;
            z-index: 1;
            padding: 22px 15px;
            text-align: center;
            color: rgba(181,207,193,.65);
            font-size: 10px;
            letter-spacing: .4px;
        }

        .footer span {
            color: var(--gold-light);
            font-weight: 700;
        }

        /* =====================================
           POPUP NOTIFIKASI EMERALD GOLD
        ===================================== */

        .popup-overlay {
            position: fixed;
            inset: 0;
            z-index: 9999;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            background: rgba(0, 12, 10, .78);
            backdrop-filter: blur(9px);
            opacity: 0;
            visibility: hidden;
            transition: .35s ease;
        }

        .popup-overlay.show {
            opacity: 1;
            visibility: visible;
        }

        .popup-box {
            position: relative;
            width: 100%;
            max-width: 410px;
            padding: 35px 30px;
            text-align: center;
            border: 1px solid rgba(233,189,97,.5);
            border-radius: 23px;
            background:
                radial-gradient(circle at top right, rgba(201,154,53,.16), transparent 40%),
                linear-gradient(145deg, #10483D, #041F1B);
            box-shadow:
                0 25px 80px rgba(0,0,0,.55),
                0 0 35px rgba(201,154,53,.15);
            transform: translateY(25px) scale(.85);
            transition: .4s cubic-bezier(.2,.8,.2,1);
            overflow: hidden;
        }

        .popup-overlay.show .popup-box {
            transform: translateY(0) scale(1);
        }

        .popup-box::before {
            content: "";
            position: absolute;
            width: 180px;
            height: 180px;
            top: -100px;
            right: -70px;
            border: 1px solid rgba(233,189,97,.25);
            border-radius: 50%;
            box-shadow:
                0 0 0 20px rgba(233,189,97,.04),
                0 0 0 40px rgba(233,189,97,.025);
            pointer-events: none;
        }

        .popup-icon {
            position: relative;
            width: 75px;
            height: 75px;
            display: grid;
            place-items: center;
            margin: 0 auto 20px;
            border-radius: 50%;
            color: #062F2A;
            font-size: 35px;
            font-weight: 800;
            background: linear-gradient(135deg, #F5DDA6, #C99A35);
            box-shadow:
                0 0 0 9px rgba(233,189,97,.09),
                0 0 30px rgba(233,189,97,.3);
            animation: popupIcon 2s ease-in-out infinite;
        }

        .popup-icon.error-icon {
            color: white;
            background: linear-gradient(135deg, #F87171, #B91C1C);
            box-shadow:
                0 0 0 9px rgba(248,113,113,.09),
                0 0 30px rgba(248,113,113,.25);
        }

        @keyframes popupIcon {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.08); }
        }

        .popup-box h2 {
            position: relative;
            color: var(--gold-pale);
            font-size: 19px;
            font-weight: 800;
            margin-bottom: 10px;
        }

        .popup-box p {
            position: relative;
            color: #C7DDD1;
            font-size: 12px;
            line-height: 1.8;
            margin-bottom: 23px;
            overflow-wrap: anywhere;
        }

        .popup-button {
            position: relative;
            width: 100%;
            padding: 12px 20px;
            border: 1px solid rgba(255,255,255,.2);
            border-radius: 11px;
            color: #062F2A;
            background: linear-gradient(135deg, #F5DDA6, #C99A35);
            font-family: inherit;
            font-size: 11px;
            font-weight: 800;
            cursor: pointer;
            transition: .3s;
        }

        .popup-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 22px rgba(201,154,53,.3);
        }

        .popup-close {
            position: absolute;
            top: 13px;
            right: 15px;
            z-index: 2;
            width: 30px;
            height: 30px;
            border: 1px solid rgba(233,189,97,.2);
            border-radius: 50%;
            color: var(--gold-pale);
            background: rgba(255,255,255,.06);
            font-size: 17px;
            cursor: pointer;
            transition: .25s;
        }

        .popup-close:hover {
            color: white;
            background: rgba(180,50,50,.5);
            transform: rotate(90deg);
        }

        /* PARTIKEL POPUP */

        .popup-spark {
            position: absolute;
            width: 5px;
            height: 5px;
            border-radius: 50%;
            background: var(--gold-light);
            box-shadow: 0 0 10px var(--gold-light);
            pointer-events: none;
            animation: sparkFloat 2.5s ease-in-out infinite;
        }

        @keyframes sparkFloat {
            0%, 100% {
                opacity: .15;
                transform: translateY(8px) scale(.6);
            }
            50% {
                opacity: .9;
                transform: translateY(-12px) scale(1.3);
            }
        }

        /* POPUP KONFIRMASI HAPUS */

        .delete-popup .popup-icon {
            background: linear-gradient(135deg, #F5DDA6, #C99A35);
        }

        .delete-actions {
            position: relative;
            display: flex;
            gap: 10px;
        }

        .delete-actions button {
            flex: 1;
            padding: 12px 10px;
            border-radius: 10px;
            font-family: inherit;
            font-size: 10px;
            font-weight: 800;
            cursor: pointer;
            transition: .25s;
        }

        .cancel-delete {
            color: var(--gold-pale);
            background: rgba(255,255,255,.07);
            border: 1px solid rgba(233,189,97,.3);
        }

        .confirm-delete {
            color: white;
            background: linear-gradient(135deg, #B91C1C, #7F1D1D);
            border: 1px solid rgba(255,120,120,.35);
        }

        .delete-actions button:hover {
            transform: translateY(-2px);
            filter: brightness(1.15);
        }

        /* RESPONSIVE */

        @media (max-width: 768px) {
            .topbar {
                padding: 13px 5%;
            }

            .brand-text h2 {
                font-size: 14px;
            }

            .brand-text span {
                font-size: 8px;
            }

            .user-detail strong {
                font-size: 10px;
            }

            .main {
                width: 92%;
                margin-top: 22px;
            }

            .hero {
                min-height: 220px;
                padding: 27px 23px;
            }

            .hero-icon {
                right: 5%;
                font-size: 55px;
                opacity: .3;
            }

            .hero p {
                max-width: 90%;
            }

            .data-card {
                padding: 18px 13px;
            }

            .card-heading {
                align-items: flex-start;
            }

            .heading-text h2 {
                font-size: 15px;
            }
        }

        @media (max-width: 480px) {
            .logo {
                width: 39px;
                height: 39px;
            }

            .user-info {
                gap: 7px;
            }

            .avatar {
                width: 34px;
                height: 34px;
                font-size: 12px;
            }

            .user-detail strong {
                max-width: 95px;
                overflow: hidden;
                text-overflow: ellipsis;
                white-space: nowrap;
            }

            .hero h1 {
                font-size: 25px;
            }

            .hero-label {
                font-size: 8px;
            }

            .heading-left {
                gap: 9px;
            }

            .title-icon {
                width: 40px;
                height: 40px;
            }

            .card-heading .btn {
                width: 100%;
            }

            .btn-back {
                width: 100%;
                justify-content: center;
            }

            .popup-box {
                padding: 32px 22px;
            }

            .popup-box h2 {
                font-size: 17px;
            }
        }

        @media (prefers-reduced-motion: reduce) {
            *,
            *::before,
            *::after {
                animation-duration: .01ms !important;
                animation-iteration-count: 1 !important;
                transition-duration: .01ms !important;
                scroll-behavior: auto !important;
            }
        }
    </style>
</head>

<body>

    <!-- BACKGROUND -->
    <div id="particles" aria-hidden="true"></div>
    <div class="ambient one"></div>
    <div class="ambient two"></div>

    <!-- HEADER -->
    <header class="topbar">

        <div class="brand">
            <img
                src="{{ asset('images/logo-bkpsdm.png') }}"
                class="logo"
                alt="Logo BKPSDM"
            >

            <div class="brand-text">
                <h2>ASSETRA</h2>
                <span>BKPSDM KOTA PONTIANAK</span>
            </div>
        </div>

        <div class="user-info">
            <div class="avatar">
                {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
            </div>

            <div class="user-detail">
                <strong>{{ auth()->user()->name }}</strong>
                <span>{{ ucfirst(auth()->user()->peran) }}</span>
            </div>
        </div>

    </header>

    <!-- MAIN CONTENT -->
    <main class="main">

        <div class="breadcrumb">
            <span>Data Aset</span>
        </div>

        <!-- HERO -->
        <section class="hero">

            <div class="hero-content">

                <div class="hero-label">
                    SISTEM INFORMASI MANAJEMEN ASET
                </div>

                <h1>Data <span>Aset</span></h1>

                <p>
                    Kelola dan pantau seluruh data inventaris aset
                    BKPSDM Kota Pontianak secara terstruktur,
                    transparan, dan terintegrasi.
                </p>

            </div>

            <div class="hero-icon">📦</div>

        </section>

        <!-- DATA CARD -->
        <section class="data-card">

            <div class="card-heading">

                <div class="heading-left">

                    <div class="title-icon">📋</div>

                    <div class="heading-text">
                        <h2>Daftar Inventaris Aset</h2>
                        <p>Informasi dan pengelolaan seluruh aset instansi</p>
                    </div>

                </div>

                @if(in_array(auth()->user()->peran, ['admin', 'petugas']))
                    <a href="{{ route('assets.create') }}" class="btn btn-primary">
                        <span>＋</span>
                        Tambah Aset
                    </a>
                @endif

            </div>

            <!-- TABLE -->
            <div class="table-wrapper">

                <table>

                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>KODE ASET</th>
                            <th>NAMA ASET</th>
                            <th>KATEGORI</th>
                            <th>RUANGAN</th>
                            <th>JUMLAH</th>
                            <th>KONDISI</th>
                            <th>AKSI</th>
                        </tr>
                    </thead>

                    <tbody>

                        @forelse($assets as $asset)

                            <tr>

                                <td>{{ $loop->iteration }}</td>

                                <td>
                                    <span class="asset-code">
                                        {{ $asset->kode_aset }}
                                    </span>
                                </td>

                                <td>
                                    <span class="asset-name">
                                        {{ $asset->nama_aset }}
                                    </span>
                                </td>

                                <td>
                                    {{ $asset->category->nama_kategori ?? '-' }}
                                </td>

                                <td>
                                    {{ $asset->room->nama_ruangan ?? '-' }}
                                </td>

                                <td>
                                    {{ $asset->jumlah }}
                                </td>

                                <td>

                                    @php
                                        $kondisiClass = match($asset->kondisi) {
                                            'Baik' => 'baik',
                                            'Rusak Ringan' => 'ringan',
                                            'Rusak Berat' => 'berat',
                                            default => 'ringan'
                                        };
                                    @endphp

                                    <span class="condition {{ $kondisiClass }}">
                                        ● {{ $asset->kondisi }}
                                    </span>

                                </td>

                                <td>

                                    <div class="action-group">

                                        <!-- DETAIL -->
                                        <a
                                            href="{{ route('assets.show', $asset->id) }}"
                                            class="btn btn-detail"
                                        >
                                            👁 Detail
                                        </a>

                                        <!-- EDIT -->
                                        @if(in_array(auth()->user()->peran, ['admin', 'petugas']))
                                            <a
                                                href="{{ route('assets.edit', $asset->id) }}"
                                                class="btn btn-edit"
                                            >
                                                ✏️ Edit
                                            </a>
                                        @endif

                                        <!-- HAPUS -->
                                        @if(auth()->user()->peran === 'admin')

                                            <form
                                                action="{{ route('assets.destroy', $asset->id) }}"
                                                method="POST"
                                                class="delete-form"
                                            >

                                                @csrf
                                                @method('DELETE')

                                                <button type="submit" class="btn btn-delete">
                                                    🗑 Hapus
                                                </button>

                                            </form>

                                        @endif

                                    </div>

                                </td>

                            </tr>

                        @empty

                            <tr>
                                <td colspan="8">

                                    <div class="empty-state">

                                        <div class="empty-icon">📦</div>

                                        <h3>Belum Ada Data Aset</h3>

                                        <p>
                                            Data inventaris aset belum tersedia.
                                            Silakan tambahkan data aset baru.
                                        </p>

                                    </div>

                                </td>
                            </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>

        </section>

        <br>

        <!-- KEMBALI DASHBOARD -->
        <div class="back-navigation">

            <a href="{{ route('dashboard') }}" class="btn-back">
                <span class="arrow"></span>
                Exit
            </a>

        </div>

    </main>

    <!-- FOOTER -->
    <footer class="footer">

        © {{ date('Y') }} <span>ASSETRA</span> |
        BKPSDM Kota Pontianak

        <br>

        <span style="display:inline-block; margin-top:7px;">
            Sistem Informasi Pengelolaan Aset
        </span>

    </footer>

    <!-- =====================================
         POPUP BERHASIL
    ====================================== -->

    @if(session('success'))

        <div class="popup-overlay" id="successPopup">

            <div class="popup-box">

                <button
                    type="button"
                    class="popup-close"
                    onclick="closePopup('successPopup')"
                >
                    ×
                </button>

                <span class="popup-spark" style="top:15%;left:15%"></span>
                <span class="popup-spark" style="top:25%;right:15%;animation-delay:.5s"></span>
                <span class="popup-spark" style="bottom:25%;left:20%;animation-delay:1s"></span>
                <span class="popup-spark" style="bottom:20%;right:18%;animation-delay:1.5s"></span>

                <div class="popup-icon">✓</div>

                <h2>Berhasil!</h2>

                <p>{{ session('success') }}</p>

                <button
                    type="button"
                    class="popup-button"
                    onclick="closePopup('successPopup')"
                >
                    Oke, Mengerti
                </button>

            </div>

        </div>

    @endif

    <!-- =====================================
         POPUP ERROR
    ====================================== -->

    @if(session('error'))

        <div class="popup-overlay" id="errorPopup">

            <div class="popup-box">

                <button
                    type="button"
                    class="popup-close"
                    onclick="closePopup('errorPopup')"
                >
                    ×
                </button>

                <div class="popup-icon error-icon">!</div>

                <h2>Terjadi Kesalahan</h2>

                <p>{{ session('error') }}</p>

                <button
                    type="button"
                    class="popup-button"
                    onclick="closePopup('errorPopup')"
                >
                    Tutup
                </button>

            </div>

        </div>

    @endif

    <!-- =====================================
         POPUP KONFIRMASI HAPUS
    ====================================== -->

    <div class="popup-overlay" id="deletePopup">

        <div class="popup-box delete-popup">

            <button
                type="button"
                class="popup-close"
                onclick="closePopup('deletePopup')"
            >
                ×
            </button>

            <div class="popup-icon">?</div>

            <h2>Hapus Data Aset?</h2>

            <p>
                Apakah kamu yakin ingin menghapus data aset ini?
                Data yang sudah dihapus tidak dapat dikembalikan.
            </p>

            <div class="delete-actions">

                <button
                    type="button"
                    class="cancel-delete"
                    onclick="closePopup('deletePopup')"
                >
                    Batal
                </button>

                <button
                    type="button"
                    class="confirm-delete"
                    id="confirmDelete"
                >
                    Ya, Hapus
                </button>

            </div>

        </div>

    </div>

    <!-- =====================================
         JAVASCRIPT
    ====================================== -->

    <script>
        document.addEventListener('DOMContentLoaded', function () {

            /* =================================
               ANIMASI PARTIKEL BACKGROUND
            ================================= */

            const container = document.getElementById('particles');

            if (
                container &&
                !window.matchMedia('(prefers-reduced-motion: reduce)').matches
            ) {

                for (let i = 0; i < 22; i++) {

                    const particle = document.createElement('span');

                    particle.className = 'particle';

                    particle.style.left = Math.random() * 100 + '%';

                    particle.style.animationDuration =
                        (7 + Math.random() * 12) + 's';

                    particle.style.animationDelay =
                        (Math.random() * 10) + 's';

                    const size = (2 + Math.random() * 3) + 'px';

                    particle.style.width = size;
                    particle.style.height = size;

                    container.appendChild(particle);

                }

            }

            /* =================================
               FUNGSI BUKA POPUP
            ================================= */

            window.openPopup = function (id) {

                const popup = document.getElementById(id);

                if (popup) {
                    popup.classList.add('show');
                }

            };

            /* =================================
               FUNGSI TUTUP POPUP
            ================================= */

            window.closePopup = function (id) {

                const popup = document.getElementById(id);

                if (popup) {
                    popup.classList.remove('show');
                }

            };

            /* =================================
               POPUP BERHASIL OTOMATIS
            ================================= */

            const successPopup = document.getElementById('successPopup');

            if (successPopup) {

                setTimeout(function () {
                    openPopup('successPopup');
                }, 150);

                setTimeout(function () {
                    closePopup('successPopup');
                }, 5000);

            }

            /* =================================
               POPUP ERROR OTOMATIS
            ================================= */

            const errorPopup = document.getElementById('errorPopup');

            if (errorPopup) {

                setTimeout(function () {
                    openPopup('errorPopup');
                }, 150);

                setTimeout(function () {
                    closePopup('errorPopup');
                }, 6000);

            }

            /* =================================
               KONFIRMASI HAPUS DATA
            ================================= */

            let selectedDeleteForm = null;

            const deleteForms = document.querySelectorAll('.delete-form');

            deleteForms.forEach(function (form) {

                form.addEventListener('submit', function (event) {

                    event.preventDefault();

                    selectedDeleteForm = form;

                    openPopup('deletePopup');

                });

            });

            /* =================================
               TOMBOL YA, HAPUS
            ================================= */

            const confirmDelete = document.getElementById('confirmDelete');

            if (confirmDelete) {

                confirmDelete.addEventListener('click', function () {

                    if (selectedDeleteForm) {

                        confirmDelete.disabled = true;
                        confirmDelete.textContent = 'Memproses...';

                        selectedDeleteForm.submit();

                    }

                });

            }

            /* =================================
               KLIK AREA LUAR POPUP
            ================================= */

            document.querySelectorAll('.popup-overlay').forEach(function (overlay) {

                overlay.addEventListener('click', function (event) {

                    if (event.target === overlay) {

                        overlay.classList.remove('show');

                    }

                });

            });

            /* =================================
               TOMBOL ESC UNTUK TUTUP POPUP
            ================================= */

            document.addEventListener('keydown', function (event) {

                if (event.key === 'Escape') {

                    document.querySelectorAll('.popup-overlay.show').forEach(function (popup) {

                        popup.classList.remove('show');

                    });

                }

            });

        });
    </script>

</body>
</html>
