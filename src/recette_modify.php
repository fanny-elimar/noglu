<?php
require_once  "recipes.php";
require_once "header.php";

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

if (!$errors) {
  if (isset($_GET["id"])) {
      // Avec (int) on s'assure que la valeur stockée sera de type int
      $id = (int)$_GET["id"];
      } else {
      $id = null;
      }
if (isset($_POST['saveRecipe'])) {
$res = saveRecipe($pdo, $_POST['title'], $_POST["description"], $_POST["recette"], $id);

    if ($res) {
        $messages[] = "La recette a bien été sauvegardée";
        //On vide le tableau article pour avoir les champs de formulaire vides
        if (!isset($_GET["id"])) {
            $recipe = [
                'title' => '',
                'description' => '',
                'recette' => '',
            ];
        }
    } else {
        $errors[] = "La recette n'a pas été sauvegardée";
    }
}
}
?>
<div class="px-4 mb-5 mt-3 text-left">
  <h1 class="display-5 fw-bold text-body-emphasis">Ajouter une recette</h1>
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

<form method="POST" enctype="multipart/form-data">
  <div class="mb-3">
    <label for="title" class="form-label">Titre</label>
    <input name="title" type="text" class="form-control" id="text" aria-describedby="titre" value="<?= htmlentities($recipe['title']);?>">
  </div>
  <div class="mb-3">
    <label for="description" class="form-label">Description</label>
    <textarea rows="4" name="description" class="form-control" id="description"><?= htmlentities($recipe['description']);?></textarea>
  </div>
  <div class="mb-3">
    <label for="recette" class="form-label">Recette</label>
    <textarea name="recette" rows="12" class="form-control" id="recette"><?=htmlentities($recipe['recette']);?></textarea>
  </div>

  <button type="submit" class="btn btn-primary" name="saveRecipe">Enregistrer</button>
</form>

</div>
<div class="mb-3 text-center">
    <a href="index.php" class="btn btn-info ">Page d'accueil</a>
</div>