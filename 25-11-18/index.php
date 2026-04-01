<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Přidání knihy</title>
</head>
<body>
    <h2>Přidání knihy</h2>
    <form action="pridat_knihu.php" method="POST">
        <input type="text" placeholder="Název knihy" name="nazev" required>
        <input type="text" placeholder="Jméno autora" name="jmeno" required>
        <input type="number" placeholder="Rok vydání" name="rok_vydani" required>
        <input type="submit" value="Přidat knihu">
    </form>
</body>
</html>