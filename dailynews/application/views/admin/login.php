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
    <link rel="stylesheet" href="<?php echo (base_url('public/admin/')) ?>css/loginStyle.css" />
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<!--    <style>-->
<!--        body{-->
<!--            background: rgb(2,0,36);-->
<!--            background: linear-gradient(166deg, rgba(2,0,36,1) 0%, rgba(2,160,194,1) 89%, rgba(0,212,255,1) 100%);-->
<!--        }-->
<!--        .login_section{-->
<!--            background: rgb(2,0,36);-->
<!--            background: linear-gradient(339deg, rgba(2,0,36,1) 21%, rgba(0,212,255,1) 100%);-->
<!--        }-->
<!--        .login_form form .field input{-->
<!--            border-bottom: solid #02A0C2 2px;-->
<!--            background: none;-->
<!--        }-->
<!--        .login_form form .field{-->
<!--            margin: 50px 90px 60px;-->
<!--        }-->
<!--        .main_bt{-->
<!--            background: none;-->
<!--            border: 2px solid #02A0C2;-->
<!--        }-->
<!--        .main_bt:hover{-->
<!--            background:#02A0C2 ;-->
<!--            border: 2px solid #02A0C2;-->
<!--        }-->
<!--    </style>-->

</head>
<!--<body class="dashboard dashboard_1">-->
<!--<div class="full_container">-->
<!--    <div class="inner_container">-->
<!--   <body class="inner_page login">-->
<!--      <div class="full_container">-->
<!--         <div class="container">-->
<!--            <div class="center verticle_center full_height">-->
<!--               <div class="login_section">-->
<!--                  <div class="logo_login">-->
<!--                     <div class="center">-->
<!--                        <img width="210" src="--><?php //echo (base_url('public/admin/')) ?><!--images/logo/logo.png" alt="#" />-->
<!--                     </div>-->
<!--                  </div>-->
<!--                  <div class="login_form">-->
<!--                     <form action="--><?php //echo base_url('loginAct')?><!--" method="POST">-->
<!--                        <fieldset>-->
<!--                           <div class="field">-->
<!--                              <label class="label_field">Username</label>-->
<!--                              <input type="text" name="username" placeholder="Username" />-->
<!--                           </div>-->
<!--                           <div class="field">-->
<!--                              <label class="label_field">Password</label>-->
<!--                              <input type="password" name="password" placeholder="Password" />-->
<!--                           </div>-->
<!--                           <div class="field margin_0">-->
<!--                              <label class="label_field hidden">hidden label</label>-->
<!--                              <button class="main_bt">Sing In</button>-->
<!--                           </div>-->
<!---->
<!--                            <br>-->
<!--                            --><?php //if($this->session->flashdata('err')){?>
<!--                                <div class="alert alert-danger alert-dismissible">-->
<!--                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>-->
<!--                                    --><?php //echo $this->session->flashdata('err')?>
<!--                                </div>-->
<!--                            --><?php //} ?>
<!--                        </fieldset>-->
<!--                     </form>-->
<!--                  </div>-->
<!--               </div>-->
<!--            </div>-->
<!--         </div>-->
<!--      </div>-->
























      <div class="container">

          <!-- body -->
          <section class="body">
              <!-- login -->
              <div class="login-container">
                  <div class="login-content">
                      <div class="login-header">
                          <div class="login-header-icon">
                              <?xml version="1.0" encoding="iso-8859-1"?>
                              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 181.42 181.42" style="enable-background:new 0 0 181.42 181.42;" xml:space="preserve">
                     <g>
                         <g>
                             <path fill="rgba(255,255,255,.7)" d="M166.385,173.853c-7.344-2.606-21.492-7.443-36.275-11.477l-1.853-14.791c-0.244-1.952-1.902-3.413-3.866-3.413h-2.062			V126.68c4.33-5.259,8.01-11.644,10.769-18.687c2.203-0.026,4.334-0.75,6.127-2.101c2.218-1.678,3.657-4.129,4.045-6.899			l2.241-15.94c0.392-2.778-0.316-5.537-1.998-7.763c-1.179-1.564-2.74-2.74-4.517-3.429c-0.213-6.203-1.02-12.298-2.405-18.17			c0.194-1.644,0.293-3.311,0.293-4.958c0-14.494-7.401-27.736-19.928-35.899c0.32-4.543-0.476-7.858-2.405-10.088			C113.463,1.495,111.483,0,108.222,0c-7.485,0-18.68,3.489-24.924,5.658c-22.154,3.368-38.81,21.819-38.81,43.075			c0,1.648,0.099,3.314,0.293,4.958c-1.393,5.913-2.203,12.055-2.409,18.307c-4.345,1.724-7.127,6.271-6.446,11.115l2.222,15.799			c0.719,5.126,5.073,8.862,10.076,8.954c2.767,7.093,6.461,13.524,10.818,18.813v17.493h-2.036c-1.963,0-3.623,1.465-3.866,3.413			l-1.849,14.791c-14.821,4.041-28.935,8.866-36.256,11.469c-2.028,0.723-3.086,2.949-2.367,4.977			c0.719,2.024,2.953,3.078,4.977,2.367c7.626-2.709,22.725-7.869,38.185-11.964c1.537-0.407,2.671-1.709,2.869-3.284l1.747-13.977			h2.492h55.492h2.519l1.75,13.977c0.198,1.575,1.332,2.877,2.869,3.284c15.415,4.087,30.556,9.254,38.205,11.971			c0.434,0.152,0.871,0.224,1.305,0.224c1.602,0,3.105-0.997,3.672-2.591C169.472,176.802,168.414,174.573,166.385,173.853z			 M115.486,122.696c-0.616,0.712-0.955,1.617-0.955,2.557v18.92H66.837v-0.001v-18.92c0-0.94-0.339-1.845-0.955-2.557			c-4.757-5.472-8.703-12.538-11.408-20.434c-0.346-1.001-1.081-1.819-2.039-2.268c-0.963-0.449-2.062-0.483-3.048-0.106			c-0.209,0.084-0.407,0.133-0.613,0.164c-1.427,0.194-2.702-0.776-2.907-2.222L43.644,82.03c-0.202-1.446,0.757-2.736,2.523-2.961			c0.019,0,0.034,0,0.049,0c1.024,0,2.009-0.403,2.736-1.123c0.742-0.734,1.161-1.731,1.161-2.77			c0.004-6.979,0.814-13.821,2.412-20.339c0.114-0.479,0.141-0.97,0.076-1.457c-0.213-1.537-0.32-3.101-0.32-4.646			c0-17.527,13.977-32.752,32.508-35.415c0.247-0.038,0.495-0.099,0.734-0.183c9.695-3.395,17.968-5.343,22.697-5.343			c0.297,0,0.418,0.046,0.426,0.046c0.034,0.042,1.062,1.286,0.312,6.473c-0.224,1.575,0.529,3.132,1.91,3.931			c11.408,6.591,18.219,17.987,18.219,30.491c0,1.545-0.106,3.109-0.32,4.646c-0.065,0.487-0.038,0.982,0.076,1.457			c1.591,6.48,2.401,13.284,2.412,20.217c0,1.039,0.601,2.051,1.34,2.782c0.742,0.731,1.994,1.282,2.964,1.134			c0.696,0.099,1.309,0.457,1.728,1.008c0.426,0.567,0.605,1.271,0.502,1.986l-2.241,15.944c-0.099,0.715-0.464,1.34-1.028,1.766			c-0.552,0.418-1.256,0.582-1.948,0.498c-0.209-0.03-0.403-0.08-0.586-0.152c-0.989-0.399-2.093-0.373-3.067,0.076			c-0.966,0.445-1.713,1.267-2.059,2.272C124.155,110.222,120.22,117.25,115.486,122.696z"/>
                         </g>
                     </g>
                                  <g></g>
                                  <g></g>
                                  <g></g>
                                  <g></g>
                                  <g></g>
                                  <g></g>
                                  <g></g>
                                  <g></g>
                                  <g></g>
                                  <g></g>
                                  <g></g>
                                  <g></g>
                                  <g></g>
                                  <g></g>
                                  <g></g>
                  </svg>
                          </div>
                      </div>
                      <!-- login inputs -->
                      <form action="<?php echo base_url('loginAct')?>" method="POST">
                          <div class="login-input-container">
                              <div class="login-input">
                                  <div class="login-input-icon input-icon">
                                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                          <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                          <circle cx="12" cy="7" r="4"></circle>
                                      </svg>
                                  </div>
                                  <input type="text" class="login-input-input input" autocomplete="off" spellcheck="false" name="username" placeholder="Username" maxlength="15">
                              </div>
                              <div class="login-input">
                                  <div class="login-input-icon input-icon">
                                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                          <path d="M21 2l-2 2m-7.61 7.61a5.5 5.5 0 1 1-7.778 7.778 5.5 5.5 0 0 1 7.777-7.777zm0 0L15.5 7.5m0 0l3 3L22 7l-3-3m-3.5 3.5L19 4"></path>
                                      </svg>
                                  </div>
                                  <input type="password" class="login-input-input input" autocomplete="off" spellcheck="false" name="password" placeholder="Password" maxlength="16">
                              </div>

                      </div>
                          <br>
                          <?php if($this->session->flashdata('err')){?>
                                  <p><?php echo $this->session->flashdata('err')?></p>
<!--                              <div class="alert alert-danger alert-dismissible">-->
<!--                                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>-->
<!--                                  --><?php //echo $this->session->flashdata('err')?>
<!--                              </div>-->
                          <?php } ?>
                      <!-- login button -->
                      <div class="login-button-container">
                          <button style="z-index: 10000000000" type="submit" class="login-button">
                              <span class="login-button-title">Log in</span>
                              <span class="login-button-icon">
                     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"></path>
                        <polyline points="10 17 15 12 10 7"></polyline>
                        <line x1="15" y1="12" x2="3" y2="12"></line>
                     </svg>
                  </span>
                          </button>
                      </div>
                  </div>
                  <img draggable="false" src="http://upir.ir/images/pnohpxzkvd513silj3jx.svg" class="form-wave" alt="waves">
              </div>

              </form>

      </div>
      <!-- jQuery -->
      <script src="<?php echo (base_url('public/admin/')) ?>js/jquery.min.js"></script>
      <script src="<?php echo (base_url('public/admin/')) ?>js/loginJs.js"></script>
      <script src="<?php echo (base_url('public/admin/')) ?>js/popper.min.js"></script>
      <script src="<?php echo (base_url('public/admin/')) ?>js/bootstrap.min.js"></script>
      <!-- wow animation -->
      <script src="<?php echo (base_url('public/admin/')) ?>js/animate.js"></script>
      <!-- select country -->
      <script src="<?php echo (base_url('public/admin/')) ?>js/bootstrap-select.js"></script>
      <!-- nice scrollbar -->
      <script src="<?php echo (base_url('public/admin/')) ?>js/perfect-scrollbar.min.js"></script>
      <script>
         var ps = new PerfectScrollbar('#sidebar');
      </script>
      <!-- custom js -->
      <script src="<?php echo (base_url('public/admin/')) ?>js/custom.js"></script>
   </body>
</html>