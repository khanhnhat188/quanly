<?php
require "../config/connect.php";
require "../controller/DepartmentController.php";
require "../controller/EmployeeController.php";
require "../controller/RolesController.php";
require "../model/employees.php";
require "../model/department.php";
require "../model/roles.php";
require "../model/authentication.php";
?>
<?php
    $employees = EmployeeController::getEmployee($connect);
    if (isset($_POST['delete_id'])) {
        $deleteId = $_POST['delete_id'];
        EmployeeController::deleteEmployee($connect, $deleteId);
    }
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <!-- Datatables css -->
    <link href="../assets/vendor/datatables.net-bs5/css/dataTables.bootstrap5.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/vendor/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css" rel="stylesheet"
        type="text/css" />
    <link href="../assets/vendor/datatables.net-fixedcolumns-bs5/css/fixedColumns.bootstrap5.min.css" rel="stylesheet"
        type="text/css" />
    <link href="../assets/vendor/datatables.net-fixedheader-bs5/css/fixedHeader.bootstrap5.min.css" rel="stylesheet"
        type="text/css" />
    <link href="../assets/vendor/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css" rel="stylesheet"
        type="text/css" />
    <link href="../assets/vendor/datatables.net-select-bs5/css/select.bootstrap5.min.css" rel="stylesheet"
        type="text/css" />
    <!-- Vector Map css -->
    <link rel="stylesheet" href="../assets/vendor/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css">
    <!-- Theme Config Js -->
    <script src="../assets/js/config.js"></script>
    <!-- App css -->
    <link href="../assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-style" />
    <!-- Icons css -->
    <link href="../assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Quản lý nhân sự NEWMEN</title>
</head>

<body>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="header-title">Danh sách nhân viên</h4>
                </div>
                <div class="card-body">
                    <table id="basic-datatable" class="table table-striped dt-responsive nowrap w-100">
                        <thead>
                            <tr>
                                <th>Thứ tự</th>
                                <th>Họ tên</th>
                                <th>Giới tính</th>
                                <th>Điện thoại</th>
                                <th>Địa chỉ</th>
                            </tr>
                        </thead>


                        <tbody>
                            <?php 
                            $sequentialId = 1;
                            foreach ($employees as $row): 
                        ?>
                            <tr>
                                <td><?php echo $sequentialId; ?></td>
                                <td><?php echo $row['last_name']." ".$row['first_name']; ?></td>
                                <td><?php echo $row['gender']; ?></td>
                                <td><?php echo $row['phone']; ?></td>
                                <td><?php echo $row['full_address']. ", " .$row['ward']. ", " .$row['district']. ", " .$row['city']; ?></td>
                            </tr>
                            <?php 
                            $sequentialId++;
                            endforeach; ?>
                        </tbody>
                    </table>

                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div> <!-- end row-->

    </script>
    <script src="../assets/js/vendor.min.js"></script>
    <!-- Datatable Demo Aapp js -->
    <script src="../assets/js/pages/datatable.init.js"></script>
    <!-- Daterangepicker js -->
    <script src="../assets/vendor/daterangepicker/moment.min.js"></script>
    <script src="../assets/vendor/daterangepicker/daterangepicker.js"></script>
    <!-- Dashboard App js -->
    <script src="../assets/js/pages/dashboard.js"></script>

    <!-- Datatables js -->
    <script src="../assets/vendor/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../assets/vendor/datatables.net-bs5/js/dataTables.bootstrap5.min.js"></script>
    <script src="../assets/vendor/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../assets/vendor/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js"></script>
    <script src="../assets/vendor/datatables.net-fixedcolumns-bs5/js/fixedColumns.bootstrap5.min.js"></script>
    <script src="../assets/vendor/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="../assets/vendor/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../assets/vendor/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js"></script>
    <script src="../assets/vendor/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="../assets/vendor/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="../assets/vendor/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="../assets/vendor/datatables.net-select/js/dataTables.select.min.js"></script>

    <!-- App js -->
    <script src="../assets/js/app.min.js">

    </script>
</body>

</html>