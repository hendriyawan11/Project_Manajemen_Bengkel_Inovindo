<?php

namespace App\Http\Controllers;

use App\Models\Shops;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ShopsController extends Controller
{
        public function shops(){
           $shops = Shops::all();
           return view('pembelian',['itemList' => $shops]);
   }
       public function create(){
       $shops = Shops::select('id', 'merk')->get();
       return view ('input-pembelian',['shops'=>$shops]);
       }
       public function store (Request $request){
           $shops = Shops::create($request->all());
   
           if ($shops){
               Session::flash('status','success');
               Session::flash('message','berhasil menambahkan data baru !');
           }
           return redirect('/pembelian');
   }
       public function edit (Request $request, $id){
           $shops = Shops::findOrFail($id);
           return view('layouts.pembelian-edit',['shops'=>$shops]);
   }
       public function update (Request $request, $id){
     $shops = Shops::findOrFail($id);
     $shops -> update($request->all());
      if ($shops){
               Session::flash('status','success');
               Session::flash('message','berhasil update data !');
           }
     return redirect('/pembelian');
   }
   
   public function destroy($id)
       {
           $shops = Shops::find($id);
           $shops->delete();
           return response()->json(['status' => 'Serivis Berhasil di hapus!']);
       }
   }
   