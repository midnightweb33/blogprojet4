<?php 
	session_start();

	require '../App/autoloader.php';
	App\autoloader::register();

	$app =App\Main::getInstance();
	$posts = $app->getTable('posts');
	var_dump($posts->all());
/*	$config=  App\Config::getInstance();

	var_dump(App\Main::getTable('Posts'));
	var_dump(App\Main::getTable('Users'));
	var_dump(App\Main::getTable('Categories'));
	


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

require '../Pages/Templates/default.php';*/