@extends('layouts.home')

@section('content')
    <!-- Page Header Start -->
    {{-- <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-3 text-white mb-4 animated slideInDown">{{ $data->judulkegiatan }}</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('kegiatan') }}">Kegiatan</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $data->judulkegiatan }}</li>
                </ol>
            </nav>
        </div>
    </div> --}}
    <!-- Page Header End -->

    <!-- Kegiatan Detail Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <!-- Gambar Kegiatan -->
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <img src="{{ asset('storage/uploads/' . $data->foto) }}" class="img-fluid rounded-3 shadow"
                        alt="{{ $data->judulkegiatan }}">
                </div>

                <!-- Detail Kegiatan -->
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <h1 class="display-5 mb-4">{{ $data->judulkegiatan }}</h1>
                    <p class="text-muted mb-4">{{ \Carbon\Carbon::parse($data->tanggalkegiatan)->format('d M Y') }}</p>
                    <p>{!! $data->deskripsikegiatan !!}</p>
                    <a class="btn btn-danger py-3 px-4" href="{{ url('event') }}">Kembali ke Kegiatan</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Kegiatan Detail End -->
@endsection
