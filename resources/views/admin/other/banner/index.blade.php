@extends('kerangka.kerangka')
@section('title', 'Banner Website Carumby')
@section('Lainnya', 'active')
@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Daftar Pelanggan</h4>
        <p>Data pelanggan carumby adventure merupakan  komposisi data pelanggan yang telah berhasil mendaftar dan membeli</p>
        <div class="table-responsive">
          <table class="table">
            <thead class="table-primary">
              <tr>
                <th>No</th>
                <th>Image</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td><img src="" alt=""></td>
                <td class="d-flex justify-content-betweeen"><button class="btn btn-primary">Edit</button><button class="btn btn-primary">Delete</button></td>
              </tr>

            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
