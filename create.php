<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<!-- de code om items toe te voegen -->


<body>
    <main>
        <!-- de form om een nieuw gerecht te plaatsen -->
        <form action="./new/add.php" method="post">
            <input type="text" name="gerecht">
            <input type="text" name="prijs">
            <input type="text" name="beschrijving">
            <input type="submit" name="submit" value="submit">
        </form>
        <!-- de link om terug de admin page te gaan -->
        <a href="admin.php">admin</a>
    </main>
</body>

</html>