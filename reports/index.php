<?php

    //resume session here to fetch session values
    session_start();
    /*
        if user is not login then redirect to login page,
        this is to prevent users from accessing pages that requires
        authentication such as the dashboard
    */
    if (!isset($_SESSION['user_type']) || $_SESSION['user_type'] == 'student'){
        header('location: ../control-panel/login.php');
    }
    //if the above code is false then html below will be displayed

    require_once '../tools/variables.php';
    $page_title = 'GreenScreen | Reports';
    $reports = 'active';

    require_once '../includes/header.php';
?>
<body>
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
                    <h5 class="col-12 fw-bold mb-1 mt-3 mt-md-0">Reports</h5>
                    <div class="card mt-3">
                        <div class="card-header">
                            Filter Report
                        </div>
                        <div class="card-body p-3">
                            <div class="row g-2">
                                <div class="form-group col-6 col-sm-4 col-md-3 col-lg-2">
                                    <label for="schoolyear" class="form-label">School Year<span class="text-muted"></span></label>
                                    <select name="schoolyear" id="schoolyear" class="form-select me-md-2">
                                        <option value="">All School Year</option>
                                        <option value="2020-2021">2020-2021</option>
                                        <option value="2021-2022">2021-2022</option>
                                    </select>
                                </div>
                                <div class="form-group col-6 col-sm-4 col-md-3 col-lg-2">
                                    <label for="program" class="form-label">Program<span class="text-muted"></span></label>
                                    <select name="program" id="program" class="form-select me-md-2">
                                        <option value="">All Program</option>
                                        <option value="BSCS">BSCS</option>
                                        <option value="BSIT">BSIT</option>
                                    </select>
                                </div>
                                <div class="form-group col-6 col-sm-4 col-md-3 col-lg-2">
                                    <label for="admission_status" class="form-label">Admission Status<span class="text-muted"></span></label>
                                    <select name="admission_status" id="admission_status" class="form-select me-md-2">
                                        <option value="">All Admission Status</option>
                                        <option value="Pending">Pending</option>
                                        <option value="Interview">Interview</option>
                                        <option value="Ranking">Ranking</option>
                                        <option value="Waiting List">Waiting List</option>
                                        <option value="Qualified">Qualified</option>
                                        <option value="Withdrawn">Withdrawn</option>
                                    </select>
                                </div>
                                <div class="form-group col-6 col-sm-4 col-md-3 col-lg-2">
                                    <label for="interviewer" class="form-label">Interviewer<span class="text-muted"></span></label>
                                    <select name="interviewer" id="interviewer" class="form-select me-md-2">
                                        <option value="">All Interviewer</option>
                                        <option value="Jaydee Ballaho">Jaydee Ballaho</option>
                                        <option value="Gin Freecs">Gin Freecs</option>
                                    </select>
                                </div>
                                <div class="form-group col-6 col-sm-4 col-md-3 col-lg-2">
                                    <label for="prediction" class="form-label">Prediction<span class="text-muted"></span></label>
                                    <select name="prediction" id="prediction" class="form-select me-md-2">
                                        <option value="">All Prediction</option>
                                        <option value="2020-2021">Successful</option>
                                        <option value="2021-2022">Struggling</option>
                                    </select>
                                </div>
                                <div class="form-group col-6 col-sm-4 col-md-3 col-lg-2">
                                    <label for="actual" class="form-label">Actual Results<span class="text-muted"></span></label>
                                    <select name="actual" id="actual" class="form-select me-md-2">
                                        <option value="">All Actual Result</option>
                                        <option value="2020-2021">Successful</option>
                                        <option value="2021-2022">Struggling</option>
                                    </select>
                                </div>
                                <div class="form-group col-6 col-sm-4 col-md-3 col-lg-2">
                                    <label for="cc101" class="form-label">CC101 Grade<span class="text-muted"></span></label>
                                    <select name="cc101" id="cc101" class="form-select me-md-2">
                                        <option value="">All CC101 Grade</option>
                                        <option value="1.0">1.0</option>
                                        <option value="1.25">1.25</option>
                                        <option value="1.50">1.50</option>
                                        <option value="1.75">1.75</option>
                                        <option value="1.0">2.0</option>
                                        <option value="1.0">2.25</option>
                                        <option value="1.0">2.50</option>
                                        <option value="1.0">2.75</option>
                                        <option value="1.0">3.0</option>
                                        <option value="1.0">5.0</option>
                                        <option value="1.0">INC</option>
                                        <option value="1.0">AW</option>
                                        <option value="1.0">UW</option>
                                    </select>
                                </div>
                                <div class="form-group col-6 col-sm-4 col-md-3 col-lg-2">
                                    <label for="cc102" class="form-label">CC102 Grade<span class="text-muted"></span></label>
                                    <select name="cc102" id="cc102" class="form-select me-md-2">
                                        <option value="">All CC102 Grade</option>
                                        <option value="1.0">1.0</option>
                                        <option value="1.25">1.25</option>
                                        <option value="1.50">1.50</option>
                                        <option value="1.75">1.75</option>
                                        <option value="1.0">2.0</option>
                                        <option value="1.0">2.25</option>
                                        <option value="1.0">2.50</option>
                                        <option value="1.0">2.75</option>
                                        <option value="1.0">3.0</option>
                                        <option value="1.0">5.0</option>
                                        <option value="1.0">INC</option>
                                        <option value="1.0">AW</option>
                                        <option value="1.0">UW</option>
                                    </select>
                                </div>
                                <div class="form-group col-6 col-sm-4 col-md-3 col-lg-2">
                                    <label for="student_type" class="form-label">Student Type<span class="text-muted"></span></label>
                                    <select name="student_type" id="student_type" class="form-select me-md-2">
                                        <option value="">All Student Type</option>
                                        <option value="New Student">New Student</option>
                                        <option value="Shiftee">Shiftee</option>
                                        <option value="Transferee">Transferee</option>
                                    </select>
                                </div>
                                <div class="form-group col-6 col-sm-4 col-md-3 col-lg-2">
                                    <label for="sex" class="form-label">Sex<span class="text-muted"></span></label>
                                    <select name="sex" id="sex" class="form-select me-md-2">
                                        <option value="">All Sex</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                                <div class="form-group col-6 col-sm-4 col-md-3 col-lg-2">
                                    <label for="region" class="form-label">All Region<span class="text-muted"></span></label>
                                    <select name="region" id="region" class="form-select me-md-2">
                                        <option value="">All Region</option>
                                        <?php
                                            require_once '../classes/reference.class.php';
                                            $ref_obj = new Reference();
                                            $ref = $ref_obj->get_region();
                                            foreach($ref as $row){
                                        ?>
                                                <option value="<?=$row['regCode']?>"><?=$row['regDesc']?></option>
                                        <?php
                                            }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group col-6 col-sm-4 col-md-3 col-lg-2">
                                    <label for="province" class="form-label">Province<span class="text-muted"></span></label>
                                    <select class="form-control form-select" id="province" placeholder="" name="province" required="">
                                        <option value="">All Province</option>
                                    </select>
                                </div>
                                <div class="form-group col-6 col-sm-4 col-md-3 col-lg-2">
                                    <label for="city" class="form-label">City/Municipality<span class="text-muted"></span></label>
                                    <select class="form-control form-select" id="city" placeholder="" name="city" required="">
                                        <option value="">All City</option>
                                    </select>
                                </div>
                                <div class="form-group col-6 col-sm-4 col-md-3 col-lg-2">
                                    <label for="barangay" class="form-label">Barangay<span class="text-muted"></span></label>
                                    <select class="form-control form-select" id="barangay" placeholder="" name="barangay" required="">
                                        <option value="">All Barangay</option>
                                    </select>
                                </div>
                                <div class="form-group col-6 col-sm-4 col-md-3 col-lg-2">
                                    <label for="shsstrand" class="form-label">SHS Strand<span class="text-muted"></span></label>
                                    <select class="form-control form-select" id="shsstrand" placeholder="" name="shsstrand" required="">
                                        <option value="">All SHS Strand</option>
                                    </select>
                                </div>
                                <div class="form-group col-6 col-sm-4 col-md-3 col-lg-2">
                                    <label for="shsgpa" class="form-label">SHS GPA<span class="text-muted"></span></label>
                                    <select class="form-control form-select" id="shsgpa" placeholder="" name="shsgpa" required="">
                                        <option value="">All SHS GPA</option>
                                    </select>
                                </div>
                                <div class="form-group col-6 col-sm-4 col-md-3 col-lg-2">
                                    <label for="cet" class="form-label">CET OAPR<span class="text-muted"></span></label>
                                    <select class="form-control form-select" id="cet" placeholder="" name="cet" required="">
                                        <option value="">All CET OAPR</option>
                                    </select>
                                </div>
                                <div class="form-group col-6 col-sm-4 col-md-3 col-lg-2 d-flex">
                                    <a class="report-reset col-12 mt-auto btn btn-secondary">Reset Filter</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive py-3 table-container">
                        
                    </div>
                </div>
            </main>
            <!-- Modal -->
        </div>
    </div>
    <script>
        function load(status){
            if(status == 'pending'){
                $.ajax({
                    type: "GET",
                    url: 'view.php',
                    success: function(result)
                    {
                        $('div.table-responsive').html(result);
                        dataTable = $("#table-reports").DataTable({
                            dom: 'Brtp',
                            responsive: true,
                            fixedHeader: true,
                            buttons: [
                                {
                                    extend: 'excel',
                                    text: 'Excel',
                                    className: 'border-white'
                                },
                                {
                                    extend: 'pdf',
                                    text: 'PDF',
                                    className: 'border-white'
                                },
                                {
                                    extend: 'print',
                                    text: 'Print',
                                    className: 'border-white'
                                }
                            ],
                        });
                        dataTable.buttons().container().appendTo($('#MyButtons'));
                        
                        $('input#keyword').on('input', function(e){
                            var status = $(this).val();
                            dataTable.columns([1]).search(status).draw();
                        });
                        $('select#student_type').on('change', function(e){
                            var status = $(this).val();
                            dataTable.columns([4]).search(status).draw();
                        });
                        $('select#program').on('change', function(e){
                            var status = $(this).val();
                            dataTable.columns([3]).search(status).draw();
                        });
                    },
                    error: function(XMLHttpRequest, textStatus, errorThrown) { 
                        alert("Status: " + textStatus); alert("Error: " + errorThrown); 
                    }  
                });
            }
        }
        $(document).ready(function(){
            load('pending');
        });
    </script>
</body>
</html>