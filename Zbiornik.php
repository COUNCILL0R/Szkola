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
            private $pojemnosc;

            public function __construct($wod, $poj)
            {
                $this->woda = $wod;
                $this->pojemnosc = $poj;
            }
            function DolejWody($ile)
            {
                if ($this->woda + $ile > $this->pojemnosc)
                {
                    echo "Nie można dolać tyle wody! " . $ile . "L wody przeleje się za zbiornik!" . "<br>";
                }
                else 
                {
                    $this -> woda += $ile;
                }
            }
            function WylejWode($ile)
            {
                if ($this->woda < $ile)
                {
                    echo "Nie można wylać tyle wody!" . "<br>";
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
        $zbiornik200l->WylejWode(50);
        $zbiornik200l->WylejWode(50);
        $zbiornik200l->AktualnyStanWody();
        $zbiornik200l->DolejWody(200);
        $zbiornik200l->DolejWody(20);
        $zbiornik200l->AktualnyStanWody();
    ?>
</body>
</html>
