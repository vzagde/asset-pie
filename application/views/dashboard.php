<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Assetpie">
    <meta name="keyword" content="">
    <title>Assetpie - Investor Dashboard</title>
    <link href="<?=base_url()?>assets/css/bootstrap.css" rel="stylesheet">
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/lineicons/style.css">    
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="<?=base_url()?>assets/css/style.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/style-responsive.css" rel="stylesheet">
    <script src="<?=base_url()?>assets/js/chart-master/Chart.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/9.7.2/css/bootstrap-slider.css">
  </head>
  <body>
  <section id="container">
    <header class="header black-bg">
          <a href="<?=base_url();?>home/investor" style="width: 50%" class="logo"><b><img src="<?=base_url()?>assets/asset_pie_logo.png" class="logo_img"></b></a>
          <div class="top-menu">
          	<ul class="nav pull-right top-menu">
                <li>
                  <div class="sidebar-toggle-box">
                    <i class="fa fa-search fa-2x color_grey" aria-hidden="true"></i>
                  </div>
                </li>
                <li>
                  <div class="sidebar-toggle-box">
                    <i class="fa fa-bell-o fa-2x color_grey" aria-hidden="true"></i>
                    <span class="badge">19</span>
                  </div>
                </li>
                <li>
                  <div class="sidebar-toggle-box">
                    <div class="fa fa-bars" data-placement="left" data-original-title="Toggle Navigation"></div>
                  </div>
                </li>
          	</ul>
          </div>
      </header>
      <aside>
          <div id="sidebar" class="nav-collapse ">
              <ul class="sidebar-menu" id="nav-accordion">
              	  <p class="centered"><a href="profile.html"><img src="<?=base_url()?>assets/img/ui-sam.jpg" class="img-circle" width="100"></a></p>
              	  <h5 class="centered">Vishal</h5>
                  <li class="mt">
                      <a class="active" href="#">
                          <i class="fa fa-dashboard"></i>
                          <span>VISIONBOARD</span>
                      </a>
                  </li>
                  <li class="">
                      <a href="#">
                          <i class="fa fa-dashboard"></i>
                          <span>VIRTUAL OFFICE</span>
                      </a>
                  </li>
                  <li class="">
                      <a href="#">
                          <i class="fa fa-dashboard"></i>
                          <span>ADVISORS</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="javascrip:void(0)" >
                          <i class="fa fa-desktop"></i>
                          <span>KNOWLEDGE BANK</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="#">NEWSLETTERS</a></li>
                          <li><a  href="#">TRAINING</a></li>
                          <li><a  href="#">EVENTS</a></li>
                          <li><a  href="#">GLOSSARY</a></li>
                          <li><a  href="#">BLOGS</a></li>
                          <li><a  href="#">RATIOS</a></li>
                      </ul>
                  </li>
                  <li class="">
                      <a href="#">
                          <i class="fa fa-dashboard"></i>
                          <span>EXPENSE TRACKER</span>
                      </a>
                  </li>
                  <li class="">
                      <a href="#">
                          <i class="fa fa-dashboard"></i>
                          <span>TOOLS</span>
                      </a>
                  </li>
                  <!-- <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-cogs"></i>
                          <span>Components</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="calendar.html">Calendar</a></li>
                          <li><a  href="gallery.html">Gallery</a></li>
                          <li><a  href="todo_list.html">Todo List</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-book"></i>
                          <span>Extra Pages</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="blank.html">Blank Page</a></li>
                          <li><a  href="login.html">Login</a></li>
                          <li><a  href="lock_screen.html">Lock Screen</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-tasks"></i>
                          <span>Forms</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="form_component.html">Form Components</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-th"></i>
                          <span>Data Tables</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="basic_table.html">Basic Table</a></li>
                          <li><a  href="responsive_table.html">Responsive Table</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class=" fa fa-bar-chart-o"></i>
                          <span>Charts</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="morris.html">Morris</a></li>
                          <li><a  href="chartjs.html">Chartjs</a></li>
                      </ul>
                  </li> -->
              </ul>
          </div>
      </aside>
      <section id="main-content">
          <section class="wrapper">
              <div class="row">
                  <div class="col-lg-12 text-center">
                    <br>
                    <h2 class="bold_600 color_black_light_dark">Good Morning, Niti.</h2>
                    <h3 class="thin_text color_black_light_dark mar0">WELCOME TO YOUR VISIONBOARD</h3>
                    <img src="<?=base_url()?>assets/colored_line.png" class="colored_line">
                    <h4 class="color_black_light_dark bold_400">Complete your profile in <b>3 easy steps</b>.</h4>
                    <h4 class="color_black_light_dark bold_400">Find out where you need to invest to achive your goals.</h4>
                    <br>
                  </div>
                  <div class="col-lg-12">
                    <ul class="nav nav-pills nav-justified">
                      <li class="active tab_links" data-tab-id="ideal"><a href="javascrip:void(0)">GOALS<br>PLANNING</a></li>
                      <li class="tab_links" data-tab-id="expense"><a href="javascrip:void(0)">FINANCIAL<br>ANALYSIS</a></li>
                      <li class="tab_links" data-tab-id="current"><a href="javascrip:void(0)">CURRENT<br>PORTFOLIO</a></li>
                      <li class="tab_links" data-tab-id="timeline"><a href="javascrip:void(0)">BUDGET<br>TRACKER</a></li>
                    </ul>
                  </div>
                  <div class="col-lg-12">
                  <div class="ideal_container tab_container col-lg-12 text-center">
                    <br>
                    <h4 class="color_black_light_dark bold_400">Invest with a goal in mind so that you <b>NEVER LOSE INTEREST</b>.</h4>
                    <h4 class="color_black_light_dark bold_400">Here's your ideal portfolio based on your <b>CONSERVATIVE</b> risk quotient.</h4>
                    <div class="col-md-7">
                      <div id="ideal_chart"></div>
                      <a href="" class="hyperlink"><p>Add / Edit Your Goals</p></a>
                    </div>
                    <div class="col-md-5">
                      <div class="ideal_button_sec">
                        <input id="ex13" type="text" data-slider-ticks="[0, 1, 2]" data-slider-ticks-snap-bounds="0" data-slider-ticks-labels='["CONSERVATIVE", "MODERATE", "AGGRESSIVE"]' data-slider-tooltip="hide" data-slider-value="0"/>
                        <div class="button_set">
                          <button class="btn debt_btn ideal_debt_btn">DEBT - 20%</button>
                          <button class="btn gold_btn ideal_gold_btn">GOLD - 32%</button>
                          <button class="btn alt_invst_btn ideal_alt_invst_btn">ALT. INVST. - 10%</button>
                          <button class="btn equity_btn ideal_equity_btn">EQUITY - 28%</button>
                          <button class="btn real_estate_btn ideal_real_estate_btn">REAL ESTATE - 10%</button>
                          <button class="btn calculated_insurance_btn">CALCULATED INSURANCE</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="current_container tab_container col-lg-12 text-center">
                    <br>
                    <h4 class="color_black_light_dark bold_400">Monitor your current portfolio to <b>NEVER LOSE INTEREST</b>.</h4>
                    <h4 class="color_black_light_dark bold_400">Get macro view of your investments.</h4>
                    <div class="col-md-7">
                      <style>
                        .toggle.ios, .toggle-on.ios, .toggle-off.ios { border-radius: 20px; }
                        .toggle.ios .toggle-handle { border-radius: 20px; }
                      </style>
                      <span class="toggle_daily_monthly">Current</span>
                      <input type="checkbox" id="current_graph_toggle" data-on=" " data-off=" " checked data-toggle="toggle" data-style="ios" data-onstyle="warning" data-offstyle="warning">
                      <span class="toggle_daily_monthly">Allocation</span>
                      <div id="current_chart"></div>
                      <a href="" class="hyperlink"><p>Edit Your Portfolio</p></a>
                    </div>
                    <div class="col-md-5">
                      <div class="ideal_button_sec">
                        <input id="ex14" type="text" data-slider-ticks="[0, 1, 2]" data-slider-ticks-snap-bounds="0" data-slider-ticks-labels='["CONSERVATIVE", "MODERATE", "AGGRESSIVE"]' data-slider-tooltip="hide" data-slider-value="0"/>
                        <div class="button_set">
                          <button class="btn debt_btn">DEBT - <i class="fa fa-inr" aria-hidden="true"></i> 1,00,000</button>
                          <button class="btn gold_btn">GOLD - <i class="fa fa-inr" aria-hidden="true"></i> 2,00,000</button>
                          <button class="btn alt_invst_btn">ALT. INVST. - <i class="fa fa-inr" aria-hidden="true"></i> 3,00,000</button>
                          <button class="btn equity_btn">EQUITY - <i class="fa fa-inr" aria-hidden="true"></i> 1,00,000</button>
                          <button class="btn real_estate_btn">REAL ESTATE - <i class="fa fa-inr" aria-hidden="true"></i> 2,00,000</button>
                          <button class="btn calculated_insurance_btn">INSURANCE - <i class="fa fa-inr" aria-hidden="true"></i> 2,00,000</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="expense_container tab_container col-lg-12 text-center">
                    <br>
                    <h4 class="color_black_light_dark bold_400">Monitor your current portfolio to <b>NEVER LOSE INTEREST</b>.</h4>
                    <h4 class="color_black_light_dark bold_400">Keep track of your daily expense.</h4>
                    <div class="col-md-7">
                      <style>
                        .toggle.ios, .toggle-on.ios, .toggle-off.ios { border-radius: 20px; }
                        .toggle.ios .toggle-handle { border-radius: 20px; }
                      </style>
                      <span class="toggle_daily_monthly">Assets available for Goal</span>
                      <input type="checkbox" id="finance_graph_toggle" data-on=" " data-off=" " checked data-toggle="toggle" data-style="ios" data-onstyle="warning" data-offstyle="warning">
                      <span class="toggle_daily_monthly">Income</span>
                      <div id="financial_chart1"></div>
                      <a href="" class="hyperlink"><p>Update Your Financial Report</p></a>
                    </div>
                  </div>
              </div>
          </section>
      </section>
    </section>
    <script src="<?=base_url()?>assets/js/jquery.js"></script>
    <script src="<?=base_url()?>assets/js/jquery-1.8.3.min.js"></script>
    <script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="<?=base_url()?>assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="<?=base_url()?>assets/js/jquery.scrollTo.min.js"></script>
    <script src="<?=base_url()?>assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="<?=base_url()?>assets/js/jquery.sparkline.js"></script>
    <script src="<?=base_url()?>assets/js/common-scripts.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/js/gritter-conf.js"></script>
    <script src="<?=base_url()?>assets/js/sparkline-chart.js"></script>    
  	<script src="<?=base_url()?>assets/js/zabuto_calendar.js"></script>
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/9.7.2/bootstrap-slider.js"></script>
  	<script type="text/javascript">
        $(document).ready(function () {
          var user_details = '<?php print_r($goal_details);?>';
          $(".ideal_container").fadeIn();
          ideal_chart();
        });
	  </script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/js/script.js"></script>
  </body>
</html>
