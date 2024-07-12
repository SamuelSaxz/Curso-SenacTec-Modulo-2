<?php

interface Address {
  public function setAddress($address);
  public function getAddress();
  public function setCity($city);
  public function getCity();
  public function setState($state);
  public function getState();
  public function setCep($cep);
  public function getCep();
  public function setNeighborhood($neighborhood);
  public function getNeighborhood();
  public function setNumber($number);
  public function getNumber();
}