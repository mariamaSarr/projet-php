

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset=" -8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau associatif</title>
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
<p><h1>Tableau multidimensionnel</h1></p>
<?php

$personnes = array(
    'TOURE' => array(
        'age' => 1,
        'prenom' => 'Mouhamed',
        'ville de residence' => 'dakar',
       
    ),
    'MBAYE' => array(
        'age' => 34,
        'prenom' => 'Maman',
        'ville de residence' => 'Mbour',
       
    ),
    'NDIAYE' => array(
        'age' => 18, 
        'prenom' => 'Toutou',
        'ville de residence' => 'dakar',
       
       
    )
);

// Accéder aux données
echo "L'âge de TOURE est " . $personnes['TOURE']['age'] . " ans.";
?>
  
   <p><nav>
        <li classe = "menu_php"><a href="index.php">MENU</a></li>
      </nav></p>
</body>
</html>
