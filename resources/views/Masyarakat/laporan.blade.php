<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>
<body class="bg-body-secondary">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">PPM</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Dashboard</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Laporan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Tanggapan</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    <div class="container">
        <div class="card shadow mt-4">
            <div class="card-header d-flex text-bg-primary bg-gradient justify-content-between">
                <h4 class="card-title">Laporankan laporan anda</h4>
                <a href="{{url('masyarakat/laporan')}}" >
                </a>
            </div>
            <div class="card-body">
                @if (session('pesan'))
                    <div class="alert alert-danger" role="alert">
                        {{session('pesan')}}
                      </div>
                    @endif
                <form action="" method="post">
                    @csrf
                    <div class="mb-3 row">
                        <label for="" class="col-form-label col-2">NIK</label>
                        <div class="col-10">
                            <input type="text" class="form-control" name="nik">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-form-label col-2">Nama</label>
                        <div class="col-10">
                            <input type="text" class="form-control" name="nama">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="text" class="col-form-label col-2">Isi Laporan</label>
                        <div class="col-10">
                            <textarea class="form-control" name="isi_laporan" rows="5"></textarea>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-form-label col-2">Tanggal</label>
                        <div class="col-10">
                            <input type="text" class="form-control" name="tanggal">
                        </div>
                    </div>
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <button class="btn btn-primary" type="button">Laporkan</button>
                      </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>