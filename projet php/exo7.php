
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 7</title>
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
    <h1>Nombres parfaits</h1>

<p><form method="POST">
    <label for="">Entrer le nombre:</label>
    <input type="text" name="nombre" required>
    <button type="submit">Envoyer</button>
   </form> </p> 
   
   <?php
     if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = (int) $_POST["nombre"];
        function sommeDiviseursPropres($nombre) {
            $somme = 0;
            for ($i = 1; $i <= $nombre / 2; $i++) {
                if ($nombre % $i == 0) {
                    $somme += $i;
                }
            }
            return $somme;
        }
   
        $sommeDiviseurs = sommeDiviseursPropres($nombre);
        if ($sommeDiviseurs == $nombre) {
            echo "$nombre est un nombre parfait.\n";
        } else {
            echo "$nombre n'est pas un nombre parfait.\n";
        }
    }    
    ?>
    <p>
    <nav>
        <li classe = "menu_php"><a href="index.php">MENU</a></li>
      </nav>
      </p> 