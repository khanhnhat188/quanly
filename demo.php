<?php
require "config/connect.php";
require "controller/DepartmentController.php";
require "controller/EmployeeController.php";
require "model/employees.php";
require "model/department.php";
require "model/roles.php";
require "model/authentication.php";
require "controller/AuthenticationController.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký</title>
</head>
<body>
    <h2>Đăng ký</h2>
    <form method="post">
        <label for="full_name">Họ và tên:</label>
        <input type="text" name="fullname" required><br>

        <label for="user_name">Tên người dùng:</label>
        <input type="text" name="username" required><br>

        <label for="password">Mật khẩu:</label>
        <input  name="password" required><br>

        <label for="image_url">URL ảnh đại diện:</label>
        <input type="text" name="avatar" required><br>

        <input type="submit" value="Đăng ký" name="register">
    </form>
    <div>
        <h2>Đăng nhập</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <label for="login_user_name">Tên người dùng:</label>
            <input type="text" name="username" required><br>

            <label for="login_password">Mật khẩu:</label>
            <input  name="password"  required><br>

            <input type="submit" name="signIn" value="Đăng nhập">
        </form>
    </div>
</body>
</html>

<?php
if(isset($_POST['register'])){
    AuthenticationController::register($connect,$_POST);
}
if(isset($_POST['signIn'])){
    Authentication::signIn($connect,$_POST);
}
