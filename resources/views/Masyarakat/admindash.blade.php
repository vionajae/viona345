<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Dashboard</title>
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
                <a class="nav-link active" aria-current="page" href="{{url('masyarakat/validasi')}}">Validasi</a>
              </li>
            </ul>
        <form class="d-flex" role="search">
          <div class="d-grid gap-2 d-md-block">
            <a class="btn btn-outline-light" href="{{url('masyarakat/petugas')}}" role="button">Login</a>
            <a class="btn btn-outline-light" href="{{url('masyarakat/admindash')}}" role="button">Logout</a>
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
            <form action="" method="post">
                <div class="row">
                    <div class="col-sm-3 mb-3 mb-sm-0">
                      <div class="card">
                        <div class="card-bg-primary">
                          <h5 class="card-title">Totas Aduan</h5>
                          <p class="card-text">45346</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="card">
                        <div class="card-body">
                          <h5 class="card-title">Aduan Selesai</h5>
                          <p class="card-text">453</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                          <div class="card-body">
                            <h5 class="card-title">Aduan Dalam Proses</h5>
                            <p class="card-text">46</p>
                          </div>
                        </div>
                      </div>
                  </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>