<!DOCTYPE html>
<html lang="en">


<!-- index.html  21 Nov 2019 03:44:50 GMT -->

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>@yield('judul')</title>
    <style>
        body{
            background-image: url("background.jpg");
            background-size: cover;
            background-repeat: no-repeat;
        }
    </style>

    {{-- <!-- General CSS Files -->
  <link rel="stylesheet" href="{{asset('theme')}}/assets/css/app.min.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="{{asset('theme')}}/assets/css/style.css">
  <link rel="stylesheet" href="{{asset('theme')}}/assets/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="{{asset('theme')}}/assets/css/custom.css">
  <link rel='shortcut icon' type='image/x-icon' href="{{asset('theme')}}/assets/img/logo.png" />


  <!-- Template Datatable CSS -->
  <link rel="stylesheet" href="{{asset('theme')}}/assets/bundles/datatables/datatables.min.css">
  <link rel="stylesheet" href="{{asset('theme')}}/assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="{{asset('theme')}}/assets/css/style.css">
  <link rel="stylesheet" href="{{asset('theme')}}/assets/css/components.css"> --}}


    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('theme') }}/assets/css/app.min.css">
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('theme') }}/assets/css/style.css">
    <link rel="stylesheet" href="{{ asset('theme') }}/assets/css/components.css">
    <!-- Custom style CSS -->



    <link href="{{ asset('theme') }}/assets/bundles/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('theme') }}/assets/css/custom.css">
    <link rel='shortcut icon' type='image/x-icon' href="{{ asset('theme') }}/assets/img/favicon.ico">

    <link rel="shortcut icon" href="{{ asset('theme') }}/assets/img/logo.png">
    <link rel="stylesheet" href="{{ asset('theme') }}/assets/bundles/prism/prism.css">
    <link rel="stylesheet" href="{{ asset('theme') }}/assets/bundles/datatables/datatables.min.css">
    <link rel="stylesheet"
        href="{{ asset('theme') }}/assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ asset('theme') }}/assets/bundles/chocolat/dist/css/chocolat.css">

</head>



<body>
    <div class="loader"></div>
    <div id="app">
        <section class="section">
            <div class="container mt-5">
                <div class="row">
                    <div
                        class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                        @if (session()->has('success'))
                            <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif
                        @if (session()->has('loginError'))
                            <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                                {{ session('loginError') }}
                            </div>
                        @endif
                        @if ($errors->any())
                            <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                                {{ $errors }}
                            </div>
                        @endif
                        <div class="card card-primary">
                            <div class="card-header">
                                <h4>Login Aset Inventaris</h4>
                            </div>
                            <div class="card-body">
                                <form method="post" action="/login" class="needs-validation" novalidate="">
                                    @csrf
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input id="email" type="email" class="form-control" name="email" tabindex="1"
                                            required autofocus>
                                        <div class="invalid-feedback">
                                            Please fill in your email
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="d-block">
                                            <label for="password" class="control-label">Password</label>
                                        </div>
                                        <input id="password" type="password" class="form-control" name="password"
                                            tabindex="2" required>
                                        <div class="invalid-feedback">
                                            please fill in your password
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                            Login
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    {{-- <!-- General JS Scripts -->
  <script src="{{asset('theme')}}/assets/js/app.min.js"></script>
  <!-- JS Libraies -->
  <script src="{{asset('theme')}}/assets/bundles/apexcharts/apexcharts.min.js"></script>
  <!-- Page Specific JS File -->
  <script src="{{asset('theme')}}/assets/js/page/index.js"></script>
  <!-- Template JS File -->
  <script src="{{asset('theme')}}/assets/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="{{asset('theme')}}/assets/js/custom.js"></script>
<!-- Page Specific JS File -->
<script src="{{asset('theme')}}/assets/bundles/datatables/datatables.min.js"></script>
<script src="{{asset('theme')}}/assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script src="{{asset('theme')}}/assets/bundles/datatables/export-tables/dataTables.buttons.min.js"></script>
<script src="{{asset('theme')}}/assets/bundles/datatables/export-tables/buttons.flash.min.js"></script>
<script src="{{asset('theme')}}/assets/bundles/datatables/export-tables/jszip.min.js"></script>
<script src="{{asset('theme')}}/assets/bundles/datatables/export-tables/pdfmake.min.js"></script>
<script src="{{asset('theme')}}/assets/bundles/datatables/export-tables/vfs_fonts.js"></script>
<script src="{{asset('theme')}}/assets/bundles/datatables/export-tables/buttons.print.min.js"></script>
<script src="{{asset('theme')}}/assets/js/page/datatables.js"></script> --}}


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- General JS Scripts -->
    <script src="{{ asset('theme') }}/assets/js/app.min.js"></script>
    <!-- JS Libraies -->
    <script src="{{ asset('theme') }}/assets/bundles/izitoast/js/iziToast.min.js"></script>
    <script src="{{ asset('theme') }}/assets/js/page/datatables.js"></script>
    <script src="{{ asset('theme') }}/assets/bundles/datatables/datatables.min.js"></script>
    <script src="{{ asset('theme') }}/assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js">
    </script>
    <script src="{{ asset('theme') }}/assets/bundles/datatables/export-tables/dataTables.buttons.min.js"></script>
    <script src="{{ asset('theme') }}/assets/bundles/datatables/export-tables/buttons.flash.min.js"></script>
    <script src="{{ asset('theme') }}/assets/bundles/datatables/export-tables/jszip.min.js"></script>
    <script src="{{ asset('theme') }}/assets/bundles/datatables/export-tables/pdfmake.min.js"></script>
    <script src="{{ asset('theme') }}/assets/bundles/datatables/export-tables/vfs_fonts.js"></script>
    <script src="{{ asset('theme') }}/assets/bundles/datatables/export-tables/buttons.print.min.js"></script>
    <script src="{{ asset('theme') }}/assets/js/page/datatables.js"></script>
    <script src="{{ asset('theme') }}/assets/bundles/prism/prism.js"></script>
    <script src="{{ asset('theme') }}/assets/bundles/chocolat/dist/js/jquery.chocolat.min.js"></script>
    <script src="{{ asset('theme') }}/assets/bundles/jquery-ui/jquery-ui.min.js"></script>
    <script src="{{ asset('theme') }}/assets/bundles/apexcharts/apexcharts.min.js"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('theme') }}/assets/bundles/select2/js/select2.min.js"></script>
    <script src="{{ asset('theme') }}/assets/js/page/toastr.js"></script>
    <script src="{{ asset('theme') }}/assets/js/page/index.js"></script>
    <!-- Template JS File -->
    <script src="{{ asset('theme') }}/assets/js/scripts.js"></script>
    <!-- Custom JS File -->
    <script src="{{ asset('theme') }}/assets/js/custom.js"></script>



    <script type="text/javascript">
        $(document).ready(function() {
            $('#kode_jenis').on('change', function() {
                var jenisId = this.value;
                $('#id_merk').html('');
                $.ajax({
                    url: '{{ route('getMerk') }}?kode_jenis=' + jenisId,
                    type: 'get',
                    success: function(res) {
                        $('#id_merk').html('<option value="">Select Merk</option>');
                        $.each(res, function(key, value) {
                            $('#id_merk').append('<option value="' + value
                                .idMerk + '">' + value.namaMerk + '</option>');
                        });
                    }
                });
            });
        });
    </script>

</body>


<!-- index.html  21 Nov 2019 03:47:04 GMT -->

</html>
