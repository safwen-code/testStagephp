
<?php session_start(); ?>
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
<?php include_once 'header.php'; ?>
<?php
include_once 'function.php';
include_once 'variables.php';
?>
<?php include_once 'login.php'; ?>
<div class = 'container mt-3'  >
  <?php if (isset($loggedUser)): ?>
   <?php foreach (getRecipes($recipes) as $recipe): ?>
    <div class="row">
      <div class = 'card mb-3' style = 'width: 18rem;'>
        <div class = 'card-body'>
          <h5 class = 'card-title'>
          <?php echo $recipe['title']; ?>
          </h5>
          <h5 class="card-titel"><?php echo $recipe['author']; ?></h5>
          <p class = 'card-text'><?php echo $recipe['recipe']; ?></p>
          <h6 class="card-text"><?php echo displayUsers(
              $recipe['author'],
              $users
          ); ?></h6>
        </div>
      </div>
    </div>  
   <?php endforeach; ?>
  <?php endif; ?> 
</div>

<?php include_once 'footer.php'; ?>

</body>
</html>