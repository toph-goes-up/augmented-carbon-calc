var myplot;
var takeactionPlot;
var seriesLables = new Array();
var maximum_bar, new_maximum_bar, mainchart_maximum_bar, mainchart_new_maximum_bar; 
var postChartLoadEvent;


//var mainChartColors = ['#5b71a3','#7494b5','#91b1c2','#9ccea9','#9ccea9'];
//var mainChartColors = ['#F2419C','#87B400','#E1872D','#5A8700','#5A8700'];
//var mainChartColors = ['#2d2d5a','#5a5a87','#5a2d5a','#2d002d','#00002d'];
//var mainChartColors = ['#005a5a','#5a8787','#5ab487','#2d875a','#2d5a2d'];
//var mainChartColors = ['#5a2d2d','#2d2d2d','#5a5a5a','#5a5a2d','#875a5a'];

//var mainChartColors = ['#2d872d','#002d2d','#005a2d','#2d5a2d','#2d875a'];

var mainChartColors = ['#677FB3','#C66','#5CA544','#D9AD00','#D9AD00'];

var takeactionColors = ['#6F86B7','#6F86B7','#6F86B7','#6F86B7','#6F86B7','#93E100'];

function cleanUpNumber(n) {
	var num;
	if (n < 0) {
		num = 0;	
	}
	else {
		num = n;
	}
	var rounded = Math.round(Number(num) * 100)/ 100;
	if (rounded < 0.1){ return 0; }//too small to show in the graph
	else { return rounded;}
}

function initializeChart() {
	
	//return;
	maximum_bar = 0;
	mainchart_maximum_bar = 0;
	new_maximum_bar = 0;
	mainchart_new_maximum_bar = 0;
	
	
	$.jqplot.preInitHooks.push(function () {});

	$.jqplot.postInitHooks.push(function () {
		if (postChartLoadEvent)(postChartLoadEvent)();
	});
	$.jqplot.postDrawHooks.push(function () {
		//correctPlot();
		$(".jqplot-point-label").css({
			'color': 'white',
			'cursor': 'default'
		});


		$(".jqplot-xaxis-tick").css({
			'margin-top': '3px'
		});
		
	//jqplot-base-canvas
	//jqplot-barRenderer-highlight-canvas
	//$(".jqplot-grid-canvas").css({
	//	'z-index': '00'
	//});
	//$(".jqplot-series-canvas").css({
	//	'z-index': '01'
	//});
		//correct labels
		var pixelThreshold = 13;
		var container = '';
		if (this.series.length == 5) {
			container = '#mainChart';	
		}
		else {
			container = '#takeactionChart';	
		}
		
		//correct labels
		for (var j = 0; j < 5; j++) {
			for (var i = 0; i < this.series.length; i++) {				
				if (Number($("#mainChart").height() - Number(this.axes.yaxis.u2p(this.series[i].data[j][1])) - 28) < pixelThreshold) {
					$(".jqplot-point-label.jqplot-series-" + i + ".jqplot-point-" + j, container).hide();
				} else {
					
					var ht = $(".jqplot-point-label.jqplot-series-" + i + ".jqplot-point-" + j, container).html();
					var w = Number($(".jqplot-point-label.jqplot-series-" + i + ".jqplot-point-" + j, container).width()) + 1;
					var top =  $(".jqplot-point-label.jqplot-series-" + i + ".jqplot-point-" + j, container).css('top');
					var intTop = Number(top.substr(0, top.length - 2));
					
					$(".jqplot-point-label.jqplot-series-" + i + ".jqplot-point-" + j, container)
					.html('<div style="height: 13px; overflow: hidden; position: relative; width: ' + w + 'px;"><div style="top: -2px; position: absolute;">' +
				      ht + 
					'</div></div>');
					var newTop = intTop + (Number($("#mainChart").height() - Number(this.axes.yaxis.u2p(this.series[i].data[j][1])) - 28) / 2 - 3);
					
					$(".jqplot-point-label.jqplot-series-" + i + ".jqplot-point-" + j, container).css({
						'top': newTop + 'px',
						'height': '12px'
					});
				}
			}
		}
		
		
		postChartLoadEvent = null;	
	});


	
	$("#mainChart").unbind('jqplotDataHighlight');
		$('#mainChart').bind('jqplotDataHighlight', function (ev, seriesIndex, pointIndex, data) { //alert('test');
			overPoint = pointIndex;
			overSeries = seriesIndex;
			setTimeout(function () {
				if (seriesIndex != overSeries || pointIndex != overPoint ) return;
				var labels = {
					0: ['Car Fuel', 'Electricity', 'Meat', 'Clothing', 'Services'],
					1: ['Car MFG', 'Natural Gas', 'Dairy', 'Furniture', ''],
					2: ['Public Transit', 'Other Fuels', 'Produce', 'Other Goods', ''],
					3: ['Air Travel', 'Water', 'Cereals', '', ''],
					4: ['', 'Construction', 'Other Food', '', '']
				};

				$('#tooltipText').html(labels[seriesIndex][pointIndex] + ':<br/>' + myplot.series[seriesIndex].data[pointIndex][1] + ' tons CO<sub>2</sub>');

				var ypos = 0;
				for (var j = seriesIndex; j >= 0; j--) {
					ypos += Number(myplot.axes.yaxis.u2p(0)) - Number(myplot.axes.yaxis.u2p(myplot.series[j].data[pointIndex][1]));
				}
				
				ypos += 0;//163;
				//ypos -= Number($("#mainChart").height() - Number(myplot.axes.yaxis.u2p(myplot.series[seriesIndex].data[pointIndex][1])))/2;
				animating = true;
				//
				if ($('#tooltip1b').css("opacity") > 0) {
					
					$('#tooltip1b').stop().show().animate({
						'opacity': '1',
						'bottom': ypos + 'px',
						'left': Number(myplot.axes.xaxis.u2p(myplot.series[0].data[pointIndex][0]) + 20) + 'px'
					}, 200, "swing", function () {
						animating = false;
					})
				}
				else {
					
					$('#tooltip1b').stop().show().css({'left': Number(myplot.axes.xaxis.u2p(myplot.series[0].data[pointIndex][0]) + 20) + 'px', 'bottom':  Number(ypos + 15) + 'px'}).animate({
						'opacity': '1',
						'bottom': ypos + 'px',
						'left': Number(myplot.axes.xaxis.u2p(myplot.series[0].data[pointIndex][0]) + 20) + 'px'
					}, 200, "swing", function () {
						animating = false;
					})
				}
				//$('#legend1b tr').css('background-color', '#ffffff');
				//$('#legend1b tr').eq(pointIndex+1).css('background-color', color); 
			}, 600);
		});
		$("#takeactionChart").unbind('jqplotDataHighlight');
		$('#takeactionChart').bind('jqplotDataHighlight', function (ev, seriesIndex, pointIndex, data) {
			overPoint = pointIndex;
			overSeries = seriesIndex;
			setTimeout(function () {
				if (seriesIndex != overSeries || pointIndex != overPoint ) return;
				var labels = {
					0: ['Car Fuel', 'Electricity', 'Meat', 'Clothing', 'Services'],
					1: ['Car MFG', 'Natural Gas', 'Dairy', 'Furniture', ''],
					2: ['Public Transit', 'Other Fuels', 'Produce', 'Other Goods', ''],
					3: ['Air Travel', 'Water', 'Cereals', '', ''],
					4: ['', 'Construction', 'Other Food', '', ''],
					5: ['Reduction', 'Reduction', 'Reduction', 'Reduction', 'Reduction'],
				};

				$('#takeaction_tooltip_text').html(labels[seriesIndex][pointIndex] + ':<br/>' + 
				Math.round(takeactionPlot.series[seriesIndex].data[pointIndex][1] * 100) / 100 
				+ ' tons CO<sub>2</sub>');

				var ypos = 0;
				for (var j = seriesIndex; j >= 0; j--) {
					ypos += Number(takeactionPlot.axes.yaxis.u2p(0)) - Number(takeactionPlot.axes.yaxis.u2p(takeactionPlot.series[j].data[pointIndex][1]));
				}
				
				ypos += 17;//163;
				//ypos -= Number($("#mainChart").height() - Number(takeactionPlot.axes.yaxis.u2p(takeactionPlot.series[seriesIndex].data[pointIndex][1])))/2;
				animating = true;
				//
				if ($('#takeaction_tooltip').css("opacity") > 0) {
					
					$('#takeaction_tooltip').stop().show().animate({
						'opacity': '1',
						'bottom': ypos + 'px',
						'left': Number(takeactionPlot.axes.xaxis.u2p(takeactionPlot.series[0].data[pointIndex][0]) + 20) + 'px'
					}, 200, "swing", function () {
						animating = false;
					})
				}
				else {
					
					$('#takeaction_tooltip').stop().show().css({'left': Number(takeactionPlot.axes.xaxis.u2p(takeactionPlot.series[0].data[pointIndex][0]) + 20) + 'px', 'bottom':  Number(ypos + 15) + 'px'}).animate({
						'opacity': '1',
						'bottom': ypos + 'px',
						'left': Number(takeactionPlot.axes.xaxis.u2p(takeactionPlot.series[0].data[pointIndex][0]) + 20) + 'px'
					}, 200, "swing", function () {
						animating = false;
					})
				}
				//$('#legend1b tr').css('background-color', '#ffffff');
				//$('#legend1b tr').eq(pointIndex+1).css('background-color', color); 
			}, 600);
		});



		// Bind a function to the unhighlight event to clean up after highlighting.
		$("#mainChart").unbind('jqplotDataUnhighlight');
		$('#mainChart').bind('jqplotDataUnhighlight', function (ev, seriesIndex, pointIndex, data) {
			//if (animating) return;
			overPoint = pointIndex;
			overSeries = seriesIndex;
			animating = false;
			$('#tooltip1b').stop().animate({
				'opacity': '0'
			}, 200, 'swing', function () {});
			//$('#tooltip1b').hide();
			//$('#legend1b tr').css('background-color', '#ffffff');
		});

		// Bind a function to the unhighlight event to clean up after highlighting.
		$("#takeactionChart").unbind('jqplotDataUnhighlight');
		$('#takeactionChart').bind('jqplotDataUnhighlight', function (ev, seriesIndex, pointIndex, data) {
			//if (animating) return;
			overPoint = pointIndex;
			overSeries = seriesIndex;
			animating = false;
			$('#takeaction_tooltip').stop().animate({
				'opacity': '0'
			}, 200, 'swing', function () {});
			//$('#takeaction_tooltip').hide();
			//$('#legend1b tr').css('background-color', '#ffffff');
		});
		
		/*
		$('#mainChart').bind('jqplotDataClick', function (ev, seriesIndex, pointIndex, data) {
			if (pointIndex == 0) {
				loadPage('transportation');
			} else if (pointIndex == 1) {
				loadPage('housing');
			} else if (pointIndex == 2) {
				loadPage('food');
			} else if (pointIndex == 3 || pointIndex == 4) {
				loadPage('shopping');
			}
		});
		*/
		
}

			
function updateTakeactionChart() {
	
	var carfuel = cleanUpNumber(Number(applicationState["result_motor_vehicles_direct"]) + Number(applicationState["result_motor_vehicles_indirect"])
		- Number(applicationState["result_takeaction_carfuel_reduction"]));
	var carfuel_reduction = cleanUpNumber(applicationState["result_takeaction_carfuel_reduction"]);
	var carmfg = cleanUpNumber(Number(applicationState["result_vehicle_manufact"])
		- Number(applicationState["result_takeaction_carmfg_reduction"]));
	var carmfg_reduction = cleanUpNumber(applicationState["result_takeaction_carmfg_reduction"]);
	var pubtrans = cleanUpNumber(Number(applicationState["result_publictrans_direct"]) + Number(applicationState["result_publictrans_indirect"])
		- Number(applicationState["result_takeaction_pubtrans_reduction"]));
	var pubtrans_reduction = cleanUpNumber(applicationState["result_takeaction_pubtrans_reduction"]);
	var airtravel = cleanUpNumber(Number(applicationState["result_air_travel_direct"]) + Number(applicationState["result_air_travel_indirect"])
		- Number(applicationState["result_takeaction_airtravel_reduction"]));
	var airtravel_reduction = cleanUpNumber(applicationState["result_takeaction_airtravel_reduction"]);
	var transport_reduction = carfuel_reduction + carmfg_reduction + pubtrans_reduction + airtravel_reduction;
	
	
	var electricity = cleanUpNumber(Number(applicationState["result_electricity_direct"]) + Number(applicationState["result_electricity_indirect"])
		- Number(applicationState["result_takeaction_electricity_reduction"]));
	var electricity_reduction = cleanUpNumber(applicationState["result_takeaction_electricity_reduction"]);
	var natgas = cleanUpNumber(Number(applicationState["result_natgas_direct"]) + Number(applicationState["result_natgas_indirect"])
		- Number(applicationState["result_takeaction_natgas_reduction"]));
	var natgas_reduction = cleanUpNumber(applicationState["result_takeaction_natgas_reduction"]);
	var otherfuels = cleanUpNumber(Number(applicationState["result_heatingoil_direct"]) + Number(applicationState["result_heatingoil_indirect"])
		- Number(applicationState["result_takeaction_otherfuels_reduction"]));
	var otherfuels_reduction = cleanUpNumber(applicationState["result_takeaction_otherfuels_reduction"]);
	var watersewage = cleanUpNumber(Number(applicationState["result_watersewage"])
		- Number(applicationState["result_takeaction_watersewage_reduction"]));
	var watersewage_reduction = cleanUpNumber(applicationState["result_takeaction_watersewage_reduction"]);
	var construction = cleanUpNumber(Number(applicationState["result_shelter"])
		- Number(applicationState["result_takeaction_construction_reduction"]));
	var construction_reduction = cleanUpNumber(applicationState["result_takeaction_construction_reduction"]);
	var housing_reduction = electricity_reduction + natgas_reduction + otherfuels_reduction + watersewage_reduction + construction_reduction;
	
	var meat = cleanUpNumber(Number(applicationState["result_food_meat"])
		- Number(applicationState["result_takeaction_meat_reduction"]));
	var meat_reduction = cleanUpNumber(applicationState["result_takeaction_meat_reduction"]);
	var dairy = cleanUpNumber(Number(applicationState["result_food_dairy"])
		- Number(applicationState["result_takeaction_dairy_reduction"]));
	var dairy_reduction = cleanUpNumber(applicationState["result_takeaction_dairy_reduction"]);
	var fruitsveg = cleanUpNumber(Number(applicationState["result_food_fruitsveg"])
		- Number(applicationState["result_takeaction_fruitsveg_reduction"]));
	var fruitsveg_reduction = cleanUpNumber(applicationState["result_takeaction_fruitsveg_reduction"]);
	var cereals = cleanUpNumber(Number(applicationState["result_food_cereals"])
		- Number(applicationState["result_takeaction_cereals_reduction"]));
	var cereals_reduction = cleanUpNumber(applicationState["result_takeaction_cereals_reduction"]);
	var foodother = cleanUpNumber(Number(applicationState["result_food_other"])
		- Number(applicationState["result_takeaction_foodother_reduction"]));
	var foodother_reduction = cleanUpNumber(applicationState["result_takeaction_foodother_reduction"]);
	var food_reduction = meat_reduction + dairy_reduction + fruitsveg_reduction + cereals_reduction + foodother_reduction;
	
	var clothing =  cleanUpNumber(Number(applicationState["result_goods_clothing"])
		- Number(applicationState["result_takeaction_clothing_reduction"]));
	var clothing_reduction = cleanUpNumber(applicationState["result_takeaction_clothing_reduction"]);
	var furniture =  cleanUpNumber(Number(applicationState["result_goods_furniture"])
		- Number(applicationState["result_takeaction_furniture_reduction"]));
	var furniture_reduction = cleanUpNumber(applicationState["result_takeaction_furniture_reduction"]);
	var goodsother =  cleanUpNumber(Number(applicationState["result_goods_other"])
		- Number(applicationState["result_takeaction_goodsother_reduction"]));
	var goodsother_reduction = cleanUpNumber(applicationState["result_takeaction_goodsother_reduction"]);
	var shopping_reduction = clothing_reduction + furniture_reduction + goodsother_reduction;
	
	var servicesall =  cleanUpNumber(Number(applicationState["result_services_all"])
		- Number(applicationState["result_takeaction_servicesall_reduction"]));
	var services_reduction = cleanUpNumber(applicationState["result_takeaction_servicesall_reduction"]);
	
	if (typeof(takeactionPlot) == "undefined") {
		drawTakeactionChart();
	} else {
		
		maximum_bar = Math.max(maximum_bar, takeactionPlot.series[0].data[0][1] + takeactionPlot.series[1].data[0][1] + takeactionPlot.series[2].data[0][1] + takeactionPlot.series[3].data[0][1] + takeactionPlot.series[5].data[0][1], 
		takeactionPlot.series[0].data[1][1] + takeactionPlot.series[1].data[1][1] + takeactionPlot.series[2].data[1][1] + takeactionPlot.series[3].data[1][1] + takeactionPlot.series[4].data[1][1] + takeactionPlot.series[5].data[1][1], 
		takeactionPlot.series[0].data[2][1] + takeactionPlot.series[1].data[2][1] + takeactionPlot.series[2].data[2][1] + takeactionPlot.series[3].data[2][1] + takeactionPlot.series[4].data[2][1] + takeactionPlot.series[5].data[2][1], 
		takeactionPlot.series[0].data[3][1] + takeactionPlot.series[1].data[3][1] + takeactionPlot.series[2].data[3][1] + takeactionPlot.series[5].data[3][1], 
		takeactionPlot.series[0].data[4][1] + takeactionPlot.series[5].data[4][1]);
		
		new_maximum_bar = Math.max(carfuel + carmfg + pubtrans + airtravel + transport_reduction, 
		electricity + natgas + otherfuels + watersewage + construction + housing_reduction, 
		meat + dairy + fruitsveg + cereals + foodother + food_reduction, 
		clothing + furniture + goodsother + shopping_reduction, 
		servicesall + services_reduction);
		
		//transportation
		takeactionPlot.series[0].data[0][1] = carfuel;
		takeactionPlot.series[1].data[0][1] = carmfg;
		takeactionPlot.series[2].data[0][1] = pubtrans;
		takeactionPlot.series[3].data[0][1] = airtravel;
		takeactionPlot.series[5].data[0][1] = transport_reduction;
		
		//housing
		takeactionPlot.series[0].data[1][1] = electricity;
		takeactionPlot.series[1].data[1][1] = natgas;
		takeactionPlot.series[2].data[1][1] = otherfuels;
		takeactionPlot.series[3].data[1][1] = watersewage;
		takeactionPlot.series[4].data[1][1] = construction;
		takeactionPlot.series[5].data[1][1] = housing_reduction;
		
		
		//food
		takeactionPlot.series[0].data[2][1] = meat;
		takeactionPlot.series[1].data[2][1] = dairy;
		takeactionPlot.series[2].data[2][1] = fruitsveg;
		takeactionPlot.series[3].data[2][1] = cereals;
		takeactionPlot.series[4].data[2][1] = foodother;
		takeactionPlot.series[5].data[2][1] = food_reduction;
		
		//goods
		takeactionPlot.series[0].data[3][1] = clothing;
		takeactionPlot.series[1].data[3][1] = furniture;
		takeactionPlot.series[2].data[3][1] = goodsother;
		takeactionPlot.series[5].data[3][1] = shopping_reduction;
		
		//services
		takeactionPlot.series[0].data[4][1] = servicesall;
		takeactionPlot.series[5].data[4][1] = services_reduction;
	
		$("#takeactionChart").empty();
		if (new_maximum_bar > maximum_bar) {// || $("#takeactionChart").is(':hidden')) {
			takeactionPlot.replot({resetAxes: true});
			maximum_bar = new_maximum_bar;
		}			
		else {
			takeactionPlot.replot({resetAxes: false});
		}
	
	
	
	}
	
	
}




function drawTakeactionChart() {
	var carfuel = cleanUpNumber(Number(applicationState["result_motor_vehicles_direct"]) + Number(applicationState["result_motor_vehicles_indirect"])
		- Number(applicationState["result_takeaction_carfuel_reduction"]));
	var carfuel_reduction = cleanUpNumber(applicationState["result_takeaction_carfuel_reduction"]);
	var carmfg = cleanUpNumber(Number(applicationState["result_vehicle_manufact"])
		- Number(applicationState["result_takeaction_carmfg_reduction"]));
	var carmfg_reduction = cleanUpNumber(applicationState["result_takeaction_carmfg_reduction"]);
	var pubtrans = cleanUpNumber(Number(applicationState["result_publictrans_direct"]) + Number(applicationState["result_publictrans_indirect"])
		- Number(applicationState["result_takeaction_pubtrans_reduction"]));
	var pubtrans_reduction = cleanUpNumber(applicationState["result_takeaction_pubtrans_reduction"]);
	var airtravel = cleanUpNumber(Number(applicationState["result_air_travel_direct"]) + Number(applicationState["result_air_travel_indirect"])
		- Number(applicationState["result_takeaction_airtravel_reduction"]));
	var airtravel_reduction = cleanUpNumber(applicationState["result_takeaction_airtravel_reduction"]);
	var transport_reduction = carfuel_reduction + carmfg_reduction + pubtrans_reduction + airtravel_reduction;
	
	
	var electricity = cleanUpNumber(Number(applicationState["result_electricity_direct"]) + Number(applicationState["result_electricity_indirect"])
		- Number(applicationState["result_takeaction_electricity_reduction"]));
	var electricity_reduction = cleanUpNumber(applicationState["result_takeaction_electricity_reduction"]);
	var natgas = cleanUpNumber(Number(applicationState["result_natgas_direct"]) + Number(applicationState["result_natgas_indirect"])
		- Number(applicationState["result_takeaction_natgas_reduction"]));
	var natgas_reduction = cleanUpNumber(applicationState["result_takeaction_natgas_reduction"]);
	var otherfuels = cleanUpNumber(Number(applicationState["result_heatingoil_direct"]) + Number(applicationState["result_heatingoil_indirect"])
		- Number(applicationState["result_takeaction_otherfuels_reduction"]));
	var otherfuels_reduction = cleanUpNumber(applicationState["result_takeaction_otherfuels_reduction"]);
	var watersewage = cleanUpNumber(Number(applicationState["result_watersewage"])
		- Number(applicationState["result_takeaction_watersewage_reduction"]));
	var watersewage_reduction = cleanUpNumber(applicationState["result_takeaction_watersewage_reduction"]);
	var construction = cleanUpNumber(Number(applicationState["result_shelter"])
		- Number(applicationState["result_takeaction_construction_reduction"]));
	var construction_reduction = cleanUpNumber(applicationState["result_takeaction_construction_reduction"]);
	var housing_reduction = electricity_reduction + natgas_reduction + otherfuels_reduction + watersewage_reduction + construction_reduction;
	
	var meat = cleanUpNumber(Number(applicationState["result_food_meat"])
		- Number(applicationState["result_takeaction_meat_reduction"]));
	var meat_reduction = cleanUpNumber(applicationState["result_takeaction_meat_reduction"]);
	var dairy = cleanUpNumber(Number(applicationState["result_food_dairy"])
		- Number(applicationState["result_takeaction_dairy_reduction"]));
	var dairy_reduction = cleanUpNumber(applicationState["result_takeaction_dairy_reduction"]);
	var fruitsveg = cleanUpNumber(Number(applicationState["result_food_fruitsveg"])
		- Number(applicationState["result_takeaction_fruitsveg_reduction"]));
	var fruitsveg_reduction = cleanUpNumber(applicationState["result_takeaction_fruitsveg_reduction"]);
	var cereals = cleanUpNumber(Number(applicationState["result_food_cereals"])
		- Number(applicationState["result_takeaction_cereals_reduction"]));
	var cereals_reduction = cleanUpNumber(applicationState["result_takeaction_cereals_reduction"]);
	var foodother = cleanUpNumber(Number(applicationState["result_food_other"])
		- Number(applicationState["result_takeaction_foodother_reduction"]));
	var foodother_reduction = cleanUpNumber(applicationState["result_takeaction_foodother_reduction"]);
	var food_reduction = meat_reduction + dairy_reduction + fruitsveg_reduction + cereals_reduction + foodother_reduction;
	
	var clothing =  cleanUpNumber(Number(applicationState["result_goods_clothing"])
		- Number(applicationState["result_takeaction_clothing_reduction"]));
	var clothing_reduction = cleanUpNumber(applicationState["result_takeaction_clothing_reduction"]);
	var furniture =  cleanUpNumber(Number(applicationState["result_goods_furniture"])
		- Number(applicationState["result_takeaction_furniture_reduction"]));
	var furniture_reduction = cleanUpNumber(applicationState["result_takeaction_furniture_reduction"]);
	var goodsother =  cleanUpNumber(Number(applicationState["result_goods_other"])
		- Number(applicationState["result_takeaction_goodsother_reduction"]));
	var goodsother_reduction = cleanUpNumber(applicationState["result_takeaction_goodsother_reduction"]);
	var shopping_reduction = clothing_reduction + furniture_reduction + goodsother_reduction;
	
	var servicesall =  cleanUpNumber(Number(applicationState["result_services_all"])
		- Number(applicationState["result_takeaction_servicesall_reduction"]));
	var services_reduction = cleanUpNumber(applicationState["result_takeaction_servicesall_reduction"]);
	
	
	$('#takeactionChart').empty();
	
	
	takeactionPlot = $.jqplot('takeactionChart', [
	[carfuel,		electricity, 	meat, 		clothing, 		servicesall], 
	[carmfg, 		natgas, 		dairy, 		furniture, 		0], 
	[pubtrans, 		otherfuels, 	fruitsveg, 	goodsother,		0], 
	[airtravel,		watersewage, 	cereals,	0,				0], 
	[0,				construction,	foodother,	0,				0],
	[transport_reduction, housing_reduction, food_reduction, shopping_reduction, services_reduction]], {
        //title: 'Stacked Bar Chart with Cumulative Point Labels', 
        //seriesColors: ["#5b71a3", "#7494b5", "#91b1c2", "#7db76a", "#9ccea9"],
		//seriesColors: ["#e8c769", "#9ab4d8", "#90d8bd", "#d794d7", "#a2d172"], //steve's colors!
		seriesColors: takeactionColors,
		//seriesColors: mainChartSeriesColors,
		//e8c769
		
        stackSeries: true,
        captureRightClick: true,
        seriesDefaults: {
            renderer: $.jqplot.BarRenderer,
            rendererOptions: {
                barMargin: 10,
                varyBarColor: false
            },
            shadowDepth: 0,
            shadow: false
            //lineCap: 'butt',
            //fill: false,
            },
        axesDefaults: {
            tickRenderer: $.jqplot.CanvasAxisTickRenderer,
			showTickMarks: false,
			
            tickOptions: {
				showMark: false,
                // fontFamily: 'Georgia',
                fontSize: '10pt'
                //angle: -30,
                }
        },
        series: [{
            pointLabels: {
                show: true,
                labels: ['Car Fuel', 'Electricity', 'Meat', 'Clothing', 'Services'],
                location: 's',
                ypadding: 0

                }
        }, {
            pointLabels: {
                show: true,
                labels: ['Car MFG', 'Natural Gas', 'Dairy', 'Furniture', ''],
                location: 's',
                ypadding: 0
                }
        }, {
            pointLabels: {
                show: true,
                labels: ['Public Transit', 'Other Fuels', 'Produce', 'Other Goods', ''],
                location: 's',
                ypadding: 0
                }
        }, {
            pointLabels: {
                show: true,
                labels: ['Air Travel', 'Water', 'Cereals', '', ''],
                location: 's',
                ypadding: 0
                }
        }, {
            pointLabels: {
                show: true,
                labels: ['', 'Construction', 'Other Food', '', ''],
                location: 's',
                ypadding: 0
                }
        }, {
            pointLabels: {
                show: true,
                labels: ['Reduction', 'Reduction', 'Reduction', 'Reduction', 'Reduction'],
                location: 's',
                ypadding: 0
                }
        }],

        axes: {
            xaxis: {
                renderer: $.jqplot.CategoryAxisRenderer,
				showTickMarks: false,
				showTicks: true,
                ticks: ['Travel', 'Home', 'Food', 'Goods', 'Services'],
                },
            yaxis: {
                labelRenderer: $.jqplot.CanvasAxisLabelRenderer,
                label: 'Metric tons CO2/year', 
            }
        },
        grid: {
            drawGridlines: false,
            borderColor: 'white',
            shadow: false,
            background: 'white'
        }

    });
}



function updateChart() {
	var carfuel = cleanUpNumber(Number(applicationState["result_motor_vehicles_direct"]) + Number(applicationState["result_motor_vehicles_indirect"]));
	var carmfg = cleanUpNumber(Number(applicationState["result_vehicle_manufact"]));
	var pubtrans = cleanUpNumber(Number(applicationState["result_publictrans_direct"]) + Number(applicationState["result_publictrans_indirect"]));
	var airtravel = cleanUpNumber(Number(applicationState["result_air_travel_direct"]) + Number(applicationState["result_air_travel_indirect"]));
	
	var electricity = cleanUpNumber(Number(applicationState["result_electricity_direct"]) + Number(applicationState["result_electricity_indirect"]));
	var natgas = cleanUpNumber(Number(applicationState["result_natgas_direct"]) + Number(applicationState["result_natgas_indirect"]));
	var otherfuels = cleanUpNumber(Number(applicationState["result_heatingoil_direct"]) + Number(applicationState["result_heatingoil_indirect"]));
	var watersewage = cleanUpNumber(Number(applicationState["result_watersewage"]));
	var construction = cleanUpNumber(Number(applicationState["result_shelter"]));
	
	var meat = cleanUpNumber(Number(applicationState["result_food_meat"]));
	var dairy = cleanUpNumber(Number(applicationState["result_food_dairy"]));
	var fruitsveg = cleanUpNumber(Number(applicationState["result_food_fruitsveg"]));
	var cereals = cleanUpNumber(Number(applicationState["result_food_cereals"]));
	var foodother = cleanUpNumber(Number(applicationState["result_food_other"]));
	
	var clothing =  cleanUpNumber(Number(applicationState["result_goods_clothing"]));
	var furniture =  cleanUpNumber(Number(applicationState["result_goods_furniture"]));
	var goodsother =  cleanUpNumber(Number(applicationState["result_goods_other"]));
	
	var servicesall =  cleanUpNumber(Number(applicationState["result_services_all"]));
	
		
	if (typeof(myplot) == "undefined") {
		redrawMainChart();
	} else {
	
		mainchart_maximum_bar = Math.max(mainchart_maximum_bar, myplot.series[0].data[0][1] + myplot.series[1].data[0][1] + myplot.series[2].data[0][1] + myplot.series[3].data[0][1], 
		myplot.series[0].data[1][1] + myplot.series[1].data[1][1] + myplot.series[2].data[1][1] + myplot.series[3].data[1][1] + myplot.series[4].data[1][1], 
		myplot.series[0].data[2][1] + myplot.series[1].data[2][1] + myplot.series[2].data[2][1] + myplot.series[3].data[2][1] + myplot.series[4].data[2][1], 
		myplot.series[0].data[3][1] + myplot.series[1].data[3][1] + myplot.series[2].data[3][1], 
		myplot.series[0].data[4][1]);
		
		mainchart_new_maximum_bar = Math.max(carfuel + carmfg + pubtrans + airtravel, 
		electricity + natgas + otherfuels + watersewage + construction, 
		meat + dairy + fruitsveg + cereals + foodother, 
		clothing + furniture + goodsother, 
		servicesall);
		
		//transportation
		myplot.series[0].data[0][1] = carfuel;
		myplot.series[1].data[0][1] = carmfg;
		myplot.series[2].data[0][1] = pubtrans;
		myplot.series[3].data[0][1] = airtravel;
		
		//housing
		myplot.series[0].data[1][1] = electricity;
		myplot.series[1].data[1][1] = natgas;
		myplot.series[2].data[1][1] = otherfuels;
		myplot.series[3].data[1][1] = watersewage;
		myplot.series[4].data[1][1] = construction;
		
		//food
		myplot.series[0].data[2][1] = meat;
		myplot.series[1].data[2][1] = dairy;
		myplot.series[2].data[2][1] = fruitsveg;
		myplot.series[3].data[2][1] = cereals;
		myplot.series[4].data[2][1] = foodother;
		
		//goods
		myplot.series[0].data[3][1] = clothing;
		myplot.series[1].data[3][1] = furniture;
		myplot.series[2].data[3][1] = goodsother;
		
		//services
		myplot.series[0].data[4][1] = servicesall;
	
		$("#mainChart").empty();
		if (mainchart_new_maximum_bar > mainchart_maximum_bar) {
			myplot.replot({resetAxes: true});
			mainchart_maximum_bar = mainchart_new_maximum_bar;
		}			
		else {
			myplot.replot({resetAxes: false});
		}
	
	
	
	}
	//loadSmiley(tab, 0);
}


function redrawMainChart() {

    $("#mainChart").empty();
    //reinterpretedData,{//
	
	
	
	var carfuel = cleanUpNumber(Number(applicationState["result_motor_vehicles_direct"]) + Number(applicationState["result_motor_vehicles_indirect"]));
	var carmfg = cleanUpNumber(Number(applicationState["result_vehicle_manufact"]));
	var pubtrans = cleanUpNumber(Number(applicationState["result_publictrans_direct"]) + Number(applicationState["result_publictrans_indirect"]));
	var airtravel = cleanUpNumber(Number(applicationState["result_air_travel_direct"]) + Number(applicationState["result_air_travel_indirect"]));
	
	var electricity = cleanUpNumber(Number(applicationState["result_electricity_direct"]) + Number(applicationState["result_electricity_indirect"]));
	var natgas = cleanUpNumber(Number(applicationState["result_natgas_direct"]) + Number(applicationState["result_natgas_indirect"]));
	var otherfuels = cleanUpNumber(Number(applicationState["result_heatingoil_direct"]) + Number(applicationState["result_heatingoil_indirect"]));
	var watersewage = cleanUpNumber(Number(applicationState["result_watersewage"]));
	var construction = cleanUpNumber(Number(applicationState["result_shelter"]));
	
	var meat = cleanUpNumber(Number(applicationState["result_food_meat"]));
	var dairy = cleanUpNumber(Number(applicationState["result_food_dairy"]));
	var fruitsveg = cleanUpNumber(Number(applicationState["result_food_fruitsveg"]));
	var cereals = cleanUpNumber(Number(applicationState["result_food_cereals"]));
	var foodother = cleanUpNumber(Number(applicationState["result_food_other"]));
	
	var clothing =  cleanUpNumber(Number(applicationState["result_goods_clothing"]));
	var furniture =  cleanUpNumber(Number(applicationState["result_goods_furniture"]));
	var goodsother =  cleanUpNumber(Number(applicationState["result_goods_other"]));
	
	var servicesall =  cleanUpNumber(Number(applicationState["result_services_all"]));
	
    myplot = $.jqplot('mainChart', [
	[carfuel,		electricity, 	meat, 		clothing, 		servicesall], 
	[carmfg, 		natgas, 		dairy, 		furniture, 		0], 
	[pubtrans, 		otherfuels, 	fruitsveg, 	goodsother,		0], 
	[airtravel,		watersewage, 	cereals,	0,				0], 
	[0,				construction,	foodother,	0,				0]], {
        //title: 'Stacked Bar Chart with Cumulative Point Labels', 
        //seriesColors: ["#5b71a3", "#7494b5", "#91b1c2", "#7db76a", "#9ccea9"],
		//seriesColors: ["#e8c769", "#9ab4d8", "#90d8bd", "#d794d7", "#a2d172"], //steve's colors!
		seriesColors: mainChartColors,
		//seriesColors: mainChartSeriesColors,
		//e8c769
		
		
        stackSeries: true,
        captureRightClick: true,
        seriesDefaults: {
            renderer: $.jqplot.BarRenderer,
            rendererOptions: {
                barMargin: 10,
                varyBarColor: true
            },
            shadowDepth: 0,
            shadow: false
            //lineCap: 'butt',
            //fill: false,
            },
        axesDefaults: {
            tickRenderer: $.jqplot.CanvasAxisTickRenderer,
			showTickMarks: false,
			
            tickOptions: {
				showMark: false,
                // fontFamily: 'Georgia',
                fontSize: '10pt'
                //angle: -30,
                }
        },
        series: [{
            pointLabels: {
                show: true,
                labels: ['Car Fuel', 'Electricity', 'Meat', 'Clothing', 'Services'],
                location: 's',
                ypadding: 0

                }
        }, {
            pointLabels: {
                show: true,
                labels: ['Car MFG', 'Natural Gas', 'Dairy', 'Furniture', ''],
                location: 's',
                ypadding: 0
                }
        }, {
            pointLabels: {
                show: true,
                labels: ['Public Transit', 'Other Fuels', 'Produce', 'Other Goods', ''],
                location: 's',
                ypadding: 0
                }
        }, {
            pointLabels: {
                show: true,
                labels: ['Air Travel', 'Water', 'Cereals', '', ''],
                location: 's',
                ypadding: 0
                }
        }, {
            pointLabels: {
                show: true,
                labels: ['', 'Construction', 'Other Food', '', ''],
                location: 's',
                ypadding: 0
                }
        }],

        axes: {
            xaxis: {
                renderer: $.jqplot.CategoryAxisRenderer,
                ticks: ['Travel', 'Home', 'Food', 'Goods', 'Services']
                },
            yaxis: {
                labelRenderer: $.jqplot.CanvasAxisLabelRenderer,
                label: 'Metric tons CO2/year'
            }
        },
        grid: {
            drawGridlines: false,
            borderColor: 'white',
            shadow: false,
            background: 'white'
        }

    });
}
