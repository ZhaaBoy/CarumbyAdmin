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
                    {{-- <div class="form-group">
                        <label for="exampleInputUsername1">Kode Product</label>
                        <input type="text" value="{{ $product }}" name="product_code" class="form-control"
                            id="codeproduct" placeholder="Username" disabled>
                    </div> --}}
                    <div class="form-group">
                        <label for="exampleInputUsername1">Nama Product</label>
                        <input type="text" name="name" class="form-control" id="exampleInputUsername1"
                            placeholder="Username">
                    </div>

                    <div class="mb-3">
                        <label for="formFileSm" class="form-label">Gambar Product</label>
                        <p class="text-secondary-emphasis">Ukuran gambar dalam format PNG,JPG, atau JPEG, Resolusi gambar
                            minimal 600 x 600 px dan ukuran file maksimal 5 mb.</p>
                        <div class="card" style="background-color: white; width: 150px; height: 150px:">
                            <label for="formFileSm"><img src="/assets/uploadd.png" alt="" style="cursor: pointer"
                                    width="150px" height="150px"></label>
                            <input class="form-control form-control-sm" id="formFileSm" style="display: none" name="image"
                                type="file">
                        </div>

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
                    <div class="form-group">
                        <label for="formFileSm" class="form-label">Sebaiknya sertakan minimal 3 foto untuk menampilkan
                            produk anda dengan jelas</label>
                        <div class="card" style="background-color: white; width: 150px; height: 150px:">
                            <label for="formFileSm"><img src="/assets/uploadd.png" alt="" style="cursor: pointer"
                                    width="150px" height="150px"></label>
                            <input class="form-control form-control-sm" id="formFileSm" style="display: none" name="image"
                                type="file">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="formFileSm" class="form-label">Video Product</label>
                        <p class="text-secondary-emphasis">vidio harus memiliki aspek rasio antara 9:16 hingga 16:9 dengan
                            size maksimal 100 MB</p>
                        <div class="card" style="background-color: white; width: 150px; height: 150px:">
                            <label for="formFileSm"><img src="/assets/uploadd.png" alt="" style="cursor: pointer"
                                    width="150px" height="150px"></label>
                            <input class="form-control form-control-sm" id="formFileSm" style="display: none" name="image"
                                type="file">
                        </div>
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

                    <div class="card p-3 row mb-3">
                        <h4 class="card-title">
                            Warna
                        </h4>
                        <div class="d-flex  ">
                            @forelse ($color as $cr)
                                <div class="btn-group g-3" role="group" aria-label="Basic checkbox toggle button group">
                                    <input type="checkbox" class="btn-check" id="{{ $cr->id }}" name="color"
                                        autocomplete="off">
                                    <label class="btn btn-outline-primary rounded-pill"
                                        for="{{ $cr->id }}">{{ $cr->name }}</label>
                                    <!-- Button trigger modal -->
                                @empty
                                    <div>Data Kosong</div>
                            @endforelse
                        </div>
                    </div>
            </div>
        </div>
        <div class="card p-3 row mt-2">
            <h4 class="card-title">
                Ukuran
            </h4>

            <div class="d-flex grid">
                @forelse ($size as $sz)
                    <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                        <input type="checkbox" class="btn-check" id="{{ $sz->id }}" name="size"
                            autocomplete="off">
                        <label class="btn btn-outline-primary" for="{{ $sz->id }}">{{ $sz->name }}</label>
                        <!-- Button trigger modal -->
                    @empty
                        <div>Data Kosong</div>
                @endforelse
            </div>
            <!-- Button trigger modal -->

        </div>
    </div>


    </div>
    <div class="card p-3 row mt-3">
        <div class="row">
            <div class="row row-cols-2">
                <div class="col-3">
                    <div class="input-group mb-3">
                        <label for="" class="d-flex align-items-center px-3">Berat</label>
                        <input type="text" class="form-control" aria-label="Recipient's username"
                            aria-describedby="basic-addon2">
                        <span class="input-group-text" id="basic-addon2">gr</span>
                    </div>
                </div>
            </div>
            <div class="row g-3">
                <div class="col-6">
                    <div class="row g-3">
                        <div class="col-4">
                            <div class="input-group mb-3">
                                <label for="" class="d-flex align-items-center px-3">Ukuran</label>
                                <input type="text" class="form-control" aria-label="Recipient's username"
                                    aria-describedby="basic-addon2">
                                <span class="input-group-text" id="basic-addon2">cm</span>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" aria-label="Recipient's username"
                                    aria-describedby="basic-addon2">
                                <span class="input-group-text" id="basic-addon2">cm</span>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" aria-label="Recipient's username"
                                    aria-describedby="basic-addon2">
                                <span class="input-group-text" id="basic-addon2">cm</span>
                            </div>
                        </div>

                    </div>
                </div>


            </div>
        </div>
        <!-- Button trigger modal -->

    </div>
    <div class="d-flex justify-content-end mt-3">
        <button type="submit" class="btn btn-danger"
            style="border-radius: 10px; background-color: #FF0000;">Lanjut</button>
    </div>

    </form>
    </div>
    </div>
    </div>
    </div>
@endsection
