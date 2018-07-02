<?php
/**
 * Created by PhpStorm.
 * User: as3eem
 * Date: 2/7/18
 * Time: 9:01 AM
 */
?>

<?php
/**
 * Created by PhpStorm.
 * User: as3eem
 * Date: 30/6/18
 * Time: 6:58 PM
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
                        <span class="label label-warning">10</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">You have new notifications</li>
                        <li>
                            <!-- inner menu: contains the actual data -->
                            <ul class="menu">
                                <li>
                                    <a href="#">
                                        <i class="ion ion-ios7-people info"></i> 5 new members joined today
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-warning danger"></i> Very long description here that may not fit into the page and may cause design problems
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-users warning"></i> 5 new members joined
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <i class="ion ion-ios7-cart success"></i> 25 sales made
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="ion ion-ios7-person danger"></i> You changed your username
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="glyphicon glyphicon-user"></i>
                        <span>Jane Doe <i class="caret"></i></span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header bg-light-blue">
                            <img src="<?=base_url()?>Static/Admin/img/avatar3.png" class="img-circle" alt="User Image" />
                            <p>
                                Jane Doe - Web Developer
                                <small>Member since Nov. 2012</small>
                            </p>
                        </li>
                        <!-- Menu Body -->
                        <li class="user-body">
                            <div class="col-xs-4 text-center">
                                <a href="#">Followers</a>
                            </div>
                            <div class="col-xs-4 text-center">
                                <a href="#">Sales</a>
                            </div>
                            <div class="col-xs-4 text-center">
                                <a href="#">Friends</a>
                            </div>
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="#" class="btn btn-default btn-flat">Profile</a>
                            </div>
                            <div class="pull-right">
                                <a href="#" class="btn btn-default btn-flat">Sign out</a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>



<!--Side Navbar-->
<!--Side Navbar-->
<!--Side Navbar-->
<!--Side Navbar-->
<!--Side Navbar-->
<!--Side Navbar-->
<!--Side Navbar-->

<div class="wrapper row-offcanvas row-offcanvas-left">
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="left-side sidebar-offcanvas">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="<?=base_url()?>Static/Admin/img/avatar3.png" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>Hello, Jane</p>

                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>
            <!-- search form -->
            <form action="#" method="get" class="sidebar-form">

            </form>
            <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu">
                <li class="active">
                    <a href="<?=base_url('home/dashboard')?>">
                        <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                    </a>
                </li>
<!--                <li>-->
<!--                    <a href="pages/widgets.html">-->
<!--                        <i class="fa fa-th"></i> <span>Widgets</span> <small class="badge pull-right bg-green">new</small>-->
<!--                    </a>-->
<!--                </li>-->
<!--                <li class="treeview">-->
<!--                    <a href="#">-->
<!--                        <i class="fa fa-bar-chart-o"></i>-->
<!--                        <span>Charts</span>-->
<!--                        <i class="fa fa-angle-left pull-right"></i>-->
<!--                    </a>-->
<!--                    <ul class="treeview-menu">-->
<!--                        <li><a href="pages/charts/morris.html"><i class="fa fa-angle-double-right"></i> Morris</a></li>-->
<!--                        <li><a href="pages/charts/flot.html"><i class="fa fa-angle-double-right"></i> Flot</a></li>-->
<!--                        <li><a href="pages/charts/inline.html"><i class="fa fa-angle-double-right"></i> Inline charts</a></li>-->
<!--                    </ul>-->
<!--                </li>-->
<!--                <li class="treeview">-->
<!--                    <a href="#">-->
<!--                        <i class="fa fa-laptop"></i>-->
<!--                        <span>UI Elements</span>-->
<!--                        <i class="fa fa-angle-left pull-right"></i>-->
<!--                    </a>-->
<!--                    <ul class="treeview-menu">-->
<!--                        <li><a href="pages/UI/general.html"><i class="fa fa-angle-double-right"></i> General</a></li>-->
<!--                        <li><a href="pages/UI/icons.html"><i class="fa fa-angle-double-right"></i> Icons</a></li>-->
<!--                        <li><a href="pages/UI/buttons.html"><i class="fa fa-angle-double-right"></i> Buttons</a></li>-->
<!--                        <li><a href="pages/UI/sliders.html"><i class="fa fa-angle-double-right"></i> Sliders</a></li>-->
<!--                        <li><a href="pages/UI/timeline.html"><i class="fa fa-angle-double-right"></i> Timeline</a></li>-->
<!--                    </ul>-->
<!--                </li>-->
<!--                <li class="treeview">-->
<!--                    <a href="#">-->
<!--                        <i class="fa fa-edit"></i> <span>Forms</span>-->
<!--                        <i class="fa fa-angle-left pull-right"></i>-->
<!--                    </a>-->
<!--                    <ul class="treeview-menu">-->
<!--                        <li><a href="pages/forms/general.html"><i class="fa fa-angle-double-right"></i> General Elements</a></li>-->
<!--                        <li><a href="pages/forms/advanced.html"><i class="fa fa-angle-double-right"></i> Advanced Elements</a></li>-->
<!--                        <li><a href="pages/forms/editors.html"><i class="fa fa-angle-double-right"></i> Editors</a></li>-->
<!--                    </ul>-->
<!--                </li>-->
<!--                <li class="treeview">-->
<!--                    <a href="#">-->
<!--                        <i class="fa fa-table"></i> <span>Tables</span>-->
<!--                        <i class="fa fa-angle-left pull-right"></i>-->
<!--                    </a>-->
<!--                    <ul class="treeview-menu">-->
<!--                        <li><a href="pages/tables/simple.html"><i class="fa fa-angle-double-right"></i> Simple tables</a></li>-->
<!--                        <li><a href="pages/tables/data.html"><i class="fa fa-angle-double-right"></i> Data tables</a></li>-->
<!--                    </ul>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <a href="pages/calendar.html">-->
<!--                        <i class="fa fa-calendar"></i> <span>Calendar</span>-->
<!--                        <small class="badge pull-right bg-red">3</small>-->
<!--                    </a>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <a href="pages/mailbox.html">-->
<!--                        <i class="fa fa-envelope"></i> <span>Mailbox</span>-->
<!--                        <small class="badge pull-right bg-yellow">12</small>-->
<!--                    </a>-->
<!--                </li>-->
<!--                <li class="treeview">-->
<!--                    <a href="#">-->
<!--                        <i class="fa fa-folder"></i> <span>Examples</span>-->
<!--                        <i class="fa fa-angle-left pull-right"></i>-->
<!--                    </a>-->
<!--                    <ul class="treeview-menu">-->
<!--                        <li><a href="pages/examples/invoice.html"><i class="fa fa-angle-double-right"></i> Invoice</a></li>-->
<!--                        <li><a href="pages/examples/login.html"><i class="fa fa-angle-double-right"></i> Login</a></li>-->
<!--                        <li><a href="pages/examples/register.html"><i class="fa fa-angle-double-right"></i> Register</a></li>-->
<!--                        <li><a href="pages/examples/lockscreen.html"><i class="fa fa-angle-double-right"></i> Lockscreen</a></li>-->
<!--                        <li><a href="pages/examples/404.html"><i class="fa fa-angle-double-right"></i> 404 Error</a></li>-->
<!--                        <li><a href="pages/examples/500.html"><i class="fa fa-angle-double-right"></i> 500 Error</a></li>-->
<!--                        <li><a href="pages/examples/blank.html"><i class="fa fa-angle-double-right"></i> Blank Page</a></li>-->
<!--                    </ul>-->
<!--                </li>-->
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>



    <!--Side Navbar-->
    <!--Side Navbar-->
    <!--Side Navbar-->
    <!--Side Navbar-->
    <!--Side Navbar-->
    <!--Side Navbar-->
    <!--Side Navbar-->
<!--    Side navbar Ends-->
<!--    Side navbar Ends-->
<!--    Side navbar Ends-->
<!--    Side navbar Ends-->

    <!-- Right side column. Contains the navbar and content of the page -->
    <aside class="right-side">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Dashboard
                <small>Home</small>
            </h1>
            <ol class="breadcrumb">
                <li><span href="#"><i class="fa fa-dashboard"></i> Home</span></li>
                <li class="active">Dashboard</li>
            </ol>
        </section>

