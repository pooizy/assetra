
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verifikasi Email | ASSETRA</title>

    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Poppins:wght@700;800&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            font-family: 'Plus Jakarta Sans', sans-serif;
            background: linear-gradient(135deg, #101D35, #244A78);
        }

        .container {
            width: 100%;
            max-width: 460px;
            background: white;
            padding: 40px;
            border-radius: 20px;
            text-align: center;
            box-shadow: 0 20px 60px rgba(0,0,0,.2);
        }

        .icon {
            width: 75px;
            height: 75px;
            margin: 0 auto 22px;
            border-radius: 50%;
            background: #FBF3E5;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 34px;
        }

        h1 {
            color: #101D35;
            font-size: 23px;
            margin-bottom: 12px;
        }

        .description {
            color: #8793A8;
            font-size: 12px;
            line-height: 1.8;
            margin-bottom: 22px;
        }

        .message {
            background: #EAF5EE;
            color: #367A50;
            padding: 12px;
            border-radius: 9px;
            font-size: 11px;
            margin-bottom: 18px;
        }

        .error {
            background: #FCEEEE;
            color: #B94A48;
            padding: 12px;
            border-radius: 9px;
            font-size: 11px;
            margin-bottom: 18px;
        }

        button {
            width: 100%;
            padding: 14px;
            background: #101D35;
            color: white;
            border: none;
            border-radius: 9px;
            font-family: inherit;
            font-size: 12px;
            font-weight: 800;
            cursor: pointer;
            margin-top: 5px;
        }

        button:hover {
            background: #244A78;
        }

        .logout {
            background: transparent;
            color: #A77A2F;
            border: 1px solid #E8D6B2;
            margin-top: 12px;
        }

        .logout:hover {
            background: #FBF6EA;
            color: #A77A2F;
        }

        .brand {
            margin-top: 28px;
            font-family: 'Poppins', sans-serif;
            color: #101D35;
            font-size: 19px;
            font-weight: 800;
            letter-spacing: 1px;
        }

        .brand small {
            display: block;
            font-family: 'Plus Jakarta Sans', sans-serif;
            color: #8793A8;
            font-size: 9px;
            font-weight: 500;
            letter-spacing: 1.5px;
            margin-top: 4px;
        }

        @media(max-width: 480px) {
            .container {
                padding: 28px 22px;
            }
        }
    </style>
</head>

<body>

<div class="container">

    <div class="icon">✉</div>

    <h1>Verifikasi Email</h1>

    <p class="description">
        Terima kasih telah mendaftar di ASSETRA.
        Silakan periksa email kamu dan klik tautan
        verifikasi yang telah kami kirimkan.
    </p>

    @if(session('success'))
        <div class="message">
            {{ session('success') }}
        </div>
    @endif

    @if($errors->any())
        <div class="error">
            {{ $errors->first() }}
        </div>
    @endif

    <form action="{{ route('verification.send') }}" method="POST">
        @csrf

        <button type="submit">
            KIRIM ULANG EMAIL VERIFIKASI
        </button>
    </form>

    <form action="{{ route('logout') }}" method="POST">
        @csrf

        <button type="submit" class="logout">
            KELUAR DARI AKUN
        </button>
    </form>

    <div class="brand">
        ASSETRA
        <small>ASSET MANAGEMENT SYSTEM</small>
    </div>

</div>

</body>
</html>
