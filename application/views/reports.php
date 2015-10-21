
<div class="main-container container-fluid">





    <div class="page-content">
        <div class="page-header position-relative">
            <h1>
                <i class="icon-calendar icon-2x green"></i>
                Weather Reports
                <small>
                    <i class="icon-double-angle-right"></i>

                </small>
            </h1>
        </div><!--/.page-header-->
        <div class="row-fluid">
            <div class="span12">
                <div class="tabbable tabs-top">
                    <ul class="nav nav-tabs" id="myTab3">
                        <li class="active">
                            <a data-toggle="tab" href="#home3">
                                <i class="pink icon-dashboard bigger-110"></i>
                                Monthly rainfall report(FORM 496)
                            </a>
                        </li>

                        <li>
                            <a data-toggle="tab" href="#profile3">
                                <i class="blue icon-user bigger-110"></i>
                                Weather Summary form (FORM 10)
                            </a>
                        </li>

                        <li>
                            <a data-toggle="tab" href="#dropdown13">
                                <i class="icon-rocket"></i>
                                Climatological Form(626A)
                            </a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div id="home3" class="tab-pane in active">
                            <div class="page-header position-relative">
                                <h1>
                                    <i class="icon-cloud icon-2x blue"></i>
                                    MONTHLY RAINFALL REPORT(form No.496)Rev.12/2012

                                </h1>
                            </div><!--/.page-header-->

                            <div class="row-fluid">
                                <div class="span12">
                                    <!--PAGE CONTENT BEGINS-->

                                    <div class="page-content">					

                                        <div class="row-fluid">
                                            <div class="span12">
                                                <!--PAGE CONTENT BEGINS-->

                                                <div class="row-fluid">
                                                    <div class="span9">
                                                        <div class="space"></div>

                                                        <div id="calendar"></div>
                                                    </div>

                                                    <div class="span3">
                                                        <div class="widget-box transparent">
                                                            <div class="widget-header">
                                                                <h4>Select by:</h4>
                                                            </div>

                                                            <div class="widget-main">
                                                                <div class="form-group">
                                                                    <label>Region</label>


                                                                    <select id="form-field-select-1">
                                                                        <option value="Masaka" />East
                                                                        <option value="Mulago" />Central


                                                                    </select>
                                                                    <label>District</label>


                                                                    <select id="form-field-select-1">
                                                                        <option value="Masaka" />Tororo
                                                                        <option value="Mulago" />Masaka


                                                                    </select>

                                                                    <label>Station</label>


                                                                    <select id="form-field-select-1">

                                                                        <?php
                                                                        if (is_array($stations) && count($stations)) {
                                                                            foreach ($stations as $loop) {
                                                                                ?>                        
                                                                                <option value="<?= $loop->name ?>" /><?= $loop->name ?>


                                                                            <?php }
                                                                        } ?>


                                                                    </select>
                                                                    <label for="form-field-select-1">Station No.</label>
                                                                    <input class="form-control"  id="administrative_area_level_1" name="administrative_area_level_1" ></input>   <br>
                                                                    <label> Month/Year </label>
                                                                    <input class="form-control"  id="administrative_area_level_1" name="administrative_area_level_1" ></input>   <br>



                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!--PAGE CONTENT ENDS-->
                                            </div><!--/.span-->
                                        </div><!--/.row-fluid-->
                                    </div>






                                    <!--PAGE CONTENT ENDS-->
                                </div>                <!--PAGE CONTENT ENDS-->
                            </div>	</div>

                        <div id="profile3" class="tab-pane">
                            <div class="page-header position-relative">
                                <h1>
                                    <i class="icon-edit icon-2x green"></i>
                                    Form 10 (Rev.2003) Weather summary

                                </h1>
                            </div><!--/.page-header-->

                            <div class="row-fluid">

                                <span class="well-large">  
                                    <table id="sample-table-2" class="table table-striped table-bordered table-hover">

                                        <tbody>
                                            <tr>
                                                <th  >
                                                    <label>

                                                    </label>
                                                </th>
                                                <th colspan="3" >
                                                    <label>

                                                    </label>
                                                </th>
                                                <th colspan="9" >
                                                    <label>
                                                        <h3>  Time of Observation 0600Z</h3>
                                                    </label>
                                                </th>
                                                <th colspan="9" >
                                                    <label>
                                                        <h3>  Time of Observation 1200Z   </h3>
                                                    </label>
                                                </th>
                                                <th colspan="2" >
                                                    <label>

                                                    </label>
                                                </th>
                                                <th colspan="6" >
                                        <h3>  DAYS WITH  </h3>
                                        </th>
                                        </tr>

                                        <tr bgcolor="#F7ECF2">
                                            <td class="center">
                                                DATE
                                            </td>

                                            <td class="center" >
                                                MAX
                                            </td>
                                            <td class="center">
                                                <a href="#">MIN</a>
                                            </td>
                                            <td class="center">
                                                <a href="#">SUNSHINE</a>
                                            </td>

                                            <td class="center">
                                                <a href="#">DB</a>
                                            </td>

                                            <td class="center">
                                                <a href="#">WB</a>
                                            </td>
                                            <td class="center">
                                                <a href="#">DP</a>
                                            </td>
                                            <td class="center">
                                                VP
                                            </td>
                                            <td class="center">
                                                RH
                                            </td>
                                            <td class="center">
                                                CLP
                                            </td>
                                            <td class="center">
                                                GPM
                                            </td>
                                            <td class="center">
                                                WIND DIR
                                            </td>
                                            <td class="center">
                                                FF
                                            </td>



                                            <td class="center">
                                                <a href="#">DB</a>
                                            </td>

                                            <td class="center">
                                                <a href="#">WB</a>
                                            </td>
                                            <td class="center">
                                                <a href="#">DP</a>
                                            </td>
                                            <td class="center">
                                                VP
                                            </td>
                                            <td class="center">
                                                RH
                                            </td>
                                            <td class="center">
                                                CLP
                                            </td>
                                            <td class="center">
                                                GPM
                                            </td>
                                            <td class="center">
                                                WIND DIR
                                            </td>
                                            <td class="center">
                                                FF
                                            </td>



                                            <td class="center">
                                                <a href="#">WIND RUN</a>
                                            </td>

                                            <td class="center">
                                                <a href="#">R/F</a>
                                            </td>

                                            <td class="center">
                                                <a href="#">R/DAY</a>
                                            </td>
                                            <td class="center">
                                                <a href="#">TS</a>
                                            </td>

                                            <td class="center">
                                                <a href="#">FG</a>
                                            </td>

                                            <td class="center">
                                                <a href="#">HZ</a>
                                            </td>

                                            <td class="center">
                                                <a href="#">HAIL</a>
                                            </td>

                                            <td class="center">
                                                <a href="#">EARTH QUAKE</a>
                                            </td>                         


                                        </tr> 

                                        <?php
                                        $cr = 1;


                                        if (is_array($monthly) && count($monthly)) {
                                            //var_dump($metas);
                                            foreach ($monthly as $loop) {
                                                ?>
                                                <tr>
                                                    <td class="small" ><?php echo $cr++; ?></td>
                                                    <td class="small" ><?= $loop->max ?>  </td>
                                                    <td class="small">  <?= $loop->min ?></td>
                                                    <td class="small"></td>
                                                    <td class="small"> <?= $loop->air9; ?></td>
                                                    <td class="small" > <?= $loop->wet9; ?></td>
                                                    <td class="small" > <?= $loop->dew9; ?> </td>
                                                    <td class="small"></td>
                                                    <td class="small" > <?= $loop->humid9; ?></td>
                                                    <td class="small"></td>
                                                    <td class="small"></td>
                                                    <td class="small"> <?= $loop->wind9; ?></td>
                                                    <td class="small"> <?= $loop->speed9; ?></td>



                                                    <td class="small"> <?= $loop->air15; ?></td>
                                                    <td class="small" > <?= $loop->wet15; ?></td>
                                                    <td class="small" > <?= $loop->dew15; ?> </td>
                                                    <td class="small"></td>
                                                    <td class="small" > <?= $loop->humid15; ?></td>
                                                    <td class="small"></td>
                                                    <td class="small"></td>
                                                    <td class="small"> <?= $loop->wind15; ?></td>
                                                    <td class="small"> <?= $loop->speed15; ?></td>
                                                    <td class="small"> </td>
                                                    <td class="small"> </td>
                                                    <td class="small" > <input class="ace-checkbox-3" enabled  <?php echo ($loop->rain == 'true') ? "checked" : "null"; ?> type="checkbox" /></td>
                                                    <td class="small"> <input class="ace-checkbox-3"  <?php echo ($loop->thunder == 'true') ? "checked" : "null"; ?> type="checkbox" /></td>
                                                    <td class="small"><input class="ace-checkbox-3" name="rain" id="rain"  <?php echo ($loop->fog == 'true') ? "checked" : "null"; ?> type="checkbox" /> </td>
                                                    <td class="small"><input class="ace-checkbox-3" name="rain" id="rain"  <?php echo ($loop->haze == 'true') ? "checked" : "null"; ?> type="checkbox" /> </td>
                                                    <td class="small"><input class="ace-checkbox-3" name="rain" id="rain"  <?php echo ($loop->storm == 'true') ? "checked" : "null"; ?> type="checkbox" /> </td>
                                                    <td class="small"><input class="ace-checkbox-3"  name="rain" id="rain"  <?php echo ($loop->quake == 'true') ? "checked" : "null"; ?> type="checkbox" /> </td>
                                                </tr>
                                                <?php }
                                        }
                                        ?> 



                                        </tbody>
                                    </table>     

                                </span>

                                <!--PAGE CONTENT ENDS-->

                            </div><!--/.page-content-->
                        </div>

                        <div id="dropdown13" class="tab-pane">
                            <div class="page-header position-relative">
                                <h1>
                                    <i class="icon-edit icon-2x green"></i>
                                    MONTHLY CLIMATOLOGICAL OBSERVATIONS
                                </h1>
                            </div><!--/.page-header-->

                            <div class="row-fluid">
                                <div class="span12">
                                    <!--PAGE CONTENT BEGINS-->

                               <div class="form-group well alert-success">
     

                    <span class="span3 ">Station : <select id="station" name="station">
                                                            
                                                            <?php
                                        if (is_array($stations) && count($stations)) {
                                            foreach ($stations as $loop) {
                                                ?>                        
                                                            <option value="<?=$loop->name?>" /><?=$loop->name?>
                                                    

                                        <?php }}?>
                                                </select></span>

                    <span for="form-field-select-1">Station No:<input class="form-control"  id="number" readonly="" name="number" ></input>   
                    </span>
                    <span> Select the date:<input class="span3 date-picker" id="datenow" value="<?php echo date('Y-m-d');?>"  name="datenow" type="text" data-date-format="yyyy-mm-dd" />
                        <span class="add-on">
                            <i class="icon-calendar"></i>
                        </span>
                    </span>
                   
                </div>

                          <span class="well-large">  
                                    <table id="sample-table-2" class="table table-striped table-bordered table-hover">

                                        <tbody>
                                            <tr>
                                                <th><label>Day </label> </th>
                                                <th colspan="5" ><label>0600Z <br>TEMPERATURES <sup>o</sup>C</label> </th>
                                                <th > <label>  <h3>0600Z Relative humidity(%)</h3> </label></th>
                                                  <th colspan="2" ><label>Anemometer</label> </th>
                                                <th colspan="2" >  <label><h3>RAINFALL</h3> </label> </th>
                                                <th> <label>sunshine Hrs. </label></th>
                                                    <th colspan="2" ><label>Radiometer</label> </th>
                                                <th colspan="4" > <h3>  EVAP.PANS  </h3>  </th>
                                    <th colspan="3" ><label>1200Z <br>TEMPERATURES <sup>o</sup>C</label> </th>
                                        <th > <label>  <h3>1200Z Relative humidity(%)</h3> </label></th>
                                         <th > </th>
                                        </tr>

                                        <tr bgcolor="#F7ECF2">
                                            <td class="center"> </td>
                                             <td class="center"><a href="#">DRY BULB</a>  </td>
                                            <td class="center"><a href="#">WET BULB</a>   </td>
                                            <td class="center"> <a href="#">DEW POINT</a></td>
                                            <td class="center" > MAX </td>
                                            <td class="center"> <a href="#">MIN</a> </td>
                                            <td class="center"><a href="#"></a>   </td>
                                            <td class="center">Height   </td>
                                            <td class="center">   Wind run km.</td>
                                            <td class="center"> Amount(mm) </td>
                                            <td class="center">Duration (Hrs)</td>
                                            <td class="center"></td>
                                            <td class="center">Type </td>
                                            <td class="center"> <a href="#">Radiation</a></td>
                                            <td class="center">Type </td>
                                            <td class="center"><a href="#">EVAP(mm)</a>  </td>
                                            <td class="center">Type </td>
                                            <td class="center"><a href="#">EVAP(mm)</a>  </td>
                                             <td class="center"><a href="#">DRY BULB</a>  </td>
                                            <td class="center"><a href="#">WET BULB</a>   </td>
                                            <td class="center"> <a href="#">DEW POINT</a></td>
                                            <td class="center"><?= $loop->humid15; ?></td>
                                            <td class="center"> </td>
                                        </tr> 

                                        <?php
                                        $cr = 1;


                                        if (is_array($monthly) && count($monthly)) {
                                            //var_dump($metas);
                                            foreach ($monthly as $loop) {
                                                ?>
                                                <tr>
                                                    <td class="small" ><?php echo $cr++; ?></td>
                                                     <td class="small"> <?= $loop->air9; ?></td>
                                                    <td class="small" > <?= $loop->wet9; ?></td>
                                                    <td class="small" > <?= $loop->dew9; ?> </td>
                                                    <td class="small" ><?= $loop->max ?>  </td>
                                                    <td class="small">  <?= $loop->min ?></td>
                                                    <td class="small"><?= $loop->humid9; ?></td>
                                                    <td class="small">  <?= $loop->height ?></td>
                                                     <td class="small">  <?= $loop->wind ?></td>
                                                      <td class="small">  <?= $loop->duration ?></td>
                                                    <td class="small"></td>
                                                     <td class="small">  <?= $loop->type ?></td>
                                                      <td class="small">  <?= $loop->radiation ?></td>
                                                       <td class="small">  <?= $loop->evaptype1 ?></td>
                                                    <td class="small" > <?= $loop->evap1; ?></td>
                                                     <td class="small">  <?= $loop->evaptype2 ?></td>
                                                    <td class="small" > <?= $loop->evap2; ?></td>
                                                    <td class="small"> <?= $loop->air15; ?></td>
                                                    <td class="small" > <?= $loop->wet15; ?></td>
                                                    <td class="small" > <?= $loop->dew15; ?> </td>
                                                    <td class="small"><?= $loop->humidity; ?></td>
                                                    <td class="small"></td>
                                                  
                                                        </tr>
                                                <?php }
                                        }
                                        ?> 



                                        </tbody>
                                    </table>     

                                </span>


                                    <!--PAGE CONTENT ENDS-->

                                </div><!--/.page-content-->

                            </div><!--/.main-container-->	</div>
                    </div>
                </div>
            </div><!--/span-->

            <div class="vspace-6"></div>


        </div><!--/row-->

        <div class="hr hr-double hr-dotted hr18"></div>
        <div class="span5">
       
        </div><!--/span-->

        <div class="span7">
            <div class="widget-box transparent">
               

                <div class="widget-body">
                    <div class="widget-main padding-4">
                        <div id="sales-charts" ></div>
                    </div><!--/widget-main-->
                </div><!--/widget-body-->
            </div><!--/widget-box-->
        </div>  
    </div><!--/.page-content-->



</div><!--/.main-container-->

<?php require_once(APPPATH . 'views/footer_report.php'); ?>
<script src="<?= base_url(); ?>assets/js/fullcalendar.min.js"></script>
<script type="text/javascript">
    $(function () {

        /* initialize the external events
         -----------------------------------------------------------------*/

        $('#external-events div.external-event').each(function () {

            // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
            // it doesn't need to have a start or end
            var eventObject = {
                title: $.trim($(this).text()) // use the element's text as the event title
            };

            // store the Event Object in the DOM element so we can get to it later
            $(this).data('eventObject', eventObject);

            // make the event draggable using jQuery UI
            $(this).draggable({
                zIndex: 999,
                revert: true, // will cause the event to go back to its
                revertDuration: 0  //  original position after the drag
            });

        });




        /* initialize the calendar
         -----------------------------------------------------------------*/

        var date = new Date();
        var d = date.getDate();
        var m = date.getMonth();
        var y = date.getFullYear();


        var calendar = $('#calendar').fullCalendar({
            buttonText: {
                prev: '<i class="icon-chevron-left"></i>',
                next: '<i class="icon-chevron-right"></i>'
            },
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay'
            },
            events: [
<?php
if (is_array($daily) && count($daily)) {

    foreach ($daily as $loops) {
        $value = explode("-", $loops->date);
        $y = $value[0];
        $m = $value[1];
        $d = $value[2];
        ?>
                        {
                            title: '<?php echo $loops->actual . 'mm'; ?>',
                            start: new Date(<?= $y ?>, <?= $m-1 ?>,<?= $d ?>),
                            className: 'label-success'},
    <?php }
} ?>


            ]
            ,
            editable: true,
            droppable: true, // this allows things to be dropped onto the calendar !!!
            drop: function (date, allDay) { // this function is called when something is dropped

                // retrieve the dropped element's stored Event Object
                var originalEventObject = $(this).data('eventObject');
                var $extraEventClass = $(this).attr('data-class');


                // we need to copy it, so that multiple events don't have a reference to the same object
                var copiedEventObject = $.extend({}, originalEventObject);

                // assign it the date that was reported
                copiedEventObject.start = date;
                copiedEventObject.allDay = allDay;
                if ($extraEventClass)
                    copiedEventObject['className'] = [$extraEventClass];

                // render the event on the calendar
                // the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
                $('#calendar').fullCalendar('renderEvent', copiedEventObject, true);

                // is the "remove after drop" checkbox checked?
                if ($('#drop-remove').is(':checked')) {
                    // if so, remove the element from the "Draggable Events" list
                    $(this).remove();
                }

            }
            ,
            selectable: true,
            selectHelper: true,
            select: function (start, end, allDay) {

                bootbox.prompt("New Event Title:", function (title) {
                    if (title !== null) {
                        calendar.fullCalendar('renderEvent',
                                {
                                    title: title,
                                    start: start,
                                    end: end,
                                    allDay: allDay
                                },
                        true // make the event "stick"
                                );
                    }
                });


                calendar.fullCalendar('unselect');

            }
            ,
            eventClick: function (calEvent, jsEvent, view) {

                var form = $("<form class='form-inline'><label>Change event name &nbsp;</label></form>");
                form.append("<input autocomplete=off type=text value='" + calEvent.title + "' /> ");
                form.append("<button type='submit' class='btn btn-small btn-success'><i class='icon-ok'></i> Save</button>");

                var div = bootbox.dialog(form,
                        [
                            {
                                "label": "<i class='icon-trash'></i> Delete Event",
                                "class": "btn-small btn-danger",
                                "callback": function () {
                                    calendar.fullCalendar('removeEvents', function (ev) {
                                        return (ev._id == calEvent._id);
                                    })
                                }
                            }
                            ,
                            {
                                "label": "<i class='icon-remove'></i> Close",
                                "class": "btn-small"
                            }
                        ]
                        ,
                        {
                            // prompts need a few extra options
                            "onEscape": function () {
                                div.modal("hide");
                            }
                        }
                );

                form.on('submit', function () {
                    calEvent.title = form.find("input[type=text]").val();
                    calendar.fullCalendar('updateEvent', calEvent);
                    div.modal("hide");
                    return false;
                });


                //console.log(calEvent.id);
                //console.log(jsEvent);
                //console.log(view);

                // change the border color just for fun
                //$(this).css('border-color', 'red');

            }

        });


    })
</script>


