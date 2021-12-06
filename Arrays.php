<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $recip = ['couscous', 'mar9a', 'jelbena'];
    echo $recip[0];
    //   create tab
    $recip1 = ['couscous', "mar9a , 'jebena"];
    echo $recip1;
    ?>

    <!-- create tab associative -->
    <?php
    $recipe = [
        'titel' => 'jelbena',
        'auteur' => 'safwen',
        'email' => 'safwen@gmail.com',
        'enabel' => true,
    ];
    echo $recipe['titel'] . '</br>';
    ?>

    <!-- boucle for , forEach -->
    <?php
    $recipes = [
        ['Cassoulet', '[...]', 'mickael.andrieu@exemple.com', true],
        ['Couscous', '[...]', 'mickael.andrieu@exemple.com', false],
    ];

    for ($lines = 0; $lines <= 1; $lines++) {
        echo $recipes[$lines][0] . '</br>';
    }

    foreach ($recipes as $item) {
        echo $item[0] . '</br>';
    }
    ?>

    <!-- forEach for tab associative -->
    <?php
    $recipe = [
        'title' => 'Cassoulet',
        'recipe' => 'Etape 1 : des flageolets, Etape 2 : ...',
        'author' => 'mickael.andrieu@exemple.com',
        'enabled' => true,
    ];

    foreach ($recipe as $value) {
        echo $value . '</br>';
    }
    ?>
    <?php
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
    foreach ($recipes as $recipe) {
        echo $recipe['title'] .
            ' contribué(e) par : ' .
            $recipe['author'] .
            PHP_EOL;
    }
    ?>
  <?php
  $recipe = [
      'title' => 'Salade Romaine',
      'recipe' => 'Etape 1 : Lavez la salade ; Etape 2 : euh ...',
      'author' => 'laurene.castor@exemple.com',
  ];

  foreach ($recipe as $property => $propertyValue) {
      echo '[' . $property . '] vaut ' . $propertyValue;
  }
  ?>
<!-- print r -->
<?php
$recipe = [
    'title' => 'Salade Romaine',
    'recipe' => 'Etape 1 : Lavez la salade ; Etape 2 : euh ...',
    'author' => 'laurene.castor@exemple.com',
];
echo '<pre>';
print_r($recipe);
echo '</pre>';
?>
</body>
</html>