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
    $reponse =$bdd->query("SELECT * FROM users ");
    return $reponse;
}
    

?>
