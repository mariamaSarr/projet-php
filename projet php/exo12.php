
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire en PHP</title>
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

<h2>Formulaire en PHP</h2>

<form action="traitement.php" method="post">
    <label for="nom">Nom :</label>
    <input type="text" id="nom" name="nom" required><br><br>

    <label for="prenom">Prénom :</label>
    <input type="text" id="prenom" name="prenom" required><br><br>

    <label for="adresse">Adresse :</label>
    <input type="adresse" id="adresse" name="adresse" required><br><br>

    <label for="ville">Ville :</label>
    <input type="ville" id="ville" name="ville" required><br><br>

    <label for="code_postal">code_postal :</label>
    <input type="code_postal" id="code_postal" name="code_postal" required><br><br>

    <input type="submit" value="Envoyer">
</form>

<p><nav>
        <li classe = "menu_php"><a href="index.php">MENU</a></li>
      </nav></p>
</body>
</html>
