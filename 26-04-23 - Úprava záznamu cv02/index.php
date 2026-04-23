<?php 
require('db.php');
$it_technika = "SELECT * FROM it_technika";
$it_technika = $conn->query($it_technika);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Přehled IT techniky</title>
</head>
<body>
    <h2>Sklad IT Techniky</h2>
    <table border="1">
        <tr>
            <th>Název</th>
            <th>Typ</th>
            <th>Stav</th>
            <th>Upravit</th>
        </tr>
        <?php while ($radek = $it_technika->fetch_assoc()):?>
            <tr>
                <td><?= $radek['nazev'];?></td>
                <td><?= $radek['typ'];?></td>
                <td><?= $radek['stav'];?></td>
                <td><a href="upravit.php?uprava=<?= $radek['id'];?>">Upravit záznam</a></td>
            </tr>
        <?php endwhile;?>
    </table>
</body>
</html>