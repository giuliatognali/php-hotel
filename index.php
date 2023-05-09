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
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <h1>Hotels</h1>
<!--     <ul>
        <?php foreach ($hotels as $hotel) : ?>
            <li>
                <h3>
                    <?php echo $hotel['name']; ?>
                </h3>
                <p> <?php echo $hotel['description']; ?></p>
                <p>Parcheggio:<?php echo $hotel['parking'] === true ? 'Si' : 'No'; ?></p>
                <p>Voto: <?php echo $hotel['vote']; ?></p>
                <p>Distanza dal centro: <?php echo $hotel['distance_to_center']; ?> km</p>

            </li>
        <?php endforeach; ?>
    </ul> -->

    <table class="table">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Descrizione</th>
      <th scope="col">Parcheggio</th>
      <th scope="col">Voto</th>
      <th scope="col">Distanza dal centro</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><?php echo $hotel['name']; ?></td>
      <td><?php echo $hotel['description']; ?></td>
      <td><?php echo $hotel['parking'] === true ? 'Si' : 'No'; ?></td>
      <td><?php echo $hotel['vote']; ?>/5</td>
      <td><?php echo $hotel['distance_to_center']; ?> km</td>
    </tr>
  </tbody>
</table>
</body>

</html>