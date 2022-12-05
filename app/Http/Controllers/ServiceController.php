<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
     public function servis(){
        $servis = Service::all();
        return view('servis',['itemList' => $servis]);
}
}
