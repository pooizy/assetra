
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Pengguna - ASSETRA</title>

    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        * { box-sizing: border-box; }

        :root {
            --dark: #041F1B;
            --green: #073D32;
            --gold: #C99A35;
            --gold-light: #E9BD61;
            --cream: #F5DDA6;
        }

        body {
            margin: 0;
            padding: 30px;
            min-height: 100vh;
            font-family: 'Plus Jakarta Sans', sans-serif;
            color: #fff;
            background:
                radial-gradient(circle at 15% 20%, rgba(201,154,53,.13), transparent 30%),
                radial-gradient(circle at 85% 80%, rgba(23,100,84,.35), transparent 35%),
                linear-gradient(135deg, #041F1B, #073D32 55%, #041F1B);
            overflow-x: hidden;
        }

        #particles, #lightning {
            position: fixed;
            inset: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
        }

        #particles { z-index: 0; }
        #lightning { z-index: 1; }

        .orb {
            position: fixed;
            width: 250px;
            height: 250px;
            border-radius: 50%;
            filter: blur(90px);
            opacity: .13;
            pointer-events: none;
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
            to { transform: translateY(-45px) scale(1.15); }
        }

        .container {
            position: relative;
            z-index: 2;
            max-width: 1100px;
            margin: auto;
            animation: pageEnter .8s ease both;
        }

        @keyframes pageEnter {
            from { opacity: 0; transform: translateY(25px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* HEADER */

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 20px;
            margin-bottom: 30px;
            padding-bottom: 22px;
            border-bottom: 1px solid rgba(233,189,97,.25);
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 13px;
        }

        .brand-icon {
            width: 52px;
            height: 52px;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 15px;
            color: var(--cream);
            font-size: 24px;
            font-weight: 800;
            background: linear-gradient(145deg, #C99A35, #80591A);
            box-shadow: 0 5px 20px rgba(201,154,53,.3);
        }

        .brand-name {
            font-size: 21px;
            font-weight: 800;
            letter-spacing: 2px;
            color: var(--cream);
        }

        .brand-subtitle {
            margin-top: 4px;
            color: #A8C5B9;
            font-size: 10px;
            letter-spacing: 2px;
        }

        .header-actions {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        /* BUTTON */

        .btn {
            padding: 11px 17px;
            border: 1px solid transparent;
            border-radius: 9px;
            text-decoration: none;
            color: white;
            cursor: pointer;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            gap: 7px;
            font-family: inherit;
            font-size: 12px;
            font-weight: 700;
            transition: .3s ease;
        }

        .primary {
            background: linear-gradient(135deg, #C99A35, #E9BD61);
            color: #182B20;
        }

        .primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 22px rgba(201,154,53,.4);
        }

        .secondary {
            background: rgba(255,255,255,.07);
            color: #F5DDA6;
            border-color: rgba(233,189,97,.4);
        }

        .secondary:hover {
            background: rgba(201,154,53,.15);
            transform: translateY(-2px);
        }

        .danger {
            background: rgba(220,38,38,.13);
            border-color: rgba(248,113,113,.3);
            color: #FCA5A5;
        }

        .danger:hover {
            background: #DC2626;
            color: white;
        }

        .page-heading { margin-bottom: 25px; }

        .eyebrow {
            display: inline-block;
            color: var(--gold-light);
            font-size: 11px;
            font-weight: 800;
            letter-spacing: 3px;
            margin-bottom: 10px;
        }

        h1 {
            color: #FFF5D9;
            font-size: 30px;
            font-weight: 800;
            margin: 0 0 9px;
        }

        .page-heading p {
            color: #A9C4B8;
            font-size: 13px;
        }

        .error {
            padding: 14px 17px;
            margin-bottom: 17px;
            border-radius: 10px;
            font-size: 13px;
            background: rgba(239,68,68,.12);
            color: #FCA5A5;
            border: 1px solid rgba(239,68,68,.3);
        }

        /* TABLE */

        .card {
            background: linear-gradient(145deg, rgba(255,255,255,.10), rgba(255,255,255,.035));
            border: 1px solid rgba(233,189,97,.35);
            padding: 22px;
            border-radius: 15px;
            box-shadow: 0 15px 45px rgba(0,0,0,.25);
            backdrop-filter: blur(15px);
            overflow-x: auto;
        }

        .table-heading {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 20px;
            color: var(--cream);
            font-size: 14px;
            font-weight: 800;
        }

        .table-heading span {
            width: 30px;
            height: 30px;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 9px;
            color: #182B20;
            background: linear-gradient(135deg, #C99A35, #E9BD61);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            min-width: 850px;
        }

        th, td {
            padding: 15px 13px;
            border-bottom: 1px solid rgba(255,255,255,.09);
            text-align: left;
            font-size: 12px;
        }

        th {
            background: rgba(201,154,53,.13);
            color: var(--cream);
            font-size: 11px;
            font-weight: 800;
            letter-spacing: .7px;
            text-transform: uppercase;
        }

        th:first-child { border-radius: 8px 0 0 8px; }
        th:last-child { border-radius: 0 8px 8px 0; }

        td { color: #E2EEE8; }

        tbody tr:hover { background: rgba(233,189,97,.07); }
        tbody tr:last-child td { border-bottom: none; }

        .number {
            color: var(--gold-light);
            font-weight: 800;
        }

        .user-name {
            color: #FFF5D9;
            font-weight: 700;
        }

        .user-email { color: #B4CFC2; }

        .role {
            display: inline-block;
            padding: 6px 12px;
            background: rgba(201,154,53,.14);
            color: var(--cream);
            border: 1px solid rgba(233,189,97,.3);
            border-radius: 20px;
            font-size: 10px;
            font-weight: 800;
        }

        /* STATUS */

        .status {
            display: inline-block;
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 10px;
            font-weight: 800;
            border: 1px solid;
        }

        .status-menunggu {
            color: #FDE68A;
            background: rgba(245,158,11,.13);
            border-color: rgba(245,158,11,.35);
        }

        .status-disetujui {
            color: #86EFAC;
            background: rgba(34,197,94,.13);
            border-color: rgba(74,222,128,.35);
        }

        .status-ditolak {
            color: #FCA5A5;
            background: rgba(239,68,68,.13);
            border-color: rgba(248,113,113,.35);
        }

        .email-status {
            font-size: 10px;
            margin-top: 6px;
            color: #A9C4B8;
        }

        .action-buttons {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            gap: 7px;
        }

        .action-buttons form { margin: 0; }

        .approve {
            background: rgba(34,197,94,.15);
            border-color: rgba(74,222,128,.4);
            color: #86EFAC;
        }

        .approve:hover {
            background: #15803D;
            color: white;
            transform: translateY(-2px);
        }

        .reject {
            background: rgba(220,38,38,.13);
            border-color: rgba(248,113,113,.3);
            color: #FCA5A5;
        }

        .reject:hover {
            background: #DC2626;
            color: white;
            transform: translateY(-2px);
        }

        .empty {
            text-align: center;
            padding: 35px !important;
            color: #A9C4B8;
        }

        /* ALL MODALS */

        .modal-overlay {
            position: fixed;
            inset: 0;
            z-index: 1000;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
            background: rgba(0,0,0,.72);
            backdrop-filter: blur(8px);
            opacity: 0;
            visibility: hidden;
            transition: .3s ease;
        }

        .modal-overlay.active {
            opacity: 1;
            visibility: visible;
        }

        .modal-box {
            position: relative;
            width: 100%;
            max-width: 390px;
            padding: 32px 27px;
            text-align: center;
            border-radius: 19px;
            background: linear-gradient(145deg, #10483D, #041F1B);
            border: 1px solid rgba(233,189,97,.55);
            box-shadow: 0 20px 70px rgba(0,0,0,.5);
            transform: scale(.75) translateY(25px);
            transition: .35s cubic-bezier(.2,.8,.2,1);
        }

        .modal-overlay.active .modal-box {
            transform: scale(1) translateY(0);
        }

        .modal-icon,
        .approve-modal-icon,
        .reject-modal-icon,
        .success-modal-icon {
            width: 70px;
            height: 70px;
            margin: 0 auto 18px;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 50%;
            font-size: 30px;
            font-weight: 800;
        }

        .modal-icon,
        .reject-modal-icon {
            color: #FCA5A5;
            background: rgba(220,38,38,.13);
            border: 1px solid rgba(248,113,113,.45);
        }

        .approve-modal-icon,
        .success-modal-icon {
            color: #86EFAC;
            background: rgba(34,197,94,.13);
            border: 1px solid rgba(74,222,128,.45);
        }

        .modal-box h2 {
            color: #FFF5D9;
            font-size: 20px;
            margin-bottom: 10px;
        }

        .modal-box p {
            color: #B5CFC3;
            font-size: 12px;
            line-height: 1.8;
            margin-bottom: 23px;
        }

        .approve-modal-box { border-color: rgba(74,222,128,.5); }
        .approve-modal-box h2 { color: #BBF7D0; }

        .reject-modal-box { border-color: rgba(248,113,113,.5); }
        .reject-modal-box h2 { color: #FCA5A5; }

        .success-modal-box { border-color: rgba(74,222,128,.5); }
        .success-modal-box h2 { color: #BBF7D0; }

        .success-modal-icon {
            animation: successPulse 1.8s ease-in-out infinite;
        }

        @keyframes successPulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.07); }
        }

        .modal-actions {
            display: flex;
            justify-content: center;
            gap: 10px;
        }

        .modal-actions button { min-width: 110px; }

        .cancel {
            background: rgba(255,255,255,.08);
            border: 1px solid rgba(255,255,255,.15);
            color: white;
        }

        .confirm,
        .reject-confirm {
            background: linear-gradient(135deg, #DC2626, #991B1B);
            color: white;
        }

        .approve-confirm,
        .success-ok {
            background: linear-gradient(135deg, #15803D, #22C55E);
            color: white;
        }

        .modal-actions button:hover,
        .success-ok:hover {
            transform: translateY(-3px);
        }

        .success-ok { min-width: 130px; }

        footer {
            margin-top: 30px;
            padding-top: 20px;
            text-align: center;
            border-top: 1px solid rgba(233,189,97,.18);
            color: #89A99A;
            font-size: 11px;
            letter-spacing: 1px;
        }

        footer span {
            color: var(--gold-light);
            font-weight: 800;
        }

        @media (max-width: 650px) {
            body { padding: 20px 14px; }
            .header { align-items: flex-start; }
            .header-actions { width: 100%; }
            .header-actions .btn { flex: 1; }
            h1 { font-size: 25px; }
            .card { padding: 15px; }
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
<canvas id="lightning"></canvas>

<div class="orb one"></div>
<div class="orb two"></div>

<div class="container">

    <div class="header">
        <div class="brand">
            <div class="brand-icon">A</div>
            <div>
                <div class="brand-name">ASSETRA</div>
                <div class="brand-subtitle">ASSET MANAGEMENT SYSTEM</div>
            </div>
        </div>

        <div class="header-actions">
            <a href="{{ route('dashboard') }}" class="btn secondary">
                Kembali
            </a>

            <a href="{{ route('users.create') }}" class="btn primary">
                + Tambah Pengguna
            </a>
        </div>
    </div>

    <div class="page-heading">
        <span class="eyebrow">PENGELOLAAN SISTEM</span>
        <h1>Manajemen Pengguna</h1>
        <p>Kelola akun dan hak akses pengguna ASSETRA BKPSDM Kota Pontianak.</p>
    </div>

    @if(session('error'))
        <div class="error">⚠ {{ session('error') }}</div>
    @endif

    @if($errors->any())
        <div class="error">
            <strong>Terjadi kesalahan:</strong>
            <ul style="margin: 8px 0 0 20px;">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card">

        <div class="table-heading">
            <span>👤</span>
            Daftar Pengguna Sistem
        </div>

        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Peran</th>
                    <th>Status Akun</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                @forelse($users as $user)
                    <tr>
                        <td class="number">{{ $loop->iteration }}</td>

                        <td class="user-name">{{ $user->name }}</td>

                        <td class="user-email">{{ $user->email }}</td>

                        <td>
                            <span class="role">
                                {{ ucfirst($user->peran) }}
                            </span>
                        </td>

                        <td>
                            <span class="status status-{{ $user->status_akun }}">
                                {{ ucfirst($user->status_akun) }}
                            </span>

                            <div class="email-status">
                                {{ $user->hasVerifiedEmail() ? 'Email terverifikasi' : 'Email belum diverifikasi' }}
                            </div>
                        </td>

                        <td>
                            <div class="action-buttons">

                                @if($user->status_akun === 'menunggu' && $user->id !== auth()->id())

                                    <form action="{{ route('users.approve', $user->id) }}"
                                          method="POST"
                                          class="approve-form">
                                        @csrf

                                        <button type="button" class="btn approve approve-trigger">
                                            ✓ Setujui
                                        </button>
                                    </form>

                                    <form action="{{ route('users.reject', $user->id) }}"
                                          method="POST"
                                          class="reject-form">
                                        @csrf

                                        <button type="button" class="btn reject reject-trigger">
                                            ✕ Tolak
                                        </button>
                                    </form>

                                @endif

                                <a href="{{ route('users.edit', $user->id) }}"
                                   class="btn primary">
                                    ✎ Edit
                                </a>

                                @if($user->id !== auth()->id())
                                    <form action="{{ route('users.destroy', $user->id) }}"
                                          method="POST"
                                          class="delete-form">
                                        @csrf
                                        @method('DELETE')

                                        <button type="button" class="btn danger delete-trigger">
                                            ✕ Hapus
                                        </button>
                                    </form>
                                @endif

                            </div>
                        </td>
                    </tr>

                @empty
                    <tr>
                        <td colspan="6" class="empty">
                            Belum ada pengguna terdaftar.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>

    </div>

    <footer>
        © {{ date('Y') }} <span>ASSETRA</span> BKPSDM KOTA PONTIANAK
    </footer>

</div>

<!-- POPUP SETUJUI -->

<div class="modal-overlay" id="approveModal">
    <div class="modal-box approve-modal-box"
         role="dialog"
         aria-modal="true"
         aria-labelledby="approveTitle">

        <div class="approve-modal-icon">✓</div>

        <h2 id="approveTitle">Setujui Akun Pengguna?</h2>

        <p>
            Apakah kamu yakin ingin menyetujui akun pengguna ini?
            Setelah disetujui, pengguna dapat login ke sistem ASSETRA.
        </p>

        <div class="modal-actions">
            <button type="button" class="btn cancel" id="cancelApprove">
                Batal
            </button>

            <button type="button" class="btn approve-confirm" id="confirmApprove">
                Ya, Setujui
            </button>
        </div>
    </div>
</div>

<!-- POPUP TOLAK -->

<div class="modal-overlay" id="rejectModal">
    <div class="modal-box reject-modal-box"
         role="dialog"
         aria-modal="true"
         aria-labelledby="rejectTitle">

        <div class="reject-modal-icon">✕</div>

        <h2 id="rejectTitle">Tolak Akun Pengguna?</h2>

        <p>
            Apakah kamu yakin ingin menolak pendaftaran pengguna ini?
            Pengguna tidak dapat login ke sistem ASSETRA.
        </p>

        <div class="modal-actions">
            <button type="button" class="btn cancel" id="cancelReject">
                Batal
            </button>

            <button type="button" class="btn reject-confirm" id="confirmReject">
                Ya, Tolak
            </button>
        </div>
    </div>
</div>

<!-- POPUP HAPUS -->

<div class="modal-overlay" id="deleteModal">
    <div class="modal-box"
         role="dialog"
         aria-modal="true"
         aria-labelledby="deleteTitle">

        <div class="modal-icon">!</div>

        <h2 id="deleteTitle">Hapus Pengguna?</h2>

        <p>
            Apakah kamu yakin ingin menghapus akun pengguna ini?
            Tindakan ini tidak dapat dibatalkan.
        </p>

        <div class="modal-actions">
            <button type="button" class="btn cancel" id="cancelDelete">
                Batal
            </button>

            <button type="button" class="btn confirm" id="confirmDelete">
                Ya, Hapus
            </button>
        </div>
    </div>
</div>

<!-- POPUP BERHASIL -->

@if(session('success'))
    <div class="modal-overlay" id="successModal">
        <div class="modal-box success-modal-box"
             role="dialog"
             aria-modal="true"
             aria-labelledby="successTitle">

            <div class="success-modal-icon">✓</div>

            <h2 id="successTitle">Berhasil!</h2>

            <p>{{ session('success') }}</p>

            <button type="button" class="btn success-ok" id="closeSuccess">
                OK, Mengerti
            </button>
        </div>
    </div>
@endif

<script>
    // ANIMASI PARTIKEL

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
            this.size = Math.random() * 2.2 + .5;
            this.speed = Math.random() * .6 + .2;
            this.opacity = Math.random() * .6 + .2;
            this.drift = (Math.random() - .5) * .5;
        }

        update() {
            this.y -= this.speed;
            this.x += this.drift;

            if (this.y < -10) this.reset();
            if (this.x < -10) this.x = window.innerWidth + 10;
            if (this.x > window.innerWidth + 10) this.x = -10;
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

    if (!reduceMotion) animateParticles();

    window.addEventListener('resize', initParticles);


    // EFEK PETIR

    const lightningCanvas = document.getElementById('lightning');
    const lightningCtx = lightningCanvas.getContext('2d');

    function resizeLightning() {
        const dpr = Math.min(window.devicePixelRatio || 1, 2);

        lightningCanvas.width = window.innerWidth * dpr;
        lightningCanvas.height = window.innerHeight * dpr;

        lightningCanvas.style.width = window.innerWidth + 'px';
        lightningCanvas.style.height = window.innerHeight + 'px';

        lightningCtx.setTransform(dpr, 0, 0, dpr, 0, 0);
    }

    function drawLightning() {
        if (reduceMotion) return;

        lightningCtx.clearRect(0, 0, window.innerWidth, window.innerHeight);

        let x = Math.random() * window.innerWidth;
        let y = 0;

        const segments = 9 + Math.floor(Math.random() * 8);
        const segmentHeight = window.innerHeight / segments;

        lightningCtx.beginPath();
        lightningCtx.moveTo(x, y);

        for (let i = 0; i < segments; i++) {
            x += (Math.random() - .5) * 90;
            y += segmentHeight;
            lightningCtx.lineTo(x, y);
        }

        lightningCtx.strokeStyle = 'rgba(233,189,97,.8)';
        lightningCtx.lineWidth = 1.5;
        lightningCtx.shadowBlur = 15;
        lightningCtx.shadowColor = '#E9BD61';
        lightningCtx.stroke();
        lightningCtx.shadowBlur = 0;

        setTimeout(() => {
            lightningCtx.clearRect(0, 0, window.innerWidth, window.innerHeight);
        }, 180);
    }

    resizeLightning();

    if (!reduceMotion) {
        setInterval(() => {
            if (Math.random() > .55) drawLightning();
        }, 2200);
    }

    window.addEventListener('resize', resizeLightning);


    // REFERENSI MODAL

    const approveModal = document.getElementById('approveModal');
    const rejectModal = document.getElementById('rejectModal');
    const deleteModal = document.getElementById('deleteModal');
    const successModal = document.getElementById('successModal');

    // POPUP SETUJUI

    let selectedApproveForm = null;

    document.querySelectorAll('.approve-trigger').forEach(button => {
        button.addEventListener('click', function () {
            selectedApproveForm = this.closest('.approve-form');
            approveModal.classList.add('active');
            document.body.style.overflow = 'hidden';
        });
    });

    function closeApproveModal() {
        approveModal.classList.remove('active');
        selectedApproveForm = null;
        document.body.style.overflow = '';
    }

    document.getElementById('cancelApprove').addEventListener('click', closeApproveModal);

    document.getElementById('confirmApprove').addEventListener('click', function () {
        if (selectedApproveForm) selectedApproveForm.submit();
    });

    approveModal.addEventListener('click', function (event) {
        if (event.target === approveModal) closeApproveModal();
    });


    // POPUP TOLAK

    let selectedRejectForm = null;

    document.querySelectorAll('.reject-trigger').forEach(button => {
        button.addEventListener('click', function () {
            selectedRejectForm = this.closest('.reject-form');
            rejectModal.classList.add('active');
            document.body.style.overflow = 'hidden';
        });
    });

    function closeRejectModal() {
        rejectModal.classList.remove('active');
        selectedRejectForm = null;
        document.body.style.overflow = '';
    }

    document.getElementById('cancelReject').addEventListener('click', closeRejectModal);

    document.getElementById('confirmReject').addEventListener('click', function () {
        if (selectedRejectForm) selectedRejectForm.submit();
    });

    rejectModal.addEventListener('click', function (event) {
        if (event.target === rejectModal) closeRejectModal();
    });


    // POPUP HAPUS

    let selectedDeleteForm = null;

    document.querySelectorAll('.delete-trigger').forEach(button => {
        button.addEventListener('click', function () {
            selectedDeleteForm = this.closest('.delete-form');
            deleteModal.classList.add('active');
            document.body.style.overflow = 'hidden';
        });
    });

    function closeDeleteModal() {
        deleteModal.classList.remove('active');
        selectedDeleteForm = null;
        document.body.style.overflow = '';
    }

    document.getElementById('cancelDelete').addEventListener('click', closeDeleteModal);

    document.getElementById('confirmDelete').addEventListener('click', function () {
        if (selectedDeleteForm) selectedDeleteForm.submit();
    });

    deleteModal.addEventListener('click', function (event) {
        if (event.target === deleteModal) closeDeleteModal();
    });


    // POPUP BERHASIL

    function closeSuccessModal() {
        if (successModal) {
            successModal.classList.remove('active');
            document.body.style.overflow = '';
        }
    }

    if (successModal) {
        window.addEventListener('load', function () {
            setTimeout(function () {
                successModal.classList.add('active');
                document.body.style.overflow = 'hidden';
            }, 300);
        });

        document.getElementById('closeSuccess').addEventListener(
            'click',
            closeSuccessModal
        );

        successModal.addEventListener('click', function (event) {
            if (event.target === successModal) closeSuccessModal();
        });
    }


    // TOMBOL ESCAPE

    document.addEventListener('keydown', function (event) {
        if (event.key === 'Escape') {
            if (approveModal.classList.contains('active')) {
                closeApproveModal();
            } else if (rejectModal.classList.contains('active')) {
                closeRejectModal();
            } else if (successModal && successModal.classList.contains('active')) {
                closeSuccessModal();
            } else if (deleteModal.classList.contains('active')) {
                closeDeleteModal();
            }
        }
    });
</script>

</body>
</html>
