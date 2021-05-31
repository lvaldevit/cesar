<?php 
    var_dump($_POST);

    if(isset($_POST["toto"]) && isset($_POST["tata"])){
        echo"ouvrir toto et tata";
    }
    
    else if(isset($_POST["toto"]) || isset($_POST["tata"])){
        echo"ouvrir ";

        if(isset($_POST["toto"])){
            echo"toto";
        }
        else{
            echo"tata";
        }
    }
    else {
        echo"ne rien ouvrir";
    }
?>