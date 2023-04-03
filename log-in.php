<?php
include_once('pdo.php');

if($_POST['login']){
  if($_POST['username'] != '' && $_POST['password'] != ''){
    if($_POST['username'] == "admin" && $_POST['password'] == "12345"){
      $_SESSION["username"] = $_POST["username"];
      header('Location: admin.php');
    }
  } else {
    $message =  'username of password is empty';
  }
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
<?php include_once('pdo.php');
  ?>
<?php include_once('header.php');
    ?>
    <main>
      <?php
    if(isset($message))  
                {  
                     echo '<label class="text-danger">'.$message.'</label>';  
                }  
                ?>  
      <form method="post">  
                     <label>Username</label>  
                     <input type="text" name="username" class="form-control" />  
                     <br />  
                     <label>Password</label>  
                     <input type="password" name="password" class="form-control" />  
                     <br />  
                     <input type="submit" name="login" class="btn btn-info" value="Login" />  
                </form>  </main>
<?php include_once('footer.php');
  ?>
</body>
</html>