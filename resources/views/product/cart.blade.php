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

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    @foreach ($products as $item)

      
    <div class="card mt-3" style="width: 18rem;">
            <div class="card-body">
                <div class="card-title">
                    {{ $item->nama}} 
                </div>
                <div class="card-title">
                  {{ $item->category_id}} 
              </div>
                <div class="card-text">
                    {{ $item->description }}
                </div>
                <div class="card-text">
                    {{ $item->price }}
                </div>
                <a href="/product/{{$item->id }}/edit">
                    <button class="btn btn-warning mt-2" type="button">ubah</button>
                <a href="/product/{{$item->id }}/delete">
                    <button class="btn btn-warning mt-2" type="button">Hapus</button>
                </a>
            </div>
        </div>
    @endforeach
@endsection