var base_url = 'http://localhost:8080/asset-pie/index.php/';
var img_url = 'http://localhost:8080/asset-pie/assets/uploads/';

function ideal_chart(){
	$.ajax({
		url: base_url+'api/get_ideal_chart_data',
		type:'GET',
		contentType:'json',
		crossDomain:true,
		cache:false,
	}).done(function(res){
		var data = [];
		var categories = [];
		var colors = Highcharts.getOptions().colors;
		$.each(res.pie_data, function(index, value){
			var pie_data = [];
			var drilldown_category = [];
			var drilldown_data = [];
			$.each(value.drilldown_data, function(index, val){
				drilldown_category.push(val.category.asset_class);
				drilldown_data.push(Math.round(val.category.value_per));
			})

			categories.push(value.goal_name);

			var drilldown_pie_data = [];
			drilldown_pie_data['name'] = '';
			drilldown_pie_data['categories'] = drilldown_category;
			drilldown_pie_data['categories_type'] = drilldown_category;
			drilldown_pie_data['data'] = drilldown_data;
			drilldown_pie_data['color'] = colors[0];
			pie_data['y'] = Math.round(value.amount_per);

			pie_data['color'] = colors[0];
			pie_data['name'] = value.goal_name;
			pie_data['drilldown'] = drilldown_pie_data;
			data.push(pie_data);
		})
		
		$(".ideal_debt_btn").html("DEBT - "+res.asset_division['DEBT']+"%");
		$(".ideal_gold_btn").html("GOLD - "+res.asset_division['GOLD']+"%");
		$(".ideal_alt_invst_btn").html("ALT. INVST. - "+res.asset_division['ALT. INVST.']+"%");
		$(".ideal_equity_btn").html("EQUITY - "+res.asset_division['EQUITY']+"%");
		$(".ideal_real_estate_btn").html("REAL ESTATE - "+res.asset_division['REAL ESTATE']+"%");

	    var browserData = [];
	    var versionsData = [];
	    var i;
	    var j;
	    var dataLen = data.length;
	    var drillDataLen;
	    var brightness;

		for (i = 0; i < dataLen; i += 1) {
		    browserData.push({
		        name: categories[i],
		        y: data[i].y,
		        asset_content: data[i].name,
		        color: '#fff'
		    });

		    drillDataLen = data[i].drilldown.data.length;
		    for (j = 0; j < drillDataLen; j += 1) {
		        var pie_color = '';
		        if (data[i].drilldown.categories_type[j] == 'DEBT') {
		          pie_color = '#f16f61';
		        }

		        if (data[i].drilldown.categories_type[j] == 'EQUITY') {
		          pie_color = '#149793';
		        }

		        if (data[i].drilldown.categories_type[j] == 'REAL ESTATE') {
		          pie_color = '#f8a943';
		        }

		        if (data[i].drilldown.categories_type[j] == 'ALT. INVST.') {
		          pie_color = '#1a6470';
		        }

		        if (data[i].drilldown.categories_type[j] == 'GOLD') {
		          pie_color = '#2fb682';
		        }

		        brightness = 0.2 - (j / drillDataLen) / 5;
		        versionsData.push({
		            name: data[i].drilldown.categories[j],
		            y: data[i].drilldown.data[j],
		            color: pie_color
		        });
		    }
		}

		Highcharts.chart('ideal_chart', {
		    chart: {
		        type: 'pie'
		    },
		    title: {
		        text: ''
		    },
		    subtitle: {
		        text: ''
		    },
		    yAxis: {
		        title: {
		            text: ''
		        }
		    },
		    plotOptions: {
		        pie: {
		            shadow: false,
		            center: ['50%', '50%']
		        }
		    },
		    series: [{
		        name: 'Goals',
		        data: browserData,
		        size: '100%',
		        dataLabels: {
		            formatter: function () {
		              return this.y > 1 ? this.point.y : null;
		            },
		            color: '#ffffff',
		            distance: -100,
		        },
		    }, {
		        name: 'Asset Classes',
		        data: versionsData,
		        size: '100%',
		        innerSize: '75%',
		        dataLabels: {
		            formatter: function () {
		              return this.y > 1 ? this.y : null;
		            },
		            distance: 10
		        }
		    }],
		});
	})

	$("#ex13").slider({
		ticks: [0, 1, 2],
		ticks_labels: ['CONSERVATIVE', 'MODERATE', 'AGGRESSIVE'],
		ticks_snap_bounds: 30
	});
}

function current_chart(){
	var pie_data = [
		            {
		                name: 'Equity',
		                y: 15,
		                color: '#149793'
		            },
		            {
		                name: 'Debt',
		                y: 10,
		                color: '#f16f61'
		            },
		            {
		                name: 'Real Estate',
		                y: 10,
		                color: '#f8a943'
		            },
		            {
		                name: 'Alt Invst',
		                y: 15,
		                color: '#1a6470'
		            },
		            {
		                name: 'Equity',
		                y: 10,
		                color: '#149793'
		            },
		            {
		                name: 'Gold',
		                y: 10,
		                color: '#2fb682'
		            },
		            {
		                name: 'Real Estate',
		                y: 10,
		                color: '#f8a943'
		            },
		            {
		                name: 'Debt',
		                y: 10,
		                color: '#f16f61'
		            },
		            {
		                name: 'Alt Invst',
		                y: 10,
		                color: '#1a6470'
		            },
		        ];
	Highcharts.chart('current_chart', {
	    chart: {
	        plotBackgroundColor: null,
	        plotBorderWidth: null,
	        plotShadow: false,
	        type: 'pie'
	    },
	    title: {
	        useHTML: true,
	        text: '<p class="current_pie_center1">As of 10/03/2017 </p><p class="current_pie_center2">your portfolio has gained by</p><p class="current_pie_center3"><i class="fa fa-arrow-up" aria-hidden="true"></i>8%</p><hr class="current_pie_center4"><h3 class="current_pie_center5"><i class="fa fa-inr" aria-hidden="true"></i>2,34,567</h3></p>',	
	        align: 'center',
	        verticalAlign: 'middle',
	        y: -45,
	        // x: -27,
	        center: ['-40%', '-50%'],
	        style: { "fontSize": "30px" }
	    },
	    tooltip: {
	        pointFormat: '{point.percentage:.1f}%</b>'
	    },
	    plotOptions: {
	        pie: {
	            shadow: false,
	            // center: ['45%', '50%'],
		        dataLabels: {
		            formatter: function () {
		              return this.y > 1 ? this.y : null;
		            },
		            distance: 10,
		        }
	        }
	    },
	    series: [{
	        type: 'pie',
	        name: 'Current Asset Allocation',
	        size: '100%',
	        innerSize: '75%',
	        data: pie_data,
	    }]
	});

	$("#ex14").slider({
		ticks: [0, 1, 2],
		ticks_labels: ['CONSERVATIVE', 'MODERATE', 'AGGRESSIVE'],
		ticks_snap_bounds: 30
	});
}

function expense_chart(){
	Highcharts.chart('expense_chart', {
	    title: {
	        text: ''
	    },
	    xAxis: {
	        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'June', 'July', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec']
	    },
	    yAxis: {
	    	visible: false,
	    },
	    legend: {
	    	enabled: false,
	    },
		series: [{
		    type: 'spline',
		    name: 'Average',
		    data: [1, 2, 3, 4, 5, 6, 5, 4, 2, 6, 3, 1],
		    zoneAxis: 'x',
		    color: '#2ab883',
			color: {
			    linearGradient: { x1: 0, x2: 2, y1: 1, y2: 1 },
			    stops: [
			        [0, '#1b6873'],
			        [1, '#2ab883'],
			        [2, '#1b9b95'],
			    ]
			},
		    lineWidth: 5,
		    animation: {
		    	duration: 4000,
		    },
		    className: 'expense_spline',
		    zIndex: 10,
		    shadow: true,
		    point: {
		    	events: {
		    		mouseOver: function(){
						chart = this.series.chart;
						console.log(chart);
		    		}
		    	}
		    }
		}, {
		    type: 'column',
		    name: 'Jane',
		    data: [1, 2, 3, 4, 5, 6, 5, 4, 2, 6, 3, 1],
		    color: '#fbfbfb',
		    // borderColor: '#f26a3a',
		    borderRadius: 10,
		    zIndex: 5
		}],
	});
}

function financial_analysis1(){
	var colors = Highcharts.getOptions().colors,
	    categories = ['Expense', 'Surplus'],
	    data = [{
	        y: 56,
	        color: colors[0],
	        drilldown: {
	            name: 'MSIE versions',
	            categories: ['MSIE 9.0', 'MSIE 10.0', 'MSIE 11.0'],
	            data: [26, 6, 24],
	            color: colors[0]
	        }
	    }, {
	        y: 44,
	        color: colors[1],
	        drilldown: {
	            name: 'Firefox versions',
	            categories: ['Firefox v37', 'Firefox v38'],
	            data: [24, 20],
	            color: colors[1]
	        }
	    }],
	    browserData = [],
	    versionsData = [],
	    i,
	    j,
	    dataLen = data.length,
	    drillDataLen,
	    brightness;


	// Build the data arrays
	for (i = 0; i < dataLen; i += 1) {

	    // add browser data
	    browserData.push({
	        name: categories[i],
	        y: data[i].y,
	        color: data[i].color
	    });

	    // add version data
	    drillDataLen = data[i].drilldown.data.length;
	    for (j = 0; j < drillDataLen; j += 1) {
	        brightness = 0.2 - (j / drillDataLen) / 5;
	        versionsData.push({
	            name: data[i].drilldown.categories[j],
	            y: data[i].drilldown.data[j],
	            color: Highcharts.Color(data[i].color).brighten(brightness).get()
	        });
	    }
	}

	// Create the chart
	Highcharts.chart('financial_chart1', {
	    chart: {
	        type: 'pie'
	    },
	    title: {
	        text: ''
	    },
	    subtitle: {
	        text: ''
	    },
	    yAxis: {
	        title: {
	            text: ''
	        }
	    },
	    plotOptions: {
	        pie: {
	            shadow: false,
	            center: ['50%', '50%']
	        }
	    },
	    tooltip: {
	        valueSuffix: '%'
	    },
	    series: [{
	        name: 'Expense / Surplus',
	        data: browserData,
	        size: '70%',
	        dataLabels: {
	            formatter: function () {
	                return this.y > 5 ? '' : null;
	            },
	            color: '#ffffff',
	            distance: -30
	        }
	    }, {
	        name: 'Income',
	        data: versionsData,
	        size: '100%',
	        innerSize: '75%',
	        dataLabels: {
	            formatter: function () {
	                return this.y > 1 ? this.y + '%' : null;
	            }
	        }
	    }]
	});
}

function financial_analysis2(){
	var colors = Highcharts.getOptions().colors,
	    categories = ['Expense', 'Surplus'],
	    data = [{
	        y: 56,
	        color: colors[0],
	        drilldown: {
	            name: 'MSIE versions',
	            categories: ['MSIE 9.0', 'MSIE 10.0', 'MSIE 11.0'],
	            data: [26, 6, 24],
	            color: colors[0]
	        }
	    }, {
	        y: 44,
	        color: colors[1],
	        drilldown: {
	            name: 'Firefox versions',
	            categories: ['Firefox v37', 'Firefox v38'],
	            data: [24, 20],
	            color: colors[1]
	        }
	    }],
	    browserData = [],
	    versionsData = [],
	    i,
	    j,
	    dataLen = data.length,
	    drillDataLen,
	    brightness;


	// Build the data arrays
	for (i = 0; i < dataLen; i += 1) {

	    // add browser data
	    browserData.push({
	        name: categories[i],
	        y: data[i].y,
	        color: data[i].color
	    });

	    // add version data
	    drillDataLen = data[i].drilldown.data.length;
	    for (j = 0; j < drillDataLen; j += 1) {
	        brightness = 0.2 - (j / drillDataLen) / 5;
	        versionsData.push({
	            name: data[i].drilldown.categories[j],
	            y: data[i].drilldown.data[j],
	            color: Highcharts.Color(data[i].color).brighten(brightness).get()
	        });
	    }
	}

	// Create the chart
	Highcharts.chart('financial_chart1', {
	    chart: {
	        type: 'pie'
	    },
	    title: {
	        text: ''
	    },
	    subtitle: {
	        text: ''
	    },
	    yAxis: {
	        title: {
	            text: ''
	        }
	    },
	    plotOptions: {
	        pie: {
	            shadow: false,
	            center: ['50%', '50%']
	        }
	    },
	    tooltip: {
	        valueSuffix: '%'
	    },
	    series: [{
	        name: 'Expence / Surplus',
	        data: browserData,
	        size: '70%',
	        dataLabels: {
	            formatter: function () {
	                return this.y > 5 ? '' : null;
	            },
	            color: '#ffffff',
	            distance: -30
	        }
	    }, {
	        name: 'Income',
	        data: versionsData,
	        size: '100%',
	        innerSize: '75%',
	        dataLabels: {
	            formatter: function () {
	                return this.y > 1 ? this.y + '%' : null;
	            }
	        }
	    }]
	});
}

// Investor Dashboard Custom Jquery

$(".tab_links").click(function(){
	var tab_id = '.'+$(this).data('tab-id')+'_container';
	if ($(this).data('tab-id') == 'ideal') {
		ideal_chart();
	} else if ($(this).data('tab-id') == 'current') {
		current_chart();
	} else if ($(this).data('tab-id') == 'expense') {
		// expense_chart();
		financial_analysis1();
	}
	console.log(tab_id);
	$('.tab_links').removeClass('active');
	$(this).addClass('active');
	$(".tab_container").fadeOut();
	$(tab_id).fadeIn();
})

$(".cloud_bounce").click(function(){
	var img_src = $(this).attr('src');
	$(".append_img_goal").attr('src', img_src);
	// $(".selected_goal_img").attr('src', img_src);
	var goal_parent_type = $(this).data('goal_id');
	$(".goal_popup_img").attr('src', img_src);
	$.ajax({
		url: base_url+'api/goals_list/'+goal_parent_type,
		type:'GET',
		contentType:'json',
		crossDomain:true,
		cache:false,
	}).done(function(res){
		console.log(res);
		// var res = JSON.parse(res);
		var sub_goal_option = '<option value="0">Select Your Goal</option>';
		var parent_goal_image = '';
		var parent_goal_name = '';
		var parent_goal_id = '';
		$.each(res, function(index, value){
			sub_goal_option += '<option value="'+value.goal_id+'">'+value.goal_name+'</option>';
			parent_goal_image = img_url+'goals_icons/'+value.parent_goal_image;
			parent_goal_name = value.parent_goal_name;
			parent_goal_id = value.parent_goal_id;
		})
		$("#goal_options").html(sub_goal_option);
		$(".goal_popup_img").attr('src', parent_goal_image);
		$(".goal_text").html(parent_goal_name);
		$("#parent_goal_id").val(parent_goal_id);

		$(".child_input_container").hide();

		if (parent_goal_name == 'Child') {
			$(".child_input_container").show();
		}
	})
	$(".append_img_goal").fadeIn();
	$(".goal_inputs_container").fadeIn();
})

// $(".btn_goal_add").click(function(){
// })


// Goal Setting Page Custom JQuery

$(".hover_close").click(function(){
	$(".append_img_goal").attr('src', '');
	$(".goal_inputs_container").fadeOut();
	$(".err_goals").html('');
})

$(".btn_goal_proceed").click(function(){
	if (goal_form_execution()) {
		window.location.href = base_url+'admin/income_expense_que'
	}
	$(".append_img_goal").attr('src', '');
	$(".goal_inputs_container").fadeOut();
	$(".err_goals").html('');
})

$(".btn_goal_add").click(function(){
	goal_form_execution();
	$(".err_goals").html('');
	$(".append_img_goal").attr('src', '');
	$(".goal_inputs_container").fadeOut();
})

function goal_form_execution(){
	var cur_age = $("#current_age").val();
	var age_at_goal = $("#age_at_goal").val();
	var goal_amount = $("#goal_amount").val();
	var goal_id = $("#goal_options").val();
	var goal_parent_id = $("#parent_goal_id").val();
	var child_gender = '';
	var name = '';
	var loan_status = 'False';

	if (cur_age == '0') {
		$(".err_goals").html("* Please Select Your Current Age");
		return false;
	}
	if (age_at_goal == '0') {
		$(".err_goals").html("* Please select tenure for your goal");
		return false;
	}
	if (goal_amount == '') {
		$(".err_goals").html("* Please Enter goal amount");
		return false;
	}
	if (goal_id == '0') {
		$(".err_goals").html("* Please select your goal");
		return false;
	} else {
		child_gender = $("#child_gender").val();
		name = $("#child_name").val();

	 	if ($("#parent_goal_id").val() == 2) {
			if (name == '') {
				$(".err_goals").html("* Please Enter your child's name");
				return false;
			} else if (child_gender == '0') {
				$(".err_goals").html("* Please select gender");
				return false;
			}
		}

		if($('#radio1:checked').val() == 'on'){
			loan_status = 'True';
		}
		add_goal(cur_age, age_at_goal, goal_amount, goal_id, goal_parent_id, child_gender, loan_status, name);
		return true;
	}
}

function add_goal(cur_age, age_at_goal, goal_amount, goal_id, goal_parent_id, child_gender, loan_status, name){
	$.ajax({
		url: base_url+'api/add_goal/'+cur_age+'/'+age_at_goal+'/'+goal_amount+'/'+goal_id+'/'+goal_parent_id+'/'+child_gender+'/'+loan_status+'/'+name,
		type:'GET',
		contentType:'json',
		crossDomain:true,
		cache:false,
	}).done(function(res){
		console.log(res);
		$("#current_age").val(0);
		$("#age_at_goal").val(0);
		$("#goal_amount").val('');
		$("#goal_options").val(0);
		$("#child_gender").val(0);
		$("#child_name").val('');
	})
}

$("#personal_assets_amount").on('change', function(){
	var amount_to_append = Number($("#investment_assets_debt_amount").val()) + Number($("#investment_assets_equity_amount").val()) + Number($("#investment_assets_commodities_amount").val()) + Number($("#investment_assets_real_eastate_amount").val()) + Number($("#investment_assets_other_inv_amount").val()) + Number($(this).val());
	$(".total_assets_amount").html(amount_to_append);
})

$("#investment_assets_debt_amount").on('change', function(){
	var amount_to_append = Number($("#personal_assets_amount").val()) + Number($("#investment_assets_equity_amount").val()) + Number($("#investment_assets_commodities_amount").val()) + Number($("#investment_assets_real_eastate_amount").val()) + Number($("#investment_assets_other_inv_amount").val()) + Number($(this).val());
	$(".total_assets_amount").html(amount_to_append);
})

$("#investment_assets_equity_amount").on('change', function(){
	var amount_to_append = Number($("#personal_assets_amount").val()) + Number($("#investment_assets_debt_amount").val()) + Number($("#investment_assets_commodities_amount").val()) + Number($("#investment_assets_real_eastate_amount").val()) + Number($("#investment_assets_other_inv_amount").val()) + Number($(this).val());
	$(".total_assets_amount").html(amount_to_append);
})

$("#investment_assets_commodities_amount").on('change', function(){
	var amount_to_append = Number($("#personal_assets_amount").val()) + Number($("#investment_assets_debt_amount").val()) + Number($("#investment_assets_equity_amount").val()) + Number($("#investment_assets_real_eastate_amount").val()) + Number($("#investment_assets_other_inv_amount").val()) + Number($(this).val());
	$(".total_assets_amount").html(amount_to_append);
})

$("#investment_assets_real_eastate_amount").on('change', function(){
	var amount_to_append = Number($("#personal_assets_amount").val()) + Number($("#investment_assets_debt_amount").val()) + Number($("#investment_assets_equity_amount").val()) + Number($("#investment_assets_commodities_amount").val()) + Number($("#investment_assets_other_inv_amount").val()) + Number($(this).val());
	$(".total_assets_amount").html(amount_to_append);
})

$("#investment_assets_other_inv_amount").on('change', function(){
	var amount_to_append = Number($("#personal_assets_amount").val()) + Number($("#investment_assets_debt_amount").val()) + Number($("#investment_assets_equity_amount").val()) + Number($("#investment_assets_commodities_amount").val()) + Number($("#investment_assets_real_eastate_amount").val()) + Number($(this).val());
	$(".total_assets_amount").html(amount_to_append);
})




$("#liabilities_loan").on('change', function(){
	var amount_to_append = Number($(this).val()) + Number($("#liabilities_creadit_card").val()) + Number($("#liabilities_loan_amount").val()) + Number($("#liabilities_others").val());
	$(".total_liabilities_amount").html(amount_to_append);
})

$("#liabilities_creadit_card").on('change', function(){
	var amount_to_append = Number($(this).val()) + Number($("#liabilities_loan").val()) + Number($("#liabilities_loan_amount").val()) + Number($("#liabilities_others").val());
	$(".total_liabilities_amount").html(amount_to_append);
})
$("#liabilities_loan_amount").on('change', function(){
	var amount_to_append = Number($(this).val()) + Number($("#liabilities_loan").val()) + Number($("#liabilities_creadit_card").val()) + Number($("#liabilities_others").val());
	$(".total_liabilities_amount").html(amount_to_append);
})
$("#liabilities_others").on('change', function(){
	var amount_to_append = Number($(this).val()) + Number($("#liabilities_loan").val()) + Number($("#liabilities_creadit_card").val()) + Number($("#liabilities_loan_amount").val());
	$(".total_liabilities_amount").html(amount_to_append);
})


$("#inocme_salary").on('change', function(){
	var amount_to_append = Number($(this).val()) + Number($("#inocme_spouse_salary").val()) + Number($("#inocme_professional").val()) + Number($("#inocme_rental").val()) + Number($("#inocme_dividends").val()) + Number($("#inocme_pension").val()) + Number($("#inocme_interest").val()) + Number($("#inocme_others").val());
	$(".total_income_amount").html(amount_to_append);
})
$("#inocme_spouse_salary").on('change', function(){
	var amount_to_append = Number($(this).val()) + Number($("#inocme_salary").val()) + Number($("#inocme_professional").val()) + Number($("#inocme_rental").val()) + Number($("#inocme_dividends").val()) + Number($("#inocme_pension").val()) + Number($("#inocme_interest").val()) + Number($("#inocme_others").val());
	$(".total_income_amount").html(amount_to_append);
})
$("#inocme_professional").on('change', function(){
	var amount_to_append = Number($(this).val()) + Number($("#inocme_salary").val()) + Number($("#inocme_spouse_salary").val()) + Number($("#inocme_rental").val()) + Number($("#inocme_dividends").val()) + Number($("#inocme_pension").val()) + Number($("#inocme_interest").val()) + Number($("#inocme_others").val());
	$(".total_income_amount").html(amount_to_append);
})
$("#inocme_rental").on('change', function(){
	var amount_to_append = Number($(this).val()) + Number($("#inocme_salary").val()) + Number($("#inocme_spouse_salary").val()) + Number($("#inocme_professional").val()) + Number($("#inocme_dividends").val()) + Number($("#inocme_pension").val()) + Number($("#inocme_interest").val()) + Number($("#inocme_others").val());
	$(".total_income_amount").html(amount_to_append);
})
$("#inocme_dividends").on('change', function(){
	var amount_to_append = Number($(this).val()) + Number($("#inocme_salary").val()) + Number($("#inocme_spouse_salary").val()) + Number($("#inocme_professional").val()) + Number($("#inocme_rental").val()) + Number($("#inocme_pension").val()) + Number($("#inocme_interest").val()) + Number($("#inocme_others").val());
	$(".total_income_amount").html(amount_to_append);
})
$("#inocme_pension").on('change', function(){
	var amount_to_append = Number($(this).val()) + Number($("#inocme_salary").val()) + Number($("#inocme_spouse_salary").val()) + Number($("#inocme_professional").val()) + Number($("#inocme_rental").val()) + Number($("#inocme_dividends").val()) + Number($("#inocme_interest").val()) + Number($("#inocme_others").val());
	$(".total_income_amount").html(amount_to_append);
})
$("#inocme_interest").on('change', function(){
	var amount_to_append = Number($(this).val()) + Number($("#inocme_salary").val()) + Number($("#inocme_spouse_salary").val()) + Number($("#inocme_professional").val()) + Number($("#inocme_rental").val()) + Number($("#inocme_dividends").val()) + Number($("#inocme_pension").val()) + Number($("#inocme_others").val());
	$(".total_income_amount").html(amount_to_append);
})
$("#inocme_others").on('change', function(){
	var amount_to_append = Number($(this).val()) + Number($("#inocme_salary").val()) + Number($("#inocme_spouse_salary").val()) + Number($("#inocme_professional").val()) + Number($("#inocme_rental").val()) + Number($("#inocme_dividends").val()) + Number($("#inocme_pension").val()) + Number($("#inocme_interest").val());
	$(".total_income_amount").html(amount_to_append);
})



$("#expense_rent").on('change', function(){
	var amount_to_append = Number($(this).val()) + Number($("#expense_household_living").val()) + Number($("#expense_travel").val()) + Number($("#expense_entertainment").val()) + Number($("#expense_medical").val()) + Number($("#expense_personal").val()) + Number($("#expense_misc").val());
	$(".total_expense_amount").html(amount_to_append);
})
$("#expense_household_living").on('change', function(){
	var amount_to_append = Number($(this).val()) + Number($("#expense_rent").val()) + Number($("#expense_misc").val()) + Number($("#expense_travel").val()) + Number($("#expense_entertainment").val()) + Number($("#expense_medical").val()) + Number($("#expense_personal").val());
	$(".total_expense_amount").html(amount_to_append);
})
$("#expense_travel").on('change', function(){
	var amount_to_append = Number($(this).val()) + Number($("#expense_rent").val()) + Number($("#expense_household_living").val()) + Number($("#expense_misc").val()) + Number($("#expense_entertainment").val()) + Number($("#expense_medical").val()) + Number($("#expense_personal").val());
	$(".total_expense_amount").html(amount_to_append);
})
$("#expense_entertainment").on('change', function(){
	var amount_to_append = Number($(this).val()) + Number($("#expense_rent").val()) + Number($("#expense_household_living").val()) + Number($("#expense_travel").val()) + Number($("#expense_medical").val()) + Number($("#expense_personal").val()) + Number($("#expense_misc").val());
	$(".total_expense_amount").html(amount_to_append);
})
$("#expense_medical").on('change', function(){
	var amount_to_append = Number($(this).val()) + Number($("#expense_rent").val()) + Number($("#expense_household_living").val()) + Number($("#expense_travel").val()) + Number($("#expense_entertainment").val()) + Number($("#expense_personal").val()) + Number($("#expense_misc").val());
	$(".total_expense_amount").html(amount_to_append);
})
$("#expense_personal").on('change', function(){
	var amount_to_append = Number($(this).val()) + Number($("#expense_rent").val()) + Number($("#expense_household_living").val()) + Number($("#expense_travel").val()) + Number($("#expense_entertainment").val()) + Number($("#expense_medical").val()) + Number($("#expense_misc").val());
	$(".total_expense_amount").html(amount_to_append);
})
$("#expense_misc").on('change', function(){
	var amount_to_append = Number($(this).val()) + Number($("#expense_rent").val()) + Number($("#expense_household_living").val()) + Number($("#expense_travel").val()) + Number($("#expense_entertainment").val()) + Number($("#expense_medical").val()) + Number($("#expense_personal").val());
	$(".total_expense_amount").html(amount_to_append);
})



$(".proceed_to_dashboard").click(function(){
	// var personal_assets_amount = $("#personal_assets_amount").val();
	// var investment_assets_debt_amount = $("#investment_assets_debt_amount").val();
	// var investment_assets_equity_amount = $("#investment_assets_equity_amount").val();
	// var investment_assets_commodities_amount = $("#investment_assets_commodities_amount").val();
	// var investment_assets_real_eastate_amount = $("#investment_assets_real_eastate_amount").val();
	// var investment_assets_other_inv_amount = $("#investment_assets_other_inv_amount").val();
	// var inocme_salary = $("#inocme_salary").val();
	// var inocme_spouse_salary = $("#inocme_spouse_salary").val();
	// var inocme_professional = $("#inocme_professional").val();
	// var inocme_rental = $("#inocme_rental").val();
	// var inocme_dividends = $("#inocme_dividends").val();
	// var inocme_pension = $("#inocme_pension").val();
	// var inocme_interest = $("#inocme_interest").val();
	// var inocme_others = $("#inocme_others").val();
	// var expense_rent = $("#expense_rent").val();
	// var expense_household_living = $("#expense_household_living").val();
	// var expense_travel = $("#expense_travel").val();
	// var expense_entertainment = $("#expense_entertainment").val();
	// var expense_medical = $("#expense_medical").val();
	// var expense_personal = $("#expense_personal").val();
	// var expense_misc = $("#expense_misc").val();

	// $.ajax({

	// 	url: base_url+'api/income_expense_submit/'+personal_assets_amount+'/'+investment_assets_debt_amount+'/'+investment_assets_equity_amount+'/'+investment_assets_commodities_amount+'/'+investment_assets_real_eastate_amount+'/'+investment_assets_other_inv_amount+'/'+inocme_salary+'/'+inocme_spouse_salary+'/'+inocme_professional+'/'+inocme_rental+'/'+inocme_dividends+'/'+inocme_pension+'/'+inocme_interest+'/'+inocme_others+'/'+expense_rent+'/'+expense_household_living+'/'+expense_travel+'/'+expense_entertainment+'/'+expense_medical+'/'+expense_personal+'/'+expense_misc,
	// 	type:'GET',
	// 	contentType:'json',
	// 	crossDomain:true,
	// 	cache:false,
	// }).done(function(res){
	// 	console.log(res);
	// 	$("#current_age").val(0);
	// 	$("#age_at_goal").val(0);
	// 	$("#goal_amount").val('');
	// 	$("#goal_options").val(0);
	// 	$("#child_gender").val(0);
	// 	$("#child_name").val('');
	// })

	window.location.href = 'dashboard';
})



$("#finance_graph_toggle").on('change', function(){
	console.log($("#finance_graph_toggle:checked").val());
	if ($("#finance_graph_toggle:checked").val() == 'on') {
		financial_analysis1();
	} else {
		financial_analysis2();
	}
})