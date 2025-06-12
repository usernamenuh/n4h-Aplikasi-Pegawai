@extends('layouts.mantis')

@section('content')
<div class="">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h4 class="card-title">Data Pegawai</h4>
            <div>
                    <a href="{{ route('pegawai.create') }}" class="btn btn-primary">Tambah Pegawai</a>
            </div>
        </div>

        <div class="card-body">
            <table class="table table-bordered" id="table">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>Nama</th>
                        <th>Bagian</th>
                        <th>Email</th>
                        <th>Jabatan</th>
                        <th>Alamat</th>
                        <th>Jenis Kelamin</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pegawai as $index => $item )
                    <tr>
                        <td> {{ $index + 1 }}</td>
                        <td> {{ $item->name }}</td>
                        <td>
    {{ $item->bagian ? $item->bagian->name : '-' }}
</td>
                        <td> {{ $item->user->email }}</td>
                        <td> {{ $item->jabatan }}</td>
                        <td> {{ $item->alamat }}</td>
                        <td> {{ $item->jenis_kelamin }}</td>
                        <td>
                            <div class="dropdown">
                                <a class="btn dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Aksi
                                </a>
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="{{ route('pegawai.edit', $item->id) }}">Edit</a></li>
                                  <li>
                                    <button type="button" class="btn text-danger" data-bs-toggle="modal" data-bs-target="#confirmasiDeleteModal{{ $item->id }}">
                                        Delete</button>
                                    </li>
                                </ul>
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

<!-- Modal -->

@foreach ($pegawai as $item )
<div class="modal fade" id="confirmasiDeleteModal{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Lanjutkan Penghapusan Data ?</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>Data akan terhapus secara permanen, Klik <b>Lanjutkan</b> untuk penghapusan</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <form action="{{ route('pegawai.destroy', $item->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Lanjutkan</button>
            </form>
        </div>
      </div>
    </div>
  </div>
@endforeach
@endsection
