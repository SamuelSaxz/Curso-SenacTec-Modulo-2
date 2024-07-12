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

?>
<h1>Função para Força</h1>
<form action="/samuelAguilar/index.php?pagina=Forca" method="post" class="col-6 d-flex flex-column gap-3">
  <div class="form-group">
    <label for="massa">Massa</label>
    <input type="number" class="form-control col-6" id="massa" name="massa" placeholder="Em Quilogramas">
  </div>
  <div class="form-group">
    <label for="aceleracao">Aceleração</label>
    <input type="number" class="form-control col-6" id="aceleracao" name="aceleracao"
      placeholder="Em Metros por Segundo">
  </div>
  <button type="submit" class="btn btn-primary">Calcular</button>
</form>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  echo "<h2>Resultado</h2>";
  $forca = new Forca(@$_POST['massa'], @$_POST['aceleracao']);
  echo "Força: " . $forca->calc() . " Newtons";
}