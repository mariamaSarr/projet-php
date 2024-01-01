<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer la valeur du bouton soumis
    $action = $_POST['action'];

    // Redirection en fonction du choix
    switch ($action) {
        case 'Vendre':
            header("Location: vendre.php");
            break;
        case 'Acheter':
            header("Location: acheter.php");
            break;
        case 'Louer':
            header("Location: louer.php");
            break;
        default:
            // Rediriger vers une page par défaut en cas de choix non reconnu
            header("Location: default.php");
            break;
    }
    exit(); // Assurez-vous de terminer l'exécution après la redirection
}
?>

</body>
</html>