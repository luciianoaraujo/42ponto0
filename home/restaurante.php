<!DOCTYPE html>
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
               <a class="navbar-brand"href="index.html"><img src="logo.png"></a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ml-auto">
                     <li class="nav-item">
                        <a class="nav-link" href="index.html"><span class="padding5"><i class="fa fa-angle-right"></i></span>Página Inicial</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="about.html"><span class="padding5"><i class="fa fa-angle-right"></i></span>Sobre</a>
                     </li>
                     <li class="nav-item active">
                        <a class="nav-link" href="restaurante.html"><span class="padding5"><i class="fa fa-angle-right"></i></span>Restaurantes</a>
                     </li> 
                  </ul>
                  <form class="form-inline my-2 my-lg-0">
                     <div class="login_bt">
                        <ul>
                           <li><a href="#">Login</a></li>
                           <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i></a></li>
                        </ul>
                     </div>
                  </form>
               </div>
            </nav>
         </div>      
        </div>
         <!-- CONTEUDO RESTAURANTES --> 
        
         <?php
    // Conecta ao banco de dados
    $conn = new PDO('mysql:host=localhost;dbname=delivery', 'root', '966969ab');

    // Consulta os restaurantes
    $stmt = $conn->query('SELECT * FROM estabelecimentos');

    // Define o número de colunas desejado
    $num_colunas = 3;
    $coluna_atual = 0;

    // Loop para criar os containers
    while ($estabelecimento = $stmt->fetch()) {
        // Abre uma nova linha para cada nova coluna
        if ($coluna_atual % $num_colunas == 0) {
            echo '<div class="row">';
        }

        // Cria o container com informações do estabelecimento
        echo '<div class="col-md-4">';
        echo '<div class="card">';
        echo '<img class="card-img-top"" src="' . $estabelecimento['imagem'] . '">';
        echo '<div class="card-body">';
        echo '<h5 class="card-title nome-estabelecimento">' . $estabelecimento['nome'] . '</h5>';
        echo '<a href="#" class="btn btn-primary">Ver Cardápio</a>';
        echo '</div>';
        echo '</div>';
        echo '</div>';

        // Fecha a linha atual após a última coluna
        if ($coluna_atual % $num_colunas == $num_colunas - 1) {
            echo '</div>';
        }

        $coluna_atual++;
    }

    // Fecha a última linha, caso necessário
    if ($coluna_atual % $num_colunas != 0) {
        echo '</div>';
    }
?>
      

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
                           <li><a href="index.html">Home</a></li>
                           <li><a href="about.html">Sobre nós</a></li>
                           <li class="active"><a href="restaurante.html">Restaurantes</a></li>
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