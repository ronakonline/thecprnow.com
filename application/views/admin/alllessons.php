
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
                                                    <h4>Lessons</h4>
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
                                                    <li class="breadcrumb-item"><a href="#!">All Lessons</a>
                                                    </li>

                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Page-header end -->

                                <!-- Page body start -->
                                <div class="page-body">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <!-- Basic Form Inputs card start -->

                                            <div class="card">
                                                <div class="card-header">
                                                    <h5>Lessons</h5>
                                                    <span>List of all lessons</span>

                                                </div>
                                                <div class="card-block">
                                                    <div class="table-responsive">
                                                        <table class="table table-striped table-bordered" id="example-2">
                                                            <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Course Name</th>
                                                                <th>Lesson Title</th>
                                                                <th class="tabledit-toolbar-column">Action</th></tr>
                                                            </thead>
                                                            <tbody>
                                                            <?php
                                                            $qry = "select lessons.id,lessons.title,courses.name from lessons,courses where lessons.cid=courses.id";
                                                            $data = $this->db->query($qry);
                                                            $data = $data->result_array();
                                                            foreach ($data as $row){
                                                                ?>
                                                                <tr>
                                                                    <th scope="row"><?php echo $row['id']; ?></th>
                                                                    <td class="tabledit-view-mode"><span class="tabledit-span" style=""><?php echo $row['name']; ?>
                                                                    <td class="tabledit-view-mode"><span class="tabledit-span" style=""><?php echo $row['title']; ?>

                                                                </span><input class="tabledit-input form-control input-sm" type="text" name="First Name" value="Mark

                                                                " style="display: none;" disabled=""></td>


                                                                    <td style="white-space: nowrap; width: 1%;"><div class="tabledit-toolbar btn-toolbar" style="text-align: left;">
                                                                            <div class="btn-group btn-group-sm" style="float: none;">
                                                                                <a  href="<?php echo base_url();?>Mlessons/edit?edit=<?php echo $row['id']; ?>"><button type="button" class="tabledit-edit-button btn btn-primary waves-effect waves-light" style="float: none;margin: 5px;"><span class="icofont icofont-ui-edit"></span></button></a>
                                                                                <a href="<?php echo base_url();?>Mlessons/delete?delete=<?php echo $row['id']; ?>"><button type="button"  class="tabledit-delete-button btn btn-danger waves-effect waves-light" style="float: none;margin: 5px;"><span class="icofont icofont-ui-delete"></span></button></a>
                                                                            </div>

                                                                        </div></td></tr>
                                                            <?php } ?>

                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
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