@extends('layouts.panel')
@section('title' , 'Laporan')
@section('content')

<div class="container my-4">
    <div class="row">
        <div class="my-2">
            <form action="/" method="GET">
                <div class="input-group mb-3">
                    <input type="date" class="form-control" name="start_date">
                    <input type="date" class="form-control" name="end_date">
                    <button class="btn btn-primary" type="submit">Filter</button>
                </div>
            </form>
        </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th class="col-1">NO</th>
                <th>Tanggal</th>
                <th>Jenis Tansaksi</th>
                <th>Total</th>
                <th class="col-2">Keterangan</th>
              </tr>
              </thead>
              <tbody>
                @foreach ($report as $data )
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data->tanggal }}</td>
                    <td>{{ $data->jenis_transaksi }}</td>
                    <td>{{ $data->total }}</td>
                    <td>{{ $data->keterangan }}</td>
                    <td><a href="/{{ $data->id }}"><button type="button" class="btn btn-info"><i class="fa-regular fa-pen-to-square"></i></button>{{ $data->action }}</a>
                    <button type="button" class="btn btn-danger"> <i class="fa-regular fa-trash-can"></i></button>{{ $data->action }}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
        </div>
                
                <tr>
                    
                </tr>
        
            </tbody>
        </table>
    </div>
</div>


  @endsection
