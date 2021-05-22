@extends('layouts.app')

@section('title', 'Update Consumen')

@section('content')

<header class="main-header" data-aos="fade-out">
    <h1><span style='color: #6610f2;'>Update Consumen : {{$consumen->nama_konsumen}}</span></h1>
    <small class="text-danger"></small>
</header>

<main class="container">
    <h3 class="mb-4" style='color: #6610f2;'>Consumen</h3>
    <form action="{{ route ('consumen.process',$consumen->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label class="" for="exampleInputEmail1">Consumen Name</label>
            <input type="text" name="nama_konsumen" value="{{$consumen->nama_konsumen}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="form-group">
            <label class="" for="exampleInputEmail1">Adress</label>
            <input type="text" name="alamat_konsumen" value="{{$consumen->alamat_konsumen}}"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="form-group">
            <label class="" for="exampleInputEmail1">Phone Number</label>
            <input type="text" name="telfon_konsumen" value="{{$consumen->telfon_konsumen}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="form-group">
            <button type="submit" value="submit" class="btn btn-dark">Submit</button>
        </div>
    </form>
</main>



@endsection