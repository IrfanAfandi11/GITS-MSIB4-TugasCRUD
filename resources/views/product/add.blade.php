@extends('app')

@section('content')
    
    <form  action="{{url('/api/product') }}" method="POST">
        
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama Produk</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="product_name">
            <div id="emailHelp" class="form-text">Nama Prodak tidak boleh lebih dari 225</div>
        </div>
      <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Deskripsi</label>
          <input type="text" class="form-control" id="exampleInputPassword1" name="product_description">
      </div>
      <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Kategori ID</label>
          <input type="text" class="form-control" id="exampleInputPassword1" name="category_id">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Price</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="price">
    </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection