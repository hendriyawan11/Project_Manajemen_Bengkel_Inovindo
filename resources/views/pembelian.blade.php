@extends('layouts.panel')
@section('title' , 'Pembelian Spareparts')
@section('content')
<<<<<<< HEAD
<div class="my-3">
            <a href="/input-pembelian" class="btn btn-primary" role="button" data-bs-toggle="button"> + Tambah  Pembelian</a>
            </div>
=======

<div class="my-3">
  <a href="/input-pembelian" class="btn btn-primary" role="button" data-bs-toggle="button"> + Tambah Jenis Servis</a>
  </div>

  @if (Session::has('status'))
      <div class="alert alert-success col-4" role="alert">
         <i class="fa-solid fa-check"></i> {{ Session::get('message') }}
          </div>
    @endif
>>>>>>> fdf896b2638788f68382c9237461fc12aaa42f3a
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
                        <td>{!! $data->deskripsi !!}</td>
                        <td>{{ $data->harga }}</td>
                        <td>{{ $data->jumlah }}</td>
<<<<<<< HEAD
                        <td>{{ $data->tanggal }}</td>
=======
>>>>>>> fdf896b2638788f68382c9237461fc12aaa42f3a
                        <td>{{ $data->foto }}</td>
                        <form action="{{ route('pembelian.destroy', $data->id) }}" method="POST">
                          <td><a href="pembelian-edit/{{ $data->id }}"><button type="button" class="btn btn-info"><i class="fa-regular fa-pen-to-square"></i> Edit</button>{{ $data->action }}</a>
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
