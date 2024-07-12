<?php
class aula01 {
  private $a;
  private $b;
  protected function somar ($a, $b) {
    $this->a = $a;
    $this->b = $b;
    echo "Total: " . ($this->a + $this->b);
  }
}
