<?php
if(isset($_POST['add'])){
    
    EmployeeController::addEmployee($connect,$_POST);
    // echo "them thanh cong";
}
?>

<section class="bg-image">
    <div class="mask d-flex align-items-center gradient-custom-3">
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                    <div class="card">
                        <div class="card-body p-5">
                            <h2 class="text-uppercase text-center mb-5">Thông tin</h2>
                            <form method="POST" action="">
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="ten">First Name:</label>
                                    <input type="text" name="firstname" class="form-control form-control-lg"
                                        placeholder="Tên" required />
                                </div>
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="ten">Last Name:</label>
                                    <input type="text" name="lastname" class="form-control form-control-lg"
                                        placeholder="" required />
                                </div>

                                <div class="form-outline mb-4">
                                    <label class="form-label" for="ten">Date of Birth:</label>
                                    <input type="date" name="birthday" class="form-control form-control-lg"
                                        placeholder="" required />
                                </div>

                                <div class="form-outline mb-4">
                                    <label class="form-label" for="gender">Gender</label>
                                    <select id="gender" name="gender" required>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>

                                <div class="form-outline mb-4">
                                    <label class="form-label" for="phoneNumber">Điện thoại</label>
                                    <input type="tel" name="phone" class="form-control form-control-lg"
                                        placeholder="Điện thoại" required />
                                </div>

                                <div class="form-outline mb-4">
                                    <label class="form-label" for="email">Email</label>
                                    <input type="email" name="email" class="form-control form-control-lg"
                                        placeholder="Email" required />
                                </div>

                                <div class="form-outline mb-4">
                                    <label class="form-label" for="tinh_thanhpho">Tỉnh/Thành phố</label>
                                    <select name="city" id="city" class="form-control form-control-lg"
                                        placeholder="Tỉnh, Thành phố" required></select>
                                </div>

                                <div class="form-outline mb-4">
                                    <label class="form-label" for="huyen">Huyện</label>
                                    <select name="district" id="district" class="form-control form-control-lg"
                                        placeholder="Huyện" required></select>
                                </div>

                                <div class="form-outline mb-4">
                                    <label class="form-label" for="xa">Xã</label>
                                    <select name="ward" id="ward" class="form-control form-control-lg" placeholder="Xã"
                                        required></select>
                                </div>

                                <div class="form-outline mb-4">
                                    <label class="form-label" for="fullAddress">Ấp, Khu Vực</label>
                                    <input type="text" name="fullAddress" class="form-control form-control-lg"
                                        placeholder="Khu vực, ấp" required />
                                </div>

                                <div class="d-flex justify-content-center">
                                    <button type="submit" name="add"
                                        class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Thêm thông
                                        tin</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

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