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
    $page_title = 'GreenScreen | Application';
    $application = 'active';

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
                    <h5 class="col-12 fw-bold mb-3">Applications</h5>
                    <ul class="nav nav-tabs application">
                        <li class="nav-item active" id="li-pending">
                            <a class="nav-link">Pending <span class="counter">5</span></a>
                        </li>
                        <li class="nav-item" id="li-interview">
                            <a class="nav-link">Interview <span class="counter">2</span></a>
                        </li>
                        <li class="nav-item" id="li-ranking">
                            <a class="nav-link">Ranking</a>
                        </li>
                        <li class="nav-item" id="li-qualified">
                            <a class="nav-link">Qualified <span class="counter">12</span></a>
                        </li>
                        <li class="nav-item" id="li-all">
                            <a class="nav-link">All</a>
                        </li>
                    </ul>
                    <div class="table-responsive py-3 table-container">

                    </div>
                </div>
            </main>
            <?php require_once './pending.modal.php'; ?>
        </div>
    </div>
    <script>
        function load(status){
            if(status == 'pending'){
                $.ajax({
                    type: "GET",
                    url: 'pending.php',
                    success: function(result)
                    {
                        $('div.table-responsive').html(result);
                        dataTable = $("#table-pending").DataTable({
                            "dom": 'rtip',
                            responsive: true
                        });
                        $('input#keyword').on('input', function(e){
                            var status = $(this).val();
                            dataTable.columns([1]).search(status).draw();
                        });
                        $('select#student_type').on('change', function(e){
                            var status = $(this).val();
                            dataTable.columns([2]).search(status).draw();
                        });
                        $('select#program').on('change', function(e){
                            var status = $(this).val();
                            dataTable.columns([3]).search(status).draw();
                        });
                        new $.fn.dataTable.FixedHeader(dataTable);
                    },
                    error: function(XMLHttpRequest, textStatus, errorThrown) { 
                        alert("Status: " + textStatus); alert("Error: " + errorThrown); 
                    }  
                });
            }else if(status == 'interview'){
                $.ajax({
                    type: "GET",
                    url: 'interview.php',
                    success: function(result)
                    {
                        $('div.table-responsive').html(result);
                        dataTable = $("#table-interview").DataTable({
                            "dom": 'rtip',
                            responsive: true
                        });
                        $('input#keyword').on('input', function(e){
                            var status = $(this).val();
                            dataTable.columns([1]).search(status).draw();
                        });
                        $('select#student_type').on('change', function(e){
                            var status = $(this).val();
                            dataTable.columns([2]).search(status).draw();
                        });
                        $('select#program').on('change', function(e){
                            var status = $(this).val();
                            dataTable.columns([3]).search(status).draw();
                        });
                        new $.fn.dataTable.FixedHeader(dataTable);
                    },
                    error: function(XMLHttpRequest, textStatus, errorThrown) { 
                        alert("Status: " + textStatus); alert("Error: " + errorThrown); 
                    }  
                });
            }else if(status == 'ranking'){
                $.ajax({
                    type: "GET",
                    url: 'ranking.php',
                    success: function(result)
                    {
                        $('div.table-responsive').html(result);
                        dataTable = $("#table-ranking").DataTable({
                            "dom": 'rtip',
                            responsive: true
                        });
                        $('input#keyword').on('input', function(e){
                            var status = $(this).val();
                            dataTable.columns([1]).search(status).draw();
                        });
                        $('select#student_type').on('change', function(e){
                            var status = $(this).val();
                            dataTable.columns([2]).search(status).draw();
                        });
                        $('select#program').on('change', function(e){
                            var status = $(this).val();
                            dataTable.columns([3]).search(status).draw();
                        });
                        new $.fn.dataTable.FixedHeader(dataTable);
                    },
                    error: function(XMLHttpRequest, textStatus, errorThrown) { 
                        alert("Status: " + textStatus); alert("Error: " + errorThrown); 
                    }  
                });
            }else if(status == 'qualified'){
                $.ajax({
                    type: "GET",
                    url: 'qualified.php',
                    success: function(result)
                    {
                        $('div.table-responsive').html(result);
                        dataTable = $("#table-qualified").DataTable({
                            "dom": 'rtip',
                            responsive: true
                        });
                        $('input#keyword').on('input', function(e){
                            var status = $(this).val();
                            dataTable.columns([1]).search(status).draw();
                        });
                        $('select#student_type').on('change', function(e){
                            var status = $(this).val();
                            dataTable.columns([2]).search(status).draw();
                        });
                        $('select#program').on('change', function(e){
                            var status = $(this).val();
                            dataTable.columns([3]).search(status).draw();
                        });
                        new $.fn.dataTable.FixedHeader(dataTable);
                    },
                    error: function(XMLHttpRequest, textStatus, errorThrown) { 
                        alert("Status: " + textStatus); alert("Error: " + errorThrown); 
                    }  
                });
            }else if(status == 'all'){
                $.ajax({
                    type: "GET",
                    url: 'all.php',
                    success: function(result)
                    {
                        $('div.table-responsive').html(result);
                        dataTable = $("#table-all").DataTable({
                            "dom": 'rtip',
                            responsive: true
                        });
                        $('input#keyword').on('input', function(e){
                            var status = $(this).val();
                            dataTable.columns([1]).search(status).draw();
                        });
                        $('select#student_type').on('change', function(e){
                            var status = $(this).val();
                            dataTable.columns([2]).search(status).draw();
                        });
                        $('select#program').on('change', function(e){
                            var status = $(this).val();
                            dataTable.columns([3]).search(status).draw();
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
            $('ul.application .nav-item').on('click', function(){
                $('ul.application .nav-item').removeClass('active');
                $(this).addClass('active');
            });

            $('#li-pending').on('click', function(){
                load('pending');
            });

            $('#li-interview').on('click', function(){
                load('interview');
            });

            $('#li-ranking').on('click', function(){
                load('ranking');
            });

            $('#li-qualified').on('click', function(){
                load('qualified');
            });

            $('#li-all').on('click', function(){
                load('all');
            });

            $('#comments').on('change', function(){
                if ($(this).is(":checked")) {
                    $('div.comments').show();
                    $('#pending-submit').text("Return Application")
                }else{
                    $('div.comments').hide();
                    $('#pending-submit').text("Verify Application")
                }
            });

            $('div.photo-container').lightGallery({
                thumbnail: false,
                animateThumb: false,
                showThumbByDefault: false
            }); 
        });
    </script>
</body>
</html>