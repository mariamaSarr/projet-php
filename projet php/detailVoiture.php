<?php
// Simulez des données de voiture (remplacez cela par des données réelles depuis une base de données)
$voitures = array(
    1 => array (
        'nom' => 'Voiture 1',
        'marque' => 'FORD EXPLORER 2015',
        'prix' => 20000,
        'description' => '<br>Le Ford Explorer représente une référence d’excellence dans le monde des VUS. Le design extérieur est imposant et élégant.<br> L’intérieur accueillant et polyvalent vous permet de transporter confortablement jusqu’à sept passagers, en garantissant toujours suffisamment d’espace pour les bagages.<br> Le groupe motopropulseur hybride rechargeable et le système de traction intégrale intelligent offrent une puissance incroyable.<br> Grâce aux technologies d’aide à la conduite, le Ford Explorer est parfait pour voyager dans le confort et le style. '
    ),
    2 => array(
        'nom' => 'Voiture 2',
        'marque' => 'JEEP GRAND CHEROCKEE SRT8',
        'prix' => 25000,
        'description' => 'Jeep Grand Cherokee  (ZJ)
        <p>Jeep Grand Cherokee
        Appelé aussi	Jeep Grand Wagoneer<br>
        Marque	 Jeep<br>
        Années de production	1992 - 1998<br>
        Classe	SUV<br></p>
        <p>Moteur et transmission</p>
        Énergie	Essence / Diesel<br>
        Moteur(s)	v8 L6 L4<br>
        Puissance maximale	115 à 237 ch<br>
        Couple maximal	480 N m<br>
        Transmission	Intégrale<br>
        Boîte de vitesses	Automatique à 4 rapports + Overdrive<br>
        <p>Poids et performances</p>
        Poids à vide	1 930 kg<br>
        Vitesse maximale	200 km/h<br>
        Accélération	0 à 100 km/h en 7s s<br>
        Consommation mixte	diesel 9.0/ 2.5i 10.0/ l6 4.0i 16.0/ v8 5.2 18.0/ v8 5.9 20 L/100 km<br>
        Émission de CO2	352 g/km<br>
        <p>Châssis - Carrosserie</p>
        Carrosserie(s)	5 portes, 5 places<br>
        Freins	Disques/Tambours<br>
        <p>Dimensions</p>
        Longueur	4 500 mm<br>
        Largeur	1 760 mm<br>
        Hauteur	1 650 mm<br>
        Empattement	2 690 mm<br>
        Voies AV/AR	1 470 mm  / 1 470 mm<br>
        Chronologie des modèles<br>
        Précédent		Jeep Grand Wagoneer		Jeep Grand Cherokee II		<br>'
    ),
    3 => array(
        'nom' => 'Voiture 3',
        'marque' => 'JEEP GRAND CHEROKEE',
        'prix' => 18000,
        'description' => 'Description de la voiture .<P>Appelé aussi	Jeep Grand Cherokee L
        Marque	 Jeep<br>
        Années de production	2021 -<br>
        Classe	SUV<br>
        Usine(s) d’assemblage	Drapeau des États-Unis Détroit (Michigan)</P>
        <P>Moteur et transmission<br>
        Énergie	Essence/Hybride essence rechargeable<br>
        Moteur(s)	Essence :<br>
        V6 3.6 L Pentastar<br>
        V8 5.7 L Hemi<br>
        
        Hybride essence rechargeable :<br>
        4 cyl. 2.0 L Turbo Hurricane<br>
        Position du moteur	Longitudinale avant<br>
        Puissance maximale	380 ch<br>
        Couple maximal	637 N m<br>
        Transmission	Intégrale<br>
        Boîte de vitesses	Automatique à 8 rapports (ZF)</P>
        <P>Châssis - Carrosserie<br>
        Carrosserie(s)	5 portes, 5 à 7 places<br>
        Plate-forme	Giorgio<br>
        Châssis	Alfa Romeo Giulia II
        Alfa Romeo Stelvio
        Maserati Grecale</P>
        <P>Dimensions
        Longueur	4 999 à 5 204 mm<br>
        Largeur	1 979 mm<br>
        Hauteur	1 816 mm<br>
        Empattement	2 959 à 3 091 mm</P>'
    )
);

// Récupérer l'ID de la voiture depuis la requête GET
$idVoiture = isset($_GET['id']) ? intval($_GET['id']) : 0;

// Vérifier si l'ID de la voiture est valide
if ($idVoiture > 0 && array_key_exists($idVoiture, $voitures)) {
    $voiture = $voitures[$idVoiture];
} else {
    // Rediriger vers la page d'accueil si l'ID de la voiture n'est pas valide
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails de la Voiture</title>
    <style>
         body {
            background-image: url('f5.jpg');
            background-size: 100%;
            background-repeat: no-repeat; 
            font-size: 20px;
           
         }/* Ajoutez du CSS pour styliser votre page selon vos besoins */
    </style>
</head>
<body>

<h1><?php echo $voiture['nom']; ?></h1>

<!-- Afficher les détails de la voiture -->
<p><strong>Marque :</strong> <?php echo $voiture['marque']; ?></p>
<p><strong>Prix :</strong> <?php echo $voiture['prix']; ?> euros</p>
<p><strong>Description :</strong> <?php echo $voiture['description']; ?></p>

</body>
</html>
