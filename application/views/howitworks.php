<!DOCTYPE html>
<html lang="en">

<?php $this->load->view('css-links'); ?>

<body>

<!--page start-->
<div class="page">

    <?php $this->load->view('header');?>

    <!-- page-title -->
    <div class="ttm-page-title-row">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-box ttm-textcolor-white">
                        <div class="page-title-heading">
                            <h1 class="title">How It Works</h1>
                        </div><!-- /.page-title-captions -->
                        <div class="breadcrumb-wrapper">
                            <div class="container">
                                <div class="breadcrumb-wrapper-inner">
                                        <span>
                                            <a href="<?php echo base_url(); ?>" class="home"><i class="themifyicon ti-home"></i>&nbsp;&nbsp;Home</a>
                                        </span>
                                    <span class="ttm-bread-sep">&nbsp; | &nbsp;</span>
                                    <span>How it works</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- page-title end-->


    <!--site-main start-->
    <div class="site-main">
        <!--introduction-section-->
        <section class="ttm-row introduction-section break-1199-colum clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-sm-12">
                        <!-- col-bg-img-two -->
                        <div class="col-bg-img-two1 ttm-col-bgimage-yes ttm-bg res-1199-ptb-200 ttm-reset-content-center-1199">
                            <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>

                        </div><!-- col-bg-img-two end-->
                    </div>
                    <div class="col-lg-7 col-sm-12">
                        <div class="pl-60 pb-20 res-1199-pl-0 res-1199-pt-40 res-1199-pb-0">
                            <!-- section title -->
                            <div class="section-title clearfix">
                                <div class="title-header">

                                    <h2 class="title">GET STARTED WITH THE CPR NOW</h2>
                                </div>
                            </div><!-- section title end -->
                            <div class="mb-30 clearfix">
                                <P>At THE CPR NOW we make our manuals and exams publicly accessible so that you can view all of our material and use it as a reference. Our goal is to give you knowledge. We don't charge you to study our materials or take our exam. After passing our exam, you can choose if THE CPR NOW certification is right for you.
                                    <BR><BR>
                                    To get started with our certification courses, just follow the steps below</P>
                                <H4>STEP 1</H4>
                                <P>First, choose a course or combination course that you would like to study. Once you have reviewed the training manual and feel comfortable you may take the exam.</P>
                                <H4>STEP 2</H4>
                                <P>Each exam requires 80% correct answers to pass. You can study and test at your own pace. Our goal is to teach you the correct answers so that you can pass with actionable knowledge.  So, you may study and retest as many times as needed for no additional charge.</P>
                                <H4>STEP 3</H4>
                                <P>When you have passed your exam, you will be emailed your certification.</P>

                            </div>
                            <div class="sep_holder_box pt-25 mb-45 res-991-mb-20">
                                <span class="sep_holder"><span class="sep_line"></span></span>
                            </div>

                        </div>
                    </div>
                </div><!-- row end -->
            </div>
        </section>
        <!--introduction-section end-->



        <!--client-section-->
        <div class="ttm-row client-section ttm-bgcolor-white mt_60 res-991-mt-0 clearfix" style="padding: 5px 0 30px;">
            <div class="container">
                <!-- row -->
                <div class="row text-center">
                    <div class="col-md-12">
                        <!-- ttm-client -->
                        <div class="ttm-client clients-slide owl-carousel owl-theme owl-loaded" data-item="5" data-nav="false" data-dots="false" data-auto="false">
                            <div class="client-box ttm-box-view-separator-logo">
                                <div class="ttm-client-logo-tooltip" data-tooltip="Adult CPR">
                                    <div class="client-thumbnail">
                                        <img src="<?php echo base_url(); ?>assests/images/cef1 (1).gif" alt="image">
                                    </div>
                                </div>
                            </div>
                            <div class="client-box ttm-box-view-separator-logo">
                                <div class="ttm-client-logo-tooltip" data-tooltip="Adult and Pediatric CPR">
                                    <div class="client-thumbnail">
                                        <img src="<?php echo base_url(); ?>assests/images/cef1 (2).gif" alt="image">
                                    </div>
                                </div>
                            </div>
                            <div class="client-box ttm-box-view-separator-logo">
                                <div class="ttm-client-logo-tooltip" data-tooltip="Healthcare Provider">
                                    <div class="client-thumbnail">
                                        <img src="<?php echo base_url(); ?>assests/images/cef1 (3).gif" alt="image">
                                    </div>
                                </div>
                            </div>
                            <div class="client-box ttm-box-view-separator-logo">
                                <div class="ttm-client-logo-tooltip" data-tooltip="First Aid Course">
                                    <div class="client-thumbnail">
                                        <img src="<?php echo base_url(); ?>assests/images/cef1 (4).gif" alt="image">
                                    </div>
                                </div>
                            </div>
                            <div class="client-box ttm-box-view-separator-logo">
                                <div class="ttm-client-logo-tooltip" data-tooltip="Bloodborne Pathogens Course">
                                    <div class="client-thumbnail">
                                        <img src="<?php echo base_url(); ?>assests/images/cef1 (5).gif" alt="image">
                                    </div>
                                </div>
                            </div>

                        </div><!-- ttm-client end -->
                    </div>
                </div><!-- row end -->
            </div>
        </div >
        <!--client-section end-->
    </div><!--site-main end-->


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