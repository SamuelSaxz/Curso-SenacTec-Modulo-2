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
<h1>Função do IMC</h1>
<form action="/samuelAguilar/index.php?pagina=Imc" method="post" class="col-6 d-flex flex-column gap-3">
  <div class="form-group">
    <label for="peso">Peso</label>
    <input type="number" class="form-control col-6" id="peso" name="peso" placeholder="Em Quilos">
  </div>
  <div class="form-group">
    <label for="altura">Altura</label>
    <input type="number" class="form-control col-6" id="altura" name="altura" placeholder="Em Metros">
  </div>
  <button type="submit" class="btn btn-primary">Calcular</button>
</form>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  echo "<h2>Resultado</h2>";
  $imc = new Imc(@$_POST['altura'], @$_POST['peso']);
  echo "IMC: " . $imc->calc();
}
?>