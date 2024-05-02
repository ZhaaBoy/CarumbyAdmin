@extends('kerangka.kerangka')
@section('title', 'Waktu Pre-order Carumby')
@section('preorder', 'active')
@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Waktu Pre-Order</h4>
        <p>Tentukan Waktu Pre-Order</p>
        <div class="d-flex justify-content-start row g-3">
            <div class="col-3">
                <input type="text" class="form-control" name="daterange" />
            </div>
            {{-- <div class="col-3">
                <label for="EndDate" class="mb-2">End Date</label>
                <input class="form-control" type="Date" id="EndDate">
            </div> --}}

        </div>



        <div class="mt-3">

            <button class="btn btn-primary">
                Terbitkan Produk
            </button>
        </div>
    </div>
    </div>
  </div>
</div>
@endsection
