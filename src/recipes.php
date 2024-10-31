<?php
require_once 'pdo.php';

function getRecipes(PDO $pdo, int $limit = null, int $page = null) :array|bool  {
    $sql = "SELECT * FROM recettes ORDER by id DESC";
    
    if ($limit && !$page) {
        $sql .= " LIMIT :limit";
    }
    if ($limit && $page) {
        $sql .= " LIMIT :offset, :limit";
    }
    else
    {
        $sql;
    }
    $query = $pdo->prepare($sql);
    if ($limit) {
        $query ->bindValue(':limit', $limit, PDO::PARAM_INT); 
    }
    if ($page) {
        $offset = ($page - 1) * $limit;
        $query ->bindValue(':offset', $offset, PDO::PARAM_INT); 
    }
    
    $query->execute();
    return $query->fetchAll(PDO::FETCH_ASSOC);
}

function getRecipeById($pdo, $id) :array|bool {
    $query = $pdo->prepare("SELECT * FROM recettes WHERE id = :id");
    $query->bindValue(':id', $id, PDO::PARAM_INT);
    $query->execute();
    return $query->fetch(PDO::FETCH_ASSOC);
}

function getNumberOfRecipes(PDO $pdo) {
    $query = $pdo->prepare("SELECT COUNT(*) AS total FROM recettes");
    $query->execute();
    $result = $query->fetch(PDO::FETCH_ASSOC);
    return $result['total'];
}

function saveRecipe (PDO $pdo, string $title, string $description, string $recette, int $id = null):bool {
    if ($id === null) {
        $query = $pdo->prepare ("INSERT INTO recettes (title, description, recette) VALUES (:rec_title, :rec_description, :rec_recette)");
    } else {
        $query = $pdo->prepare ("UPDATE recettes SET title = :rec_title, description = :rec_description, recette = :rec_recette WHERE id = :rec_id");
        $query->bindValue(':rec_id', $id, $pdo::PARAM_INT);
    }
    $query->bindValue(':rec_title', $title, $pdo::PARAM_STR);
    $query->bindValue(':rec_description', $description, $pdo::PARAM_STR);
    $query->bindValue(':rec_recette',$recette, $pdo::PARAM_STR);

    return $query->execute();  
}

function deleteRecipe (PDO $pdo, int $id):bool  {
    $query = $pdo->prepare ("DELETE FROM recettes WHERE id = :id");
    $query->bindValue(':id',$id, PDO::PARAM_INT);
    return $query->execute();
}