<?php
require "db.php";

$zavady_id = $_POST["zavady_id"];
$smazat_zavady = "DELETE FROM zavady WHERE id=$zavady_id";
$smazat_zavady = $conn->query($smazat_zavady);

if ($smazat_zavady === TRUE) {
    $hlaska = "Záznam byl úspěšně smazán";
    $alert = "povedlo";
} else {
    $hlaska = "Něco se nepovedlo :(";
    $alert = "nepovedlo";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smazání záznamu</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="<?= $alert; ?>">
        <?= $hlaska; ?>
    </div>
    <a href="index.php" class="zpet">Zpět na přehled závad</a>
</body>

</html>