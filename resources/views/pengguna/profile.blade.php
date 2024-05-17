<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile Pengguna</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding-top: 50px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Profile Petugas</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $pengguna->user_name }}</h5>
                <p class="card-text">User Name: {{ $pengguna->User_name }}</p>
                <p class="card-text">Password: {{ $pengguna->password }}</p>
                <p class="card-text">Status: {{ $pengguna->status }}</p>
                <p class="card-text">Nama Petugas: {{ $pengguna->nama_ptgs }}</p>
            </div>
        </div><br>
        <a href="{{ route('pengguna.index') }}" class="btn btn-secondary">Kembali</a>
    </div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>