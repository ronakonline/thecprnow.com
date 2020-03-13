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
                            <h1 class="title"><?php echo $row[0]->name; ?></h1>
                        </div><!-- /.page-title-captions -->
                        <div class="breadcrumb-wrapper">
                            <div class="container">
                                <div class="breadcrumb-wrapper-inner">
                                        <span>
                                            <a title="Go to Delmont." href="index.html" class="home"><i class="themifyicon ti-home"></i>&nbsp;&nbsp;Courses</a>
                                        </span>
                                    <span class="ttm-bread-sep">&nbsp; | &nbsp;</span>
                                    <span><?php echo $row[0]->name; ?></span>
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
                                            <img class="img-fluid" src="<?php echo base_url();?>assests/images/<?php echo $row[0]->img; ?>" alt="">
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="ttm-pf-single-content-area">
                                <div class="ttm-portfolio-description">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h4>About this course</h4>
                                            <div class="sep_holder_box width-100 mb-20">
                                                <span class="sep_holder"><span class="sep_line"></span></span>
                                                <span class="sep_holder"><span class="sep_line"></span></span>
                                            </div>
                                            <?php echo $row[0]->aboutcour; ?>
                                        </div>
                                    </div>


                                </div>

                            </div><!-- ttm-pf-single-content-wrapper-innerbox end-->
                            <!-- row -->
                            <?php if(!empty($row[0]->cdur)) { ?>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="pt-30">
                                        <?php if($row[0]->name=="Shaken Baby Syndrome"){?>
                                            <h4>Symptoms</h4>
                                        <?php }else{ ?>
                                        <h4>What does this course teach?</h4>
                                        <?php } ?>
                                        <div class="sep_holder_box width-100 mb-20">
                                            <span class="sep_holder"><span class="sep_line"></span></span>
                                            <span class="sep_holder"><span class="sep_line"></span></span>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <?php echo $row[0]->cdur; ?>
                                            </div>
                                            <div class="col-sm-6">
                                                <?php echo $row[0]->aboutcour1; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- row end-->
                            <?php } ?>
                            <!-- tttm-pf-single-related-wrapper -->
                            <div class="row ttm-pf-single-related-wrapper ttm-boxes-row-wrapper">
                                <div class="col-lg-12">
                                    <h3 class="ttm-pf-single-related-title">Related Courses</h3>
                                </div>
                                <?php
                                $qry = "select * from courses where id<>".$row[0]->id." limit 3";
                                $data = $this->db->query($qry);
                                $data = $data->result_array();

                                foreach ($data as $row){
                                ?>
                                <div class="ttm-box-col-wrapper col-lg-4 col-md-4 col-sm-6">
                                    <!-- featured-imagebox -->
                                    <div class="featured-imagebox featured-imagebox-portfolio ttm-box-view-top-image">
                                        <div class="ttm-box-view-content-inner">
                                            <!-- featured-thumbnail -->
                                            <div class="featured-thumbnail">
                                                <a href="<?php echo base_url();?>Course/<?php echo $row['url']; ?>"> <img class="img-fluid" src="<?php echo base_url();?>assests/images/<?php echo $row['img']; ?>" alt="image"></a>
                                            </div><!-- featured-thumbnail end-->
                                            <!-- ttm-box-view-overlay -->
                                        </div>
                                        <div class="ttm-box-bottom-content featured-content-portfolio box-shadow">
                                            <div class="featured-title">
                                                <h5><a href="<?php echo base_url();?>Course/<?php echo $row['url']; ?>"><?php echo $row['name']; ?></a></h5>
                                            </div>

                                        </div>
                                    </div><!-- featured-imagebox -->
                                </div>
                                <?php } ?>
                            </div>
                            <!-- tttm-pf-single-related-wrapper end-->

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