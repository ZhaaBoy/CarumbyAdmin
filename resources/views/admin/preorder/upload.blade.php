@extends('kerangka.kerangka')
@section('title', 'Upload Produk Carumby')
@section('preorder', 'active')
@section('content')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">List Varian</h4>
                <p>Silahkan lengkapi data Harga, dan Kuantitas</p>
                <div class="table-responsive">
                    <table class="table">
                        <thead class="table-primary">
                            <tr>
                                <th>Warna</th>
                                <th>Ukuran</th>
                                <th>Harga Jual</th>
                                <th>Kuantitas</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="font-size: 15px">Hitam</td>
                                <td style="font-size: 25px">s</td>
                                <td>
                                    <form action="">
                                        <input type="email" class="form-control" id="exampleFormControlInput1"
                                            placeholder="harga">
                                    </form>
                                </td>
                                <td>
                                    <form action="">
                                        <input type="email" class="form-control" id="exampleFormControlInput1"
                                            placeholder="kuantitas">
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="container">
                        <div class="d-flex justify-content-end row row-cols-2 mt-3">
                            <label for="" class="col-2">Total</label>
                            <input type="email" style="width: 25%" class="form-control col-" value="300"
                                id="exampleFormControlInput1" placeholder="kuantitas" disabled>

                        </div>
                    </div>

                    <div class="mt-3 d-flex justify-content-end">
                        <button class="btn btn-danger"
                            style="border-radius: 10px; background-color: #FF0000;">Lanjut</button>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
