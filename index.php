<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>PHP</title>
</head>

<body>
  <h1>Bienvenue dans le Back End</h1>

  <?php

  $notes = readline("Entrer la moyen ");

  $name = 'Marcellin';
  $age = 29;

  echo $name . '  ' . $age;

  $villes = array('Kinshasa', 'Paris', "Belgique", "Italie", "Washington");

  $valeur = array("Marcellin" => 30, "Lise" => 1, "Sandrine" => 25);

  sort($villes);

  var_dump($villes);

  var_dump($valeur);

  for ($i = 0; $i < 5; $i++) {
    echo "Le nombre est: " . $i . "<br>";
  }
  echo "<br>";
  foreach ($valeur as $key => $value) {
    echo $key . " : " . $value . "<br>";
  }
  echo "<br>";
  echo rand(1, 10);

  ?>

  <h1>Ma page web</h1>
  <p>Aujourd'hui nous sommes le <?php echo date('d/m/Y H:i'); ?>.</p>

  <form action="contact.php" method="GET">
    <!-- données à faire passer à l'aide d'inputs -->
    <input name="nom">
    <input name="prenom">
  </form>

</html>