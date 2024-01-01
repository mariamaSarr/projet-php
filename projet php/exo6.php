
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diviseurs d'un nombre</title>
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
    <h1>Diviseurs d'un nombre</h1>

    <form method="post" action="">
        <label for="nombre">Entrez un nombre :</label>
        <input type="number" name="nombre" required>
        <button type="submit">Afficher les diviseurs</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = intval($_POST["nombre"]);
    echo "<p>Les diviseurs de $nombre sont : </p>";

    for ($i = 1; $i <= $nombre; $i++) {
        if ($nombre % $i == 0) {
            echo "$i _ \n";
        }
    }
}
    ?><br><br>
    <nav>
        <li classe = "menu_php"><a href="index.php">MENU</a></li>
      </nav>
</body>
</html>