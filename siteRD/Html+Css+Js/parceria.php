<?php
error_reporting(E_ALL);
require_once '../CLASSE/patrocinio.php';
$u = new Patrocinio();
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

  <header class="rd-topbar">
    <div class="rd-logo">
      <img src="images/logo.svg" alt="logo Reborn Dream" />
    </div>
    <nav class="rd-menu">
      <a href="home.html">Home</a>
      <a href="sobre.html">Sobre</a>
      <a href="projetos.html">Projetos</a>
      <a href="equipe.html">Equipe</a>
      <a href="fandon.html">Fandon</a>
      <a href="parceria.php">Parcerias</a>
    </nav>

    <nav class="rd-menu-mob">
      <a href="home.html">Home</a>
      <a href="sobre.html">Sobre</a>
      <a href="projetos.html">Projetos</a>
      <a href="equipe.html">Equipe</a>
      <a href="fandon.html">Fandon</a>
      <a href="parceria.php">Parcerias</a>
    </nav>
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
        <a href="#" class="rd-social">
          <img src="images/icon-twitter.svg" alt="Twiter" />
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

  <div class="rd-page-wrapper">
    <section class="rd-full-height" id="rd-home-patrocinador">

      <div class="col-sm-8 col-md-4 rd-display-parceiros rd-mar-left-15">

        <h1 class="rd-title rd-text-green rd-title-big">Parceiros!</h1>

        <p class="rd-text-light rd-text-subs ">
          Se você tem sua <span class="rd-text-green">Empresa</span> e
          quer ter sua logomarca em nossos games, e so você preencher
          o formulário que estaremos entrando em contato com vocês.
        <p class="rd-text-light rd-text-subs"><span class="rd-text-green"> Torne-se um de nós.</span></p>
        </p>

      </div>

      <form class="rd-form" method="POST">
        <div class=" col-md-7 rd-mar-top-15 ">
          <input class=" rd-textarea " type="text" name="nome" placeholder="Empresa" maxlength="30">
        </div>

        <div class="col-md-7 rd-mar-top-15">
          <input class=" rd-textarea" type="text" name="telefone" placeholder="Telefone" maxlength="30">
        </div>

        <div class="col-md-7 rd-mar-top-15">
          <input class=" rd-textarea" type="email" name="email" placeholder="Email" maxlength="40">
        </div>

        <div class="col-md-7  rd-mar-top-15 ">
          <input class=" rd-textarea " type="text" name="pedido" placeholder="Tipo de parceria" maxlength="200">
        </div>

        <div class=" rd-mar-top-15 rd-mar-left-15">
          <input class="rd-btn rd-btn-large rd-btn-green rd-btn-border " type="submit" value="Solicitar">

        </div>
      </form>
  </div>


  <?php
  if (isset($_POST['nome'])) {

    $nome = addslashes($_POST['nome']);
    $telefone = addslashes($_POST['telefone']);
    $email = addslashes($_POST['email']);
    $pedido = addslashes($_POST['pedido']);

    if (!empty($nome) && !empty($telefone) && !empty($email) && !empty($pedido)) {

      $u->conectar("rdgames", "localhost", "root", "");


      if ($u->cadastrar($nome, $telefone, $email, $pedido)) {
      }
    }
  }

  ?>



  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/noframework.waypoints.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/shortcuts/inview.min.js"></script>
  <script src="js/main.js"></script>
  <script src="js/anime.js"></script>
</body>

</html> 
