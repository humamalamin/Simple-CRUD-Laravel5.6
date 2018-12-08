@extends('welcome')

@section('content')
<div class="row">
    <div class="panel">
        <div class="panel-heading">
            <h2 class="panel-title">Tambah User</h2>
        </div>
        <div class="panel-body">
            <form action="{{ route('user.store') }}" method="POST" class="form-horizontal">
                @csrf
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control" name="nama" required>
                </div>
                <div class="form-group">
                    <label>E-mail</label>
                    <input type="email" class="form-control" name="email" required>
                </div>
                <div class="form-group">
                    <label >Password</label>
                    <input type="password" class="form-control" nama="password" required>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection