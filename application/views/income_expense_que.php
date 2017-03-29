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
  <!-- <div class="col-md-12 text-center goal_inputs_container">
    <div class="white_bg goal_inputs_inner_container">
      <img src="http://localhost:8080/asset_pie_ci/assets/site-assets/siblings_cloud.png" class="selected_goal_img">
      <i class="fa fa-2x fa-times-circle hover_close" aria-hidden="true"></i>

    </div>
  </div> -->
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
            <h3>Income & Expense</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard</p>
            <input type="hidden" name="parent_goal_id" id="parent_goal_id">
            <div class="row">
              <div class="col-md-12">

                <!-- START -->
                <!-- Assets Input Fields -->
                <div class="col-md-6 inc_exp_input_contain" style="text-align: left">
                  <div class="col-md-12">
                    <h4>Assets</h4>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="sr-only" for="personal_assets_amount">Personal Assets</label>
                      <label>Personal Assets&nbsp;&nbsp;<i class="fa fa-question-circle" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Residential Property - Current Home, Residential Property - Second Home, Vehicles, Other Personal Artefacts"></i></label>
                      <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon"><i class="fa fa-inr" aria-hidden="true"></i></div>
                        <input type="number" class="form-control" id="personal_assets_amount" placeholder="10,00,000">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="sr-only" for="investment_assets_debt_amount">Debt</label>
                      <label>Debt</label>
                      <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon"><i class="fa fa-inr" aria-hidden="true"></i></div>
                        <input type="number" class="form-control" id="investment_assets_debt_amount" placeholder="10,00,000">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="sr-only" for="investment_assets_equity_amount">Equity</label>
                      <label>Equity</label>
                      <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon"><i class="fa fa-inr" aria-hidden="true"></i></div>
                        <input type="number" class="form-control" id="investment_assets_equity_amount" placeholder="10,00,000">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="sr-only" for="investment_assets_commodities_amount">Commodities</label>
                      <label>Commodities</label>
                      <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon"><i class="fa fa-inr" aria-hidden="true"></i></div>
                        <input type="number" class="form-control" id="investment_assets_commodities_amount" placeholder="10,00,000">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="sr-only" for="investment_assets_real_eastate_amount">Real Estate</label>
                      <label>Real Estate</label>
                      <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon"><i class="fa fa-inr" aria-hidden="true"></i></div>
                        <input type="number" class="form-control" id="investment_assets_real_eastate_amount" placeholder="10,00,000">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="sr-only" for="investment_assets_other_inv_amount">Other Investments</label>
                      <label>Other Investments</label>
                      <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon"><i class="fa fa-inr" aria-hidden="true"></i></div>
                        <input type="number" class="form-control" id="investment_assets_other_inv_amount" placeholder="10,00,000">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="alert alert-success alert-total-assets" role="alert">
                      <span>Your Total Assets : </span>
                      <i class="fa fa-inr" aria-hidden="true"></i>&nbsp;<span class="total_assets_amount">0</span>
                      
                    </div>
                  </div>
                </div>
                <!-- Assets Input Fields -->
                <!-- END -->

                <!-- START -->
                <!-- Liabilities Input Fields -->
                <div class="col-md-6 inc_exp_input_contain" style="text-align: left">
                  <div class="col-md-12">
                    <h4>Liabilities</h4>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="sr-only" for="liabilities_home_loan">Loan</label>
                      <label>Loan</label>
                      <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon"><i class="fa fa-inr" aria-hidden="true"></i></div>
                        <input type="number" class="form-control" id="liabilities_loan" placeholder="10,00,000">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="sr-only" for="liabilities_creadit_card">Credit Card</label>
                      <label>Credit Card</label>
                      <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon"><i class="fa fa-inr" aria-hidden="true"></i></div>
                        <input type="number" class="form-control" id="liabilities_creadit_card" placeholder="10,00,000">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="sr-only" for="liabilities_loan_amount">Loans from friends / relatives</label>
                      <label>Loans from friends / relatives</label>
                      <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon"><i class="fa fa-inr" aria-hidden="true"></i></div>
                        <input type="number" class="form-control" id="liabilities_loan_amount" placeholder="10,00,000">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="sr-only" for="liabilities_others">Others</label>
                      <label>Others</label>
                      <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon"><i class="fa fa-inr" aria-hidden="true"></i></div>
                        <input type="number" class="form-control" id="liabilities_others" placeholder="10,00,000">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="alert alert-danger alert-total-liabilities" role="alert">
                      <span>Your Total Liabilities : </span>
                      <i class="fa fa-inr" aria-hidden="true"></i>&nbsp;<span class="total_liabilities_amount">0</span>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="sr-only" for="liabilities_emi">Total EMI's</label>
                      <label>Total EMI's</label>
                      <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon"><i class="fa fa-inr" aria-hidden="true"></i></div>
                        <input type="number" class="form-control" id="liabilities_emi" placeholder="10,00,000">
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Liabilities Input Fields -->
                <!-- END -->

                <!-- START -->
                <!-- Income Input Fields -->
                <div class="col-md-6 inc_exp_input_contain" style="text-align: left">
                  <div class="col-md-12">
                    <h4>Income</h4>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="sr-only" for="inocme_salary">Salary</label>
                      <label>Salary</label>
                      <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon"><i class="fa fa-inr" aria-hidden="true"></i></div>
                        <input type="number" class="form-control" id="inocme_salary" placeholder="10,00,000">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="sr-only" for="inocme_spouse_salary">Spouse Salary</label>
                      <label>Spouse Salary</label>
                      <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon"><i class="fa fa-inr" aria-hidden="true"></i></div>
                        <input type="number" class="form-control" id="inocme_spouse_salary" placeholder="10,00,000">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="sr-only" for="inocme_prefessional">Professional Income</label>
                      <label>Professional Income</label>
                      <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon"><i class="fa fa-inr" aria-hidden="true"></i></div>
                        <input type="number" class="form-control" id="inocme_professional" placeholder="10,00,000">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="sr-only" for="inocme_rental">Rental Income</label>
                      <label>Rental Income</label>
                      <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon"><i class="fa fa-inr" aria-hidden="true"></i></div>
                        <input type="number" class="form-control" id="inocme_rental" placeholder="10,00,000">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="sr-only" for="inocme_dividends">Dividends</label>
                      <label>Dividends</label>
                      <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon"><i class="fa fa-inr" aria-hidden="true"></i></div>
                        <input type="number" class="form-control" id="inocme_dividends" placeholder="10,00,000">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="sr-only" for="inocme_pension">Pension</label>
                      <label>Pension</label>
                      <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon"><i class="fa fa-inr" aria-hidden="true"></i></div>
                        <input type="number" class="form-control" id="inocme_pension" placeholder="10,00,000">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="sr-only" for="inocme_interest">Interest</label>
                      <label>Interest</label>
                      <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon"><i class="fa fa-inr" aria-hidden="true"></i></div>
                        <input type="number" class="form-control" id="inocme_interest" placeholder="10,00,000">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="sr-only" for="inocme_others">Others</label>
                      <label>Others</label>
                      <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon"><i class="fa fa-inr" aria-hidden="true"></i></div>
                        <input type="number" class="form-control" id="inocme_others" placeholder="10,00,000">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="alert alert-success alert-total-income" role="alert">
                      <span>Your Total Income : </span>
                      <i class="fa fa-inr" aria-hidden="true"></i>&nbsp;<span class="total_income_amount">0</span>
                    </div>
                  </div>
                </div>
                <!-- Income Input Fields -->
                <!-- END -->

                <!-- START -->
                <!-- Expenses Input Fields -->
                <div class="col-md-6 inc_exp_input_contain" style="text-align: left">
                  <div class="col-md-12">
                    <h4>Expenses</h4>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="sr-only" for="expense_rent">Rent</label>
                      <label>Rent</label>
                      <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon"><i class="fa fa-inr" aria-hidden="true"></i></div>
                        <input type="number" class="form-control" id="expense_rent" placeholder="10,00,000">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="sr-only" for="expense_household_living">Household Living Expenses</label>
                      <label>Household Living Expenses</label>
                      <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon"><i class="fa fa-inr" aria-hidden="true"></i></div>
                        <input type="number" class="form-control" id="expense_household_living" placeholder="10,00,000">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="sr-only" for="expense_travel">Travel</label>
                      <label>Travel</label>
                      <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon"><i class="fa fa-inr" aria-hidden="true"></i></div>
                        <input type="number" class="form-control" id="expense_travel" placeholder="10,00,000">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="sr-only" for="expense_entertainment">Entertainment</label>
                      <label>Entertainment</label>
                      <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon"><i class="fa fa-inr" aria-hidden="true"></i></div>
                        <input type="number" class="form-control" id="expense_entertainment" placeholder="10,00,000">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="sr-only" for="expense_medical">Medical</label>
                      <label>Medical</label>
                      <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon"><i class="fa fa-inr" aria-hidden="true"></i></div>
                        <input type="number" class="form-control" id="expense_medical" placeholder="10,00,000">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="sr-only" for="expense_personal">Personal</label>
                      <label>Personal</label>
                      <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon"><i class="fa fa-inr" aria-hidden="true"></i></div>
                        <input type="number" class="form-control" id="expense_personal" placeholder="10,00,000">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="sr-only" for="expense_misc">Misc.</label>
                      <label>Misc.</label>
                      <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon"><i class="fa fa-inr" aria-hidden="true"></i></div>
                        <input type="number" class="form-control" id="expense_misc" placeholder="10,00,000">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="alert alert-danger alert-total-expense" role="alert">
                      <span>Your Total Expense : </span>
                      <i class="fa fa-inr" aria-hidden="true"></i>&nbsp;<span class="total_expense_amount">0</span>
                    </div>
                  </div>
                </div>
                <!-- Expenses Input Fields -->
                <!-- END -->

                <div class="col-md-12">
                  <button class="btn btn-assetpie hvr-float-shadow proceed_to_dashboard">Proceed</button>
                </div>
                <div class="col-md-12">
                  <p class="err_goals" style="color: #e23d3d"></p>
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
    <script type="text/javascript">
      $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
      })
    </script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/js/script.js"></script>
  </body>
</html>