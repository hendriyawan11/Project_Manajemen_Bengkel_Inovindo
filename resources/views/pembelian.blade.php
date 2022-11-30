@extends('layouts.panel')

@section('content')
            <div class="container mt-3"> 
              <a href="/input_pembelian" class="btn btn-primary" role="button" data-bs-toggle="button">Input Data Pembelian</a>
              <p>          
                <div class="card">
                  <!-- /.card-header -->
                  <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                      <tr>
                        <th>ID Barang</th>
                        <th>Nama Barang</th>
                        <th>Merk</th>
                        <th>Tanggal Beli</th>
                        <th>Jumlah Barang</th>
                        <th>Harga Barang</th>
                        <th>Deskripsi</th>
                        <th>Foto</th>
                        <th>Action</th>
                      </tr>
                      </thead>
                      <tbody>
                      <tr>
                        <td>Trident</td>
                        <td>Internet</td>
                        <td>Win 95+</td>
                        <td> 4</td>
                        <td>X</td>
                        <td>Internet</td>
                        <td>Win 95+</td>
                        <td> <img src="..." class="rounded mx-auto d-block" alt="...">
                        </td>
                        <td><div class="btn-group">
                          <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            Action
                          </button>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Separated link</a></li>
                          </ul>
                        </div></td>
                      </tr>
                      </tbody>
                      <tfoot>
                      <tr>
                        <th>ID Barang</th>
                        <th>Nama Barang</th>
                        <th>Merk</th>
                        <th>Tanggal Beli</th>
                        <th>Jumlah Barang</th>
                        <th>Harga Barang</th>
                        <th>Deskripsi</th>
                        <th>Foto</th>
                        <th>Action</th>
                      </tr>
                      </tfoot>
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
            </p>
            </div>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <nav aria-label="Page navigation example">
      <ul class="pagination justify-content-center" style="margin:20px 0">
        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">Next</a></li>
      </ul>
    </nav>
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
=======
@section('title' , 'Pembelian')
  @endsection
