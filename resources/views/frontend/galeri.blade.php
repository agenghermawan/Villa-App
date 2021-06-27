@extends('includes.app')

@section('content')
    <div class="container mt-4">
        <h4 class="font-weight-bold text-center"> GALERI</h4>
    </div>
    <section id="Galeri">
        <div class="container" style="padding-top: 50px;" data-aos="fade-up">
            <div class="row mb-4">
                @foreach ($data as $item)
                    {{ $item }}
                    <div class="col-md-3">
                        <div class="card">
                            <img class="card-img-top" src="{{ $item->Photos }}" alt="Card image cap">
                            <div class="card-body">
                                <div class="card-text">
                                    <h3> {{ $item->NamaFasilitas }}</h3>
                                </div>
                                <p class="card-text">
                                    {{ $item->Deskripsi }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
