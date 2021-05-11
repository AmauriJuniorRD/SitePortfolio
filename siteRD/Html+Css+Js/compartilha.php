<?php require_once 'compartilhaprocess.php' ?>
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
  <title>Reborn Dream</title>
</head>

<header class="rd-topbar">
  <div class="rd-logo">
    <img src="images/logo.svg" alt="logo Reborn Dream" />
  </div>
  <nav class="rd-menu">
    <a href="home.html">Home</a>
    <a href="sobre.html">Sobre</a>
    <a href="projetos.html">Projetos</a>
    <a href="equipe.html">Equipe</a>
    <a href="game.php">Fandon</a>
    <a href="parceria.php">Parcerias</a>
  </nav>

  <nav class="rd-menu-mob">
    <a href="home.html">Home</a>
    <a href="sobre.html">Sobre</a>
    <a href="projetos.html">Projetos</a>
    <a href="equipe.html">Equipe</a>
    <a href="game.php">Fandon</a>
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

  <?php
  $mysqli = new mysqli('localhost', 'root', '', 'rdgames') or die(mysqli_error($mysqli));
  $result = $mysqli->query("SELECT * FROM compartilha") or die($mysql->error);

  ?>
  <div class="row justify-content-center rd-display-parceiros rd-text-light col-sm-12 col-md-6 offset-md-3">
    <h1 class="rd-title rd-title-large rd-text-green">Developer Indie</h1>
    <p class="rd-text-subs">
      Aqui você que é desenvolvedor indei pode compartilhar os links de seu game,
      podendo divulgar seus serviços e atingindo um público maior para seu game, e
      quem sabe você consiga um patrocinador!!
    </p>
  </div>
  <hr class="rd-display-crud" width=“2” size=“100”>
  <div class="row justify-content-center rd-display-crud">
    <table class="table">
      <thead>
        <tr>

          <th class="rd-btn-recrut rd-title-recrut rd-text-light ">Equipe</th>
          <th class="rd-btn-recrut rd-title-recrut rd-text-light ">Lançamento</th>
          <th class="rd-btn-recrut rd-title-recrut rd-text-light ">Seu Game</th>
          <th class="rd-btn-recrut rd-title-recrut rd-text-light " colspan="2">Ações</th>
        </tr>
      </thead>

      <?php
      while ($row = $result->fetch_assoc()) : ?>
        <tr>
          <td class="rd-btn-recrut rd-title-recrut rd-text-light "><?php echo $row['equipe']; ?></td>
          <td class="rd-btn-recrut rd-title-recrut rd-text-light "><?php echo $row['data_lanc']; ?></td>
          <td class="rd-btn-recrut rd-title-recrut rd-text-light row justify-content-center"><?php echo "<a href="  . $row['link'] . " >link</a>"; ?></td>
          <td>
            <a href="compartilha.php?edit=<?php echo $row['id_usuario']; ?> " class="rd-text-decoration rd-btn-crud rd-btn-blue ">Editar</a>
            <a href="compartilhaprocess.php?delete=<?php echo $row['id_usuario']; ?> " class="rd-text-decoration rd-btn rd-btn-crud rd-btn-red">Deletar</a>
          </td>
        </tr>
      <?php endwhile; ?>
    </table>
  </div>


  <?php
  function pre_r($array)
  {
    echo '<pre>';
    print_r($array);
    echo '<pre>';
  }

  ?>
  <hr class="rd-display-crud" width=“2” size=“100”>
  <div class="row justify-content-center rd-display-parceiros">
    <form action="compartilhaprocess.php" method="POST">
      <input type="hidden" name="id_usuario" value="<?php echo $id_usuario; ?>">
      <?php
      if ($update == true) :
      ?>
        <h2 class="rd-text-blue row justify-content-center">Atualize seus dados</h2>
      <?php else : ?>
        <h2 class=" rd-text-green row justify-content-center">Insira seus dados</h2>
      <?php endif ?>
      <div class="form-group">
        <input class=" form-control rd-btn rd-btn-large rd-btn-border" type="text" name="equipe" value="<?php echo $equipe; ?>" placeholder="Equipe" maxlength="30">
      </div>

      <div class="form-group">
        <input class=" form-control rd-btn rd-btn-large rd-btn-border" type="text" name="data_lanc" value="<?php echo $data_lanc; ?>" placeholder="Data de lançamento" maxlength="30">
      </div>
      <div class="form-group">
        <input class=" form-control rd-btn rd-btn-large rd-btn-border" type="text" name="link" value="<?php echo $link; ?>" placeholder="Link" maxlength="400">
      </div>
      <div class="form-group">
        <?php
        if ($update == true) :
        ?>
          <div class="row justify-content-center rd-mar-top-15 rd-mar-bottom-15">
            <button class="rd-btn rd-btn-large rd-btn-blue rd-btn-border" type="submit" name="update">Atualizar</button>
          </div>
        <?php else : ?>
          <div class="row justify-content-center rd-mar-top-15 rd-mar-bottom-15">
            <button class="rd-btn rd-btn-large rd-btn-green rd-btn-border" type="submit" name="save">Cadastrar</button>
          </div>
        <?php endif ?>
      </div>
    </form>
  </div>
  </body>

</html>