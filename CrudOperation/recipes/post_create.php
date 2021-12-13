<?php
include_once './../config/mysql.php';


$postData = $_POST;

// if (
//     !isset($postData['titel']) ||
//     !isset($postData['recipeMenu']) ||
//     !isset($postData['author'])
// ) {
//     echo 'Il faut un titre et une recette pour soumettre le formulaire.';
//     return;
// }

$titel = $postData['titel'];
$recipeMenu = $postData['recipeMenu'];
$author = $postData['author'];

$insertRecipe = $mysqlClient->prepare(
    'INSERT INTO recipes(titel, recipeMenu, author) VALUES (:titel, :recipeMenu, :author)'
);
$insertRecipe->execute([
    'titel' => $titel,
    'recipeMenu' => $recipeMenu,
    'author' => $author,
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

    <?php include_once $rootPath . './../layout/header.php'; ?>
        <h1>Recette ajoutée avec succès !</h1>
        
        <div class="card">
            
            <div class="card-body">
                <h5 class="card-title"><?php echo $titel; ?></h5>
                
                <p class="card-text"><b>Recette</b> : <?php echo strip_tags(
                    $recipeMenu
                ); ?></p>
            </div>
        </div>
    </div>
    <?php include_once $rootPath . './../layout/footer.php'; ?>
</body>
</html>