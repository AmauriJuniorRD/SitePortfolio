<?php

session_start();

$mysqli = new mysqli('localhost', 'root', '', 'rdgames') or die(mysqli_error($mysqli));

$id_usuario = 0;
$update = false;
$nome = '';
$email = '';
$vagas = '';
$descricao = '';

if (isset($_POST['save'])) {
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $vagas = $_POST['vagas'];
  $descricao = $_POST['descricao'];

  $mysqli->query("INSERT INTO recrutamento (nome, email, vagas, descricao) VALUES('$nome','$email', '$vagas', '$descricao')")
    or die($mysqli->error);

  header("location: recrutamento.php");
}
if (isset($_GET['delete'])) {
  $id_usuario = $_GET['delete'];
  $mysqli->query("DELETE FROM recrutamento WHERE id_usuario=$id_usuario") or die($mysqli->erro);

  header("location: recrutamento.php");
}


if (isset($_GET['edit'])) {
  $id_usuario = $_GET['edit'];
  $update = true;
  $result = $mysqli->query("SELECT * FROM recrutamento WHERE id_usuario=$id_usuario") or die($mysqli->erro);
  if ($result->num_rows == 1) {
    $row = mysqli_fetch_array($result);
    $nome = $row['nome'];
    $email = $row['email'];
    $vagas = $row['vagas'];
    $descricao = $row['descricao'];
  }
}

if (isset($_POST['update'])) {
  $id_usuario = $_POST['id_usuario'];
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $vagas = $_POST['vagas'];
  $descricao = $_POST['descricao'];
  $query = "UPDATE recrutamento SET nome='$nome',  email='$email',  vagas='$vagas', descricao='$descricao' WHERE id_usuario=$id_usuario";
  $mysqli->query($query) or die($mysqli->error);

  header("location: recrutamento.php");
}
