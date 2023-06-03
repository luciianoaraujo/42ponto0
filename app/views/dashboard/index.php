<?php 
require_once '../../includes/config.php'; 
?>

<!DOCTYPE html>
<html lang="en-US" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!--  
    Document Title
    =============================================
    -->
    <title>Config</title>
    
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
    <main>
      <div class="page-loader">
          <div class="loader">Loading...</div>
      </div>
      <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <a class="navbar-brand" href="<?php echo BASEURL;?>"><img class="logo-img" src="<?php echo BASEURL;?>public/images/logo.svg"></a>
            </div>
            <div class="collapse navbar-collapse" id="custom-collapse">
              <ul class="nav navbar-nav navbar-right">
                <?php
                  if(isset($_SESSION['user'])){
                    ?>
                      <form method="post" action="../../pages/logout/">
                          <button class="btn btn-border-w mt-5 btn-circle" type="submit" name="logout">
                              <i class="icon-play"></i> Logout
                          </button>
                      </form>
                    <?php
                  }
                  
                ?>
              </ul>
            </div>
          </div>
        </nav>

      <!-- CADASTRO DE ITEM -->
      <section class="module" id="menu">
        <div class="container">
          <div class="row multi-columns-row">
            <div class="row">
              <div class="col-sm-12">
                <h2 class="module-title font-alt ">Cadastrar Novo Item</h2>
              </div>
            </div>
            
            <form class="reservation-form" method="post" action = '../../pages/dashboard/formCadastra.php'>
      

              <p class="module-subtitle font-serif align-center">Registre informações essenciais do seu item.</p>

              <div class="form-group">
     
      
                <div class="input-group">
                  <div class="input-group-addon"><i class=" icon-document"></i></div>
                  <input class="form-control input-lg" type="text" id="nomeItem" name="nomeItem" placeholder="Novo Item*" required="required"/>
                </div>
              </div>
              
              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-addon"><i class=" icon-documents"></i></div>
                  <input class="form-control input-lg" type="text" id="acompanhamento" name="acompanhamento" placeholder="Acompanhamentos*"/>
                </div>
              </div>
              
              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-addon"><i class="icon-wallet"></i></div>
                  <input class="form-control input-lg" type="text" id="preco" name="preco" placeholder="Preço*" required="required"/>
                </div>
              </div>      
              
              <select class="form-control" name="tipoSelecionado" id="tipoSelecionado">
                      <option value="" selected disabled>Tipo do item:</option>
                      <option value="lanches">Lanches</option>
                      <option value="pizzas">Pizzas</option>
                      <option value="pratos_principais">Pratos Principais</option>
                      <option value="sobremesas">Sobremesas</option>
                      <option value="bebidas">Bebidas</option>
                      <option value="entradas">Entradas</option>
                      <option value="frutas">Frutas</option>

              </select>
              <div class="error-message-container">
                <?php if ($error): ?>
                  <div class="error-message"><?php echo $error; ?></div>
                <?php endif;?>   
              </div>
              <div class="form-group">
                <button class="btn btn-g btn-round btn-block btn-lg mt-20" id="rfsubmit" type="submit"> Cadastrar novo item </button>
              </div>

       
            </form>  
          </div>
        </div>
      </section>


      <!-- EDITAR ITEMS CARDAPIOS -->
      <section class="module" id="menu">
        <div class="container">
          <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
              <h2 class="module-title font-alt">Editar Cardápio</h2>
            </div>
          </div>

          <div class="row multi-columns-row">
            <div class="col-sm-6">
              <div class="menu ">
                <div class = "row">
                <div class="col-sm-8">
                  <select class="form-control" id="itemSelecionado">
                    <option value="" selected disabled>Selecionar:</option>
                    <?php foreach ($cardapio as $item): ?>
                      <option value="<?php echo $item['pk_id_menu']; ?>">
                      
                        <?php echo $item['name_product_menu']; ?>
                      </option>
                    <?php endforeach; ?>
                    
                  </select>
                </div>
              </div>
            </div>
          </div>
           
           <!-- OPCAO EDITAR -->
            <div class="col-sm-6">
              <div class="menu ">
                <div class="row">
                <div>
                <form method = "post" action = "formEdita.php">
                  <div class="col-sm-8">
                    <input class="form-control  mb-10" id="nomeItem" name="nomeItem" placeholder="Novo Titulo" required="required" />
                    <input class="form-control  mt-10 mb-10" id="acompanhamento" name="Novo acompanhamento" placeholder="Novo Acompanhamento"/>
                    <input class="form-control  mt-10 mb-10" id="preco" name="preco" placeholder="Novo Preço" required="required"/>
                  </div>
                  <div class="col-sm-4 menu-price-detail">
                    <button class="btn btn-g btn-round btn-block btn-lg mt-10 mb-20" id="rfsubmit" type="submit"> Concluir </button>
                </form>    
                    <button class="btn btn-g btn-round btn-block btn-lg mt-20 mb-10" id="rfsubmit" type="submit"> Apagar </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="error-message-container">
          <?php if ($error): ?>
            <div class="error-message"><?php echo $error; ?></div>
          <?php endif;?>   
        </div>
      </section>
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