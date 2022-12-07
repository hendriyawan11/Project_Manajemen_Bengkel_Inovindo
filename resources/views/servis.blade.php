@extends('layouts.panel')
@section('title' , 'Servis')
@section('content')
            <p>
            <a href="/input-servis" class="btn btn-primary" role="button" data-bs-toggle="button">Input Data Service</a>
            </p>
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
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->jenis_servis }}</td>
                        <td>{{ $data->deskripsi }}</td>
                        <td>{{ $data->harga }}</td>
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
              <!-- /.card-header -->
              <div class="card-body pt-0">
                <!--The calendar -->
                <div id="calendar" style="width: 100%"></div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

  @endsection
