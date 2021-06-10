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
    <div id="wrapper">

        <div id="content-wrapper">

            <div class="container-fluid">

                <h4>RANKING BY TIME</h4>

                <div class="form-group">
                    <label>Pos</label>
                    <input type="number" required class="form-control" name="pos" id="pos" placeholder="Pos...">
                </div>

                <input type="button" value="CHECK" class="btn btn-primary" onclick="getSpecScore()">

                <div class="card-body">

                    <div class="table-responsive">

                        <table class="table table-striped table-bordered display nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Nama Tim</th>
                                    <th>No Peserta</th>
                                    <th>Score</th>
                                    <th>Nyawa</th>
                                    <th>Total</th>
                                    <th>Waktu Terpakai</th>
                                </tr>
                            </thead>
                            <tbody id="tableBody">
                            </tbody>
                        </table>
                    </div>

                    </<div>

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
        <script src={{ asset("js/get-specscore.js") }}></script>

</body>

</html>