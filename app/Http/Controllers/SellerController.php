<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Seller;

class SellerController extends Controller
{
    public function index()
    {
        return Seller::all();
    }

    public function create(Request $request)
    {
        $seller = new Seller;
        $seller->nama_penjual = $request->nama_penjual;
        $seller->alamat_penjual = $request->alamat_penjual;
        $seller->telfon_penjual = $request->telfon_penjual;
        $seller->transaksi_terakhir = $request->transaksi_terakhir;
        $seller->status_penjual = $request->status_penjual;
        $seller->save();
        return "Seller Data Has Been Created";
    }

    public function update(Request $request, $id)
    {

        $nama_penjual = $request->nama_penjual;
        $alamat_penjual = $request->alamat_penjual;
        $telfon_penjual = $request->telfon_penjual;
        $transaksi_terakhir = $request->transaksi_terakhir;
        $status_penjual = $request->status_penjual;

        $seller = Seller::find($id);

        $seller->nama_penjual = $nama_penjual;
        $seller->alamat_penjual = $alamat_penjual;
        $seller->telfon_penjual = $telfon_penjual;
        $seller->transaksi_terakhir = $transaksi_terakhir;
        $seller->status_penjual = $status_penjual;
        $seller->save();

        return "Seller Data Has Been Updated";
    }

    public function delete($id)
    {
        $seller = Seller::find($id);
        $seller->delete();

        return "Seller Data Has Been Deleted";
    }

    public function index2()
    {
        $data = Seller::all();
        return view('seller.seller',compact('data'));
    }

    public function create_view(Request $request)
    {
        return view('seller.create');
    }

    public function create_process(Request $request)
    {
        $seller = new Seller;
        $seller->nama_penjual = $request->nama_penjual;
        $seller->alamat_penjual = $request->alamat_penjual;
        $seller->telfon_penjual = $request->telfon_penjual;
        $seller->transaksi_terakhir = "2021-03-31";
        $seller->status_penjual = 1;
        $seller->save();

        return redirect(route('seller'));
    }

    public function update_view($id)
    {
        $seller = Seller::find($id);
        return view('seller.update',compact('seller'));
    }

    public function update_process($id,Request $request)
    {
        $seller = Seller::find($id);
        $seller->nama_penjual = $request->nama_penjual;
        $seller->alamat_penjual = $request->alamat_penjual;
        $seller->telfon_penjual = $request->telfon_penjual;
        $seller->save();

        return redirect(route('seller'));
    }

    public function deleteSeller(Request $request)
    {
        $seller = Seller::find($request->id);
        $seller->delete();

        return redirect(route('seller'));
    }
}
