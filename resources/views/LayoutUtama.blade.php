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
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{url('admin/tanggapan')}}">Tanggapan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{url('admin/laporan')}}">Laporan</a>
              </li>
            </ul>
        <form class="d-flex" role="search">
          <div class="d-grid gap-2 d-md-block">
            <a class="btn btn-outline-light" href="{{url('logout')}}" role="button">Logout</a>
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
                <h4>Melayani laporan masyarakat kepada instansi pemerintah berwenang</h4>
                <div class="d-grid gap-2 col-3 mx-auto">
                </div>
            </form>
        </div><br>
        <div class="row">
          <div class="col-3 ms-2">
              <div class="card">
                  <div class="card-body text-bg-primary bg-gradient">
                      <div class="row ">
                          <div class="col-auto text-end">
                              <i class="bi bi-chat-square-text" @style(['font-size:50px'])></i>
                          </div>
                          <div class="col-auto justify-content-center align-content-center flex-column d-flex">
                              <h3 class="h1">578 <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-chat-right-dots" viewBox="0 0 16 16">
                                <path d="M2 1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h9.586a2 2 0 0 1 1.414.586l2 2V2a1 1 0 0 0-1-1H2zm12-1a2 2 0 0 1 2 2v12.793a.5.5 0 0 1-.854.353l-2.853-2.853a1 1 0 0 0-.707-.293H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12z"/>
                                <path d="M5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                              </svg></h3>
                              <h5 class="h5 text-white">Aduan Masuk</h5>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-3 ms-auto">
              {{-- Total status proses --}}
              <div class="card">
                  <div class="card-body text-bg-info bg-gradient">
                      <div class="row">
                          <div class="col-auto text-end">
                              <i class="bi bi-person-lines-fill" @style(['font-size:50px'])></i>
                          </div>
                          <div class="col-auto justify-content-center align-content-center flex-column d-flex">
                              <h3 class="h1">75 <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                              </svg></h3>
                              <h5 class="h5 ">Status Proses</h5>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-3 ms-auto mx-2">
              {{-- Total status selesai --}}
              <div class="card ">
                  <div class="card-body text-bg-success bg-gradient">
                      <div class="row">
                          <div class="col-auto text-end">
                              <i class="bi bi-check-square-fill" @style(['font-size:50px'])></i>
                          </div>
                          <div class="col-auto justify-content-center align-content-center flex-column d-flex">
                              <h3 class="h1">503 <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-check2-square" viewBox="0 0 16 16">
                                <path d="M3 14.5A1.5 1.5 0 0 1 1.5 13V3A1.5 1.5 0 0 1 3 1.5h8a.5.5 0 0 1 0 1H3a.5.5 0 0 0-.5.5v10a.5.5 0 0 0 .5.5h10a.5.5 0 0 0 .5-.5V8a.5.5 0 0 1 1 0v5a1.5 1.5 0 0 1-1.5 1.5H3z"/>
                                <path d="m8.354 10.354 7-7a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0z"/>
                              </svg></h3>
                              <h5 class="h5 text-white">Status Selesai</h5>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div><br>
    </div>
</div>
<div class="container-fluid mt-4">
  @yield('content')
</div>
</body>
</html>