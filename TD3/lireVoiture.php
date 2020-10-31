<?php
    require_once('Model.php');
    require_once('Voiture.php');

    Model::Init();

    $rep = (Model::$pdo)->query("Select * From Voiture");

    $tab_obj = $rep->fetchAll(PDO::FETCH_OBJ);
    foreach($tab_obj as $value) {
        print_r($value);
        echo "</br>";
    }

    foreach (Voiture::getAllVoitures() as $value) {
        echo ($value->afficher());
        echo "<br>";
    }

    $v = Voiture::getVoitureByImmat("ABC456");
    var_dump($v);
    $v->afficher();
    /* foreach(Voiture::getVoitureByImmat("RT894EZ") as $value){
        echo (($value->afficher());
    } */


?>