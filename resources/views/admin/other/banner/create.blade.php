@extends('kerangka.kerangka')
@section('title', 'Banner Carumby')
@section('lainnya', 'active')
@section('content')

<form action="{{route('banner.store')}}">
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Tambah Banner</h4>
            <div class="mb-3">
                <label for="productimage" class="form-label">Banner Website</label>
                <p class="text-secondary-emphasis">Sebaiknya sertakan minimal 3 foto dengan ukuran (2000x2000px) untuk menampilkan slider / Baner Website dengan jelas</p>
                <div class="card" style="background-color: white; width: 150px; height: 150px:">
                    <label for="productimage"><img src="/assets/uploadd.png" alt="" style="cursor: pointer"
                            width="150px" height="150px"></label>
                    <input class="form-control form-control-sm" id="productimage" style="display: none"
                        name="banner[]" type="file" multiple>
                </div>

            </div>
        </div>
    </div>
</div>
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <div class="mb-3">
                <label for="productimage" class="form-label">Uplad Syarat dan Ketentuan Pre Order</label>
                <p class="text-secondary-emphasis">Sebaiknya sertakan minimal 3 foto dengan ukuran (2000x2000px) untuk menampilkan slider / Baner Website dengan jelas</p>
                <div class="card" style="background-color: white; width: 150px; height: 150px:">
                    <label for="productimage1"><img src="/assets/uploadd.png" alt="" style="cursor: pointer"
                            width="150px" height="150px"></label>
                    <input class="form-control form-control-sm" id="productimage1" style="display: none"
                        name="sk[]" type="file" multiple>
                </div>
            </div>
            <div class="d-flex justify-content-end">
                <button class="btn btn-danger" type="submit">Tambah</button>
            </div>
        </div>
    </div>
</div>
</form>
@endsection
