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
        <form name="Form" action="add.php" method="post" onsubmit="return validateForm()">
            <input type="text" name="gerecht" placeholder="gerecht">
            <input type="text" name="prijs" placeholder="prijs">
            <input type="text" name="beschrijving" placeholder="beschrijving">
            <input type="submit" name="submit" value="submit">
        </form>
        <!-- de link om terug de admin page te gaan -->
        <a href="admin.php">admin</a>
    </main>
    <script src="validate.js"></script>
</body>

</html>