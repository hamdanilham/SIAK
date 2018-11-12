<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>SIAK | Home</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
        ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>assets/img/favicon.ico">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css">
    <!-- owl.carousel CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.theme.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.transitions.css">
    <!-- animate CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/animate.css">
    <!-- normalize CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/normalize.css">
    <!-- meanmenu icon CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/meanmenu.min.css">
    <!-- main CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/main.css">
    <!-- educate icon CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/educate-custon-icon.css">
    <!-- morrisjs CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/calendar/fullcalendar.print.min.css">
    <!-- style CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>style.css">
    <!-- responsive CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/responsive.css">
    <!-- modernizr JS
        ============================================ -->
    <script src="<?php echo base_url(); ?>assets/js/vendor/modernizr-2.8.3.min.js"></script>

    <style>    

    /* Style the tab */
    .tab {
        overflow: hidden;        
        background-color: #f1f1f1;
    }    

    /* Style the buttons inside the tab */
    .tab li {        
        cursor: pointer;        
        transition: 0.3s;        
    }

    /* Style the tab content */
    .tabcontent {
        display: none;
        padding: 6px 12px;        
        border-top: none;
        color: #4a4a4a;
        margin-top: 50px;
    }

    </style>
</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <!-- Start Left menu area -->
    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="index.html"><img class="main-logo" src="<?php echo base_url(); ?>assets/img/logo/logoo.png" alt="" /></a>
                <strong><a href="index.html"><img src="<?php echo base_url(); ?>assets/img/logo/logosn.png" alt="" /></a></strong>
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar tab">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                        <li class="active">
                            <a href="<?php echo site_url('Home'); ?>">                                   
                                   <span class="mini-click-non">Beranda</span>
                                </a>
                        </li>

                        <li>
                            <a class="has-arrow" href="all-professors.html" aria-expanded="false"><span class="mini-click-non">Dosen</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a href="<?php echo site_url('Dosen/list/'); ?>" title="All Professors"><span class="mini-sub-pro">List Dosen</span></a></li>

                                <li><a href="<?php echo site_url('Dosen/add/'); ?>" title="Add Professor"><span class="mini-sub-pro">Tambah Dosen</span></a></li>

                                <li><a href="<?php echo site_url('Dosen/edit/'); ?>" title="Edit Professor"><span class="mini-sub-pro">Edit Dosen</span></a></li>

                                <li><a href="<?php echo site_url('Dosen/profil/'); ?>" title="Professor Profile"><span class="mini-sub-pro">Profil Dosen</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="all-students.html" aria-expanded="false"><span class="mini-click-non">Mahasiswa</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Students" href="<?php echo site_url('Mahasiswa/list/'); ?>"><span class="mini-sub-pro">List Mahasiswa</span></a></li>

                                <li><a title="Add Students" href="<?php echo site_url('Mahasiswa/add/'); ?>"><span class="mini-sub-pro">Tambah Mahasiswa</span></a></li>

                                <li><a title="Edit Students" href="<?php echo site_url('Mahasiswa/edit/'); ?>"><span class="mini-sub-pro">Edit Mahasiswa</span></a></li>

                                <li><a title="Students Profile" href="<?php echo site_url('Mahasiswa/profil/'); ?>"><span class="mini-sub-pro">Profil Mahasiswa</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="all-courses.html" aria-expanded="false"> <span class="mini-click-non">Mata Kuliah</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Courses" href="<?php echo site_url('Matkul/list/'); ?>"><span class="mini-sub-pro">List Mata Kuliah</span></a></li>

                                <li><a title="Add Courses" href="<?php echo site_url('Matkul/add/'); ?>"><span class="mini-sub-pro">Tambah Mata Kuliah</span></a></li>

                                <li><a title="Edit Courses" href="<?php echo site_url('Matkul/edit/'); ?>"><span class="mini-sub-pro">Edit Mata Kuliah</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="all-courses.html" aria-expanded="false"><span class="mini-click-non">Program Studi</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Departments List" href="<?php echo site_url('Prodi/list/'); ?>"><span class="mini-sub-pro">List Program Studi</span></a></li>

                                <li><a title="Add Departments" href="<?php echo site_url('Prodi/add/'); ?>"><span class="mini-sub-pro">Tambah Program Studi</span></a></li>

                                <li><a title="Edit Departments" href="<?php echo site_url('Prodi/edit/'); ?>"><span class="mini-sub-pro">Edit Program Studi</span></a></li>
                            </ul>
                        </li>
                       
                    </ul>
                </nav>
            </div>
        </nav>
    </div>

    <!-- End Left menu area -->
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="index.html"><img class="main-logo" src="<?php echo base_url(); ?>assets/img/logo/logo.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                                    <i>.</i>
                                                </button>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                        <div class="header-top-menu tabl-d-n">
                                            
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                                
                                                
                                                <li class="nav-item">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                            
                                                            <span class="admin-name">ADMIN</span>
                                                            <i class="fa fa-angle-down edu-icon edu-down-arrow"></i>
                                                        </a>
                                                    <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                        <li><a href="#"><span class="edu-icon edu-user-rounded author-log-ic"></span>Edit Profil</a>
                                                        </li>
                                                        <li><a href="#"><span class="edu-icon edu-locked author-log-ic"></span>Log Out</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>