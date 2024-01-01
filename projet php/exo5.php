
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 5</title>
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
   <p><h1>Dimension d'un cercle</h1></p> 
   <?php 
    if(isset($_POST["number"])){
        $rayon = (int) $_POST["number"];
        $diametre = $rayon*2;
        $pi = 3.14;
        $perimetre = 2*$pi*$rayon;
        $surface = $pi*$rayon*$rayon;
    }
?>

   <form method="POST">
    <label for="">Entrer le rayon :</label>
    <input type="text" name="number" required>
    <button type="submit">Envoyer</button>
   </form>
   <?php
        if (isset($diametre)){
        echo "<p>Le diamètre est : $diametre </p>";
        }
        if (isset($perimetre)){
            echo "<p>Le perimtre est : $perimetre </p>";
        }
        if (isset($surface)){
            echo "<p>La surface est : $surface </p>";
        }
    ?>
<p><nav>
        <li classe = "menu_php"><a href="index.php">MENU</a></li>
      </nav>    </p>
</body>
</html>
