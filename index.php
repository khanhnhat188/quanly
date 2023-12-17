<?php
require "config/connect.php";
require "controller/DepartmentController.php";
require "controller/EmployeeController.php";
require "controller/RolesController.php";
require "model/employees.php";
require "model/department.php";
require "model/roles.php";
require "model/authentication.php";
require "controller/AuthenticationController.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <!-- Daterangepicker css -->
    <link rel="stylesheet" href="assets/vendor/daterangepicker/daterangepicker.css">

    <!-- Datatables css -->
    <link href="assets/vendor/datatables.net-bs5/css/dataTables.bootstrap5.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/vendor/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css" rel="stylesheet"
        type="text/css" />
    <link href="assets/vendor/datatables.net-fixedcolumns-bs5/css/fixedColumns.bootstrap5.min.css" rel="stylesheet"
        type="text/css" />
    <link href="assets/vendor/datatables.net-fixedheader-bs5/css/fixedHeader.bootstrap5.min.css" rel="stylesheet"
        type="text/css" />
    <link href="assets/vendor/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css" rel="stylesheet"
        type="text/css" />
    <link href="assets/vendor/datatables.net-select-bs5/css/select.bootstrap5.min.css" rel="stylesheet"
        type="text/css" />
    <!-- Vector Map css -->
    <link rel="stylesheet" href="assets/vendor/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css">

    <!-- Theme Config Js -->
    <script src="assets/js/config.js"></script>

    <!-- App css -->
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-style" />

    <!-- Icons css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="./css/style.css">
    <title>Quản lý nhân sự</title>

</head>

<body>

    <?php
    include "sidebar.php";
    ?>
    <div class="content-page">
        <div class="content">
            <div class="container-fluid">
                <?php
    if(isset($_GET['action']) && isset($_GET['query'])){
        $tam = $_GET['action'];
        $query = $_GET['query'];
    }else{
        $tam = '';
        $query = '';
    }
    if($tam == 'department' && $query == 'add'){
        include './view/department/add_v1.php';
    }elseif($tam == 'department' && $query == 'list'){
        include './view/department/list_v1.php';
    }elseif($tam == 'department' && $query == 'edit'){
        include './view/department/edit_v1.php';
    }elseif($tam == 'employee' && $query == 'add'){
        include './view/employees/add_v1.php';
    }elseif($tam == 'employee' && $query == 'edit'){
        include './view/employees/edit_v1.php';
    }elseif($tam == 'employee' && $query == 'list'){
        include './view/employees/list_v1.php';
    }elseif($tam == 'employee' && $query == 'detail'){
        include './view/employees/detail.php';
    //Tài khoản
    }elseif($tam == 'account' && $query == 'update'){
        include './update_v1.php';
    }else{
        include 'home.php';
    }
    
?>
            </div>
        </div>
    </div>
    <?php
    include "footer.php";
    ?>

    <!-- Vendor js -->
    <script src="assets/js/vendor.min.js"></script>
    <!-- Datatable Demo Aapp js -->
    <script src="assets/js/pages/datatable.init.js"></script>
    <!-- Daterangepicker js -->
    <script src="assets/vendor/daterangepicker/moment.min.js"></script>
    <script src="assets/vendor/daterangepicker/daterangepicker.js"></script>

    <!-- Apex Charts js -->
    <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>

    <!-- Vector Map js -->
    <script src="assets/vendor/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js">
    </script>
    <script src="assets/vendor/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js">
    </script>

    <!-- Dashboard App js -->
    <script src="assets/js/pages/dashboard.js"></script>

    <!-- Datatables js -->
    <script src="assets/vendor/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="assets/vendor/datatables.net-bs5/js/dataTables.bootstrap5.min.js"></script>
    <script src="assets/vendor/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="assets/vendor/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js"></script>
    <script src="assets/vendor/datatables.net-fixedcolumns-bs5/js/fixedColumns.bootstrap5.min.js"></script>
    <script src="assets/vendor/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="assets/vendor/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="assets/vendor/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js"></script>
    <script src="assets/vendor/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="assets/vendor/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="assets/vendor/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="assets/vendor/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="assets/vendor/datatables.net-select/js/dataTables.select.min.js"></script>


    <!-- App js -->
    <script src="assets/js/app.min.js"></script>

</body>

</html>