<?php

    //resume session here to fetch session values
    session_start();
    /*
        if user is not login then redirect to login page,
        this is to prevent users from accessing pages that requires
        authentication such as the dashboard
    */
    if (!isset($_SESSION['user_type']) || $_SESSION['user_type'] != 'admin'){
        header('location: ../control-panel/login.php');
    }
    //if the above code is false then html below will be displayed

    require_once '../tools/variables.php';
    $page_title = 'GreenScreen | Settings';
    $settings = 'active';

    require_once '../includes/header.php';
?>
<body>
    <!-- Header -->
    <?php
        require_once '../includes/topnav_admin.php';
    ?>
    <div class="container-fluid">
        <div class="row">
            <?php
                require_once '../includes/sidebar.php';
            ?>
            <main class="col-md-9 ms-sm-auto col-lg-9 col-xl-10 p-md-4">
                <div class="w-100">
                    <h5 class="col-12 fw-bold mb-3 mt-3 mt-md-0">School Year Settings</h5>
                    <form class="needs-validation" action="" method="post" id="form-settings">
                        <div class="row g-2">
                            <div class="col-12 col-md-4 col-lg-3">
                                <label for="activeschoolyear" class="form-label">Active School Year<span class="text-muted"></span></label>
                                <input type="text" disabled="true" class="form-control" value="2023-2024" id="activeschoolyear" placeholder="" name="activeschoolyear">
                            </div>
                            <div class="col-12 col-md-4 col-lg-3">
                                <label for="startschoolyear" class="form-label">Start of School Year<span class="text-muted"></span></label>
                                <input type="number" class="form-control" id="startschoolyear" placeholder="" name="startschoolyear" required="">
                            </div>
                            <div class="col-12 col-md-4 col-lg-3">
                                <label for="endschoolyear" class="form-label">End of School Year<span class="text-muted"></span></label>
                                <input type="number" class="form-control" id="endschoolyear" placeholder="" name="endschoolyear" required="">
                            </div>
                            <h5 class="col-12 fw-bold mt-4 mb-1">Admission Period Settings</h5>
                            <div class="col-12 col-md-4 col-lg-3">
                                <label for="currentadmissionperiod" class="form-label">Admission Period<span class="text-muted"></span></label>
                                <input type="text" disabled="true" class="form-control" value="Jul 01, 2023 - Aug 01, 2023" id="currentadmissionperiod" placeholder="" name="currentadmissionperiod">
                            </div>
                            <div class="col-12 col-md-4 col-lg-3">
                                <label for="startdate" class="form-label">Start Date<span class="text-muted"></span></label>
                                <input type="date" class="form-control" id="startdate" placeholder="" name="startdate" required="">
                            </div>
                            <div class="col-12 col-md-4 col-lg-3">
                                <label for="enddate" class="form-label">End Date<span class="text-muted"></span></label>
                                <input type="date" class="form-control" id="enddate" placeholder="" name="enddate" required="">
                            </div>
                            <h5 class="col-12 fw-bold mt-4 mb-1">Automation Settings</h5>
                            <div class="form-check form-switch col-12 col-md-12">
                                <input class="form-check-input form-control" type="checkbox" id="automateddecision" name="automateddecision" checked>
                                <label class="form-check-label form-label" for="automateddecision">Use Automated Admission Decision</label>
                            </div>
                            <div class="col-12 m-0">
                                <hr class="my-4 mx-auto w-">
                            </div>
                            <h5 class="col-12 fw-bold mt-0 mb-1">BSCS Admission Criteria</h5>
                            <div class="col-12 col-md-4 col-lg-3">
                                <label for="cetscore" class="form-label">Min. CET Score<span class="text-muted"></span></label>
                                <input type="number" class="form-control" id="cetscore" placeholder="" name="cetscore" required="" value="80">
                            </div>
                            <div class="col-12 col-md-4 col-lg-3">
                                <label for="cetweights" class="form-label">Weights<span class="text-muted"></span></label>
                                <div class="input-group">
                                    <input type="number" class="form-control" id="cetweights" placeholder="" name="cetweights" required="" value="40">
                                    <span class="input-group-text">%</span>
                                </div>
                            </div>
                            <div class="col-12 col-md-4 col-lg-3">
                                <label for="includecet-label" class="form-label col-12">Include in Ranking?<span class="text-muted"></span></label>
                                <div class="form-check form-check-inline mt-1">
                                    <input class="form-check-input" type="radio" name="includecet" id="includecet-yes" value="Yes" checked>
                                    <label class="form-check-label" for="includecet-yes">Yes</label>
                                </div>
                                <div class="form-check form-check-inline mt-1">
                                    <input class="form-check-input" type="radio" name="includecet" id="includecet-no" value="No">
                                    <label class="form-check-label" for="includecet-no">No</label>
                                </div>
                            </div>
                            <div class="col-12"></div>
                            <div class="col-12 col-md-4 col-lg-3">
                                <label for="shsgpa" class="form-label">Min. SHS GPA<span class="text-muted"></span></label>
                                <input type="number" class="form-control" id="shsgpa" placeholder="" name="shsgpa" required="" value="85">
                            </div>
                            <div class="col-12 col-md-4 col-lg-3">
                                <label for="shsgpaweights" class="form-label">Weights<span class="text-muted"></span></label>
                                <div class="input-group">
                                    <input type="number" class="form-control" id="shsgpaweights" placeholder="" name="shsgpaweights" required="" value="30">
                                    <span class="input-group-text">%</span>
                                </div>
                            </div>
                            <div class="col-12 col-md-4 col-lg-3">
                                <label for="includeshs-label" class="form-label col-12">Include in Ranking?<span class="text-muted"></span></label>
                                <div class="form-check form-check-inline mt-1">
                                    <input class="form-check-input" type="radio" name="includeshs" id="includeshs-yes" value="Yes" checked>
                                    <label class="form-check-label" for="includeshs-yes">Yes</label>
                                </div>
                                <div class="form-check form-check-inline mt-1">
                                    <input class="form-check-input" type="radio" name="includeshs" id="includeshs-no" value="No">
                                    <label class="form-check-label" for="includeshs-no">No</label>
                                </div>
                            </div>
                            <div class="col-12"></div>
                            <div class="col-12 col-md-4 col-lg-3">
                                <label for="maxscore" class="form-label">Max. Interview Score<span class="text-muted"></span></label>
                                <input type="number" class="form-control" id="maxscore" placeholder="" name="maxscore" required="" value="100">
                            </div>
                            <div class="col-12 col-md-4 col-lg-3">
                                <label for="interview" class="form-label">Interview Weights<span class="text-muted"></span></label>
                                <div class="input-group">
                                    <input type="number" class="form-control" id="interview" placeholder="" name="interview" required="" value="30">
                                    <span class="input-group-text">%</span>
                                </div>
                            </div>
                            <div class="col-12 col-md-4 col-lg-3">
                                <label for="includeinterview-label" class="form-label col-12">Include in Ranking?<span class="text-muted"></span></label>
                                <div class="form-check form-check-inline mt-1">
                                    <input class="form-check-input" type="radio" name="includeinterview" id="includeinterview-yes" value="Yes" checked>
                                    <label class="form-check-label" for="includeinterview-yes">Yes</label>
                                </div>
                                <div class="form-check form-check-inline mt-1">
                                    <input class="form-check-input" type="radio" name="includeinterview" id="includeinterview-no" value="No">
                                    <label class="form-check-label" for="includeinterview-no">No</label>
                                </div>
                            </div>
                            <div class="col-12 m-0">
                                <hr class="my-4 mx-auto w-">
                            </div>
                            <h5 class="col-12 fw-bold mt-0 mb-1">BSIT Admission Criteria</h5>
                            <div class="col-12 col-md-4 col-lg-3">
                                <label for="bsitcetscore" class="form-label">Min. CET Score<span class="text-muted"></span></label>
                                <input type="number" class="form-control" id="bsitcetscore" placeholder="" name="bsitcetscore" required="" value="70">
                            </div>
                            <div class="col-12 col-md-4 col-lg-3">
                                <label for="bsitcetweights" class="form-label">Weights<span class="text-muted"></span></label>
                                <div class="input-group">
                                    <input type="number" class="form-control" id="bsitcetweights" placeholder="" name="bsitcetweights" required="" value="40">
                                    <span class="input-group-text">%</span>
                                </div>
                            </div>
                            <div class="col-12 col-md-4 col-lg-3">
                                <label for="bsitincludecet-label" class="form-label col-12">Include in Ranking?<span class="text-muted"></span></label>
                                <div class="form-check form-check-inline mt-1">
                                    <input class="form-check-input" type="radio" name="bsitincludecet" id="bsitincludecet-yes" value="Yes" checked>
                                    <label class="form-check-label" for="bsitincludecet-yes">Yes</label>
                                </div>
                                <div class="form-check form-check-inline mt-1">
                                    <input class="form-check-input" type="radio" name="bsitincludecet" id="bsitincludecet-no" value="No">
                                    <label class="form-check-label" for="bsitincludecet-no">No</label>
                                </div>
                            </div>
                            <div class="col-12"></div>
                            <div class="col-12 col-md-4 col-lg-3">
                                <label for="bsitshsgpa" class="form-label">Min. SHS GPA<span class="text-muted"></span></label>
                                <input type="number" class="form-control" id="bsitshsgpa" placeholder="" name="bsitshsgpa" required="" value="85">
                            </div>
                            <div class="col-12 col-md-4 col-lg-3">
                                <label for="bsitshsgpaweights" class="form-label">Weights<span class="text-muted"></span></label>
                                <div class="input-group">
                                    <input type="number" class="form-control" id="bsitshsgpaweights" placeholder="" name="shsgpaweights" required="" value="30">
                                    <span class="input-group-text">%</span>
                                </div>
                            </div>
                            <div class="col-12 col-md-4 col-lg-3">
                                <label for="bsitincludeshs-label" class="form-label col-12">Include in Ranking?<span class="text-muted"></span></label>
                                <div class="form-check form-check-inline mt-1">
                                    <input class="form-check-input" type="radio" name="bsitincludeshs" id="bsitincludeshs-yes" value="Yes" checked>
                                    <label class="form-check-label" for="bsitincludeshs-yes">Yes</label>
                                </div>
                                <div class="form-check form-check-inline mt-1">
                                    <input class="form-check-input" type="radio" name="bsitincludeshs" id="bsitincludeshs-no" value="No">
                                    <label class="form-check-label" for="bsitincludeshs-no">No</label>
                                </div>
                            </div>
                            <div class="col-12"></div>
                            <div class="col-12 col-md-4 col-lg-3">
                                <label for="bsitmaxscore" class="form-label">Max. Interview Score<span class="text-muted"></span></label>
                                <input type="number" class="form-control" id="bsitmaxscore" placeholder="" name="bsitmaxscore" required="" value="100">
                            </div>
                            <div class="col-12 col-md-4 col-lg-3">
                                <label for="bsitinterview" class="form-label">Interview Weights<span class="text-muted"></span></label>
                                <div class="input-group">
                                    <input type="number" class="form-control" id="bsitinterview" placeholder="" name="bsitinterview" required="" value="30">
                                    <span class="input-group-text">%</span>
                                </div>
                            </div>
                            <div class="col-12 col-md-4 col-lg-3">
                                <label for="bsitincludeinterview-label" class="form-label col-12">Include in Ranking?<span class="text-muted"></span></label>
                                <div class="form-check form-check-inline mt-1">
                                    <input class="form-check-input" type="radio" name="bsitincludeinterview" id="bsitincludeinterview-yes" value="Yes" checked>
                                    <label class="form-check-label" for="bsitincludeinterview-yes">Yes</label>
                                </div>
                                <div class="form-check form-check-inline mt-1">
                                    <input class="form-check-input" type="radio" name="bsitincludeinterview" id="bsitincludeinterview-no" value="No">
                                    <label class="form-check-label" for="bsitincludeinterview-no">No</label>
                                </div>
                            </div>
                            <div class="col-12 m-0">
                                <hr class="my-4 mx-auto w-">
                            </div>
                            <div class="col-12 pt-2 pt-xl-3 mb-3 mb-xl-5 mt-0">
                                <input class="btn btn-lg btn-success background-color-green btn-font apply-settings" type="submit" value="Apply New Settings" name="login">
                            </div>
                        </div>
                    </form>
                </div>
            </main>
        </div>
    </div>
</body>
    <script>
        $(document).ready(function(){
        });
    </script>
</html>