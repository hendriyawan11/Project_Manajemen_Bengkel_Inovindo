<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class Pembelian extends Controller
{
        public function shop(){
        $shop = Pembelian::all();
        return view('pembelian',['itemList' => $shop]);
}
}
