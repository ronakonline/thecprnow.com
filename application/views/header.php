<!--header start-->
<header id="masthead" class="header ttm-header-style-classicinfo">


    <div class="ttm-header-wrap">
        <!-- ttm-stickable-header-w -->
        <div id="ttm-stickable-header-w" class="ttm-stickable-header-w ttm-bgcolor-white clearfix">
            <div id="site-header-menu" class="site-header-menu">
                <div class="site-header-menu-inner ttm-stickable-header">
                    <div class="container">
                        <!-- site-branding -->
                        <div class="site-branding">
                            <a class="home-link" href="#" title="Delmont" rel="home">
                                <img id="logo-img" class="img-center" src="<?php echo base_url(); ?>assests/images/logo-img.png" alt="logo-img">
                            </a>
                        </div><!-- site-branding end -->
                        <!--site-navigation -->
                        <div id="site-navigation" class="site-navigation">

                            <div class="ttm-menu-toggle">
                                <input type="checkbox" id="menu-toggle-form" />
                                <label for="menu-toggle-form" class="ttm-menu-toggle-block">
                                    <span class="toggle-block toggle-blocks-1"></span>
                                    <span class="toggle-block toggle-blocks-2"></span>
                                    <span class="toggle-block toggle-blocks-3"></span>
                                </label>
                            </div>
                            <nav id="menu" class="menu">
                                <ul class="dropdown">
                                    <li><a href="<?php echo base_url(); ?>">Home</a>

                                    </li>
                                    <li><a href="<?php echo base_url(); ?>About">About Us</a>
                                    </li>
                                    <li><a href="#">Courses</a>
                                        <ul>
                                            <?php
                                            ini_set('display_errors', 1);
                                            $this->load->database();
                                            $qry = "select * from courses";
                                            $data = $this->db->query($qry);
                                            $data = $data->result_array();
                                            foreach ($data as $row){?>
                                                <li><a href="<?php echo base_url();?>Course/<?php echo $row['url']; ?>"><?php echo $row['name']; ?></a></li>
                                            <?php }?>
                                        </ul>
                                    </li>
                                    <li><a href="<?php echo base_url(); ?>Service">Services</a></li>

                                    <li><a href="<?php echo base_url();?>Contact">Contact Us</a></li>
                                </ul>
                            </nav>
                        </div><!-- site-navigation end-->
                    </div>
                </div>
            </div>
        </div><!-- ttm-stickable-header-w end-->
    </div><!--ttm-header-wrap end -->
    <div class="ttm-content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- ttm-info-widget-->
                    <div class="ttm-info-widget">
                        <div class="header-widget">
                            <div class="header-icon">
                                <i class="fa fa-hospital-o"></i>
                            </div>
                            <div class="header-content">
                                <h3>CPR</h3>
                                <p>In United States</p>
                            </div>
                        </div>
                        <div class="header-widget">
                            <div class="header-icon">
                                <i class="fa fa-user-md"></i>
                            </div>
                            <div class="header-content">
                                <h3>We Have</h3>
                                <p>A Qualified Team</p>
                            </div>
                        </div>
                        <div class="header-widget">
                            <div class="header-icon">
                                <i class="fa fa-thumbs-o-up"></i>
                            </div>
                            <div class="header-content">
                                <h3>Online Certification</h3>
                                <p>Satisfied Users</p>
                            </div>
                        </div>
                    </div>
                    <!-- ttm-info-widget end -->
                    <div class="ttm-contact">
                        <span class="icon"><i class="fa fa-phone"></i></span>Call Now : +1 (682) 558-5993
                    </div>
                </div>
            </div>
        </div>
    </div>
</header><!--header end-->