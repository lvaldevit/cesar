<form method="POST" action="">

    <p><label>pokemon <input type="text" name="pokemon"></label></p>

    <p><label>envoyer <input type="submit" name="envoyer"></label></p>

</form>

<?php 
if ($_POST['pokemon'] == 1){
    echo "L'unité c'est la clef";
} elseif ($_POST['pokemon'] >= 2 && $_POST['pokemon'] <= 5) {
    echo "L'oignon fait la sauce";
} elseif ($_POST['pokemon'] > 5 && $_POST['pokemon'] < 1) {
    echo "Erreur critique!";
} else {
    echo "Erreur critique!";
}
?>