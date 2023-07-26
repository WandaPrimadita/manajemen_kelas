<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">

    <title>Matakuliah</title>
  </head>
<body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-success text-white">
  		<div class="container">
            <a class="navbar-brand" href="#">Manhasla</a>
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

    <section class="row justify-content-center" style="padding-top: 100px ; min-height:100vh">
            <div class="col-6">
            <form action="/ruangan/tambah" method="post">
                @csrf
            <h1 class="h3 mb-3 text-center fw-normal pt-5">Menambah Data Ruangan</h1>

            <div class="form-floating">
            <input name="kode_ruangan" type="text" class="form-control" id="floatingInput" placeholder="Kode Ruangan">
            <label for="floatingInput">Kode Ruangan</label>
            </div>
            <div class="form-floating">
            <input name="ruang_jurusan" type="text" class="form-control" id="floatingInput" placeholder="Ruang Jurusan">
            <label for="floatingInput">Ruang Jurusan</label>
            </div>
            <div class="form-floating">
            <input name="kapasitas" type="text" class="form-control" id="floatingInput" placeholder="Kapasitas">
            <label for="floatingInput">Kapasitas</label>
            </div>
            
            <div class="checkbox mb-3">
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Tambah Data Ruangan</button>
        </div>
        </form>
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