<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengaduan</title>
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
                <h4 class="card-title">Tulis laporan anda</h4>
                <a href="{{url('masyarakat/pengaduan')}}" >
                </a>
            </div>
            <div class="card-body">
                @if (session('pesan'))
                    <div class="alert alert-success" role="alert">
                        {{session('pesan')}}
                      </div>
                    @endif
                <form action="{{url('masyarakat/pengaduan')}}" method="post">
                    @csrf
                    <div class="mb-3 row">
                        <label for="" class="col-form-label col-2">NIK</label>
                        <div class="col-10">
                            <input type="text" class="form-control" name="nik">
                            @error('nik')
                                <div class="form-text">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="mb-3 row">
                      <label for="formFile" class="col-form-label col-2">Foto</label>
                      <div class="col-10">
                        <input class="form-control" name="foto" type="file" id="formFile">
                        @error('foto')
                                <div class="form-file">
                                    {{$message}}
                                </div>
                            @enderror
                      </div>
                  </div>
                    <div class="mb-3 row">
                        <label for="text" class="col-form-label col-2">Isi Laporan</label>
                        <div class="col-10">
                            <textarea class="form-control" name="isi_laporan" rows="5"></textarea>
                            @error('isi_laporan')
                                <div class="form-text">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="text" class="col-form-label col-2">Tanggal</label>
                        <div class="col-10">
                            <input type="date" class="form-control" name="tgl_pengaduan">
                            @error('tanggal')
                                <div class="form-text">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <button class="btn btn-primary" type="submit">Laporkan</button>
                      </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>