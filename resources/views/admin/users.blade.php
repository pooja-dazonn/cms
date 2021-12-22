<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css" rel="stylesheet">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
    <title>userpage</title>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="index" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="login" class="nav-link">Logout</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.navbar -->
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index" class="brand-link">
                <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Admin</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Alexander Pierce</a>
                    </div>
                </div>
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="users" class="nav-link">
                                <i class="fa fa-users"></i>
                                <p>
                                    Mange Users
                                    <!--<span class="right badge badge-danger">New</span>-->
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="createleads" class="nav-link">
                                <i class="fas fa-chart-line"></i>
                                <p>
                                    View Leads

                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="manageinvestments" class="nav-link">
                                <i class="fas fa-donate"></i>
                                <p>
                                    Manage Investments

                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="userwithdrawal" class="nav-link">
                                <i class="fas fa-arrow-alt-circle-down"></i>
                                <p>
                                    User Withdrawal

                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="package" class="nav-link">
                                <i class="fa fa-briefcase"></i>
                                <p>
                                    Package

                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fa fa-key"></i>
                                <p>
                                    Change Password

                                </p>
                            </a>
                        <li class="nav-item">
                            <a href="login" class="nav-link">
                                <i class="fa fa-arrow-left"></i>
                                <p>
                                    Log out
                                    <!--<span class="right badge badge-danger">New</span>-->
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
        <!-- Content Wrapper. Contains page content -->
        <div class="container">
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <div class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1 class="m-0">Manage Users</h1>
                            </div><!-- /.col -->
                        </div><!-- /.row -->
                    </div><!-- /.container-fluid -->
                </div>
                <!-- /.content-header -->
               
                <table class="table table-bordered data-table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Phone</th>
                            <th>Date</th>
                            
                   
                        </tr>
                    </thead>
                    <tbody id="bodyData"></tbody>
                </table>
            </div>
            <div class="modal fade" id="ajaxModel" area-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="modalHeading"></h4>
                        </div>
                        <div class="modal-body">
                            <form id="userForm" name="userForm" class="form-horizontal">
                                <input type="hidden" name="user_id" id="user_id">
                                <div class="form-group">
                                    Name: <br>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" value="" required>
                                </div>
                                <div class="form-group">
                                    Email: <br>
                                    <input type="text" class="form-control" id="email" name="email" placeholder="Enter Email" value="" required>
                                </div>
                                <div class="form-group">
                                    Address: <br>
                                    <input type="text" class="form-control" id="address" name="address" placeholder="Enter Address" value="" required>
                                </div>
                                <div class="form-group">
                                    Phone: <br>
                                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter Phone no." value="" required>
                                </div>
                                <div class="form-group">
                                    Date: <br>
                                    <input type="text" class="form-control" id="date" name="date" placeholder="Enter date" value="" required>
                                </div>

                                <button type="submit" class="btn btn-primary" id="saveBtn" value="create">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- JavaScript Bundle with Popper -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
            <!--ajax-->
            <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
            <!--jquery cdn-->
            <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
            <!--datatable-->
            <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

            <script type="text/javascript">
                $(function() {
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    var table = $('.data-table').DataTable({
                        serverSide: true,
                        processing: true,
                        ajax: "{{route('users.index')}}",
                        columns: [{
                                data: 'DT_RowIndex',
                                name: 'DT_RowIndex'
                            },
                            {
                                data: 'name',
                                name: 'name'
                            },
                            {
                                data: 'email',
                                name: 'email'
                            },
                            {
                                data: 'address',
                                name: 'address'
                            },
                            {
                                data: 'phone',
                                name: 'phone'
                            },
                            {
                                data: 'date',
                                name: 'date'
                            },
                            
                        ]
                    });
                  /*  $("#createNewUser").click(function() {
                        $("#user_id").val('');
                        $("#userForm").trigger("reset");
                        $("#modalHeading").html("Add User");
                        $('#ajaxModel').modal('show');
                    });
                    $("#saveBtn").click(function(e) {
                        e.preventDefault();
                        $(this).html('Save');

                        $.ajax({
                            data: $("#userForm").serialize(),
                            url: "{{route('users.store')}}",
                            type: "POST",
                            dataType: 'json',
                            success: function(data) {
                                $("#userForm").trigger("reset");
                                $('#ajaxModel').modal('hide');
                                table.draw();
                            },
                            error: function(data) {
                                console.log('Error:', data);
                                $("#saveBtn").html('Save');
                            }
                        });
                    });
                    $('body').on('click', '.deleteusermodel', function() {
                        var user_id = $(this).data("id");

                        confirm("Are You Sure Want To Delete!");
                        $.ajax({
                            type: "Delete",
                            url: "{{route('users.store')}}" + '/' + user_id,
                            success: function(data) {
                                table.draw();

                            },
                            error: function(data) {
                                console.log('Error:', data);
                            }
                        });
                    });
                    $('body').on('click', '.editusermodel', function() {
                        var user_id = $(this).data('id');
                        $.get("{{route('users.index')}}" + "/" + user_id + "/edit", function(data) {
                            $("modelHeading").html("Edit User");
                            $('#ajaxModel').modal('show');
                            $("#user_id").val(data.id);
                            $("#name").val(data.name);
                            $("#email").val(data.email);
                            $("#address").val(data.address);
                            $("#phone").val(data.phone);
                            $("#date").val(data.date);
                        });
                    });*/
                });
            </script>
            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
            </aside>
            <!-- /.control-sidebar -->
        </div>


        <!-- jQuery UI 1.11.4 -->
        <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
            $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- ChartJS -->
        <script src="plugins/chart.js/Chart.min.js"></script>
        <!-- Sparkline -->
        <script src="plugins/sparklines/sparkline.js"></script>
        <!-- JQVMap -->
        <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
        <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
        <!-- jQuery Knob Chart -->
        <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
        <!-- daterangepicker -->
        <script src="plugins/moment/moment.min.js"></script>
        <script src="plugins/daterangepicker/daterangepicker.js"></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
        <!-- Summernote -->
        <script src="plugins/summernote/summernote-bs4.min.js"></script>
        <!-- overlayScrollbars -->
        <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
        <!-- AdminLTE App -->
        <script src="dist/js/adminlte.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="dist/js/demo.js"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="dist/js/pages/dashboard.js"></script>

</body>

</html>