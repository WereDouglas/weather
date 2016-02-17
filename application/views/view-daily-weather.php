
<link href="<?= base_url(); ?>css/bootstrap.min.css" rel="stylesheet" type="text/css" />

<link href="<?= base_url(); ?>css/admin.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>plugins/bootstrap-datepicker/css/datepicker.css" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/font-awesome.min.css" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/ace.min.css" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/ace-responsive.min.css" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/ace-skins.min.css" />
<link href="<?= base_url(); ?>css/mine.css" rel="stylesheet" />
<script>
    $(document).ready(function () {
        var container_width = SINGLE_IMAGE_WIDTH * $(".scroll a").length;
        $(".scroll").css("width", container_width);
    });

</script>
<div class="container clear_both padding_fix">
    <div class="row">
        <div class="col-md- scroll">   
            <div class="header">
                <div class="actions"> <a class="minimize" href="#"><i class="fa fa-chevron-down"></i></a><a class="close-down" href="#"><i class="fa fa-times"></i></a> </div>
                <h3 class="content-header">Daily weather records:<?= $this->session->userdata('stationname'); ?></h3>
            </div>
            <table id="sample-table-2" class=" span12 table table-striped table-bordered table-hover" >
                <tbody>
                    <tr>
                        <td class="center-head"><label>Date</label></td>
                        <td class="center-head"><label>Max temp</label></td>
                        <td class="center"><a href="#">Min temp</a> </td>
                        <td class="center"> <a href="#">Rainfall</a> </td>
                        <td class="center">
                            <a href="#">Duration(Hrs)</a>
                        </td>

                        <td class="center">
                            <a href="#">Anemometer</a>
                        </td>
                        <td class="center">
                            <a href="#">Height</a>
                        </td>


                        <td class="center">
                            <a href="#">Wind</a>
                        </td>
                        <td class="center-head">
                            <label>
                                <a href="#">Rain</a>

                            </label>
                        </td>
                        <td>thunder</td>
                        <td>fog</td>
                        <td>haze</td>
                        <td>storm</td>
                        <td>quake </td>


                        <td class="center" >
                            <a href="#">Sunshine</a>
                        </td>
                        <td class="center" >
                            <a href="#">Radiation</a>
                        </td>

                        <td class="center" >
                            <a href="#">Radiation type</a>
                        </td>
                        <td class="center" >
                            <a href="#">Evaporation</a>
                        </td>
                        <td class="center" >
                            <a href="#">Evap.type </a>
                        </td>

                        <td class="center">
                            <a href="#">Evaporation2</a>
                        </td>
                        <td class="center" >
                            <a href="#">Evap2.type</a>
                        </td>

                    </tr>   
                    <?php
                    if (is_array($daily) && count($daily)) {
                        foreach ($daily as $loop) {
                            $id = $loop->id;
                            $max = $loop->max;
                            $min = $loop->min;
                            $actual = $loop->actual;
                            $duration = $loop->duration;
                            $anemometer = $loop->anemometer;
                            $height = $loop->height;
                            $wind = $loop->wind;
                            $rain = $loop->rain;
                            $thunder = $loop->thunder;
                            $fog = $loop->fog;
                            $haze = $loop->haze;
                            $storm = $loop->storm;
                            $quake = $loop->quake;
                            $sunshine = $loop->sunshine;
                            $radiation = $loop->radiation;
                            $radiationtype = $loop->radiationtype;
                            $evap1 = $loop->evap1;
                            $evaptype1 = $loop->evaptype1;
                            $evap2 = $loop->evap2;
                            $evaptype2 = $loop->evaptype2;
                            ?>  
                            <tr id="<?php echo $id; ?>" class="edit_tr">
                                <td class="edit_td"><?= $loop->date ?></td>
                                <td class="edit_td">
                                    <span id="max_<?php echo $id; ?>" class="text"><?php echo $max; ?></span>
                                    <input type="text" value="<?php echo $max; ?>" class="editbox" id="max_input_<?php echo $id; ?>"
                                </td>
                                <td class="edit_td">
                                    <span id="min_<?php echo $id; ?>" class="text"><?php echo $min; ?></span>
                                    <input type="text" value="<?php echo $min; ?>" class="editbox" id="min_input_<?php echo $id; ?>"
                                </td>
                                <td class="edit_td">
                                    <span id="actual_<?php echo $id; ?>" class="text"><?php echo $actual; ?></span>
                                    <input type="text" value="<?php echo $actual; ?>" class="editbox" id="actual_input_<?php echo $id; ?>"
                                </td>
                                <td class="edit_td">
                                    <span id="duration_<?php echo $id; ?>" class="text"><?php echo $duration; ?></span>
                                    <input type="text" value="<?php echo $duration; ?>" class="editbox" id="duration_input_<?php echo $id; ?>"
                                </td>
                                <td class="edit_td">
                                    <span id="anemometer_<?php echo $id; ?>" class="text"><?php echo $anemometer; ?></span>
                                    <input type="text" value="<?php echo $anemometer; ?>" class="editbox" id="anemometer_input_<?php echo $id; ?>"
                                </td>
                                <td class="edit_td">
                                    <span id="height_<?php echo $id; ?>" class="text"><?php echo $height; ?></span>
                                    <input type="text" value="<?php echo $height; ?>" class="editbox" id="height_input_<?php echo $id; ?>"
                                </td>
                                <td class="edit_td">
                                    <span id="wind_<?php echo $id; ?>" class="text"><?php echo $wind; ?></span>
                                    <input type="text" value="<?php echo $wind; ?>" class="editbox" id="wind_input_<?php echo $id; ?>"
                                </td>
                                <td class="edit_td">
                                    <span id="rain_<?php echo $id; ?>" class="text"><?php echo $rain; ?></span>
                                    <input type="text" value="<?php echo $rain; ?>" class="editbox" id="rain_input_<?php echo $id; ?>"
                                </td>
                                <td class="edit_td">
                                    <span id="thunder_<?php echo $id; ?>" class="text"><?php echo $thunder; ?></span>
                                    <input type="text" value="<?php echo $thunder; ?>" class="editbox" id="thunder_input_<?php echo $id; ?>"
                                </td>
                                <td class="edit_td">
                                    <span id="fog_<?php echo $id; ?>" class="text"><?php echo $fog; ?></span>
                                    <input type="text" value="<?php echo $fog; ?>" class="editbox" id="fog_input_<?php echo $id; ?>"
                                </td>
                                <td class="edit_td">
                                    <span id="haze_<?php echo $id; ?>" class="text"><?php echo $haze; ?></span>
                                    <input type="text" value="<?php echo $haze; ?>" class="editbox" id="haze_input_<?php echo $id; ?>"
                                </td>
                                <td class="edit_td">
                                    <span id="storm_<?php echo $id; ?>" class="text"><?php echo $storm; ?></span>
                                    <input type="text" value="<?php echo $storm; ?>" class="editbox" id="storm_input_<?php echo $id; ?>"
                                </td>
                                <td class="edit_td">
                                    <span id="quake_<?php echo $id; ?>" class="text"><?php echo $quake; ?></span>
                                    <input type="text" value="<?php echo $quake; ?>" class="editbox" id="quake_input_<?php echo $id; ?>"
                                </td>      
                                <td class="edit_td">
                                    <span id="sunshine_<?php echo $id; ?>" class="text"><?php echo $sunshine; ?></span>
                                    <input type="text" value="<?php echo $sunshine; ?>" class="editbox" id="sunshine_input_<?php echo $id; ?>"
                                </td>
                                <td class="edit_td">
                                    <span id="radiation_<?php echo $id; ?>" class="text"><?php echo $radiation; ?></span>
                                    <input type="text" value="<?php echo $radiation; ?>" class="editbox" id="radiation_input_<?php echo $id; ?>"
                                </td>   
                                <td class="edit_td">
                                    <span id="radiationtype_<?php echo $id; ?>" class="text"><?php echo $radiationtype; ?></span>
                                    <input type="text" value="<?php echo $radiationtype; ?>" class="editbox" id="radiationtype_input_<?php echo $id; ?>"
                                </td>
                                <td class="edit_td">
                                    <span id="evap1_<?php echo $id; ?>" class="text"><?php echo $evap1; ?></span>
                                    <input type="text" value="<?php echo $evap1; ?>" class="editbox" id="evap1_input_<?php echo $id; ?>"
                                </td>  
                                <td class="edit_td">
                                    <span id="evaptype1_<?php echo $id; ?>" class="text"><?php echo $evaptype1; ?></span>
                                    <input type="text" value="<?php echo $evaptype1; ?>" class="editbox" id="evaptype1_input_<?php echo $id; ?>"
                                </td>   
                                <td class="edit_td">
                                    <span id="evap2_<?php echo $id; ?>" class="text"><?php echo $evap2; ?></span>
                                    <input type="text" value="<?php echo $evap2; ?>" class="editbox" id="evap2_input_<?php echo $id; ?>"
                                </td> 
                                <td class="edit_td">
                                    <span id="evaptype2_<?php echo $id; ?>" class="text"><?php echo $evaptype2; ?></span>
                                    <input type="text" value="<?php echo $evaptype2; ?>" class="editbox" id="evaptype2_input_<?php echo $id; ?>"
                                </td>
                            </tr>

                            <?php
                        }
                    }
                    ?>

                </tbody>
            </table>


        </div> 
    </div>
</div>
<script src="<?php echo base_url(); ?>js/jQuery-2.1.4.min.js" type="text/javascript"></script>

<script type="text/javascript">
    $('#Loading').hide();
    $('#Loading_daily').hide();
    $('#Loading_rainy').hide();

    $('#station').change(function () {
        var station = $('#station').val();
        if (station != "") {

            $.post("<?= base_url() ?>/index.php/station/get", {station: $("#station").val()}
            , function (station) {
                var json = JSON.parse(station);
                $('#number').empty();
                $('#code').empty();
                //   console.log(json[0].number);
                $("#number").val(json[0].number);
                $("#code").val(json[0].code);

            });


        } else {

            $('#number').empty();
            $('#code').empty();
        }
    }); //end change



    $('#daily').click(function (e) {
        e.preventDefault();
        var date = $('#datenow').val();
        var max = $('#maxtemp').val();
        var min = $('#mintemp').val();
        var actual = $('#actualrain').val();
        var anemometer = $('#anemometer').val();
        var wind = $('#anemometer').val();
        var station = $("#station").val();


        console.log(station);
        $('#Loading_daily').show();
        if (station != "") {

            $.post("<?php echo base_url() ?>index.php/metar/daily", {date: date, max: max, min: min, actual: actual, anemometer: anemometer, wind: wind, station: station, rain: $('#rain').val(), thunder: $('#thunder').val(), fog: $('#fog').val(), haze: $('#haze').val(), storm: $('#storm').val(), quake: $('#quake').val(), height: $('#height').val(), duration: $('#duration').val(), sunshine: $('#sunshine').val(), type: $('#type').val(), radiation: $('#radiation').val(), evaptype1: $('#evaptype1').val(), evaptype2: $('#evaptype2').val(), evap1: $('#evap1').val(), evap2: $('#evap2').val()}
            , function (response) {
                //#emailInfo is a span which will show you message

                $('#Loading_daily').hide();
                setTimeout(finishAjaxitem('Loading_daily', escape(response)), 200);

            }); //end change

            function finishAjaxitem(id, response) {
                $('#' + id).html(unescape(response));
                $('#' + id).fadeIn();
                location.reload();

            }

        } else {
            alert("Please select a station");
            $('#Loading_daily').hide();

        }



    }); //end change

    $('#rainy').click(function (e) {
        e.preventDefault();
        var date = $('#daterain').val();
        var rain = $('#rain_now').val();
        var time = $('#timepicker1').val();
        var duration = $('#duration_now').val();
        var station = $('#number').val();


        //  console.log(station);
        // $('#Loading_daily').show(); 
        if (station != "") {

            $.post("<?php echo base_url() ?>index.php/metar/rain", {station: station, date: date, rain: rain, time: time, duration: duration}
            , function (response) {
                //#emailInfo is a span which will show you message
                $('#Loading_rainy').hide();
                setTimeout(finishAjaxitem('Loading_rainy', escape(response)), 200);

            }); //end change

            function finishAjaxitem(id, response) {
                $('#' + id).html(unescape(response));
                $('#' + id).fadeIn();
            }

        } else {
            alert("Please select a station");
            $('#Loading_rainy').hide();

        }



    }); //end change

    $('#datenow').datetimepicker({
        format: 'YYYY-MM-DD'
    });
    $('#dateyesterday').datetimepicker({
        format: 'YYYY-MM-DD'
    });


</script>