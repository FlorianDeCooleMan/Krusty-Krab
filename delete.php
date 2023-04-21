<!-- de code om items te verwijderen -->
<?php
include_once('pdo.php');
if (!isset($_GET['id']) || empty($_GET['id'])) {
    header('Location: admin.php');;
}

$gerecht_id = intval($_GET['id']);
if ($gerecht_id == 0) {
    header('Location: admin.php');;
}

$sql = "DELETE FROM menu1 WHERE gerecht_id = ?";
$stmt = $conn->prepare($sql);
$stmt->execute([$gerecht_id]);
header('Location: admin.php');;
?>