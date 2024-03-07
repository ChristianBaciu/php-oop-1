<?php 
    class Movie{
        public $titolo;
        public $regista;
        public $anno_di_rilascio;
        public $durata;

        // prendo tutti gli attributi della class Movie
        public function __construct($_titolo, $_regista, $_anno_di_rilascio, $_durata)
        {
            $this->titolo = $_titolo;
            $this->regista = $_regista;
            $this->anno_di_rilascio = $_anno_di_rilascio;
            $this->durata = $_durata;
        }

        // funzione film
        public function infoFilm(){
            echo "Titolo:" . " " . $this->titolo . "<br>";
            echo "Regista:" . " " . $this->regista . "<br>";
            echo "Anno di rilascio:" . " " . $this->anno_di_rilascio . "<br>";
            echo "Durata del film:" . " " . $this->durata . "<br>";
        }
    }

    $Spiderman = new Movie('Spider-Man','Sam Raimi','7 Giugno 2002','121m');
    $Spiderman2 = new Movie('Spider-Man 2','Sam Raimi','16 Settembre 2004','127m');
    $Spiderman3 = new Movie('Spider-Man 3','Sam Raimi','1 Maggio 2007','139m');

    var_dump($Spiderman, $Spiderman2 , $Spiderman3);

    // $Spiderman->Titolo = 'Spider-Man 2';
    // $Spiderman->Regista = 'Sam Raimi';
    // $Spiderman->Anno_di_rilascio = '16 Settembre 2004';
    // $Spiderman->Durata = '127m';
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
        echo "<h1>Trilogia di Spiderman di Sam Raimi</h1>";

        echo "<h2>Primo film</h2>";
        $Spiderman->infoFilm(); // infoFilm funzione/metodo

        echo "<h2>Secondo film</h2>";
        $Spiderman2->infoFilm(); // infoFilm funzione/metodo

        echo "<h2>terzo film</h2>";
        $Spiderman3->infoFilm(); // infoFilm funzione/metodo
    ?>

</body>
</html>