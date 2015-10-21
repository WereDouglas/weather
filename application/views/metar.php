<link rel="stylesheet" href="<?= base_url(); ?>assets/css/ace.min.css" />     
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/ace-skins.min.css" />       

<link rel="stylesheet" href="<?= base_url(); ?>assets/css/chosen.css" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/datepicker.css" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap-timepicker.css" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/daterangepicker.css" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.min.css" />
<link href="<?= base_url(); ?>css/mine.css" rel="stylesheet" />



    <div class="page-content">
        <div class="page-header position-relative">
             
            <h4>
              Metar Book (Observed every hour)Aviation Routine Weather Report

            </h4>
        </div><!--/.page-header-->

        <div class="row-fluid">
         <form id="edit-form" name="edit-form" enctype="multipart/form-data"  action='<?= base_url(); ?>index.php/metar/save'  method="post">            

  
            <div class="span12">
                <!--PAGE CONTENT BEGINS-->
               <div class="form-inline well alert-info">
     

              
                       <label >Station</label> 
                       <select class="form-control" id="station" name="station">
                                                              <option value="<?=$user->station?>" /><?=$user->station?>
                                                            <?php
                                        if (is_array($stations) && count($stations)) {
                                            foreach ($stations as $loop) {
                                                ?>                        
                                                            <option value="<?=$loop->name?>" /><?=$loop->name?>
                                                    

                                        <?php }}?>
                      </select>
                

               
                    <label >Station No  </label >
                        <input class="form-control"  id="number" readonly="" name="number" ></input>   
                  
                   <label > Select the date</label>
                       <input class="form-control date-picker" id="datenow" value="<?php echo date('Y-m-d');?>"  name="datenow" type="text" data-date-format="yyyy-mm-dd" />
                        <span class="add-on">
                            <i class="icon-calendar"></i>
                        </span>
                 
                </div>
                   <span id="Loading"  name ="Loading"><img src="<?= base_url(); ?>images/ajax-loader.gif" alt="Ajax Indicator" /></span><br>
                                                         
      
       
   <div class="success">
 
                                                  <?php echo $this->session->flashdata('msg');?>
       
       <div class="form-inline well alert-warning">
            <h4>New meta data</h4>
                    <label><strong>Temperature</strong></label>
              <label >Air </label >
              <input class="form-control input-mini" type="text" id="temperature" name="temperature"  />
              <label>Dew point </label >
              <input  class="form-control input-mini" type="text" id="dew" name="dew" class="input-mini" />
                <label>Wet bulb </label >
                <input type="text" id="wet" name="wet" class="input-mini" />
                  <label>Relative humidity(%)</label >
                  <input type="text" id="humidity" name="humidity" class="input-mini" />
                  
                  <hr>
                  
                  
       </div>
       <div class="form-inline well alert-warning">
            <label>METAR/SPECI   </label>
              <select class="input-mini" id="type" name="type">
                                    <option value="META" />META
                                    <option value="SPECI" />SPECI 
                                </select>
             <a href="#">CCCC</a>
             <input type="text" name="code" id="code" class="input-mini" />
              <a href="#">YYGGgg<span class="degree">z</span></a>
              <input type="text" class="input-mini" id="datetime" name="datetime" value="<?php echo date('d'). date('H')."00Z";?>"/>
                <a href="#">Dddff/f<span class="foot-note">m</span>/f<span class="foot-note">m</span></a>
                <input class="input-mini input-mask-phone" type="text" id="wind" name="wind" />  
                <a href="#">WW or CAVOK</a>
                <input class="input-mini input-mask-height" type="text" id="visibility" name="visibility" />
            <label><a href="#">W<span class="foot-note">1</span>W<span class="foot-note">1</span></a> </label>
            <input class="input-medium input-mask-product" type="text" id="cloud" name="cloud" />
             <a href="#">N<span class="foot-note">1</span>CCh<span class="foot-note">1</span>h<span class="foot-note">1</span>N<span class="foot-note">n</span>CChhhN<span class="foot-note">h</span>CChhh</a>
             <select class="input-mini" id="present" name="present">
                                    <option value="Fg" />Fg
                                    <option value="Hz" />Hz 
                                    <option value="RA" />RA
                                    <option value="Ts" />Ts
                                </select>    
             <a href="#">TT/T<span class="foot-note">d</span>T<span class="foot-note">d</span></a>
             <span><input style="width: 25px !important; border: none"  type="text" class="input-mini" name="temp1" id="temp1"  />/<input class="input-mini " style="width: 27px !important;border: none;" type="text" name="dew1" id="dew1" /></span>
                                           
                 <a href="#">QNH(hpa)</a>   
                 <input class="input-mini input-mask-hpa" type="text" id="stationhpa" name="stationhpa" />
            <a href="#">QNH(in)</a>
            <input class="input-mini" style="border: none;" type="text" id="stationinch" name="stationinch" />
              <a href="#">QFE(hpa)</a>
              <input class="input-mini input-mask-hpa" type="text" id="seahapa" name="seahpa" />
               <a href="#">QFE(in)</a>
                <input class="input-mini " style="border: none;" type="text" id="seainch" name="seainch" />
               <a href="#">RE W1W1</a>
           <input type="text"  class="input-mini input-mask-re" name="recent" id="recent"/>
           
            <button  class="width-65 pull-right btn btn-small btn-success"  style="width: 10% !important; margin-bottom: 5px;" >
                                    Submit 

                                </button>
       </div>
               

        

   </div>
                <!--PAGE CONTENT ENDS-->

            </div><!--/.page-content-->
            </form>
            
        </div><!--/.main-container-->
        <h4>Today's metar</h4>
        <div class="well well-large" id="meta" >
                                                <div class="widget-body">
                                         
   <table id="sample-table-2" class="table table-striped table-bordered table-hover">

                    <tbody>  
                          
                        <tr>
                            <td class="center-head">
                                <label>
                                    METAR/SPECI
                                </label>
                            </td>

                            <td class="center">
                                <a href="#">CCCC</a>
                            </td>


                            <td class="center">
                                <a href="#">YYGGgg<span class="degree">z</span></a>
                            </td>

                            <td class="center">
                                <a href="#">Dddff/f<span class="foot-note">m</span>/f<span class="foot-note">m</span></a>
                            </td>


                            <td class="center">
                                <a href="#">WW or CAVOK</a>
                            </td>
                            <td class="center-head">
                                <label>
                                    <a href="#">W<span class="foot-note">1</span>W<span class="foot-note">1</span></a>

                                </label>
                            </td>

                            <td class="center" >
                                <a href="#">N<span class="foot-note">1</span>CCh<span class="foot-note">1</span>h<span class="foot-note">1</span>N<span class="foot-note">n</span>CChhhN<span class="foot-note">h</span>CChhh</a>
                            </td>
  <td class="center" >
                                <a href="#">A/temperature</a>
                            </td>
                           
                            <td class="center" >
                                <a href="#">Dew point</a>
                            </td>
                            <td class="center" >
                                <a href="#">Wet Bulb</a>
                            </td>

                            <td class="center">
                                <a href="#">TT/T<span class="foot-note">d</span>T<span class="foot-note">d</span></a>
                            </td>

                            <td class="center" >
                                <a href="#">QNH(hpa)</a>
                            </td>
                            <td class="center">
                                <a href="#">QNH(in)</a>
                            </td>
                            <td class="center-head">
                                <a href="#">QFE(hpa)</a>
                            </td>

                            <td class="center">
                                <a href="#">QFE(in)</a>
                            </td>
                            <td class="center">
                                <a href="#">RE W1W1</a>
                            </td>
                        </tr>   
                        <?php
                                        if (is_array($metas) && count($metas)) {
                                            foreach ($metas as $loop) {
                                                ?>  
                        <tr>
                            <td class="small" ><?=$loop->type ?></td>
                            <td class="small" ><?=$loop->station ?> </td>
                            <td class="small"> <?=$loop->datetime ?></td>
                            <td class="small"><?=$loop->wind_direction.' '.$loop->wind_speed.' '.$loop->unit ?>     </td>
                     <td class="small" > <?=$loop->visibility ?>  </td>
                      <td class="small" ><?=$loop->present_weather ?> </td>
                                <td class="small"><?=$loop->cloud ?>  </td>
                                              <td class="small"><?=$loop->air_temperature ?>  </td>
                                           
                                            <td class="small"><?=$loop->dew_temperature ?></td>
                                     <td class="small"><?=$loop->wet_bulb ?>  </td>

                                    <td class="small"><?=$loop->air_temperature.'/'.$loop->dew_temperature ?> </td>
                                     <td class="small" ><?=$loop->station_pressure_hpa ?>  </td>
                                      <td class="small"> <?php 
                                      if($loop->station_pressure_hpa !="")
                                          echo  round(0.02952998751*$loop->station_pressure_hpa,2);
                                      ?></td>
                                     <td class="small" ><?=$loop->sea_pressure_hpa ?>  </td>
                                      <td class="small"> </td>
                                     <td class="small" ><?=$loop->recent_weather ?> </td>

                        </tr>

                                        <?php }}?>

                    </tbody>
                </table>


                                                </div><!--/widget-body-->
                                            </div><!--/signup-box-->

        <?php require_once(APPPATH . 'views/footer_instrument.php'); ?>

      <script type="text/javascript">
            $(function () {
                $('#id-disable-check').on('click', function () {
                    var inp = $('#form-input-readonly').get(0);
                    if (inp.hasAttribute('disabled')) {
                        inp.setAttribute('readonly', 'true');
                        inp.removeAttribute('disabled');
                        inp.value = "This text field is readonly!";
                    }
                    else {
                        inp.setAttribute('disabled', 'disabled');
                        inp.removeAttribute('readonly');
                        inp.value = "This text field is disabled!";
                    }
                });


                $(".chzn-select").chosen();

                $('[data-rel=tooltip]').tooltip({container: 'body'});
                $('[data-rel=popover]').popover({container: 'body'});

                $('textarea[class*=autosize]').autosize({append: "\n"});
                $('textarea[class*=limited]').each(function () {
                    var limit = parseInt($(this).attr('data-maxlength')) || 100;
                    $(this).inputlimiter({
                        "limit": limit,
                        remText: '%n character%s remaining...',
                        limitText: 'max allowed : %n.'
                    });
                });

                $.mask.definitions['~'] = '[+-]';
                $('.input-mask-date').mask('99/99/9999');
                $('.input-mask-oblique').mask('99/99');
                $('.input-mask-phone').mask('999 99 KT');
                $('.input-mask-re').mask('****');
                $('.input-mask-hpa').mask('999.9');
                $('.input-mask-height').mask('9999');
                $('.input-mask-eyescript').mask('~9.99 ~9.99 999');
                $(".input-mask-product").mask('a**999 a**999aa* a**999 a**999');




                $('.date-picker').datepicker().next().on(ace.click_event, function () {
                    $(this).prev().focus();
                });
                $('#id-date-range-picker-1').daterangepicker().prev().on(ace.click_event, function () {
                    $(this).next().focus();
                });

                $('#timepicker1').timepicker({
                    minuteStep: 1,
                    showSeconds: true,
                    showMeridian: false
                })

                $('#colorpicker1').colorpicker();
                $('#simple-colorpicker-1').ace_colorpicker();


                $(".knob").knob();


                //we could just set the data-provide="tag" of the element inside HTML, but IE8 fails!
                var tag_input = $('#form-field-tags');
                if (!(/msie\s*(8|7|6)/.test(navigator.userAgent.toLowerCase())))
                    tag_input.tag({placeholder: tag_input.attr('placeholder')});
                else {
                    //display a textarea for old IE, because it doesn't support this plugin or another one I tried!
                    tag_input.after('<textarea id="' + tag_input.attr('id') + '" name="' + tag_input.attr('name') + '" rows="3">' + tag_input.val() + '</textarea>').remove();
                    //$('#form-field-tags').autosize({append: "\n"});
                }


             

            });
        </script>
   <script type="text/javascript">
$('#Loading').hide();
 $('#Loading_daily').hide();  
           
            $('#station').change(function(){
                var station = $('#station').val();
                if (station != ""){
                    
                    $.post("<?= base_url()?>/index.php/station/get", {station: $("#station").val()}
            , function (station) {
                var json = JSON.parse(station);
                            $('#number').empty();
                             $('#code').empty();
                         //   console.log(json[0].number);
                            $("#number").val(json[0].number);
                              $("#code").val(json[0].code);

            });
                    
                  
                } else{
                    
                            $('#number').empty();
                             $('#code').empty();
                }
            }); //end change
            
            
            $('#humidity').blur(function(){
                var temperature = parseInt($('#temperature').val());
                var humidity   = parseInt( $('#humidity').val());
                
                var dew = (humidity * temperature)/100;
                
                var wet =Math.round(((dew * 2) + temperature)/3);
               
                $('#dew').val(dew);
                $('#wet').val(wet);                
                            
                $('#temp1').val(temperature);
                 $('#dew1').val(dew);
                
             
                
            }); //end change
            $('#stationhpa').blur(function(){
                var hpa = parseInt($('#stationhpa').val());
               
                
                var inch = Math.round((0.02952998751 * hpa));  
                            
                $('#stationinch').val(inch);
                
            }); //end change
             $('#datenow').blur(function(){
                 $('#meta').hide();
                  $('#Loading').show();
            $.post("<?php echo base_url() ?>index.php/metar/get", {date: $("#datenow").val()}
            , function (response) {
                //#emailInfo is a span which will show you message
                $('#Loading').hide();            
                setTimeout(finishAjaxitem('Loading', escape(response)), 200);
             
            }); //end change
            
             function finishAjaxitem(id, response) {
                $('#' + id).html(unescape(response));
                $('#' + id).fadeIn();
            }
        });
        
         $('#daily').click(function(e){
             e.preventDefault();
                var date = $('#dateyesterday').val();
                var max = $('#maxtemp').val();
                 var min = $('#mintemp').val();
                  var actual = $('#actualrain').val();
                   var anemometer = $('#anemometer').val();
                    var wind = $('#windrun').val();
                     var maxi = $('#maxtemp2').val();
                     var station = $("#station").val();
                     console.log(station);
                  $('#Loading_daily').show(); 
                if (station != ""){
                    
            $.post("<?php echo base_url() ?>index.php/metar/daily", {date:date,max:max,min:min,actual:actual,anemometer:anemometer,wind:wind,maxi:maxi,station:station,rain:$('#rain').val(),thunder:$('#thunder').val(),fog:$('#fog').val(),haze:$('#haze').val(),storm:$('#storm').val(),quake:$('#quake').val()}
            , function (response) {
                //#emailInfo is a span which will show you message
                $('#Loading_daily').hide();            
                setTimeout(finishAjaxitem('Loading_daily', escape(response)), 200);
             
            }); //end change
            
             function finishAjaxitem(id, response) {
                $('#' + id).html(unescape(response));
                $('#' + id).fadeIn();
            }

            }else{
                alert("Please select a station");
                $('#Loading_daily').hide();
                
            }                    
                  
                
            }); //end change
            

        </script>
