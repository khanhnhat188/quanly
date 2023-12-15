<?php
$departments = DepartmentController::getDepartment($connect);

if (isset($_POST['delete_id'])) {
    $deleteId = $_POST['delete_id'];
    DepartmentController::deleteDepartment($connect, $deleteId);
}

?>
<div class="col-xl-12">
    <div class="card">
        <div class="card-header">
            <h4 class="header-title">DANH SÁCH PHÒNG BAN</h4>
            <p class="text-muted mb-0">
                Use <code>.table-striped</code> to add zebra-striping to any table row
                within the <code>&lt;tbody&gt;</code>.
            </p>
        </div>
        <div class="card-body">
            <div class="table-responsive-sm">
                <table class="table table-striped table-centered mb-0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Action</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                        $sequentialId = 1;
                        foreach ($departments as $row): 
                    ?>
                        <tr>
                            <td><?php echo $sequentialId; ?></td>
                            <td class="table-user">
                                <?php echo $row['name']; ?>
                            </td>
                            <td>
                                <a href="?action=department&query=edit&id=<?php echo $row['id']; ?>" class="text-reset fs-16 px-1"> <i
                                        class="ri-settings-3-line"></i></a>
                            </td>
                            <td>
                            <form  class ="" action="" method="post" onsubmit="return confirm('Are you sure you want to delete this department?');">
                                    <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                                    <button type="submit" class="text-reset fs-16 px-1"> <i
                                        class="ri-delete-bin-2-line"></i></button>   
                                </form>
                            </td>
                        </tr>
                    <?php
                        $sequentialId++;
                        endforeach; ?>
                        ?>
                    </tbody>
                </table>
            </div> <!-- end table-responsive-->

        </div> <!-- end card body-->
    </div> <!-- end card -->
</div><!-- end col-->