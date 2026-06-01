<?php require('db.php');?>
<?php
$uprava = $_GET['uprava'];
$sql = "SELECT * FROM knihy WHERE id=$uprava";
$vysledek = $conn->query($sql);
$radek = $vysledek->fetch_assoc();
?>
<form action="">
    <div>
        <label for="">Název knihy:</label>
        <input type="text" name="kniha" value="<?= $radek['nazev'];?>">
    </div>
    <div>
        <label for="">Autor:</label>
        <input type="text" name="autor" value="<?= $radek['autor'];?>">
    </div>
    <div>
        <label for="">Popis:</label>
        <textarea name="popis"><?= $radek['popis'];?></textarea>
    </div>
</form>