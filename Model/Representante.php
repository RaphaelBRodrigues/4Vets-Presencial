<?php

class Representante{

private $pdo;

public function __construct(){
  $this->pdo = new PDO('mysql:host=localhost;dbname=Catchuro','4vets','4vets');
}
public function cadastroRepresentante($nome,$senha,$email,$tel,$marca){
  echo $nome."<br>";
  echo $senha."<br>";
  echo $email."<br>";
  echo $tel."<br>|";


$prepare = $this->pdo->prepare("INSERT INTO Representante(RepresentanteID,Nome,Senha,Email,Telefone,MarcaID) VALUES(null,?,?,?,?,?)");

$prepare->bindParam(1,$nome);
$prepare->bindParam(2,$senha);
$prepare->bindParam(3,$email);
$prepare->bindParam(4,$tel);
$prepare->bindParam(5,$marca);

$prepare->execute();

if($prepare->rowCount() == 1){
//  header("location: ../View/Catalogo.php")
session_start();
$_SESSION['logado'] = true;
$_SESSION['nome'] = $nome;
$_SESSION['categoria'] = "Representante";
echo $_SESSION['sessaoID'] = rand();


echo "
<script>
alert('Cadastro realizado com sucesso!');
window.location.href = '../View/Catalogo.php';
</script>";
}else{
  echo "
<script>
alert('Falha ao realizar o cadastro,tente novamente!');
window.location.href = '../View/cadastroRepresentante.php';
</script>
  ";
}
}

public function login($nome,$senha){
  $nomeTratad = strtolower($nome);
  $senhaTratad = strtolower($senha);

  //foreach ($this->pdo->query("select * FROM Representante WHERE Nome = '{$nomeTratad}'") as $representanteBase) {
    foreach ($this->pdo->query("select * FROM Representante") as $representanteBase) {
    if($nomeTratad == $representanteBase['Nome']){
      if ($senhaTratad == $representanteBase['Senha']) {
        session_start();
        $_SESSION['logado'] = true;
        $_SESSION['nome'] = $nome;
        $_SESSION['categoria'] = "Representante";
        echo $_SESSION['sessaoID'] = rand();

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

?>
