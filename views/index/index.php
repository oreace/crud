<div class="container">
    <!-- Main hero unit for a primary marketing message or call to action -->
    <div class="leaderboard">
        <h1 class="lesserfont">Welcome to St. Peter's Membership Application</h1>
        <br><br>
        <p>You can manage visitors, members and users information 
            using this application, though only the administrator
            has the privilege to view and edit users' information.
            You can learn more about this application by clicking
            the help menu.</p>
        <?php if (Session::get('loggedIn') == FALSE) { ?>
            <p> <a href="#login">Please Login </a></p>
        <?php } ?>
    </div>
    <!-- Example row of columns -->
    <div class="row">
        <div class="span8">
            <h2>General Information</h2>
            <p>This application is designed only for authorized users.
                Please click on the link below to enter your login credentials
                to start using this application to your full benefits.</p>
            <p>If you are not yet an authorized user, please visit your
                system administrator to set your own login for you. Thank you.</p>
        </div>
        <div class="span4">
            <?php if ((Session::get('loggedIn') == FALSE)) { ?>
                <h2>Login</h2>
                <?php
                if (!empty($_COOKIE['error'])) {
                    echo "<p class='error_message'>" . $_COOKIE['error'] . "</p>";
                }
                ?>
                <form id="login" action="login/run" method="post" >
                    <label>Login:</label><input type="text" name="login" /><br />
                    <label>Password:</label><input type="password" name="pwd" /><br />
                    <input type="submit" value="Submit" class="btn btn-primary btn-large" /><br />
                </form>
                <?php
            } else {
                echo "<h2>Logout</h2><p>You are already logged in. When you are through, 
                    click ";
                ?>
                <a href="<?php echo URL; ?>login/logout">
                    <?php echo "log out</a> on the menu</p>"; ?>
                <?php } ?>
        </div>

    </div>


