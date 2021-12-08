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

$isAllowed = allowRecipe([
    'title'=>"escalope",
    'price'=>6.5,
    "seller"=>'hamma'
])
if($isAllowed){
    echo 'scalope existe';
}
else{
    echo 'no scalope'
}
?>
</body>
</html>