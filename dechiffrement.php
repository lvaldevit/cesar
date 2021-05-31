<?php
    $alphabet = "abcdefghijklmnopqrstuvwxyz";
    $messageADechiffrer = $_POST["code2"];
   
    $cle = $_POST["decallage2"];
    $longueurAlphabet = strlen($alphabet);
   
    $longueurDuMessageEnClair = strlen($messageADechiffrer);
    $chaineChiffree = [];

    //echo $longueurAlphabet;
    //echo $longueurDuMessageEnClair;

    // Boucle pour //
   
    for($i=0; $i<$longueurDuMessageEnClair; $i++){
       
        $j = strpos($alphabet, substr($messageADechiffrer, $i, 1));
        $j = $j-$cle;

        while($j+1>$longueurAlphabet){
            $j = $j-$longueurAlphabet;
        }

     //   echo $j;    

      //  echo $alphabet[$j];
      $chaineChiffree[$i] = $alphabet[$j];

    }

    $new = implode($chaineChiffree);

    setcookie("resultat2",$new , time() + 5, '/');
    header('Location: http://cesar.test/index.php');

?>