<?php
/*     $id = $_GET['id'];
 */    $employees = EmployeeController::getEmployee($connect);
?>
<!-- Form row -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="header-title">Tông tin tài khoản</h4>
                <p class="text-muted mb-0">
                    By adding <code>.row</code> & <code>.g-2</code>, you can have control over the
                    gutter width in as well the inline as block direction.
                </p>
            </div>
            <div class="card-body">
                <form method="POST" action="">
                    <div class="row g-2">
                        <div class="mb-3 col-md-6">
                            <label for="inputEmail4" class="form-label">User ID</label>
                            <input type="text" name="userId" class="form-control" id="inputEmail4">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="inputEmail4" class="form-label">Full Name</label>
                            <input type="text" name="fullname" id="fullname" class="form-control" id="inputEmail4">
                        </div>
        
                        <div class="mb-3 col-md-12">
                            <label for="fullAddress" class="form-label">Chọn ảnh</label>
                            <input type="file" class="form-control" name="file" id="file" accept="image/*" id="inputEmail4">
                        </div>
                    </div>
                    <button type="submit" name="add" class="btn btn-primary">Lưu thông tin</button>
                </form>

            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div> <!-- end col -->
</div>
<!-- end row -->