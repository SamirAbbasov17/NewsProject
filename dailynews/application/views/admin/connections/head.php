<?php if(!isset($_SESSION['user_id'])){
    $this->session->set_flashdata('err','Istifadeci adi ve sifre daxil edin!');
    redirect(base_url('admin_index'));
}?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Pluto - Responsive Bootstrap Admin Panel Templates</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- site icon -->
    <link rel="icon" href="<?php echo (base_url('public/admin/')) ?>images/fevicon.png" type="image/png" />
    <!-- bootstrap css -->
    <link rel="stylesheet" href="<?php echo (base_url('public/admin/')) ?>css/bootstrap.min.css" />
    <!-- site css -->
    <link rel="stylesheet" href="<?php echo (base_url('public/admin/')) ?>style.css" />
    <!-- responsive css -->
    <link rel="stylesheet" href="<?php echo (base_url('public/admin/')) ?>css/responsive.css" />
    <!-- color css -->
    <link rel="stylesheet" href="<?php echo (base_url('public/admin/')) ?>css/colors.css" />
    <!-- select bootstrap -->
    <link rel="stylesheet" href="<?php echo (base_url('public/admin/')) ?>css/bootstrap-select.css" />
    <!-- scrollbar css -->
    <link rel="stylesheet" href="<?php echo (base_url('public/admin/')) ?>css/perfect-scrollbar.css" />
    <!-- custom css -->
    <link rel="stylesheet" href="<?php echo (base_url('public/admin/')) ?>css/custom.css" />
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        #content{
            background: #0E2A47;
        }
        .page_title{
            background: #17315C;
            border-bottom: 1px solid #FF3867;
        }
        .page_title h2{
            color: white;
        }
        .sidebar_user_info{
            background: #0A183B;
        }
        #sidebar h4{
            background: #17315C;
            border-bottom: solid #FF3867 1px;
        }
        #sidebar{
            background-color: #0E2A47;
            background-image: none;
        }
        .sidebar_toggle{
            background: #FF3867;
        }
        .icon_info ul.user_profile_dd>li{
            background: #FF3867;
        }
        .topbar .navbar{
            background: #0A183B;
        }
        .online_animation{
            background: #FF3867;
        }
        .user_info p{
            color: #FF3867;
        }
        .counter_section{
            box-shadow: 0 5px 20px #ff3867;
            border: 0px solid #FF3867;
            background: none;
        }
        .counter_no p.total_no{
            color: #fff;
        }
        .counter_no .head_couter{
            color: #fff;
        }
        .socile_icons{
            box-shadow: 0 5px 20px #ff3867;
            background: none;
        }
        .socile_icons .social_cont ul li span strong{
            color: #fff;
        }
        .socile_icons .social_cont ul li span{
            color: #fff;
        }
        .white_shd{
            background: none;
            box-shadow: 0 5px 20px #ff3867;
        }
        .progress.skill-bar .progress-bar{
            background: #FF3867;
        }
        .heading1 h2{
            color: #fff;
        }
        html, body{
            color: #fff;
        }
    </style>
</head>
    <body class="dashboard dashboard_1">
    <div class="full_container">
    <div class="inner_container">