<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation de Location</title>
    <style>
       body{
            background-image: url('l3.jpg');
            background-size: cover;
            background-repeat: no-repeat; 
            font-size: 24px;
        }
    </style>
</head>
<body>

<?php
// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $nom = htmlspecialchars($_POST["nom"]);
    $adresse_mail = htmlspecialchars($_POST["e_mail"]);
    $modele = htmlspecialchars($_POST["modele"]);
    $duree = intval($_POST["duree"]);

    $coutLocation = 50 * $duree;

    echo "<h1>Merci pour votre location, $nom !</h1>";
    echo "<p>Vous avez loué le modèle de voiture : $modele pour une durée de $duree jours.</p>";
    echo "<p>Le coût total de la location est de : $coutLocation euros.</p>";
    echo "<p>Nous vous contacterons à l'adresse suivante : $adresse_mail.</p>";
} else {
    // Rediriger vers la page d'accueil si le formulaire n'a pas été soumis correctement
    header("Location: index.php");
    exit();
}
?>

</body>
</html>
