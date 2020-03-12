<?php

class Representante{

private $pdo;

public function __construct(){
  $this->pdo = new PDO('mysql:host=localhost;dbname=Catchuro','4vets','4vets');
}
public function cadastroCliente(){
echo "ola";
}

public function login($nome,$senha){
  echo "oi";
}
}