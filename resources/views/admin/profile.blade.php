@extends('layouts/admin')
@section('content')
    <div class="container mt-5">
        <div class="page-inner">
            <div class="row">
                <div class="col-12">
                    @if ($errors->any())
                        <div class="alert alert-danger mt-4">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show mt-4" role="alert">
                            <strong>Sukses!</strong> {{ session('success') }}.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <br>
                    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
                        <div class="col-12 alert">
                            <h3 class="fw-bold text-center">Edit Data Pribadi</h3>
                        </div>
                    </div>
                    <div class="card" style="box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
                        <div class="card-body">
                            <form method="post" action="{{ url('updateprofile') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row mb-3">
                                    <label class="col-sm-12 col-md-2 col-form-label fw-semibold">Nama <span class="text-danger">*</span></label>
                                    <div class="col-sm-12 col-md-10">
                                        <input type="text" class="form-control" name="name" value="{{ $profile->name }}">
                                    </div>
                                </div>
                                <div class="form-group row mb-3">
                                    <label class="col-sm-12 col-md-2 col-form-label fw-semibold">Email <span class="text-danger">*</span></label>
                                    <div class="col-sm-12 col-md-10">
                                        <input type="email" class="form-control" name="email" value="{{ $profile->email }}">
                                    </div>
                                </div>
                                <div class="form-group row mb-3">
                                    <label class="col-sm-12 col-md-2 col-form-label fw-semibold">Password</label>
                                    <div class="col-sm-12 col-md-10">
                                        <input type="text" class="form-control" name="password">
                                        <span style="font-size: 12px">*kosongkan bila tidak ingin mengganti password</span>
                                    </div>
                                </div>
                                <button type="submit" class="col-sm-12 btn btn-primary pull-right alert-primary" name="simpan">Simpan</button>
                                <br><br>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection