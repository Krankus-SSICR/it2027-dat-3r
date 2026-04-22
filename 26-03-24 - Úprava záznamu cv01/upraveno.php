<?php 
require('db.php');
$znacka_zmena = $_POST['znacka'];
$model_zmena = $_POST['model'];
$typ_zmena = $_POST['typ'];
$id = $_POST['id'];

$upravit = "UPDATE skate SET znacka='$znacka_zmena', model='$model_zmena', typ='$typ_zmena' WHERE id=$id";

if ($conn->query($upravit) === TRUE) {
    header("Location: index.php?upraveno=1");
    exit();
} else {
    echo "Něco se nepovedlo :(";
}
?>