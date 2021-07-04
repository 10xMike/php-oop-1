<?php

require __DIR__ . '/classes/movie.php';

$manhattan = new Movie("Manhattan", "https://picsum.photos/200", "English", 1979, "Manhattan explores how the life of a middle-aged television writer dating a teenage girl is further complicated when he falls in love with his best friend’s mistress");
$beautifulBoy = new Movie("Beautiful Boy", "https://picsum.photos/200", "English", 2018, "After he and his first wife separate, journalist David Sheff struggles to help their teenage son, who goes from experimenting with drugs to becoming devastatingly addicted to methamphetamine");
$wall_e = new Movie("WALL·E", "https://picsum.photos/200", "English", 2008, "WALL·E is the last robot left on an Earth that has been overrun with garbage and all humans have fled to outer space. For 700 years he has continued to try and clean up the mess, but has developed some rather interesting human-like qualities. When a ship arrives with a sleek new type of robot, WALL·E thinks he’s finally found a friend and stows away on the ship when it leaves");
$soul = new Movie("Soul", "https://picsum.photos/200", "English", 2020, "Joe Gardner is a middle school teacher with a love for jazz music. After a successful gig at the Half Note Club, he suddenly gets into an accident that separates his soul from his body and is transported to the You Seminar, a center in which souls develop and gain passions before being transported to a newborn child. Joe must enlist help from the other souls-in-training, like 22, a soul who has spent eons in the You Seminar, in order to get back to Earth");
$perfectStrangers = new Movie("Perfect Strangers", "https://picsum.photos/200", "Italian", 2016, "During a dinner, a group of friends decide to share whatever text message or phone call they will receive during the evening—and all hell breaks loose");

$movies = [
    $manhattan,
    $beautifulBoy,
    $wall_e,
    $soul,
    $perfectStrangers,
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Object-oriented programming (1)</title>
</head>
<body>
    <section>
        <h1>Movies</h1>
        <div class="movies">
            <?php foreach ($movies as $movie): ?>
                <div class="movie_card">
                    <span><?php echo $movie->title ?></span><br>
                    <img src="<?php echo $movie->image ?>" alt="">
                    <p><?php echo $movie->description ?></p>
                    <span>Language: <?php echo $movie->language ?></span>
                    <span>Year: <?php echo $movie->year ?></span>
                </div><br>
            <?php endforeach?>
        </div>
    </section>
</body>
</html>
