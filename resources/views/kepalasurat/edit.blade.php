<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Pengguna</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 50px;
            margin-bottom: 50px; 
        }
        .form-group {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
<div class="container">
        <h1>Data Kepala Surat</h1>
        <form action="{{ route('kepalasurat.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nama_kop">Kepala Surat:</label>
                <input type="text" class="form-control" id="nama_kop" name="nama_kop" required>
                @error('nama_kop')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="alamat_kop">Alamat Kepala Surat:</label>
                <input type="text" class="form-control" id="alamat_kop" name="alamat_kop" required>
                @error('alamat_kop')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="nama_tujuan">Nama Tujuan:</label>
                <input type="text" class="form-control" id="nama_tujuan" name="nama_tujuan" required>
                @error('nama_tujuan')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="id_user">Id Pengguna:</label>
                <input type="integer" class="form-control" id="id_user" name="id_user" required>
                @error('id_user')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
                @enderror
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{ route('pengguna.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</body>
</html>