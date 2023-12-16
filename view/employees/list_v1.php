<?php
    $employees = EmployeeController::getEmployee($connect);
    if (isset($_POST['delete_id'])) {
        $deleteId = $_POST['delete_id'];
        EmployeeController::deleteEmployee($connect, $deleteId);
    }
?>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="header-title">Danh sách nhân viên</h4>
                <p class="text-muted mb-0">
                    DataTables has most features enabled by default, so all you need to do to use it
                    with your own tables is to call the construction
                    function:
                    <code>$().DataTable();</code>. KeyTable provides Excel like cell navigation on
                    any table. Events (focus, blur, action etc) can be assigned to individual
                    cells, columns, rows or all cells.
                </p>
            </div>
            <div class="card-body">
                <table id="basic-datatable" class="table table-striped dt-responsive nowrap w-100">
                    <thead>
                        <tr>
                            <th>Thứ tự</th>
                            <th>Họ tên</th>
                            <th>Giới tính</th>
                            <th>Điện thoại</th>
                            <th>Chỉnh sửa</th>
                            <th>Xem thông tin</th>
                            <th>Xóa</th>
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
                            <td>
                                <a href="?action=employee&query=edit&id=<?php echo $row['id']; ?>" class=" ri-pencil-line"></a>
                            </td>
                            <td>
                                <a href="?action=employee&query=detail&id=<?php echo $row['id']; ?>" class=" ri-eye-line"></a>
                            <td>
                                <form  class ="" action="" method="post" onsubmit="return confirm('Are you sure you want to delete this department?');">
                                    <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                                    <button type="submit" class="ri-delete-bin-2-line"></button>   
                                </form>
                            </td>                               
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