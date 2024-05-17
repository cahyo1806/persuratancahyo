<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile Kepala Surat</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding-top: 50px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Profile Kepala Surat</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $kepalasurat->nama_kop }}</h5>
                <p class="card-text">Nama Kepala Surat: {{ $kepalasurat->nama_kop }}</p>
                <p class="card-text">Alamat Kepala Surat: {{ $kepalasurat->alamat_kop }}</p>
                <p class="card-text">Nama Tujuan: {{ $kepalasurat->nama_tujuan }}</p>
                <p class="card-text">Id: {{ $kepalasurat->id_user }}</p>
            </div>
        </div><br>
        <a href="{{ route('kepalasurat.index') }}" class="btn btn-secondary">Kembali</a>
    </div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>