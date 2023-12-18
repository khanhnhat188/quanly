<?php
    $department = DepartmentController::getDepartment($connect);
    $roles = RolesController::getRoles($connect);
    $id = $_GET['id'];
    $employees = EmployeeController::getEmployeeById($connect,$id);
    var_dump($employees);

?>

<!-- start page title -->
<div class="row">
    <div class="col-sm-12">
        <div class="profile-bg-picture" style="background-image:url('assets/images/bg-profile.jpg')">
            <span class="picture-bg-overlay"></span>
            <!-- overlay -->
        </div>
        <!-- meta -->
        <div class="profile-user-box">
            <div class="row">

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
                <div class="col-sm-12">
                    <div class="profile-user-img"><img src="assets/images/users/avatar-1.jpg" alt=""
                            class="avatar-lg rounded-circle"></div>
                    <div class="">
                        <h4 class="mt-4 fs-17 ellipsis"><?php echo $lastname." ".$firstname; ?></h4>
                        <p class="text-muted mb-0"><small><?php echo $district.", ".$city ?></small></p>
                    </div>
                </div>
            </div>
        </div>
        <!--/ meta -->
    </div>
</div>
<!-- end row -->

<div class="row">
    <div class="col-sm-12">
        <div class="card p-0">
            <div class="card-body p-0">
                <div class="profile-content">
                    <ul class="nav nav-underline nav-justified gap-0">
                        <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" data-bs-target="#aboutme"
                                type="button" role="tab" aria-controls="home" aria-selected="true"
                                href="#aboutme">About</a>
                        </li>
                    </ul>

                    <div class="tab-content m-0 p-4">
                        <div class="tab-pane active" id="aboutme" role="tabpanel" aria-labelledby="home-tab"
                            tabindex="0">
                            <div class="profile-desk">
                                <h5 class="text-uppercase fs-17 text-dark"><?php echo $lastname." ".$firstname; ?></h5>
                                <div class="designation mb-4">
                                    <?php
                                        foreach ($roles as $rows) { //fix lại phần này cho đúng
                                            if ($rows['id'] == $id) {
                                                echo $rows['name'];
                                            }
                                        }
                                    ?>
                                </div>
                                <!--
                                    <p class="text-muted fs-16">
                                    I have 10 years of experience designing for the web, and
                                    specialize
                                    in the areas of user interface design, interaction design,
                                    visual
                                    design and prototyping. I’ve worked with notable startups
                                    including
                                    Pearl Street Software.
                                </p>
                                --->

                                <h5 class="mt-4 fs-17 text-dark">Thông tin cá nhân</h5>
                                <table class="table table-condensed mb-0 border-top">
                                    <tbody>
                                        <tr>
                                            <th scope="row">Họ và tên</th>
                                            <td><?php echo $lastname." ".$firstname; ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Ngày sinh</th>
                                            <?php
                                                $date = date_create($birthday);
                                            ?>
                                            <td><?php echo date_format($date, "d/m/Y"); ?></td>
                                        </tr>

                                        <tr>
                                            <th scope="row">Giới tính</th>
                                            <td class="ng-binding"><?php echo $gender; ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Điện thoại</th>
                                            <td><?php echo $phone; ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Email</th>
                                            <td><?php echo $email; ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Địa chỉ</th>
                                            <td><?php echo $fullAddress.", ".$ward.", ".$district.", ".$city; ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Chức vụ</th>
                                            <td>
                                                <?php
                                                    foreach ($roles as $rows) {
                                                        if ($rows['id'] == $id) {
                                                            echo $rows['name'];
                                                        }
                                                    }
                                                ?>
                                            </td>
                                        </tr>


                                    </tbody>
                                </table>
                            </div>
                        </div> <!-- about-me -->
                    </div>
                </div>
            </div>
            <?php
                                }
                            } 
            ?>
        </div>
    </div>
</div>
<!-- end page title -->

</div>
<!-- end row -->

</div>
<!-- container -->

</div>
<!-- content -->