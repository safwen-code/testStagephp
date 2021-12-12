<?php
session_start();

include_once './../config/mysql.php';

$postData = $_POST;

if (
    !isset($postData['id']) ||
    !isset($postData['titel']) ||
    !isset($postData['recipeMenu'])
) {
    echo 'Il manque des informations pour permettre l\'édition du formulaire.';
    return;
}

$id = $postData['id'];
$title = $postData['titel'];
$recipe = $postData['recipeMenu'];

$insertRecipeStatement = $mysqlClient->prepare(
    'UPDATE recipes SET titel = :titel, recipeMenu = :recipeMenu WHERE recipe_id = :id'
);
echo "update successfully"
$insertRecipeStatement->execute([
    'titel' => $title,
    'recipeMenu' => $recipe,
    'id' => $id,
]);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site de Recettes - Création de recette</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
        rel="stylesheet"
    >
</head>
<body class="d-flex flex-column min-vh-100">
    <div class="container">

    <?php include_once $rootPath . '/header.php'; ?>
        <h1>Recette modifiée avec succès !</h1>
        
        <div class="card">
            
            <div class="card-body">
                <h5 class="card-title"><?php echo $title; ?></h5>
                <p class="card-text"><b>Recette</b> : <?php echo strip_tags(
                    $recipe
                ); ?></p>
            </div>
        </div>
    </div>
    <?php include_once $rootPath . '/footer.php'; ?>
</body>
</html>