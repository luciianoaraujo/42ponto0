<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Estabelecimentos</title>
    <?php include_once ABSPATH .'../../includes/favicons.php';?>
    <?php include_once ABSPATH .'../../includes/stylesheets.php';?>
  </head>
  <body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
    <main>
      <?php
        include_once ABSPATH . '../../includes/header.php';
      ?>



      <!-- BACKGROUND IMAGE -->   
      <section class="module bg-dark-60 portfolio-page-header" data-background="<?php echo BASEURL;?>public/images/logos/estabel_gif.gif">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h2  class="module-title font-alt"></h2>
                
              </div>
            </div>
          </div>
        </section>

        <!-- main -->
        <section class="module-medium" id="demos">
          <div class="container main showcase-page">
            <div class="row multi-columns-row">
            <?php foreach ($estabelecimentos as $estabelecimento) : ?>
              <div class="col-md-4 col-sm-6 col-xs-12">
                  <a class="content-box" href="cardapio/?id=<?php echo $estabelecimento['pk_id_register']; ?>">
                      <div class="content-box-image">
                          <img src="<?php echo $estabelecimento['image']; ?>" alt="Logo do estabelecimento">
                      </div>
                      <h3 class="content-box-title font-serif"><?php echo $estabelecimento['name_register']; ?></h3>
                  </a>
              </div>
            <?php endforeach; ?>
            </div>
          </div>
        </section>

 
    <!-- FOOTER -->
    <?php
        include_once ABSPATH . '../../includes/footer.php';
    ?>

        <!--  
        JavaScripts
        =============================================
        -->
    <?php
      include_once ABSPATH . '../../includes/animations.php';
    ?>
  </body>
</html>
