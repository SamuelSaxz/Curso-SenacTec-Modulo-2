<?php
include_once 'Database.php';
class Insert extends Database {
  
  public function __construct($table, $column, $value, $columnDuplicate = null, $valueDuplicate = null, $where = null) {
    parent::__construct($table, $column, $value, $columnDuplicate, $valueDuplicate, $where);
  }

  private function Insert() {
    $query = "INSERT INTO $this->table ($this->column) VALUES ('$this->value')";
    mysqli_query($this->connect(), $query);
    echo "Usuário cadastrado com sucesso!";
  }

  private function verifyDuplicate() {
    $sql = $this->selectWhere($this->getTable(), $this->getColumnDuplicate(), $this->getValueDuplicate(), true);
    if ($sql > 0) {
      echo $this->getColumnDuplicate() . " já cadastrado!";
    }
    else {
      return $this->Insert();
    }
  }

  public function execInsert() {
    echo "Cadastrando usuário... <br>";
    if ($this->getColumnDuplicate() && $this->getValueDuplicate()) {
      echo "Verificando se o e-mail já existe... <br>";
      return $this->verifyDuplicate();
    }
    else {
      return $this->Insert();
    }
  }
}

$insert = new Insert('users', 'email', "john@doe.com", 'email', 'john@doe.com');
$insert->execInsert();