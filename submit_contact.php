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

    if (!isset($_GET['email']) || !isset($_GET['message'])) {
        echo ('Il faut un email et un message pour soumettre le formulaire.');

        // Arrête l'exécution de PHP
        return;
    }
    ?>

    <h1>Message bien reçu !</h1>

    <div class="card">

        <div class="card-body">
            <h5 class="card-title">Rappel de vos informations</h5>
            <p class="card-text"><b>Email</b> : <?php echo $_GET['email']; ?></p>
            <p class="card-text"><b>Message</b> : <?php echo $_GET['message']; ?></p>
        </div>
    </div>
</body>

</html>