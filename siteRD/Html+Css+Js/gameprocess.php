<?php

session_start();

$mysqli = new mysqli('localhost', 'root', '', 'rdgames') or die(mysqli_error($mysqli));

$id_usuario = 0;
$update = false;
$nome = '';
$idade = '';
$jogosrd = '';

if (isset($_POST['save'])) {
  $nome = $_POST['nome'];
  $idade = $_POST['idade'];
  $jogosrd = $_POST['jogosrd'];

  $mysqli->query("INSERT INTO game (nome, idade, jogosrd) VALUES('$nome','$idade', '$jogosrd')")
    or die($mysqli->error);

  header("location: game.php");
}
if (isset($_GET['delete'])) {
  $id_usuario = $_GET['delete'];
  $mysqli->query("DELETE FROM game WHERE id_usuario=$id_usuario") or die($mysqli->erro);

  header("location: game.php");
}


if (isset($_GET['edit'])) {
  $id_usuario = $_GET['edit'];
  $update = true;
  $result = $mysqli->query("SELECT * FROM game WHERE id_usuario=$id_usuario") or die($mysqli->erro);
  if ($result->num_rows == 1) {
    $row = mysqli_fetch_array($result);
    $nome = $row['nome'];
    $idade = $row['idade'];
    $jogosrd = $row['jogosrd'];
  }
}

if (isset($_POST['update'])) {
  $id_usuario = $_POST['id_usuario'];
  $nome = $_POST['nome'];
  $idade = $_POST['idade'];
  $jogosrd = $_POST['jogosrd'];
  $query = "UPDATE game SET nome='$nome',  idade='$idade',  jogosrd='$jogosrd' WHERE id_usuario=$id_usuario";
  $mysqli->query($query) or die($mysqli->error);

  header("location: game.php");
}
