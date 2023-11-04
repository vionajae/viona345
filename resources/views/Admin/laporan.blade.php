<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/icons/bootstrap-icons.min.css">
</head>
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
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{url('admin/laporan')}}">Laporan</a>
          </li>
        </ul>
    <form class="d-flex" role="search">
      <div class="d-grid gap-2 d-md-block">
        <a class="btn btn-outline-light" href="{{url('admin/login')}}" role="button">Logout</a>
      </div>
    </form>
  </div>
</div>
</nav>
<body class="bg-body-secondary">
    <div class="container">
        <div class="card shadow mt-4">
            <div class="bg-gradient justify-content-between">
                <a href="{{url('admin/validasi')}}" >
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
                        <h4 class="card-title">Laporan</h4>
                        
                    </div>
                    <div class="card-body">
                        <table class="table table-sm table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>NIK</th>
                                    <th>Foto</th>
                                    <th>Isi Laporan</th>
                                    <th>Tanggal</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $inem)
                                <tr>
                                    <td>{{$inem->nik}}</td>
                                    <td><img src="/upload_data/{{$inem->foto}}" alt="" style="width: 50px"></td>
                                    
                                    <td>{{$inem->isi_laporan}}</td>
                                    <td>{{$inem->tgl_pengaduan}}</td>
                                    <td>@switch($inem->status)
                                        @case('proses')
                                            Proses
                                            @break
                                        @case('selesai')
                                            Selesai
                                            @break
                                        @default
                                            Tertunda
                                    @endswitch</td>
                                </tr>
                                @endforeach
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