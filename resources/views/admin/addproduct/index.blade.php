@extends('kerangka.kerangka')
@section('title', 'Add Product Carumby')
@section('product', 'active')
@section('content')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Tambah Product</h4>
                <form action="" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputUsername1">Kode Product</label>
                        <input type="text" value="{{ $product }}" name="product_code" class="form-control"
                            id="codeproduct" placeholder="Username" disabled>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername1">Nama Product</label>
                        <input type="text" name="name" class="form-control" id="exampleInputUsername1"
                            placeholder="Username">
                    </div>

                    <div class="mb-3">
                        <label for="formFileSm" class="form-label">Gambar Product</label>
                        <p class="text-secondary-emphasis">Ukuran gambar dalam format PNG,JPG, atau JPEG, Resolusi gambar
                            minimal 600 x 600 px dan ukuran file maksimal 5 mb.</p>
                        <input class="form-control form-control-sm" id="formFileSm" name="image" type="file">
                    </div>
                </form>
            </div>
        </div>

    </div>
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Deskripsi Produk</h4>
                <p>Rekomendasi panjang 25 karakter atau lebih. kategori akan otomatis di identifikasi </p>
                <form action="">
                    <div class="form-group">
                        <textarea class="form-control" name="description" style="height: 200px" id="exampleTextarea1" rows="12"
                            cols="12"></textarea>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Bagan Ukuran</h4>
                <form action="  ">
                    <div class="form-group d-flex grid gap-3">
                        <div class="row row-cols">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                    id="flexRadioDefault1">
                                <label class="form-check-label mb-2" for="flexRadioDefault1">
                                    Default radio
                                </label>
                                <img src="assets/carrumby4.png" alt="">
                            </div>
                        </div>
                        <div class="row row-cols">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" value="carumby"
                                    id="flexRadioDefault2">
                                <label class="form-check-label mb-2" for="flexRadioDefault2">
                                    Default checked radio
                                </label>
                                <img src="assets/chart.png" id="carumby" alt="" width="100dp" height="100dp">
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="formFileSm" class="form-label">Video Product</label>
                        <p class="text-secondary-emphasis">vidio harus memiliki aspek rasio antara 9:16 hingga 16:9 dengan
                            size maksimal 100 MB</p>
                        <input class="form-control form-control-sm" name="video" id="formFileSm" type="file">
                    </div>

                </form>
            </div>
        </div>
    </div>

    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Bagan Ukuran</h4>
                <p>Rekomendasi panjang 25 karakter atau lebih. kategori akan otomatis di identifikasi </p>
                <form action="">

                    <div class="card bg-secondary p-3 row mb-3">
                        <h4 class="card-title">
                            Warna
                        </h4>
                        <div class="d-flex grid gap-3">
                            @forelse ($color as $cr)
                                <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                                    <input type="checkbox" class="btn-check" id="{{ $cr->id }}" name="color"
                                        autocomplete="off">
                                    <label class="btn btn-outline-success"
                                        for="{{ $cr->id }}">{{ $cr->name }}</label>
                                    <!-- Button trigger modal -->
                                @empty
                                    <div>Data Kosong</div>
                            @endforelse
                        </div>
                    </div>
            </div>
            <div class="card bg-secondary p-3 row mt-5">
                <h4 class="card-title">
                    Ukuran
                </h4>

                <div class="d-flex grid gap-3">
                    @forelse ($size as $sz)
                        <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                            <input type="checkbox" class="btn-check" id="{{ $sz->id }}" name="size"
                                autocomplete="off">
                            <label class="btn btn-outline-success" for="{{ $sz->id }}">{{ $sz->name }}</label>
                            <!-- Button trigger modal -->
                        @empty
                            <div>Data Kosong</div>
                    @endforelse
                </div>
                <!-- Button trigger modal -->

                <!-- Modal -->
                <div class="modal fade" id="ukuran" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Tambah Ukuran</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('size.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-floating mb-3">
                                        <input type="text" name="product_code" value="{{ $code }}"
                                            class="form-control" id="product_code" placeholder="">
                                        <label for="floatingInput">Kode Produk</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" name="name" class="form-control" id="name"
                                            placeholder="">
                                        <label for="floatingInput">Ukuran</label>
                                    </div>
                                    <button type="submit" class="btn btn-danger">Tambah</button>
                                    <button type="button" class="btn" data-bs-dismiss="modal">Close</button>
                                </form>
                            </div>
                            <div class="modal-footer">


                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-end"">
            <button type="submit" class="btn btn-danger"
                style="border-radius: 10px; background-color: #FF0000;">Lanjut</button>
        </div>

        </form>
    </div>
    </div>

    
@endsection
