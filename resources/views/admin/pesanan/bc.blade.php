@extends('kerangka.kerangka')
@section('title', 'Add Product Carumby')
@section('product', 'active')
@section('content')

    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h1 class="card-title">Broadcast</h1>
                <form action="">
                    <h4 class="mb-3">Penerima Pesan <button class="btn btn-primary ml-3">+</button></h4>
                    <div class="form-group">
                        <label for="">Masukan Pesan</label>
                        <textarea class="form-control" name="description" style="height: 200px" id="exampleTextarea1" rows="12" cols="12"></textarea>
                    </div>
                    <div class="d-flex justify-content-end"">
                        <button type="submit" class="btn btn-danger" style="border-radius: 10px; background-color: #FF0000;">Lanjut</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection
