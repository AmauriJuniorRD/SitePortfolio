<?php
if(!function_exists("protect")){
  function protect(){
    if(!isset($_SESSION))
    session_start();

    if(!isset($_SESSION['id_usuario']) || !is_numeric($_SESSION['id_usuario'])){
      header("Location: index.php");
    }
  }
}
