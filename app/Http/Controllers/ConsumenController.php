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

        $consumen = Consumen::find($id);

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
    public function index2()
    {
        $data = Consumen::all();
        return view('consumen.consumen',compact('data'));
    }

    public function create_view(Request $request)
    {
        return view('consumen.create');
    }

    public function create_process(Request $request)
    {
        $consumen = new Consumen;
        $consumen->nama_konsumen = $request->nama_konsumen;
        $consumen->alamat_konsumen = $request->alamat_konsumen;
        $consumen->telfon_konsumen = $request->telfon_konsumen;
        $consumen->save();

        return redirect(route('consumen'));
    }

    public function update_view($id)
    {
        $consumen = Consumen::find($id);
        return view('consumen.update',compact('consumen'));
    }

    public function update_process($id,Request $request)
    {
        $consumen = Consumen::find($id);
        $consumen->nama_konsumen = $request->nama_konsumen;
        $consumen->alamat_konsumen = $request->alamat_konsumen;
        $consumen->telfon_konsumen = $request->telfon_konsumen;
        $consumen->save();

        return redirect(route('consumen'));
    }

    public function deleteConsumen(Request $request)
    {
        $consumen = Consumen::find($request->id);
        $consumen->delete();

        return redirect(route('consumen'));
    }
}
