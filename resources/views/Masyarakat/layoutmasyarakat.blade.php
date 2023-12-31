<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Layout Masyarakat</title>
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
                
              </ul>
        <form class="d-flex" role="search">
          <div class="d-grid gap-2 d-md-block">
            <a class="btn btn-outline-light" href="{{url('masyarakat/login')}}" role="button">Logout</a>
          </div>
        </form>
      </div>
    </div>
  </nav>
  @yield('navbar')
  <div class="container">
    <div class="card shadow mt-4">
        <div class="bg-gradient justify-content-between">
        </div>
        <div class="card-body">
            <form action="" method="post"><br><br><br>
                <h2>Layanan Aspirasi dan Pengaduan Online Rakyat</h2>
                <h4>Sampaikan laporan anda langsung kepada instansi pemerintah berwenang</h4>
                <div class="d-grid gap-2 col-3 mx-auto">
                  <a class="btn btn-primary" href="{{url('masyarakat/pengaduan')}}" role="button">Buat Pengaduan</a>
                </div><br>
                <br><br><br>
            </form>
        </div>
    </div>
    
</div>
@yield('isihalaman')
</body>
</html>