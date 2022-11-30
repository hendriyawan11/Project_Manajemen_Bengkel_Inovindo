@extends('layouts.panel')
@section('title' , 'Mekanik')
@section('content')
            <p>
            <a href="/input_mekanik" class="btn btn-primary" role="button" data-bs-toggle="button">Tambah Data Mekanik</a>
            </p>
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID Mekanik</th>
                    <th>Nama Mekanik</th>
                    <th>Jenis Kelamin</th>
                    <th>Level</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>Trident</td>
                    <td>Win 95+</td>
                    <td> 4</td>
                    <td>X</td>
                    <td>X</td>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

  @endsection
