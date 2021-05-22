@extends('layouts.app')

@section('title', 'Order List')

@section('content')

<header class="main-header" data-aos="fade-out">
    <h1><span class="text-danger">Order</span></h1>
    <p>a product is the arrangement or disposition of people or things in relation to each other according to a particular sequence, pattern, or method.</p>
    <small class="text-danger"></small>
</header>

<main class="container">
    <div class="mb-4 text-center">
        <a href="order/create" class="btn btn-danger">Create</a>
        <a href="/" class="btn btn-danger">Home</a>
    </div>
    @foreach ($data as $index => $d)
    <section class="card" data-aos="flip-up">
        <div>
            <h3 class="text-danger"><span class="text-dark">Pembeli : </span>
                @foreach($consumen as $cs)
                @if ($d->id_konsumen == $cs->id)
                {{$cs->nama_konsumen}}
                @endif
                @endforeach
            </h3>
            <h3 class="text-danger"><span class="text-dark"> Penjual : </span>
                @foreach($seller as $se)
                @if ($d->id_penjual == $se->id)
                {{$se->nama_penjual}}
                @endif
                @endforeach
            </h3>
            <h3 class="text-danger"><span class="text-dark"> Produk : </span>
                @foreach($product as $pd)
                @if ($d->id_barang == $pd->id)
                {{$pd->nama_barang}}
                @endif
                @endforeach
            </h3>
            <p style="text-align:justify;">Diskon : {{$d->diskon_barang}}</p>
            <p style="text-align:justify;">Total Harga : Rp. {{$d->total_harga}}</p>
            <p style="text-align:justify;">Tanggal Pesanan : {{$d->tanggal_pesanan}}</p>
            <p style="text-align:justify;">Tanggal Pembayaran : {{$d->tanggal_pembayaran}}</p>
            <p style="text-align:justify;">Metode Pembayaran : {{$d->metode_pembayaran}}</p>
            <p style="text-align:justify;">Status Penjualan : {{$d->status_penjualan}}</p>
            <p style="text-align:justify;">Status Pesanan : {{$d->status_pesanan}}</p>
            <p style="text-align:justify;">Status Stock : {{$d->status_stock}}</p>
            <p style="text-align:justify;">Status Transaksi : {{$d->status_transaksi}}</p>
            <a href="{{ route('order.update',$d->id) }}" class="btn btn-danger">Update</a>
            <form action="{{ route('deleteOrder') }}" method="post">
                @csrf
                <input type="hidden" value="{{ $d->id }}" name="id">
                <button class="btn btn-danger my-3">Delete</button>
            </form>
        </div>
    </section>
    @endforeach
</main>



@endsection