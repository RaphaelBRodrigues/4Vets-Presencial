<?php

class Cliente{

private $pdo;

public function __construct(){
  $this->pdo = new PDO('mysql:host=localhost;dbname=Catchuro','4vets','4vets');
}



public function resgatarRepresentantes(){
  echo "
  <select name='representante' id='representante'>

  ";

  foreach ($this->pdo->query("SELECT * FROM Representante") as $rep) {
    echo "<option value={$rep['RepresentanteID']}> ".$rep['Nome']." </option>";
  }

  echo "
  </select>

";
}


public function cadastroCliente(){
$_GET['ramo'] = 'ramo';
//$prepare = $this->pdo->prepare("INSERT INTO Cliente(ClienteID,Nome,Senha,Email,Tel,NomeFantasia,Ramo,CPF,CNPJ,CEP,Numero,Complemento,RepresentanteID) VALUES(null,?,?,?,?,?,?,?,?,?,?,?,?)");
$prepare = $this->pdo->prepare("INSERT INTO Cliente(ClienteID,Nome,Senha,Email,Tel,NomeFantasia,Ramo,CPF,CNPJ,CEP,Numero,Complemento,RepresentanteID) VALUES(null,?,?,?,?,?,?,?,?,?,?,?,?)");

  $prepare->bindParam(1,$_GET['nome']);
  $prepare->bindParam(2,$_GET['senha']);
  $prepare->bindParam(3,$_GET['email']);
  $prepare->bindParam(4,$_GET['tel']);
  $prepare->bindParam(5,$_GET['nFantasia']);
  $prepare->bindParam(6,$_GET['ramo']);
  $prepare->bindParam(7,$_GET['cpf']);
  $prepare->bindParam(8,$_GET['cnpj']);
  $prepare->bindParam(9,$_GET['cep']);
  $prepare->bindParam(10,$_GET['numero']);
  $prepare->bindParam(11,$_GET['complemento']);
  $prepare->bindParam(12,$_GET['representante']);


  $prepare->execute();

  if($prepare->rowCount() == 1){
  //  header("location: ../View/Catalogo.php")
  session_start();
  echo $_SESSION['sessaoID'] = rand();

  $_SESSION['logado'] = true;
  $_SESSION['nome'] = $_GET['nome'];
  $_SESSION['categoria'] = "Cliente";

  echo "
  <script>
  alert('Cadastro realizado com sucesso!');
  window.location.href = '../View/Catalogo.php';
  </script>";
  }else{
    echo "
  <script>
  alert('Falha ao realizar o cadastro,tente novamente!');
  window.location.href = '../View/cadastroCliente.php';
  </script>
    ";
  }

}

public function login($nome,$senha){
  $nomeTratad = strtolower($nome);
  $senhaTratad = strtolower($senha);

  //foreach ($this->pdo->query("select * FROM Representante WHERE Nome = '{$nomeTratad}'") as $representanteBase) {
    foreach ($this->pdo->query("select * FROM Cliente") as $clienteBase) {
    if($nomeTratad == $representanteBase['Nome']){
      if ($senhaTratad == $representanteBase['Senha']) {
        session_start();
        echo $_SESSION['sessaoID'] = rand();

        $_SESSION['logado'] = true;
        $_SESSION['nome'] = $nome;
        $_SESSION['categoria'] = "Representante";
        echo "bateu <br>";
        echo "
        <script>
        alert('Login realizado com sucesso!');
        window.location.href = '../View/Catalogo.php';
        </script>
        ";
      }else{
        echo "senha inválida <br>";
        echo "
        <script>
        alert('Senha inválida!');
        window.location.href = '../View/LoginRepresentante.php';
        </script>";

      }
    }else{
      echo "Usuário ou senha inválidos <br>";
      echo "
      <script>
      alert('Usuário ou senha inválida!');
      window.location.href = '../View/LoginRepresentante.php';
      </script>";

    }
  }

}
}
