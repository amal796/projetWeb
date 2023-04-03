
<?php
require_once $_SERVER['DOCUMENT_ROOT'].'\projet-web\config.php';
require_once $_SERVER['DOCUMENT_ROOT'].'\projet-web\Model\evaluation.php';
require_once $_SERVER['DOCUMENT_ROOT'].'\projet-web\Controller\evaluationController.php';
$evaluationC=new evaluationC();
$evaluationC->supprimerEvaluation($_GET["id"]);
header('Location:evaluation.php');
?>