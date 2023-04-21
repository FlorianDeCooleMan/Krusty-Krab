<?php
include_once('pdo.php');
$message = '';

if (isset($_POST["submit"])) {
    if($_POST['gerecht'] == ""){
        $message = "gerecht mag niet leeg zijn";
    }
    if($_POST['prijs'] == ""){
        $message = "prijs mag niet leeg zijn";
    }
    if($_POST['beschrijving'] == ""){
        $message = "beschrijving mag niet leeg zijn";
    }

    if($message == ""){
    $sql = ("INSERT INTO menu1(gerecht, prijs, beschrijving) VALUES (:gerecht,:prijs,:beschrijving)");
    $stmt = $conn -> prepare($sql);
    $stmt->bindParam(':gerecht',$_POST['gerecht']);
    $stmt->bindParam(':prijs',$_POST['prijs']);
    $stmt->bindParam(':beschrijving', $_POST['beschrijving']);
    $stmt -> execute();

    header('Location: admin.php');
    }
}
?>
