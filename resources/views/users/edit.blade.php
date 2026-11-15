
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pengguna - ASSETRA</title>

    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        * {
            box-sizing: border-box;
        }

        :root {
            --dark: #041F1B;
            --green: #073D32;
            --green-light: #10483D;
            --gold: #C99A35;
            --gold-light: #E9BD61;
            --cream: #F5DDA6;
        }

        body {
            margin: 0;
            padding: 30px;
            min-height: 100vh;
            font-family: 'Plus Jakarta Sans', sans-serif;
            color: #f8fafc;
            background:
                radial-gradient(circle at 15% 20%, rgba(201,154,53,.14), transparent 30%),
                radial-gradient(circle at 85% 80%, rgba(23,100,84,.3), transparent 35%),
                linear-gradient(135deg, #041F1B, #073D32 55%, #041F1B);
            overflow-x: hidden;
        }

        /* PARTICLE BACKGROUND */

        #particles {
            position: fixed;
            inset: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 0;
        }

        .orb {
            position: fixed;
            width: 250px;
            height: 250px;
            border-radius: 50%;
            filter: blur(90px);
            opacity: .13;
            pointer-events: none;
            z-index: 0;
            animation: floatOrb 9s ease-in-out infinite alternate;
        }

        .orb.one {
            background: #E9BD61;
            top: 5%;
            left: -100px;
        }

        .orb.two {
            background: #18A17D;
            bottom: 0;
            right: -100px;
            animation-delay: 2s;
        }

        @keyframes floatOrb {
            from { transform: translateY(0) scale(1); }
            to { transform: translateY(-45px) scale(1.15); }
        }

        .container {
            position: relative;
            z-index: 2;
            max-width: 600px;
            margin: auto;
            animation: pageEnter .8s ease both;
        }

        @keyframes pageEnter {
            from {
                opacity: 0;
                transform: translateY(25px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* CARD */

        .card {
            position: relative;
            background: linear-gradient(
                145deg,
                rgba(255,255,255,.11),
                rgba(255,255,255,.035)
            );
            padding: 30px;
            border-radius: 12px;
            border: 1px solid rgba(233,189,97,.4);
            box-shadow:
                0 18px 50px rgba(0,0,0,.3),
                0 0 22px rgba(201,154,53,.07),
                inset 0 1px 0 rgba(255,255,255,.09);
            backdrop-filter: blur(16px);
            overflow: hidden;
        }

        .card::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 3px;
            background: linear-gradient(
                90deg,
                transparent,
                #C99A35,
                #F5DDA6,
                #C99A35,
                transparent
            );
        }

        /* HEADING */

        .brand {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 28px;
        }

        .brand-icon {
            width: 47px;
            height: 47px;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 13px;
            color: #182B20;
            font-size: 22px;
            font-weight: 800;
            background: linear-gradient(145deg, #C99A35, #E9BD61);
            box-shadow: 0 5px 20px rgba(201,154,53,.25);
        }

        .brand-name {
            color: var(--cream);
            font-size: 18px;
            font-weight: 800;
            letter-spacing: 2px;
        }

        .brand-subtitle {
            margin-top: 4px;
            color: #A8C5B9;
            font-size: 9px;
            letter-spacing: 1.8px;
        }

        .eyebrow {
            display: inline-block;
            color: var(--gold-light);
            font-size: 10px;
            font-weight: 800;
            letter-spacing: 3px;
            margin-bottom: 9px;
        }

        h1 {
            color: #FFF5D9;
            font-size: 26px;
            font-weight: 800;
            margin: 0 0 9px;
        }

        .description {
            color: #A9C4B8;
            font-size: 12px;
            margin-bottom: 25px;
        }

        /* FORM */

        label {
            display: block;
            margin-top: 18px;
            color: var(--cream);
            font-size: 12px;
            font-weight: 700;
        }

        input, select {
            width: 100%;
            padding: 12px;
            margin-top: 8px;
            border: 1px solid rgba(233,189,97,.28);
            border-radius: 6px;
            background: rgba(2,25,21,.55);
            color: #F8FAFC;
            font-family: inherit;
            font-size: 12px;
            outline: none;
            transition: .3s ease;
        }

        input::placeholder {
            color: #829F91;
        }

        input:focus, select:focus {
            border-color: var(--gold-light);
            background: rgba(2,35,29,.8);
            box-shadow:
                0 0 0 3px rgba(233,189,97,.12),
                0 0 15px rgba(201,154,53,.12);
        }

        select option {
            background: #073D32;
            color: white;
        }

        .note {
            color: #A5BCAF;
            font-size: 11px;
            margin-top: 7px;
            line-height: 1.6;
        }

        .error {
            color: #FCA5A5;
            font-size: 11px;
            margin-top: 6px;
        }

        /* PASSWORD SECTION */

        .password-note {
            display: flex;
            align-items: center;
            gap: 8px;
            margin-top: 15px;
            padding: 11px 12px;
            border-radius: 7px;
            background: rgba(201,154,53,.09);
            border: 1px solid rgba(233,189,97,.2);
            color: #E9BD61;
            font-size: 10px;
            line-height: 1.6;
        }

        /* BUTTONS */

        .form-actions {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 22px;
        }

        button, .btn {
            padding: 12px 18px;
            border: 1px solid transparent;
            border-radius: 6px;
            cursor: pointer;
            text-decoration: none;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            gap: 7px;
            font-family: inherit;
            font-size: 11px;
            font-weight: 800;
            transition: .3s ease;
        }

        button {
            background: linear-gradient(135deg, #C99A35, #E9BD61);
            color: #182B20;
            box-shadow: 0 4px 15px rgba(201,154,53,.2);
        }

        button:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 22px rgba(201,154,53,.35);
        }

        .btn {
            background: rgba(255,255,255,.07);
            color: var(--cream);
            border-color: rgba(233,189,97,.35);
        }

        .btn:hover {
            background: rgba(201,154,53,.15);
            transform: translateY(-3px);
        }

        /* FOOTER */

        footer {
            margin-top: 24px;
            text-align: center;
            color: #89A99A;
            font-size: 10px;
            letter-spacing: 1px;
        }

        footer span {
            color: var(--gold-light);
            font-weight: 800;
        }

        @media (max-width: 500px) {
            body {
                padding: 20px 14px;
            }

            .card {
                padding: 24px 20px;
            }

            h1 {
                font-size: 23px;
            }

            .form-actions button,
            .form-actions .btn {
                flex: 1;
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

<canvas id="particles"></canvas>
<div class="orb one"></div>
<div class="orb two"></div>

<div class="container">

    <div class="card">

        <div class="brand">
            <div class="brand-icon">A</div>
            <div>
                <div class="brand-name">ASSETRA</div>
                <div class="brand-subtitle">ASSET MANAGEMENT SYSTEM</div>
            </div>
        </div>

        <span class="eyebrow">PENGELOLAAN AKUN</span>

        <h1>Edit Pengguna</h1>

        <p class="description">
            Perbarui informasi dan hak akses akun pengguna ASSETRA.
        </p>

        <form action="{{ route('users.update', $user->id) }}" method="POST">
            @csrf
            @method('PUT')

            <label>Nama Lengkap</label>
            <input
                type="text"
                name="name"
                value="{{ old('name', $user->name) }}"
                placeholder="Masukkan nama lengkap"
                required
            >
            @error('name')
                <div class="error">{{ $message }}</div>
            @enderror

            <label>Email</label>
            <input
                type="email"
                name="email"
                value="{{ old('email', $user->email) }}"
                placeholder="Masukkan alamat email"
                required
            >
            @error('email')
                <div class="error">{{ $message }}</div>
            @enderror

            <label>Password Baru</label>
            <input
                type="password"
                name="password"
                placeholder="Kosongkan jika tidak ingin mengubah password"
                autocomplete="new-password"
            >

            <div class="note">
                Minimal 8 karakter jika ingin mengganti password.
            </div>

            @error('password')
                <div class="error">{{ $message }}</div>
            @enderror

            <div class="password-note">
                <span>ⓘ</span>
                Password lama tidak akan berubah jika kolom password baru dikosongkan.
            </div>

            <label>Konfirmasi Password Baru</label>
            <input
                type="password"
                name="password_confirmation"
                placeholder="Ulangi password baru"
                autocomplete="new-password"
            >

            <label>Peran Pengguna</label>
            <select name="peran" required>
                <option value="admin" {{ old('peran', $user->peran) == 'admin' ? 'selected' : '' }}>
                    Admin
                </option>

                <option value="petugas" {{ old('peran', $user->peran) == 'petugas' ? 'selected' : '' }}>
                    Petugas
                </option>

                <option value="siswa" {{ old('peran', $user->peran) == 'siswa' ? 'selected' : '' }}>
                    Siswa
                </option>
            </select>

            @error('peran')
                <div class="error">{{ $message }}</div>
            @enderror

            <div class="form-actions">
                <button type="submit">
                     Simpan Perubahan
                </button>

                <a href="{{ route('users.index') }}" class="btn">
                     Kembali
                </a>
            </div>

        </form>

    </div>

    <footer>
        © {{ date('Y') }} <span>ASSETRA</span> BKPSDM KOTA PONTIANAK
    </footer>

</div>

<script>
    // ANIMASI PARTIKEL EMAS

    const canvas = document.getElementById('particles');
    const ctx = canvas.getContext('2d');

    let particles = [];

    function resizeCanvas() {
        const dpr = Math.min(window.devicePixelRatio || 1, 2);

        canvas.width = window.innerWidth * dpr;
        canvas.height = window.innerHeight * dpr;

        canvas.style.width = window.innerWidth + 'px';
        canvas.style.height = window.innerHeight + 'px';

        ctx.setTransform(dpr, 0, 0, dpr, 0, 0);
    }

    class Particle {
        constructor() {
            this.reset();
            this.y = Math.random() * window.innerHeight;
        }

        reset() {
            this.x = Math.random() * window.innerWidth;
            this.y = window.innerHeight + Math.random() * 50;
            this.size = Math.random() * 2 + .5;
            this.speed = Math.random() * .6 + .2;
            this.opacity = Math.random() * .6 + .2;
            this.drift = (Math.random() - .5) * .5;
        }

        update() {
            this.y -= this.speed;
            this.x += this.drift;

            if (this.y < -10) this.reset();

            if (this.x < -10) {
                this.x = window.innerWidth + 10;
            }

            if (this.x > window.innerWidth + 10) {
                this.x = -10;
            }
        }

        draw() {
            ctx.beginPath();
            ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
            ctx.fillStyle = `rgba(233,189,97,${this.opacity})`;
            ctx.shadowBlur = 10;
            ctx.shadowColor = '#E9BD61';
            ctx.fill();
            ctx.shadowBlur = 0;
        }
    }

    function initParticles() {
        resizeCanvas();

        particles = Array.from(
            { length: Math.min(65, Math.floor(window.innerWidth / 18)) },
            () => new Particle()
        );
    }

    const reduceMotion = window.matchMedia(
        '(prefers-reduced-motion: reduce)'
    ).matches;

    function animateParticles() {
        ctx.clearRect(0, 0, window.innerWidth, window.innerHeight);

        particles.forEach(particle => {
            particle.update();
            particle.draw();
        });

        requestAnimationFrame(animateParticles);
    }

    initParticles();

    if (!reduceMotion) {
        animateParticles();
    }

    window.addEventListener('resize', initParticles);
</script>

</body>
</html>
