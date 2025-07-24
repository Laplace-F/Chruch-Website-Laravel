@extends('layouts.home')

@section('content')
{{-- <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Shermon</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Shermon</li>
            </ol>
        </nav>
        <h3 class="text-white mt-4 fw-light">JOIN OUR SHERMON SERVICES ON-SITE & ONLINE</h3>
    </div>
</div> --}}
<div class="px-3 py-5">
    <div class="">
        {{-- <div class="row mb-5 justify-content-center">
            <div class="col-lg-10 text-center">
                <h1 class="display-5 fw-bold text-dark mb-3">Join Us For An Exciting Church Experience This Weekend!
                </h1>
                <p class="lead text-muted">Temukan kedamaian dan sukacita dalam setiap ibadah. Kami menantikan kehadiran
                    Anda.</p>
            </div>
        </div> --}}

        <div class="row g-4 justify-content-center">
            @foreach ($shermon as $item)
            <div class="{{ $loop->first ? 'col-md-12' : 'col-md-4' }} wow fadeInUp"
                data-wow-delay="{{ 0.1 * ($loop->index + 1) }}s">
                <div class="card h-100 shadow-sm border-0 rounded-4 overflow-hidden">
                    <iframe width="100%" height="{{ $loop->first ? '550px' : '200px' }}" src="{{ $item->link }}"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen
                        style="border-radius:10px"></iframe>
                    <div class="card-body p-4" style="{{ $loop->first ? 'display:none' : '200px' }}">
                        <h5 class="card-title text-dark mb-2">{{ $item->namashermon }}</h5>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="d-flex justify-content-center mt-5">
            {{ $shermon->links('vendor.pagination.bootstrap-4') }}
        </div>
    </div>
</div>
<link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
{{-- Pastikan jQuery sudah di-load sebelum Lightbox jika Lightbox memerlukannya --}}
<style>
    .bg-speaker {
        background-image: url("{{ asset('bg-speaker.png') }}");
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        height: 400px
    }
</style>
<!-- Social Media Buttons Section Start -->
<div class="bg-speaker p-4 rounded">
    <div class="container position-relative text-white mt-5">
        <h2 class="text-center text-white mb-4 fw-bold">
            <span>CHURCH SOCIAL</span>
        </h2>
        <div class="d-flex flex-wrap justify-content-center gap-3 text-center">
            <a href="https://www.youtube.com" target="_blank"
                class="btn btn-lg d-flex align-items-center justify-content-center gap-2 px-4"
                style="background-color: #FF0000; color: white; border-radius: 50px;">
                <i class="fab fa-youtube fs-4"></i>
                <span>YouTube</span>
            </a>
            <a href="https://www.instagram.com" target="_blank"
                class="btn btn-lg d-flex align-items-center justify-content-center gap-2 px-4"
                style="background-color: #800080; color: white; border-radius: 50px;">
                <i class="fab fa-instagram fs-4"></i>
                <span>Instagram</span>
            </a>
            <a href="https://www.spotify.com" target="_blank"
                class="btn btn-lg d-flex align-items-center justify-content-center gap-2 px-4"
                style="background-color: #008000; color: white; border-radius: 50px;">
                <i class="fab fa-spotify fs-4"></i>
                <span>Spotify</span>
            </a>
        </div>
    </div>
</div>

<!-- Social Media Buttons Section End -->
@endsection