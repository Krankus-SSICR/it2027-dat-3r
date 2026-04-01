<?php 
require('db.php');
$id = $_GET['skate-uprava'];
//echo $id;

$vybrat = "SELECT * FROM skate WHERE id=$id";
$vybrat = $conn->query($vybrat);
$radek = $vybrat->fetch_assoc();
//print_r($radek);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upravit záznam</title>
</head>
<body>
    <form action="">
        <label for="znacka">Značka:</label>
        <input type="text" id="znacka" name="znacka" value="<?= $radek['znacka'];?>">
        <br><br>
        <label for="model">Model:</label>
        <input type="text" id="model" name="model" value="<?= $radek['model'];?>">
        <br><br>
        <label for="typ">Typ:</label>
        <input type="text" id="typ" name="typ" value="<?= $radek['typ'];?>">
        <br><br>
        <input type="submit" value="Upravit záznam">
    </form>
</body>
</html>