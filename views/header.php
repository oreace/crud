<?php
if ((Session::get('loggedIn') == FALSE)) {
    $message = "Login Unsuccessful. <br> Please recheck your login details and try again.";
    setcookie('error', $message, time() + 5);
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Membership Database</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Example of Fixed Layout with Twitter Bootstrap version 2.0 from w3resource.com">
        <meta name="author" content="">
        <!-- Le styles -->
        <link href="<?php echo URL; ?>public/css/bootstrap.css" rel="stylesheet">
        <link href="<?php echo URL; ?>public/css/layout.css" rel="stylesheet">
        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
        <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <!-- Le fav and touch icons -->
        <link rel="shortcut icon" href="twitter-bootstrap-v2/docs/examples/images/favicon.ico">
        <link rel="apple-touch-icon" href="twitter-bootstrap-v2/docs/examples/images/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="72x72" href="twitter-bootstrap-v2/docs/examples/images/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="twitter-bootstrap-v2/docs/examples/images/apple-touch-icon-114x114.png">
    </head>
    <body>
<?php Session::init(); ?>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="index.php"><img src="" width="111" height="30" alt="Membership App" /></a>
                    <div class="nav-collapse">
                        <ul class="nav">
                            <li class="active"><a href="<?php echo URL; ?>index">Home</a></li>

<?php if (Session::get('loggedIn') == true) { ?>
                                <li><a href = "<?php echo URL; ?>visitor">Visitors</a></li>
                                <li><a href = "<?php echo URL; ?>member">Members</a></li>

                                <?php if (Session::get('role') == 'admin') { ?>
                                    <li><a href="<?php echo URL; ?>login">Users</a></li>
    <?php } ?>
                                <li><a href = "<?php echo URL; ?>search">Search</a></li>

                            </ul>
                            <ul class="nav pull-right">
                                <li><a href="<?php echo URL; ?>login/logout">Logout</a></li>
                            </ul>
<?php } else { ?>
                            </ul>
                            <ul class="nav pull-right">
                                <li><a href="<?php echo URL; ?>index">Login</a></li>
                            </ul>
<?php } ?>
                        <ul class="nav"><li><a href="<?php echo URL; ?>help">Help</a></li></ul>

                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>
