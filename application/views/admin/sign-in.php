<!DOCTYPE html>
<html lang="en">

<head>
    <title>CPR NOW | Sign-in</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="<?php echo base_url();?>assests/admin/Login/images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assests/admin/Login/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assests/admin/Login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assests/admin/Login/fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assests/admin/Login/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assests/admin/Login/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assests/admin/Login/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assests/admin/Login/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assests/admin/Login/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assests/admin/Login/css/util.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assests/admin/Login/css/main.css">
    <!--===============================================================================================-->
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <?php $this->load->helper('form'); ?>
                <?php echo form_open('admin_login/getdata', 'class="login100-form validate-form" id="myform"'); ?>
<!--                <form class="login100-form validate-form" method="post" action="--><?php //echo site_url('admin_login/getdata'); ?><!--">-->
                    <span class="login100-form-title p-b-26">
                        Welcome
                    </span>
                    <span class="login100-form-title p-b-48">
                        <!-- <i class="zmdi zmdi-font"></i> -->
                        <img src="<?php echo base_url();?>assests/images/logo-img.png" style="max-width:250px; height: auto">
                    </span>

                    <div class="wrap-input100 validate-input">
                        <?php
                        $data = array(
                            'name'          => 'username',
                            'class'         => 'input100',
                            'type'          => 'text'

                        );

                        echo form_input($data);
                        ?>
<!--                        <input class="input100" type="text" name="username">-->
                        <span class="focus-input100" data-placeholder="Username"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Enter password">
                        <span class="btn-show-pass">
                            <i class="zmdi zmdi-eye"></i>
                        </span>
                        <?php
                        $data = array(
                            'name'          => 'password',
                            'class'         => 'input100',
                            'type'          => 'password'

                        );

                        echo form_input($data);
                        ?>
<!--                        <input class="input100" type="password" name="password">-->
                        <span class="focus-input100" data-placeholder="Password"></span>
                    </div>

                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <?php
                            $data = array(
                                'name'          => 'login',
                                'class'         => 'login100-form-btn',
                                'type'          => 'submit',
                                'content'       => 'Login'
                            );

                            echo form_button($data);
                            ?>
<!--                            <button class="login100-form-btn" name='login'>-->
<!--                                Login-->
<!--                            </button>-->
                        </div>
                    </div>
                <?php  form_close(); ?>
                <?php
                    if($_SESSION['error']==1){
                echo '<script language = "javascript">';
                // echo "window.location.href='Login.php'";
                echo 'swal("Error!", "Wrong Username Password!", "error");';
                echo '</script>';}
                   // echo $_SESSION;
				?>
            </div>
        </div>
    </div>


    <div id="dropDownSelect1"></div>

    <!--===============================================================================================-->
    <script src="<?php echo base_url();?>assests/admin/Login/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?php echo base_url();?>assests/admin/Login/vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?php echo base_url();?>assests/admin/Login/vendor/bootstrap/js/popper.js"></script>
    <script src="<?php echo base_url();?>assests/admin/Login/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?php echo base_url();?>assests/admin/Login/vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?php echo base_url();?>assests/admin/Login/vendor/daterangepicker/moment.min.js"></script>
    <script src="<?php echo base_url();?>assests/admin/Login/vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="<?php echo base_url();?>assests/admin/Login/vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="<?php echo base_url();?>assests/admin/Login/js/main.js"></script>

</body>

</html>