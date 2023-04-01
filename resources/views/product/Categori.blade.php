@extends('app')

@section('content')
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link active" aria-current="page" href="#"></a>
          <a class="nav-link" href="{{ url ('product') }}">Product</a>
          <a class="nav-link" href="{{ url('product/Categori') }}">Category</a>
          <a class="nav-link" href="{{ url('product/cart') }}">Cart</a>
          <a class="nav-link disabled"></a>
        </div>
      </div>
    </div>
  </nav>

<!doctype html>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <div class="card-body">
      <table class="table ">
          <thead>
              <tr>
                  <th>Nomer</th>
                  <th>Category</th>
              </tr>
          </thead>
          <tbody>
              @forelse ($products as $item)
                  <tr>
                      <td>{{ $item->id}}</td>
                      <td>{{ $item->category->nama }}</td>
                  </tr>
                  
          </thead>
    @endforeach
@endsection