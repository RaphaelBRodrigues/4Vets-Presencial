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
    <fieldset>
        <legend>Cadastro</legend>
        <form method='get' action="../Controller/cadastroClienteController.php">
        <table>
        <tr>

        <td class=''><label for="nome">Nome</label></td>
                <td><input required id='nome' name='nome' type="text"></td>

            </tr>
            <tr>
            <td class=''><label for="senha">Senha</label></td>

            <td><input required id='senha' name='senha' type="password"></td>


            </tr>
            <tr>
            <td class=''><label for="email">Email</label></td>

            <td><input required id='email' name='email' type="email"></td>


            </tr>
            <tr>
            <td class=''><label for="tel">Telefone</label></td>

            <td><input required id='tel' name='tel' type="number"></td>

            <tr>
            <tr>
            <td class=''><label for="nFantasia">Nome Fantasia</label></td>

            <td><input required id='nFantasia' name='nFantasia' type="text"></td>

            <tr>
            <tr>
            <td class=''><label for="ramo">Ramo</label></td>

            <td>
              <input  id='ramo' name='ramo' type="checkbox" value='1'><label for="">PetShop</label>
              <input  id='ramo' name='ramo' type="checkbox" value='2'>  <label for="">Veterinário</label>
              <input  id='ramo' name='ramo' type="checkbox" value='3'>  <label for="">Banho e tosa</label>

            </td>

            <tr>
            <tr>
            <td class=''><label for="cpf">CPF</label></td>

            <td><input required id='cpf' name='cpf' type="number"></td>

            <tr>
            <tr>
            <td class=''><label for="cnpj">CNPJ</label></td>

            <td><input required id='cnpj' name='cnpj' type="number"></td>

            <tr>
            <tr>
            <td class=''><label for="cep">CEP</label></td>

            <td><input required id='cep' name='cep' type="number"></td>

            <tr>
            <tr>
            <td class=''><label for="numero">Número</label></td>

            <td><input required id='numero' name='numero' type="number"></td>

            <tr>
            <tr>
            <td class=''><label for="complemento">Complemento</label></td>

            <td><input required id='complemento' name='complemento' type="text"></td>

            <tr>
            <tr>
            <td class=''><label for="tel">Status</label></td>

            <td><input required id='tel' name='tel' disabled type="number"></td>

            <tr>
                <td>
               <label for="representante">Representante de marcas</label>

    <?php
    include("../Controller/resgatarRepresentantes.php");
    ?>
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
