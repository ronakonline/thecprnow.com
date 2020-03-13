
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once 'css-links.php'; ?>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<style>
    .btn-file {
        position: relative;
        overflow: hidden;
    }
    .btn-file input[type=file] {
        position: absolute;
        top: 0;
        right: 0;
        min-width: 100%;
        min-height: 100%;
        font-size: 100px;
        text-align: right;
        filter: alpha(opacity=0);
        opacity: 0;
        outline: none;
        cursor: inherit;
        display: block;
    }
</style>
<body>
<div id="pcoded" class="pcoded">
    <div class="pcoded-overlay-box"></div>
    <div class="pcoded-container navbar-wrapper">
        <?php include_once 'header.php'; ?>
        <?php //include_once 'pre-loader.php'; ?>
        <div class="pcoded-main-container">
            <div class="pcoded-wrapper">
                <?php  include_once 'top-side-bar.php'; ?>
                <div class="pcoded-content">
                    <div class="pcoded-inner-content">
                        <div class="main-body">
                            <div class="page-wrapper">
                                <!-- Page-header start -->
                                <div class="page-header">
                                    <div class="row align-items-end">
                                        <div class="col-lg-8">
                                            <div class="page-header-title">
                                                <div class="d-inline">
                                                    <h4>LOGO</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="page-header-breadcrumb">
                                                <ul class="breadcrumb-title">
                                                    <li class="breadcrumb-item">
                                                        <a href="index.php"> <i class="feather icon-home"></i>
                                                        </a>
                                                    </li>
                                                    <li class="breadcrumb-item"><a href="#!">Manage Site</a>
                                                    </li>
                                                    <li class="breadcrumb-item"><a href="#!">Logo</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Page-header end -->

                                <!-- Page body start -->
                                <?php $error = $_SESSION['error'];
                                if($this->session->userdata('error')){
                                    echo '<script language = "javascript">';
                                    // echo "window.location.href='Login.php'";
                                    echo 'swal("Error!", "'.strip_tags($error).'", "error");';
                                    echo '</script>'; }
                                // echo $_SESSION;
                                $this->session->unset_userdata('error');
                                ?>
                                <div class="page-body">
                                    <div class="row">
                                        <div class="col-sm-10">
                                            <!-- Register your self card start -->
                                            <div class="card">

                                                <div class="card-block">
                                                    <?php $this->load->helper('form'); ?>
                                                    <?php echo form_open_multipart('site_setting/logo_upload');?>
                                                        <div class="file-field">
                                                            <div class="col-lg-6"><img src=<?php echo base_url(). 'assests/images/'. $logo ; ?> class="img-thumbnail" style="height: auto;width: auto"></div>
                                                            <br><br>
                                                            <div class="">
                                                                <span class="btn btn-primary btn-file">
                                                                         Browse <input type="file" name="userfile">
                                                                    </span>
                                                                <button type="submit" name="edits" class="btn btn-danger">Update</button></div>
                                                            </div>

                                                        </div>


                                                    </form>

                                                    <!-- here comment part...if necessary...--->

                                                </div>

                                        </div>
                                        </div>
                                        <!-- Register your self card end -->
                                    </div>
                                </div>
                            </div>
                            <!-- Page body end -->
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="<?php echo base_url();?>assests/admin/bower_components/jquery/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assests/admin/bower_components/jquery-ui/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assests/admin/bower_components/popper.js/js/popper.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assests/admin/bower_components/bootstrap/js/bootstrap.min.js"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="<?php echo base_url();?>assests/admin/bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>
<!-- modernizr js -->
<script type="text/javascript" src="<?php echo base_url();?>assests/admin/bower_components/modernizr/js/modernizr.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assests/admin/bower_components/modernizr/js/css-scrollbars.js"></script>
<!-- Chart js -->
<script type="text/javascript" src="<?php echo base_url();?>assests/admin/bower_components/chart.js/js/Chart.js"></script>
<!-- amchart js -->
<script src="<?php echo base_url();?>assests/admin/assets/pages/widget/amchart/amcharts.js"></script>
<script src="<?php echo base_url();?>assests/admin/assets/pages/widget/amchart/serial.js"></script>
<script src="<?php echo base_url();?>assests/admin/assets/pages/widget/amchart/light.js"></script>
<!-- Custom js -->

<script src="<?php echo base_url();?>assests/admin/assets/js/pcoded.min.js"></script>
<script src="<?php echo base_url();?>assests/admin/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="<?php echo base_url();?>assests/admin/assets/js/vartical-layout.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assests/admin/assets/pages/dashboard/analytic-dashboard.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assests/admin/assets/js/script.js"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->

<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
</script>

</body>

</html>