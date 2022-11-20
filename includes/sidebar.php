<div class="side-bar">
    <div class="logo-details" title="Forecast">
        <i class='bx bx-meteor'></i>
        <span class="logo-name">forecast</span>
    </div>
    <ul class="nav-links">
        <li>
            <a href="../admin/dashboard.php" class="<?php echo $dashboard; ?>" title="Dashboard">
                <i class='bx bx-grid-alt' ></i>
                <span class="links-name">Dashboard</span>
            </a>
        </li>
        <li>
            <a href="#" class="<?php echo $application; ?>" title="Applications">
                <i class='bx bx-send'></i>
                <span class="links-name">Applications</span>
            </a>
        </li>
        <li>
            <a href="#" class="<?php echo $screening; ?>" title="Screening">
                <i class='bx bx-phone-call'></i>
                <span class="links-name">Screening</span>
            </a>
        </li>
        <li>
        <a href="../programs/programs.php" class="<?php echo $programs; ?>" title="Programs">
                <i class='bx bx-book-reader'></i>
                <span class="links-name">Programs</span>
            </a>
        </li>
        <li>
            <a href="#" class="<?php echo $students; ?>" title="Students">
                <i class='bx bx-user'></i>
                <span class="links-name">Students</span>
            </a>
        </li>
        <li>
            <a href="../faculty/faculty.php" class="<?php echo $faculty; ?>" title="Faculty">
                <i class='bx bx-group' ></i>
                <span class="links-name">Faculty</span>
            </a>
        </li>
        <li>
            <a href="#" class="<?php echo $settings; ?>" title="Settings">
                <i class='bx bx-cog'></i>
                <span class="links-name">Settings</span>
            </a>
        </li>
        <hr class="line">
        <li id="logout-link">
            <a class="logout-link" href="../login/logout.php" title="Logout">
                <i class='bx bx-log-out'></i>
                <span class="links-name">Logout</span>
            </a>
        </li>
    </ul>
</div>

<div id="logout-dialog" class="dialog" title="Logout">
    <p><span>Are you sure you want to logout?</span></p>
</div>

<script>
    $(document).ready(function() {
        $("#logout-dialog").dialog({
            resizable: false,
            draggable: false,
            height: "auto",
            width: 400,
            modal: true,
            autoOpen: false
        });
        $(".logout-link").on('click', function(e) {
            e.preventDefault();
            var theHREF = $(this).attr("href");

            $("#logout-dialog").dialog('option', 'buttons', {
                "Yes" : function() {
                    window.location.href = theHREF;
                },
                "No" : function() {
                    $(this).dialog("close");
                }
            });

            $("#logout-dialog").dialog("open");
        });
    });
</script>