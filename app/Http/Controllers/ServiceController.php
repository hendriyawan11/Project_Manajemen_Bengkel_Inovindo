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
    public function create(){
    $servis = Service::select('id', 'jenis_servis')->get();
    return view ('input-servis',['servis'=>$servis]);
    }
    public function store (Request $request){
        $servis = Service::create($request->all());
        return redirect('/servis');
}
}
