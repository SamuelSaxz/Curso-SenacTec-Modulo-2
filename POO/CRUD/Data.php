<?php

abstract class Data
{
  protected $table, $column, $value, $columnDuplicate, $where;
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

  protected function setColumnDuplicate( int $columnDuplicate)
  {
    $this->columnDuplicate = $columnDuplicate;
  }

  protected function getColumnDuplicate()
  {
    return $this->columnDuplicate;
  }

  protected function setWhere( array $where)
  {
    $this->where = $where;
  }

  protected function getWhere()
  {
    return $this->where;
  }
}