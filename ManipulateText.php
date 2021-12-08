<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- strlen => give the length of string -->
    <?php
    $recipe = 'give me the lengthb of this text';
    $length = strlen($recipe);
    echo $length . '</br>';
    ?>
     <!-- count => give me the nbr ele in tab -->
     <?php
     $tab = [
         'titel' => 'test count',
         'discription' => ' give me the nbr ele in tab',
     ];
     $test = count($tab);
     echo $test . '</br>';
     ?>
     <!-- replace a string with another string -->
      <?php echo str_replace('c', 'C', 'le cass c est très bon'); ?>
</body>
</html>