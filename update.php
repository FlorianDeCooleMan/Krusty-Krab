<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<!-- zorgen dat je items kan updaten -->
<?php
include_once('pdo.php');

if (!isset($_GET['id']) || empty($_GET['id'])) {
    header('location: index.php?page=admin');
}

$gerecht_id = intval($_GET['id']);
if ($gerecht_id == 0) {
    header('location: index.php?page=log-in');
}

$sql = "SELECT * FROM menu1 WHERE gerecht_id = ?";
$stmt = $conn->prepare($sql);
$stmt->execute([$gerecht_id]);
$result = $stmt->fetchAll();


if (isset($_POST["submit"])) {
    $gerecht_id = (isset($_POST['gerecht_id']) ? $_POST['gerecht_id'] : '');
    $gerecht_en_prijs = (isset($_POST['gerecht_en_prijs']) ? $_POST['gerecht_en_prijs'] : '');
    $beschrijving = (isset($_POST['beschrijving']) ? $_POST['beschrijving'] : '');



    $sql = "UPDATE menu1 SET gerecht_en_prijs=?, beschrijving=? WHERE gerecht_id = ?";
    $conn->prepare($sql)->execute([
        $_POST['gerecht_en_prijs'],
        $_POST['beschrijving'],
        $_POST['gerecht_id'],
    ]);
    header('Location: admin.php');



}
?>

<body>
    <main>
        <!-- de form die je gebruikt om gerechten aan te passen -->
        <?php foreach ($result as $row) { ?>
            <form action="" method="post">
                <h2>Gerechten aanpassen :D</h2>
                <input value="<?php echo $row['gerecht_id']; ?>" type="hidden" name="gerecht_id"
                    placeholder="gerecht_id verandert niet">
                <input value="<?php echo $row['gerecht_en_prijs']; ?>" type="input" name="gerecht_en_prijs" id=""
                    placeholder="gerecht_en_prijs">
                <input value="<?php echo $row['beschrijving']; ?>" type="input" name="beschrijving" id=""
                    placeholder="beschrijving">

                <input type="submit" name="submit" value="gerechten-aanpassen">

            </form>
        <?php } ?>
        <a href="admin.php">admin</a>
    </main>
</body>

</html>