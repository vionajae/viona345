<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validasi</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>
<body class="bg-body-secondary">
    <nav class="navbar navbar-expand-lg  navbar-dark bg-primary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">LAPORIN</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{url('masyarakat/dashboard')}}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{url('masyarakat/validasi')}}">Validasi</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{url('masyarakat/petugas')}}">Petugas</a>
              </li>
            </ul>
        <form class="d-flex" role="search">
          <div class="d-grid gap-2 d-md-block">
            <a class="btn btn-outline-light" href="{{url('masyarakat/dashboard')}}" role="button">Logout</a>
          </div>
        </form>
      </div>
    </div>
  </nav>
    <div class="container">
        <div class="card shadow mt-4">
                <form action="{{url('masyarakat/validasi')}}" method="post">
                    @csrf
            <div class="card-header d-flex text-bg-primary bg-gradient justify-content-between">
                <h4 class="card-title">Data</h4>
                <a href="" class="btn btn-light">
                    <i class="bi bi-plus-circle-fill"></i> Tambah
                </a>
            </div>
            <div class="card-body">
                <table class="table table-sm table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>NIK</th>
                            <th>Nama</th>
                            <th>Foto</th>
                            <th>Isi Laporan</th>
                            <th>Tanggal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>001</td>
                            <td>Jaja</td>
                            <td>asdfg</td>
                            <td>ahjumma ahjussi</td>
                            <td>03/04/2023</td>
                            <td >
                                <a href="#" class="btn btn-success btn-sm">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                                <a href="#" class="btn btn-danger btn-sm">
                                    <i class="bi bi-trash-fill"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>002</td>
                            <td>Jaji</td>
                            <td>asdf</td>
                            <td>sajangnim</td>
                            <td>03/04/20231</td>
                            <td >
                                <a href="#" class="btn btn-success btn-sm">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                                <a href="#" class="btn btn-danger btn-sm">
                                    <i class="bi bi-trash-fill"></i>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </form>
        </div>
    </div>
</body>
</html>