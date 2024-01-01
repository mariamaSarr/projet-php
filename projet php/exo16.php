
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
function sinusAngle($angle, $unite = 'radian')
{
    // Convertir l'angle en radians si nécessaire
    switch ($unite) {
        case 'degre':
            $angle = deg2rad($angle);
            break;
        case 'grade':
            $angle = deg2rad($angle * 0.9);
            break;
        // Pas de conversion nécessaire pour les radians
    }

    // Calculer et retourner le sinus
    return sin($angle);
}

// Exemples d'utilisation
$angleEnRadian = 9.5;
$angleEnDegre = 45;
$angleEnGrade = 360;

// Par défaut, l'angle est en radians
echo "Sinus de $angleEnRadian radians : " . sinusAngle($angleEnRadian) . "<br>";

// Sinus d'un angle en degré
echo "Sinus de $angleEnDegre degrés : " . sinusAngle($angleEnDegre, 'degre') . "<br>";

// Sinus d'un angle en grade
echo "Sinus de $angleEnGrade grades : " . sinusAngle($angleEnGrade, 'grade') . "<br>";
?>
<p><nav>
        <li classe = "menu_php"><a href="index.php">MENU</a></li>
      </nav></p>
</body>
</html>