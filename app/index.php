<?php
require_once 'includes/config.php';
?>

<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>42ponto0</title>

    <!-- Favicons -->
    <?php include ABSPATH .'/favicons.php'; ?>

    <!-- Stylesheets -->
    <?php include ABSPATH .'/stylesheets.php'; ?>

  </head>
  <body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
    <main>
      <div class="page-loader">
        <div class="loader">Loading...</div>
      </div>

      <nav class="navbar navbar-custom navbar-fixed-top navbar-transparent" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <a class="navbar-brand" href="<?php echo BASEURL; ?>"><img class="logo-img" src="<?php echo BASEURL; ?>public/images/logo.svg"></a>
          </div>
        </div>
      </nav>

      <section class="home-section home-fade home-full-height bg-dark-60 landing-header" id="home" data-background="<?php echo BASEURL; ?>public/images/landing/landing_bg.jpg">
        <div class="titan-caption">
          <div class="caption-content">
            <div class="container">
              <div class="font-open up ng sp "><b>Bem Vindo</b></div>
              <div class="font-open up ng mt-30"><a class="btn btn-border-w btn-circle" href="<?php echo BASEURL; ?>pages/estabelecimentos"><i class="icon-play"></i> Restaurantes </a></div>
            </div>
          </div>
        </div>
      </section>

      <div class="main">
        <section class="module pb-0 bg-dark landing-reason parallax-bg" data-background="<?php echo BASEURL; ?>public/images/landing/why_choose_bg.png">
          <div class="container">
            <div class="row">
              <div class="col-sm-6"><img src="<?php echo BASEURL; ?>public/images/landing/why_choose.png" alt=""></div>
              <div class="col-sm-6">
                <h2 class="module-title font-open align-left">POR QUE ESCOLHER 42ponto0?</h2>
                <p class="module-subtitle font-open align-left">Impulsione o seu negócio com o 42pont0 - a solução perfeita para seu estabelecimento. Tenha controle total, design atrativo e aumento nas vendas. Descubra o poder da simplicidade e transforme sua experiência gastronômica.</p>
              </div>
            </div>
          </div>
        </section>

        <section class="module" id="alt-features">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="alt-features-item">
                  <div class="alt-features-icon"><span class="icon-strategy"></span></div>
                  <h3 class="alt-features-title font-open up ng">Identidade Visual</h3>
                  <p class="font-open">Destaque-se com uma identidade visual única e memorável, que representa perfeitamente a essência do seu negócio.</p>
                </div>
                <div class="alt-features-item">
                  <div class="alt-features-icon"><span class="icon-tools-2"></span></div>
                  <h3 class="alt-features-title font-open up ng">Desenvolvedores</h3>
                  <p class="font-open">Equipe de desenvolvedores especializados dedicados a aprimorar a experiência do usuário.</p>
                </div>
                <div class="alt-features-item">
                  <div class="alt-features-icon"><span class="icon-target"></span></div>
                  <h3 class="alt-features-title font-open up ng">Marketing</h3>
                  <p class="font-open">Alcançamos o seu público-alvo com estratégias de marketing eficazes para aumentar a visibilidade e a adoção do nosso app.</p>
                </div>
                <div class="alt-features-item">
                  <div class="alt-features-icon"><span class="icon-tools"></span></div>
                  <h3 class="alt-features-title font-open up ng">Design</h3>
                  <p class="font-open">Design atraente e intuitivo que proporciona uma experiência de usuário excepcional ao navegar pelo nosso app de cardápio online.</p>
                </div>
              </div>
              <div class="col-sm-6 col-md-3 col-lg-3"></div>
              <div class="col-md-6 col-lg-6 hidden-xs hidden-sm">
                <div class="alt-services-image align-center"><img src="<?php echo BASEURL; ?>public/images/landing/feature.png" alt="Imagem do recurso"></div>
              </div>
            </div>
          </div>
        </section>


        <section class="module bg-dark parallax-bg landing-screenshot" data-background="<?php echo BASEURL; ?>public/images/landing/screenshot_bg.png">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h2 class="module-title font-open up ng">Como será o app?</h2>
                <div class="module-subtitle font-open">Trabalhamos para que o design seja o mais intuitivo possível, priorizamos a acessibilidade do usuário.</div>
              </div>
            </div>
            <div class="row client">
              <div class="owl-carousel text-center" data-items="4" data-pagination="true" data-navigation="false">
                <div class="owl-item">
                  <div class="col-sm-12"><img src="<?php echo BASEURL; ?>public/images/landing/screens/Mockup2.png" alt="App Screenshot"></div>
                </div>
                <div class="owl-item">
                  <div class="col-sm-12"><img src="<?php echo BASEURL; ?>public/images/landing/screens/Mockup6.png" alt="App Screenshot"></div>
                </div>
                <div class="owl-item">
                  <div class="col-sm-12"><img src="<?php echo BASEURL; ?>public/images/landing/screens/Mockup1.png" alt="App Screenshot"></div>
                </div>
                <div class="owl-item">
                  <div class="col-sm-12"><img src="<?php echo BASEURL; ?>public/images/landing/screens/Mockup3.png" alt="App Screenshot"></div>
                </div>
                <div class="owl-item">
                  <div class="col-sm-12"><img src="<?php echo BASEURL; ?>public/images/landing/screens/Mockup5.png" alt="App Screenshot"></div>
                </div>
                <div class="owl-item">
                  <div class="col-sm-12"><img src="<?php echo BASEURL; ?>public/images/landing/screens/Mockup4.png" alt="App Screenshot"></div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <!-- FOOTER -->
        <?php include_once ABSPATH .'/footer.php'; ?>

        <!--JavaScripts -->
        <?php include_once ABSPATH .'/animations.php'; ?>
        
      </div>
    </main>
  </body>
</html>