@extends('layouts.panel')
@section('title', 'Semua Sparepart')
@section('content')

  @if (Session::has('status'))
      <div class="alert alert-success col-4" role="alert">
         <i class="fa-solid fa-check"></i> {{ Session::get('message') }}
          </div>
    @endif

            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>NO</th>
                    <th>Nama Sparepart</th>
                    <th>Merk Sparepart</th>
                    <th>Deskripsi</th>
                    <th>Stok</th>
                    <th>Harga Jual</th>
                    <th>Foto</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($itemList as $data )
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->nama_sparepart }}</td>
                        <td>{{ $data->merk_sparepart }}</td>
                        <td>{{ $data->deskripsi }}</td>
                        <td>{{ $data->stok }}</td>
                        <td>{{ $data->harga_jual }}</td>
                        <td>{{ $data->foto }}</td>
                        <form action="{{ route('sparepart.destroy', $data->id) }}" method="POST">
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

  @endsection
