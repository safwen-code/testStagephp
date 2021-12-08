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
    <form action="submit.php" methode="POST" enctype="multipart/form-data">
    <div class="border border-dark mx-auto mt-3 ms-3">
            <div class="mb-3">
            <label name="email" >email</label>
            <input name="email" placeholder="email please"/>
            </div>
            <div class="mb-3">
            <label name="message" >message</label>
            <input name="message" placeholder="message please"/>
            </div>
            <div class="mb-3">
              <label for="screenshot" class="form-label">Votre capture d'écran</label>
              <input type="file" class="form-control" id="screenshot" name="screenshot" />
            </div>
            <button type="submit" class="btn btn-success">Envoyer</button>
        </div>
    </form>
</body>
</html>