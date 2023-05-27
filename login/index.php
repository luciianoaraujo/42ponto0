<?php 
  require_once '../config.php'; 
?>

<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--  
    Document Title
    =============================================
    -->
    <title>Login or Register</title>

    <!--  
    Favicons
    =============================================
    -->
    <?php include_once ABSPATH.'inc/favicons.php';?>

    <!--  
    Stylesheets
    =============================================
    -->
    <?php include_once ABSPATH.'inc/stylesheets.php';?>

<!-- HEAD -->    
  </head>
  <body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
    <main>
      <div class="page-loader">
        <div class="loader">Loading...</div>
      </div>
      <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <a class="navbar-brand" href="<?php echo BASEURL;?>"><img class="logo-img" src="<?php echo BASEURL;?>assets/images/logo.svg"></a>
          </div>
        </div>
      </nav>
      <div class="main">
        <section class="module bg-dark-30" data-background="<?php echo BASEURL;?>assets/images/section-4.jpg">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h1 class="module-title font-alt mb-0">Bem vindo</h1>
              </div>
            </div>
          </div>
        </section>
<!-- MAIN -->
        <section class="module">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h4 class="font-alt">Entrar ou Cadastrar</h4>
                <hr class="divider-w mb-10">
                <!-- FORM POST -->
                <form class="form" action="" method="post">
                  <div class="panel-group" id="accordion">
                    <div class="panel panel-default">
                      <!-- LOGIN -->
                      <div class="panel-heading">
                        <h4 class="panel-title font-alt"><a data-toggle="collapse" data-parent="#accordion" href="#support1"> > Login </a></h4>
                      </div>
                      <div class="panel-collapse collapse in" id="support1">
                        <div class="panel-body">
                          <div class="form-group">
                            <input class="form-control" id="email" type="text" name="email" placeholder="Email" />
                          </div>
                          <div class="form-group">
                            <input class="form-control" id="password" type="password" name="password" placeholder="senha" />
                          </div>
                          <div class="form-group">
                            <button class="btn btn-round btn-b btn-circle" type="submit"> > Login </button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <hr class="divider-w mt-10 mb-10">
                    <div class="panel panel-default">
                      <!-- REGISTER -->
                      <div class="panel-heading">
                        <h4 class="panel-title font-alt"><a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#support2"> + Cadastrar </a></h4>
                      </div>
                      <div class="panel-collapse collapse" id="support2">
                        <div class="panel-body">
                          <div class="form-group">
                            <input class="form-control" id="nome" type="text" name="nome" placeholder="Nome" />
                          </div>
                          <div class="form-group">
                            <input class="form-control" id="email" type="text" name="email" placeholder="Email" />
                          </div>
                          <div class="form-group">
                            <input class="form-control" id="password" type="password" name="password" placeholder="senha" />
                          </div>
                          <div class="form-group">
                            <input class="form-control" id="Telefone" type="text" name="Telefone" placeholder="Telefone" />
                          </div>
                          <div class="form-group">
                            <input class="form-control" id="nome_re" type="text" name="nome_re" placeholder="Nome Restaurante" />
                          </div>
                          <div class="form-group">
                            <button class="btn btn-round btn-b btn-circle" type="submit">+ Cadastrar</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>    
                </form>
                
              </div>
            </div>
          </div>
        </section>
<!-- FOOTER -->
        <hr class="divider-d">
        <footer class="footer bg-dark">
          <div class="container">
            <div class="row">
              <div class="col-sm-6">
                <img class="logo-img" src="<?php echo BASEURL;?>assets/images/logo.svg">
              </div>
              <div class="col-sm-6">
                <div class="footer-social-links"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-dribbble"></i></a><a href="#"><i class="fa fa-skype"></i></a>
                </div>
              </div>
            </div>
          </div>
        </footer>
      </div>
      <div class="scroll-up"><a href="#totop"><i class="fa fa-angle-double-up"></i></a></div>
    </main>
    
    <!--  
    JavaScripts
    =============================================
    -->
    <script src="<?php echo BASEURL;?>assets/lib/jquery/dist/jquery.js"></script>
    <script src="<?php echo BASEURL;?>assets/lib/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?php echo BASEURL;?>assets/lib/wow/dist/wow.js"></script>
    <script src="<?php echo BASEURL;?>assets/lib/jquery.mb.ytplayer/dist/jquery.mb.YTPlayer.js"></script>
    <script src="<?php echo BASEURL;?>assets/lib/isotope/dist/isotope.pkgd.js"></script>
    <script src="<?php echo BASEURL;?>assets/lib/imagesloaded/imagesloaded.pkgd.js"></script>
    <script src="<?php echo BASEURL;?>assets/lib/flexslider/jquery.flexslider.js"></script>
    <script src="<?php echo BASEURL;?>assets/lib/owl.carousel/dist/owl.carousel.min.js"></script>
    <script src="<?php echo BASEURL;?>assets/lib/smoothscroll.js"></script>
    <script src="<?php echo BASEURL;?>assets/lib/magnific-popup/dist/jquery.magnific-popup.js"></script>
    <script src="<?php echo BASEURL;?>assets/lib/simple-text-rotator/jquery.simple-text-rotator.min.js"></script>
    <script src="<?php echo BASEURL;?>assets/js/plugins.js"></script>
    <script src="<?php echo BASEURL;?>assets/js/main.js"></script>
  </body>
</html>