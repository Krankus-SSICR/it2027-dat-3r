<?php require("db.php");?>
<?php
$idSetu = $_GET["id"];
$sqlVyberSetu = "SELECT * FROM sety WHERE id=$idSetu";
$sqlVyberProvest = $conn->query($sqlVyberSetu);
$radek = $sqlVyberProvest->fetch_assoc();

// print_r($radek);
// Úprava záznamu
if(isset($_POST["upravitSet"])) {
    $nazev = $_POST["nazev"];
    $cena = $_POST["cena"];
    $sqlUprava = "UPDATE sety SET nazev='$nazev', cena='$cena' WHERE id=$idSetu";
    if ($conn->query($sqlUprava)) {
        header("Location: index.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Úprava záznamu</title>
</head>

<body>
    <form action="upravit.php?id=<?= $radek["id"];?>" method="POST">
        <input type="hidden" value="<?= $radek["id"];?>">
        <div>
            <label>Název setu</label>
            <input type="text" value="<?= $radek["nazev"];?>" name="nazev">
        </div>
        <div>
            <label>Cena setu</label>
            <input type="text" value="<?= $radek["cena"];?>" name="cena">
        </div>
        <input type="submit" name="upravitSet">
        </form>
    </body>
</html>