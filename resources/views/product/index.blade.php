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

          <a class="nav-link" href="{{ url('product/cart') }}">Cart</a>
          <a class="nav-link disabled"></a>
        </div>
      </div>
    </div>
  </nav>

    <a href="{{ url('product/add') }}">
        <button class="btn btn-primary float-end mt-4" type="button">+ Tambah Produk</button>
    </a>
<!doctype html>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    @foreach ($products as $item)
    <table class="table mt-3">
      <thead>
        <tr>
          <th scope="col">Nama</th>
          <th scope="col">description</th>
          <th scope="col">Categori_id</th>
          <th scope="col">Price</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">{{ $item->nama }}</th>
          <td>{{ $item->description }}</td>
          <td>{{ $item->category_id }}</td>
          <td>{{ $item->price}}</td>
        </tr>
        
      </tbody>
    </table>
    
    
    @endforeach
@endsection