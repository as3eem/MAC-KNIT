<?php
/**
 * Created by PhpStorm.
 * User: as3eem
 * Date: 2/7/18
 * Time: 9:01 AM
 */
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>CSE-DC | Dashboard</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- bootstrap 3.0.2 -->
    <link href="<?=base_url()?>/Static/Admin/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- font Awesome -->
    <link href="<?=base_url()?>/Static/Admin/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <!--  MAC Request CSS  -->
    <link href="<?=base_url()?>/Static/Admin/css/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url()?>/Static/Admin/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Morris chart -->
    <link href="<?=base_url()?>/Static/Admin/css/morris/morris.css" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="<?=base_url()?>/Static/Admin/css/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
    <!-- Date Picker -->
    <link href="<?=base_url()?>/Static/Admin/css/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
    <!-- Daterange picker -->
    <link href="<?=base_url()?>/Static/Admin/css/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
    <!-- bootstrap wysihtml5 - text editor -->
    <link href="<?=base_url()?>/Static/Admin/css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="<?=base_url()?>/Static/Admin/css/AdminLTE.css" rel="stylesheet" type="text/css" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

</head>
<body class="skin-blue">
<!-- header logo: style can be found in header.less -->
<header class="header">
    <div class="logo">
        <!-- Add the class icon to your logo image or logo icon to add the margining -->
        CSE-DC
    </div>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </a>
        <div class="navbar-right">
            <ul class="nav navbar-nav">
                <!-- Notifications: style can be found in dropdown.less -->
                <li class="dropdown notifications-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-warning"></i>
                        <span class="label label-warning">!</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">You have new notifications</li>
                        <li>
                            <!-- inner menu: contains the actual data -->
                            <ul class="menu">
<!--                                <li>-->
<!--                                    <a href="#">-->
<!--                                        <i class="ion ion-ios7-people info"></i> 5 new members joined today-->
<!--                                    </a>-->
<!--                                </li>-->
<!--                                <li>-->
<!--                                    <a href="#">-->
<!--                                        <i class="fa fa-warning danger"></i> Very long description here that may not fit into the page and may cause design problems-->
<!--                                    </a>-->
<!--                                </li>-->
<!--                                <li>-->
<!--                                    <a href="#">-->
<!--                                        <i class="fa fa-users warning"></i> 5 new members joined-->
<!--                                    </a>-->
<!--                                </li>-->
<!---->
<!--                                <li>-->
<!--                                    <a href="#">-->
<!--                                        <i class="ion ion-ios7-cart success"></i> 25 sales made-->
<!--                                    </a>-->
<!--                                </li>-->
<!--                                <li>-->
<!--                                    <a href="#">-->
<!--                                        <i class="ion ion-ios7-person danger"></i> You changed your username-->
<!--                                    </a>-->
<!--                                </li>-->
                            </ul>
                        </li>
                    </ul>
                </li>

                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="glyphicon glyphicon-user"></i>
                        <span><?=$_SESSION['name']?> <i class="caret"></i></span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header bg-light-blue">
                            <img src="<?=base_url()?>Static/Admin/img/avatar3.png" class="img-circle" alt="User Image" />
                            <p>
                                <?=$_SESSION['name']?>
                                <small><?=$_SESSION['branch']?></small>
                            </p>
                        </li>
                        <!-- Menu Body -->
<!--                        <li class="user-body">-->
<!--                            <div class="col-xs-6 text-center">-->
<!--                                <a href="#">Password</a>-->
<!--                            </div>-->
<!--                            <div class="col-xs-4 text-center">-->
<!--                                <a href="#">Blah Blah</a>-->
<!--                            </div>-->
<!--                        </li>-->
                        <!-- Menu Footer-->
                        <li class="user-footer">
<!--                            <div class="pull-left">-->
<!--                                <a href="#" class="btn btn-default btn-flat">Profile</a>-->
<!--                            </div>-->
                            <div class="pull-right">
                                <form action="<?=base_url('Welcome/logout')?>" method="POST"> <button type="submit" class="btn btn-default btn-flat">Sign out</button></form>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>



<!--Side Navbar-->

<div class="wrapper row-offcanvas row-offcanvas-left">
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="left-side sidebar-offcanvas">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="<?=base_url()?>Static/Admin/img/me.jpg" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>Hello, <?=explode(' ',$_SESSION['name'])[0]?></p>

                    <span href="#"><i class="fa fa-circle text-success"></i> Online</span>
                </div>
            </div>
            <!-- search form -->
            <form action="<?=base_url('Admin/Search')?>" method="get" class="sidebar-form">
                <div class="input-group">
                    <input type="text" name="roll" class="form-control" placeholder="Enter Roll Number here..."/>
                    <span class="input-group-btn">
                                <button type='submit' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
                </div>
            </form>
            <!-- /.search form -->
            <ul class="sidebar-menu">
                <li class="active">
                    <a href="<?=base_url('Admin/')?>">
                        <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                    </a>
                </li>

                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-edit"></i> <span>Apply</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?=base_url('Dashboard/MAC')?>"><i class="fa fa-angle-double-right"></i>MAC</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-table"></i> <span>Admin</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?=base_url('Admin/macRequests')?>"><i class="fa fa-angle-double-right"></i>New MAC Requests</a></li>
                        <li><a href="<?=base_url('Admin/changeRequests')?>"><i class="fa fa-angle-double-right"></i>Change MAC Requests</a></li>
                    </ul>

                </li>
                <li>
                    <a href="<?=base_url('Admin/SearchPage')?>">
                        <i class="fa fa-search"></i> <span>Search</span>
                    </a>
                </li>
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>
<!--    Side navbar Ends-->

