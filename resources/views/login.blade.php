
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login TKIDS</title> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
</head>
<body>
    <div class="login-box">
        <img src="{{ asset('assets/logo.png') }}" clas="avatar">
        <h1>Sistem Informasi Data TK/PAUD Kota Balikpapan</h1>
        <form action="" method="post">
            <input type="text" name="username" placeholder="Nama Pengguna" autocomplete="off">
            <input type="Password" name="password" placeholder="Kata Sandi">
            <input type="submit" name="submit" value="LOGIN" style="font-weight: bold;">
        </form>

    </div>
    {{-- <script src="{{ resources('script/app.js') }}"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>