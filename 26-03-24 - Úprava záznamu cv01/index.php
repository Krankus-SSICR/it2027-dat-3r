<?php require "db.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Přehled Skateboardů</title>
</head>
<body>
    <h2>Přehled Skateboardů</h2>
    <table>
        <tr>
            <th>Značka</th>
            <th>Model</th>
            <th>Typ</th>
            <th>Upravit</th>
        </tr>
        <?php
    $vyber = "SELECT * FROM skate";
    $vyber = $conn->query($vyber);
    while ($radek = $vyber->fetch_assoc()):
        ?>
    <tr>
        <td><?= $radek["znacka"];?></td>
        <td><?= $radek["model"];?></td>
        <td><?= $radek["typ"];?></td>
        <td>
            <form action="upravit.php" method="GET">
                <input type="hidden" value="<?= $radek["id"];?>" name="skate-uprava">
                <input type="submit" value="Upravit záznam">
            </form>
        </td>
    </tr>
    <?php endwhile;?>
</table>
</body>
</html>