<?php
include_once('pdo.php');
if(!isset($_GET['id']) || empty($_GET['id'])){
    header('location: index.php?page=admin');
}

$gerecht_id = intval($_GET['id']);
if($gerecht_id == 0){
   header('location: index.php?page=log-in');
}

$sql = "DELETE FROM menu1 WHERE gerecht_id = ?";
$stmt = $conn->prepare($sql);
$stmt->execute([$gerecht_id]);
header('location: index.php?page=log-in');
?>