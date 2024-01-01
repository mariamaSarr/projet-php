
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXERCICE2</title>
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
    <h1>multiple de 3 et de 5</h1>
    <p>
    <form method="post">
        <label for="entrer un nombre :"></label>
        <input type="text"name="nombre" required>
        <button type="submitt">verifier</button>
        <br>
    </form>
    </p>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = intval($_POST["nombre"]);
    if ($nombre % 3 === 0 && $nombre % 5 === 0) {
        echo "Le nombre $nombre est à la fois un multiple de 3 et de 5.";
    } else {
        echo "Le nombre$nombre n'est pas un multiple de 3 et de 5.";
    }
}
?>
<p>
<nav>
  <li classe = "menu_php"><a href="index.php">MENU</a></li>
</nav>
</p>
</body>
</html>

