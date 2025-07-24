@extends('layouts/admin')
@section('content')
<style>
    .password-container {
        position: relative;
    }

    .password-container input {
        padding-right: 40px;
        /* Add space for the icon */
    }

    .password-container .fa-eye,
    .password-container .fa-eye-slash {
        position: absolute;
        right: 30px;
        top: 50%;
        transform: translateY(-50%);
        cursor: pointer;
    }
</style>
<div class="container">
    <div class="page-inner">
        <div class="row">
            <div class="col-12">
                <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
                    <div class="col-12 alert">
                        <h3 class="fw-bold text-center">Buat Whorsip</h3>
                    </div>
                </div>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <div class="card">
                    <div class="card-body">
                        <form method="post" action="{{ url('admin/whorsipeditsimpan/' . $whorsip->idwhorsip) }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div
                                class="p-3 bg-secondary-subtle bg-opacity-10 border border-secondary border-start-0 rounded-end">
                                <h6><b>Edit Whorsip</b></h6>
                            </div>
                            <br>
                            <div class="form-group row">
                                <label class="col-sm-12 col-md-2 col-form-label fw-semibold">Judul Whorsip *</label>
                                <div class="col-sm-12 col-md-10">
                                    <input type="text" class="form-control" name="judulwhorsip"
                                        value="{{ $whorsip->judulwhorsip }}" required
                                        placeholder="Masukkan Judul whorsip">
                                </div>
                            </div>
                            <br>
                            <div class="form-group row">
                                <label class="col-sm-12 col-md-2 col-form-label fw-semibold">Lokasi Whorsip *</label>
                                <div class="col-sm-12 col-md-10">
                                    <input type="text" class="form-control" name="lokasi" value="{{ $whorsip->lokasi }}"
                                        required placeholder="Masukkan Lokasi Whorsip">
                                </div>
                            </div>
                            <br>
                            <div class="form-group row">
                                <label class="col-sm-12 col-md-2 col-form-label fw-semibold">Waktu Whorsip *</label>
                                <div class="col-sm-12 col-md-10">
                                    <input type="datetime-local" class="form-control" name="jam" id="jam"
                                        value="{{ $whorsip->jam }}" required placeholder="Masukkan Lokasi Whorsip">
                                </div>
                            </div>
                            <br>
                            <div class="form-group row">
                                <label class="col-sm-12 col-md-2 col-form-label fw-semibold">Foto *</label>
                                <div class="col-sm-12 col-md-10">
                                    <input type="file" class="form-control" name="foto">
                                    <small class="text-danger">*kosongkan bila tidak ingin mengganti foto</small>

                                    <!-- Menampilkan Foto yang Sudah Ada -->
                                    @if (!empty($whorsip->foto))
                                    <div class="mt-3">
                                        <img src="{{ asset('storage/uploads/' . $whorsip->foto) }}" alt="Foto whorsip"
                                            class="img-fluid" style="max-width: 200px; height: auto;">
                                    </div>
                                    @endif
                                </div>
                            </div>

                            <br>

                            <button type="submit" class="col-sm-12 btn btn-primary pull-right alert-primary"
                                name="simpan">Simpan</button>
                            <br><br>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection