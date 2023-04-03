<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<?php include_once('pdo.php');
  ?>
<?php include_once('header.php');?>
<main>
<?php $data = $conn->query("SELECT * FROM menu1")->fetchAll();
foreach ($data as $row) {
  ?>
    
      <div class="menu-item">
        <h1><?php echo $row['gerecht_en_prijs']; ?></h1>
        <p><?php echo $row['beschrijving']; ?></p>
      </div>
      
   
    <?php } ?> 
    </main>
  <?php include_once('footer.php');
  ?>
</body>
</html>
