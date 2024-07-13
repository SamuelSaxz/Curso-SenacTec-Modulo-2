<?php
include_once 'Database.php';
class Insert extends Database
{

  public function __construct(string $table, array $column, array $value, int $columnDuplicate = null, array $where = [])
  {
    parent::__construct($table, $column, $value, $columnDuplicate, $where);
  }

  private function Insert()
  {
    $columns = implode(", ", $this->getColumn());
    $values = implode("', '", $this->getValue());
    $query = "INSERT INTO $this->table ($columns) VALUES ('$values')";
    mysqli_query($this->connect(), $query);
    echo "Usuário cadastrado com sucesso!";
  }

  private function verifyDuplicate()
  {
    $sql = $this->selectWhere($this->getTable(), $this->getColumn()[$this->getColumnDuplicate()], $this->getValue()[$this->getColumnDuplicate()], true);
    if ($sql > 0) {
      echo $this->getColumn()[$this->getColumnDuplicate()] . " já cadastrado!";
    } else {
      return $this->Insert();
    }
  }

  public function execInsert()
  {
    echo "Cadastrando usuário... <br>";
    if ($this->getColumnDuplicate()) {
      echo "Verificando se o e-mail já existe... <br>";
      return $this->verifyDuplicate();
    } else {
      return $this->Insert();
    }
  }
}