<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Petugas</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>
<body>

    <div id="main" class="d-flex align-items-center vh-100">
        <div class="container">
            <div class="card shadow m-auto" style="width: 1000px;">
                <div class="card-body">
                <h4 class="card-title">Login</h4>
                <a href="{{url('petugas')}}" >
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
                        <label for="" class="col-form-label col-2">Id Petugas</label>
                        <div class="col-10">
                            <input type="number" class="form-control" name="id_petugas">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-form-label col-2">Nama Petugas</label>
                        <div class="col-10">
                            <input type="text" class="form-control" name="nama_petugas">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-form-label col-2">Username</label>
                        <div class="col-10">
                            <input type="text" class="form-control" name="username">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-form-label col-2">Password</label>
                        <div class="col-10">
                            <input type="text" class="form-control" name="nama_petugas">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-form-label col-2">Telepon</label>
                        <div class="col-10">
                            <input type="text" class="form-control" name="telp">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-form-label col-2">Level</label>
                        <div class="col-10">
                        <select class="form-select" id="validationCustom04" required>
                          <option>Admin</option>
                          <option>Petugas</option>
                        </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <button class="btn form-control btn-primary mb-2">Login</button>
                        <button class="btn form-control btn-outline-success mb-2" type="reset">Batal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>