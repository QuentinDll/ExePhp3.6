<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercice 3</title>
    </head>
    <body>
        <a href="index.php?startDate=2/05/2016&endDate=27/11/2016">000</a>
        <p>
    <?php
    if (isset($_GET['startDate']) && isset($_GET['endDate'])){
      echo $_GET['startDate'] ." ". $_GET['endDate'] ." ";
    } else {
        echo 'Erreurs dans les paramètres';
    }
    ?>
        </p>
    </body>
</html>
