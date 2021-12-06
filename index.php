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
$isEnabel = true;
$isOwner = false;
$isAdmin = true;
if (($isEnabel && $isOwner) || $isAdmin) {
    echo 'access a le recette validée';
} else {
    echo 'access a le recette non validée';
}
?></br>

<?php
$mickael = ['Mickaël Andrieu', 'mickael.andrieu@exemple.com', 'S3cr3t', 34];
$mathieu = ['Mathieu Nebra', 'mathieu.nebra@exemple.com', 'devine', 33];
$laurene = ['Laurène Castor', 'laurene.castor@exemple.com', 'P4ssw0rD', 28];

$users = [$mickael, $mathieu, $laurene];

echo $users[1][1];

// "mathieu.nebra@exemple.com"
?></br>
<?php
$lines = 1;
while ($lines <= 5) {
    echo 'this code is runnning in condition </br>';
    $lines++;
}
?>
<!-- 
la condition while -->
<?php
$lines = 3;
$counter = 0;
while ($counter <= $lines) {
    # code...
    echo $users[$counter][0] . ' ' . $users[$counter][1] . '<br />';
    $counter++; // Ne surtout pas oublier la condition de sortie !
}
?>

<!-- condition for -->
 <?php 
   for ($lines = 0 ; $lines<=2 ; $lines++){
       echo $users[$lines][0]. "  " .$users[$lines][1] . '</br>';
   }
 ?>

 <!-- afficher les recettes -->

 <?php
    
 ?>
</body>
</html>