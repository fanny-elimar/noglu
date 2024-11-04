<?php
require_once "header.php";
require_once "user.php";
require_once "session.php";

$messages=[];
$errors=[];

if (isset($_POST['userLogin'])) {
    $user = verifyUserLoginPassword($pdo, $_POST['username'], $_POST['password']);

    if ($user) {
        session_regenerate_id(true);
        $_SESSION["user"] = $user;
        header("location: index.php");
    }
        else {
            $errors[] = "Nom d'utilisateur ou mot de passe incorrect";
        }
}

?>
<div class="form-signin col-lg-4 col-md-7 col-9 m-auto mb-5">
    <form method="POST">
        <h1 class="h4 mb-3 fw-normal">Entrez vos identifiants de connexion</h1>
        <?php foreach ($messages as $message) { ?>
        <div class="alert alert-success" role="alert">
            <?= $message; ?>
        </div>
    <?php } ?>
    <?php foreach ($errors as $error) { ?>
        <div class="alert alert-danger" role="alert">
            <?= $error; ?>
        </div>
    <?php } ?>
        <div class="form-floating mb-4">
            <input type="username" class="form-control" id="floatingInput" placeholder="fanny123" name="username">
            <label for="username">Nom d'utilisateur</label>
        </div>
        <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
            <label for="password">Mot de passe</label>
        </div>
        <div class="form-check text-start my-3">
            <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">Se souvenir de moi</label>
        </div>
        <button class="btn btn-primary w-100 py-2" type="submit" name="userLogin">Se connecter</button>
    </form>
</div>
<div class="mb-3 text-center">
    <a href="index.php" class="btn btn-info ">Page d'accueil</a>
</div>