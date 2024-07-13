<?php
/*
 Classe que guardar as informações inseridas pelo o usuário.

 protected $table guarda o nome da tabela que será inserida.

 protected $column guarda o nome da coluna que será inserida.

 protected $implodedColumn guarda o nome da coluna que será inserida como uma string.

 protected $value guarda o valor da coluna que será inserida.

 protected $implodedValue guarda o valor da coluna que será inserida como uma string.

 protected $columnDuplicate guarda o nome da coluna que será verificada para não inserir.

 protected $where especifica onde será inserido.

 protected $implodedWhere especifica onde será inserido como uma string.
*/

abstract class Data
{
  protected $table, $column, $value, $columnDuplicate, $where, $implodedColumn, $implodedValue, $implodedWhere;
  public function __construct(string $table, array $column, array $value, int $columnDuplicate = null, array $where = null)
  {
    $this->setTable($table);
    $this->setColumn($column);
    $this->setValue($value);
    $this->setColumnDuplicate($columnDuplicate);
    $this->setWhere($where);
  }

  protected function setTable(string $table)
  {
    $this->table = $table;
  }

  protected function getTable()
  {
    return $this->table;
  }

  protected function setColumn(array $column)
  {
    $this->column = $column;
  }

  protected function getColumn()
  {
    return $this->column;
  }

  protected function setValue(array $value)
  {
    $this->value = $value;
  }

  protected function getValue()
  {
    return $this->value;
  }

  protected function setColumnDuplicate(int | null $columnDuplicate)
  {
    $this->columnDuplicate = $columnDuplicate;
  }

  protected function getColumnDuplicate()
  {
    return $this->columnDuplicate;
  }

  protected function setWhere(array $where)
  {
    $this->where = $where;
  }

  protected function getWhere()
  {
    return $this->where;
  }

  protected function setImplodedColumn(array $column)
  {
    $this->implodedColumn = implode(", ", $column);
  }
  

  protected function getImplodedColumn()
  {
    return $this->implodedColumn;
  }

  protected function setImplodedValue(array $value)
  {
    $this->implodedValue = implode("', '", $value);
  }

  protected function getImplodedValue()
  {
    return $this->implodedValue;
  }

  protected function setImplodedWhere(array $where)
  {
    $this->implodedWhere = implode(", ", $where);
  }

  protected function getImplodedWhere()
  {
    return $this->implodedWhere;
  }
}