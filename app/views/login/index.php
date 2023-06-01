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
    <title>Login</title>

    <!--  
    Favicons
    =============================================
    -->
    <?php include_once ABSPATH.'../includes/favicons.php';?>

    <!--  
    Stylesheets
    =============================================
    -->
    <?php include_once ABSPATH.'../includes/stylesheets.php';?>
    
  </head>
  <body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
    <main>
      <?php
        include '../../includes/header.php'
      ?>
      <!-- MAIN -->
      <div class="main">
        <section class="module bg-dark-30" data-background="<?php echo BASEURL;?>public/images/logos/estabel_gif.gif">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h1 class="module-title font-alt mb-0"></h1>
              </div>
            </div>
          </div>
        </section>
        <section class="module">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h1 class="module-title font-alt mb-0">Login</h1>
                <hr class="divider-w mb-10">
                <!-- FORM POST -->
              <form class="form" method="post">
                <div class="panel-group" id="accordion">
                  <div class="panel panel-default">
                    <!-- LOGIN -->
                    <div class="panel-heading">
                      <h4 class="panel-title font-alt"><a data-toggle="collapse" data-parent="#accordion" href="#support1">Login</a></h4>
                    </div>
                    <div class="panel-collapse collapse in" id="support1">
                      <div class="panel-body">
                        <div class="form-group">
                          <input class="form-control" id="login-email" type="text" name="login-email" placeholder="Email" />
                        </div>
                        <div class="form-group">
                          <input class="form-control" id="login-password" type="password" name="login-password" placeholder="Password" />
                        </div>
                        <div class="form-group">
                          <button class="btn btn-round btn-b btn-circle" type="submit">Login</button>
                          <div class="error-message-container">
                              <?php if ($error): ?>
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