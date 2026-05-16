@extends('layout.master')
@section('title')
    Data Mahasiswa
@endsection

@section('judul')
    Data Mahasiswa
@endsection

@section('konten')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><a href="/mahasiswa/tambah" class="btn btn-outline-primary">Tambah Data</a></h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>NIM</th>
                            <th>Jurusan</th>
                            <th>Tempat, Tanggal Lahir</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($mahasiswa as $x )
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $x->nama }}</td>
                                <td>{{ $x->nim }}</td>
                                <td>{{ $x->jurusan }}</td>
                                <td>{{ $x->tempat_lahir }}, {{ $x->tanggal_lahir }}</td>
                                <td>
                                    <a href="/mahasiswa/edit/{{ $x->id }}" class="btn btn-outline-info">Edit</a>

                                    <form action="/mahasiswa/{{ $x->id }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                                    </form>
                                </td>
                            </tr>

                        @empty
                            <tr>
                                <td colspan="6" class="text-center">Data mahasiswa tidak ditemukan</td>
                            </tr>
                        @endforelse


                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        //message with sweetalert
        @if(session('success'))
        Swal.fire({
            icon: "success",
            title: "BERHASIL",
            text: "{{ session('success') }}",
            showConfirmButton: false,
            timer: 2000
        });
        @elseif(session('error'))
        Swal.fire({
            icon: "error",
            title: "GAGAL!",
            text: "{{ session('error') }}",
            showConfirmButton: false,
            timer: 2000
        });
        @endif
    </script>
@endsection
