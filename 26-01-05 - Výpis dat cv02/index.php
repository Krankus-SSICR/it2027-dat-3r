<?php 
    require "db.php";
    $data = "SELECT * FROM videohry";
    $data = $conn->query($data);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Přehled videoher</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <table>
        <tr>
            <th>Název Hry</th>
            <th>Rok vydání</th>
        </tr>
        <?php while ($radek = $data->fetch_assoc()): ?>
            <tr>
                <td><?php echo $radek['nazev']; ?></td>
                <td><?php echo $radek['rok_vydani']; ?></td>
            </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>