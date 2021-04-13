<?php

class Patrocinio
{
  private $pdo;
  public $msgError = "";

  //fazer a conexão com banco de dados
  public function conectar($nome, $host, $usuario, $pedido)
  {
    //global para saber que a variavel pdo é a mesma de cima
    global $pdo;
    global $msgError;
    try {
      $pdo = new PDO("mysql:dbname=" . $nome . ";host=" . $host, $usuario, $pedido);
    } catch (PDOException $e) {
      echo "não conectou";
    }
  }
  public function cadastrar($nome, $telefone, $email, $pedido)
  {
    global $pdo;


    $sql = $pdo->prepare("INSERT INTO parceria (nome,
telefone, email, pedido) VALUES (:n, :t, :e, :p) ");
    $sql->bindValue(":n", $nome);
    $sql->bindValue(":t", $telefone);
    $sql->bindValue(":e", $email);
    $sql->bindValue(":p", $pedido);
    $sql->execute();
    return true;
  }
}
