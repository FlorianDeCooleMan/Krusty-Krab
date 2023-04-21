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
$message = '';
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
                $gerecht_id = (isset($_POST['gerecht_id']) ? $_POST['gerecht_id'] : '');
                $gerecht = (isset($_POST['gerecht']) ? $_POST['gerecht'] : '');
                $prijs = (isset($_POST['prijs']) ? $_POST['prijs'] : '');
                $beschrijving = (isset($_POST['beschrijving']) ? $_POST['beschrijving'] : '');

                $sql = "UPDATE menu1 SET gerecht=?, prijs=?, beschrijving=? WHERE gerecht_id = ?";
                $conn->prepare($sql)->execute([
                    $_POST['gerecht'],
                    $_POST['prijs'],
                    $_POST['beschrijving'],
                    $_POST['gerecht_id'],
                ]);
                header('Location: admin.php');
    
            }



        }
?>

<body>
    <main>
        <!-- de form die je gebruikt om gerechten aan te passen -->
        <?php foreach ($result as $row) { ?>
            <form name="Form" action="" method="post" onsubmit="return validateForm()">
                <h2>Gerechten aanpassen :D</h2>
                <input value="<?php echo $row['gerecht_id']; ?>" type="hidden" name="gerecht_id"
                    placeholder="gerecht_id verandert niet">
                <input value="<?php echo $row['gerecht']; ?>" type="input" name="gerecht" id=""
                    placeholder="gerecht">
                    <input value="<?php echo $row['prijs']; ?>" type="input" name="prijs" id=""
                    placeholder="prijs">
                <input value="<?php echo $row['beschrijving']; ?>" type="input" name="beschrijving" id=""
                    placeholder="beschrijving">

                <input type="submit" name="submit" value="gerechten-aanpassen">

            </form>
        <?php } ?>
        <a href="admin.php">admin</a>
    </main>
    <script src="validate.js"></script>
</body>

</html>