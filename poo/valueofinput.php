<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method = "post">
        <label >name :</label>
        <input type="text" name="namefield"/>
    </form>
    <?php echo $_GET['namefield']; ?>
</body>
</html>