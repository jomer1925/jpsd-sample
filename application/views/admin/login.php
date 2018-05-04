<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MyPortak</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets2/css/normalize.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets2/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets2/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets2/css/themify-icons.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets2/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets2/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets2/scss/style.css">
    <!--Start: Animate the Input-Validation-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets2/css/plugins/animate.min.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets2/css/style2.css"/>
    
	<!--End: Animate the Input-Validation-->
    <!--Start: Ajax Code-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
</head>
<body class="bg-dark">
<form id="signupForm" method="post">
    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="index.html">
                        <img class="align-content" src="<?php echo base_url(); ?>assets2/images/logo.png" alt="">
                    </a>
                </div>
                
                    <div class="login-form">
                    
                        <div class="form-group">
                            <label>Email address</label>
                            <input type="email" class="form-control" placeholder="Email" name="email" id="email" required>
                            <span class="bar"></span>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" placeholder="Password" name="password" id="password" required>
                            <span class="bar"></span>
                        </div>

                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Remember Me
                            </label>
                            <label class="pull-right">
                                <a href="#">Forgotten Password?</a>
                            </label>
                        </div>
                        <hr>
                        <input type="submit" name="submit" value="Sign itn" class="btn btn-danger">
                        <div id="barra"></div>
                   
                    </div>

            </div>
        </div>
    </div>
    <script src="<?php echo base_url(); ?>assets2/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="<?php echo base_url(); ?>assets2/js/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>assets2/js/plugins.js"></script>
    <script src="<?php echo base_url(); ?>assets2/js/main.js"></script>


	<!-- Start: Plugins for Input Validation-->
	<script src="<?php echo base_url(); ?>assets2/js/plugins/jquery.validate.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
        $("#signupForm").submit(function(event)
        {
            event.preventDefault();
            $.ajax({
                url:'<?php echo base_url(); ?>ajax/login_authentication',
                type:'POST',
                data: {
                    email: $("#email").val(),
                    password: $("#password").val(),
                },
                success:function(data)
                {
                    if(data=='loggedIn')
                    {
                        location.href = "<?php echo base_url('index/home'); ?>";
                    }
                    else
                    {
                        document.getElementById("barra").innerHTML = data
                        $('#signupForm')[0].reset();
                    }
                }
            });
        });
	});
    </script>
                </form>
</body>
</html>
