<?php require "db.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evidence závad</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Přehled závad</h2>
    <table>
        <tr>
            <th>Jméno a příjmení</th>
            <th>Datum</th>
            <th>Popis závady</th>
            <th>Smazání záznamu</th>
        </tr>
        <?php 
            $zavady = "SELECT * FROM zavady";
            $zavady = $conn->query($zavady);
            while ($radek = $zavady->fetch_assoc()): ?>
            <tr>
                <td><?= $radek["jmeno_prijmeni"]?></td>
                <td><?= $radek["datum"]?></td>
                <td><?= $radek["popis"]?></td>
                <td>
                    <form action="smazat.php" method="POST">
                        <input type="hidden" name="zavady_id" value="<?= $radek['id'];?>">
                        <input type="submit" value="Smazat záznam">
                    </form>
                </td>
            </tr>
        <?php endwhile;?>

    </table>
</body>
</html>