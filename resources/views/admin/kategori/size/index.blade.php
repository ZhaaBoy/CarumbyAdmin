@extends('kerangka.kerangka')
@section('title', 'Add Product Carumby')
@section('kategori', 'active')
@section('content')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title">Size</h4>
                    <a href="{{route('sizes.create')}}" class="btn btn-primary mb-3">Create</a>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead class="table-primary">
                            <tr>
                                <th>No</th>
                                <th>Size</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($size as $key => $sz)
                                <tr>
                                    <td>{{ $size->firstItem() + $key }}</td>
                                    <td>{{ $sz->name }}</td>
                                    <td>
                                        <form action="{{ route('sizes.destroy', $sz->id) }}" method="POST"
                                            class="pt-1">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">
                                            Delete</button>
                                        </form>
                                    </td>

                                </tr>
                            @empty
                                <tr>
                                    <td colspan="9" class="text-center">Data Kosong</td>
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
