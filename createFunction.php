<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- verify  if recette is valide -->
     <?php
     $recipe = [
         'titel ' => 'couscous',
         'auteur' => 'hakima',
         'is_enabel' => true,
     ];
     $is_Enabel = $recipe['is_enabel'];

     if (array_key_exists('is_enabel', $recipe) && $is_Enabel) {
         foreach ($recipe as $recip) {
             echo $recip . '</br>';
         }
     } else {
         echo '<h1>no recipe</h1>';
     }
     ?>
     <!-- verify if recette is valide with function is validate -->
        <?php
        $recipe = [
            'titel ' => 'couscous',
            'auteur' => 'hakima',
            'is_enabel' => true,
        ];
        function isValidete(array $recipe): bool
        {
            if (array_key_exists('is_enabel', $recipe)) {
                $is_Enabel = $recipe['is_enabel'];
            } else {
                $is_Enabel = false;
            }
            return $is_Enabel;
        }
        ?>
     <!-- tester isValidete with other tab -->
         <?php
         $recette = [
             'titel' => 'salade de fruit',
             'description' => 'delice salade description',
             'auteur' => 'beauty agrico',
             'is_enabel' => true,
         ];
         $fornisseur = [
             'titel' => 'fruit',
             'description' => 'fruit en gros description',
             'auteur' => ' agricoCultire',
             'is_enabel' => false,
         ];
         $recettevalidité = isValidete($recette);
         if ($recettevalidité) {
             echo $recette['titel'] . '</br>';
         } else {
             echo '<h1>no recette</h1>';
         }
         if (isValidete($fornisseur)) {
             echo 'find';
         } else {
             echo 'no fornisseur' . '</br>';
         }
         ?>

     <!-- recuperer les recttes valide -->
       <?php
       $dileveis = [
           [
               'titel ' => 'couscous',
               'auteur' => 'hakima',
               'is_enabel' => true,
           ],
           [
               'titel ' => 'jelbena',
               'auteur' => 'wahida',
               'is_enabel' => false,
           ],
           [
               'titel ' => 'ma9rouna',
               'auteur' => 'siwar',
               'is_enabel' => true,
           ],
       ];
       //map throw this tab with enabel ===true
       foreach ($dileveis as $item) {
           if ($item['is_enabel']) {
               echo $item['auteur'] . '</br>';
           }
       }

       // create funtion to get validatedeleve
       function getDelever(array $dileveis): array
       {
           $validateDelever = [];
           foreach ($dileveis as $delever) {
               if (isValidete($delever)) {
                   $validateDelever[] = $delever;
               }
           }
           return $validateDelever;
       }
       // afficher les delever
       foreach (getDelever($dileveis) as $item) {
           echo $item['titel'];
       }
       ?>
</body>
</html>