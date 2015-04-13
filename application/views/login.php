<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js sidebar-large lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js sidebar-large lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js sidebar-large lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js sidebar-large"> <!--<![endif]-->

<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <!-- BEGIN META SECTION -->
    <meta charset="utf-8">
    <title>CMS Bangun Kapasitas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="" name="description" />
    <meta content="themes-lab" name="author" />
    <!-- END META SECTION -->
    <!-- BEGIN MANDATORY STYLE -->
    <link href="<?php echo base_url();?>assets/pixit/assets/css/icons/icons.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/pixit/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/pixit/assets/css/plugins.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/pixit/assets/css/style.min.css" rel="stylesheet">
    <!-- END  MANDATORY STYLE -->
    <!-- BEGIN PAGE LEVEL STYLE -->
    <link href="<?php echo base_url();?>assets/pixit/assets/css/animate-custom.css" rel="stylesheet">
    <!-- END PAGE LEVEL STYLE -->
    <script src="<?php echo base_url();?>assets/pixit/assets/plugins/modernizr/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>

<body class="login fade-in" data-page="login" style="background:dimgray">
    <!-- BEGIN LOGIN BOX -->
    <div class="container" id="login-block">
        <div class="row">
            <div class="col-sm-6 col-md-4 col-sm-offset-3 col-md-offset-4">
                <div class="login-box clearfix animated flipInY">
                    <div class="page-icon animated bounceInDown">
                        <img src="<?php echo base_url();?>assets/pixit/assets/img/account/user-icon.png" alt="Key icon">
                    </div>
                    <div class="login-logo">
                        <a href="#?login-theme-3">
                            <img src="<?php echo base_url();?>assets/pixit/assets/img/account/logo.png" alt="Company Logo">
                        </a>
						</div>
						
                    <hr>
                    <div class="login-form">
                        <!-- BEGIN ERROR BOX -->
                        <?php echo $error;?>
                        <!-- END ERROR BOX -->
                        <form action="<?php echo base_url();?>login/auth" method="post">
                            <input type="text" placeholder="Username" name="username" class="input-field form-control user" />
                            <input type="password" placeholder="Password" name="password" class="input-field form-control password" />
                            <button type="submit" class="btn btn-login">Login</button>
                        </form>
                       
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- END LOCKSCREEN BOX -->
    <!-- BEGIN MANDATORY SCRIPTS -->
    <script src="<?php echo base_url();?>assets/pixit/assets/plugins/jquery-1.11.js"></script>
    <script src="<?php echo base_url();?>assets/pixit/assets/plugins/jquery-migrate-1.2.1.js"></script>
    <script src="<?php echo base_url();?>assets/pixit/assets/plugins/jquery-ui/jquery-ui-1.10.4.min.js"></script>
    <script src="<?php echo base_url();?>assets/pixit/assets/plugins/bootstrap/bootstrap.min.js"></script>
    <!-- END MANDATORY SCRIPTS -->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="<?php echo base_url();?>assets/pixit/assets/plugins/backstretch/backstretch.min.js"></script>
    <script src="<?php echo base_url();?>assets/pixit/assets/js/account.js"></script>
    <!-- END PAGE LEVEL SCRIPTS -->
</body>

</html>
