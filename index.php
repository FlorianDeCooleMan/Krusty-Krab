<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="CSS/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400&family=Kanit:ital,wght@1,300&display=swap"
    rel="stylesheet">
</head>

<body>
  <?php include_once('pdo.php');
  ?>
  <!-- de header -->
  <?php include_once('header.php');
  ?>
  <div class="lucht">
    <img src="Krusty Krab logo.png" alt="krab">
    <h1 class="titel">The Krusty Krab</h1>
  </div>
  <!-- de golven -->
  <div class="ocean">
    <div class="wave"></div>
    <div class="wave"></div>
    <div class="zee">
      <div class="main-tekst">
        <h1>Restaurant the Krusty Krab</h1>
        <p>
          Restaurant The Krusty Krab in Bikini Bodem <br>
          is een gemoedelijkbourgondisch restaurant waar u kunt genieten van dagverse gerechten. <br>
          Ook met grotere gezelschappen kunt u bij ons <br>
          terecht. <br>
          Ons restaurant is ook geschikt voor zakelijke diners <br>
          door met name de ruime opstellingen de goed <br>
          akoestiek zodat u ongestoord kan communiceren. <br>
          U kunt bij ons in het restaurant dineren en bij warm <br>
          weer hebben wij een mooi terrasen een sfeervolle <br>
          achtertuin waar gedineerd kan worden. <br> <br>
          In overleg is veel mogelijk.
        </p>
      </div>
      <!-- het vlak met fotos en de link naar het menu -->
      <div class="bruin-vak">
        <div class="genieten">
          <h1>Geniet van onze specialiteiten</h1>
        </div>
        <div class="eten-fotos">
          <img src="glas.png" class="images" alt="glas" height="400px">
          <img src="pasta.png" alt="pasta" height="400px">
          <img src="taart.png" class="images" alt="taart" height="400px">
        </div>
        <!-- de knop die leid naar het menu -->
        <div class="menu-achtergrond">
          <a href="menu.php">
            <div class="menu-knop">
              <h1>Ontdek ons menu</h1>
            </div>
          </a>
        </div>
      </div>
    </div>
    <!-- de footer -->
    <?php include_once('footer.php');
    ?>
  </div>
</body>

</html>