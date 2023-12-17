<?php
$id = $_SESSION['userId'];
$user = Authentication::getUser($connect, $_SESSION['userId']);
?>
<!-- Form row -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="header-title">Thông tin tài khoản</h4>
            </div>
            <div class="card-body">
                <?php
                foreach ($user as $row) {
                    if ($row['user_id'] == $id) {
                        $fullname = $row['full_name'];
                        $avatar = $row['image_url'];
                    }
                ?>
                <form method="POST" action="" enctype="multipart/form-data">
                    <div class="row g-2">
                        <div class="mb-3 col-md-6">
                            <label for="inputEmail4" class="form-label">User ID</label>
                            <input type="text" name="userId" class="form-control" id="inputEmail4"
                                value="<?php echo $row['user_id'] ?>" readonly>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="inputEmail4" class="form-label">Full Name</label>
                            <input type="text" name="fullname" id="fullname" class="form-control" id="inputEmail4"
                                value="<?php echo $fullname; ?>">
                        </div>

                        <div class="mb-3 col-md-12">
                            <label for="file">Chọn Ảnh:</label>
                            <input type="file" name="file" id="file" accept="image/*">
                            <br>
                        </div>
                    </div>
                    <button type="submit" name="upload" class="btn btn-primary">Lưu thông tin</button>
                </form>
                <?php
                }
                ?>

            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div> <!-- end col -->
</div>
<?php
if (isset($_POST['upload'])) {
    AuthenticationController::uploadAvatar($connect,$_POST);
}