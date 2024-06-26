<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Creat Nama Tanda Tangan</title>
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
        <h1>Data Nama Tanda Tangan</h1>
        <form action="{{ route('namatandatgn.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nama_tandatgn">Nama Tanda Tangan:</label>
                <input type="text" class="form-control" id="nama_tandatgn" name="nama_tandatgn" required>
                @error('nama_tandatgn')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="jabatan">Jabatan:</label>
                <input type="text" class="form-control" id="jabatan" name="jabatan" required>
                @error('jabatan')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="nip">Nip:</label>
                <input type="text" class="form-control" id="nip" name="nip" required>
                @error('nip')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
                @enderror
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{ route('namatandatgn.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</body>
</html>