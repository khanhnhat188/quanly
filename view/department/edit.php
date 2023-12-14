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

<style>
    .box_edit {
        width: 600px;
        margin: auto;
    }

    h2 {
        font-size: 23px;
        padding: 5px;
        border-bottom: 2px solid rgba(0, 145, 234, 1);
        position: relative;
        z-index: 1000;
        text-indent: 10px;
        overflow: hidden;
        color: #fff;
        margin-bottom: 10px;
    }

    h2::before {
        content: "";
        width: 200px;
        height: 100%;
        background: rgba(0, 145, 234, 1);
        position: absolute;
        top: 0;
        left: -37px;
        z-index: -1;
        transform: skewX(30deg);
    }

    .form-item {
        margin-bottom: 10px;
    }

    label {
        font-size: 20px;
        display: block;
        font-weight: bold;
    }

    input,
    textarea {
        width: 100%;
        padding: 10px;
        box-sizing: border-box;
        border: none;
        box-shadow: 0 0 1px #000;
        outline: none;
    }

    input[type="submit"] {
        background: #000;
        color: #fff;
        font-weight: bold;
    }
</style>
