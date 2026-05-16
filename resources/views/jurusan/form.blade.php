@extends('layout.master')
@section('title')
    Form Jurusan
@endsection

@section('judul')
    Form Jurusan
@endsection

@section('konten')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                {{ isset($jurusan) ? 'Form Edit Jurusan' : 'Form Tambah Jurusan' }}
            </h6>
        </div>
        <div class="card-body">
            @if(isset($jurusan))
                <form method="POST" action="/jurusan/{{ $jurusan->id }}">
                    @csrf
                    @method('PUT')
            @else
                <form method="POST" action="/jurusan">
                    @csrf
            @endif

                <div class="mb-3">
                    <label class="form-label">Kode Jurusan</label>
                    <input type="text" name="kode_jurusan" class="form-control @error('kode_jurusan') is-invalid @enderror"
                        value="{{ old('kode_jurusan', $jurusan->kode_jurusan ?? '') }}">
                    @error('kode_jurusan')
                        <div class="alert">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Nama Jurusan</label>
                    <input type="text" name="nama_jurusan" class="form-control @error('nama_jurusan') is-invalid @enderror"
                        value="{{ old('nama_jurusan', $jurusan->nama_jurusan ?? '') }}">
                    @error('nama_jurusan')
                        <div class="alert">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">
                    {{ isset($jurusan) ? 'Simpan Perubahan' : 'Tambah Data' }}
                </button>
            </form>
        </div>
    </div>
@endsection


