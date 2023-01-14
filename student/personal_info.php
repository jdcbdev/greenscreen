<div id='personal-info' class="col-12 col-md-11 profile-screen mt-0 mt-md-3 mx-auto">
    <div class="mt-3 mt-md-0">
        <div class="card-profile p-4">
            <div class="upload-photo-container">
                <img src="../img/faculty/male.png" alt="">
                <h6 class="ms-3 card-title fw-bold d-none d-sm-block">Profile Picture</h6>
            </div>
            <a class="btn btn-outline-secondary custom-btn upload-photo">Update Photo</a>
        </div>
        <div class="card-profile p-4 mt-3">
            <div class="row">
                <h5 class="col-12 fw-bold mb-3">Personal Information</h5>
                <form class="needs-validation" action="" method="post" name="personal-info" id="personal-info">
                    <div class="row g-3">
                        <div class="col-12 col-md-6 d-none">
                            <label for="upload-photo" class="form-label">Upload Photo<span class="text-muted"></span></label>
                            <input class="upload-photo custom-file-input" type="file" accept="image/*" name="upload-photo" id="upload-photo">
                        </div>
                        <div class="col-12 col-md-6">
                            <label for="firstname" class="form-label">First Name<span class="text-muted"></span></label>
                            <input type="text" class="form-control" id="firstname" placeholder="" name="firstname" required="">
                        </div>
                        <div class="col-12 col-md-6">
                            <label for="middlename" class="form-label">Middle Name<span class="text-muted"></span></label>
                            <input type="text" class="form-control" id="middlename" placeholder="Optional" name="middlename">
                        </div>
                        <div class="col-12 col-md-6">
                            <label for="lastname" class="form-label">Last Name<span class="text-muted"></span></label>
                            <input type="text" class="form-control" id="lastname" placeholder="" name="lastname" required="">
                        </div>
                        <div class="col-12 col-md-6">
                            <label for="extname" class="form-label">Extension Name<span class="text-muted"></span></label>
                            <input type="text" class="form-control" id="extname" placeholder="Optional (Jr, Sr, I, III)" name="extname">
                        </div>
                        <div class="col-12 col-md-6">
                            <label for="sex" class="form-label">Sex<span class="text-muted"></span></label>
                            <select class="form-control" id="sex" placeholder="" name="sex" required="">
                                <option value="">--Select--</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                        <div class="col-12 col-md-6">
                            <label for="birthday" class="form-label">Birth Date<span class="text-muted"></span></label>
                            <input type="date" class="form-control" id="birthday" placeholder="" name="birthday" required="">
                        </div>
                        <h5 class="col-12 fw-bold my-4 mb-1">Contact Points</h5>
                        <div class="col-12 col-md-6">
                            <label for="email" class="form-label">School or Personal Email<span class="text-muted"></span></label>
                            <input type="email" class="form-control" id="email" placeholder="" name="email" required="">
                        </div>
                        <div class="col-12 col-md-6">
                            <label for="contact" class="form-label">Phone Number<span class="text-muted"></span></label>
                            <input type="text" class="form-control" id="contact" placeholder="11-digit mobile number" name="contact" required="">
                        </div>
                        <h5 class="col-12 fw-bold my-4 mb-1">Home Address</h5>
                        <div class="col-12 col-md-6">
                            <label for="region" class="form-label">Region<span class="text-muted"></span></label>
                            <select type="text" class="form-control" id="region" placeholder="" name="region" required="">
                                <option value="none">--Select--</option>
                                <?php
                                    require_once '../classes/address.class.php';
                                    $address_obj = new Address();
                                    $address = $address_obj->get_region();
                                    foreach($address as $row){
                                ?>
                                        <option value="<?=$row['regCode']?>"><?=$row['regDesc']?></option>
                                <?php
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="col-12 col-md-6">
                            <label for="province" class="form-label">Province<span class="text-muted"></span></label>
                            <select type="text" class="form-control" id="province" placeholder="" name="province" required="">
                                <option value="none">--Select--</option>
                            </select>
                        </div>
                        <div class="col-12 col-md-6">
                            <label for="city" class="form-label">City/Municipality<span class="text-muted"></span></label>
                            <select type="text" class="form-control" id="city" placeholder="" name="city" required="">
                                <option value="none">--Select--</option>
                            </select>
                        </div>
                        <div class="col-12 col-md-6">
                            <label for="barangay" class="form-label">Barangay<span class="text-muted"></span></label>
                            <select type="text" class="form-control" id="barangay" placeholder="" name="barangay" required="">
                                <option value="none">--Select--</option>
                            </select>
                        </div>
                        <div class="col-12 col-md-6">
                            <label for="drive" class="form-label">Street Name<span class="text-muted"></span></label>
                            <input type="text" class="form-control" id="drive" placeholder="" name="drive" required="">
                        </div>
                        <div class="col-12 col-md-6">
                            <label for="house_no" class="form-label">Building/House No.<span class="text-muted"></span></label>
                            <input type="text" class="form-control" id="house_no" placeholder="" name="house_no">
                        </div>
                        <div class="col-12 m-0">
                            <hr class="my-4 mx-auto w-">
                        </div>
                        <div class="col-6 text-start m-0">
                            <a class="btn btn-lg btn-success btn-font w-100 back-button m-0 d-none" name="personal" id="personal">
                                <i class="fa-solid fa-arrow-left-long pe-1"></i>
                                Back
                            </a>
                        </div>
                        <div class="col-6 text-end m-0">
                            <button class="btn btn-lg btn-success background-color-green w-100 next-button btn-font m-0" type="submit" value="Next" name="personal" id="personal">
                                Next
                                <i class="ps-1 fa-solid fa-arrow-right-long"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>