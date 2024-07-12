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
    return $this->resultado ?? 'error';
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
<h1>Função para Fatorial</h1>
<form action="/samuelAguilar/index.php?pagina=Fatorial" method="post" class="col-6 d-flex flex-column gap-3">
  <div class="form-group">
    <label for="numero">Número</label>
    <input type="number" class="form-control col-6" id="numero" name="numero" placeholder="Número">
  </div>
  <button type="submit" class="btn btn-primary">Calcular</button>
</form>
<?php
$fatorial = new funcaoFatorial(@$_POST['numero']);
?>