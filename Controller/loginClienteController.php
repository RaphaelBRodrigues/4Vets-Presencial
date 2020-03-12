<?php
require '../Model/Cliente.php';



$rep = new Cliente();

echo $rep->login($_POST['nome'],$_POST['senha']);


?>
