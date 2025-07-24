@extends('layouts.home')
@section('content')
<!-- Page Header Start -->
{{-- <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h1 class="display-3 text-white mb-4 animated slideInDown">Give </h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item active" aria-current="page">Give</li>
            </ol>
        </nav>
    </div>
</div> --}}
<!-- Page Header End -->

<!-- Kegiatan Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 justify-content-center">
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Mazmur 27:1 </h5>
                        <p class="card-text"> 'Dari Daud. Tuhan adalah terangku dan keselamatanku, kepada siapakah aku
                            harus takut? Tuhan adalah benteng hidupku, terhadap siapakah aku harus gemetar? '</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row g-5">
            <div class="col-lg-6 col-md-6 mb-4">
                <div class="card">
                    <img src="{{ asset('assets/home/img/bca.jpg') }}" style="height: 300px;object-fit:cover"
                        class="card-img-top img-fluid" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Bank Central Asia.</h5>
                        <h6 class="card-text">7660 800 802 a.n. Gereja Morning Star Indonesia</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 mb-4">
                <div class="card">
                    <img src="{{ asset('assets/home/img/qris.jpg') }}" style="height:300px;object-fit:cover"
                        class="card-img-top img-fluid" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Give by Qris</h5>
                        <h6 class="card-text">Account Qris Name : a.n. Gereja Morning Star Indonesia</h6>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pagination -->
        <div class="d-flex justify-content-center mt-5">

        </div>
    </div>
</div>
<!-- Kegiatan End -->
@endsection
