<?php
class Carrinho{
    private $pdo;

    public function __construct(){
        $this->pdo = new PDO('mysql:host=localhost;dbname=Catchuro','4vets','4vets');
    }

    public function resgatarCarrinho(){
      @session_start();

      $total = 0.0;

      foreach ($this->pdo->query("select * from Carrinho inner join Produtos where Carrinho.ProdutoID = Produtos.ProdutoID and sessaoID = {$_SESSION['sessaoID']} ") as $itemCarrinho) {
    $preco = $itemCarrinho['Quantidade'] * $itemCarrinho['Preco'];
      echo "
          <tr>
            <td>dsad</td>
                <td>{$itemCarrinho['Quantidade']}</td>
                <td>R$ {$preco}</td>
          </tr>
          ";

  $total += $preco;
}


      echo "<tr>
      <td>
      <h1>Total:<small>R$ ".$total."</small></h1>
        </td>
      </tr>";


    }

    public function enviarProdutoCarrinho(){
             @session_start();
             echo "oi <br>";

             foreach($this->pdo->query("SELECT * FROM Produtos WHERE ProdutoID = ".$_POST['id']."") as $produto){

             $prepare = $this->pdo->prepare("INSERT INTO Carrinho values(null,?,?,?,?)");
             $prepare->bindParam(1,$_POST['id']);
             $prepare->bindParam(2,$_POST['quantidade']);
              $prepare->bindParam(3,$_SESSION['nome']);
              $prepare->bindParam(4,$_SESSION['sessaoID']);

             $prepare->execute();
             }

             echo $prepare->rowCount();
             if($prepare->rowCount() == 1){
             header("location: ../View/Carrinho.php");
             }else{

echo "
<script>
alert('Falha ao realizar a compra,tente novamente mais tarde.');
window.locatio.href = '../View/Catalogo.php';
</script>
";
             }

           }
    public function removerProdutoCarrinho(){
        echo "Metodo remover produto carrinho";
    }
    public function finalizarCompras(){
        if($total<110){
            echo "
            <script>
            alert('A compra deve ultrapassar o valor de R$110');
            window.locatio.href = '../View/Catalogo.php';
            </script>

            ";
        }
        echo "Metodo remover produto carrinho";
    }

}

?>
