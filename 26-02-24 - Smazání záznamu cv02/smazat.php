<?php 
    require "db.php";
    $kniha_id = $_GET["kniha_id"];
    $kniha_nazev = $_GET["kniha_nazev"];

    $smazat_knihu = "DELETE FROM knihy WHERE id = $kniha_id";
    $smazat_knihu = $conn->query($smazat_knihu);

    if ($smazat_knihu === TRUE) {
        $hlaska = "Kniha - $kniha_nazev - byla smazána!";
        $css = "spravne";
    } else {
        $hlaska = "Záznam se nepodařilo smazat";
        $css = "smula";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smazání záznamu</title>
</head>
<body>
    <div class="<?= $css;?>">
        <p><?= $hlaska;?></p>
    </div>
    <a href="index.php"><button>Zpět na přehled knih</button></a>
</body>
</html>