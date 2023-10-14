<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validasi</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/icons/bootstrap-icons.min.css">
</head>
<body class="bg-body-secondary">
    <div class="container">
        <div class="card shadow mt-4">
            <div class="bg-gradient justify-content-between">
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
                                    <th>Status</th>
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
                            </tbody>
                        </table>
                    </div>
                </form>
                </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>