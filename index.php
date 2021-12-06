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
  if(($isEnabel && $isOwner) || $isAdmin){
      echo 'access a le recette validée';
  }
  else {
      echo 'access a le recette non validée'  ;
  }

?>
</body>
</html>