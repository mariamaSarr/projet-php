<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traitement Adresse Client</title>
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
    <h1>Données du Client</h1>

    <?php
// Vérifier si des données ont été soumises via la méthode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les valeurs du formulaire
    $nom = isset($_POST['nom']) ? $_POST['nom'] : '';
    $prenom = isset($_POST['prenom']) ? $_POST['prenom'] : '';
    $adresse = isset($_POST['adresse']) ? $_POST['adresse'] : '';
    $ville = isset($_POST['ville']) ? $_POST['ville'] : '';
    $code_postal = isset($_POST['code_postal']) ? $_POST['code_postal'] : '';

    // Afficher les données dans un tableau XHTML
    echo '<table border="1">';
    echo "<tr><th>Nom</th><th>Prénom</th><th>Adresse</th><th>Ville</th><th>Code Postal</th></tr>";
    echo "<tr><td>$nom</td><td>$prenom</td><td>$adresse</td><td>$ville</td><td>$code_postal</td></tr>";
    echo '</table>';
}
?>

</body>
</html>
