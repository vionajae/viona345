<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | LayoutUtama</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/bootstrap-icons.min.css">
</head>
<style>
    h2{
        color: black;
        font-size: 30px;
        display: flex;
        justify-content: center;
        padding: 100px 0 10px 0;
    }
    h4{
        color: black;
        font-size: 25px;
        display: flex;
        justify-content: center;
        padding: 50px 0 100px 0;
    }
</style>

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
            </ul>
        <form class="d-flex" role="search">
          <div class="d-grid gap-2 d-md-block">
            <a class="btn btn-outline-light" href="{{url('admin/login')}}" role="button">Logout</a>
          </div>
        </form>
      </div>
    </div>
  </nav>
  <div class="container">
    <div class="card shadow mt-4">
        <div class="bg-gradient justify-content-between">
        </div>
        <div class="card-body">
            <form action="" method="post"><br><br><br>
                <h2>Layanan Aspirasi dan Pengaduan Online Rakyat</h2>
                <h4>Melayani laporan masyarakat kepada instansi pemerintah berwenang</h4><br><br>
                <div class="d-grid gap-2 col-3 mx-auto">
                </div>
            </form>
        </div>
        <div class="row ">
          <div class="col-3">
              <div class="card">
                  <div class="card-body text-bg-primary bg-gradient">
                      <div class="row">
                          <div class="col-auto text-end">
                              <i class="bi bi-chat-square-text" @style(['font-size:50px'])></i>
                          </div>
                          <div class="col-auto justify-content-center align-content-center flex-column d-flex">
                              <h3 class="h1">100</h3>
                              <h5 class="h5 text-white">Aduan Masuk</h5>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-3">
              {{-- Total status proses --}}
              <div class="card">
                  <div class="card-body text-bg-info bg-gradient">
                      <div class="row">
                          <div class="col-auto text-end">
                              <i class="bi bi-person-lines-fill" @style(['font-size:50px'])></i>
                          </div>
                          <div class="col-auto justify-content-center align-content-center flex-column d-flex">
                              <h3 class="h1">100</h3>
                              <h5 class="h5 ">Status Proses</h5>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-3">
              {{-- Total status selesai --}}
              <div class="card">
                  <div class="card-body text-bg-success bg-gradient">
                      <div class="row">
                          <div class="col-auto text-end">
                              <i class="bi bi-check-square-fill" @style(['font-size:50px'])></i>
                          </div>
                          <div class="col-auto justify-content-center align-content-center flex-column d-flex">
                              <h3 class="h1">100</h3>
                              <h5 class="h5 text-white">Status Selesai</h5>
                          </div>
                      </div>
                  </div>
              </div>
          </div><br><br>
      </div>
    </div>
    
</div>

<div class="container-fluid mt-4">
  @yield('content')
</div>
</body>
</html>