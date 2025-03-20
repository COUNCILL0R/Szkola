<?php
    $pol=mysqli_connect("localhost", "root", "", "liczby");
    if (mysqli_connect_errno()) {
        echo "UWAGA błąd połączenia: ".mysqli_connect_error();
        exit();
    }

    $z="select * from dane";
    if ($w=mysqli_query($pol, $z)) {
        echo "<br>Z bazy danych odczytano ".mysqli_num_rows($w)." rekordów<br>";

        echo "<table border=2>";
        echo "<tr><th>NAZWA</th><th>WARTOŚĆ</th><th>CENA</th></tr>";
        while ($rekord=mysqli_fetch_assoc($w)) {
            echo "<tr><td>".$rekord["nazwa"]."</td><td>".$rekord["wartosc"]."</td><td>".$rekord["cena"]."</td></tr>";
        }
        echo "</table>";
        mysqli_free_result($w);
    }
    mysqli_close($pol);
?>