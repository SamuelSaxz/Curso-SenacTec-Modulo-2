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
    }
    public function getDelta()
    {
        return $this->delta;
    }
    private function setDelta()
    { 
        // Pow tem prioridad sobre multiplicação
        $this->delta = pow($this->getB(), 2) - 4 * $this->getA() * $this->getC();
        
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
        echo "Função: <br>";
        echo "Delta: ".$this->getDelta()."<br>";
        echo "x': ".$this->getX1()."<br>";
        echo "x'': ".$this->getX2()."<br>";
    }
}
