<?php
require '../Model/Representante.php';



$rep = new Representante();

echo $rep->login($_POST['nome'],$_POST['senha']);


?>
