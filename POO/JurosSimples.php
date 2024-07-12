<?php
include_once 'Valores.php';
class JurosSimples extends Valores
{
  private $capital, $taxa, $tempo, $juros;
  public function __construct(float|int $capital, float|int $taxa, int $tempo)
  {
    $this->setA($capital);
    $this->setB($taxa);
    $this->setC($tempo);
    $this->setJuros();
    echo "Terá rendido R$ " . number_format($this->getJuros(), 2, ",", ".") . " em {$this->getC()} meses";
  }
  public function setJuros()
  {
    $this->juros = $this->getA() * $this->getB() * $this->getC();
  }
  public function getJuros()
  {
    return $this->juros;
  }
}

?>

<h1>Função para Juro Simples</h1>
<form action="/samuelAguilar/index.php?pagina=JurosSimples" method="post" class="col-6 d-flex flex-column gap-3">
  <div class="form-group">
    <label for="capital">Capital</label>
    <input type="number" class="form-control col-6" id="capital" name="capital" placeholder="Capital">
  </div>
  <div class="form-group">
    <label for="taxa">Taxa do Juros</label>
    <input type="number" class="form-control col-6" id="taxa" name="taxa" step="0.1" placeholder="Em decimal">
  </div>
  <div class="form-group">
    <label for="tempo">Tempo</label>
    <input type="number" class="form-control col-6" id="tempo" name="tempo" placeholder="Em Meses">
  </div>

  <button type="submit" class="btn btn-primary">Calcular</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  echo "<h2>RESULTADOS</h2>";
  $capital = new JurosSimples($_POST['capital'], $_POST['taxa'], $_POST['tempo']);
}
?>