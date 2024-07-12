<?php
include_once 'Data.php';
abstract class Database extends Data {
  protected $host, $user, $pass, $db, $conn;
  public function __construct($table, $column, $value, $columnDuplicate, $valueDuplicate, $where) {
    $this->host = 'localhost';
    $this->user = 'root';
    $this->pass = '';
    $this->db = 'dbsenactecsamuel';
    parent::__construct($table, $column, $value, $columnDuplicate, $valueDuplicate, $where);
  }
  
  public function connect() {
    try {
      $this->conn = mysqli_connect($this->host, $this->user, '', $this->db);
      return $this->conn;
    }
    catch (Exception $error) {
      echo $error->getMessage();
      exit;
    }
  }

  protected function select($table, $count = false) {
    $sql = mysqli_query($this->connect(), "SELECT * FROM '$table'");
    if ($count === true) {
      return mysqli_num_rows($sql);
    }
    $list = mysqli_fetch_assoc($sql);
    return $list;
  }

  protected function selectWhere($table, $column, $info, $count = false) {
    $sql = mysqli_query($this->connect(), "SELECT * FROM $table WHERE $column = '$info'");
    if ($count) {
      return mysqli_num_rows($sql);
    }
    $list = mysqli_fetch_assoc($sql);
    return $list;
  }
}