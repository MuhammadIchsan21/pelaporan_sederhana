@extends('layouts.app')
@section('title')
Home
@endsection
@section('content')
<div class="d-sm-flex
                align-items-center
                justify-content-center
                mb-4
                mt-3
            ">
    <h1 class="h3 mb-0 text-gray-800">Data User</h1>
</div>
<div class="container">
    <div class="row">
        <div class="table-responsive col-12 mt-5">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800 text-center">Pelaporan</h1>
                <a href="{{ route('services-create') }}" class="btn btn-sm btn-primary shadow-sm">
                    <i class="fas fa-plus fa-sm text-white-50"></i> Tambah Data
                </a>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Orang</th>
                        <th>divisi</th>
                        <th>Keluhan</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($items as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->nama}}</td>
                        <td>{{$item->divisi}}</td>
                        <td>{{ $item->keluhan}}</td>
                        <td>{{ $item->status}}</td>
                        @empty
                    <tr>
                        <td colspan="7" class="text-center">
                            Data Kosong
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
