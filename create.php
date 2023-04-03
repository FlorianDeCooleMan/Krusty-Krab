<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
include_once('pdo.php');

if (isset($_POST["submit"])) {
    $gerecht_id = (isset($_POST['gerecht_id']) ? $_POST['gerecht_id'] : '');
    $gerecht_en_prijs = (isset($_POST['gerecht_en_prijs']) ? $_POST['gerecht_en_prijs'] : '');
    $beschrijving = (isset($_POST['beschrijving']) ? $_POST['beschrijving'] : '');



    $sql = "INSERT INTO menu1 (gerecht_id, gerecht_en_prijs, beschrijving) VALUES(?,?,?)";
    $conn->prepare($sql)->execute([
        $_POST['gerecht_id'],
        $_POST['gerecht_en_prijs'],
        $_POST['beschrijving'],
    ]);



}
 ?>
<body>
    <main>
        <form action="create.php" method="post">
            <input type="hidden" name="gerecht_id">
            <input type="text" name="gerecht_id">
            <input type="text" name="gerecht_en_prijs">
            <input type="text" name="beschrijving">
            <input type="submit" name="submit" value="submit">
        </form>
        <a href="admin.php">admin</a>
    </main>
</body>
</html>