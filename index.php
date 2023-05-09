<?php
//array di array associativi
    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];
    //var_dump($hotels)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotels PHP</title>
</head>
<body>
    <h1>Hotels</h1>
    <ul>
        <?php foreach($hotels as $hotel) {?>
        <li>
            <h3>
                <?php echo $hotel['name']; ?>
            </h3>
            <p> <?php echo $hotel['description']; ?></p>
            <p>Parcheggio:<?php echo $hotel['parking']; ?></p>
            <p>Voto: <?php echo $hotel['vote']; ?></p>
            <p>Distanza dal centro: <?php echo $hotel['distance_to_center']; ?> km</p>
        
        </li>
        <?php } ?>
    </ul>
</body>
</html>