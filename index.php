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
include __DIR__ . '/Models/Movie.php';
$film1 = new Movie(1, 'Matrix', 'Azione, Fantascienza, Avventura, Cinema Fantastico');
$film2 = new Movie(2, ' Matrix Reloaded', 'Azione, Fantascienza, Cyberpunk, Avventura, Thiller, Fantascienza apocalittica e post apocalittica');
$film3 = new Movie(3, 'Matrix Revolutions', 'Azione, Fantascienza, Cyberpunk, Avventura, Arti Marziali, Azione-avventura, Thiller, Fantascienza apocalittica e post apocalittica');
$film4 = new Movie(4, 'Matrix Resurrections', 'Azione, Fantascienza');


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
    <div class="container">
        <section>
            <h2>Film</h2>
            <ul>
                <? foreach ($movies as $movie) : ?>
                    <li>
                        <h2><?= $movie->title ?></h2>
                        <small><em><?= $movie->genre ?></em></small>
                    </li>
                <? endforeach; ?>
            </ul>
        </section>
    </div>
</body>

</html>