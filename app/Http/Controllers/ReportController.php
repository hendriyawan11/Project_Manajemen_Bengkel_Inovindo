<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;

class ReportController extends Controller

{
  public function report(){
    $report = Report::all();
    return view('report-page.report',['itemList' => $report]);
}

public function destroy($id)
{
    $report = Report::find($id);
    $report->delete();
    return response()->json(['status' => 'Laporan Berhasil di hapus!']);
}
 
}

