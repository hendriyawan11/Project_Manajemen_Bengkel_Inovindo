<?php

namespace App\Http\Controllers;

use App\Models\Sparepart;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index(){
   	 $sparepart = Sparepart::all();
        return view('semua-sparepart',['sparepart' => $sparepart]);
  }
}
