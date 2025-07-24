@extends('layouts/admin')
@section('content')
<div class="container">
    <div class="page-inner">
        @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Sukses!</strong> {{ session('success') }}.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header form-group row">
                        <div class="col-8 col-sm-8">
                            <h4 class="fw-bold card-title">Daftar Event</h4>
                        </div>
                        <div class="col-4 col-sm-4 text-end mt-2 mt-sm-0">
                            <a href="{{ url('admin/kegiatantambah') }}" class="btn btn-outline-primary"
                                data-toggle="modal" data-target="#modalTambah">Tambah Data</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="basic-datatables" class="display table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Judul Event</th>
                                        {{-- <th>Deskripsi</th> --}}
                                        <th>Tanggal</th>
                                        <th>Foto</th>
                                        <th>Lokasi</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($kegiatan as $key => $value)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $value->judulkegiatan }}</td>
                                        {{-- <td>{!! $value->deskripsikegiatan !!}</td> --}}
                                        <td>{{ date('d-m-Y', strtotime($value->tanggalkegiatan)) }}</td>
                                        <td>
                                            <img src="{{ asset('storage/uploads/' . $value->foto) }}"
                                                alt="Foto Kegiatan" width="100">
                                        </td>
                                        <td>{{ $value->lokasi }}</td>
                                        <td class="text-center">
                                            <div class="btn-group gap-1" role="group">
                                                <a href="{{ url('admin/kegiatanedit/' . $value->idkegiatan) }}"
                                                    class="btn btn-warning btn-sm"><i class="fas fa-pencil-alt"></i></a>
                                                <?php if(session('role') == 'Super Admin') {?>
                                                <form action="{{ url('admin/kegiatanhapus/' . $value->idkegiatan) }}"
                                                    method="GET" class="d-inline"
                                                    onsubmit="return confirm('Yakin Mau Hapus Data')">
                                                    <button class="btn btn-danger btn-sm">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </form>
                                                <?php } ?>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection