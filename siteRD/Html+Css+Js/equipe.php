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
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
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

  <div class="rd-page-wrapper">
    <section class="container-fluid rd-section-offset-top">
      <div class="row">
        <div class="col-sm-10 offset-sm-1">
          <ul class="rd-portfolio-list">
            <li class="rd-portfolio-item" data-slide="1">
              <div class="row">
                <div class="col-sm-5">
                  <div class="rd-portfolio-item-info rd-text-light" data-aos-delay="200" data-aos="fade-right">
                    <h1 class="rd-title rd-title-large rd-mar-bottom-15 rd-text-green">Amauri Junior</h1>
                    <p class="rd-mar-bottom-30 rd-text-subs"> Idade: 21 anos </p>
                    <p class="rd-mar-bottom-30 rd-text-subs">
                      Função: Programador, é o responsável por
                      escrever os códigos que irão possibilitar
                      desenvolver todas as funcionalidades do
                      game. Também é o criador deste belo site que você está vendo.
                    </p>
                    <div class="row rd-mar-top-15">
                      <div class="col-sm-12 col-md-6">
                        <a href="https://www.instagram.com/amaurijunior_rd/" target="_blank" class="rd-text-decoration">
                          <button class="rd-btn rd-btn-large rd-btn-green rd-btn-border">Instagram</button> </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="rd-portfolio-item-thumb">
                    <div class="rd-portfolio-item-box" data-aos="zoom-in"></div>
                    <img src="images/amauriRD.png" alt="Amauri Junior" title="Amauri Junior" data-aos="flip-left" data-aos-offset="300" data-aos-delay="300" />

                  </div>
                </div>
              </div>
            </li>

            <li class="rd-portfolio-item" data-slide="2">
              <div class="row">
                <div class="col-sm-5">
                  <div class="rd-portfolio-item-info rd-text-light" data-aos-delay="200" data-aos="fade-left">
                    <h1 class="rd-title rd-title-large rd-mar-bottom-15 rd-text-green">Hudson Lucas</h1>
                    <p class="rd-mar-bottom-30 rd-text-subs"> Idade: 26 anos </p>
                    <p class="rd-mar-bottom-30 rd-text-subs">
                      Função: É responsável pelo desenvolvimento
                      da arte do jogo que pode envolver desde a
                      criação dos personagens, arte dos
                      cenários e até mesmo elementos gráficos de
                      interface.
                    </p>
                    <div class="row rd-mar-top-15">
                      <div class="col-sm-12 col-md-6">
                        <a href="https://www.instagram.com/hudsonlucas.art/" target="_blank" class="rd-text-decoration">
                          <button class="rd-btn rd-btn-large rd-btn-green rd-btn-border">Instagram</button> </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="rd-portfolio-item-thumb">
                    <div class="rd-portfolio-item-box" data-aos="zoom-in"></div>
                    <img src="images/hudsonRD.png" alt="Hudson Lucas" title="Hudson Lucas" data-aos="flip-left" data-aos-offset="300" data-aos-delay="300" />

                  </div>
                </div>
              </div>

            </li>
            <li class="rd-portfolio-item" data-slide="3">
              <div class="row">
                <div class="col-sm-5">
                  <div class="rd-portfolio-item-info rd-text-light" data-aos-delay="200" data-aos="fade-right">
                    <h1 class="rd-title rd-title-large rd-mar-bottom-15 rd-text-green">Luiz Cláudio</h1>
                    <p class="rd-mar-bottom-30 rd-text-subs"> Idade: 23 anos </p>
                    <p class="rd-mar-bottom-30 rd-text-subs">
                      Função: É o responsável por cuidar da parte do Marketing
                      dos games, e da criação das histórias centralizandos as ideias em uma só.
                    </p>
                    <div class="row rd-mar-top-15">
                      <div class="col-sm-12 col-md-6">
                        <a href="https://www.instagram.com/billiontharc00.lcfo/" target="_blank" class="rd-text-decoration"> <button class="rd-btn rd-btn-large rd-btn-green rd-btn-border">Instagram</button> </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="rd-portfolio-item-thumb">
                    <div class="rd-portfolio-item-box" data-aos="zoom-in"></div>
                    <img src="images/luizRD.jpg" alt="Luiz Claudio" title="Luiz Claudio" data-aos="flip-left" data-aos-offset="300" data-aos-delay="300" />

                  </div>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </section>
  </div>

  </div>

  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="js/main.js"></script>

  <script>
    AOS.init();
  </script>
</body>

</html>
