<?php
require '../Model/Representante.php';



$rep = new Representante();

echo $rep->cadastroRepresentante($_POST['nome'],$_POST['senha'],$_POST['email'], $_POST['tel'], $_POST['marca']);


?>
