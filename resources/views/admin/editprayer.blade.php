@extends('layouts/admin')

@section('content')

    <div class="container">
        <div class="page-inner">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
                        <div class="col-12 alert">
                            <h3 class="fw-bold text-center">{{ $title }}</h3>
                        </div>
                    </div>
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
                            <form method="post" action="{{ route('editprayersimpan',$value->idpray) }}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT') 

                                <div class="p-3 bg-secondary-subtle bg-opacity-10 border border-secondary border-start-0 rounded-end">
                                    <h6><b>{{ $title }}</b></h6> 
                                </div>
                                <br>

                                <div class="form-group row mb-3">
                                    <label for="namashermon" class="col-sm-12 col-md-2 col-form-label fw-semibold">Name</label>
                                    <div class="col-sm-12 col-md-10">
                                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                                               name="name" id="name"
                                               value="{{ old('name', $value->name) }}" 
                                               required placeholder="Masukkan Judul Shermon">
                                        @error('name')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row mb-3">
                                    <label for="phonenumber" class="col-sm-12 col-md-2 col-form-label fw-semibold">Phone Number</label>
                                    <div class="col-sm-12 col-md-10">
                                        <input type="tel" class="form-control @error('phonenumber') is-invalid @enderror"
                                               name="phonenumber" id="phonenumber"
                                               value="{{ old('phonenumber', $value->phonenumber) }}" 
                                               required>
                                        @error('phonenumber')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row mb-3">
                                    <label for="hopepray" class="col-sm-12 col-md-2 col-form-label fw-semibold">Hope Pray *</label>
                                    <div class="col-sm-12 col-md-10">
                                        <textarea class="form-control @error('hopepray') is-invalid @enderror"
                                                id="hopepray"
                                                name="hopepray"
                                                rows="5"
                                                value="{{ old('hopepray', $value->hopepray) }}" 
                                                placeholder="Masukkan Hope Pray"
                                                required>{{ old('hopepray', $value->hopepray ?? '') }}</textarea>
                                        @error('hopepray')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row mb-3">
                                    <label for="answerpray" class="col-sm-12 col-md-2 col-form-label fw-semibold">Answer Pray *</label>
                                    <div class="col-sm-12 col-md-10">
                                        <textarea class="form-control @error('answerpray') is-invalid @enderror"
                                                id="answerpray"
                                                name="answerpray"
                                                rows="5"
                                                value="{{ old('answerpray', $value->answerpray) }}" 
                                                placeholder="Masukkan jawaban doa"
                                                required>{{ old('answerpray', $value->answerpray ?? '') }}</textarea>
                                        @error('answerpray')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-12 text-end">
                                        <button type="submit" class="btn btn-primary" name="simpan">Update</button> {{-- Teks tombol diubah --}}
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