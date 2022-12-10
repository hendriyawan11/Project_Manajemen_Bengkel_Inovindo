@extends('layouts.panel')
@section('title' , 'Servis')
@section('content')
            <div class="my-3">
            <a href="/input-servis" class="btn btn-primary" role="button" data-bs-toggle="button"> + Tambah Jenis Servis</a>
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
                    <th class="col-1">NO</th>
                    <th>Jenis Servis</th>
                    <th>Deskiripsi</th>
                    <th>Harga</th>
                    <th class="col-2">Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($itemList as $data )
                    <tr>
                        <input type="hidden" class="delete_id" value="{{ $data->id }}">
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->jenis_servis }}</td>
                        <td>{!! $data->deskripsi !!}</td>
                        <td>{{ $data->harga }}</td>
                        <form action="{{ route('servis.destroy', $data->id) }}" method="POST">
                            <td><a href="servis-edit/{{ $data->id }}"><button type="button" class="btn btn-info"><i class="fa-regular fa-pen-to-square"></i> Edit</button>{{ $data->action }}</a>
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
