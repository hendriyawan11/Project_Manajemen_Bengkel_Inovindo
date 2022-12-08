@extends('layouts.panel')
@section('title' , 'Mekanik')
@section('content')
            <p>
            <a href="/input-mekanik" class="btn btn-primary" role="button" data-bs-toggle="button">Tambah Data Mekanik</a>
            </p>
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>NO</th>
                    <th>Nama Mekanik</th>
                    <th>Level</th>
                    <th>Jenis Kelamin</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                     @foreach ($itemList as $data )
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->nama }}</td>
                        <td>{{ $data->level }}</td>
                        <td>{{ $data->jenis_kelamin }}</td>
                    </tr>
                    @endforeach
                  </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

  @endsection
