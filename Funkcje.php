<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funkcje</title>
</head>
<body>
    <?php

        //include("funkcje.php") - Funkcje w innym pliku
        //require_once - Funkcje wymagane z innego pliku chociaż raz

        function Tablica(&$tablica)
        {
            $tablica[1]=100;
        }

        function razyDwa($a){
            $wynik = 2*$a;
            return $wynik;
        }
        function mnozenie($a,$b=100,$c=200){
            $wynik = $a*$b*$c;
            return $wynik;
        }

        $tab=array();
        $tab[1]=200;
        echo $tab[1] . "<br>";
        Tablica($tab);
        echo $tab[1] . "<br>";

        $liczba = 18;
        echo $liczba . "<br>";
        echo razyDwa($liczba)*100 . "<br>";

        $x = 3;
        $y = 10;

        echo mnozenie($x,$y);

        //Wszystkie funkcje w PHP mają zasięg globalny, mogą być wykonane poza funkcją nawet jeśli zostały zdefiniowane wewnątrz niej i odwrotnie.
        //W funkcji można użyć (&$[zmienna]) aby wykorzystać referencję, nie kopiować całej zmiennej.

    ?>
</body>
</html>
