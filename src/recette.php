<?php
require_once  "recipes.php";
require_once "header.php";
require_once "session.php";

$error = false;
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $recipe = getRecipeById($pdo, $id);

    if (!$recipe) {
        $error = true;
    }
} else {
    $error = true;
}
?>
<div>
        <?php if (empty($_SESSION["user"])) {?>
        <a href="login.php" class="btn btn-info m-3">Se connecter</a>
          <?php } else { ?>
            <a href="logout.php" class="btn btn-info m-3">Se déconnecter</a>
            <?php } ?>
            </div>
<div class="container  ">
<?php if (!$error) { ?>
    <div class="row ">
        <div class="col-12">
            <h1 class="col-lg-8 d-flex justify-content-center text-primary text-center my-3"><?=htmlentities($recipe["title"]); ?></h1>
            <p class="col-lg-8 d-flex justify-content-center lead"><?=nl2br(htmlentities($recipe["recette"])); ?></p>
        </div>
    </div>
<?php } ?>
<?php if (!empty($_SESSION["user"])) {?>
    <div class="mb-3">
    <a href="recette_modify.php?id=<?=$recipe['id'];?>" class="btn btn-info ">Modifier la recette </a>
  </div>
  <div class="mb-3">
    <a href='recette_delete.php?id=<?php echo $recipe['id']?>' class="btn btn-info" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette recette ?')">Supprimer</a>
  </div>
<?php } ?>

<div class="mb-3 text-center">
    <a href="index.php" class="btn btn-info ">Page d'accueil</a>
</div>
</div>