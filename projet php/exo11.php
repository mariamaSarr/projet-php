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
 background-color: #F5A9F2;
}
body{
            background-image: url('fondA.jpg');
          }
</style>
</head>
<body>
<p><h1>Tableau multidimensionnel</h1></p>
<p><h2>lecture avec la boucle while</h2></p>
   <table >
    <tr>
        <td>Cle</td>
        <td>Prénom</td>
        <td>Ville de residence</td>
        <td>Age</td>
    </tr>
<?php  
reset($personnes);

while ($nom = key($personnes)) {
    $infos = current($personnes);?>
  <tr>
    <td><?php echo  "$nom<br>";?></td>
    <td><?php echo $infos["prenom"] . "<br>";?></td>
    <td><?php echo $infos["ville de residence"] . "<br>";?></td>
    <td><?php echo $infos["age"] . "<br>";?></td>
    <td><?php echo "<br>";?></td>
    </tr><?php
    next($personnes);
}?>

   </table>
   <p><nav>
        <li classe = "menu_php"><a href="index.php">MENU</a></li>
      </nav></p>
</body>
</html>
