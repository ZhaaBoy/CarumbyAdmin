@extends('kerangka.kerangka')
@section('title', 'Pesanan Carumby')
@section('pesanan', 'active')
@section('content')
    <nav>
        <div class="nav nav-pills" id="nav-tab" role="tablist">
            <button class="nav-link" style="" id="nav-home-tab"
                data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                aria-selected="true">Perlu dikirim</button>
            <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button"
                role="tab" aria-controls="nav-profile" aria-selected="false">Disiapkan</button>
            <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button"
                role="tab" aria-controls="nav-contact" aria-selected="false">Dikirim</button>
            <button class="nav-link" id="nav-selesai-tab" data-bs-toggle="tab" data-bs-target="#nav-selesai" type="button"
                role="tab" aria-controls="nav-selesai" aria-selected="false">selesai</button>
        </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div class="row col-3">
                            <div class="input-group mb-3 ">
                                <input type="text" class="form-control" placeholder="search"
                                    aria-label="Recipient's username" aria-describedby="button-addon2">
                                <button class="btn btn-outline-secondary" type="button" id="button-addon2">Search</button>
                            </div>
                        </div>

                        <div class="d-flex justify-content-between d-grid gap-3 mb-3">
                            <button class="btn btn-secondary">Siapkan</button>
                            <button class="btn btn-warning"><a href="{{route('broadcast')}}" class="btn">Broadcast</a></button>

                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="table-primary">
                                <tr>
                                    <th></th>
                                    <th>No</th>
                                    <th>Pesanan</th>
                                    <th>Kode pelanggan</th>
                                    <th>Tanggal Pesanan</th>
                                    <th>Jumlah Dibayar</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                        </div>
                                    </td>
                                    <td><img src="assets/carrumby4.png" width="" class="img-lg" alt=""
                                            srcset=""></td>
                                    <td class="">Jaket Gunung Carumby Moonsoon
                                        <p>M, Hitam</p>
                                    </td>
                                    <td>JKTMNSN01</td>
                                    <td>Date</td>
                                    <td>Rp. 000.000</td>
                                    <td><span class="badge bg-info text-dark">Perlu Dikirim</span></td>

                                </tr>

                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div class="row col-3">
                            <div class="input-group mb-3 ">
                                <input type="text" class="form-control" placeholder="search"
                                    aria-label="Recipient's username" aria-describedby="button-addon2">
                                <button class="btn btn-outline-secondary" type="button" id="button-addon2">Search</button>
                            </div>
                        </div>

                        <div class="d-flex justify-content-between d-grid gap-3 mb-3">
                            <button class="btn btn-secondary">Kirim</button>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="table-primary">
                                <tr>
                                    <th></th>
                                    <th>No</th>
                                    <th>Pesanan</th>
                                    <th>Kode pelanggan</th>
                                    <th>Tanggal Pesanan</th>
                                    <th>Jumlah Dibayar</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                        </div>
                                    </td>
                                    <td><img src="assets/carrumby4.png" width="" class="img-lg" alt=""
                                            srcset=""></td>
                                    <td class="">Jaket Gunung Carumby Moonsoon
                                        <p>M, Hitam</p>
                                    </td>
                                    <td>JKTMNSN01</td>
                                    <td>Date</td>
                                    <td>Rp. 000.000</td>
                                    <td><span class="badge bg-info text-dark">Disiapkan</span></td>

                                </tr>

                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div class="row col-3">
                            <div class="input-group mb-3 ">
                                <input type="text" class="form-control" placeholder="search"
                                    aria-label="Recipient's username" aria-describedby="button-addon2">
                                <button class="btn btn-outline-secondary" type="button"
                                    id="button-addon2">Search</button>
                            </div>
                        </div>

                        <div class="d-flex justify-content-between d-grid gap-3 mb-3">
                            <button class="btn btn-secondary">Selesaikan</button>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="table-primary">
                                <tr>
                                    <th></th>
                                    <th>No</th>
                                    <th>Pesanan</th>
                                    <th>Kode pelanggan</th>
                                    <th>Tanggal Pesanan</th>
                                    <th>Jumlah Dibayar</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                        </div>
                                    </td>
                                    <td><img src="assets/carrumby4.png" width="" class="img-lg" alt=""
                                            srcset=""></td>
                                    <td class="">Jaket Gunung Carumby Moonsoon
                                        <p>M, Hitam</p>
                                    </td>
                                    <td>JKTMNSN01</td>
                                    <td>Date</td>
                                    <td>Rp. 000.000</td>
                                    <td><span class="badge bg-info text-dark">Dikirim</span></td>

                                </tr>

                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="nav-selesai" role="tabpanel" aria-labelledby="nav-selesai-tab">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div class="row col-3">
                            <div class="input-group mb-3 ">
                                <input type="text" class="form-control" placeholder="search"
                                    aria-label="Recipient's username" aria-describedby="button-addon2">
                                <button class="btn btn-outline-secondary" type="button"
                                    id="button-addon2">Search</button>
                            </div>
                        </div>


                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="table-primary">
                                <tr>
                                    <th></th>
                                    <th>No</th>
                                    <th>Pesanan</th>
                                    <th>Kode pelanggan</th>
                                    <th>Tanggal Pesanan</th>
                                    <th>Jumlah Dibayar</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                        </div>
                                    </td>
                                    <td><img src="assets/carrumby4.png" width="" class="img-lg" alt=""
                                            srcset=""></td>
                                    <td class="">Jaket Gunung Carumby Moonsoon
                                        <p>M, Hitam</p>
                                    </td>
                                    <td>JKTMNSN01</td>
                                    <td>Date</td>
                                    <td>Rp. 000.000</td>
                                    <td><span class="badge bg-info text-dark">Selesai</span></td>

                                </tr>

                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>

    </div>
@endsection
