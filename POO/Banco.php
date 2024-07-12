<?php

include_once 'OperacoesBancarias.php';

class Banco extends OperacoesBancarias
{

  public function __construct()
  { 
    echo "Saldo Atual: " . $this->getSaldo() . "<br>";
    echo $this->saque;
  }
}

?>

<h1>Banco</h1>
<form action="/samuelAguilar/index.php?pagina=Banco" method="post" class="col-6 d-flex flex-column gap-3">
  <div class="form-group">
    <label for="saque">Saque</label>
    <input type="number" class="form-control col-6" id="saque" name="saque" placeholder="Saque">
  </div>
  <button type="submit" class="btn btn-primary">Sacar</button>
</form>

<form action="/samuelAguilar/index.php?pagina=Banco" method="post" class="col-6 d-flex flex-column gap-3">
  <div class="form-group">
    <label for="deposito">Deposito</label>
    <input type="number" class="form-control col-6" id="deposito" name="deposito" placeholder="Deposito">
  </div>
  <button type="submit" class="btn btn-primary">Depositar</button>
</form>

<h1>Resultado</h1>
<?php
if($_SERVER['REQUEST_METHOD'] === 'POST'){
  $banco = new Banco();
  if(!empty($_POST['saque'])){
    $banco->execSaque($_POST['saque']);
  }
  else if (!empty($_POST['deposito'])){
    $banco->execDeposito($_POST['deposito']);
  }
}

?>