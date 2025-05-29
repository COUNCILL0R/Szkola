<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>PHP Obiektowe</title>
</head>
<body>
    <?php
        class Zbiornik
        {
            private $woda;
            private $pojemnosc = 200;

            public function __construct($wod, $poj)
            {
                $this->woda = $wod;
                $this->pojemnosc = $poj;
            }
            function DolejWody($ile)
            {
                if ($ile > $this->pojemnosc)
                {
                    echo "Nie można dolać tyle wody! " . $ile . "L wody prekracza ". $this->pojemnosc . "L pojemnośći zbiornika!" . "<br>";
                }
                else if ($this->pojemnosc == $this->pojemnosc)
                {
                    
                }
                else 
                {
                    $this -> woda += $ile;
                }
            }
            function WylejWode($ile)
            {
                if ($ile > $this->woda)
                {
                    echo "Nie ma tyle wody w zbiorniku!" . "<br>";
                }
                else
                {
                    $this -> woda -= $ile;
                }
            }
            function AktualnyStanWody()
            {
                echo "Aktualny stan wody: " . $this->woda . "<br>";
            }
        }
        $zbiornik200l = new Zbiornik(50, 200);
        $zbiornik200l->AktualnyStanWody();
        $zbiornik200l->DolejWody(100);
        $zbiornik200l->AktualnyStanWody();
        $zbiornik200l->WylejWode(50);
        $zbiornik200l->AktualnyStanWody();
        $zbiornik200l->DolejWody(100);
        $zbiornik200l->AktualnyStanWody();
        $zbiornik200l->DolejWody(100);
        $zbiornik200l->AktualnyStanWody();
    ?>
</body>
</html>
