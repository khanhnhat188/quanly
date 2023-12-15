<?php
require "config/connect.php";
require "controller/DepartmentController.php";
require "controller/EmployeeController.php";
require "model/employees.php";
include "model/department.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Daterangepicker css -->
    <link rel="stylesheet" href="assets/vendor/daterangepicker/daterangepicker.css">

    <!-- Vector Map css -->
    <link rel="stylesheet" href="assets/vendor/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css">

    <!-- Theme Config Js -->
    <script src="assets/js/config.js"></script>

    <!-- App css -->
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-style" />

    <!-- Icons css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="./css/style.css">
    <title>Posts</title>

</head>

<body>
    <div class="wrapper">
        <div class="navbar-custom">
    </div>

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
        include './view/employees/add.php';
    }elseif($tam == 'employee' && $query == 'edit'){
        include './view/employees/edit.php';
    }elseif($tam == 'employee' && $query == 'list'){
        include './view/employees/list.php';
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

                        <!-- Daterangepicker js -->
                        <script src="assets/vendor/daterangepicker/moment.min.js"></script>
                        <script src="assets/vendor/daterangepicker/daterangepicker.js"></script>

                        <!-- Apex Charts js -->
                        <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>

                        <!-- Vector Map js -->
                        <script src="assets/vendor/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js">
                        </script>
                        <script
                            src="assets/vendor/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js">
                        </script>

                        <!-- Dashboard App js -->
                        <script src="assets/js/pages/dashboard.js"></script>


                        <!-- App js -->
                        <script src="assets/js/app.min.js"></script>

</body>

</html>