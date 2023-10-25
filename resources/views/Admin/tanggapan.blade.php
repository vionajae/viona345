<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>
<body>

  <nav class="navbar navbar-expand-lg  navbar-dark bg-primary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">LAPORIN</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{url('LayoutUtama')}}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{url('admin/validasi')}}">Validasi</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{url('admin/tanggapan')}}">Tanggapan</a>
              </li>
            </ul>
    <form class="d-flex" role="search">
      <button class="btn btn-outline-light" type="submit">Logout</button>
    </form>
  </div>
</div>
</nav>
    <div class="container">
        <div class="card shadow mt-4">
            <div class="card-header d-flex text-bg-primary bg-gradient justify-content-between">
                <h4 class="card-title">Tanggapi laporan</h4>
                <a href="{{url('masyarakat/tanggapan')}}" >
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
                        <label for="" class="col-form-label col-2">Id tanggapan</label>
                        <div class="col-10">
                            <input type="text" class="form-control" name="id_tanggapan">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-form-label col-2">Id Pengaduan</label>
                        <div class="col-10">
                            <input type="text" class="form-control" name="id_pengaduan">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="text" class="col-form-label col-2">Tanggal</label>
                        <div class="col-10">
                            <input type="date" class="form-control" name="tgl_tanggapan">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-form-label col-2">Tanggapan</label>
                        <div class="col-10">
                            <input type="text" class="form-control" name="tanggapan">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-form-label col-2">Id Petugas</label>
                        <div class="col-10">
                            <input type="text" class="form-control" name="id_petugas">
                        </div>
                    </div>
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <button class="btn btn-primary" type="button">Tanggapi</button>
                      </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>