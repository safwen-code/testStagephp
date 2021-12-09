<?php
try {
    // On se connecte à MySQL
    $mysqlClient = new PDO(
        'mysql:host=localhost;dbname=we_love_food;charset=utf8',
        'root',
        'root'
    );
} catch (Exception $e) {
    // En cas d'erreur, on affiche un message et on arrête tout
    die('Erreur : ' . $e->getMessage());
}

// Si tout va bien, on peut continuer
// val anonym ==> ?
//val identifier ==> =:author
// On récupère tout le contenu de la table recipes
$sqlQuery = 'SELECT * FROM recipes WHERE author =:author ';
$recipesStatement = $mysqlClient->prepare($sqlQuery);
$recipesStatement->execute([
    'author' => $_GET['author'],
    
]);
$recipes = $recipesStatement->fetchAll();

// On affiche chaque recette une à une
foreach ($recipes as $recipe) { ?>
    <p><?php echo $recipe['author']; ?></p>
<?php }
?>
