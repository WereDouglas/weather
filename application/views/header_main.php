<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>AWS</title>
        <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">

            <link href="<?= base_url(); ?>css/font-awesome.css" rel="stylesheet" type="text/css" />
            <link href="<?= base_url(); ?>css/bootstrap.min.css" rel="stylesheet" type="text/css" />
            <link href="<?= base_url(); ?>css/animate.css" rel="stylesheet" type="text/css" />
            <link href="<?= base_url(); ?>css/admin.css" rel="stylesheet" type="text/css" />
            <link href="<?= base_url(); ?>css/jquerysctipttop.css" rel="stylesheet" type="text/css"/>
            <link href="<?= base_url(); ?>plugins/kalendar/kalendar.css" rel="stylesheet"/>
            <link rel="stylesheet" href="<?= base_url(); ?>plugins/scroll/nanoscroller.css"/>
            <link href="<?= base_url(); ?>plugins/morris/morris.css" rel="stylesheet" />
            <script language="javascript" type="text/javascript">
                function resizeIframe(obj) {
                    obj.style.height = obj.contentWindow.document.body.scrollHeight + 'px';
                }
            </script>
    </head>
    <body class="light_theme  fixed_header left_nav_fixed">
        <div class="wrapper">
            <!--\\\\\\\ wrapper Start \\\\\\-->
            <div class="header_bar">
                <!--\\\\\\\ header Start \\\\\\-->
                <div class="brand">                                       
                    <div > <img src="<?= base_url() ?>images/WIMEA LOGO.png" width="210" height="65" alt="r-logo" /></div>
                </div>
                <!--\\\\\\\ brand end \\\\\\-->
                <div class="header_top_bar">
                    <!--\\\\\\\ header top bar start \\\\\\-->
                    <a href="javascript:void(0);" class="menutoggle"> <i class="fa fa-bars"></i> </a>
                    <div class="top_left">
                        <div class="top_left_menu">
                            <ul>
                                <li> <a href="javascript:void(0);"><i class="fa fa-repeat"></i></a> </li>
                                <li class="dropdown"> <a data-toggle="dropdown" href="javascript:void(0);"> <i class="fa fa-th-large"></i> </a>
                                    <ul class="drop_down_task dropdown-menu" style="margin-top:39px">
                                        <div class="top_left_pointer"></div>
                                        <li><div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="remember">
                                                        Remember me </label>
                                            </div></li>
                                        <li> <a href="help.html"><i class="fa fa-question-circle"></i> Help</a> </li>
                                        <li> <a href="settings.html"><i class="fa fa-cog"></i> Setting </a></li>
                                        <li> <a log><i class="fa fa-power-off"></i> Logout</a> </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                     <div class="top_right_bar">
                        <div class="top_right">
                            <div class="top_right_menu">
                                <ul>                                 
                                   
                                    <li class="dropdown"> 
                                            <div class="top_pointer"></div>
                                                <div class="box"> <a target="myframe" href="<?php echo base_url() . "index.php/Welcome/schedule"; ?>"> <span class="block primery_2"> <i class="fa fa-calendar-o"></i> </span> <span class="block_text">Calendar</span> </a> </div>
                                               
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="user_admin dropdown"> <a href="javascript:void(0);" data-toggle="dropdown"><span class="user_adminname"> <?php echo $this->session->userdata('role'); ?> :  <?php echo $this->session->userdata('username'); ?> </span> <b class="caret"></b> </a>
                            <ul class="dropdown-menu">
                                <div class="top_pointer"></div>
                                <li> <a href="profile.html"><i class="fa fa-user"></i> Profile</a> </li>
                                <li> <a href="help.html"><i class="fa fa-question-circle"></i> Help</a> </li>
                                <li> <a href="settings.html"><i class="fa fa-cog"></i> Setting </a></li>
                                <li> <a href="login.html"><i class="fa fa-power-off"></i> Logout</a> </li>
                            </ul>
                        </div>

                        <a href="javascript:;" class="toggle-menu menu-right push-body jPushMenuBtn rightbar-switch"><i class="fa fa-comment chat"></i></a>

                    </div>
                </div>
                <!--\\\\\\\ header top bar end \\\\\\-->
            </div>
            <!--\\\\\\\ header end \\\\\\-->
            <div class="inner">
                
                    <div class="left_nav_slidebar">
                        <ul>
                            <li class="left_nav_active theme_border"><a href="javascript:void(0);"><i class="fa fa-home"></i> DASHBOARD <span class="left_nav_pointer"></span> <span class="plus"><i class="fa fa-plus"></i></span> </a>
                                <ul class="opened" style="display:block">
                                    <li> <a href="<?php echo base_url() . "index.php/welcome/start"; ?>" target="myframe"> <span>&nbsp;</span> <i class="fa fa-circle theme_color"></i> <b class="theme_color">Dashboard</b> </a> </li>
                                    <li> <a target="myframe" href="<?php echo base_url() . "index.php/metar"; ?>"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Metar book</b> </a> </li>
                                    <li> <a target="myframe" href="<?php echo base_url() . "index.php/synoptic/"; ?>"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Synoptic tabular form</b> </a> </li>
                                    <li> <a target="myframe" href="<?php echo base_url() . "index.php/synoptic/tab"; ?>"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Synoptic view</b> </a> </li>
                                </ul>
                            </li>
                            <li> <a href="javascript:void(0);"> <i class="fa fa-edit"></i> ADD/INPUT <span class="plus"><i class="fa fa-plus"></i></span></a>
                                <ul>
                                    <li> <a href="<?php echo base_url() . "index.php/metar/everyday"; ?>" target="myframe"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Daily weather</b> </a> </li>
                                    <li> <a target="myframe" href="<?php echo base_url() . "index.php/metar/add_metar/"; ?>"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Metar</b> </a> </li>
                                    <li> <a target="myframe" href="<?php echo base_url() . "index.php/metar/rainfall"; ?>"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Periodic Rainfall</b> </a> </li>
                                    <li> <a target="myframe" href="<?php echo base_url() . "index.php/archive"; ?>"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Archive</b> </a> </li>
                                </ul>
                            </li>
                            <li> <a href="javascript:void(0);"> <i class="fa fa-tasks"></i>INPUT REPORTS<span class="plus"><i class="fa fa-plus"></i></span></a>
                                <ul>
                                    <li> <a target="myframe" href="<?php echo base_url() . "index.php/metar/rainfall_records"; ?>"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Daily weather</b> </a> </li>
                                    <li> <a target="myframe" href="<?php echo base_url() . "index.php/metar/view_metar"; ?>"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Metar</b> </a> </li>
                                    <li> <a target="myframe" href="<?php echo base_url() . "index.php/metar/view_rainfall"; ?>"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Periodic Rainfall</b> </a> </li>

                                </ul>
                            </li>
                            <li> <a href="javascript:void(0);"> <i class="fa fa-users icon"></i> APPS <span class="plus"><i class="fa fa-plus"></i></span> </a>
                                <ul>

                                    <li> <a href="<?php echo base_url() . "file/Wimea.msi"; ?>"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Desktop</b> </a> </li>
                                    <li> <a href="<?php echo base_url() . "file/Wimea.apk"; ?>"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Mobile</b> </a> </li>
                                </ul>
                            </li>

                            <li> <a href="javascript:void(0);"> <i class="fa fa-folder-open-o"></i>REPORTS<span class="plus"><i class="fa fa-plus"></i></span> </a>
                                <ul>
                                    <li> <a target="myframe" href="<?php echo base_url() . "index.php/aws/"; ?>"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>AWS</b> </a> </li>
                                    <li> <a target="myframe" href="<?php echo base_url() . "index.php/welcome/reports/"; ?>"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Rainfall card</b> </a> </li>
                                    <li> <a target="myframe" href="<?php echo base_url() . "index.php/dekadal/"; ?>"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Dekadal</b> </a> </li>
                                    <li> <a target="myframe" href="<?php echo base_url() . "index.php/rainfall/report"; ?>"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Rainfall report(6a)</b> </a> </li>
                                    <li> <a target="myframe" href="<?php echo base_url() . "index.php/monthly/"; ?>"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Monthly summary</b> </a> </li>
                                    <li> <a target="myframe" href="<?php echo base_url() . "index.php/climatological/"; ?>"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Climatological observation</b> </a> </li>
                                    <li> <a target="myframe" href="<?php echo base_url() . "index.php/metar/report"; ?>"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Metar information</b> </a> </li>
                                </ul>
                            </li>
                            <li> <a href="javascript:void(0);"> <i class="fa fa-th"></i> SYNOPTICS <span class="plus"><i class="fa fa-plus"></i></span> </a>
                                <ul>
                                    <li> <a target="myframe" href="<?php echo base_url() . "index.php/synoptic/tab"; ?>"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Tabbed</b> </a> </li>
                             <li> <a target="myframe" href="<?php echo base_url() . "index.php/synoptic/"; ?>"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Table</b> </a> </li>
                            
                                      </ul>
                            </li>
                            <li> <a href="javascript:void(0);"> <i class="fa fa-cog"></i> SETTINGS <span class="plus"><i class="fa fa-plus"></i></span></a>
                                <ul>
                                      <li> <a target="myframe" href="<?php echo base_url() . "index.php/station/"; ?>"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Stations</b> </a> </li>
                                  
                                     <li> <a target="myframe" href="<?php echo base_url() . "index.php/user/"; ?>"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Users</b> </a> </li>
                                    <li> <a target="myframe" href="<?php echo base_url() . "index.php/role/"; ?>"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Roles</b> </a> </li>
                                    <li> <a target="myframe" href="<?php echo base_url() . "index.php/logs/"; ?>"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Logs</b> </a> </li>
                                    <li> <a target="myframe" href="<?php echo base_url() . "index.php/element/"; ?>"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Elements</b> </a> </li>
                                    <li> <a target="myframe" href="<?php echo base_url() . "index.php/instrument/"; ?>"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Instruments</b> </a> </li>
                                    <li> <a target="myframe" href="<?php echo base_url() . "index.php/archive/"; ?>"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Archive</b> </a> </li>
                                 
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>