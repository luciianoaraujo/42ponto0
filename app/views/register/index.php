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
  <title>Register</title>

  <!--  
    Favicons
    =============================================
    -->
  <?php include_once ABSPATH . '../includes/favicons.php'; ?>

  <!--  
    Stylesheets
    =============================================
    -->
  <?php include_once ABSPATH . '../includes/stylesheets.php'; ?>

</head>

<body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
  <main>
    <main>
      <div class="page-loader">
        <div class="loader">Loading...</div>
      </div>
      <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#custom-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo BASEURL; ?>"><img class="logo-img" src="<?php echo BASEURL; ?>public/images/logo.svg"></a>
          </div>
          <div class="collapse navbar-collapse" id="custom-collapse">
            <ul class="nav navbar-nav navbar-right">
              <li class="dropdown">
                <a class="btn btn-circle" href="<?php echo BASEURL; ?>pages/login/">
                  <i class="icon-play"></i> > Login
                </a>
              </li>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <!-- MAIN -->
      <div class="main">
        <section class="module bg-dark-30" data-background="<?php echo BASEURL; ?>public/images/logos/estabel_gif.gif">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h1 class="module-title font-alt mb-0"></h1>
              </div>
            </div>
          </div>
        </section>
        <section class="module" style="min-height: 61.2vh;">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h1 class="module-title font-alt mb-0">Cadastro</h1>
                <hr class="divider-w mb-10">
                <!-- FORM POST -->
                <form class="form" method="post">
                  <div class="panel-group" id="accordion">
                    <div class="panel panel-default">
                      <!-- REGISTER -->
                      <div class="panel-heading">
                        <h4 class="panel-title font-alt"><a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#support2">Register</a></h4>
                      </div>
                      <div class="panel-collapse collapse in" id="support2">
                        <div class="panel-body">
                          <div class="form-group">
                            <input class="form-control" id="register-nome" type="text" name="register_nome" placeholder="Nome" />
                          </div>
                          <div class="form-group">
                            <input class="form-control" id="register-cnpj" type="text" name="register_cnpj" placeholder="CNPJ" />
                          </div>
                          <div class="form-group">
                            <input class="form-control" id="register-email" type="text" name="register_email" placeholder="Email" />
                          </div>
                          <div class="form-group">
                            <input class="form-control" id="register-password" type="password" name="register_password" placeholder="Password" />
                          </div>
                          <div class="form-group">
                            <input class="form-control" id="register-telefone" type="text" name="register_telefone" placeholder="Telefone" />
                          </div>
                          <div class="form-group">
                            <input class="form-control" id="register-imagem" type="text" name="register_imagem" placeholder="Link Logotipo" />
                          </div>
                          <div class="form-group">
                            <button class="btn btn-round btn-b btn-circle" type="submit">Register</button>
                          </div>
                          <div class="error-message-container">
                            <?php if ($error) : ?>
                              <div class="error-message"><?php echo $error; ?></div>
                            <?php endif; ?>
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
        <?php
        include '../../includes/footer.php';
        ?>

        <!--  
    JavaScripts
    =============================================
    -->
        <?php
        include '../../includes/animations.php';
        ?>
</body>

</html>