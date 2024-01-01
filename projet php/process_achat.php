<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation d'Achat</title>
    <style>
       body{
            background-image: url('v1.jpeg');
            background-size: 115%;
            background-repeat: no-repeat; 
            font-size: 20px;
        }
    </style>
</head>
<body>

<?php
// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $prenom = htmlspecialchars($_POST["prenom"]);
    $Tel = htmlspecialchars($_POST["Tel"]);
    $modele = htmlspecialchars($_POST["modele"]);

    // Afficher la confirmation d'achat
    echo "<h1>Merci pour votre achat, $prenom !</h1>";
    echo "<p>Vous avez acheté le modèle de voiture : $modele.</p>";
    echo "<p>Nous vous contacterons sur le numero suivante : $Tel.</p>";
} else {
    // Rediriger vers la page d'accueil si le formulaire n'a pas été soumis correctement
    header("Location: index.php");
    exit();
}
?>
<p><nav>
        <li classe = "menu_php"><a href="index.php">MENU</a></li>
      </nav></p>
</body>
</html>
