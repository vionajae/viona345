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
                <h4 class="card-title">Registrasi</h4>
                <a href="{{url('admin/registrasi')}}" >
                </a>
            </div>
            <div class="card-body">
                @if (session('pesan'))
                    <div class="alert alert-primary" role="alert">
                        {{session('pesan')}}
                      </div>
                    @endif
                    
                <form action="" method="post">
                    @csrf
                    <div class="mb-3 row">
                        <label for="" class="col-form-label col-2">Nama Petugas</label>
                        <div class="col-10">
                            <input type="text" class="form-control" name="nama_petugas">
                            @error('nama_petugas')
                                <div class="form-text">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-form-label col-2">Username</label>
                        <div class="col-10">
                            <input type="text" class="form-control" name="username">
                            @error('username')
                                <div class="form-text">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-form-label col-2">Password</label>
                        <div class="col-10">
                            <input type="password" class="form-control" name="password">
                            @error('password')
                                <div class="form-text">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-form-label col-2">Telepon</label>
                        <div class="col-10">
                            <input type="text" class="form-control" name="telp">
                            @error('telp')
                                <div class="form-text">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-form-label col-2">Level</label>
                        <div class="col-10">
                        <select class="form-select" id="validationCustom04" name="level" required>
                          <option value="admin">Admin</option>
                          <option value="petugas">Petugas</option>
                        </select>
                        @error('level')
                                <div class="form-text">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3">
                        <button class="btn form-control btn-primary mb-2">Registrasi</button>
                        <button class="btn form-control btn-outline-success mb-2" type="reset">Batal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>