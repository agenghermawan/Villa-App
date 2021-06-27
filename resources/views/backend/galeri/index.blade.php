@extends('backend.includes.app')

@section('content')

    <div class="section-content section-dashboard-home" data-aos="fade-up">
        <div class="container-fluid">
            <div class="dashboard-heading">
                <h2 class="dashboard-title">My Products</h2>
                <p class="dashboard-subtitle">
                    Manage it well and get money
                </p>
            </div>
            <div class="dashboard-content">
                <div class="row">
                    <div class="col-12">
                        <a href="{{ route('galeri.create') }}" class="btn btn-success">Tambahkan Galeri</a>
                    </div>
                </div>
                <div class="row mt-4">
                    @foreach ($data as $item)
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <a class="card card-dashboard-product d-block" href="">
                                <div class="card-body">
                                    <img src="{{ Storage::url($item->Photos) }}" alt="" class="w-100 mb-2" />
                                    <div class="product-title">{{ $item->Fasilitas }}</div>
                                    <div class="product-category">{{ $item->Deskripsi }}</div>
                                </div>
                                <a href="{{ route('galeri.edit', $item->id) }}" class="btn btn-info d-inline"> Edit </a>
                                <form action="{{ route('galeri.destroy', $item->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-warning" type="submit"> Delete </button>
                                </form>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
