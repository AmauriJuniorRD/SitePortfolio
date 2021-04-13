<?php

class orcamento
{
  private $pdo;
  public $msgError = "";

  //fazer a conexão com banco de dados
  public function conectar($nome, $host, $usuario, $descricao)
  {
    //global para saber que a variavel pdo é a mesma de cima
    global $pdo;
    global $msgError;
    try {
      $pdo = new PDO("mysql:dbname=" . $nome . ";host=" . $host, $usuario, $descricao);
    } catch (PDOException $e) {
      echo "não conectou";
    }
  }
  public function cadastrar($nome, $telefone, $email, $descricao)
  {
    global $pdo;


    $sql = $pdo->prepare("INSERT INTO orcamento (nome,
telefone, email, descricao) VALUES (:n, :t, :e, :d) ");
    $sql->bindValue(":n", $nome);
    $sql->bindValue(":t", $telefone);
    $sql->bindValue(":e", $email);
    $sql->bindValue(":d", $descricao);
    $sql->execute();
    return true;
  }
}
