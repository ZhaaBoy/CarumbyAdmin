@extends('kerangka.kerangka')
@section('title', 'Daftar Produk Carumby')
@section('preorder', 'active')
@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Daftar Produk</h4>
        <p>Pilih beberapa produk yang ingin di upload dengan maksimal 3 produk</p>
        <div class="table-responsive">
          <table class="table">
            <thead class="table-primary">
              <tr>
                <th></th>
                <th>No Produk</th>
                <th>Foto</th>
                <th>Nama Produk</th>
                <th>SKU</th>
                <th>Total Stok</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  </div></td>
                <td>CRMBY001</td>
                <td><img src="assets/carrumby4.png" width="" class="img-lg" alt="" srcset=""></td>
                <td>Jaket Gunung Carumby Moonsoon</td>
                <td>JKTMNSN01</td>
                <td><span class="badge bg-info text-dark">100</span></td>
                <td><button class="btn btn-warning">Edit</button></td>

              </tr>

            </tbody>
          </table>
        </div>
        <div class="mt-3 d-flex justify-content-end">
          <button class="btn btn-danger" style="background-color: #FF0000; width: 150px">Tetapkan Waktu Pre-Order</button>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
