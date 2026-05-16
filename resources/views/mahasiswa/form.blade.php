@extends('layout.master')
@section('title')
    Form Mahasiswa
@endsection

@section('judul')
    Form Mahasiswa
@endsection

@section('konten')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Tambah Mahasiswa</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <form method="POST" action="/mahasiswa">
                    @csrf
                    <div class="mb-3">

                        <label for="exampleInputEmail1" class="form-label">NIM</label>
                        <input type="text" name="nim" class="form-control" @error('nim') is-invalid @enderror"
                            id="exampleInputEmail1" aria-describedby="emailHelp">
                        @error('nim')
                            <div class="alert">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama</label>
                        <input type="text" name="nama" class="form-control" @error('nama') is-invalid @enderror"
                            id="exampleInputEmail1" aria-describedby="emailHelp">
                        @error('nama')
                            <div class="alert">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Jurusan</label>
                        <select name="jurusan" class="form-control" @error('jurusan') is-invalid @enderror">
                            <option value="">Pilih Jurusan</option>
                            @foreach ($jurusans as $j)
                                <option value="{{ $j->nama_jurusan }}" @selected(old('jurusan') === $j->nama_jurusan)>
                                    {{ $j->nama_jurusan }} ({{ $j->kode_jurusan }})
                                </option>
                            @endforeach


                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Tempat Lahir</label>
                        <input type="text" name="tempat_lahir" class="form-control"
                            @error('tempat_lahir') is-invalid @enderror" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                        @error('tempat_lahir')
                            <div class="alert">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir" class="form-control"
                            @error('tanggal_lahir') is-invalid @enderror" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                        @error('tanggal_lahir')
                            <div class="alert">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">No Hp</label>
                        <input type="text" name="no_handphone" class="form-control"
                            @error('no_handphone') is-invalid @enderror" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                        @error('no_handphone')
                            <div class="alert">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Domisili</label>
                        <input type="text" name="domisili" class="form-control" @error('domisili') is-invalid @enderror"
                            id="exampleInputEmail1" aria-describedby="emailHelp">
                        @error('domisili')
                            <div class="alert">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" @error('email') is-invalid @enderror"
                            id="exampleInputEmail1" aria-describedby="emailHelp">
                        @error('email')
                            <div class="alert">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
                        <select name="jenis_kelamin" class="form-control" @error('jenis_kelamin') is-invalid @enderror">
                            <option value="">Pilih Jenis Kelamin</option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                        @error('jenis_kelamin')
                            <div class="alert">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Tahun Masuk</label>
                        <input type="number" name="tahun_masuk" class="form-control"
                            @error('tahun_masuk') is-invalid @enderror" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                        @error('tahun_masuk')
                            <div class="alert">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Tambah Data</button>
                </form>

                </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
