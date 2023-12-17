<!-- start page title -->
<?php
$user = Authentication::getUser($connect,$_SESSION['userId']);
var_dump($user);
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
                    <div class="profile-user-img"><img src="<?php echo $user[0]['image_url']?>" alt=""
                            class="avatar-lg rounded-circle"></div>
                    <div class="">
                        <h4 class="mt-4 fs-17 ellipsis"><?php echo $user[0]['full_name']?></h4>
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

                        <<li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" data-bs-target="#aboutme"
                                type="button" role="tab" aria-controls="home" aria-selected="true" href="#">Thông tin</a>
                            </li>
                    </ul>
                    <div class="tab-content m-0 p-4">
                        <!-- settings -->
                        <div class="tab-pane active" id="aboutme" role="tabpanel" aria-labelledby="home-tab"
                            tabindex="0">
                            <div class="profile-desk">
                                <form>
                                    <div class="row row-cols-sm-2 row-cols-1">
                                        <div class="mb-3">
                                            <label class="form-label" for="userId">User ID</label>
                                            <input type="text" id="userId" name="userId" class="form-control" required>
                                        </div>
                                        <div class="mb-2">
                                            <label class="form-label" for="FullName">Full Name</label>
                                            <input type="text" name="fullname" id="fullname" class="form-control" required>
                                        </div>
                                        
                                        <div class="mb-3">
                                            <label class="form-label" for="Username">Chọn ảnh</label>
                                            <input type="file" name="file" id="file" accept="image/*" class="form-control">
                                        </div>

                                        
                                    </div>
                                    <button class="btn btn-primary" name="upload" type="submit"><i
                                            class="ri-save-line me-1 fs-16 lh-1"></i>Lưu thông tin</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end page title -->

</div>
<!-- end row -->