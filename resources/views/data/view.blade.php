@extends('layout.template')
@section('judul', 'KAI Inventaris - Data Inventaris')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <h4 class="page-title">Data Jenis Barang</h4>
            <p class=" page-title-alt">Berisikan jenis-jenis barang yang tersedia, tambahkan jika belum ada</p>
        </div>

    </div>

    <div class="card">
        <div class="card-header">
            <h4>Input Data Inventaris</h4>
            <div class="card-header-action">
                <a role="button" tabindex="0"  data-toggle="popover" class="btn btn-icon icon-left btn-warning" title="Pastikan Sesuai"
                      data-content="Pastikan kode jenis di kolom jenis sesuai dengan kode jenis di kolom merk"><i class="fas fa-info-circle"></i>Info</a>
                </div>
        </div>
        <div class="card-body">
            <form data-parsley-validate method="POST" action="{{url('/data')}}" enctype="multipart/form-data" autocomplete="off">
                @csrf
                <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="kode_jenis">Pilih Jenis</label>
                    <select name="kode_jenis" id="kode_jenis" class="form-control select2">
                        <option value="" selected hidden>Choose...</option>
                        @foreach ($jenis as $jns)
                        <option value="{{ $jns->kode_jenis }}">{{ $jns->kodeJenis}} - {{ $jns->jenisBarang }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Pilih Merk</label>
                    <select name="id_merk" id="id_merk" class="form-control select2">
                        <option value=""  selected hidden>Choose...</option>
                        @foreach ($merk as $mk)
                        <option value="{{ $mk->id_merk }}">{{ $mk->kode_jenis}} - {{ $mk->namaMerk}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="series">Series</label>
                <input type="text" class="form-control" id="series" name="series" placeholder="Masukkan Series">
            </div>
            <div class="form-group">
                <label for="series">Serial Number</label>
                <input type="text" class="form-control" id="serialNumber" name="serialNumber" placeholder="Masukkan Serial Number">
            </div>
            <div class="form-group">
                <label for="inputAddress2">Spesifikasi</label>
                <input type="text" class="form-control" id="spek" name="spek" placeholder="Masukkan Spesifikasi Barang">
            </div>
            <div class="form-group">
                <label for="inputAddress2">Keterangan</label>
                <input type="text" class="form-control" id="ket" name="ket" placeholder="Masukkan Keterangan">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputCity">Pengguna</label>
                    <input type="text" class="form-control" id="inputCity">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputState">Lokasi</label>
                    <input type="text" class="form-control" id="inputCity">
                </div>
                <div class="form-group col-md-2">
                    <label for="inputZip">Status</label>
                    <select id="inputState" class="form-control">
                        <option selected>Choose...</option>
                        <option>Baik</option>
                        <option>Rusak</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button class="btn btn-primary">Submit</button>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Jenis Table</h4>
                    <div class="card-header-action">
                        <a type="button" data-toggle="modal" data-target="#modalJenis"
                            class="btn btn-icon icon-left btn-primary" href="jenis/create"><i
                                class="far fa-edit"></i>Tambah</a>
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
                                            <a href="/merk/{{ $jenis->kodeJenis }}/merkbarang" type="button"
                                                class="btn btn-warning">Lihat</a>
                                        </td>
                                        <td>
                                            <a href="/jenis/{{ $jenis->kodeJenis }}/edit"
                                                class="btn btn-primary far fa-edit"></a>
                                            <form action="/jenis/{{ $jenis->kodeJenis }}" method="post"
                                                class="d-inline">
                                                @method('delete')
                                                @csrf
                                                <button type="submit"
                                                    onclick="return confirm('Apakah Anda Yakin Ingin Menghapusnya?')"
                                                    class="btn btn-danger fa fa-trash"></button>
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

@endsection
