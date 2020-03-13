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
                            <h1 class="title">Courses</h1>
                            <h3 class="subtitle"> Courses we Provide</h3>
                        </div><!-- /.page-title-captions -->
                        <div class="breadcrumb-wrapper">
                            <div class="container">
                                <div class="breadcrumb-wrapper-inner">
                                        <span>
                                            <a  href="<?php echo base_url(); ?>" class="home"><i class="themifyicon ti-home"></i>&nbsp;&nbsp;Home</a>
                                        </span>
                                    <span class="ttm-bread-sep">&nbsp; | &nbsp;</span>
                                    <span>Services</span>
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
        <!-- sidebar -->
        <div class="sidebar ttm-sidebar-right ttm-bgcolor-white clearfix">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12 content-area">

                        <div class="products row">
                            <!-- row -->
                            <div class="row multi-columns-row ttm-boxes-row-wrapper ttm-boxes-spacing-10px">
                                <?php
                                ini_set('display_errors', 1);
                                $this->load->database();
                                $qry = "select * from courses";
                                $data = $this->db->query($qry);
                                $data = $data->result_array();
                                foreach ($data as $row){?>
                                    <div class="ttm-box-col-wrapper col-lg-4 col-md-4 col-sm-6">
                                        <!-- featured-imagebox -->
                                        <div class="featured-imagebox featured-imagebox-portfolio">
                                            <!-- featured-thumbnail -->
                                            <div class="featured-thumbnail">
                                                <a href="#"> <img class="img-fluid" src="<?php echo base_url(); ?>assests/images/<?php echo $row['img'];?>" alt="image"></a>
                                            </div><!-- featured-thumbnail end-->
                                            <!-- ttm-box-view-overlay -->
                                            <div class="ttm-box-view-overlay ttm-portfolio-box-view-overlay">

                                                <div class="ttm-box-view-content-inner">
                                                    <div class="featured-content featured-content-portfolio">
                                                        <div class="featured-title">
                                                            <h5><a href="<?php echo base_url();?>Course/<?php echo $row['url']; ?>"><?php echo $row['name']; ?></a></h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- ttm-box-view-overlay end-->
                                        </div><!-- featured-imagebox -->
                                    </div>
                                <?php } ?>
                            </div>
                            <!-- row end-->
                        </div>

                    </div>

                </div><!-- row end -->
            </div>
        </div>
        <!-- sidebar end -->
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