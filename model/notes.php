<?php 

function getnotes($eleve)
{
    $bdd=getbdd();
    $reponse =$bdd->query("SELECT note,datenote,matiere FROM notes WHERE iduser = '".$eleve."' ORDER BY matiere"); 
    return ($reponse);
}


?>