
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
            <?php //include_once 'pre-loader.php'; ?>
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                     <?php  include_once 'top-side-bar.php'; ?>
                        <div class="pcoded-content">
                            <div class="pcoded-inner-content">
                                <div class="main-body">
                                    <div class="page-wrapper">

                                        <div class="page-body">
                                            <div class="row">
                                                <!-- task, page, download counter  start -->
                                                <div class="col-xl-3 col-md-6">
                                                    <div class="card bg-c-yellow update-card">
                                                        <div class="card-block">
                                                            <div class="row align-items-end">
                                                                <div class="col-8">
                                                                    <h4 class="text-white">0</h4>
                                                                    <h6 class="text-white m-b-0">Today's Views</h6>
                                                                </div>
                                                                <div class="col-4 text-right">
                                                                    <canvas id="update-chart-1" height="50"></canvas>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-footer">
                                                            <p class="text-white m-b-0"><i
                                                                    class="feather icon-clock text-white f-14 m-r-10"></i>update :
                                                                2:15 am</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-md-6">
                                                    <div class="card bg-c-green update-card">
                                                        <div class="card-block">
                                                            <div class="row align-items-end">
                                                                <div class="col-8">
                                                                    <h4 class="text-white">0</h4>
                                                                    <h6 class="text-white m-b-0">Total Views</h6>
                                                                </div>
                                                                <div class="col-4 text-right">
                                                                    <canvas id="update-chart-2" height="50"></canvas>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-footer">
                                                            <p class="text-white m-b-0"><i
                                                                    class="feather icon-clock text-white f-14 m-r-10"></i>update :
                                                                2:15 am</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-md-6">
                                                    <div class="card bg-c-pink update-card">
                                                        <div class="card-block">
                                                            <div class="row align-items-end">
                                                                <div class="col-8">
                                                                    <h4 class="text-white">0</h4>
                                                                    <h6 class="text-white m-b-0">Total Events</h6>
                                                                </div>
                                                                <div class="col-4 text-right">
                                                                    <canvas id="update-chart-3" height="50"></canvas>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-footer">
                                                            <p class="text-white m-b-0"><i
                                                                    class="feather icon-clock text-white f-14 m-r-10"></i>update :
                                                                2:15 am</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-md-6">
                                                    <div class="card bg-c-lite-green update-card">
                                                        <div class="card-block">
                                                            <div class="row align-items-end">
                                                                <div class="col-8">
                                                                    <h4 class="text-white"><?php echo $row[0]; ?></h4>
                                                                    <h6 class="text-white m-b-0">Total Admin's</h6>
                                                                </div>
                                                                <div class="col-4 text-right">
                                                                    <canvas id="update-chart-4" height="50"></canvas>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-footer">
                                                            <p class="text-white m-b-0"><i
                                                                    class="feather icon-clock text-white f-14 m-r-10"></i><?php echo "update : ".$newdt; ?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- task, page, download counter  end -->
                                                <!-- visitor start -->
                                            <div class="col-xl-8 col-md-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Visitors</h5>
                                                        <span class="text-muted">For more details about usage, please refer <a href="https://www.amcharts.com/online-store/" target="_blank">amCharts</a> licences.</span>
                                                        <div class="card-header-right">
                                                            <ul class="list-unstyled card-option">
                                                                <li><i class="feather icon-maximize full-card"></i></li>
                                                                <li><i class="feather icon-minus minimize-card"></i></li>
                                                                <li><i class="feather icon-trash-2 close-card"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="card-block">
                                                        <div id="visitor" style="height:300px"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-md-12">
                                                <div class="card">
                                                    <div class="card-block bg-c-green">
                                                        <div id="proj-earning" style="height: 230px"></div>
                                                    </div>
                                                    <div class="card-footer">
                                                        <h6 class="text-muted m-b-30 m-t-15">Total completed project and earning</h6>
                                                        <div class="row text-center">
                                                            <div class="col-6 b-r-default">
                                                                <h6 class="text-muted m-b-10">Completed Projects</h6>
                                                                <h4 class="m-b-0 f-w-600 ">175</h4>
                                                            </div>
                                                            <div class="col-6">
                                                                <h6 class="text-muted m-b-10">Total Earnings</h6>
                                                                <h4 class="m-b-0 f-w-600 ">76.6M</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-5 col-md-12">
                                                <div class="card table-card">
                                                    <div class="card-header">
                                                        <h5>Global Sales by Top Locations</h5>
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="table-responsive">
                                                            <table class="table table-hover table-borderless">
                                                                <thead>
                                                                    <tr>
                                                                        <th>#</th>
                                                                        <th>Country</th>
                                                                        <th>Sales</th>
                                                                        <th class="text-right">Average</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td><img src="<?php echo base_url();?>assests/admin/assets/images/widget/GERMANY.jpg" alt="" class="img-fluid img-30"></td>
                                                                        <td>Germany</td>
                                                                        <td>3,562</td>
                                                                        <td class="text-right">56.23%</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><img src="<?php echo base_url();?>assests/admin/assets/images/widget/USA.jpg" alt="" class="img-fluid img-30"></td>
                                                                        <td>USA</td>
                                                                        <td>2,650</td>
                                                                        <td class="text-right">25.23%</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><img src="<?php echo base_url();?>assests/admin/assets/images/widget/AUSTRALIA.jpg" alt="" class="img-fluid img-30"></td>
                                                                        <td>Australia</td>
                                                                        <td>956</td>
                                                                        <td class="text-right">12.45%</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><img src="<?php echo base_url();?>assests/admin/assets/images/widget/UK.jpg" alt="" class="img-fluid img-30"></td>
                                                                        <td>United Kingdom</td>
                                                                        <td>689</td>
                                                                        <td class="text-right">8.65%</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><img src="<?php echo base_url();?>assests/admin/assets/images/widget/BRAZIL.jpg" alt="" class="img-fluid img-30"></td>
                                                                        <td>Brazil</td>
                                                                        <td>560</td>
                                                                        <td class="text-right">3.56%</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <div class="text-right  m-r-20">
                                                            <a href="#!" class="b-b-primary text-primary">View all Sales Locations </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- visitor end -->
                                            <div class="col-xl-4 col-md-6">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>New Users</h5>
                                                    </div>
                                                    <div class="card-block">
                                                        <canvas id="newuserchart" height="250"></canvas>
                                                    </div>
                                                    <div class="card-footer ">
                                                        <div class="row text-center b-t-default">
                                                            <div class="col-4 b-r-default m-t-15">
                                                                <h5>85%</h5>
                                                                <p class="text-muted m-b-0">Satisfied</p>
                                                            </div>
                                                            <div class="col-4 b-r-default m-t-15">
                                                                <h5>6%</h5>
                                                                <p class="text-muted m-b-0">Unsatisfied</p>
                                                            </div>
                                                            <div class="col-4 m-t-15">
                                                                <h5>9%</h5>
                                                                <p class="text-muted m-b-0">NA</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-md-6">
                                                <div class="card">
                                                    <div class="card-block text-center">
                                                        <i class="feather icon-mail text-c-lite-green d-block f-40"></i>
                                                        <h4 class="m-t-15"><span class="text-c-lite-green">8.62k</span> Subscribers</h4>
                                                        <p class="m-b-10">Your main list is growing</p>
                                                        <button class="btn btn-primary btn-sm btn-round">Manage List</button>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-block text-center">
                                                        <i class="feather icon-twitter text-c-green d-block f-40"></i>
                                                        <h4 class="m-t-15"><span class="text-c-blgreenue">+40</span> Followers</h4>
                                                        <p class="m-b-10">Your main list is growing</p>
                                                        <button class="btn btn-success btn-sm btn-round">Check them out</button>
                                                    </div>
                                                </div>
                                            </div>
                                             <!-- sale order start -->
                                             <div class="col-xl-4 col-md-6">
                                                <div class="card o-hidden">
                                                    <div class="card-block bg-c-pink text-white">
                                                        <h6>Sales Per Day <span class="f-right"><i class="feather icon-activity m-r-15"></i>3%</span></h6>
                                                        <canvas id="sale-chart1" height="150"></canvas>
                                                    </div>
                                                    <div class="card-footer text-center">
                                                        <div class="row">
                                                            <div class="col-6 b-r-default">
                                                                <h4>$4230</h4>
                                                                <p class="text-muted m-b-0">Total Revenue</p>
                                                            </div>
                                                            <div class="col-6">
                                                                <h4>321</h4>
                                                                <p class="text-muted m-b-0">Today Sales</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-md-6">
                                                <div class="card o-hidden">
                                                    <div class="card-block bg-c-green text-white">
                                                        <h6>Visits<span class="f-right"><i class="feather icon-activity m-r-15"></i>9%</span></h6>
                                                        <canvas id="sale-chart2" height="150"></canvas>
                                                    </div>
                                                    <div class="card-footer text-center">
                                                        <div class="row">
                                                            <div class="col-6 b-r-default">
                                                                <h4>3562</h4>
                                                                <p class="text-muted m-b-0">Monthly Visits</p>
                                                            </div>
                                                            <div class="col-6">
                                                                <h4>96</h4>
                                                                <p class="text-muted m-b-0">Today Visits</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-md-12">
                                                <div class="card o-hidden">
                                                    <div class="card-block bg-c-blue text-white">
                                                        <h6>Orders<span class="f-right"><i class="feather icon-activity m-r-15"></i>12%</span></h6>
                                                        <canvas id="sale-chart3" height="150"></canvas>
                                                    </div>
                                                    <div class="card-footer text-center">
                                                        <div class="row">
                                                            <div class="col-6 b-r-default">
                                                                <h4>1695</h4>
                                                                <p class="text-muted m-b-0">Monthly Orders</p>
                                                            </div>
                                                            <div class="col-6">
                                                                <h4>52</h4>
                                                                <p class="text-muted m-b-0">Today Orders</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- sale order end -->
                                            </div>
                                        </div>
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