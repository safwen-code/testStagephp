<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
        rel="stylesheet"
    >
</head>
<body>
<!-- $_GET  va contenir les données envoyées -->
<!-- isset() teste si une variable existe. -->
<!-- ontrôler si l'e-mail passé est bien valide, à l'aide de la fonction filter_var 
et vérifier que le message n'est pas vide, à l'aide de la fonction empty. -->
    <div class="card">
         <div class="card-body">
           <div class="card-titel">
               <?php if (
                   !isset($_GET['email']) ||
                   !filter_var($_GET['email'], FILTER_VALIDATE_EMAIL) ||
                   (!isset($_GET['message']) && !empty($_GET['message']))
               ) {
                   echo 'email & message no found';
               } else {
                   echo $_GET['email'] . '</br>';
                   echo $_GET['message'];
               } ?>

           </div>
         </div>
    </div>
</body>
</html>