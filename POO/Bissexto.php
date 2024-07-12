<?php
include_once 'Valores.php';
class Bissexto extends Valores
{
  public function __construct(int $year)
  {
    $this->setA($year);
    echo $this->calc();
  }

  public function calc(): string
  {
    if ($this->getA() % 4 === 0 || ($this->getA() % 100 != 0 && $this->getA() % 400 === 0)) {
      return "Ano ".$this->getA().": Esse ano é Bissexto!";
    } else {
      return "Ano ".$this->getA().": Esse ano não é Bissexto!";
    }
  }
}
?>
<h1>Função para Ano Bissexto</h1>
<form action="/samuelAguilar/index.php?pagina=Bissexto" method="post" class="col-6 d-flex flex-column gap-3">
  <div class="form-group">
    <label for="year">Ano</label>
    <input type="number" class="form-control col-6" id="year" name="year" placeholder="Ano">
  </div>
  <button type="submit" class="btn btn-primary">Calcular</button>
</form>
<?php
if($_SERVER['REQUEST_METHOD'] === 'POST'){
  $ano = new Bissexto(@$_POST['year']);
}
?>