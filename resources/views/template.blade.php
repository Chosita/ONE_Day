<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SB Admin - Start Bootstrap 4 Template</title>
  <!-- Bootstrap core CSS-->
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="{{ asset('assets/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="{{ asset('assets/vendor/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="{{ asset('css/sb-admin.css') }}" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.html">Start Bootstrap</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">

        <!-- #################### Sidebars/Menu Start #################### -->
        @include('admin.layouts.sidebars.menu')
        <!-- #################### Sidebars/Menu End #################### -->

        <!-- #################### headers/top Start #################### -->
        @include('admin.layouts.headers.top')
        <!-- #################### headers/top End #################### -->
    </div>
  </nav>

  <div class="content-wrapper">
    <div class="container-fluid">

      <!-- #################### Main Start #################### -->
      <!--@yield('content')-->
      <div class="content-wrapper">
    <div class="container-fluid">


      <!-- #################### Main Start #################### -->
       <!-- breadcrumb Start -->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Users</a>
        </li>
        <li class="breadcrumb-item active">Lists</li>
      </ol>
      <!-- breadcrumb End -->


      <!-- #################### Flash Message Start #################### -->
      <!-- Waiting for flash message -->
      <!-- #################### Flash Message Start #################### -->



      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Users Lists </div>

        <div class="card-body">
          <div class="table-responsive">
              <!--  id="dataTable" -->
            <table class="table table-bordered" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Full Name2</th>
                  <th>Mobile</th>
                  <th>Email</th>
                  <th>City</th>
                  <th>Active</th>
                  <th>Action</th>
                </tr>
              </thead>
              <!--<tfoot>
                <tr>
                    <th>Full Name</th>
                    <th>Mobile</th>
                    <th>Email</th>
                    <th>City</th>
                    <th>Active</th>
                    <th>Action</th>
                </tr>
            </tfoot>-->
              <tfoot align="right">
              <tr>
                  <th colspan="6" style="justify-content: right;">Pagination Link</th>
              </tr>
              </tfoot>

              <tbody>
                    <tr>
                      <td>User1</td>
                      <td>Mobile</td>
                      <td>user1@gmail.com</td>
                      <td>Bangkok</td>
                      <td>
                          <span class="badge badge-success">Active</span>
                          <span class="badge badge-danger">Inactive</span>
                      </td>
                      <td>
                          <a href="#">
                              <button type="button" class="btn btn-primary btn-sm">Info</button>
                          </a>
                          <a href="#">
                              <button type="button" class="btn btn-success btn-sm">Edit</button>
                          </a>
                          <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal_user_4">Delete</button>
                          <!-- Include Delete Modal Confirmation -->

                          <!-- #################### Modal Delete Row by Row in Table Start #################### -->
                          <!-- Waiting for flash message -->
                          <!-- #################### Modal Delete Row by Row in Table Start #################### -->


                      </td>
                    </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
      <!-- #################### Main Start #################### -->


    </div>
      <!-- #################### Main Start #################### -->

    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->

    <!-- #################### headers/top Start #################### -->
    @include('admin.layouts.footers.footer')
    <!-- #################### headers/top Start #################### -->

    <!-- Logout Modal-->

    <!-- #################### generals/modal Start #################### -->
    @include('admin.layouts.partials.modal')
    <!-- #################### generals/modal Start #################### -->

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Core plugin JavaScript-->
    <script src="{{ asset('assets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <!-- Page level plugin JavaScript-->
    <script src="{{ asset('assets/vendor/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('assets/vendor/datatables/dataTables.bootstrap4.js') }}"></script>
    <!-- Custom scripts for all pages-->
    <script src="{{ asset('js/sb-admin.min.js') }}"></script>
    <!-- Custom scripts for this page-->
    <script src="{{ asset('js/sb-admin-datatables.min.js') }}"></script>
  </div>
</body>

</html>