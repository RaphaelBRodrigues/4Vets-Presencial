<?php

class Representante{

private $pdo;

public function __construct(){
  $pdo = new PDO("mysql:host=127.0.0.1;dbname=Catchuro","root","root");
}
public function cadastroCliente(){
echo "ola";
}

public function login($nome,$senha){
  echo "oi";
}
}