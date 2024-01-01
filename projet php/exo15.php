
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
<?php
function transformerTableau(&$tableauChaines)
{
    foreach ($tableauChaines as &$chaine) {
        $chaine = ucfirst(strtolower($chaine));
    }
}

// Exemple d'utilisation
$chaines = array("ExEmpLe", "MIXTe", "caSSe", "sArr", "mariama");
transformerTableau($chaines);

// Affichage du résultat
print_r($chaines);
?>
<p><nav>
        <li classe = "menu_php"><a href="index.php">MENU</a></li>
      </nav></p>
</body>
</html>