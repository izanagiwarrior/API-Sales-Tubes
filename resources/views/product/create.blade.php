@extends('layouts.app')

@section('title', 'Create Product')

@section('content')

<header class="main-header" data-aos="fade-out">
    <h1><span class="text-success">Create Product</span></h1>
    <small class="text-danger"></small>
</header>

<main class="container">
    <h3 class="mb-4 text-success">Product</h3>
    <form action="{{ route('product.create') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label class="" for="exampleInputEmail1">Product Name</label>
            <input type="text" name="nama_barang" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="form-group">
            <label class="" for="exampleInputEmail1">Price</label>
            <input type="number" name="harga_barang" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="form-group">
            <button type="submit" value="submit" class="btn btn-dark">Submit</button>
        </div>
    </form>
</main>



@endsection