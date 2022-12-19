<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sparepart;

class SparepartController extends Controller
{
    public function sparepart(){
      $sparepart = Sparepart::all();
      return view('semua-sparepart',['itemList' => $sparepart]);
  }
  
  public function destroy($id)
  {
      $sparepart = Sparepart::find($id);
      $sparepart->delete();
      return response()->json(['status' => 'Laporan Berhasil di hapus!']);
  }
   
  }
  
  