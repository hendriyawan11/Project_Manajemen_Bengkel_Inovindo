@extends('layouts.panel')
@section('title' , 'Semua Spareparts')
@section('content')
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th class="col-1">NO</th>
                    <th>Merk</th>
                    <th>Deskiripsi</th>
                    <th>Harga</th>
                    <th>Jumlah</th>
                    <th>Foto</th>                    
                    <th class="col-2">Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($itemList as $data )
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->merk }}</td>
                        <td>{{ $data->deskripsi }}</td>
                        <td>{{ $data->harga }}</td>
                        <td>{{ $data->qty }}</td>
                        <td>{{ $data->foto }}</td>
                        <td><button class="btn btn-primary"><i class="fa-regular fa-pen-to-square"></i></button>{{ $data->action }}
                        <button class="btn btn-danger"> <i class="fa-regular fa-trash-can"></i></button>{{ $data->action }}</td>
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
