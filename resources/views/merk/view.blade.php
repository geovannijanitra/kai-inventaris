@extends('layout.template')
@section('judul','Merk')
@section('content')
<div class="row">
    <div class="col-sm-12">
            <h4 class="page-title">Data Merk {{ $jenis->jenisBarang }}</h4>
            <p class=" page-title-alt">Berisikan merk barang yang tersedia, tambahkan jika belum ada</p>
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
                <h4>Merk Table</h4>
                <div class="card-header-action">
                    <a type="button" class="btn btn-icon icon-left btn-warning" href="/jenis" ><i class="fa fa-arrow-left"></i>Kembali</a>
                <a type="button" data-toggle="modal" data-target="#modalMerk"class="btn btn-icon icon-left btn-primary" href="create" ><i class="far fa-edit"></i>Tambah</a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                        <thead>
                            <tr>
                                <th>Jenis Barang</th>
                                <th>Nama Merk</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($merk as $merk)
                            <tr>
                                <td>{{ $jenis->namaJenis }}</td>
                                <td>{{ $merk->namaMerk }}</td>
                                <td>
                                    <a href="/merk/{{ $merk->idMerk }}/edit" class="btn btn-primary far fa-edit"></a>
                                    <form action="/merk/{{ $merk->idMerk }}" method="post" class="d-inline">
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
                        </tbody>
                            @endforeach

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="modalMerk" tabindex="-1" role="dialog" aria-labelledby="formModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="formModal">Tambah Merk</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" class="form-horizontal" role="form" action="{{url('/merk')}}" enctype="multipart/form-data" autocomplete="off">
                    @csrf
                    <div class="form-group">
                        <label>Jenis Barang</label>
                        <div class="input-group">
                            <input type="text" name="kode_barang" class="form-control" value="{{ $jenis->jenisBarang }}" readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Nama Merk</label>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Masukkan Nama Merk" name="namaMerk" required>
                        </div>
                    </div>
                    <button class="btn btn-primary m-t-15 waves-effect" type="submit">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
