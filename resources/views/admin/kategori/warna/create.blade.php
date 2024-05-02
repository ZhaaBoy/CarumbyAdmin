@extends('kerangka.kerangka')
@section('title', 'Add Size Carumby')
@section('kategori', 'active')
@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Tambah Warna</h4>
            <form action="{{route('warna.store')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="exampleInputUsername1">Warna</label>
                    <input type="text" name="name" class="form-control" id="warna" placeholder="Username">
                </div>
                <button class="btn btn-primary" type="submit">Simpan</button>
            </form>
        </div>
    </div>

</div>

@endsection
