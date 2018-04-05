<?php 

require '../App/autoloader.php';
App\autoloader::register();

if (isset($_GET['p'])){
	$p=$_GET['p'];
}else{
	$p='home';
}


ob_start();

if($p==='home'){
	require '../Pages/home.php';
}elseif ($p==='single') {
	require '../Pages/single.php';
}elseif ($p==='categorie') {
	require '../Pages/categories.php';
}
$content=ob_get_clean();

require '../Pages/Templates/default.php';