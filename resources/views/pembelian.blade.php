@extends('layouts.panel')
@section('title' , 'Pembelian Spareparts')
@section('content')
<div class="my-3">
            <a href="/input-pembelian" class="btn btn-primary" role="button" data-bs-toggle="button"> + Tambah  Pembelian</a>
            </div>
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th class="col-1">NO</th>
                    <th>Nama Barang</th>
                    <th>Merk</th>
                    <th>Deskiripsi</th>
                    <th>Harga</th>
                    <th>Jumlah</th>
                    <th>Tanggal</th>
                    <th>Foto</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($itemList as $data )
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->nama }}</td>
                        <td>{{ $data->merk }}</td>
                        <td>{{ $data->deskripsi }}</td>
                        <td>{{ $data->harga }}</td>
                        <td>{{ $data->jumlah }}</td>
                        <td>{{ $data->tanggal }}</td>
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
