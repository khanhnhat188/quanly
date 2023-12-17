<?php
class Authentication
{
    public static function register($connect, $post)
    {
        $fullname = $post['fullname'];
        $username = $post['username'];
        $password = password_hash($post['password'], PASSWORD_BCRYPT);
        $response = mysqli_query($connect, "SELECT * FROM `employee_management`.`users` WHERE `user_name` = '$username'");
        if (mysqli_num_rows($response) > 0) {
            echo '<script type="text/javascript">
            Swal.fire({
                title: "Tài khoản đã tồn tại ở hệ thống",
                icon: "error",
                timer: 1000,
                timerProgressBar: true,
                showConfirmButton: false,
                
            });
            </script>';
        } else {
            $query = "INSERT INTO `employee_management`.`users` (`full_name`, `user_name`, `password`) VALUES ('$fullname', '$username', '$password')";
            $request = mysqli_query($connect, $query);
            if ($request) {
                echo '<script type="text/javascript">
                Swal.fire({
                    title: "Đăng kí tài khoản thành công",
                    icon: "success",
                    timer: 1000,
                    timerProgressBar: true,
                    showConfirmButton: false,
                    
                });
                </script>';
                ob_flush();
                flush();

                // Chờ 1 giây trước khi chuyển hướng
                sleep(1);

                //chuyển trang thêm dưới này 
            } else {
                echo '<script type="text/javascript">
                Swal.fire({
                    title: "Đăng kí thất bại",
                    icon: "error",
                    timer: 1000,
                    timerProgressBar: true,
                    showConfirmButton: false,
                    
                });
                </script>';
            }
        }
    }

    public static function signIn($connect, $post)
    {

        $username = $post['username'];
        $password = $post['password'];
        $query = ("SELECT * FROM `employee_management`.`users` WHERE `user_name` = '$username'");
        $request = mysqli_query($connect, $query);
        if (mysqli_num_rows($request) > 0) {
            $data [] = mysqli_fetch_array($request);
            $hashpass = $data[0]['password'];
            $userId = $data[0]['user_id'];
            if ($hashpass !== null && password_verify($password, $hashpass)) {
                // setcookie('user', $username . $hashpass, time() + 3600, "/");
                $_SESSION['userId'] = $userId;
                echo '<script type="text/javascript">
                Swal.fire({
                    title: "Đăng nhập thành công",
                    icon: "success",
                    timer: 1000,
                    timerProgressBar: true,
                    showConfirmButton: false,
                    
                });
                </script>';
                ob_flush();
                flush();

                // Chờ 1 giây trước khi chuyển hướng
                sleep(1);

                echo '<script>window.location.href = "index.php";</script>';

            } else {
                echo '<script type="text/javascript">
                Swal.fire({
                    title: "Tài khoản hoặc mật khẩu không đúng",
                    icon: "error",
                    timer: 1000,
                    timerProgressBar: true,
                    showConfirmButton: false,
                    
                });
                </script>';
            }
        } else {
            echo '<script type="text/javascript">
                Swal.fire({
                    title: "Đăng nhập thất bại",
                    icon: "error",
                    timer: 1000,
                    timerProgressBar: true,
                    showConfirmButton: false,
                    
                });
                </script>';
        }
    }

    public static function uploadAvatar($connect, $post)
    {
        if (isset($post['upload'])) {
            $userId = $post['userId'];
            $fullname = $post['fullname'];
            $directory = "assets/avatar/";
            $targetFile = $directory . time() . "." . pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION);
            if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile)) {

                $query = "UPDATE `employee_management`.`users` SET `full_name`='$fullname', `image_url`='$targetFile' WHERE  `user_id`='$userId'";
                $request = mysqli_query($connect, $query);
                if ($request) {
                    echo '<script type="text/javascript">
                Swal.fire({
                    title: "Cập nhật thông tin thành công",
                    icon: "success",
                    timer: 1000,
                    timerProgressBar: true,
                    showConfirmButton: false,
                    
                });
                </script>';
                    ob_flush();
                    flush();

                    // Chờ 1 giây trước khi chuyển hướng
                    sleep(1);
                    echo '<script>window.location.href = "index.php?action=account&query=profile";</script>';
                }
            } else {
                echo '<script type="text/javascript">
                    Swal.fire({
                        title: "Cập nhật thông tin thất bại",
                        icon: "error",
                        timer: 1000,
                        timerProgressBar: true,
                        showConfirmButton: false,
                        
                    });
                    </script>';
            }
        }
    }

    public static function getUser($connect,$userId)
    {
        $response = mysqli_query($connect, "SELECT * FROM `employee_management`.`users` where `user_id`= '$userId'");
        if ($response) {
            if (mysqli_num_rows($response) > 0) {
                while ($row = mysqli_fetch_array($response)) {
                    $data[] = $row;
                }
            }
        }
        return $data;
    }
}
