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
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Jenis Transaksi</th>
                    <th scope="col">Total</th>
                    <th scope="col">Keterangan</th>
                </tr>
            </thead>
            <tbody>
                
                <tr>
                    
                </tr>
        
            </tbody>
        </table>
    </div>
</div>
  </div>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

  @endsection
