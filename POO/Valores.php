<?php

class Valores {
  protected $a, $b, $c;
  public function setA ( $number) {
    return $this->a = $number;
  }
  public function setB ( $number) {  
    return $this->b = $number;
  }
  public function setC ( $number) {
    return $this->c = $number;
  }
  public function getA () {
    return $this->a;
  }
  public function getB () {
    return $this->b;
  }
  public function getC () {
    return $this->c;
  }   
}