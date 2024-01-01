<?php
function calculerPGCD($a, $b) {
    while ($b != 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }
    return $a;
}

function calculerPPCM($a, $b) {
    if ($a == 0 || $b == 0) {
        return 0;
    } else {
        return abs($a * $b) / calculerPGCD($a, $b);
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $entier1 = intval($_POST["entier1"]);
    $entier2 = intval($_POST["entier2"]);

    $ppcm = calculerPPCM($entier1, $entier2);
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcul du PPCM</title>
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
    <h1>Calcul du PPCM</h1>

    <form method="post" action="">
        <label for="entier1">Entrez le premier entier :</label>
        <input type="number" name="entier1" required><br><br>
        
        <label for="entier2">Entrez le deuxième entier :</label>
        <input type="number" name="entier2" required><br><br>
        
        <button type="submit">Calculer le PPCM</button>
    </form>

    <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
        <p>Le PPCM de <?php echo $entier1; ?> et <?php echo $entier2; ?> est : <?php echo $ppcm; ?></p>
    <?php endif; ?>

    <p><nav>
        <li classe = "menu_php"><a href="index.php">MENU</a></li>
      </nav></p>
</body>
</html>