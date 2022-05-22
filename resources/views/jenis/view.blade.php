@extends('layout.template')
@section('judul','KAI Inventaris - Jenis Barang')
@section('content')
<div class="row">
    <div class="col-sm-12">
            <h4 class="page-title">Data Jenis Barang</h4>
            <p class=" page-title-alt">Berisikan jenis-jenis barang yang tersedia, tambahkan jika belum ada</p>
        </div>

    {{-- <div class="col-12 col-sm-12 col-lg-12" data-toggle="modal" data-target="#modalJenis">
        <div class="card">
            <div class="btn btn-icon icon-left btn-primary"><i class="far fa-edit"></i>Tambah Jenis</div>
        </div>
    </div> --}}
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Jenis Table</h4>
                <div class="card-header-action">
                <a type="button" data-toggle="modal" data-target="#modalJenis" class="btn btn-icon icon-left btn-primary" href="jenis/create" ><i class="far fa-edit"></i>Tambah</a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                        <thead>
                            <tr>
                                <th>Kode Jenis</th>
                                <th>Jenis Barang</th>
                                <th>Jumlah Merk</th>
                                <th>Merk</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($jenis as $jenis)
                            <tr>
                                <td>{{ $jenis->kodeJenis }}</td>
                                <td>{{ $jenis->jenisBarang }}</td>
                                <td>{{ count($jenis->merk) }} Merk</td>
                                <td>
                                    <a href="/merk/{{ $jenis->kodeJenis }}/merkbarang" type="button" class="btn btn-warning">Lihat</a>
                                </td>
                                <td>
                                    <a href="/jenis/{{ $jenis->kodeJenis }}/edit" class="btn btn-primary far fa-edit"></a>
                                    <form action="/jenis/{{ $jenis->kodeJenis }}" method="post" class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" onclick="return confirm('Apakah Anda Yakin Ingin Menghapusnya?')" class="btn btn-danger fa fa-trash"></button>
                                    </form>
                                </td>
                            </tr>
                                {{-- <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>Edinburgh</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="#" class="btn btn-icon btn-warning"><i class="far fa-edit"></i></a>
                                        <a href="#" class="btn btn-icon btn-danger"><i class="fas fa-times"></i></a>
                                    </div>
                                </td> --}}
                                @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="modalJenis" tabindex="-1" role="dialog" aria-labelledby="formModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="formModal">Tambah Jenis</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" class="form-horizontal" role="form" action="{{ url('/jenis') }}" enctype="multipart/form-data" autocomplete="off">
                @csrf
                    <div class="form-group">
                        <label>Kode Barang</label>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Masukkan Kode Jenis Barang" name="kodeJenis">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Jenis Barang</label>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Masukkan Jenis Barang" name="jenisBarang">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary m-t-15 waves-effect">Input</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
