<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
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
                <a class="nav-link active" aria-current="page" href="{{url('masyarakat/dashboard')}}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{url('masyarakat/laporan')}}">Laporan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{url('masyarakat/validasid')}}">Validasi</a>
              </li>
            </ul>
        <form class="d-flex" role="search">
            <a class="btn btn-outline-light" href="{{url('masyarakat/login')}}" role="button">Login</a>
            <a class="btn btn-outline-light" href="{{url('masyarakat/registrasi')}}" role="button">Daftar</a>
        </form>
      </div>
    </div>
  </nav>
  <div class="container">
    <div class="card shadow mt-4">
        <div class="bg-gradient justify-content-between">
        </div>
        <div class="card-body">
            <form action="" method="post">
                
                <h2>Layanan Aspirasi dan Pengaduan Online Rakyat</h2>
                <h4>Sampaikan laporan Anda langsung kepada instansi pemerintah berwenang</h4>
            </form>
        </div>
    </div>
</div>
</body>
</html>