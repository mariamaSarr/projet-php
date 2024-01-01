<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Location de Voitures</title>
    <style>
        body{
            background-image: url('l2.jpg');
            background-size: 100%;
            background-repeat: no-repeat; 
        }
    </style>
</head>
<body class = "louer">

<h1>Formulaire de Location de Voiture</h1>

<form action="process_location.php" method="post">
    <label for="nom">Nom :</label>
    <input type="text" id="nom" name="nom" required><br><br>

    <label for="prenom">Prenom :</label>
    <input type="text" id="prenom" name="prenom" required><br><br>

    <label for="Tel">Tel:</label>
    <input type="text" id="Tel" name="Tel" required><br><br>

    <label for="e_mail">Adresse_mail :</label>
    <textarea id="e_mail" name="e_mail" required></textarea><br><br>

    <label for="modele">Modèle de Voiture :</label>
    <select id="modele" name="modele" required>
        <option value="FORD EXPLORER 2015">Voiture 1</option>
        <option value="JEEP GRAND CHEROCKEE SRT8">Voiture 2</option>
        <option value="JEEP GRAND CHEROKEE">Voiture 3</option>
        <!-- Ajoutez plus d'options en fonction de vos modèles de voitures -->
    </select><br><br>

    <label for="duree">Durée de la Location (en jours) :</label>
    <input type="number" id="duree" name="duree" min="1" required><br>

    <input type="submit" value="Louer">
</form>

</body>
</html>
