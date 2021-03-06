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

  <div class="rd-preloader">
    <div class="rd-preloader-inner">
      <img src="images/rd-preloader.svg" />
      <p aling="center" class="rd-text-light rd-mar-top-15">Aguarde um pouquinho ... Estamos produzindo o seu novo
        game!!</p>
    </div>
  </div>

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
    <section class="rd-full-height rd-first-section" id="rd-home-presentation">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12 col-md-3 offset-md-1 rd-display-text">

            <h1 class="rd-title rd-text-green rd-title-big">Olá!</h1>

            <p class="rd-text-light rd-text-subs">
              Se você quer ter o seu proprio <span class="rd-text-green">Game</span> e
              não sabe como fazer isso você está no lugar certo, aqui
              desenvolvemos seus jogos com muito amor e carinho.
              <span class="rd-text-green"> De Gamer para Gamer.</span>
            </p>

            <div class="row rd-mar-top-15">
              <div class="col-sm-12 col-md-6">
                <a href="orcamento.php" class="rd-text-decoration"> <button class="rd-btn rd-btn-large rd-btn-green rd-btn-block">Orçamento</button> </a>
              </div>
            </div>

          </div>
        </div>
        <div class="rd-scroll-down">
          <div class="rd-arrow-down">
            <img src="images/arrow-down.svg" alt="Role a Página" />
          </div>
        </div>
    </section>

    <section class="rd-full-height" id="rd-home-banner">
      <div>
        <div class="row">
          <div class="col-sm-12 col-md-4 offset-md-1 rd-display-text">

            <h1 class="rd-title rd-text-green rd-title-big">Gamer</h1>

            <p class="rd-text-light rd-text-subs">
              Se você sempre foi um amante de <span class="rd-text-green"> games</span>, e sonha em um dia ter o seu
              proprio jogo eu te digo, você está no lugar certo.
              Nós da <span class="rd-text-green"> Reborn Dream </span> assim como você somos grandes amantes dos
              games,
              e estamos aqui para te ajudar a ter seu proprio <span class="rd-text-green"> game </span>, seja para se
              divertir com seus amigos quanto para
              ganhar aquela graninha lançando seu jogo para a grande massa poder jogar.
              <span class="rd-text-green"> E ai bora Jogar? </span>
            </p>

            <div class="row rd-mar-top-15">
              <div class="col-sm-12 col-md-6">
                <a href="https://www.vakinha.com.br/vaquinha/compra-de-equipamentos-luiz-claudio-francisco-olegario" target="_blank" class="rd-text-decoration"> <button class="rd-btn rd-btn-large rd-btn-green rd-btn-block">Apoie</button> </a>
              </div>
            </div>

          </div>
        </div>

      </div>
    </section>

    <section class="rd-full-height" id="rd-home-venda">
      <div>
        <div class="row">
          <div class="col-sm-12 col-md-4 offset-md-1 rd-display-text">

            <h1 class="rd-title rd-text-green rd-title-big">Developer</h1>

            <p class="rd-text-light rd-text-subs">
              Se você tem um <span class="rd-text-green">Game</span> guardado ai no fundo
              do seu hd e não quer lançar venha até nós
              que podemos fazer uma bela <span class="rd-text-green">parceria</span> e comprar seu jogo
              e você enfim verá ele em várias plataformas de <span class="rd-text-green">download.</span></p>
            <p class="rd-text-light rd-text-subs">
              <span class="rd-text-green"> Não perca essa oportunidade!!</span>
            </p>

            <div class="row rd-mar-top-15">
              <div class="col-sm-12 col-md-6">
                <a href="vendagame.php" class="rd-text-decoration"> <button class="rd-btn rd-btn-large rd-btn-green rd-btn-block">Vamos
                    Conversar</button> </a>
              </div>
            </div>

          </div>
        </div>

      </div>
    </section>

  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/noframework.waypoints.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/shortcuts/inview.min.js"></script>
  <script src="js/main.js"></script>
  <script src="js/anime.js"></script>

</body>

</html>
