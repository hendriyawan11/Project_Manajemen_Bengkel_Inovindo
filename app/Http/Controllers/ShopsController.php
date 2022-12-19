<?php

namespace App\Http\Controllers;

use App\Models\Shops;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ShopsController extends Controller
{
<<<<<<< HEAD

        public function shops(){
           $shops = Shops::all();
           return view('pembelian',[ 'itemList' => $shops]);
   }
public function create(){
    $shop = Shops::select('id', 'nama', 'merk', 'deskripsi', 'harga', 'jumalh', 'tanggal', 'foto',)->get();
    return view ('input-pembnelian',['pembelian'=>$shop]);
    }
    public function store (Request $request){
        $shop = Shops::create($request->all());

        if ($shop){
            Shops::flash('status','success');
            Shops::flash('message','berhasil menambahkan data baru !');
        }
        return redirect('/pembelian');
}
=======
    public function pembelian(){
        $pembelian = Shops::all();
        return view('pembelian',['itemList' => $pembelian]);
}
    public function create(){
    $pembelian = Shops::select('id', 'merk')->get();
    return view ('input-pembelian',['pembelian'=>$pembelian]);

    }
    public function store (Request $request){
        $pembelian = Shops::create([
            'merk' => request('merk'),
            'deskripsi' => request('deskripsi'),
            'harga' => request('harga'),
            'jumlah' => request('jumlah'),
            'foto' => request('foto'),
        ]);
        if ($pembelian){
            Session::flash('status','success');
            Session::flash('message','berhasil menambahkan data baru !');
        }
        return redirect('/pembelian');
}
    public function edit (Request $request, $id){
        $pembelian = Shops::findOrFail($id);
        return view('layouts.pembelian-edit',['pembelian'=>$pembelian]);
>>>>>>> fdf896b2638788f68382c9237461fc12aaa42f3a
}
    public function update (Request $request, $id){
  $pembelian = Shops::findOrFail($id);
  $pembelian -> update($request->all());
   if ($pembelian){
            Session::flash('status','success');
            Session::flash('message','berhasil update data !');
        }
  return redirect('/pembelian');
}

public function destroy($id)
    {
        $pembelian = Shops::find($id);
        $pembelian->delete();
        return response()->json(['status' => 'Pembelian Berhasil di hapus!']);
    }
   }
   