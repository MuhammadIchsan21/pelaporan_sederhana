<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Data</h1>
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
            <form action="{{ route('dashboard.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control" name="nama" placeholder="username">
                </div>
                <div class="form-group">
                    <label>Divisi</label>
                    <input type="text" class="form-control" name="divisi" placeholder="Divisi">
                </div>
                <div class="form-group">
                    <label>Keluhan</label>
                    <input type="text" class="form-control" name="keluhan" placeholder="keluhan">
                </div>
                <button type="submit" class="btn btn-primary btn-block">Simpan</button>
            </form>
        </div>
    </div>




</div>
<!-- /.container-fluid -->
@endsection
