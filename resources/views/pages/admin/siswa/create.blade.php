@extends('layouts.admin')
@section('content')
    <div class="container-fluid px-4 border-bottom">
        <h1 class="mt-4 h2">{{ $title }}</h1>
    </div>
    <form class="col-lg-8 contianer-fluid px-4 mt-3" method="POST" action="{{ route('siswa.index') }}"
        enctype="multipart/form-data">
        @csrf
         {{-- nis  siswa --}}
         <div class="mb-3">
            <label for="nis" class="form-label">NISN</label>
            <input type="text" class="form-control @error('nis') is-invalid @enderror" id="nis" name="nis" value="{{ old('nis') }}" autofocus required placeholder="nis">
            @error('nis')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        {{-- nama  siswa --}}
        <div class="mb-3">
            <label for="nama_siswa" class="form-label">Nama Siswa</label>
            <input type="text" class="form-control @error('nama_siswa') is-invalid @enderror" id="nama_siswa" name="nama_siswa" value="{{ old('nama_siswa') }}" autofocus required placeholder="Nama Siswa">
            @error('nama_siswa')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
         {{-- kelas_id --}}
         <!-- <div class="mb-3">
            <label for="kelas_id" class="form-label">Kelas</label>
            <input type="text" class="form-control @error('kelas_id') is-invalid @enderror" id="kelas_id" name="kelas_id" value="{{ old('kelas_id') }}" autofocus required placeholder="kelas">
            @error('kelas_id')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div> -->
        <div class="mb-3">
            <label for="kelas_id" class="form-label">Kelas</label>
            <select class="form-select @error('kelas_id') is-invalid @enderror" id="kelas_id" name="kelas_id" required>
                <option value="" disabled selected>Pilih kelas</option>
                @foreach ($kelases as $kelas)
                    @if (old('kelas_id') == $kelas->id)
                        <option value="{{ $kelas->id }}" selected>{{ $kelas->kelas_name }}</option>
                    @else
                        <option value="{{ $kelas->id }}">{{ $kelas->kelas_name }}</option>
                    @endif
                @endforeach
            </select>

            @error('kelas_id')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
         {{-- jenis_kelamin --}}
         <!-- <div class="mb-3">
            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
            <input type="text" class="form-control @error('jenis_kelamin') is-invalid @enderror" id="jenis_kelamin" name="jenis_kelamin" value="{{ old('jenis_kelamin') }}" autofocus required placeholder="Jenis Kelamin">
            @error('jenis_kelamin')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div> -->
        <div class="mb-3">
            <label for="name" class="form-label">Jenis Kelamin</label>
            <div class="d-flex">
                <div class="form-check col-lg-6">
                    <input class="form-check-input @error('jenis_kelamin') is-invalid @enderror" type="radio" name="jenis_kelamin"
                        id="jenis_kelamin" value="Laki-laki">
                    <label class="form-check-label" for="jenis_kelamin1">
                        Laki-laki
                    </label>
                </div>
                <div class="form-check col-lg-6">
                    <input class="form-check-input @error('jenis_kelamin') is-invalid @enderror" type="radio" name="jenis_kelamin"
                        id="jenis_kelamin" value="Perempuan">
                    <label class="form-check-label" for="jenis_kelamin2">
                        Perempuan
                    </label>
                </div>
            </div>

            @error('jenis_kelamin')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        {{-- agama --}}
        <div class="mb-3">
            <label for="agama" class="form-label">Agama</label>
            <input type="text" class="form-control @error('agama') is-invalid @enderror" id="agama" name="agama" value="{{ old('agam') }}" autofocus required placeholder="agama">
            @error('agama')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    
        {{-- alamat --}}
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" value="{{ old('alamat') }}" autofocus required placeholder="Alamat">
            @error('alamat')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        
        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
        <input type="hidden" name="validasi" value="2">
        <button type="submit" class="btn btn-primary mb-3">Simpan</button>
        <a href="{{ route('siswa.index') }}" class="btn btn-danger mb-3">Cancel</a>
    </form>
@endsection