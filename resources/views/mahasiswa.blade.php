<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">

    <title>Mahasiswa</title>
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
    <section class="content-section bg-light" id="mahasiswa">
            <div class="container px-4 px-lg-5 text-left">
                <div class="row gx-4 gx-lg-5 justify-content-left">
                    <div class="col-lg-10">
                        <h2>Manajemen Mahasiswa</h2>
                        <p class="lead mb-2 mt-4">
                        <a class="btn btn-primary btn-l" href="/mahasiswa/tambahFormMahasiswa">Tambah Data Mahasiswa</a>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                <th scope="col">NIM</th>
                                <th scope="col">Nama Mahasiswa</th>
                                <th scope="col">Jenis Kelamin</th>
                                <th scope="col">Jurusan</th>
                                <th scope="col">No.Hp</th>
                                <th scope="col">Aksi</th>
                            
                                </tr>
                            </thead>
                    
                            <tbody>
                                @foreach($dataMahasiswa as $mahasiswa)
                                <tr>
                                <td>{{$mahasiswa->nim}}</td>
                                <td>{{$mahasiswa->nama_mahasiswa}}</td>
                                <td>{{$mahasiswa->jenis_kelamin}}</td>
                                <td>{{$mahasiswa->mahasiswa_jurusan}}</td>
                                <td>{{$mahasiswa->no_hp}}</td>
                                <td>
                                    <form onsubmit="return confirm('Data Mahasiswa Akan Dihapus?')" action="/mahasiswa/hapus/{{$mahasiswa->id}}" method="post">
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
    <footer class="text-center py-1">
                <div class="container px-5">
                <nav class="navbar fixed-bottom navbar-expand-lg navbar-dark bg-success text-white">
                <p class="m-0 text-center">Copyright &copy; Your Website 2023 (Manhasla)</p>
                </div>
            </footer>

</body>
</html>