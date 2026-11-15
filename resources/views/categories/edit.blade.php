
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Kategori - ASSETRA</title>

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
            max-width: 850px;
            margin: 30px auto;
            padding: 0 20px 40px;
            animation: fadeUp .8s ease;
        }

        /* HERO GEDUNG */
        .hero {
            position: relative;
            min-height: 190px;
            padding: 35px;
            margin-bottom: 28px;
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
            font-size: 29px;
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

        .eyebrow {
            color: var(--gold-light);
            font-size: 11px;
            font-weight: 800;
            letter-spacing: 2px;
            text-transform: uppercase;
            margin-bottom: 8px;
        }

        .page-heading h2 {
            font-size: 25px;
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
            padding: 30px;
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
            margin: 0 0 25px;
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
            font-size: 17px;
        }

        /* FORM */
        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 9px;
            font-size: 12px;
            font-weight: 700;
            color: var(--cream);
        }

        .required {
            color: var(--gold-light);
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
            min-height: 120px;
            resize: vertical;
            line-height: 1.7;
        }

        /* VALIDATION ERROR */
        .error {
            color: #FCA5A5;
            background: rgba(220,38,38,.10);
            border: 1px solid rgba(248,113,113,.30);
            padding: 10px 15px;
            border-radius: 8px;
            margin-bottom: 20px;
            font-size: 12px;
        }

        .error p {
            margin: 5px 0;
        }

        /* BUTTONS */
        .button-group {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-top: 28px;
            flex-wrap: wrap;
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
            background: rgba(255,255,255,.04);
            color: var(--cream);
            border: 1px solid rgba(233,189,97,.35);
        }

        .btn-back:hover {
            background: rgba(233,189,97,.12);
            border-color: var(--gold-light);
            transform: translateY(-2px);
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
                padding: 20px 16px;
            }

            .section-title {
                font-size: 16px;
            }

            .button-group {
                flex-direction: column;
                align-items: stretch;
            }

            .btn {
                width: 100%;
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

            <h1>Edit Kategori Aset</h1>

            <p>
                Perbarui informasi kategori aset BKPSDM Kota Pontianak
                agar data inventaris tetap akurat dan terorganisir.
            </p>

        </div>

    </section>

    <!-- PAGE HEADING -->
    <div class="page-heading">

        <div class="eyebrow">MANAJEMEN DATA</div>

        <h2>Edit Kategori Aset</h2>

        <p>
            Silakan ubah informasi kategori pada formulir berikut.
        </p>

    </div>

    <!-- CARD FORM -->
    <div class="card">

        <h2 class="section-title">
            <span class="section-icon">✎</span>
            Form Edit Kategori
        </h2>

        @if($errors->any())
            <div class="error">
                @foreach($errors->all() as $error)
                    <p>• {{ $error }}</p>
                @endforeach
            </div>
        @endif

        <form
            action="{{ route('categories.update', $category->id) }}"
            method="POST"
        >

            @csrf
            @method('PUT')

            <div class="form-group">

                <label>
                    Nama Kategori <span class="required">*</span>
                </label>

                <input
                    type="text"
                    name="nama_kategori"
                    value="{{ old('nama_kategori', $category->nama_kategori) }}"
                    placeholder="Masukkan nama kategori"
                    required
                >

            </div>

            <div class="form-group">

                <label>Deskripsi</label>

                <textarea
                    name="deskripsi"
                    placeholder="Masukkan keterangan kategori"
                >{{ old('deskripsi', $category->deskripsi) }}</textarea>

            </div>

            <div class="button-group">

                <button type="submit" class="btn btn-save">
                    <span></span>
                    Simpan Perubahan
                </button>

                <a
                    href="{{ route('categories.index') }}"
                    class="btn btn-back"
                >
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
    // MEMBUAT PARTIKEL DEKORATIF
    const particleContainer = document.getElementById('particles');

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
</script>

</body>
</html>
