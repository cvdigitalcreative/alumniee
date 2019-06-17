<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Alumne</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,,500,600,700" rel="stylesheet">

    <link rel="stylesheet" href="<?= base_url()?>assets/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/css/animate.css">
    
    <link rel="stylesheet" href="<?= base_url()?>assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/css/magnific-popup.css">

    <link rel="stylesheet" href="<?= base_url()?>assets/css/aos.css">

    <link rel="stylesheet" href="<?= base_url()?>assets/css/ionicons.min.css">

    <link rel="stylesheet" href="<?= base_url()?>assets/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="<?= base_url()?>assets/css/flaticon.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/css/icomoon.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/css/style.css">
    <link href="<?= base_url()?>assets/fontawesome/css/all.css" rel="stylesheet">
  </head>
  <body>
        <div class="topnav">
          <div class="fr" style="margin: 10px 10px 10px 0;">
              <a href="<?=base_url()?>Login/Logout" style="border: 2px solid #4fa4e2 !important;
            border-radius: 25px !important;"><i><?= $this->session->userdata('nama')?></i>, <b>Log Out</b> <span class="fa fa-sign-out-alt"></span></a>
          </div>
          <div style="display: flex;"> 
                <div style="margin: 10px 0 5px 5px;">
                    <a href="<?=base_url()?>Talent"><span class="fa fa-user"></span> Jobs</a>
                </div>
                <div style="margin: 10px 0 5px 5px;">
                  <a href="<?=base_url()?>Talent/Profile"><span class="fa fa-user"></span> Profile</a>
                </div>
          </div>
        </div>
    <!-- END nav -->