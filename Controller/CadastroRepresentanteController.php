<?php
require '../Model/Representante.php';



$rep = new Representante();

echo $rep->CadastroRepresentante($_POST['nome'],$_POST['email'], $_POST['tel'],$_POST['marca']);


?>
