<?php
error_reporting(E_ALL);
require_once '../CLASSE/usuarios.php';
$u = new Usuario();
?>

<!DOCTYPE html>
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

        <h1 class="rd-text-green rd-text-aling">Entrar</h1>
        <form class="rd-form " method="POST">

          <input class="rd-btn rd-btn-large rd-btn-border" type="email" name="email" placeholder="Usuário">
          <input class="rd-btn rd-btn-large  rd-btn-border" type="password" name="senha" placeholder="Senha">
          <input class="rd-btn rd-btn-large rd-btn-green rd-btn-border" type="submit" value="ACESSAR">
          <p class=" rd-text-light rd-text-aling"> Ainda não está casdastrado? <a class=" rd-text-light rd-text-decoration " href="cadastrar.php"><strong class=" rd-text-green">Cadastre-se</strong></a></p>

        </form>
      </div>
    </div>
  </div>

  <?php
  if (isset($_POST['email'])) {

    $email = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);

    if (!empty($email) && !empty($senha)) {

      $u->conectar("projeto_login", "localhost", "root", "");

      if ($u->msgError == "") {

        if ($u->logar($email, $senha)) {
          header("location: home.html");
        } else {
          echo "Error: " . $u->msgError;
        }
      } else {
        echo "Senha e confirmar senha não correspondem";
      }
    } else {

      echo "Email já cadastrado";
    }
  }


  ?>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/noframework.waypoints.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/shortcuts/inview.min.js"></script>
  <script src="js/main.js"></script>
  <script src="js/anime.js"></script>
</body>

</html>