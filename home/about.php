<!DOCTYPE html>
<?php
    session_start();
    $logged_in = isset($_SESSION['email']) && !empty($_SESSION['email']);
?>
<html>
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>About</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- font css -->
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   </head>
   <body>
      <!-- header section start -->
      <div class="header_section header_bg">
         <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
               <a class="navbar-brand"href="index.php"><img src="logo.png"></a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ml-auto">
                     <li class="nav-item">
                        <a class="nav-link" href="index.php"><span class="padding5"><i class="fa fa-angle-right"></i></span>Página Inicial</a>
                     </li>
                     <li class="nav-item active">
                        <a class="nav-link" href="about.php"><span class="padding5"><i class="fa fa-angle-right"></i></span>Sobre</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="restaurante.php"><span class="padding5"><i class="fa fa-angle-right"></i></span>Restaurantes</a>
                     </li>
                  </ul>
                  <form class="form-inline my-2 my-lg-0">
                     <div class="login_bt">
                        <ul>
                        <?php 
                           if ($logged_in){
                              echo '<li><a href="logout.php">Logout</a></li>
                                    <li><a href="logout.php"><i class="fa fa-user" aria-hidden="true"></i></a></li>';
                           }
                           else{ 
                              echo '<li><a href="login.php">Login</a></li>
                              <li><a href="login.php"><i class="fa fa-user" aria-hidden="true"></i></a></li>';
                           }
                        ?>
                        </ul>
                     </div>
                  </form>
               </div>
            </nav>
         </div>
      </div>
      <!-- header section end -->
      <!-- about section start -->
      <div class="about_section">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <div class="about_img"><img src="images/about-img.png"></div>
               </div>
               <div class="col-md-6">
                  <div class="about_taital_main">
                     <div class="about_taital">Sobre nós</div>
                     <p class="about_text">Sistema Web desenvolvido por alunos do 3° ADS da universidade FAEX.</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- about section end -->
      <!-- footer section start -->
      <div class="footer_section layout_padding">
         <div class="container">
            <div class="footer_section_2">
               <div class="row">
                  <div class="col-lg-3 col-sm-6">
                     <h2 class="useful_text">Sobre</h2>
                     <p class="dummy_text">Sistema Web desenvolvido por alunos do 3° ADS da universidade FAEX.</p>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                     <h2 class="useful_text">Links</h2>
                     <div class="footer_menu">
                        <ul>
                           <li><a href="index.php">Home</a></li>
                           <li class="active"><a href="about.php">Sobre nós</a></li>
                           <li><a href="restaurante.php">Restaurantes</a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                     <h2 class="useful_text">Siga-nos</h2>
                     <div class="social_icon">
                        <ul>
                           <li><a href="#"><span class="padding_15"><img src="images/facebook-icon.png"></span>Facebook</a></li>
                           <li><a href="#"><span class="padding_15"><img src="images/twitter-icon.png"></span>Twitter</a></li>
                           <li><a href="#"><span class="padding_15"><img src="images/linkedin-icon.png"></span>Linkedin</a></li>
                           <li><a href="#"><span class="padding_15"><img src="images/youtub-icon.png"></span>Youtube</a></li>
                           <li><a href="#"><span class="padding_15"><img src="images/instagram-icon.png"></span>Instagram</a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                     <h2 class="useful_text">Novidades</h2>
                     <div class="form-group">
                        <textarea class="update_mail" placeholder="Email" rows="5" id="comment" name="Email"></textarea>
                        <div class="subscribe_bt"><a href="#">Se inscreva</a></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">2023 Todos Direitos Reservados. Design by <a href="faex.edu.br">42.0 delivery.</a></p>
         </div>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- javascript --> 
   </body>
</html>