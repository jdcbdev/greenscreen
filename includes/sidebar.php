<nav id="sidebarMenu" class="col-md-3 col-lg-3 col-xl-2 d-md-block background-color-green sidebar collapse">
    <div class="position-sticky h-100">
        <ul class="nav flex-column">
            <?php
                if($_SESSION['user_type'] == 'admin'){
            ?>
            <li class="nav-item">
                <a href="../admin/dashboard.php" class="nav-link <?php echo $dashboard; ?>" title="Dashboard">
                    <i class='bx bx-grid-alt' ></i>
                    <span class="links-name">Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="../application" class="nav-link <?php echo $application; ?>" title="Applications">
                    <i class='bx bx-paper-plane'></i>
                    <span class="links-name">Applications</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="../monitoring" class="nav-link <?php echo $monitoring; ?>" title="Monitoring">
                    <i class='bx bx-notepad'></i>
                    <span class="links-name">Monitoring</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="../faculty" class="nav-link <?php echo $faculty; ?>" title="Faculty">
                    <i class='bx bx-group' ></i>
                    <span class="links-name">Faculty</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="../reports" class="nav-link <?php echo $reports; ?>" title="Reports">
                    <i class='bx bx-file'></i>
                    <span class="links-name">Reports</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="../archive" class="nav-link <?php echo $archive; ?>" title="Archive">
                    <i class='bx bx-box'></i>
                    <span class="links-name">Archive</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="../admin/settings.php" class="nav-link <?php echo $settings; ?>" title="Settings">
                    <i class='bx bx-cog'></i>
                    <span class="links-name">Settings</span>
                </a>
            </li>
            <?php
                }
            ?>
            <hr class="line">
            <li id="logout-link" class="nav-item">
                <a class="logout-link nav-link" href="../account/logout.php" title="Logout">
                    <i class='bx bx-log-out'></i>
                    <span class="links-name">Sign out</span>
                </a>
            </li>
        </ul>
    </div>
</nav>

<div id="logout-dialog" class="dialog d-none" title="Logout">
    <p><span>Are you sure you want to logout?</span></p>
</div>

<script>
    // $(document).ready(function() {
    //     $("#logout-dialog").dialog({
    //         resizable: false,
    //         draggable: false,
    //         height: "auto",
    //         width: 400,
    //         modal: true,
    //         autoOpen: false
    //     });
    //     $(".logout-link").on('click', function(e) {
    //         e.preventDefault();
    //         var theHREF = $(this).attr("href");

    //         $("#logout-dialog").dialog('option', 'buttons', {
    //             "Yes" : function() {
    //                 window.location.href = theHREF;
    //             },
    //             "No" : function() {
    //                 $(this).dialog("close");
    //             }
    //         });

    //         $("#logout-dialog").dialog("open");
    //     });
    // });
</script>