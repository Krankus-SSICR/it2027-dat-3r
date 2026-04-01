<?php 
    require "db.php";
    $vyber = "SELECT * FROM knihy";
    $vyber = $conn->query($vyber);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Přehled knih</title>
</head>
<body>
    <h2>Přehled knih</h2>
    <table>
        <tr>
            <th>Název knihy</th>
            <th>Jméno autora</th>
            <th>Smazat knihu</th>
        </tr>
        <?php while ($radek = $vyber->fetch_assoc()):?>
            <tr>
                <td><?= $radek["nazev"];?></td>
                <td><?= $radek["autor"];?></td>
                <td>
                    <form action="smazat.php" method="GET">
                        <input type="hidden" value="<?= $radek["id"];?>" name="kniha_id">
                        <input type="hidden" value="<?= $radek["nazev"];?>" name="kniha_nazev">
                        <input type="submit" value="Smazat knihu">
                    </form>
                </td>
            </tr>
        <?php endwhile;?>
    </table>
</body>
</html>