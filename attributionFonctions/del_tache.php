<?php

if(isset($_GET['id']) && !empty($_GET['id']))
{
	require_once("tache.dao.php");
	$sup=new TacheDAO();
	$supprim=$sup->SupTache($_GET['id']);
	header('Location: taches.php');
}

?>