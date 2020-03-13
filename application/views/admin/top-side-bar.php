
<nav class="pcoded-navbar">
    <div class="pcoded-inner-navbar main-menu">
        <div class="pcoded-navigatio-lavel">Navigation</div>
        <ul class="pcoded-item pcoded-left-item">
            <!--<li class="pcoded-hasmenu active pcoded-trigger">-->
            <li class="active">
                <a href="<?php echo base_url() ?>dashboard">
                    <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                    <span class="pcoded-mtext">Dashboard</span>
                </a>
            </li>






            <li class="pcoded-hasmenu">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="feather icon-sliders"></i></span>
                    <span class="pcoded-mtext">Manage HomePage</span>
                </a>
                <ul class="pcoded-submenu">
                    <li class="">
                        <a href="<?php echo base_url() ?>Homepage/div1">
                            <span class="pcoded-mtext">Div 1</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="<?php echo base_url() ?>Homepage/div2">
                            <span class="pcoded-mtext">Div 2</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="pcoded-hasmenu">
                <a href="<?php echo base_url();?>mheader">
                    <span class="pcoded-micon"><i class="feather icon-sliders"></i></span>
                    <span class="pcoded-mtext">Manage Header</span>
                </a>
            </li>
            <li class="pcoded-hasmenu">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="feather icon-sliders"></i></span>
                    <span class="pcoded-mtext">Manage Courses</span>
                </a>
                <ul class="pcoded-submenu">
                    <li class="">
                        <a href="<?php echo base_url();?>Mcourses/add">
                            <span class="pcoded-mtext">Add Course</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="<?php echo base_url();?>Mlessons/add">
                            <span class="pcoded-mtext">Add Lesson</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="<?php echo base_url();?>Mcourses/all">
                            <span class="pcoded-mtext">All Courses</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="<?php echo base_url();?>Mlessons/all">
                            <span class="pcoded-mtext">All Lessons</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="pcoded-hasmenu">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="feather icon-sliders"></i></span>
                    <span class="pcoded-mtext">Manage Site</span>
                </a>
                <ul class="pcoded-submenu">
                    <li class="">
                        <a href="<?php echo base_url() ?>site_setting/logo">
                            <span class="pcoded-mtext">Logo</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="<?php echo base_url() ?>site_setting/footer">
                            <span class="pcoded-mtext">Footer</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="about_us.php">
                            <span class="pcoded-mtext">About Us</span>
                        </a>
                    </li>
                </ul>
            </li>




            <li class=" ">
                <a href="<?php echo base_url();?>admin_login/logout">
                    <span class="pcoded-micon"><i class="feather icon-user"></i></span>
                    <span class="pcoded-mtext">Log Out</span>
                </a>
            </li>

        </ul>

    </div>
</nav>