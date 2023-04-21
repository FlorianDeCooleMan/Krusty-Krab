<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="CSS/style.css">
  <title>Document</title>
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400&family=Kanit:ital,wght@1,300&display=swap"
    rel="stylesheet">
</head>

<body>
  <?php include_once('pdo.php');
  ?>
  <?php include_once('header.php'); ?>
  <main>
    <?php $data = $conn->query("SELECT * FROM menu1")->fetchAll();
    foreach ($data as $row) {
      ?>
      <!-- de menu items -->
      <div class="menu-item">
        <h1>
          <?php echo $row['gerecht']; ?>
        </h1>
        <h1>
          <?php echo $row['prijs']; ?>
      </h1>
        <p>
          <?php echo $row['beschrijving']; ?>
        </p>
      </div>


    <?php } ?>
  </main>
  <!-- de footer -->
  <?php include_once('footer.php');
  ?>
</body>

</html>