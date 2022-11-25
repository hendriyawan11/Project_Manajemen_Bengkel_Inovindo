@extends('layouts.panel')

@section('content')
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Pembelian Produk</h1>
            <div class="container mt-3">           
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>ID Barang</th>
                    <th>Nama Barang</th>
                    <th>Merk</th>
                    <th>Tgl.Beli</th>
                    <th>Jumlah Barang</th>
                    <th>Harga Barang</th>
                    <th>Deskripsi</th>
                    <th>Foto</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>123</td>
                    <td>Oli</td>
                    <td>Repsol</td>
                    <td>125-sep-22</td>
                    <td>10</td>
                    <td>35.000</td>
                    <td>150 ml</td>
                    <td>
                      <div class="text-center">
                        <img src="lte/dist/img/user2-160x160.jpg" alt="TBSM">
                      </div>
                    </td>
                    <td>
                      <div class="btn-group">
                        <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Detail
                        </button>
                        <ul class="dropdown-menu">
                          ...
                        </ul>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <a href="/input_pembelian" class="btn btn-primary" role="button" data-bs-toggle="button">Input Data Pembelian</a>
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
  @endsection
