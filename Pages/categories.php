<?php 
 	use App\Model\Categorie;
 	use App\Model\Article;


	$categorie = Categorie::find($_GET['id']);
		if($categorie===false){
			echo "page incorrect";
		}
	$posts=Article::lastByCategory($_GET['id']);
	$categories= Categorie::all();
?>
<h1><?= $categorie->title;?></h1>
<div class="row">
  <div class="col-sm-8">
    <?php foreach($posts as $post): ?>
        <h2><a href="index.php?p=single&id=<?= $post->id;?>"><?=$post->title; ?></a></h2>
        <h3><?= $post->categorie ?></h3>
        <p><?= substr($post->content,0,250);?> </p>
    <?php endforeach; ?>
  </div>
  <div class="col-sm-4">
    <?php foreach($categories as $categorie): ?>
      <li><a href="index.php?p=categorie&id=<?= $categorie->id ?>"><?= $categorie->title; ?></a></li>
    <?php endforeach; ?> 
    
  </div>
</div>