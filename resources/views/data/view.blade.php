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
                        <option value="{{ $jns->kodeJenis }}">{{ $jns->kodeJenis}} - {{ $jns->jenisBarang }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Pilih Merk</label>
                    <select name="id_merk" id="id_merk" class="form-control select2">
                        <option value=""  selected hidden>Choose...</option>
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
                    <label for="pengguna">Pengguna</label>
                    <input type="text" class="form-control" id="pengguna" name="pengguna" placeholder="Masukkan Pengguna">
                </div>
                <div class="form-group col-md-4">
                    <label for="lokasi">Lokasi</label>
                    <select id="lokasi" name="lokas" class="form-control select2">
                        <option selected hidden>Choose...</option>
                        <option value="Angkutan Barang">Angkutan Barang</option>
                        <option value="Asset Non Produksi">Asset Non Produksi</option>
                        <option value="Crew KA BL">Crew KA BL</option>
                        <option value="Crew KA KTS">Crew KA KTS</option>
                        <option value="Crew KA MN">Crew KA MN</option>
                        <option value="Depo Kereta MN">Depo Kereta MN</option>
                        <option value="Depo Lok MN">Depo Lok MN</option>
                        <option value="Depo Kereta BL">Depo Kereta BL</option>
                        <option value="Fasilitas Penumpang">Fasilitas Penumpang</option>
                        <option value="Hukum">Hukum</option>
                        <option value="Humas">Humas</option>
                        <option value="IT (Sistem Informasi)">IT (Sistem Informasi)</option>
                        <option value="Jembatan Rel">Jembatan Rel</option>
                        <option value="Kesehatan">Kesehatan</option>
                        <option value="Keuangan">Keuangan</option>
                        <option value="Komersial">Komersial</option>
                        <option value="Operasi">Operasi</option>
                        <option value="PBJ">PBJ</option>
                        <option value="Pengamanan">Pengamanan</option>
                        <option value="Peng.Aset / KNA">Peng.Aset / KNA</option>
                        <option value="Penagihan">Penagihan</option>
                        <option value="PUK MN">PUK MN</option>
                        <option value="PUS KTS">PUS KTS</option>
                        <option value="PUS BL">PUS BL</option>
                        <option value="Res.STL.BL">Res.STL.BL</option>
                        <option value="Res.STL.KTS">Res.STL.KTS</option>
                        <option value="Res.STL.MN">Res.STL.MN</option>
                        <option value="Res.STL.CRB">Res.STL.CRB</option>
                        <option value="Res.STL.JG">Res.STL.JG</option>
                        <option value="Res.STL.KD">Res.STL.KD</option>
                        <option value="Res.STL.KTS">Res.STL.KTS</option>
                        <option value="Res.STL.NGW">Res.STL.NGW</option>
                        <option value="Res.STL.NJ">Res.STL.NJ</option>
                        <option value="Res.STL.TA">Res.STL.TA</option>
                        <option value="Res.STL.WK">Res.STL.WK</option>
                        <option value="Workshop STL MN">Workshop STL MN</option>
                        <option value="Res.JR.BL">Res.JR.BL</option>
                        <option value="Res.JR.BGR">Res.JR.BGR</option>
                        <option value="Res.JR.BRN">Res.JR.BRN</option>
                        <option value="Res.JR.CRB">Res.JR.CRB</option>
                        <option value="Res.JR.JG">Res.JR.JG</option>
                        <option value="Res.JR.KD">Res.JR.KD</option>
                        <option value="Res.JR.KTS">Res.JR.KTS</option>
                        <option value="Res.JR.MAG">Res.JR.MAG</option>
                        <option value="Res.JR.NGW">Res.JR.NGW</option>
                        <option value="Res.JR.MN">Res.JR.MN</option>
                        <option value="Res.JR.NJ">Res.JR.NJ</option>
                        <option value="Res.JR.SBO">Res.JR.SBO</option>
                        <option value="Res.JR.SRD">Res.JR.SRD</option>
                        <option value="Res.JR.TA">Res.JR.TA</option>
                        <option value="Res.JR.WK">Res.JR.WK</option>
                        <option value="Res.JB.MN">Res.JB.MN</option>
                        <option value="Res.JB.KTS">Res.JB.KTS</option>
                        <option value="SARANA">SARANA</option>
                        <option value="SDM DAN UMUM">SDM DAN UMUM</option>
                        <option value="SINTELIS">SINTELIS</option>
                        <option value="Sta. BAT">Sta. BAT</option>
                        <option value="Sta. BBD">Sta. BBD</option>
                        <option value="Sta. BGR">Sta. BGR</option>
                        <option value="Sta. BRN">Sta. BRN</option>
                        <option value="Sta. CRB">Sta. CRB</option>
                        <option value="Sta. CRM">Sta. CRM</option>
                        <option value="Sta. GG">Sta. GG</option>
                        <option value="Sta. GRM">Sta. GRM</option>
                        <option value="Sta. JG">Sta. JG</option>
                        <option value="Sta. KD">Sta. KD</option>
                        <option value="Sta. KG">Sta. KG</option>
                        <option value="Sta. KRS">Sta. KRS</option>
                        <option value="Sta. KTS">Sta. KTS</option>
                        <option value="Sta. MAG">Sta. MAG</option>
                        <option value="Sta. MN">Sta. MN</option>
                        <option value="Sta. NDL">Sta. NDL</option>
                        <option value="Sta. NGW">Sta. NGW</option>
                        <option value="Sta. NJ">Sta. NJ</option>
                        <option value="Sta. NJG">Sta. NJG</option>
                        <option value="Sta. NT">Sta. NT</option>
                        <option value="Sta. PPR">Sta. PPR</option>
                        <option value="Sta. PTR">Sta. PTR</option>
                        <option value="Sta. PWA">Sta. PWA</option>
                        <option value="Sta. RJ">Sta. RJ</option>
                        <option value="Sta. SBL">Sta. SBL</option>
                        <option value="Sta. SBO">Sta. SBO</option>
                        <option value="Sta. SKM">Sta. SKM</option>
                        <option value="Sta. SMB">Sta. SMB</option>
                        <option value="Sta. SRD">Sta. SRD</option>
                        <option value="Sta. SS">Sta. SS</option>
                        <option value="Sta. TA">Sta. TA</option>
                        <option value="Sta. TAL">Sta. TAL</option>
                        <option value="Sta. WK">Sta. WK</option>
                        <option value="Sta. WLG">Sta. WLG</option>
                        <option value="DOKUMEN">DOKUMEN</option>
                        <option value="KRT">KRT</option>
                        <option value="Akutansi">Akutansi</option>
                        <option value="SEKDA">SEKDA</option>
                        <option value="POSPAM">POSPAM</option>
                        <option value="PUSDAL">PUSDAL</option>
                        <option value="BP. MN">BP. MN</option>
                        <option value="BP. KTS">BP. KTS</option>
                        <option value="BP. BL">BP. BL</option>
                    </select>
                </div>
                <div class="form-group col-md-2">
                    <label for="inputZip">Status</label>
                    <select id="inputState" class="form-control">
                        <option selected hidden>Choose...</option>
                        <option value="Baik">Baik</option>
                        <option value="Rusak">Rusak</option>
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
                                    <th>Jenis</th>
                                    <th>Merk</th>
                                    <th>Series</th>
                                    <th>Serial Number</th>
                                    <th>Tanggal Pengadaan</th>
                                    <th>Spesifikasi</th>
                                    <th>Keterangan</th>
                                    <th>Lokasi</th>
                                    <th>Pengguna</th>
                                    <th>Status</th>
                                    <th>No. Inventory</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $data)
                                    <tr>
                                        <td>{{ $data->kode_jenis }}</td>
                                        <td>{{ $data->id_merk }}</td>
                                        <td>{{ $data->series }}</td>
                                        <td>{{ $data->serialNumber }}</td>
                                        <td>{{ $data->tanggalPengadaan }}</td>
                                        <td>{{ $data->spek }}</td>
                                        <td>{{ $data->ket }}</td>
                                        <td>{{ $data->lokasi }}</td>
                                        <td>{{ $data->pengguna }}</td>
                                        <td>{{ $data->status }}</td>
                                        <td>{{ $data->noInventory }}</td>
                                        <td> </td>
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
