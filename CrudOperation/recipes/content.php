
<?php
include_once './../config/mysql.php';
// Si tout va bien, on peut continuer

// On récupère tout le contenu de la table recipes

$recipesStatement = $mysqlClient->prepare('SELECT * FROM recipes');
$recipesStatement->execute();
$recipes = $recipesStatement->fetchAll();
?>
<!DOCTYPE html>
<html lang = 'en'>
<head>
<meta charset = 'UTF-8'>
<meta http-equiv = 'X-UA-Compatible' content = 'IE=edge'>
<meta name = 'viewport' content = 'width=device-width, initial-scale=1.0'>
<title>Document</title>
<link href = 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' rel = 'stylesheet' integrity = 'sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC' crossorigin = 'anonymous'>

</head>
<body>
<?php include_once './../layout/header.php'; ?>
<?php include_once '../function.php'; ?>
<?php include_once 'login.php'; ?>
<div class = 'container mt-3'  >
   <?php foreach ($recipes as $recipe): ?>
    <div class="d-flex flex-row ">
      <div class = 'card mb-3' style = 'width: 18rem;'>
        <div class = 'card-body'>
          <h5 class = 'card-title'>
          <a alt="detail recipe" href="recipeDetail.php/?id=<?php echo $recipe[
              'recipe_id'
          ]; ?>">
          <?php echo $recipe['titel']; ?>
          </a>
          </h5>
          <h5 class="card-titel">
               <?php echo $recipe['author']; ?>
          </h5> 
          <p class = 'card-text'><?php echo $recipe['recipeMenu']; ?></p>
         <div class="d-flex flex-direction-row">
         <button class="btn btn-danger h-25"><a alt="updateRecette" href="updateRecette.php/?id=<?php echo $recipe[
             'recipe_id'
         ]; ?>">detail recette</a></button>
          <button class="btn btn-secondary">update recette</button>
         </div>
          
        </div>
      </div>
    </div>  
   <?php endforeach; ?>
  
</div>

<?php include_once './../layout/footer.php'; ?>

</body>
</html>