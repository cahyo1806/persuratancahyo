<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index Pengguna</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding-top: 50px;
        }
        .table td,
        .table th {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{route('home')}}">PERSURATAN</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" aria-current="page" href="{{route('home')}}">Beranda</a>
                    <a class="nav-link" href="{{route('pengguna.index')}}">Pengguna</a>
                    <a class="nav-link" href="{{route('kepalasurat.index')}}">Kop</a>
                    <a class="nav-link" href="{{route('namatandatgn.index')}}">Tanda Tangan</a>
                </div>
            </div>
        </div>
    </nav>
    <br>
    <div class="container">
        <h1 class="mb-4">Data Kepala Surat</h1>
        <a href="{{ route('kepalasurat.create') }}" class="btn btn-primary mb-3">Tambah Kepala Surat</a>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No</th> 
                    <th scope="col">Nama Kepala Surat</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Nama Tujuan</th>
                    <th scope="col">Id</th>
                </tr>
            </thead>
            <tbody>
                @forelse($kepalasurat as $key => $pgn)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $pgn->nama_kop }}</td>
                        <td>{{ $pgn->alamat_kop }}</td>
                        <td>{{ $pgn->nama_tujuan }}</td>
                        <td>{{ $pgn->id_user }}</td>
                        <td> 
                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('kepalasurat.destroy', $pgn->id) }}" method="POST">
                                <a href="{{ route('kepalasurat.show', $pgn->id) }}" class="btn btn-info btn-sm">Detail</a>
                                <a href="{{ route('kepalasurat.edit', $pgn->id) }}" class="btn btn-warning btn-sm">Update</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center">Data Pengguna Belum Ada.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</body>
</html>
