<?php
include_once 'Database.php';
class Delete extends Database {
  public function __construct($table, $column, $value, $where = null) {
    parent::__construct($table, $column, $value, null, $where);
  }

  private function deleteWhere() {
    $columns = implode(", ", $this->getColumn());
    $values = implode("', '", $this->getValue());
    $query = "DELETE FROM $this->table WHERE $columns = '$values'";
    mysqli_query($this->connect(), $query);
    echo "Usuário excluído com sucesso!";
  }

  private function delete() {
    $query = "DELETE FROM $this->table";
    mysqli_query($this->connect(), $query);
    echo "Usuário excluído com sucesso!";
  }

  public function execDelete() {
    if ($this->column && $this->value) {
      return $this->deleteWhere();
    }
    else {
      return $this->delete();
    }
  }
}

$delete = new Delete('users', ['email'], ['john@doe.com']);
$delete->execDelete();