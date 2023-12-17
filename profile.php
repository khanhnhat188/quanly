<?php
//Get user
$id = $_SESSION['userId'];
$user = Authentication::getUser($connect,$_SESSION['userId']);

?>
<div class="row">
    <div class="col-sm-12">
        <div class="profile-bg-picture" style="background-image:url('assets/images/bg-profile.jpg')">
            <span class="picture-bg-overlay"></span>
            <!-- overlay -->
        </div>
        <!-- meta -->
        <div class="profile-user-box">
            <div class="row">
                <div class="col-sm-6">
                <?php
                            foreach ($user as $row) {
                                if ($row['user_id'] == $id) {
                                    $fullname = $row['full_name'];
                                    $username = $row['user_name'];
                                    $avatar = $row['image_url'];
                            }

                        ?>
                    <div class="profile-user-img"><img src="./assets/images/users/<?php echo $avatar; ?>" alt=""
                            class="avatar-lg rounded-circle"></div>
                    <div class="">

                        <h4 class="mt-4 fs-17 ellipsis"><?php echo $fullname; ?></h4>
                    <?php
                        }
                    ?>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="d-flex justify-content-end align-items-center gap-2">
                        <button type="button" class="btn btn-soft-danger">
                            <a href="index.php?action=account&query=update&userId=<?php echo $_SESSION['userId'] ?>">
                            <i class="ri-settings-2-line align-text-bottom me-1 fs-16 lh-1"></i>
                            Chỉnh sửa
                            </a>
                        </button>
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
                                <h5 class="text-uppercase fs-17 text-dark"><?php echo $fullname; ?></h5>
                                <h5 class="mt-4 fs-17 text-dark">Thông tin cá nhân</h5>
                                <table class="table table-condensed mb-0 border-top">
                                    <tbody>
                                        <tr>
                                            <th scope="row">ID User</th>
                                            <td> <?php echo $id; ?> </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Username</th>
                                            <td> <?php echo $username; ?> </td>
                                        </tr>

                                        <tr>
                                            <th scope="row">Avatar</th>
                                            <td class="ng-binding">
                                                <img src="./assets/images/users/<?php echo $avatar; ?>" alt="avatar" class="avatar-md rounded-circle">
                                        </tr>
                                    </tbody>
                                </table>
                            </div> 
                        </div> <!-- about-me -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end page title -->