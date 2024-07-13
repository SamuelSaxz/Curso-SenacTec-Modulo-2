<?php
include_once 'Valores.php';
class Forca extends Valores
{
  public function __construct(int $massa, int $aceleracao)
  {
    $this->setA($massa);
    $this->setB($aceleracao);
  }

  public function calc(): int
  {
    return ($this->getA() * $this->getB());
  }
}
