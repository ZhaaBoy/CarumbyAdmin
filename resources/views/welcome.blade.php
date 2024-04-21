<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Carumby Admin</title>
    @include('layout.style')
</head>

<body>
    <div class="container-scroller">
        @include('layout.sidebar')
        <div class="container-fluid page-body-wrapper">
            @include('layout.nav ')
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                {{-- @yield('content') --}}

                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">Live Product</h4>
                        <p>Live Product merupakan data beberapa produk yang sudah ditambahkan di halaman tambah produk</p>
                        <div class="table-responsive">
                          <table class="table">
                            <thead class="bg-primary text-primary">
                              <tr>
                                <th>No</th>
                                <th>Foto</th>
                                <th>Nama Produk</th>
                                <th>SKU</th>
                                <th>Kuantitas</th>
                                <th>Harga Jual</th>
                                <th>Tanggal PO</th>
                                <th>Status Produk</th>
                                <th>Action</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>1</td>
                                <td><img src="assets/carrumby4.png" width="" class="img-lg" alt="" srcset=""></td>
                                <td>Jaket Gunung Carumby Moonsoon</td>
                                <td>Varian</td>
                                <td>400</td>
                                <td>Rp. 199.000</td>
                                <td>01/01/2024 00.00- 01/02/2024</td>
                                <td><label class="badge badge-success">Diterbitkan</label></td>
                                <td><button class="btn btn-danger">Selesaikan</button></td>

                              </tr>

                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- content-wrapper ends -->

                <!-- partial:partials/_footer.html -->
                <footer class="footer">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright ©
                            bootstrapdash.com 2021</span>
                        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a
                                href="https://www.bootstrapdash.com/bootstrap-admin-template/"
                                target="_blank">Bootstrap admin template</a> from Bootstrapdash.com</span>
                    </div>
                </footer>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    @include('layout.script')
</body>

</html>
