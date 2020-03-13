
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once 'css-links.php'; ?>

</head>

<body>
<div id="pcoded" class="pcoded">
    <div class="pcoded-overlay-box"></div>
    <div class="pcoded-container navbar-wrapper">
        <?php include_once 'header.php'; ?>
        <div class="pcoded-main-container">
            <div class="pcoded-wrapper">
                <?php  include_once 'top-side-bar.php'; ?>
                <div class="pcoded-content">
                    <div class="pcoded-inner-content">
                        <!-- Main-body start -->
                        <div class="main-body">
                            <div class="page-wrapper">
                                <!-- Page-header start -->
                                <div class="page-header">
                                    <div class="row align-items-end">
                                        <div class="col-lg-8">
                                            <div class="page-header-title">
                                                <div class="d-inline">
                                                    <h4>Edit Footer</h4>
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
                                                    <li class="breadcrumb-item"><a href="#!">Footer</a>
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
                                            <!-- Register your self card start -->
                                            <div class="card">

                                                <div class="card-block">
                                                    <div class="j-wrapper j-wrapper-640">


                                                        <?php $this->load->helper('form'); ?>
                                                        <?php echo form_open('site_setting/fupload', 'class="j-pro" id="myform"'); ?>
                                                                <div class="j-content">
                                                                    <!-- start name -->
                                                                    <div>
                                                                        <label class="j-label">About Us</label>
                                                                        <div class="j-unit">
                                                                            <div class="j-input">
                                                                                <textarea name='about' required ><?php echo $about_us ?> </textarea>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <script>
                                                                        CKEDITOR.replace( 'about' );
                                                                    </script>
                                                                    <!-- end name -->
                                                                    <!-- start email -->
                                                                    <div>
                                                                        <div>
                                                                            <label class="j-label">Address line 1</label>
                                                                        </div>
                                                                        <div class="j-unit">
                                                                            <div class="j-input">
                                                                                <input type="text" value="<?php echo $add1; ?> " name="add1" required>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- end email -->
                                                                    <!-- start login -->
                                                                    <div>
                                                                        <div>
                                                                            <label class="j-label ">Address line 2</label>
                                                                        </div>
                                                                        <div class="j-unit">
                                                                            <div class="j-input">
                                                                                <input type="text" value="<?php echo $add2; ?> " name="add2" required>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <!-- end login -->
                                                                    <!-- start password -->
                                                                    <div>
                                                                        <div>
                                                                            <label class="j-label ">Phone_No</label>
                                                                        </div>
                                                                        <div class="j-unit">
                                                                            <div class="j-input">
                                                                                <input type="text" value="<?php echo $phone; ?>" name="phone" required>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div>
                                                                        <div>
                                                                            <label class="j-label ">Email</label>
                                                                        </div>
                                                                        <div class="j-unit">
                                                                            <div class="j-input">
                                                                                <input type="email"  value="<?php echo $email; ?>" name="email" required>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <!-- end password -->
                                                                    <!-- start response from server -->
                                                                    <div class="j-response"></div>
                                                                    <!-- end response from server -->
                                                                </div>
                                                                <!-- end /.content -->
                                                                <div class="j-footer">
                                                                    <button type="submit" class="btn btn-primary"
                                                                            name='register'>Save</button>
                                                                </div>
                                                                <!-- end /.footer -->
                                                            </form>

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
                        <!-- Main-body end -->
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<?php include_once 'js-links.php'; ?>

</body>

</html>