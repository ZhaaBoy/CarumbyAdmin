@extends('kerangka.kerangka')
@section('title', 'Add Size Carumby')
@section('kategori', 'active')
@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Tambah Size</h4>
            <form action="{{route('sizes.store')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="exampleInputUsername1">Size</label>
                    <input type="text" name="name" class="form-control" id="codeproduct" placeholder="Username">
                </div>
                <button class="btn btn-primary" type="submit">Simpan</button>
            </form>
        </div>
    </div>

</div>

@endsection
