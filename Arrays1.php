<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- test if key in tab -->
<?php
$recipe = [
    'title' => 'Salade Romaine',
    'recipe' => 'Etape 1 : Lavez la salade ; Etape 2 : euh ...',
    'author' => 'laurene.castor@exemple.com',
];
 if( array_key_exists('title',$recipe)){
     echo " title existe </br>";
 }
 if(array_key_exists('comm', $recipe)){
     echo 'comm is not existe </br>';
 }

?>
<!-- test val in tab -->
<?php 
  $info =[
      "safwen", "hakima", "beha"
  ];
  if(in_array("safwen", $info)){
      echo "safwen is existe in tab" . $info ."</br>";
  }
?>

<!-- Récupérez la clé d'une valeur dans un tableau avec array_search -->
<?php
 $infoInSearch =[
    "safwen", "hakima", "beha"
];
 $posHakima = array_search("hakima", $infoInSearch);
 echo $posHakima;
?>
</body>
</html>