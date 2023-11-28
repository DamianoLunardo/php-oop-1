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

class Production {
    public $title;
    public $language;
    public $rating;

    function __construct($title, $language, $rating) {
        $this->title = $title;
        $this->language = $language;
        $this->rating = $rating;
    }

    function getTitle() {
        return $this->title;
    }

    function getLanguage() {
        return $this->language;
    }

    function getRating() {
        return $this->rating;
    }
}

$movie1 = new Production ('Harry Potter', 'English', 10);
//echo 'Film: ' . $movie1->getTitle(). $movie1->getLanguage(). $movie1->getRating(). '<br>';

$movie2 = new Production ('Avengers Endgame', 'English', 10);
//echo 'Film: ' . $movie2->getTitle(). $movie2->getLanguage(). $movie2->getRating();  

$movies = [
    $movie1,
    $movie2,
    $movie1,
    $movie2,
];

?>
<div class="row mt-5">
    <?php foreach ($movies as $movie) { ?>
        <div class="col-md-3">
            <div class="movie<?php echo $index ?> text-center bg-dark text-light rounded shadow ">
                <h3><?php echo $movie->getTitle() ?></h3>
                <p><?php echo $movie->getLanguage() ?></p>
                <p><?php echo $movie->getRating() ?></p>
            </div>
        </div>
    <?php } ?>
</div>








