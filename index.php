<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<style>
    .movie {
        border: 1px solid black;
        }
</style>
<body>
</body>
</html>

<?php

require_once __DIR__  . '/Models/Movie.php';
require_once __DIR__  . '/Models/Serie.php';

$movie1 = new Movie('Harry Potter', 'English', 10, 500000000, 152);
$movie2 = new Movie('Avengers Endgame', 'English', 10, 1200000000, 180);
$movie3 = new Movie('The Dark Knight', 'English', 9, 1000000000, 152);
$movie4 = new Movie('Avengers Infinity War', 'English', 10, 1000000000, 180);
$movie5 = new Movie('The Matrix', 'English', 10, 800000000, 136);

$serie1 = new Serie('Stranger Things', 'English', 9, 3);
$serie2 = new Serie('Game of Thrones', 'English', 9.5, 8);
$serie3 = new Serie('Breaking Bad', 'English', 9, 5);
$serie4 = new Serie('The Walking Dead', 'English', 9, 5);
$serie5 = new Serie('The Flash', 'English', 9, 5);

$movies_series = [
    $movie1,
    $movie2,
    $movie3,
    $movie4,
    $movie5,
    $serie1,
    $serie2,
    $serie3,
    $serie4,
    $serie5,
];

?>
<table class="table table-striped table-hover table-dark text-center ">
    <thead>
        <tr>
            <th>Title</th>
            <th>Language</th>
            <th>Rating</th>
            <th>Profit/Seasons</th>
            <th>Duration/-</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($movies_series as $production) { ?>
            <tr>
                <td><?php echo $production->getTitle() ?></td>
                <td><?php echo $production->getLanguage() ?></td>
                <td><?php echo $production->getRating() ?></td>
                <?php if ($production instanceof Movie) { ?>
                    <td><?php echo $production->getProfit() ?> €</td>
                    <td><?php echo $production->getDuration() ?> minutes</td>
                <?php } elseif ($production instanceof Serie) { ?>
                    <td><?php echo $production->getSeason() ?></td>
                    <td>-</td>
                <?php } ?>
            </tr>
        <?php } ?>
    </tbody>
</table>













