<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile Tanda Tangan</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding-top: 50px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Profile Nama Tanda Tangan</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $namatandatgn->nama_tandatgn }}</h5>
                <p class="card-text">Nama Tanda Tangan: {{ $namatandatgn->nama_tandatgn }}</p>
                <p class="card-text">Jabatan: {{ $namatandatgn->jabatan }}</p>
                <p class="card-text">Nip: {{ $namatandatgn->nip }}</p>
            </div>
        </div><br>
        <a href="{{ route('namatandatgn.index') }}" class="btn btn-secondary">Kembali</a>
    </div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>