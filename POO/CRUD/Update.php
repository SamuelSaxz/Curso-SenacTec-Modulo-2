<?php
/*
  Classe que atualiza informações no Banco de Dados.
*/

include_once 'Database.php';
class Update extends Database
{
  public function __construct($table, $column, $value, $where = null)
  {
    parent::__construct($table, $column, $value, null, $where);
  }

  private function update()
  {
    $columns = implode(", ", $this->getColumn());
    $values = implode("', '", $this->getValue());
    $query = "UPDATE $this->table SET $columns = '$values'";
    mysqli_query($this->connect(), $query);
    echo "Usuário atualizado com sucesso!";
  }

  private function updateWhere() {
    $columns = implode(", ", $this->getColumn());
    $values = implode("', '", $this->getValue());
    $where = implode(", ", $this->getWhere());
    $query = "UPDATE $this->table SET $columns = '$values' WHERE $where";
    mysqli_query($this->connect(), $query);
    echo "Usuário atualizado com sucesso!";
  }

  public function execUpdate()
  {
    return $this->update();
  }
}

$update = new Update('users', ['email'], ['samuel@doe.com'], ['id = 2']);
$update->execUpdate();