<div id='economic-status' class="col-12 col-md-11 profile-screen mt-0 mt-md-3 mx-auto" style="display:none;">
    <div class="mt-3 mt-md-0">
        <div class="card-profile p-4 mt-3">
            <div class="row">
                <h5 class="col-12 fw-bold mb-3">Family Economic Status</h5>
                <form class="needs-validation" action="" method="post" name="economic-status" id="economic-status">
                    <div class="row g-3">
                        <div class="col-12 col-md-12">
                            <label for="father_acads" class="form-label">What is your father's highest academic degree or level of education? If he is currently enrolled, the highest degree he earned.<span class="text-muted"></span></label>
                            <select class="form-control" id="father_acads" placeholder="" name="father_acads" required="">
                                <option value="">--Select--</option>
                                <?php
                                    require_once '../classes/reference.class.php';
                                    $ref_obj = new Reference();
                                    $ref = $ref_obj->get_education();
                                    foreach($ref as $row){
                                ?>
                                        <option value="<?=$row['education']?>"><?=$row['education']?></option>
                                <?php
                                    }
                                ?>
                                <option value="Not Applicable (no work, not known, deceased, etc.)">Not Applicable (no work, not known, deceased, etc.)</option>
                            </select>
                        </div>
                        <div class="col-12 col-md-12">
                            <label for="father_employment_status" class="form-label">Which of the following categories best describes your father's employment status?<span class="text-muted"></span></label>
                            <select class="form-control" id="father_employment_status" placeholder="" name="father_employment_status" required="">
                                <option value="">--Select--</option>
                                <?php
                                    require_once '../classes/reference.class.php';
                                    $ref_obj = new Reference();
                                    $ref = $ref_obj->get_employment();
                                    foreach($ref as $row){
                                ?>
                                        <option value="<?=$row['employment']?>"><?=$row['employment']?></option>
                                <?php
                                    }
                                ?>
                                <option value="Not Applicable (no work, not known, deceased, etc.)">Not Applicable (no work, not known, deceased, etc.)</option>
                            </select>
                        </div>
                        <div class="col-12 col-md-12">
                            <label for="father_employment_work" class="form-label">Which of the following best describes your father's current occupation?<span class="text-muted"></span></label>
                            <select class="form-control" id="father_employment_work" placeholder="" name="father_employment_work" required="">
                                <option value="">--Select--</option>
                                <?php
                                    require_once '../classes/reference.class.php';
                                    $ref_obj = new Reference();
                                    $ref = $ref_obj->get_work();
                                    foreach($ref as $row){
                                ?>
                                        <option value="<?=$row['occupation']?>"><?=$row['occupation']?></option>
                                <?php
                                    }
                                ?>
                                <option value="Not Applicable (no work, not known, deceased, etc.)">Not Applicable (no work, not known, deceased, etc.)</option>
                            </select>
                        </div>
                        <div class="col-12 col-md-12">
                            <label for="mother_acads" class="form-label">What is your mother's highest academic degree or level of education? If she is currently enrolled, the highest degree she earned.<span class="text-muted"></span></label>
                            <select class="form-control" id="mother_acads" placeholder="" name="mother_acads" required="">
                                <option value="">--Select--</option>
                                <?php
                                    require_once '../classes/reference.class.php';
                                    $ref_obj = new Reference();
                                    $ref = $ref_obj->get_education();
                                    foreach($ref as $row){
                                ?>
                                        <option value="<?=$row['education']?>"><?=$row['education']?></option>
                                <?php
                                    }
                                ?>
                                <option value="Not Applicable (no work, not known, deceased, etc.)">Not Applicable (no work, not known, deceased, etc.)</option>
                            </select>
                        </div>
                        <div class="col-12 col-md-12">
                            <label for="mother_employment_status" class="form-label">Which of the following categories best describes your mother's employment status?<span class="text-muted"></span></label>
                            <select class="form-control" id="mother_employment_status" placeholder="" name="mother_employment_status" required="">
                                <option value="none">--Select--</option>
                                <?php
                                    require_once '../classes/reference.class.php';
                                    $ref_obj = new Reference();
                                    $ref = $ref_obj->get_employment();
                                    foreach($ref as $row){
                                ?>
                                        <option value="<?=$row['employment']?>"><?=$row['employment']?></option>
                                <?php
                                    }
                                ?>
                                <option value="Not Applicable (no work, not known, deceased, etc.)">Not Applicable (no work, not known, deceased, etc.)</option>
                            </select>
                        </div>
                        <div class="col-12 col-md-12">
                            <label for="mother_employment_work" class="form-label">Which of the following best describes your mother's current occupation?<span class="text-muted"></span></label>
                            <select class="form-control" id="mother_employment_work" placeholder="" name="mother_employment_work" required="">
                                <option value="">--Select--</option>
                                <?php
                                    require_once '../classes/reference.class.php';
                                    $ref_obj = new Reference();
                                    $ref = $ref_obj->get_work();
                                    foreach($ref as $row){
                                ?>
                                        <option value="<?=$row['occupation']?>"><?=$row['occupation']?></option>
                                <?php
                                    }
                                ?>
                                <option value="Not Applicable (no work, not known, deceased, etc.)">Not Applicable (no work, not known, deceased, etc.)</option>
                            </select>
                        </div>
                        <h5 class="col-12 fw-bold my-4 mb-1">Availability of Resources</h5>
                        <div class="col-12 col-md-12">
                            <label for="laptop" class="form-label">Do you have a personal computer or laptop?<span class="text-muted"></span></label>
                            <select class="form-control" id="laptop" placeholder="" name="laptop" required="">
                                <option value="none">--Select--</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                                <option value="Planning to purchase">Planning to purchase</option>
                            </select>
                        </div>
                        <div class="col-12 col-md-12">
                            <label for="internet" class="form-label">What type of internet connection do you have at home?<span class="text-muted"></span></label>
                            <select class="form-control" id="internet" placeholder="" name="internet" required="">
                                <option value="none">--Select--</option>
                                <option value="Post-paid plan(Unlimited Data Subscription to PLDT, GLOBE, SMART, Sky, etc.)">Post-paid plan(Unlimited Data Subscription to PLDT, GLOBE, SMART, Sky, etc.)</option>
                                <option value="Pre-paid plan(Limited Data Subscription)">Pre-paid plan(Limited Data Subscription)</option>
                                <option value="No internet subscription, including no access to internet connection at all">No internet subscription, including no access to internet connection at all</option>
                            </select>
                        </div>
                        <div class="col-12 m-0">
                            <hr class="my-4 mx-auto w-">
                        </div>
                        <div class="col-6 text-start m-0">
                            <a class="btn btn-lg btn-success btn-font w-100 back-button m-0" name="economic-status" id="economic-status">
                                <i class="fa-solid fa-arrow-left-long pe-1"></i>
                                Back
                            </a>
                        </div>
                        <div class="col-6 text-end m-0">
                            <button class="btn btn-lg btn-success background-color-green w-100 next-button btn-font m-0" type="submit" value="Next" name="economic-status" id="economic-status">
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