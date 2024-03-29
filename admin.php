<?php
include_once('pdo.php');
if (!isset($_SESSION["username"])) {
  header("location:log-in.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="CSS/style.css">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400&family=Kanit:ital,wght@1,300&display=swap"
    rel="stylesheet">

  <!-- de pagina responsive maken -->
  <style>
    table {
      font-size: 15px;
    }

    @media (max-width: 1370px) {
      table {
        font-size: 12px;
      }

    }

    @media (max-width: 1131px) {
      table {
        font-size: 8px;
      }

    }

    @media (max-width: 800px) {
      table {
        font-size: 6px;
      }

    }

    @media (max-width: 1px) {
      table {
        font-size: 12px;
      }

    }
  </style>

</head>

<body>
  <!-- de header -->
  <?php include_once('header.php');
  ?>
  <main class="admin-main">
    <!-- de form met de id, de naam, de beschrijving en de acties -->
    <table>
      <tr>
        <td>id</td>
        <td>naam
        <td>

      </tr>
      <?php $data = $conn->query("SELECT * FROM menu1")->fetchAll();
      foreach ($data as $row) {
        ?>
        <tr>
          <td>
            <?php echo $row['gerecht_id']; ?>
          </td>
          <td>
            <?php echo $row['gerecht']; ?>
          </td>
          <td>
            <?php echo $row['prijs']; ?>
          </td>
          <td>
            <?php echo $row['beschrijving']; ?>
          </td>
          <td>
            <a href="create.php?id=<?php echo $row['gerecht_id']; ?>">create</a>
            <a href="update.php?id=<?php echo $row['gerecht_id']; ?>">update</a>
            <a href="delete.php?id=<?php echo $row['gerecht_id']; ?>"
              onclick="return confirm('Are you sure you want to delete this item?');">delete</a>

          </td>
        </tr>
      <?php } ?>
    </table>
    <!-- de logout link -->
    <a href="logout.php" class="log-out">Logout</a>

  </main>
  <!-- de footer -->
  <?php include_once('footer.php');
  ?>
</body>

</html>