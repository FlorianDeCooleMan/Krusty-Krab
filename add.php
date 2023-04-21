<?php
include_once('pdo.php');

    $sql = ("INSERT INTO menu1(gerecht, prijs, beschrijving) VALUES (:gerecht,:prijs,:beschrijving)");
    $stmt = $conn -> prepare($sql);
    $stmt->bindParam(':gerecht',$_POST['gerecht']);
    $stmt->bindParam(':prijs',$_POST['prijs']);
    $stmt->bindParam(':beschrijving', $_POST['beschrijving']);
    $stmt -> execute();

    header('Location: admin.php');
?>
