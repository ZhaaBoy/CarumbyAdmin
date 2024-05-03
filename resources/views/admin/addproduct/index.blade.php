@extends('kerangka.kerangka')
@section('title', 'Add Product Carumby')
@section('product', 'active')
@section('content')
    <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        {{-- product name, gambar --}}
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Tambah Product</h4>
                    {{-- <div class="form-group">
                    <label for="code">Kode Product</label>
                    <input type="text" name="code" class="form-control"
                        id="code" placeholder="Product Code">
                </div> --}}
                    <div class="form-group">
                        <label for="code">Kode Product</label>
                        <input type="text" name="code" value="{{ $product }}" class="form-control" id="code"
                            placeholder="Kode product" disabled>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername1">Nama Product</label>
                        <input type="text" name="name" class="form-control" id="exampleInputUsername1"
                            placeholder="Username">
                    </div>

                    <div class="mb-3">
                        <label for="productimage" class="form-label">Gambar Product</label>
                        <p class="text-secondary-emphasis">Ukuran gambar dalam format PNG,JPG, atau JPEG, Resolusi
                            gambar
                            minimal 600 x 600 px dan ukuran file maksimal 5 mb.</p>
                        <div class="card" style="background-color: white; width: 150px; height: 150px:">
                            {{-- @php
                                $image = DB::table('products')->where('id',1)->first();
                                $images = explode('|', '$image');
                            @endphp
                            @foreach ($images as $item)
                            <img src="{{URL::to($item)}}" style="" alt="">
                            <br>
                            @endforeach --}}
                            <label for="productimage"><img src="/assets/uploadd.png" alt="" style="cursor: pointer"
                                    width="150px" height="150px"></label>
                            <input class="form-control form-control-sm" id="productimage" style="display: none"
                                name="image[]" type="file" multiple>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        {{-- Product Description --}}
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Deskripsi Produk</h4>
                    <p>Rekomendasi panjang 25 karakter atau lebih. kategori akan otomatis di identifikasi </p>
                    <div class="form-group">
                        <textarea class="form-control" name="description" style="height: 200px" id="exampleTextarea1" rows="12"
                            cols="12"></textarea>
                    </div>
                </div>
            </div>
        </div>

        {{-- Size Format  & Video --}}
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Bagan Ukuran</h4>
                    <div class="form-group">
                        <label for="format_size" class="form-label">Sebaiknya sertakan minimal 3 foto untuk menampilkan
                            produk anda dengan jelas</label>
                        <div class="card" style="background-color: white; width: 150px; height: 150px:">
                            <label for="format_size"><img src="/assets/uploadd.png" alt="" style="cursor: pointer"
                                    width="150px" height="150px"></label>
                            <input class="form-control form-control-sm" id="format_size" style="display: none"
                                name="format_size[]" type="file" multiple>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="video" class="form-label">Video Product</label>
                        <p class="text-secondary-emphasis">vidio harus memiliki aspek rasio antara 9:16 hingga 16:9
                            dengan
                            size maksimal 100 MB</p>
                        <div class="card" style="background-color: white; width: 150px; height: 150px:">
                            <label for="video"><img src="/assets/uploadd.png" alt="" style="cursor: pointer"
                                    width="150px" height="150px"></label>
                            <input class="form-control form-control-sm" id="video" style="display: none" name="video[]"
                                type="file" multiple>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        {{-- Sized & Colors --}}
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Bagan Ukuran</h4>
                    <p>Rekomendasi panjang 25 karakter atau lebih. kategori akan otomatis di identifikasi </p>
                    <div class="card p-3 row mb-3">
                        <h4 class="card-title">
                            Warna
                        </h4>
                        <div class="d-flex gap-3">
                            @forelse ($color as $cr)
                                <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                                    <input type="checkbox" class="btn-check" id="{{ $cr->name }}" name="colors[]"
                                        value="{{ $cr->id }}" autocomplete="off">
                                    <label class="btn btn-outline-primary rounded-pill"
                                        for="{{ $cr->name }}">{{ $cr->name }}</label>
                                </div>
                                <!-- Button trigger modal -->
                            @empty
                                <div>Data Kosong</div>
                            @endforelse
                        </div>
                    </div>

                    <div class="card p-3 row mt-2">
                        <h4 class="card-title">
                            Ukuran
                        </h4>

                        <div class="d-flex gap-3">
                            @forelse ($size as $sz)
                                <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                                    <input type="checkbox" class="btn-check" id="{{ $sz->name }}" name="sizes[]"
                                        value="{{ $sz->name }}
                                    autocomplete="on">
                                    <label class="btn btn-outline-primary"
                                        for="{{ $sz->name }}">{{ $sz->name }}</label>
                                </div>
                                <!-- Button trigger modal -->
                            @empty
                                <div>Data Kosong</div>
                            @endforelse
                        </div>
                    </div>

                    {{-- Ukuran --}}
                    <div class="card p-3 row mt-3">
                        <div class="row">
                            <div class="row row-cols-2">
                                <div class="col-3">
                                    <div class="input-group mb-3">
                                        <label for="" class="d-flex align-items-center px-3">Berat</label>
                                        <input type="text" class="form-control" name="weight"
                                            aria-label="Recipient's username" aria-describedby="basic-addon2">
                                        <span class="input-group-text" id="basic-addon2">gr</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-3">
                                <div class="col-6">
                                    <div class="row g-3">
                                        <div class="col-4">
                                            <div class="input-group mb-3">
                                                <label for=""
                                                    class="d-flex align-items-center px-3">Ukuran</label>
                                                <input type="text" class="form-control" name="height"
                                                    aria-label="Recipient's username" aria-describedby="basic-addon2">
                                                <span class="input-group-text" id="basic-addon2">cm</span>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" name="width"
                                                    aria-label="Recipient's username" aria-describedby="basic-addon2">
                                                <span class="input-group-text" id="basic-addon2">cm</span>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" name="lenght"
                                                    aria-label="Recipient's username" aria-describedby="basic-addon2">
                                                <span class="input-group-text" id="basic-addon2">cm</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-end">
                                    <button type="submit" class="btn btn-danger"
                                        style="border-radius: 10px; background-color: #FF0000;">Lanjut

                                    </button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </form>

@endsection
