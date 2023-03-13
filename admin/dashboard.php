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
    $page_title = 'GreenScreen | Admin Dashboard';
    $dashboard = 'active';

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
            <main class="col-md-9 ms-sm-auto col-lg-9 col-xl-10 p-md-4 mt-3 mt-md-0">
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 align-items-stretch">
                    <div class="col d-flex flex-column">
                        <div class="card flex-grow-1">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title card-title-total">Total Applications</h5>
                                <p class="card-text card-text-number">500</p>
                                <p class="mb-0 mt-auto">
                                    <a class="view-all" href="">View All</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col d-flex flex-column">
                        <div class="card flex-grow-1">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title card-title-total">Accepted Applications</h5>
                                <p class="card-text card-text-number">250</p>
                                <p class="mb-0 mt-auto">
                                    <a class="view-all" href="">View All</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col d-flex flex-column">
                        <div class="card flex-grow-1">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title card-title-total">Rejected Applications</h5>
                                <p class="card-text card-text-number">100</p>
                                <p class="mb-0">
                                    <a class="view-all" href="">View All</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col d-flex flex-column">
                        <div class="card flex-grow-1">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title card-title-total">Pending Applications</h5>
                                <p class="card-text card-text-number">150</p>
                                <p class="mb-0">
                                    <a class="view-all" href="">Review Now</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row align-items-stretch">
                    <div class="col-12 col-md-4 my-4 d-flex flex-column">
                        <div class="card flex-grow-1">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title card-title-total">Total Predictions</h5>
                                <canvas id="status-chart-1"></canvas>
                                <p class="mb-0 mt-auto">
                                    <a class="view-all" href="">View Report</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-8 mb-4 mt-0 d-flex flex-column mt-md-4">
                        <div class="card flex-grow-1">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title card-title-total">Prediction VS Actual</h5>
                                <canvas id="status-chart-2"></canvas>
                                <p class="mb-0 mt-auto">
                                    <a class="view-all" href="">View Report</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row align-items-stretch">
                    <div class="col-12 col-md-6 mb-4 d-flex flex-column">
                        <div class="card flex-grow-1">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title card-title-total">CET OAPR</h5>
                                <canvas id="myChart"></canvas>
                                <p class="mb-0 mt-auto">
                                    <a class="view-all" href="">View Report</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 mb-4 mt-0 d-flex flex-column">
                        <div class="card flex-grow-1">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title card-title-total">SHS GPA</h5>
                                <canvas id="status-chart-3"></canvas>
                                <p class="mb-0 mt-auto">
                                    <a class="view-all" href="">View Report</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="table-responsive">
                        <table class="table table-hover responsive" id="table-dashboard-student">
                            <thead>
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">CET</th>
                                    <th scope="col">SHS GPA</th>
                                    <th scope="col">Application Date</th>
                                    <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1.</td>
                                    <td>Smith, John A.</td>
                                    <td>john.smith@abc.com</td>
                                    <td>87.4</td>
                                    <td>90.1</td>
                                    <td>Jun 12, 2023</td>
                                    <td><span class="approved">Approved</span></td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td>Lee, Jennifer S.</td>
                                    <td>jennifer.lee@xyz.com</td>
                                    <td>92.8</td>
                                    <td>87.9</td>
                                    <td>Aug 23, 2023</td>
                                    <td><span class="pending">Pending</span></td>
                                </tr>
                                <tr>
                                    <td>3.</td>
                                    <td>Garcia, Juan D.</td>
                                    <td>juan.garcia@mno.com</td>
                                    <td>88.2</td>
                                    <td>86.5</td>
                                    <td>May 17, 2023</td>
                                    <td><span class="pending">Pending</span></td>
                                </tr>
                                <tr>
                                    <td>4.</td>
                                    <td>Chung, Hyejin L.</td>
                                    <td>hyejin.chung@pqr.com</td>
                                    <td>95.0</td>
                                    <td>92.1</td>
                                    <td>Jul 19, 2023</td>
                                    <td><span class="approved">Approved</span></td>
                                </tr>
                                <tr>
                                    <td>5.</td>
                                    <td>Tanaka, Hiroshi K.</td>
                                    <td>hiroshi.tanaka@def.com</td>
                                    <td>86.3</td>
                                    <td>89.7</td>
                                    <td>May 29, 2023</td>
                                    <td><span class="interview">For Interview</span></td>
                                </tr>
                                <tr>
                                    <td>6.</td>
                                    <td>Kim, Minji H.</td>
                                    <td>minji.kim@lmn.com</td>
                                    <td>91.7</td>
                                    <td>90.5</td>
                                    <td>Jun 30, 2023</td>
                                    <td><span class="pending">Pending</span></td>
                                </tr>
                                <tr>
                                    <td>7.</td>
                                    <td>Nguyen, Minh T.</td>
                                    <td>minh.nguyen@rst.com</td>
                                    <td>93.5</td>
                                    <td>89.3</td>
                                    <td>Aug 08, 2023</td>
                                    <td><span class="interview">For Interview</span></td>
                                </tr>
                                <tr>
                                    <td>8.</td>
                                    <td>Sato, Yukihiro</td>
                                    <td>yukihiro.sato@uvw.com</td>
                                    <td>89.1</td>
                                    <td>87.2</td>
                                    <td>Jul 15, 2023</td>
                                    <td><span class="interview">For Interview</span></td>
                                </tr>
                                <tr>
                                    <td>9.</td>
                                    <td>Hernandez, Maria L.</td>
                                    <td>maria.hernandez@xyz.com</td>
                                    <td>94.2</td>
                                    <td>91.8</td>
                                    <td>May 11, 2023</td>
                                    <td><span class="pending">Pending</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </main>
        </div>
    </div>
<script>
    $(document).ready(function() {
        var table = $('#table-dashboard-student').DataTable({
            responsive: true,
            fixedHeader: true,
            "dom": 'rt'
        });
        
        // Pie
        var statusChart = new Chart(document.getElementById('status-chart-1'), {
            type: 'doughnut',
            data: {
            labels: ['Will Succeed', 'Will Struggle'],
                datasets: [{
                    data: [295, 124],
                    backgroundColor: ['#3A98B9', '#EB455F'],
                }]
                },
            options: {
                responsive: true,
                maintainAspectRatio: true
            }
        });

        // CET Line Graph
        var data = {
            labels: ['41-50','51-60', '61-70', '71-80', '81-90', '91-100'],
                datasets: [{
                    label: 'BSCS',
                    data: [ 0, 13, 40, 17, 26, 15],
                    borderColor: '#3A98B9',
                    fill: false
                },
                {
                    label: 'BSIT',
                    data: [ 0, 21, 28, 53, 22, 5],
                    borderColor: '#0E8388',
                    fill: false
                }]
        };

        // Get the canvas element
        var ctx = document.getElementById('myChart').getContext('2d');
        // Create the chart
        var myChart = new Chart(ctx, {
            type: 'line',
            data: data,
            options: {
                scales: {
                    x: {
                        title: {
                        display: true,
                        text: 'CET Scores'
                        }
                    },
                    y: {
                        title: {
                        display: true,
                        text: 'No. of Students'
                        }
                    }
                }
            }
        });

        //Bar Graph
        var statusChart = new Chart(document.getElementById('status-chart-2'), {
            type: 'bar',
            data: {
            labels: ['Successful (Predicted)', 'Successful (Actual)', 'Struggling (Predicted)', 'Struggling (Actual)'],
                    datasets: [{
                        label: 'Predicted VS Actual',
                        data: [95, 88, 23, 30],
                        backgroundColor: ['#3A98B9', '#3E54AC', '#EB455F', '#EB4747'],
                    }]
                },
            options: {
                responsive: true,
                maintainAspectRatio: true,
                scales: {
                    x: {
                        title: {
                        display: true,
                        text: ''
                        }
                    },
                    y: {
                        title: {
                        display: true,
                        text: 'No. of Students'
                        }
                    }
                }
            }
        });
 
        //SHS GPA Line Graph
        // Define your data
        var data = {
            labels: ['75-80','81-85', '86-90', '91-95', '96-100'],
                datasets: [{
                    label: 'BSCS',
                    data: [2, 14, 55, 24, 34, 15],
                    borderColor: '#3A98B9',
                    fill: false
                },
                {
                    label: 'BSIT',
                    data: [3, 11, 27, 46, 19, 8],
                    borderColor: '#0E8388',
                    fill: false
                }]
        };

        // Get the canvas element
        var ctx = document.getElementById('status-chart-3').getContext('2d');
        // Create the chart
        var myChart = new Chart(ctx, {
            type: 'line',
            data: data,
            options: {
                scales: {
                    x: {
                        title: {
                        display: true,
                        text: 'CET Scores'
                        }
                    },
                    y: {
                        title: {
                        display: true,
                        text: 'No. of Students'
                        }
                    }
                }
            }
        });

    });
</script>
</body>
</html>