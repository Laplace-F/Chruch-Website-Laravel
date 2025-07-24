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
<!-- Carousel Start -->
<div class="container-fluid p-0 wow fadeIn" data-wow-delay="0.1s">
    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="{{ asset('assets/bghome.jpg') }}" alt="Gereja 1">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-6">
                                <h1 class="display-1 text-white mb-5 animated slideInDown">EVERY NATION SERPONG
                                </h1>
<div class="d-flex flex-wrap justify-content-center mt-4 gap-3">
    <a href="https://www.youtube.com/@EveryNationSerpong" target="_blank"
        class="btn btn-lg d-flex align-items-center gap-2 px-4"
        style="background-color: #FF0000; color: white;">
        <i class="fab fa-youtube fs-4"></i>
        <span>YouTube</span>
    </a>
    <a href="https://www.instagram.com/everynationserpong?igsh=aXZwMTRlNTIzdmhm" target="_blank"
        class="btn btn-lg d-flex align-items-center gap-2 px-4"
        style="background-color:rgb(199, 67, 47); color: white;">
        <i class="fab fa-instagram fs-4"></i>
        <span>Instagram</span>
    </a>
    <a href="https://open.spotify.com/artist/0VPn67RlAzuYumaHw2hCw0?si=b7e5d6d1d6e145f0" target="_blank"
        class="btn btn-lg d-flex align-items-center gap-2 px-4"
        style="background-color: #008000; color: white;">
        <i class="fab fa-spotify fs-4"></i>
        <span>Spotify</span>
    </a>
</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- Carousel End -->


<!-- Top Feature Start -->
<div class="container-fluid top-feature py-5 pt-lg-0 d-none">
    <div class="container py-5 pt-lg-0">
        <div class="row gx-0">
            <div class="col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                <div class="bg-white shadow d-flex align-items-center h-100 px-5" style="min-height: 160px;">
                    <div class="d-flex">
                        <div class="flex-shrink-0 btn-lg-square rounded-circle bg-light">
                            <i class="fa fa-heartbeat text-danger"></i>
                        </div>
                        <div class="ps-3">
                            <h4>Pelayanan Kasih Kristiani</h4>
                        </div>
                    </div>
                </div>
            </div>
            {{-- rohani --}}
            <div class="col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                <div class="bg-white shadow d-flex align-items-center h-100 px-5" style="min-height: 160px;">
                    <div class="d-flex">
                        <div class="flex-shrink-0 btn-lg-square rounded-circle bg-light">
                            <i class="fa fa-users text-danger"></i> <!-- Ikon sesuai dengan Gereja -->
                        </div>
                        <div class="ps-3">
                            <h4>Tim Pelayan Rohani</h4>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Pelayanan --}}
            <div class="col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                <div class="bg-white shadow d-flex align-items-center h-100 px-5" style="min-height: 160px;">
                    <div class="d-flex">
                        <div class="flex-shrink-0 btn-lg-square rounded-circle bg-light">
                            <i class="fa fa-phone text-danger"></i> <!-- Ikon sesuai dengan layanan 24/7 -->
                        </div>
                        <div class="ps-3">
                            <h4>Pelayanan Setiap Hari</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- <div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <!-- Gambar Ketua Bantuan -->
            <div class="col-lg-3 col-md-5 wow fadeInUp" data-wow-delay="0.1s">
                <img class="img-fluid rounded-3 shadow" src="{{ asset('assets/home/img/gereja2.jpg') }}"
                    alt="Gambar Gereja">
            </div>

            <!-- Teks Utama -->
            <div class="col-lg-6 col-md-7 wow fadeInUp" data-wow-delay="0.3s">
                <h1 class="display-1 text-danger mb-0">25</h1>
                <p class="text-danger mb-4">Tahun Pelayanan</p>
                <h1 class="display-5 mb-4">Melayani dengan Kasih dan Kesetiaan</h1>
                <p class="mb-4">Selama lebih dari 25 tahun, gereja kami hadir untuk membimbing umat dalam pertumbuhan
                    rohani dan pelayanan kasih kepada sesama.</p>
                <a class="btn py-3 px-4" href="">Tentang Kami</a>
            </div>

            <!-- Kolom Informasi -->
            <div class="col-lg-3 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
                <div class="row g-4">
                    <div class="col-12">
                        <div class="border-start ps-4">
                            <i class="fa fa-award fa-3x text-danger mb-3"></i>
                            <h4 class="mb-3">Pelayanan Terpercaya</h4>
                            <span>Gereja kami dikenal karena dedikasi dalam membimbing, mengajar, dan melayani jemaat
                                dengan sepenuh hati.</span>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="border-start ps-4">
                            <i class="fa fa-users fa-3x text-danger mb-3"></i>
                            <h4 class="mb-3">Pelayan Berdedikasi</h4>
                            <span>Tim pelayan dan relawan kami senantiasa siap membagikan kasih Kristus dalam berbagai
                                kegiatan gereja dan pelayanan sosial.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid facts my-5 py-5" data-parallax="scroll"
    data-image-src="{{ asset('assets/home/img/gereja2.jpg') }}">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                <h1 class="display-4 text-danger" data-toggle="counter-up">100</h1>
                <span class="fs-5 fw-semi-bold text-dark bg-light">Jemaat Aktif</span>
            </div>
            <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
                <h1 class="display-4 text-danger" data-toggle="counter-up">100</h1>
                <span class="fs-5 fw-semi-bold text-dark bg-light">Kegiatan Gereja</span>
            </div>
            <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
                <h1 class="display-4 text-danger" data-toggle="counter-up">50</h1>
                <span class="fs-5 fw-semi-bold text-dark bg-light">Pelayanan Gereja</span>
            </div>
            <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
                <h1 class="display-4 text-danger" data-toggle="counter-up">10</h1>
                <span class="fs-5 fw-semi-bold text-dark bg-light">Penghargaan dan Apresiasi</span>
            </div>
        </div>
    </div>
</div>

<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <p class="fs-5 fw-bold text-danger">Kenapa Memilih Geraja ini?</p>
                <h1 class="display-5 mb-4">Inilah Alasan Mengapa Banyak Umat Bergabung!</h1>
                <p class="mb-4">Gereja kami dikenal sebagai tempat pertumbuhan rohani, pelayanan kasih, dan pembinaan
                    iman yang kuat. Mari bergabung dan bertumbuh bersama kami dalam iman.</p>
                <a class="btn btn-danger py-3 px-4" href="">Jelajahi Pelayanan Kami</a>
            </div>


            <!-- Social Media Buttons Carousel End -->
            <div class="col-lg-6">
                <div class="row g-4 align-items-center">
                    <div class="col-md-6">
                        <div class="row g-4">
                            <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                                <div class="text-center rounded py-5 px-4"
                                    style="box-shadow: 0 0 45px rgba(0,0,0,.08);">
                                    <div class="btn-square bg-light rounded-circle mx-auto mb-4"
                                        style="width: 90px; height: 90px;">
                                        <i class="fa fa-heart fa-3x text-danger"></i>
                                    </div>
                                    <h4 class="mb-0">Kasih yang tulus</h4>
                                </div>
                            </div>
                            <div class="col-12 wow fadeIn" data-wow-delay="0.5s">
                                <div class="text-center rounded py-5 px-4"
                                    style="box-shadow: 0 0 45px rgba(0,0,0,.08);">
                                    <div class="btn-square bg-light rounded-circle mx-auto mb-4"
                                        style="width: 90px; height: 90px;">
                                        <i class="fa fa-users fa-3x text-danger"></i>
                                    </div>
                                    <h4 class="mb-0">Pelayan Terlatih</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 wow fadeIn" data-wow-delay="0.7s">
                        <div class="text-center rounded py-5 px-4" style="box-shadow: 0 0 45px rgba(0,0,0,.08);">
                            <div class="btn-square bg-light rounded-circle mx-auto mb-4"
                                style="width: 90px; height: 90px;">
                                <i class="fa fa-ambulance fa-3x text-danger"></i>
                            </div>
                            <h4 class="mb-0">Tanggap Pelayanan</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}

<div class="container-xxl py-5">
    <div class="container">
        <div class="row align-items-center wow fadeInUp" data-wow-delay="0.1s">
            <div class="col-lg-7" style="color:black !important;">
                <h1 class="display-4 fw-bold mb-4">WELCOME!</h1>
                <p class="lead mb-3 fw-bold">We exist to honor God by establishing Christ-centered, Spirit-empowered,
                    and socially responsible churches and campus ministries in every nation.</p>
                <i class="lead mb-3">Kami ada untuk menghormati Allah dengan mendirikan gereja-gereja dan pelayanan
                    kampus yang berpusat kepada Kristus, diberdayakan oleh Roh Kudus, dan bertanggung jawab sosial di
                    setiap bangsa.</i>
                <p class="lead mb-3 fw-bold mt-3">Begin your journey of knowing God, following Him closely and helping
                    others to do the same.</p>
                <i class="lead mb-3">Mulailah perjalanan Anda untuk mengenal Tuhan, mengikuti Dia lebih dekat dan
                    membantu orang lain untuk melakukan hal yang sama.</i>
            </div>
            <div class="col-lg-5 text-center">
                <img src="{{ asset('assets/home/img/everynat.jpg') }}" alt="Church Image" class="img-fluid rounded">
                <p class="mt-3 fst-italic">Our church community gathering</p>
            </div>
        </div>
    </div>
</div>

<!-- New Shermon Section Start -->
<div class="">
    <div class=" bg-speaker p-4 rounded">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 100%;">
            {{-- <p class="fs-5 fw-bold text-primary">Shermon Terbaru</p> --}}
            <h1 class="display-5 mb-5 text-white mt-3">WATCH OUR LATEST SHERMON</h1>
            {{-- <img src="{{ asset('speaker.png') }}" alt="Speaker" class="img-fluid mb-4" style="max-width: 150px;">
            --}}
        </div>
        <div class="row g-4 justify-content-center">
            @foreach ($latestShermon as $shermon)
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="card h-75">
                    <iframe width="100%" height="400px" src="{{ $shermon->link }}" title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <div class="text-center p-4" style="max-width: 100%;">
                    <a href="https://www.youtube.com/watch?v=nK2Tm9DEzvU&pp=ygUUZXZlcnkgbmF0aW9uIHNlcnBvbmc%3D"
                        class="text-white">Ongoing Missions: Beautiful Feet in Ordinary Places – Ps. Agus Sukwanto
                        [Sermon / Khotbah]</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- New Shermon Section End -->

<style>
    .bg-speaker {
        background-image: url("{{ asset('bg-speaker.png') }}");
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }
</style>


<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 100%;">
            {{-- <p class="fs-5 fw-bold text-primary">Area Pelayanan Kami</p> --}}
            <h1 class="display-5 mb-5 text-dark">JOIN OUR WORSHIP SERVICES ON-SITE & ONLINE</h1>
            {{-- <p class="text-muted">Gereja kami berkomitmen untuk melayani Tuhan dan jemaat melalui berbagai
                pelayanan
                yang dirancang untuk pertumbuhan rohani dan berkat bagi komunitas.</p> --}}
        </div>
        <div class="row g-4">
            @foreach ($whorsip as $index => $row)
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="{{ 0.1 + ($index * 0.2) }}s">
                <div class="card">
                    <img class="card-img-top" style="width: 100%;height:300px;object-fit:cover"
                        src="{{ asset('storage/uploads/' . $row->foto) }}" alt="{{ $row->judulwhorsip }}">
                    <div class="card-body text-black" style="backround-color:#D9D9D9 !important">
                        <h4 class="mb-3">{{ $row->judulwhorsip }}</h4>
                        <b class="mb-3 text-dark">{{ \Carbon\Carbon::parse($row->jam)->format('l, d-m-Y H:i') }}</b>
                        <br>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

{{-- Events Section --}}
<div class="container-xxl py-5" style="background-color: #f5f9ff;">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp mb-5" data-wow-delay="0.1s" style="max-width: 800px;">
            <h2 class="fw-bold" style="color: #2B7CC0;">Join Us For Our Upcoming Events</h2>
            <p class="text-secondary mt-2">
                Come and be a part of our inspiring community events — open to all, welcoming to everyone.
            </p>
        </div>

        <div class="row g-4">
            @foreach ($kegiatan as $index => $row)
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="{{ 0.1 + ($index * 0.2) }}s">
                <div class="card border-0 shadow-sm h-100 rounded-4" style="transition: transform 0.3s ease, box-shadow 0.3s ease;">
                    <img class="card-img-top rounded-top-4" style="height: 300px; object-fit: cover;"
                        src="{{ asset('storage/uploads/' . $row->foto) }}" alt="{{ $row->judulkegiatan }}">
                    <div class="card-body">
                        <h5 class="card-title text-dark">{{ $row->judulkegiatan }}</h5>
                        <p class="card-text text-secondary">
                            {{ \Illuminate\Support\Str::limit(strip_tags($row->deskripsikegiatan), 60) }}
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<style>
    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
    }
</style>

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
<style>
    .testimonial-card {
        background-color: #ffffff;
        border-radius: 1rem;
        padding: 2rem;
        box-shadow: 0 4px 14px rgba(0, 0, 0, 0.05);
        text-align: center;
        transition: all 0.3s ease;
    }

    .testimonial-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 12px 24px rgba(43, 124, 192, 0.2); /* biru teknologi */
        background-color: #f8fbff; /* sedikit kebiruan, tidak gelap */
    }

    .testimonial-img {
        width: 100px;
        height: 100px;
        object-fit: cover;
        border-radius: 50%;
        border: 3px solid #2B7CC0;
    }

    .text-testimonial {
        color: #2B7CC0;
    }
    .testimonial-card:hover p,
.testimonial-card:hover h6,
.testimonial-card:hover small {
    color: #000 !important; /* Tetap hitam */
}

</style>

<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-3 my-5 wow fadeInUp" data-wow-delay="0.1s">
            <h1 class="fw-bold" style="color: #2B7CC0;">Stories & Testimonies</h1>
        </div>
        <div class="row justify-items-center align-items-center mt-5 text-dark">
            @foreach ([
                ['img' => 'kristi.jpg', 'text' => 'Tuhan itu penuh kasih, rencana-Nya baik, waktu-Nya tepat.', 'name' => 'Kristiasara Natamora', 'desc' => 'Mahasiswi UMN'],
                ['img' => 'koagus.jpg', 'text' => 'Jangan pernah berhenti bersyukur, karena Tuhan tidak pernah berhenti berbuat baik
                        .', 'name' => 'Gideon Sitorus', 'desc' => 'Kepala Sekolah, Jakarta, Indonesia'],
                ['img' => 'rndm.jpg', 'text' => 'Kasih Tuhan tidak tergoyahkan, meski dunia berubah.', 'name' => 'Samantha', 'desc' => 'UI&UX Gojek, Jakarta, Indonesia'],
            ] as $item)
            <div class="col-md-6 col-lg-4 mt-5">
                <div class="testimonial-card">
                    <img src="{{ asset('assets/home/img/' . $item['img']) }}" alt="{{ $item['name'] }}" class="testimonial-img">
                    <p class="mt-4">{{ $item['text'] }}</p>
                    <h6 class="fw-bold mb-0 text-testimonial">{{ $item['name'] }}</h6>
                    <small class="text-wrap">{{ $item['desc'] }}</small>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<div class="text-center my-4 px-3">
    <a 
        href="https://wa.me/6282258112023?text=Halo%2C%20saya%20ingin%20membagikan%20cerita%20dan%20kesaksian%20saya." 
        target="_blank"
        class="d-inline-block px-4 py-3 text-white fw-semibold rounded shadow-lg text-uppercase"
        style="
            background-color: #005EB9;
            transition: background-color 0.3s ease-in-out;
        "
        onmouseover="this.style.backgroundColor='#004A99'"
        onmouseout="this.style.backgroundColor='#005EB9'"
    >
        Share Your Stories & Testimonies
    </a>
</div>








    </div>
</div>
@endsection

<style>
    .custom-button {
        background-color: #2B7CC0;
        color: white;
        font-weight: bold;
        padding: 14px 28px;
        border: none;
        border-radius: 35px;
        font-size: 24px;
        cursor: pointer;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
        transition: background-color 0.3s ease;
        margin-top: 20px;
    }

    .custom-button:hover {
        background-color: #226399;
    }

    .testimonial-card {
        background-color: #f8f9fa;
        border-radius: 10px;
        padding: 30px 20px 20px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        position: relative;
        text-align: center;
    }

    .testimonial-card:hover {
        background-color: #797878;
        color: white;
        border-radius: 30px;
        box-shadow: 0 10px 0 #200454;
    }

    .testimonial-card h6:hover {
        color: white !important;
    }

    .testimonial-img {
        width: 100px;
        height: 100px;
        object-fit: cover;
        border-radius: 50%;
        border: 5px solid white;
        position: absolute;
        top: -50px;
        left: 50%;
        transform: translateX(-50%);
        background-color: white;
    }

    .testimonial-img:hover {
        color: white;
    }
</style>

<style>
    .service-img img {
        height: 150px;
        object-fit: cover;
        width: auto;
    }
</style>

<style>
    .testimonial-card {
        background-color: #f8f9fa;
        border-radius: 10px;
        padding: 30px 20px 20px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        position: relative;
        text-align: center;
    }

    .testimonial-card:hover {
        background-color: #797878;
        color: white;
        border-radius: 30px;
        box-shadow: 0 10px 0 #200454;
    }

    .testimonial-card h6:hover {
        color: white !important;
    }

    .testimonial-img {
        width: 100px;
        height: 100px;
        object-fit: cover;
        border-radius: 50%;
        border: 5px solid white;
        position: absolute;
        top: -50px;
        left: 50%;
        transform: translateX(-50%);
        background-color: white;
    }

    .testimonial-img:hover {
        color: white;
    }
</style>

<style>
    .service-img img {
        height: 150px;
        object-fit: cover;
        width: auto;
    }
</style>