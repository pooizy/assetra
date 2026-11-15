
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>ASSETRA | BKPSDM Kota Pontianak</title>

<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<style>
:root {
    --emerald:#041F1B;
    --emerald2:#073D32;
    --emerald3:#10483D;
    --gold:#C99A35;
    --gold-light:#E9BD61;
    --gold-pale:#F5DDA6;
    --white:#FFFFFF;
    --text:#F5F1E8;
    --muted:#B5CFC1;
    --border:rgba(233,189,97,.25);
}

* {
    margin:0;
    padding:0;
    box-sizing:border-box;
}

html {
    scroll-behavior:smooth;
    min-height:100%;
}

body {
    min-height:100vh;
    font-family:'Plus Jakarta Sans',sans-serif;
    color:var(--text);
    background:
        radial-gradient(ellipse at 85% 5%,rgba(201,154,53,.22),transparent 35%),
        radial-gradient(ellipse at 10% 85%,rgba(23,107,89,.35),transparent 40%),
        linear-gradient(135deg,#041F1B,#073D32 48%,#062A25);
    overflow-x:hidden;
}

a {
    text-decoration:none;
    color:inherit;
}

button,input {
    font-family:inherit;
}

/* =================================
   ANIMASI UTAMA
================================= */

@keyframes fadeUp {
    from {opacity:0;transform:translateY(25px);}
    to {opacity:1;transform:translateY(0);}
}

@keyframes fadeIn {
    from {opacity:0;}
    to {opacity:1;}
}

@keyframes float {
    0%,100% {transform:translateY(0);}
    50% {transform:translateY(-9px);}
}

@keyframes shimmer {
    0% {background-position:-200% 0;}
    100% {background-position:200% 0;}
}

@keyframes rotateSlow {
    to {transform:rotate(360deg);}
}

@keyframes blink {
    50% {opacity:.35;}
}

@keyframes particleFloat {
    0% {
        transform:translateY(0) scale(.5);
        opacity:0;
    }
    15% {opacity:.65;}
    85% {opacity:.45;}
    100% {
        transform:translateY(-110vh) scale(1.3);
        opacity:0;
    }
}

@keyframes glowMove {
    from {transform:translate(0,0) scale(1);}
    to {transform:translate(45px,-35px) scale(1.2);}
}

@keyframes heroPulse {
    0%,100% {
        box-shadow:0 15px 40px rgba(0,0,0,.15);
    }
    50% {
        box-shadow:0 15px 45px rgba(233,189,97,.25);
    }
}

@keyframes tableReveal {
    from {
        opacity:0;
        transform:translateY(15px);
    }
    to {
        opacity:1;
        transform:translateY(0);
    }
}

/* BACKGROUND PARTICLES */

#particles {
    position:fixed;
    inset:0;
    overflow:hidden;
    pointer-events:none;
    z-index:5;
}

.particle {
    position:absolute;
    bottom:-20px;
    border-radius:50%;
    background:#E9BD61;
    opacity:0;
    box-shadow:0 0 12px rgba(233,189,97,.8);
    animation:particleFloat linear infinite;
}

.ambient-glow {
    position:fixed;
    width:350px;
    height:350px;
    border-radius:50%;
    filter:blur(90px);
    pointer-events:none;
    z-index:4;
    opacity:.10;
    animation:glowMove 12s ease-in-out infinite alternate;
}

.glow-one {
    top:10%;
    right:5%;
    background:#C99A35;
}

.glow-two {
    bottom:5%;
    left:15%;
    background:#00A982;
    animation-delay:3s;
}

/* =================================
   POP UP SELAMAT DATANG
================================= */

.welcome-overlay {
    position:fixed;
    inset:0;
    z-index:99999;
    display:flex;
    align-items:center;
    justify-content:center;
    padding:20px;
    background:rgba(0,15,12,.80);
    backdrop-filter:blur(10px);
    -webkit-backdrop-filter:blur(10px);
    animation:welcomeFadeIn .5s ease both;
}

.welcome-modal {
    position:relative;
    width:100%;
    max-width:460px;
    padding:38px 30px;
    overflow:hidden;
    text-align:center;
    border:1px solid rgba(233,189,97,.7);
    border-radius:25px;
    background:
        radial-gradient(circle at top right,rgba(201,154,53,.2),transparent 40%),
        linear-gradient(145deg,#10483D,#041F1B);
    box-shadow:
        0 25px 80px rgba(0,0,0,.5),
        0 0 35px rgba(233,189,97,.2);
    animation:welcomePop .65s cubic-bezier(.18,.89,.32,1.28) both;
}

.welcome-modal::before {
    content:"";
    position:absolute;
    width:230px;
    height:230px;
    top:-130px;
    right:-90px;
    border:1px solid rgba(233,189,97,.35);
    border-radius:50%;
    box-shadow:0 0 0 25px rgba(233,189,97,.05);
    pointer-events:none;
}

.welcome-modal::after {
    content:"";
    position:absolute;
    width:180px;
    height:180px;
    bottom:-120px;
    left:-80px;
    border-radius:50%;
    background:rgba(0,201,151,.12);
    filter:blur(20px);
    pointer-events:none;
}

.welcome-icon {
    position:relative;
    z-index:1;
    width:85px;
    height:85px;
    display:grid;
    place-items:center;
    margin:0 auto 20px;
    border:1px solid rgba(233,189,97,.65);
    border-radius:25px;
    background:linear-gradient(135deg,#C99A35,#E9BD61);
    color:#062F2A;
    font-size:40px;
    box-shadow:0 10px 30px rgba(201,154,53,.3);
    animation:welcomeFloat 3s ease-in-out infinite;
}

.welcome-label {
    position:relative;
    z-index:1;
    display:inline-block;
    padding:7px 13px;
    margin-bottom:14px;
    border:1px solid rgba(233,189,97,.4);
    border-radius:30px;
    background:rgba(201,154,53,.12);
    color:#F5DDA6;
    font-size:9px;
    font-weight:800;
    letter-spacing:1.8px;
}

.welcome-modal h2 {
    position:relative;
    z-index:1;
    color:#F5DDA6;
    font-size:25px;
    font-weight:800;
    line-height:1.4;
    margin-bottom:10px;
}

.welcome-modal h2 span {
    display:block;
    margin-top:5px;
    color:white;
}

.welcome-modal p {
    position:relative;
    z-index:1;
    color:#C5D8CF;
    font-size:12px;
    line-height:1.9;
    margin-bottom:23px;
}

.welcome-user {
    color:#F5DDA6;
    font-weight:800;
}

.welcome-button {
    position:relative;
    z-index:1;
    width:100%;
    padding:13px 20px;
    border:none;
    border-radius:12px;
    background:linear-gradient(110deg,#C99A35,#E9BD61);
    color:#062F2A;
    font-family:inherit;
    font-size:12px;
    font-weight:800;
    cursor:pointer;
    box-shadow:0 7px 20px rgba(201,154,53,.25);
    transition:.3s ease;
}

.welcome-button:hover {
    transform:translateY(-3px);
    background:#F5DDA6;
    box-shadow:0 10px 25px rgba(201,154,53,.35);
}

.welcome-particle {
    position:absolute;
    width:5px;
    height:5px;
    border-radius:50%;
    background:#E9BD61;
    box-shadow:0 0 12px #E9BD61;
    pointer-events:none;
    animation:welcomeSpark 3s ease-in-out infinite;
}

@keyframes welcomeFadeIn {
    from {opacity:0;}
    to {opacity:1;}
}

@keyframes welcomePop {
    from {
        opacity:0;
        transform:translateY(35px) scale(.85);
    }
    to {
        opacity:1;
        transform:translateY(0) scale(1);
    }
}

@keyframes welcomeFloat {
    0%,100% {transform:translateY(0) rotate(0);}
    50% {transform:translateY(-8px) rotate(4deg);}
}

@keyframes welcomeSpark {
    0%,100% {
        opacity:.15;
        transform:scale(.6);
    }
    50% {
        opacity:1;
        transform:scale(1.5);
    }
}

@keyframes welcomeClose {
    to {
        opacity:0;
        transform:translateY(20px) scale(.9);
    }
}

/* =================================
   POP UP KONFIRMASI LOGOUT
================================= */

.logout-overlay {
    position:fixed;
    inset:0;
    z-index:100000;
    display:flex;
    align-items:center;
    justify-content:center;
    padding:20px;
    background:rgba(0,15,12,.82);
    backdrop-filter:blur(10px);
    -webkit-backdrop-filter:blur(10px);
    opacity:0;
    visibility:hidden;
    pointer-events:none;
    transition:opacity .35s ease,visibility .35s ease;
}

.logout-overlay.active {
    opacity:1;
    visibility:visible;
    pointer-events:auto;
}

.logout-modal {
    position:relative;
    width:100%;
    max-width:420px;
    padding:36px 30px;
    overflow:hidden;
    text-align:center;
    border:1px solid rgba(233,189,97,.65);
    border-radius:25px;
    background:
        radial-gradient(circle at top right,rgba(201,154,53,.20),transparent 42%),
        linear-gradient(145deg,#10483D,#041F1B);
    box-shadow:
        0 25px 80px rgba(0,0,0,.55),
        0 0 35px rgba(233,189,97,.18);
    transform:translateY(35px) scale(.85);
    opacity:0;
    transition:
        transform .45s cubic-bezier(.18,.89,.32,1.28),
        opacity .35s ease;
}

.logout-overlay.active .logout-modal {
    transform:translateY(0) scale(1);
    opacity:1;
}

.logout-modal::before {
    content:"";
    position:absolute;
    width:220px;
    height:220px;
    top:-125px;
    right:-85px;
    border:1px solid rgba(233,189,97,.35);
    border-radius:50%;
    box-shadow:0 0 0 25px rgba(233,189,97,.045);
    pointer-events:none;
}

.logout-modal::after {
    content:"";
    position:absolute;
    width:180px;
    height:180px;
    bottom:-120px;
    left:-80px;
    border-radius:50%;
    background:rgba(0,201,151,.12);
    filter:blur(22px);
    pointer-events:none;
}

.logout-popup-icon {
    position:relative;
    z-index:1;
    width:82px;
    height:82px;
    display:grid;
    place-items:center;
    margin:0 auto 20px;
    border:1px solid rgba(233,189,97,.65);
    border-radius:25px;
    background:linear-gradient(135deg,#C99A35,#E9BD61);
    color:#062F2A;
    font-size:35px;
    box-shadow:0 10px 30px rgba(201,154,53,.3);
    animation:logoutIconFloat 3s ease-in-out infinite;
}

@keyframes logoutIconFloat {
    0%,100% {
        transform:translateY(0) rotate(0);
    }
    50% {
        transform:translateY(-7px) rotate(-4deg);
    }
}

.logout-label {
    position:relative;
    z-index:1;
    display:inline-block;
    padding:7px 13px;
    margin-bottom:14px;
    border:1px solid rgba(233,189,97,.4);
    border-radius:30px;
    background:rgba(201,154,53,.12);
    color:#F5DDA6;
    font-size:9px;
    font-weight:800;
    letter-spacing:1.5px;
}

.logout-modal h2 {
    position:relative;
    z-index:1;
    color:#F5DDA6;
    font-size:23px;
    font-weight:800;
    margin-bottom:12px;
}

.logout-modal p {
    position:relative;
    z-index:1;
    max-width:320px;
    margin:0 auto 25px;
    color:#C5D8CF;
    font-size:12px;
    line-height:1.9;
}

.logout-popup-actions {
    position:relative;
    z-index:1;
    display:flex;
    gap:12px;
}

.logout-popup-actions button {
    flex:1;
    min-height:46px;
    padding:12px 15px;
    border-radius:12px;
    font-family:inherit;
    font-size:11px;
    font-weight:800;
    cursor:pointer;
    transition:all .25s ease;
}

.logout-cancel {
    color:#F5DDA6;
    background:rgba(255,255,255,.07);
    border:1px solid rgba(233,189,97,.4);
}

.logout-cancel:hover {
    color:white;
    background:rgba(255,255,255,.14);
    border-color:#E9BD61;
    transform:translateY(-3px);
}

.logout-confirm {
    color:#062F2A;
    background:linear-gradient(110deg,#C99A35,#E9BD61);
    border:1px solid rgba(245,221,166,.5);
    box-shadow:0 7px 20px rgba(201,154,53,.2);
}

.logout-confirm:hover {
    background:#F5DDA6;
    transform:translateY(-3px);
    box-shadow:0 10px 25px rgba(201,154,53,.35);
}

.logout-confirm:disabled {
    opacity:.65;
    cursor:wait;
    transform:none;
}

.logout-popup-particle {
    position:absolute;
    width:5px;
    height:5px;
    border-radius:50%;
    background:#E9BD61;
    box-shadow:0 0 12px #E9BD61;
    pointer-events:none;
    animation:logoutSpark 3s ease-in-out infinite;
}

@keyframes logoutSpark {
    0%,100% {
        opacity:.15;
        transform:scale(.6) translateY(0);
    }
    50% {
        opacity:1;
        transform:scale(1.5) translateY(-8px);
    }
}

@keyframes logoutClose {
    to {
        opacity:0;
        transform:translateY(20px) scale(.9);
    }
}

@media(max-width:480px) {
    .logout-modal {
        padding:30px 22px;
    }

    .logout-modal h2 {
        font-size:21px;
    }

    .logout-popup-actions {
        flex-direction:column-reverse;
    }
}

/* SIDEBAR */

.sidebar {
    position:fixed;
    inset:0 auto 0 0;
    width:255px;
    padding:24px 17px;
    display:flex;
    flex-direction:column;
    overflow-y:auto;
    z-index:1000;
    color:white;
    background:
      radial-gradient(circle at top right,rgba(201,154,53,.22),transparent 35%),
      linear-gradient(160deg,#10483D,#041F1B 75%);
    border-right:1px solid rgba(233,189,97,.2);
    box-shadow:8px 0 35px rgba(0,0,0,.3);
    transition:width .35s ease,transform .35s ease;
}

.brand {
    display:flex;
    align-items:center;
    gap:12px;
    padding:5px 7px 25px;
    border-bottom:1px solid rgba(255,255,255,.15);
}

.logo {
    width:53px;
    height:53px;
    object-fit:contain;
    background:white;
    border-radius:14px;
    padding:5px;
    flex-shrink:0;
    box-shadow:0 5px 18px rgba(0,0,0,.2);
}

.brand-text h2 {
    font-size:21px;
    font-weight:800;
    letter-spacing:1.5px;
    color:#F4D78F;
}

.brand-text p {
    color:#C5D8CF;
    font-size:9px;
    line-height:1.6;
    margin-top:3px;
}

.menu-title {
    color:#A8C5B5;
    font-size:9px;
    font-weight:800;
    letter-spacing:2px;
    padding:26px 12px 12px;
}

.menu {
    display:flex;
    flex-direction:column;
    gap:7px;
}

.menu a {
    display:flex;
    align-items:center;
    gap:13px;
    padding:13px 14px;
    border:1px solid transparent;
    border-radius:12px;
    color:#D0E0D7;
    font-size:11px;
    font-weight:600;
    transition:all .25s ease;
}

.menu a:hover {
    color:#F6D995;
    background:rgba(201,154,53,.13);
    border-color:rgba(201,154,53,.25);
    transform:translateX(4px);
}

.menu a.active {
    color:#062F2A;
    border-color:#E9BD61;
    background:linear-gradient(110deg,#C99A35,#E9BD61);
    box-shadow:0 7px 22px rgba(201,154,53,.25);
}

.menu-icon {
    width:25px;
    min-width:25px;
    text-align:center;
    font-size:18px;
    line-height:1;
}

.menu-divider {
    height:1px;
    background:rgba(255,255,255,.12);
    margin:20px 5px;
}

.sidebar-bottom {
    margin-top:auto;
}

.sidebar-building {
    height:125px;
    border-radius:15px;
    overflow:hidden;
    position:relative;
    background:
      linear-gradient(to top,#041F1B 0%,rgba(6,47,42,.05) 100%),
      url('{{ asset("images/gedung-bkpsdm.png") }}') center/cover;
    border:1px solid rgba(201,154,53,.45);
    box-shadow:0 8px 22px rgba(0,0,0,.2);
}

.sidebar-footer {
    text-align:center;
    padding:14px 5px 4px;
}

.sidebar-footer h4 {
    font-size:11px;
    letter-spacing:1px;
    color:#F0D69C;
}

.sidebar-footer p {
    color:#A8C5B5;
    font-size:9px;
    margin-top:6px;
}

/* TOMBOL LOGOUT SIDEBAR */

.logout-form {
    margin-top:15px;
    padding:0 5px;
}

.logout-button {
    width:100%;
    display:flex;
    align-items:center;
    justify-content:center;
    gap:10px;
    padding:12px 15px;
    border:1px solid rgba(255,120,100,.4);
    border-radius:12px;
    background:linear-gradient(135deg,#7F2925,#A83D32);
    color:#fff;
    font-family:inherit;
    font-size:11px;
    font-weight:700;
    cursor:pointer;
    transition:all .3s ease;
    box-shadow:0 6px 18px rgba(0,0,0,.2);
}

.logout-button:hover {
    background:linear-gradient(135deg,#A83D32,#C65343);
    border-color:#F5A08E;
    transform:translateY(-3px);
    box-shadow:0 9px 22px rgba(168,61,50,.3);
}

.logout-icon {
    font-size:17px;
    line-height:1;
}

/* MAIN */

.main {
    margin-left:255px;
    min-height:100vh;
    padding:25px 30px;
    position:relative;
    isolation:isolate;
    background:
        radial-gradient(ellipse at 85% 5%,rgba(201,154,53,.19),transparent 30%),
        radial-gradient(ellipse at 0% 100%,rgba(22,133,104,.2),transparent 35%),
        linear-gradient(145deg,#041F1B,#073D32 50%,#062A25);
    transition:margin-left .35s ease;
}

.main::before {
    content:"";
    position:absolute;
    top:0;
    right:0;
    width:380px;
    height:380px;
    border-radius:50%;
    background:radial-gradient(circle,rgba(201,154,53,.12),transparent 70%);
    pointer-events:none;
    z-index:-1;
}

/* TOPBAR */

.topbar {
    display:flex;
    justify-content:space-between;
    align-items:center;
    gap:15px;
    margin-bottom:25px;
    padding:8px;
    border-radius:18px;
    background:rgba(12,65,54,.82);
    border:1px solid rgba(233,189,97,.28);
    backdrop-filter:blur(14px);
    animation:fadeIn .7s ease both;
}

.topbar-left,.topbar-right {
    display:flex;
    align-items:center;
    gap:15px;
}

.menu-toggle {
    width:42px;
    height:42px;
    border:0;
    border-radius:12px;
    background:linear-gradient(135deg,#C99A35,#E9BD61);
    color:#062F2A;
    font-size:19px;
    cursor:pointer;
    box-shadow:0 6px 15px rgba(0,0,0,.2);
    transition:.25s;
}

.menu-toggle:hover {
    transform:translateY(-2px);
    box-shadow:0 8px 20px rgba(201,154,53,.3);
}

.search-box {
    width:300px;
    height:42px;
    display:flex;
    align-items:center;
    gap:10px;
    padding:0 15px;
    background:#0B382F;
    border:1px solid rgba(233,189,97,.35);
    border-radius:12px;
    transition:.25s;
}

.search-box:focus-within {
    border-color:var(--gold);
    box-shadow:0 0 0 4px rgba(201,154,53,.15);
}

.search-box span {
    font-size:19px;
    color:#E9BD61;
}

.search-box input {
    width:100%;
    border:0;
    outline:0;
    font-size:11px;
    color:white;
    background:transparent;
}

.search-box input::placeholder {
    color:#A9C4B7;
}

.topbar-date {
    color:#F0D69C;
    font-size:10px;
    font-weight:700;
}

.profile {
    display:flex;
    align-items:center;
    gap:10px;
    padding:5px 12px 5px 5px;
    background:#10483D;
    border:1px solid rgba(233,189,97,.4);
    border-radius:30px;
}

.profile-avatar {
    width:36px;
    height:36px;
    display:grid;
    place-items:center;
    border-radius:50%;
    color:#062F2A;
    font-size:14px;
    font-weight:800;
    background:linear-gradient(135deg,#E9BD61,#F6E4B9);
}

.profile-info h4 {
    font-size:10px;
    color:white;
}

.profile-info p {
    color:#C5D8CF;
    font-size:9px;
    margin-top:3px;
}

/* HERO */

.hero {
    min-height:255px;
    padding:35px 38px;
    position:relative;
    overflow:hidden;
    isolation:isolate;
    display:flex;
    align-items:center;
    justify-content:space-between;
    border-radius:24px;
    color:white;
    margin-bottom:28px;
    border:1px solid rgba(201,154,53,.55);
    background:
      linear-gradient(100deg,
        rgba(4,31,27,.98) 0%,
        rgba(16,72,61,.89) 48%,
        rgba(6,47,42,.28) 100%),
      url('{{ asset("images/gedung-bkpsdm.png") }}') center 43%/cover;
    box-shadow:0 20px 48px rgba(0,0,0,.3);
    animation:fadeUp .8s ease both;
}

.hero::before {
    content:"";
    position:absolute;
    z-index:-1;
    width:330px;
    height:330px;
    border:1px solid rgba(233,189,97,.35);
    border-radius:50%;
    right:8%;
    top:-170px;
    box-shadow:
      0 0 0 35px rgba(233,189,97,.06),
      0 0 0 70px rgba(233,189,97,.035);
    animation:rotateSlow 50s linear infinite;
}

.hero::after {
    content:"";
    position:absolute;
    inset:0;
    z-index:-1;
    pointer-events:none;
    background:linear-gradient(120deg,transparent 35%,rgba(255,255,255,.08),transparent 70%);
    background-size:200% 100%;
    animation:shimmer 8s linear infinite;
}

.hero-content {
    position:relative;
    z-index:2;
    max-width:600px;
}

.hero-label {
    display:inline-flex;
    align-items:center;
    gap:8px;
    padding:7px 12px;
    border:1px solid rgba(233,189,97,.45);
    border-radius:30px;
    background:rgba(201,154,53,.13);
    color:#F5DDA6;
    font-size:9px;
    font-weight:700;
    letter-spacing:1.5px;
    margin-bottom:16px;
}

.hero-label::before {
    content:"";
    width:7px;
    height:7px;
    border-radius:50%;
    background:var(--gold-light);
    box-shadow:0 0 12px var(--gold-light);
    animation:blink 1.8s infinite;
}

.hero h1 {
    font-size:clamp(25px,3vw,39px);
    line-height:1.2;
    font-weight:800;
    letter-spacing:-.8px;
}

.hero h1 span {
    display:block;
    color:var(--gold-light);
    text-shadow:0 5px 20px rgba(233,189,97,.2);
}

.hero p {
    margin-top:12px;
    color:#D5E8DC;
    font-size:11px;
    line-height:1.8;
}

.hero-line {
    width:75px;
    height:4px;
    border-radius:10px;
    margin-top:20px;
    background:linear-gradient(90deg,var(--gold),#F6E3B1);
}

.hero-decoration {
    position:relative;
    z-index:2;
    margin-right:30px;
    width:108px;
    height:108px;
    display:grid;
    place-items:center;
    border-radius:30px;
    color:var(--gold-light);
    font-size:48px;
    border:1px solid rgba(233,189,97,.45);
    background:rgba(6,47,42,.35);
    backdrop-filter:blur(8px);
    box-shadow:0 15px 40px rgba(0,0,0,.15);
    animation:float 4s ease-in-out infinite,heroPulse 3s ease-in-out infinite;
}

/* SECTION */

.section-heading {
    display:flex;
    align-items:center;
    justify-content:space-between;
    margin-bottom:14px;
}

.section-heading h2 {
    font-size:15px;
    font-weight:800;
    color:#F3D58F;
}

.section-heading p {
    color:#B5CFC1;
    font-size:10px;
    margin-top:4px;
}

/* STATISTICS */

.stats {
    display:grid;
    grid-template-columns:repeat(5,minmax(0,1fr));
    gap:15px;
    margin-bottom:29px;
}

.stat-card {
    min-height:132px;
    padding:18px;
    position:relative;
    overflow:hidden;
    border-radius:18px;
    color:white;
    background:linear-gradient(145deg,#10483D,#082F28);
    border:1px solid rgba(233,189,97,.35);
    border-top:4px solid var(--gold);
    box-shadow:0 12px 28px rgba(0,0,0,.25);
    transition:transform .3s,box-shadow .3s;
    animation:fadeUp .7s ease both;
    will-change:transform;
}

.stat-card:nth-child(1) {animation-delay:.08s;}
.stat-card:nth-child(2) {animation-delay:.16s;}
.stat-card:nth-child(3) {animation-delay:.24s;}
.stat-card:nth-child(4) {animation-delay:.32s;}
.stat-card:nth-child(5) {animation-delay:.40s;}

.stat-card:hover {
    transform:translateY(-9px) scale(1.015);
    box-shadow:0 19px 35px rgba(0,0,0,.35);
}

.stat-card::after {
    content:"";
    position:absolute;
    width:115px;
    height:115px;
    border-radius:50%;
    right:-30px;
    top:-40px;
    background:rgba(233,189,97,.12);
    transition:transform .4s;
}

.stat-card:hover::after {
    transform:scale(1.35);
}

.stat-top {
    display:flex;
    align-items:center;
    justify-content:space-between;
    position:relative;
    z-index:2;
}

.stat-icon {
    width:42px;
    height:42px;
    display:grid;
    place-items:center;
    border-radius:12px;
    background:linear-gradient(135deg,#C99A35,#E9BD61);
    color:#062F2A;
    font-size:21px;
    transition:transform .3s;
}

.stat-card:hover .stat-icon {
    transform:rotate(-9deg) scale(1.12);
}

.stat-tag {
    font-size:8px;
    padding:5px 8px;
    border-radius:20px;
    color:#F5DDA6;
    background:rgba(233,189,97,.16);
}

.stat-data {
    position:relative;
    z-index:2;
    margin-top:13px;
}

.stat-data h3 {
    font-size:25px;
    font-weight:800;
    color:#F4D78F;
    letter-spacing:-.5px;
    font-variant-numeric:tabular-nums;
}

.stat-data p {
    font-size:10px;
    color:#C1D4C9;
    margin-top:3px;
}

/* PANELS */

.charts {
    display:grid;
    grid-template-columns:1fr 1.5fr;
    gap:17px;
    margin-bottom:23px;
}

.panel {
    min-width:0;
    padding:21px;
    border:1px solid rgba(233,189,97,.3);
    border-radius:19px;
    background:linear-gradient(145deg,#10483D,#082F28);
    box-shadow:0 15px 35px rgba(0,0,0,.25);
    transition:transform .3s,box-shadow .3s;
    animation:fadeUp .8s ease both;
    position:relative;
    overflow:hidden;
    will-change:transform;
}

.panel::before {
    content:"";
    position:absolute;
    top:0;
    left:-120%;
    width:70%;
    height:100%;
    pointer-events:none;
    background:linear-gradient(
        100deg,
        transparent,
        rgba(233,189,97,.07),
        transparent
    );
    transition:left .8s ease;
}

.panel:hover::before {
    left:130%;
}

.panel:hover {
    box-shadow:0 18px 38px rgba(0,0,0,.35);
    transform:translateY(-3px);
}

.panel-header {
    display:flex;
    justify-content:space-between;
    align-items:center;
    gap:10px;
    margin-bottom:20px;
    position:relative;
    z-index:1;
}

.panel-title {
    display:flex;
    align-items:center;
    gap:10px;
}

.panel-icon {
    width:38px;
    height:38px;
    display:grid;
    place-items:center;
    color:#062F2A;
    background:linear-gradient(135deg,#C99A35,#E9BD61);
    border-radius:11px;
    font-size:20px;
}

.panel-title h3 {
    font-size:12px;
    font-weight:800;
    color:#F5DDA6;
}

.panel-title p {
    color:#B5CFC1;
    font-size:9px;
    margin-top:4px;
}

.panel-badge {
    padding:7px 10px;
    border-radius:20px;
    background:rgba(233,189,97,.17);
    color:#F5DDA6;
    font-size:9px;
    font-weight:700;
}

.donut-layout {
    min-height:215px;
    display:flex;
    align-items:center;
    justify-content:space-around;
    gap:12px;
    position:relative;
    z-index:1;
}

.donut-chart {
    width:55%;
    height:205px;
    position:relative;
}

.legend {
    width:45%;
    display:flex;
    flex-direction:column;
    gap:15px;
}

.legend-item {
    display:flex;
    align-items:center;
    gap:8px;
    font-size:9px;
    color:#D0E0D7;
}

.legend-dot {
    width:10px;
    height:10px;
    border-radius:4px;
    flex-shrink:0;
}

.legend-item strong {
    margin-left:auto;
    color:#F5DDA6;
}

.chart-area {
    height:215px;
    position:relative;
    z-index:1;
}

/* TABLE */

.bottom-grid {
    display:grid;
    grid-template-columns:minmax(0,3fr) minmax(220px,.95fr);
    gap:17px;
}

.table-header {
    display:flex;
    align-items:center;
    justify-content:space-between;
    gap:10px;
    margin-bottom:18px;
    position:relative;
    z-index:1;
}

.see-all {
    padding:9px 13px;
    border-radius:9px;
    color:#062F2A;
    background:linear-gradient(135deg,#C99A35,#E9BD61);
    font-size:9px;
    font-weight:800;
    transition:.2s;
}

.see-all:hover {
    background:#F5DDA6;
    transform:translateY(-2px);
}

.table-wrap {
    width:100%;
    overflow-x:auto;
    position:relative;
    z-index:1;
}

table {
    width:100%;
    border-collapse:collapse;
    white-space:nowrap;
}

thead {
    background:#062A25;
}

th {
    padding:13px 11px;
    color:#F5DDA6;
    text-align:left;
    font-size:9px;
    font-weight:800;
}

td {
    padding:14px 11px;
    border-bottom:1px solid rgba(255,255,255,.10);
    color:#D0E0D7;
    font-size:9px;
}

tbody tr {
    transition:background .2s;
    opacity:0;
    animation:tableReveal .65s ease forwards;
}

tbody tr:nth-child(1) {animation-delay:.08s;}
tbody tr:nth-child(2) {animation-delay:.16s;}
tbody tr:nth-child(3) {animation-delay:.24s;}
tbody tr:nth-child(4) {animation-delay:.32s;}
tbody tr:nth-child(5) {animation-delay:.40s;}
tbody tr:nth-child(6) {animation-delay:.48s;}

tbody tr:hover {
    background:rgba(233,189,97,.10);
}

.asset-name {
    color:#F5DDA6;
    font-weight:800;
}

.condition {
    display:inline-block;
    padding:6px 10px;
    border-radius:20px;
    color:#F5DDA6;
    background:rgba(201,154,53,.15);
    border:1px solid rgba(233,189,97,.3);
    font-size:8px;
    font-weight:800;
}

.status {
    color:#8CE0B7;
    font-weight:800;
}

.status::before {
    content:"";
    display:inline-block;
    width:7px;
    height:7px;
    border-radius:50%;
    background:#00C897;
    margin-right:6px;
}

.empty-data {
    text-align:center;
    padding:30px;
    color:#B5CFC1;
}

/* SYSTEM INFORMATION */

.system-panel {
    padding:0;
    overflow:hidden;
}

.system-header {
    padding:20px;
    color:white;
    background:
      radial-gradient(circle at right top,rgba(201,154,53,.3),transparent 45%),
      linear-gradient(130deg,#062F2A,#176B59);
}

.system-header h3 {
    font-size:13px;
}

.system-header p {
    margin-top:5px;
    color:#C6DCCF;
    font-size:9px;
}

.system-body {
    padding:20px;
}

.system-date {
    color:#D0E0D7;
    font-size:10px;
    line-height:2;
    padding-bottom:17px;
    border-bottom:1px solid rgba(255,255,255,.15);
    font-variant-numeric:tabular-nums;
}

.system-success {
    display:flex;
    align-items:center;
    gap:12px;
    margin-top:17px;
    padding:14px;
    border:1px solid rgba(77,201,150,.35);
    border-radius:13px;
    background:rgba(22,133,104,.18);
}

.success-icon {
    width:35px;
    height:35px;
    flex-shrink:0;
    display:grid;
    place-items:center;
    border-radius:50%;
    color:#062F2A;
    background:#8CE0B7;
    font-size:16px;
}

.system-success strong {
    color:#8CE0B7;
    font-size:10px;
}

.system-success p {
    color:#C1D4C9;
    font-size:9px;
    margin-top:4px;
}

.system-footer {
    height:95px;
    background:
      linear-gradient(to top,rgba(6,47,42,.55),transparent),
      url('{{ asset("images/gedung-bkpsdm.png") }}') center 60%/cover;
}

.page-footer {
    text-align:center;
    color:#B5CFC1;
    font-size:9px;
    padding:25px 0 5px;
    position:relative;
    z-index:1;
}

/* SIDEBAR COLLAPSE */

body.sidebar-collapsed .sidebar {
    width:85px;
    padding-left:12px;
    padding-right:12px;
}

body.sidebar-collapsed .main {
    margin-left:85px;
}

body.sidebar-collapsed .brand {
    justify-content:center;
    padding-left:0;
    padding-right:0;
}

body.sidebar-collapsed .brand-text,
body.sidebar-collapsed .menu-title,
body.sidebar-collapsed .menu a span:not(.menu-icon),
body.sidebar-collapsed .sidebar-bottom,
body.sidebar-collapsed .menu-divider {
    display:none;
}

body.sidebar-collapsed .menu a {
    justify-content:center;
    padding:14px 5px;
}

body.sidebar-collapsed .menu-icon {
    font-size:20px;
}

/* LOGOUT SAAT SIDEBAR CIUT */

body.sidebar-collapsed .logout-form {
    padding:0;
}

body.sidebar-collapsed .logout-button {
    padding:12px 5px;
}

body.sidebar-collapsed .logout-text {
    display:none;
}

/* RESPONSIVE */

@media(max-width:1250px) {
    .stats {
        grid-template-columns:repeat(3,minmax(0,1fr));
    }

    .main {
        padding:22px;
    }
}

@media(max-width:1000px) {
    .charts {
        grid-template-columns:1fr;
    }

    .bottom-grid {
        grid-template-columns:1fr;
    }
}

@media(max-width:850px) {
    .sidebar {
        width:85px;
        padding:15px 12px;
    }

    .brand {
        justify-content:center;
        padding-left:0;
        padding-right:0;
    }

    .brand-text,
    .menu-title,
    .menu a span:not(.menu-icon),
    .sidebar-bottom,
    .menu-divider {
        display:none;
    }

    .menu a {
        justify-content:center;
        padding:14px 5px;
    }

    .main {
        margin-left:85px;
        padding:18px;
    }

    .topbar-date {
        display:none;
    }
}

@media(max-width:600px) {
    .main {
        margin-left:0;
        padding:14px;
    }

    .sidebar {
        width:255px;
        transform:translateX(-100%);
    }

    body.mobile-menu-open .sidebar {
        transform:translateX(0);
    }

    body.sidebar-collapsed .sidebar {
        width:255px;
    }

    body.sidebar-collapsed .brand-text,
    body.sidebar-collapsed .menu-title,
    body.sidebar-collapsed .menu a span:not(.menu-icon),
    body.sidebar-collapsed .sidebar-bottom,
    body.sidebar-collapsed .menu-divider {
        display:block;
    }

    body.sidebar-collapsed .brand {
        justify-content:flex-start;
    }

    body.sidebar-collapsed .menu a {
        justify-content:flex-start;
    }

    body.sidebar-collapsed .logout-form {
        padding:0 5px;
    }

    body.sidebar-collapsed .logout-button {
        padding:12px 15px;
    }

    body.sidebar-collapsed .logout-text {
        display:inline;
    }

    .search-box {
        width:175px;
    }

    .profile-info {
        display:none;
    }

    .profile {
        padding-right:5px;
    }

    .hero {
        min-height:205px;
        padding:25px 22px;
    }

    .hero-decoration {
        display:none;
    }

    .hero h1 {
        font-size:25px;
    }

    .stats {
        grid-template-columns:repeat(2,minmax(0,1fr));
        gap:10px;
    }

    .stat-card {
        min-height:115px;
        padding:13px;
    }

    .stat-data h3 {
        font-size:22px;
    }

    .panel {
        padding:15px;
    }

    .system-panel {
        padding:0;
    }

    .donut-layout {
        flex-direction:column;
    }

    .donut-chart,
    .legend {
        width:100%;
    }

    .donut-chart {
        height:190px;
    }

    .legend {
        display:grid;
        grid-template-columns:1fr 1fr;
    }

    .table-header {
        align-items:flex-start;
    }
}

@media(max-width:480px) {
    .welcome-modal {
        padding:30px 22px;
    }

    .welcome-modal h2 {
        font-size:21px;
    }
}

@media(max-width:380px) {
    .stats {
        grid-template-columns:1fr;
    }

    .search-box {
        width:135px;
    }

    .topbar-left,
    .topbar-right {
        gap:8px;
    }
}

@media(prefers-reduced-motion:reduce) {
    *,
    *::before,
    *::after {
        animation-duration:.01ms!important;
        animation-iteration-count:1!important;
        transition-duration:.01ms!important;
        scroll-behavior:auto!important;
    }
}

/* SCROLLBAR */

::-webkit-scrollbar {
    width:8px;
    height:8px;
}

::-webkit-scrollbar-track {
    background:#041F1B;
}

::-webkit-scrollbar-thumb {
    background:linear-gradient(#C99A35,#176B59);
    border-radius:20px;
}
</style>
</head>

<body>

<!-- POP UP SELAMAT DATANG -->
@if(session('welcome_popup'))
<div class="welcome-overlay" id="welcomeOverlay">
    <div class="welcome-modal" id="welcomeModal">

        <span class="welcome-particle" style="top:15%;left:12%;"></span>
        <span class="welcome-particle" style="top:25%;right:14%;animation-delay:.5s;"></span>
        <span class="welcome-particle" style="bottom:25%;left:18%;animation-delay:1s;"></span>
        <span class="welcome-particle" style="bottom:18%;right:15%;animation-delay:1.5s;"></span>

        <div class="welcome-icon">🏛️</div>

        <div class="welcome-label">
            ASSET MANAGEMENT SYSTEM
        </div>

        <h2>
            Selamat Datang!
            <span>di ASSETRA BKPSDM</span>
        </h2>

        <p>
            Halo,
            <span class="welcome-user">{{ auth()->user()->name }}</span>!
            <br>
            Selamat datang di Aplikasi Sistem Informasi
            Pengelolaan Aset Daerah BKPSDM Kota Pontianak.
            <br>
            Semoga aktivitas Anda berjalan lancar.
        </p>

        <button type="button"
                class="welcome-button"
                id="welcomeClose">
            Mulai Menggunakan Aplikasi
        </button>

    </div>
</div>
@endif

<!-- POP UP KONFIRMASI LOGOUT -->

<div class="logout-overlay" id="logoutPopup" aria-hidden="true">
    <div class="logout-modal" id="logoutModal">

        <span class="logout-popup-particle" style="top:15%;left:12%;"></span>
        <span class="logout-popup-particle" style="top:25%;right:14%;animation-delay:.5s;"></span>
        <span class="logout-popup-particle" style="bottom:25%;left:18%;animation-delay:1s;"></span>
        <span class="logout-popup-particle" style="bottom:18%;right:15%;animation-delay:1.5s;"></span>

        <div class="logout-popup-icon">🚪</div>

        <div class="logout-label">
            ASSET MANAGEMENT SYSTEM
        </div>

        <h2>Konfirmasi Logout</h2>

        <p>
            Apakah Anda yakin ingin keluar dari sistem ASSETRA?
            <br>
            Pastikan pekerjaan Anda sudah selesai sebelum meninggalkan aplikasi.
        </p>

        <div class="logout-popup-actions">

            <button type="button"
                    class="logout-cancel"
                    id="cancelLogout">
                ✕ &nbsp; Batal
            </button>

            <button type="button"
                    class="logout-confirm"
                    id="confirmLogout">
                 &nbsp; Ya, Logout
            </button>

        </div>

    </div>
</div>

<!-- BACKGROUND ANIMATION -->

<div id="particles" aria-hidden="true"></div>
<div class="ambient-glow glow-one" aria-hidden="true"></div>
<div class="ambient-glow glow-two" aria-hidden="true"></div>

<!-- SIDEBAR -->

<aside class="sidebar">

    <div class="brand">
        <img src="{{ asset('images/logo-bkpsdm.png') }}"
             class="logo"
             alt="Logo BKPSDM">

        <div class="brand-text">
            <h2>ASSETRA</h2>
            <p>SISTEM INFORMASI<br>PENGELOLAAN ASET</p>
        </div>
    </div>

    <div class="menu-title">MAIN MENU</div>

    <nav class="menu">

        <a href="{{ route('dashboard') }}" class="active">
            <span class="menu-icon">🏠</span>
            <span>Dashboard</span>
        </a>

        <a href="{{ route('assets.index') }}">
            <span class="menu-icon">📦</span>
            <span>Data Aset</span>
        </a>

        @if(in_array(auth()->user()->peran, ['admin', 'petugas']))
            <a href="{{ route('categories.index') }}">
                <span class="menu-icon">🗂️</span>
                <span>Kategori Aset</span>
            </a>

            <a href="{{ route('rooms.index') }}">
                <span class="menu-icon">🏢</span>
                <span>Data Ruangan</span>
            </a>

            <a href="{{ route('employees.index') }}">
                <span class="menu-icon">👥</span>
                <span>Data Pegawai</span>
            </a>

            <a href="{{ route('mutations.index') }}">
                <span class="menu-icon">🔄</span>
                <span>Mutasi Aset</span>
            </a>

            <a href="{{ route('reports.index') }}">
                <span class="menu-icon">📊</span>
                <span>Laporan</span>
            </a>
        @endif

        @if(auth()->user()->peran === 'admin')
            <a href="{{ route('users.index') }}">
                <span class="menu-icon">⚙️</span>
                <span>Pengaturan</span>
            </a>
        @endif

    </nav>

    <div class="menu-divider"></div>

    <div class="sidebar-bottom">
        <div class="sidebar-building"></div>

        <div class="sidebar-footer">
            <h4>BKPSDM KOTA PONTIANAK</h4>
            <p>Melayani dengan Profesional</p>
        </div>
    </div>

    <!-- FORM LOGOUT -->

    <form action="{{ route('logout') }}"
          method="POST"
          class="logout-form"
          id="logoutForm">
        @csrf

        <button type="button"
                class="logout-button"
                id="logoutButton">
            <span class="logout-icon"></span>
            <span class="logout-text">Logout</span>
        </button>
    </form>

</aside>

<!-- MAIN CONTENT -->

<main class="main">

    <!-- TOPBAR -->

    <header class="topbar">

        <div class="topbar-left">

            <button class="menu-toggle"
                    id="menuToggle"
                    type="button"
                    aria-label="Buka menu">
                ☰
            </button>

        </div>

        <div class="topbar-right">

            <div class="topbar-date">
                {{ \Carbon\Carbon::now()->locale('id')->translatedFormat('l, d F Y') }}
            </div>

            <div class="profile">

                <div class="profile-avatar">
                    {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
                </div>

                <div class="profile-info">
                    <h4>{{ auth()->user()->name }}</h4>
                    <p>{{ ucfirst(auth()->user()->peran) }}</p>
                </div>

            </div>

        </div>

    </header>

    <!-- HERO BANNER -->

    <section class="hero">

        <div class="hero-content">

            <div class="hero-label">
                ASSET MANAGEMENT SYSTEM
            </div>

            <h1>
                Selamat Datang di
                <span>ASSETRA BKPSDM</span>
            </h1>

            <p>
                Sistem Informasi Pengelolaan Aset Daerah
                <br>
                BKPSDM Kota Pontianak
            </p>

            <div class="hero-line"></div>

        </div>

        <div class="hero-decoration">🏛️</div>

    </section>

    <!-- STATISTIK -->

    <div class="section-heading">
        <div>
            <h2>📊 Ringkasan Dashboard</h2>
            <p>Informasi keseluruhan pengelolaan aset</p>
        </div>
    </div>

    <section class="stats">

        <div class="stat-card">
            <div class="stat-top">
                <div class="stat-icon">📦</div>
                <span class="stat-tag">ASET</span>
            </div>
            <div class="stat-data">
                <h3 class="count-up" data-target="{{ $totalAset }}">0</h3>
                <p>Total Aset</p>
            </div>
        </div>

        <div class="stat-card">
            <div class="stat-top">
                <div class="stat-icon">🗂️</div>
                <span class="stat-tag">DATA</span>
            </div>
            <div class="stat-data">
                <h3 class="count-up" data-target="{{ $totalKategori }}">0</h3>
                <p>Kategori Aset</p>
            </div>
        </div>

        <div class="stat-card">
            <div class="stat-top">
                <div class="stat-icon">🏢</div>
                <span class="stat-tag">LOKASI</span>
            </div>
            <div class="stat-data">
                <h3 class="count-up" data-target="{{ $totalRuangan }}">0</h3>
                <p>Total Ruangan</p>
            </div>
        </div>

        <div class="stat-card">
            <div class="stat-top">
                <div class="stat-icon">👥</div>
                <span class="stat-tag">PEGAWAI</span>
            </div>
            <div class="stat-data">
                <h3 class="count-up" data-target="{{ $totalPegawai }}">0</h3>
                <p>Total Pegawai</p>
            </div>
        </div>

        <div class="stat-card">
            <div class="stat-top">
                <div class="stat-icon">🔄</div>
                <span class="stat-tag">AKTIVITAS</span>
            </div>
            <div class="stat-data">
                <h3 class="count-up" data-target="{{ $totalMutasi }}">0</h3>
                <p>Total Mutasi</p>
            </div>
        </div>

    </section>

    <!-- ANALISIS DATA -->

    <div class="section-heading">
        <div>
            <h2>📈 Analisis Data Aset</h2>
            <p>Visualisasi kondisi dan kategori aset</p>
        </div>
    </div>

    <section class="charts">

        <!-- DONUT CHART -->

        <div class="panel">

            <div class="panel-header">

                <div class="panel-title">
                    <div class="panel-icon">📦</div>
                    <div>
                        <h3>Kondisi Aset</h3>
                        <p>Distribusi berdasarkan kondisi</p>
                    </div>
                </div>

                <span class="panel-badge">Overview</span>

            </div>

            <div class="donut-layout">

                <div class="donut-chart">
                    <canvas id="conditionChart"></canvas>
                </div>

                <div class="legend" id="conditionLegend"></div>

            </div>

        </div>

        <!-- BAR CHART -->

        <div class="panel">

            <div class="panel-header">

                <div class="panel-title">
                    <div class="panel-icon">📊</div>
                    <div>
                        <h3>Kategori Aset Terbanyak</h3>
                        <p>Jumlah aset berdasarkan kategori</p>
                    </div>
                </div>

                <span class="panel-badge">Statistik</span>

            </div>

            <div class="chart-area">
                <canvas id="categoryChart"></canvas>
            </div>

        </div>

    </section>

    <!-- DATA TERBARU DAN INFORMASI SISTEM -->

    <section class="bottom-grid">

        <div class="panel">

            <div class="table-header">

                <div class="panel-title">
                    <div class="panel-icon">📋</div>
                    <div>
                        <h3>Data Aset Terbaru</h3>
                        <p>Daftar aset yang terakhir ditambahkan</p>
                    </div>
                </div>

                <a href="{{ route('assets.index') }}" class="see-all">
                    Lihat Semua
                </a>

            </div>

            <div class="table-wrap">

                <table>

                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>NAMA ASET</th>
                            <th>KATEGORI</th>
                            <th>RUANGAN</th>
                            <th>TANGGAL</th>
                            <th>KONDISI</th>
                            <th>STATUS</th>
                        </tr>
                    </thead>

                    <tbody>

                    @forelse($asetTerbaru as $index => $asset)

                        <tr>

                            <td>{{ $index + 1 }}</td>

                            <td class="asset-name">
                                {{ $asset->nama_aset }}
                            </td>

                            <td>
                                @php
                                    $namaKategori = $asset->category
                                        ? (
                                            $asset->category->getAttribute('nama_kategori')
                                            ?? $asset->category->getAttribute('nama')
                                            ?? $asset->category->getAttribute('name')
                                            ?? '-'
                                        )
                                        : '-';
                                @endphp

                                {{ $namaKategori }}
                            </td>

                            <td>
                                @php
                                    $namaRuangan = $asset->room
                                        ? (
                                            $asset->room->getAttribute('nama_ruangan')
                                            ?? $asset->room->getAttribute('nama')
                                            ?? $asset->room->getAttribute('name')
                                            ?? '-'
                                        )
                                        : '-';
                                @endphp

                                {{ $namaRuangan }}
                            </td>

                            <td>
                                {{ $asset->tanggal_perolehan
                                    ? \Carbon\Carbon::parse($asset->tanggal_perolehan)->format('d-m-Y')
                                    : '-' }}
                            </td>

                            <td>
                                <span class="condition">
                                    {{ $asset->kondisi }}
                                </span>
                            </td>

                            <td>
                                <span class="status">Terdata</span>
                            </td>

                        </tr>

                    @empty

                        <tr>
                            <td colspan="7" class="empty-data">
                                📭 Belum ada data aset yang tersedia.
                            </td>
                        </tr>

                    @endforelse

                    </tbody>

                </table>

            </div>

        </div>

        <!-- INFORMASI SISTEM -->

        <div class="panel system-panel">

            <div class="system-header">
                <h3>💻 Informasi Sistem</h3>
                <p>Informasi operasional ASSETRA</p>
            </div>

            <div class="system-body">

                <div class="system-date">

                    📅 &nbsp;
                    <span id="tanggal-sekarang"></span>

                    <br>

                    🕒 &nbsp;
                    <span id="jam-sekarang"></span> WIB

                </div>

                <div class="system-success">

                    <div class="success-icon">✓</div>

                    <div>
                        <strong>Sistem Berjalan</strong>
                        <p>Seluruh layanan tersedia</p>
                    </div>

                </div>

            </div>

            <div class="system-footer"></div>

        </div>

    </section>

    <!-- FOOTER -->

    <footer class="page-footer">
        ✨ © {{ date('Y') }} ASSETRA BKPSDM Kota Pontianak.
        All Rights Reserved.
    </footer>

</main>

<!-- JAVASCRIPT -->

<script>

/* =================================
   POP UP SELAMAT DATANG
================================= */

const welcomeOverlay = document.getElementById('welcomeOverlay');
const welcomeModal = document.getElementById('welcomeModal');
const welcomeClose = document.getElementById('welcomeClose');

function closeWelcomePopup() {
    if (!welcomeOverlay || !welcomeModal) return;

    welcomeModal.style.animation =
        'welcomeClose .35s ease forwards';

    welcomeOverlay.style.transition = 'opacity .35s ease';
    welcomeOverlay.style.opacity = '0';

    setTimeout(() => {
        welcomeOverlay.remove();
    }, 350);
}

if (welcomeClose) {
    welcomeClose.addEventListener('click', closeWelcomePopup);
}

if (welcomeOverlay) {
    welcomeOverlay.addEventListener('click', function(event) {
        if (event.target === welcomeOverlay) {
            closeWelcomePopup();
        }
    });
}


/* =================================
   POP UP KONFIRMASI LOGOUT
================================= */

const logoutPopup = document.getElementById('logoutPopup');
const logoutModal = document.getElementById('logoutModal');
const logoutButton = document.getElementById('logoutButton');
const cancelLogout = document.getElementById('cancelLogout');
const confirmLogout = document.getElementById('confirmLogout');
const logoutForm = document.getElementById('logoutForm');

function openLogoutPopup() {
    if (!logoutPopup) return;

    logoutPopup.classList.add('active');
    logoutPopup.setAttribute('aria-hidden', 'false');

    document.body.style.overflow = 'hidden';

    if (cancelLogout) {
        setTimeout(() => cancelLogout.focus(), 100);
    }
}

function closeLogoutPopup() {
    if (!logoutPopup || !logoutModal) return;

    logoutPopup.classList.remove('active');
    logoutPopup.setAttribute('aria-hidden', 'true');

    document.body.style.overflow = '';
}

if (logoutButton) {
    logoutButton.addEventListener('click', openLogoutPopup);
}

if (cancelLogout) {
    cancelLogout.addEventListener('click', closeLogoutPopup);
}

if (confirmLogout && logoutForm) {
    confirmLogout.addEventListener('click', function() {

        confirmLogout.disabled = true;
        confirmLogout.textContent = 'Memproses...';

        logoutForm.submit();

    });
}

/* Klik area luar popup untuk membatalkan */

if (logoutPopup) {
    logoutPopup.addEventListener('click', function(event) {
        if (event.target === logoutPopup) {
            closeLogoutPopup();
        }
    });
}

/* Tombol Escape menutup popup */

document.addEventListener('keydown', function(event) {

    if (event.key === 'Escape') {

        if (logoutPopup && logoutPopup.classList.contains('active')) {
            closeLogoutPopup();
            return;
        }

        if (welcomeOverlay) {
            closeWelcomePopup();
        }

    }

});


/* WAKTU REAL-TIME WIB */

function updateWaktu() {
    const sekarang = new Date();

    const tanggal = new Intl.DateTimeFormat('id-ID', {
        weekday: 'long',
        day: 'numeric',
        month: 'long',
        year: 'numeric',
        timeZone: 'Asia/Jakarta'
    }).format(sekarang);

    const jam = new Intl.DateTimeFormat('id-ID', {
        hour: '2-digit',
        minute: '2-digit',
        second: '2-digit',
        hour12: false,
        timeZone: 'Asia/Jakarta'
    }).format(sekarang);

    document.getElementById('tanggal-sekarang').textContent =
        tanggal.charAt(0).toUpperCase() + tanggal.slice(1);

    document.getElementById('jam-sekarang').textContent = jam;
}

updateWaktu();
setInterval(updateWaktu, 1000);


/* DATA LARAVEL */

const conditionLabels = @json($kondisiAset->keys()->values());
const conditionValues = @json($kondisiAset->values()->values());

const categoryLabels = @json($jenisAset->keys()->values());
const categoryValues = @json($jenisAset->values()->values());


/* PALET WARNA GOLD */

const conditionColors = [
    '#B8860B',
    '#C99A35',
    '#DAA520',
    '#E9BD61',
    '#F5DDA6',
    '#FFE8B0'
];

const categoryColors = [
    '#B8860B',
    '#C99A35',
    '#DAA520',
    '#E9BD61',
    '#F5DDA6',
    '#FFE8B0',
    '#D4AF37'
];

const conditionTotal = conditionValues.reduce(
    (sum,value) => sum + Number(value),
    0
);


/* DONUT CHART GOLD */

new Chart(document.getElementById('conditionChart'), {

    type:'doughnut',

    data:{
        labels:conditionLabels,

        datasets:[{
            data:conditionValues,
            backgroundColor:conditionColors,
            borderWidth:4,
            borderColor:'#082F28',
            hoverOffset:12,
            hoverBorderWidth:0
        }]
    },

    options:{
        responsive:true,
        maintainAspectRatio:false,
        cutout:'73%',

        animation:{
            animateRotate:true,
            animateScale:true,
            duration:1400,
            easing:'easeOutQuart'
        },

        plugins:{
            legend:{display:false},

            tooltip:{
                backgroundColor:'#041F1B',
                titleColor:'#F5DDA6',
                bodyColor:'#FFFFFF',
                padding:12,
                cornerRadius:9
            }
        }
    },

    plugins:[{

        id:'centerText',

        afterDraw(chart){

            const {ctx,chartArea} = chart;
            if(!chartArea) return;

            const x = (chartArea.left + chartArea.right) / 2;
            const y = (chartArea.top + chartArea.bottom) / 2;

            ctx.save();
            ctx.textAlign = 'center';
            ctx.textBaseline = 'middle';

            ctx.fillStyle = '#F5DDA6';
            ctx.font = '800 25px Plus Jakarta Sans';

            ctx.fillText(
                conditionTotal.toLocaleString('id-ID'),
                x,
                y - 7
            );

            ctx.fillStyle = '#B5CFC1';
            ctx.font = '700 9px Plus Jakarta Sans';

            ctx.fillText('TOTAL ASET',x,y + 16);

            ctx.restore();
        }

    }]

});


/* LEGEND DONUT */

const legendContainer = document.getElementById('conditionLegend');

if(conditionLabels.length === 0){
    legendContainer.innerHTML =
        '<p style="font-size:10px;color:#B5CFC1">Belum ada data kondisi.</p>';
}

conditionLabels.forEach((label,index) => {

    const jumlah = Number(conditionValues[index]);

    const persen = conditionTotal > 0
        ? Math.round(jumlah / conditionTotal * 100)
        : 0;

    const item = document.createElement('div');
    item.className = 'legend-item';

    const dot = document.createElement('span');
    dot.className = 'legend-dot';
    dot.style.backgroundColor =
        conditionColors[index % conditionColors.length];

    const name = document.createElement('span');
    name.textContent = label;

    const value = document.createElement('strong');
    value.textContent = persen + '%';

    item.append(dot,name,value);
    legendContainer.appendChild(item);

});


/* BAR CHART GOLD */

new Chart(document.getElementById('categoryChart'), {

    type:'bar',

    data:{

        labels:categoryLabels,

        datasets:[{

            label:'Jumlah Aset',

            data:categoryValues,

            backgroundColor:categoryLabels.map(
                (_,index) =>
                    categoryColors[index % categoryColors.length]
            ),

            borderRadius:9,
            borderSkipped:false,
            maxBarThickness:48

        }]

    },

    options:{

        responsive:true,
        maintainAspectRatio:false,

        animation:{
            duration:1400,
            easing:'easeOutQuart',
            delay:context => context.dataIndex * 100
        },

        plugins:{
            legend:{display:false},

            tooltip:{
                backgroundColor:'#041F1B',
                titleColor:'#F5DDA6',
                bodyColor:'#FFFFFF',
                padding:12,
                cornerRadius:9
            }
        },

        scales:{

            y:{
                beginAtZero:true,

                ticks:{
                    precision:0,
                    color:'#F5DDA6',
                    font:{size:9}
                },

                grid:{
                    color:'rgba(233,189,97,.15)'
                },

                border:{
                    display:false
                }
            },

            x:{
                ticks:{
                    color:'#F5DDA6',
                    font:{size:9}
                },

                grid:{
                    display:false
                },

                border:{
                    display:false
                }
            }

        }

    }

});


/* ANIMASI ANGKA STATISTIK */

function animateCounter(element){

    const target = Number(element.dataset.target || 0);
    const duration = 1300;
    const startTime = performance.now();

    function update(now){

        const progress = Math.min(
            (now - startTime) / duration,
            1
        );

        const eased = 1 - Math.pow(1 - progress, 4);
        const current = Math.floor(target * eased);

        element.textContent = current.toLocaleString('id-ID');

        if(progress < 1){
            requestAnimationFrame(update);
        }else{
            element.textContent = target.toLocaleString('id-ID');
        }
    }

    requestAnimationFrame(update);
}


const counterObserver = new IntersectionObserver(
    (entries,observer) => {

        entries.forEach(entry => {

            if(entry.isIntersecting){
                animateCounter(entry.target);
                observer.unobserve(entry.target);
            }

        });

    },
    {threshold:.5}
);


document.querySelectorAll('.count-up').forEach(counter => {
    counterObserver.observe(counter);
});


/* ANIMASI PARTIKEL EMAS */

const particleContainer = document.getElementById('particles');

if(particleContainer && !window.matchMedia('(prefers-reduced-motion: reduce)').matches){

    for(let i = 0; i < 35; i++){

        const particle = document.createElement('span');

        particle.className = 'particle';

        particle.style.left = Math.random() * 100 + '%';

        particle.style.animationDuration =
            (7 + Math.random() * 12) + 's';

        particle.style.animationDelay =
            (Math.random() * 10) + 's';

        const particleSize = 3 + Math.random() * 4;

        particle.style.width = particleSize + 'px';
        particle.style.height = particleSize + 'px';

        particleContainer.appendChild(particle);
    }
}


/* SIDEBAR TOGGLE */

const menuToggle = document.getElementById('menuToggle');

menuToggle.addEventListener('click',function(){

    if(window.innerWidth <= 600){
        document.body.classList.toggle('mobile-menu-open');
    }else{
        document.body.classList.toggle('sidebar-collapsed');
    }

});


/* TUTUP MENU MOBILE */

document.querySelector('.main').addEventListener('click',function(event){

    if(
        window.innerWidth <= 600 &&
        !event.target.closest('#menuToggle')
    ){
        document.body.classList.remove('mobile-menu-open');
    }

});


/* RESET RESPONSIVE */

window.addEventListener('resize',function(){

    if(window.innerWidth > 600){
        document.body.classList.remove('mobile-menu-open');
    }

});

</script>

</body>
</html>
