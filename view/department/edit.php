<?php
$id = $_GET['id'];
$departments = DepartmentController::getDepartment($connect);

?>

<div class="box_edit">
    <form action="" method="POST">
        <h2>Update</h2>

        <?php
        foreach ($departments as $row) {
            if ($row['id'] == $id) {
                $name = $row['name'];
                ?>
                <div class="form-item">
                    <!-- Use an input type "hidden" for the department ID -->
                    <input type="hidden" name="id" value="<?php echo $id; ?>" />
                    <label>Title</label>
                    <!-- Check if $name is set before displaying -->
                    <input type="text" name="name" placeholder="Phòng ban" value="<?php echo $name; ?>" />
                </div>
                <?php
            }
        }
        ?>

        <div class="form-item">
            <input type="submit" name="update" value="Submit" />
        </div>
    </form>
</div>

<?php
if (isset($_POST['update'])) {
    $post = $_POST;
    DepartmentController::updateDepartment($connect, $post);
}

?>