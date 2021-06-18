<?php
error_reporting(E_ALL);
require_once '../CLASSE/orcagame.php';
$u = new orcamento();
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
  <header class="rd-topbar">
    <div class="rd-logo">
      <img src="images/logo.svg" alt="logo Reborn Dream" />
    </div>
    <nav class="rd-menu">
      <a href="home.php">Home</a>
      <a href="sobre.php">Sobre</a>
      <a href="projetos.php">Projetos</a>
      <a href="equipe.php">Equipe</a>
      <a href="dev.php">Devs</a>
      <a href="parceria.php">Parcerias</a>
    </nav>

    <nav> <a href="logout.php" class="rd-text-decoration"> <button class="rd-btn rd-btn-logout rd-btn-red ">Logout</button> </a></nav>

    <nav class="rd-menu-mob">
      <a href="home.php">Home</a>
      <a href="sobre.php">Sobre</a>
      <a href="projetos.php">Projetos</a>
      <a href="equipe.php">Equipe</a>
      <a href="dev.php">Devs</a>
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

  <div class="rd-page-wrapper ">
    <section class="rd-full-height rd-mar-left-15" id="rd-crud-manete">

      <div class="col-sm-8 col-md-4 rd-display-parceiros row justify-content-center rd-mar-recrut">

        <h1 class="rd-text-aling rd-title rd-text-green rd-title-medium">Desenvolvedores e Gamers</h1>

        <p class="rd-text-light rd-text-subs ">
          Aqui você pode mostrar seu <span class="rd-text-green">Game</span> que fez,
          pode deixar sua opnião sobre nossos games e montar sua equipe de desenvolvimento,
          então <span class="rd-text-green">Chega mais!!</span>

        <p class="rd-text-light rd-text-subs"><span class="rd-text-green"> Torne-se um de nós.</span></p>
        </p>

      </div>

      <div class=" col-md-5 rd-mar-top-15 ">
        <a href="game.php" class="rd-text-decoration"> <button class="rd-btn rd-btn-large rd-btn-clear rd-btn-block">Game favorito</button> </a>
      </div>

      <div class="col-md-5 rd-mar-top-15">
        <a href="compartilha.php" class="rd-text-decoration"> <button class="rd-btn rd-btn-large rd-btn-clear rd-btn-block">Compartilhe seu Game</button> </a>
      </div>

      <div class="col-md-5 rd-mar-top-15">
        <a href="recrutamento.php" class="rd-text-decoration"> <button class="rd-btn rd-btn-large rd-btn-clear rd-btn-block">Monte sua Equipe</button></a>
      </div>

      <div class="col-md-5  rd-mar-top-15 ">
        <a href="amigosgame.php" class="rd-text-decoration"> <button class="rd-btn rd-btn-large rd-btn-clear rd-btn-block">Jogue com Amigos</button> </a>
      </div>


  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/noframework.waypoints.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/shortcuts/inview.min.js"></script>
  <script src="js/main.js"></script>
  <script src="js/anime.js"></script>

</body>

</html>
