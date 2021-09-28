@extends('layouts.admin')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Data</h1>
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
            <form action="{{route('dashboard.update', $item->id)}}" method="POST">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label>nama</label>
                    <input type="text" class="form-control" name="nama" placeholder="nama" value="{{ $item->nama }}">
                </div>
                <div class="form-group">
                    <label>Divisi</label>
                    <input type="text" class="form-control" name="divisi" placeholder="Divisi"
                        value="{{ $item->divisi }}">
                </div>
                <div class="form-group">
                    <label>keluhan</label>
                    <input type="text" class="form-control" name="keluhan" placeholder="Keluhan"
                        value="{{ $item->keluhan }}">
                </div>
                <button type="submit" class="btn btn-primary btn-block">Perbarui</button>
            </form>
        </div>
    </div>


</div>
<!-- /.container-fluid -->
@endsection
