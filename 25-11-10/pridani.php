<?php
    $server = "localhost";
    $login = "krankus";
    $heslo = "databaze456";
    $db = "it2027";

    $conn = new mysqli($server, $login, $heslo, $db);

    $jmeno = $_POST['jmeno'];
    $prijmeni = $_POST['prijmeni'];
    $rok_narozeni = $_POST['rok_narozeni'];

    $sql = "INSERT INTO studenti (jmeno, prijmeni, rok_narozeni)
    VALUES ('$jmeno', '$prijmeni', '$rok_narozeni')";

    if ($conn->query($sql) === TRUE) {
        echo "Záznam úspěšně přidán";
    }
?>