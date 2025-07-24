@extends('layouts/admin')

@section('content')
<style>
    .password-container {
        position: relative;
    }

    .password-container input {
        padding-right: 40px;
    }

    .password-container .fa-eye,
    .password-container .fa-eye-slash {
        position: absolute;
        right: 30px;
        top: 50%;
        transform: translateY(-50%);
        cursor: pointer;
        color: #6c757d;
        z-index: 2;
    }
</style>

<div class="container">
    <div class="page-inner">
        <div class="row">
            <div class="col-12">
                <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
                    <div class="col-12 alert">
                        <h3 class="fw-bold text-center">Buat Shermon</h3>
                    </div>
                </div>

                {{-- Menampilkan pesan sukses dari session --}}
                @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif

                {{-- Menampilkan semua error validasi secara global --}}
                @if ($errors->any())
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <h5>Ada kesalahan dalam pengisian data:</h5>
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif

                <div class="card">
                    <div class="card-body">
                        {{-- Perhatikan: method="post" dan action menggunakan route helper --}}
                        <form method="post" action="{{ route('admin/simpanshermontambah') }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div
                                class="p-3 bg-secondary-subtle bg-opacity-10 border border-secondary border-start-0 rounded-end">
                                <h6><b>Tambahkan Shermon</b></h6>
                            </div>
                            <br>

                            <div class="form-group row mb-3"> {{-- Tambahkan mb-3 untuk margin bawah --}}
                                <label for="namashermon" class="col-sm-12 col-md-2 col-form-label fw-semibold">Judul
                                    *</label>
                                <div class="col-sm-12 col-md-10">
                                    <input type="text" class="form-control @error('namashermon') is-invalid @enderror"
                                        name="namashermon" id="namashermon" placeholder="Masukkan Judul Shermon"
                                        value="{{ old('namashermon') }}" required>
                                    @error('namashermon')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <label for="deskripsishermon"
                                    class="col-sm-12 col-md-2 col-form-label fw-semibold">Deskripsi Shermon *</label>
                                <div class="col-sm-12 col-md-10">
                                    {{-- Jika deskripsi adalah teks panjang, gunakan textarea --}}
                                    <textarea class="form-control @error('deskripsishermon') is-invalid @enderror"
                                        id="deskripsishermon" name="deskripsishermon" rows="5"
                                        placeholder="Masukkan Deskripsi Shermon"
                                        required>{{ old('deskripsishermon') }}</textarea>
                                    {{-- Jika Anda tetap ingin input type="text", pastikan itu cukup panjang --}}
                                    {{-- <input type="text"
                                        class="form-control @error('deskripsishermon') is-invalid @enderror"
                                        id="deskripsishermon" name="deskripsishermon"
                                        placeholder="Masukkan Deskripsi Shermon" value="{{ old('deskripsishermon') }}"
                                        required> --}}
                                    @error('deskripsishermon')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <label for="tanggalshermon"
                                    class="col-sm-12 col-md-2 col-form-label fw-semibold">Tanggal *</label>
                                <div class="col-sm-12 col-md-10">
                                    <input type="date"
                                        class="form-control @error('tanggalshermon') is-invalid @enderror"
                                        name="tanggalshermon" id="tanggalshermon" value="{{ old('tanggalshermon') }}"
                                        required>
                                    @error('tanggalshermon')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>

                            {{-- <div class="form-group row mb-3">
                                <label for="foto" class="col-sm-12 col-md-2 col-form-label fw-semibold">Foto *</label>
                                <div class="col-sm-12 col-md-10">
                                    <input type="file" class="form-control @error('foto') is-invalid @enderror"
                                        name="foto" id="foto" required>
                                    <img id="foto-preview" src="#" alt="Preview"
                                        style="display: none; max-width: 100px; margin-top: 10px;">
                                    @error('foto')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                    <small class="form-text text-muted">Format: PNG, JPG, JPEG, GIF, WEBP, SVG. Maks:
                                        5MB.</small>
                                </div>
                            </div> --}}

                            <div class="form-group row mb-3">
                                <label for="link" class="col-sm-12 col-md-2 col-form-label fw-semibold">Link
                                    *</label>
                                <div class="col-sm-12 col-md-10">
                                    <input type="text" class="form-control @error('link') is-invalid @enderror"
                                        name="link" id="link" placeholder="Masukkan Judul Shermon"
                                        value="{{ old('link') }}" required>
                                    @error('link')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12 text-end"> {{-- Atur tombol ke kanan --}}
                                    <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    // Skrip untuk menampilkan preview gambar saat dipilih
            document.getElementById('foto').addEventListener('change', function(event) {
                const [file] = event.target.files;
                if (file) {
                    document.getElementById('foto-preview').src = URL.createObjectURL(file);
                    document.getElementById('foto-preview').style.display = 'block';
                } else {
                    document.getElementById('foto-preview').style.display = 'none';
                    document.getElementById('foto-preview').src = '#';
                }
            });
</script>
@endpush
@endsection