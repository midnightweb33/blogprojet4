<?php 

$post= App\Main::getDb()->prepare('SELECT * FROM posts WHERE id= ?',[$_GET['id']],'App\Model\Article',true);

?>

<h1><?= $post->title ?></h1>
<p><?= $post->content ?></p>
