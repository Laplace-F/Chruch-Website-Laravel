@extends('layouts/admin')

@section('content')

<div class="container">
    <div class="page-inner">
        <div class="row">
            <div class="col-12">
                <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
                    <div class="col-12 alert">
                        <h3 class="fw-bold text-center">Edit Shermon</h3> {{-- Judul diubah --}}
                    </div>
                </div>

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
                        <form method="post" action="{{ route('simpaneditshermon', $shermon->idshermon) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div
                                class="p-3 bg-secondary-subtle bg-opacity-10 border border-secondary border-start-0 rounded-end">
                                <h6><b>Form Edit Shermon</b></h6>
                            </div>
                            <br>

                            <div class="form-group row mb-3">
                                <label for="namashermon" class="col-sm-12 col-md-2 col-form-label fw-semibold">Judul
                                    *</label>
                                <div class="col-sm-12 col-md-10">
                                    <input type="text" class="form-control @error('namashermon') is-invalid @enderror"
                                        name="namashermon" id="namashermon"
                                        value="{{ old('namashermon', $shermon->namashermon) }}" {{-- Memuat data lama
                                        atau dari model --}} required placeholder="Masukkan Judul Shermon">
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
                                    <textarea name="deskripsishermon" id="deskripsishermon" rows="10"
                                        class="form-control @error('deskripsishermon') is-invalid @enderror"
                                        required>{{ old('deskripsishermon', $shermon->deskripsishermon) }}</textarea>
                                    {{-- Memuat data lama atau dari model --}}
                                    <script>
                                        // Pastikan CKEDITOR sudah dimuat di layout utama atau di sini
                                            CKEDITOR.replace('deskripsishermon');
                                    </script>
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
                                        name="tanggalshermon" id="tanggalshermon"
                                        value="{{ old('tanggalshermon', $shermon->tanggalshermon) }}" {{-- Memuat data
                                        lama atau dari model --}} required>
                                    @error('tanggalshermon')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>

                            {{-- <div class="form-group row mb-3">
                                <label for="foto" class="col-sm-12 col-md-2 col-form-label fw-semibold">Foto</label>
                                <div class="col-sm-12 col-md-10">
                                    <input type="file" class="form-control @error('foto') is-invalid @enderror"
                                        name="foto" id="foto">
                                    <small class="form-text text-muted">*Kosongkan bila tidak ingin mengganti foto.
                                        Format: PNG, JPG, JPEG, GIF, WEBP, SVG. Maks: 5MB.</small>
                                    @error('foto')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror

                                    @if ($shermon->foto)
                                    <div class="mt-3">
                                        <p class="mb-1">Foto saat ini:</p>
                                        <img src="{{ asset('storage/foto/' . $shermon->foto) }}"
                                            alt="Foto Shermon Saat Ini" class="img-fluid img-thumbnail"
                                            style="max-width: 200px; height: auto;">
                                    </div>
                                    @endif
                                    <img id="foto-preview" src="#" alt="Preview Foto Baru"
                                        style="display: none; max-width: 200px; margin-top: 10px;"
                                        class="img-thumbnail">
                                </div>
                            </div> --}}
                            <div class="form-group row mb-3">
                                <label for="link" class="col-sm-12 col-md-2 col-form-label fw-semibold">Link
                                    *</label>
                                <div class="col-sm-12 col-md-10">
                                    <input type="text" class="form-control @error('link') is-invalid @enderror"
                                        name="link" id="link" value="{{ old('namashermon', $shermon->link) }}" {{--
                                        Memuat data lama atau dari model --}} required
                                        placeholder="Masukkan Link Youtube">
                                    @error('link')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12 text-end">
                                    <button type="submit" class="btn btn-primary" name="simpan">Update</button> {{--
                                    Teks tombol diubah --}}
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