<?php
include_once 'Valores.php';
class Imc extends Valores
{
  public $imc;

  public function __construct(float $height, int $weight)
  {
    $this->setA($height);
    $this->setB($weight);
  }

  public function calc(): float
  {
    if ($this->getA() > 0 && $this->getB() > 0) {
      return $this->getB() / ($this->getA() * $this->getA());
    }

    return 0;
  }

}

?>
