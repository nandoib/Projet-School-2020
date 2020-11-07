<?php 

function getnotes($eleve)
{
    $bdd=getbdd();
    $reponse =$bdd->query("SELECT note,datenote,matiere FROM notes WHERE iduser = '".$eleve."' ORDER BY matiere"); 
    return ($reponse);
}

function addnote($eleve,$matiere,$note)
{
$bdd=getbdd();
$req = $bdd->prepare('INSERT INTO notes(note, matiere, iduser) VALUES(:note, :matiere, :iduser)');
$req->execute(array(
	'note' => $note,
	'matiere' => $matiere,
    'iduser' => $eleve
	));
}
?>