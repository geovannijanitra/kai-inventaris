@extends('layout.template')
@section('judul', 'Tambah Merk')
@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Tambah Merk</h4>
        </div>
        <form data-parsley-validate method="POST" action="{{ url('/merk') }}" enctype="multipart/form-data" autocomplete="off">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="namaMerk">Nama Merk</label>
                    <input type="text" name="namaMerk" id="namaMerk" class="form-control" parsley-trigger="change" placeholder="Masukkan Nama Merk" required>
                </div>
            </div>
            <div class="card-footer">
                <button class="btn btn-primary" type="submit">Simpan</button>
                <a class="btn btn-danger" type="button" href="/merk">Batal</a>
            </div>
        </form>
    </div>
@endsection
