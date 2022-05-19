@extends('layout.template')
@section('judul', 'Ubah Jenis')
@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Ubah Jenis</h4>
        </div>
        <form data-parsley-validate method="POST" action="/jenis/{{ $jenis->kodeJenis }}" enctype="multipart/form-data" autocomplete="off">
            @csrf
            @method('PATCH')
            <div class="card-body">
                <div class="form-group">
                    <label for="kodeJenis">Kode Jenis</label>
                    <input type="number" name="kodeJenis" id="kodeJenis" class="form-control" parsley-trigger="change" placeholder="Masukkan Kode Jenis" required value="{{ $jenis->kodeJenis }}">
                </div>
                <div class="form-group">
                    <label for="jenisBarang">Jenis Barang</label>
                    <input type="text" name="jenisBarang" id="jenisBarang" class="form-control" parsley-trigger="change" placeholder="Masukkan Jenis Barang" required value="{{ $jenis->jenisBarang }}">
                </div>
            </div>
            <div class="card-footer">
                <button class="btn btn-primary" type="submit">Perbarui</button>
                <a class="btn btn-danger" type="button" href="/jenis">Batal</a>
            </div>
        </form>
    </div>
@endsection
