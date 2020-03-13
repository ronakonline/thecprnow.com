<!DOCTYPE html>
<html lang="en">


<?php $this->load->view('css-links'); ?>

<body>

<!--page start-->
<div class="page">

    <!-- preloader start -->
    <!--        <div id="preloader">-->
    <!--          <div id="status">&nbsp;</div>-->
    <!--        </div>-->
    <!-- preloader end -->

    <?php $this->load->view('header');?>

    <div class="ttm-page-title-row">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-box ttm-textcolor-white">
                        <div class="page-title-heading">
                            <h1 class="title"><?php echo $title; ?></h1>
                        </div><!-- /.page-title-captions -->
                        <div class="breadcrumb-wrapper">
                            <div class="container">
                                <div class="breadcrumb-wrapper-inner">
                                        <span>
                                            <a title="Go to Delmont." href="#" class="home"><i class="themifyicon ti-home"></i>&nbsp;&nbsp;Courses</a>
                                        </span>
                                    <span class="ttm-bread-sep">&nbsp; | &nbsp;</span>
                                    <span><?php echo $title; ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div>

    <div class="site-main">

        <section class="ttm-row pb-50 clearfix">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <!-- ttm-pf-single-content-wrapper-innerbox -->
                        <div class="ttm-pf-single-content-wrapper-innerbox ttm-pf-view-left-image">
                            <div class="ttm-pf-detail-box">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="ttm-featured-wrapper ttm-portfolio-featured-wrapper">
                                            <img class="img-fluid" src="<?php echo base_url();?>assests/images/<?php echo $img; ?>" alt="">
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="ttm-pf-single-content-area">
                                <div class="ttm-portfolio-description">
                                    <?php echo $content; ?>


                                </div>

                            </div><!-- ttm-pf-single-content-wrapper-innerbox end-->


                        </div>
                    </div>
                </div>
        </section>



    </div>


    <?php $this->load->view('footer'); ?>

    <!--back-to-top start-->
    <a id="totop" href="#top">
        <i class="fa fa-angle-up"></i>
    </a>
    <!--back-to-top end-->

</div><!-- page end -->

<?php $this->load->view('js-links'); ?>

</body>
</html>