<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
        rel="stylesheet"
    >
</head>
<body class="d-flex justify-column min-vh-100">
    <?php include_once 'header.php'; ?>
    <h1></h1>
    <!-- Le corps -->
     <?php
     include_once 'function.php';
     include_once 'variables.php';
     ?>
   <!-- inclusion de l'entête du site -->
   <?php include_once 'header.php'; ?>
        
        <?php foreach (getRecipes($recipes) as $recipe): ?>
            <article>
                <h3><?php echo $recipe['title']; ?></h3>
                <div><?php echo $recipe['recipe']; ?></div>
                <i><?php echo displayAuthor($recipe['author'], $users); ?></i>
            </article>
        <?php endforeach; ?>
    </div>

    <!-- inclusion du bas de page du site -->
    <?php include_once 'footer.php'; ?>
</body>
</html>