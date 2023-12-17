<?php

class Department
{
    public static function getDepartment($connect)
    {
        $response = mysqli_query($connect, "SELECT * FROM `departments`");
        if ($response) {
            if (mysqli_num_rows($response) > 0) {
                while ($row = mysqli_fetch_array($response)) {
                    $data[] = $row;
                }
            }
        }
        return $data;
    }

    public static function addDepartment($connect, $post)
    {
        $name = $post['name'];
        $response = mysqli_query($connect, "SELECT * FROM departments WHERE `name` = '$name' ");
        if (mysqli_num_rows($response) > 0) {
            echo '<script type="text/javascript">
            Swal.fire({
                title: "Phòng ban này đã tồn tại",
                icon: "error",
                timer: 1000,
                timerProgressBar: true,
                showConfirmButton: false,
                
            });
            </script>';
        } else {
            $query = "INSERT INTO `employee_management`.`departments` (`name`) VALUES ('$name');";
            $request = mysqli_query($connect, $query);
            if ($request) {
                echo '<script type="text/javascript">
                Swal.fire({
                    title: "Thêm phòng ban thành công",
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
                echo '<script>window.location.href = "index.php?action=department&query=list";</script>';
            }
        }
    }

    public static function updateDepartment($connect, $post)
    {

        $id = $post['id'];
        $name = $post['name'];
        $query = "UPDATE `employee_management`.`departments` SET `name`='$name' WHERE  `id`='$id'";
        $request = mysqli_query($connect, $query);
        if ($request) {
            echo '<script type="text/javascript">
            Swal.fire({
                title: "Cập nhật phòng ban thành công",
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

            echo '<script>window.location.href = "index.php?action=department&query=list";</script>';
            
        } else {
            echo '<script type="text/javascript">
            Swal.fire({
                title: "Cập nhật phòng ban thành thất bại",
                icon: "error",
                timer: 1000,
                timerProgressBar: true,
                showConfirmButton: false,
                
            });
            </script>';
        }
    }


    public static function deleteDepartment($connect, $id)
    {
        $query = "DELETE FROM `employee_management`.`departments` WHERE  `id`='$id'";
        $request = mysqli_query($connect, $query);
        if ($request) {
            echo '<script type="text/javascript">
            Swal.fire({
                title: "Xóa phòng ban thành công",
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
            echo '<script>window.location.href = "index.php?action=department&query=list";</script>';
        }
    }
}
