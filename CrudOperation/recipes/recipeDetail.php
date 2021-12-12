<?php
include_once './../config/mysql.php';
$getData = $_GET;
if (!isset($getData['id']) && is_numeric($getData['id'])) {
    echo 'La recette n\'existe pas';
    return;
}

$recipeId = $_GET['id'];

$retrieveRecipeStatement = $mysqlClient->prepare(
    'SELECT * FROM recipes WHERE recipe_id = :id'
);
$retrieveRecipeStatement->execute([
    'id' => $recipeId,
]);

$recipe = $retrieveRecipeStatement->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href = 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' rel = 'stylesheet' integrity = 'sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC' crossorigin = 'anonymous'>

</head>
<body>
    <?php include_once './../layout/header.php'; ?>
      <div class="container mt-3">
         <h1>recette detail</h1>
          <h6><?php echo $recipe['titel']; ?></h6>
          <p class="lead"><?php echo $recipe['recipeMenu']; ?></p>
          <h6><span>Created by :</span><?php echo $recipe['author']; ?></h6>
      </div>
    <?php include_once './../layout/footer.php'; ?>
</body>
</html>