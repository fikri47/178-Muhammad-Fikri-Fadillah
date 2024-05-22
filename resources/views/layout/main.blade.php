<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href={{asset("admin-lte/plugins/fontawesome-free/css/all.min.css")}}>
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href={{asset("admin-lte/dist/css/adminlte.min.css")}}>
  @stack('styles')
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
    @include('partials.admin.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('partials.admin.sidebar')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>@yield ('title')</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">@yield ('title')</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      @yield('content')
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 1.0.0
    </div>
    <strong>Copyright &copy; {{ now()->year }} <a href="#">Mebel</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

<!-- jQuery -->
<script src={{asset("admin-lte/plugins/jquery/jquery.min.js")}}></script>
<!-- Bootstrap 4 -->
<script src={{asset("admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js")}}></script>
<!-- AdminLTE App -->
<script src={{asset("admin-lte/dist/js/adminlte.min.js")}}></script>

<script src="https://cdn.jsdelivr.net/npm/bs-custom-file-input/dist/bs-custom-file-input.min.js"></script>
<script>
  $(document).ready(function () {
          bsCustomFileInput.init()
      })
</script>
<script src={{asset("admin-lte/plugins/datatables/jquery.dataTables.js")}}></script>
<script src={{asset("admin-lte/plugins/datatables-bs4/js/dataTables.bootstrap4.js")}}></script>
@stack('scripts')
</body>
</html>
