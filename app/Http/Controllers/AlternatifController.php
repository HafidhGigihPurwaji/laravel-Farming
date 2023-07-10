<?php

namespace App\Http\Controllers;

use App\Models\Alternatif;
use Illuminate\Http\Request;

class AlternatifController extends Controller
{
    public function index() {
        return view('dataalternatif', [
            'users' => Alternatif::all(),
            'title' => 'Data alternatif'
        ]);
    }
    public function add() {
        return view('adddataalternatif',[
            'title' => 'Tambah Data alternatif'
        ]);
    }
    public function edit($id){
        
        // $alternatif = Alternatif::where('id', $id)->first();

        // return view('editalternatif', [
        //     'alternatif' => $alternatif,
        //     'title' => 'Edit Data alternatif'
        // ]);
        return view('editalternatif')->with([
            'alternatif' => Alternatif::find($id),
        ]);

    }

    public function update(Request $request, $id) {
        $alternatif1 = $request->input('alternatif');
        $harga1   = $request->input('harga');
        $kualitas1 = $request->input('kualitas');
        $kuantitas1 = $request->input('kuantitas');
        $keberlanjutanlingkungan1 = $request->input('keberlanjutanlingkungan');
        $jangkauanlayanan1 = $request->input('jangkauanlayanan');
        
        
        $alternatif = Alternatif::where('id', $id)->first();
        $alternatif->alternatif  = $alternatif1;
        $alternatif->harga = $harga1;
        $alternatif->kualitas = $kualitas1;
        $alternatif->kuantitas = $kuantitas1;
        $alternatif->keberlanjutanlingkungan = $keberlanjutanlingkungan1;
        $alternatif->jangkauanlayanan = $jangkauanlayanan1;
        

        $alternatif->save();

        return redirect()->to('/alternatif');
    }


    public function dashboard(){
        $alternatif= Alternatif::count();

        return view('main', compact('alternatif'));

    }

    public function store(Request $request) {
        $alternatif1 = $request->input('alternatif');
        $harga1 = $request->input('harga');
        $kualitas1 = $request->input('kualitas');
        $kuantitas1 = $request->input('kuantitas');
        $keberlanjutanlingkungan1 = $request->input('keberlanjutanlingkungan');
        $jangkauanlayanan1 = $request->input('jangkauanlayanan');
        

        $alternatif = new Alternatif;
        $alternatif->alternatif    = $alternatif1;
        $alternatif->harga = $harga1;
        $alternatif->kualitas = $kualitas1;
        $alternatif->kuantitas = $kuantitas1;
        $alternatif->keberlanjutanlingkungan = $keberlanjutanlingkungan1;
        $alternatif->jangkauanlayanan = $jangkauanlayanan1;
        

        $alternatif->save();

        return redirect()->to('/alternatif');
    }
    public function delete($id) {
        $alternatif = Alternatif::where('id', $id)->first();
        $alternatif->delete();
        return redirect()->back();
    }
}
