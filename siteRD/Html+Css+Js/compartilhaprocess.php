<?php

session_start();

$mysqli = new mysqli('localhost', 'root', '', 'rdgames') or die(mysqli_error($mysqli));

$id_usuario = 0;
$update = false;
$equipe = '';
$data_lanc = '';
$link = '';

if (isset($_POST['save'])) {
  $equipe = $_POST['equipe'];
  $data_lanc = $_POST['data_lanc'];
  $link = $_POST['link'];

  $mysqli->query("INSERT INTO compartilha (equipe, data_lanc, link) VALUES('$equipe','$data_lanc', '$link')")
    or die($mysqli->error);

  header("location: compartilha.php");
}
if (isset($_GET['delete'])) {
  $id_usuario = $_GET['delete'];
  $mysqli->query("DELETE FROM compartilha WHERE id_usuario=$id_usuario") or die($mysqli->erro);

  header("location: compartilha.php");
}


if (isset($_GET['edit'])) {
  $id_usuario = $_GET['edit'];
  $update = true;
  $result = $mysqli->query("SELECT * FROM compartilha WHERE id_usuario=$id_usuario") or die($mysqli->erro);
  if ($result->num_rows == 1) {
    $row = mysqli_fetch_array($result);
    $equipe = $row['equipe'];
    $data_lanc = $row['data_lanc'];
    $link = $row['link'];
  }
}

if (isset($_POST['update'])) {
  $id_usuario = $_POST['id_usuario'];
  $equipe = $_POST['equipe'];
  $data_lanc = $_POST['data_lanc'];
  $link = $_POST['link'];
  $query = "UPDATE compartilha SET equipe='$equipe',  data_lanc='$data_lanc',  link='$link' WHERE id_usuario=$id_usuario";
  $mysqli->query($query) or die($mysqli->error);

  header("location: compartilha.php");
}
