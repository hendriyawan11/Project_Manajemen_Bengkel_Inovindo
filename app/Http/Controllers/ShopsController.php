<?php

namespace App\Http\Controllers;

use App\Models\Shops;
use Illuminate\Http\Request;

class ShopsController extends Controller
{
    
        public function shops(){
           $shops = Shops::all();
           return view('pembelian',[ $itemList => $shops]);
   }
   public function create(){
    $shops = Shops::select('id', 'merk')->get();
    return view ('input-pembelian',['pembelian'=>$shops]);
    }
    public function store (Request $request){
        $shops = Shops::create($request->all());
        return redirect('/pembelian');
}

}
