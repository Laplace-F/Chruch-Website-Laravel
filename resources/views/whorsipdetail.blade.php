@extends('layouts.home')

@section('content')
    {{-- <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-3 text-white mb-4 animated slideInDown">{{ $data->judulwhorsip }}</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('whorsip') }}">Worship</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $data->judulwhorsip }}</li>
                </ol>
            </nav>
        </div>
    </div> --}}
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 justify-content-center"> {{-- Tambahkan justify-content-center --}}

                <div class="col-lg-8 wow fadeInUp mb-4" data-wow-delay="0.3s"> {{-- Ubah ke col-lg-8 untuk gambar lebih besar, tambah mb-4 --}}
                    <div class="card shadow-lg border-0 rounded-3"> {{-- Tambahkan shadow dan rounded-3 --}}
                        <img src="{{ asset('storage/uploads/' . $data->foto) }}" class="img-fluid rounded-top"
                            alt="{{ $data->judulwhorsip }}" style="max-height: 500px; object-fit: cover; width: 100%;"> {{-- Batasi tinggi, object-fit --}}
                        <div class="card-body">
                            <h2 class="card-title text-primary mb-3">{{ $data->judulwhorsip }}</h2> {{-- Judul di dalam card-body --}}

                            {{-- Lokasi dan Jam Dibuat Lebih Rapih --}}
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <p class="text-muted mb-1"><i class="fas fa-map-marker-alt me-2"></i> Lokasi:</p>
                                    <h5 class="text-dark">{{ $data->lokasi }}</h5>
                                </div>
                                <div class="col-md-6">
                                    <p class="text-muted mb-1"><i class="far fa-clock me-2"></i> Jam:</p>
                                    <h5 class="text-dark">{{ $data->jam }}</h5>
                                </div>
                            </div>
                            <hr>
                        </div>
                    </div>
                </div>

                <div class="col-12 text-center mt-4 wow fadeInUp" data-wow-delay="0.9s">
                    <a class="btn btn-primary btn-lg py-3 px-5" href="{{ url('whorsip') }}">
                        <i class="fas fa-arrow-left me-2"></i> Kembali ke Daftar Worship
                    </a>
                </div>

            </div>
        </div>
    </div>
    @endsection
