<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        return Product::all();
    }

    public function create(Request $request)
    {
        $product = new Product;
        $product->nama_barang = $request->nama_barang;
        $product->harga_barang = $request->harga_barang;
        $product->save();
        return "Product Data Has Been Created";
    }

    public function update(Request $request, $id)
    {

        $nama_barang = $request->nama_barang;
        $harga_barang = $request->harga_barang;

        $sales = Product::find($id);

        $product->nama_barang = $nama_barang;
        $product->harga_barang = $harga_barang;
        $product->save();

        return "Product Data Has Been Updated";
    }

    public function delete($id)
    {
        $product = Product::find($id);
        $product->delete();

        return "Product Data Has Been Deleted";
    }
}
