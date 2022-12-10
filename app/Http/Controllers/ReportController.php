<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;

class ReportController extends Controller

{
  public function report(){
     $report = Report::all();
     return view('report',['report' => $report]);
}
 
}

