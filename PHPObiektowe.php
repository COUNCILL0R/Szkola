<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>PHP Obiektowe</title>
</head>
<body>
    <?php
        class DwieLiczby
        {
            private $a;
            private $b;
            function __construct($p, $q)
            {
                $this->a = $p;
                $this->b = $q;
            }
            function suma()
            {
                return $this->a+$this->b;
            }
            function getA()
            {
                return $this->a;
            }
            function getB()
            {
                return $this->b;
            }
            function setA($ile)
            {
                $this->a = $ile;
            }
        }

        $b = new DwieLiczby(10,15);
        $b2 = new DwieLiczby(20,29);

        echo "<br>" . $b->suma() ."<br>";
        echo "<br>" . $b->getA() ."<br>";
        echo "<br>". $b2->getB() ."<br>";
        echo var_dump($b2);
        echo var_dump($b);
        $b->setA(88);
        echo "<br>" . $b->getA() ."<br>";
        echo "<br>" . $b->suma() ."<br>";
    ?>
</body>
</html>