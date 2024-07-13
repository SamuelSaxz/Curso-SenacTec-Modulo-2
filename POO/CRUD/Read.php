<?php

include_once 'Database.php';

class Read extends Database
{
  public function __construct($table, $column, $value, $where = [])
  {
    parent::__construct($table, $column, $value, null, $where);
  }

  private function readWhere($count)
  {
    $max = count($this->getColumn());
    for ($i = 0; $i < $max; $i++) {
      $query = "SELECT * FROM $this->table WHERE ".$this->getColumn()[$i]." = '".$this->getValue()[$i]."'";
      $sql = mysqli_query($this->connect(), $query);
    }
    return $count ? mysqli_num_rows($sql) : mysqli_fetch_assoc($sql);
  }

  private function read($count)
  {
    $query = "SELECT * FROM $this->table";
    $sql = mysqli_query($this->connect(), $query);
    return $count ? mysqli_num_rows($sql) : mysqli_fetch_assoc($sql);
  }

  public function execRead($count = false)
  {
    if ($this->getColumn() && $this->getValue()) {
      return $this->readWhere($count);
    }
    else {
      return $this->read($count);
    }
  }
} 