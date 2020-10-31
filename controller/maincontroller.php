<?php
session_start(); 
include '../model/users.php';

$userid=htmlspecialchars($_POST['useridentifiant']);
$userpass=htmlspecialchars($_POST['userpass']);

$donneesco=selectuser($userid,$userpass);
$donnees = $donneesco->fetch();

if ($userid == $donnees['identifiant'] AND $userpass == $donnees['pass'])//on verifie les informations de connexion et on dirige vers la page eleve, prof ou admin
{
    $_SESSION['userid']=$userid;
    $_SESSION['userpass']=$userpass;
    
    if ($donnees['roleuser']=='e'){
        header('Location: ../vues/accueileleve.php');
        
    }

    if ($donnees['roleuser']=='p'){
        header('Location: ../vues/accueilprof.php');
    }

    if ($donnees['roleuser']=='a'){
        header('Location: ../vues/accueiladmin.php ');
    }
}
else 
{
    header('Location: ../index.php?connection=10');
}
?>