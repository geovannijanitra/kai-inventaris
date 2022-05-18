@extends('layout.template')
@section('judul','Jenis')
@section('content')
<div class="row">
    <div class="col-12 col-sm-12 col-lg-12" data-toggle="modal" data-target="#modalJenis">
        <div class="card">
            <div class="btn btn-icon icon-left btn-primary"><i class="far fa-edit"></i>Tambah Jenis</div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Jenis Table</h4>
                <div class="card-header-action">
                <a tabindex="0"  role="button" data-toggle="popover" class="btn btn-warning" data-trigger="focus"
                data-content="Tambah Jenis terlebih dahulu jika merk tersebut belum ada jenisnya">Info</a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                        <thead>
                            <tr>
                                <th>Kode Jenis</th>
                                <th>Jenis</th>
                                <th>Merk</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="#" class="btn btn-icon btn-warning"><i class="far fa-edit"></i></a>
                                        <a href="#" class="btn btn-icon btn-danger"><i class="fas fa-times"></i></a>
                                    </div>
                                </td>
                            </tr>
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
                <form class="">
                    <div class="form-group">
                        <label>Kode Jenis</label>
                        <div class="input-group">
                            <input type="number" class="form-control" placeholder="Masukkan Kode Jenis" name="email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Nama Merk</label>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Masukkan Nama Merk" name="password">
                        </div>
                    </div>
                <button type="button" class="btn btn-primary m-t-15 waves-effect">Input</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
