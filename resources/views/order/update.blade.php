@extends('layouts.app')

@section('title', 'Create Order')

@section('content')

<header class="main-header" data-aos="fade-out">
    <h1><span class="text-danger">Create Order</span></h1>
    <small class="text-danger"></small>
</header>

<main class="container">
    <h3 class="mb-4 text-danger">Order</h3>
    <form action="{{ route('order.process',$order->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label class="" for="exampleInputEmail1">Consumen ID</label>
            <input type="number" name="id_konsumen" value="{{$order->id_konsumen}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" readonly>
        </div>

        <div class="form-group">
            <label class="" for="exampleInputEmail1">Seller ID</label>
            <input type="number" name="id_penjual" value="{{$order->id_penjual}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" readonly>
        </div>

        <div class="form-group">
            <label class="" for="exampleInputEmail1">Product ID</label>
            <input type="number" name="id_barang" value="{{$order->id_barang}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" readonly>
        </div>

        <div class="form-group">
            <label class="" for="exampleInputEmail1">Amount</label>
            <input type="number" name="jumlah_barang" value="{{$order->jumlah_barang}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" readonly>
        </div>

        <div class="form-group">
            <label class="" for="exampleInputEmail1">Discount</label>
            <input type="text" name="diskon_barang" value="{{$order->diskon_barang}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" readonly>
        </div>

        <div class="form-group">
            <label class="" for="exampleInputEmail1">Sum Price</label>
            <input type="text" name="total_harga" value="{{$order->total_harga}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" readonly>
        </div>

        <div class="form-group">
            <label class="" for="exampleInputEmail1">Tanggal Pesanan</label>
            <input type="date" name="tanggal_pesanan" value="{{$order->tanggal_pesanan}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" readonly>
        </div>
        <div class="form-group">
            <label class="" for="exampleInputEmail1">Tanggal Pembayaran</label>
            <input type="date" name="tanggal_pembayaran" value="{{$order->tanggal_pembayaran}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" readonly>
        </div>
        <div class="form-group">
            <label class="" for="exampleInputEmail1">Metode Pembayaran : </label>
            <input type="text" name="metode_pembayaran" value="{{$order->metode_pembayaran}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" readonly>
        </div>
        <div class="form-group">
            <label class="" for="exampleInputEmail1">Status Penjualan : </label>
            <select name="status_penjualan" id="cars" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <option value="No Status" @if($order->status_penjualan=='No Status') ? selected : null @endif>No Status</option>
                <option value="Sales" @if($order->status_penjualan=='Sales')) ? selected : null @endif>Sales</option>
                <option value="Warehouse" @if($order->status_penjualan=='Warehouse')) ? selected : null @endif>Warehouse</option>
                <option value="Konsumen" @if($order->status_penjualan=='Konsumen')) ? selected : null @endif>Konsumen</option>
            </select>
        </div>

        <div class="form-group">
            <label class="" for="exampleInputEmail1">Status Pesanan : </label>
            <select name="status_pesanan" id="cars" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <option value="No Status" @if($order->status_pesanan=='No Status') ? selected : null @endif>No Status</option>
                <option value="Dikemas" @if($order->status_pesanan=='Dikemas')) ? selected : null @endif>Dikemas</option>
                <option value="Dikirim" @if($order->status_pesanan=='Dikirim')) ? selected : null @endif>Dikirim</option>
                <option value="Diterima" @if($order->status_pesanan=='Diterima')) ? selected : null @endif>Diterima</option>
                <option value="Selesai" @if($order->status_pesanan=='Selesai')) ? selected : null @endif>Selesai</option>
            </select>
        </div>

        <div class="form-group">
            <label class="" for="exampleInputEmail1">Status Stock : </label>
            <select name="status_stock" id="cars" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <option value="No Status" @if($order->status_stock=='No Status') ? selected : null @endif>No Status</option>
                <option value="Tersedia" @if($order->status_stock=='Tersedia')) ? selected : null @endif>Tersedia</option>
                <option value="Tidak Tersedia" @if($order->status_stock=='Tidak Tersedia')) ? selected : null @endif>Tidak Tersedia</option>
            </select>
        </div>
        <div class="form-group">
            <label class="" for="exampleInputEmail1">Status Penjualan : </label>
            <select name="status_transaksi" id="cars" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <option value="No Status" @if($order->status_transaksi=='No Status') ? selected : null @endif>No Status</option>
                <option value="Refund" @if($order->status_transaksi=='Refund')) ? selected : null @endif>Refund</option>
                <option value="Tukar Barang" @if($order->status_transaksi=='Tukar Barang')) ? selected : null @endif>Tukar Barang</option>
                <option value="Lainnya" @if($order->status_transaksi=='Lainnya')) ? selected : null @endif>Lainnya</option>
            </select>
        </div>






        <div class="form-group">
            <button type="submit" value="submit" class="btn btn-dark">Submit</button>
        </div>
    </form>
</main>



@endsection