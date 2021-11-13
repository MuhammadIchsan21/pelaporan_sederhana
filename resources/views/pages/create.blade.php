@extends('layouts.create')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4 mt-5">
        <h1 class="h3 mb-0 text-gray-800">Buat laporan kerusakan assets it</h1>
    </div>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="card shadow">
        <div class="card-body">
            <form action="{{ route('services.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label>nama</label>
                    <input type="text" class="form-control" name="nama" placeholder="Nama">
                </div>
                <div class="form-group">
                    <label for="divisi">Status</label>
                    <select name="divisi" required class="form-control">
                        <option hidden>Silahkan PILIH DIVISI ANDA</option>
                        <option value="it">IT</option>
                        <option value="pbau">PBAU</option>
                        <option value="teknik">Teknik</option>
                        <option value="keuangan">Keuangan</option>
                        <option value="tata_usaha">Tata Usaha</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>keluhan</label>
                    <input type="text" class="form-control" name="keluhan" placeholder="Keluhan">
                </div>
                {{-- <div class="form-group">
                    <label>status</label>
                    <select name="divisi" required class="form-control">
                        <option hidden>pilih</option>
                        <option value="sedang_dikerjakan">Sedang dikerjakan</option>
                    </select>
                </div> --}}
                <button type="submit" class="btn btn-primary btn-block">Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection
