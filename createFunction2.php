<?php
$users = [
    [
        'full_name' => 'Mickaël Andrieu',
        'email' => 'mickael.andrieu@exemple.com',
        'age' => 34,
    ],
    [
        'full_name' => 'Mathieu Nebra',
        'email' => 'mathieu.nebra@exemple.com',
        'age' => 34,
    ],
    [
        'full_name' => 'Laurène Castor',
        'email' => 'laurene.castor@exemple.com',
        'age' => 28,
    ],
];

$recipes = [
    [
        'title' => 'Cassoulet',
        'recipe' => '',
        'author' => 'mickael.andrieu@exemple.com',
        'is_enabled' => true,
    ],
    [
        'title' => 'Couscous',
        'recipe' => '',
        'author' => 'mickael.andrieu@exemple.com',
        'is_enabled' => false,
    ],
    [
        'title' => 'Escalope milanaise',
        'recipe' => '',
        'author' => 'mathieu.nebra@exemple.com',
        'is_enabled' => true,
    ],
    [
        'title' => 'Salade Romaine',
        'recipe' => '',
        'author' => 'laurene.castor@exemple.com',
        'is_enabled' => false,
    ],
];

//get validtate recipe
function isvalidateRecipe(array $recipe): bool
{
    if (array_key_exists('is_enabled', $recipe)) {
        $Enabeld = $recipe['is_enabled'];
    } else {
        $Enabeld = false;
    }
    return $Enabeld;
}

//get user with validateemail
function displayUsers(string $recipAuteur, array $users): string
{
    for ($i = 0; $i < count($users); $i++) {
        $authorEmail = $users[$i];

        if ($recipAuteur === $authorEmail['email']) {
            return $authorEmail['full_name'] . $authorEmail['age'];
        }
    }
}

// <!-- get recipr with enabel true -->
function getRecipe(array $recipes): array
{
    $EnabelRecipe = [];
    foreach ($recipes as $recipe) {
        if (isvalidateRecipe($recipe)) {
            $EnabelRecipe[] = $recipe;
        }
        return $EnabelRecipe;
    }
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afficher le nom de l'auteur</title>
</head>
<body>
    <?php foreach (getRecipe($recipes) as $recipe): ?>
       <?php echo $recipe['title']; ?>
       <?php displayUsers($recipe['author'], $users); ?>
   <?php endforeach; ?>

</body>
</html>