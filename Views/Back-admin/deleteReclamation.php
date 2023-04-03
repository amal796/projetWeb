
<?php
require_once $_SERVER['DOCUMENT_ROOT'].'\projet-web\config.php';
require_once $_SERVER['DOCUMENT_ROOT'].'\projet-web\Model\reclamation.php';
require_once $_SERVER['DOCUMENT_ROOT'].'\projet-web\Controller\reclamationController.php';
$reclamationC=new reclamationC();
$reclamationC->supprimerReclamation($_GET["id"]);
header('Location:reclamation.php');
?>