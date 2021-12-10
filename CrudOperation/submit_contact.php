
<?php
if (
    !isset($_POST['email']) ||
    !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ||
    (!isset($_POST['message']) && !empty($_POST['message']))
) {
    echo 'Il faut un email et un message valides pour soumettre le formulaire.';
    return;
}

//test si le fichier envoyer
if (isset($_FILES['screenshot']) && ($_FILES['screenshot']['error'] = 0)) {
    //test taill de fichier
    if ($_FILES['screenshot']['size'] <= 10000000) {
        // Testons si l'extension est autorisée
        $fileInfo = pathinfo($_FILES['screenshot']['name']);
        $extension = $fileInfo['extension'];
        $allowedExtensions = ['jpg', 'jpeg', 'gif', 'png'];
        if (in_array($extension, $allowedExtensions)) {
            // On peut valider le fichier et le stocker définitivement
            move_uploaded_file(
                $_FILES['screenshot']['tmp_name'],
                'uploads/' . basename($_FILES['screenshot']['name'])
            );
            echo "L'envoi a bien été effectué !";
        }
    }
}

$email = $_POST['email'];
$message = $_POST['message'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
    <div class="container">
        <h1>data info of contact</h1>

       <div class="card">
           <div class="card-body">
                  <div class="card-titel">contactName : <?php echo $email; ?></div>
                  <div class="card-titel">message : <?php echo strip_tags(
                      $message
                  ); ?></div>
           </div>
       </div>
    </div>
</body>
</html>