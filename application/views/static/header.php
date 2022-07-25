<!DOCTYPE html>
<html>
    <head> 

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <title>Silab QC</title>
        <meta name="description" content="Sistem Informasi Laboratorium QC PG. Kebonagung">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="all,follow">

        <link rel="stylesheet" href="<?=base_url('assets/dark-admin/');?>vendor/choices.js/public/assets/styles/choices.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">
        <link rel="stylesheet" href="<?=base_url('assets/dark-admin/');?>css/style.default.css" id="theme-stylesheet">
        <link rel="stylesheet" href="<?=base_url('assets/dark-admin/');?>css/custom.css">
	    <link rel="icon" type="image/png" href="<?=base_url('assets/img/');?>QC.png"/>

    </head>
    <body>
        <header class="header">   
            <nav class="navbar navbar-expand-lg py-3 bg-dash-dark-2 border-bottom border-dash-dark-1 z-index-10">
                <div class="container-fluid d-flex align-items-center justify-content-between py-1">
                <div class="navbar-header d-flex align-items-center"><a class="navbar-brand text-uppercase text-reset" href="<?=base_url();?>">
                    <div class="brand-text brand-big"><strong class="text-primary">Silab</strong><strong>QC</strong></div>
                    <div class="brand-text brand-sm"><strong class="text-primary">Q</strong><strong>C</strong></div></a>
                    <button class="sidebar-toggle">
                        <svg class="svg-icon svg-icon-sm svg-icon-heavy transform-none">
                            <use xlink:href="#arrow-left-1"> </use>
                        </svg>
                    </button>
                </div>
                <ul class="list-inline mb-0">

                    <li class="list-inline-item logout px-lg-2">        
                        <a class="nav-link text-sm text-reset px-1 px-lg-0" id="logout" data-bs-toggle="modal" data-bs-target="#logoutModal"> 
                            <span class="d-none d-sm-inline-block">Logout </span>
                            <svg class="svg-icon svg-icon-xs svg-icon-heavy"><use xlink:href="#disable-1"> </use></svg>
                        </a>
                    </li>
                    
                </ul>
                </div>
            </nav>
        </header>

        <div class="d-flex align-items-stretch">

        <nav id="sidebar">

            <div class="sidebar-header d-flex align-items-center p-4">
                <img class="avatar shadow-0 img-fluid rounded-circle" src="<?=base_url('assets/dark-admin/');?>img/avatar-6.jpg" alt="User">
                <div class="ms-3 title">
                    <h1 class="h5 mb-1"><?=$this->session->userdata('nama');?></h1>
                    <p class="text-sm text-gray-700 mb-0 lh-1"><?=ucfirst($this->session->userdata('role'));?></p>
                </div>
            </div>
            
            <span class="text-uppercase text-gray-600 text-xs mx-3 px-2 heading mb-2">Menu</span>

            <ul class="list-unstyled">

                <li class="sidebar-item"><a class="sidebar-link" href="<?=base_url();?>"> 
                    <svg class="svg-icon svg-icon-sm svg-icon-heavy">
                        <use xlink:href="#real-estate-1"> </use>
                    </svg>
                    <span>Home </span></a>
                </li>

                <li class="sidebar-item"><a class="sidebar-link" href="<?=base_url('monitoring');?>"> 
                        <svg class="svg-icon svg-icon-sm svg-icon-heavy">
                            <use xlink:href="#speedometer-1"> </use>
                        </svg><span>Monitoring </span></a>
                </li>

                <li class="sidebar-item"><a class="sidebar-link" href="<?=base_url('home/show_hasil_analisa');?>"> 
                    <svg class="svg-icon svg-icon-sm svg-icon-heavy">
                        <use xlink:href="#reading-1"> </use>
                    </svg>
                    <span>Hasil Analisa </span></a>
                </li>

                <?php if($this->session->userdata('role') == 'admin') { ?>

                <!---------------------------------------------------------->

                <li class="sidebar-item"><a class="sidebar-link" href="<?=base_url('input_data');?>"> 
                    <svg class="svg-icon svg-icon-sm svg-icon-heavy">
                        <use xlink:href="#ballpoint-pen-1"> </use>
                    </svg>
                    <span>Input Data </span></a>
                </li>

                <li class="sidebar-item"><a class="sidebar-link" href="<?=base_url('laporan');?>"> 
                    <svg class="svg-icon svg-icon-sm svg-icon-heavy">
                        <use xlink:href="#survey-1"> </use>
                    </svg>
                    <span>Laporan </span></a>
                </li>

                <!---------------------------------------------------------->

                <?php } ?>

            </ul>
        </nav>

        <div class="page-content">

            <div class="bg-dash-dark-2 py-4">
                <div class="container-fluid">
                    <h2 class="h5 mb-0"><?=$page_title;?></h2>
                </div>
            </div>
            
            <section>