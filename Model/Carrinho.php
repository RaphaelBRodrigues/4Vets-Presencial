<?php
class Carrinho{
    private $pdo;

    public function __construct(){
        $this->pdo = new PDO('mysql:host=localhost;dbname=Catchuro','4vets','4vets');
    }

    public function enviarProdutoCarrinho(){
        echo "Metodo enviar produto carrinho";
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