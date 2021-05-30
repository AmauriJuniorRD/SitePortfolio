<?php

session_start();

$mysqli = new mysqli('localhost', 'root', '', 'rdgames') or die(mysqli_error($mysqli));

$id_usuario = 0;
$update = false;
$nome = '';
$nick = '';
$game = '';
$plataforma = '';

if (isset($_POST['save'])) {
  $nome = $_POST['nome'];
  $nick = $_POST['nick'];
  $game = $_POST['game'];
  $plataforma = $_POST['plataforma'];

  $mysqli->query("INSERT INTO amigosgame (nome, nick, game, plataforma) VALUES('$nome','$nick', '$game', '$plataforma')")
    or die($mysqli->error);

  header("location: amigosgame.php");
}

if (isset($_GET['delete'])) {
  $id_usuario = $_GET['delete'];
  $mysqli->query("DELETE FROM amigosgame WHERE id_usuario=$id_usuario") or die($mysqli->erro);

  header("location: amigosgame.php");
}


if (isset($_GET['edit'])) {
  $id_usuario = $_GET['edit'];
  $update = true;
  $result = $mysqli->query("SELECT * FROM amigosgame WHERE id_usuario=$id_usuario") or die($mysqli->erro);
  if ($result->num_rows == 1) {
    $row = mysqli_fetch_array($result);
    $nome = $row['nome'];
    $nick = $row['nick'];
    $game = $row['game'];
    $plataforma = $row['plataforma'];
  }
}

if (isset($_POST['update'])) {
  $id_usuario = $_POST['id_usuario'];
  $nome = $_POST['nome'];
  $nick = $_POST['nick'];
  $game = $_POST['game'];
  $plataforma = $_POST['plataforma'];
  $query = "UPDATE amigosgame SET nome='$nome',  nick='$nick',  game='$game', plataforma='$plataforma' WHERE id_usuario=$id_usuario";
  $mysqli->query($query) or die($mysqli->error);

  header("location: amigosgame.php");
}
