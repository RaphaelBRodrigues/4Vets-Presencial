<!DOCTYPE html>
<?php
@session_start();
if($_SESSION['logado'] == true){
    echo("'<script>alert('O senhor(a) já está logado');window.location.href = 'Catalogo.php';</script>'");

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
<link rel="stylesheet" href="css/cadastro.css">
<link rel="stylesheet" href="css/nav.css">
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
<body>
    <fieldset>
        <legend>Cadastro</legend>
        <form method='post' action="../Controller/cadastroRepresentanteController.php">
        <table>
        <tr>
            <td class=''><label for="nome">Nome
</label></td>

                <td><input id='nome' name='nome' type="text"></td>

            </tr>
            <tr>
            <td class=''><label for="senha">Senha</label></td>

            <td><input id='senha' name='senha' type="password"></td>


            </tr>
            <tr>
            <td class=''><label for="email">Email</label></td>

            <td><input id='email' name='email' type="email"></td>


            </tr>
            <tr>
            <td class=''><label for="tel">Telefone</label></td>

            <td><input id='tel' name='tel' type="number"></td>

            <tr>
                <td><br>
                <select name="marca" id="marca">
    <option value="1">Marca 1</option>
    <option value="2">Marca 2</option>
    <option value="3">Marca 3</option>
    <option value="4">Marca 4</option>
    <option value="5">Marca 5</option>
    </select>
                </td>
            </tr>
  
            
        
        </table>
        <button class='div-button' type='submit'>Entrar</button>

        </form>
        
    </fieldset>
    <footer>
  <p id='copy'>&copy 4Vets</p>
</footer>
</body>
</html>