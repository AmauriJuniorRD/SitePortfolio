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
    <section class="rd-section-offset-top">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6">
            <div class="rd-box-img">

              <img class="rd-img-responsive" src="images/rd-equipe.png" alt="Equipe" title="Equipe" />
            </div>

          </div>
          <div class="col-sm-5">
            <div class="row">
              <div class="col-sm-12 rd-mar-bottom-30">
                <h1 class="rd-title-medium rd-text-light">
                  Reborn <span class="rd-text-green">Dream</span>
                </h1>
              </div>
              <div class="col-sm-7 rd-text-light">
                <h2 class=" rd-text-green rd-mar-bottom-15">Um pouco sobre nós</h2>
                <p class=" rd-text-subs">Somos uma equipe de amigos do interior de Minas Gerais
                  que trabalha em todas as áreas relacionadas a games
                  fazendo desenvolvimento de jogos, torneios e livestreams.
                  Como eu disse assim como vocês somos grandes amantes de Games.</p>

                <div class="rd-contact-info-inner rd-mar-top-30">
                  <div class="rd-social-links-circle rd-mar-bottom-15">
                    <a class="rd-social rd-bg-dark rd-mar-right-15" href="https://www.instagram.com/reborn_dream_sd/?hl=da" target="_blank">
                      <img src="images/icon-instagram.svg" alt="Instagram" />
                    </a>
                    <a class="rd-social rd-bg-dark rd-mar-right-15" href="https://www.facebook.com/reborndreamSD" target="_blank">
                      <img src="images/face.svg" alt="Facebook" />
                    </a>
                  </div>
                  <p class=" rd-text-subs">reborn<span class="rd-text-green">dream</span>@gmail.com</p>
                  <p class=" rd-text-subs">+55 (32)984707070</p>
                </div>

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

  <script>
    AOS.init();
  </script>

</body>

</html>
