<!--
esercizio di oggi: PHP Movie
nome repo: php-oop-1

Oggi pomeriggio ripassate i primi concetti di classe, variabili e metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
 - è definita una classe Movie
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo

   - vengono istanziati almeno due oggetti Movie e stampati a schermo i valori delle relative proprietà

   Bonus 1:
Creare un'istanza Actor e modificare la classe Movie in modo che accetti piú di un attore

Bonus 2:
Creare un layout html per stampare a schermo una lista di movies.
Facciamo attenzione all’organizzazione del codice, suddividendolo in appositi file e cartelle. Possiamo ad esempio organizzare il codice
- creando un file dedicato ai dati (tipo le array di oggetti) che potremmo chiamare db.php
- mettendo ciascuna classe nel proprio file e magari raggruppare tutte le classi in una cartella dedicata che possiamo chiamare Models
- organizzando il layout dividendo la struttura ed i contenuti in file e parziali dedicati.
Buon Lavoro e sprattutto buon weekend!

-->

<?php
include_once __DIR__ . '/Models/Movie.php';
include_once __DIR__ . '/Models/Actor.php';


//ATTORI

$actor1 = new Actor(1, 'Keanu', 'Reeves');
$actor2 = new Actor(2, 'Laurence', 'Fishburne');
$actor3 = new Actor(3, 'Carrie-Anne', 'Moss');
$actor4 = new Actor(4, 'Hugo', 'Weaving');

// reloaded
$actor5 = new Actor(5, 'Monica', 'Bellucci');
$actor6 = new Actor(6, 'Lambert', 'Wilson',);

// revolution

//resurrection
$actor7 = new Actor(7, 'Neil', 'Patrick Harris');
$actor8 = new Actor(8, 'Cristina', 'Ricci');


$film1 = new Movie(1, 'Matrix', 'Lana Wachowski, Lilly Wachowski', 'Azione, Fantascienza, Avventura, Cinema Fantastico', '1998', 'USA', '136 min', 'Warner Bros', 'Matrix è un film di genere azione, fantascienza del 1999, diretto da Lana Wachowski, Lilly Wachowski, con Keanu Reeves e Laurence Fishburne. Uscita al cinema il 07 maggio 1999. Durata 136 minuti. Warner Bros.');

$film2 = new Movie(2, ' Matrix Reloaded', 'Lana Wachowski, Lilly Wachowski', 'Azione, Fantascienza, Cyberpunk, Avventura, Thiller, Fantascienza apocalittica e post apocalittica', '2003', 'USA', '137 min', 'Warner Bros.', 'Matrix Reloaded è un film di genere fantascienza, azione del 2003, diretto da Lana Wachowski, Lilly Wachowski, con Keanu Reeves e Laurence Fishburne. Uscita al cinema il 23 maggio 2003. Durata 137 minuti. Distribuito da Warner Bros.');

$film3 = new Movie(3, 'Matrix Revolutions', 'Lana Wachowski, Lilly Wachowski', 'Azione, Fantascienza, Cyberpunk, Avventura, Arti Marziali, Azione-avventura, Thiller, Fantascienza apocalittica e post apocalittica',  '2023', 'USA', '138 min', 'Warner Bros', 'Matrix Revolutions è un film di genere azione, fantascienza del 2003, diretto da Lana Wachowski, Lilly Wachowski, con Keanu Reeves e Laurence Fishburne. Uscita al cinema il 05 novembre 2003. Durata 138 minuti. Distribuito da Warner Bros.');
$film4 = new Movie(4, 'Matrix Resurrections', 'Lana Wachowski', 'Azione, Fantascienza', '2021', 'USA', 'Warner Bros. Pictures', '148 min', 'Matrix Resurrections è un film di genere azione, fantascienza del 2021, diretto da Lana Wachowski, con Keanu Reeves e Carrie-Anne Moss. Uscita al cinema il 01 gennaio 2022. Durata 148 minuti. Distribuito da Warner Bros. Pictures. ');



$film1->addActor($actor1, 'NEO',  $actor2, 'MORPHEUS', $actor3, 'TRINITY', $actor4, 'AGENTE SMITH');
$film2->addActor($actor1, 'NEO',  $actor2, 'MORPHEUS', $actor3, 'TRINITY', $actor4, 'AGENTE SMITH', $actor5, 'PERSEPHONE');
$film3->addActor($actor1, 'NEO',  $actor2, 'MORPHEUS', $actor3, 'TRINITY', $actor4, 'AGENTE SMITH', $actor5, 'PERSEPHONE');
$film4->addActor($actor1, 'NEO',  $actor2, 'MORPHEUS', $actor3, 'TRINITY', $actor4, 'AGENTE SMITH', $actor5, 'PERSEPHONE', $actor6, 'MEROVINGIO', $actor7, 'ANALISTA', $actor8, 'GWYN VERE');

$movies = [$film1, $film2, $film3, $film4];


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Free Web tutorials">
    <meta name="keywords" content="HTML, CSS">
    <meta name="author" content="Monica Izzo">
    <title>PHP OOP 1</title>

    <!-- icon-->
    <link rel="icon" type="image/png" sizes="32x32" href="img/faicon.png">

    <!-- stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <section>

            <h2 class="bg-light p-3">Film</h2>
            <div class="mt-5">
                <ul class="list-group">
                    <?php foreach ($movies as $movie) : ?>
                        <li class="list-group-item rounded-0 p-5">
                            <h3 class="mb-3"><?= $movie->title ?></h3>
                            <div><small>Registra: <strong><?= $movie->register ?></strong></small></div>
                            <div><small>anno di uscita: <strong><?= $movie->year ?></strong></small></div>
                            <div><small>Paese: <strong><?= $movie->village ?></strong></small></div>
                            <div><small>Durata: <strong><?= $movie->duration ?></strong></small></div>
                            <div><small>Distribuito: <strong><?= $movie->distribution ?></strong></small></div>
                            <div><small>Genere: <strong><?= $movie->genre  ?></strong></small></div>
                            <p class="mt-3 bg-light p-2"><?= $movie->description ?></p>
                            <!-- CAST -->
                            <h3 class="mb-3">CAST:</h3>
                            <div><strong><?= $movie->getCastNames(); ?></strong></div>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </section>
    </div>
</body>

</html>