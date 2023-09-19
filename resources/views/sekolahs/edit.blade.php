@extends('template.default')

@section('body')
<h2>Edit Data</h2>

        <form action="{{ route('sekolahs.update' , $sekolah->id) }}" class="" method="post">
            @csrf
            @method ('PUT')
<div class="mb-3">
    <label class="form-label">Nama Sekolah</label>
    <input type="text" name="nama_sekolah" class="form-control
    @error('nama_sekolah')
            is-invalid
        @enderror" name="example-text-input" placeholder="Masukan Nama Sekolah" value="{{ $sekolah->nama_sekolah }}">
        @error('nama_sekolah')
        <span class="invalid-feedback">{{$message}}</span>
        @enderror
</div>
<div class="mb-3">
    <label class="form-label">Alamat</label>
    <input type="text" name="alamat" class="form-control
    @error('alamat')
            is-invalid
        @enderror" name="example-text-input" placeholder="Masukan Alamat" value="{{ $sekolah->alamat }}">
    @error('alamat')
        <span class="invalid-feedback">{{$message}}</span>
        @enderror
</div>
<div class="mb-3">
    <label class="form-label">Jurusan</label>
    <input type="text" name="jurusan" class="form-control
    @error('jurusan')
            is-invalid
        @enderror" name="example-text-input" placeholder="Masukan Nama Jurusan" value="{{ $sekolah->jurusan }}">
    @error('jurusan')
        <span class="invalid-feedback">{{$message}}</span>
        @enderror
</div>
<div class="mb-3">
    <label class="form-label">Jumlah Guru</label>
    <input type="text" name="jumlah_guru" class="form-control
    @error('jumlah_guru')
            is-invalid
        @enderror" name="example-text-input" placeholder="Masukan Jumlah Guru" value="{{ $sekolah->jumlah_guru }}">
    @error('jumlah_guru')
        <span class="invalid-feedback">{{$message}}</span>
        @enderror
</div>

<div class="mb-3">
    <input type="submit" value="Simpan" class="btn btn-primary">
</div>

</form>

@endsection