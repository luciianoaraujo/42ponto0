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

    <!--  
    Favicons
    =============================================
    -->
    <?php 
    
      include 'includes/favicons.php';

    ?>
    
    <!-- Stylesheets -->
    <?php
      include 'includes/stylesheets.php';
     ?>
     
  </head>



  <body>
    
  </head>
  <body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
    <main>
      <div class="page-loader">
        <div class="loader">Loading...</div>
      </div>
      <nav class="navbar navbar-custom navbar-fixed-top navbar-transparent" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <a class="navbar-brand" href="<?php echo BASEURL;?>"><img class="logo-img" src="<?php echo BASEURL;?>public/images/logo.svg"></a>
          </div>
          <div class="collapse navbar-collapse" id="custom-collapse">
            <ul class="nav navbar-nav navbar-right">
              <a class="btn btn-border-w btn-circle" href="<?php echo BASEURL;?>pages/login/"> <i class="icon-play"></i> + Seja parceiro </a>
              <a class="btn btn-border-w btn-circle" href="<?php echo BASEURL;?>pages/login/"> <i class="icon-play"></i> > Login </a>
            </ul>
          </div>
        </div>
      </nav>
      <section class="home-section home-fade home-full-height bg-dark-60 landing-header" id="home" data-background="<?php echo BASEURL;?>public/images/landing/landing_bg.jpg">
        <div class="titan-caption">
          <div class="caption-content">
            <div class="container">
              <div class="font-alt"><b>Bem Vindo</b></div>
              <div class="font-alt mt-30"><a class="btn btn-border-w btn-circle" href="<?php echo BASEURL;?>pages/estabelecimentos"><i class="icon-play"></i> Restaurantes </a></div>
            </div>
          </div>
        </div>
      </section>
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-md-offset"><img class="img-responsive banner-img" src="public/images/landing/banner_img.png"></div>
        </div>
      </div>
      <div class="main">
        <section class="module" id="alt-features">
          <div class="container">
              <div class="row">
                <div class="col-sm-6 col-md-3 col-lg-3">
                  <div class="alt-features-item">
                    <div class="alt-features-icon"><span class="icon-strategy"></span></div>
                      <h3 class="alt-features-title font-alt">Identidade Visual</h3>
                      <p>Destaque-se com uma identidade visual única e memorável, que representa perfeitamente a essência do seu negócio.</p>
                    </div>
                    <div class="alt-features-item">
                      <div class="alt-features-icon"><span class="icon-tools-2"></span></div>
                      <h3 class="alt-features-title font-alt">Desenvolvedores</h3>
                      <p>Equipe de desenvolvedores especializados dedicados a aprimorar a experiência do usuário.</p>
                    </div>
                    <div class="alt-features-item">
                      <div class="alt-features-icon"><span class="icon-target"></span></div>
                      <h3 class="alt-features-title font-alt">Marketing</h3>
                      <p>Alcançamos o seu público-alvo com estratégias de marketing eficazes para aumentar a visibilidade e a adoção do nosso app.</p>
                    </div>
                    <div class="alt-features-item">
                      <div class="alt-features-icon"><span class="icon-tools"></span></div>
                      <h3 class="alt-features-title font-alt">Design</h3>
                      <p>Design atraente e intuitivo que proporciona uma experiência de usuário excepcional ao navegar pelo nosso app de cardápio online.</p>
                    </div>
                </div>
              <div class="col-md-6 col-lg-6 hidden-xs hidden-sm">
                <div class="alt-services-image align-center"><img src="<?php echo BASEURL;?>public/images/landing/feature.png" alt="Imagem do recurso"></div>
              </div>
              <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="alt-features-item">
                  <div class="alt-features-icon"><span class="icon-camera"></span></div>
                  <h3 class="alt-features-title font-alt">Fotografia</h3>
                  <p>Mostre a beleza dos seus pratos com imagens incríveis e apetitosas.</p>
                </div>
                <div class="alt-features-item">
                  <div class="alt-features-icon"><span class="icon-mobile"></span></div>
                  <h3 class="alt-features-title font-alt">Mobile</h3>
                  <p>Acesse o cardápio de restaurantes em qualquer lugar e a qualquer hora através do nosso app.</p>
                </div>
                <div class="alt-features-item">
                <div class="alt-features-icon"><span class="icon-linegraph"></span></div>
                  <h3 class="alt-features-title font-alt">Crescimento</h3>
                  <p>Impulsione seu negócio. Cadastre-se como estabelecimento e experimente um crescimento excepcional em seu negócio.</p>
                </div>
                <div class="alt-features-item">
                <div class="alt-features-icon"><span class="icon-basket"></span></div>
                  <h3 class="alt-features-title font-alt">Loja</h3>
                  <p>Explore nossa loja virtual e adquira produtos relacionados ao seu restaurante diretamente pelo nosso aplicativo.</p>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="module pb-0 bg-dark landing-reason parallax-bg" data-background="<?php echo BASEURL;?>public/images/landing/why_choose_bg.png">
          <div class="container">
            <div class="row">
              <div class="col-sm-6"><img src="<?php echo BASEURL;?>public/images/landing/why_choose.png" alt=""></div>
              <div class="col-sm-6">
                <h2 class="module-title font-alt align-left">Por que escolher 42ponto0?</h2>
                <p class="module-subtitle font-serif align-left">Impulsione o seu negócio com o 42pont0 - a solução perfeita para seu estabelecimento. Tenha controle total, design atrativo e aumento nas vendas. Descubra o poder da simplicidade e transforme sua experiência gastronômica.</p>
              </div>
            </div>
          </div>
        </section>
        <section>
          <div class="container">
            <div class="row landing-image-text">
              <div class="col-sm-6"><img class="center-block" src="<?php echo BASEURL;?>public/images/landing/iphone-mockup.png" alt=""></div>
                <div class="col-sm-6">
                  <h2 class="font-alt">Como funciona?</h2>
                  <p class="font-serif">No 42ponto0 você conta com diversas vantagens para seu negócio.</p>
                <ul>
                  <li>Crie seu cardápio: Adicione seus pratos, bebidas e opções personalizadas ao cardápio digital de forma fácil e intuitiva.</li>
                  <li>Personalize sua aparência: Escolha um layout atraente e personalize o design para refletir a identidade visual do seu negócio.</li>
                  <li>Receba pedidos: Receba pedidos diretamente no app e seja notificado instantaneamente. Gerencie e acompanhe os pedidos de forma eficiente.</li>
                  <li>Comunique-se com os clientes: Mantenha uma comunicação direta com seus clientes por meio de mensagens e notificações para fornecer atualizações e promoções especiais.</li>
                  <li>Gerencie seu negócio: Acesse relatórios e estatísticas para analisar o desempenho do seu negócio, identificar tendências e tomar decisões informadas.</li>
                </ul>
              </div>
            </div>
          </div>
        </section>
        <section class="module bg-dark parallax-bg landing-screenshot" data-background="<?php echo BASEURL;?>public/images/landing/screenshot_bg.png">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h2 class="module-title font-alt">Como será o app?</h2>
                <div class="module-subtitle font-serif">Trabalhamos para que o design seja o mais intuitivo possível, priorizamos a acessibilidade do usuário.</div>
              </div>
            </div>
            <div class="row client">
              <div class="owl-carousel text-center" data-items="4" data-pagination="true" data-navigation="false">
                <div class="owl-item">
                  <div class="col-sm-12"><img src="<?php echo BASEURL;?>public/images/landing/screens/Mockup2.png" alt="App Screenshot"></div>
                </div>
                <div class="owl-item">
                  <div class="col-sm-12"><img src="<?php echo BASEURL;?>public/images/landing/screens/Mockup6.png" alt="App Screenshot"></div>
                </div>
                <div class="owl-item">
                  <div class="col-sm-12"><img src="<?php echo BASEURL;?>public/images/landing/screens/Mockup1.png" alt="App Screenshot"></div>
                </div>
                <div class="owl-item">
                  <div class="col-sm-12"><img src="<?php echo BASEURL;?>public/images/landing/screens/Mockup3.png" alt="App Screenshot"></div>
                </div>
                <div class="owl-item">
                  <div class="col-sm-12"><img src="<?php echo BASEURL;?>public/images/landing/screens/Mockup5.png" alt="App Screenshot"></div>
                </div>
                <div class="owl-item">
                  <div class="col-sm-12"><img src="<?php echo BASEURL;?>public/images/landing/screens/Mockup4.png" alt="App Screenshot"></div>
                </div>
              </div>
            </div>
          </div>
        </section>

<!-- FOOTER -->

<?php
    include 'includes/footer.php';
?>

    <!--  
    JavaScripts
    =============================================
    -->
<?php
  include 'includes/animations.php';
?>
  </body>
  </html>