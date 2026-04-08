<?php 
    $s = "localhost";
    $u = "krankus";
    $p = "databaze456";
    $db = "it2027";

    $conn = new mysqli($s, $u, $p,$db);

    $interpret = $_POST['interpret'];
    $pisen = $_POST['pisen'];

    $sql_pridat = "INSERT INTO pisnicky (pisen, interpret) VALUES ('$pisen', '$interpret')";

    if($conn->query($sql_pridat) === TRUE) {
        echo "Píseň $pisen byla úspěšně přidána!";
    } else {
        echo "Přidání do db se nepovedlo :-(";
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Přehled písniček</h2>
    <table border="1" width="80%">
        <tr>
            <th>Název písně</th>
            <th>Interpret</th>
        </tr>
        <?php
            $sql_vyber = "SELECT * FROM pisnicky";
            $vyber = $conn->query($sql_vyber);

            while ($radek = $vyber->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $radek['pisen'] . "</td>";
                echo "<td>" . $radek['interpret'] . "</td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>