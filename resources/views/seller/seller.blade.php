@extends('layouts.app')

@section('title', 'Seller List')

@section('content')

<header class="main-header" data-aos="fade-out">
    <h1><span style='color: #fd7e14;'>Seller</span></h1>
    <p>A seller is an individual or other entity who offers a good, service, or asset in return for payment. Sellers can be contrasted with buyers, and the two make up the key elements of any transaction or exchange.</p>
    <small class="text-success"></small>
</header>

<main class="container">
    <div class="mb-4 text-center">
        <a href="seller/create" class="btn" style="background-color:#fd7e14;">Create</a>
        <a href="/" class="btn" style="background-color:#fd7e14;">Home</a>
    </div>
    @foreach ($data as $index => $d)
    <section class="card" data-aos="flip-up">
        <div>
            <h3 style='color: #fd7e14;'>{{$d->nama_penjual}}</h3>
            <p style="text-align:justify;">Alamat : {{$d->alamat_penjual}}</p>
            <p style="text-align:justify;">Telfon : {{$d->telfon_penjual}}</p>
            <a href="{{ route('seller.update',$d->id) }}" class="btn" style="background-color:#fd7e14;">Update</a>
            <form action="{{ route('deleteSeller') }}" method="post">
                @csrf
                <input type="hidden" value="{{ $d->id }}" name="id">
                <button class="btn" style="background-color:#fd7e14;">Delete</button>
            </form>
        </div>
    </section>
    @endforeach
</main>



@endsection