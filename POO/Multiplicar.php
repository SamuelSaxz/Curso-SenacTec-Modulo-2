<?php
include_once 'Valores.php';
class Multiplicar extends Valores
{
  public function __construct(float $a, float $b)
  {
    $this->setA($a);
    $this->setB($b);
    echo "Resultado: " . $this->calc() . "<br>";
  }

  public function calc(): float
  {
    return $this->getA() * $this->getB();
  }
}

?>
<h1>Função para Multiplicar</h1>
<form action="/samuelAguilar/index.php?pagina=Multiplicar" method="post" class="col-6 d-flex flex-column gap-3">
  <div class="form-group">
    <label for="a">A</label>
    <input type="number" class="form-control col-6" id="a" name="a" placeholder="Número">
  </div>
  <div class="form-group">
    <label for="b">B</label>
    <input type="number" class="form-control col-6" id="b" name="b" placeholder="Número">
  </div>
  <button type="submit" class="btn btn-primary">Calcular</button>
</form>
<h2>Resultado</h2>
<?php 
  $multiplicar = new Multiplicar(@$_POST['a'], @$_POST['b']);
?>