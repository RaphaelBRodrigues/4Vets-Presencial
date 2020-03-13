<?php
require '../Model/Carrinho.php';


$rep = new Carrinho();
if(empty($_POST['quantidade']) || ($_POST['quantidade'] == 0)){
//header("location: ../View/Catalogo.php");
echo "

<meta charset='utf-8'>
<script>alert('Por favor insira uma quantidade válida no produto');
window.location.href= '../View/Catalogo.php';
</script>
";
}else{
    echo $rep->enviarProdutoCarrinho();

}



?>
