<?php
    $alphabet = "abcdefghijklmnopqrstuvwxyz";
    $messageAChiffrer = $_POST["code"];
   
    $cle = $_POST["decallage"];
    $longueurAlphabet = strlen($alphabet);
   
    $longueurDuMessageEnClair = strlen($messageAChiffrer);
    $chaineChiffree = [];

    //echo $longueurAlphabet;
    //echo $longueurDuMessageEnClair;

    // Boucle pour //
   
    for($i=0; $i<$longueurDuMessageEnClair; $i++){
       
        $j = strpos($alphabet, substr($messageAChiffrer, $i, 1));
        $j = $j+$cle;

        while($j+1>$longueurAlphabet){
            $j = $j-$longueurAlphabet;
        }

     //   echo $j;    

      //  echo $alphabet[$j];
      $chaineChiffree[$i] = $alphabet[$j];

    }

    $new = implode($chaineChiffree);

    setcookie("resultat",$new , time() + 5, '/');
    header('Location: http://cesar.test/index.php');

?>