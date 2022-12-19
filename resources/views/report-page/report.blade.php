@extends('layouts.panel')
@section('title' , 'Laporan')
@section('content')


@if (Session::has('status'))
<div class="alert alert-success col-4" role="alert">
   <i class="fa-solid fa-check"></i> {{ Session::get('message') }}
    </div>
@endif
      <div class="card">
        <!-- /.card-header -->
        <div class="card-body">
          <form action="" method="post"></form>
            <div class="container align-items-start">
                <form action="">
                    <div class="row">
                        <div class="col form-group">
                            <label for="inputMulaiTanggal" class="font-weight-bold">Mulai Tanggal :</label>
                            <input type="date" id="inputMulaiTanggal" class="form-control" name="mulai_tanggal" value="" required>
                        </div>
                        <div class="col form-group">
                            <label for="inputSampaiTanggal" class="font-weight-bold">Sampai Tanggal :</label>
                            <input type="date" id="inputSampaiTanggal" class="form-control" name="sampai_tanggal" value="" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Filter</button>
                    </div>
                </form>
                <div class="row no-print">
                  <div class="col-12">
                    <a href="/report" rel="noopener" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a>
                  </div>
                </div>
            </div>
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th class="col-1">NO</th>
              <th>Tanggal</th>
              <th>Jenis Transaksi</th>
              <th>Total</th>
              <th>Keterangan</th>                   
              <th class="col-2">Action</th>
            </tr>
            </thead>
            <tbody>
              @foreach ($itemList as $data )
              <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $data->tanggal }}</td>
                  <td>{{ $data->jenis_transaksi }}</td>
                  <td>{{ $data->total }}</td>
                  <td>{{ $data->keterangan }}</td>
                  <form action="{{ route('report.destroy', $data->id) }}" method="POST">
                    <td><a href="/{{ $data->id }}"><button type="button" class="btn btn-info"><i class="fa-regular fa-pen-to-square"></i> Edit</button>{{ $data->action }}</a>
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
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</div>
<!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
</section>
<!-- /.content -->
</div>

@endsection
