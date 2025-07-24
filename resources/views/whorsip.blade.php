@extends('layouts.home')
@section('content')
<!-- Page Header Start -->
{{-- <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h1 class="display-3 text-white mb-4 animated slideInDown">Whorship Serve</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item active" aria-current="page">Whorship Serve</li>
            </ol>
        </nav>
        <h3>JOIN OUR WORSHIP SERVICES ON-SITE & ONLINE</h3>
    </div>
</div> --}}
<!-- Page Header End -->
<style>
    body {
        margin: 0;
        font-family: Arial, sans-serif;
    }

    .hero {
        position: relative;
        height: 100vh;
        background: url("{{ asset('storage/uploads/20250525133753_cc.png') }}") center center / cover no-repeat;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: rgba(255, 255, 255, 0.2);
        backdrop-filter: blur(1px);
        z-index: 1;
    }

    .hero-content {
        position: relative;
        z-index: 2;
        text-align: center;
        color: white;
    }

    .hero-content h1 {
        font-size: 5em;
        margin-bottom: 10px;
        font-weight: bold;
        color: white;
    }

    .hero-content p {
        font-size: 2.5em;
    }

    .cta-section {
        text-align: center;
        padding: 40px 20px;
    }

    .cta-section h2 {
        font-size: 4em;
        color: #222;
        margin-bottom: 20px;
    }

    .cta-button {
        background-color: #1054DD;
        color: white;
        padding: 10px 44px;
        font-size: 24px;
        border: none;
        border-radius: 30px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .cta-button:hover {
        background-color: #0d47bd;
    }
</style>

<div class="container-fluid p-0 wow fadeIn" data-wow-delay="0.1s">
    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="{{ asset('assets/bghome.jpg') }}" alt="Gereja 1">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-6">
                                <h1 class="display-1 text-white mb-5 animated slideInDown">WHORSHIP SERVE
                                </h1>
                                <h2 class="text-white">JOIN OUR WORSHIP SERVICES<br>ON-SITE & ONLINE</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- Worship Section Start -->
<div class="container-xxl py-5 bg-white">
    <div class="container">
        <div class="row mb-5">
            <div class="col text-center">
                <h2 class="fw-bold text-primary-emphasis">Join Us For An Exciting Church Experience This Weekend!</h2>
                <p class="text-muted mt-2">Be part of our joyful and heartfelt worship gatherings every week.</p>
            </div>
        </div>

        <div class="row g-4">
            @foreach ($whorsip as $item)
            <div class="col-lg-4 col-md-6">
                <div class="card border-0 shadow-sm h-100">
                    <a href="{{ asset('storage/uploads/' . $item->foto) }}" data-lightbox="whorsip"
                        data-title="{{ $item->judulwhorsip }}">
                        <img src="{{ asset('storage/uploads/' . $item->foto) }}"
                            class="card-img-top img-fluid rounded-top" style="height:300px; object-fit:cover;"
                            alt="{{ $item->judulwhorsip }}">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title text-dark">{{ $item->judulwhorsip }}</h5>
                        <p class="card-text text-muted mb-1">
                            {{ \Carbon\Carbon::parse($item->jam)->format('l, d M Y - H:i') }}
                        </p>
                        <p class="card-text text-secondary">{{ $item->lokasi }}</p>
                    </div>
                    {{-- Tombol selengkapnya bisa ditampilkan jika dibutuhkan --}}
                    {{-- <div class="card-footer bg-transparent text-center">
                        <a href="{{ url('whorsipdetail/'. $item->idwhorsip) }}" class="btn btn-outline-primary rounded-pill px-4">
                            Selengkapnya
                        </a>
                    </div> --}}
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Worship Section End -->


<div class="container-xxl py-5 bg-white">
    <div class="container">
        <div class="text-center mx-3 my-4 wow fadeInUp" data-wow-delay="0.1s">
            <h1 class="fw-bold" style="color: #2B7CC0;">Prayer Request</h1>
            <p class="text-muted mt-2">We'd love to pray with you and for you. Feel free to share.</p>
        </div>
        <div class="row justify-content-center align-items-center wow fadeInUp" data-wow-delay="0.1s"
            style="min-height: 60vh;">
            <div class="col-lg-6 bg-light px-5 py-5 rounded-4 shadow-sm border border-1 border-primary-subtle">
                <form action="{{ route('simpanprayer') }}" method="POST" enctype="multipart/form-data"
                    class="text-start">
                    @csrf
                    <div class="mb-4">
                        <label for="name" class="form-label text-primary fw-semibold">Your Name *</label>
                        <input type="text" name="name" id="name"
                            class="form-control form-control-lg rounded-pill border-2 border-secondary"
                            placeholder="Masukkan nama anda" required>
                    </div>

                    <div class="mb-4">
                        <label for="phonenumber" class="form-label text-primary fw-semibold">Phone Number *</label>
                        <input type="tel" name="phonenumber" id="phonenumber"
                            class="form-control form-control-lg rounded-pill border-2 border-secondary"
                            placeholder="Masukkan nomor telepon anda" required>
                    </div>

                    <div class="mb-4">
                        <label for="hopepray" class="form-label text-primary fw-semibold">How we can pray for you? *</label>
                        <textarea name="hopepray" id="hopepray"
                            class="form-control border-2 border-secondary rounded-4"
                            rows="4" placeholder="Tuliskan harapan doa anda" required></textarea>
                    </div>

                    <div class="mb-4">
                        <label for="answerpray" class="form-label text-primary fw-semibold">Answered Prayer? *</label>
                        <textarea name="answerpray" id="answerpray"
                            class="form-control border-2 border-secondary rounded-4"
                            rows="4" placeholder="Tuliskan doa yang telah dijawab" required></textarea>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn px-4 py-2 rounded-pill fw-bold"
                            style="background-color: #2B7CC0; color: white;">
                            Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



<div class="container py-5">
    <div class="cta-section text-center py-5 px-4" style="background-color: #e6f0ff; border-radius: 1rem;">
        <h2 class="fw-bold mb-4" style="color: #2B7CC0; font-size: 2.2rem;">
            Ask, Discuss, & Explore Who<br>God Is With Us!
        </h2>
        <a href="https://wa.me/6282258112023?text=Hi%20Every%20Nation%20Serpong%2C%20I%20want%20to%20know%20more%20about%20you!"
           target="_blank"
           class="btn btn-lg px-5 py-3 fw-semibold"
           style="background-color: #2B7CC0; color: white; border-radius: 50px;">
            Discover Us
        </a>
    </div>
</div>



    <!-- Pagination -->
    <div class="d-flex justify-content-center mt-5">
        {{ $whorsip->links('vendor.pagination.bootstrap-4') }}
    </div>
</div>
</div>

<link href="https://cdn.jsdelivr.net/npm/lightbox2@2.11.3/dist/css/lightbox.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/lightbox2@2.11.3/dist/js/lightbox.min.js"></script>
@endsection