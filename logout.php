<?php
//Inicia todas as sessões
session_start();
//Destroi todas as sessões 
session_destroy();
//Para destruir apenas uma sessão especifica
//unset($_SESSION["Nome da sessão"]);
header('Location: login.html');
exit();
?>