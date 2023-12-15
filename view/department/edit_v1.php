<?php
$id = $_GET['id'];
$departments = DepartmentController::getDepartment($connect);
?>

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="header-title">CHỈNH SỬA PHÒNG BAN</h4>
                <p class="text-muted mb-0">Here's a quick example to demonstrate Bootstrap form styles. Keep reading for documentation on required classes, form layout, and more.</p>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <?php
                    foreach ($departments as $row) {
                        if ($row['id'] == $id) {
                            $name = $row['name'];
                            ?>
                            <div class="mb-3">
                                <input type="hidden" name="id" value="<?php echo $id; ?>" />
                                <label for="exampleInputEmail1" class="form-label">Phòng ban</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="" name="name" value="<?php echo $name; ?>" placeholder="Thêm tên phòng ban">
                            </div>
                            <?php
                        }
                    }
                    ?>
                    <button type="submit" name="update" class="btn btn-primary">Submit</button>
                </form>
            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div>
</div>

<?php
if (isset($_POST['update'])) {
    $post = $_POST;
    DepartmentController::updateDepartment($connect, $post);
}
?>
