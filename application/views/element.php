<?php require_once(APPPATH . 'views/header.php'); ?>




<div class="row-fluid">
    <div class="span12">
        <!--PAGE CONTENT BEGINS-->
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box transparent" id="recent-box">
                    <div class="widget-header">
                        <h4 class="lighter smaller">
                            <i class="icon-cloud icon-2x green"></i>
            Elements
                        </h4>

                        <div class="widget-toolbar no-border">
                            <ul class="nav nav-tabs" id="recent-tab">
                                <li class="active">
                                    <a data-toggle="tab" href="#task-tab">New Element</a>
                                </li>

                                <li>
                                    <a data-toggle="tab" href="#member-tab">View All</a>
                                </li>

                             
                            </ul>
                        </div>
                    </div>

                    <div class="widget-body">
                        <div class="widget-main padding-4">
                            <div class="tab-content padding-8 overflow-visible">
                                <div id="task-tab" class="tab-pane active">

                                    <div id="signup-box" class="signup-box widget-box no-border">
                                        <div class="widget-body">
                                            <div class="widget-main">

                                                <div class="span6">
                             <div class="well well-large">                                  <label for="form-field-select-1">Registration number</label>

                                               <label for="form-field-select-1">Name</label>
 <input type="text" class="span12" placeholder="Element" />
                                                        
                                                     <div class="form-group">
                            <label> Abbreviation(Abbrev) </label>
                            <div id="locationField">
                                <input id="abbrev" name="abbrev" placeholder="Abbreviation"  type="text"></input>
                            </div>
                            <br>  

                        </div>
                        <div class="form-group">

                            <label> Type</label>
                           

                                                    <select id="form-field-select-1">
                                                         <option value="AK" />Default
                                                        <option value="AL" />Administrator
                                                       
                                                        
                                                    </select>
                             <label for="form-field-select-1">Units</label>

                                                    <select id="form-field-select-1">
                                                         <option value="AK" />Cm3
                                                        <option value="AL" />mm
                                                       
                                                        
                                                    </select>
                        </div>
  <label for="form-field-select-1">Scale</label>

                                                    <select id="form-field-select-1">
                                                         <option value="AK" />C
                                                        <option value="AL" />F
                                                       
                                                        
                                                    </select>
   <label for="form-field-select-1">Limits</label>

                                                    <select id="form-field-select-1">
                                                         <option value="AK" />
                                                        <option value="AL" />
                                                       
                                                        
                                                    </select>

                        <div class="form-group">

                            <label> Description </label>
                            <input class="form-control"  id="administrative_area_level_1" name="administrative_area_level_1" ></input>   <br>
 <div class="clearfix">
                         <br>                               <button type="reset" class="width-30 pull-left btn btn-small">
                                                            <i class="icon-refresh"></i>
                                                            Clear
                                                        </button>

                                                        <button onclick="return false;" class="width-65 pull-right btn btn-small btn-success">
                                                           Submit

                                                        </button>
                                                    </div>
                        </div>                   
                                                    
                                                    </div>
                      
                                             
                                             
                                                <fieldset>
                    

                                                   
                                                   




                                                   
                                                </fieldset>
                                                </form>
                                            </div>


                                        </div><!--/widget-body-->
                                    </div><!--/signup-box-->
                                </div>
                                </div>

                                <div id="member-tab" class="tab-pane">
                                    <div class="clearfix">
                                        <table id="sample-table-2" class="table table-striped table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th class="center">
                                                        <label>
                                                            <input type="checkbox" />
                                                            <span class="lbl"></span>
                                                        </label>
                                                    </th>
                                                    <th>Domain</th>
                                                    <th>Price</th>
                                                    <th class="hidden-480">Clicks</th>

                                                    <th class="hidden-phone">
                                                        <i class="icon-time bigger-110 hidden-phone"></i>
                                                        Update
                                                    </th>
                                                    <th class="hidden-480">Status</th>

                                                    <th></th>
                                                </tr>
                                            </thead>

                                            <tbody>


                                                <tr>
                                                    <td class="center">
                                                        <label>
                                                            <input type="checkbox" />
                                                            <span class="lbl"></span>
                                                        </label>
                                                    </td>

                                                    <td>
                                                        <a href="#">view.com</a>
                                                    </td>
                                                    <td>$45</td>
                                                    <td class="hidden-480">4,100</td>
                                                    <td class="hidden-phone">Mar 12</td>

                                                    <td class="hidden-480">
                                                        <span class="label label-success">Registered</span>
                                                    </td>

                                                    <td class="td-actions">
                                                        <div class="hidden-phone visible-desktop action-buttons">
                                                            <a class="blue" href="#">
                                                                <i class="icon-zoom-in bigger-130"></i>
                                                            </a>

                                                            <a class="green" href="#">
                                                                <i class="icon-pencil bigger-130"></i>
                                                            </a>

                                                            <a class="red" href="#">
                                                                <i class="icon-trash bigger-130"></i>
                                                            </a>
                                                        </div>

                                                        <div class="hidden-desktop visible-phone">
                                                            <div class="inline position-relative">
                                                                <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown">
                                                                    <i class="icon-caret-down icon-only bigger-120"></i>
                                                                </button>

                                                                <ul class="dropdown-menu dropdown-icon-only dropdown-yellow pull-right dropdown-caret dropdown-close">
                                                                    <li>
                                                                        <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                                            <span class="blue">
                                                                                <i class="icon-zoom-in bigger-120"></i>
                                                                            </span>
                                                                        </a>
                                                                    </li>

                                                                    <li>
                                                                        <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                                            <span class="green">
                                                                                <i class="icon-edit bigger-120"></i>
                                                                            </span>
                                                                        </a>
                                                                    </li>

                                                                    <li>
                                                                        <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                            <span class="red">
                                                                                <i class="icon-trash bigger-120"></i>
                                                                            </span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="center">
                                                        <label>
                                                            <input type="checkbox" />
                                                            <span class="lbl"></span>
                                                        </label>
                                                    </td>

                                                    <td>
                                                        <a href="#">nice.com</a>
                                                    </td>
                                                    <td>$38</td>
                                                    <td class="hidden-480">3,940</td>
                                                    <td class="hidden-phone">Feb 12</td>

                                                    <td class="hidden-480">
                                                        <span class="label label-info arrowed arrowed-righ">Sold</span>
                                                    </td>

                                                    <td class="td-actions">
                                                        <div class="hidden-phone visible-desktop action-buttons">
                                                            <a class="blue" href="#">
                                                                <i class="icon-zoom-in bigger-130"></i>
                                                            </a>

                                                            <a class="green" href="#">
                                                                <i class="icon-pencil bigger-130"></i>
                                                            </a>

                                                            <a class="red" href="#">
                                                                <i class="icon-trash bigger-130"></i>
                                                            </a>
                                                        </div>

                                                        <div class="hidden-desktop visible-phone">
                                                            <div class="inline position-relative">
                                                                <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown">
                                                                    <i class="icon-caret-down icon-only bigger-120"></i>
                                                                </button>

                                                                <ul class="dropdown-menu dropdown-icon-only dropdown-yellow pull-right dropdown-caret dropdown-close">
                                                                    <li>
                                                                        <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                                            <span class="blue">
                                                                                <i class="icon-zoom-in bigger-120"></i>
                                                                            </span>
                                                                        </a>
                                                                    </li>

                                                                    <li>
                                                                        <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                                            <span class="green">
                                                                                <i class="icon-edit bigger-120"></i>
                                                                            </span>
                                                                        </a>
                                                                    </li>

                                                                    <li>
                                                                        <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                            <span class="red">
                                                                                <i class="icon-trash bigger-120"></i>
                                                                            </span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="center">
                                                        <label>
                                                            <input type="checkbox" />
                                                            <span class="lbl"></span>
                                                        </label>
                                                    </td>

                                                    <td>
                                                        <a href="#">fine.com</a>
                                                    </td>
                                                    <td>$25</td>
                                                    <td class="hidden-480">2,983</td>
                                                    <td class="hidden-phone">Apr 01</td>

                                                    <td class="hidden-480">
                                                        <span class="label label-warning">Expiring</span>
                                                    </td>

                                                    <td class="td-actions">
                                                        <div class="hidden-phone visible-desktop action-buttons">
                                                            <a class="blue" href="#">
                                                                <i class="icon-zoom-in bigger-130"></i>
                                                            </a>

                                                            <a class="green" href="#">
                                                                <i class="icon-pencil bigger-130"></i>
                                                            </a>

                                                            <a class="red" href="#">
                                                                <i class="icon-trash bigger-130"></i>
                                                            </a>
                                                        </div>

                                                        <div class="hidden-desktop visible-phone">
                                                            <div class="inline position-relative">
                                                                <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown">
                                                                    <i class="icon-caret-down icon-only bigger-120"></i>
                                                                </button>

                                                                <ul class="dropdown-menu dropdown-icon-only dropdown-yellow pull-right dropdown-caret dropdown-close">
                                                                    <li>
                                                                        <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                                            <span class="blue">
                                                                                <i class="icon-zoom-in bigger-120"></i>
                                                                            </span>
                                                                        </a>
                                                                    </li>

                                                                    <li>
                                                                        <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                                            <span class="green">
                                                                                <i class="icon-edit bigger-120"></i>
                                                                            </span>
                                                                        </a>
                                                                    </li>

                                                                    <li>
                                                                        <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                            <span class="red">
                                                                                <i class="icon-trash bigger-120"></i>
                                                                            </span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="center">
                                                        <label>
                                                            <input type="checkbox" />
                                                            <span class="lbl"></span>
                                                        </label>
                                                    </td>

                                                    <td>
                                                        <a href="#">good.com</a>
                                                    </td>
                                                    <td>$50</td>
                                                    <td class="hidden-480">6,500</td>
                                                    <td class="hidden-phone">Feb 02</td>

                                                    <td class="hidden-480">
                                                        <span class="label label-inverse arrowed-in">Flagged</span>
                                                    </td>

                                                    <td class="td-actions">
                                                        <div class="hidden-phone visible-desktop action-buttons">
                                                            <a class="blue" href="#">
                                                                <i class="icon-zoom-in bigger-130"></i>
                                                            </a>

                                                            <a class="green" href="#">
                                                                <i class="icon-pencil bigger-130"></i>
                                                            </a>

                                                            <a class="red" href="#">
                                                                <i class="icon-trash bigger-130"></i>
                                                            </a>
                                                        </div>

                                                        <div class="hidden-desktop visible-phone">
                                                            <div class="inline position-relative">
                                                                <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown">
                                                                    <i class="icon-caret-down icon-only bigger-120"></i>
                                                                </button>

                                                                <ul class="dropdown-menu dropdown-icon-only dropdown-yellow pull-right dropdown-caret dropdown-close">
                                                                    <li>
                                                                        <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                                            <span class="blue">
                                                                                <i class="icon-zoom-in bigger-120"></i>
                                                                            </span>
                                                                        </a>
                                                                    </li>

                                                                    <li>
                                                                        <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                                            <span class="green">
                                                                                <i class="icon-edit bigger-120"></i>
                                                                            </span>
                                                                        </a>
                                                                    </li>

                                                                    <li>
                                                                        <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                            <span class="red">
                                                                                <i class="icon-trash bigger-120"></i>
                                                                            </span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="center">
                                                        <label>
                                                            <input type="checkbox" />
                                                            <span class="lbl"></span>
                                                        </label>
                                                    </td>

                                                    <td>
                                                        <a href="#">great.com</a>
                                                    </td>
                                                    <td>$55</td>
                                                    <td class="hidden-480">6,400</td>
                                                    <td class="hidden-phone">Feb 24</td>

                                                    <td class="hidden-480">
                                                        <span class="label label-success">Registered</span>
                                                    </td>

                                                    <td class="td-actions">
                                                        <div class="hidden-phone visible-desktop action-buttons">
                                                            <a class="blue" href="#">
                                                                <i class="icon-zoom-in bigger-130"></i>
                                                            </a>

                                                            <a class="green" href="#">
                                                                <i class="icon-pencil bigger-130"></i>
                                                            </a>

                                                            <a class="red" href="#">
                                                                <i class="icon-trash bigger-130"></i>
                                                            </a>
                                                        </div>

                                                        <div class="hidden-desktop visible-phone">
                                                            <div class="inline position-relative">
                                                                <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown">
                                                                    <i class="icon-caret-down icon-only bigger-120"></i>
                                                                </button>

                                                                <ul class="dropdown-menu dropdown-icon-only dropdown-yellow pull-right dropdown-caret dropdown-close">
                                                                    <li>
                                                                        <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                                            <span class="blue">
                                                                                <i class="icon-zoom-in bigger-120"></i>
                                                                            </span>
                                                                        </a>
                                                                    </li>

                                                                    <li>
                                                                        <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                                            <span class="green">
                                                                                <i class="icon-edit bigger-120"></i>
                                                                            </span>
                                                                        </a>
                                                                    </li>

                                                                    <li>
                                                                        <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                            <span class="red">
                                                                                <i class="icon-trash bigger-120"></i>
                                                                            </span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>


                                            </tbody>
                                        </table>    


                                    </div>

                                    <div class="center">
                                        <i class="icon-group icon-2x green"></i>

                                        &nbsp;
                                        <a href="#">
                                            See all members &nbsp;
                                            <i class="icon-arrow-right"></i>
                                        </a>
                                    </div>

                                    <div class="hr hr-double hr8"></div>
                                </div><!--member-tab-->

                            </div>
                        </div><!--/widget-main-->
                    </div><!--/widget-body-->
                </div><!--/widget-box-->
            </div><!--/span-->

        </div><!--/row-->

        <!--PAGE CONTENT ENDS-->
    </div><!--/.span-->
</div><!--/.row-fluid-->
</div><!--/.page-content-->


</div><!--/.main-content-->
</div><!--/.main-container-->

<?php require_once(APPPATH . 'views/footer.php'); ?>
