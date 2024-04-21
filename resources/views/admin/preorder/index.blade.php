@extends('kerangka.kerangka')
@section('title', 'Pre - Order Carumby')
@section('product', 'active')
@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Live Product</h4>
        <p>Live Product merupakan data beberapa produk yang sudah ditambahkan di halaman tambah produk</p>
        <div class="table-responsive">
          <table class="table">
            <thead class="table-primary">
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
@endsection
