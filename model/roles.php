<?php
class Roles
{
    public static function getRoles($connect)
    {
        $response = mysqli_query($connect, "SELECT * FROM `roles`");
        if ($response) {
            if (mysqli_num_rows($response) > 0) {
                while ($row = mysqli_fetch_array($response)) {
                    $data[] = $row;
                }
            }
        }
        return $data;
    }

    public static function addRoles($connect, $post)
    {
        $name = $post['name'];
        $response = mysqli_query($connect, "SELECT * FROM roles WHERE `name` = '$name' ");
        if (mysqli_num_rows($response) > 0) {
            echo 'Chức vụ này đã tồn tại ở hệ thống';
        } else {
            $query = "INSERT INTO `employee_management`.`roles` (`name`) VALUES ('$name');";
            $request = mysqli_query($connect, $query);
            if ($request) {
                echo 'Thành công';
            }
        }
    }

    public static function updateRoles($connect, $post)
    {

        $id = $post['id'];
        $name = $post['name'];
        $query = "UPDATE `employee_management`.`roles` SET `name`='$name' WHERE  `id`='$id'";
        $request = mysqli_query($connect, $query);
        if ($request) {
            echo 'Thành công';
        }
    }


    public static function deleteRoles($connect, $id)
    {
        $query = "DELETE FROM `employee_management`.`roles` WHERE  `id`='$id'";
        $request = mysqli_query($connect, $query);
        if ($request) {
            echo 'Thành công';
        }
    }
}
