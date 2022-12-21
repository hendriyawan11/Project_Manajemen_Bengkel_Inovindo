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





  }

