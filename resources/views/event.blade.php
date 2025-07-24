@extends('layouts.home')
@section('content')

<head>
    <meta charset="utf-8">
    <title>Every Nation Gading Serpong </title>



    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    {{--
  <link rel="icon" href="{{ asset('assets/home/img/logo.png') }}" type="image/png" sizes="32x32">

--}}
</head>
<!-- Page Header Start -->
{{-- <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h1 class="display-3 text-white mb-4 animated slideInDown">Kegiatan Kami</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item active" aria-current="page">Kegiatan</li>
            </ol>
        </nav>
    </div>
</div> --}}
@php
$pertama = $kegiatan->slice(0, 1)->first(); // Data pertama
$kedua = $kegiatan->slice(1, 1)->first(); // Data kedua
$sisanya = $kegiatan->slice(2); // Sisanya
@endphp

<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp mb-5" data-wow-delay="0.1s" style="max-width: 600px;">
            <h1 class="display-5 mb-3 text-dark">Upcoming Event's</h1>
        </div>
  {{-- dua pertama ada disini --}}
@if ($pertama)
<div class="card mb-5 shadow-sm border-0" style="background-color:#e6f0ff !important; border-radius: 1rem">
    <div class="card-body px-4 py-5">
        <div class="row align-items-center mb-4">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <h3 class="fw-bold text-dark">{{ $pertama->judulkegiatan }}</h3>
                <b class="text-secondary mb-3 d-block">{{ $pertama->lokasi }}</b>
                <p class="text-dark text-justify" style="line-height: 1.7">
                    {{
                        \Illuminate\Support\Str::limit(
                            html_entity_decode(strip_tags($pertama->deskripsikegiatan)),
                            1500
                        )
                    }}
                </p>
            </div>
            <div class="col-lg-6 text-center">
                <img src="{{ asset('storage/uploads/' . $pertama->foto) }}"
                    alt="{{ $pertama->judulkegiatan }}"
                    class="img-fluid rounded shadow-sm"
                    style="max-height: 350px; object-fit: cover; width: 100%">
            </div>
        </div>
    </div>
</div>
@endif

@if ($kedua)
<div class="card mb-5 shadow-sm border-0" style="background-color: #e6f0ff !important; border-radius: 1rem">
    <div class="card-body px-4 py-5">
        <div class="row align-items-center">
            <div class="col-lg-6 order-lg-2 mb-4 mb-lg-0">
                <h3 class="fw-bold text-dark">{{ $kedua->judulkegiatan }}</h3>
                <b class="text-secondary mb-3 d-block">{{ $kedua->lokasi }}</b>
                <p class="text-dark text-justify" style="line-height: 1.7">
                    {{
                        \Illuminate\Support\Str::limit(
                            html_entity_decode(strip_tags($kedua->deskripsikegiatan)),
                            1500
                        )
                    }}
                </p>
            </div>
            <div class="col-lg-6 order-lg-1 text-center">
                <img src="{{ asset('storage/uploads/' . $kedua->foto) }}"
                    alt="{{ $kedua->judulkegiatan }}"
                    class="img-fluid rounded shadow-sm"
                    style="max-height: 350px; object-fit: cover; width: 100%">
            </div>
        </div>
    </div>
</div>
@endif


    </div>
</div>
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp mb-5" data-wow-delay="0.1s" style="max-width: 600px;">
            <h1 class="display-5 mb-3 text-dark">JOIN OUR EVENT'S</h1>
        </div>
        <div class="row g-5">
            @foreach ($sisanya as $item)
            <div class="col-md-6 col-12 mb-4">
                <div class="card">
                    <img src="{{ asset('storage/uploads/' . $item->foto) }}" style="max-height:350px;"
                        class="card-img-top img-fluid" alt="{{ $item->judulkegiatan }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->judulkegiatan }}</h5>
                        <p class="card-text text-justify">

                            {{
                            \Illuminate\Support\Str::limit(html_entity_decode(strip_tags($item->deskripsikegiatan)),
                            1500) }}
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-center mt-5">
            {{ $kegiatan->links('vendor.pagination.bootstrap-4') }}
        </div>
    </div>
</div>
<!-- Kegiatan End -->
@endsection