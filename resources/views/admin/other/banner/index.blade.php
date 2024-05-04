@extends('kerangka.kerangka')
@section('title', 'Banner Website Carumby')
@section('Lainnya', 'active')
@section('content')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title">Banner Carumby</h4>
                   <a href="{{route('banner.create')}}"> <button class="btn btn-danger mb-2">Tambah</button></a>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead class="table-primary">
                            <tr>
                                <th>No</th>
                                <th>Banner</th>
                                <th>Syarat & Ketentuan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($banner as $key => $bnr)
                                <tr>
                                    <td>{{ $banner->firstItem() + $key }}</td>
                                    <td>{{ $bnr->banner }}</td>
                                    <td>{{ $bnr->sk }}</td>
                                    <td class="d-flex justify-content-betweeen gap-3"><button
                                            class="btn btn-primary">Edit</button><button
                                            class="btn btn-primary">Delete</button></td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="text-center">Data Kosong</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
