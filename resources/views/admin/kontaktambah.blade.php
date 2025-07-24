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
                            <h3 class="fw-bold text-center">Buat Kontak</h3>
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
                            <form method="post" action="{{ url('admin/kontaksimpan') }}" enctype="multipart/form-data">
                                @csrf
                                <div
                                    class="p-3 bg-secondary-subtle bg-opacity-10 border border-secondary border-start-0 rounded-end">
                                    <h6><b>Tambahkan Kontak</b></h6>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <label class="col-sm-12 col-md-2 col-form-label fw-semibold">Email *</label>
                                    <div class="col-sm-12 col-md-10">
                                        <input type="text" class="form-control" name="email" required
                                            placeholder="Masukkan Email">
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <label class="col-sm-12 col-md-2 col-form-label fw-semibold">No HP *</label>
                                    <div class="col-sm-12 col-md-10">
                                        <input type="text" class="form-control" name="nohp" required
                                            placeholder="Masukkan Nomor HP">
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <label class="col-sm-12 col-md-2 col-form-label fw-semibold">Alamat *</label>
                                    <div class="col-sm-12 col-md-10">
                                        <input type="text" class="form-control" name="alamat" required
                                            placeholder="Masukkan Alamat">
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
