<?php
include_once './../config/mysql.php';
// Si tout va bien, on peut continuer

// On récupère tout le contenu de la table recipes

$recipesStatement = $mysqlClient->prepare('SELECT * FROM recipes');
$recipesStatement->execute();
$recipes = $recipesStatement->fetchAll();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site de Recettes - Page d'accueil</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
        rel="stylesheet"
    >
</head>
<body class="d-flex flex-column min-vh-100">
    <div class="container">

    <!-- Navigation -->
    <?php include_once './../layout/header.php'; ?>

        <h1>Site de Recettes !</h1>

        <!-- Plus facile à lire -->
        <?php foreach ($recipes as $recipe): ?>
            <article>
                <h3><a href="./recipeDetail.php?id=<?php echo $recipe[
                    'recipe_id'
                ]; ?>"><?php echo $recipe['titel']; ?></a></h3>
                <div><?php echo $recipe['recipeMenu']; ?></div>
                
                    <ul class="list-group list-group-horizontal">
                        <li class="list-group-item"><a class="link-warning" href="./updateRecette.php?id=<?php echo $recipe[
                            'recipe_id'
                        ]; ?>">Editer l'article</a></li>
                        <li class="list-group-item"><a class="link-danger" href="./delete.php?id=<?php echo $recipe[
                            'recipe_id'
                        ]; ?>">Supprimer l'article</a></li>
                        
                    </ul>
                
            </article>
            
        <?php endforeach; ?>
    </div>

    <?php include_once './../layout/footer.php'; ?>
</body>
</html>