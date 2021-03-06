<?php require_once 'gameprocess.php'; ?>

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

  <link rel="stylesheet" href="css/bootstrap-grid.min.css" />
  <link rel="stylesheet" href="css/main.css" />
  <title>Reborn Dream</title>
</head>

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

<div class="rd-page-wrapper ">

  <?php
  $mysqli = new mysqli('localhost', 'root', '', 'rdgames') or die(mysqli_error($mysqli));
  $result = $mysqli->query("SELECT * FROM game") or die($mysql->error);

  ?>
  <div class="row justify-content-center rd-display-parceiros rd-text-light col-sm-12 col-md-6 offset-md-3">
    <h1 class="rd-title rd-title-large rd-text-green">Gamer</h1>
    <p class="rd-text-subs">
      Deixe aqui qual é seu game favorito de nossa franquia, desta forma você nos ajuda a saber qual é
      o estilo de game que está mais agradando a todos, e você pode fazer novos amigos aqui para jogar!!!
    </p>
  </div>
  <hr class="rd-display-crud" width=“2” size=“100”>
  <div class="row justify-content-center rd-display-crud">
    <table class="table">
      <thead>
        <tr>
          <th class="rd-btn-recrut rd-title-large rd-text-light "> Nome</th>
          <th class="rd-btn-recrut rd-title-large rd-text-light ">Idade</th>
          <th class="rd-btn-recrut rd-title-large rd-text-light ">Game Favorito</th>
          <th class="rd-btn-recrut rd-title-large rd-text-light " colspan="2">Ações</th>
        </tr>
      </thead>

      <?php
      while ($row = $result->fetch_assoc()) : ?>
        <tr>
          <td class="rd-btn-recrut rd-subs-crud rd-text-light "><?php echo $row['nome']; ?></td>
          <td class="rd-btn-recrut rd-subs-crud rd-text-light "><?php echo $row['idade']; ?></td>
          <td class="rd-btn-recrut rd-subs-crud rd-text-light "><?php echo $row['jogosrd']; ?></td>
          <td>
            <a href="game.php?edit=<?php echo $row['id_usuario']; ?> " class="rd-text-decoration rd-btn-crud rd-btn-blue ">Editar</a>
            <a href="gameprocess.php?delete=<?php echo $row['id_usuario']; ?> " class="rd-text-decoration rd-btn rd-btn-crud rd-btn-red">Deletar</a>
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
    <form action="gameprocess.php" method="POST">
      <input type="hidden" name="id_usuario" value="<?php echo $id_usuario; ?>">
      <?php
      if ($update == true) :
      ?>
        <h2 class="rd-text-blue row justify-content-center">Atualize seus dados</h2>
      <?php else : ?>
        <h2 class=" rd-text-green row justify-content-center">Insira seus dados</h2>
      <?php endif ?>
      <div class="form-group">
        <input class=" form-control rd-btn rd-btn-large rd-btn-border rd-teste-crud" type="text" name="nome" value="<?php echo $nome; ?>" placeholder="Nome" maxlength="30" required>
      </div>

      <div class="form-group">
        <input class=" form-control rd-btn rd-btn-large rd-btn-border rd-teste-crud" type="text" name="idade" value="<?php echo $idade; ?>" placeholder="Idade" maxlength="10" required>
      </div>
      <div class="form-group">
        <input class=" form-control rd-btn rd-btn-large rd-btn-border rd-teste-crud" type="text" name="jogosrd" value="<?php echo $jogosrd; ?>" placeholder="Game Favorito" maxlength="20" required>
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

  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/noframework.waypoints.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/shortcuts/inview.min.js"></script>
  <script src="js/main.js"></script>
  <script src="js/anime.js"></script>

  </body>

</html>
