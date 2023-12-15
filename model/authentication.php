<?php
class Authentication
{
    public static function register($connect, $post)
    {
        $fullname = $post['fullname'];
        $username = $post['username'];
        $password = password_hash($post['password'], PASSWORD_BCRYPT);
        $avatar = $post['avatar'];
        $response = mysqli_query($connect, "SELECT * FROM `employee_management`.`users` WHERE `user_name` = '$username'");
        if (mysqli_num_rows($response) > 0) {
            echo "Tài khoản đã tồn tại ở hệ thống";
        } else {
            $query = "INSERT INTO `employee_management`.`users` (`full_name`, `user_name`, `password`, `image_url`) VALUES ('$fullname', '$username', '$password', '$avatar')";
            $request = mysqli_query($connect, $query);
            if ($request) {
                echo "Đăng kí thành công";
            } else {
                echo "Thất bại";
            }
        }
    }

    public static function signIn($connect, $post)
    {

        $username = $post['username'];
        $password = $post['password'];
        $query = ("SELECT `password` FROM `employee_management`.`users` WHERE `user_name` = '$username'");
        $request = mysqli_query($connect, $query);
        if (mysqli_num_rows($request) > 0) {
            $data = mysqli_fetch_array($request);
            $hashpass = $data[0];
            if ($hashpass !== null && password_verify($password, $hashpass)) {
                echo "Đăng nhập thành công";
            } else {
                echo "Mật khẩu không chính xác";
            }
        } else {
            echo "thất bại";
        }
    }
}
