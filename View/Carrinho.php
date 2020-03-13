<!DOCTYPE html>
<?php
@session_start();
if(@$_SESSION['logado'] == !true){
    echo("'<script>alert('Realize o login antes de visualizar o carrinho');window.location.href = 'Login.php';</script>'");

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
<link rel="stylesheet" href="css/nav.css">
<link rel="stylesheet" href="css/carrinho.css">

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
<fieldset>
  <legend>Carrinho</legend>
<table >
  <tr>
<th>Produto</th>
<th>Quantidade</th>
<th id='preco'>Preço</th>
</tr>
<?php
include_once('../Controller/resgatarCarrinhoController.php');
?>

<tr>
  <form action="">
<td><button id='finalizar' class='div-button'>Finalizar Compra</button></td>
</form>
<form action="Catalogo.php">
<td><button id='continuar' class='div-button' id='abandonar'>Continuar Compra</button></td>
</form>
<form action="">
<td><button id='abandonar'  class='div-button' id='abandonar'>Abandonar Compra</button></td>
</form>

</tr>
</table>

</fieldset>
<footer>
  <p id='copy'>&copy 4Vets</p>
</footer>
</body>
</html>
<script src='js/menuMobile.js'></script>
