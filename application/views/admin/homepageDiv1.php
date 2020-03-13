
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once 'css-links.php'; ?>


    <!-- include summernote css/js -->
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.css" rel="stylesheet">

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
                                                    <h4>Edit HomePage Div 1</h4>
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
                                                    <li class="breadcrumb-item"><a href="#!">Manage HomePage</a>
                                                    </li>
                                                    <li class="breadcrumb-item"><a href="#!">Div 1</a>
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
                                        <div class="col-lg-12">
                                            <!-- Register your self card start -->
                                            <div class="card">

                                                <div class="card-block">
                                                    <div class="j-wrapper j-wrapper-840">



                                                        <form method="post">
                                                            <textarea id="div1" name="editordata"></textarea>
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