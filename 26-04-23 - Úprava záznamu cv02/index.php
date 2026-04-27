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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <h2>Sklad IT Techniky</h2>
    <?php if(isset($_GET['upraveno']) && $_GET['upraveno'] == 1):?>
        <p>Záznam byl úspěšně upraven</p>
    <?php endif;?>
    <table class="table w-75 center">
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