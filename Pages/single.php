<?php 
	use App\Main;
	use App\Model\Categorie;
	use App\Model\Article;
$post= App\Main::getDb()->prepare('SELECT * FROM posts WHERE id= ?',[$_GET['id']],'App\Model\Article',true);
	if($post===false){
		echo "Page Incorrect";
	}

	Main::setTitle($post->title);
	$categorie= categorie::find($post->category_id);
?>

<h1><?= $post->title ?></h1>

<p><em><?= $categorie->title ?></em></p>
<p><?= $post->content ?></p>
