<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>CoolClimate Network Carbon Calculator</title>
  <!--
<script type="text/javascript" language="javascript" src="http://code.jquery.com/jquery-latest.js"></script>
-->
  <script type="text/javascript" language="javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>


  <script type="text/javascript" language="javascript" src="./js/jquery-ui-1.8.14.custom.min.js"></script>
  <script type="text/javascript" language="javascript" src="./js/jquery.autocomplete.js"></script>



  <script type="text/javascript" language="javascript" src="./js/jqplot/jquery.jqplot.js"></script>
  <script type="text/javascript" language="javascript" src="./js/modified.jqplot.barRenderer.js"></script>

  <script type="text/javascript" language="javascript" src="./js/jqplot/plugins/jqplot.canvasTextRenderer.min.js"></script>
  <script type="text/javascript" language="javascript" src="./js/jqplot/plugins/jqplot.canvasAxisLabelRenderer.min.js"></script>
  <script type="text/javascript" language="javascript" src="./js/jqplot/plugins/jqplot.categoryAxisRenderer.js"></script>
  <script type="text/javascript" language="javascript" src="./js/jqplot/plugins/jqplot.pointLabels.js"></script>

  <script type="text/javascript" language="javascript" src="./js/jqplot/plugins/jqplot.canvasAxisTickRenderer.min.js"></script>

  <script type="text/javascript" language="javascript" src="./js/chart.js"></script>

  <!--


<script language="javascript" type="text/javascript" src="./js/flot/jquery.flot.js"></script>
<script language="javascript" type="text/javascript" src="./js/flot/jquery.flot.stack.js"></script>
-->

  <script type="text/javascript" language="javascript" src="./js/jquery.betterTooltip.js"></script>
  <script type="text/javascript" language="javascript" src="./js/jquery.nestedAccordion.js"></script>
  <script type="text/javascript" language="javascript" src="./js/jquery.sort.js"></script>

  <script type="text/javascript" language="javascript">
    var pledgeList = ['more_efficient_vehicle', 'alternativefuel_vehicle', 'electric_vehicle', 'hybrid_vehicle',
      'telecommute_to_work', 'ride_my_bike', 'take_public_transportation', 'practice_eco_driving',
      'maintain_my_vehicles', 'carpool_to_work', 'reduce_air_travel', 'offset_transportation', 'switch_to_cfl',
      'turn_off_lights', 'T12toT8', 'tankless_water_heater', 'thermostat_winter', 'thermostat_summer',
      'purchase_high_efficiency_cooling', 'purchase_high_efficiency_heating', 'energy_star_fridge',
      'energy_star_printers', 'energy_star_copiers', 'energy_star_desktops', 'rechargeable_batteries',
      'power_mgmt_comp', 'purchase_green_electricity', 'install_PV_panels', 'install_solar_heating',
      'low_flow_showerheads', 'low_flow_faucets', 'low_flow_toilet', 'line_dry_clothing',
      'water_efficient_landscaping', 'plant_trees', 'reduce_comm_waste', 'print_double_sided', 'offset_housing',
      'low_carbon_diet', 'go_organic', 'offset_shopping',
    ];
  </script>

  <script type="text/javascript" language="javascript" src="./js/postmessage.js"></script>
  <script type="text/javascript" language="javascript" src="./js/loadevents.js"></script>


  <!--<script type="text/javascript" language="javascript" src="./js/data.js"></script>
<script type="text/javascript" language="javascript" src="./js/session.js"></script>
<script type="text/javascript" language="javascript" src="./js/main.js"></script>



-->

  <link rel="stylesheet" href="./css/main.css" />
  <link href="css/jqui/jquery-ui-1.8.14.custom.css" rel="stylesheet" />
  <link rel="stylesheet" href="./css/calc.css.php">
  <link rel="stylesheet" href="./js/jqplot/jquery.jqplot.min.css" />
  <link rel="stylesheet" href="css/ralway/stylesheet.css" />
  <link rel="stylesheet" href="css/accordion.css" />
  <link rel="stylesheet" href="css/augmented.css"
</head>

<body>






  <!--

<div class="banner" id="banner_0"><a href="javascript:loadPage('intro');"
 class="bannerButton blueButton" style="width: 125px; cursor: pointer;
 left:0px; top: 0; position: absolute; margin: 0; padding: 0">
  <div class="bannerButtonContent">
	<div class="bannerButtonText">Intro</div>
  </div>
  </a></div>
<div class="banner" id="banner_1"><a href="javascript:loadPage('transportation');"
 class="bannerButton blueButton" style="width: 125px; cursor: pointer;
 left:125px; top: 0; position: absolute; margin: 0; padding: 0">
  <div class="bannerButtonContent">
	<div class="bannerButtonText">Travel</div>
  </div>
  </a></div>
<div class="banner" id="banner_2"><a href="javascript:loadPage('housing');"
 class="bannerButton blueButton" style="width: 125px; cursor: pointer;
 left:250px; top: 0; position: absolute; margin: 0; padding: 0">
  <div class="bannerButtonContent">
	<div class="bannerButtonText">Housing</div>
  </div>
  </a></div>
<div class="banner" id="banner_3"><a href="javascript:loadPage('food');"
 class="bannerButton blueButton" style="width: 125px; cursor: pointer;
 left:375px; top: 0; position: absolute; margin: 0; padding: 0">
  <div class="bannerButtonContent">
	<div class="bannerButtonText">Food</div>
  </div>
  </a></div>
<div class="banner" id="banner_4"><a href="javascript:loadPage('shopping');"
 class="bannerButton blueButton" style="width: 125px; cursor: pointer;
 left:500px; top: 0; position: absolute; margin: 0; padding: 0">
  <div class="bannerButtonContent">
	<div class="bannerButtonText">Shopping</div>
  </div>
  </a></div>
<div class="banner" id="banner_5"><a href="javascript:loadPage('takeaction');"
 class="bannerButton blueButton" style="width: 125px; cursor: pointer;
 left:625px; top: 0; position: absolute; margin: 0; padding: 0">
  <div class="bannerButtonContent">
	<div class="bannerButtonText">Take Action</div>
  </div>
  </a></div>

  -->

  <!--<div style="position: absolute; top:40px; left: 0; width:749px; ">-->
  <div style="margin-top: 80px; width: 100%">
    <div style="position: relative; display: flex; justify-content: center; width: 100%">



      <div style="margin 0 auto; width: 680px;">

        <div style="position: relative; margin: 0 auto">

          <div id="tabs_container" style="font-family: Verdana, Geneva, sans-serif; margin: 0 auto;">
            <div id="transition" style="position:relative;"></div>

            <!-------------------- INSERTS --------------------------->
            <div id="tab_insert1" style="font-size: 13px; display: block; position: relative; top: 0; margin: 0 auto; width: 100%;">
              <div class="tab_title tab_title_intro thinfont">The Environment Supports People</div>
              <hr>
              <div class="augmented_message">
                Now more than ever it is important that we protect our natural habitats from desecration and pollution.
                Keeping our forests, drinking water, and skies pure is of vital importance.
              </div>
              <hr>
              <div class="tab_title tab_title_intro thinfont warning">Please read before continuing</div>
              <button id="next_button" style="position: absolute; right: 30px; font-size: 12px;" onClick="loadPage('intro')">Get Started</button>
            </div>

            <div id="tab_insert2" style="font-size: 13px; display: none; position: relative; top: 0; margin: 0 auto; width: 100%;">
              <div class="tab_title tab_title_intro thinfont">Travel</div>
                <div class="augmented_message">
                  <img src="images/purity/image6.jpg" class="under_text">
                  <div class="over_image">
                  Preserving purity is important. The air pollution that vehicles produce makes the once crisp, pure blue sky a
                  foul gray color. Our environment is sacred, and pollution in our environment inevitably contaminates us and our bodies.
                  </div>
                </div>
                <div class="tab_title tab_title_intro thinfont warning">Please read before continuing</div>
                <button id="next_button" style="position: absolute; right: 30px; font-size: 12px;" onClick="loadPage('transportation')">Next</button>
                <button id="prev_button" style="position: absolute; left: 30px; font-size: 12px;" onClick="loadPage('intro')">Previous</button>
            </div>

            <div id="tab_insert3" style="font-size: 13px; display: none; position: relative; top: 0; margin: 0 auto; width: 100%;">
              <div class="tab_title tab_title_intro thinfont">Home</div>
                <hr>
                <div class="augmented_message">
                Chemical particles from vehicles, energy generation, and manufacturing end up everywhere – in our food, 
                on our skin, and inside our lungs. When we live near toxic sites or inhale dirty, smog-filled air, they actually
                enter our bodies and become a part of us.
                </div>
                <hr>
                <div class="tab_title tab_title_intro thinfont warning">Please read before continuing</div>
                <button id="next_button" style="position: absolute; right: 30px; font-size: 12px;" onClick="loadPage('housing')">Next</button>
                <button id="prev_button" style="position: absolute; left: 30px; font-size: 12px;" onClick="loadPage('transportation')">Previous</button>
            </div>

            <div id="tab_insert4" style="font-size: 13px; display: none; position: relative; top: 0; margin: 0 auto; width: 100%;">
              <div class="tab_title tab_title_intro thinfont">Food</div>
                <hr>
                <div class="augmented_message">
                <img src="images/purity/image2.jpg">
                <div class="over_image">
                Chemical particles from vehicles, energy generation, and manufacturing end up everywhere – in our food, 
                on our skin, and inside our lungs. When we live near toxic sites or inhale dirty, smog-filled air, they actually
                enter our bodies and become a part of us.
                </div>
                </div>
                <hr>
                <div class="tab_title tab_title_intro thinfont warning">Please read before continuing</div>
                <button id="next_button" style="position: absolute; right: 30px; font-size: 12px;" onClick="loadPage('food')">Next</button>
                <button id="prev_button" style="position: absolute; left: 30px; font-size: 12px;" onClick="loadPage('housing')">Previous</button>
            </div>

            <div id="tab_insert5" style="font-size: 13px; display: none; position: relative; top: 0; margin: 0 auto; width: 100%;">
              <div class="tab_title tab_title_intro thinfont">Shopping</div>
                <div class="augmented_message">
                  <img src="images/purity/image1.png" class="under_text">
                  <div class="over_image">
                  When we use endless amounts of goods it leads to mountains of disgusting, reeking trash across our
                  natural landscapes. Billions of tons of garbage have to be put into landfills – many of which possess toxic
                  chemicals that seep into our water supply, making even filtered water contaminated.
                  </div>
                </div>
                <div class="tab_title tab_title_intro thinfont warning">Please read before continuing</div>
                <button id="next_button" style="position: absolute; right: 30px; font-size: 12px;" onClick="loadPage('shopping')">Next</button>
                <button id="prev_button" style="position: absolute; left: 30px; font-size: 12px;" onClick="loadPage('food')">Previous</button>
            </div>

            <div id="tab_insert6" style="font-size: 13px; display: none; position: relative; top: 0; margin: 0 auto; width: 100%;">
              <div class="tab_title tab_title_intro thinfont">Take Action</div>
                <div class="augmented_message">
                  <img src="images/purity/image5.jpg" class="under_text">
                  <div class="over_image">
                  The good news is that we can defend and decontaminate the environments we live in, making
                  them pure again. Simply reducing landfill-bound waste, choosing energy efficient appliances, and driving less
                  can make a big difference. It should be everyone’s goal to cleanse the environment, so our children and our
                  children’s children can experience the uncontaminated purity and beauty of nature.
                  </div>
                </div>
                <div class="tab_title tab_title_intro thinfont warning">Please read before continuing</div>
                <button id="next_button" style="position: absolute; right: 30px; font-size: 12px;" onClick="loadPage('takeaction')">Next</button>
                <button id="prev_button" style="position: absolute; left: 30px; font-size: 12px;" onClick="loadPage('shopping')">Previous</button>
            </div>

            <!-------------------- END INSERTS ----------------------->

            <div id="tab_intro" style="font-size: 13px; display: none; position: relative; top: 0; margin: 0 auto; width: 100%;">

              <div class="tab_title tab_title_intro thinfont">Start with a quick carbon footprint estimate
                <button id="prev_button" style="position: absolute; left: 30px; font-size: 12px;" onClick="loadPage('insert1', false)">Previous</button>
                <button id="next_button" style="position: absolute; right: 30px; font-size: 12px;" onClick="loadPage('insert2', false)">Next</button>
              </div>

              <div style="margin-left: 78px; ">

                <div style="position:relative; height:110px; width: 600px; margin-top: 10px; width: 100%;">
                  <div id="query-border"></div>
                  <div class="radiogrp " style="font-size:11px ; padding-left: 20px;">
                    <input type="radio" checked="checked" name="intro_radio_location_mode" id="intro_radio_location_mode1"
                      value="1" />
                    <label for="intro_radio_location_mode1" class="radio_location_mode">Zipcode</label>
                    <input type="radio" name="intro_radio_location_mode" id="intro_radio_location_mode2" value="2" />
                    <label for="intro_radio_location_mode2" class="radio_location_mode">City</label>
                    <input type="radio" name="intro_radio_location_mode" id="intro_radio_location_mode3" value="3" />
                    <label for="intro_radio_location_mode3" class="radio_location_mode">County</label>
                    <input type="radio" name="intro_radio_location_mode" id="intro_radio_location_mode4" value="4" />
                    <label for="intro_radio_location_mode4" class="radio_location_mode">State</label>
                  </div>
                  <input type="text" name="q" id="query" />
                  <div id="intro_location_radiogrp">
                    <input type="hidden" id="intro_hf_ac_mode" value="1" />
                    <input type="hidden" id="intro_hf_location" value="" />

                  </div>

                  <div id="intro_begin_typing">Type your location</div>


                </div>


                <div style="position: relative; height: 110px;">
                  <div style="position: absolute; left: 0; width: 120px; height: 110px; padding-top: 10px; text-align: center;">
                    <img src="images/family_green.png" border="0"> </div>
                  <div style="position: absolute; left: 120px; width:310px; height: 110px; padding-top: 10px; padding-left: 20px; font-size: 12px;">
                    How Many people live in your household?
                    <select name="intro_select_size" id="intro_select_size">
                      <option value="0" selected="">Average</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                      <option value="4">Four</option>
                      <option value="5">Five or More</option>
                    </select>
                  </div>
                </div>
                <div style="position: relative; height: 110px;">
                  <div style="position: absolute; left: 0; width: 120px; height: 110px; padding-top: 10px; text-align: center;">
                    <img src="images/dollar_green.png" border="0"> </div>
                  <div style="position: absolute; left: 120px; width:310px; height: 110px; padding-top: 20px; padding-left: 20px; font-size: 12px;">
                    What is your gross annual household income? <br />
                    <select id="intro_select_income">
                      <option value="1" selected="">Average</option>
                      <option value="2">Less than $10,000</option>
                      <option value="3">$10,000 to $19,999</option>
                      <option value="4">$20,000 to $29,999</option>
                      <option value="5">$30,000 to $39,999</option>
                      <option value="6">$40,000 to $49,999</option>
                      <option value="7">$50,000 to $59,999</option>
                      <option value="8">$60,000 to $79,999</option>
                      <option value="9">$80,000 to $99,999</option>
                      <option value="10">$100,000 to $119,999</option>
                      <option value="11">$120,000 or more</option>
                    </select>

                    <img class="tTip tTipHandle" src="images/carb_question_mark.png" border="0" title="Entering your location and household size helps populate the entire calculator with smart defaults, making it easier for you to complete the calculator. Also, it lets you see how you compare to people like you. We do not collect or share your information for any purpose." />
                  </div>
                </div>

              </div>
            </div>

            <div id="tab_transportation" style="font-size: 13px; display: none; position: relative; top: 0; left: 0 ;width: 100%;">

              <div class="tab_title tab_title_transportation thinfont">How do you get around?
                <button id="next_button" style="position: absolute; right: 30px; font-size: 12px;" onClick="loadPage('insert3', false)">Next</button>
                <button id="prev_button" style="position: absolute; left: 30px; font-size: 12px;" onClick="loadPage('insert2', false)">Previous</button>

              </div>


              <input id="input_footprint_transportation_groundtype" type="hidden" value="0" />
              <input id="input_footprint_transportation_airtype" type="hidden" value="0" />
              <input id="input_footprint_transportation_num_vehicles" type="hidden" value="1" />

              <table align="center" border="0" cellpadding="0" cellspacing="0" style="width:650px; margin-top: 10px;">
                <tr>
                  <td id="vehicle_row_1" valign="middle" align="center">
                    <div align="center" style="padding-top: 4px;">
                      <div align="center" style="background-color:#BDC8DF; border: 1px solid #BDC8DF;background-image:url('./images/vehicle_bg.PNG'); background-repeat: repeat-x; padding: 4px; text-align: center;">
                        <table border="0" cellpadding="0" cellspacing="0">
                          <tr>
                            <td>
                              <table border="0" cellpadding="0" cellspacing="0" class="transportation_table">
                                <tr>

                                  <td width="110">
                                    <span class="trans_head_test">
                                      Vehicle 1 </span>
                                  </td>

                                  <td width="190">
                                    Miles per year:
                                    <input id="input_footprint_transportation_miles1" type="text" class="transportation_inputs"
                                      size="8" maxlength="5">
                                  </td>
                                  <td width="300">
                                    Miles per gallon:
                                    <input id="input_footprint_transportation_mpg1" type="text" class="transportation_inputs"
                                      size="3" maxlength="3">
                                    <!-- 
                            <a class="selectVehicle" 
                            href="javascript:vehicleSelector();">
                            (select vehicle)
                            </a>
                            -->
                                  </td>
                                  <td width="90" align="left">
                                    <select id="input_footprint_transportation_fuel1">
                                      <option value="1" selected="">Gasoline</option>
                                      <option value="2">Diesel</option>
                                    </select>
                                  </td>
                                </tr>
                              </table>
                            </td>
                          </tr>
                          <tr>
                            <td id="transportation_vehicle_select_1">
                              <div style="display: none;">
                                <table border="0" cellpadding="1" cellspacing="0">
                                  <tr>
                                    <td>
                                      <select id="transportation_year1" class="vehicle_select_" style="width: 70px;">
                                        <option value="0"> -Select- </option>
                                      </select>
                                    </td>
                                    <td>
                                      <select id="transportation_make1" class="vehicle_select_" style="width: 180px;">
                                      </select>
                                    </td>
                                    <td>
                                      <select id="transportation_model1" class="vehicle_select_" style="width: 180px;">
                                      </select>
                                    </td>
                                    <td>
                                      <select id="transportation_trans1" class="vehicle_select_" style="width: 180px;">
                                      </select>
                                    </td>
                                  </tr>
                                </table>
                              </div>
                            </td>
                          </tr>
                        </table>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td id="vehicle_row_2" valign="middle" align="center">
                    <div align="center" style="padding-top: 4px;">
                      <div align="center" style="background-color:#BDC8DF; border: 1px solid #BDC8DF;background-image:url('./images/vehicle_bg.PNG'); background-repeat: repeat-x; padding: 4px; text-align: center;">
                        <table border="0" cellpadding="0" cellspacing="0">
                          <tr>
                            <td>
                              <table border="0" cellpadding="0" cellspacing="0" class="transportation_table">
                                <tr>

                                  <td width="110">
                                    <span class="trans_head_test">
                                      Vehicle 2 </span>
                                  </td>

                                  <td width="190">
                                    Miles per year:
                                    <input id="input_footprint_transportation_miles2" type="text" class="transportation_inputs"
                                      size="8" maxlength="5">
                                  </td>
                                  <td width="300">
                                    Miles per gallon:
                                    <input id="input_footprint_transportation_mpg2" type="text" class="transportation_inputs"
                                      size="3" maxlength="3">
                                    <!-- 
                            <a class="selectVehicle" 
                            href="javascript:vehicleSelector();">
                            (select vehicle)
                            </a>
                            -->
                                  </td>
                                  <td width="90" align="left">
                                    <select id="input_footprint_transportation_fuel2">
                                      <option value="1" selected="">Gasoline</option>
                                      <option value="2">Diesel</option>
                                    </select>
                                  </td>
                                </tr>
                              </table>
                            </td>
                          </tr>
                          <tr>
                            <td id="transportation_vehicle_select_2">
                              <div style="display: none;">
                                <table border="0" cellpadding="1" cellspacing="0">
                                  <tr>
                                    <td>
                                      <select id="transportation_year2" class="vehicle_select_" style="width: 70px;">
                                        <option value="0"> -Select- </option>
                                      </select>
                                    </td>
                                    <td>
                                      <select id="transportation_make2" class="vehicle_select_" style="width: 180px;">
                                      </select>
                                    </td>
                                    <td>
                                      <select id="transportation_model2" class="vehicle_select_" style="width: 180px;">
                                      </select>
                                    </td>
                                    <td>
                                      <select id="transportation_trans2" class="vehicle_select_" style="width: 180px;">
                                      </select>
                                    </td>
                                  </tr>
                                </table>
                              </div>
                            </td>
                          </tr>
                        </table>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td id="vehicle_row_3" valign="middle" align="center">
                    <div align="center" style="padding-top: 4px;">
                      <div align="center" style="background-color:#BDC8DF; border: 1px solid #BDC8DF;background-image:url('./images/vehicle_bg.PNG'); background-repeat: repeat-x; padding: 4px; text-align: center;">
                        <table border="0" cellpadding="0" cellspacing="0">
                          <tr>
                            <td>
                              <table border="0" cellpadding="0" cellspacing="0" class="transportation_table">
                                <tr>

                                  <td width="110">
                                    <span class="trans_head_test">
                                      Vehicle 3 </span>
                                  </td>

                                  <td width="190">
                                    Miles per year:
                                    <input id="input_footprint_transportation_miles3" type="text" class="transportation_inputs"
                                      size="8" maxlength="5">
                                  </td>
                                  <td width="300">
                                    Miles per gallon:
                                    <input id="input_footprint_transportation_mpg3" type="text" class="transportation_inputs"
                                      size="3" maxlength="3">
                                    <!-- 
                            <a class="selectVehicle" 
                            href="javascript:vehicleSelector();">
                            (select vehicle)
                            </a>
                            -->
                                  </td>
                                  <td width="90" align="left">
                                    <select id="input_footprint_transportation_fuel3">
                                      <option value="1" selected="">Gasoline</option>
                                      <option value="2">Diesel</option>
                                    </select>
                                  </td>
                                </tr>
                              </table>
                            </td>
                          </tr>
                          <tr>
                            <td id="transportation_vehicle_select_3">
                              <div style="display: none;">
                                <table border="0" cellpadding="1" cellspacing="0">
                                  <tr>
                                    <td>
                                      <select id="transportation_year3" class="vehicle_select_" style="width: 70px;">
                                        <option value="0"> -Select- </option>
                                      </select>
                                    </td>
                                    <td>
                                      <select id="transportation_make3" class="vehicle_select_" style="width: 180px;">
                                      </select>
                                    </td>
                                    <td>
                                      <select id="transportation_model3" class="vehicle_select_" style="width: 180px;">
                                      </select>
                                    </td>
                                    <td>
                                      <select id="transportation_trans3" class="vehicle_select_" style="width: 180px;">
                                      </select>
                                    </td>
                                  </tr>
                                </table>
                              </div>
                            </td>
                          </tr>
                        </table>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td id="vehicle_row_4" valign="middle" align="center">
                    <div align="center" style="padding-top: 4px;">
                      <div align="center" style="background-color:#BDC8DF; border: 1px solid #BDC8DF;background-image:url('./images/vehicle_bg.PNG'); background-repeat: repeat-x; padding: 4px; text-align: center;">
                        <table border="0" cellpadding="0" cellspacing="0">
                          <tr>
                            <td>
                              <table border="0" cellpadding="0" cellspacing="0" class="transportation_table">
                                <tr>

                                  <td width="110">
                                    <span class="trans_head_test">
                                      Vehicle 4 </span>
                                  </td>

                                  <td width="190">
                                    Miles per year:
                                    <input id="input_footprint_transportation_miles4" type="text" class="transportation_inputs"
                                      size="8" maxlength="5">
                                  </td>
                                  <td width="300">
                                    Miles per gallon:
                                    <input id="input_footprint_transportation_mpg4" type="text" class="transportation_inputs"
                                      size="3" maxlength="3">
                                    <!-- 
                            <a class="selectVehicle" 
                            href="javascript:vehicleSelector();">
                            (select vehicle)
                            </a>
                            -->
                                  </td>
                                  <td width="90" align="left">
                                    <select id="input_footprint_transportation_fuel4">
                                      <option value="1" selected="">Gasoline</option>
                                      <option value="2">Diesel</option>
                                    </select>
                                  </td>
                                </tr>
                              </table>
                            </td>
                          </tr>
                          <tr>
                            <td id="transportation_vehicle_select_4">
                              <div style="display: none;">
                                <table border="0" cellpadding="1" cellspacing="0">
                                  <tr>
                                    <td>
                                      <select id="transportation_year4" class="vehicle_select_" style="width: 70px;">
                                        <option value="0"> -Select- </option>
                                      </select>
                                    </td>
                                    <td>
                                      <select id="transportation_make4" class="vehicle_select_" style="width: 180px;">
                                      </select>
                                    </td>
                                    <td>
                                      <select id="transportation_model4" class="vehicle_select_" style="width: 180px;">
                                      </select>
                                    </td>
                                    <td>
                                      <select id="transportation_trans4" class="vehicle_select_" style="width: 180px;">
                                      </select>
                                    </td>
                                  </tr>
                                </table>
                              </div>
                            </td>
                          </tr>
                        </table>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td id="vehicle_row_5" valign="middle" align="center">
                    <div align="center" style="padding-top: 4px;">
                      <div align="center" style="background-color:#BDC8DF; border: 1px solid #BDC8DF;background-image:url('./images/vehicle_bg.PNG'); background-repeat: repeat-x; padding: 4px; text-align: center;">
                        <table border="0" cellpadding="0" cellspacing="0">
                          <tr>
                            <td>
                              <table border="0" cellpadding="0" cellspacing="0" class="transportation_table">
                                <tr>

                                  <td width="110">
                                    <span class="trans_head_test">
                                      Vehicle 5 </span>
                                  </td>

                                  <td width="190">
                                    Miles per year:
                                    <input id="input_footprint_transportation_miles5" type="text" class="transportation_inputs"
                                      size="8" maxlength="5">
                                  </td>
                                  <td width="300">
                                    Miles per gallon:
                                    <input id="input_footprint_transportation_mpg5" type="text" class="transportation_inputs"
                                      size="3" maxlength="3">
                                    <!-- 
                            <a class="selectVehicle" 
                            href="javascript:vehicleSelector();">
                            (select vehicle)
                            </a>
                            -->
                                  </td>
                                  <td width="90" align="left">
                                    <select id="input_footprint_transportation_fuel5">
                                      <option value="1" selected="">Gasoline</option>
                                      <option value="2">Diesel</option>
                                    </select>
                                  </td>
                                </tr>
                              </table>
                            </td>
                          </tr>
                          <tr>
                            <td id="transportation_vehicle_select_5">
                              <div style="display: none;">
                                <table border="0" cellpadding="1" cellspacing="0">
                                  <tr>
                                    <td>
                                      <select id="transportation_year5" class="vehicle_select_" style="width: 70px;">
                                        <option value="0"> -Select- </option>
                                      </select>
                                    </td>
                                    <td>
                                      <select id="transportation_make5" class="vehicle_select_" style="width: 180px;">
                                      </select>
                                    </td>
                                    <td>
                                      <select id="transportation_model5" class="vehicle_select_" style="width: 180px;">
                                      </select>
                                    </td>
                                    <td>
                                      <select id="transportation_trans5" class="vehicle_select_" style="width: 180px;">
                                      </select>
                                    </td>
                                  </tr>
                                </table>
                              </div>
                            </td>
                          </tr>
                        </table>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td id="vehicle_row_6" valign="middle" align="center">
                    <div align="center" style="padding-top: 4px;">
                      <div align="center" style="background-color:#BDC8DF; border: 1px solid #BDC8DF;background-image:url('./images/vehicle_bg.PNG'); background-repeat: repeat-x; padding: 4px; text-align: center;">
                        <table border="0" cellpadding="0" cellspacing="0">
                          <tr>
                            <td>
                              <table border="0" cellpadding="0" cellspacing="0" class="transportation_table">
                                <tr>

                                  <td width="110">
                                    <span class="trans_head_test">
                                      Vehicle 6 </span>
                                  </td>

                                  <td width="190">
                                    Miles per year:
                                    <input id="input_footprint_transportation_miles6" type="text" class="transportation_inputs"
                                      size="8" maxlength="5">
                                  </td>
                                  <td width="300">
                                    Miles per gallon:
                                    <input id="input_footprint_transportation_mpg6" type="text" class="transportation_inputs"
                                      size="3" maxlength="3">
                                    <!-- 
                            <a class="selectVehicle" 
                            href="javascript:vehicleSelector();">
                            (select vehicle)
                            </a>
                            -->
                                  </td>
                                  <td width="90" align="left">
                                    <select id="input_footprint_transportation_fuel6">
                                      <option value="1" selected="">Gasoline</option>
                                      <option value="2">Diesel</option>
                                    </select>
                                  </td>
                                </tr>
                              </table>
                            </td>
                          </tr>
                          <tr>
                            <td id="transportation_vehicle_select_6">
                              <div style="display: none;">
                                <table border="0" cellpadding="1" cellspacing="0">
                                  <tr>
                                    <td>
                                      <select id="transportation_year6" class="vehicle_select_" style="width: 70px;">
                                        <option value="0"> -Select- </option>
                                      </select>
                                    </td>
                                    <td>
                                      <select id="transportation_make6" class="vehicle_select_" style="width: 180px;">
                                      </select>
                                    </td>
                                    <td>
                                      <select id="transportation_model6" class="vehicle_select_" style="width: 180px;">
                                      </select>
                                    </td>
                                    <td>
                                      <select id="transportation_trans6" class="vehicle_select_" style="width: 180px;">
                                      </select>
                                    </td>
                                  </tr>
                                </table>
                              </div>
                            </td>
                          </tr>
                        </table>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td id="vehicle_row_7" valign="middle" align="center">
                    <div align="center" style="padding-top: 4px;">
                      <div align="center" style="background-color:#BDC8DF; border: 1px solid #BDC8DF;background-image:url('./images/vehicle_bg.PNG'); background-repeat: repeat-x; padding: 4px; text-align: center;">
                        <table border="0" cellpadding="0" cellspacing="0">
                          <tr>
                            <td>
                              <table border="0" cellpadding="0" cellspacing="0" class="transportation_table">
                                <tr>

                                  <td width="110">
                                    <span class="trans_head_test">
                                      Vehicle 7 </span>
                                  </td>

                                  <td width="190">
                                    Miles per year:
                                    <input id="input_footprint_transportation_miles7" type="text" class="transportation_inputs"
                                      size="8" maxlength="5">
                                  </td>
                                  <td width="300">
                                    Miles per gallon:
                                    <input id="input_footprint_transportation_mpg7" type="text" class="transportation_inputs"
                                      size="3" maxlength="3">
                                    <!-- 
                            <a class="selectVehicle" 
                            href="javascript:vehicleSelector();">
                            (select vehicle)
                            </a>
                            -->
                                  </td>
                                  <td width="90" align="left">
                                    <select id="input_footprint_transportation_fuel7">
                                      <option value="1" selected="">Gasoline</option>
                                      <option value="2">Diesel</option>
                                    </select>
                                  </td>
                                </tr>
                              </table>
                            </td>
                          </tr>
                          <tr>
                            <td id="transportation_vehicle_select_7">
                              <div style="display: none;">
                                <table border="0" cellpadding="1" cellspacing="0">
                                  <tr>
                                    <td>
                                      <select id="transportation_year7" class="vehicle_select_" style="width: 70px;">
                                        <option value="0"> -Select- </option>
                                      </select>
                                    </td>
                                    <td>
                                      <select id="transportation_make7" class="vehicle_select_" style="width: 180px;">
                                      </select>
                                    </td>
                                    <td>
                                      <select id="transportation_model7" class="vehicle_select_" style="width: 180px;">
                                      </select>
                                    </td>
                                    <td>
                                      <select id="transportation_trans7" class="vehicle_select_" style="width: 180px;">
                                      </select>
                                    </td>
                                  </tr>
                                </table>
                              </div>
                            </td>
                          </tr>
                        </table>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td id="vehicle_row_8" valign="middle" align="center">
                    <div align="center" style="padding-top: 4px;">
                      <div align="center" style="background-color:#BDC8DF; border: 1px solid #BDC8DF;background-image:url('./images/vehicle_bg.PNG'); background-repeat: repeat-x; padding: 4px; text-align: center;">
                        <table border="0" cellpadding="0" cellspacing="0">
                          <tr>
                            <td>
                              <table border="0" cellpadding="0" cellspacing="0" class="transportation_table">
                                <tr>

                                  <td width="110">
                                    <span class="trans_head_test">
                                      Vehicle 8 </span>
                                  </td>

                                  <td width="190">
                                    Miles per year:
                                    <input id="input_footprint_transportation_miles8" type="text" class="transportation_inputs"
                                      size="8" maxlength="5">
                                  </td>
                                  <td width="300">
                                    Miles per gallon:
                                    <input id="input_footprint_transportation_mpg8" type="text" class="transportation_inputs"
                                      size="3" maxlength="3">
                                    <!-- 
                            <a class="selectVehicle" 
                            href="javascript:vehicleSelector();">
                            (select vehicle)
                            </a>
                            -->
                                  </td>
                                  <td width="90" align="left">
                                    <select id="input_footprint_transportation_fuel8">
                                      <option value="1" selected="">Gasoline</option>
                                      <option value="2">Diesel</option>
                                    </select>
                                  </td>
                                </tr>
                              </table>
                            </td>
                          </tr>
                          <tr>
                            <td id="transportation_vehicle_select_8">
                              <div style="display: none;">
                                <table border="0" cellpadding="1" cellspacing="0">
                                  <tr>
                                    <td>
                                      <select id="transportation_year8" class="vehicle_select_" style="width: 70px;">
                                        <option value="0"> -Select- </option>
                                      </select>
                                    </td>
                                    <td>
                                      <select id="transportation_make8" class="vehicle_select_" style="width: 180px;">
                                      </select>
                                    </td>
                                    <td>
                                      <select id="transportation_model8" class="vehicle_select_" style="width: 180px;">
                                      </select>
                                    </td>
                                    <td>
                                      <select id="transportation_trans8" class="vehicle_select_" style="width: 180px;">
                                      </select>
                                    </td>
                                  </tr>
                                </table>
                              </div>
                            </td>
                          </tr>
                        </table>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td id="vehicle_row_9" valign="middle" align="center">
                    <div align="center" style="padding-top: 4px;">
                      <div align="center" style="background-color:#BDC8DF; border: 1px solid #BDC8DF;background-image:url('./images/vehicle_bg.PNG'); background-repeat: repeat-x; padding: 4px; text-align: center;">
                        <table border="0" cellpadding="0" cellspacing="0">
                          <tr>
                            <td>
                              <table border="0" cellpadding="0" cellspacing="0" class="transportation_table">
                                <tr>

                                  <td width="110">
                                    <span class="trans_head_test">
                                      Vehicle 9 </span>
                                  </td>

                                  <td width="190">
                                    Miles per year:
                                    <input id="input_footprint_transportation_miles9" type="text" class="transportation_inputs"
                                      size="8" maxlength="5">
                                  </td>
                                  <td width="300">
                                    Miles per gallon:
                                    <input id="input_footprint_transportation_mpg9" type="text" class="transportation_inputs"
                                      size="3" maxlength="3">
                                    <!-- 
                            <a class="selectVehicle" 
                            href="javascript:vehicleSelector();">
                            (select vehicle)
                            </a>
                            -->
                                  </td>
                                  <td width="90" align="left">
                                    <select id="input_footprint_transportation_fuel9">
                                      <option value="1" selected="">Gasoline</option>
                                      <option value="2">Diesel</option>
                                    </select>
                                  </td>
                                </tr>
                              </table>
                            </td>
                          </tr>
                          <tr>
                            <td id="transportation_vehicle_select_9">
                              <div style="display: none;">
                                <table border="0" cellpadding="1" cellspacing="0">
                                  <tr>
                                    <td>
                                      <select id="transportation_year9" class="vehicle_select_" style="width: 70px;">
                                        <option value="0"> -Select- </option>
                                      </select>
                                    </td>
                                    <td>
                                      <select id="transportation_make9" class="vehicle_select_" style="width: 180px;">
                                      </select>
                                    </td>
                                    <td>
                                      <select id="transportation_model9" class="vehicle_select_" style="width: 180px;">
                                      </select>
                                    </td>
                                    <td>
                                      <select id="transportation_trans9" class="vehicle_select_" style="width: 180px;">
                                      </select>
                                    </td>
                                  </tr>
                                </table>
                              </div>
                            </td>
                          </tr>
                        </table>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td id="vehicle_row_10" valign="middle" align="center">
                    <div align="center" style="padding-top: 4px;">
                      <div align="center" style="background-color:#BDC8DF; border: 1px solid #BDC8DF;background-image:url('./images/vehicle_bg.PNG'); background-repeat: repeat-x; padding: 4px; text-align: center;">
                        <table border="0" cellpadding="0" cellspacing="0">
                          <tr>
                            <td>
                              <table border="0" cellpadding="0" cellspacing="0" class="transportation_table">
                                <tr>

                                  <td width="110">
                                    <span class="trans_head_test">
                                      Vehicle 10 </span>
                                  </td>

                                  <td width="190">
                                    Miles per year:
                                    <input id="input_footprint_transportation_miles10" type="text" class="transportation_inputs"
                                      size="8" maxlength="5">
                                  </td>
                                  <td width="300">
                                    Miles per gallon:
                                    <input id="input_footprint_transportation_mpg10" type="text" class="transportation_inputs"
                                      size="3" maxlength="3">
                                    <!-- 
                            <a class="selectVehicle" 
                            href="javascript:vehicleSelector();">
                            (select vehicle)
                            </a>
                            -->
                                  </td>
                                  <td width="90" align="left">
                                    <select id="input_footprint_transportation_fuel10">
                                      <option value="1" selected="">Gasoline</option>
                                      <option value="2">Diesel</option>
                                    </select>
                                  </td>
                                </tr>
                              </table>
                            </td>
                          </tr>
                          <tr>
                            <td id="transportation_vehicle_select_10">
                              <div style="display: none;">
                                <table border="0" cellpadding="1" cellspacing="0">
                                  <tr>
                                    <td>
                                      <select id="transportation_year10" class="vehicle_select_" style="width: 70px;">
                                        <option value="0"> -Select- </option>
                                      </select>
                                    </td>
                                    <td>
                                      <select id="transportation_make10" class="vehicle_select_" style="width: 180px;">
                                      </select>
                                    </td>
                                    <td>
                                      <select id="transportation_model10" class="vehicle_select_" style="width: 180px;">
                                      </select>
                                    </td>
                                    <td>
                                      <select id="transportation_trans10" class="vehicle_select_" style="width: 180px;">
                                      </select>
                                    </td>
                                  </tr>
                                </table>
                              </div>
                            </td>
                          </tr>
                        </table>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td style="padding-top: 5px; padding-left: 20px; font-size: 15px; font-weight:bold;">
                    <button id="transportation_button_addvehicle" style="font-size: 10px; width: 30px">+</button><button
                      id="transportation_button_subtractvehicle" style="font-size: 10px; width: 30px;">-</button>
                  </td>
                </tr>
                <tr>
                  <td>
                    <table border="0" cellpadding="0" cellspacing="0">
                      <tr style="padding-top: 14px;">
                        <td colspan="4">
                          <div id="transportation_public_transit" style="width:650px;">
                            <table class="transportation_table">
                              <tr>
                                <td colspan="4">
                                  <div class="trans_head_test" style="width: 400px;">
                                    <table>
                                      <tr>
                                        <td>
                                          <div class="trans_head_test" style="width: 400px;">
                                            Public Transit
                                          </div>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>
                                          <div class="radiogrp" style="width:500px;">
                                            <INPUT TYPE="RADIO" name="transportation_groundtype" id="transportation_groundtype0"
                                              VALUE="transportation_groundtotal" />
                                            <label for="transportation_groundtype0"><span>Simple</span></label>
                                            <INPUT TYPE="RADIO" name="transportation_groundtype" id="transportation_groundtype1"
                                              VALUE="transportation_groundmulti" />
                                            <label for="transportation_groundtype1"><span>Advanced</span></label></div>
                                        </td>
                                      </tr>
                                    </table>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td colspan="2" align="left" style="padding-left:50px;" width="50%">
                                </td>
                                <td colspan="2" align="left" width="50%"></td>
                              </tr>
                              <tr id="transportation_groundtotal">
                                <td colspan="4" style="padding-left:50px;"><input id="input_footprint_transportation_publictrans"
                                    type="text" size="12" maxlength="20"> miles per year</td>
                              </tr>
                              <tr id="transportation_groundmulti">
                                <td colspan="4" style="padding-left:50px;">
                                  <table width="100%">
                                    <tr>
                                      <td>&nbsp;<input id="input_footprint_transportation_bus" type="text" size="12"
                                          maxlength="5"> Bus</td>
                                    </tr>
                                    <tr>
                                      <td>&nbsp;<input id="input_footprint_transportation_transit" type="text" size="12"
                                          maxlength="5"> Transit Rail (light&heavy)
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>&nbsp;<input id="input_footprint_transportation_commuter" type="text" size="12"
                                          maxlength="5"> Commuter Rail</td>
                                    </tr>
                                    <tr>
                                      <td>&nbsp;<input id="input_footprint_transportation_intercity" type="text" size="12"
                                          maxlength="5"> Inter-city Rail (Amtrak)</td>
                                    </tr>
                                  </table>
                                </td>
                              </tr>
                            </table>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="4">
                          <div id="transportation_air_travel" style="width:650px;">
                            <table class="transportation_table">
                              <tr>
                                <td colspan="4">
                                  <table>
                                    <tr>
                                      <td>
                                        <div class="trans_head_test" style="width: 400px;">Air Travel</div>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        <div class="radiogrp" style="width:500px;">

                                          <INPUT TYPE=RADIO name="transportation_airtype" id="transportation_airtype0"
                                            VALUE="transportation_airtotal" />
                                          <label for="transportation_airtype0">Simple</label>
                                          <INPUT TYPE=RADIO name="transportation_airtype" id="transportation_airtype1"
                                            VALUE="transportation_airmulti" />
                                          <label for="transportation_airtype1">Advanced</label>

                                        </div>
                                      </td>
                                    </tr>
                                  </table>

                                </td>
                              </tr>
                              <tr>
                                <td colspan="2" align="left" style="padding-left:50px;" width="50%"></td>
                                <td colspan="2" align="left" width="50%"></td>
                              </tr>
                              <tr id="transportation_airtotal">
                                <td colspan="4" style="padding-left:50px;"><input id="input_footprint_transportation_airtotal"
                                    type="text" size="12" maxlength="6"> miles flown per year</td>
                              </tr>
                              <tr id="transportation_airmulti">
                                <td colspan="4" style="padding-left:50px;">
                                  <table width="100%">
                                    <tr>
                                      <td>Number of one-way flights</td>
                                    </tr>
                                    <tr>
                                      <td>&nbsp;<input id="input_footprint_transportation_airshort" type="text" size="12"
                                          maxlength="6"> Short (&lt; 400 mi)</td>
                                    </tr>
                                    <tr>
                                      <td>&nbsp;<input id="input_footprint_transportation_airmedium" type="text" size="12"
                                          maxlength="6"> Medium (400-1500 mi)</td>
                                    </tr>
                                    <tr>
                                      <td>&nbsp;<input id="input_footprint_transportation_airlong" type="text" size="12"
                                          maxlength="6"> Long (1500 - 3000 mi)</td>
                                    </tr>
                                    <tr>
                                      <td>&nbsp;<input id="input_footprint_transportation_airextended" type="text" size="12"
                                          maxlength="6"> Extended (&gt; 3000 mi)</td>
                                    </tr>
                                  </table>
                                </td>
                              </tr>

                            </table>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="4" style="height: 15px;">&nbsp;</td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>
            </div>

            <div id="tab_housing" style="font-size: 13px; display: none; position: relative; top: 0; left: 0;width: 100%;">
              <div class="tab_title tab_title_housing thinfont">How much do you use in your home?
                <button id="next_button" style="position: absolute; right: 30px; font-size: 12px;" onClick="loadPage('insert4', false)">Next</button>
                <button id="prev_button" style="position: absolute; left: 30px; font-size: 12px;" onClick="loadPage('insert3', false)">Previous</button>

              </div>
              <input type="hidden" id="input_footprint_housing_watersewage">
              <input type="hidden" id="result_utility_providers">
              <input type="hidden" id="input_footprint_housing_gco2_per_kwh">
              <div class="radiogrp " style="font-size:11px ; padding-left: 20px;">
                <input type="radio" name="housing_calculation_type" id="housing_calculation_type0" checked="checked"
                  value="regular" />
                <label for="housing_calculation_type0">Regular Analysis</label>
                <input type="radio" id="housing_calculation_type1" name="housing_calculation_type" value="adv" />
                <label for="housing_calculation_type1">Advanced Audit</label>
              </div>
              <div id="housing_regular_container" style="padding-left: 5px; font-family:Verdana, Geneva, sans-serif;">
                <table class="general_table" cellspacing="0" cellpadding="10px" border="0" align="center" style="width: 660px;">
                  <tr>
                    <td style="width: 300px;"><span class="section_head_font">Electricity:</span></td>
                    <td style="width: 360px;">
                      <table id="electricity_container" cellspacing="0" cellpadding="0" border="0">
                        <tr>
                          <td><input id="input_footprint_housing_electricity_dollars" type="text" size="5" maxlength="5">
                            <input id="input_footprint_housing_electricity_kwh" type="text" size="5" maxlength="5"></td>
                          <td><select id="input_footprint_housing_electricity_type">
                              <option value="0">$/year</option>
                              <option value="1">kWh/year</option>
                            </select></td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td style="padding-left: 40px; width: 300px;""> Electricity % purchased from a clean energy program: </td>
      <td style="
                      width: 360px;"><select id="input_footprint_housing_cleanpercent">
                        <option value="0">0%</option>
                        <option value="10">10%</option>
                        <option value="20">20%</option>
                        <option value="30">30%</option>
                        <option value="40">40%</option>
                        <option value="50">50%</option>
                        <option value="60">60%</option>
                        <option value="70">70%</option>
                        <option value="80">80%</option>
                        <option value="90">90%</option>
                        <option value="100">100%</option>
                      </select></td>
                  </tr>
                  <tr>
                    <td style="width: 300px;"><span class="section_head_font">Utility Provider:</span></td>
                    <td style="width: 360px;"><select id="housing_select_utility_provider">
                      </select></td>
                  </tr>
                  <tr>
                    <td style="width: 300px;"><span class="section_head_font">Natural Gas:</span></td>
                    <td style="width: 360px;" id="housing_natural_gas">
                      <table id="electricity_container" cellspacing="0" cellpadding="0" border="0">
                        <tr>
                          <td><input id="input_footprint_housing_naturalgas_dollars" type="text" size="5" maxlength="5">
                            <input id="input_footprint_housing_naturalgas_therms" type="text" size="5" maxlength="5">
                            <input id="input_footprint_housing_naturalgas_cuft" type="text" size="5" maxlength="5"></td>
                          <td><select id="input_footprint_housing_naturalgas_type">
                              <option value="0">$/year</option>
                              <option value="1">Therms/yr</option>
                              <option value="2">Cu.Ft/yr</option>
                            </select></td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td style="width: 300px;"><span class="section_head_font">Heating Oil or Other Fuels:</span></td>
                    <td style="width: 360px;"><input id="input_footprint_housing_heatingoil_dollars" type="text" size="4"
                        maxlength="4">
                      <input id="input_footprint_housing_heatingoil_gallons" type="text" size="4" maxlength="4">
                      <select id="input_footprint_housing_heatingoil_type">
                        <option value="0">$/year</option>
                        <option value="1">Gallons/yr</option>
                      </select></td>
                  </tr>
                  <tr style="display: none;">
                    <td><span class="section_head_font" style="padding-left: 40px;">Price of gasoline:</span></td>
                    <td id="housing_living_space"><input id="input_footprint_housing_heatingoil_dollars_per_gallon"
                        type="text" size="4" maxlength="4">
                      $/Gallon</td>
                  </tr>
                  <tr>
                    <td><span class="section_head_font">Square feet in your living space:</span></td>
                    <td id="housing_living_space"><input id="input_footprint_housing_squarefeet" type="text" size="4"
                        maxlength="4"></td>
                  </tr>
                  <tr>
                    <td style="width: 300px;"><span class="section_head_font">Water:</span></td>
                    <td style="width: 360px;">
                      <div style="position: relative; width: 260px; height: 50px;">
                        <div style="position: absolute; top: 0; left: 0; width: 260px; height: 50px;">
                          <table cellpadding="0" cellspacing="0" border="0" class="housing_tabl2e">
                            <tr>
                              <td>
                                <div id="housing_watersewage_slidertext" class="SliderText" align="center" style="width:260px;">Average</div>
                                <div id="housing_watersewage_slider" style="width:260px;">&nbsp;</div>
                                <img src="images/triangle.png">
                              </td>
                              <td style="width: 50px; padding: 20px;"><img src="images/carb_question_mark.png" border="0"
                                  class="tTip tTipHandle" title="<strong>Average daily water consumption</strong><br /><br />Average household: 64 gal./day<br />1-person household: 39 gal./day<br />2-person household: 64 gal./day<br />3-person household: 69 gal./day<br />4-person household: 79 gal./day<br />5-person household: 89 gal./day" /></td>
                              <td></td>
                            </tr>
                          </table>
                        </div>
                      </div>
                    </td>
                  </tr>
                </table>
              </div>
              <div id="housing_adv_container" style="padding-left: 5px; font-family:Verdana, Geneva, sans-serif; font-size: 12px; display: none;">
                <div style="padding-top: 8px; padding-left: 20px;"> <span> Please enter your zip code:
                    <input type="text" id="housing_input_zipcode" value="" style="width: 50px;" maxlength="5" />
                    <button id="housing_button_hes_submit_zipcode" style="width: 170px; height: 25px; font-size: 12px;"
                      onclick="javascript:housing_button_hes_submit_zipcode_onclick();">Begin Advanced Audit</button>
                  </span>
                  <div id="housing_hes_fields_container"></div>
                  <div id="housing_hes_results_container"></div>
                </div>
              </div>

              <div style="height: 40px; display: none"></div>
            </div>

            <div id="tab_food" style="font-size: 13px; display: none; position: relative; top: 0; left: 0;width: 100%;">
              <div class="tab_title tab_title_shopping thinfont">How much do you consume of each of these?
              <button id="next_button" style="position: absolute; right: 30px; font-size: 12px;" onClick="loadPage('insert5', false)">Next</button>
              <button id="prev_button" style="position: absolute; left: 30px; font-size: 12px;" onClick="loadPage('insert4', false)">Previous</button>


              </div>

              <input type="hidden" id="input_footprint_shopping_food_meattype" />
              <input type="hidden" id="input_footprint_shopping_food_meatfisheggs" />
              <input type="hidden" id="input_footprint_shopping_food_meat_beefpork" />
              <input type="hidden" id="input_footprint_shopping_food_meat_poultry" />
              <input type="hidden" id="input_footprint_shopping_food_meat_fish" />
              <input type="hidden" id="input_footprint_shopping_food_meat_other" />
              <input type="hidden" id="input_footprint_shopping_food_dairy" />
              <input type="hidden" id="input_footprint_shopping_food_fruitvegetables" />
              <input type="hidden" id="input_footprint_shopping_food_cereals" />
              <input type="hidden" id="input_footprint_shopping_food_otherfood" />

              <div id="food_adults_children_inputs" style="margin-left: 50px; margin-bottom: 30px; margin-top: 10px;">
                <div>Number Of Adults/Children In Your Household</div>
                <div>
                  Adults <input type="text" id="input_footprint_household_adults" style="width: 40px;" />
                  Children <input type="text" id="input_footprint_household_children" style="width: 40px;" /></div>
              </div>


              <div style="position:relative">
                <div style="position:absolute; width: 160px; height: 100px; top: 0; right: 0">
                  <div style="margin-bottom: 10px; color: #8C9DC6; font-size: 12px;">Average daily Calories</div>
                  <div>
                    <table>
                      <tbody>
                        <tr>
                          <td style="width: 90px; color: #8C9DC6;font-size: 12px;">Per Person</td>
                          <td style="color: #8C9DC6; font-size: 12px;">Total</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>

                <div style="margin-left: 20px; ">
                  <table class="shopping_table" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td style="width: 180px;"><span style="margin-left: 20px;"><img id="shopping_state_img" src="images/icon_steak_fish.png"
                            border="0" /> Meat, fish, eggs </span></td>
                      <td>
                        <div class="radiogrp">
                          <input type="radio" id="shopping_meattype0" name="shopping_meattype" value="0">
                          <label for="shopping_meattype0">Simple</label>
                          <input type="radio" id="shopping_meattype1" name="shopping_meattype" value="1">
                          <label for="shopping_meattype1">Advanced</label>
                        </div>
                      </td>
                    </tr>
                  </table>
                  <table class="shopping_table" id="food_meat_total" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td style="width: 220px;"><span style="margin-left: 20px;">Meats Total</span></td>
                      <td style="width: 250px;">
                        <div id="shopping_meatfisheggs_slidertext" class="SliderText" align="center">Average</div>
                        <div id="shopping_meatfisheggs_slider"></div>
                        <img src="images/triangle.png">
                      </td>
                      <td style="width: 50px;">
                        <div id="shopping_meatfisheggs-Value" style="visibility: hidden;">$</div>
                      </td>
                      <td id="shopping_meatfisheggs_calories_per_person" style="width: 70px;"></td>
                      <td id="shopping_meatfisheggs_calories_per_household" style="width: 50px;"></td>
                    </tr>
                  </table>
                  <table class="shopping_table" id="food_meat_multi" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td style="width: 220px;"><span style="margin-left: 20px;">Beef, pork, lamb, veal</span></td>
                      <td style="width: 250px;">
                        <div id="shopping_meat_beefpork_slidertext" class="SliderText" align="center">Average</div>
                        <div id="shopping_meat_beefpork_slider"></div>
                        <img src="images/triangle.png">
                      </td>
                      <td>
                        <div id="shopping_meat_beefpork-Value" style="visibility: hidden;width: 50px;"></div>
                      </td>
                      <td id="shopping_meat_beefpork_calories_per_person" style="width: 70px;"></td>
                      <td id="shopping_meat_beefpork_calories_per_household" style="width: 50px;"></td>
                    </tr>
                    <tr>
                      <td><span style="margin-left: 20px;">Poultry & eggs </span></td>
                      <td>
                        <div id="shopping_meat_poultry_slidertext" class="SliderText" align="center">Average</div>
                        <div id="shopping_meat_poultry_slider"></div>
                        <img src="images/triangle.png">
                      </td>
                      <td>
                        <div id="shopping_meat_poultry-Value" style="visibility: hidden;"></div>
                      </td>
                      <td id="shopping_meat_poultry_calories_per_person"></td>
                      <td id="shopping_meat_poultry_calories_per_household"></td>
                    </tr>
                    <tr>
                      <td><span style="margin-left: 20px;">Fish & seafood</span></td>
                      <td>
                        <div id="shopping_meat_fish_slidertext" class="SliderText" align="center">Average</div>
                        <div id="shopping_meat_fish_slider"></div>
                        <img src="images/triangle.png">
                      </td>
                      <td>
                        <div id="shopping_meat_fish-Value" style="visibility: hidden;"></div>
                      </td>
                      <td id="shopping_meat_fish_calories_per_person"></td>
                      <td id="shopping_meat_fish_calories_per_household"></td>
                    </tr>
                    <tr>
                      <td><span style="margin-left: 20px;">Other (processed meat, nuts...)</span></td>
                      <td>
                        <div id="shopping_meat_other_slidertext" class="SliderText" align="center">Average</div>
                        <div id="shopping_meat_other_slider"></div>
                        <img src="images/triangle.png">
                      </td>
                      <td>
                        <div id="shopping_meat_other-Value" style="visibility: hidden;"></div>
                      </td>
                      <td id="shopping_meat_other_calories_per_person"></td>
                      <td id="shopping_meat_other_calories_per_household"></td>
                    </tr>
                  </table>
                  <table class="shopping_table" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td style="width: 220px;"><span style="margin-left: 20px;"><img id="shopping_state_img" src="images/icon_cheese_milk.png"
                            border="0"> Dairy </span></td>
                      <td style="width: 250px;">
                        <div id="shopping_dairy_slidertext" class="SliderText" align="center">Average</div>
                        <div id="shopping_dairy_slider"></div>
                        <img src="images/triangle.png">
                      </td>
                      <td>
                        <div id="shopping_dairy-Value" style="visibility: hidden; width: 50px;"></div>
                      </td>
                      <td id="shopping_dairy_calories_per_person" style="width: 70px;"></td>
                      <td id="shopping_dairy_calories_per_household" style="width: 50px;"></td>
                    </tr>
                    <tr>
                      <td><span style="margin-left: 20px;"><img id="shopping_state_img" src="images/icon_apple.png"
                            border="0"> Fruits & Vegetables</span></td>
                      <td>
                        <div id="shopping_fruitvegetables_slidertext" class="SliderText" align="center">Average</div>
                        <div id="shopping_fruitvegetables_slider"></div>
                        <img src="images/triangle.png">
                      </td>
                      <td>
                        <div id="shopping_fruitvegetables-Value" style="visibility: hidden;"></div>
                      </td>
                      <td id="shopping_fruitvegetables_calories_per_person"></td>
                      <td id="shopping_fruitvegetables_calories_per_household"></td>
                    </tr>
                    <tr>
                      <td><span style="margin-left: 20px;"><img id="shopping_state_img" src="images/icon_croissant.png"
                            border="0"> Grains & Baked Goods </span></td>
                      <td>
                        <div id="shopping_cereals_slidertext" class="SliderText" align="center">Average</div>
                        <div id="shopping_cereals_slider"></div>
                        <img src="images/triangle.png">
                      </td>
                      <td>
                        <div id="shopping_cereals-Value" style="visibility: hidden;"></div>
                      </td>
                      <td id="shopping_cereals_calories_per_person"></td>
                      <td id="shopping_cereals_calories_per_household"></td>
                    </tr>
                    <tr>
                      <td><span style="margin-left: 20px;"><img id="shopping_state_img" src="images/icon_ice_cream.png"
                            border="0"> Other (snacks,drinks,etc.)</span></td>
                      <td>
                        <div id="shopping_otherfood_slidertext" class="SliderText" align="center">Average</div>
                        <div id="shopping_otherfood_slider"></div>
                        <img src="images/triangle.png">
                      </td>
                      <td>
                        <div id="shopping_otherfood-Value" style="visibility: hidden;"></div>
                      </td>
                      <td id="shopping_otherfood_calories_per_person"></td>
                      <td id="shopping_otherfood_calories_per_household"></td>
                    </tr>
                    <tr>
                      <td></td>
                      <td>
                        <div id="shopping_totalcalories_slider"></div>
                      </td>
                      <td>
                        <div id="shopping_totalcalories-Value"><strong>Total</strong></div>
                      </td>
                      <td id="shopping_totalcalories_calories_per_person"></td>
                      <td id="shopping_totalcalories_calories_per_household"></td>
                    </tr>
                  </table>

                </div>

              </div>

              <div style="height: 50px; display: none"></div>
            </div>

            <div id="tab_shopping" style="font-size: 13px; display: none; position: relative; top: 0; left: 0;width: 100%;">
              <div class="tab_title tab_title_shopping thinfont">How much do you spend on each of these?
              <button id="next_button" style="position: absolute; right: 30px; font-size: 12px;" onClick="loadPage('insert6', false)">Next</button>
              <button id="prev_button" style="position: absolute; left: 30px; font-size: 12px;" onClick="loadPage('insert5', false)">Previous</button>

              </div>
              <input type="hidden" id="input_footprint_shopping_goods_type" />
              <input type="hidden" id="input_footprint_shopping_goods_other_type" />
              <input type="hidden" id="input_footprint_shopping_services_type" />
              <input type="hidden" id="input_footprint_shopping_goods_total" />
              <input type="hidden" id="input_footprint_shopping_services_total" />
              <div style="margin-left: 50px;">
                <table class="shopping_table" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td style="width: 180px;"><span class="section_head_font">Goods</span> <img src="images/carb_question_mark.png"
                        border="0" class="tTip tTipHandle" title="Default values for goods are based on households with similar size and income, living in the same location. We recommend that you use the default values or modify them based on your own estimate of how much you spend on each item compared to similar households." />
                      <span class="section_text_font" style="margin-left: 8px;">$/month</span></td>
                    <td>
                      <div class="radiogrp">
                        <input type="radio" name="shopping_goodstype" id="shopping_goodstype0" value="0">
                        <label for="shopping_goodstype0">Simple</label>
                        <input type="radio" name="shopping_goodstype" id="shopping_goodstype1" value="1">
                        <label for="shopping_goodstype1">Advanced</label>
                      </div>
                    </td>
                  </tr>
                </table>
                <table class="shopping_table" id="goods_total" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td style="width: 220px;"><span style="margin-left: 20px;">Goods Total</span></td>
                    <td style="width: 250px; height: 60px;">
                      <div id="goods_slidertext" class="SliderText" align="center">Average</div>
                      <div id="goods_slider"></div>
                      <img src="images/triangle.png">
                      <div id="goods-Value" style="visibility: hidden;"></div>
                    </td>
                  </tr>
                </table>
                <table class="shopping_table" id="goods_multi" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td style="width: 220px;"><span style="margin-left: 20px;">Clothing</span></td>
                    <td style="width: 250px;">$
                      <input type="text" id="input_footprint_shopping_goods_clothing" size="5" maxlength="9">
                      <div id="clothing_slider"></div>
                    </td>
                  </tr>
                  <tr>
                    <td><span style="margin-left: 20px;">Furniture & Appliances</span></td>
                    <td>$
                      <input type="text" id="input_footprint_shopping_goods_furnitureappliances" size="5" maxlength="9">
                      <div id="furnitureappliances_slider"></div>
                    </td>
                  </tr>
                  <tr>
                    <td colspan="2">
                      <table class="shopping_table" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td style="width: 180px;"><span style="margin-left: 20px;">Other Goods</span></td>
                          <td>
                            <div class="radiogrp">
                              <input type="radio" name="shopping_othergoodstype" id="shopping_othergoodstype0" value="0">
                              <label for="shopping_othergoodstype0">Simple</label>
                              <input type="radio" name="shopping_othergoodstype" id="shopping_othergoodstype1" value="1">
                              <label for="shopping_othergoodstype1">Advanced</label>
                            </div>
                          </td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td colspan="2">
                      <table class="shopping_table" id="othergoods_total" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td style="width: 220px; padding-bottom: 20px;"><span style="margin-left: 40px;">Total Other
                              Goods</span></td>
                          <td style="width: 250px; padding-bottom: 20px;">$
                            <input type="text" id="input_footprint_shopping_goods_other_total" size="5" maxlength="9">
                            <div id="other_goods_slider"></div>
                          </td>
                        </tr>
                      </table>
                      <table class="shopping_table" id="othergoods_multi" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td style="width: 220px;"><span style="margin-left: 40px;">Entertainment </span></td>
                          <td style="width: 250px;">$
                            <input type="text" id="input_footprint_shopping_goods_other_entertainment" size="5"
                              maxlength="9">
                            <div id="entertainment_slider"></div>
                          </td>
                        </tr>
                        <tr>
                          <td style="width: 220px;"><span style="margin-left: 40px;">Paper, office & reading</span></td>
                          <td style="width: 250px;">$
                            <input type="text" id="input_footprint_shopping_goods_other_office" size="5" maxlength="9">
                            <div id="office_slider"></div>
                          </td>
                        </tr>
                        <tr>
                          <td style="width: 220px;"><span style="margin-left: 40px;">Personal care & cleaning</span></td>
                          <td style="width: 250px;">$
                            <input type="text" id="input_footprint_shopping_goods_other_personalcare" size="5"
                              maxlength="9">
                            <div id="personalcare_slider"></div>
                          </td>
                        </tr>
                        <tr>
                          <td style="width: 220px;"><span style="margin-left: 40px;">Auto parts </span></td>
                          <td style="width: 250px;">$
                            <input type="text" id="input_footprint_shopping_goods_other_autoparts" size="5" maxlength="9">
                            <div id="autoparts_slider"></div>
                          </td>
                        </tr>
                        <tr>
                          <td style="width: 220px;"><span style="margin-left: 40px;">Medical </span></td>
                          <td style="width: 250px;">$
                            <input type="text" id="input_footprint_shopping_goods_other_medical" size="5" maxlength="9">
                            <div id="medical_slider"></div>
                          </td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                </table>
                <table class="shopping_table" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td style="width: 180px;"><span class="section_head_font">Services</span> <img src="images/carb_question_mark.png"
                        border="0" class="tTip tTipHandle" title="Default values for services are based on households with similar size and income, living in the same location. We recommend that you use the default values or modify them based on your own estimate of how much you spend on each item compared to similar households." /></span><span
                        class="section_text_font" style="margin-left: 8px;">$/month</span></td>
                    <td>
                      <div class="radiogrp">
                        <input type="radio" name="shopping_servicestype" id="shopping_servicestype0" value="0">
                        <label for="shopping_servicestype0">Simple</label>
                        <input type="radio" name="shopping_servicestype" id="shopping_servicestype1" value="1">
                        <label for="shopping_servicestype1">Advanced</label>
                      </div>
                    </td>
                  </tr>
                </table>
                <table class="shopping_table" id="services_total" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td style="width: 220px;"><span style="margin-left: 20px;">Services Total</span></td>
                    <td style="width: 250px;height: 60px;">
                      <div id="services_slidertext" class="SliderText" align="center">Average</div>
                      <div id="services_slider"></div>
                      <img src="images/triangle.png">
                      <div id="services-Value" style="visibility: hidden;"></div>
                    </td>
                  </tr>
                </table>
                <table class="shopping_table" id="services_multi" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td style="width: 220px;"><span style="margin-left: 20px;">Health Care</span></td>
                    <td style="width: 250px;">$
                      <input type="text" id="input_footprint_shopping_services_healthcare" size="5" maxlength="9">
                      <div id="healthcare_slider"></div>
                    </td>
                  </tr>
                  <tr>
                    <td style="width: 220px;"><span style="margin-left: 20px;">Education</span></td>
                    <td style="width: 250px;">$
                      <input type="text" id="input_footprint_shopping_services_education" size="5" maxlength="9">
                      <div id="education_slider"></div>
                    </td>
                  </tr>
                  <tr>
                    <td style="width: 220px;"><span style="margin-left: 20px;">Information & Communication</span></td>
                    <td style="width: 250px;">$
                      <input type="text" id="input_footprint_shopping_services_communications" size="5" maxlength="9">
                      <div id="communications_slider"></div>
                    </td>
                  </tr>
                  <tr>
                    <td style="width: 220px;"><span style="margin-left: 20px;">Vehicle services</span></td>
                    <td style="width: 250px;">$
                      <input type="text" id="input_footprint_shopping_services_vehicleservices" size="5" maxlength="9">
                      <div id="vehicleservices_slider"></div>
                    </td>
                  </tr>
                  <tr>
                    <td style="width: 220px;"><span style="margin-left: 20px;">Personal business & finance</span></td>
                    <td style="width: 250px;">$
                      <input type="text" id="input_footprint_shopping_services_finance" size="5" maxlength="9">
                      <div id="finance_slider"></div>
                    </td>
                  </tr>
                  <tr>
                    <td style="width: 220px;"><span style="margin-left: 20px;">Household maintenance & Repair</span></td>
                    <td style="width: 250px;">$
                      <input type="text" id="input_footprint_shopping_services_household" size="5" maxlength="9">
                      <div id="household_slider"></div>
                    </td>
                  </tr>
                  <tr>
                    <td style="width: 220px;"><span style="margin-left: 20px;">Organizations & Charity</span></td>
                    <td style="width: 250px;">$
                      <input type="text" id="input_footprint_shopping_services_charity" size="5" maxlength="9">
                      <div id="charity_slider"></div>
                    </td>
                  </tr>
                  <tr>
                    <td style="width: 220px;"><span style="margin-left: 20px;">Miscellaneous services</span></td>
                    <td style="width: 250px;">$
                      <input type="text" id="input_footprint_shopping_services_miscservices" size="5" maxlength="9">
                      <div id="miscservices_slider"></div>
                    </td>
                  </tr>
                </table>

              </div>
              <div style="height: 50px; display: none;"></div>

              <p>
                <a href="http://www.climateearth.com" target="_blank" style="border: none;">
                  <img style="float: right" src="images/ClimateEarthLogoSmall.png" style="border: none" />
                </a>
                Greenhouse gas emission factors from the Comprehensive Environmental
                Data Archive for Economic and Environmental Systems Analysis
                (&quot;CEDA 3.0 Climate&quot;).
              </p>
            </div>

            <div id="tab_takeaction" style="display: none; position: relative; top: 0; left: 0;width: 100%;">
              <div style="position: relative">
                <div class="tab_title tab_title_takeaction thinfont">
                <button id="prev_button" style="position: absolute; left: 30px; font-size: 12px;" onClick="loadPage('insert6', false)">Previous</button>
                  Build your action plan
                </div>
                <script>
                  function printpage()
                    {
                      window.print()
                    }
                </script>


                <div style="position: absolute; right: 0; top: 0; width: 150px; height: 100%; z-index: 0;">

                  <div style="color: #7DC100; font-size:15px; font-weight: bold;width: 100%; text-align: center;">Total
                    Reductions</div>
                  <div id="takeaction_pounds_total" style="color: #7DC100; text-shadow: 1px 2px 5px #93E100; font-size: 40px; width: 100%; text-align: center;"></div>
                  <div style="color: #7DC100; font-size:13px; width: 100%; text-align: center;">tons CO<sub>2</sub>/year</div>


                  <div style="font-size: 12px;  margin-top: 10px; text-align: center;text-shadow: 0px 0px 1px #E0E0E0; color: #787878">
                    <div style="width: 100%; ">$/yr saved: $<span id="takeaction_dollars_total"></span></div>
                    <div style="width: 100%; margin-top: 5px;">Upfront cost: $<span id="takeaction_upfront_total"></span></div>
                  </div>


                  <div style="color: #5A75AD; font-size:15px; font-weight: bold;width: 100%; text-align: center; color: #5A75AD; margin-top: 10px;">Total
                    Footprint</div>
                  <div id="takeaction_afterpledge_grand_total" style="color: #5A75AD; text-shadow: 1px 2px 5px #AAB8D5; font-size: 30px; width: 100%; text-align: center;"></div>
                  <div style="color: #5A75AD; font-size:13px; width: 100%; text-align: center;">tons CO<sub>2</sub>/year</div>

                  <div style="font-size: 12px;  margin-top: 10px; text-align: center;text-shadow: 0px 0px 1px #E0E0E0; color: #787878">
                    <div style="display: none">
                      <div>
                        NPV 10-yr: $<span id="takeaction_npv10yr"></span>
                      </div>
                      <div>
                        ROI: <span id="takeaction_roi"></span>
                      </div>
                    </div>


                    <div style="text-align: center; margin-top: 5px;">
                      <img id="takeaction_img_smilely" src="images/smiley/smileyok75.gif" style="width: 80px; height: 80px;" />
                    </div>
                    <div style="font-weight:bold; font-size: 14px; color: #5A75AD;" id="takeaction_smiley_percent_comparison"></div>
                    <div id="takeaction_smiley_percent_comparison_rest" style="padding-right: 5px; padding-left: 5px;"></div>


                  </div>






                </div>


              </div>





              <div style="position: relative;height:350px;">

                <div id="takeactionChart" style="position: absolute; top: 0; left: 0; height:350px;width:520px;"></div>
                <div style="font-family: Verdana, Geneva, sans-serif; font-size: 11px; position: absolute; top: 350px;">
                  <a href="javascript:;" id="takeaction_reset_chart" title="Click here to reset the height of the graph"
                    class="tTip tTipHandle" style="color: #666; text-decoration: none;"> Reset Axis </a> </div>

                <div id="takeaction_tooltip" style="opacity:0;  position: absolute; z-index: 30000; width: 150px; height: 88px; left: 0; bottom: 0; 
background-image:url('./images/hover_balloon.png'); background-repeat: no-repeat; "
                  onMouseOver="if (!animating) {$('#tooltip1b').hide();}" onMouseMove="if (!animating) {$('#tooltip1b').hide();}">
                  <div id="takeaction_tooltip_text" style="margin-top: 25px; text-align: center; font-family: Verdana, Geneva, sans-serif;  font-size: 12px; color: #333;margin-left: 25px; width: 100px;;"></div>
                </div>


              </div>

              <div> 
                    <iframe id="qualtrics" frameborder="0" src="https://usu.co1.qualtrics.com/jfe/form/SV_0ibTm9gD0RvKvbL"></iframe>
              </div>

              <!-- This is the pledges section. To turn it back on, just remove the display: none; property. -->                      
              <div style="font-family:Verdana, Geneva, sans-serif; font-size: 13px; display: none;">


                <input type="hidden" id="input_takeaction_more_efficient_vehicle" />
                <input type="hidden" id="input_takeaction_alternativefuel_vehicle" />
                <input type="hidden" id="input_takeaction_electric_vehicle" />
                <input type="hidden" id="input_takeaction_hybrid_vehicle" />
                <input type="hidden" id="input_takeaction_telecommute_to_work" />
                <input type="hidden" id="input_takeaction_ride_my_bike" />
                <input type="hidden" id="input_takeaction_take_public_transportation" />
                <input type="hidden" id="input_takeaction_practice_eco_driving" />
                <input type="hidden" id="input_takeaction_maintain_my_vehicles" />
                <input type="hidden" id="input_takeaction_carpool_to_work" />
                <input type="hidden" id="input_takeaction_reduce_air_travel" />
                <input type="hidden" id="input_takeaction_offset_transportation" />
                <input type="hidden" id="input_takeaction_switch_to_cfl" />
                <input type="hidden" id="input_takeaction_turn_off_lights" />
                <input type="hidden" id="input_takeaction_T12toT8" />
                <input type="hidden" id="input_takeaction_tankless_water_heater" />
                <input type="hidden" id="input_takeaction_thermostat_winter" />
                <input type="hidden" id="input_takeaction_thermostat_summer" />
                <input type="hidden" id="input_takeaction_purchase_high_efficiency_cooling" />
                <input type="hidden" id="input_takeaction_purchase_high_efficiency_heating" />
                <input type="hidden" id="input_takeaction_energy_star_fridge" />
                <input type="hidden" id="input_takeaction_energy_star_printers" />
                <input type="hidden" id="input_takeaction_energy_star_copiers" />
                <input type="hidden" id="input_takeaction_energy_star_desktops" />
                <input type="hidden" id="input_takeaction_rechargeable_batteries" />
                <input type="hidden" id="input_takeaction_power_mgmt_comp" />
                <input type="hidden" id="input_takeaction_purchase_green_electricity" />
                <input type="hidden" id="input_takeaction_install_PV_panels" />
                <input type="hidden" id="input_takeaction_install_solar_heating" />
                <input type="hidden" id="input_takeaction_low_flow_showerheads" />
                <input type="hidden" id="input_takeaction_low_flow_faucets" />
                <input type="hidden" id="input_takeaction_low_flow_toilet" />
                <input type="hidden" id="input_takeaction_line_dry_clothing" />
                <input type="hidden" id="input_takeaction_water_efficient_landscaping" />
                <input type="hidden" id="input_takeaction_plant_trees" />
                <input type="hidden" id="input_takeaction_reduce_comm_waste" />
                <input type="hidden" id="input_takeaction_print_double_sided" />
                <input type="hidden" id="input_takeaction_offset_housing" />
                <input type="hidden" id="input_takeaction_low_carbon_diet" />
                <input type="hidden" id="input_takeaction_go_organic" />
                <input type="hidden" id="input_takeaction_offset_shopping" />

                <div style="margin-top: 15px;">
                  <table>
                    <tbody>
                      <tr>
                        <td style="width: 120px;">
                          <button id="takeaction_button_assumptions" style="font-size: 12px;">Assumptions</button>
                        </td>
                        <td>
                          <div class="radiogrp">
                            <input type="checkbox" id="takeaction_checkbox_category_transportation" checked="checked" />
                            <label for="takeaction_checkbox_category_transportation" style="font-size: 12px;">Transportation</label>
                            <input type="checkbox" id="takeaction_checkbox_category_housing" checked="checked" />
                            <label for="takeaction_checkbox_category_housing" style="font-size: 12px;">Housing</label>
                            <input type="checkbox" id="takeaction_checkbox_category_shopping" checked="checked" />
                            <label for="takeaction_checkbox_category_shopping" style="font-size: 12px;">Shopping</label>
                            <input type="checkbox" id="takeaction_checkbox_category_offset" checked="checked" />
                            <label for="takeaction_checkbox_category_offset" style="font-size: 12px;">Offsets</label>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div style="position: relative; height: 60px;">
                  <div style="position: absolute; right: 0">
                    <table cellpadding="0" border="0">
                      <tbody>
                        <tr>
                          <td style="padding-right: 140px;">
                            <button class="_nextButton_" onclick="printpage()" style="width:130px;">
                              <div class="_nextButtonOrangeText">Print<br />
                                <span style="font-size:10px">(or save as PDF)</span>
                              </div>
                            </button>
                          </td>
                          <!-- SAVE TO PROFILE BUTTON
<td style="padding-right: 0px;">

<button class="_nextButton_" display="none"; disabled="disabled">
<div class="_nextButtonOrangeText">Save to my profile</div>
</button>
</td>
-->
                          <td style="">


                            <div class="takeaction_sortbutton" id="takeaction_sortbutton_category" style="cursor: pointer;
 position: relative;width: 90px; height: 30px; border-radius: 5px; border: 1px solid #BBB">
                              <div class="takeaction_sortbutton_text" style="padding-top: 7px; text-align: center; width: 100%; ">
                                Category
                                <span style="display:none;" class="takeaction_sortbutton_arrow takeaction_sortbutton_uparrow">↑</span>
                                <span style="display:none;" class="takeaction_sortbutton_arrow takeaction_sortbutton_downarrow">↓</span>
                              </div>
                              <input type="hidden" class="takeaction_sortbutton_column" value="category" />
                              <input type="hidden" class="takeaction_sortbutton_direction" value="asc" />
                            </div>

                          </td>
                          <td>

                            <div class="takeaction_sortbutton" id="takeaction_sortbutton_pounds" style="cursor: pointer;
 position: relative;width: 90px; height: 55px; color: #415683; border-radius: 5px; border: 1px solid #BBB;margin-left: 10px;">
                              <div class="takeaction_sortbutton_text" style="padding-top: 4px; text-align: center; width: 100%; ">
                                <div>Tons</div>
                                <div>Saved</div>
                                <div style="position: absolute; right: 10px; top: 10px;">
                                  <span style="display:none;" class="takeaction_sortbutton_arrow takeaction_sortbutton_uparrow">↑</span>
                                  <span style="display:none;" class="takeaction_sortbutton_arrow takeaction_sortbutton_downarrow">↓</span>
                                </div>
                              </div>
                              <div style="color: #999; font-size: 10px; text-align: center; width: 100%;">
                                mtCO<sub>2</sub>e/yr
                              </div>
                              <input type="hidden" class="takeaction_sortbutton_column" value="pounds" />
                              <input type="hidden" class="takeaction_sortbutton_direction" value="asc" />
                            </div>

                          </td>
                          <td>

                            <div class="takeaction_sortbutton" id="takeaction_sortbutton_dollars" style="cursor: pointer;
 position: relative;margin-left: 10px;width: 90px; height: 55px; border-radius: 5px; border: 1px solid #BBB">

                              <div class="takeaction_sortbutton_text" style="padding-top: 4px; text-align: center; width: 100%;">
                                <div>Dollars</div>
                                <div>Saved</div>
                                <div style="position: absolute; right: 10px; top: 10px;">
                                  <span style="display:none;" class="takeaction_sortbutton_arrow takeaction_sortbutton_uparrow">↑</span>
                                  <span style="display:none;" class="takeaction_sortbutton_arrow takeaction_sortbutton_downarrow">↓</span>
                                </div>
                              </div>
                              <div style="color: #999; font-size: 10px; text-align: center; width: 100%;">
                                $/yr
                              </div>
                              <input type="hidden" class="takeaction_sortbutton_column" value="dollars" />
                              <input type="hidden" class="takeaction_sortbutton_direction" value="asc" />
                            </div>

                          </td>
                          <td>

                            <div class="takeaction_sortbutton" id="takeaction_sortbutton_net10yr" style="cursor: pointer;
 position: relative;margin-left: 10px;width: 90px; height: 55px; border-radius: 5px; border: 1px solid #BBB">
                              <div class="takeaction_sortbutton_text" style="padding-top: 4px; text-align: center; width: 100%;">
                                <div>Upfront</div>
                                <div>Cost</div>
                                <div style="position: absolute; right: 10px; top: 10px;">
                                  <span style="display:none;" class="takeaction_sortbutton_arrow takeaction_sortbutton_uparrow">↑</span>
                                  <span style="display:none;" class="takeaction_sortbutton_arrow takeaction_sortbutton_downarrow">↓</span>
                                </div>
                              </div>
                              <div style="color: #999; font-size: 10px; text-align: center; width: 100%;">
                                $/yr
                              </div>
                              <input type="hidden" class="takeaction_sortbutton_column" value="net10yr" />
                              <input type="hidden" class="takeaction_sortbutton_direction" value="desc" />
                            </div>


                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>







                <div id="mainAccordion" class="accordion">

                  <div class="new takeaction_section_transportation">
                    <h>
                      <table style="margin-top: 5px;" border="0" cellpadding="0" cellspacing="0">
                        <tbody>
                          <tr>
                            <td><a class="chkPledge" id="chkPledge_more_efficient_vehicle" style="display: block;" href="javascript:takeaction_pledge('more_efficient_vehicle');">
                                <table align="center" class="trg" border="0" cellpadding="0" cellspacing="0">
                                  <tbody>
                                    <tr>
                                      <td class="chkPledge" style="height: 30px;"> Pledge </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </a></td>
                            <td><a class="trigger" style="display: block;" href="javascript:;">
                                <table class="trg" border="0" cellpadding="0" cellspacing="0" style="height: 30px;">
                                  <tbody>
                                    <tr>
                                      <td class="pledgeText" style="width: 315px;">Buy a More Efficient Vehicle</td>
                                      <!--
                        <td style="width: 50px; text-align: left;"><img src="images/categories/transportation32.png" style="width: 23px; height: 23px;"/></td>
                        -->

                                      <td style="width: 105px; text-align: center;"><span class="takeaction_pounds" id="takeaction_pounds_more_efficient_vehicle"
                                          style="color: #415683"></span></td>
                                      <td style="width: 105px; text-align: center;">$<span class="takeaction_dollars"
                                          id="takeaction_dollars_more_efficient_vehicle"></span></td>
                                      <td style="width: 105px; text-align: center;">$<span class="takeaction_net10yr"
                                          id="takeaction_net10yr_more_efficient_vehicle"></span></td>
                                    </tr>
                                  </tbody>
                                </table>
                              </a></td>
                          </tr>
                        </tbody>
                      </table>
                    </h>
                    <div style="position: relative" class="inner">
                      <div style="position: relative; ">
                        <div id="takeaction_greenglow_more_efficient_vehicle" style="position: absolute; top: 0; left: 0; height: 100%; width: 100%; z-index: 0; box-shadow:inset 0px 0px 30px rgba(196,255,155,1); display: none;"></div>
                        <div class="pledge_container" style="font-size:12px; padding: 10px; position: relative; z-index: 10;">
                          <img src="images/pledges/icon1.png" alt="Car Icon" align="right" vspace="5" hspace="10" />I
                          will trade in
                          <select id="input_takeaction_more_efficient_vehicle_vehicle_select" align="absmiddle">
                            <option value="1" selected="selected">Vehicle 1</option>
                            <option value="2">Vehicle 2</option>
                            <option value="3">Vehicle 3</option>
                          </select>
                          which gets <span id="display_takeaction_more_efficient_vehicle_mpg_old">0</span>
                          miles per gallon and buy a more fuel efficient model that gets
                          <input type="text" id="input_takeaction_more_efficient_vehicle_mpg_new" size="2" maxlength="2" />
                          miles per gallon. <p>I will drive this vehicle
                            <input type="text" id="input_takeaction_more_efficient_vehicle_miles_new" size="5"
                              maxlength="6" />
                            miles per year.</p> I can sell my current vehicle for $
                          <input type="text" id="input_takeaction_more_efficient_vehicle_sell" size="8" maxlength="5" />
                          and purchase a new one for $
                          <input type="text" id="input_takeaction_more_efficient_vehicle_purchase" size="8" maxlength="6" />
                          <div class="funfact">Americans are choosing greener vehicles--the average fuel efficiency of
                            cars on the road in the U.S. has gone up steadily for the past 10 years. Don't get left
                            behind in a gas guzzler! </div>
                          <div>
                            <a target="_blank" style="text-decoration: none; color:blue;" onMouseOver="this.style.color='black'"
                              onMouseOut="this.style.color='blue'" href="http://www.coolcalifornia.org/funding-wizard#search/home+electricity//false/none/false/1/12">Find
                              rebates and incentives for this action</a>
                            <img src="images/funding-wizard-icon.png" style="position: absolute; width:35px; padding-left: 5px;">
                          </div>
                          <div class="assumption_button">
                            <a href="javascript:;" class="assumptionShowHideLink">[<span class="takeaction_assumption_plusminus">+</span>]
                              assumptions</a>
                          </div>
                          <div class="assumption_content">
                            <ul>
                              <li>Price of gasoline: $ <span class="pledge_assumption_price_of_gasoline"> </span> per
                                gallon <img src="images/carb_question_mark.png" alt="" border="0" title="Click the Assumptions button above to change the price of gas."
                                  class="tTip tTipHandle" /> </li>
                              <li>Well-to-pump emissions: 20% of fossil fuel emissions. This includes emissions from
                                the fuel used to find, extract, transport and refine crude oil into gasoline </li>
                              <li>Greenhouse gas emissions from vehicles manufacturing: 53 grams CO2e per mile (8
                                metric tons per vehicle / 150,000 miles lifespan)</li>
                              <li>Not included: emissions from road construction and maintenance, and other
                                government-related emissions</li>
                            </ul>
                          </div>

                          <input type="hidden" id="input_takeaction_more_efficient_vehicle_mpg_old" />
                          <input type="hidden" id="input_takeaction_more_efficient_vehicle_miles_old" />
                        </div>
                        <div class="takeaction_category" style="display: none;">0</div>
                      </div>
                    </div>
                  </div>
                  <div class="new takeaction_section_transportation">
                    <h>
                      <table style="margin-top: 5px;" border="0" cellpadding="0" cellspacing="0">
                        <tbody>
                          <tr>
                            <td><a class="chkPledge" id="chkPledge_alternativefuel_vehicle" style="display: block;"
                                href="javascript:takeaction_pledge('alternativefuel_vehicle');">
                                <table align="center" class="trg" border="0" cellpadding="0" cellspacing="0">
                                  <tbody>
                                    <tr>
                                      <td class="chkPledge" style="height: 30px;"> Pledge </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </a></td>
                            <td><a class="trigger" style="display: block;" href="javascript:;">
                                <table class="trg" border="0" cellpadding="0" cellspacing="0" style="height: 30px;">
                                  <tbody>
                                    <tr>
                                      <td class="pledgeText" style="width: 315px;">Buy an Alternative Fuel Vehicle</td>
                                      <!--
                        <td style="width: 50px; text-align: left;"><img src="images/categories/transportation32.png" style="width: 23px; height: 23px;"/></td>
                        -->

                                      <td style="width: 105px; text-align: center;"><span class="takeaction_pounds" id="takeaction_pounds_alternativefuel_vehicle"
                                          style="color: #415683"></span></td>
                                      <td style="width: 105px; text-align: center;">$<span class="takeaction_dollars"
                                          id="takeaction_dollars_alternativefuel_vehicle"></span></td>
                                      <td style="width: 105px; text-align: center;">$<span class="takeaction_net10yr"
                                          id="takeaction_net10yr_alternativefuel_vehicle"></span></td>
                                    </tr>
                                  </tbody>
                                </table>
                              </a></td>
                          </tr>
                        </tbody>
                      </table>
                    </h>
                    <div style="position: relative" class="inner">
                      <div style="position: relative; ">
                        <div id="takeaction_greenglow_alternativefuel_vehicle" style="position: absolute; top: 0; left: 0; height: 100%; width: 100%; z-index: 0; box-shadow:inset 0px 0px 30px rgba(196,255,155,1); display: none;"></div>
                        <div class="pledge_container" style="font-size:12px; padding: 10px; position: relative; z-index: 10;">
                          <img src="images/pledges/LGDST/altfuel.png" alt="Alternative Fuel Vehicle" align="right"
                            vspace="5" hspace="10" />
                          I will trade in
                          <select id="input_takeaction_alternativefuel_vehicle_select" align="absmiddle">
                            <option value="1" selected="selected">Vehicle 1</option>
                            <option value="2">Vehicle 2</option>
                            <option value="3">Vehicle 3</option>
                          </select>
                          which gets <span id="display_takeaction_alternativefuel_vehicle_mpg_old">0</span>
                          miles per gallon and buy a more efficient alternative fuel vehicle that gets
                          <input type="text" id="input_takeaction_alternativefuel_vehicle_mpg_new" size="2" maxlength="2" />
                          miles per gallon. <p>I will drive this vehicle
                            <input type="text" id="input_takeaction_alternativefuel_vehicle_miles_new" size="5"
                              maxlength="6" />
                            miles per year. Alternative fuel will cost $<input type="text" id="input_takeaction_alternativefuel_vehicle_new_fuel_cost"
                              size="4" maxlength="4" />/gal.

                          </p> I can sell my current vehicle for $
                          <input type="text" id="input_takeaction_alternativefuel_vehicle_sell" size="8" maxlength="5" />
                          and purchase a new one for $
                          <input type="text" id="input_takeaction_alternativefuel_vehicle_purchase" size="8" maxlength="6" />
                          <div class="funfact">Americans are choosing greener vehicles--the average fuel efficiency of
                            cars on the road in the U.S. has gone up steadily for the past 10 years. Don't get left
                            behind in a gas guzzler! </div>
                          <div>
                            <a target="_blank" style="text-decoration: none; color:blue;" onMouseOver="this.style.color='black'"
                              onMouseOut="this.style.color='blue'" href="http://www.coolcalifornia.org/funding-wizard#search/home+electricity//false/none/false/1/12">Find
                              rebates and incentives for this action</a>
                            <img src="images/funding-wizard-icon.png" style="position: absolute; width:35px; padding-left: 5px;">
                          </div>

                          <div class="assumption_button">
                            <a href="javascript:;" class="assumptionShowHideLink">[<span class="takeaction_assumption_plusminus">+</span>]
                              assumptions</a>
                          </div>
                          <div class="assumption_content">
                            <ul>
                              <li>Price of gasoline: $ <span class="pledge_assumption_price_of_gasoline">0</span> per
                                gallon <img src="images/carb_question_mark.png" alt="" border="0" title="Click the Assumptions button above to change the price of gas."
                                  class="tTip tTipHandle" /> </li>
                              <li>Well-to-pump emissions: 20% of fossil fuel emissions. This includes emissions from
                                the fuel used to find, extract, transport and refine crude oil into gasoline </li>
                              <li>Greenhouse gas emissions from vehicles manufacturing: 53 grams CO2e per mile (8
                                metric tons per vehicle / 150,000 miles lifespan)</li>
                              <li>Alternative fuel: CNG</li>
                              <li>A number of rebates are available for alternative fuel vehicles from state, federal
                                and local agencies. We assume $2,000 rebate per vehicle is available at the time of
                                purchase</li>
                              <li>Not included: emissions from road construction and maintenance, and other
                                government-related emissions</li>
                            </ul>
                          </div>

                          <input type="hidden" id="input_takeaction_alternativefuel_vehicle_mpg_old" />
                          <input type="hidden" id="input_takeaction_alternativefuel_vehicle_miles_old" />
                        </div>
                        <div class="takeaction_category" style="display: none;">1</div>
                      </div>
                    </div>
                  </div>
                  <div class="new takeaction_section_transportation">
                    <h>
                      <table style="margin-top: 5px;" border="0" cellpadding="0" cellspacing="0">
                        <tbody>
                          <tr>
                            <td><a class="chkPledge" id="chkPledge_electric_vehicle" style="display: block;" href="javascript:takeaction_pledge('electric_vehicle');">
                                <table align="center" class="trg" border="0" cellpadding="0" cellspacing="0">
                                  <tbody>
                                    <tr>
                                      <td class="chkPledge" style="height: 30px;"> Pledge </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </a></td>
                            <td><a class="trigger" style="display: block;" href="javascript:;">
                                <table class="trg" border="0" cellpadding="0" cellspacing="0" style="height: 30px;">
                                  <tbody>
                                    <tr>
                                      <td class="pledgeText" style="width: 315px;">Buy an Electric Vehicle</td>
                                      <!--
                        <td style="width: 50px; text-align: left;"><img src="images/categories/transportation32.png" style="width: 23px; height: 23px;"/></td>
                        -->

                                      <td style="width: 105px; text-align: center;"><span class="takeaction_pounds" id="takeaction_pounds_electric_vehicle"
                                          style="color: #415683"></span></td>
                                      <td style="width: 105px; text-align: center;">$<span class="takeaction_dollars"
                                          id="takeaction_dollars_electric_vehicle"></span></td>
                                      <td style="width: 105px; text-align: center;">$<span class="takeaction_net10yr"
                                          id="takeaction_net10yr_electric_vehicle"></span></td>
                                    </tr>
                                  </tbody>
                                </table>
                              </a></td>
                          </tr>
                        </tbody>
                      </table>
                    </h>
                    <div style="position: relative" class="inner">
                      <div style="position: relative; ">
                        <div id="takeaction_greenglow_electric_vehicle" style="position: absolute; top: 0; left: 0; height: 100%; width: 100%; z-index: 0; box-shadow:inset 0px 0px 30px rgba(196,255,155,1); display: none;"></div>
                        <div class="pledge_container" style="font-size:12px; padding: 10px; position: relative; z-index: 10;">
                          <img src="images/pledges/LGDST/ev.png" alt="Electric Vehicle" align="right" vspace="5" hspace="10" />
                          I will trade in
                          <select id="input_takeaction_electric_vehicle_select" align="absmiddle">
                            <option value="1" selected="selected">Vehicle 1</option>
                            <option value="2">Vehicle 2</option>
                            <option value="3">Vehicle 3</option>
                          </select>
                          which gets <span id="display_takeaction_electric_vehicle_mpg_old">0</span>
                          miles per gallon and buy a more efficient electric vehicle that gets
                          <input type="text" id="input_takeaction_electric_vehicle_mpg_new" size="2" maxlength="2" />
                          miles per gallon. <p>I will drive this vehicle
                            <input type="text" id="input_takeaction_electric_vehicle_miles_new" size="5" maxlength="6" />
                            miles per year.

                          </p> I can sell my current vehicle for $
                          <input type="text" id="input_takeaction_electric_vehicle_sell" size="8" maxlength="5" />
                          and purchase a new one for $
                          <input type="text" id="input_takeaction_electric_vehicle_purchase" size="8" maxlength="6" />
                          <div class="funfact">Americans are choosing greener vehicles--the average fuel efficiency of
                            cars on the road in the U.S. has gone up steadily for the past 10 years. Don't get left
                            behind in a gas guzzler! </div>
                          <div>
                            <a target="_blank" style="text-decoration: none; color:blue;" onMouseOver="this.style.color='black'"
                              onMouseOut="this.style.color='blue'" href="http://www.coolcalifornia.org/funding-wizard#search/home+electricity//false/none/false/1/12">Find
                              rebates and incentives for this action</a>
                            <img src="images/funding-wizard-icon.png" style="position: absolute; width:35px; padding-left: 5px;">
                          </div>
                          <div class="assumption_button">
                            <a href="javascript:;" class="assumptionShowHideLink">[<span class="takeaction_assumption_plusminus">+</span>]
                              assumptions</a>
                          </div>
                          <div class="assumption_content">
                            <ul>
                              <li>Price of gasoline: $ <span class="pledge_assumption_price_of_gasoline">0</span> per
                                gallon <img src="images/carb_question_mark.png" alt="" border="0" title="Click the Assumptions button above to change the price of gas."
                                  class="tTip tTipHandle" /> </li>
                              <li>Greenhouse gas emissions from vehicles manufacturing: 53 grams CO2e per mile (8
                                metric tons per vehicle / 150,000 miles lifespan)</li>
                              <li>Price of electricity: <span class="kwhprice">0</span> (cents/kWh) <img src="images/carb_question_mark.png"
                                  border="0" title="Click the Assumptions button above to change the price of electricity."
                                  class="tTip tTipHandle" /> </li>
                              <li>A number of rebates are available for alternative fuel vehicles from state, federal
                                and local agencies. We assume $2,000 rebate per vehicle is available at the time of
                                purchase</li>
                              <li>Not included: emissions from road construction and maintenance, and other
                                government-related emissions</li>
                            </ul>
                          </div>

                          <input type="hidden" id="input_takeaction_electric_vehicle_mpg_old" />
                          <input type="hidden" id="input_takeaction_electric_vehicle_miles_old" />
                        </div>
                        <div class="takeaction_category" style="display: none;">2</div>
                      </div>
                    </div>
                  </div>
                  <div class="new takeaction_section_transportation">
                    <h>
                      <table style="margin-top: 5px;" border="0" cellpadding="0" cellspacing="0">
                        <tbody>
                          <tr>
                            <td><a class="chkPledge" id="chkPledge_hybrid_vehicle" style="display: block;" href="javascript:takeaction_pledge('hybrid_vehicle');">
                                <table align="center" class="trg" border="0" cellpadding="0" cellspacing="0">
                                  <tbody>
                                    <tr>
                                      <td class="chkPledge" style="height: 30px;"> Pledge </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </a></td>
                            <td><a class="trigger" style="display: block;" href="javascript:;">
                                <table class="trg" border="0" cellpadding="0" cellspacing="0" style="height: 30px;">
                                  <tbody>
                                    <tr>
                                      <td class="pledgeText" style="width: 315px;">Buy a Hybrid Vehicle</td>
                                      <!--
                        <td style="width: 50px; text-align: left;"><img src="images/categories/transportation32.png" style="width: 23px; height: 23px;"/></td>
                        -->

                                      <td style="width: 105px; text-align: center;"><span class="takeaction_pounds" id="takeaction_pounds_hybrid_vehicle"
                                          style="color: #415683"></span></td>
                                      <td style="width: 105px; text-align: center;">$<span class="takeaction_dollars"
                                          id="takeaction_dollars_hybrid_vehicle"></span></td>
                                      <td style="width: 105px; text-align: center;">$<span class="takeaction_net10yr"
                                          id="takeaction_net10yr_hybrid_vehicle"></span></td>
                                    </tr>
                                  </tbody>
                                </table>
                              </a></td>
                          </tr>
                        </tbody>
                      </table>
                    </h>
                    <div style="position: relative" class="inner">
                      <div style="position: relative; ">
                        <div id="takeaction_greenglow_hybrid_vehicle" style="position: absolute; top: 0; left: 0; height: 100%; width: 100%; z-index: 0; box-shadow:inset 0px 0px 30px rgba(196,255,155,1); display: none;"></div>
                        <div class="pledge_container" style="font-size:12px; padding: 10px; position: relative; z-index: 10;">
                          <img src="images/pledges/LGDST/hv.png" alt="Hybrid Vehicle" align="right" vspace="5" hspace="10" />
                          I will trade in
                          <select id="input_takeaction_hybrid_vehicle_select" align="absmiddle">
                            <option value="1" selected="selected">Vehicle 1</option>
                            <option value="2">Vehicle 2</option>
                            <option value="3">Vehicle 3</option>
                          </select>
                          which gets <span id="display_takeaction_hybrid_vehicle_mpg_old">0</span>
                          miles per gallon and buy a more efficient electric vehicle that gets
                          <input type="text" id="input_takeaction_hybrid_vehicle_mpg_new" size="2" maxlength="2" />
                          miles per gallon. <p>I will drive this vehicle
                            <input type="text" id="input_takeaction_hybrid_vehicle_miles_new" size="5" maxlength="6" />
                            miles per year.

                          </p> I can sell my current vehicle for $
                          <input type="text" id="input_takeaction_hybrid_vehicle_sell" size="8" maxlength="5" />
                          and purchase a new one for $
                          <input type="text" id="input_takeaction_hybrid_vehicle_purchase" size="8" maxlength="6" />

                          <div class="funfact">Americans are choosing greener vehicles--the average fuel efficiency of
                            cars on the road in the U.S. has gone up steadily for the past 10 years. Don't get left
                            behind in a gas guzzler! </div>
                          <div>
                            <a target="_blank" style="text-decoration: none; color:blue;" onMouseOver="this.style.color='black'"
                              onMouseOut="this.style.color='blue'" href="http://www.coolcalifornia.org/funding-wizard#search/home+electricity//false/none/false/1/12">Find
                              rebates and incentives for this action</a>
                            <img src="images/funding-wizard-icon.png" style="position: absolute; width:35px; padding-left: 5px;">
                          </div>
                          <div class="assumption_button">
                            <a href="javascript:;" class="assumptionShowHideLink">[<span class="takeaction_assumption_plusminus">+</span>]
                              assumptions</a>
                          </div>
                          <div class="assumption_content">
                            <ul>
                              <li>Price of gasoline: $ <span class="pledge_assumption_price_of_gasoline">0</span> per
                                gallon <img src="images/carb_question_mark.png" alt="" border="0" title="Click the Assumptions button above to change the price of gas."
                                  class="tTip tTipHandle" /> </li>
                              <li>Well-to-pump emissions: 20% of fossil fuel emissions. This includes emissions from
                                the fuel used to find, extract, transport and refine crude oil into gasoline</li>
                              <li>Greenhouse gas emissions from vehicles manufacturing: 53 grams CO2e per mile (8
                                metric tons per vehicle / 150,000 miles lifespan)</li>
                              <li>Price of electricity: <span class="kwhprice">0</span> (cents/kWh) <img src="images/carb_question_mark.png"
                                  border="0" title="Click the Assumptions button above to change the price of electricity."
                                  class="tTip tTipHandle" /> </li>
                              <li>A number of rebates are available for alternative fuel vehicles from state, federal
                                and local agencies. We assume $2,000 rebate per vehicle is available at the time of
                                purchase</li>
                              <li>Not included: emissions from road construction and maintenance, and other
                                government-related emissions</li>
                            </ul>
                          </div>

                          <input type="hidden" id="input_takeaction_hybrid_vehicle_mpg_old" />
                          <input type="hidden" id="input_takeaction_hybrid_vehicle_miles_old" />
                        </div>
                        <div class="takeaction_category" style="display: none;">3</div>
                      </div>
                    </div>
                  </div>
                  <div class="new takeaction_section_transportation">
                    <h>
                      <table style="margin-top: 5px;" border="0" cellpadding="0" cellspacing="0">
                        <tbody>
                          <tr>
                            <td><a class="chkPledge" id="chkPledge_telecommute_to_work" style="display: block;" href="javascript:takeaction_pledge('telecommute_to_work');">
                                <table align="center" class="trg" border="0" cellpadding="0" cellspacing="0">
                                  <tbody>
                                    <tr>
                                      <td class="chkPledge" style="height: 30px;"> Pledge </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </a></td>
                            <td><a class="trigger" style="display: block;" href="javascript:;">
                                <table class="trg" border="0" cellpadding="0" cellspacing="0" style="height: 30px;">
                                  <tbody>
                                    <tr>
                                      <td class="pledgeText" style="width: 315px;">Telecommute to Work</td>
                                      <!--
                        <td style="width: 50px; text-align: left;"><img src="images/categories/transportation32.png" style="width: 23px; height: 23px;"/></td>
                        -->

                                      <td style="width: 105px; text-align: center;"><span class="takeaction_pounds" id="takeaction_pounds_telecommute_to_work"
                                          style="color: #415683"></span></td>
                                      <td style="width: 105px; text-align: center;">$<span class="takeaction_dollars"
                                          id="takeaction_dollars_telecommute_to_work"></span></td>
                                      <td style="width: 105px; text-align: center;">$<span class="takeaction_net10yr"
                                          id="takeaction_net10yr_telecommute_to_work"></span></td>
                                    </tr>
                                  </tbody>
                                </table>
                              </a></td>
                          </tr>
                        </tbody>
                      </table>
                    </h>
                    <div style="position: relative" class="inner">
                      <div style="position: relative; ">
                        <div id="takeaction_greenglow_telecommute_to_work" style="position: absolute; top: 0; left: 0; height: 100%; width: 100%; z-index: 0; box-shadow:inset 0px 0px 30px rgba(196,255,155,1); display: none;"></div>
                        <div class="pledge_container" style="font-size:12px; padding: 10px; position: relative; z-index: 10;">
                          <img src="images/pledges/icon2.png" alt="" align="right" vspace="5" hspace="10" />
                          <p>I will telecommute to work
                            <select id="input_takeaction_telecommute_to_work_days">
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                              <option value="6">6</option>
                              <option value="7">7</option>
                              <option value="8">8</option>
                              <option value="9">9</option>
                              <option value="10">10</option>
                            </select>
                            day(s) per month instead of driving
                            <select id="input_takeaction_telecommute_to_work_vehicle_select" align="absmiddle">
                              <option value="1" selected="selected">Vehicle 1</option>
                              <option value="2">Vehicle 2</option>
                              <option value="3">Vehicle 3</option>
                            </select>
                            which gets <span id="display_takeaction_telecommute_to_work_mpg">0</span> miles per gallon.
                          </p>
                          <p>The one-way distance to work is
                            <input id="input_takeaction_telecommute_to_work_miles" type="text" size="3" maxlength="3" />
                            miles. I will avoid paying $
                            <input type="text" id="input_takeaction_telecommute_to_work_parking" size="3" maxlength="3" />
                            each month for parking. </p>
                          <p>I will save
                            <input type="text" id="input_takeaction_telecommute_to_work_times" size="3" maxlength="3" />
                            hours a month by staying home. My travel-free time is worth $
                            <input type="text" id="input_takeaction_telecommute_to_work_worth" size="3" maxlength="2" />
                            per hour to me.<img src="images/carb_question_mark.png" border="0" title="The value you would be willing to pay per hour to avoid commuting to work."
                              class="tTip tTipHandle" /></p>
                          <div class="funfact">Not every job is suited for telecommuting, but if you can work from home
                            the environmental and quality-of-life perks are quite compelling! </div>
                          <div>
                            <a target="_blank" style="text-decoration: none; color:blue;" onMouseOver="this.style.color='black'"
                              onMouseOut="this.style.color='blue'" href="http://www.coolcalifornia.org/funding-wizard#search/water+heater//false/none/false/1/12">Find
                              rebates and incentives for this action</a>
                            <img src="images/funding-wizard-icon.png" style="position: absolute; width:35px; padding-left: 5px;">
                          </div>
                          <div class="assumption_button">
                            <a href="javascript:;" class="assumptionShowHideLink">[<span class="takeaction_assumption_plusminus">+</span>]
                              assumptions</a>
                          </div>
                          <div class="assumption_content">
                            <ul>
                              <li>Price of gasoline: $<span span class="pledge_assumption_price_of_gasoline">0</span>
                                per gallon <img src="images/carb_question_mark.png" border="0" title="Click the Assumptions button above to change the price of gas."
                                  class="tTip tTipHandle" /></li>
                            </ul>
                          </div>

                          <input type="hidden" id="input_takeaction_telecommute_to_work_mpg" />
                        </div>
                        <div class="takeaction_category" style="display: none;">4</div>
                      </div>
                    </div>
                  </div>
                  <div class="new takeaction_section_transportation">
                    <h>
                      <table style="margin-top: 5px;" border="0" cellpadding="0" cellspacing="0">
                        <tbody>
                          <tr>
                            <td><a class="chkPledge" id="chkPledge_ride_my_bike" style="display: block;" href="javascript:takeaction_pledge('ride_my_bike');">
                                <table align="center" class="trg" border="0" cellpadding="0" cellspacing="0">
                                  <tbody>
                                    <tr>
                                      <td class="chkPledge" style="height: 30px;"> Pledge </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </a></td>
                            <td><a class="trigger" style="display: block;" href="javascript:;">
                                <table class="trg" border="0" cellpadding="0" cellspacing="0" style="height: 30px;">
                                  <tbody>
                                    <tr>
                                      <td class="pledgeText" style="width: 315px;">Ride my Bike</td>
                                      <!--
                        <td style="width: 50px; text-align: left;"><img src="images/categories/transportation32.png" style="width: 23px; height: 23px;"/></td>
                        -->

                                      <td style="width: 105px; text-align: center;"><span class="takeaction_pounds" id="takeaction_pounds_ride_my_bike"
                                          style="color: #415683"></span></td>
                                      <td style="width: 105px; text-align: center;">$<span class="takeaction_dollars"
                                          id="takeaction_dollars_ride_my_bike"></span></td>
                                      <td style="width: 105px; text-align: center;">$<span class="takeaction_net10yr"
                                          id="takeaction_net10yr_ride_my_bike"></span></td>
                                    </tr>
                                  </tbody>
                                </table>
                              </a></td>
                          </tr>
                        </tbody>
                      </table>
                    </h>
                    <div style="position: relative" class="inner">
                      <div style="position: relative; ">
                        <div id="takeaction_greenglow_ride_my_bike" style="position: absolute; top: 0; left: 0; height: 100%; width: 100%; z-index: 0; box-shadow:inset 0px 0px 30px rgba(196,255,155,1); display: none;"></div>
                        <div class="pledge_container" style="font-size:12px; padding: 10px; position: relative; z-index: 10;">
                          <img src="images/pledges/icon3.png" alt="" align="right" vspace="5" hspace="10" /> <span>I
                            will ride my bike
                            <input type="text" id="input_takeaction_ride_my_bike_miles" size="3" maxlength="3" />
                            miles per week instead of driving
                            <select id="input_takeaction_ride_my_bike_vehicle_select" align="absmiddle">
                              <option value="1" selected="selected">Vehicle 1</option>
                              <option value="2">Vehicle 2</option>
                              <option value="3">Vehicle 3</option>
                            </select>
                            which gets <span id="display_takeaction_ride_my_bike_mpg">0</span> miles per gallon. </span>
                          <div class="funfact"> Your bicycle can make you a lean, green clean-moving machine! Free
                            tools like google maps have bike-friendly directions to get you going as an exemplary
                            neighborhood cyclist. </div>
                          <div>
                            <a target="_blank" style="text-decoration: none; color:blue;" onMouseOver="this.style.color='black'"
                              onMouseOut="this.style.color='blue'" href="http://www.coolcalifornia.org/funding-wizard#search//%255BZipcode%253D%253D94720%255D%255BCategory%253D%253DTransportation%255D%255BEligible+Applicants%253D%253DIndividual%255D/false/none/false/1/12">Find
                              rebates and incentives for this action</a>
                            <img src="images/funding-wizard-icon.png" style="position: absolute; width:35px; padding-left: 5px;">
                          </div>
                          <div style="padding:0px; overflow: auto;"><span> </span>
                            <div class="assumption_button">
                              <a href="javascript:;" class="assumptionShowHideLink">[<span class="takeaction_assumption_plusminus">+</span>]
                                assumptions</a>
                            </div>
                            <div class="assumption_content">
                              <div>
                                <ul>
                                  <li>Price of gasoline:$<span class="pledge_assumption_price_of_gasoline">0</span> per
                                    gallon <img src="images/carb_question_mark.png" border="0" title="Click the Assumptions button above to change the price of gas."
                                      class="tTip tTipHandle" /> </li>
                                  <li>You currently consume about <span id="result_takeaction_ride_my_bike_totalcalories">0</span>
                                    calories
                                    per day with a corresponding carbon footprint of about <span id="result_takeaction_ride_my_bike_ghgper100cal">0</span>
                                    grams of CO2e per
                                    100 calories </li>
                                  <li> Riding your bicycle <span id="display_takeaction_ride_my_bike_miles">0</span>
                                    miles per week therefore produces
                                    about <span id="result_takeaction_ride_my_bike_bikeghgs">0</span> mtCO2e/yr </li>
                                  <li>Driving your vehicle the same distance produces <span id="result_takeaction_ride_my_bike_driveghgs">0</span>
                                    mtCO2e/yr </li>
                                </ul>
                                <p>Growing, processing and distributing food
                                  produces greenhouse gases. The average
                                  American consumes about about 300 - 500 unnecessary calories per day, and riding a
                                  bicycle burns about 400
                                  calories per hour, so most people could ride a
                                  bicycle for about one hour per day without increasing calorie intake. However, if you
                                  do not take in surplus calories and would need to eat more to fuel bicycle riding,
                                  then
                                  select Include emissions from food. </p>
                                <p>
                                  <select id="input_takeaction_ride_my_bike_include_foodemissions" align="absmiddle">
                                    <option value="1">Include emissions from food</option>
                                    <option value="0">Don&quot;t include emissions from food</option>
                                  </select>
                                  . </p>
                              </div>
                            </div>
                          </div>

                          <input type="hidden" id="input_takeaction_ride_my_bike_mpg" />
                        </div>
                        <div class="takeaction_category" style="display: none;">5</div>
                      </div>
                    </div>
                  </div>
                  <div class="new takeaction_section_transportation">
                    <h>
                      <table style="margin-top: 5px;" border="0" cellpadding="0" cellspacing="0">
                        <tbody>
                          <tr>
                            <td><a class="chkPledge" id="chkPledge_take_public_transportation" style="display: block;"
                                href="javascript:takeaction_pledge('take_public_transportation');">
                                <table align="center" class="trg" border="0" cellpadding="0" cellspacing="0">
                                  <tbody>
                                    <tr>
                                      <td class="chkPledge" style="height: 30px;"> Pledge </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </a></td>
                            <td><a class="trigger" style="display: block;" href="javascript:;">
                                <table class="trg" border="0" cellpadding="0" cellspacing="0" style="height: 30px;">
                                  <tbody>
                                    <tr>
                                      <td class="pledgeText" style="width: 315px;">Take Public Transportation</td>
                                      <!--
                        <td style="width: 50px; text-align: left;"><img src="images/categories/transportation32.png" style="width: 23px; height: 23px;"/></td>
                        -->

                                      <td style="width: 105px; text-align: center;"><span class="takeaction_pounds" id="takeaction_pounds_take_public_transportation"
                                          style="color: #415683"></span></td>
                                      <td style="width: 105px; text-align: center;">$<span class="takeaction_dollars"
                                          id="takeaction_dollars_take_public_transportation"></span></td>
                                      <td style="width: 105px; text-align: center;">$<span class="takeaction_net10yr"
                                          id="takeaction_net10yr_take_public_transportation"></span></td>
                                    </tr>
                                  </tbody>
                                </table>
                              </a></td>
                          </tr>
                        </tbody>
                      </table>
                    </h>
                    <div style="position: relative" class="inner">
                      <div style="position: relative; ">
                        <div id="takeaction_greenglow_take_public_transportation" style="position: absolute; top: 0; left: 0; height: 100%; width: 100%; z-index: 0; box-shadow:inset 0px 0px 30px rgba(196,255,155,1); display: none;"></div>
                        <div class="pledge_container" style="font-size:12px; padding: 10px; position: relative; z-index: 10;">
                          <img src="images/pledges/icon4.png" alt="" align="right" vspace="5" hspace="10" /> <span>I
                            will take
                            <select id="input_takeaction_take_public_transportation_type">
                              <option value="0">a diesel bus</option>
                              <option value="1">a natural gas bus</option>
                              <option value="2">transit rail</option>
                              <option value="3">Amtrak</option>
                            </select>
                            <input type="text" id="input_takeaction_take_public_transportation_miles" size="3"
                              maxlength="3" />
                            miles per week instead of driving
                            <select id="input_takeaction_take_public_transportation_vehicle_select" align="absmiddle">
                              <option value="1">Vehicle 1</option>
                              <option value="2">Vehicle 2</option>
                              <option value="3">Vehicle 3</option>
                            </select>
                            which gets <span id="display_takeaction_take_public_transportation_mpg"> 0 </span> miles
                            per gallon.
                            I will save $
                            <input type="text" id="input_takeaction_take_public_transportation_parking" size="3"
                              maxlength="3" />
                            on parking and spend $
                            <input type="text" id="input_takeaction_take_public_transportation_ptfare" size="3"
                              maxlength="3" />
                            per week on public transportation.
                            <div class="funfact"> Riding transit frees you from the stress of navigating traffic and
                              provides time for work, catching up on the news or finally getting around to that book
                              you've been meaning to read.</div>
                            <div>
                              <a target="_blank" style="text-decoration: none; color:blue;" onMouseOver="this.style.color='black'"
                                onMouseOut="this.style.color='blue'" href="http://www.coolcalifornia.org/funding-wizard#search//%255BZipcode%253D%253D94720%255D%255BCategory%253D%253DTransportation%255D%255BEligible+Applicants%253D%253DIndividual%255D/false/none/false/1/12">Find
                                rebates and incentives for this action</a>
                              <img src="images/funding-wizard-icon.png" style="position: absolute; width:35px; padding-left: 5px;">
                            </div>
                            <div class="assumption_button">
                              <a href="javascript:;" class="assumptionShowHideLink">[<span class="takeaction_assumption_plusminus">+</span>]
                                assumptions</a>
                            </div>
                            <div class="assumption_content">
                              <div>
                                <ul>
                                  <li> Price of gasoline: $<span class="pledge_assumption_price_of_gasoline">0</span>
                                    per gallon <img src="images/carb_question_mark.png" border="0" title="Click the Assumptions button above to change the price of gas."
                                      class="tTip tTipHandle" /> </li>
                                </ul>
                                <ul>
                                  <li>Carbon intensity of different transit options (gCO2e/passenger mile):</li>
                                  <ul>
                                    <li> Diesel bus
                                      <input id="input_takeaction_take_public_transportation_gco2bus" type="text" size="3"
                                        maxlength="3" />
                                      , average occupancy of bus is 11 passengers </li>
                                    <li> Natural gas bus
                                      <input id="input_takeaction_take_public_transportation_gco2ngbus" type="text"
                                        size="3" maxlength="3" />
                                      , average occupancy is 11 passengers</li>
                                    <li> Electric transit rail
                                      <input id="input_takeaction_take_public_transportation_gco2transit" type="text"
                                        size="3" maxlength="3" />
                                      , average occupancy is 37 passengers per rail car </li>
                                    <li> Amtrak
                                      <input id="input_takeaction_take_public_transportation_gco2amtrak" type="text"
                                        size="3" maxlength="3" />
                                      , average occupancy is 23 passengers per rail car</li>
                                  </ul>
                                </ul>
                              </div>
                            </div>

                            <input type="hidden" id="input_takeaction_take_public_transportation_mpg" /> </div>
                        <div class="takeaction_category" style="display: none;">6</div>
                      </div>
                    </div>
                  </div>
                  <div class="new takeaction_section_transportation">
                    <h>
                      <table style="margin-top: 5px;" border="0" cellpadding="0" cellspacing="0">
                        <tbody>
                          <tr>
                            <td><a class="chkPledge" id="chkPledge_practice_eco_driving" style="display: block;" href="javascript:takeaction_pledge('practice_eco_driving');">
                                <table align="center" class="trg" border="0" cellpadding="0" cellspacing="0">
                                  <tbody>
                                    <tr>
                                      <td class="chkPledge" style="height: 30px;"> Pledge </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </a></td>
                            <td><a class="trigger" style="display: block;" href="javascript:;">
                                <table class="trg" border="0" cellpadding="0" cellspacing="0" style="height: 30px;">
                                  <tbody>
                                    <tr>
                                      <td class="pledgeText" style="width: 315px;">Practice Eco-Driving</td>
                                      <!--
                        <td style="width: 50px; text-align: left;"><img src="images/categories/transportation32.png" style="width: 23px; height: 23px;"/></td>
                        -->

                                      <td style="width: 105px; text-align: center;"><span class="takeaction_pounds" id="takeaction_pounds_practice_eco_driving"
                                          style="color: #415683"></span></td>
                                      <td style="width: 105px; text-align: center;">$<span class="takeaction_dollars"
                                          id="takeaction_dollars_practice_eco_driving"></span></td>
                                      <td style="width: 105px; text-align: center;">$<span class="takeaction_net10yr"
                                          id="takeaction_net10yr_practice_eco_driving"></span></td>
                                    </tr>
                                  </tbody>
                                </table>
                              </a></td>
                          </tr>
                        </tbody>
                      </table>
                    </h>
                    <div style="position: relative" class="inner">
                      <div style="position: relative; ">
                        <div id="takeaction_greenglow_practice_eco_driving" style="position: absolute; top: 0; left: 0; height: 100%; width: 100%; z-index: 0; box-shadow:inset 0px 0px 30px rgba(196,255,155,1); display: none;"></div>
                        <div class="pledge_container" style="font-size:12px; padding: 10px; position: relative; z-index: 10;">
                          <img src="images/pledges/icon5.png" alt="" align="right" vspace="5" hspace="10" /><span>I
                            currently drive a total of <span id="result_takeaction_practice_eco_driving_dispmiles"> 0
                            </span> miles per year, of which
                            <input name="hwpercent" type="text" id="input_takeaction_practice_eco_driving_hwpercent"
                              size="2" maxlength="2" />
                            % are highway miles.
                            The average fuel economy of my vehicles is <span id="result_takeaction_practice_eco_driving_mpg">
                              0 </span> miles per gallon.
                            Reducing my top cruising highway speed from
                            <input name="topspeed" type="text" id="input_takeaction_practice_eco_driving_topspeed" size="2"
                              maxlength="2" />
                            mph to
                            <input name="lowerspeed" type="text" id="input_takeaction_practice_eco_driving_lowerspeed"
                              size="2" maxlength="2" />
                            mph will improve my fuel
                            economy by 1% per mph reduction over 60 mph. Reducing all rapid acceleration and braking
                            can improve non-highway fuel economy by 3%.
                            Together these actions will improve my fuel economy to <span class="newmpg" id="result_takeaction_practice_eco_driving_newmpg">
                              0 </span> miles per gallon,
                            saving <span class="galsaved" id="result_takeaction_practice_eco_driving_galsaved"> 0
                            </span> gallons per year.
                          </span>
                          <div class="funfact"> Most car engines get less and less efficient as speeds increase. Smart
                            speed management levels off emissions on the freeway and helps prevent ticket troubles.
                          </div>
                          <div>
                            <a target="_blank" style="text-decoration: none; color:blue;" onMouseOver="this.style.color='black'"
                              onMouseOut="this.style.color='blue'" href="http://www.coolcalifornia.org/funding-wizard#search//%255BZipcode%253D%253D94720%255D%255BCategory%253D%253DTransportation%255D%255BEligible+Applicants%253D%253DIndividual%255D/false/none/false/1/12">Find
                              rebates and incentives for this action</a>
                            <img src="images/funding-wizard-icon.png" style="position: absolute; width:35px; padding-left: 5px;">
                          </div>
                          <div class="assumption_button">
                            <a href="javascript:;" class="assumptionShowHideLink">[<span class="takeaction_assumption_plusminus">+</span>]
                              assumptions</a>
                          </div>
                          <div class="assumption_content">
                            <div>
                              <ul>
                                <li>Price of gasoline:
                                  $<span class="pledge_assumption_price_of_gasoline">0</span> per gallon <img src="images/carb_question_mark.png"
                                    border="0" title="Click the Assumptions button above to change the price of gas."
                                    class="tTip tTipHandle" /></li>
                                <li> Average top cruising speed represents
                                  <input type="text" id="input_takeaction_practice_eco_driving_topspercent" size="2"
                                    maxlength="2" />
                                  % of highway miles </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="takeaction_category" style="display: none;">7</div>
                      </div>
                    </div>
                  </div>
                  <div class="new takeaction_section_transportation">
                    <h>
                      <table style="margin-top: 5px;" border="0" cellpadding="0" cellspacing="0">
                        <tbody>
                          <tr>
                            <td><a class="chkPledge" id="chkPledge_maintain_my_vehicles" style="display: block;" href="javascript:takeaction_pledge('maintain_my_vehicles');">
                                <table align="center" class="trg" border="0" cellpadding="0" cellspacing="0">
                                  <tbody>
                                    <tr>
                                      <td class="chkPledge" style="height: 30px;"> Pledge </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </a></td>
                            <td><a class="trigger" style="display: block;" href="javascript:;">
                                <table class="trg" border="0" cellpadding="0" cellspacing="0" style="height: 30px;">
                                  <tbody>
                                    <tr>
                                      <td class="pledgeText" style="width: 315px;">Maintain My Vehicles</td>
                                      <!--
                        <td style="width: 50px; text-align: left;"><img src="images/categories/transportation32.png" style="width: 23px; height: 23px;"/></td>
                        -->

                                      <td style="width: 105px; text-align: center;"><span class="takeaction_pounds" id="takeaction_pounds_maintain_my_vehicles"
                                          style="color: #415683"></span></td>
                                      <td style="width: 105px; text-align: center;">$<span class="takeaction_dollars"
                                          id="takeaction_dollars_maintain_my_vehicles"></span></td>
                                      <td style="width: 105px; text-align: center;">$<span class="takeaction_net10yr"
                                          id="takeaction_net10yr_maintain_my_vehicles"></span></td>
                                    </tr>
                                  </tbody>
                                </table>
                              </a></td>
                          </tr>
                        </tbody>
                      </table>
                    </h>
                    <div style="position: relative" class="inner">
                      <div style="position: relative; ">
                        <div id="takeaction_greenglow_maintain_my_vehicles" style="position: absolute; top: 0; left: 0; height: 100%; width: 100%; z-index: 0; box-shadow:inset 0px 0px 30px rgba(196,255,155,1); display: none;"></div>
                        <div class="pledge_container" style="font-size:12px; padding: 10px; position: relative; z-index: 10;">
                          <img src="images/pledges/icon6.png" alt="" align="right" vspace="5" hspace="10" />
                          I currently drive a total of <span id="result_takeaction_maintain_my_vehicles_dispmiles"> 0
                          </span> miles per year, with an average fuel economy of
                          <span id="result_takeaction_maintain_my_vehicles_mpg"> 0 </span> miles per gallon.

                          <select name="tires" id="input_takeaction_maintain_my_vehicles_tires">
                            <option value="1">I will keep my tires properly inflated</option>
                            <option value="0">I already keep my tires properly inflated</option>
                          </select>
                          <select name="airfilter" id="input_takeaction_maintain_my_vehicles_airfilter">
                            <option value="1">I will change air filters regularly</option>
                            <option value="0">I already change air filters regularly</option>
                          </select>

                          <div class="funfact">
                            Taking care of your car keeps you on the road instead of at the shop. Plus, your smoothly
                            running machine trims pounds of your carbon footprint.
                          </div>
                          <div>
                            <a target="_blank" style="text-decoration: none; color:blue;" onMouseOver="this.style.color='black'"
                              onMouseOut="this.style.color='blue'" href="http://www.coolcalifornia.org/funding-wizard#search//%255BZipcode%253D%253D94720%255D%255BCategory%253D%253DTransportation%255D%255BEligible+Applicants%253D%253DIndividual%255D/false/none/false/1/12">Find
                              rebates and incentives for this action</a>
                            <img src="images/funding-wizard-icon.png" style="position: absolute; width:35px; padding-left: 5px;">
                          </div>
                          <div class="assumption_button">
                            <a href="javascript:;" class="assumptionShowHideLink">[<span class="takeaction_assumption_plusminus">+</span>]
                              assumptions</a>
                          </div>
                          <div class="assumption_content">
                            <div>
                              <ul>
                                <li>Price of gasoline:
                                  $<span class="pledge_assumption_price_of_gasoline">0</span> per gallon
                                  <img src="images/carb_question_mark.png" border="0" title="Click the Assumptions button above to change the price of gas."
                                    class="tTip tTipHandle" /></li>
                                <li>Keeping tires inflated improves fuel efficiency by
                                  <input name="tirespercent" type="text" id="input_takeaction_maintain_my_vehicles_tirespercent"
                                    size="3" maxlength="3" /> percent</li>
                                <li>Changing air filters regularly improves fuel efficiency by <input name="filterpercent"
                                    type="text" id="input_takeaction_maintain_my_vehicles_filterpercent" size="3"
                                    maxlength="3" /> percent </li>
                                <li>Keeping tires inflated costs $<input name="tirescost" type="text" id="input_takeaction_maintain_my_vehicles_tirescost"
                                    size="2" maxlength="2" /></li>
                                <li> Changing air filters regularly costs $
                                  <input name="filtercost" type="text" id="input_takeaction_maintain_my_vehicles_filtercost"
                                    size="3" maxlength="3" /> </li>
                              </ul>
                              <!--from bizcalc-->
                            </div>
                          </div>
                        </div>
                        <div class="takeaction_category" style="display: none;">8</div>
                      </div>
                    </div>
                  </div>
                  <div class="new takeaction_section_transportation">
                    <h>
                      <table style="margin-top: 5px;" border="0" cellpadding="0" cellspacing="0">
                        <tbody>
                          <tr>
                            <td><a class="chkPledge" id="chkPledge_carpool_to_work" style="display: block;" href="javascript:takeaction_pledge('carpool_to_work');">
                                <table align="center" class="trg" border="0" cellpadding="0" cellspacing="0">
                                  <tbody>
                                    <tr>
                                      <td class="chkPledge" style="height: 30px;"> Pledge </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </a></td>
                            <td><a class="trigger" style="display: block;" href="javascript:;">
                                <table class="trg" border="0" cellpadding="0" cellspacing="0" style="height: 30px;">
                                  <tbody>
                                    <tr>
                                      <td class="pledgeText" style="width: 315px;">Carpool to Work</td>
                                      <!--
                        <td style="width: 50px; text-align: left;"><img src="images/categories/transportation32.png" style="width: 23px; height: 23px;"/></td>
                        -->

                                      <td style="width: 105px; text-align: center;"><span class="takeaction_pounds" id="takeaction_pounds_carpool_to_work"
                                          style="color: #415683"></span></td>
                                      <td style="width: 105px; text-align: center;">$<span class="takeaction_dollars"
                                          id="takeaction_dollars_carpool_to_work"></span></td>
                                      <td style="width: 105px; text-align: center;">$<span class="takeaction_net10yr"
                                          id="takeaction_net10yr_carpool_to_work"></span></td>
                                    </tr>
                                  </tbody>
                                </table>
                              </a></td>
                          </tr>
                        </tbody>
                      </table>
                    </h>
                    <div style="position: relative" class="inner">
                      <div style="position: relative; ">
                        <div id="takeaction_greenglow_carpool_to_work" style="position: absolute; top: 0; left: 0; height: 100%; width: 100%; z-index: 0; box-shadow:inset 0px 0px 30px rgba(196,255,155,1); display: none;"></div>
                        <div class="pledge_container" style="font-size:12px; padding: 10px; position: relative; z-index: 10;">

                          <img src="images/pledges/icon7.png" alt="" align="right" hspace="5" vspace="10" /> I usually
                          drive alone in a
                          <select id="input_takeaction_carpool_to_work_category">
                            <option value="0">small car</option>
                            <option value="1">medium-size car</option>
                            <option value="2">large car</option>
                            <option value="3">truck / SUV</option>
                            <option value="4">minivan</option>
                          </select>
                          that is
                          <select id="input_takeaction_carpool_to_work_depvehu">
                            <option value="0">Select age</option>
                            <option value="1">1 to 3 years old</option>
                            <option value="2">4 to 6 years old</option>
                            <option value="3">7 to 9 years old</option>
                            <option value="4">10 to 12 years old</option>
                            <option value="5">13 to 15 years old</option>
                            <option value="6">16 to 18 years old</option>
                            <option value="7">19 to 21 years old</option>
                          </select>
                          and gets
                          <input type="text" id="input_takeaction_carpool_to_work_mpgvehu" size="2" maxlength="2" />
                          mpg.
                          I pledge to carpool
                          <input type="text" id="input_takeaction_carpool_to_work_days" size="2" maxlength="2" />
                          days per
                          <select id="input_takeaction_carpool_to_work_daysper">
                            <option value="0">week</option>
                            <option value="1">month</option>
                          </select>
                          to work, which is a
                          <input type="text" id="input_takeaction_carpool_to_work_dist" size="2" maxlength="3">
                          mile trip each way.
                          I will carpool in a vehicle that gets
                          <input type="text" id="input_takeaction_carpool_to_work_mpgvehc" size="2" maxlength="2">
                          mpg
                          with a total of
                          <input type="text" id="input_takeaction_carpool_to_work_passenger" size="1" maxlength="3">
                          people (including the driver).
                          I will save $
                          <input type="text" id="input_takeaction_carpool_to_work_fees" size="1" maxlength="3">
                          per trip on parking and tolls.
                          <div class="funfact">Get in the Fast Lane! One of the major benefits of carpooling is that
                            you get access to the carpool-only lanes on the freeway. </div>
                          <div>
                            <a target="_blank" style="text-decoration: none; color:blue;" onMouseOver="this.style.color='black'"
                              onMouseOut="this.style.color='blue'" href="http://www.coolcalifornia.org/funding-wizard#search//%255BZipcode%253D%253D94720%255D%255BCategory%253D%253DTransportation%255D%255BEligible+Applicants%253D%253DIndividual%255D/false/none/false/1/12">Find
                              rebates and incentives for this action</a>
                            <img src="images/funding-wizard-icon.png" style="position: absolute; width:35px; padding-left: 5px;">
                          </div>
                          <div class="assumption_button">
                            <a href="javascript:;" class="assumptionShowHideLink">[<span class="takeaction_assumption_plusminus">+</span>]
                              assumptions</a>
                          </div>
                          <div class="assumption_content">
                            <div>
                              <!--Assumptions.-->
                              <ul>
                                <li>Pounds CO<sub>2</sub> per gallon: 19.4 </li>
                                <li>Well-to-pump emissions: 26%</li>
                                <li>Price of gas per gallon $<span class="pledge_assumption_price_of_gasoline">0</span></li>
                                <li>Depreciation per mile for vehicle driven: $ <span id="result_takeaction_carpool_to_work_dep1k">
                                  </span><img src="images/carb_question_mark.png" border="0" title="Based on type and age of vehicle, which you can set under the Transportation tab. Depreciation per mile only includes value lost from driving additional miles. It does not include depreciation from the aging of vehicles"
                                    class="tTip tTipHandle" /> </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="takeaction_category" style="display: none;">9</div>
                      </div>
                    </div>
                  </div>
                  <div class="new takeaction_section_transportation">
                    <h>
                      <table style="margin-top: 5px;" border="0" cellpadding="0" cellspacing="0">
                        <tbody>
                          <tr>
                            <td><a class="chkPledge" id="chkPledge_reduce_air_travel" style="display: block;" href="javascript:takeaction_pledge('reduce_air_travel');">
                                <table align="center" class="trg" border="0" cellpadding="0" cellspacing="0">
                                  <tbody>
                                    <tr>
                                      <td class="chkPledge" style="height: 30px;"> Pledge </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </a></td>
                            <td><a class="trigger" style="display: block;" href="javascript:;">
                                <table class="trg" border="0" cellpadding="0" cellspacing="0" style="height: 30px;">
                                  <tbody>
                                    <tr>
                                      <td class="pledgeText" style="width: 315px;">Reduce Air Travel</td>
                                      <!--
                        <td style="width: 50px; text-align: left;"><img src="images/categories/transportation32.png" style="width: 23px; height: 23px;"/></td>
                        -->

                                      <td style="width: 105px; text-align: center;"><span class="takeaction_pounds" id="takeaction_pounds_reduce_air_travel"
                                          style="color: #415683"></span></td>
                                      <td style="width: 105px; text-align: center;">$<span class="takeaction_dollars"
                                          id="takeaction_dollars_reduce_air_travel"></span></td>
                                      <td style="width: 105px; text-align: center;">$<span class="takeaction_net10yr"
                                          id="takeaction_net10yr_reduce_air_travel"></span></td>
                                    </tr>
                                  </tbody>
                                </table>
                              </a></td>
                          </tr>
                        </tbody>
                      </table>
                    </h>
                    <div style="position: relative" class="inner">
                      <div style="position: relative; ">
                        <div id="takeaction_greenglow_reduce_air_travel" style="position: absolute; top: 0; left: 0; height: 100%; width: 100%; z-index: 0; box-shadow:inset 0px 0px 30px rgba(196,255,155,1); display: none;"></div>
                        <div class="pledge_container" style="font-size:12px; padding: 10px; position: relative; z-index: 10;">
                          <img src="images/pledges/icon8.png" alt="" align="right" vspace="5" hspace="10" />

                          I fly about <span id="result_takeaction_reduce_air_travel_totalmiles">0</span> miles per
                          year, which produces about <span id="result_takeaction_reduce_air_travel_pounds_from_flight">0</span>
                          tons of CO2e per year.
                          I will fly
                          <select id="input_takeaction_reduce_air_travel_miles_percent">
                            <option value="100">100%</option>
                            <option value="90">90%</option>
                            <option value="80">80%</option>
                            <option value="70">70%</option>
                            <option value="60">60%</option>
                            <option value="50">50%</option>
                            <option value="40">40%</option>
                            <option value="30">30%</option>
                            <option value="20">20%</option>
                            <option value="10">10%</option>
                            <option value="0">0%</option>
                          </select>
                          or <span id="result_takeaction_reduce_air_travel_miles_alt">0</span> fewer miles per year by
                          teleconferencing or staying home.
                          <div class="funfact"> Travelling virtually is one of the best things you can do to reduce you
                            impacts because every two-hours flight avoided saves as much as avoiding a month of typical
                            driving. </div>
                          <div>
                            <a target="_blank" style="text-decoration: none; color:blue;" onMouseOver="this.style.color='black'"
                              onMouseOut="this.style.color='blue'" href="http://www.coolcalifornia.org/funding-wizard#search//%255BZipcode%253D%253D94720%255D%255BCategory%253D%253DTransportation%255D%255BEligible+Applicants%253D%253DIndividual%255D/false/none/false/1/12">Find
                              rebates and incentives for this action</a>
                            <img src="images/funding-wizard-icon.png" style="position: absolute; width:35px; padding-left: 5px;">
                          </div>
                          <div class="assumption_button">
                            <a href="javascript:;" class="assumptionShowHideLink">[<span class="takeaction_assumption_plusminus">+</span>]
                              assumptions</a>
                          </div>
                          <div class="assumption_content">
                            <div>
                              <ul>
                                <li> Flying produces 223 grams of CO2e/passenger mile, on average (<a href="http://ghgprotocol.org">WRI-WBCSD</a>)
                                </li>
                                <li>Indirect emissions (from contrails and other atmospheric effects) account for 50%
                                  of total emissions </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="takeaction_category" style="display: none;">10</div>
                      </div>
                    </div>
                  </div>
                  <div class="new takeaction_section_offset">
                    <h>
                      <table style="margin-top: 5px;" border="0" cellpadding="0" cellspacing="0">
                        <tbody>
                          <tr>
                            <td><a class="chkPledge" id="chkPledge_offset_transportation" style="display: block;" href="javascript:takeaction_pledge('offset_transportation');">
                                <table align="center" class="trg" border="0" cellpadding="0" cellspacing="0">
                                  <tbody>
                                    <tr>
                                      <td class="chkPledge" style="height: 30px;"> Pledge </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </a></td>
                            <td><a class="trigger" style="display: block;" href="javascript:;">
                                <table class="trg" border="0" cellpadding="0" cellspacing="0" style="height: 30px;">
                                  <tbody>
                                    <tr>
                                      <td class="pledgeText" style="width: 315px;">Offset Transportation Footprint </td>
                                      <!--
                        <td style="width: 50px; text-align: left;"><img src="images/categories/transportation32.png" style="width: 23px; height: 23px;"/></td>
                        -->

                                      <td style="width: 105px; text-align: center;"><span class="takeaction_pounds" id="takeaction_pounds_offset_transportation"
                                          style="color: #415683"></span></td>
                                      <td style="width: 105px; text-align: center;">$<span class="takeaction_dollars"
                                          id="takeaction_dollars_offset_transportation"></span></td>
                                      <td style="width: 105px; text-align: center;">$<span class="takeaction_net10yr"
                                          id="takeaction_net10yr_offset_transportation"></span></td>
                                    </tr>
                                  </tbody>
                                </table>
                              </a></td>
                          </tr>
                        </tbody>
                      </table>
                    </h>
                    <div style="position: relative" class="inner">
                      <div style="position: relative; ">
                        <div id="takeaction_greenglow_offset_transportation" style="position: absolute; top: 0; left: 0; height: 100%; width: 100%; z-index: 0; box-shadow:inset 0px 0px 30px rgba(196,255,155,1); display: none;"></div>
                        <div class="pledge_container" style="font-size:12px; padding: 10px; position: relative; z-index: 10;">
                          <img src="images/pledges/icon9.png" alt="" align="right" vspace="5" hspace="10" /> I have
                          already pledged to reduce my transportation footprint by
                          <span id="result_takeaction_offset_transportation_transpledges">0</span> metric tons of CO2e
                          per year. I will purchase carbon offsets for the remaining <span id="result_takeaction_offset_transportation_transtonsleft">0</span>
                          tons of CO2e at a cost of <input type="text" id="input_takeaction_offset_transportation_offset"
                            size="2" maxlength="2" />
                          dollars per metric ton.
                          <div class="funfact"> Avoiding GHG emissions in one place can "offset" GHG emissions
                            occurring somewhere else. Offsets can go toward projects such as financing a wind turbine
                            in Asia, a solar roof-top in Africa or a reforestation program in South America. Plus,
                            carbon offset projects can produce positive quality-of-life impacts such as increasing
                            economic and social development and supporting clean technology. </div>
                          <div class="assumption_button">
                            <a href="javascript:;" class="assumptionShowHideLink">[<span class="takeaction_assumption_plusminus">+</span>]
                              assumptions</a>
                          </div>
                          <div class="assumption_content">
                            <div>
                              <ul>
                                <li> Offsets are assumed to be "additional" greenhouse gas emissions that would NOT
                                  otherwise be reduced without your purchase of carbon offsets. Examples include
                                  projects that would not be profitable, and therefore not undertaken, without the
                                  additional funds provided by carbon offset sponsors</li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="takeaction_category" style="display: none;">11</div>
                      </div>
                    </div>
                  </div>
                  <div class="new takeaction_section_housing">
                    <h>
                      <table style="margin-top: 5px;" border="0" cellpadding="0" cellspacing="0">
                        <tbody>
                          <tr>
                            <td><a class="chkPledge" id="chkPledge_switch_to_cfl" style="display: block;" href="javascript:takeaction_pledge('switch_to_cfl');">
                                <table align="center" class="trg" border="0" cellpadding="0" cellspacing="0">
                                  <tbody>
                                    <tr>
                                      <td class="chkPledge" style="height: 30px;"> Pledge </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </a></td>
                            <td><a class="trigger" style="display: block;" href="javascript:;">
                                <table class="trg" border="0" cellpadding="0" cellspacing="0" style="height: 30px;">
                                  <tbody>
                                    <tr>
                                      <td class="pledgeText" style="width: 315px;">Switch to CFLs</td>
                                      <!--
                        <td style="width: 50px; text-align: left;"><img src="images/categories/transportation32.png" style="width: 23px; height: 23px;"/></td>
                        -->

                                      <td style="width: 105px; text-align: center;"><span class="takeaction_pounds" id="takeaction_pounds_switch_to_cfl"
                                          style="color: #415683"></span></td>
                                      <td style="width: 105px; text-align: center;">$<span class="takeaction_dollars"
                                          id="takeaction_dollars_switch_to_cfl"></span></td>
                                      <td style="width: 105px; text-align: center;">$<span class="takeaction_net10yr"
                                          id="takeaction_net10yr_switch_to_cfl"></span></td>
                                    </tr>
                                  </tbody>
                                </table>
                              </a></td>
                          </tr>
                        </tbody>
                      </table>
                    </h>
                    <div style="position: relative" class="inner">
                      <div style="position: relative; ">
                        <div id="takeaction_greenglow_switch_to_cfl" style="position: absolute; top: 0; left: 0; height: 100%; width: 100%; z-index: 0; box-shadow:inset 0px 0px 30px rgba(196,255,155,1); display: none;"></div>
                        <div class="pledge_container" style="font-size:12px; padding: 10px; position: relative; z-index: 10;">
                          <img src="images/pledges/icon10.png" alt="" align="right" vspace="5" hspace="10" />
                          <p>I will replace
                            <input type="text" id="input_takeaction_switch_to_cfl_cfl" size="3" maxlength="3" />
                            older incandescent bulbs with compact florescent bulbs (CFL) bulbs. I use the lights about
                            <input type="text" id="input_takeaction_switch_to_cfl_hours" size="2" maxlength="2" />
                            hours a day on average.
                          </p>
                          <p>
                            CFL's contain mercury so be sure to dispose of them safely. Visit the <a href="http://www2.epa.gov/cfl/recycling-and-disposal-after-cfl-burns-out">EPA</a>
                            website to learn more.

                          </p>

                          <div class="funfact">Everyone knows CFL's are a better lightning investment. If you have any
                            incadescents left in your house, they're slurping away four times more energy than their
                            efficient CFL relatives for the same brightness. </div>
                          <div>
                            <a target="_blank" style="text-decoration: none; color:blue;" onMouseOver="this.style.color='black'"
                              onMouseOut="this.style.color='blue'" href="http://www.coolcalifornia.org/funding-wizard#search/home+electricity//false/none/false/1/12">Find
                              rebates and incentives for this action</a>
                            <img src="images/funding-wizard-icon.png" style="position: absolute; width:35px; padding-left: 5px;">
                          </div>

                          <div class="assumption_button">
                            <a href="javascript:;" class="assumptionShowHideLink">[<span class="takeaction_assumption_plusminus">+</span>]
                              assumptions</a>
                          </div>
                          <div class="assumption_content">
                            <div>
                              <ul>
                                <li> Wattage of incandescent bulbs:
                                  <input type="text" id="input_takeaction_switch_to_cfl_incanwatt" size="3" maxlength="3" />
                                </li>
                                <li> Equivalent wattage of CFL bulbs:
                                  <input type="text" id="input_takeaction_switch_to_cfl_cflwatt" size="3" maxlength="3" />
                                </li>
                                <li> Cost per new CFL: $
                                  <input type="text" id="input_takeaction_switch_to_cfl_cflcost" size="4" maxlength="4" />
                                </li>
                                <li> Cost to run incandescent bulb: $
                                  <input type="text" id="input_takeaction_switch_to_cfl_incancost" size="4" maxlength="4" />
                                  per day</li>
                                <li> Lifetime of incandescents:
                                  <input type="text" id="input_takeaction_switch_to_cfl_incanlife" size="4" maxlength="4" />
                                  hours</li>
                                <li> Lifetime of CFLs:
                                  <input type="text" id="input_takeaction_switch_to_cfl_cfllife" size="4" maxlength="4" />
                                  hours</li>
                                <li> Price of electricity: <span class="kwhprice">0</span> (cents/kWh) <img src="images/carb_question_mark.png"
                                    border="0" title="Click the Assumptions button above to change the price of electricity."
                                    class="tTip tTipHandle" /> </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="takeaction_category" style="display: none;">12</div>
                      </div>
                    </div>
                  </div>
                  <div class="new takeaction_section_housing">
                    <h>
                      <table style="margin-top: 5px;" border="0" cellpadding="0" cellspacing="0">
                        <tbody>
                          <tr>
                            <td><a class="chkPledge" id="chkPledge_turn_off_lights" style="display: block;" href="javascript:takeaction_pledge('turn_off_lights');">
                                <table align="center" class="trg" border="0" cellpadding="0" cellspacing="0">
                                  <tbody>
                                    <tr>
                                      <td class="chkPledge" style="height: 30px;"> Pledge </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </a></td>
                            <td><a class="trigger" style="display: block;" href="javascript:;">
                                <table class="trg" border="0" cellpadding="0" cellspacing="0" style="height: 30px;">
                                  <tbody>
                                    <tr>
                                      <td class="pledgeText" style="width: 315px;">Turn off Lights</td>
                                      <!--
                        <td style="width: 50px; text-align: left;"><img src="images/categories/transportation32.png" style="width: 23px; height: 23px;"/></td>
                        -->

                                      <td style="width: 105px; text-align: center;"><span class="takeaction_pounds" id="takeaction_pounds_turn_off_lights"
                                          style="color: #415683"></span></td>
                                      <td style="width: 105px; text-align: center;">$<span class="takeaction_dollars"
                                          id="takeaction_dollars_turn_off_lights"></span></td>
                                      <td style="width: 105px; text-align: center;">$<span class="takeaction_net10yr"
                                          id="takeaction_net10yr_turn_off_lights"></span></td>
                                    </tr>
                                  </tbody>
                                </table>
                              </a></td>
                          </tr>
                        </tbody>
                      </table>
                    </h>
                    <div style="position: relative" class="inner">
                      <div style="position: relative; ">
                        <div id="takeaction_greenglow_turn_off_lights" style="position: absolute; top: 0; left: 0; height: 100%; width: 100%; z-index: 0; box-shadow:inset 0px 0px 30px rgba(196,255,155,1); display: none;"></div>
                        <div class="pledge_container" style="font-size:12px; padding: 10px; position: relative; z-index: 10;">
                          <img src="images/pledges/LITE/lightoff.png" alt="Turn off the Lights" align="right" vspace="5"
                            hspace="10" />
                          <p>I will turn off
                            <input id="input_takeaction_turn_off_lights_number" type="text" size="2" maxlength="2" />
                            lights with an avergae of
                            <select id="input_takeaction_turn_off_lights_watts">
                              <option value="10">10</option>
                              <option value="20">20</option>
                              <option value="30">30</option>
                              <option value="40">40</option>
                              <option value="50">50</option>
                              <option value="60">60</option>
                              <option value="70">70</option>
                              <option value="80">80</option>
                              <option value="90">90</option>
                              <option value="100">100</option>
                              <option value="110">110</option>
                              <option value="120">120</option>
                              <option value="130">130</option>
                              <option value="140">140</option>
                              <option value="150">150</option>
                            </select>
                            watts for <input id="input_takeaction_turn_off_lights_hours" type="text" size="2" maxlength="2" />
                            hours a day. </p>
                          <div>
                            <a target="_blank" style="text-decoration: none; color:blue;" onMouseOver="this.style.color='black'"
                              onMouseOut="this.style.color='blue'" href="http://www.coolcalifornia.org/funding-wizard#search//%255BZipcode%253D%253D94720%255D%255BEligible+Applicants%253D%253DIndividual%255D%255BCategory%253D%253DEnergy%255D/false/none/false/1/12">Find
                              rebates and incentives for this action</a>
                            <img src="images/funding-wizard-icon.png" style="width:35px; padding-left: 5px;">
                          </div>
                        </div>
                        <div class="takeaction_category" style="display: none;">13</div>
                      </div>
                    </div>
                  </div>
                  <div class="new takeaction_section_housing">
                    <h>
                      <table style="margin-top: 5px;" border="0" cellpadding="0" cellspacing="0">
                        <tbody>
                          <tr>
                            <td><a class="chkPledge" id="chkPledge_T12toT8" style="display: block;" href="javascript:takeaction_pledge('T12toT8');">
                                <table align="center" class="trg" border="0" cellpadding="0" cellspacing="0">
                                  <tbody>
                                    <tr>
                                      <td class="chkPledge" style="height: 30px;"> Pledge </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </a></td>
                            <td><a class="trigger" style="display: block;" href="javascript:;">
                                <table class="trg" border="0" cellpadding="0" cellspacing="0" style="height: 30px;">
                                  <tbody>
                                    <tr>
                                      <td class="pledgeText" style="width: 315px;">Switch form T12 Lights to T8 Lights</td>
                                      <!--
                        <td style="width: 50px; text-align: left;"><img src="images/categories/transportation32.png" style="width: 23px; height: 23px;"/></td>
                        -->

                                      <td style="width: 105px; text-align: center;"><span class="takeaction_pounds" id="takeaction_pounds_T12toT8"
                                          style="color: #415683"></span></td>
                                      <td style="width: 105px; text-align: center;">$<span class="takeaction_dollars"
                                          id="takeaction_dollars_T12toT8"></span></td>
                                      <td style="width: 105px; text-align: center;">$<span class="takeaction_net10yr"
                                          id="takeaction_net10yr_T12toT8"></span></td>
                                    </tr>
                                  </tbody>
                                </table>
                              </a></td>
                          </tr>
                        </tbody>
                      </table>
                    </h>
                    <div style="position: relative" class="inner">
                      <div style="position: relative; ">
                        <div id="takeaction_greenglow_T12toT8" style="position: absolute; top: 0; left: 0; height: 100%; width: 100%; z-index: 0; box-shadow:inset 0px 0px 30px rgba(196,255,155,1); display: none;"></div>
                        <div class="pledge_container" style="font-size:12px; padding: 10px; position: relative; z-index: 10;">
                          <img src="images/pledges/LGDST/T12toT8light.png" alt="Upgrading T12 with T8 Lights" align="right"
                            vspace="5" hspace="10" />
                          <p>On average, I use the lights about
                            <input type="text" id="input_takeaction_T12toT8_hours" size="2" maxlength="2" />
                            hours a day. I have
                            <input type="text" id="input_takeaction_T12toT8_T8" size="3" maxlength="3" />
                            T-12 lights that I will upgrade to T-8 lights.
                          </p>
                          <div>
                            <a target="_blank" style="text-decoration: none; color:blue;" onMouseOver="this.style.color='black'"
                              onMouseOut="this.style.color='blue'" href="http://www.coolcalifornia.org/funding-wizard#search//%255BZipcode%253D%253D94720%255D%255BEligible+Applicants%253D%253DIndividual%255D%255BCategory%253D%253DEnergy%255D/false/none/false/1/12">Find
                              rebates and incentives for this action</a>
                            <img src="images/funding-wizard-icon.png" style="position: absolute; width:35px; padding-left: 5px;">
                          </div>

                          <div class="assumption_button">
                            <a href="javascript:;" class="assumptionShowHideLink">[<span class="takeaction_assumption_plusminus">+</span>]
                              assumptions</a>
                          </div>
                          <div class="assumption_content">
                            <div>
                              <ul>
                                <li> Wattage of T-12 lights:
                                  <input type="text" id="input_takeaction_T12toT8_T12watt" size="3" maxlength="3" />
                                </li>
                                <li> Wattage of T-8 lights:
                                  <input type="text" id="input_takeaction_T12toT8_T8watt" size="3" maxlength="3" />
                                </li>
                                <li> Cost of each new T8 light: $
                                  <input type="text" id="input_takeaction_T12toT8_T8cost" size="4" maxlength="4" />
                                </li>
                                <li> Price of electricity: <span class="kwhprice">0</span> (cents/kWh) <img src="images/carb_question_mark.png"
                                    border="0" title="Click the Assumptions button above to change the price of electricity."
                                    class="tTip tTipHandle" /> </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="takeaction_category" style="display: none;">14</div>
                      </div>
                    </div>
                  </div>
                  <div class="new takeaction_section_housing">
                    <h>
                      <table style="margin-top: 5px;" border="0" cellpadding="0" cellspacing="0">
                        <tbody>
                          <tr>
                            <td><a class="chkPledge" id="chkPledge_tankless_water_heater" style="display: block;" href="javascript:takeaction_pledge('tankless_water_heater');">
                                <table align="center" class="trg" border="0" cellpadding="0" cellspacing="0">
                                  <tbody>
                                    <tr>
                                      <td class="chkPledge" style="height: 30px;"> Pledge </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </a></td>
                            <td><a class="trigger" style="display: block;" href="javascript:;">
                                <table class="trg" border="0" cellpadding="0" cellspacing="0" style="height: 30px;">
                                  <tbody>
                                    <tr>
                                      <td class="pledgeText" style="width: 315px;">Install Tankless Water Heater</td>
                                      <!--
                        <td style="width: 50px; text-align: left;"><img src="images/categories/transportation32.png" style="width: 23px; height: 23px;"/></td>
                        -->

                                      <td style="width: 105px; text-align: center;"><span class="takeaction_pounds" id="takeaction_pounds_tankless_water_heater"
                                          style="color: #415683"></span></td>
                                      <td style="width: 105px; text-align: center;">$<span class="takeaction_dollars"
                                          id="takeaction_dollars_tankless_water_heater"></span></td>
                                      <td style="width: 105px; text-align: center;">$<span class="takeaction_net10yr"
                                          id="takeaction_net10yr_tankless_water_heater"></span></td>
                                    </tr>
                                  </tbody>
                                </table>
                              </a></td>
                          </tr>
                        </tbody>
                      </table>
                    </h>
                    <div style="position: relative" class="inner">
                      <div style="position: relative; ">
                        <div id="takeaction_greenglow_tankless_water_heater" style="position: absolute; top: 0; left: 0; height: 100%; width: 100%; z-index: 0; box-shadow:inset 0px 0px 30px rgba(196,255,155,1); display: none;"></div>
                        <div class="pledge_container" style="font-size:12px; padding: 10px; position: relative; z-index: 10;">
                          <img src="images/pledges/LITE/tankless_heater.png" alt="Tankless Water Heater" align="right"
                            vspace="5" hspace="10" />
                          <p>My water heater is usually set to
                            <select id="input_takeaction_tankless_water_heater_temp">
                              <option value="120">120</option>
                              <option value="125">125</option>
                              <option value="130">130</option>
                              <option value="135">135</option>
                              <option value="140">140</option>
                            </select>
                            degrees fahrenheit and runs on
                            <select id="input_takeaction_tankless_water_heater_fueltype">
                              <option value="0">natural gas.</option>
                              <option value="1">electricity.</option>
                            </select>
                            I will replace my existing
                            <input id="input_takeaction_tankless_water_heater_replacements" type="text" size="2"
                              maxlength="2" />
                            waterheater(s) with new natural gas heater(s) that cost $
                            <input id="input_takeaction_tankless_water_heater_replacement_cost" type="text" size="3"
                              maxlength="3" />
                            each
                          </p>
                          <div>
                            <a target="_blank" style="text-decoration: none; color:blue;" onMouseOver="this.style.color='black'"
                              onMouseOut="this.style.color='blue'" href="http://www.coolcalifornia.org/funding-wizard#search/water+heater//false/none/false/1/12">Find
                              rebates and incentives for this action</a>
                            <img src="images/funding-wizard-icon.png" style="width:35px; padding-left: 5px;">
                          </div>
                        </div>
                        <div class="takeaction_category" style="display: none;">15</div>
                      </div>
                    </div>
                  </div>
                  <div class="new takeaction_section_housing">
                    <h>
                      <table style="margin-top: 5px;" border="0" cellpadding="0" cellspacing="0">
                        <tbody>
                          <tr>
                            <td><a class="chkPledge" id="chkPledge_thermostat_winter" style="display: block;" href="javascript:takeaction_pledge('thermostat_winter');">
                                <table align="center" class="trg" border="0" cellpadding="0" cellspacing="0">
                                  <tbody>
                                    <tr>
                                      <td class="chkPledge" style="height: 30px;"> Pledge </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </a></td>
                            <td><a class="trigger" style="display: block;" href="javascript:;">
                                <table class="trg" border="0" cellpadding="0" cellspacing="0" style="height: 30px;">
                                  <tbody>
                                    <tr>
                                      <td class="pledgeText" style="width: 315px;">Turn Down Thermostat in Winter</td>
                                      <!--
                        <td style="width: 50px; text-align: left;"><img src="images/categories/transportation32.png" style="width: 23px; height: 23px;"/></td>
                        -->

                                      <td style="width: 105px; text-align: center;"><span class="takeaction_pounds" id="takeaction_pounds_thermostat_winter"
                                          style="color: #415683"></span></td>
                                      <td style="width: 105px; text-align: center;">$<span class="takeaction_dollars"
                                          id="takeaction_dollars_thermostat_winter"></span></td>
                                      <td style="width: 105px; text-align: center;">$<span class="takeaction_net10yr"
                                          id="takeaction_net10yr_thermostat_winter"></span></td>
                                    </tr>
                                  </tbody>
                                </table>
                              </a></td>
                          </tr>
                        </tbody>
                      </table>
                    </h>
                    <div style="position: relative" class="inner">
                      <div style="position: relative; ">
                        <div id="takeaction_greenglow_thermostat_winter" style="position: absolute; top: 0; left: 0; height: 100%; width: 100%; z-index: 0; box-shadow:inset 0px 0px 30px rgba(196,255,155,1); display: none;"></div>
                        <div class="pledge_container" style="font-size:12px; padding: 10px; position: relative; z-index: 10;">

                          <img src="images/pledges/icon11.png" alt="" align="right" vspace="5" hspace="10" /> I heat my
                          home with: <span style="">
                            <select id="input_takeaction_thermostat_winter_fueltype">
                              <option value="0">natural gas</option>
                              <option value="1">electricity</option>
                              <option value="2">fuel oil</option>
                            </select>
                            Typical <span id="display_takeaction_thermostat_winter_sqft">0</span> square foot homes in
                            my climate spend $<span id="result_takeaction_thermostat_winter_dollarstypical">0</span>
                            per year on heating.I heat my home about
                            <select id="input_takeaction_thermostat_winter_percentuse">
                              <option value="3">300%</option>
                              <option value="2.5">250%</option>
                              <option value="2">200%</option>
                              <option value="1.8">180%</option>
                              <option value="1.6">160%</option>
                              <option value="1.4">140%</option>
                              <option value="1.2">120%</option>
                              <option value="1">100%</option>
                              <option value="0.8">80%</option>
                              <option value="0.6">60%</option>
                              <option value="0.4">40%</option>
                              <option value="0.2">20%</option>
                            </select>
                            of typical households, or $<span id="result_takeaction_thermostat_winter_dollarsuse">0</span>
                            per year.
                            I will turn my thermostat down
                            <input type="text" id="input_takeaction_thermostat_winter_daydegrees" size="2" maxlength="2" />
                            degrees F on winter days and
                            <input type="text" id="input_takeaction_thermostat_winter_nightdegrees" size="2" maxlength="2" />
                            degrees F on winter nights. </span>
                          <div class="funfact">Smart settings on your thermostat is one of the best things you can do
                            to save energy because heating is the largest single contributor to energy use in typical
                            homes, even in many moderate climates. </div>
                          <div>
                            <a target="_blank" style="text-decoration: none; color:blue;" onMouseOver="this.style.color='black'"
                              onMouseOut="this.style.color='blue'" href="http://www.coolcalifornia.org/funding-wizard#search//%255BZipcode%253D%253D94720%255D%255BEligible+Applicants%253D%253DIndividual%255D%255BCategory%253D%253DEnergy%255D/false/none/false/1/12">Find
                              rebates and incentives for this action</a>
                            <img src="images/funding-wizard-icon.png" style="position: absolute; width:35px; padding-left: 5px;">
                          </div>
                          <div class="assumption_button">
                            <a href="javascript:;" class="assumptionShowHideLink">[<span class="takeaction_assumption_plusminus">+</span>]
                              assumptions</a>
                          </div>
                          <div class="assumption_content">
                            <div>
                              <ul>
                                <li> Price of electricity: <span class="kwhprice">0</span> cents/kWh (based on your
                                  location)</li>
                                <li> Price of natural gas (cents/therm): <span class="ngprice">0</span></li>
                                <li> Price of fuel oil (cents/gallon):
                                  <input type="text" id="input_takeaction_thermostat_winter_fueloilprice" size="3"
                                    maxlength="3" />
                                </li>
                                <li> Heating Degree Days:
                                  <input type="text" id="input_takeaction_thermostat_winter_hdd" size="5" maxlength="5" />
                                </li>
                                <li> Number of hours with temperature set for:</li>
                                <ul>
                                  <li>Weekdays during the day:
                                    <input type="text" id="input_takeaction_thermostat_winter_wdsetup" size="2"
                                      maxlength="2" />
                                  </li>
                                  <li> Weekdays at night:
                                    <input type="text" id="input_takeaction_thermostat_winter_wdntsetup" size="2"
                                      maxlength="2" />
                                  </li>
                                  <li> Weekends during the day:
                                    <input type="text" id="input_takeaction_thermostat_winter_wesetup" size="2"
                                      maxlength="2" />
                                  </li>
                                  <li> Weekends at night:
                                    <input type="text" id="input_takeaction_thermostat_winter_wentsetup" size="2"
                                      maxlength="2" />
                                  </li>
                                </ul>
                                <li> Consumption Intensity: <span id="result_takeaction_thermostat_winter_intensity">0
                                  </span> physical units*1000 / (HDD*sqft/1000)</li>
                                <li> Emissions per physical unit of fuel: <span id="result_takeaction_thermostat_winter_gCO2fueltype">0
                                  </span> gCO2e</li>
                                <li> Physical units: kWh of electricity; cubic feet of natural gas; gallons of fuel oil</li>
                                <li> Annual energy consumption in physical units of selected fuel type: <span id="result_takeaction_thermostat_winter_pu">0
                                  </span></li>
                                <input type="hidden" id="input_takeaction_thermostat_winter_ngheating" size="2"
                                  maxlength="2" />
                                <input type="hidden" id="input_takeaction_thermostat_winter_elecheating" size="2"
                                  maxlength="2" />
                                <input type="hidden" id="input_takeaction_thermostat_winter_oilheating" size="2"
                                  maxlength="2" />
                              </ul>
                            </div>
                          </div>
                          <div style="display:none;"> Weekday hours with no temperature set: <span class="wdnoset" id="input_takeaction_thermostat_winter_wdnoset">0</span>
                            Weekday hours with temperature set: <span class="weekendnoset" id="input_takeaction_thermostat_winter_weekendnoset">0</span>
                            Weighted set-up temperature: <span class="setuptemp" id="input_takeaction_thermostat_winter_setuptemp">0</span></div>
                        </div>
                        <div class="takeaction_category" style="display: none;">16</div>
                      </div>
                    </div>
                  </div>
                  <div class="new takeaction_section_housing">
                    <h>
                      <table style="margin-top: 5px;" border="0" cellpadding="0" cellspacing="0">
                        <tbody>
                          <tr>
                            <td><a class="chkPledge" id="chkPledge_thermostat_summer" style="display: block;" href="javascript:takeaction_pledge('thermostat_summer');">
                                <table align="center" class="trg" border="0" cellpadding="0" cellspacing="0">
                                  <tbody>
                                    <tr>
                                      <td class="chkPledge" style="height: 30px;"> Pledge </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </a></td>
                            <td><a class="trigger" style="display: block;" href="javascript:;">
                                <table class="trg" border="0" cellpadding="0" cellspacing="0" style="height: 30px;">
                                  <tbody>
                                    <tr>
                                      <td class="pledgeText" style="width: 315px;">Turn Up Thermostat in Summer</td>
                                      <!--
                        <td style="width: 50px; text-align: left;"><img src="images/categories/transportation32.png" style="width: 23px; height: 23px;"/></td>
                        -->

                                      <td style="width: 105px; text-align: center;"><span class="takeaction_pounds" id="takeaction_pounds_thermostat_summer"
                                          style="color: #415683"></span></td>
                                      <td style="width: 105px; text-align: center;">$<span class="takeaction_dollars"
                                          id="takeaction_dollars_thermostat_summer"></span></td>
                                      <td style="width: 105px; text-align: center;">$<span class="takeaction_net10yr"
                                          id="takeaction_net10yr_thermostat_summer"></span></td>
                                    </tr>
                                  </tbody>
                                </table>
                              </a></td>
                          </tr>
                        </tbody>
                      </table>
                    </h>
                    <div style="position: relative" class="inner">
                      <div style="position: relative; ">
                        <div id="takeaction_greenglow_thermostat_summer" style="position: absolute; top: 0; left: 0; height: 100%; width: 100%; z-index: 0; box-shadow:inset 0px 0px 30px rgba(196,255,155,1); display: none;"></div>
                        <div class="pledge_container" style="font-size:12px; padding: 10px; position: relative; z-index: 10;">
                          <img src="images/pledges/icon12.png" alt="" align="right" hspace="10" vspace="5" /> Typical
                          <span id="display_takeaction_thermostat_summer_sqft">0</span> square foot homes in my climate
                          spend $<span id="result_takeaction_thermostat_summer_dollarstypical">0 </span> (<span id="result_takeaction_thermostat_summer_kwhtypical">0
                          </span> kWh) per year on air conditioning. I use the AC about
                          <select id="input_takeaction_thermostat_summer_percentuse">
                            <option value="3">300%</option>
                            <option value="2.5">250%</option>
                            <option value="2">200%</option>
                            <option value="1.8">180%</option>
                            <option value="1.6">160%</option>
                            <option value="1.4">140%</option>
                            <option value="1.2">120%</option>
                            <option value="1">100%</option>
                            <option value="0.8">80%</option>
                            <option value="0.6">60%</option>
                            <option value="0.4">40%</option>
                            <option value="0.2">20%</option>
                          </select>
                          of typical households, or $<span id="result_takeaction_thermostat_summer_dollarsuse">0 </span>
                          (<span id="result_takeaction_thermostat_summer_kwhuse">0 </span> kWh) per year.
                          I will turn my thermostat up
                          <input type="text" id="input_takeaction_thermostat_summer_daydegrees" size="2" maxlength="2" />
                          degrees F on summer days and
                          <input type="text" id="input_takeaction_thermostat_summer_nightdegrees" size="2" maxlength="2" />
                          degrees F on summer nights.
                          <div class="funfact"> If you don't already do this, setting your thermostat to a neutral
                            temperature while you're gone at work can results in an immediate 10% savings on energy.
                            Don't let your energy dollars seep away while you're busy earning 'em! </div>
                          <div>
                            <a target="_blank" style="text-decoration: none; color:blue;" onMouseOver="this.style.color='black'"
                              onMouseOut="this.style.color='blue'" href="http://www.coolcalifornia.org/funding-wizard#search//%255BZipcode%253D%253D94720%255D%255BEligible+Applicants%253D%253DIndividual%255D%255BCategory%253D%253DEnergy%255D/false/none/false/1/12">Find
                              rebates and incentives for this action</a>
                            <img src="images/funding-wizard-icon.png" style="position: absolute; width:35px; padding-left: 5px;">
                          </div>

                          <div class="assumption_button">
                            <a href="javascript:;" class="assumptionShowHideLink">[<span class="takeaction_assumption_plusminus">+</span>]
                              assumptions</a>
                          </div>
                          <div class="assumption_content">
                            <div>
                              <ul>
                                <li> Price of electricity (cents/kWh): <span class="kwhprice">0</span></li>
                                <li> Cooling degree-days:
                                  <input type="text" id="input_takeaction_thermostat_summer_cdd" size="4" maxlength="4" />
                                </li>
                                <ul>
                                  <li>Number of hours with temperature set for:</li>
                                  <li> Weekdays during the day:
                                    <input type="text" id="input_takeaction_thermostat_summer_wdsetup" size="2"
                                      maxlength="2" />
                                  </li>
                                  <li> Weekdays at night:
                                    <input type="text" id="input_takeaction_thermostat_summer_wdntsetup" size="2"
                                      maxlength="2" />
                                  </li>
                                  <li> Weekends during the day:
                                    <input type="text" id="input_takeaction_thermostat_summer_wesetup" size="2"
                                      maxlength="2" />
                                  </li>
                                  <li> Weekends at night:
                                    <input type="text" id="input_takeaction_thermostat_summer_wentsetup" size="2"
                                      maxlength="2" />
                                  </li>
                                </ul>
                              </ul>
                            </div>
                          </div>
                          <div style="display:none;">Weekday hours with no set-up: <span class="wdnoset" id="input_takeaction_thermostat_summer_wdnoset">0</span>
                            Weekday hours with no set-up: <span class="weekendnoset" id="input_takeaction_thermostat_summer_weekendnoset">0</span>
                            Weighted set-up temperature: <span class="setuptemp" id="input_takeaction_thermostat_summer_setuptemp">0</span></div>
                        </div>
                        <div class="takeaction_category" style="display: none;">17</div>
                      </div>
                    </div>
                  </div>
                  <div class="new takeaction_section_housing">
                    <h>
                      <table style="margin-top: 5px;" border="0" cellpadding="0" cellspacing="0">
                        <tbody>
                          <tr>
                            <td><a class="chkPledge" id="chkPledge_purchase_high_efficiency_cooling" style="display: block;"
                                href="javascript:takeaction_pledge('purchase_high_efficiency_cooling');">
                                <table align="center" class="trg" border="0" cellpadding="0" cellspacing="0">
                                  <tbody>
                                    <tr>
                                      <td class="chkPledge" style="height: 30px;"> Pledge </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </a></td>
                            <td><a class="trigger" style="display: block;" href="javascript:;">
                                <table class="trg" border="0" cellpadding="0" cellspacing="0" style="height: 30px;">
                                  <tbody>
                                    <tr>
                                      <td class="pledgeText" style="width: 315px;">Purchase High Efficiency Cooling
                                        Equipment</td>
                                      <!--
                        <td style="width: 50px; text-align: left;"><img src="images/categories/transportation32.png" style="width: 23px; height: 23px;"/></td>
                        -->

                                      <td style="width: 105px; text-align: center;"><span class="takeaction_pounds" id="takeaction_pounds_purchase_high_efficiency_cooling"
                                          style="color: #415683"></span></td>
                                      <td style="width: 105px; text-align: center;">$<span class="takeaction_dollars"
                                          id="takeaction_dollars_purchase_high_efficiency_cooling"></span></td>
                                      <td style="width: 105px; text-align: center;">$<span class="takeaction_net10yr"
                                          id="takeaction_net10yr_purchase_high_efficiency_cooling"></span></td>
                                    </tr>
                                  </tbody>
                                </table>
                              </a></td>
                          </tr>
                        </tbody>
                      </table>
                    </h>
                    <div style="position: relative" class="inner">
                      <div style="position: relative; ">
                        <div id="takeaction_greenglow_purchase_high_efficiency_cooling" style="position: absolute; top: 0; left: 0; height: 100%; width: 100%; z-index: 0; box-shadow:inset 0px 0px 30px rgba(196,255,155,1); display: none;"></div>
                        <div class="pledge_container" style="font-size:12px; padding: 10px; position: relative; z-index: 10;">
                          <img src="images/pledges/LGDST/eff_cooling.png" alt="Purchase High Efficiency Cooling" align="right"
                            hspace="10" vspace="5" />
                          <p>A typical <span id="display_takeaction_purchase_high_efficiency_cooling_sqft">0</span>
                            square foot home in my climate spends $<span id="result_takeaction_purchase_high_efficiency_cooling_dollarstypical">0
                            </span> (<span id="result_takeaction_purchase_high_efficiency_cooling_kwhtypical">0</span>
                            kWh) per year on air conditioning. I use the AC about
                            <select id="input_takeaction_purchase_high_efficiency_cooling_percentuse">
                              <option value="3">300%</option>
                              <option value="2.5">250%</option>
                              <option value="2">200%</option>
                              <option value="1.8">180%</option>
                              <option value="1.6">160%</option>
                              <option value="1.4">140%</option>
                              <option value="1.2">120%</option>
                              <option value="1">100%</option>
                              <option value="0.8">80%</option>
                              <option value="0.6">60%</option>
                              <option value="0.4">40%</option>
                              <option value="0.2">20%</option>
                            </select>
                            of typical households, or $<span id="result_takeaction_purchase_high_efficiency_cooling_dollarsuse">0
                            </span>
                            (<span id="result_takeaction_purchase_high_efficiency_cooling_kwhuse">0 </span> kWh) per
                            year. <br />
                            I will replace my conventional air conditioner(s) that have a SEER rating of <input id="input_takeaction_purchase_high_efficiency_cooling_conventional_rating"
                              type="text" size="2" maxlength="2" />
                            with Energy Star air conditioner(s) that have a SEER rating of <input id="input_takeaction_purchase_high_efficiency_cooling_energystar_rating"
                              type="text" size="2" maxlength="2" />.
                          </p>
                          <p>
                            <a href="http://energy.gov/energysaver/articles/central-air-conditioning">SEER Ratings</a>
                          </p>
                          <div>
                            <a target="_blank" style="text-decoration: none; color:blue;" onMouseOver="this.style.color='black'"
                              onMouseOut="this.style.color='blue'" href="http://www.coolcalifornia.org/funding-wizard#search/cooling//false/none/false/1/12 ">Find
                              rebates and incentives for this action</a>
                            <img src="images/funding-wizard-icon.png" style="position: absolute; width:35px; padding-left: 5px;">
                          </div>

                          <div class="assumption_button">
                            <a href="javascript:;" class="assumptionShowHideLink">[<span class="takeaction_assumption_plusminus">+</span>]
                              assumptions</a>
                          </div>
                          <div class="assumption_content">
                            <div>
                              <ul>
                                <li> Price of electricity (cents/kWh): <span class="kwhprice">0</span></li>
                                <li> Cooling degree-days:
                                  <input type="text" id="input_takeaction_purchase_high_efficiency_cooling_cdd" size="4"
                                    maxlength="4" />
                                </li>
                                <li> The cost difference between a conventional air conditioner and an energy star air
                                  conditioner is
                                  <input type="text" id="input_takeaction_purchase_high_efficiency_cooling_cost_difference"
                                    size="5" maxlength="5" />
                                  dollars
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="takeaction_category" style="display: none;">18</div>
                      </div>
                    </div>
                  </div>
                  <div class="new takeaction_section_housing">
                    <h>
                      <table style="margin-top: 5px;" border="0" cellpadding="0" cellspacing="0">
                        <tbody>
                          <tr>
                            <td><a class="chkPledge" id="chkPledge_purchase_high_efficiency_heating" style="display: block;"
                                href="javascript:takeaction_pledge('purchase_high_efficiency_heating');">
                                <table align="center" class="trg" border="0" cellpadding="0" cellspacing="0">
                                  <tbody>
                                    <tr>
                                      <td class="chkPledge" style="height: 30px;"> Pledge </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </a></td>
                            <td><a class="trigger" style="display: block;" href="javascript:;">
                                <table class="trg" border="0" cellpadding="0" cellspacing="0" style="height: 30px;">
                                  <tbody>
                                    <tr>
                                      <td class="pledgeText" style="width: 315px;">Purchase High Efficiency Heating
                                        Equipment</td>
                                      <!--
                        <td style="width: 50px; text-align: left;"><img src="images/categories/transportation32.png" style="width: 23px; height: 23px;"/></td>
                        -->

                                      <td style="width: 105px; text-align: center;"><span class="takeaction_pounds" id="takeaction_pounds_purchase_high_efficiency_heating"
                                          style="color: #415683"></span></td>
                                      <td style="width: 105px; text-align: center;">$<span class="takeaction_dollars"
                                          id="takeaction_dollars_purchase_high_efficiency_heating"></span></td>
                                      <td style="width: 105px; text-align: center;">$<span class="takeaction_net10yr"
                                          id="takeaction_net10yr_purchase_high_efficiency_heating"></span></td>
                                    </tr>
                                  </tbody>
                                </table>
                              </a></td>
                          </tr>
                        </tbody>
                      </table>
                    </h>
                    <div style="position: relative" class="inner">
                      <div style="position: relative; ">
                        <div id="takeaction_greenglow_purchase_high_efficiency_heating" style="position: absolute; top: 0; left: 0; height: 100%; width: 100%; z-index: 0; box-shadow:inset 0px 0px 30px rgba(196,255,155,1); display: none;"></div>
                        <div class="pledge_container" style="font-size:12px; padding: 10px; position: relative; z-index: 10;">

                          <img src="images/pledges/LGDST/eff_heating.png" alt="Purchase High Efficiency Heating" align="right"
                            vspace="5" hspace="10" />
                          <p>I heat my home with: <span style="">
                              <select id="input_takeaction_purchase_high_efficiency_heating_fueltype">
                                <option value="0">natural gas</option>
                                <option value="1">electricity</option>
                                <option value="2">fuel oil</option>
                              </select>
                              Typical <span id="display_takeaction_purchase_high_efficiency_heating_sqft">0</span>
                              square foot homes in my climate spend $<span id="result_takeaction_purchase_high_efficiency_heating_dollarstypical">0</span>
                              per year on heating. I heat my home about
                              <select id="input_takeaction_purchase_high_efficiency_heating_percentuse">
                                <option value="3">300%</option>
                                <option value="2.5">250%</option>
                                <option value="2">200%</option>
                                <option value="1.8">180%</option>
                                <option value="1.6">160%</option>
                                <option value="1.4">140%</option>
                                <option value="1.2">120%</option>
                                <option value="1">100%</option>
                                <option value="0.8">80%</option>
                                <option value="0.6">60%</option>
                                <option value="0.4">40%</option>
                                <option value="0.2">20%</option>
                              </select>
                              of typical households, or $<span id="result_takeaction_purchase_high_efficiency_heating_dollarsuse">0</span>
                              per year.
                            </span>
                          </p>
                          <div>
                            <a target="_blank" style="text-decoration: none; color:blue;" onMouseOver="this.style.color='black'"
                              onMouseOut="this.style.color='blue'" href="http://www.coolcalifornia.org/funding-wizard#search/heating//false/none/false/1/12">Find
                              rebates and incentives for this action</a>
                            <img src="images/funding-wizard-icon.png" style="position: absolute; width:35px; padding-left: 5px;">
                          </div>

                          <div class="assumption_button">
                            <a href="javascript:;" class="assumptionShowHideLink">[<span class="takeaction_assumption_plusminus">+</span>]
                              assumptions</a>
                          </div>
                          <div class="assumption_content">
                            <div>
                              <ul>
                                <li> Price of electricity: <span class="kwhprice">0</span> cents/kWh (based on your
                                  location)</li>
                                <li> Price of natural gas (cents/therm): <span class="ngprice">0</span></li>
                                <li> Price of fuel oil (cents/gallon):
                                  <input type="text" id="input_takeaction_purchase_high_efficiency_heating_fueloilprice"
                                    size="3" maxlength="3" />
                                </li>
                                <li> Consumption Intensity: <span id="result_takeaction_purchase_high_efficiency_heating_intensity">0
                                  </span> physical units*1000 / (HDD*sqft/1000)</li>
                                <li> Emissions per physical unit of fuel: <span id="result_takeaction_purchase_high_efficiency_heating_gCO2fueltype">0
                                  </span> gCO2e</li>
                                <li> Physical units: kWh of electricity; cubic feet of natural gas; gallons of fuel oil</li>
                                <li> Annual energy consumption in physical units of selected fuel type: <span id="result_takeaction_purchase_high_efficiency_heating_pu">0
                                  </span></li>
                                <li> The cost difference between a conventional furnace and an energy star furnace is
                                  <input type="text" id="input_takeaction_purchase_high_efficiency_heating_cost_difference"
                                    size="5" maxlength="5" />
                                </li>

                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="takeaction_category" style="display: none;">19</div>
                      </div>
                    </div>
                  </div>
                  <div class="new takeaction_section_housing">
                    <h>
                      <table style="margin-top: 5px;" border="0" cellpadding="0" cellspacing="0">
                        <tbody>
                          <tr>
                            <td><a class="chkPledge" id="chkPledge_energy_star_fridge" style="display: block;" href="javascript:takeaction_pledge('energy_star_fridge');">
                                <table align="center" class="trg" border="0" cellpadding="0" cellspacing="0">
                                  <tbody>
                                    <tr>
                                      <td class="chkPledge" style="height: 30px;"> Pledge </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </a></td>
                            <td><a class="trigger" style="display: block;" href="javascript:;">
                                <table class="trg" border="0" cellpadding="0" cellspacing="0" style="height: 30px;">
                                  <tbody>
                                    <tr>
                                      <td class="pledgeText" style="width: 315px;">Choose Energy Star Fridge</td>
                                      <!--
                        <td style="width: 50px; text-align: left;"><img src="images/categories/transportation32.png" style="width: 23px; height: 23px;"/></td>
                        -->

                                      <td style="width: 105px; text-align: center;"><span class="takeaction_pounds" id="takeaction_pounds_energy_star_fridge"
                                          style="color: #415683"></span></td>
                                      <td style="width: 105px; text-align: center;">$<span class="takeaction_dollars"
                                          id="takeaction_dollars_energy_star_fridge"></span></td>
                                      <td style="width: 105px; text-align: center;">$<span class="takeaction_net10yr"
                                          id="takeaction_net10yr_energy_star_fridge"></span></td>
                                    </tr>
                                  </tbody>
                                </table>
                              </a></td>
                          </tr>
                        </tbody>
                      </table>
                    </h>
                    <div style="position: relative" class="inner">
                      <div style="position: relative; ">
                        <div id="takeaction_greenglow_energy_star_fridge" style="position: absolute; top: 0; left: 0; height: 100%; width: 100%; z-index: 0; box-shadow:inset 0px 0px 30px rgba(196,255,155,1); display: none;"></div>
                        <div class="pledge_container" style="font-size:12px; padding: 10px; position: relative; z-index: 10;">

                          <img src="images/pledges/icon13.png" alt="" align="right" vspace="5" hspace="10" /> The next
                          time I purchase a new refrigerator, I pledge to make it an Energy Star qualified decision.

                          New refrigerator type:
                          <select id="input_takeaction_energy_star_fridge_fridgetype">
                            <option value="0">Manual Defrost Refrigerators</option>
                            <option value="1">Partial Automatic Defrost Refrigerators</option>
                            <option value="2">Top Mount Freezer without through-the-door ice</option>
                            <option value="3">Side Mount Freezer without through-the-door ice</option>
                            <option value="4">Bottom Mount Freezer without through-the-door ice</option>
                            <option value="5">Top Mount Freezer with through-the-door ice</option>
                            <option value="6">Side Mount Freezer with through-the-door ice</option>
                          </select>
                          The Energy Star model costs an additional
                          <input type="text" id="input_takeaction_energy_star_fridge_fridgecost" size="4" maxlength="4" />
                          dollars compared to the conventional model.
                          <div class="funfact">"Eat up" less energy: A new refrigerator with an ENERGY STAR label beats
                            current federal standards by at least 20%.</div>
                          <div>
                            <a target="_blank" style="text-decoration: none; color:blue;" onMouseOver="this.style.color='black'"
                              onMouseOut="this.style.color='blue'" href="http://www.coolcalifornia.org/funding-wizard#search/appliances//false/none/false/1/12">Find
                              rebates and incentives for this action</a>
                            <img src="images/funding-wizard-icon.png" style="position: absolute; width:35px; padding-left: 5px;">
                          </div>

                          <div class="assumption_button">
                            <a href="javascript:;" class="assumptionShowHideLink">[<span class="takeaction_assumption_plusminus">+</span>]
                              assumptions</a>
                          </div>
                          <div class="assumption_content">
                            <div>
                              <ul>
                                <li> Refrigerator fresh volume:
                                  <input type="text" id="input_takeaction_energy_star_fridge_fresh" size="5" maxlength="5" />
                                  cubic feet
                                </li>
                                <li> Refrigerator freezer volume:
                                  <input type="text" id="input_takeaction_energy_star_fridge_freezer" size="5"
                                    maxlength="5" />
                                  cubic feet </li>
                                <li> The total volume is: <span id="result_takeaction_energy_star_fridge_totvolume">0</span>
                                  cubic feet</li>
                                <li> Efficiency of conventional model: <span id="result_takeaction_energy_star_fridge_fridgekwh">0</span>
                                  kWh per cubic feet</li>
                                <li> Efficiency of Energy Star model: <span id="result_takeaction_energy_star_fridge_ESfridgekwh">0</span>
                                  kWh per cubic feet</li>
                                <li> Electricity price: <span class="kwhprice">0</span> cents per kWh (your local
                                  energy price based on the location you selected in the Introduction tab)</li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="takeaction_category" style="display: none;">20</div>
                      </div>
                    </div>
                  </div>
                  <div class="new takeaction_section_housing">
                    <h>
                      <table style="margin-top: 5px;" border="0" cellpadding="0" cellspacing="0">
                        <tbody>
                          <tr>
                            <td><a class="chkPledge" id="chkPledge_energy_star_printers" style="display: block;" href="javascript:takeaction_pledge('energy_star_printers');">
                                <table align="center" class="trg" border="0" cellpadding="0" cellspacing="0">
                                  <tbody>
                                    <tr>
                                      <td class="chkPledge" style="height: 30px;"> Pledge </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </a></td>
                            <td><a class="trigger" style="display: block;" href="javascript:;">
                                <table class="trg" border="0" cellpadding="0" cellspacing="0" style="height: 30px;">
                                  <tbody>
                                    <tr>
                                      <td class="pledgeText" style="width: 315px;">Replace Printers With Energy Star
                                        Printers</td>
                                      <!--
                        <td style="width: 50px; text-align: left;"><img src="images/categories/transportation32.png" style="width: 23px; height: 23px;"/></td>
                        -->

                                      <td style="width: 105px; text-align: center;"><span class="takeaction_pounds" id="takeaction_pounds_energy_star_printers"
                                          style="color: #415683"></span></td>
                                      <td style="width: 105px; text-align: center;">$<span class="takeaction_dollars"
                                          id="takeaction_dollars_energy_star_printers"></span></td>
                                      <td style="width: 105px; text-align: center;">$<span class="takeaction_net10yr"
                                          id="takeaction_net10yr_energy_star_printers"></span></td>
                                    </tr>
                                  </tbody>
                                </table>
                              </a></td>
                          </tr>
                        </tbody>
                      </table>
                    </h>
                    <div style="position: relative" class="inner">
                      <div style="position: relative; ">
                        <div id="takeaction_greenglow_energy_star_printers" style="position: absolute; top: 0; left: 0; height: 100%; width: 100%; z-index: 0; box-shadow:inset 0px 0px 30px rgba(196,255,155,1); display: none;"></div>
                        <div class="pledge_container" style="font-size:12px; padding: 10px; position: relative; z-index: 10;">
                          <img src="images/pledges/LGDST/es_printer.png" alt="Energy Star Printer" align="right" vspace="5"
                            hspace="10" />
                          <p>I will replace
                            <input id="input_takeaction_energy_star_printers_amount" type="text" size="2" maxlength="2" />
                            conventional printers with Energy Star printers. I will purchase them for $<input id="input_takeaction_energy_star_printers_cost"
                              type="text" size="4" maxlength="4" /> each.
                          </p>
                          <div>
                            <a target="_blank" style="text-decoration: none; color:blue;" onMouseOver="this.style.color='black'"
                              onMouseOut="this.style.color='blue'" href="http://www.coolcalifornia.org/funding-wizard#search/energy+efficiency/%255BEligible+Applicants%253D%253DBusiness%255D/false/none/false/1/12">Find
                              rebates and incentives for this action</a>
                            <img src="images/funding-wizard-icon.png" style="position: absolute; width:35px; padding-left: 5px;">
                          </div>

                          <div class="assumption_button">
                            <a href="javascript:;" class="assumptionShowHideLink">[<span class="takeaction_assumption_plusminus">+</span>]
                              assumptions</a>
                          </div>
                          <div class="assumption_content">
                            <ul>
                              <li>Annual energy savings: <input id="input_takeaction_energy_star_printers_annual_savings"
                                  type="text" size="3" maxlength="3" /> kWh</li>
                            </ul>
                          </div>
                        </div>
                        <div class="takeaction_category" style="display: none;">21</div>
                      </div>
                    </div>
                  </div>
                  <div class="new takeaction_section_housing">
                    <h>
                      <table style="margin-top: 5px;" border="0" cellpadding="0" cellspacing="0">
                        <tbody>
                          <tr>
                            <td><a class="chkPledge" id="chkPledge_energy_star_copiers" style="display: block;" href="javascript:takeaction_pledge('energy_star_copiers');">
                                <table align="center" class="trg" border="0" cellpadding="0" cellspacing="0">
                                  <tbody>
                                    <tr>
                                      <td class="chkPledge" style="height: 30px;"> Pledge </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </a></td>
                            <td><a class="trigger" style="display: block;" href="javascript:;">
                                <table class="trg" border="0" cellpadding="0" cellspacing="0" style="height: 30px;">
                                  <tbody>
                                    <tr>
                                      <td class="pledgeText" style="width: 315px;">Replace Copiers With Energy Star
                                        Copiers</td>
                                      <!--
                        <td style="width: 50px; text-align: left;"><img src="images/categories/transportation32.png" style="width: 23px; height: 23px;"/></td>
                        -->

                                      <td style="width: 105px; text-align: center;"><span class="takeaction_pounds" id="takeaction_pounds_energy_star_copiers"
                                          style="color: #415683"></span></td>
                                      <td style="width: 105px; text-align: center;">$<span class="takeaction_dollars"
                                          id="takeaction_dollars_energy_star_copiers"></span></td>
                                      <td style="width: 105px; text-align: center;">$<span class="takeaction_net10yr"
                                          id="takeaction_net10yr_energy_star_copiers"></span></td>
                                    </tr>
                                  </tbody>
                                </table>
                              </a></td>
                          </tr>
                        </tbody>
                      </table>
                    </h>
                    <div style="position: relative" class="inner">
                      <div style="position: relative; ">
                        <div id="takeaction_greenglow_energy_star_copiers" style="position: absolute; top: 0; left: 0; height: 100%; width: 100%; z-index: 0; box-shadow:inset 0px 0px 30px rgba(196,255,155,1); display: none;"></div>
                        <div class="pledge_container" style="font-size:12px; padding: 10px; position: relative; z-index: 10;">
                          <img src="images/pledges/LGDST/es_copier.png" alt="Energy Star Copier" align="right" vspace="5"
                            hspace="10" />
                          <p>I will replace
                            <input id="input_takeaction_energy_star_copiers_amount" type="text" size="2" maxlength="2" />
                            conventional copiers with Energy Star copiers. I can purchase them for $<input id="input_takeaction_energy_star_copiers_cost"
                              type="text" size="4" maxlength="4" /> each.
                          </p>
                          <div>
                            <a target="_blank" style="text-decoration: none; color:blue;" onMouseOver="this.style.color='black'"
                              onMouseOut="this.style.color='blue'" href="http://www.coolcalifornia.org/funding-wizard#search/energy+efficiency/%255BEligible+Applicants%253D%253DBusiness%255D/false/none/false/1/12">Find
                              rebates and incentives for this action</a>
                            <img src="images/funding-wizard-icon.png" style="position: absolute; width:35px; padding-left: 5px;">
                          </div>

                          <div class="assumption_button">
                            <a href="javascript:;" class="assumptionShowHideLink">[<span class="takeaction_assumption_plusminus">+</span>]
                              assumptions</a>
                          </div>
                          <div class="assumption_content">
                            <ul>
                              <li>Annual energy savings: <input id="input_takeaction_energy_star_copiers_annual_savings"
                                  type="text" size="3" maxlength="3" /> kWh</li>
                            </ul>
                          </div>
                        </div>
                        <div class="takeaction_category" style="display: none;">22</div>
                      </div>
                    </div>
                  </div>
                  <div class="new takeaction_section_housing">
                    <h>
                      <table style="margin-top: 5px;" border="0" cellpadding="0" cellspacing="0">
                        <tbody>
                          <tr>
                            <td><a class="chkPledge" id="chkPledge_energy_star_desktops" style="display: block;" href="javascript:takeaction_pledge('energy_star_desktops');">
                                <table align="center" class="trg" border="0" cellpadding="0" cellspacing="0">
                                  <tbody>
                                    <tr>
                                      <td class="chkPledge" style="height: 30px;"> Pledge </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </a></td>
                            <td><a class="trigger" style="display: block;" href="javascript:;">
                                <table class="trg" border="0" cellpadding="0" cellspacing="0" style="height: 30px;">
                                  <tbody>
                                    <tr>
                                      <td class="pledgeText" style="width: 315px;">Replace Desktop Computers With
                                        Energy Star Models</td>
                                      <!--
                        <td style="width: 50px; text-align: left;"><img src="images/categories/transportation32.png" style="width: 23px; height: 23px;"/></td>
                        -->

                                      <td style="width: 105px; text-align: center;"><span class="takeaction_pounds" id="takeaction_pounds_energy_star_desktops"
                                          style="color: #415683"></span></td>
                                      <td style="width: 105px; text-align: center;">$<span class="takeaction_dollars"
                                          id="takeaction_dollars_energy_star_desktops"></span></td>
                                      <td style="width: 105px; text-align: center;">$<span class="takeaction_net10yr"
                                          id="takeaction_net10yr_energy_star_desktops"></span></td>
                                    </tr>
                                  </tbody>
                                </table>
                              </a></td>
                          </tr>
                        </tbody>
                      </table>
                    </h>
                    <div style="position: relative" class="inner">
                      <div style="position: relative; ">
                        <div id="takeaction_greenglow_energy_star_desktops" style="position: absolute; top: 0; left: 0; height: 100%; width: 100%; z-index: 0; box-shadow:inset 0px 0px 30px rgba(196,255,155,1); display: none;"></div>
                        <div class="pledge_container" style="font-size:12px; padding: 10px; position: relative; z-index: 10;">
                          <img src="images/pledges/LGDST/es_comp.png" alt="Energy Star Desktop" align="right" vspace="5"
                            hspace="10" />
                          <p>I will replace
                            <input id="input_takeaction_energy_star_desktops_amount" type="text" size="2" maxlength="2" />
                            conventional desktops with Energy Star desktops. I will purchase them for $<input id="input_takeaction_energy_star_desktops_cost"
                              type="text" size="4" maxlength="4" /> each.
                          </p>
                          <div>
                            <a target="_blank" style="text-decoration: none; color:blue;" onMouseOver="this.style.color='black'"
                              onMouseOut="this.style.color='blue'" href="http://www.coolcalifornia.org/funding-wizard#search/energy+efficiency/%255BEligible+Applicants%253D%253DBusiness%255D/false/none/false/1/12">Find
                              rebates and incentives for this action</a>
                            <img src="images/funding-wizard-icon.png" style="position: absolute; width:35px; padding-left: 5px;">
                          </div>

                          <div class="assumption_button">
                            <a href="javascript:;" class="assumptionShowHideLink">[<span class="takeaction_assumption_plusminus">+</span>]
                              assumptions</a>
                          </div>
                          <div class="assumption_content">
                            <ul>
                              <li>Annual energy savings: <input id="input_takeaction_energy_star_desktops_annual_savings"
                                  type="text" size="3" maxlength="3" /> kWh</li>
                            </ul>
                          </div>
                        </div>
                        <div class="takeaction_category" style="display: none;">23</div>
                      </div>
                    </div>
                  </div>
                  <div class="new takeaction_section_housing">
                    <h>
                      <table style="margin-top: 5px;" border="0" cellpadding="0" cellspacing="0">
                        <tbody>
                          <tr>
                            <td><a class="chkPledge" id="chkPledge_rechargeable_batteries" style="display: block;" href="javascript:takeaction_pledge('rechargeable_batteries');">
                                <table align="center" class="trg" border="0" cellpadding="0" cellspacing="0">
                                  <tbody>
                                    <tr>
                                      <td class="chkPledge" style="height: 30px;"> Pledge </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </a></td>
                            <td><a class="trigger" style="display: block;" href="javascript:;">
                                <table class="trg" border="0" cellpadding="0" cellspacing="0" style="height: 30px;">
                                  <tbody>
                                    <tr>
                                      <td class="pledgeText" style="width: 315px;">Use Rechargeable Batteries</td>
                                      <!--
                        <td style="width: 50px; text-align: left;"><img src="images/categories/transportation32.png" style="width: 23px; height: 23px;"/></td>
                        -->

                                      <td style="width: 105px; text-align: center;"><span class="takeaction_pounds" id="takeaction_pounds_rechargeable_batteries"
                                          style="color: #415683"></span></td>
                                      <td style="width: 105px; text-align: center;">$<span class="takeaction_dollars"
                                          id="takeaction_dollars_rechargeable_batteries"></span></td>
                                      <td style="width: 105px; text-align: center;">$<span class="takeaction_net10yr"
                                          id="takeaction_net10yr_rechargeable_batteries"></span></td>
                                    </tr>
                                  </tbody>
                                </table>
                              </a></td>
                          </tr>
                        </tbody>
                      </table>
                    </h>
                    <div style="position: relative" class="inner">
                      <div style="position: relative; ">
                        <div id="takeaction_greenglow_rechargeable_batteries" style="position: absolute; top: 0; left: 0; height: 100%; width: 100%; z-index: 0; box-shadow:inset 0px 0px 30px rgba(196,255,155,1); display: none;"></div>
                        <div class="pledge_container" style="font-size:12px; padding: 10px; position: relative; z-index: 10;">
                          <img src="images/pledges/LITE/rechargeable.png" alt="Rechargeable Batteries" align="right"
                            vspace="5" hspace="10" />

                          <p>My monthly battery use:
                            <div style="margin-top:10; margin-bottom:10;"> </div>
                            <input id="input_takeaction_rechargeable_batteries_amount_aaa" type="text" size="3"
                              maxlength="3" />
                            AAA <br />
                            <input id="input_takeaction_rechargeable_batteries_amount_aa" type="text" size="3"
                              maxlength="3" />
                            AA <br />
                            <input id="input_takeaction_rechargeable_batteries_amount_c" type="text" size="3" maxlength="3" />
                            C <br />
                            <input id="input_takeaction_rechargeable_batteries_amount_d" type="text" size="3" maxlength="3" />
                            D <br />
                            <input id="input_takeaction_rechargeable_batteries_amount_9v" type="text" size="3"
                              maxlength="3" />
                            9V <br />

                            <br />
                            I will buy rechargeable batteries instead of disposable ones.
                          </p>
                          <div>
                            <a target="_blank" style="text-decoration: none; color:blue;" onMouseOver="this.style.color='black'"
                              onMouseOut="this.style.color='blue'" href="http://www.coolcalifornia.org/funding-wizard#search//%255BZipcode%253D%253D94720%255D%255BEligible+Applicants%253D%253DIndividual%255D%255BCategory%253D%253DEnergy%255D/false/none/false/1/12">Find
                              rebates and incentives for this action</a>
                            <img src="images/funding-wizard-icon.png" style="position: absolute; width:35px; padding-left: 5px;">
                          </div>

                          <div class="assumption_button">
                            <a href="javascript:;" class="assumptionShowHideLink">[<span class="takeaction_assumption_plusminus">+</span>]
                              assumptions</a>
                          </div>
                          <div class="assumption_content">
                            <p>
                              Disposable batteries are alkaline and rechargable batteries are NiCd.

                              Rechargeable batteries can be re-used <input id="input_takeaction_rechargeable_batteries_uses"
                                type="text" size="3" maxlength="3" />
                              time and costs <input id="input_takeaction_rechargeable_batteries_cost_multiple" type="text"
                                size="3" maxlength="3" /> times as much as disposable models.
                            </p>
                            <p>
                              Cost of disposable batteries:
                              <div style="margin-top:5; margin-bottom:5;"> </div>
                              <ul>
                                $<input id="input_takeaction_rechargeable_batteries_cost_aaa" type="text" size="3"
                                  maxlength="3" />
                                per AAA <br />
                                $<input id="input_takeaction_rechargeable_batteries_cost_aa" type="text" size="3"
                                  maxlength="3" />
                                per AA <br />
                                $<input id="input_takeaction_rechargeable_batteries_cost_c" type="text" size="3"
                                  maxlength="3" />
                                per C <br />
                                $<input id="input_takeaction_rechargeable_batteries_cost_d" type="text" size="3"
                                  maxlength="3" />
                                per D <br />
                                $<input id="input_takeaction_rechargeable_batteries_cost_9v" type="text" size="3"
                                  maxlength="3" />
                                per 9V
                              </ul>
                            </p>


                          </div>
                        </div>
                        <div class="takeaction_category" style="display: none;">24</div>
                      </div>
                    </div>
                  </div>
                  <div class="new takeaction_section_housing">
                    <h>
                      <table style="margin-top: 5px;" border="0" cellpadding="0" cellspacing="0">
                        <tbody>
                          <tr>
                            <td><a class="chkPledge" id="chkPledge_power_mgmt_comp" style="display: block;" href="javascript:takeaction_pledge('power_mgmt_comp');">
                                <table align="center" class="trg" border="0" cellpadding="0" cellspacing="0">
                                  <tbody>
                                    <tr>
                                      <td class="chkPledge" style="height: 30px;"> Pledge </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </a></td>
                            <td><a class="trigger" style="display: block;" href="javascript:;">
                                <table class="trg" border="0" cellpadding="0" cellspacing="0" style="height: 30px;">
                                  <tbody>
                                    <tr>
                                      <td class="pledgeText" style="width: 315px;">Power Management of Computers</td>
                                      <!--
                        <td style="width: 50px; text-align: left;"><img src="images/categories/transportation32.png" style="width: 23px; height: 23px;"/></td>
                        -->

                                      <td style="width: 105px; text-align: center;"><span class="takeaction_pounds" id="takeaction_pounds_power_mgmt_comp"
                                          style="color: #415683"></span></td>
                                      <td style="width: 105px; text-align: center;">$<span class="takeaction_dollars"
                                          id="takeaction_dollars_power_mgmt_comp"></span></td>
                                      <td style="width: 105px; text-align: center;">$<span class="takeaction_net10yr"
                                          id="takeaction_net10yr_power_mgmt_comp"></span></td>
                                    </tr>
                                  </tbody>
                                </table>
                              </a></td>
                          </tr>
                        </tbody>
                      </table>
                    </h>
                    <div style="position: relative" class="inner">
                      <div style="position: relative; ">
                        <div id="takeaction_greenglow_power_mgmt_comp" style="position: absolute; top: 0; left: 0; height: 100%; width: 100%; z-index: 0; box-shadow:inset 0px 0px 30px rgba(196,255,155,1); display: none;"></div>
                        <div class="pledge_container" style="font-size:12px; padding: 10px; position: relative; z-index: 10;">
                          <img src="images/pledges/LGDST/es_pwrmgmt.png" alt="Power Management of Computers" align="right"
                            vspace="5" hspace="10" />
                          <p>I have <input id="input_takeaction_power_mgmt_comp_desktops" type="text" size="2"
                              maxlength="2" /> desktops and <input id="input_takeaction_power_mgmt_comp_monitors" type="text"
                              size="2" maxlength="2" /> monitors. <br />
                            I will put
                            <select id="input_takeaction_power_mgmt_comp_percent_d">
                              <option value=".25">25%</option>
                              <option value=".5">50%</option>
                              <option value=".75">75%</option>
                              <option value="1">100%</option>
                            </select>
                            of my desktop in sleep or hibernate mode during nights and weekends and turn off
                            <select id="input_takeaction_power_mgmt_comp_percent_m">
                              <option value=".25">25%</option>
                              <option value=".5">50%</option>
                              <option value=".75">75%</option>
                              <option value="1">100%</option>
                            </select>
                            of my monitors during nights and weekends.
                          </p>
                          <div>
                            <a target="_blank" style="text-decoration: none; color:blue;" onMouseOver="this.style.color='black'"
                              onMouseOut="this.style.color='blue'" href="http://www.coolcalifornia.org/funding-wizard#search//%255BZipcode%253D%253D94720%255D%255BEligible+Applicants%253D%253DIndividual%255D%255BCategory%253D%253DEnergy%255D/false/none/false/1/12">Find
                              rebates and incentives for this action</a>
                            <img src="images/funding-wizard-icon.png" style="position: absolute; width:35px; padding-left: 5px;">
                          </div>

                          <div class="assumption_button">
                            <a href="javascript:;" class="assumptionShowHideLink">[<span class="takeaction_assumption_plusminus">+</span>]
                              assumptions</a>
                          </div>
                          <div class="assumption_content">
                            <ul>
                              <li>You save 500 kWh every year from putting computers in sleep mode</li>
                              <li>You save 250 kWh every year from putting your monitors in sleep mode</li>
                            </ul>
                          </div>
                        </div>
                        <div class="takeaction_category" style="display: none;">25</div>
                      </div>
                    </div>
                  </div>
                  <div class="new takeaction_section_housing">
                    <h>
                      <table style="margin-top: 5px;" border="0" cellpadding="0" cellspacing="0">
                        <tbody>
                          <tr>
                            <td><a class="chkPledge" id="chkPledge_purchase_green_electricity" style="display: block;"
                                href="javascript:takeaction_pledge('purchase_green_electricity');">
                                <table align="center" class="trg" border="0" cellpadding="0" cellspacing="0">
                                  <tbody>
                                    <tr>
                                      <td class="chkPledge" style="height: 30px;"> Pledge </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </a></td>
                            <td><a class="trigger" style="display: block;" href="javascript:;">
                                <table class="trg" border="0" cellpadding="0" cellspacing="0" style="height: 30px;">
                                  <tbody>
                                    <tr>
                                      <td class="pledgeText" style="width: 315px;">Purchase Green Electricity</td>
                                      <!--
                        <td style="width: 50px; text-align: left;"><img src="images/categories/transportation32.png" style="width: 23px; height: 23px;"/></td>
                        -->

                                      <td style="width: 105px; text-align: center;"><span class="takeaction_pounds" id="takeaction_pounds_purchase_green_electricity"
                                          style="color: #415683"></span></td>
                                      <td style="width: 105px; text-align: center;">$<span class="takeaction_dollars"
                                          id="takeaction_dollars_purchase_green_electricity"></span></td>
                                      <td style="width: 105px; text-align: center;">$<span class="takeaction_net10yr"
                                          id="takeaction_net10yr_purchase_green_electricity"></span></td>
                                    </tr>
                                  </tbody>
                                </table>
                              </a></td>
                          </tr>
                        </tbody>
                      </table>
                    </h>
                    <div style="position: relative" class="inner">
                      <div style="position: relative; ">
                        <div id="takeaction_greenglow_purchase_green_electricity" style="position: absolute; top: 0; left: 0; height: 100%; width: 100%; z-index: 0; box-shadow:inset 0px 0px 30px rgba(196,255,155,1); display: none;"></div>
                        <div class="pledge_container" style="font-size:12px; padding: 10px; position: relative; z-index: 10;">

                          <img src="images/pledges/icon17.png" alt="Icon for clean energy" align="right" vspace="5"
                            hspace="10" /> My household uses <span id="display_takeaction_purchase_green_electricity_kwhyear">0
                          </span> kilowatt hours of electricity per year, which produces <span id="result_takeaction_purchase_green_electricity_kwhCO2yr">0
                          </span> metric tons of CO2e per year.
                          I will purchase
                          <select id="input_takeaction_purchase_green_electricity_percentclean">
                            <option value="1.0">100%</option>
                            <option value="0.9">90%</option>
                            <option value="0.8">80%</option>
                            <option value="0.7">70%</option>
                            <option value="0.6">60%</option>
                            <option value="0.5">50%</option>
                            <option value="0.4">40%</option>
                            <option value="0.3">30%</option>
                            <option value="0.2">20%</option>
                            <option value="0.1">10%</option>
                          </select>

                          of my electricity from a clean energy provider at a cost of $
                          <input type="text" id="input_takeaction_purchase_green_electricity_costclean" size="3"
                            maxlength="3" />
                          per metric ton of CO2e.
                          <div class="funfact">Voluntary buy-in to EPA-certified green power has soared with 41% annual
                            growth rates since 2004, and one in four utilites now offering the green power upgrade
                            option. If you haven't joined yet, it's a simple and effective way to green your home's
                            power.</div>
                          <div>
                            <a target="_blank" style="text-decoration: none; color:blue;" onMouseOver="this.style.color='black'"
                              onMouseOut="this.style.color='blue'" href="http://www.coolcalifornia.org/funding-wizard#search/home+electricity//false/none/false/1/12">Find
                              rebates and incentives for this action</a>
                            <img src="images/funding-wizard-icon.png" style="position: absolute; width:35px; padding-left: 5px;">
                          </div>

                          <div class="assumption_button">
                            <a href="javascript:;" class="assumptionShowHideLink">[<span class="takeaction_assumption_plusminus">+</span>]
                              assumptions</a>
                          </div>
                          <div class="assumption_content">
                            <div>
                              <ul>
                                <li>cost of electricity
                                  <input type="text" id="input_takeaction_purchase_green_electricity_kwhcost" size="2"
                                    maxlength="2" />
                                  cents per kWh </li>
                                <li>Green Power Facts Source: National Renewable Energy Laboratory Report - Voluntary
                                  Green Power Market
                                  Forecast through 2015. May 2010 <a href="http://www.nrel.gov/docs/fy10osti/48158.pdf">nrel.gov
                                    PDF</a>
                              </ul>
                            </div>
                          </div>
                          <script>
                            $(document).ready(function(){
	$("#input_footprint_housing_cleanpercent").change(function(){
		var number = $("#input_footprint_housing_cleanpercent").val();
		var option = $("#input_takeaction_purchase_green_electricity_percentclean option:contains("+ number+ "%)");

		setTimeout(function(){
			option.prop("selected",true);
			$("#takeaction_pounds_purchase_green_electricity").html(0.0634*number);
			$("#takeaction_net10yr_purchase_green_electricity").html(1.27*number);
		}, 500);
	});
});
</script>
                        </div>
                        <div class="takeaction_category" style="display: none;">26</div>
                      </div>
                    </div>
                  </div>
                  <div class="new takeaction_section_housing">
                    <h>
                      <table style="margin-top: 5px;" border="0" cellpadding="0" cellspacing="0">
                        <tbody>
                          <tr>
                            <td><a class="chkPledge" id="chkPledge_install_PV_panels" style="display: block;" href="javascript:takeaction_pledge('install_PV_panels');">
                                <table align="center" class="trg" border="0" cellpadding="0" cellspacing="0">
                                  <tbody>
                                    <tr>
                                      <td class="chkPledge" style="height: 30px;"> Pledge </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </a></td>
                            <td><a class="trigger" style="display: block;" href="javascript:;">
                                <table class="trg" border="0" cellpadding="0" cellspacing="0" style="height: 30px;">
                                  <tbody>
                                    <tr>
                                      <td class="pledgeText" style="width: 315px;">Install PV Panels</td>
                                      <!--
                        <td style="width: 50px; text-align: left;"><img src="images/categories/transportation32.png" style="width: 23px; height: 23px;"/></td>
                        -->

                                      <td style="width: 105px; text-align: center;"><span class="takeaction_pounds" id="takeaction_pounds_install_PV_panels"
                                          style="color: #415683"></span></td>
                                      <td style="width: 105px; text-align: center;">$<span class="takeaction_dollars"
                                          id="takeaction_dollars_install_PV_panels"></span></td>
                                      <td style="width: 105px; text-align: center;">$<span class="takeaction_net10yr"
                                          id="takeaction_net10yr_install_PV_panels"></span></td>
                                    </tr>
                                  </tbody>
                                </table>
                              </a></td>
                          </tr>
                        </tbody>
                      </table>
                    </h>
                    <div style="position: relative" class="inner">
                      <div style="position: relative; ">
                        <div id="takeaction_greenglow_install_PV_panels" style="position: absolute; top: 0; left: 0; height: 100%; width: 100%; z-index: 0; box-shadow:inset 0px 0px 30px rgba(196,255,155,1); display: none;"></div>
                        <div class="pledge_container" style="font-size:12px; padding: 10px; position: relative; z-index: 10;">
                          <img src="images/pledges/LGDST/PVpanel.png" alt="Solar PV Panels" align="right" vspace="5"
                            hspace="10" />
                          My household uses <span id="display_takeaction_install_PV_panels_kwhyear">0 </span> kilowatt
                          hours of electricity per year, which produces <span id="result_takeaction_install_PV_panels_kwhCO2yr">0
                          </span> metric tons of CO2e per year.
                          <p>I will meet
                            <select id="input_takeaction_install_PV_panels_percent">
                              <option value=".05">5%</option>
                              <option value=".1">10%</option>
                              <option value=".15">15%</option>
                              <option value=".2">20%</option>
                              <option value=".25">25%</option>
                              <option value=".3">30%</option>
                              <option value=".35">35%</option>
                              <option value=".4">40%</option>
                              <option value=".45">45%</option>
                              <option value=".5">50%</option>
                              <option value=".55">55%</option>
                              <option value=".6">60%</option>
                              <option value=".65">65%</option>
                              <option value=".7">70%</option>
                              <option value=".75">75%</option>
                              <option value=".8">80%</option>
                              <option value=".85">85%</option>
                              <option value=".9">90%</option>
                              <option value=".95">95%</option>
                              <option value="1">100%</option>
                            </select>
                            of my electricity needs by installing solar photovoltaic (PV) panels. It costs $<input id="input_takeaction_install_PV_panels_w_cost"
                              type="text" size="2" maxlength="2" /> per watt.</p>

                          <div>
                            <a target="_blank" style="text-decoration: none; color:blue;" onMouseOver="this.style.color='black'"
                              onMouseOut="this.style.color='blue'" href="http://www.coolcalifornia.org/funding-wizard#search/home+electricity//false/none/false/1/12">Find
                              rebates and incentives for this action</a>
                            <img src="images/funding-wizard-icon.png" style="position: absolute; width:35px; padding-left: 5px;">
                          </div>
                          <div class="assumption_button">
                            <a href="javascript:;" class="assumptionShowHideLink">[<span class="takeaction_assumption_plusminus">+</span>]
                              assumptions</a>
                          </div>
                          <div class="assumption_content">
                            <li>Price of electricity: <span class="kwhprice">0</span> (cents/kWh) <img src="images/carb_question_mark.png"
                                border="0" title="Click the Assumptions button above to change the price of electricity."
                                class="tTip tTipHandle" /> </li>
                            <li>We assume 1654 kWh per Watt annual generation capacity (average for California). Actual
                              generation capacity will vary by location, panel orientation, tree shading and other
                              factors</li>
                          </div>
                        </div>
                        <div class="takeaction_category" style="display: none;">27</div>
                      </div>
                    </div>
                  </div>
                  <div class="new takeaction_section_housing">
                    <h>
                      <table style="margin-top: 5px;" border="0" cellpadding="0" cellspacing="0">
                        <tbody>
                          <tr>
                            <td><a class="chkPledge" id="chkPledge_install_solar_heating" style="display: block;" href="javascript:takeaction_pledge('install_solar_heating');">
                                <table align="center" class="trg" border="0" cellpadding="0" cellspacing="0">
                                  <tbody>
                                    <tr>
                                      <td class="chkPledge" style="height: 30px;"> Pledge </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </a></td>
                            <td><a class="trigger" style="display: block;" href="javascript:;">
                                <table class="trg" border="0" cellpadding="0" cellspacing="0" style="height: 30px;">
                                  <tbody>
                                    <tr>
                                      <td class="pledgeText" style="width: 315px;">Install Solar Hot Water Heater</td>
                                      <!--
                        <td style="width: 50px; text-align: left;"><img src="images/categories/transportation32.png" style="width: 23px; height: 23px;"/></td>
                        -->

                                      <td style="width: 105px; text-align: center;"><span class="takeaction_pounds" id="takeaction_pounds_install_solar_heating"
                                          style="color: #415683"></span></td>
                                      <td style="width: 105px; text-align: center;">$<span class="takeaction_dollars"
                                          id="takeaction_dollars_install_solar_heating"></span></td>
                                      <td style="width: 105px; text-align: center;">$<span class="takeaction_net10yr"
                                          id="takeaction_net10yr_install_solar_heating"></span></td>
                                    </tr>
                                  </tbody>
                                </table>
                              </a></td>
                          </tr>
                        </tbody>
                      </table>
                    </h>
                    <div style="position: relative" class="inner">
                      <div style="position: relative; ">
                        <div id="takeaction_greenglow_install_solar_heating" style="position: absolute; top: 0; left: 0; height: 100%; width: 100%; z-index: 0; box-shadow:inset 0px 0px 30px rgba(196,255,155,1); display: none;"></div>
                        <div class="pledge_container" style="font-size:12px; padding: 10px; position: relative; z-index: 10;">
                          <img src="images/pledges/LGDST/solar_hotwater_h.png" alt="Solar Hot Water Heater" align="right"
                            vspace="5" hspace="10" />
                          A typical <span id="display_takeaction_install_solar_heating_sqft">0</span> square foot home
                          in my climate uses
                          <input id="input_takeaction_install_solar_heating_ng_consumption" type="text" size="3"
                            maxlength="3" /> cubic feet
                          per year on heating.
                          <p>I will meet
                            <select id="input_takeaction_install_solar_heating_percent">
                              <option value=".05">5%</option>
                              <option value=".1">10%</option>
                              <option value=".15">15%</option>
                              <option value=".2">20%</option>
                              <option value=".25">25%</option>
                              <option value=".3">30%</option>
                              <option value=".35">35%</option>
                              <option value=".4">40%</option>
                              <option value=".45">45%</option>
                              <option value=".5">50%</option>
                              <option value=".55">55%</option>
                              <option value=".6">60%</option>
                              <option value=".65">65%</option>
                              <option value=".7">70%</option>
                              <option value=".75">75%</option>
                              <option value=".8">80%</option>
                              <option value=".85">85%</option>
                              <option value=".9">90%</option>
                              <option value=".95">95%</option>
                              <option value="1">100%</option>
                            </select>
                            of my heating needs by installing solar photovoltaic (PV) panels. It costs $<input id="input_takeaction_install_solar_heating_cost"
                              type="text" size="2" maxlength="2" /> per cubic feet of natural gas. </p>

                          <div>
                            <a target="_blank" style="text-decoration: none; color:blue;" onMouseOver="this.style.color='black'"
                              onMouseOut="this.style.color='blue'" href="http://www.coolcalifornia.org/funding-wizard#search/home+electricity//false/none/false/1/12">Find
                              rebates and incentives for this action</a>
                            <img src="images/funding-wizard-icon.png" style="width:35px; padding-left: 5px;">
                          </div>
                        </div>
                        <div class="takeaction_category" style="display: none;">28</div>
                      </div>
                    </div>
                  </div>
                  <div class="new takeaction_section_housing">
                    <h>
                      <table style="margin-top: 5px;" border="0" cellpadding="0" cellspacing="0">
                        <tbody>
                          <tr>
                            <td><a class="chkPledge" id="chkPledge_low_flow_showerheads" style="display: block;" href="javascript:takeaction_pledge('low_flow_showerheads');">
                                <table align="center" class="trg" border="0" cellpadding="0" cellspacing="0">
                                  <tbody>
                                    <tr>
                                      <td class="chkPledge" style="height: 30px;"> Pledge </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </a></td>
                            <td><a class="trigger" style="display: block;" href="javascript:;">
                                <table class="trg" border="0" cellpadding="0" cellspacing="0" style="height: 30px;">
                                  <tbody>
                                    <tr>
                                      <td class="pledgeText" style="width: 315px;">Install Low Flow Showerheads</td>
                                      <!--
                        <td style="width: 50px; text-align: left;"><img src="images/categories/transportation32.png" style="width: 23px; height: 23px;"/></td>
                        -->

                                      <td style="width: 105px; text-align: center;"><span class="takeaction_pounds" id="takeaction_pounds_low_flow_showerheads"
                                          style="color: #415683"></span></td>
                                      <td style="width: 105px; text-align: center;">$<span class="takeaction_dollars"
                                          id="takeaction_dollars_low_flow_showerheads"></span></td>
                                      <td style="width: 105px; text-align: center;">$<span class="takeaction_net10yr"
                                          id="takeaction_net10yr_low_flow_showerheads"></span></td>
                                    </tr>
                                  </tbody>
                                </table>
                              </a></td>
                          </tr>
                        </tbody>
                      </table>
                    </h>
                    <div style="position: relative" class="inner">
                      <div style="position: relative; ">
                        <div id="takeaction_greenglow_low_flow_showerheads" style="position: absolute; top: 0; left: 0; height: 100%; width: 100%; z-index: 0; box-shadow:inset 0px 0px 30px rgba(196,255,155,1); display: none;"></div>
                        <div class="pledge_container" style="font-size:12px; padding: 10px; position: relative; z-index: 10;">
                          <img src="images/pledges/LGDST/lf_showerheads.png" alt="Low Flow Showerheads" align="right"
                            vspace="5" hspace="10" />
                          <p>
                            On average, we collectively take <input id="input_takeaction_low_flow_showerheads_avg_showers"
                              type="text" size="3" maxlength"3" /> showers a day. <br />
                            Our showers are on average taken for <input id="input_takeaction_low_flow_showerheads_length"
                              type="text" size="3" maxlength="3" /> minutes each. <br />
                            Of my household's <input id="input_takeaction_low_flow_showerheads_amount" type="text" size="3"
                              maxlength="3" /> showerheads, I will replace
                            <input id="input_takeaction_low_flow_showerheads_amount_replaced" type="text" size="3"
                              maxlength="3" /> of them with more efficient, low-flow showerheads.
                            They will each cost $<input id="input_takeaction_low_flow_showerheads_cost" type="text"
                              size="4" maxlength="4" />.
                          </p>

                          <div class="assumption_button">
                            <a href="javascript:;" class="assumptionShowHideLink">[<span class="takeaction_assumption_plusminus">+</span>]
                              assumptions</a>
                          </div>
                          <div class="assumption_content">
                            <ul>
                              <li>The cost to heat a gallon of water using natural gas is $<input id="input_takeaction_low_flow_showerheads_nat_gas_gallon"
                                  type="text" size="4" maxlength="4" /></li>
                              <li>We assume that the conventional showerheads use <input id="input_takeaction_low_flow_showerheads_old_flow"
                                  type="text" size="4" maxlength="4" /> gallons per minute while the new low-flow
                                showerheads use
                                <input id="input_takeaction_low_flow_showerheads_new_flow" type="text" size="4"
                                  maxlength="4" /> gallons per minute</li>
                            </ul>
                          </div>
                        </div>
                        <div class="takeaction_category" style="display: none;">29</div>
                      </div>
                    </div>
                  </div>
                  <div class="new takeaction_section_housing">
                    <h>
                      <table style="margin-top: 5px;" border="0" cellpadding="0" cellspacing="0">
                        <tbody>
                          <tr>
                            <td><a class="chkPledge" id="chkPledge_low_flow_faucets" style="display: block;" href="javascript:takeaction_pledge('low_flow_faucets');">
                                <table align="center" class="trg" border="0" cellpadding="0" cellspacing="0">
                                  <tbody>
                                    <tr>
                                      <td class="chkPledge" style="height: 30px;"> Pledge </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </a></td>
                            <td><a class="trigger" style="display: block;" href="javascript:;">
                                <table class="trg" border="0" cellpadding="0" cellspacing="0" style="height: 30px;">
                                  <tbody>
                                    <tr>
                                      <td class="pledgeText" style="width: 315px;">Install Low Flow Faucets</td>
                                      <!--
                        <td style="width: 50px; text-align: left;"><img src="images/categories/transportation32.png" style="width: 23px; height: 23px;"/></td>
                        -->

                                      <td style="width: 105px; text-align: center;"><span class="takeaction_pounds" id="takeaction_pounds_low_flow_faucets"
                                          style="color: #415683"></span></td>
                                      <td style="width: 105px; text-align: center;">$<span class="takeaction_dollars"
                                          id="takeaction_dollars_low_flow_faucets"></span></td>
                                      <td style="width: 105px; text-align: center;">$<span class="takeaction_net10yr"
                                          id="takeaction_net10yr_low_flow_faucets"></span></td>
                                    </tr>
                                  </tbody>
                                </table>
                              </a></td>
                          </tr>
                        </tbody>
                      </table>
                    </h>
                    <div style="position: relative" class="inner">
                      <div style="position: relative; ">
                        <div id="takeaction_greenglow_low_flow_faucets" style="position: absolute; top: 0; left: 0; height: 100%; width: 100%; z-index: 0; box-shadow:inset 0px 0px 30px rgba(196,255,155,1); display: none;"></div>
                        <div class="pledge_container" style="font-size:12px; padding: 10px; position: relative; z-index: 10;">
                          <img src="images/pledges/LGDST/lf_faucet.png" alt="Low Flow Faucet" align="right" vspace="5"
                            hspace="10" />
                          <p>
                            On average, we collectively use our faucets <input id="input_takeaction_low_flow_faucets_avg_daily_use"
                              type="text" size="3" maxlength"3" /> times a day. <br />
                            Of my household's <input id="input_takeaction_low_flow_faucets_amount" type="text" size="3"
                              maxlength="3" /> faucets, I will replace
                            <input id="input_takeaction_low_flow_faucets_replaced" type="text" size="3" maxlength="3" />
                            of them with more efficient, low-flow faucets.
                            They will each cost $<input id="input_takeaction_low_flow_faucets_cost" type="text" size="4"
                              maxlength="4" />.
                          </p>

                          <div class="assumption_button">
                            <a href="javascript:;" class="assumptionShowHideLink">[<span class="takeaction_assumption_plusminus">+</span>]
                              assumptions</a>
                          </div>
                          <div class="assumption_content">
                            <ul>
                              <li>On average, we assume that a faucet is used for <input id="input_takeaction_low_flow_faucets_minutes"
                                  type="text" size="4" maxlength="4" /> per use. </li>
                              <li>We assume that the conventional faucets use <input id="input_takeaction_low_flow_faucets_conventional"
                                  type="text" size="4" maxlength="4" /> gallons per minute while the new low-flow
                                showerheads use
                                <input id="input_takeaction_low_flow_faucets_efficient" type="text" size="4" maxlength="4" />
                                gallons per minute</li>
                            </ul>
                          </div>
                        </div>
                        <div class="takeaction_category" style="display: none;">30</div>
                      </div>
                    </div>
                  </div>
                  <div class="new takeaction_section_housing">
                    <h>
                      <table style="margin-top: 5px;" border="0" cellpadding="0" cellspacing="0">
                        <tbody>
                          <tr>
                            <td><a class="chkPledge" id="chkPledge_low_flow_toilet" style="display: block;" href="javascript:takeaction_pledge('low_flow_toilet');">
                                <table align="center" class="trg" border="0" cellpadding="0" cellspacing="0">
                                  <tbody>
                                    <tr>
                                      <td class="chkPledge" style="height: 30px;"> Pledge </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </a></td>
                            <td><a class="trigger" style="display: block;" href="javascript:;">
                                <table class="trg" border="0" cellpadding="0" cellspacing="0" style="height: 30px;">
                                  <tbody>
                                    <tr>
                                      <td class="pledgeText" style="width: 315px;">Choose a Low Flow Toilet</td>
                                      <!--
                        <td style="width: 50px; text-align: left;"><img src="images/categories/transportation32.png" style="width: 23px; height: 23px;"/></td>
                        -->

                                      <td style="width: 105px; text-align: center;"><span class="takeaction_pounds" id="takeaction_pounds_low_flow_toilet"
                                          style="color: #415683"></span></td>
                                      <td style="width: 105px; text-align: center;">$<span class="takeaction_dollars"
                                          id="takeaction_dollars_low_flow_toilet"></span></td>
                                      <td style="width: 105px; text-align: center;">$<span class="takeaction_net10yr"
                                          id="takeaction_net10yr_low_flow_toilet"></span></td>
                                    </tr>
                                  </tbody>
                                </table>
                              </a></td>
                          </tr>
                        </tbody>
                      </table>
                    </h>
                    <div style="position: relative" class="inner">
                      <div style="position: relative; ">
                        <div id="takeaction_greenglow_low_flow_toilet" style="position: absolute; top: 0; left: 0; height: 100%; width: 100%; z-index: 0; box-shadow:inset 0px 0px 30px rgba(196,255,155,1); display: none;"></div>
                        <div class="pledge_container" style="font-size:12px; padding: 10px; position: relative; z-index: 10;">
                          <img src="images/pledges/LITE/lf_toilet.png" alt="Low Flow Toilet" align="right" vspace="5"
                            hspace="10" />
                          <p> I will replace
                            <input id="input_takeaction_low_flow_toilet_amount" type="text" size="2" maxlength="2" />
                            of my old
                            <select id="input_takeaction_low_flow_toilet_old">
                              <option value="1">1</option>
                              <option value="1.5">1.5</option>
                              <option value="2">2</option>
                              <option value="2.5">2.5</option>
                              <option value="3">3</option>
                              <option value="3.5">3.5</option>
                              <option value="4">4</option>
                              <option value="4.5">4.5</option>
                              <option value="5">5</option>
                            </select>
                            gallon per flush toilet(s) with a
                            <select id="input_takeaction_low_flow_toilet_new">
                              <option value="1">1</option>
                              <option value="1.5">1.5</option>
                              <option value="2">2</option>
                              <option value="2.5">2.5</option>
                              <option value="3">3</option>
                            </select>
                            gallon low-flush model that costs $
                            <input id="input_takeaction_low_flow_toilet_cost" type="text" size="2" maxlength="2" />
                          </p>
                        </div>
                        <div class="takeaction_category" style="display: none;">31</div>
                      </div>
                    </div>
                  </div>
                  <div class="new takeaction_section_housing">
                    <h>
                      <table style="margin-top: 5px;" border="0" cellpadding="0" cellspacing="0">
                        <tbody>
                          <tr>
                            <td><a class="chkPledge" id="chkPledge_line_dry_clothing" style="display: block;" href="javascript:takeaction_pledge('line_dry_clothing');">
                                <table align="center" class="trg" border="0" cellpadding="0" cellspacing="0">
                                  <tbody>
                                    <tr>
                                      <td class="chkPledge" style="height: 30px;"> Pledge </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </a></td>
                            <td><a class="trigger" style="display: block;" href="javascript:;">
                                <table class="trg" border="0" cellpadding="0" cellspacing="0" style="height: 30px;">
                                  <tbody>
                                    <tr>
                                      <td class="pledgeText" style="width: 315px;">Line-dry Clothing</td>
                                      <!--
                        <td style="width: 50px; text-align: left;"><img src="images/categories/transportation32.png" style="width: 23px; height: 23px;"/></td>
                        -->

                                      <td style="width: 105px; text-align: center;"><span class="takeaction_pounds" id="takeaction_pounds_line_dry_clothing"
                                          style="color: #415683"></span></td>
                                      <td style="width: 105px; text-align: center;">$<span class="takeaction_dollars"
                                          id="takeaction_dollars_line_dry_clothing"></span></td>
                                      <td style="width: 105px; text-align: center;">$<span class="takeaction_net10yr"
                                          id="takeaction_net10yr_line_dry_clothing"></span></td>
                                    </tr>
                                  </tbody>
                                </table>
                              </a></td>
                          </tr>
                        </tbody>
                      </table>
                    </h>
                    <div style="position: relative" class="inner">
                      <div style="position: relative; ">
                        <div id="takeaction_greenglow_line_dry_clothing" style="position: absolute; top: 0; left: 0; height: 100%; width: 100%; z-index: 0; box-shadow:inset 0px 0px 30px rgba(196,255,155,1); display: none;"></div>
                        <div class="pledge_container" style="font-size:12px; padding: 10px; position: relative; z-index: 10;">


                          <img src="images/pledges/icon16.png" alt="clothes_pins" align="right" vspace="5" hspace="10" />
                          My household dries
                          <input type="text" id="input_takeaction_line_dry_clothing_dryerldwk" size="3" maxlength="3" />
                          loads of laundry per week using <span id="result_takeaction_line_dry_clothing_dryerkwhyr">0</span>
                          kWh of electricity per year, at a cost of $<span id="result_takeaction_line_dry_clothing_dryercostyr">0</span>
                          per year.
                          I pledge to dry
                          <select id="input_takeaction_line_dry_clothing_percentdry">
                            <option value="1">100%</option>
                            <option value=".9">90%</option>
                            <option value=".8">80%</option>
                            <option value=".7">70%</option>
                            <option value=".6">60%</option>
                            <option value=".5">50%</option>
                            <option value=".4">40%</option>
                            <option value=".3">30%</option>
                            <option value=".2">20%</option>
                            <option value=".1">10%</option>
                          </select>
                          of these loads on the line or on a rack.
                          <div class="funfact"> If it's not sunny enough outdoors, consider drying indoors. On top of
                            saving emissions and money, it's nicer for your clothes and helps extend their lifetime.</div>
                          <div>
                            <a target="_blank" style="text-decoration: none; color:blue;" onMouseOver="this.style.color='black'"
                              onMouseOut="this.style.color='blue'" href="http://www.coolcalifornia.org/funding-wizard#search//%255BZipcode%253D%253D94720%255D%255BEligible+Applicants%253D%253DIndividual%255D%255BCategory%253D%253DEnergy%255D/false/none/false/1/12">Find
                              rebates and incentives for this action</a>
                            <img src="images/funding-wizard-icon.png" style="position: absolute; width:35px; padding-left: 5px;">
                          </div>
                          <div class="assumption_button">
                            <a href="javascript:;" class="assumptionShowHideLink">[<span class="takeaction_assumption_plusminus">+</span>]
                              assumptions</a>
                          </div>
                          <div class="assumption_content">
                            <div id="input_takeaction_line_dry_clothing_housing14_2">
                              <ul>
                                <li>Electricity cost <span class="kwhprice">0</span> cents per kWh (based on energy
                                  prices for the location you selected in the Introduction tab)</li>
                                <li> kWh per load: 3.16 <img src="images/carb_question_mark.png" border="0" title="The typical U.S. household uses 1150 kWh per year for clothes drying (RECS, 2001) at an average of 7.5 loads of clothes washed per day (Energy Saver Savings Calculator). We assume 7/7.5 loads washed are dried, for an average of 3.16 kWh per load."
                                    class="tTip tTipHandle" /></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="takeaction_category" style="display: none;">32</div>
                      </div>
                    </div>
                  </div>
                  <div class="new takeaction_section_housing">
                    <h>
                      <table style="margin-top: 5px;" border="0" cellpadding="0" cellspacing="0">
                        <tbody>
                          <tr>
                            <td><a class="chkPledge" id="chkPledge_water_efficient_landscaping" style="display: block;"
                                href="javascript:takeaction_pledge('water_efficient_landscaping');">
                                <table align="center" class="trg" border="0" cellpadding="0" cellspacing="0">
                                  <tbody>
                                    <tr>
                                      <td class="chkPledge" style="height: 30px;"> Pledge </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </a></td>
                            <td><a class="trigger" style="display: block;" href="javascript:;">
                                <table class="trg" border="0" cellpadding="0" cellspacing="0" style="height: 30px;">
                                  <tbody>
                                    <tr>
                                      <td class="pledgeText" style="width: 315px;">Install Water Efficient Landscaping</td>
                                      <!--
                        <td style="width: 50px; text-align: left;"><img src="images/categories/transportation32.png" style="width: 23px; height: 23px;"/></td>
                        -->

                                      <td style="width: 105px; text-align: center;"><span class="takeaction_pounds" id="takeaction_pounds_water_efficient_landscaping"
                                          style="color: #415683"></span></td>
                                      <td style="width: 105px; text-align: center;">$<span class="takeaction_dollars"
                                          id="takeaction_dollars_water_efficient_landscaping"></span></td>
                                      <td style="width: 105px; text-align: center;">$<span class="takeaction_net10yr"
                                          id="takeaction_net10yr_water_efficient_landscaping"></span></td>
                                    </tr>
                                  </tbody>
                                </table>
                              </a></td>
                          </tr>
                        </tbody>
                      </table>
                    </h>
                    <div style="position: relative" class="inner">
                      <div style="position: relative; ">
                        <div id="takeaction_greenglow_water_efficient_landscaping" style="position: absolute; top: 0; left: 0; height: 100%; width: 100%; z-index: 0; box-shadow:inset 0px 0px 30px rgba(196,255,155,1); display: none;"></div>
                        <div class="pledge_container" style="font-size:12px; padding: 10px; position: relative; z-index: 10;">
                          <img src="images/pledges/LGDST/landscaping.png" alt="Water-Efficient Landscaping" align="right"
                            vspace="5" hspace="10" />
                          <p>A household of <span id="display_takeaction_water_efficient_landscaping_sqft">0</span>
                            square feet typically has <input id="input_takeaction_water_efficient_landscaping_sqft"
                              type="text" size="6" maxlength="6" /> square feet of landscaped area. Water efficient
                            landscapes can be obtained by introducing more drought-tolerant plants to your landscape
                            and maintaining them more efficiently with drip-irrigation. <br />
                            <br />
                            <strong>Landscape</strong> <br />

                            The current composition of my landscape is:
                            <select id="input_takeaction_water_efficient_landscaping_grass_old">
                              <option value="0">0%</option>
                              <option value="0.05">5%</option>
                              <option value="0.1">10%</option>
                              <option value="0.15">15%</option>
                              <option value="0.2">20%</option>
                              <option value="0.25">25%</option>
                              <option value="0.3">30%</option>
                              <option value="0.35">35%</option>
                              <option value="0.40">40%</option>
                              <option value="0.45">45%</option>
                              <option value="0.5">50%</option>
                              <option value="0.55">55%</option>
                              <option value="0.6">60%</option>
                              <option value="0.65">65%</option>
                              <option value="0.7">70%</option>
                              <option value="0.75">75%</option>
                              <option value="0.8">80%</option>
                              <option value="0.85">85%</option>
                              <option value="0.9">90%</option>
                              <option value="0.95">95%</option>
                              <option value="1">100%</option>
                            </select>
                            grass <br />
                            <select id="input_takeaction_water_efficient_landscaping_plants_old">
                              <option value="0">0%</option>
                              <option value="0.05">5%</option>
                              <option value="0.1">10%</option>
                              <option value="0.15">15%</option>
                              <option value="0.2">20%</option>
                              <option value="0.25">25%</option>
                              <option value="0.3">30%</option>
                              <option value="0.35">35%</option>
                              <option value="0.40">40%</option>
                              <option value="0.45">45%</option>
                              <option value="0.5">50%</option>
                              <option value="0.55">55%</option>
                              <option value="0.6">60%</option>
                              <option value="0.65">65%</option>
                              <option value="0.7">70%</option>
                              <option value="0.75">75%</option>
                              <option value="0.8">80%</option>
                              <option value="0.85">85%</option>
                              <option value="0.9">90%</option>
                              <option value="0.95">95%</option>
                              <option value="1">100%</option>
                            </select>
                            plants <br />
                            <select id="input_takeaction_water_efficient_landscaping_drought_old">
                              <option value="0">0%</option>
                              <option value="0.05">5%</option>
                              <option value="0.1">10%</option>
                              <option value="0.15">15%</option>
                              <option value="0.2">20%</option>
                              <option value="0.25">25%</option>
                              <option value="0.3">30%</option>
                              <option value="0.35">35%</option>
                              <option value="0.40">40%</option>
                              <option value="0.45">45%</option>
                              <option value="0.5">50%</option>
                              <option value="0.55">55%</option>
                              <option value="0.6">60%</option>
                              <option value="0.65">65%</option>
                              <option value="0.7">70%</option>
                              <option value="0.75">75%</option>
                              <option value="0.8">80%</option>
                              <option value="0.85">85%</option>
                              <option value="0.9">90%</option>
                              <option value="0.95">95%</option>
                              <option value="1">100%</option>
                            </select>
                            drought-tolerant plants <br />
                            <br />
                            I will redo my landscaping so that the new composition of my landscape is:
                            <select id="input_takeaction_water_efficient_landscaping_grass_new">
                              <option value="0">0%</option>
                              <option value="0.05">5%</option>
                              <option value="0.1">10%</option>
                              <option value="0.15">15%</option>
                              <option value="0.2">20%</option>
                              <option value="0.25">25%</option>
                              <option value="0.3">30%</option>
                              <option value="0.35">35%</option>
                              <option value="0.40">40%</option>
                              <option value="0.45">45%</option>
                              <option value="0.5">50%</option>
                              <option value="0.55">55%</option>
                              <option value="0.6">60%</option>
                              <option value="0.65">65%</option>
                              <option value="0.7">70%</option>
                              <option value="0.75">75%</option>
                              <option value="0.8">80%</option>
                              <option value="0.85">85%</option>
                              <option value="0.9">90%</option>
                              <option value="0.95">95%</option>
                              <option value="1">100%</option>
                            </select>
                            grass <br />
                            <select id="input_takeaction_water_efficient_landscaping_plants_new">
                              <option value="0">0%</option>
                              <option value="0.05">5%</option>
                              <option value="0.1">10%</option>
                              <option value="0.15">15%</option>
                              <option value="0.2">20%</option>
                              <option value="0.25">25%</option>
                              <option value="0.3">30%</option>
                              <option value="0.35">35%</option>
                              <option value="0.40">40%</option>
                              <option value="0.45">45%</option>
                              <option value="0.5">50%</option>
                              <option value="0.55">55%</option>
                              <option value="0.6">60%</option>
                              <option value="0.65">65%</option>
                              <option value="0.7">70%</option>
                              <option value="0.75">75%</option>
                              <option value="0.8">80%</option>
                              <option value="0.85">85%</option>
                              <option value="0.9">90%</option>
                              <option value="0.95">95%</option>
                              <option value="1">100%</option>
                            </select>
                            plants <br />
                            <select id="input_takeaction_water_efficient_landscaping_drought_new">
                              <option value="0">0%</option>
                              <option value="0.05">5%</option>
                              <option value="0.1">10%</option>
                              <option value="0.15">15%</option>
                              <option value="0.2">20%</option>
                              <option value="0.25">25%</option>
                              <option value="0.3">30%</option>
                              <option value="0.35">35%</option>
                              <option value="0.40">40%</option>
                              <option value="0.45">45%</option>
                              <option value="0.5">50%</option>
                              <option value="0.55">55%</option>
                              <option value="0.6">60%</option>
                              <option value="0.65">65%</option>
                              <option value="0.7">70%</option>
                              <option value="0.75">75%</option>
                              <option value="0.8">80%</option>
                              <option value="0.85">85%</option>
                              <option value="0.9">90%</option>
                              <option value="0.95">95%</option>
                              <option value="1">100%</option>
                            </select>
                            drought-tolerant plants <br />

                            <br />
                            <strong>Irrigation</strong> <br />

                            Currently,
                            <select id="input_takeaction_water_efficient_landscaping_grass_drip_old">
                              <option value="0">0%</option>
                              <option value="0.05">5%</option>
                              <option value="0.1">10%</option>
                              <option value="0.15">15%</option>
                              <option value="0.2">20%</option>
                              <option value="0.25">25%</option>
                              <option value="0.3">30%</option>
                              <option value="0.35">35%</option>
                              <option value="0.40">40%</option>
                              <option value="0.45">45%</option>
                              <option value="0.5">50%</option>
                              <option value="0.55">55%</option>
                              <option value="0.6">60%</option>
                              <option value="0.65">65%</option>
                              <option value="0.7">70%</option>
                              <option value="0.75">75%</option>
                              <option value="0.8">80%</option>
                              <option value="0.85">85%</option>
                              <option value="0.9">90%</option>
                              <option value="0.95">95%</option>
                              <option value="1">100%</option>
                            </select>
                            of my grass and
                            <select id="input_takeaction_water_efficient_landscaping_plant_drip_old">
                              <option value="0">0%</option>
                              <option value="0.05">5%</option>
                              <option value="0.1">10%</option>
                              <option value="0.15">15%</option>
                              <option value="0.2">20%</option>
                              <option value="0.25">25%</option>
                              <option value="0.3">30%</option>
                              <option value="0.35">35%</option>
                              <option value="0.40">40%</option>
                              <option value="0.45">45%</option>
                              <option value="0.5">50%</option>
                              <option value="0.55">55%</option>
                              <option value="0.6">60%</option>
                              <option value="0.65">65%</option>
                              <option value="0.7">70%</option>
                              <option value="0.75">75%</option>
                              <option value="0.8">80%</option>
                              <option value="0.85">85%</option>
                              <option value="0.9">90%</option>
                              <option value="0.95">95%</option>
                              <option value="1">100%</option>
                            </select>
                            of my plants are maintained through drip-irrigation.<br />
                            <br />
                            I will rework my irrigation so that
                            <select id="input_takeaction_water_efficient_landscaping_grass_drip_new">
                              <option value="0">0%</option>
                              <option value="0.05">5%</option>
                              <option value="0.1">10%</option>
                              <option value="0.15">15%</option>
                              <option value="0.2">20%</option>
                              <option value="0.25">25%</option>
                              <option value="0.3">30%</option>
                              <option value="0.35">35%</option>
                              <option value="0.40">40%</option>
                              <option value="0.45">45%</option>
                              <option value="0.5">50%</option>
                              <option value="0.55">55%</option>
                              <option value="0.6">60%</option>
                              <option value="0.65">65%</option>
                              <option value="0.7">70%</option>
                              <option value="0.75">75%</option>
                              <option value="0.8">80%</option>
                              <option value="0.85">85%</option>
                              <option value="0.9">90%</option>
                              <option value="0.95">95%</option>
                              <option value="1">100%</option>
                            </select>
                            of my grass and
                            <select id="input_takeaction_water_efficient_landscaping_plant_drip_new">
                              <option value="0">0%</option>
                              <option value="0.05">5%</option>
                              <option value="0.1">10%</option>
                              <option value="0.15">15%</option>
                              <option value="0.2">20%</option>
                              <option value="0.25">25%</option>
                              <option value="0.3">30%</option>
                              <option value="0.35">35%</option>
                              <option value="0.40">40%</option>
                              <option value="0.45">45%</option>
                              <option value="0.5">50%</option>
                              <option value="0.55">55%</option>
                              <option value="0.6">60%</option>
                              <option value="0.65">65%</option>
                              <option value="0.7">70%</option>
                              <option value="0.75">75%</option>
                              <option value="0.8">80%</option>
                              <option value="0.85">85%</option>
                              <option value="0.9">90%</option>
                              <option value="0.95">95%</option>
                              <option value="1">100%</option>
                            </select>
                            of my plants are maintained through drip-irrigation.<br />
                          </p>

                          <div class="assumption_button">
                            <a href="javascript:;" class="assumptionShowHideLink">[<span class="takeaction_assumption_plusminus">+</span>]
                              assumptions</a>
                          </div>
                          <div class="assumption_content">
                            <p>

                              We assume that the incremental cost of drip irrigation is $<input id="input_takeaction_water_efficient_landscaping_cost_drip"
                                type="text" size="4" maxlength="4" /> per square foot and the incremental cost of
                              drought-tolerant plants is $
                              <input id="input_takeaction_water_efficient_landscaping_cost_drought" type="text" size="4"
                                maxlength="4" /> per square foot
                            </p>
                          </div>
                        </div>
                        <div class="takeaction_category" style="display: none;">33</div>
                      </div>
                    </div>
                  </div>
                  <div class="new takeaction_section_housing">
                    <h>
                      <table style="margin-top: 5px;" border="0" cellpadding="0" cellspacing="0">
                        <tbody>
                          <tr>
                            <td><a class="chkPledge" id="chkPledge_plant_trees" style="display: block;" href="javascript:takeaction_pledge('plant_trees');">
                                <table align="center" class="trg" border="0" cellpadding="0" cellspacing="0">
                                  <tbody>
                                    <tr>
                                      <td class="chkPledge" style="height: 30px;"> Pledge </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </a></td>
                            <td><a class="trigger" style="display: block;" href="javascript:;">
                                <table class="trg" border="0" cellpadding="0" cellspacing="0" style="height: 30px;">
                                  <tbody>
                                    <tr>
                                      <td class="pledgeText" style="width: 315px;">Plant Trees</td>
                                      <!--
                        <td style="width: 50px; text-align: left;"><img src="images/categories/transportation32.png" style="width: 23px; height: 23px;"/></td>
                        -->

                                      <td style="width: 105px; text-align: center;"><span class="takeaction_pounds" id="takeaction_pounds_plant_trees"
                                          style="color: #415683"></span></td>
                                      <td style="width: 105px; text-align: center;">$<span class="takeaction_dollars"
                                          id="takeaction_dollars_plant_trees"></span></td>
                                      <td style="width: 105px; text-align: center;">$<span class="takeaction_net10yr"
                                          id="takeaction_net10yr_plant_trees"></span></td>
                                    </tr>
                                  </tbody>
                                </table>
                              </a></td>
                          </tr>
                        </tbody>
                      </table>
                    </h>
                    <div style="position: relative" class="inner">
                      <div style="position: relative; ">
                        <div id="takeaction_greenglow_plant_trees" style="position: absolute; top: 0; left: 0; height: 100%; width: 100%; z-index: 0; box-shadow:inset 0px 0px 30px rgba(196,255,155,1); display: none;"></div>
                        <div class="pledge_container" style="font-size:12px; padding: 10px; position: relative; z-index: 10;">
                          <img src="images/pledges/LGDST/plant.png" alt="Plant Trees" align="right" vspace="5" hspace="10" />
                          <p>In addition to the direct energy saving benefits, planting trees can increase natural
                            beauty of city landscapes, reduce pollution, cool outside temperatures, as well as provide
                            wood, fruit and other beneficial products. <br />
                            I will plant <input id="input_takeaction_plant_trees_amount" type="text" size="3" maxlength="3" />
                            trees. Each tree will cost $<input id="input_takeaction_plant_trees_cost" type="text" size="4"
                              maxlength="4" />
                          </p>

                          <div class="assumption_button">
                            <a href="javascript:;" class="assumptionShowHideLink">[<span class="takeaction_assumption_plusminus">+</span>]
                              assumptions</a>
                          </div>
                          <div class="assumption_content">
                            <ul>
                              <li>Each year, you save $10 for every tree planted</li>
                              <li>A large portion of your savings come from reduced AC use as a result of increased
                                shading and a reduction in outside temperature. Trees also reduce heating by lowering
                                wind speed</li>
                            </ul>
                          </div>
                        </div>
                        <div class="takeaction_category" style="display: none;">34</div>
                      </div>
                    </div>
                  </div>
                  <div class="new takeaction_section_housing">
                    <h>
                      <table style="margin-top: 5px;" border="0" cellpadding="0" cellspacing="0">
                        <tbody>
                          <tr>
                            <td><a class="chkPledge" id="chkPledge_reduce_comm_waste" style="display: block;" href="javascript:takeaction_pledge('reduce_comm_waste');">
                                <table align="center" class="trg" border="0" cellpadding="0" cellspacing="0">
                                  <tbody>
                                    <tr>
                                      <td class="chkPledge" style="height: 30px;"> Pledge </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </a></td>
                            <td><a class="trigger" style="display: block;" href="javascript:;">
                                <table class="trg" border="0" cellpadding="0" cellspacing="0" style="height: 30px;">
                                  <tbody>
                                    <tr>
                                      <td class="pledgeText" style="width: 315px;">Reduce Your Waste</td>
                                      <!--
                        <td style="width: 50px; text-align: left;"><img src="images/categories/transportation32.png" style="width: 23px; height: 23px;"/></td>
                        -->

                                      <td style="width: 105px; text-align: center;"><span class="takeaction_pounds" id="takeaction_pounds_reduce_comm_waste"
                                          style="color: #415683"></span></td>
                                      <td style="width: 105px; text-align: center;">$<span class="takeaction_dollars"
                                          id="takeaction_dollars_reduce_comm_waste"></span></td>
                                      <td style="width: 105px; text-align: center;">$<span class="takeaction_net10yr"
                                          id="takeaction_net10yr_reduce_comm_waste"></span></td>
                                    </tr>
                                  </tbody>
                                </table>
                              </a></td>
                          </tr>
                        </tbody>
                      </table>
                    </h>
                    <div style="position: relative" class="inner">
                      <div style="position: relative; ">
                        <div id="takeaction_greenglow_reduce_comm_waste" style="position: absolute; top: 0; left: 0; height: 100%; width: 100%; z-index: 0; box-shadow:inset 0px 0px 30px rgba(196,255,155,1); display: none;"></div>
                        <div class="pledge_container" style="font-size:12px; padding: 10px; position: relative; z-index: 10;">
                          <img src="images/pledges/LITE/reducewaste.png" alt="Reduce Commercial Waste" align="right"
                            vspace="5" hspace="10" />
                          <p>My household currently throws out
                            <input id="input_takeaction_reduce_comm_waste_per_week" type="text" size="2" maxlength="2" />
                            cubic yards of trash each week. I will reduce my trash by
                            <select id="input_takeaction_reduce_comm_waste_percent">
                              <option value="0.05">5%</option>
                              <option value="0.1">10%</option>
                              <option value="0.15">15%</option>
                              <option value="0.2">20%</option>
                              <option value="0.25">25%</option>
                              <option value="0.3">30%</option>
                              <option value="0.35">35%</option>
                              <option value="0.40">40%</option>
                              <option value="0.45">45%</option>
                              <option value="0.5">50%</option>
                              <option value="0.55">55%</option>
                              <option value="0.6">60%</option>
                              <option value="0.65">65%</option>
                              <option value="0.7">70%</option>
                              <option value="0.75">75%</option>
                              <option value="0.8">80%</option>
                              <option value="0.85">85%</option>
                              <option value="0.9">90%</option>
                              <option value="0.95">95%</option>
                              <option value="1">100%</option>
                            </select>
                          </p>
                          <div class="assumption_button">
                            <a href="javascript:;" class="assumptionShowHideLink">[<span class="takeaction_assumption_plusminus">+</span>]
                              assumptions</a>
                          </div>
                          <div class="assumption_content">
                            <ul>
                              <li>225 pounds of waste per cubic yard: Source: <a href="http://epa.gov/epawaste/conserve/tools/warm/SWMGHGreport.html">EPA
                                  Warm Model</a></li>
                              <li>0.58 tCO2 (from methane) per short ton of waste: Source: <a href="http://epa.gov/epawaste/conserve/tools/warm/SWMGHGreport.html">EPA
                                  Warm Model</a></li>
                            </ul>
                          </div>
                        </div>
                        <div class="takeaction_category" style="display: none;">35</div>
                      </div>
                    </div>
                  </div>
                  <div class="new takeaction_section_housing">
                    <h>
                      <table style="margin-top: 5px;" border="0" cellpadding="0" cellspacing="0">
                        <tbody>
                          <tr>
                            <td><a class="chkPledge" id="chkPledge_print_double_sided" style="display: block;" href="javascript:takeaction_pledge('print_double_sided');">
                                <table align="center" class="trg" border="0" cellpadding="0" cellspacing="0">
                                  <tbody>
                                    <tr>
                                      <td class="chkPledge" style="height: 30px;"> Pledge </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </a></td>
                            <td><a class="trigger" style="display: block;" href="javascript:;">
                                <table class="trg" border="0" cellpadding="0" cellspacing="0" style="height: 30px;">
                                  <tbody>
                                    <tr>
                                      <td class="pledgeText" style="width: 315px;">Print Double Sided</td>
                                      <!--
                        <td style="width: 50px; text-align: left;"><img src="images/categories/transportation32.png" style="width: 23px; height: 23px;"/></td>
                        -->

                                      <td style="width: 105px; text-align: center;"><span class="takeaction_pounds" id="takeaction_pounds_print_double_sided"
                                          style="color: #415683"></span></td>
                                      <td style="width: 105px; text-align: center;">$<span class="takeaction_dollars"
                                          id="takeaction_dollars_print_double_sided"></span></td>
                                      <td style="width: 105px; text-align: center;">$<span class="takeaction_net10yr"
                                          id="takeaction_net10yr_print_double_sided"></span></td>
                                    </tr>
                                  </tbody>
                                </table>
                              </a></td>
                          </tr>
                        </tbody>
                      </table>
                    </h>
                    <div style="position: relative" class="inner">
                      <div style="position: relative; ">
                        <div id="takeaction_greenglow_print_double_sided" style="position: absolute; top: 0; left: 0; height: 100%; width: 100%; z-index: 0; box-shadow:inset 0px 0px 30px rgba(196,255,155,1); display: none;"></div>
                        <div class="pledge_container" style="font-size:12px; padding: 10px; position: relative; z-index: 10;">
                          <img src="images/pledges/LITE/print2side.png" alt="Print Double Sided" align="right" vspace="5"
                            hspace="10" />
                          <p>I will print
                            <input id="input_takeaction_print_double_sided_number" type="text" size="3" maxlength="3" />
                            sheets double-sided instead of single-sided per week.
                          </p>

                          <div class="assumption_button">
                            <a href="javascript:;" class="assumptionShowHideLink">[<span class="takeaction_assumption_plusminus">+</span>]
                              assumptions</a>
                          </div>
                          <div class="assumption_content">
                            <ul>
                              <li>14,409 lbs CO2 per ton of paper: Source: <a href="http://www.calrecycle.ca.gov/ReduceWaste/Business/officepaper/quicktip.htm">Calrecycle</a></li>
                              <li>0.006 dollars per sheet of paper</li>
                            </ul>
                          </div>
                        </div>
                        <div class="takeaction_category" style="display: none;">36</div>
                      </div>
                    </div>
                  </div>
                  <div class="new takeaction_section_offset">
                    <h>
                      <table style="margin-top: 5px;" border="0" cellpadding="0" cellspacing="0">
                        <tbody>
                          <tr>
                            <td><a class="chkPledge" id="chkPledge_offset_housing" style="display: block;" href="javascript:takeaction_pledge('offset_housing');">
                                <table align="center" class="trg" border="0" cellpadding="0" cellspacing="0">
                                  <tbody>
                                    <tr>
                                      <td class="chkPledge" style="height: 30px;"> Pledge </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </a></td>
                            <td><a class="trigger" style="display: block;" href="javascript:;">
                                <table class="trg" border="0" cellpadding="0" cellspacing="0" style="height: 30px;">
                                  <tbody>
                                    <tr>
                                      <td class="pledgeText" style="width: 315px;">Offset Housing Footprint</td>
                                      <!--
                        <td style="width: 50px; text-align: left;"><img src="images/categories/transportation32.png" style="width: 23px; height: 23px;"/></td>
                        -->

                                      <td style="width: 105px; text-align: center;"><span class="takeaction_pounds" id="takeaction_pounds_offset_housing"
                                          style="color: #415683"></span></td>
                                      <td style="width: 105px; text-align: center;">$<span class="takeaction_dollars"
                                          id="takeaction_dollars_offset_housing"></span></td>
                                      <td style="width: 105px; text-align: center;">$<span class="takeaction_net10yr"
                                          id="takeaction_net10yr_offset_housing"></span></td>
                                    </tr>
                                  </tbody>
                                </table>
                              </a></td>
                          </tr>
                        </tbody>
                      </table>
                    </h>
                    <div style="position: relative" class="inner">
                      <div style="position: relative; ">
                        <div id="takeaction_greenglow_offset_housing" style="position: absolute; top: 0; left: 0; height: 100%; width: 100%; z-index: 0; box-shadow:inset 0px 0px 30px rgba(196,255,155,1); display: none;"></div>
                        <div class="pledge_container" style="font-size:12px; padding: 10px; position: relative; z-index: 10;">
                          <img src="images/pledges/icon18.png" alt="" align="right" vspace="5" hspace="10" /> I have
                          already pledged to reduce my housing footprint by <span id="result_takeaction_offset_housing_transpledges">0</span>
                          metric tons of CO2e per year. I will purchase carbon offsets for the remaining <span id="result_takeaction_offset_housing_transtonsleft">
                            0 </span> tons of CO2e at a cost of
                          <input name="offset" type="text" id="input_takeaction_offset_housing_offset" size="2"
                            maxlength="2" />
                          dollars per metric ton.
                          <div class="funfact"> Avoiding GHG emissions in one place can "offset" GHG emissions
                            occurring somewhere else. Offsets can go toward projects such as financing a wind turbine
                            in Asia, a solar roof-top in Africa or a reforestation program in South America. Plus,
                            carbon offset projects can produce positive quality-of-life impacts such as increasing
                            economic and social development and supporting clean technology. </div>
                          <div class="assumption_button">
                            <a href="javascript:;" class="assumptionShowHideLink">[<span class="takeaction_assumption_plusminus">+</span>]
                              assumptions</a>
                          </div>
                          <div class="assumption_content">
                            <div>
                              <ul>
                                <li> Offsets are assumed to be "additional" greenhouse gas emissions that would NOT
                                  otherwise be reduced without your purchase of carbon offsets. Examples include
                                  projects that would not be profitable, and therefore not undertaken, without the
                                  additional funds provided by carbon offset sponsors</li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="takeaction_category" style="display: none;">37</div>
                      </div>
                    </div>
                  </div>
                  <div class="new takeaction_section_shopping_food">
                    <h>
                      <table style="margin-top: 5px;" border="0" cellpadding="0" cellspacing="0">
                        <tbody>
                          <tr>
                            <td><a class="chkPledge" id="chkPledge_low_carbon_diet" style="display: block;" href="javascript:takeaction_pledge('low_carbon_diet');">
                                <table align="center" class="trg" border="0" cellpadding="0" cellspacing="0">
                                  <tbody>
                                    <tr>
                                      <td class="chkPledge" style="height: 30px;"> Pledge </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </a></td>
                            <td><a class="trigger" style="display: block;" href="javascript:;">
                                <table class="trg" border="0" cellpadding="0" cellspacing="0" style="height: 30px;">
                                  <tbody>
                                    <tr>
                                      <td class="pledgeText" style="width: 315px;">Eat a low carbon diet</td>
                                      <!--
                        <td style="width: 50px; text-align: left;"><img src="images/categories/transportation32.png" style="width: 23px; height: 23px;"/></td>
                        -->

                                      <td style="width: 105px; text-align: center;"><span class="takeaction_pounds" id="takeaction_pounds_low_carbon_diet"
                                          style="color: #415683"></span></td>
                                      <td style="width: 105px; text-align: center;">$<span class="takeaction_dollars"
                                          id="takeaction_dollars_low_carbon_diet"></span></td>
                                      <td style="width: 105px; text-align: center;">$<span class="takeaction_net10yr"
                                          id="takeaction_net10yr_low_carbon_diet"></span></td>
                                    </tr>
                                  </tbody>
                                </table>
                              </a></td>
                          </tr>
                        </tbody>
                      </table>
                    </h>
                    <div style="position: relative" class="inner">
                      <div style="position: relative; ">
                        <div id="takeaction_greenglow_low_carbon_diet" style="position: absolute; top: 0; left: 0; height: 100%; width: 100%; z-index: 0; box-shadow:inset 0px 0px 30px rgba(196,255,155,1); display: none;"></div>
                        <div class="pledge_container" style="font-size:12px; padding: 10px; position: relative; z-index: 10;">

                          <img src="images/pledges/icon20.png" alt="veggies" align="right" vspace="5" hspace="10" />

                          <p>Use the selectors below to choose your new diet. How much of the following will each
                            person eat daily (claories per day)? <img src="images/carb_question_mark.png" border="0"
                              title="The default settings are for a low-carbon version of the typical American diet."
                              class="tTip tTipHandle" />
                            <div style="margin-top:10; margin-bottom:10;"></div>Meat:
                            <select id="input_takeaction_low_carbon_diet_meatfootprint">
                              <option value="3">Wow!</option>
                              <option value="2.8">much more than a lot</option>
                              <option value="2.45">more than a lot</option>
                              <option value="2.1">a lot</option>
                              <option value="1.8">much more than average</option>
                              <option value="1.45">more than average</option>
                              <option value="1.15">just above average</option>
                              <option value="1">average</option>
                              <option value="0.85">almost average</option>
                              <option value="0.65">less than average</option>
                              <option value="0.45">much less than average</option>
                              <option value="0.25">very little</option>
                              <option value=".1">almost none</option>
                              <option value="0">none</option>
                            </select>
                            <span id="result_takeaction_low_carbon_diet_meatcal"> 0 </span> calories/day <br />
                            Dairy:
                            <select id="input_takeaction_low_carbon_diet_dairyfootprint">
                              <option value="3">Wow!</option>
                              <option value="2.8">much more than a lot</option>
                              <option value="2.45">more than a lot</option>
                              <option value="2.1">a lot</option>
                              <option value="1.8">much more than average</option>
                              <option value="1.45">more than average</option>
                              <option value="1.15">just above average</option>
                              <option value="1">average</option>
                              <option value="0.85">almost average</option>
                              <option value="0.65">less than average</option>
                              <option value="0.45">much less than average</option>
                              <option value="0.25">very little</option>
                              <option value=".1">almost none</option>
                              <option value="0">none</option>
                            </select>
                            <span id="result_takeaction_low_carbon_diet_dairycal"> 0 </span> calories/day <br />
                            Fruit/veg:
                            <select id="input_takeaction_low_carbon_diet_fvfootprint">
                              <option value="3">Wow!</option>
                              <option value="2.8">much more than a lot</option>
                              <option value="2.45">more than a lot</option>
                              <option value="2.1">a lot</option>
                              <option value="1.8">much more than average</option>
                              <option value="1.45">more than average</option>
                              <option value="1.15">just above average</option>
                              <option value="1">average</option>
                              <option value="0.85">almost average</option>
                              <option value="0.65">less than average</option>
                              <option value="0.45">much less than average</option>
                              <option value="0.25">very little</option>
                              <option value=".1">almost none</option>
                              <option value="0">none</option>
                            </select>
                            <span id="result_takeaction_low_carbon_diet_fvcal"> 0 </span> calories/day <br />
                            Cereals:
                            <select id="input_takeaction_low_carbon_diet_cerealsfootprint">
                              <option value="3">Wow!</option>
                              <option value="2.8">much more than a lot</option>
                              <option value="2.45">more than a lot</option>
                              <option value="2.1">a lot</option>
                              <option value="1.8">much more than average</option>
                              <option value="1.45">more than average</option>
                              <option value="1.15">just above average</option>
                              <option value="1">average</option>
                              <option value="0.85">almost average</option>
                              <option value="0.65">less than average</option>
                              <option value="0.45">much less than average</option>
                              <option value="0.25">very little</option>
                              <option value=".1">almost none</option>
                              <option value="0">none</option>
                            </select>
                            <span id="result_takeaction_low_carbon_diet_cerealscal"> 0 </span> calories/day <br />
                            Other:
                            <select id="input_takeaction_low_carbon_diet_otherfootprint">
                              <option value="3">Wow!</option>
                              <option value="2.8">much more than a lot</option>
                              <option value="2.45">more than a lot</option>
                              <option value="2.1">a lot</option>
                              <option value="1.8">much more than average</option>
                              <option value="1.45">more than average</option>
                              <option value="1.15">just above average</option>
                              <option value="1">average</option>
                              <option value="0.85">almost average</option>
                              <option value="0.65">less than average</option>
                              <option value="0.45">much less than average</option>
                              <option value="0.25">very little</option>
                              <option value=".1">almost none</option>
                              <option value="0">none</option>
                            </select>
                            <span id="result_takeaction_low_carbon_diet_othercal"> 0 </span> calories/day
                          </p>
                          <div align="left"><strong>Total: </strong><span id="result_takeaction_low_carbon_diet_totalcal">
                              0 </span> calories/day </div>
                          <div class="funfact">A third of all food emissions in the United States come from red meat
                            and dairy products, while chicken and vegetables have up to ten times smaller footprints
                            per serving, so small diet switches can make a BIG difference. </div>
                          <div class="assumption_button">
                            <a href="javascript:;" class="assumptionShowHideLink">[<span class="takeaction_assumption_plusminus">+</span>]
                              assumptions</a>
                          </div>
                          <div class="assumption_content">
                            <div>
                              <ul>
                                <li> Food prices are based on average U.S. prices for each category of food items
                                  (meat, dairy, fruits & vegetables, cereals and other). The actual carbon footprint
                                  and price of food you purchase may vary substantially from these values </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="takeaction_category" style="display: none;">38</div>
                      </div>
                    </div>
                  </div>
                  <div class="new takeaction_section_shopping_food">
                    <h>
                      <table style="margin-top: 5px;" border="0" cellpadding="0" cellspacing="0">
                        <tbody>
                          <tr>
                            <td><a class="chkPledge" id="chkPledge_go_organic" style="display: block;" href="javascript:takeaction_pledge('go_organic');">
                                <table align="center" class="trg" border="0" cellpadding="0" cellspacing="0">
                                  <tbody>
                                    <tr>
                                      <td class="chkPledge" style="height: 30px;"> Pledge </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </a></td>
                            <td><a class="trigger" style="display: block;" href="javascript:;">
                                <table class="trg" border="0" cellpadding="0" cellspacing="0" style="height: 30px;">
                                  <tbody>
                                    <tr>
                                      <td class="pledgeText" style="width: 315px;">Go Organic</td>
                                      <!--
                        <td style="width: 50px; text-align: left;"><img src="images/categories/transportation32.png" style="width: 23px; height: 23px;"/></td>
                        -->

                                      <td style="width: 105px; text-align: center;"><span class="takeaction_pounds" id="takeaction_pounds_go_organic"
                                          style="color: #415683"></span></td>
                                      <td style="width: 105px; text-align: center;">$<span class="takeaction_dollars"
                                          id="takeaction_dollars_go_organic"></span></td>
                                      <td style="width: 105px; text-align: center;">$<span class="takeaction_net10yr"
                                          id="takeaction_net10yr_go_organic"></span></td>
                                    </tr>
                                  </tbody>
                                </table>
                              </a></td>
                          </tr>
                        </tbody>
                      </table>
                    </h>
                    <div style="position: relative" class="inner">
                      <div style="position: relative; ">
                        <div id="takeaction_greenglow_go_organic" style="position: absolute; top: 0; left: 0; height: 100%; width: 100%; z-index: 0; box-shadow:inset 0px 0px 30px rgba(196,255,155,1); display: none;"></div>
                        <div class="pledge_container" style="font-size:12px; padding: 10px; position: relative; z-index: 10;">
                          <img src="images/pledges/icon21.png" alt="organic_label" align="right" vspace="5" hspace="10" />
                          Currently, there is not conclusive scientific evidence that organic food, in general, has
                          lower greenhouse gas emissions than conventional products. However, there are a lot of
                          environmental reasons to buy organic food including reducing chemical toxins in the
                          environment and encouraging sustainable farming practices, which frequently accompany organic
                          farming.


                          <table width="auto" border="0">
                            <tr>
                              <td><strong>I currently eat:</strong></td>
                              <td><strong>I pledge to eat:</strong></td>
                            </tr>
                            <tr>
                              <td width="50%">
                                <select id="input_takeaction_go_organic_eatorgproduce">
                                  <option value="1">100%</option>
                                  <option value="0.9">90%</option>
                                  <option value="0.8">80%</option>
                                  <option value="0.7">70%</option>
                                  <option value="0.6">60%</option>
                                  <option value="0.5">50%</option>
                                  <option value="0.4">40%</option>
                                  <option value="0.3">30%</option>
                                  <option value="0.2">20%</option>
                                  <option value="0.1">10%</option>
                                  <option value="0">0%</option>
                                </select>
                                organic produce
                              </td>
                              <td width="50%">
                                <select id="input_takeaction_go_organic_pledgeorgprod">
                                  <option value="1">100%</option>
                                  <option value="0.9">90%</option>
                                  <option value="0.8">80%</option>
                                  <option value="0.7">70%</option>
                                  <option value="0.6">60%</option>
                                  <option value="0.5">50%</option>
                                  <option value="0.4">40%</option>
                                  <option value="0.3">30%</option>
                                  <option value="0.2">20%</option>
                                  <option value="0.1">10%</option>
                                  <option value="0">0%</option>
                                </select>
                                organic produce
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <select id="input_takeaction_go_organic_eatorgmeat">
                                  <option value="1">100%</option>
                                  <option value="0.9">90%</option>
                                  <option value="0.8">80%</option>
                                  <option value="0.7">70%</option>
                                  <option value="0.6">60%</option>
                                  <option value="0.5">50%</option>
                                  <option value="0.4">40%</option>
                                  <option value="0.3">30%</option>
                                  <option value="0.2">20%</option>
                                  <option value="0.1">10%</option>
                                  <option value="0">0%</option>
                                </select>
                                organic meat
                              </td>
                              <td>
                                <select id="input_takeaction_go_organic_pledgeorgmeat">
                                  <option value="1">100%</option>
                                  <option value="0.9">90%</option>
                                  <option value="0.8">80%</option>
                                  <option value="0.7">70%</option>
                                  <option value="0.6">60%</option>
                                  <option value="0.5">50%</option>
                                  <option value="0.4">40%</option>
                                  <option value="0.3">30%</option>
                                  <option value="0.2">20%</option>
                                  <option value="0.1">10%</option>
                                  <option value="0">0%</option>
                                </select>
                                organic meat
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <select id="input_takeaction_go_organic_eatorgdairy">
                                  <option value="1">100%</option>
                                  <option value="0.9">90%</option>
                                  <option value="0.8">80%</option>
                                  <option value="0.7">70%</option>
                                  <option value="0.6">60%</option>
                                  <option value="0.5">50%</option>
                                  <option value="0.4">40%</option>
                                  <option value="0.3">30%</option>
                                  <option value="0.2">20%</option>
                                  <option value="0.1">10%</option>
                                  <option value="0">0%</option>
                                </select>
                                organic dairy
                              </td>
                              <td>
                                <select id="input_takeaction_go_organic_pledgedairy">
                                  <option value="1">100%</option>
                                  <option value="0.9">90%</option>
                                  <option value="0.8">80%</option>
                                  <option value="0.7">70%</option>
                                  <option value="0.6">60%</option>
                                  <option value="0.5">50%</option>
                                  <option value="0.4">40%</option>
                                  <option value="0.3">30%</option>
                                  <option value="0.2">20%</option>
                                  <option value="0.1">10%</option>
                                  <option value="0">0%</option>
                                </select>
                                organic dairy
                              </td>
                            </tr>
                          </table>
                          <div class="funfact"> Organic products are available in nearly 20,000 natural foods stores,
                            and are sold in nearly three-quarters of all conventional grocery stores</div>

                          <div class="assumption_button">
                            <a href="javascript:;" class="assumptionShowHideLink">[<span class="takeaction_assumption_plusminus">+</span>]
                              assumptions</a>
                          </div>
                          <div class="assumption_content">
                            <div>

                              <strong>The carbon footprint of:</strong>
                              <table width="100%" border="0">
                                <tr>
                                  <td>organic produce is</td>
                                  <td>
                                    <span>
                                      <select id="input_takeaction_go_organic_myproduce">
                                        <option value="1.5">150%</option>
                                        <option value="1.4">140%</option>
                                        <option value="1.3">130%</option>
                                        <option value="1.2">120%</option>
                                        <option value="1.1">110%</option>
                                        <option value="1">100%</option>
                                        <option value="0.9">90%</option>
                                        <option value="0.8">80%</option>
                                        <option value="0.7">70%</option>
                                        <option value="0.6">60%</option>
                                        <option value="0.5">50%</option>
                                      </select>
                                      of conventional</span><img src="images/carb_question_mark.png" border="0" title="There many environmental reasons to buy organic food including toxin reductions and critically important resource conversation pratcices which frequently accompany organic farming. However, there currently is not conclusive scientific evidence that organic food has lower greenhouse gas emissions. Greenhouse gas emissions from the food you buy can be expected to be dramatically different than average values provided by this calculator. For example, food grown in your own backyard or from a small farm in your community may have very low emissions compared to typical farm products."
                                      class="tTip tTipHandle" />
                                  </td>
                                </tr>
                                <tr>
                                  <td>organic meat is</td>
                                  <td>
                                    <span>
                                      <select id="input_takeaction_go_organic_mymeat">
                                        <option value="1.5">150%</option>
                                        <option value="1.4">140%</option>
                                        <option value="1.3">130%</option>
                                        <option value="1.2">120%</option>
                                        <option value="1.1">110%</option>
                                        <option value="1">100%</option>
                                        <option value="0.9">90%</option>
                                        <option value="0.8">80%</option>
                                        <option value="0.7">70%</option>
                                        <option value="0.6">60%</option>
                                        <option value="0.5">50%</option>
                                      </select>
                                      of conventional</span>
                                  </td>
                                </tr>
                                <tr>
                                  <td>organic dairy is </td>
                                  <td>
                                    <span>
                                      <select id="input_takeaction_go_organic_mydairy">
                                        <option value="1.5">150%</option>
                                        <option value="1.4">140%</option>
                                        <option value="1.3">130%</option>
                                        <option value="1.2">120%</option>
                                        <option value="1.1">110%</option>
                                        <option value="1">100%</option>
                                        <option value="0.9">90%</option>
                                        <option value="0.8">80%</option>
                                        <option value="0.7">70%</option>
                                        <option value="0.6">60%</option>
                                        <option value="0.5">50%</option>
                                      </select>
                                      of conventional</span></td>
                                </tr>
                              </table>
                              <strong>Price of Organics vs Conventional food products:</strong>
                              <table width="100%" border="0">
                                <tr>
                                  <td>Organic produce costs</td>
                                  <td>
                                    <span>
                                      <select id="input_takeaction_go_organic_myprodcost">
                                        <option value="3">300%</option>
                                        <option value="2.8">280%</option>
                                        <option value="2.6">260%</option>
                                        <option value="2.4">240%</option>
                                        <option value="2.2">220%</option>
                                        <option value="2">200%</option>
                                        <option value="1.8">180%</option>
                                        <option value="1.6">160%</option>
                                        <option value="1.4">140%</option>
                                        <option value="1.2">120%</option>
                                        <option value="1">100%</option>
                                        <option value="0.8">80%</option>
                                        <option value="0.6">60%</option>
                                        <option value="0.4">40%</option>
                                        <option value="0.2">20%</option>
                                        <option value="0">0%</option>
                                      </select>
                                      of conventional</span></td>
                                </tr>
                                <tr>
                                  <td>Organic meat costs</td>
                                  <td>
                                    <span>
                                      <select id="input_takeaction_go_organic_mymeatcost">
                                        <option value="3">300%</option>
                                        <option value="2.8">280%</option>
                                        <option value="2.6">260%</option>
                                        <option value="2.4">240%</option>
                                        <option value="2.2">220%</option>
                                        <option value="2">200%</option>
                                        <option value="1.8">180%</option>
                                        <option value="1.6">160%</option>
                                        <option value="1.4">140%</option>
                                        <option value="1.2">120%</option>
                                        <option value="1">100%</option>
                                        <option value="0.8">80%</option>
                                        <option value="0.6">60%</option>
                                        <option value="0.4">40%</option>
                                        <option value="0.2">20%</option>
                                        <option value="0">0%</option>
                                      </select>
                                      of conventional
                                    </span>
                                  </td>
                                </tr>
                                <tr>
                                  <td>Organic dairy costs </td>
                                  <td>
                                    <span>
                                      <select id="input_takeaction_go_organic_mydairycost">
                                        <option value="3">300%</option>
                                        <option value="2.8">280%</option>
                                        <option value="2.6">260%</option>
                                        <option value="2.4">240%</option>
                                        <option value="2.2">220%</option>
                                        <option value="2">200%</option>
                                        <option value="1.8">180%</option>
                                        <option value="1.6">160%</option>
                                        <option value="1.4">140%</option>
                                        <option value="1.2">120%</option>
                                        <option value="1">100%</option>
                                        <option value="0.8">80%</option>
                                        <option value="0.6">60%</option>
                                        <option value="0.4">40%</option>
                                        <option value="0.2">20%</option>
                                        <option value="0">0%</option>
                                      </select>
                                      of conventional
                                    </span>
                                  </td>
                                </tr>
                              </table>
                            </div>
                          </div>

                        </div>
                        <div class="takeaction_category" style="display: none;">39</div>
                      </div>
                    </div>
                  </div>
                  <div class="new takeaction_section_offset">
                    <h>
                      <table style="margin-top: 5px;" border="0" cellpadding="0" cellspacing="0">
                        <tbody>
                          <tr>
                            <td><a class="chkPledge" id="chkPledge_offset_shopping" style="display: block;" href="javascript:takeaction_pledge('offset_shopping');">
                                <table align="center" class="trg" border="0" cellpadding="0" cellspacing="0">
                                  <tbody>
                                    <tr>
                                      <td class="chkPledge" style="height: 30px;"> Pledge </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </a></td>
                            <td><a class="trigger" style="display: block;" href="javascript:;">
                                <table class="trg" border="0" cellpadding="0" cellspacing="0" style="height: 30px;">
                                  <tbody>
                                    <tr>
                                      <td class="pledgeText" style="width: 315px;">Offset Shopping Footprint</td>
                                      <!--
                        <td style="width: 50px; text-align: left;"><img src="images/categories/transportation32.png" style="width: 23px; height: 23px;"/></td>
                        -->

                                      <td style="width: 105px; text-align: center;"><span class="takeaction_pounds" id="takeaction_pounds_offset_shopping"
                                          style="color: #415683"></span></td>
                                      <td style="width: 105px; text-align: center;">$<span class="takeaction_dollars"
                                          id="takeaction_dollars_offset_shopping"></span></td>
                                      <td style="width: 105px; text-align: center;">$<span class="takeaction_net10yr"
                                          id="takeaction_net10yr_offset_shopping"></span></td>
                                    </tr>
                                  </tbody>
                                </table>
                              </a></td>
                          </tr>
                        </tbody>
                      </table>
                    </h>
                    <div style="position: relative" class="inner">
                      <div style="position: relative; ">
                        <div id="takeaction_greenglow_offset_shopping" style="position: absolute; top: 0; left: 0; height: 100%; width: 100%; z-index: 0; box-shadow:inset 0px 0px 30px rgba(196,255,155,1); display: none;"></div>
                        <div class="pledge_container" style="font-size:12px; padding: 10px; position: relative; z-index: 10;">
                          <div class="pledgeTitle"> </div>
                          <img src="images/pledges/icon22.png" alt="" align="right" vspace="5" hspace="10" /> I have
                          already pledged to reduce my food, goods and services footprint by <span id="result_takeaction_offset_shopping_transpledges">0</span>
                          metric tons of CO2e per year. I will purchase carbon offsets for the remaining <span id="result_takeaction_offset_shopping_transtonsleft">
                            0 </span> tons of CO2e at a cost of
                          <input type="text" id="input_takeaction_offset_shopping_offset" size="2" maxlength="2" />
                          dollars per metric ton.
                          <div class="funfact"> Avoiding GHG emissions in one place can "offset" GHG emissions
                            occurring somewhere else. Offsets can go toward projects such as financing a wind turbine
                            in Asia, a solar roof-top in Africa or a reforestation program in South America. Plus,
                            carbon offset projects can produce positive quality-of-life impacts such as increasing
                            economic and social development and supporting clean technology. </div>
                          <div class="assumption_button">
                            <a href="javascript:;" class="assumptionShowHideLink">[<span class="takeaction_assumption_plusminus">+</span>]
                              assumptions</a>
                          </div>
                          <div class="assumption_content">
                            <div>
                              <ul>
                                <li> Offsets are assumed to be "additional" greenhouse gas emissions that would NOT
                                  otherwise be reduced without your purchase of carbon offsets. Examples include
                                  projects that would not be profitable, and therefore not undertaken, without the
                                  additional funds provided by carbon offset sponsors</li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="takeaction_category" style="display: none;">40</div>
                      </div>
                    </div>
                  </div>
                </div>


                <div id="takeaction_assumptions_container" style="position: absolute; display: none;
 top: 50px; left: 90px; border: 1px solid #666; border-radius: 5px;
  z-index: 5000; background-color: white; padding: 20px; box-shadow: 0 8px 6px -6px #333;">
                  <div style="position: relative; height: 30px;">
                    <div style="position: absolute; left: 10px; font-size: 12px; font-weight:bold; color: #394A71">
                      Critical Assumptions
                    </div>

                    <div style="position: absolute; right: 0; top: 0">
                      <button id="takeaction_button_assumptions_close" style="font-size: 10px; font-weight:bold; z-index: 4000;">X</button>
                    </div>
                  </div>
                  <div style="position: relative">
                    <ul>
                      <li>
                        <span>Price of gasoline: $</span>
                        <input type='text' id="input_takeaction_assumption_price_of_gasoline" size="4" maxlength="4" />
                        <span class="style17">&nbsp; per gallon</span>
                      </li>
                      <li>
                        <span>Electricity price (cents/kWh)</span>
                        <input type='text' id="input_takeaction_assumption_kwhprice" size="4" maxlength="4" />
                        <img src="images/carb_question_mark.png" border="0" class="tTip tTipHandle" title="Average residential prices (cents/kWh)
         </strong><br />US=11; AL=9; AK=15; AZ=10; AR=9; CA=14; CO=9; CT=19; DE=13; DC=11; FL=11;
         GA=9; HI=24; ID=6; IL=10; IN=8; IA=9; KS=8; KY=7; LA=9; ME=17; MD=12; MA=16; MI=10; MN=9; 
         MS=9; MO=8; MT=9nn; NB=8; NV=12; NH=15; NJ=14; NM=9; NY=17; NC=9; ND=7; OH=10; OK=9; OR=8;
          PA=11; RI=14; SC=9; SD=8; TN=8; TX=12; UT=8; VT=14; VA=9; WA=7; WV=7; WI=11; WY=8<br />
          Source: Energy Information Administration, 2007" />
                      </li>
                      <li>
                        <span>Electricity emission factor (gCO2/kWh): </span>
                        <span id="takeaction_display_gco2perkwh"></span>
                      </li>
                      <li>
                        <span> Natural gas price ($/therm):</span>
                        <input type='text' id="input_takeaction_assumption_ngprice" size="4" maxlength="4" />
                        <img src="images/carb_question_mark.png" border="0" class="tTip tTipHandle" title="<strong>Average residential price of natural gas ($/therm):</strong><br />US=1.38; 
        AL=0.68; AK=1.88; AZ=1.42; AR=1.63; CA=1.18; CO=1.05; CT=1.77; DE=1.69; DC=1.7; FL=2.15; GA=1.82; 
        HI=3.53; ID=1.12; IL=1.31; IN=1.24; IA=1.23; KS=1.32; KY=1.41; LA=1.47; ME=1.77; MD=1.64; MA=1.79; 
        MI=1.2; MN=1.17; MS=1.43; MO=1.47; MT=1.13; NB=1.64; NV=1.69; NH=1.53; NJ=1.26; NM=1.54; NY=1.08; 
        NC=1.13; ND=1.43; OH=1.44; OK=1.34; OR=1.45; PA=1.65; RI=1.76; SC=1.74; SD=1.11; TN=1.47; TX=1.31; 
        UT=1.1; VT=1.62; VA=1.42; WA=1.34; WV=1.22; WI=1.57; WY=1.16<br />Source: Energy Information Administration, 2007" />
                      </li>
                      <li>
                        <span class="style17">Discount rate </span>
                        <input type='text' id="input_takeaction_assumption_discountrate" size="2" maxlength="2" />
                        <span>% (used in NPV and ROI calculations)</span>
                      </li>
                      <li>
                        <span>Inflation rate:&nbsp; </span><input type='text' id="input_takeaction_assumption_inflationrate"
                          size="2" maxlength="2" />
                        <span>% (used in NPV and ROI calculations)</span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <script>
                $(document).ready(function () {
                  $("#takeaction_sortbutton_pounds").click();
                });
              </script>
            </div>



          </div>
        </div>

        <div id="preloader" style="display: none; opacity:0.5; background-color:#EBEBEB;  width: 680px; z-index: 1000; position:absolute;
left:35px; top: 0; height: 100%;"></div>

        <div style="position:relative; height: 0; display: none;">
          <div style="position: absolute; right: 0; bottom: 0">
            <button class="nextButton_" id="nextButton_" onClick="javascript:nextPage();" style="width: 170px; height: 30px;">
              <div class="nextButtonOrangeText">Next: Transportation</div>
            </button>
          </div>
        </div>





        <div style="position: relative; display: none;">
          <div class="smiley_div" id="smiley_0" style="position: absolute; top: 0; left: 0;"></div>
          <div class="smiley_div" id="smiley_1" style="position: absolute; top: 0; left: 0;"></div>
          <div class="smiley_div" id="smiley_2" style="position: absolute; top: 0; left: 0;"></div>
          <div class="smiley_div" id="smiley_3" style="position: absolute; top: 0; left: 0;"></div>
          <div class="smiley_div" id="smiley_4" style="position: absolute; top: 0; left: 0;"></div>

        </div>


        <script>
          var oldHeight;

          function post(type) {
            if ($(":animated").length > 0) return;

            var newHeight;
            if (tab == 'takeaction') {
              newHeight = Number($("#tabs_container").height()) + Number(270);
            } else {
              newHeight = Number($("#tabs_container").height()) + Number(620);
            }
            if (oldHeight == newHeight) return;
            oldHeight = newHeight;
            $.pm({
              target: window.parent,
              type: type,
              data: {
                'height': newHeight
              },
              success: function (data) {
                //alert('success' + data);
              },
              error: function (data) {
                //alert('fail' + data);
              },
              url: document.referrer
            });
          };

          setInterval("post('autoAdjustHeight')", 100);
        </script>
        <button style="display: none;" class="send-button" onClick="javascript:post('autoAdjustHeight');">test</button>


        <div id="chartTable" style="position: relative; display: block; height: 350px;">
          <div id="selected_location"></div>
          <div id="mainChart" style="height:350px;width:520px;"></div>
          <div id="tooltip1b" style="opacity:0;  position: absolute; z-index: 3000; width: 150px; height: 88px; left: 0; bottom: 0; background-image:url('./images/hover_balloon.png'); background-repeat: no-repeat; "
            onMouseOver="if (!animating) {$('#tooltip1b').hide();}" onMouseMove="if (!animating) {$('#tooltip1b').hide();}">
            <div id="tooltipText" style="margin-top: 25px; text-align: center; font-family: Verdana, Geneva, sans-serif;  font-size: 12px; color: #333;margin-left: 25px; width: 100px;;"></div>
          </div>
          <div style="font-family: Verdana, Geneva, sans-serif; font-size: 11px; margin-left: 10px"> <a id="link_reset_axis"
              href="javascript:;" title="Click here to reset the height of the graph" class="tTip tTipHandle" style="color: #666; text-decoration: none;">
              Reset Axis </a> </div>


          <div id="smiley_container" style="position:absolute; left: 520px; top: 30px; width: 150px; height: 400px; font-family:Verdana, Geneva, sans-serif; ">

            <div id="smiley_display_tons" style="color: #5A75AD;">
              <div style="font-size:15px; font-weight: bold;width: 100%; text-align: center;">Total <span id="smiley_display_tab"></span></div>
              <div id="smiley_pounds_total" style="font-size: 40px; width: 100%; text-align: center; text-shadow: 1px 2px 5px #5A75AD;"></div>
              <div style="font-size:13px; width: 100%; text-align: center;">tons CO<sub>2</sub>/year</div>
            </div>

            <div style="text-align: center; margin-top: 5px;">
              <img id="img_smilely" src="images/smiley/smileyok75.gif" style="width: 80px; height: 80px; display: none;" />
            </div>

            <div style="font-size: 12px;  margin-top: 10px; text-align: center;text-shadow: 0px 0px 1px #E0E0E0; color: #787878; padding-right: 10px; padding-left: 10px;">

              <div style="font-weight:bold; font-size: 14px;" id="smiley_percent_comparison"></div>
              <div id="smiley_percent_comparison_rest" style="padding-right: 5px; padding-left: 5px;"></div>
            </div>

          </div>

        </div>







        <div id="error" style="color: red; font-size: 12px; font-family:Arial, Helvetica, sans-serif; position:relative; top: 0; left: 0;"></div>

        <div id="green_design" style=" display:none; padding: 8px 0; overflow: auto;font-family: Verdana, Geneva, Arial, Helvetica, sans-serif; font-size: 10px">
          <a href="http://gdi.ce.cmu.edu/" target="_blank" style="border: none;"> <img src="images/gdi_logo.jpg" style="border: none; float: right;" />
          </a> Greenhouse gas emission factors provided in part by license agreement with the <a href="http://gdi.ce.cmu.edu/"
            target="_blank">Green Design Institute</a> at Carnegie Mellon University. </div>

        <div class="footerLinks" style="margin-top: 25px; z-index: 5000; text-align:center; width: 100%;"><a href="http://coolclimate.berkeley.edu/terms-of-use"
            target="_blank">terms of use</a> | <a href="http://www.coolcalifornia.org/calculator-documentation" target="_blank">documentation</a>
          | <a href="http://coolcalifornia.org/article/faq-for-calculator" target="_blank">F.A.Q.</a> | <a href="http://www.surveymonkey.com/s.aspx?sm=EvM_2bdWqoS1MMrt08SnoD1A_3d_3d"
            target="_blank">take our survey</a></div>

      </div>



    </div>
    <div class="bottom_mid"></div>
    <div id="below"></div>


  </div>
  <div class="tip">
    <div class="tipMid"></div>
    <div class="tipBtm"></div>
  </div>







  <div id="_err" style="position: relative; color: red;"></div>


  <div style="width: 0; height:0; display: none;">


    <img src="images/icon_dollar.png" />
    <img src="images/tipBtm_blue.png" />
    <img src="images/tr_bg_repeat_x_h.png" />
    <img src="images/Save.PNG" />
    <img src="images/tipTop_blue.png" />
    <img src="images/ui-bg_glass_70_e36911_1x400.png" />
    <img src="images/icon_apple.png" />
    <img src="images/pledge_bg.png" />
    <img src="images/icon_croissant.png" />
    <img src="images/ui-bg_glass_75_f08538_1x400.png" />
    <img src="images/stripe.png" />
    <img src="images/icon_steak_fish.png" />
    <img src="images/icon_family.png" />
    <img src="images/family_green.png" />
    <img src="images/funding-wizard-icon.png" />
    <img src="images/hover_balloon.png" />
    <img src="images/Orange_save_button.gif" />
    <img src="images/dollar_green.png" />
    <img src="images/tr_bg_repeat_x.png" />
    <img src="images/pledge_bg_h.png" />
    <img src="images/tipMid_blue.png" />
    <img src="images/ui-bg_flat_65_e36911_40x100.png" />
    <img src="images/pledges/LGDST/T12toT8light.png" />
    <img src="images/pledges/LGDST/LEDpark.png" />
    <img src="images/pledges/LGDST/solar_hotwater_b.png" />
    <img src="images/pledges/LGDST/es_printer.png" />
    <img src="images/pledges/LGDST/es_comp.png" />
    <img src="images/pledges/LGDST/lf_showerheads.png" />
    <img src="images/pledges/LGDST/solar_hotwater_h.png" />
    <img src="images/pledges/LGDST/ev.png" />
    <img src="images/pledges/LGDST/retrocommissioning.png" />
    <img src="images/pledges/LGDST/altfuel.png" />
    <img src="images/pledges/LGDST/lf_faucet.png" />
    <img src="images/pledges/LGDST/eff_heating.png" />
    <img src="images/pledges/LGDST/es_copier.png" />
    <img src="images/pledges/LGDST/landscaping.png" />
    <img src="images/pledges/LGDST/es_pwrmgmt.png" />
    <img src="images/pledges/LGDST/eff_cooling.png" />
    <img src="images/pledges/LGDST/plant.png" />
    <img src="images/pledges/LGDST/coolroofs.png" />
    <img src="images/pledges/LGDST/exit.png" />
    <img src="images/pledges/LGDST/PVpanel.png" />
    <img src="images/pledges/LGDST/es_waterheater.png" />
    <img src="images/pledges/LGDST/hv.png" />
    <img src="images/pledges/icon13.png" />
    <img src="images/pledges/icon5.png" />
    <img src="images/pledges/icon12.png" />
    <img src="images/pledges/icon16.png" />
    <img src="images/pledges/icon8.png" />
    <img src="images/pledges/icon17.png" />
    <img src="images/pledges/icon2.png" />
    <img src="images/pledges/icon10.png" />
    <img src="images/pledges/icon21.png" />
    <img src="images/pledges/icon22.png" />
    <img src="images/pledges/icon18.png" />
    <img src="images/pledges/icon1.png" />
    <img src="images/pledges/icon3.png" />
    <img src="images/pledges/icon4.png" />
    <img src="images/pledges/icon7.png" />
    <img src="images/pledges/icon11.png" />
    <img src="images/pledges/icon20.png" />
    <img src="images/pledges/icon6.png" />
    <img src="images/pledges/LITE/reducewaste.png" />
    <img src="images/pledges/LITE/tankless_heater.png" />
    <img src="images/pledges/LITE/print2side.png" />
    <img src="images/pledges/LITE/lf_toilet.png" />
    <img src="images/pledges/LITE/rechargeable.png" />
    <img src="images/pledges/LITE/lightoff.png" />
    <img src="images/pledges/icon9.png" />
    <img src="images/gdi_logo.jpg" />
    <img src="images/site_preload.gif" />
    <img src="images/hide_icon.gif" />
    <img src="images/shadow.png" />
    <img src="images/smiley/smileyok75.gif" />
    <img src="images/smiley/bigsmile75.jpg" />
    <img src="images/smiley/smallfrown75.jpg" />
    <img src="images/smiley/ohno75.jpg" />
    <img src="images/smiley/smiley75.gif" />
    <img src="images/hes_preload.gif" />
    <img src="images/icon_ice_cream.png" />
    <img src="images/triangle.png" />
    <img src="images/icon_cheese_milk.png" />
    <img src="images/ClimateEarthLogoSmall.png" />
    <img src="images/cloud.png" />
    <img src="images/carb_question_mark.png" />
    <img src="images/frame/green_1.png" />
    <img src="images/frame/blue_4.png" />
    <img src="images/frame/blue_1_h.png" />
    <img src="images/frame/blue_0_h.png" />
    <img src="images/frame/green_5_h.png" />
    <img src="images/frame/green_0_h.png" />
    <img src="images/frame/green_0.png" />
    <img src="images/frame/blue_5_h.png" />
    <img src="images/frame/bottom_left.png" />
    <img src="images/frame/green_4.png" />
    <img src="images/frame/left_peice_green.png" />
    <img src="images/frame/blue_4_h.png" />
    <img src="images/frame/green_1_h.png" />
    <img src="images/frame/left_peice.png" />
    <img src="images/frame/blue_0.png" />
    <img src="images/frame/blue_5.png" />
    <img src="images/frame/blue_3_h.png" />
    <img src="images/frame/green_2.png" />
    <img src="images/frame/green_3_h.png" />
    <img src="images/frame/blue_2.png" />
    <img src="images/frame/blue_2_h.png" />
    <img src="images/frame/right_peice_blue.png" />
    <img src="images/frame/bottom.png" />
    <img src="images/frame/bottom_right.png" />
    <img src="images/frame/green_5.png" />
    <img src="images/frame/right_peice_green.png" />
    <img src="images/frame/green_2_h.png" />
    <img src="images/frame/blue_1.png" />
    <img src="images/frame/blue_3.png" />
    <img src="images/frame/green_4_h.png" />
    <img src="images/frame/green_3.png" />
    <img src="images/vehicle_bg.PNG" />

  </div>



</body>

</html>