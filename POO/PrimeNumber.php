<?php

class PrimeNumber
{
  private $number;
  private $isPrime;

  public function __construct($number)
  {
    $this->number = $number;
    $this->execIsPrime();
  }

  public function getNumber()
  {
    return $this->number;
  }

  public function getIsPrime()
  {
    return $this->isPrime;
  }

  public function execIsPrime()
  {
    if ($this->number <= 2) {
      echo "Número: $this->number não é Primo!<br>";
    } else {
      for ($i = 2; $i <= $this->number; $i++) {
        if ($this->number % $i == 0) {
          echo "Número: $i não é Primo! <br>";
        }
        else {
          echo "Número: $i Primo! <br>";
        }
      }
    }
  }
}

?>
<h1>Prime Number</h1>
<form action="/samuelAguilar/index.php?pagina=PrimeNumber" method="post" class="col-6 d-flex flex-column gap-3">
  <div class="form-group">
    <label for="number">Number</label>
    <input type="number" class="form-control col-6" id="number" name="number" placeholder="Number">
  </div>
  <button type="submit" class="btn btn-primary">Check</button>
</form>
<h2>Resultado</h2>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $primeNumber = new PrimeNumber(@$_POST['number']);
}
?>