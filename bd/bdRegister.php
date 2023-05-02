<?php
session_start();
if(isset($_POST['nome']) and !empty($_POST['nome'])){
   $nome_post = $_POST['nome'];
   $email_post = $_POST['email'];
   $telefone_post = $_POST['telefone'];
   $endereco_post = $_POST['endereco'];
   $imagem_post = $_POST['imagem'];    
   $senha_post = $_POST['senha'];
   require_once 'bdConnect.php';
   $sql = "INSERT INTO estabelecimentos VALUES(NULL, '$nome_post','$email_post','$senha_post','$telefone_post','$endereco_post','$imagem_post')";
   $exec = $conn->query($sql);
   header('location: ../home/login.php');
}
?>