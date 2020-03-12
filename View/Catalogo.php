<!DOCTYPE html>

<?php
@session_start();
if($_SESSION['logado'] == !true){
    echo("'<script>alert('Realize o login antes de visualizar o catálogo');window.location.href = 'Login.php';</script>'");

   // header("location: Login.php");
}
?>

<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="theme-color" content="#95b5a6">
<link rel="shortcut icon" href="https://www.kindpng.com/picc/m/169-1693411_cats-dogs-cats-and-dogs-heart-shaped-svg.png">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">

<link rel="stylesheet" href="css/index.css">
<link rel="stylesheet" href="css/marca.css">
    <title>4Vets</title>
</head>
<body>
<nav id='cabb' class='menu'>
    <ul>
        <li id='logo'><a href="../index.php"><img id='logo-img' src="https://grupo4vets.com.br/images/logo.png" alt=""></a></li>
        <li><button onclick='menu()' id='menu-button'  class='material-icons'>menu</button></li>

        <li id='menu-catalogo' class='menu-item word retratil'><a href="Catalogo.php">Catálogo</a></li>
        <li id='menu-sobre' class='menu-item word retratil'><a href="Sobre.php">Sobre nós</a></li>
        <li id='menu-parceiro' class='menu-item word retratil'><a href="Parceiros.php">Parceiros</a></li>
        <li id='menu-contato' class='menu-item word retratil'><a href="Contatos.php">Contatos</a></li>

        <li id='menu-carrinho' class='material-icons icon-tchau menu-item retratil'><a href="Carrinho.php">add_shopping_cart  </a></li>
        <li id='menu-login' class='material-icons  icon-tchau menu-item retratil'><a href="Login.php">vpn_key</a></li>
    </ul>
</nav>

<center>
<table>

    <tr>
        
        <td class='linha-produt'>
            <h2 class='titulo-produto'>Produto ta</h2>
            <h3 class='marca-produto'> Marca 1</h3>
            <img class='imagem-produto' src="https://www.pngkit.com/png/full/311-3119714_download-png-desenho-de-cabea-de-cachorro.png" alt="">
            <h3 class='valor-produto'> R$32,00</h3>
            <center>
                <form action="../Controller/enviarProdutoCarrinho.php">
                <input type="text" disabled value='42 produtos no estoque'><br><br>
          <input name='quantidade' class='quantidade-produto' type="number" placeholder='Quantidade'><br><br>
          <button type='submit' value='1' name='id' class='adicionarCarrinho'>Adicionar ao carrinho</button>
          </form>
          </center>
        </td>
     
        
        


        
        <td class='linha-produt'>
            <h2 class='titulo-produto'>Produto ta</h2>
            <h3 class='marca-produto'> Marca 1</h3>
            <img class='imagem-produto' src="https://www.pngkit.com/png/full/311-3119714_download-png-desenho-de-cabea-de-cachorro.png" alt="">
            <h3 class='valor-produto'> R$32,00</h3>
            <center>
            <form action="../Controller/enviarProdutoCarrinho.php">
                <input type="text" disabled value='42 produtos no estoque'><br><br>
          <input  class='quantidade-produto' type="number" placeholder='Quantidade'><br><br>
          <button class='adicionarCarrinho'>Adicionar ao carrinho</button>
</form>
</center>

        </td>
       
       

        <td class='linha-produt'>
            <h2 class='titulo-produto'>Produto ta</h2>
            <h3 class='marca-produto'> Marca 1</h3>
            <img class='imagem-produto' src="https://www.pngkit.com/png/full/311-3119714_download-png-desenho-de-cabea-de-cachorro.png" alt="">
            <h3 class='valor-produto'> R$32,00</h3>
            <center>
            <form action="../Controller/enviarProdutoCarrinho.php">
                <input type="text" disabled value='42 produtos no estoque'><br><br>
          <input  class='quantidade-produto' type="number" placeholder='Quantidade'><br><br>
          <button class='adicionarCarrinho'>Adicionar ao carrinho</button>
</form>
</center>

        </td>
       
      
        
    </tr>

    
</table>
</center>
</body>
</html>
<script src='js/menuMobile.js'></script>
