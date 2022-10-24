<?php include("header.php") ?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Se connecter</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="assets/css/Login-with-overlay-image.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <section class="login-dark">
        <form method="post">
            <h2 class="visually-hidden">Connexion</h2>
            <div class="illustration"><i class="icon ion-ios-locked-outline"></i></div>
            <div class="mb-3"><input class="form-control" type="text" name="identification" placeholder="ID"></div>
            <div class="mb-3"><input class="form-control" type="password" name="motdepasse" placeholder="Mot de passe"></div>
            <div class="mb-3"><button class="btn btn-primary d-block w-100" type="submit">Se connecter</button></div><a class="forgot" href="#">Vous avez oublié votre identification ou votre mot de passe ?</a>
        </form>
    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
<?php include("footer.php") ?>