@extends('layouts.mantis')
@section('title', 'Detail Bagian')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Detail Bagian {{ $bagian->name }}</h1>
            <table class="table table-bordered">
                <tr>
                    <th>ID</th>
                    <td>{{ $bagian->id }}</td>
                </tr>
                <tr>
                    <th>Nama Bagian</th>
                    <td>{{ $bagian->name}}</td>
                </tr>
                <tr>
                    <th>Nama Pegawai</th>
                    @foreach ($bagian->pegawai as $index => $pegawai)
                        <td>
                            {{ $pegawai->name }}
                        </td>
                    @endforeach
                </tr>
                <tr>
                    <th>Created At</th>
                    <td>{{ $bagian->created_at }}</td>
                </tr>
                <tr>
                    <th>Updated At</th>
                    <td>{{ $bagian->updated_at }}</td>
                </tr>
            </table>

            <a href="{{ route('bagian.index') }}" class="btn btn-primary">Kembali ke Daftar Bagian</a>
        </div>
    </div>
</div>
@endsection