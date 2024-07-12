<?php

class Database
{
  protected $host, $username, $password, $db, $port;
  public function __construct()
  { 
    // Inserindo Dados da Conexão com o Banco de Dados
    $this->host = 'localhost';
    $this->username = 'root';
    $this->password = "";
    $this->db = 'dbsenactecsamuel';
    $this->port = 3306;
  }

  // TODO: Função de Conexão com o Banco de Dados.
  protected function connect()
  { 
    // Criando Conexão
    try {
      $conn = mysqli_connect($this->host, $this->username, $this->password, $this->db, $this->port);
      return $conn;
    } 
    catch (Exception $error) {
      echo $error->getMessage();
      exit;
    } 
  }
  // Função que Faz uma Seleção no Banco de Dados com opção de Contagem
  public function select(string $table, bool $count = false)
  {
    $sql = mysqli_query($this->connect(), "SELECT * FROM $table");
    if ($count === true) {
      return mysqli_num_rows($sql);
    }
    return $sql;
  }

  // Função que Faz uma Seleção Específica no Banco de Dados com opção de Contagem.
  public function selectWhere(string $table, string $column, string $info, bool $count = false)
  {
    $sql = mysqli_query($this->connect(), "SELECT * FROM $table WHERE $column = '$info'");
    if($count === true){
      return mysqli_num_rows($sql);
    }
    return $sql;
  }
}
