<?php
    $s = "localhost";
    $u = "krankus";
    $p = "databaze456";
    $db = "it2027";

    $conn = new mysqli($s, $u, $p, $db);

    $nazev = $_POST['nazev'];
    $jmeno = $_POST['jmeno'];
    $rok_vydani = $_POST['rok_vydani'];

    $sql = "INSERT INTO knihovna (nazev, jmeno, rok_vydani) VALUES ('$nazev', '$jmeno', '$rok_vydani')";

    if ($conn->query($sql) === TRUE) {
        echo "Záznam úspěšně přidán";
    } else {
        echo "Jejda, něco se nepovedlo.";
    }
?>