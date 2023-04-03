<?php
include_once('pdo.php');
if(!isset($_SESSION["username"]))  
{  
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
     <link rel="stylesheet" href="style.css">
 </head>
 <body>
<?php include_once('header.php');
    ?>
<main>
     <table>
          <tr>
               <td>id</td>
               <td>naam<td>
               <td>actie</td>

          </tr>
          <?php $data = $conn->query("SELECT * FROM menu1")->fetchAll();
foreach ($data as $row) {
  ?>
          <tr>
               <td><?php echo $row['gerecht_id']; ?> </td>
               <td>
               <?php echo $row['gerecht_en_prijs']; ?>
               </td>
               <td>
               <?php echo $row['beschrijving']; ?>
               </td>
               <td><a href="update.php?id=<?php echo $row['gerecht_id']; ?>">update</a>
                <a href="delete.php?id=<?php echo $row['gerecht_id']; ?>">delete</a> 
                <a href="create.php?id=<?php echo $row['gerecht_id']; ?>">create</a> 

               </td>
          </tr>
          <?php } ?>
     </table>

<a href="logout.php">Logout</a>  
 
</main>
<?php include_once('footer.php');
  ?>
 </body>
 </html>