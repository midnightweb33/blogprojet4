<?php 
 	use App\Model\Categorie;
 	use App\Model\Article;
 	
	$categorie = Categorie::find($_GET['id']);
	$article=Article::lastByCategory($_GET['id']);
	$categories= Categorie::all();
?>