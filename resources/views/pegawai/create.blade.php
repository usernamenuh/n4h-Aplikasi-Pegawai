@extends('layouts.mantis')

@section('content')

<div class="">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h4 class="card-title">Form Data Pegawai </h4>
            <div>
                <a href="{{ route('pegawai.index') }}" class="btn btn-primary">Kembali</a>
            </div>
    </div>
        <div class="card-body">
            <form action=" {{ route('pegawai.store') }}" method="POST" class="">
            @csrf
            <div class="form-grup my-2">
                <label for="name">Nama Pegawai</label>
                <input type="text" name="name" id="name"
                class="form-control @error('name')
                is-invalid
                @enderror"
                value="{{ old('name') }}" autofocus>
                @error('name')
                <small class="text-denger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-grup my-2">
                <label for="bagian_id">Bagian</label>
                <select name="bagian_id" id="bagian_id" class="form-control @error('bagian_id')
                is-invalid
                @enderror">
                    <option value="">Pilih Bagian</option>
                    @foreach ($bagians as $bagian)
                        <option value="{{ $bagian->id }}" {{ old('bagian_id') == $bagian->id ? 'selected' : '' }}>
                            {{ $bagian->name }}
                        </option>
                    @endforeach
                </select>
                @error('bagian_id')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-grup my-2">
                <label for="email">Email</label>
                <input type="text" name="email" id="email" class="form-control @error('email')
                is-invalid
                @enderror" value="{{ old('email') }}">
            </div>
            <div class="form-grup my-2">
                <label for="jabatan">Jabatan</label>
                <input type="text" name="jabatan" id="jabatan" class="form-control @error('jabatan')
                is-invalid
                @enderror" value="{{ old('jabatan') }}">
            </div>
            <div class="form-grup my-2">
                <label for="alamat">Alamat</label>
                <textarea name="alamat" id="alamat" cols="30" rows="10"  class="form-control @error('alamat')
                is-invalid
                @enderror">{{ old('alamat') }}</textarea>
            </div>
            <div class="form-grup my0">
                <label for="jenis_kelamin">Jenis Kelamin</label>
                <select name="jenis_kelamin" id="jenis_kelamin" class="form-control @error('jenis_kelamin')
                is-invalid
                @enderror">
                    <option value="">Pilih Jenis Kelamin</option>
                    <option value="Laki-Laki" {{ old('jenis_kelamin') == 'Laki-Laki' ? 'selected' : '' }}>Laki - Laki</option>
                    <option value="Perempuan" {{ old('jenis_kelamin') == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                </select>
            </div>
            <div class="my-2 d-flex justify-content-end">
                <button class="btn btn-primary mt-3">Simpan</button>
            </div>
            </form>
</div>
@endsection
