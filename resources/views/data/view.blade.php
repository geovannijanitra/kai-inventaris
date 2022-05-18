@extends('layout.template')
@section('judul', 'Inventaris')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Inventoris Table</h4>
                    <div class="card-header-action">
                        <a href="#createData" class="btn btn-primary">Insert</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover" id="tableExport" style="width:100%;">

                            <thead>
                                <tr>
                                    <th>Jenis</th>
                                    <th>Merk</th>
                                    <th>Series</th>
                                    <th>Serial Number</th>
                                    <th>Tgl Pengadaan</th>
                                    <th>Spesifikasi</th>
                                    <th>Keterangan</th>
                                    <th>Lokasi</th>
                                    <th>Pengguna</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>2011/04/25</td>
                                    <td>$320,800</td>
                                    <td>$320,800</td>
                                    <td>$320,800</td>
                                    <td>$320,800</td>
                                    <td>$320,800</td>
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



    <div class="card">
        <div class="card-header">
            <h4 id="createData">Horizontal Form</h4>
        </div>
        <div class="card-body">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Jenis</label>
                    <select id="inputState" class="form-control">
                        <option selected>Choose...</option>
                        <option>...</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Merk</label>
                    <select id="inputState" class="form-control">
                        <option selected>Choose...</option>
                        <option>...</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="inputAddress">Tanggal Pengadaan</label>
                <input type="date" class="form-control" id="inputAddress" placeholder="Input Serial Number">
            </div>
            <div class="form-group">
                <label for="inputAddress2">Spesifikasi</label>
                <input type="textarea" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputCity">City</label>
                    <input type="text" class="form-control" id="inputCity">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputState">State</label>
                    <select id="inputState" class="form-control">
                        <option selected>Choose...</option>
                        <option>...</option>
                    </select>
                </div>
                <div class="form-group col-md-2">
                    <label for="inputZip">Zip</label>
                    <input type="text" class="form-control" id="inputZip">
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button class="btn btn-primary">Submit</button>
        </div>
    </div>

@endsection
