<?php 
    class Movie{
        public $Titolo;
        public $Regista;
        public $Anno_di_rilascio;
        public $Durata;
    }

    $Spiderman = new Movie();

    $Spiderman->Titolo = 'Spider-Man 2';
    $Spiderman->Regista = 'Sam Raimi';
    $Spiderman->Anno_di_rilascio = '16 Settembre 2004';
    $Spiderman->Durata = '127m';

    var_dump($Spiderman)
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php oop 1</title>
    <!-- 
    Oggi pomeriggio ripassate i primi concetti di classe, variabili e metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
    - è definita una classe ‘Movie’
    => all'interno della classe sono dichiarate delle variabili d'istanza
    => all'interno della classe è definito un costruttore
    => all'interno della classe è definito almeno un metodo
    - vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
    -->
</head>
<body>
    
    <?php 
        $Spiderman->film = 'SpiderMan 2';

        echo $Spiderman->film;
    ?>


</body>
</html>