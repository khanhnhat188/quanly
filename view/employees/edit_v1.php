<?php
    $id = $_GET['id'];
    $employees = EmployeeController::getEmployee($connect);
?>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="header-title">Form Row</h4>
                <p class="text-muted mb-0">
                    By adding <code>.row</code> & <code>.g-2</code>, you can have control over the
                    gutter width in as well the inline as block direction.
                </p>
            </div>
            <div class="card-body">
                <?php
                            foreach ($employees as $row) {
                                if ($row['id'] == $id) {
                                    $firstname = $row['first_name'];
                                    $lastname = $row['last_name'];
                                    $birthday = $row['birthday'];
                                    $gender = $row['gender'];
                                    $phone = $row['phone'];
                                    $email = $row['email'];
                                    $city = $row['city'];
                                    $district = $row['district'];
                                    $ward = $row['ward'];
                                    $fullAddress = $row['full_address'];
                            ?>

                <form method="POST" action="">
                    <div class="row g-2">
                        <input type="hidden" name="id" class="form-control" id="inputEmail4" value="<?php echo $id; ?>">
                        <div class="mb-3 col-md-6">
                            <label for="inputEmail4" class="form-label">Tên</label>
                            <input type="text" name="firstname" class="form-control" id="inputEmail4"
                                value="<?php echo $firstname; ?>">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="inputEmail4" class="form-label">Họ</label>
                            <input type="text" name="lastname" class="form-control" id="inputEmail4"
                                value="<?php echo $lastname; ?>">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="inputEmail4" class="form-label">Ngày sinh</label>
                            <input type="date" name="birthday" class="form-control" id="inputEmail4"
                                value="<?php echo $birthday; ?>" placeholder="" required />

                        </div>
                        <div class="mb-3 col-md-4">
                            <label for="inputState" class="form-label">Giới tính</label>
                            <select id="gender" for="gender" class="form-select" name="gender">
                                    <option value="Nam" <?php echo ($gender == 'Nam') ? 'selected' : ''; ?>>Nam</option>
                                    <option value="Nữ" <?php echo ($gender == 'Nữ') ? 'selected' : ''; ?>>Nữ</option>
                                    <option value="Khác" <?php echo ($gender == 'Khác') ? 'selected' : ''; ?>>Khác </option> 
                            </select>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="inputEmail4" class="form-label">Điện thoại</label>
                            <input type="text" name="phone" class="form-control" id="inputEmail4" value="<?php echo $phone; ?>">
                        </div>

                        <div class="mb-3 col-md-6">
                            <label for="inputEmail4" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" id="inputEmail4" value="<?php echo $email; ?>">
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
                            <input type="text" name="fullAddress" class="form-control" id="inputEmail4" value="<?php echo $fullAddress; ?>">
                        </div>
                    </div>
                    <button type="submit" name="update" class="btn btn-primary">Cập Nhật thông tin</button>
                </form>
                <?php
                                }
                            }  
                ?>

            </div>
        </div>
    </div>
</div>

<?php
if (isset($_POST['update'])) {
    $post = $_POST;
    EmployeeController::updateEmployee($connect, $post);
}
?>
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