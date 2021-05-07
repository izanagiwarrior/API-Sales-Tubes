<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Consumen;

class ConsumenController extends Controller
{
    public function index()
    {
        return Consumen::all();
    }

    public function create(Request $request)
    {
        $consumen = new Consumen;
        $consumen->nama_konsumen = $request->nama_konsumen;
        $consumen->alamat_konsumen = $request->alamat_konsumen;
        $consumen->telfon_konsumen = $request->telfon_konsumen;
        $consumen->save();
        return "Consumen Data Has Been Created";
    }

    public function update(Request $request, $id)
    {

        $nama_konsumen = $request->nama_konsumen;
        $alamat_konsumen = $request->alamat_konsumen;
        $telfon_konsumen = $request->telfon_konsumen;

        $sales = Consumen::find($id);

        $consumen->nama_konsumen = $nama_konsumen;
        $consumen->alamat_konsumen = $alamat_konsumen;
        $consumen->telfon_konsumen = $telfon_konsumen;
        $consumen->save();

        return "Consumen Data Has Been Updated";
    }

    public function delete($id)
    {
        $consumen = Consumen::find($id);
        $consumen->delete();

        return "Consumen Data Has Been Deleted";
    }
}
