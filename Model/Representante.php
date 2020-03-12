<?php

class Representante{

private $pdo;

public function __construct(){
  $pdo = new PDO("mysql:host=127.0.0.1;dbname=Catchuro","root","root");
}
public function cadastroRepresentante($nome,$email,$tel,$marca){
  echo "oi";
  /*
  $prepare = $this->pdo->prepare("INSERT INTO Usuario(Codigo, Nome, Email, Telefone, Marca) values(null,?,?,?,?)");

//$prepare = $this->pdo->prepare("INSERT INTO Representante(Codigo,Nome,Email,Telefone,Marca) VALUES(null,'sda','sda',2322,'sda')");

$prepare->bindParam(1,$nome);
$prepare->bindParam(2,$email);
$prepare->bindParam(3,$tel);
$prepare->bindParam(4,$marca);

$prepare->execute();*/
}

}

?>
