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
                            <h4 class="fw-bold card-title">Prayer Request</h4>
                        </div>
                        <div class="col-4 col-sm-4 text-end mt-2 mt-sm-0">
                            {{-- <a href="{{ url('admin/prayertambah') }}" class="btn btn-outline-primary"
                                data-toggle="modal" data-target="#modalTambah">Tambah Data</a> --}}
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="basic-datatables" class="display table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        {{-- <th>Id Prayer</th> --}}
                                        <th>Name</th>
                                        <th>Phone Number</th>
                                        <th>Hope Pray</th>
                                        <th>Answer Pray</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $no = 1;
                                        ?>
                                    @foreach ($value as $row )
                                    <tr>
                                        <td> {{ $no++ }}</td>
                                        {{-- <td> {{ $row->idpray }}</td> --}}
                                        <td> {{ $row->name }}</td>
                                        <td> {{ $row->phonenumber }}</td>
                                        <td> {{ $row->hopepray }}</td>
                                        <td> {{ $row->answerpray }}</td>
                                        <td class="text-center">
                                            <div class="btn-group gap-1" role="group">
                                                <a href="{{ url('admin/editprayer/' . $row->idpray) }}"
                                                    class="btn btn-warning btn-sm"><i class="fas fa-pencil-alt"></i></a>
                                                <?php if(session('role') == 'Super Admin') {?>
                                                <form action="{{ url('admin/hapusprayer/' . $row->idpray) }}"
                                                    method="POST" class="d-inline"
                                                    onsubmit="return confirm('Yakin Mau Hapus Data')">
                                                    @csrf
                                                    @method('DELETE')
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