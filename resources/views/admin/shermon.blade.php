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
                            <h4 class="fw-bold card-title">Shermon</h4>
                        </div>
                        <div class="col-4 col-sm-4 text-end mt-2 mt-sm-0">
                            <a href="{{ url('admin/shermontambah') }}" class="btn btn-outline-primary"
                                data-toggle="modal" data-target="#modalTambah">Tambah Data</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="basic-datatables" class="display table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Judul</th>
                                        <th>Lokasi</th>
                                        <th>Jam</th>
                                        <th>Link</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($shermons as $index => $shermon)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $shermon->namashermon }}</td>
                                        <td>{{ Str::limit($shermon->deskripsishermon, 50) }}</td> {{-- Contoh: batasi
                                        deskripsi --}}
                                        <td>{{ \Carbon\Carbon::parse($shermon->tanggalshermon)->format('d F Y') }}</td>
                                        <td>
                                            {{-- @if ($shermon->foto)
                                            <img src="{{ asset('storage/uploads/' . $shermon->foto) }}"
                                                alt="Foto Shermon" width="80" height="auto" class="img-thumbnail">
                                            @else
                                            Tidak Ada Foto
                                            @endif --}}
                                            <iframe width="100%" height="115" src="{{ $shermon->link }}"
                                                title="YouTube video player" frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                referrerpolicy="strict-origin-when-cross-origin"
                                                allowfullscreen></iframe>
                                        </td>
                                        <td>
                                            <div class="btn-group gap-2" role="group" aria-label="Aksi Shermon">
                                                <a href="{{ route('editshermon', $shermon->idshermon) }}"
                                                    class="btn btn-sm btn-warning" style="border-radius:10;">Edit</a>
                                                <?php if(session('role') == 'Super Admin') {?>
                                                <form action="{{ route('hapusshermon', $shermon->idshermon) }}"
                                                    method="POST" class="m-0 p-0">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger"
                                                        onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?');">Hapus</button>
                                                </form>
                                                <?php } ?>
                                            </div>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="6" class="text-center">Belum ada data Shermon.</td>
                                    </tr>
                                    @endforelse
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