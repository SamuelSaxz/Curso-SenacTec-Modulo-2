<?php
include_once 'Address.php';
include_once 'Database.php';
class Usuario extends Database implements Address
{
  protected $name, $email, $password, $date, $genre, $affiliation, $cpf, $rg, $address, $city, $state, $cep, $neighborhood, $number;

  public function __construct( $name , $email, $password, $date, $genre, $affiliation_1, $affiliation_2, $cpf, $rg, $address, $city, $state, $cep, $neighborhood, $number)
  {
    parent::__construct();
    $this->setName($name);
    $this->setEmail($email);
    $this->setPassword($password);
    $this->setDate($date);
    $this->setGenre($genre);
    $this->setAffiliation($affiliation_1, $affiliation_2);
    $this->setCpf($cpf);
    $this->setRg($rg);
    $this->setAddress($address);
    $this->setCity($city);
    $this->setState($state);
    $this->setCep($cep);
    $this->setNeighborhood($neighborhood);
    $this->setNumber($number);
  }

  protected function getName()
  {
    return $this->name;
  }

  protected function getEmail()
  {
    return $this->email;
  }

  protected function getPassword()
  {
    return $this->password;
  }

  protected function setName($name)
  {
    $this->name = $name;
  }

  protected function setEmail($email)
  {
    $this->email = $email;
  }

  protected function setPassword($password)
  {
    $this->password = $password;
  }

  protected function setDate($date)
  {
    $this->date = $date;
  }

  protected function getDate()
  {
    return $this->date;
  }

  protected function setGenre($genre)
  {
    $this->genre = $genre;
  }

  protected function getGenre()
  {
    return $this->genre;
  }

  protected function setAffiliation($affiliation_1, $affiliation_2)
  {
    $this->affiliation = [$affiliation_1, $affiliation_2];
  }

  protected function getAffiliation()
  {
    return $this->affiliation;
  }

  protected function setCpf($cpf)
  {
    $this->cpf = $cpf;
  }

  protected function getCpf()
  {
    return $this->cpf;
  }

  protected function setRg($rg)
  {
    $this->rg = $rg;
  }

  protected function getRg()
  {
    return $this->rg;
  }

  public function setAddress($address)
  {
    $this->address = $address;
  }

  public function getAddress()
  {
    return $this->address;
  }

  public function setCity($city)
  {
    $this->city = $city;
  }

  public function getCity()
  {
    return $this->city;
  }

  public function setState($state)
  {
    $this->state = $state;
  }

  public function getState()
  {
    return $this->state;
  }

  public function setCep($cep)
  {
    $this->cep = $cep;
  }

  public function getCep()
  {
    return $this->cep;
  }

  public function setNeighborhood($neighborhood)
  {
    $this->neighborhood = $neighborhood;
  }

  public function getNeighborhood()
  {
    return $this->neighborhood;
  }

  public function setNumber($number)
  {
    $this->number = $number;
  }

  public function getNumber()
  {
    return $this->number;
  }
}