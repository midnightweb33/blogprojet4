<h1>page Acceuil</h1>

<div class="row">
  <div class="col-sm-8">
    <?php foreach (App\Model\Article::getLast() as $post) : ?>
        <h2><a href="index.php?p=single&id=<?= $post->id;?>"><?= $post->title; ?></a></h2>
        <h3><em><?= $post->categorie ?></em></h3>
        <p><?= substr($post->content,0,250); ?> </p>
    <?php endforeach; ?>
  </div>
  <div class="col-sm-4">
    <?php foreach (\App\Model\Categorie::all() as $categorie): ?>
      <li><a href="index.php?p=categorie&id=<?= $categorie->id ?>"><?= $categorie->title; ?></a></li>
    <?php endforeach; ?> 
    
  </div>
</div>