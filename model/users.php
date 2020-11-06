<?php

function getbdd()
{
    $bdd = new PDO('mysql:host=localhost;dbname=projetschool;charset=utf8', 'nando', 'root');
    return $bdd;
}

 function selectuser($userid,$userpass)
 {
    $bdd=getbdd();
    $reponse =$bdd->query("SELECT identifiant,pass,roleuser,classe FROM users WHERE identifiant = '".$userid."' AND pass = '".$userpass."' ");
    return $reponse;
 }

function selectall()
{
    $bdd=getbdd();
    $selectalluser =$bdd->query("SELECT * FROM users");
    return $selectalluser;
}

function selectallbyclasse($classe)
{
    $bdd=getbdd();
    $selectalluserbyclasse =$bdd->query("SELECT * FROM users WHERE classe='".$classe."'");
    return $selectalluserbyclasse;
}

function ficheleve($userid)
{
    $bdd=getbdd();
    $ficheuser=$bdd->query("SELECT identifiant,roleuser,classe FROM users WHERE identifiant = '".$userid."'");
    return $ficheuser;
}

function supprimeruser($userid)
{
    $bdd=getbdd();
    $reponse=$bdd->query("DELETE FROM users WHERE identifiant='".$userid."'");
}

function adduser($userid,$userpass,$userclasse,$roleuser)
{
$bdd=getbdd();
$req = $bdd->prepare('INSERT INTO users(identifiant, pass, classe, roleuser) VALUES(:identifiant, :pass, :classe, :roleuser)');
$req->execute(array(
	'identifiant' => $userid,
	'pass' => $userpass,
    'classe' => $userclasse,
    'roleuser' => $roleuser
	));
}

function edituser($ancienid,$userid,$userpass,$userclasse)
{
    $bdd=getbdd();
    $req = $bdd->prepare('UPDATE users SET identifiant = :nvidentifiant, pass = :nvpass, classe = :nvclasse  WHERE identifiant = :ancienid');
    $req->execute(array(
	'nvidentifiant' => $userid,
	'nvpass' => $userpass,
    'nvclasse' => $userclasse,
    'ancienid'=> $ancienid
	));

}

?>
