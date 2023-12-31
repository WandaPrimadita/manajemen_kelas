<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">

    <title>Dosen</title>
  </head>
<body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-success text-white">
  		<div class="container">
            <a class="navbar-brand" href="/">Manhasla</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
            <a class="nav-link active" href="/">Home <span class="sr-only">(current)</span></a>
            <a class="nav-link" href="/mahasiswa">Dash Mahasiswa</a>
            <a class="nav-link" href="/dosen">Dash Dosen</a>
            <a class="nav-link" href="/matakuliah">Dash Matakuliah</a>
            <a class="nav-link" href="/ruangan">Dash Ruangan</a>
            </div>
        </div>
        </div>
    </nav>
    <section class="content-section bg-light" id="dosen">
            <div class="container px-4 px-lg-5 text-left">
                <div class="row gx-4 gx-lg-5 justify-content-left">
                    <div class="col-lg-10">
                        <h2>Manajemen Dosen</h2>
                        <p class="lead mb-2 mt-4">
                        <a class="btn btn-primary btn-l" href="/dosen/tambahFormDosen">Tambah Data Dosen</a>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                <th scope="col">NIDN</th>
                                <th scope="col">Nama Dosen</th>
                                <th scope="col">Jurusan</th>
                                <th scope="col">Jenis Kelamin</th>
                                <th scope="col">No.Hp</th>
                                <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($dataDosen as $dosen)
                                <tr>
                                <td>{{$dosen->nidn}}</td>
                                <td>{{$dosen->nama_dosen}}</td>
                                <td>{{$dosen->dosen_jurusan}}</td>
                                <td>{{$dosen->jenis_kelamin}}</td>
                                <td>{{$dosen->no_hp}}</td>
                                <td>
                                    <form onsubmit="return confirm('Data Dosen Akan Dihapus?')" action="/dosen/hapus/{{$dosen->id}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger">
                                        Hapus
                                    </button>
                                    </form></td>
                                </tr>
                                @endforeach
                            </tbody>
                            
                            </table>
                        </p>
                        
                    </div>
                </div>
            </div>
</section>

<!-- Footer-->
<footer class="footer text-center">
                <div class="container px-5 px-lg-5">
                <nav class="navbar fixed-bottom navbar-expand-lg navbar-dark bg-success text-white">
                    <p class="text-white small mb-0">Copyright &copy; Your Website 2023 (Manhasla)</p>
                </div>
            </footer>
</body>
</html>