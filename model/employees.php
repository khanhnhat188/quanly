<?php

class Employee
{
    public static function getEmployee($connect)
    {
        $response = mysqli_query($connect, "SELECT * FROM `employee_management`.`employees` ORDER BY `id` DESC");
        if ($response) {
            if (mysqli_num_rows($response) > 0) {
                while ($row = mysqli_fetch_array($response)) {
                    $data[] = $row;
                }
            }
        }
        return $data;
    }

    public static function addEmployee($connect, $post)
    {
        $firstname = $post['firstname'];
        $lastname = $post['lastname'];
        $birthday = $post['birthday'];
        $gender = $post['gender'];
        $phone = $post['phone'];
        $email = $post['email'];
        $city = $post['city'];
        $district = $post['district'];
        $ward = $post['ward'];
        $fullAddress = $post['fullAddress'];
        $departments = $post['departments'];
        $roles = $post['roles'];
        $response = mysqli_query($connect, "SELECT * FROM employees WHERE phone='$phone' OR email='$email'");
        if (mysqli_num_rows($response) > 0) {
            echo '<script type="text/javascript">
                Swal.fire({
                    title: "Nhân viên này đã tồn tại",
                    icon: "error",
                    timer: 1000,
                    timerProgressBar: true,
                    showConfirmButton: false,
                    
                });
                </script>';
        } else {
            $query = "INSERT INTO `employee_management`.`employees` (`first_name`, `last_name`, `birthday`, `gender`, `phone`, `email`, `city`, `district`, `ward`, `full_address`,`departments`,`roles`) VALUES ('$firstname', '$lastname', '$birthday', '$gender', '$phone', '$email', '$city', '$district', '$ward', '$fullAddress','$departments','$roles')";
            $request = mysqli_query($connect, $query);
            if ($request) {
                echo '<script type="text/javascript">
                Swal.fire({
                    title: "Thêm nhân viên thành công",
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
                echo '<script>window.location.href = "index.php?action=employee&query=list";</script>';
            } else {
                echo '<script type="text/javascript">
                Swal.fire({
                    title: "Không thể thêm nhân viên",
                    icon: "error",
                    timer: 1000,
                    timerProgressBar: true,
                    showConfirmButton: false,
                    
                });
                </script>';
            }
        }
    }

    public static function updateEmployee($connect, $post)
    {
        $id = $post['id'];
        $firstname = $post['firstname'];
        $lastname = $post['lastname'];
        $birthday = $post['birthday'];
        $gender = $post['gender'];
        $phone = $post['phone'];
        $email = $post['email'];
        $city = $post['city'];
        $district = $post['district'];
        $ward = $post['ward'];
        $fullAddress = $post['fullAddress'];
        $departments = $post['departments'];
        $roles = $post['roles'];
        $query = "UPDATE `employee_management`.`employees` SET `first_name`='$firstname', `last_name`= '$lastname', `birthday`= '$birthday', `gender`= '$gender', `phone`= '$phone', `email`= '$email', `city`= '$city', `district`= '$district', `ward`= '$ward', `full_address`='$fullAddress', `departments`='$departments', `roles`= '$roles'  WHERE  `id`= '$id' ";
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

            //chuyển trang thêm dưới này 
            echo '<script>window.location.href = "index.php?action=employee&query=list";</script>';
        } else {
            echo '<script type="text/javascript">
                Swal.fire({
                    title: "Không thể cập nhật thông tin",
                    icon: "error",
                    timer: 1000,
                    timerProgressBar: true,
                    showConfirmButton: false,
                    
                });
                </script>';
        }
    }

    public static function deleteEmployee($connect, $id)
    {
        $query = "DELETE FROM `employee_management`.`employees` WHERE  `id`='$id'";
        $request = mysqli_query($connect, $query);
        if ($request) {
            echo '<script type="text/javascript">
                Swal.fire({
                    title: "Xóa nhân viên thành công",
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
            echo '<script>window.location.href = "index.php?action=employee&query=list";</script>';
        } else {
            echo '<script type="text/javascript">
                Swal.fire({
                    title: "Không thể xóa nhân viên",
                    icon: "error",
                    timer: 1000,
                    timerProgressBar: true,
                    showConfirmButton: false,
                    
                });
                </script>';
        }
    }
}
