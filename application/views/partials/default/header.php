<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/home.css"); ?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/global.css"); ?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/slick/slick.css"); ?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/slick/slick-theme.css"); ?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap-icons/font/bootstrap-icons.css"); ?>">
    <title><?php echo $this->title; ?></title>
</head>

<div class="fixed-top">
    <nav class="navbar" style="background-color: #F3F7FD;">
        <a class="navbar-brand" href="<?php echo base_url('?msisdn=') . $this->session->userdata('msisdn') ?>">
            <img class="health_logo" src="<?php echo base_url("assets/images/mainLogo.svg"); ?>" alt="" style="height: 50px; width: 50px;">
        </a>
        <a href="www.healthplus.life" class="nav-Text navbar-text" style="color:#333333; font-size: 20px; font-weight: 600;">
            www.healthplus.life
        </a>
    </nav>

</div>