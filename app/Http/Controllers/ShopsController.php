<?php

namespace App\Http\Controllers;

use App\Models\Shops;
use Illuminate\Http\Request;

class ShopsController extends Controller
{

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
}
