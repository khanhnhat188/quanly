<?php
$id = $_GET['id'];
$employees = EmployeeController::getEmployee($connect);

?>

<section class="bg-image">
    <div class="mask d-flex align-items-center gradient-custom-3">
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                    <div class="card">
                        <div class="card-body p-5">
                            <h2 class="text-uppercase text-center mb-5">Thông tin</h2>
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
                                <div class="form-outline mb-4">
                                    <input type="hidden" name="id" value="<?php echo $id; ?>" />
                                </div>
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="ten">First Name:</label>
                                    <input type="text" name="firstname" class="form-control form-control-lg"
                                        value="<?php echo $firstname; ?>" placeholder="" required />
                                </div>
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="ten">Last Name:</label>
                                    <input type="text" name="lastname" class="form-control form-control-lg"
                                        value="<?php echo $lastname; ?>" placeholder="" required />
                                </div>

                                <div class="form-outline mb-4">
                                    <label class="form-label" for="ten">Date of Birth:</label>
                                    <input type="date" name="birthday" class="form-control form-control-lg"
                                        value="<?php echo $birthday; ?>" placeholder="" required />
                                </div>

                                <div class="form-outline mb-4">
                                    <label class="form-label" for="gender">Gender</label>
                                    <select id="gender" name="gender" required>
                                        <option value="Male" <?php echo ($gender == 'Male') ? 'selected' : ''; ?>>Male
                                        </option>
                                        <option value="Female" <?php echo ($gender == 'Female') ? 'selected' : ''; ?>>
                                            Female</option>
                                        <option value="Other" <?php echo ($gender == 'Other') ? 'selected' : ''; ?>>
                                            Other</option>
                                    </select>
                                </div>

                                <div class="form-outline mb-4">
                                    <label class="form-label" for="phoneNumber">Điện thoại</label>
                                    <input type="text" name="phone" class="form-control form-control-lg"
                                        value="<?php echo $phone; ?>" placeholder="Điện thoại" required />
                                </div>

                                <div class="form-outline mb-4">
                                    <label class="form-label" for="email">Email</label>
                                    <input type="email" name="email" class="form-control form-control-lg"
                                        value="<?php echo $email; ?>" placeholder="Email" required />
                                </div>

                                <div class="form-outline mb-4">
                                    <label class="form-label" for="tinh_thanhpho">Tỉnh/Thành phố</label>
                                    <select name="city" id="city" class="form-control form-control-lg" required>
                                        <?php foreach ($cities as $cityOption): ?>
                                        <option value="<?php echo $cityOption['code']; ?>"
                                            <?php echo ($city == $cityOption['code']) ? 'selected' : ''; ?>>
                                            <?php echo $cityOption['name']; ?>
                                        </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>

                                <div class="form-outline mb-4">
                                    <label class="form-label" for="huyen">Huyện</label>
                                    <select name="district" id="district" class="form-control form-control-lg"
                                        required>
                                        <?php foreach ($districts as $districtOption): ?>
                                        <option value="<?php echo $districtOption['code']; ?>"
                                            <?php echo ($district == $districtOption['code']) ? 'selected' : ''; ?>>
                                            <?php echo $districtOption['name']; ?>
                                        </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>

                                <div class="form-outline mb-4">
                                    <label class="form-label" for="xa">Xã</label>
                                    <select name="ward" id="ward" class="form-control form-control-lg" required>
                                        <?php foreach ($wards as $wardOption): ?>
                                        <option value="<?php echo $wardOption['code']; ?>"
                                            <?php echo ($ward == $wardOption['code']) ? 'selected' : ''; ?>>
                                            <?php echo $wardOption['name']; ?>
                                        </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>

                                <div class="form-outline mb-4">
                                    <label class="form-label" for="fullAddress">Ấp, Khu Vực</label>
                                    <input type="text" name="fullAddress" class="form-control form-control-lg"
                                       value = "<?php echo $fullAddress; ?>" placeholder="Ấp, Khu Vực" required />
                                </div>

                                <div class="d-flex justify-content-center">
                                    <button type="submit" name="update"
                                        class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Cập nhật thông
                                        tin</button>
                                </div>
                            </form>
                            <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

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