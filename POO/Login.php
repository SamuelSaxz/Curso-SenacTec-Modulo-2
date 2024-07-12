<?php
include_once 'Usuario.php';

class Login extends Usuario
{
  private $user;

  public function __construct($email, $password)
  {
    parent::__construct(null, $email, $password, null, null, null, null, null, null, null, null, null, null, null, null);
    echo $this->execLogin();
  }
  private function login()
  {
    $email = mysqli_real_escape_string($this->connect(), $this->getEmail());
    $password = mysqli_real_escape_string($this->connect(), $this->getPassword());

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $sql = mysqli_query($this->connect(), "SELECT * FROM user WHERE email = '$email'");
      if (mysqli_num_rows($sql) > 0) {

        $list = mysqli_fetch_assoc($sql);

        if ($list['password'] == $password) {
          echo "Permissão concedida!";
        } 
        else {
          echo "Senha Inválida!";
        }
      } 
      else {
        echo "Usuário não cadastrado!";
      }
    } 
    else {
      echo "E-mail Inválido!";
    }
  }

  public function execLogin()
  {
    $this->login();
  }
}

?>

<h1>Login</h1>
<form action="/samuelAguilar/index.php?pagina=login" method="post" class="col-6 d-flex flex-column gap-3">
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control col-6" id="email" name="email" placeholder="Email">
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control col-6" id="password" name="password" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-primary">Login</button>
</form>
<h2>Resultado</h2>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $login = new Login(@$_POST['email'], @$_POST['password']);
}
?>