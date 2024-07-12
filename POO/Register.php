<?php
include_once 'Usuario.php';

class Register extends Usuario
{

  public function __construct($name = null, $email, $password, $date, $genre, $affiliation_1, $affiliation_2, $cpf, $rg, $address, $city, $state, $cep, $neighborhood, $number)
  {
    parent::__construct($name, $email, $password, $date, $genre, $affiliation_1, $affiliation_2, $cpf, $rg, $address, $city, $state, $cep, $neighborhood, $number);
    echo $this->execRegister();
  }
  private function register()
  {
    $name = mysqli_real_escape_string($this->connect(), $this->getName());
    $email = mysqli_real_escape_string($this->connect(), $this->getEmail());
    $password = mysqli_real_escape_string($this->connect(), $this->getPassword());
    $genre = mysqli_real_escape_string($this->connect(), $this->getGenre());
    $date = mysqli_real_escape_string($this->connect(), $this->getDate());
    $affiliation_1 = mysqli_real_escape_string($this->connect(), $this->getAffiliation()[0]);
    $affiliation_2 = mysqli_real_escape_string($this->connect(), $this->getAffiliation()[1]);
    $cpf = mysqli_real_escape_string($this->connect(), $this->getCpf());
    $rg = mysqli_real_escape_string($this->connect(), $this->getRg());
    $address = mysqli_real_escape_string($this->connect(), $this->getAddress());
    $city = mysqli_real_escape_string($this->connect(), $this->getCity());
    $state = mysqli_real_escape_string($this->connect(), $this->getState());
    $cep = mysqli_real_escape_string($this->connect(), $this->getCep());
    $neighborhood = mysqli_real_escape_string($this->connect(), $this->getNeighborhood());
    $number = mysqli_real_escape_string($this->connect(), $this->getNumber());

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $sql = $this->selectWhere("user", "email", $email, true);

      if($sql) {
        return "Usuário já cadastrado!";
      }

      $query = "INSERT INTO user 
      (name, email, password, genre, date, affiliation_1, affiliation_2, cpf, rg)
      VALUES ('$name', '$email', '$password', '$genre', '$date', '$affiliation_1','$affiliation_2','$cpf', '$rg')";
      mysqli_query($this->connect(), $query);

      $sql = mysqli_query($this->connect(), "SELECT id FROM user WHERE email = '$email'");
      $list = mysqli_fetch_assoc($sql);
      $user_id = $list['id'];

      $query = "INSERT INTO address 
      (user_id, address, city, state, cep, neighborhood, number) 
      VALUES ('$user_id', '$address', '$city', '$state', '$cep', '$neighborhood', '$number')";
      mysqli_query($this->connect(), $query);

      echo "Usuário cadastrado com sucesso!";
    } 
    else {
      return "E-mail Inválido!";
    }
  }

  public function execRegister()
  {
    $this->register();
  }
}

?>

<h1>Register</h1>
<form action="/samuelAguilar/index.php?pagina=register" method="post" class="col-6 d-flex flex-column gap-3">

  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control col-6" id="name" name="name" placeholder="Name">
  </div>

  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control col-6" id="email" name="email" placeholder="Email">
  </div>

  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control col-6" id="password" name="password" placeholder="Password">
  </div>

  <div class="form-group">
    <label for="date">Date</label>
    <input type="date" class="form-control col-6" id="date" name="date" placeholder="Date">
  </div>

  <select name="genre" id="genre" class="form-select col-6">
    <option value="Masculino">Masculino</option>
    <option value="Feminino">Feminino</option>
    <option value="Outro">Outro</option>
  </select>

  <div class="form-group">
    <label for="affiliation_1">Affiliation 1</label>
    <input type="text" class="form-control col-6" id="affiliation_1" name="affiliation_1" placeholder="Affiliation 1">
  </div>

  <div class="form-group">
    <label for="affiliation_2">Affiliation 2</label>
    <input type="text" class="form-control col-6" id="affiliation_2" name="affiliation_2" placeholder="Affiliation 2">
  </div>

  <div class="form-group">
    <label for="cpf">CPF</label>
    <input type="text" class="form-control col-6" id="cpf" name="cpf" placeholder="CPF">
  </div>
  <div class="form-group">
    <label for="rg">RG</label>
    <input type="text" class="form-control col-6" id="rg" name="rg" placeholder="RG">
  </div>

  <div class="form-group">
    <label for="address">Address</label>
    <input type="text" class="form-control col-6" id="address" name="address" placeholder="Address">
  </div>
  <div class="form-group">
    <label for="city">City</label>
    <input type="text" class="form-control col-6" id="city" name="city" placeholder="City">
  </div>

  <div class="form-group">
    <label for="state">State</label>
    <input type="text" class="form-control col-6" id="state" name="state" placeholder="State">
  </div>

  <div class="form-group">
    <label for="cep">CEP</label>
    <input type="text" class="form-control col-6" id="cep" name="cep" placeholder="CEP">
  </div>

  <div class="form-group">
    <label for="neighborhood">Neighborhood</label>
    <input type="text" class="form-control col-6" id="neighborhood" name="neighborhood" placeholder="Neighborhood">
  </div>

  <div class="form-group">
    <label for="number">Number</label>
    <input type="text" class="form-control col-6" id="number" name="number" placeholder="Number">
  </div>

  <button type="submit" class="btn btn-primary">Register</button>
</form>
<h2>Resultado</h2>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $register = new Register(@$_POST['name'], @$_POST['email'], @$_POST['password'], @$_POST['date'], @$_POST['genre'], @$_POST['affiliation_1'], @$_POST['affiliation_2'], @$_POST['cpf'], @$_POST['rg'], @$_POST['address'], @$_POST['city'], @$_POST['state'], @$_POST['cep'], @$_POST['neighborhood'], @$_POST['number']);
}
?>