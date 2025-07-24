@extends('layouts.home')
@section('content')
    <!-- Page Header Start -->
    {{-- <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-3 text-white mb-4 animated slideInDown">Kontak Kami</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Kontak</li>
                </ol>
            </nav>
        </div>
    </div> --}}
    <!-- Page Header End -->

    <!-- Kontak Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <!-- Informasi Kontak -->
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <p class="fs-5 fw-bold text-primary">Hubungi Kami</p>
                    <h1 class="display-5 mb-5">Informasi Kontak</h1>
                    <p class="mb-4">Kami siap membantu Anda. Berikut adalah informasi kontak yang dapat Anda hubungi untuk
                        pertanyaan lebih lanjut:</p>
                    <ul class="list-unstyled">
                        <li class="mb-3">
                            <i class="fa fa-envelope text-primary me-3 fs-4"></i>
                            <strong>Email:</strong> <a href="mailto:{{ $kontak->email }}"
                                class="text-decoration-none text-dark">{{ $kontak->email }}</a>
                        </li>
                        <li class="mb-3">
                            <i class="fa fa-map-marker-alt text-primary me-3 fs-4"></i>
                            <strong>Alamat:</strong> {{ $kontak->alamat }}
                        </li>
                        <li class="mb-3">
                            <i class="fa fa-phone text-primary me-3 fs-4"></i>
                            <strong>Nomor Telepon:</strong> <a href="tel:{{ $kontak->nohp }}"
                                class="text-decoration-none text-dark">{{ $kontak->nohp }}</a>
                        </li>
                    </ul>
                </div>

                <!-- Peta Lokasi -->
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s" style="min-height: 450px;">
                    <div class="position-relative rounded overflow-hidden h-100 shadow-lg">
                        <iframe class="position-relative w-100 h-100"
                            src=""
                            frameborder="0" style="min-height: 450px; border:0;" allowfullscreen="" aria-hidden="false"
                            tabindex="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Kontak End -->
@endsection
