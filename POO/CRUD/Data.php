<?php

class Data {
  protected $table, $column, $value, $columnDuplicate, $valueDuplicate, $where;
  public function __construct($table, $column, $value, $columnDuplicate = null, $valueDuplicate = null, $where = null) {
    $this->setTable($table);
    $this->setColumn($column);
    $this->setValue($value);
    $this->setColumnDuplicate($columnDuplicate);
    $this->setValueDuplicate($valueDuplicate);
    $this->setWhere($where);
  }

  protected function setTable($table) {
    $this->table = $table;
  }

  protected function getTable() {
    return $this->table;
  }

  protected function setColumn($column) {
    $this->column = $column;
  }

  protected function setValue($value) {
    $this->value = $value;
  }

  protected function setValueDuplicate($valueDuplicate) {
    $this->valueDuplicate = $valueDuplicate;
  }

  protected function setColumnDuplicate($columnDuplicate) {
    $this->columnDuplicate = $columnDuplicate;
  }

  protected function getColumnDuplicate() {
    return $this->columnDuplicate;
  }

  protected function getValueDuplicate() {
    return $this->valueDuplicate;
  }

  protected function setWhere($where) {
    $this->where = $where;
  }

  protected function getWhere() {
    return $this->where;
  }
}