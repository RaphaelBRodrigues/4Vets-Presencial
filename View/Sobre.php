<!DOCTYPE html>
<!--
<?php
@session_start();
if(@$_SESSION['logado'] == !true){
    echo("'<script>alert('Realize o login antes de visualizar o catálogo');window.location.href = 'Login.php';</script>'");

   // header("location: Login.php");
}
?>
-->
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="theme-color" content="#95b5a6">
<link rel="shortcut icon" href="https://www.kindpng.com/picc/m/169-1693411_cats-dogs-cats-and-dogs-heart-shaped-svg.png">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">

<link rel="stylesheet" href="css/index.css">
<link rel="stylesheet" href="css/marca.css">
<link rel="stylesheet" href="css/Sobre.css">
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
<div id='sess'>
<h2 id='titulo-sessao-sobre'>Um pouco sobre a nossa história</h2>
        <div id='sobre-linha'>
                <img id='sobre-imagem' src="https://cdn0.iconfinder.com/data/icons/tutor-icon-set/512/Globe_icon-512.png" alt="">

            <div id='sobre-texto'>
                "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore 
                veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim
                 ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia 
                 consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque 
                 porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, 
                 adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore 
                 et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam,
                  quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi
                   ut aliquid ex ea commodi consequatur? Quis autem vel eum iure 
                   reprehenderit qui in ea voluptate velit esse quam nihil molestiae 
                   consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur? <br><br><br>
                   Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                   doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore 
                   veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim
                    ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia 
                    consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque 
                    porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, 
                    adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore 
                    et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam,
                     quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi
                      ut aliquid ex ea commodi consequatur? Quis autem vel eum iure 
                      reprehenderit qui in ea voluptate velit esse quam nihil molestiae 
                      consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur? 
                </div>
        </div>
        </div>

<footer>
  <p id='copy'>&copy 4Vets</p>
</footer>
</body>
</html>
<script src='js/menuMobile.js'></script>
