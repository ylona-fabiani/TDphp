<?php
    prequire_once('Model.php');
    require_once('Voiture.php');

    Model::Init();

    $rep = (Model::$pdo)->query("Select * From voiture");

    $tab_obj = $rep->fetchAll(PDO::FETCH_OBJ);
    foreach($tab_obj as $value) {
        print_r($value);
        echo "</br>";
    }

    foreach (Voiture::getAllVoitures() as $value) {
        echo ($value->afficher());
        echo "<br>";
    }



?>