<?php
include_once 'Database.php';
class Update extends Database
{
  public function __construct($table, $column, $value, $where = null)
  {
    parent::__construct($table, $column, $value, null, null, $where);
  }

  private function update()
  {
    $query = "UPDATE $this->table SET $this->column = '$this->value'";
    mysqli_query($this->connect(), $query);
    echo "Usuário atualizado com sucesso!";
  }

  private function updateWhere() {
    $query = "UPDATE $this->table SET $this->column = '$this->value' WHERE $this->where";
    mysqli_query($this->connect(), $query);
    echo "Usuário atualizado com sucesso!";
  }

  public function execUpdate()
  {
    return $this->update();
  }
}

$update = new Update('users', 'email', "samuel@doe.com", 'id = 28');
$update->execUpdate();