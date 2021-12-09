<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- les reference -->
       <?php
       // D’abord, l’exemple sans chaînage :
       $date = new DateTime();
       $newDate = $date->modify('+1 day');

       echo $date->format('d/m/Y') . PHP_EOL;
       echo $newDate->format('d/m/Y') . PHP_EOL;

       // Maintenant avec le chaînage. Nous exploitons directement
       // l'objet qui nous est retourné sans le stocker dans une variable :
       $formatedDate = $date->modify('+1 day')->format('d/m/Y');
       echo $formatedDate . PHP_EOL . '</br>';
       ?>

       <?php
       $date = new DateTimeImmutabel;
       $date2 = $date->modify('+1 day');
       echo $date2;
       ?>
    <!-- les object     -->
       <?php 
         $s = ‘
         {
             "date":"2021-03-23 07:35:44.011207",
             "timezone_type":3,
             "timezone":"Europe/Paris"
         }
         ‘;
         var_dump(json_decode($s)) ;
       ?>
</body>


