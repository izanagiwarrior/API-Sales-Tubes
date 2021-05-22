@extends('layouts.app')

@section('title', 'Update Seller')

@section('content')

<header class="main-header" data-aos="fade-out">
    <h1><span  style='color: #fd7e14;'>Update Seller : {{$seller->nama_penjual}}</span></h1>
    <small class="text-danger"></small>
</header>

<main class="container">
    <h3 class="mb-4" style='color: #fd7e14;'>Seller</h3>
    <form action="{{ route ('seller.process',$seller->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label class="" for="exampleInputEmail1">Seller Name</label>
            <input type="text" name="nama_penjual" value="{{$seller->nama_penjual}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="form-group">
            <label class="" for="exampleInputEmail1">Adress</label>
            <input type="text" name="alamat_penjual" value="{{$seller->alamat_penjual}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="form-group">
            <label class="" for="exampleInputEmail1">Phone Number</label>
            <input type="text" name="telfon_penjual" value="{{$seller->telfon_penjual}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="form-group">
            <button type="submit" value="submit" class="btn btn-dark">Submit</button>
        </div>
    </form>
</main>



@endsection