<?php
include_once 'Valores.php';
class funcaoSegundoGrau extends Valores
{
    private $delta, $x1, $x2;
    public function __construct($a, $b, $c)
    {
        $this->setA($a);
        $this->setB($b);
        $this->setC($c);
        $this->execDelta();
        echo "Função: <br>";
        echo "Delta: ".$this->getDelta()."<br>";
        echo "x': ".$this->getX1()."<br>";
        echo "x'': ".$this->getX2()."<br>";
    }
    public function getDelta()
    {
        return $this->delta;
    }
    private function setDelta()
    {
        $this->delta = pow($this->getB(), 2) - (4 * $this->getA() * $this->getC());
        
        if ($this->getDelta() > 0) {
            echo "Delta > que 0, portanto, há duas raízes reais diferentes.";
            $this->x1 = -$this->getB() + sqrt($this->getDelta()) / 2 * $this->getA();
            $this->x2 = -$this->getB() - sqrt($this->getDelta()) / 2 * $this->getA();
        } else if ($this->getDelta() < 0) {
            echo "Delta < 0, portanto, não existem raízes reais.";
        } else {
            echo "Delta > 0, portanto, há duas raízes reais iguais.";
            $this->x1 = -$this->getB() + sqrt($this->getDelta()) / 2 * $this->getA();
            $this->x2 = -$this->getB() - sqrt($this->getDelta()) / 2 * $this->getA();
        }
    }

    public function getX1(){
        return $this->x1;
    }

    public function getX2(){
        return $this->x2;
    }

    public function execDelta(){
        $this->setDelta();
    }
}

?>
<h1>Função do Segundo Grau</h1>
<form action="/samuelAguilar/index.php?pagina=segundoGrau" method="post" class="col-6 d-flex flex-column gap-3">
  <div class="form-group">
    <label for="a">A</label>
    <input type="number" class="form-control col-6" id="a" name="a" placeholder="Número">
  </div>
  <div class="form-group">
    <label for="b">B</label>
    <input type="number" class="form-control col-6" id="b" name="b" placeholder="Número">
  </div>
  <div class="form-group">
    <label for="c">C</label>
    <input type="number" class="form-control col-6" id="c" name="c" placeholder="Número">
  </div>
  <button type="submit" class="btn btn-primary">Calcular</button>
</form>
<h2>Resultado</h2>
<?php 
  $segundoGrau = new funcaoSegundoGrau(@$_POST['a'], @$_POST['b'], @$_POST['c']);
?>