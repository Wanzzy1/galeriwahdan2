<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">

    <title>Login</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #153448;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        form {
            background-color: #f3f3f3;
            /* Warna biru untuk latar belakang form */
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            width: 600px;
            height: 500px;
        }

        h2 {
            text-align: center;
            color: #030303;
            /* Warna hitam untuk teks heading */
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #080707;
            /* Warna putih untuk teks label */
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #cccccc;
            border-radius: 4px;
            background-color: #ecf0f1;
            /* Warna biru muda untuk latar belakang input field */
        }

        button {
            background-color: #e87f00;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            background-color: #924002;
        }

        .text {
            color: #000000;
            /* Warna hitam untuk teks dalam class text */
        }
    </style>
</head>

<body>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <h2><i class="fa fa-light fa-user"> </i></h2>

        <div class="text">

            <label><i class="fa fa-envelope"></i> Email</label>
            <input type="email" name="email" id="email" placeholder="Email" required>

            <label><i class="fa fa-light fa-lock"></i> Password</label>
            <input type="password" name="password" id="password" placeholder="Password" required>
            <button type="submit" class="btn btn-primary"><i class="fa fa-user"></i> login</button>
        </div>
        <!-- Tautan ke halaman pendaftaran -->
        <hr>
        <p  class="text-center">Belum punya akun? <a href="{{ route('auth.register') }}" class="">Buat Sekarang</a></p>
    </form>

</body>

</html>
