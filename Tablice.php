<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tablice</title>
    <style>
        *{
            font-size:1.05em;
            font-family:Verdana, Geneva, Tahoma, sans-serif;
        }
        .czerwony{
            color: red;
            font-weight: bold;
        }
        .niebieski{
            color: blue;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <?php
        $tab1 = ['a','b','c','d','e']; //[45,67,78,34,56,78]
        echo 'Tablica tab1 zawiera '. count($tab1) .'elementów';
        foreach($tab1 as $a){
            echo "$a ";
        }
        echo "<br>".$tab1[3]."<br>";
        $tab2 = [] ;//[] operator tablicowy //array()
        //$tab2 = array()
        $tab2[1] = 100;
        $tab2[50] = 200.09;
        $tab2[100] = 150;
        //$tab2[2000] = "aaaa"
        var_dump($tab2);
        echo "<br>";
        //echo $tab2[5]; //błąd!!!
        foreach($tab2 as $klucz) echo "$klucz ";
        echo "<br>"; 
        sort($tab2); //sortowanie tablicy rosnąco
        foreach($tab2 as $klucz) echo "$klucz ";
        rsort($tab2); //sortowanie tablicy malejąco
        foreach($tab2 as $klucz) echo "$klucz ";
        echo "<br>";
        $tab3 = array();
        $tab3[] = rand(1,100);
        $tab3[] = rand(1,100);
        $tab3[] = rand(1,100);
        echo "<br>";
        var_dump($tab3);
        echo"<br>";
        foreach($tab3 as $klucz) echo"$klucz ";
        echo "<br>";
        echo min($tab3);
        //ma, count, array_sum
        //$srednia = array_sum($tab3)/count($tab3)
        echo "<br>";

        //tablice asocjacyjne
        $tab4["imie"] = "Jan";
        $tab4["nazwisko"] = "Kowalski";
        echo $tab4["nazwisko"];
        echo "<br>";
        $dane = "ala:::ola kowalska:::ela";
        $tablica = explode(":::", $dane);
        var_dump($tablica);
        echo "<br>";
        echo "<br>". $tablica[1] ."<br>";
        $dane1 = implode(":::",$tablica);
        var_dump($dane1);
        echo "$dane1 <br>";
        //przykładowe zadanie
        //wylosuj tablicę 100 liczb losowych w zakresie 10 do 50, policz min, max
        //wartość min oznacz kolorem czerwonym, a wartość max - niebieskim
        for($i=0;$i<100;$i++){
            $tab[]=rand(10,50);
        }
        $min = min($tab);
        $max = max($tab);
        for($i=0;$i<100;$i++){
            if($tab[$i]==$min) echo "<span class=czerwony>". $tab[$i] ."</span>";
            else if($tab[$i]==$max) echo "<span class=niebieski>". $tab[$i] ."</span>";
            else echo $tab[$i] ." ";
        }
        echo "<br>";
        echo "min = $min";
        echo "<br>";
        echo "max = $max";
    ?>
    <?php
        $tab1 = ['a','b','c','d','e'];
        echo 'Tablica tab1 zawiera '. count($tab1) .' elementów';
        foreach($tab1 as $a)
        {
            echo "$a ";
        }
        echo "<br>". $tab1[3] ."<br>";
        $tab2 = [];
        $tab2[1] = 100;
        $tab2[50] = 200.09;
        $tab2[100] = 150;
        var_dump($tab2);
    ?>
</body>
</html>
