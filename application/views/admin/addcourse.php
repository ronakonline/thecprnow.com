
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
                                                    <h4>Add Course</h4>
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
                                                    <li class="breadcrumb-item"><a href="#!">Manage Courses</a>
                                                    </li>
                                                    <li class="breadcrumb-item"><a href="#!">Add course</a>
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
                                            <div class="card">

                                                <div class="card-block">
                                                    <h4 class="sub-title">Page Details</h4>
                                                    <?php $this->load->helper('form'); ?>
                                                    <?php echo form_open_multipart('Mcourses/insert');?>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Course Name</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" name="name" class="form-control" required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">URL Slug</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" name="url" class="form-control" required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Course Image</label>
                                                            <div class="col-sm-10">
                                                                <input type="file" name="img" required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Title</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" name="title" class="form-control" maxlength="60" required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Meta Description</label>
                                                            <div class="col-sm-10">
                                                                <textarea name="mdescr" rows="5" cols="5" class="form-control" maxlength="120" required ></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label" >Keywords</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" name="keywords" class="form-control" required>
                                                            </div>
                                                        </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">About Course</label>
                                                        <div class="col-sm-10">
                                                            <textarea name="aboutcour" rows="5" cols="5" class="form-control" required ></textarea>
                                                        </div>
                                                        <script>
                                                            CKEDITOR.replace( 'aboutcour' );
                                                        </script>
                                                    </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label" >Course Duration</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" name="cdur" class="form-control" required>
                                                            </div>
                                                        </div>
<!--                                                        <div class="form-group row">-->
<!--                                                            <label class="col-sm-2 col-form-label" >Lesson Title</label>-->
<!--                                                            <div class="col-sm-10">-->
<!--                                                                <input type="text" name="keywords" class="form-control" required>-->
<!--                                                            </div>-->
<!--                                                        </div>-->
<!---->
<!--                                                        <div class="form-group row">-->
<!--                                                            <label class="col-sm-2 col-form-label">Lesson Content</label>-->
<!--                                                            <div class="col-sm-10">-->
<!--                                                                <textarea name="para1" rows="5" cols="5" class="form-control" required ></textarea>-->
<!--                                                            </div>-->
<!--                                                            <script>-->
<!--                                                                CKEDITOR.replace( 'para1' );-->
<!--                                                            </script>-->
<!--                                                        </div>-->
<!--                                                   -->
                                                        <button type="submit" class="btn btn-primary" id="primary-popover-content" data-container="body" data-toggle="popover" title="" data-placement="bottom" data-content="<div class='color-code'>
                                                            <div class='row'>
                                                              <div class='col-sm-6 col-xs-12'>
                                                                <span class='block'>Normal</span>
                                                                <span class='block'>
                                                                  <small>#4680ff</small>
                                                                </span>
                                                              </div>
                                                              <div class='col-sm-6 col-xs-12'>
                                                                <div class='display-color' style='background-color:#4680ff;'></div>
                                                              </div>
                                                            </div>
                                                          </div>

                                                          <div class='color-code'>
                                                          <div class='row'>
                                                            <div class='col-sm-6 col-xs-12'>
                                                              <span class='block'>Hover</span>
                                                              <span class='block'>
                                                                <small>#79a3ff</small>
                                                              </span>
                                                            </div>
                                                            <div class='col-sm-6 col-xs-12'>
                                                              <div class='display-color' style='background-color:#79a3ff;'></div>
                                                            </div>
                                                          </div>
                                                          </div>

                                                          <div class='color-code'>
                                                          <div class='row'>
                                                            <div class='col-sm-6 col-xs-12'>
                                                              <span class='block'>Active</span>
                                                              <span class='block'>
                                                                <small>#0956ff</small>
                                                              </span>
                                                            </div>
                                                            <div class='col-sm-6 col-xs-12'>
                                                              <div class='display-color' style='background-color:#0956ff;'></div>
                                                            </div>
                                                          </div>
                                                          </div>

                                                          <div class='color-code'>
                                                          <div class='row'>
                                                            <div class='col-sm-6 col-xs-12'>
                                                              <span class='block'>Disabled</span>
                                                              <span class='block'>
                                                                <small>#c3d5ff</small>
                                                              </span>
                                                            </div>
                                                            <div class='col-sm-6 col-xs-12'>
                                                              <div class='display-color' style='background-color:#c3d5ff;'></div>
                                                            </div>
                                                          </div>
                                                          </div>

                                              " data-original-title="Primary color states">Save</button>
                                                    </form>

                                                </div>
                                            </div>
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