var tab, tab_count, tab_prev;
var serverRequest = new Array();
var currentLocation;
var utility_providers_array;
var isComputingTakeactionResults;
var isComputingFootprint;

var isSliding, animating;

var applicationState = new Array();
var regionDefaultsState = new Array();
var setEventHandlersAssigned;

var tabMap = {'insert1': 0, 'intro': 1, 'insert2': 2, 'transportation': 3, 'insert3': 4, 'housing': 5, 'insert4': 6, 'food': 7, 'insert5': 8, 'shopping': 9, 'insert6': 10, 'takeaction': 11};

function slideTab(page, showChart=true) {
	
	// Ignore if this is a repeat call
	if (isSliding === true) return;
	
	// height1 is the old tab's height, height2 is the new tab's.
	var height1 = $("#tab_" + tab).height();
	var height2 = $("#tab_" + page).height();

	isSliding = true;
	$("#transition").css({'height' :height1 + 'px'}).animate({'height' :height2 + 'px'}, 500)
	$("#tab_" + tab).appendTo("#transition");
	$("#tab_" + tab).css('position', 'absolute');
	
	
	$("#tab_" + page).appendTo("#transition");
	$("#tab_" + page).css({'position': 'absolute', 'top': 0, 'left': 0});
	//$("#transition_after").css({'border': '1px solid blue', 'height' :$("#tab_" + page).height() + 'px' })
	
	var beforeInitial, beforeFinal, afterInitial, afterFinal;
	if (tabMap[page] > tabMap[tab]) {
		beforeInitial = 0;
		beforeFinal = "-630px"
		afterInitial = "630px";
		afterFinal = 0;
	}
	else {
		beforeInitial = 0;
		beforeFinal = "630px"
		afterInitial = "-630px";
		afterFinal = 0;
	}
	
	
	$("#tab_" + tab).css({'left': beforeInitial, 'opacity': 1}).animate({'left' : beforeFinal, 'opacity': 0}, 500, function () {
		$("#tab_" + tab).appendTo("#tabs_container");
		$("#tab_" + tab).css('position', 'relative');
		$("#transition").css({'height' :''});
		$(this).hide();
		tab  = page;
		setNextButtonText()	
		isSliding = false;
		$(this).hide();
	});
	
	$("#tab_" + page).css({'left': afterInitial, 'opacity': 0}).show().animate({'left' : afterFinal, 'opacity': 1}, 500, function () {
		$("#tab_" + page).appendTo("#tabs_container");	
		$("#tab_" + page).css('position', 'relative');
		$("#transition").css({'height' :''});
		tab  = page;
		setNextButtonText()	
		isSliding = false;
	})
}

function updateSmiley(page) {
	var tabDesc = {'intro': '', 'transportation': 'Travel', 'housing': 'Housing', 'food': 'Food', 'shopping': 'Shopping'};
	var tabColors  ={'intro': '7DC100', 'transportation': '677FB3', 'housing': 'Housing', 'food': 'Food', 'shopping': 'Shopping'};
	
	if (page != 'takeaction') {
		$("#smiley_display_tab").html(tabDesc[page]);
		var tonsColor;
		if (page == 'intro') {
			tonsColor = '#5A75AD';
		}
		else {
			tonsColor = mainChartColors[Number(tabMap[page]) -  1]
		}
		$("#smiley_display_tons").css('color', tonsColor);
		$("#smiley_pounds_total").css('text-shadow', '1px 2px 5px ' + tonsColor + '');
		$("#smiley_percent_comparison").css('color', tonsColor);
		
		var total, percentComparison;
		
		if (page == 'intro') {
			total = regionDefaultsState['result_grand_total'];
		}
		else if (page == 'transportation') {
			total = applicationState['result_transport_total'];
			percentComparison = Number(applicationState['result_transport_total']) / Number(regionDefaultsState['result_transport_total']);
			
			var betterWorsePercent = (Number(regionDefaultsState['result_transport_total'])
				-Number(applicationState['result_transport_total'])) 
				/ Number(regionDefaultsState['result_transport_total'])
				* 100;
		}
		else if (page == 'housing') {
			total = applicationState['result_housing_total'];
			percentComparison = Number(applicationState['result_housing_total']) / Number(regionDefaultsState['result_housing_total']);
			
			var betterWorsePercent = (Number(regionDefaultsState['result_housing_total'])
				-Number(applicationState['result_housing_total'])) 
				/ Number(regionDefaultsState['result_housing_total'])
				* 100;
		}
		else if (page == 'food') {
			total = applicationState['result_food_total'];
			percentComparison = Number(applicationState['result_food_total']) / Number(regionDefaultsState['result_food_total']);
			
			var betterWorsePercent = (Number(regionDefaultsState['result_food_total'])
				-Number(applicationState['result_food_total'])) 
				/ Number(regionDefaultsState['result_food_total'])
				* 100;
		}
		else if (page == 'shopping') {
			total = applicationState['result_goods_total'] + applicationState['result_services_total'];
			percentComparison = ( Number(applicationState['result_goods_total']) + Number(applicationState['result_services_total']) )/
			( Number(regionDefaultsState['result_goods_total']) + Number(regionDefaultsState['result_services_total']) );
			
			var betterWorsePercent = (( Number(regionDefaultsState['result_goods_total']) + Number(regionDefaultsState['result_services_total']) )
				-( Number(applicationState['result_goods_total']) + Number(applicationState['result_services_total']) )) 
				/ ( Number(regionDefaultsState['result_goods_total']) + Number(regionDefaultsState['result_services_total']) )
				* 100;
		}
		$("#smiley_pounds_total").html(Math.round(total * 10)/ 10);
		
		var imgName = '';
		if (percentComparison <= 0.5) {
			imgName = "bigsmile75.jpg";
		}
		else if (percentComparison > 0.5 && percentComparison <= 0.9) {
			imgName = "smiley75.gif";
		}
		else if (percentComparison > 0.9 && percentComparison <= 1.1) {
			imgName = "smileyok75.gif";
		}
		else if (percentComparison > 1.1 && percentComparison <= 2.0) {
			imgName = "smallfrown75.jpg";
		}
		else if (percentComparison > 2.0) {
			imgName = "ohno75.jpg";
		}
		
		if (tab != "intro" && imgName != "") {
			$("#img_smilely").attr('src', 'images/smiley/' + imgName);
		}
		
		var betterWorse = '';
		
		if (betterWorsePercent < 0) {
			betterWorsePercent *= -1;
			betterWorse = 'Worse';
		}
		else {
			betterWorse = 'Better';
		}

		var comparisonDisplaySize = '';
		if (applicationState['input_size'] == 0) {
			comparisonDisplaySize = 'average size';
		} 
		else if (applicationState['input_size'] == 1) {
			comparisonDisplaySize = 'one person';
		}
		else {
			comparisonDisplaySize = applicationState['input_size'] + ' people';
		}
		
		
		if (page == 'intro') {
			$("#img_smilely").hide();
			$("#smiley_percent_comparison").hide();	
			$("#smiley_percent_comparison_rest").html("The footprint of the average household in " 
		+ $("#selected_location").html() + " with " + comparisonDisplaySize + " and similar income.");
		}
		else {
			$("#img_smilely").show();
			$("#smiley_percent_comparison").html(Number(Math.round(betterWorsePercent * 10)/10) + '% ' + betterWorse).show();
			$("#smiley_percent_comparison_rest").html("than the average household in " 
		+ $("#selected_location").html() + " with " + comparisonDisplaySize + " and similar income.");
		}
	}
}

function loadPage(page, showChart) {
	if (page == tab) return;
	//tab  = page;
	
	banner_buttons_update(tabMap[page]);
	
	updateSmiley(page);
	
	slideTab(page, showChart);
	if (page == 'takeaction') {
		$("#chartTable").animate({'height': '0px'},500,function() {
			$(this).hide();
			takeactionPlot.replot({resetAxes: true});
			maximum_bar = new_maximum_bar;
		});
	}
	else if (tab == 'takeaction') {
		$("#chartTable").show().animate({'height': '350px'});
	} 

	$("#takeaction_checkbox_category_offset").click();
	$(".takeaction_section_offset").slideUp();

	if(!showChart){
		$('#chartTable').fadeOut();
		$('.footerLinks').fadeIn();
	}
	else {
		$('#chartTable').fadeIn();
		$('.footerLinks').fadeOut();
	}

	if(!showChart) $('#smileyContainer').fadeOut();
	else $('#smileyContainer').fadeIn();
}

/*
function post(type) {
        $.pm({
          target: window.parent,
          type: type, 
          data:{foo:"bar"}, 
          success: function(data) {
			  alert(JSON.stringify(data, null, 2));
            //$("#msg").append('<pre class="clear code code-success">' + JSON.stringify(data, null, 2) + '</pre>');;
          },
		  error: function(data) {
			alert(data);
		  },
          url: document.referrer
        });        
      };*/
	  
function init() {
	$("#chartTable").hide();
	
	tab = 'insert1';	

	$("#tester").click(function() { 
		slideTab('intro');
	});
	
	animating = false;
	
	$("#link_reset_axis").click(function() {
		if (typeof(myplot) != "undefined") {
			$("#mainChart").empty();
			mainchart_maximum_bar = mainchart_new_maximum_bar;	
			myplot.replot({resetAxes: true});
			//correctPlot();
			
		}
	});
	
	//intro
	
	$("#query").focus(function() {
		var $this = $(this);
		$this.select();
	
		$("#intro_begin_typing").hide();
		
		$("#query-border").addClass("intro_query_selected");
		
		// Work around Chrome's little problem
		$this.mouseup(function() {
			// Prevent further mouseup intervention
			$this.unbind("mouseup");
			return false;
		});
	});
	
	$("#query").focusout(function() {
		if ($("#query").val() == "") {
			$("#intro_begin_typing").show();	
		}
		$("#query-border").removeClass("intro_query_selected");
	});
	
	$("input").focus( function() {
		if ($(this).attr('id') != "query") {
			$(this).addClass("input_selected");
		}
	});
	$("input").focusout( function() {
		$(this).removeClass("input_selected");
	});
	
	$("#intro_begin_typing").click(function() {
		$(this).hide();	
		$("#query").focus();
	});
	
	$("#query").change(function() {
		if ($(this).val() == "") {
			$("#intro_begin_typing").show();	
		}
	});
	
	var id_map = {
		'intro_link_zipcode': 1,
		'intro_link_city': 2,
		'intro_link_county': 3,
		'intro_link_state': 4,
		'intro_link_country': 5,
	}
	$(".bannerbtn>div").each(function() {
		$(this).css('left', Number(($(this).parent().width()) - $(this).width() )/ 2);

		$(this).parent().append(
		"<div class=\"bannerLinkTextShaddow\" style=\"top: 10px; left: " + ( Number(
		($(this).parent().width()) - $(this).width() 
		) / 2 - 1
		) + "px\">" + $(this).text() + "</div>");
	});
	$(".bannerbtn").click(function() {
		$(".bannerbtn").removeClass("selected");
		$(this).addClass("selected");
		//$('#intro_hf_ac_mode').val(id_map[$(this).attr('id')]);
	});
	
	
	
	var q = $('#query').val();
	
	var a = $('#query').autocomplete({ 
		serviceUrl:'https://coolclimate.berkeley.edu/calculators/household/api.php?op=get_auto_complete',
		delimiter: /(,|;)\s*/, // regex or character
		maxHeight:400,
		width:300,
		zIndex: 9999,
		deferRequestBy: 0, //miliseconds 
		params: { //aditional parameters
		} ,
		isLocal: false,
		noCache: true, //default is false, set to true to disable caching
		// callback function:
		onSelect: function(value, data, location){ 
			
			var location_string;
			var mode = $("input[name=intro_radio_location_mode]:checked").val();
			
			if (mode == 5) {
				location_string = 'United States';
			}
			else if (mode == 4) {
				location_string = location.state;	
			}
			else if (mode == 3) {
				location_string = location.county + ' County, ' + location.state;	
			}
			else if (mode == 2) {
				location_string = location.city + ', ' + location.state; 	
			}
			else if (mode == 1) {
				location_string = location.city + ', '+ location.state + ' ' + location.zipcode	;
			}
			
			currentLocation = location;
			currentLocation['mode'] = mode;
			$("#selected_location").html(location_string);
			
			$("#intro_hf_location").val(data);
			$("#intro_hf_ac_mode").val(mode);
			
			getDefaults();
			
			
	
		},
	});	
  
  
  $(".radiogrp").buttonset();
  $("button").button();
  
  $(".tTip.tTipHandle").removeClass("tTipHandle").betterTooltip({
					speed: 150,
					delay: 300
				});
		
	$("#food_adults_children_inputs").hide();		
	$("#intro_select_size").change(function() {
		var value = $(this).val();
		if (value == 0) {
			$("#food_adults_children_inputs").hide();
		}
		else {
			$("#food_adults_children_inputs").show();
		}
		
		getDefaults();});
	$("#intro_select_income").change(function() {getDefaults();});
				
	banner_buttons_update(0);

	//transportation
	
	
	$("#input_footprint_transportation_num_vehicles").bind('loadValue', function() {
		$(this).val(applicationState['input_footprint_transportation_num_vehicles']);
		var i;
		for (i = 1; i < 11; i++) {
			if (i <=$(this).val()) {
				$("#vehicle_row_" + i).show();
			}
			else {
				$("#vehicle_row_" + i).hide();	
			}
		}
	});
	
	$("#input_footprint_transportation_groundtype").bind('loadValue', function() {
		var value = applicationState['input_footprint_transportation_groundtype'];
		$(this).val(value);
		if (value == 0) {
			$("#transportation_groundmulti").hide();
			$("#transportation_groundtotal").show();
			$("#transportation_groundtype0").attr("checked", true);
		}
		else {
			$("#transportation_groundmulti").show();
			$("#transportation_groundtotal").hide();
			$("#transportation_groundtype1").attr("checked", true);
		}
		$(".radiogrp").buttonset();
	});
	
	$("#input_footprint_transportation_airtype").bind('loadValue', function() {
		var value = applicationState['input_footprint_transportation_airtype'];
		$(this).val(value);
		if (value == 0) {
			$("#transportation_airmulti").hide();
			$("#transportation_airtotal").show();
			$("#transportation_airtype0").attr("checked", true);
		}
		else {
			$("#transportation_airmulti").show();
			$("#transportation_airtotal").hide();
			$("#transportation_airtype1").attr("checked", true);
		}
		$(".radiogrp").buttonset();
	});
	
	$("#transportation_button_addvehicle").click(function() {
		var num = $("#input_footprint_transportation_num_vehicles").val();
		if (num == 10) return;
		$("#input_footprint_transportation_num_vehicles").val(Number(num) + Number(1)).trigger('change');
	});
	$("#transportation_button_subtractvehicle").click(function() {
		var num = $("#input_footprint_transportation_num_vehicles").val();
		if (num == 1) return;
		$("#input_footprint_transportation_num_vehicles").val(Number(num) - Number(1)).trigger('change');
	});	
	

	
	$("[name=transportation_airtype]").click(function() {
		var value = $("input[name=transportation_airtype]:checked").val();
		
		if (value == "transportation_airtotal") {
			applicationState['input_footprint_transportation_airtype'] = 0;
			$("#transportation_airmulti").hide();
			$("#transportation_airtotal").show();
		}
		else if (value == "transportation_airmulti") {
			applicationState['input_footprint_transportation_airtype'] = 1;
			$("#transportation_airmulti").show();
			$("#transportation_airtotal").hide();
		}
	});
	
	$("[name=transportation_groundtype]").click(function() {
		var value = $("input[name=transportation_groundtype]:checked").val();
		
		if (value == "transportation_groundtotal") {
			applicationState['input_footprint_transportation_groundtype'] = 0;
			$("#transportation_groundmulti").hide();
			$("#transportation_groundtotal").show();
			computeFootprint();
		}
		else if (value == "transportation_groundmulti") {
			applicationState['input_footprint_transportation_groundtype'] = 1;
			$("#transportation_groundmulti").show();
			$("#transportation_groundtotal").hide();
			computeFootprint();
		}
	});
	

	//housing
	//housing_select_utility_provider
	
	
	$("input[name=housing_calculation_type]").click(function() {
		var type = $("input[name=housing_calculation_type]:checked").val();
		if (type == "regular") {
			$("#housing_regular_container").show();
			$("#housing_adv_container").hide();
		}
		else if(type == "adv") {
			$("#housing_regular_container").hide();
			$("#housing_adv_container").show();
			if (currentLocation) {
				if(currentLocation['mode'] == 1) {
					$("#housing_input_zipcode").val(currentLocation['zipcode']);	
				}
			}

		}
	});
	
	$("#result_utility_providers").bind('loadValue', function() {

		utility_providers_array = applicationState['result_utility_providers'];
		
		var utilityList = eval(utility_providers_array);
		
		var provider, company, wer, unum;
		
		$('#housing_select_utility_provider').find('option').remove().end();
		
		for (provider in utilityList) {
			company = utilityList[provider]['company'];
			wer =  utilityList[provider]['weighted_emission_rate'];
			
			$('#housing_select_utility_provider').append('<option value="' + wer +'">' + company +'</option>');
		}
		$("#housing_select_utility_provider").val($("#housing_select_utility_provider option:first").val());
		
		//The percentages are saved in utility_providers_array
		//this never needs to be uploaded back to api. Set it to null to save some bandwith.
		applicationState['result_utility_providers'] = '';
		
	});
	
	$("#housing_select_utility_provider").change(function() {
		$("#input_footprint_housing_gco2_per_kwh").val($("#housing_select_utility_provider").val()).trigger('change');
	});
	
	$("#input_footprint_housing_electricity_type").bind('loadValue', function() {
		var value = applicationState['input_footprint_housing_electricity_type'];
		$(this).val(value);
		if (value == 0) {
			$("#input_footprint_housing_electricity_dollars").show();
			$("#input_footprint_housing_electricity_kwh").hide();
		}
		else {
			$("#input_footprint_housing_electricity_dollars").hide();
			$("#input_footprint_housing_electricity_kwh").show();
		}
	});
	
	
	$("#input_footprint_housing_naturalgas_type").bind('loadValue', function() {
		var value = applicationState['input_footprint_housing_naturalgas_type'];
		$(this).val(value);
		if (value == 0) {
			$("#input_footprint_housing_naturalgas_dollars").show();
			$("#input_footprint_housing_naturalgas_therms").hide();
			$("#input_footprint_housing_naturalgas_cuft").hide();
		}
		else if (value == 1){
			$("#input_footprint_housing_naturalgas_dollars").hide();
			$("#input_footprint_housing_naturalgas_therms").show();
			$("#input_footprint_housing_naturalgas_cuft").hide();
		}
		else if (value == 2) {
			$("#input_footprint_housing_naturalgas_dollars").hide();
			$("#input_footprint_housing_naturalgas_therms").hide();
			$("#input_footprint_housing_naturalgas_cuft").show();
		}
	});
	
	$("#input_footprint_housing_heatingoil_type").bind('loadValue', function() {
		var value = applicationState['input_footprint_housing_heatingoil_type'];
		$(this).val(value);
		if (value == 0) {
			$("#input_footprint_housing_heatingoil_dollars").show();
			$("#input_footprint_housing_heatingoil_gallons").hide();
		}
		else {
			$("#input_footprint_housing_heatingoil_dollars").hide();
			$("#input_footprint_housing_heatingoil_gallons").show();
		}
	});
	
	bindSlider('input_footprint_housing_watersewage', 'housing_watersewage_slider');
	



	//food
	bindSlider('input_footprint_shopping_food_meatfisheggs', 'shopping_meatfisheggs_slider', 'shopping_meatfisheggs_calories_per_household');
	bindSlider('input_footprint_shopping_food_meat_beefpork', 'shopping_meat_beefpork_slider', 'shopping_meat_beefpork_calories_per_household');
	bindSlider('input_footprint_shopping_food_meat_poultry', 'shopping_meat_poultry_slider', 'shopping_meat_poultry_calories_per_household');
	bindSlider('input_footprint_shopping_food_meat_other', 'shopping_meat_other_slider', 'shopping_meat_other_calories_per_household');
	bindSlider('input_footprint_shopping_food_meat_fish', 'shopping_meat_fish_slider', 'shopping_meat_fish_calories_per_household');
	bindSlider('input_footprint_shopping_food_dairy', 'shopping_dairy_slider', 'shopping_dairy_calories_per_household');
	bindSlider('input_footprint_shopping_food_cereals', 'shopping_cereals_slider', 'shopping_cereals_calories_per_household');
	bindSlider('input_footprint_shopping_food_fruitvegetables', 'shopping_fruitvegetables_slider', 'shopping_fruitvegetables_calories_per_household');
	bindSlider('input_footprint_shopping_food_otherfood', 'shopping_otherfood_slider', 'shopping_otherfood_calories_per_household');

	
	
	$("#input_footprint_shopping_food_meattype").bind('loadValue', function() {
		var value = applicationState['input_footprint_shopping_food_meattype'];
		$(this).val(value);
		if (value == 0) {
			$("#shopping_meattype0").attr('checked',true);
			$("#food_meat_total").show();
			$("#food_meat_multi").hide();
		}
		else {
			$("#shopping_meattype1").attr('checked',true);
			$("#food_meat_multi").show();
			$("#food_meat_total").hide();
		}
		$(".radiogrp").buttonset();
	});
	
	$("[name=shopping_meattype]").click(function() {
		var value = $("input[name=shopping_meattype]:checked").val();
		
		if (value == "0") {
			applicationState['input_footprint_shopping_food_meattype'] = 0;
			$("#food_meat_multi").hide();
			$("#food_meat_total").show();
		}
		else if (value == "1") {
			applicationState['input_footprint_shopping_food_meattype'] = 1;
			$("#food_meat_multi").show();
			$("#food_meat_total").hide();
		}
		
		displayTotalCalories();
	});
		
		
		
		
		
	//shopping
	
	bindSlider('input_footprint_shopping_goods_total', 'goods_slider');
		
	
	$("input[name=shopping_goodstype]").click(function() {
		var value = $("input[name=shopping_goodstype]:checked").val();
		$("#input_footprint_shopping_goods_type").val(value).trigger('change');
		if (value == 0) {
			$("#goods_total").show();
			$("#goods_multi").hide();
		}
		else {
			$("#goods_total").hide();
			$("#goods_multi").show();
		}
	});
	$("#input_footprint_shopping_goods_type").bind('loadValue', function() {
		var value = applicationState['input_footprint_shopping_goods_type'];
		$(this).val(value);
		if (value == 0) {
			$("#goods_multi").hide();
			$("#goods_total").show();
			$("#shopping_goodstype0").attr("checked", true);
		}
		else {
			$("#goods_multi").show();
			$("#goods_total").hide();
			$("#shopping_goodstype1").attr("checked", true);
		}
		$(".radiogrp").buttonset();
	});
	
	$("input[name=shopping_othergoodstype]").click(function() {
		var value = $("input[name=shopping_othergoodstype]:checked").val();
		$("#input_footprint_shopping_goods_other_type").val(value).trigger('change');
		if (value == 0) {
			$("#othergoods_total").show();
			$("#othergoods_multi").hide();
		}
		else {
			$("#othergoods_total").hide();
			$("#othergoods_multi").show();
		}
	});
	$("#input_footprint_shopping_goods_other_type").bind('loadValue', function() {
		var value = applicationState['input_footprint_shopping_goods_other_type'];
		$(this).val(value);
		if (value == 0) {
			$("#othergoods_multi").hide();
			$("#othergoods_total").show();
			$("#shopping_othergoodstype0").attr("checked", true);
		}
		else {
			$("#othergoods_multi").show();
			$("#othergoods_total").hide();
			$("#shopping_othergoodstype1").attr("checked", true);
		}
		$(".radiogrp").buttonset();
	});
		
		
	bindSlider('input_footprint_shopping_services_total', 'services_slider');
		
	$("input[name=shopping_servicestype]").click(function() {
		var value = $("input[name=shopping_servicestype]:checked").val();
		$("#input_footprint_shopping_services_type").val(value).trigger('change');
		if (value == 0) {
			$("#services_total").show();
			$("#services_multi").hide();
		}
		else {
			$("#services_total").hide();
			$("#services_multi").show();
		}
	});
	$("#input_footprint_shopping_services_type").bind('loadValue', function() {
		var value = applicationState['input_footprint_shopping_services_type'];
		$(this).val(value);
		if (value == 0) {
			$("#services_multi").hide();
			$("#services_total").show();
			$("#shopping_servicestype0").attr("checked", true);
		}
		else {
			$("#services_multi").show();
			$("#services_total").hide();
			$("#shopping_servicestype1").attr("checked", true);
		}
		$(".radiogrp").buttonset();
	});
	
	
	
	
	
	//takeaction
	
	$("#takeaction_assumptions_container").hide();
	$("#takeaction_button_assumptions").click(function() {
		$("#takeaction_assumptions_container").fadeIn();
	});
	$("#takeaction_button_assumptions_close").click(function() {
		$("#takeaction_assumptions_container").hide();
		
	});
	
	$("#takeaction_reset_chart").click(function() {
		maximum_bar = new_maximum_bar;
		takeactionPlot.replot({resetAxes: true});
	});
	
	$("#input_takeaction_more_efficient_vehicle_vehicle_select").change(function() {
		applicationState['input_takeaction_more_efficient_vehicle_mpg_old'] =  applicationState['input_footprint_transportation_mpg' + $(this).val()];
		applicationState['input_takeaction_more_efficient_vehicle_miles_old'] = applicationState['input_footprint_transportation_miles' + $(this).val()];
		$("#input_takeaction_more_efficient_vehicle_mpg_old").val(applicationState['input_footprint_transportation_mpg' + $(this).val()]);
		$("#input_takeaction_more_efficient_vehicle_miles_old").val(applicationState['input_footprint_transportation_miles' + $(this).val()]);
		$("#input_takeaction_more_efficient_vehicle_miles_new").val(applicationState['input_footprint_transportation_miles' + $(this).val()]).trigger('change');
	});	
	$("#input_takeaction_alternativefuel_vehicle_select").change(function() {
		applicationState['input_takeaction_alternativefuel_vehicle_mpg_old'] =  applicationState['input_footprint_transportation_mpg' + $(this).val()];
		applicationState['input_takeaction_alternativefuel_vehicle_miles_old'] = applicationState['input_footprint_transportation_miles' + $(this).val()];
		$("#input_takeaction_alternativefuel_vehicle_mpg_old").val(applicationState['input_footprint_transportation_mpg' + $(this).val()]);
		$("#input_takeaction_alternativefuel_vehicle_miles_old").val(applicationState['input_footprint_transportation_miles' + $(this).val()]);
		$("#input_takeaction_alternativefuel_vehicle_miles_new").val(applicationState['input_footprint_transportation_miles' + $(this).val()]).trigger('change');
	});
	$("#input_takeaction_electric_vehicle_select").change(function() {
		applicationState['input_takeaction_electric_vehicle_mpg_old'] =  applicationState['input_footprint_transportation_mpg' + $(this).val()];
		applicationState['input_takeaction_electric_vehicle_miles_old'] = applicationState['input_footprint_transportation_miles' + $(this).val()];
		$("#input_takeaction_electric_vehicle_mpg_old").val(applicationState['input_footprint_transportation_mpg' + $(this).val()]);
		$("#input_takeaction_electric_vehicle_miles_old").val(applicationState['input_footprint_transportation_miles' + $(this).val()]);
		$("#input_takeaction_electric_vehicle_miles_new").val(applicationState['input_footprint_transportation_miles' + $(this).val()]).trigger('change');
	});
	$("#input_takeaction_hybrid_vehicle_select").change(function() {
		applicationState['input_takeaction_hybrid_vehicle_mpg_old'] =  applicationState['input_footprint_transportation_mpg' + $(this).val()];
		applicationState['input_takeaction_hybrid_vehicle_miles_old'] = applicationState['input_footprint_transportation_miles' + $(this).val()];
		$("#input_takeaction_hybrid_vehicle_mpg_old").val(applicationState['input_footprint_transportation_mpg' + $(this).val()]);
		$("#input_takeaction_hybrid_vehicle_miles_old").val(applicationState['input_footprint_transportation_miles' + $(this).val()]);
		$("#input_takeaction_hybrid_vehicle_miles_new").val(applicationState['input_footprint_transportation_miles' + $(this).val()]).trigger('change');
	});
	$("#input_takeaction_telecommute_to_work_vehicle_select").change(function() {
		$("#input_takeaction_telecommute_to_work_mpg").val(applicationState['input_footprint_transportation_mpg' + $(this).val()]).trigger('change');
	});	
	$("#input_takeaction_ride_my_bike_vehicle_select").change(function() {
		$("#input_takeaction_ride_my_bike_mpg").val(applicationState['input_footprint_transportation_mpg' + $(this).val()]).trigger('change');
	});	
	$("#input_takeaction_take_public_transportation_vehicle_select").change(function() {
		$("#input_takeaction_take_public_transportation_mpg").val(applicationState['input_footprint_transportation_mpg' + $(this).val()]).trigger('change');
	});	
	
	$("#takeaction_checkbox_category_transportation").click( function () {
		if($(this).is(':checked')) {
			$(".takeaction_section_transportation").slideDown();
		}
		else {
			$(".takeaction_section_transportation").slideUp();
		}
	});
	$("#takeaction_checkbox_category_housing").click( function () {
		if($(this).is(':checked')) {
			$(".takeaction_section_housing").slideDown();
		}
		else {
			$(".takeaction_section_housing").slideUp();
		}
	});
	$("#takeaction_checkbox_category_shopping").click( function () {
		if($(this).is(':checked')) {
			$(".takeaction_section_shopping_food").slideDown();
			$(".takeaction_section_shopping_goods").slideDown();
			$(".takeaction_section_shopping_services").slideDown();
		}
		else {
			$(".takeaction_section_shopping_food").slideUp();
			$(".takeaction_section_shopping_goods").slideUp();
			$(".takeaction_section_shopping_services").slideUp();
		}
	});
	$("#takeaction_checkbox_category_offset").click( function () {
		if($(this).is(':checked')) {
			$(".takeaction_section_offset").slideDown();
		}
		else {
			$(".takeaction_section_offset").slideUp();
		}
	});
	
	$(".takeaction_sortbutton").click( function () {
		$(".takeaction_sortbutton").removeClass("takeaction_sortbutton_active");
		$(this).addClass("takeaction_sortbutton_active");
		
		var column = $(this).find(".takeaction_sortbutton_column").val();
		var direction = $(this).find(".takeaction_sortbutton_direction").val();
		
		$('.new').sortElements(function(a, b){
			var a = Number($(a).find(".takeaction_" + column).first().html());
			var b = Number($(b).find(".takeaction_" + column).first().html());
			if (direction == 'asc') {
				return a > b ? 1 : -1;
			}
			else {
				return b > a ? 1 : -1;
			}
		});
		$(".takeaction_sortbutton_arrow").hide();
		if (direction == 'asc') {
			$(this).find(".takeaction_sortbutton_direction").val('desc');
			$(this).find(".takeaction_sortbutton_downarrow").show();
		}
		else {
			$(this).find(".takeaction_sortbutton_direction").val('asc');	
			$(this).find(".takeaction_sortbutton_uparrow").show();
		}
	});
	
	$(".assumptionShowHideLink").click(function() {
		$(this).parent().parent().find(".assumption_content").slideToggle();
		if ($(this).find(".takeaction_assumption_plusminus").html() == "+") {
			$(this).find(".takeaction_assumption_plusminus").html("-");
		}
		else {
			$(this).find(".takeaction_assumption_plusminus").html("+");
		}
	});
	$(".assumption_content").hide();
	
	
	$("#mainAccordion").accordion({
		obj: "div",
		wrapper: "div",
		el: ".h",
		head: "h",
		next: "div",
		showMethod: "slideFadeDown",
		hideMethod: "slideFadeUp",
		//initShow : "div.shown",
		elToWrap: ".trg"
	});
	
		
}

function loadPledged() {
	var i;
	for (i = 0; i<pledgeList.length; i++) {
		pledge = pledgeList[i];	
		if (applicationState["input_takeaction_" + pledge] == 1) {
			$("#chkPledge_" + pledge).addClass("chkPledgeSelected");
			$("#takeaction_greenglow_" + pledge).fadeIn();
			$("#takeaction_pounds_" + pledge).css({'color': '#7DC100', 'text-shadow': ''}); //#74B15B // 46BD24 // 7DC100
		}
		else {
			$("#chkPledge_" + pledge).removeClass("chkPledgeSelected");
			$("#takeaction_greenglow_" + pledge).fadeOut(300, 'swing', function() {$(this).hide();});
			$("#takeaction_pounds_" + pledge).css({'color': '#415683', 'text-shadow': ''});
		}
	}	
}

function takeaction_pledge(pledge)
{	
	if (isComputingTakeactionResults === true) return;
	if ($("#input_takeaction_" + pledge).val() == 0) {
		$("#input_takeaction_" + pledge).val(1);
		$("#chkPledge_" + pledge).addClass("chkPledgeSelected");
		$("#takeaction_greenglow_" + pledge).fadeIn();
		$("#takeaction_pounds_" + pledge).css({'color': '#7DC100', 'text-shadow': ''}); //#74B15B // 46BD24 // 7DC100
	}
	else {
		$("#input_takeaction_" + pledge).val(0);
		$("#chkPledge_" + pledge).removeClass("chkPledgeSelected");
		$("#takeaction_greenglow_" + pledge).fadeOut(300, 'swing', function() {$(this).hide();});
		$("#takeaction_pounds_" + pledge).css({'color': '#415683', 'text-shadow': ''});
	}
	$("#input_takeaction_" + pledge).trigger('change');	
}


function bindSlider(inputID, elementID) {
	var defaultValue;
	if (inputID.substr(0,29) == "input_footprint_shopping_food") {
		defaultValue = "Number(applicationState[inputID + '_default'])";
	}
	else {
		defaultValue = "Number(regionDefaultsState[inputID])";
	}
	
	$("#" + inputID).bind('loadValue', function() {
		
		if (applicationState['input_changed'] != "input_footprint_household_adults" &&
			applicationState['input_changed'] != "input_footprint_household_children") {
			var newSliderValue = Math.round((Number(applicationState[inputID]) /
			eval(defaultValue) ) * 10) / 10;
			$('#' + elementID +'text').html(slidertext(newSliderValue));
			$("#" + elementID).slider( "option", "value", newSliderValue );
		}
		else {
			displayTotalCalories();
		}
	});
	
	$('#' + elementID).slider({
		orientation: 'horizontal',
		min: 0,
		max: 3,
		value: 1,
		step: .1,
		stop: function (event, ui) {
			var value = Number(ui.value) * eval(defaultValue);
			$('#' + elementID +'text').html(slidertext(ui.value));

			$("#" + inputID).val(value);
			
			displayTotalCalories();
			
			$("#" + inputID).trigger('change');
		}
	});
}

function setLocation(locationmode) {
	$(".locationmode").removeClass("selected");	
	$(".intro_radiogrp_" + locationmode).addClass("selected");
}


function housing_hes_calc_results_button_onclick() {
	var hes_data = eval($("#housing_hes_input_fields").val());
	if (hes_data == "") {return false;}
	
	$.ajax({
		url: './hes/hes_save_inputs.php',
		data: 'hes_data=' + hes_data,
		type: 'POST',
		//data: 'region=' + region_request,
		beforeSend: function(xhr){
				$("#housing_hes_calc_results_button").text('Calculating ...').attr("disabled", "disabled");
				$("#housing_hes_results_container").html("<div style=\"width: 100%; text-align: center; \" ><img align=\"cetner\" src=\"images/hes_preload.gif\" /></div>");
				$("#hes_overlay").fadeIn();
				$("#housing_button_hes_submit_zipcode").attr("disabled", "disabled");
				$("#housing_input_zipcode").attr("disabled", "disabled");

			},
		success: function(data){
				$("#housing_hes_results_container").html(data);
				
				applicationState['input_footprint_housing_electricity_type'] = 1;
				applicationState['input_footprint_housing_electricity_kwh'] = Number($("#housing_hes_kwh").val());
				
				applicationState['input_footprint_housing_naturalgas_type'] = 1;
				applicationState['input_footprint_housing_naturalgas_therms'] = Number($("#housing_hes_therm").val());

				computeFootprint(function() {
					$("#input_footprint_housing_electricity_type").trigger('loadValue');
					$("#input_footprint_housing_electricity_kwh").val(applicationState['input_footprint_housing_electricity_kwh']);
					$("#input_footprint_housing_naturalgas_type").trigger('loadValue');
					$("#input_footprint_housing_naturalgas_therms").val(applicationState['input_footprint_housing_naturalgas_therms']);
				});
				
				
			},
		complete: function(xhr, textStatus){
				$("#housing_hes_calc_results_button").text('Calculate Results').removeAttr("disabled");
				$("#hes_overlay").hide();
				$("#housing_button_hes_submit_zipcode").removeAttr("disabled");
				$("#housing_input_zipcode").removeAttr("disabled");
			}, 
		error: function(jqXHR, textStatus, errorThrown){
				$("#housing_hes_results_container").html(textStatus);
			}
	});
	
		
}


function housing_button_hes_submit_zipcode_onclick() {
	var zip_input = $.trim($("#housing_input_zipcode").val());
	if (isNaN(zip_input) || zip_input=="") {
		alert("Please enter a valid zipcode");	
		return false;
	}
	
	$.ajax({
		url: './hes/hes_initiate_session.php',
		data: 'zipcode=' + zip_input,
		type: 'POST',
		//data: 'region=' + region_request,
		beforeSend: function(xhr){
				$("#housing_button_hes_submit_zipcode").text('Loading data...').attr("disabled", "disabled");
				$("#housing_input_zipcode").attr("disabled", "disabled");
				$("#housing_hes_results_container").html("");
				$("#housing_hes_fields_container").html("<div style=\"width: 100%; text-align: center; \" ><img src=\"images/hes_preload.gif\" /> </div>");
			},
		success: function(data){
				$("#housing_hes_fields_container").html(data);
			},
		complete: function(xhr, textStatus){
				$("#housing_button_hes_submit_zipcode").text('Begin Advanced Audit').removeAttr("disabled");
				$("#housing_input_zipcode").removeAttr("disabled");
				$("button").button();
				$("input").focus( function() {
					if ($(this).attr('id') != "query") {
						$(this).addClass("input_selected");
					}
				});
				$("input").focusout( function() {
					$(this).removeClass("input_selected");
				});
				
			}, 
		error: function(jqXHR, textStatus, errorThrown){
				$("#housing_hes_fields_container").html(textStatus);
			}
	});
	
}


function displayTakeactionResults() {
	eval('var pounds = ' + applicationState['result_takeaction_pounds']);
	eval('var dollars = ' + applicationState['result_takeaction_dollars']);
	eval('var net10yr = ' + applicationState['result_takeaction_net10yr']);
	
	var pledge;
	var poundsSum = 0;
	var dollarsSum = 0;
	var UpfrontSum = 0;
	for(pledge in pounds) {
		$("#takeaction_pounds_" + pledge).html(pounds[pledge]);
		poundsSum += Number(pounds[pledge]) * Number(applicationState['input_takeaction_' + pledge]);
		$("#takeaction_dollars_" + pledge).html(Math.round(dollars[pledge]));
		dollarsSum += Number(dollars[pledge])* Number(applicationState['input_takeaction_' + pledge]);
		$("#takeaction_net10yr_" + pledge).html(Math.round(net10yr[pledge]));
		UpfrontSum += Number(net10yr[pledge])* Number(applicationState['input_takeaction_' + pledge]);
	}
	
	$("#takeaction_pounds_total").html(Math.round(poundsSum * 10) / 10);
	$("#takeaction_dollars_total").html(Math.round(dollarsSum));
	$("#takeaction_upfront_total").html(Math.round(UpfrontSum));
	
	$("#takeaction_afterpledge_grand_total").html(Math.round(Number(applicationState['result_takeaction_grand_total']) * 10)/ 10 );
	
	
	$(".pledge_assumption_price_of_gasoline").html(applicationState['input_takeaction_assumption_price_of_gasoline']);
	$(".kwhprice").html(applicationState['input_takeaction_assumption_kwhprice']);
	$(".ngprice").html(applicationState['input_takeaction_assumption_ngprice']);
	
	$("#display_takeaction_more_efficient_vehicle_mpg_old").html(applicationState['input_takeaction_more_efficient_vehicle_mpg_old']);
	$("#display_takeaction_alternativefuel_vehicle_mpg_old").html(applicationState['input_takeaction_alternativefuel_vehicle_mpg_old']);
	$("#display_takeaction_electric_vehicle_mpg_old").html(applicationState['input_takeaction_electric_vehicle_mpg_old']);
	$("#display_takeaction_hybrid_vehicle_mpg_old").html(applicationState['input_takeaction_hybrid_vehicle_mpg_old']);
	$("#display_takeaction_telecommute_to_work_mpg").html(applicationState['input_takeaction_telecommute_to_work_mpg']);
	$("#display_takeaction_ride_my_bike_mpg").html(applicationState['input_takeaction_ride_my_bike_mpg']);
	
	$("#result_takeaction_ride_my_bike_totalcalories").html(applicationState['result_takeaction_ride_my_bike_totalcalories']);
	$("#result_takeaction_ride_my_bike_ghgper100cal").html(applicationState['result_takeaction_ride_my_bike_ghgper100cal']);
	$("#result_takeaction_ride_my_bike_bikeghgs").html(applicationState['result_takeaction_ride_my_bike_bikeghgs']);
	$("#result_takeaction_ride_my_bike_driveghgs").html(applicationState['result_takeaction_ride_my_bike_driveghgs']);
	$("#display_takeaction_ride_my_bike_miles").html(applicationState['input_takeaction_ride_my_bike_miles']);
	$("#display_takeaction_take_public_transportation_mpg").html(applicationState['input_takeaction_take_public_transportation_mpg']);
	
	$("#result_takeaction_practice_eco_driving_dispmiles").html(applicationState['result_takeaction_practice_eco_driving_dispmiles']);
	$("#result_takeaction_practice_eco_driving_newmpg").html(applicationState['result_takeaction_practice_eco_driving_newmpg']);
	$("#result_takeaction_practice_eco_driving_mpg").html(applicationState['result_takeaction_practice_eco_driving_mpg']);
	$("#result_takeaction_practice_eco_driving_galsaved").html(applicationState['result_takeaction_practice_eco_driving_galsaved']);
	
	$("#result_takeaction_maintain_my_vehicles_mpg").html(applicationState['result_takeaction_maintain_my_vehicles_mpg']);
	$("#result_takeaction_maintain_my_vehicles_dispmiles").html(applicationState['result_takeaction_maintain_my_vehicles_dispmiles']);
	
	$("#result_takeaction_carpool_to_work_dep1k").html(applicationState['result_takeaction_carpool_to_work_dep1k']);
	
	$("#result_takeaction_reduce_air_travel_pounds_from_flight").html(applicationState['result_takeaction_reduce_air_travel_pounds_from_flight']);
	$("#result_takeaction_reduce_air_travel_miles_alt").html(applicationState['result_takeaction_reduce_air_travel_miles_alt']);
	$("#result_takeaction_reduce_air_travel_totalmiles").html(applicationState['result_takeaction_reduce_air_travel_totalmiles']);
	
	$("#result_takeaction_offset_transportation_transtonsleft").html(applicationState['result_takeaction_offset_transportation_transtonsleft']);
	$("#result_takeaction_offset_transportation_transpledges").html(applicationState['result_takeaction_offset_transportation_transpledges']);
	
	$("#display_takeaction_install_solar_heating_sqft").html(applicationState['input_footprint_housing_squarefeet']);
	$("#display_takeaction_install_solar_heating_gas").html(applicationState['input_footprint_housing_naturalgas_dollars']);

	
	$("#display_takeaction_thermostat_winter_sqft").html(applicationState['input_footprint_housing_squarefeet']);
	
	$("#result_takeaction_thermostat_winter_dollarstypical").html(applicationState['result_takeaction_thermostat_winter_dollarstypical']);
	$("#result_takeaction_thermostat_winter_dollarsuse").html(applicationState['result_takeaction_thermostat_winter_dollarsuse']);
	$("#result_takeaction_thermostat_winter_intensity").html(applicationState['result_takeaction_thermostat_winter_intensity']);	
	$("#result_takeaction_thermostat_winter_gCO2fueltype").html(applicationState['result_takeaction_thermostat_winter_gCO2fueltype']);
	$("#result_takeaction_thermostat_winter_pu").html(applicationState['result_takeaction_thermostat_winter_pu']);

	$("#display_takeaction_thermostat_summer_sqft").html(applicationState['input_footprint_housing_squarefeet']);

	$("#result_takeaction_thermostat_summer_dollarstypical").html(applicationState['result_takeaction_thermostat_summer_dollarstypical']);
	$("#result_takeaction_thermostat_summer_kwhtypical").html(applicationState['result_takeaction_thermostat_summer_kwhtypical']);
	$("#result_takeaction_thermostat_summer_dollarsuse").html(applicationState['result_takeaction_thermostat_summer_dollarsuse']);
	$("#result_takeaction_thermostat_summer_kwhuse").html(applicationState['result_takeaction_thermostat_summer_kwhuse']);

	$("#display_takeaction_purchase_high_efficiency_cooling_sqft").html(applicationState['input_footprint_housing_squarefeet']);

	$("#result_takeaction_purchase_high_efficiency_cooling_dollarstypical").html(applicationState['result_takeaction_purchase_high_efficiency_cooling_dollarstypical']);
	$("#result_takeaction_purchase_high_efficiency_cooling_kwhtypical").html(applicationState['result_takeaction_purchase_high_efficiency_cooling_kwhtypical']);
	$("#result_takeaction_purchase_high_efficiency_cooling_dollarsuse").html(applicationState['result_takeaction_purchase_high_efficiency_cooling_dollarsuse']);
	$("#result_takeaction_purchase_high_efficiency_cooling_kwhuse").html(applicationState['result_takeaction_purchase_high_efficiency_cooling_kwhuse']);

    $("#display_takeaction_purchase_high_efficiency_heating_sqft").html(applicationState['input_footprint_housing_squarefeet']);
	
	$("#result_takeaction_purchase_high_efficiency_heating_dollarstypical").html(applicationState['result_takeaction_purchase_high_efficiency_heating_dollarstypical']);
	$("#result_takeaction_purchase_high_efficiency_heating_dollarsuse").html(applicationState['result_takeaction_purchase_high_efficiency_heating_dollarsuse']);
	$("#result_takeaction_purchase_high_efficiency_heating_intensity").html(applicationState['result_takeaction_purchase_high_efficiency_heating_intensity']);	
	$("#result_takeaction_purchase_high_efficiency_heating_gCO2fueltype").html(applicationState['result_takeaction_purchase_high_efficiency_heating_gCO2fueltype']);
	$("#result_takeaction_purchase_high_efficiency_heating_pu").html(applicationState['result_takeaction_purchase_high_efficiency_heating_pu']);

	$("#result_takeaction_energy_star_fridge_totvolume").html(applicationState['result_takeaction_energy_star_fridge_totvolume']);
	$("#result_takeaction_energy_star_fridge_fridgekwh").html(applicationState['result_takeaction_energy_star_fridge_fridgekwh']);
	$("#result_takeaction_energy_star_fridge_ESfridgekwh").html(applicationState['result_takeaction_energy_star_fridge_ESfridgekwh']);

	$("#display_takeaction_purchase_green_electricity_kwhyear").html(applicationState['input_footprint_housing_electricity_kwh']);
	$("#result_takeaction_purchase_green_electricity_kwhCO2yr").html(applicationState['result_takeaction_purchase_green_electricity_kwhCO2yr']);
	
	$("#display_takeaction_install_PV_panels_kwhyear").html(applicationState['input_footprint_housing_electricity_kwh']);
	$("#result_takeaction_install_PV_panels_kwhCO2yr").html(applicationState['result_takeaction_purchase_green_electricity_kwhCO2yr']);
	
	$("#display_takeaction_low_flow_showerheads_input_size").html(applicationState['input_size']);
	
	$("#display_takeaction_low_flow_faucets_input_size").html(applicationState['input_size']);
	
	$("#result_takeaction_line_dry_clothing_dryerkwhyr").html(applicationState['result_takeaction_line_dry_clothing_dryerkwhyr']);
	$("#result_takeaction_line_dry_clothing_dryercostyr").html(applicationState['result_takeaction_line_dry_clothing_dryercostyr']);
	
	$("#display_takeaction_water_efficient_landscaping_sqft").html(applicationState['input_footprint_housing_squarefeet']);
	
	$("#result_takeaction_offset_housing_transtonsleft").html(applicationState['result_takeaction_offset_housing_transtonsleft']);
	$("#result_takeaction_offset_housing_transpledges").html(applicationState['result_takeaction_offset_housing_transpledges']);

	$("#result_takeaction_low_carbon_diet_meatcal").html(applicationState['result_takeaction_low_carbon_diet_meatcal']);
	$("#result_takeaction_low_carbon_diet_dairycal").html(applicationState['result_takeaction_low_carbon_diet_dairycal']);
	$("#result_takeaction_low_carbon_diet_fvcal").html(applicationState['result_takeaction_low_carbon_diet_fvcal']);
	$("#result_takeaction_low_carbon_diet_cerealscal").html(applicationState['result_takeaction_low_carbon_diet_cerealscal']);
	$("#result_takeaction_low_carbon_diet_othercal").html(applicationState['result_takeaction_low_carbon_diet_othercal']);
	$("#result_takeaction_low_carbon_diet_totalcal").html(applicationState['result_takeaction_low_carbon_diet_totalcal']);

	$("#result_takeaction_offset_shopping_transpledges").html(applicationState['result_takeaction_offset_shopping_transpledges']);
	$("#result_takeaction_offset_shopping_transtonsleft").html(applicationState['result_takeaction_offset_shopping_transtonsleft']);
	
	$("#takeaction_display_gco2perkwh").html(applicationState['input_footprint_housing_gco2_per_kwh']);
	
	//update the takeaction smiley
	var percentComparison = Number(applicationState['result_takeaction_grand_total']) / Number(regionDefaultsState['result_grand_total']);
	var imgName = '';
	if (percentComparison <= 0.5) {
		imgName = "bigsmile75.jpg";
	}
	else if (percentComparison > 0.5 && percentComparison <= 0.9) {
		imgName = "smiley75.gif";
	}
	else if (percentComparison > 0.9 && percentComparison <= 1.1) {
		imgName = "smileyok75.gif";
	}
	else if (percentComparison > 1.1 && percentComparison <= 2.0) {
		imgName = "smallfrown75.jpg";
	}
	else if (percentComparison > 2.0) {
		imgName = "ohno75.jpg";
	}
	if (imgName != "") {
		$("#takeaction_img_smilely").attr('src', 'images/smiley/' + imgName);
	}
	
	var betterWorsePercent = (Number(regionDefaultsState['result_grand_total'])
		-Number(applicationState['result_takeaction_grand_total'])) 
		/ Number(regionDefaultsState['result_grand_total'])
		* 100;
	var betterWorse = '';
	
	if (betterWorsePercent < 0) {
		betterWorsePercent *= -1;
		betterWorse = 'Worse';
	}
	else {
		betterWorse = 'Better';
	}
	$("#takeaction_smiley_percent_comparison").html(Number(Math.round(betterWorsePercent * 10)/10) + '% ' + betterWorse);


	var comparisonDisplaySize = '';
	if (applicationState['input_size'] == 0) {
		comparisonDisplaySize = 'average size';
	} 
	else if (applicationState['input_size'] == 1) {
		comparisonDisplaySize = 'one person';
	}
	else {
		comparisonDisplaySize = applicationState['input_size'] + ' people';
	}
	
	$("#takeaction_smiley_percent_comparison_rest").html("than the average household in " 
		+ $("#selected_location").html() + " with " + comparisonDisplaySize + " and similar income.");
	
	//calculate ROI

	var inflationrate = applicationState['input_takeaction_assumption_inflationrate'];
	var discountrate = applicationState['input_takeaction_assumption_discountrate'];
	
	var npv10yr = Math.round(-UpfrontSum+((dollarsSum*(Math.pow(1+inflationrate/100,1)))/(Math.pow(1+discountrate/100,1)))+((dollarsSum*(Math.pow(1+inflationrate/100,2)))/(Math.pow(1+discountrate/100,2)))+((dollarsSum*(Math.pow(1+inflationrate/100,3)))/(Math.pow(1+discountrate/100,3)))+((dollarsSum*(Math.pow(1+inflationrate/100,4)))/(Math.pow(1+discountrate/100,4)))+((dollarsSum*(Math.pow(1+inflationrate/100,5)))/(Math.pow(1+discountrate/100,5)))+((dollarsSum*(Math.pow(1+inflationrate/100,6)))/(Math.pow(1+discountrate/100,6)))+((dollarsSum*(Math.pow(1+inflationrate/100,7)))/(Math.pow(1+discountrate/100,7)))+((dollarsSum*(Math.pow(1+inflationrate/100,8)))/(Math.pow(1+discountrate/100,8)))+((dollarsSum*(Math.pow(1+inflationrate/100,9)))/(Math.pow(1+discountrate/100,9)))+((dollarsSum*(Math.pow(1+inflationrate/100,10)))/(Math.pow(1+discountrate/100,10))));
	var payback = Math.round((UpfrontSum / (dollarsSum+1))*10)/10;
    var roi = (UpfrontSum==0)?0:(Math.round((npv10yr/UpfrontSum)*100)/100);
	
	$("#takeaction_npv10yr").html(npv10yr);
	$("#takeaction_roi").html(roi);
	
	loadPledged();
	
	updateTakeactionChart();
}

function computeTakeactionResults() { 
	if (isComputingTakeactionResults === true) return;
	$.ajax({ type: "POST",
		url:  'https://coolclimate.berkeley.edu/calculators/household/api.php?op=compute_takeaction_results',
		data: applicationState,
		dataType: 'xml',
		beforeSend: function() {
			isComputingTakeactionResults = true
		},
		success: function(xml) {
			if ($(xml).find('response').find('failed').length > 0) {
		
				alert($(xml).find('error_message').first().text());
			}
			else {
		
				$(xml).find('response').children().each(function() {
							
					var variableName = $(this).prop("nodeName");
					var variableValue = $(this).text();
					if (!isNaN(variableValue)) {
						if (variableName.substring(0, 6) == "input_" && variableName.substr(0,17) != "input_takeaction_") {
							variableValue = Math.round(variableValue);
						}
						else {
							variableValue = Math.round(variableValue*100)/100;
						}
					}
					applicationState[variableName] = variableValue;
					
					$("#" + variableName).val(variableValue).trigger('loadValue');
					
				});	

				displayTakeactionResults() ;

			}
		},
		error: function (jqXHR, textStatus, errorThrown) {
			alert(textStatus + errorThrown);
		}, 
		complete: function() {
			isComputingTakeactionResults = false;
		}
	});
	
}




function computeFootprint(callback) { 
	if (isComputingFootprint === true) return;
	$.ajax({ type: "POST",
		url:  'https://coolclimate.berkeley.edu/calculators/household/api.php?op=compute_footprint',
		data: applicationState,
		dataType: 'xml',
		beforeSend: function() {
			isComputingFootprint = true;
		},
		success: function(xml) {
			if ($(xml).find('response').find('failed').length > 0) {
		
				alert($(xml).find('error_message').first().text());
			}
			else {
		
				$(xml).find('response').children().each(function() {
							
					var variableName = $(this).prop("nodeName");
					var variableValue = $(this).text();
					if (!isNaN(variableValue)) {
						if (variableName.substring(0, 6) == "input_" && variableName.substr(0,17) != "input_takeaction_") {
							variableValue = Math.round(variableValue);
						}
						else {
							variableValue = Math.round(variableValue*100)/100;
						}
					}
					applicationState[variableName] = variableValue;
					
					$("#" + variableName).val(variableValue).trigger('loadValue');
					
				});	
				//displayTotalCalories();
				//displayTakeactionResults();
				$("#" + applicationState["input_changed"]).trigger('loadValue');
				
				if (callback) {
					(callback)();	
				}
				
				displayTakeactionResults();
				
				updateSmiley(tab);
				updateChart();
			}
		},
		error: function (jqXHR, textStatus, errorThrown) {
			alert(textStatus + errorThrown);
		},
		complete: function () {
			isComputingFootprint = false;	
		}
	});

}


function getDefaults() {
	var size = $("#intro_select_size").val();
	var income = $("#intro_select_income").val();
	var location = $("#intro_hf_location").val();
	var mode = $("#intro_hf_ac_mode").val();
			
	$.ajax({ type: "GET",
		url:  'https://coolclimate.berkeley.edu/calculators/household/api.php?op=get_defaults_and_results&input_location_mode=' + mode + '&input_location=' + location + '&input_income=' + income +'&input_size=' + size,
		//data: _data,
		dataType: 'xml',
		success: function(xml)
		{
			if ($(xml).find('response').find('failed').length > 0) {
		
				alert($(xml).find('error_message').first().text());
			}
			else {
		
				$(xml).find('response').children().each(function() {
							
					var variableName = $(this).prop("nodeName");
					var variableValue = $(this).text();
					if (!isNaN(variableValue)) {
						if (variableName.substring(0, 6) == "input_" &&
							variableName != "input_footprint_household_adults" && //don't round these inputs
							variableName != "input_takeaction_assumption_ngprice" 
							
							 && variableName.substr(0,17) != "input_takeaction_") {
							variableValue = Math.round(variableValue);
						}
						else {
							variableValue = Math.round(variableValue*100)/100;
						}
					}
					
					applicationState[variableName] = variableValue;	
					regionDefaultsState[variableName] = variableValue;	

					//if (variableName.substring(0, 6) == "input_") {
						$("#" + variableName).val(variableValue).trigger('loadValue');
					//}
					
					
					
				});	
				
				displayTakeactionResults() ;
				
				displayTotalCalories();
				updateSmiley(tab);
				updateChart();
			}
		},
		error: function (jqXHR, textStatus, errorThrown) {
			alert(textStatus + errorThrown);
		}
	});
}


function banner_buttons_update(pg) {
	$('.banner').find('> a').removeClass("greenButton").addClass("blueButton");
	$('#banner_' + pg).find("> a").addClass("greenButton");

	$("#sidebar_left").removeClass("sidebar_left_green").addClass("sidebar_left_blue");
	$("#sidebar_right").removeClass("sidebar_right_green").addClass("sidebar_right_blue");

	if (pg == 0) {

		$("#sidebar_left").removeClass("sidebar_left_blue").addClass("sidebar_left_green");
	}
	if (pg == 5) {
		$("#sidebar_right").removeClass("sidebar_right_blue").addClass("sidebar_right_green");
	}
	$(".left_bars").hide();
	$("#left_bar" + pg).show();	
}

function bindChange(variableName) {
	$("#" + variableName).change(function() { 
			applicationState[variableName] = $("#" + variableName).val();
			applicationState['input_changed'] = variableName;
			//$("#" + variableName).trigger('loadValue');
//alert(variableName.substr(0, 16));
			if(variableName.substr(0, 16) == "input_footprint_") { 
				computeFootprint();
			}
			else if (variableName.substr(0, 17) == "input_takeaction_") {
				computeTakeactionResults();
			}
			
		});	
}

$(document).ready(function () {

	
	init();
	initializeChart();
	
	$.ajax({ type: "GET",
		url:  'https://coolclimate.berkeley.edu/calculators/household/api.php?op=get_application_js_ds',
		//data: _data,
		dataType: 'script',
		success: function(data)
		{
			eval(data);
			
			$("#intro_hf_ac_mode").val(5);
			$("#selected_location").html('United States');
			
			for (var variableName in applicationState)  {
				bindChange(variableName);
			}
			
			getDefaults();
			
			
		},
		error: function (jqXHR, textStatus, errorThrown) {
			alert(textStatus + errorThrown);
		}
	});
});





function setNextButtonText() {
	return;
	if (tab == 'intro') {
		$("#nextButton_").text("Next: Travel");
	} else if (tab == 'transportation') {
		$("#nextButton_").text("Next: Housing");
	} else if (tab == 'housing') {
		$("#nextButton_").text("Next: Food");
	} else if (tab == 'food') {
		$("#nextButton_").text("Next: Shopping");
	} else if (tab == 'shopping') {
		$("#nextButton_").text("Next: Take Action");
	}

	
	if (tab == 'takeaction') {
		$("#nextButton_").fadeOut();
	}
	else {
		$("#nextButton_").fadeIn()
	}
}


function nextPage() {
	setNextButtonText();
	if (tab == 'intro') {
		loadPage('transportation', true, null);
	} else if (tab == 'transportation') {
		loadPage('housing', true, null);
	} else if (tab == 'housing') {
		loadPage('food', true, null);
	} else if (tab == 'food') {
		loadPage('shopping', true, null);
	} else if (tab == 'shopping') {
		loadPage('takeaction', true, null);
	}

}

function displayTotalCalories() {
	
	$("#shopping_meatfisheggs_calories_per_household").html(Math.round(Number($("#input_footprint_shopping_food_meatfisheggs").val())));
	$("#shopping_meat_beefpork_calories_per_household").html(Math.round(Number($("#input_footprint_shopping_food_meat_beefpork").val())));
	$("#shopping_meat_poultry_calories_per_household").html(Math.round(Number($("#input_footprint_shopping_food_meat_poultry").val())));
	$("#shopping_meat_other_calories_per_household").html(Math.round(Number($("#input_footprint_shopping_food_meat_other").val())));
	$("#shopping_meat_fish_calories_per_household").html(Math.round(Number($("#input_footprint_shopping_food_meat_fish").val())));
	$("#shopping_dairy_calories_per_household").html(Math.round(Number($("#input_footprint_shopping_food_dairy").val())));
	$("#shopping_cereals_calories_per_household").html(Math.round(Number($("#input_footprint_shopping_food_cereals").val())));
	$("#shopping_fruitvegetables_calories_per_household").html(Math.round(Number($("#input_footprint_shopping_food_fruitvegetables").val())));
	$("#shopping_otherfood_calories_per_household").html(Math.round(Number($("#input_footprint_shopping_food_otherfood").val())));

	var meat;
	
	if ($("#input_footprint_shopping_food_meattype").val() == 0) {
		meat = Number($("#input_footprint_shopping_food_meatfisheggs").val());
	}
	else {
		meat = 	Number($("#input_footprint_shopping_food_meat_beefpork").val()) +  
			Number($("#input_footprint_shopping_food_meat_poultry").val()) +  
			Number($("#input_footprint_shopping_food_meat_fish").val()) +  
			Number($("#input_footprint_shopping_food_meat_other").val())
	}
		
	$("#shopping_totalcalories_calories_per_household").html(Math.round(
	meat +  
	Number($("#input_footprint_shopping_food_dairy").val()) +  
	Number($("#input_footprint_shopping_food_fruitvegetables").val()) +  
	Number($("#input_footprint_shopping_food_cereals").val()) +  
	Number($("#input_footprint_shopping_food_otherfood").val())));
	
	$("#shopping_meatfisheggs_calories_per_person").html(Math.round(
		Number($("#input_footprint_shopping_food_meatfisheggs").val()) / 
		(Number($("#input_footprint_household_adults").val()) +
		Number($("#input_footprint_household_children").val()))) );
	$("#shopping_meat_beefpork_calories_per_person").html(Math.round(
		Number($("#input_footprint_shopping_food_meat_beefpork").val()) / 
		(Number($("#input_footprint_household_adults").val()) +
		Number($("#input_footprint_household_children").val()))) );
	$("#shopping_meat_poultry_calories_per_person").html(Math.round(
		Number($("#input_footprint_shopping_food_meat_poultry").val()) / 
		(Number($("#input_footprint_household_adults").val()) +
		Number($("#input_footprint_household_children").val()))) );
	$("#shopping_meat_fish_calories_per_person").html(Math.round(
		Number($("#input_footprint_shopping_food_meat_fish").val()) / 
		(Number($("#input_footprint_household_adults").val()) +
		Number($("#input_footprint_household_children").val()))) );
	$("#shopping_meat_other_calories_per_person").html(Math.round(
		Number($("#input_footprint_shopping_food_meat_other").val()) / 
		(Number($("#input_footprint_household_adults").val()) +
		Number($("#input_footprint_household_children").val()))) );
	$("#shopping_dairy_calories_per_person").html(Math.round(
		Number($("#input_footprint_shopping_food_dairy").val()) / 
		(Number($("#input_footprint_household_adults").val()) +
		Number($("#input_footprint_household_children").val()))) );
	$("#shopping_fruitvegetables_calories_per_person").html(Math.round(
		Number($("#input_footprint_shopping_food_fruitvegetables").val()) / 
		(Number($("#input_footprint_household_adults").val()) +
		Number($("#input_footprint_household_children").val()))) );
	$("#shopping_cereals_calories_per_person").html(Math.round(
		Number($("#input_footprint_shopping_food_cereals").val()) / 
		(Number($("#input_footprint_household_adults").val()) +
		Number($("#input_footprint_household_children").val()))) );
	$("#shopping_otherfood_calories_per_person").html(Math.round(
		Number($("#input_footprint_shopping_food_otherfood").val()) / 
		(Number($("#input_footprint_household_adults").val()) +
		Number($("#input_footprint_household_children").val()))) );
	$("#shopping_totalcalories_calories_per_person").html(Math.round(
		Number($("#shopping_totalcalories_calories_per_household").html()) / 
		(Number($("#input_footprint_household_adults").val()) +
		Number($("#input_footprint_household_children").val()))) );
}


function slidertext(sliderValue) {
    var vSlider = (sliderValue * 10);
    var returnValue = "";
    switch (vSlider) {
    case 0:
        returnValue = "None";
        break;
    case 1:
        returnValue = "Almost none";
        break;
    case 2:
        returnValue = "Very little";
        break;
    case 3:
        returnValue = "Very little";
        break;
    case 4:
        returnValue = "Much less than average";
        break;
    case 5:
        returnValue = "Much less than average";
        break;
    case 6:
        returnValue = "Less than average";
        break;
    case 7:
        returnValue = "Less than average";
        break;
    case 8:
        returnValue = "Almost average";
        break;
    case 9:
        returnValue = "Almost average";
        break;
    case 10:
        returnValue = "Average";
        break;
    case 11:
        returnValue = "Just above average";
        break;
    case 12:
        returnValue = "Just above average";
        break;
    case 13:
        returnValue = "More than average";
        break;
    case 14:
        returnValue = "More than average";
        break;
    case 15:
        returnValue = "More than average";
        break;
    case 16:
        returnValue = "More than average";
        break;
    case 17:
        returnValue = "Much more than average";
        break;
    case 18:
        returnValue = "Much more than average";
        break;
    case 19:
        returnValue = "Much more than average";
        break;
    case 20:
        returnValue = "A lot";
        break;
    case 21:
        returnValue = "A lot";
        break;
    case 22:
        returnValue = "A lot";
        break;
    case 23:
        returnValue = "More than a lot";
        break;
    case 24:
        returnValue = "More than a lot";
        break;
    case 25:
        returnValue = "More than a lot";
        break;
    case 26:
        returnValue = "More than a lot";
        break;
    case 27:
        returnValue = "Much more than a lot";
        break;
    case 28:
        returnValue = "Much more than a lot";
        break;
    case 29:
        returnValue = "Much more than a lot";
        break;
    case 30:
        returnValue = "Wow!";
        break;
    default:
        returnValue = "Average";
		break;
    }
    return returnValue;
}
