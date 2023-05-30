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
      <?php
        include '../../includes/header.php'
      ?>

      <!-- EDITAR OPÇOES DO RESTAURANTE -->
      <section class="module" id="menu">
        <div class="container">
          <div class="row multi-columns-row">
            <div class="row">
              <div class="col-sm-12">
                <h2 class="module-title font-alt ">Informaçoes do restaurante</h2>
              </div>
            </div>
            <form class="reservation-form" method="post">
              <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="shop-item">
                  <div class="shop-item-image"><img src="<?php echo BASEURL;?>public/images/shop/product-7.jpg" alt="Accessories Pack"/>
                    <div class="shop-item-detail"><a class="btn btn-round btn-b"><span class=" icon-camera"> Adicionar imagem</span></a></div>
                  </div>
                </div>
              </div>
              <p class="module-subtitle font-serif align-left">Registre informações essenciais do seu restaurante.</p>
              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-addon"><i class="icon-clock"></i></div>
                  <select class="form-control input-lg" id="time" name="time" type="text" required="required">
                    <option value="time" disabled="" selected=""> Aberto | Fechado </option>
                    <option value="aberto">ABERTO</option>
                    <option value="fechado">FECHADO</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-addon"><i class="icon-profile-male"></i></div>
                  <input class="form-control input-lg" type="text" id="tell" name="tell" placeholder="Telefone para contato do Estabelecimento*" required="required"/>
                </div>
              </div>
              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-addon"><i class="icon-documents"></i></div>
                  <input class="form-control input-lg" type="text" id="sobre" name="sobre" placeholder="Sobre o Restaurante*"/>
                </div>
              </div>             
              <div class="form-group">
                <button class="btn btn-g btn-round btn-block btn-lg mt-20" id="rfsubmit" type="submit">Salvar</button>
              </div>  
              <div id="reservationFormResponse"></div>
            </form>  
          </div>
        </div>
      </section>

      <!-- CADASTRO DE ITEM -->
      <section class="module" id="menu">
        <div class="container">
          <div class="row multi-columns-row">
            <div class="row">
              <div class="col-sm-12">
                <h2 class="module-title font-alt ">Cadastrar Novo Item</h2>
              </div>
            </div>
            
            <form class="reservation-form" method="post">

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
              
              <select class="form-control" id="tipoSelecionado">
                      <option value="" selected disabled>Tipo do item:</option>
                      <option value="lanches">Lanches</option>
                      <option value="pizzas">Pizzas</option>
                      <option value="pratos_principais">Pratos Principais</option>
                      <option value="sobremesas">Sobremesas</option>
                      <option value="bebidas">Bebidas</option>
                      <option value="entradas">Entradas</option>
                      <option value="frutas">Frutas</option>

              </select>

              <div class="form-group">
                <button class="btn btn-g btn-round btn-block btn-lg mt-20" id="rfsubmit" type="submit"> Cadastrar novo item </button>
              </div>

       
            </form>  
          </div>
        </div>
      </section>


      <!-- EDITAR ITEMS CARDAPIOS -->
      <!-- FAZER LOOPING PARA EXIBIR -->
      <section class="module" id="menu">
        <div class="container">
          <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
              <h2 class="module-title font-alt">Editar Cardápio</h2>
            </div>
          </div>
      <!-- ITENS CADASTRADO -->

          <div class="row multi-columns-row">
            <div class="col-sm-6">
              <div class="menu ">
                <div class = "row">
                  <div class="col-sm-8">
                    <select class="form-control" id="itemSelecionado">
                      <option value = "" selected disabled>Selecionar:</option>  
                      <option value="item1">Wild Mushroom Bucatini with Kale</option>
                      <option value="item2">Outro Item do Cardápio</option>
                    </select>
                    <h4 class="form-control menu-title mt-10 mb-10">Mushroom / Veggie / White Sources</h4>
                    <h4 class="form-control menu-title mt-10 mb-10">$10.5</h4>
                  </div>
                </div>
              </div>
            </div>
           
           <!-- OPCAO EDITAR -->
            <div class="col-sm-6">
              <div class="menu ">
                <div class="row">
                <div>
                  <div class="col-sm-8">
                    <input class="form-control  mb-10" id="nomeItem" name="nomeItem" placeholder="Novo Titulo" required="required" />
                    <input class="form-control  mt-10 mb-10" id="acompanhamento" name="Novo acompanhamento" placeholder="Acompanhamentos" required="required" />
                    <input class="form-control  mt-10 mb-10" id="preco" name="preco" placeholder="Preço" required="required"/>
                  </div>
                  <div class="col-sm-4 menu-price-detail">
                    <button class="btn btn-g btn-round btn-block btn-lg mt-10 mb-20" id="rfsubmit" type="submit"> Concluir </button>
                    <button class="btn btn-g btn-round btn-block btn-lg mt-20 mb-10" id="rfsubmit" type="submit"> Apagar </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
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