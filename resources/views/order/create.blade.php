@extends('layouts.app')

@section('title', 'Create Order')

@section('content')

<header class="main-header" data-aos="fade-out">
    <h1><span class="text-danger">Create Order</span></h1>
    <small class="text-danger"></small>
</header>

<main class="container">
    <h3 class="mb-4 text-danger">Order</h3>
    <form action="{{ route('order.create') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label class="" for="exampleInputEmail1">Consumen ID</label>
            <input type="number" name="id_konsumen" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="form-group">
            <label class="" for="exampleInputEmail1">Seller ID</label>
            <input type="number" name="id_penjual" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="form-group">
            <label class="" for="exampleInputEmail1">Product ID</label>
            <input type="number" name="id_barang" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="form-group">
            <label class="" for="exampleInputEmail1">Amount</label>
            <input type="number" name="jumlah_barang" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="form-group">
            <label class="" for="exampleInputEmail1">Discount</label>
            <input type="text" name="diskon_barang" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="form-group">
            <label class="" for="exampleInputEmail1">Sum Price</label>
            <input type="text" name="total_harga" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="form-group">
            <label class="" for="exampleInputEmail1">Tanggal Pesanan</label>
            <input type="date" name="tanggal_pesanan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label class="" for="exampleInputEmail1">Tanggal Pembayaran</label>
            <input type="date" name="tanggal_pembayaran" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label class="" for="exampleInputEmail1">Metode Pembayaran : </label>

            <select name="metode_pembayaran" id="cars" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <option value="transfer">Transfer</option>
                <option value="cod">Cash On Delivery</option>
            </select>
        </div>

        <div class="form-group">
            <button type="submit" value="submit" class="btn btn-dark">Submit</button>
        </div>
    </form>
</main>



@endsection