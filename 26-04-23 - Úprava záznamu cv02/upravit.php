<?php 
require('db.php');
$uprava = $_GET['uprava'];

$upravit_zaznam = "SELECT * FROM it_technika WHERE id=$uprava";
//vyberu konkrétní data podle id, které si přenesu z index.php pomocí $_GET
$upravit_zaznam = $conn->query($upravit_zaznam);
$radek = $upravit_zaznam->fetch_assoc();

//print_r($radek);
if (isset($_POST['upravit'])) {
    $nazev = $_POST['nazev'];
    $typ = $_POST['typ'];
    $stav = $_POST['stav'];
    $id = $_GET['uprava'];

    $sql = "UPDATE it_technika SET nazev='$nazev', typ='$typ', stav='$stav' WHERE id=$id";
    if ($sql = $conn->query($sql)) {
        header("Location: index.php?upraveno=1");
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sklad IT technika - úprava záznamu</title>
</head>
<body>
    <h2>Úprava - <?= $radek['nazev'];?></h2>
    <form action="upravit.php?uprava=<?= $uprava;?>" method="POST">
        <div>
            <label for="nazev">Název</label>
            <input type="text" id="nazev" name="nazev" value="<?= $radek['nazev'];?>">
        </div>
        <div>
            <label for="typ">Typ</label>
            <input type="text" id="typ" name="typ" value="<?= $radek['typ'];?>">
        </div>
        <div>
            <label for="stav">Stav</label>
            <select name="stav" id="stav">
                <option value="skladem" <?php if ($radek['stav'] == "skladem") {echo "selected";}?>>skladem</option>
                <option value="vypujceno" <?php if ($radek['stav'] == "vypujceno") {echo "selected";}?>>vypůjčeno</option>
                <option value="servis" <?php if ($radek['stav'] == "servis") {echo "selected";}?>>servis</option>
                <option value="odpis" <?php if ($radek['stav'] == "odpis") {echo "selected";}?>>odpis</option>
            </select>
        </div>
        <input type="submit" value="Upravit záznam" name="upravit">
    </form>
</body>
</html>