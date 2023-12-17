<?php
require "config/connect.php";
require "model/authentication.php";
require "controller/AuthenticationController.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Upload Ảnh</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>
<body>
    <h2>Cập nhật thông tin</h2>
    <form action="" method="post" enctype="multipart/form-data">
    <label for="userid">User ID:</label>
        <input type="text" name="userId" id="userid" required>
        <label for="fullname">full name:</label>
        <input type="text" name="fullname" id="fullname" required>
        <label for="file">Chọn Ảnh:</label>
        <input type="file" name="file" id="file" accept="image/*">
        <br>
        <input type="submit" name="upload" value="Upload">
    </form>
</body>
</html>
<?php
AuthenticationController::uploadAvatar($connect,$_POST);
