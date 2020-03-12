<?php

class Representante{

private $pdo;

public function __construct(){
  $this->pdo = new PDO('mysql:host=localhost;dbname=Catchuro','4vets','4vets');
}
public function cadastroRepresentante($nome,$email,$tel,$marca){
  echo "oi";
  

$prepare = $this->pdo->prepare("INSERT INTO Representante(RepresentanteID,Nome,Senha,Email,Telefone) VALUES(null,'sda','sda','2322',2424)");

$prepare->bindParam(1,$nome);
$prepare->bindParam(2,$email);
$prepare->bindParam(3,$tel);
$prepare->bindParam(4,$marca);

$prepare->execute();
return $prepare->rowCount();
}

public function login($nome,$senha){
  echo "Copiar do model cliente";
}

}

?>
