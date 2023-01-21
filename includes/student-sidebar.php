<div class="side-bar">
    <div class="logo-details" title="GreenScreen">
        <img class="logo-icon" src="../img/greenscreen_logo.png" alt="">
        <span class="logo-name">GreenScreen</span>
    </div>
    <ul class="nav-links">
        <li>
            <a href="../student/dashboard.php" class="<?php echo $dashboard; ?>" title="Dashboard">
                <i class='bx bx-grid-alt' ></i>
                <span class="links-name">Dashboard</span>
            </a>
        </li>
        <li>
            <a href="#" class="<?php echo $profile; ?>" title="My Profile">
                <i class='bx bx-phone-call'></i>
                <span class="links-name">My Profile</span>
            </a>
        </li>
        <li>
            <a href="#" class="<?php echo $application; ?>" title="My Applications">
                <i class='bx bx-send'></i>
                <span class="links-name">My Applications</span>
            </a>
        </li>
        <hr class="line">
        <li id="logout-link">
            <a class="logout-link" href="../account/logout.php" title="Logout">
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