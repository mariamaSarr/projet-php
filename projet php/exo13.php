
<?php
// Définir les variables par défaut
$prixHT = isset($_POST['prixHT']) ? $_POST['prixHT'] : '';
$tauxTVA = isset($_POST['tauxTVA']) ? $_POST['tauxTVA'] : '';
$tva = '';
$prixTTC = '';

// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $prixHT = floatval($_POST['prixHT']);
    $tauxTVA = floatval($_POST['tauxTVA']);

    // Calculer la TVA et le prix TTC
    $tva = $prixHT * ($tauxTVA / 100);
    $prixTTC = $prixHT + $tva;
}
?>

<h2>Calcul de la TVA</h2>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <label for="prixHT">Prix HT :</label>
    <input type="text" id="prixHT" name="prixHT" value="<?php echo $prixHT; ?>" required><br><br>

    <label for="tauxTVA">Taux de TVA :</label>
    <input type="text" id="tauxTVA" name="tauxTVA" value="<?php echo $tauxTVA; ?>" required><br>

    <input type="submit" value="Calculer"><br>
</form>

<?php
// Afficher les résultats si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<h3>Résultats :</h3>";
    echo "Montant de la TVA : " . number_format($tva) . " fcf <br><br> ";
    echo "Prix TTC : " . number_format($prixTTC) . " fcf ";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcul TVA</title>
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
<nav>
        <li classe = "menu_php"><a href="index.php">MENU</a></li>
      </nav>
</body>
</html>
