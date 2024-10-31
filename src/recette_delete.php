<?php
require 'recipes.php';
require_once 'header.php';



$recipe = false;
$errors = [];
$messages = [];

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $recipe = getRecipeById($pdo, $id);
    if ($recipe) {
        if (deleteRecipe($pdo, $id)) {
            $messages[] = "La recette a bien été supprimée";
        } else {
            $errors[] = "Une erreur s'est produite lors de la suppression";
        }
    } else {
        $errors[] = "La recette n'existe pas";
    }
}
?>
<div class="px-4 py-5 my-5 text-left">
  <h1 class="display-5 fw-bold text-body-emphasis">Suppression de recette</h1>
  <?php foreach ($errors as $error) { ?>
    <div class="alert alert-danger" role="alert">
        <?= $error; ?>
    </div>
<?php } ?>
<?php foreach ($messages as $message) { ?>
    <div class="alert alert-success" role="alert">
        <?= $message; ?>
    </div>
<?php } ?>
</div>
<div class="mb-3 text-center">
    <a href="index.php" class="btn btn-info ">Retour à l'accueil</a>
</div>

