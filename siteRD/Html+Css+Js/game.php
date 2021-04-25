<?php require_once 'gameprocess.php'; ?>
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


<div class="rd-page-wrapper ">

  <?php
  $mysqli = new mysqli('localhost', 'root', '', 'rdgames') or die(mysqli_error($mysqli));
  $result = $mysqli->query("SELECT * FROM game") or die($mysql->error);

  ?>
  <div class="row justify-content-left rd-display-parceiros">
    <table class="table">
      <thead>
        <tr>

          <th class=" rd-btn-large rd-title-large rd-text-light ">Nome</th>
          <th class=" rd-btn-large rd-title-large rd-text-light ">Idade</th>
          <th class="rd-btn-large rd-title-large rd-text-light ">Game Favorito</th>
          <th class="rd-btn-large rd-title-large rd-text-light " colspan="2">Ações</th>
        </tr>
      </thead>

      <?php
      while ($row = $result->fetch_assoc()) : ?>
        <tr>
          <td class=" rd-btn-large rd-subs-crud rd-text-light "><?php echo $row['nome']; ?></td>
          <td class="rd-btn-large rd-subs-crud rd-text-light "><?php echo $row['idade']; ?></td>
          <td class="rd-btn-large rd-subs-crud rd-text-light "><?php echo $row['jogosrd']; ?></td>
          <td>
            <a href="game.php?edit=<?php echo $row['id_usuario']; ?> " class="rd-text-decoration  rd-btn-large rd-btn-green rd-btn-border">Editar</a>
            <a href="gameprocess.php?delete=<?php echo $row['id_usuario']; ?> " class="rd-text-decoration rd-btn rd-btn-large rd-btn-red rd-btn-border">Deletar</a>
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

  <div class="row justify-content-center rd-display-parceiros">
    <form action="gameprocess.php" method="POST">
      <input type="hidden" name="id_usuario" value="<?php echo $id_usuario; ?>">

      <div class="form-group">

        <input class=" form-control rd-btn rd-btn-large rd-btn-border" type="text" name="nome" value="<?php echo $nome; ?>" placeholder="Nome" maxlength="30">
      </div>

      <div class="form-group">
        <input class=" form-control rd-btn rd-btn-large rd-btn-border" type="text" name="idade" value="<?php echo $idade; ?>" placeholder="Idade" maxlength="10">
      </div>
      <div class="form-group">
        <input class=" form-control rd-btn rd-btn-large rd-btn-border" type="text" name="jogosrd" value="<?php echo $jogosrd; ?>" placeholder="Game Favorito" maxlength="20">
      </div>
      <div class="form-group">
        <?php
        if ($update == true) :
        ?>
          <button class="rd-mar-left-15 rd-btn rd-btn-large rd-btn-green rd-btn-border " type="submit" name="update">Atualizar</button>
        <?php else : ?>
          <button class="rd-mar-left-15 rd-btn rd-btn-large rd-btn-green rd-btn-border " type="submit" name="save">Salvar</button>
        <?php endif ?>
      </div>
    </form>
  </div>
  </body>

</html>