<?php

/* 
  Classe que guarda métodos e atributos para a conexão com o Banco de Dados.

  private $host guarda o host do Banco de Dados.

  private $user guarda o usuário do Banco de Dados.

  private $pass guarda a senha do Banco de Dados.

  private $db guarda o nome do Banco de Dados.

  private $conn guarda a conexão com o Banco de Dados.
*/

include_once 'Data.php';
abstract class Database extends Data {
  private $host, $user, $pass, $db, $conn;
  public function __construct( string $table, array $column, array $value, int $columnDuplicate = null, array $where = null) {
    $this->host = 'localhost';
    $this->user = 'root';
    $this->pass = '';
    $this->db = 'dbsenactec'; 
    parent::__construct($table, $column, $value, $columnDuplicate, $where);
  }
  
  public function connect() {
    try {
      $this->conn = mysqli_connect($this->host, $this->user, $this->pass, $this->db);
      return $this->conn;
    }
    catch (Exception $error) {
      echo $error->getMessage();
      exit;
    }
  }

  protected function select( string $table, bool $count = false) {
    $sql = mysqli_query($this->connect(), "SELECT * FROM '$table'");
    if ($count === true) {
      return mysqli_num_rows($sql);
    }
    $list = mysqli_fetch_assoc($sql);
    return $list;
  }

  protected function selectWhere( string $table, string $column, string $info, bool $count = false) {
    $sql = mysqli_query($this->connect(), "SELECT * FROM $table WHERE $column = '$info'");
    if ($count) {
      return mysqli_num_rows($sql);
    }
    $list = mysqli_fetch_assoc($sql);
    return $list;
  }
}