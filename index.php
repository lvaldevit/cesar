<form method="POST" action="./chiffrement.php">

    <p><label>code à chiffrer <input type="text" name="code"></label></p>

    <p><label>décallage <input type="number" min="0" max="25" name="decallage"></label></p>

    <p><label>envoyer <input type="submit" name="envoyer"></label></p>

    <p><label>résultat <input type="text" value="<?php echo $_COOKIE['resultat']; ?>" disabled></label></p>
    
</form>

<form method="POST" action="./dechiffrement.php">

    <p><label>code à dechiffrer <input type="text" name="code2"></label></p>

    <p><label>décallage 2 <input type="number" min="0" max="25" name="decallage2"></label></p>

    <p><label>envoyer 2 <input type="submit" name="envoyer2"></label></p>

    <p><label>résultat 2 <input type="text" value="<?php echo $_COOKIE['resultat2']; ?>" disabled></label></p>
    
</form>