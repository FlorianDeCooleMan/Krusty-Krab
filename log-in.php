<?php
include_once('pdo.php');
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
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400&family=Kanit:ital,wght@1,300&display=swap" rel="stylesheet">
    <script>
        function alerts() {
            var username = document.forms["Form"]["username"].value;
            var password = document.forms["Form"]["password"].value;
            if (username == "" || password == "") {
                alert("Vul de gebruikersnaam en wachtwoord in");
                return false;
            }
            if (username != "admin" || password != "12345") {
                alert("Verkeerde gebruikersnaam of wachtwoord");
                return false;
            }
        }
    </script>
</head>
<body>
    <?php
        if(isset($_POST['login'])){
            $username = $_POST['username'];
            $password = $_POST['password'];

            if($username == 'admin' && $password == '12345'){
                session_start();
                $_SESSION['username'] = $username;
                header('Location: admin.php');
                
            }
            else{
                echo "Invalid username or password";
            }
        }
    ?>

    <?php include_once('header.php'); ?>
    <main class="admin-main">
        <form name="Form" method="post" onsubmit="return alerts()">
            <label>Username:<br></label>
            <input type="text" name="username" class="form-control" />
            <br />
            <label>Password:<br></label>
            <input type="password" name="password" class="form-control" />
            <br />
            <input type="submit" name="login" class="btn btn-info" value="Login" />
        </form>
    </main>
    <?php include_once('footer.php'); ?>
</body>
</html>