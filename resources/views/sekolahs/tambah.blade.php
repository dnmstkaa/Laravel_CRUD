@extends('template.default')

@section('body')
<h2>Tambah Data</h2>

        <form action=" {{ route('sekolahs.Simpan') }}" class="" method="post">
            @csrf
<div class="mb-3">
    <label class="form-label">Nama Sekolah</label>      
    <input type="text" name="nama_sekolah" class="form-control
        @error('nama_sekolah')
            is-invalid
        @enderror"
        name="example-text-input" placeholder="Masukan Nama Sekolah" value="{{ old('nama_sekolah')}}">
        @error('nama_sekolah')
        <span class="invalid-feedback">{{$message}}</span>
        @enderror
</div>
<div class="mb-3">
    <label class="form-label">Alamat</label>
    <input type="text" name="alamat" class="form-control  
    @error('alamat')
            is-invalid
        @enderror" name="example-text-input" placeholder="Masukan Alamat" value="{{ old('alamat')}}">
        @error('alamat')
        <span class="invalid-feedback">{{$message}}</span>
        @enderror
</div>
<div class="mb-3">
    <label class="form-label">Jurusan</label>
    <input type="text" name="jurusan" class="form-control
    @error('jurusan')
            is-invalid
        @enderror" name="example-text-input" placeholder="Masukan Nama Jurusan" value="{{ old('jurusan')}}">
        @error('jurusan')
        <span class="invalid-feedback">{{$message}}</span>
        @enderror
</div>
<div class="mb-3">
    <label class="form-label">Jumlah Guru</label>
    <input type="text" name="jumlah_guru" class="form-control
    @error('jumlah_guru')
            is-invalid
        @enderror" name="example-text-input" placeholder="Masukan Jumlah Guru" value="{{ old('jumlah_guru')}}">
        @error('jumlah_guru')
        <span class="invalid-feedback">{{$message}}</span>
        @enderror
</div>

<div class="mb-3">
    <input type="submit" value="Simpan" class="btn btn-primary">
</div>

</form>

@endsection