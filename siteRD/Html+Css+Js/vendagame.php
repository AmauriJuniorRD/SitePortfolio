<?php
error_reporting(E_ALL);
require_once '../CLASSE/vendas.php';
$u = new venda();
?>

<?php
include("protect.php");
protect();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="preconnect" href="https://fonts.gstatic.com">

  <link rel="stylesheet" type="text/css" href="css/bootstrap-grid.min.css" />
  <link rel="stylesheet" type="text/css" href="css/main.css" />
  <title>Reborn Dream</title>
</head>

<body>

  <div class="rd-page-wrapper ">
    <div class="rd-modal rd-bg-black ">
      <div class="rd-modal-body  ">

        <h1 class="rd-text-green rd-text-aling ">Venda seu Game</h1>
        <p class=" rd-text-light rd-text-aling"> Se você começou seu projeto ou já está pronto mais não deseja lançar,
          nós compramos.
        </p>
        <form class="rd-form" method="POST">

          <div class="col-sm-12 col-md-12 rd-mar-top-15 rd-mar-bottom-15">
            <input class=" rd-textarea " type="text" name="nome" placeholder="Nome completo" maxlength="30">
          </div>

          <div class="col-sm-12 col-md-12 rd-mar-top-15 rd-mar-bottom-15">
            <input class=" rd-textarea" type="text" name="telefone" placeholder="Telefone" maxlength="30">
          </div>

          <div class="col-sm-12 col-md-12 rd-mar-top-15 rd-mar-bottom-15">
            <input class=" rd-textarea" type="email" name="email" placeholder="Email" maxlength="40">
          </div>

          <div class="col-sm-12 col-md-12 rd-mar-top-15 rd-mar-bottom-15 ">
            <input class=" rd-textarea " type="text" name="descricao" placeholder="Faça uma breve descrição do seu game" maxlength="200">
          </div>

          <div class="row justify-content-center rd-mar-top-15">
            <input class="rd-btn rd-btn-large rd-btn-green rd-btn-border" type="submit" value="Vender">

          </div>
          <p class=" rd-text-light rd-text-aling">Já nos mandou seu game? <a class=" rd-text-light rd-text-decoration " href="home.php">
              <strong class=" rd-text-green">Retornar</strong></a></p>


        </form>
      </div>
    </div>
  </div>

  <?php
  if (isset($_POST['nome'])) {

    $nome = addslashes($_POST['nome']);
    $telefone = addslashes($_POST['telefone']);
    $email = addslashes($_POST['email']);
    $descricao = addslashes($_POST['descricao']);

    if (!empty($nome) && !empty($telefone) && !empty($email) && !empty($descricao)) {

      $u->conectar("rdgames", "localhost", "root", "");


      if ($u->cadastrar($nome, $telefone, $email, $descricao)) {
      }
    }
  }

  ?>

  <header class="rd-topbar">
    <div class="rd-logo">
      <img src="images/logo.svg" alt="logo Reborn Dream" />
    </div>

  </header>

  <div class="rd-contact-info rd-bg-black rd-text-light">
    <div class="rd-contact-info-inner">
      <h2 class="rd-title rd-text-green">Contato</h2>
      <p>reborndream@gmail.com</p>
      <p>+55 (32)984707070</p>
      <div class="rd-social-links">
        <a href="https://www.instagram.com/reborn_dream_sd/?hl=da" target="_blank" class="rd-social">
          <img src="images/icon-instagram.svg" alt="Instagram" />
        </a>
        <a href="https://www.facebook.com/reborndreamSD" target="_blank" class="rd-social">
          <img src="images/face.svg" alt="Facebook" />
        </a>
      </div>
    </div>
    <div class="rd-corner">

    </div>

  </div>
  <button class="rd-btn-contact">
  </button>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/noframework.waypoints.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/shortcuts/inview.min.js"></script>
  <script src="js/main.js"></script>
  <script src="js/anime.js"></script>

</body>

</html>
