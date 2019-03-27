<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css">

    <link href="<?php echo base_url(); ?>assets/css/admin_panel/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/admin_panel/plugins/dataTables.bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/admin_panel/sb-admin.css" rel="stylesheet">

    <link href="<?php echo base_url(); ?>assets/css/admin_panel/custom.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/admin_panel/plugins/morris.css" rel="stylesheet">
</head>
<body>

    <div id="wrapper">
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand">CANNON WINE</a>
            </div>
             <ul class="nav navbar-right top-nav">
           
                 <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>
                        Admin
                     <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                       <li>
                            <a href="<?php echo base_url("Admin/index/view_setting")?>"><i class="fas fa-cog"></i> Setting</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="<?php echo base_url('Admin/logout')?>"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
             <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a class="nav-link" href="<?php echo base_url("Admin/index"); ?>">
                            <i class="fas fa-tachometer-alt"></i>
                            Dashboard
                        </a>
                    </li>
                     <li>
                        <a class="nav-link" href="<?php echo base_url("Admin/category"); ?>">
                            <i class="fas fa-tags"></i>
                            Category
                        </a>
                    </li>

                    <li>
                        <a class="nav-link" href="<?php echo base_url("Admin/events"); ?>">
                            <i class="fas fa-tags"></i>
                            Deal/Events
                        </a>
                    </li>
                   
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo1"><i class="fab fa-blogger fa-lg"></i> Products <i class="fa fa-fw fa-angle-down"></i></a>
                        <ul id="demo1" class="collapse">
                           <li>
                                <a href="<?php echo base_url("Admin/product"); ?>">Add Products</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url("Admin/view_product"); ?>">View Products</a>
                            </li> 
                        </ul>
                    </li>
                     
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo4"><i class="fas fa-cog"></i> Setting <i class="fa fa-fw fa-angle-down"></i></a>
                        <ul id="demo4" class="collapse">
                            <li>
                                <a href="<?php echo base_url("Admin/setting"); ?>">Add Setting</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url("Admin/index/view_setting"); ?>">View Setting</a>
                            </li> 
                        </ul>
                    </li> 
                   
                   
                   
                        <li>
                        <a class="nav-link" href="<?php echo base_url("Admin/index/view_contact"); ?>">
                        <i class="fas fa-envelope"></i>
                        <span class="nav-link-text"> Contact</span>
                      </a>
                    </li>
                      
                    <li>
                         <a class="nav-link" href="<?php echo base_url("Admin/logout"); ?>">
                         <i class="fa fa-fw fa-power-off"></i> Logout</a>
                    </li>
     
                </ul>
            </div>
            
            <!-- /.navbar-collapse -->
        </nav>
        <div id="page-wrapper" >

            <div class="container-fluid" style="padding-right: 0px !important;">