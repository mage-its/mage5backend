<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <link rel="shorcut icon" href="{{asset("Image/favicon.ico")}}">
  <title>Dashboard | MAGE 5</title>

  <!-- Custom fonts for this template-->
  <link href={{ asset("assets/vendor/fontawesome-free/css/all.min.css")}} rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->

  <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href={{ asset("assets/css/sb-admin.css") }} rel="stylesheet">

</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="/admin">Home</a>
    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar -->
    <ul class="d-none d-md-inline-block ml-auto mr-0 mr-md-3 my-2 my-md-0 navbar-nav">
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
        </div>
      </li>
    </ul>

  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="/daftarolim">
          <i class="fas fa-edit"></i>
          <span>Olimpiade</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="/daftarmaincomp">
          <i class="fas fa-cogs"></i>
          <span>Main Comp</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="/daftarmaincomp2/2">
          <i class="fas fa-cogs"></i>
          <span>Main Comp Tahap 2</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="/daftarmaincomp2/3">
          <i class="fas fa-cogs"></i>
          <span>Main Comp Tahap 3</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="/daftaresport">
          <i class="fas fa-gamepad"></i>
          <span>E-Sport</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/list">
          <i class="fas fa-list"></i>
          <span>List Peserta</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/announce">
          <i class="fas fa-bullhorn"></i>
          <span>Pengumuman</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/daftarsoal">
          <i class="fas fa-bullhorn"></i>
          <span>Soal</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/allscore">
          <i class="fas fa-bullhorn"></i>
          <span>Score</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/allscore">
          <i class="fas fa-bullhorn"></i>
          <span>Input Score</span>
        </a>
      </li>

    </ul>

    <div id="content-wrapper">

      <div class="container-fluid">

        @yield('content')

      </div>
      {{-- /container-fluid --}}

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © Mage 5</span>
          </div>
        </div>
      </footer>
    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <form method="post" action="/logout">
            @csrf
            <button class="btn btn-primary" type="submit">Logout</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Bootstrap core JavaScript-->
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script src={{ asset("assets/vendor/bootstrap/js/bootstrap.bundle.min.js") }}></script>
  <!-- Core plugin JavaScript-->
  <script src={{ asset("assets/vendor/jquery-easing/jquery.easing.min.js") }}></script>

  <!-- Page level plugin JavaScript-->
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
  <!-- Custom scripts for all pages-->
  <script src={{ asset("assets/js/sb-admin.min.js") }}></script>

  <!-- Demo scripts for this page-->
  <script src={{ asset("assets/js/demo/datatables-demo.js") }}></script>

</body>

</html>