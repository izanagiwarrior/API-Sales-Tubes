@extends('layouts.app')

@section('title', 'Consumen List')

@section('content')

<header class="main-header" data-aos="fade-out">
    <h1><span style='color: #6610f2;'>Consumen</span></h1>
    <p>A consumer is one that buys goods or services for consumption and not for resale or commercial purpose. The consumer is an individual who pays some amount of money for the thing required to consume goods and services. As such, consumers play a vital role in the economic system of a capitalist economy.</p>
    <small class="text-success"></small>
</header>

<main class="container">
    <div class="mb-4 text-center">
        <a href="consumen/create" class="btn" style="background-color:#6610f2;">Create</a>
        <a href="/" class="btn" style="background-color:#6610f2;">Home</a>
    </div>
    @foreach ($data as $index => $d)
    <section class="card" data-aos="flip-up">
        <div>
            <h3 style='color: #6610f2;'>{{$d->nama_konsumen}}</h3>
            <p style="text-align:justify;">Alamat : {{$d->alamat_konsumen}}</p>
            <p style="text-align:justify;">Telfon : {{$d->telfon_konsumen}}</p>
            <a href="{{ route('consumen.update',$d->id) }}" class="btn" style="background-color:#6610f2;">Update</a>
            <form action="{{ route('deleteConsumen') }}" method="post">
                @csrf
                <input type="hidden" value="{{ $d->id }}" name="id">
                <button class="btn" style="background-color:#6610f2;">Delete</button>
            </form>
        </div>
    </section>
    @endforeach
</main>



@endsection