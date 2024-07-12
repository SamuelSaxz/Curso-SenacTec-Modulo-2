<?php

abstract class OperacoesBancarias {

  protected $saque;
  protected $saldo;

  private function setSaque($valor) {
    $this ->saldo = $this->saldo - $valor;
    echo "Saque de: ".$valor."Realizado com sucesso!<br>";
  }

  public function execSaque($valor) {
    $this->setSaque($valor);
  }

  public function getSaque() {
    return $this->saque;
  }

  private function setDeposito($valor) {
    $this->saldo = $this->saldo + $valor;
    echo "Novo Saldo: ".$this->getSaldo()."<br>";
  }

  public function execDeposito($valor) {
    $this->setDeposito($valor);
  }
  public function getSaldo() {
    return $this->saldo;
  }
  
} 