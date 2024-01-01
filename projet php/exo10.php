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

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset=" -8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau associatif</title>
    <style>
table {
 font-family: arial, sans-serif;
 border-collapse: collapse;
 width: 100%;
}
td, th {
 border: 1px solid #dddddd;
 text-align: centrer;
 padding: 8px;
}

tr:nth-child(even) {
 background-color: #dddddd;
}
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
<p><h2>lecture avec la boucle foreach</h2></p>
   <table >
    <tr>
        <td>Clé</td>
        <td>Prénom</td>
        <td>Ville de residence</td>
        <td>Age</td>
    </tr>
    <?php
   foreach ($personnes as $nom => $infos) {
    ?>
        <tr>
            <td><?php  echo " $nom <br>";?></td>
            <td><?php echo  $infos['prenom'] . "<br>";?></td>
            <td><?php echo  $infos['ville de residence'] . "<br>";?></td>
            <td><?php echo   $infos['age'] . "<br>";?></td>
        </tr>
    <?php } ?>
   </table>
   <p><nav>
        <li classe = "menu_php"><a href="index.php">MENU</a></li>
      </nav></p>
</body>
</html>
