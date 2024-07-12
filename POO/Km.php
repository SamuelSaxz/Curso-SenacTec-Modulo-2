<?php
include_once 'Valores.php';
class Km extends Valores
{
  public function __construct(float $km)
  {
    $this->setA($km);
  }

  public function calc(): float
  {
    return $this->getA() * 1000;
  }
}