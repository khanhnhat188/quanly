<?php
$employees = EmployeeController::getEmployee($connect);
if (isset($_POST['delete_id'])) {
    $deleteId = $_POST['delete_id'];
    EmployeeController::deleteEmployee($connect, $deleteId);
}

?>

<div class="container">

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Birthday</th>
                <th>Gender</th>
                <th>Phone</th>
                <th>Email</th>
                <th>City</th>
                <th>District</th>
                <th>Ward</th>
                <th>Full Address</th>
                <th>Modify</th>
                <th>Remove</th>
            </tr>
        </thead>
        <tbody>
            
            <?php 
            $sequentialId = 1;
            foreach ($employees as $row): 
            ?>
                <tr>
                    <td><?php echo $sequentialId; ?></td>
                    <td><?php echo $row['first_name']; ?></td>
                    <td><?php echo $row['last_name']; ?></td>
                    <td><?php echo $row['birthday']; ?></td>
                    <td><?php echo $row['gender']; ?></td>
                    <td><?php echo $row['phone']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['city']; ?></td>
                    <td><?php echo $row['district']; ?></td>
                    <td><?php echo $row['ward']; ?></td>
                    <td><?php echo $row['full_address']; ?></td>
                    <td><a href="?action=employee&query=edit&id=<?php echo $row['id']; ?>" class="btn btn-success btn-sm">Edit</a></td>
                    <td>
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

