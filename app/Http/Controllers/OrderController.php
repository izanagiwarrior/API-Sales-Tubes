<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Order;

class OrderController extends Controller
{
    public function index()
    {
        return Order::all();
    }

    public function create(Request $request)
    {
        $order = new Order;
        $order->id_konsumen = $request->id_konsumen;
        $order->id_penjual = $request->id_penjual;
        $order->id_barang = $request->id_barang;
        $order->jumlah_barang = $request->jumlah_barang;
        $order->diskon_barang = $request->diskon_barang;
        $order->total_harga = $request->total_harga;
        $order->tanggal_pesanan = $request->tanggal_pesanan;
        $order->tanggal_pembayaran = $request->tanggal_pembayaran;
        $order->metode_pembayaran = $request->metode_pembayaran;
        $order->status_penjualan = $request->status_penjualan;
        $order->status_pesanan = $request->status_pesanan;
        $order->status_stock = $request->status_stock;
        $order->status_transaksi = $request->status_transaksi;

        $order->save();
        return "Order Data Has Been Created";
    }

    public function update(Request $request, $id)
    {

        $id_konsumen = $request->id_konsumen;
        $id_penjual = $request->id_penjual;
        $id_barang = $request->id_barang;
        $jumlah_barang = $request->jumlah_barang;
        $diskon_barang = $request->diskon_barang;
        $total_harga = $request->total_harga;
        $tanggal_pesanan = $request->tanggal_pesanan;
        $tanggal_pembayaran = $request->tanggal_pembayaran;
        $metode_pembayaran = $request->metode_pembayaran;
        $status_penjualan = $request->status_penjualan;
        $status_pesanan = $request->status_pesanan;
        $status_stock = $request->status_stock;
        $status_transaksi = $request->status_transaksi;

        $sales = Order::find($id);

        $order->id_konsumen = $id_konsumen;
        $order->id_penjual = $id_penjual;
        $order->id_barang = $id_barang;
        $order->jumlah_barang = $jumlah_barang;
        $order->diskon_barang = $diskon_barang;
        $order->total_harga = $total_harga;
        $order->tanggal_pesanan = $tanggal_pesanan;
        $order->tanggal_pembayaran = $tanggal_pembayaran;
        $order->metode_pembayaran = $metode_pembayaran;
        $order->status_penjualan = $status_penjualan;
        $order->status_pesanan = $status_pesanan;
        $order->status_stock = $status_stock;
        $order->status_transaksi = $status_transaksi;

        $order->save();

        return "Order Data Has Been Updated";
    }

    public function delete($id)
    {
        $order = Order::find($id);
        $order->delete();

        return "Order Data Has Been Deleted";
    }
}
