<div class=" container-fluid">
    <div class="page-content">
        <div class="row-fluid">

            <link rel="stylesheet" href="<?= base_url(); ?>assets/css/ace.min.css" />     
            <link rel="stylesheet" href="<?= base_url(); ?>assets/css/ace-skins.min.css" />       

            <link rel="stylesheet" href="<?= base_url(); ?>assets/css/chosen.css" />
            <link rel="stylesheet" href="<?= base_url(); ?>assets/css/datepicker.css" />
            <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap-timepicker.css" />
            <link rel="stylesheet" href="<?= base_url(); ?>assets/css/daterangepicker.css" />
            <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.min.css" />
            <link href="<?= base_url(); ?>css/mine.css" rel="stylesheet" />
            <?php require_once(APPPATH . 'views/permission.php'); ?> 


            <div class="scroll row-fluid span12 ">
                <h4>Metar Book (Observed every hour)Aviation Routine Weather Report</h4>

                <?php echo $this->session->flashdata('msg'); ?>
                <div class="scroll row-fluid">
                    <?php if ($role == 'Observer' || $role == 'Manager') { ?>
                        <form id="edit-form" name="edit-form" enctype="multipart/form-data"  action='<?= base_url(); ?>index.php/metar/save'  method="post">            


                            <div class="span12">
                                <div class="span3">
                                    <label for="form-field-select-1">Station name</label>
                                    <select class="span12" id="station"  name="station">
                                        <option value="" />  
                                        <option value="<?= $this->session->userdata('stationname'); ?>" ><?= $this->session->userdata('stationname'); ?></option>

                                        <?php
                                        if (allowed($see, 'manage')) {
                                            if (is_array($stations) && count($stations)) {
                                                foreach ($stations as $loop) {
                                                    ?> 
                                                    <option value="<?= $loop->name ?>" /><?= $loop->name ?>                      




                                                <?php
                                                }
                                            }
                                        }
                                        ?>

                                    </select>
                                </div>
                                <div class="span3">
                                    <label >Station No  </label >
                                    <input class="form-control"  id="number" readonly="" name="number" ></input>   
                                </div>
                                <div class="span3">
                                    <label > Select the date</label>
                                    <input class="form-control date-picker" id="datenow" value="<?php echo date('Y-m-d'); ?>"  name="datenow" type="text" data-date-format="yyyy-mm-dd" />
                                    <span class="add-on">
                                        <i class="icon-calendar"></i>
                                    </span>
                                </div>
                            </div>

                        </form> 
                    <?php } ?>
                    <h4>Today's metar</h4>  

                    <?php if ($role == 'Manager' || $role == 'Data') { ?>
                        <label>Day/Month/Year </label>

    <?php $months = array(1 => "January", 2 => "February", 3 => "March", 4 => "April", 5 => "May", 6 => "June", 7 => "July", 8 => "August", 9 => "September", 10 => "October", 11 => "November", 12 => "December"); ?>

                        <div class="span12">
                            <select class=" col-md-2 no"  name="day" id="day">
                                <option value=""></option>
    <?php for ($d = 1; $d <= 31; $d++)
        echo "<option value='$d'>$d</option>"
        ?>
                            </select>
                            <select  name="month" id="month" >
                                <option value=""></option>
    <?php
    for ($m = 1; $m <= 12; $m++)
        echo "<option value='$m'>" . $months[$m] . "</option>"
        ?>
                            </select>
                            <select name="year" id="year" >
                                <option value=""></option>
    <?php
    for ($y = date('Y'); $y >= 1902; $y--)
        echo "<option value='$y'>$y</option>"
        ?>
                            </select>
                            <button type="button" class="btn btn-info btn-small" id="generate" >generate</button>
                            <input type="button" class="btn btn-info btn-small" onclick="ExportToExcel('datatable')" value="Export to Excel">



                        </div>
                        <span id="Loading"  name ="Loading"><img src="<?= base_url(); ?>images/ajax-loader.gif" alt="Ajax Indicator" /></span><br>
<?php } ?>
                </div>    
            </div>   
        </div> 
    </div> 
</div> 





<?php require_once(APPPATH . 'views/footer_instrument.php'); ?>

<script type="text/javascript">
    $(function () {
        $('#id-disable-check').on('click', function () {
            var inp = $('#form-input-readonly').get(0);
            if (inp.hasAttribute('disabled')) {
                inp.setAttribute('readonly', 'true');
                inp.removeAttribute('disabled');
                inp.value = "This text field is readonly!";
            } else {
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


    $('#humidity').blur(function () {
        var temperature = parseInt($('#temperature').val());
        var humidity = parseInt($('#humidity').val());

        var dew = (humidity * temperature) / 100;

        var wet = Math.round(((dew * 2) + temperature) / 3);

        $('#dew').val(dew);
        $('#wet').val(wet);

        $('#temp1').val(temperature);
        $('#dew1').val(dew);



    }); //end change
    $('#stationhpa').blur(function () {
        var hpa = parseInt($('#stationhpa').val());


        var inch = Math.round((0.02952998751 * hpa));

        $('#stationinch').val(inch);

    }); //end change
    $("#generate").on("click", function (e) {

        var station = $("#station").val();
        var month = $("#month").val();
        var year = $("#year").val();
        var day = $("#day").val();
        $('#meta').hide();
        $('#Loading').show();
        $.post("<?php echo base_url() ?>index.php/metar/get", {datenow: $("#datenow").val(), station: $("#code").val(), day: day, month: month, year: year}
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

    $('#daily').click(function (e) {
        e.preventDefault();
        var date = $('#dateyesterday').val();
        var max = $('#maxtemp').val();
        var min = $('#mintemp').val();
        var actual = $('#actualrain').val();
        var anemometer = $('#anemometer').val();
        var wind = $('#windrun').val();

        var station = $("#station").val();
        console.log(station);
        $('#Loading_daily').show();
        if (station != "") {

            $.post("<?php echo base_url() ?>index.php/metar/daily", {date: date, max: max, min: min, actual: actual, anemometer: anemometer, wind: wind, station: station, rain: $('#actualrain').val(), thunder: $('#thunder').val(), fog: $('#fog').val(), haze: $('#haze').val(), storm: $('#storm').val(), quake: $('#quake').val()}
            , function (response) {
                //#emailInfo is a span which will show you message
                $('#Loading_daily').hide();
                setTimeout(finishAjaxitem('Loading_daily', escape(response)), 200);

            }); //end change

            function finishAjaxitem(id, response) {
                $('#' + id).html(unescape(response));
                $('#' + id).fadeIn();
            }

        } else {
            alert("Please select a station");
            $('#Loading_daily').hide();

        }


    }); //end change


</script>
<script type="text/javascript">
    function ExportToExcel(datatable) {
        var htmltable = document.getElementById('metar');
        var html = htmltable.outerHTML;
        window.open('data:application/vnd.ms-excel,' + encodeURIComponent(html));
    }
</script>
