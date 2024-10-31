<?php
require 'recipes.php';
require_once "header.php";
$recipes=getRecipes($pdo, 10);
?>


      <h1 class="text-primary text-center">Mes recettes sans gluten</h1>
      <div class="container  ">
        <div class="row gap-3 justify-content-center">
        <?php foreach ($recipes as $recipe) {?>

<div class="card mx-3 bg-light text-primary col-lg-3 col-md-5 col-sm-8 mb-3" style="width: 21rem;">
  <div class="card-body ">
    <h5 class="card-title mb-5"><?=htmlentities($recipe['title'])?></h5>
    <h6 class="card-subtitle mb-5 text-body-secondary"><?=nl2br(htmlentities($recipe['description']))?></h6>
    <p class="card-text"><?php echo substr(nl2br(htmlentities($recipe['recette'])),0,200).'...';?></p>
  </div>
  <div class="mb-3">
    <a href="recette.php?id=<?=$recipe['id'];?>" class="btn btn-info ">Voir la recette </a>
  </div>
</div>



       <?php } ?>
</div>
<div class="mb-3 text-center">
    <a href="recette_add.php" class="btn btn-info ">Ajouter une recette </a>
  </div>
    </body>
</html>
