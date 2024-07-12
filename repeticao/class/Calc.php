<?php

include_once ('Elements.php');
class Calc extends Elements {
  public function header(float $start, float $end){
    while ($start <= $end) {
      echo $this->headerTable($start);
      $start++;
    }
  }
  public function cols(float $start, float $end, float $value){
    while($start <= $end){
      echo $this->colTable([$start, $value]);
      $start++;
    }
  }
}
