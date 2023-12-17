<?php
if (isset($_POST['add'])) {
    DepartmentController::addDepartment($connect, $_POST);
}
?>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="header-title">THÊM PHÒNG BAN</h4>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Phòng ban</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="" name="name"
                            placeholder="Thêm tên phòng ban">
                    </div>
                    <button type="submit" name="add" class="btn btn-primary">Submit</button>
                </form>

            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div>