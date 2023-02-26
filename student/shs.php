<div id='shs' class="col-12 col-md-11 profile-screen mt-0 mt-md-3 mx-auto" style="display:none;">
    <div class="mt-3 mt-md-0">
        <div class="card-profile p-4 mt-3">
            <div class="row">
                <h5 class="col-12 fw-bold mb-3">Senior High School Background</h5>
                <form class="needs-validation" action="" method="post" name="shs" id="shs">
                    <div class="row g-3">
                        <div class="col-12 col-md-12">
                            <label for="strand" class="form-label">What strand did you take in SHS?<span class="text-muted"></span></label>
                            <select class="form-control form-select" id="strand" placeholder="" name="strand" required="">
                                <option value="">--Select--</option>
                                <?php
                                    require_once '../classes/reference.class.php';
                                    $ref_obj = new Reference();
                                    $ref = $ref_obj->get_strand();
                                    foreach($ref as $row){
                                ?>
                                        <option value="<?=$row['strand']?>"><?=$row['strand']?></option>
                                <?php
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="col-12 col-md-12">
                            <label for="shs_name" class="form-label">The name of your Senior High School.<span class="text-muted"></span></label>
                            <input class="form-control" id="shs_name" placeholder="" name="shs_name" required="">
                        </div>
                        <div class="col-12 col-md-12">
                            <label for="class_rank" class="form-label">What was your last Class Rank when you finished the SHS Program?<span class="text-muted"></span></label>
                            <select class="form-control form-select" id="class_rank" placeholder="" name="class_rank" required="">
                                <option value="">--Select--</option>
                                <option value="Top 5">Top 5</option>
                                <option value="Top 10">Top 10</option>
                                <option value="Top 20">Top 20</option>
                                <option value="None">None</option>
                            </select>
                        </div>
                        <div class="col-12 col-md-12">
                            <label for="awards" class="form-label">Academic Awards Received in SHS<span class="text-muted"></span></label>
                            <select class="form-control form-select" id="awards" placeholder="" name="awards" required="">
                                <option value="">--Select--</option>
                                <option value="Highest Honor">Highest Honor</option>
                                <option value="High Honor">High Honor</option>
                                <option value="With Honor">With Honor</option>
                                <option value="None">None</option>
                            </select>
                        </div>
                        <div class="col-12 col-md-12">
                            <label for="class_org" class="form-label">Membership in the Classroom Organization (last position before finishing SHS)<span class="text-muted"></span></label>
                            <select class="form-control form-select" id="class_org" placeholder="" name="class_org" required="">
                                <option value="none">--Select--</option>
                                <?php
                                    require_once '../classes/reference.class.php';
                                    $ref_obj = new Reference();
                                    $ref = $ref_obj->get_class_org();
                                    foreach($ref as $row){
                                ?>
                                        <option value="<?=$row['classorg']?>"><?=$row['classorg']?></option>
                                <?php
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="col-12 col-md-12">
                            <label for="scg_org" class="form-label">Membership in the Student Supreme Council/Government (last position before finishing SHS)<span class="text-muted"></span></label>
                            <select class="form-control form-select" id="scg_org" placeholder="" name="scg_org" required="">
                                <option value="none">--Select--</option>
                                <?php
                                    require_once '../classes/reference.class.php';
                                    $ref_obj = new Reference();
                                    $ref = $ref_obj->get_scg_org();
                                    foreach($ref as $row){
                                ?>
                                        <option value="<?=$row['scgorg']?>"><?=$row['scgorg']?></option>
                                <?php
                                    }
                                ?>
                            </select>
                        </div>
                        <h5 class="col-12 fw-bold my-4 mb-1">SHS Report Card/Form 138</h5>
                        <div class="col-12 col-md-6">
                            <label for="gpa_1st" class="form-label">GPA (1st and 2nd Periodic Rating)<span class="text-muted"></span></label>
                            <input type="number" class="form-control" id="gpa_1st" placeholder="" name="gpa_1st" required="" step="any">
                        </div>
                        <div class="col-12 col-md-6">
                            <label for="gpa_2nd" class="form-label">GPA (3rd and 4th Periodic Rating)<span class="text-muted"></span></label>
                            <input type="number" class="form-control" id="gpa_2nd" placeholder="" name="gpa_2nd" required="" step="any">
                        </div>
                        <div class="col-12">
                            <label for="upload-cet" class="form-label">Photo or scanned copy of SHS Report Card (Accepted files: jpg, jpeg, png)<span class="text-muted"></span></label>
                            <div class="card-profile p-4 justify-content-center upload-container">
                                <input class="upload-cet custom-file-input d-none" type="file" name="upload_shs_card" id="upload_shs_card_hidden">
                                <a class="btn btn-outline-secondary custom-btn" id="upload_shs_card">Upload SHS Card Photo</a>
                            </div>
                        </div>
                        <div class="col-12 m-0">
                            <hr class="my-4 mx-auto w-">
                        </div>
                        <div class="col-6 text-start m-0">
                            <a class="btn btn-lg btn-success btn-font w-100 back-button m-0" name="shs" id="shs">
                                <i class="fa-solid fa-arrow-left-long pe-1"></i>
                                Back
                            </a>
                        </div>
                        <div class="col-6 text-end m-0">
                            <button class="btn btn-lg btn-success background-color-green w-100 next-button btn-font m-0" type="submit" value="Next" name="shs" id="shs">
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