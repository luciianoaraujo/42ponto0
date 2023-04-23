<!DOCTYPE html>

<?php
   session_start(); // Inicia a sessão

   // Verifica se o usuário está logado, redireciona para a página de login
   if(!isset($_SESSION['email']) || empty($_SESSION['email'])) {
       header('Location: login.php');
       
   }
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
      <title>42.0 Delivery</title>
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
      <div class="header_section">
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
                     <li class="nav-item">
                        <a class="nav-link" href="about.php"><span class="padding5"><i class="fa fa-angle-right"></i></span>Sobre</a>
                     </li>
                     <li class="nav-item active">
                        <a class="nav-link" href="restaurante.php"><span class="padding5"><i class="fa fa-angle-right"></i></span>Restaurantes</a>
                     </li> 
                  </ul>
                  <form class="form-inline my-2 my-lg-0">
                     <div class="login_bt">
                        <ul>
                           <?php
                              if(isset($_SESSION['email']) and !empty($_SESSION['email'])){
                                 // Usuário está logado, exibe o botão de logout
                                 echo '<li><a href="logout.php">Logout</a></li>
                                       <li><a href="logout.php"><i class="fa fa-user" aria-hidden="true"></i></a></li>';
                             }
                             else{
                                 // Usuário não está logado, exibe o botão de login
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
        <!-- START ITENS CARDAPIO -->

        <?php
            require_once 'connect.php';
            $id = $_GET['id'];
            $exec = $conn->query("SELECT * FROM produtos WHERE id_estabelecimento = $id");

            if ($exec->rowCount() == 0) {
                echo '<p>Nenhum item de cardápio cadastrado para este restaurante.</p>';
            } else {
                echo '<div class="row">';
                while ($produto = $exec->fetch()) {
                    echo '<div class="col-md-3">';
                    echo '<div class="card cardapio-card" id="produto-' . $produto['id_produto'] . '">';
                    echo '<div class="card-body">';
                    echo '<h5 class="card-title">' . $produto['nome'] . '</h5>';
                    echo '<p class="card-text line-clamp-3">' . $produto['descricao'] . '</p>';
                    echo '<p class="card-text">' . $produto['valor'] . '</p>';
                    echo '<div class="input-group mb-3">';
                    echo '<div class="input-group-prepend">';
                    echo '<button class="btn btn-outline-secondary minus-quantidade" type="button" id="minus-' . $produto['id_produto'] . '">-</button>';
                    echo '</div>';
                    echo '<input type="text" class="form-control quantidade" placeholder="Quantidade" aria-label="Quantidade" aria-describedby="basic-addon1" data-quantidade="0">';
                    echo '<div class="input-group-append">';
                    echo '<button class="btn btn-outline-secondary add-quantidade" type="button" id="plus-' . $produto['id_produto'] . '">+</button>';
                    echo '</div>';
                    echo '</div>';
                    echo '<button type="button" class="button-85 add-pedido">Adicionar ao Pedido</button>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';

                }
                echo '</div>';
            }
        ?>


        
        <!--END ITENS CARDAPIO-->

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
                           <li><a href="about.php">Sobre nós</a></li>
                           <li class="active"><a href="restaurante.php">Restaurantes</a></li>
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
      <script>
        document.querySelectorAll('.add-quantidade').forEach(function(botao) {
        botao.addEventListener('click', function() {
        // Encontra o input da quantidade para este item
        var inputQuantidade = this.parentNode.parentNode.querySelector('.quantidade');
        // Encontra a quantidade atual para este item
        var quantidadeAtual = parseInt(inputQuantidade.getAttribute('data-quantidade'));
        // Incrementa a quantidade em 1
        var novaQuantidade = quantidadeAtual + 1;
        // Atualiza o valor do campo de quantidade
        inputQuantidade.value = novaQuantidade;
        // Atualiza o valor do atributo data-quantidade
        inputQuantidade.setAttribute('data-quantidade', novaQuantidade);
            });
        });

        document.querySelectorAll('.minus-quantidade').forEach(function(botao) {
        botao.addEventListener('click', function() {
        // Encontra o input da quantidade para este item
        var inputQuantidade = this.parentNode.parentNode.querySelector('.quantidade');
        // Encontra a quantidade atual para este item
        var quantidadeAtual = parseInt(inputQuantidade.getAttribute('data-quantidade'));
        // Incrementa a quantidade em 1
        var novaQuantidade = quantidadeAtual - 1;
        if (novaQuantidade <= 0) {
            novaQuantidade = 0;
        }
        // Atualiza o valor do campo de quantidade
        inputQuantidade.value = novaQuantidade;
        // Atualiza o valor do atributo data-quantidade
        inputQuantidade.setAttribute('data-quantidade', novaQuantidade);
            });
        });
    </script>       
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