@extends('layouts.panel')
@section('title' , 'Mekanik')
@section('content')
           
<div class="my-3">
  <a href="/input-mekanik" class="btn btn-primary" role="button" data-bs-toggle="button"> + Tambah Mekanik</a>
  </div>

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
                    <th>Nama Mekanik</th>
                    <th>Jenis Kelamin</th>
                    <th>Level</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($itemList as $data )
                    <tr>
                        <input type="hidden" class="delete_id" value="{{ $data->id }}">
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->nama }}</td>
                        <td>{!! $data->jenis_kelamin !!}</td>
                        <td>{{ $data->level }}</td>
                        <form action="{{ route('mekanik.destroy', $data->id) }}" method="POST">
                            <td><a href="mekanik-edit/{{ $data->id }}"><button type="button" class="btn btn-info"><i class="fa-regular fa-pen-to-square"></i> Edit</button>{{ $data->action }}</a>
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
