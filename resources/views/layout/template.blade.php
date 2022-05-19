<!DOCTYPE html>
<html lang="en">


<!-- index.html  21 Nov 2019 03:44:50 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>@yield('judul')</title>
  <link rel="shortcut icon" href="{{ asset('theme') }}/assets/img/logo.png">
  <link rel="stylesheet" href="{{ asset('theme') }}/assets/bundles/prism/prism.css">
  <link rel="stylesheet" href="{{ asset('theme') }}/assets/bundles/jqvmap/dist/jqvmap.min.css">
  <link rel="stylesheet" href="{{ asset('theme') }}/assets/bundles/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="{{ asset('theme') }}/assets/bundles/prism/prism.css">
  <link rel="stylesheet" href="{{ asset('theme') }}/assets/bundles/datatables/datatables.min.css">
  <link rel="stylesheet" href="{{ asset('theme') }}/assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="{{ asset('theme') }}/assets/bundles/chocolat/dist/css/chocolat.css">

  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{ asset('theme') }}/assets/css/app.min.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('theme') }}/assets/css/style.css">
  <link rel="stylesheet" href="{{ asset('theme') }}/assets/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="{{ asset('theme') }}/assets/css/custom.css">
  <link rel='shortcut icon' type='image/x-icon'href="{{ asset('theme') }}/assets/img/favicon.ico' />
</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
        @include('layout.header')
      <!-- Main Content -->
      <div class="main-content">
        @yield('content')
      </div>
      @include('layout.footer')
    </div>
  </div>
  <!-- General JS Scripts -->
  <script src="{{ asset('theme') }}/assets/js/app.min.js"></script>
    <!-- JS Libraies -->
  <script src="{{ asset('theme') }}/assets/bundles/datatables/datatables.min.js"></script>
  <script src="{{ asset('theme') }}/assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
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

  <!-- JS Libraies -->
  <script src="{{ asset('theme') }}/assets/bundles/apexcharts/apexcharts.min.js"></script>
  <!-- Page Specific JS File -->
  <script src="{{ asset('theme') }}/assets/js/page/index.js"></script>

  <!-- Template JS File -->
  <script src="{{ asset('theme') }}/assets/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="{{ asset('theme') }}/assets/js/custom.js"></script>
</body>


<!-- index.html  21 Nov 2019 03:47:04 GMT -->
</html>
