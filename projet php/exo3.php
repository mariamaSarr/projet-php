<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombreCible = intval($_POST["nombreCible"]);

 if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $nombreFor =  isset($_POST["nombreFor"]);
}
    $tentativesFor = 0;
   

    
    for ($i = 0; $nombreFor !== $nombreCible; $i++) {
        $nombreFor = rand(100, 999);
        $tentativesFor++;
    }
}
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXERCICE3</title>
    <style>
         body{
            background-image: url('fondA.jpg');
            font-size: 24px;
            background-size: 100%;
            background-repeat: no-repeat;
          }
    </style>
</head>
<body>
    <h1> Nombre Aléatoire</h1>

    <form method="post" action="">
        <label for="nombreCible">Entrez un nombre à trois chiffres :</label>
        <input type="number" name="nombreCible" required min="100" max="999">
        <button type="submit">Commencer le jeu</button>
    </form>

    <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
        <p>Nombre de tentatives avec la boucle for : <?php echo $tentativesFor; ?></p>
    <?php endif; ?>
    <p>
<nav>
  <li classe = "menu_php"><a href="index.php">MENU</a></li>
</nav>
</p>
</body>
</html>