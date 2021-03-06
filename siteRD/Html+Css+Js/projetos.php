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
                    <h1 class="rd-title rd-title-large rd-mar-bottom-15">Camp-Quiz Sobrenatural</h1>
                    <p class="rd-mar-bottom-30 rd-text-subs">Um quiz para os amantes da serie Sobrenatural
                      O que você ta esperando,‘caçar coisas , matar coisas o negocio da família’.</p>
                    <div class="row rd-mar-top-15">
                      <div class="col-sm-12 col-md-6">
                        <a href="https://m.apkpure.com/br/quiz-sobrenatural/com.PlayerBrotherGames.QuizSobrenatural" target="_blank" class="rd-text-decoration"> <button class="rd-btn rd-btn-large rd-btn-green rd-btn-border">Download</button> </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="rd-portfolio-item-thumb">
                    <div class="rd-portfolio-item-box" data-aos="zoom-in"></div>
                    <img src="images/sobrenatural.png" alt="QuizSobrenatural" title="QuizSobrenatura" data-aos="flip-left" data-aos-offset="300" data-aos-delay="300" />

                  </div>
                </div>
              </div>
            </li>

            <li class="rd-portfolio-item" data-slide="2">
              <div class="row">
                <div class="col-sm-5">
                  <div class="rd-portfolio-item-info rd-text-light" data-aos-delay="200" data-aos="fade-left">
                    <h1 class="rd-title rd-title-large rd-mar-bottom-15 ">Camp-Quiz Free Fire</h1>
                    <p class="rd-mar-bottom-30 rd-text-subs">Você que é apaixonado por Free Fire
                      o que acha de um novo desafio.
                      O que você ta esperando, Bora sair da Platina kkk.
                    </p>
                    <div class="row rd-mar-top-15">
                      <div class="col-sm-12 col-md-6">
                        <a href="https://reborn-dream.itch.io/quiz-sobre-free-fire" target="_blank" class="rd-text-decoration"> <button class="rd-btn rd-btn-large rd-btn-green rd-btn-border">Download</button> </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="rd-portfolio-item-thumb">
                    <div class="rd-portfolio-item-box" data-aos="zoom-in"></div>
                    <img src="images/Free fire.png" alt=" Quiz Free Fire" title="Quiz Free Fire" data-aos="flip-left" data-aos-offset="300" data-aos-delay="300" />

                  </div>
                </div>
              </div>

            </li>
            <li class="rd-portfolio-item" data-slide="3">
              <div class="row">
                <div class="col-sm-5">
                  <div class="rd-portfolio-item-info rd-text-light" data-aos-delay="200" data-aos="fade-right">
                    <h1 class="rd-title rd-title-large rd-mar-bottom-15 ">Camp-Quiz Biblico</h1>
                    <p class="rd-mar-bottom-30 rd-text-subs">Um quiz para você que quer a prender mais da palavra de
                      Deus.
                    </p>
                    <div class="row rd-mar-top-15">
                      <div class="col-sm-12 col-md-6">
                        <a href="https://m.apkpure.com/br/quiz-b%C3%ADblico/com.RebornDream.QuizBiblico" target="_blank" class="rd-text-decoration"> <button class="rd-btn rd-btn-large rd-btn-green rd-btn-border">Download</button> </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="rd-portfolio-item-thumb">
                    <div class="rd-portfolio-item-box" data-aos="zoom-in"></div>
                    <img src="images/Biblico.png" alt="Quiz Biblico" title="Quiz Biblico" data-aos="flip-left" data-aos-offset="300" data-aos-delay="300" />

                  </div>
                </div>
              </div>

            </li>
            <li class="rd-portfolio-item" data-slide="4">
              <div class="row">
                <div class="col-sm-5">
                  <div class="rd-portfolio-item-info rd-text-light" data-aos-delay="200" data-aos="fade-left">
                    <h1 class="rd-title rd-title-large rd-mar-bottom-15 ">Camp-Quiz Enem nota 1000</h1>
                    <p class="rd-mar-bottom-30 rd-text-subs">Esse aplicativo tem como objetivo auxiliar as pessoas que
                      iram realizar
                      o Enem,
                      Testando assim seus conhecimentos referentes às áreas que são utilizadas
                      nessa importante prova!!!
                    </p>
                    <div class="row rd-mar-top-15">
                      <div class="col-sm-12 col-md-6">
                        <a href="https://reborn-dream.itch.io/enem-nota-1000" target="_blank" class="rd-text-decoration"> <button class="rd-btn rd-btn-large rd-btn-green rd-btn-border">Download</button> </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="rd-portfolio-item-thumb">
                    <div class="rd-portfolio-item-box" data-aos="zoom-in"></div>
                    <img src="images/enem.png" alt="Quiz Enem" title="Quiz Enem" data-aos="flip-left" data-aos-offset="300" data-aos-delay="300" />

                  </div>
                </div>
              </div>

            </li>
            <li class="rd-portfolio-item" data-slide="5">
              <div class="row">
                <div class="col-sm-5">
                  <div class="rd-portfolio-item-info rd-text-light" data-aos-delay="200" data-aos="fade-right">
                    <h1 class="rd-title rd-title-large rd-mar-bottom-15 ">Camp-Quiz Loud</h1>
                    <p class="rd-mar-bottom-30 rd-text-subs">Se você é um grande fã dessa org venha testar seus
                      conhecimentos, e ver
                      se você
                      sabe tudo mesmo sobre a Loud.
                      Faz o L.
                    </p>
                    <div class="row rd-mar-top-15">
                      <div class="col-sm-12 col-md-6">
                        <a href="https://reborn-dream.itch.io/campquiz-loud" target="_blank" class="rd-text-decoration">
                          <button class="rd-btn rd-btn-large rd-btn-green rd-btn-border">Download</button> </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="rd-portfolio-item-thumb">
                    <div class="rd-portfolio-item-box" data-aos="zoom-in"></div>
                    <img src="images/loud.png" alt="Quiz Loud" title="Quiz Loud" data-aos="flip-left" data-aos-offset="300" data-aos-delay="300" />

                  </div>
                </div>
              </div>
            </li>

            <li class="rd-portfolio-item" data-slide="6">
              <div class="row">
                <div class="col-sm-5">
                  <div class="rd-portfolio-item-info rd-text-light" data-aos-delay="200" data-aos="fade-left">
                    <h1 class="rd-title rd-title-large rd-mar-bottom-15 ">Guia sobre Coronavirus</h1>
                    <p class="rd-mar-bottom-30 rd-text-subs">Este aplicativo foi desenvolvido pela equipe Reborn Dream
                      para poder
                      ajudar
                      a população nesse período de duvidas e incertezas com informações uteis sobre o Coronavírus
                      (COVID-19),
                      para que possa ficar a par sobre todas as informações oficiais que rondam esse novo vírus.
                    </p>
                    <div class="row rd-mar-top-15">
                      <div class="col-sm-12 col-md-6">
                        <a href="https://reborn-dream.itch.io/guia-sobre-coronavirus" target="_blank" class="rd-text-decoration">
                          <button class="rd-btn rd-btn-large rd-btn-green rd-btn-border">Download</button> </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="rd-portfolio-item-thumb">
                    <div class="rd-portfolio-item-box" data-aos="zoom-in"></div>
                    <img src="images/Corona.png" alt="Guia sobre coronavirus" title="Guia sobre coronavirus" data-aos="flip-left" data-aos-offset="300" data-aos-delay="300" />

                  </div>
                </div>
              </div>
            </li>

            <li class="rd-portfolio-item" data-slide="7">
              <div class="row">
                <div class="col-sm-5">
                  <div class="rd-portfolio-item-info rd-text-light" data-aos-delay="200" data-aos="fade-right">
                    <h1 class="rd-title rd-title-large rd-mar-bottom-15 ">Tijolinho</h1>
                    <p class="rd-mar-bottom-30 rd-text-subs">Esse jogo foi feito pela equipe Reborn Dream e foi
                      inspirado em uma
                      piada feita pelo Youtuber alanzoka. O objetivo do jogo é bem simples porém não tão fácil, desviar
                      dos
                      objetos e sobreviver o máximo possível.
                    </p>
                    <div class="row rd-mar-top-15">
                      <div class="col-sm-12 col-md-6">
                        <a href="https://m.apkpure.com/br/tijolinho/com.RebornDream.Tijolinho" target="_blank" class="rd-text-decoration">
                          <button class="rd-btn rd-btn-large rd-btn-green rd-btn-border">Download</button> </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="rd-portfolio-item-thumb">
                    <div class="rd-portfolio-item-box" data-aos="zoom-in"></div>
                    <img src="images/tijolinho.png" alt="Tijolinho" title="Tijolinho" data-aos="flip-left" data-aos-offset="300" data-aos-delay="300" />

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
