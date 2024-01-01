<?php
function afficherTableauMultidimensionnel($tableau)
{
    echo '<table border="1">';
    foreach ($tableau as $cle => $valeurs) {
        echo '<tr>';
        echo '<th>' . htmlspecialchars($cle) . '</th>';
        foreach ($valeurs as $valeur) {
            echo '<td>' . htmlspecialchars($valeur) . '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
}

$tableauExemple = array(
    '1' => array(),
    '2' => array('2'),
    '3' => array('3', '3'),
    '4' => array('4', '4', '4'),
    '5' => array('5', '5', '5', '5'),
    '6' => array('6', '6', '6', '6', '6'),
    '7' => array('7', '7', '7', '7', '7', '7'),
    '8' => array('8', '8', '8', '8', '8', '8', '8'),
    '9' => array('9', '9', '9', '9', '9', '9', '9', '9'),
    '10' => array('10', '10', '10', '10', '10', '10', '10', '10', '10'),
);

afficherTableauMultidimensionnel($tableauExemple);
?>
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
<p><nav>
        <li classe = "menu_php"><a href="index.php">MENU</a></li>
      </nav></p>
</body>
</html>