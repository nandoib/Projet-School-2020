<?php
session_start(); 
include '../model/users.php';


if (isset($_POST['newuser']))
{
    adduser($_POST['newuserid'],$_POST['newuserpass'],$_POST['newuserclasse'],$_POST['newuserrole']);
    header('Location: ../vues/accueiladmin.php?adduser=1');
}

if (isset($_POST['ancienid']))
{
    $ancienuserid=$_POST['ancienid'];
    $newuserid=htmlspecialchars($_POST['username_edit_form']);
    $newpass=htmlspecialchars($_POST['pass_user_edit_form']);
    $newclasse=htmlspecialchars($_POST['classe_user_edit_form']);

    edituser($ancienuserid,$newuserid,$newpass,$newclasse);

    
    header('Location: ../vues/accueiladmin.php?modifuser=1');
}

if (isset($_POST['useridentifiant']) && isset($_POST['userpass']))
{
    $userid=htmlspecialchars($_POST['useridentifiant']);
    $userpass=htmlspecialchars($_POST['userpass']);

    $donneesco=selectuser($userid,$userpass);
    $donnees = $donneesco->fetch();

    if ($userid == $donnees['identifiant'] AND $userpass == $donnees['pass'])//on verifie les informations de connexion et on dirige vers la page eleve, prof ou admin
    {
        $_SESSION['userid']=$userid;
        $_SESSION['userpass']=$userpass;
        $_SESSION['roleuser']=$donnees['roleuser'];
        $_SESSION['classe']=$donnees['classe'];
        
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
}


if (isset($_GET['supprimereleveadmin']) && $_SESSION['roleuser'] ==  "a")
{
    supprimeruser($_GET['supprimereleveadmin']);
}


?>