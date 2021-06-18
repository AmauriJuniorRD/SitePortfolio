<?php
error_reporting(E_ALL);
require_once '../CLASSE/usuarios.php';
$u = new Usuario();
?>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="preconnect" href="https://fonts.gstatic.com">

  <link rel="stylesheet" href="css/bootstrap-grid.min.css" />
  <link rel="stylesheet" href="css/main.css" />
  <title>Login</title>
</head>

<body>
  <div class="rd-page-wrapper ">
    <div class="rd-modal-login rd-bg-black ">
      <div class="rd-modal-body  ">

        <h1 class="rd-text-green rd-text-aling ">Cadastrar</h1>
        <form class="rd-form" method="POST">
          <input class="rd-btn rd-btn-large rd-btn-border " type="text" name="nome" placeholder="Nome completo" maxlength="30" required>
          <input class="rd-btn rd-btn-large rd-btn-border" type="text" name="telefone" placeholder="Telefone" maxlength="30" required>
          <input class="rd-btn rd-btn-large rd-btn-border" type="email" name="email" placeholder="Email" maxlength="40" required>
          <input class="rd-btn rd-btn-large  rd-btn-border" type="password" name="senha" placeholder="Senha" maxlength="15" required>
          <input class="rd-btn rd-btn-large  rd-btn-border" type="password" name="confSenha" placeholder="Confirmar Senha" maxlength="15" required>
          <input class="rd-btn rd-btn-large rd-btn-green rd-btn-border" type="submit" value="Cadastrar">
          <p class=" rd-text-light rd-text-aling">Já se cadastrou? <a class=" rd-text-light rd-text-decoration " href="index.php">
              <strong class=" rd-text-green">Entrar</strong></a></p>

        </form>
      </div>
    </div>
  </div>
  <?php

  if (isset($_POST['nome'])) {

    $nome = addslashes($_POST['nome']);
    $telefone = addslashes($_POST['telefone']);
    $email = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);
    $conf_senha = addslashes($_POST['confSenha']);

    if (!empty($nome) && !empty($telefone) && !empty($email) && !empty($senha) && !empty($conf_senha)) {

      $u->conectar("rdgames", "localhost", "root", "");

      if ($senha == $conf_senha) {

        if ($u->cadastrar($nome, $telefone, $email, $senha)) {
          echo " Cadastrado com sucesso! Acesse para entrar";
        } else {
          echo "Email já cadastrado";
        }
      } else {
        echo "Senha e confirmar senha não correspondem";
      }
    } else {
      echo "Error: " . $u->msgError;
    }
  } 
  ?>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/noframework.waypoints.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/shortcuts/inview.min.js"></script>
  <script src="js/main.js"></script>
  <script src="js/anime.js"></script>
</body>

</html>
