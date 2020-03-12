<!DOCTYPE html>
<?php
@session_start();
if(@$_SESSION['logado'] == true){
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
<link rel="stylesheet" href="css/login.css">
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


    <fieldset>
        <legend>Login</legend>
        <form method='post' action="../Controller/loginRepresentanteController.php">
        <center>
        <table>
        <tr>
            <td class='material-icons'><label for="senha">format_bold
</label></td>

                <td><input id='nome' name='nome' placeholder='Usuário' type="text"></td>

            </tr>
            <tr>
            <td class='material-icons'><label for="senha">dialpad</label></td>

            <td><input id='senha' name='senha' placeholder='Senha' type="password"></td>


            </tr>
        
        </table><br>
        <button id='button-login' type='submit'>Entrar</button><br><br>
        <a id='cadastro' href="cadastroRepresentante.php">Não tenho cadastro!</a>
        </center>

        </form>
        
    </fieldset>
    <footer>
  <p id='copy'>&copy 4Vets</p>
</footer>
</body>
</html>
<script src='js/menuMobile.js'></script>
