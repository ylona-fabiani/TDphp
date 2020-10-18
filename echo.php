<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title> Mon premier php </title>
    </head>
   
    <body>
        Voici le résultat du script PHP : 
        <p>
          <? php
            $voiture = array('marque', 'couleur','immat');
            var_dump($voiture);

            for ($i = 0; $i < count($voiture); i++) {
              echo $voiture[$i];
            }

            


            
          ?>
      </p>
    </body>
</html> 