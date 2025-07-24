@extends('layouts.home')

@section('content')
<!-- HEADER -->
{{-- <div class="container-fluid page-header py-5 mb-5 text-white bg-dark text-center">
    <div class="container">
        <h1 class="display-4">{{ $data->namashermon ?? 'Detail Sermon' }}</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="{{ url('/') }}" class="text-white-50">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ url('shermon') }}" class="text-white-50">Sermon</a></li>
                <li class="breadcrumb-item active text-white" aria-current="page">
                    {{ $data->namashermon ?? 'Shermon' }}
                </li>
            </ol>
        </nav>
    </div>
</div> --}}

<!-- DETAIL CONTENT -->
<div class="container py-4">
    <div class="row g-4">
        <!-- KONTEN UTAMA -->
        <div class="col-lg-8">
            <div class="card shadow-sm border-0">
                @if (!empty($data->foto))
                <img src="{{ asset('storage/uploads/' . $data->foto) }}"
                     class="card-img-top img-fluid"
                     alt="{{ $data->namashermon ?? 'Sermon Image' }}">
                @endif

                <div class="card-body">
                    <h3 class="card-title mb-2">{{ $data->namashermon ?? 'Judul Shermon' }}</h3>
                    @if ($data->tanggalshermon)
                    <p class="text-muted small">
                        <i class="far fa-calendar-alt me-1"></i>
                        {{ \Carbon\Carbon::parse($data->tanggalshermon)->format('d F Y') }}
                    </p>
                    @endif

                    <hr>

                    <div class="card-text mb-4">
                        {!! $data->deskripsishermon ?? '<p class="text-muted">Deskripsi belum tersedia.</p>' !!}
                    </div>

                    @if (!empty($data->linkvideo))
                    <div class="ratio ratio-16x9">
                        <iframe src="{{ $data->linkvideo }}"
                                title="Video Shermon"
                                frameborder="0"
                                allowfullscreen></iframe>
                    </div>
                    @endif
                </div>
            </div>
        </div>

        <!-- SIDEBAR -->
        <div class="col-lg-4">
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">Shermon Lainnya</h5>
                </div>
                <ul class="list-group list-group-flush">
                    @forelse ($ShermonLainnya as $related)
                    <li class="list-group-item">
                        <a href="{{ url('sermondetail/' . ($related->idShermon ?? $related->id)) }}"
                           class="text-decoration-none text-dark">
                            {{ $related->namashermon ?? 'Judul Shermon' }}
                        </a>
                        <br>
                        @if ($related->tanggalshermon)
                        <small class="text-muted">
                            <i class="far fa-calendar-alt me-1"></i>
                            {{ \Carbon\Carbon::parse($related->tanggalshermon)->format('d F Y') }}
                        </small>
                        @endif
                    </li>
                    @empty
                    <li class="list-group-item text-muted">Belum ada data.</li>
                    @endforelse
                </ul>
            </div>
        </div>
    </div>

    <!-- TOMBOL KEMBALI -->
    <div class="text-center mt-4">
        <a href="{{ url('shermon') }}" class="btn btn-outline-primary">
            <i class="fas fa-arrow-left me-2"></i> Kembali ke Halaman Sermon
        </a>
    </div>
</div>
@endsection
