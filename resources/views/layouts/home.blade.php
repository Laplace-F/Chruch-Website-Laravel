<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Every Nation Gading Serpong </title>



    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    {{--
<link rel="icon" href="{{ asset('assets/home/img/logo.png') }}?v=1" type="image/png" sizes="32x32">


--}}

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;500&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('assets/home/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/home/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/home/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('assets/home/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('assets/home/css/style.css') }}" rel="stylesheet">

    <style>
        /* Ubah warna utama menjadi itam */
        .text-dark {
            color: black !important;
        }

        body {
            background-color: #fff;
            /* Warna putih untuk latar belakang utama */
            color:rgb(0, 0, 0)11, 11);
            /* Warna merah untuk teks default */
        }

        /* Navbar */
        .navbar {
            background-color: #fff;
            /* Putih untuk latar belakang navbar */
            border-bottom: 2px solidrgb(0, 0, 0);
            /* Garis merah */
        }

        .navbar .nav-link {
            color:rgb(5, 5, 5);
        }

        .navbar .nav-link:hover {
            color:rgb(12, 12, 12);
            /* Warna merah lebih gelap untuk hover */
        }

        /* Footer */
        .footer {
            background-color:rgb(3, 3, 3);
            /* Merah untuk latar belakang footer */
            color: #fff;
            /* Putih untuk teks */
        }

        .footer a {
            color: #fff;
        }

        .footer a:hover {
            color: #ffcccc;
            /* Warna merah muda untuk hover */
        }

        /* Tombol */
        .btn-primary {
            background-color:rgb(0, 0, 0);
            border-color:rgb(10, 10, 10);
        }

        .btn-primary:hover {
            background-color:rgb(0, 0, 0);
            border-color:rgb(0, 0, 0);
        }

        /* Spinner */
        .spinner-border.text-danger {
            color:rgb(0, 0, 0);
        }

        /* Latar belakang teks di carousel */
        .carousel-caption {
            background: rgba(235, 72, 89, 0.178);
            /* Warna merah dengan transparansi */
            padding: 20px;
            border-radius: 8px;
        }

        /* Warna teks di dalam carousel */
        .carousel-caption h1 {
            color: #fff;
            /* Putih */
            font-weight: bold;
        }

        .carousel-caption a {
            background-color:rgb(23, 23, 23);
            /* Merah */
            color: #fff;
            /* Putih */
            border: 1px solidrgb(23, 23, 23);
        }

        .carousel-caption a:hover {
            background-color:rgb(0, 0, 0);
            /* Merah lebih gelap */
            color: #fff;
            /* Tetap putih */
            border: 1px solidrgb(0, 0, 0);
        }

        /* Tombol navigasi carousel */
        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            background-color:rgb(0, 0, 0);
            border: 10px solidrgb(0, 0, 0);

            /* Merah */
            border-radius: 50%;
            width: 3rem;
            height: 3rem;
        }

        .carousel-control-prev-icon:hover,
        .carousel-control-next-icon:hover {
            background-color:rgb(0, 0, 0);
            border: 10px solidrgb(17, 17, 17);

            /* Merah lebih gelap */
        }

        .facts,
        .quote {
            background: rgba(235, 72, 89, 0.178);
        }

        .page-header {
            background-color: rgba(235, 72, 89, 0.178) !important;
            background-image: url('{{ asset(' assets/home/img/gereja1.jpg') }}') !important;
            background-position: center center !important;
            background-repeat: no-repeat !important;
            background-size: cover !important;
        }

        /* Hover Effect */
        .nav-item.nav-link.hover-danger:hover {
            color:rgb(205, 204, 208) !important;
            /* Warna merah (danger) saat hover */
        }

        /* Active State */
        .nav-item.nav-link.active {
            color:rgb(10, 10, 10) !important;
            /* Warna merah (danger) saat aktif */
        }

        .nav-item.nav-link {
            color: white !important;
            /* Warna putih */
        }

        .multi-color-bar {
            width: 100%;
            height: 10px;
            background: #085CBC;
        }

        button-custom {
            background-color: #200454;
            color: white;
            border: 1px solid #085CBC;
            transition: background-color 0.3ms ease, color 0.3ms, border-color 0.3ms ease;
        }

        button-custom:hover {
            background-color: #085CBC;
            color: white;
        }
    </style>
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-danger" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->

    <div class="multi-color-bar"></div>

    <!-- Topbar Start -->
    <div style="background-color: #085CBC !important;" class="container-fluid text-light px-0 py-2 d-none">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <span class="fa fa-phone-alt me-2"></span>

                </div>
                <div class="h-100 d-inline-flex align-items-center">
                    <span class="far fa-envelope me-2"></span>

                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center mx-n2">
                    <span>Follow Us:</span>
                    <a class="btn btn-link text-light" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-link text-light" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-link text-light" href=""><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-link text-light" href=""><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav style="background-color: #005EB9 !important;" class="navbar navbar-expand-lg  navbar-light sticky-top p-0">
        <a class="navbar-brand ms-3" href="{{ url('/') }}">
            <img src="{{ asset('assets/home/img/logo.png') }}" class="mt-2" alt="Logo" style="height: 40px;">
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="{{ url('/') }}"
                    class="nav-item nav-link {{ request()->is('/') ? 'active text-danger' : '' }} hover-danger">Home</a>
                <a href="{{ url('event') }}"
                    class="nav-item nav-link {{ request()->is('event') ? 'active text-danger' : '' }} hover-danger">Event
                </a>
                <a href="{{ url('give') }}"
                    class="nav-item nav-link {{ request()->is('give') || request()->is('kegiatandetail/*') ? 'active text-danger' : '' }} hover-danger">Give</a>
                <a href="{{ url('whorsip') }}"
                    class="nav-item nav-link {{ request()->is('whorsip') ? 'active text-danger' : '' }} hover-danger">Worship</a>
                <a href="{{ url('shermon') }}"
                    class="nav-item nav-link {{ request()->is('shermon') ? 'active text-danger' : '' }} hover-danger">Shermon</a>
            </div>
        </div>
        </div>
    </nav>


    <!-- Navbar End -->

    @yield('content')

    <!-- Footer Start -->
<!-- Footer Start -->
<div style="background-color:#1C0152;" class="container-fluid text-light footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
  <div class="container py-5">
    <div class="row g-5">
      
      <!-- Lokasi / Maps -->
      <div class="col-lg-6 col-md-12">
        <h4 class="text-white mb-4">Location</h4>
        <div class="ratio ratio-16x9 rounded shadow">
          <iframe 
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1983.0780205938715!2d106.6241064!3d-6.2431566!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2decf7524e0d41b7%3A0xcfe11dbbb2a1bb57!2sVega%20Hotel%20Gading%20Serpong!5e0!3m2!1sen!2sid!4v1749284215435!5m2!1sen!2sid" 
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade">
          </iframe>
        </div>
      </div>

      <!-- Kontak & Sosial Media -->
      <div class="col-lg-6 col-md-12">
        <h4 class="text-white mb-4">Contact Us</h4>
        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Vega Hotel Gading Serpong, Tangerang</p>
        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i> +62 822-5811-2023</p>
        <p class="mb-2"><i class="fa fa-envelope me-3"></i>everynationserpong@gmail.com</p>

        <div class="d-flex pt-3">

          <a class="btn btn-square btn-outline-light rounded-circle me-2" href="https://www.youtube.com/@EveryNationSerpong"><i class="fab fa-youtube"></i></a>
          <a class="btn btn-square btn-outline-light rounded-circle me-2" href="https://www.instagram.com/everynationserpong/?igsh=aXZwMTRlNTIzdmhm"><i class="fab fa-instagram"></i></a>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Footer End -->


                </div>
            </div>
        </div>
    </div>


    <!-- Footer End -->

  <!-- Copyright Start -->
<div style="background-color:#1C0152;" class="container-fluid py-4">
    <div class="container text-center">
        <p class="mb-0 text-white">
            © <span id="year"></span> Every Nation. All Rights Reserved.
        </p>
    </div>
</div>
<!-- Copyright End -->

<script>
    // Untuk menampilkan tahun secara otomatis
    document.getElementById("year").textContent = new Date().getFullYear();
</script>


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-danger btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/home/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('assets/home/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('assets/home/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/home/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/home/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('assets/home/lib/parallax/parallax.min.js') }}"></script>
    <script src="{{ asset('assets/home/lib/isotope/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/home/lib/lightbox/js/lightbox.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if(session('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Sukses!',
            text: '{{ session('success') }}',
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'OK'
        });
    </script>
    @endif
    <!-- Template Javascript -->
    <script src="{{ asset('assets/home/js/main.js') }}"></script>

    @section('script')
</body>

</html>