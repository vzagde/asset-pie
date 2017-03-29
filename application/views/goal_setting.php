<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Assetpie">
    <meta name="keyword" content="">
    <title>Assetpie - Investor Dashboard</title>
    <!-- Bootstrap core CSS -->
    <link href="<?=base_url()?>assets/css/bootstrap.css" rel="stylesheet">
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <!--external css-->
    <link href="<?=base_url()?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/lineicons/style.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/hover.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <!-- Custom styles for this template -->
    <link href="<?=base_url()?>assets/css/style.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/style-responsive.css" rel="stylesheet">
    <script src="<?=base_url()?>assets/js/chart-master/Chart.js"></script>
    <!-- Font files -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/9.7.2/css/bootstrap-slider.css">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <div class="col-md-12 text-center goal_inputs_container">
    <div class="white_bg goal_inputs_inner_container">
      <!-- <img src="http://localhost:8080/asset_pie_ci/assets/site-assets/siblings_cloud.png" class="selected_goal_img"> -->
      <i class="fa fa-2x fa-times-circle hover_close" aria-hidden="true"></i>
      <h3>Goal Settings</h3>
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard</p>
      <img src="" data-goal_id="self" style="width: 10%;" class="cloud_bounce hvr-wobble-vertical hvr-wobble-vertical goal_popup_img">
      <h4 class="goal_text">Self</h4>
      <input type="hidden" name="parent_goal_id" id="parent_goal_id">
      <div class="row">
        <div class="col-md-12">
          <div class="col-md-12 input_contain">
            <div class="col-md-2">
              <div class="form-group">
                <select class="form-control" id="current_age">
                  <option value="0">Current Age</option>
                  <?php
                    for ($i=0; $i < 80; $i++) { 
                  ?>
                  <option value="<?=$i?>"><?=$i?></option>
                  <?php
                    }
                  ?>
                </select>
              </div>
            </div>
            <div class="col-md-2">
              <div class="form-group">
                <select class="form-control" id="age_at_goal">
                  <option value="0">Age at Goal</option>
                  <?php
                    for ($i=0; $i < 80; $i++) { 
                  ?>
                  <option value="<?=$i?>"><?=$i?></option>
                  <?php
                    }
                  ?>
                </select>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label class="sr-only" for="goal_amount">Amount for Goal</label>
                <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                  <div class="input-group-addon"><i class="fa fa-inr" aria-hidden="true"></i></div>
                  <input type="number" class="form-control" id="goal_amount" placeholder="10,00,000">
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <select class="form-control" id="goal_options">
                </select>
              </div>
            </div>
            <div class="col-md-12 child_input_container">
              <div class="col-md-4 col-md-offset-2">
                <div class="form-group">
                  <label class="sr-only" for="goal_amount">Parents's Name</label>
                  <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                    <div class="input-group-addon"><i class="fa fa-child" aria-hidden="true"></i></div>
                    <input type="text" class="form-control" id="child_name" placeholder="Child's Name">
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <select class="form-control" id="child_gender">
                    <option value="0">Select Child's Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label class="custom-control custom-radio">
                  <input id="radio1" name="radio" type="checkbox" class="custom-control-input">
                  <span class="custom-control-indicator"></span>
                  <span class="custom-control-description">Do you wish for Loan to achive your goal?</span>
                </label>
              </div>
            </div>
            <div class="col-md-12">
              <button class="btn btn-assetpie hvr-float-shadow btn_goal_proceed">Proceed</button>
              <button class="btn btn-assetpie hvr-float-shadow btn_goal_add">Add More</button>
            </div>
            <div class="col-md-12">
              <p class="err_goals" style="color: #e23d3d"></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
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
      <section class="wrapper">
        <div class="row">
          <div class="col-md-12 text-center">
            <h2>Goal Settings</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard</p>
            <div class="col-md-12 mar5">
              <div class="col-md-8">
                <img src="<?=base_url()?>assets/site-assets/self_cloud.png" data-goal_id="1" style="width: 25%;" class="cloud_bounce hvr-wobble-vertical hvr-wobble-vertical">
                <img src="<?=base_url()?>assets/site-assets/child_cloud.png" data-goal_id="2" style="width: 25%; position: absolute; top: 10%; left: 17%" class="cloud_bounce hvr-wobble-to-bottom-right">
                <img src="<?=base_url()?>assets/site-assets/assets_cloud.png" data-goal_id="3" style="width: 25%; position: absolute; top: 2%; right: 15%" class="cloud_bounce hvr-wobble-to-top-right">
                <img src="<?=base_url()?>assets/site-assets/parents_cloud.png" data-goal_id="4" style="width: 25%; position: absolute; top: 32%; left: 10%" class="cloud_bounce hvr-wobble-to-bottom-right">
                <img src="<?=base_url()?>assets/site-assets/siblings_cloud.png" data-goal_id="5" style="width: 25%; position: absolute; top: 22%; right: 8%" class="cloud_bounce hvr-wobble-to-top-right">              
                <img src="<?=base_url()?>assets/site-assets/insurance_cloud.png" data-goal_id="6" style="width: 25%; position: absolute; top: 60%; left: 15%" class="cloud_bounce hvr-wobble-to-bottom-right">
                <img src="<?=base_url()?>assets/site-assets/society_cloud.png" data-goal_id="7" style="width: 25%; position: absolute; top: 60%; right: 15%" class="cloud_bounce hvr-wobble-to-top-right">
                <div class="investor_gs_container">
                  <img src="<?=base_url()?>assets/site-assets/investor_avtar.png" class="img-responsive">
                </div>
              </div>
              <div class="col-md-4">
                <div class="cart_gs_container">
                  <div class="drop_container">
                    <img src="" style="width: 70%; display: none;" class="append_img_goal cart_icon_bounce">
                  </div>
                  <img src="<?=base_url()?>assets/site-assets/cart_big.png">
                </div>
              </div>
            </div>
          </div>
        </div>
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

    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/js/script.js"></script>
  </body>
</html>
