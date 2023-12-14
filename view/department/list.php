<?php
$departments = DepartmentController::getDepartment($connect);

if (isset($_POST['delete_id'])) {
    $deleteId = $_POST['delete_id'];
    DepartmentController::deleteDepartment($connect, $deleteId);
}

?>

<div class="container">
    <a href="?action=department&query=add" class="btn btn-primary mb-3"> Add Department</a>
    <a href="?employee=add" class="btn btn-primary mb-3"> Add Employee</a>
    <a href="index.php" class="btn btn-primary mb-3"> Home</a>
    <h2>Department List</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Phòng ban</th>
                <th>Modify</th>
                <th>Remove</th>
            </tr>
        </thead>
        <tbody>
            
            <?php 
                $sequentialId = 1;
            foreach ($departments as $row): ?>
                <tr>
                    <td><?php echo $sequentialId; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><a href="?action=department&query=edit&id=<?php echo $row['id']; ?>" class="btn btn-success btn-sm">Edit</a></td>
                    <td>
                        <!-- Form for Delete Button -->
                        <form action="" method="post" onsubmit="return confirm('Are you sure you want to delete this department?');">
                            <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php 
                $sequentialId++;
                endforeach; ?>
        </tbody>
    </table>
</div>