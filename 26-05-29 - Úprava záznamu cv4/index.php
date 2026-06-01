<?php require("db.php");?>
<?php
$sqlVyber = "SELECT * FROM sety";
$sqlProvedeni = $conn->query($sqlVyber);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Přehled setů</title>
</head>
<body>
    <table>
        <tr>
            <th>Název</th>
            <th>Cena</th>
            <th>Úprava záznamu</th>
        </tr>
        <?php while ($radek = $sqlProvedeni->fetch_assoc()):?>
            <tr>
                <td><?= $radek["nazev"];?></td>
                <td><?= $radek["cena"];?></td>
                <td><a href="upravit.php?id=<?= $radek["id"];?>">Upravit</a></td>
            </tr>
        <?php endwhile;?>
    </table>
</body>
</html>