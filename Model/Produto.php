<?php

class Produto{
    private $pdo;
public function __construct(){
    $this->pdo = new PDO('mysql:host=localhost;dbname=Catchuro','4vets','4vets');
}
    public function consultaProdutos(){
        foreach($this->pdo->query("SELECT * FROM Produtos where Status = 1") as $produto){
            echo "
            
               
        <td class='linha-produt'>
        <h2 class='titulo-produto'>".$produto['Nome']."</h2>
        <h3 class='marca-produto'> ".$produto['Marca']."</h3>
        <img class='imagem-produto' src='https://www.pngkit.com/png/full/311-3119714_download-png-desenho-de-cabea-de-cachorro.png' alt=''>
        <h3 class='valor-produto'> R$".$produto['Preco']."</h3>
        <center>
            <form action='../Controller/enviarProdutoCarrinho.php'>
            <input type='text' disabled value='".$produto['Estoque']." produtos no estoque'><br><br>
      <input name='quantidade' class='quantidade-produto' type='number' placeholder='Quantidade'><br><br>
      <button type='submit' value='".$produto['ProdutoID']."' name='id' class='adicionarCarrinho'>Adicionar ao carrinho</button>
      </form>
      </center>
    </td>
            ";
        }
    }
}

?>
