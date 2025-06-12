@extends('layouts.mantis')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h1>Bagian</h1>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($bagian as $b => $item)
                        <tr>
                            <td>{{ $b + 1 }}</td>
                            <td>{{ $item->name }}</td>
                            <td>
                                <a href="{{ route('bagian.show', $item->id) }}" class="btn btn-primary">Show</a>
                            </td>
                        <tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection