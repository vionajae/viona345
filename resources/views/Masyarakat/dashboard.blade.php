@extends('LayoutUtama')
@section('isihalaman')
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
          <a class="nav-link active" aria-current="page" href="{{url('masyarakat/pengaduan')}}">Pengaduan</a>
        </li>
      </ul>
  <form class="d-flex" role="search">
    <div class="d-grid gap-2 d-md-block">
      <a class="btn btn-outline-light" href="{{url('masyarakat/login')}}" role="button">Login</a>
      <a class="btn btn-outline-light" href="{{url('masyarakat/dashboard')}}" role="button">Logout</a>
    </div>
  </form>
</div>
</div>
</nav>
@endsection