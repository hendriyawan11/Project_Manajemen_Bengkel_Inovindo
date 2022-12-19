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
        @if (Session::has('status'))
                <div class="alert alert-success col-4" role="alert">
                   <i class="fa-solid fa-check"></i> {{ Session::get('message') }}
                    </div>
              @endif
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
                    <form action="{{ route('report.destroy', $data->id) }}" method="POST">
                        <td><a href="invoice/{{ $data->id }}"><button type="button" class="btn btn-info"><i class="fa-regular fa-pen-to-square"></i> Edit</button>{{ $data->action }}</a>
                    @csrf
                    @method('delete')
                    <button  class="btn btn-danger btndelete"><i class="fa-regular fa-trash-can"></i> Delete </button>
                </form>
                </td>
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
