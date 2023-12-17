<?php
//Get data from database
$departments = DepartmentController::getDepartment($connect);
//Get data from database roles
$roles = RolesController::getRoles($connect);

if(isset($_POST['add'])){
    
    EmployeeController::addEmployee($connect,$_POST);
    // echo "them thanh cong";
}
?>
<!-- Form row -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="header-title">THÊM NHÂN VIÊN</h4>
            </div>
            <div class="card-body">
                <form method="POST" action="">
                    <div class="row g-2">
                        <div class="mb-3 col-md-6">
                            <label for="inputEmail4" class="form-label">Tên</label>
                            <input type="text" name="firstname" class="form-control" id="inputEmail4" placeholder="Tên">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="inputEmail4" class="form-label">Họ</label>
                            <input type="text" name="lastname" class="form-control" id="inputEmail4" placeholder="Họ">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="inputEmail4" class="form-label">Ngày sinh</label>
                            <input type="text" class="form-control date" name="birthday" id="birthdatepicker"
                                data-toggle="date-picker" data-single-date-picker="true">
                        </div>
                        <div class="mb-3 col-md-4">
                            <label for="inputState" class="form-label">Giới tính</label>
                            <select id="gender" for="gender" class="form-select" name="gender">
                                <option value="Nam">Nam</option>
                                <option value="Nữ">Nữ</option>
                                <option value="Khác">Khác</option>
                            </select>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="inputEmail4" class="form-label">Điện thoại</label>
                            <input type="text" name="phone" class="form-control" id="inputEmail4"
                                placeholder="Điện thoại">
                        </div>

                        <div class="mb-3 col-md-6">
                            <label for="inputEmail4" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Email">
                        </div>

                        <div class="mb-3 col-md-4">
                            <label for="tinh_thanhpho" class="form-label">Tỉnh, Thành phố</label>
                            <select id="city" class="form-select" name="city">
                            </select>
                        </div>

                        <div class="mb-3 col-md-4">
                            <label for="huyen" class="form-label">Quận, Huyện</label>
                            <select id="district" class="form-select" name="district">
                            </select>
                        </div>

                        <div class="mb-3 col-md-4">
                            <label for="xa" class="form-label">Xã, Phường, Thị trấn</label>
                            <select id="ward" class="form-select" name="ward">
                            </select>
                        </div>

                        <div class="mb-3 col-md-12">
                            <label for="fullAddress" class="form-label">Địa chỉ</label>
                            <input type="text" name="fullAddress" class="form-control" id="inputEmail4"
                                placeholder="256 Nguyễn Văn Cừ">
                        </div>

                        <div class="mb-3 col-md-6">
                            <label for="department" class="form-label">Phòng ban</label>
                            <select id="departments" class="form-select" name="departments">
                                <option value="departments">Chọn</option>

                                <?php
                                    foreach ($departments as $row): 
                                ?>
                                    <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
                                <?php
                                          
                                    endforeach; 
                                ?>

                            </select>
                        </div>
                        <div class="mb-3 col-md-4">
                            <label for="roles" class="form-label">Chức vụ</label>
                            <select id="roles" class="form-select" name="roles">
                                <option value="">Chọn</option>
                                <?php
                                    foreach ($roles as $row): 
                                ?>
                                    <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
                                <?php
                                          
                                    endforeach; 
                                ?>
                            </select>
                        </div>

                    </div>
                    <button type="submit" name="add" class="btn btn-primary">Thêm thông tin</button>
                </form>

            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div> <!-- end col -->
</div>
<!-- end row -->

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
<script>
const host = "https://provinces.open-api.vn/api/";
var callAPI = (api) => {
    return axios.get(api)
        .then((response) => {
            renderData(response.data, "city");
        });
}
callAPI('https://provinces.open-api.vn/api/?depth=2');
var callApiDistrict = (api) => {
    return axios.get(api)
        .then((response) => {
            renderData(response.data.districts, "district");
        });
}
var callApiWard = (api) => {
    return axios.get(api)
        .then((response) => {
            renderData(response.data.wards, "ward");
        });
}

var renderData = (array, select) => {
    let row = ' <option disable value="">Chọn</option>';
    array.forEach(element => {
        row += `<option data-id="${element.code}" value="${element.name}">${element.name}</option>`
    });
    document.querySelector("#" + select).innerHTML = row
}

$("#city").change(() => {
    callApiDistrict(host + "p/" + $("#city").find(':selected').data('id') + "?depth=2");
    printResult();
});
$("#district").change(() => {
    callApiWard(host + "d/" + $("#district").find(':selected').data('id') + "?depth=2");
    printResult();
});
$("#ward").change(() => {
    printResult();
})

var printResult = () => {
    if ($("#district").find(':selected').data('id') != "" && $("#city").find(':selected').data('id') != "" &&
        $("#ward").find(':selected').data('id') != "") {
        let result = $("#city option:selected").text() +
            " | " + $("#district option:selected").text() + " | " +
            $("#ward option:selected").text();
        $("#result").text(result)
    }

}
</script>