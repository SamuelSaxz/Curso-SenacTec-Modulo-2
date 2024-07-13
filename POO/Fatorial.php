<?php
include_once 'Valores.php';
class funcaoFatorial extends Valores
{
  private $resultado;
  public function __construct($numero)
  {
    $this->setA($numero);
    $this->setResultado();
    echo "Fatorial de: " . $this->getA() . "  é " . $this->getResultado();
  }
  protected function getResultado()
  {
    return $this->resultado;
  }

  protected function setResultado()
  {
    $fatorial = $this->getA();
    for ($i = $this->getA(); $i > 1; $i--) {
      $fatorial = $fatorial * ($i - 1);
    }
    $this->resultado = $fatorial;
  }
}

?>
