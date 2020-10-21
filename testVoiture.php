<!DOCTYPE html>
<html>
    <head>
        <title>test</title>
    </head>
    <body>
    <?php
    require_once('Voiture.php');
    $voiture1 = new Voiture('Citroen', 'Verte', 'DEG57LK');

    $voiture1->afficher();
    ?>
    </body>
</html>