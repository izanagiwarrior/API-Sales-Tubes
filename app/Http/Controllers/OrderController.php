<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Order;
use App\Models\Consumen;
use App\Models\Seller;
use App\Models\Product;

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

        $order = Order::find($id);

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

    public function index2()
    {
        $data = Order::all();
        $consumen = Consumen::all();
        $seller = Seller::all();
        $product = Product::all();
        return view('order.order', compact('data', 'consumen', 'seller', 'product'));
    }

    public function create_view(Request $request)
    {
        return view('order.create');
    }

    public function create_process(Request $request)
    {

        $order = new Order;
        $order->id_konsumen = $request->id_konsumen;
        $order->id_penjual = $request->id_penjual;
        $order->id_barang = $request->id_barang;
        $order->jumlah_barang = $request->jumlah_barang;
        $order->diskon_barang = $request->diskon_barang."%";
        $order->total_harga = $request->total_harga;
        $order->tanggal_pesanan = $request->tanggal_pesanan;
        $order->tanggal_pembayaran = $request->tanggal_pembayaran;
        $order->metode_pembayaran = $request->metode_pembayaran;
        $order->status_penjualan = "No Status";
        $order->status_pesanan = "No Status";
        $order->status_stock = "No Status";
        $order->status_transaksi = "No Status";

        $order->save();

        return redirect(route('order'));
    }

    public function update_view($id)
    {
        $order = Order::find($id);
        return view('order.update', compact('order'));
    }

    public function update_process($id, Request $request)
    {
        $order = Order::find($id);

        $order->status_penjualan = $request->status_penjualan;
        $order->status_pesanan = $request->status_pesanan;
        $order->status_stock = $request->status_stock;
        $order->status_transaksi = $request->status_transaksi;

        $order->save();

        return redirect(route('order'));
    }

    public function deleteOrder(Request $request)
    {
        $products = Order::find($request->id);
        $products->delete();

        return redirect(route('order'));
    }
}
