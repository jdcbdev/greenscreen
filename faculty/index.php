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
    $page_title = 'GreenScreen | Faculty';
    $faculty = 'active';

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
                    <h5 class="col-12 fw-bold mb-1 mt-3 mt-md-0">Faculty</h5>
                    <div class="table-responsive py-3 table-container">
                        
                    </div>
                    <a type="button" class="fab" title="Add New Faculty" data-bs-toggle="modal" data-bs-target="#myModal">
                        <i class="fa fa-plus"></i>
                    </a>
                </div>
            </main>
            <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add New Faculty</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form class="needs-validation" action="" method="post" name="add-faculty" id="add-faculty">
                            <div class="row g-3">
                                <div class="col-12 col-md-6">
                                    <label for="firstname" class="form-label">First Name<span class="text-muted"></span></label>
                                    <input type="text" class="form-control" id="firstname" placeholder="" name="firstname" required="">
                                </div>
                                <div class="col-12 col-md-6">
                                    <label for="lastname" class="form-label">Last Name<span class="text-muted"></span></label>
                                    <input type="text" class="form-control" id="lastname" placeholder="" name="lastname" required="">
                                </div>
                                <div class="col-12 col-md-6">
                                    <label for="email" class="form-label">School or Personal Email<span class="text-muted"></span></label>
                                    <input type="email" class="form-control" id="email" placeholder="" name="email" required="">
                                </div>
                                <div class="col-12 col-md-6">
                                    <label for="rank" class="form-label">Academic Rank<span class="text-muted"></span></label>
                                    <select type="text" class="form-control form-select" id="rank" placeholder="" name="rank" required="">
                                        <option value="none">--Select--</option>
                                        <?php
                                            require_once '../classes/reference.class.php';
                                            $ref_obj = new Reference();
                                            $ref = $ref_obj->get_academic_rank();
                                            foreach($ref as $row){
                                        ?>
                                                <option value="<?=$row['rank']?>"><?=$row['rank']?></option>
                                        <?php
                                            }
                                        ?>
                                    </select>
                                </div>
                                <div class="col-12 col-md-6">
                                    <label for="deptname" class="form-label">Department<span class="text-muted"></span></label>
                                    <select type="text" class="form-control form-select" id="deptname" placeholder="" name="deptname" required="">
                                        <option value="none">--Select--</option>
                                        <?php
                                            require_once '../classes/reference.class.php';
                                            $ref_obj = new Reference();
                                            $ref = $ref_obj->get_college_department();
                                            foreach($ref as $row){
                                        ?>
                                                <option value="<?=$row['deptname']?>"><?=$row['deptname']?></option>
                                        <?php
                                            }
                                        ?>
                                    </select>
                                </div>
                                <div class="col-12 col-md-6">
                                    <label for="role" class="form-label">Admission Role<span class="text-muted"></span></label>
                                    <select type="text" class="form-control form-select" id="role" placeholder="" name="role" required="">
                                        <option value="none">--Select--</option>
                                        <?php
                                            require_once '../classes/reference.class.php';
                                            $ref_obj = new Reference();
                                            $ref = $ref_obj->get_admission_role();
                                            foreach($ref as $row){
                                        ?>
                                                <option value="<?=$row['role']?>"><?=$row['role']?></option>
                                        <?php
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary background-color-green">Add New Faculty</button>
                    </div>
                    </div>
                </div>
            </div>
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
                        dataTable = $("#table-faculty").DataTable({
                            "dom": 'rtip',
                            responsive: true
                        });
                        $('input#keyword').on('input', function(e){
                            var status = $(this).val();
                            dataTable.columns([1]).search(status).draw();
                        });
                        $('select#department').on('change', function(e){
                            var status = $(this).val();
                            dataTable.columns([4]).search(status).draw();
                        });
                        $('select#role').on('change', function(e){
                            var status = $(this).val();
                            dataTable.columns([5]).search(status).draw();
                        });
                        new $.fn.dataTable.FixedHeader(dataTable);
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