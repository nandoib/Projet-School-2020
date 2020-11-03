<!doctype html>
<html lang="en">
  <head>
    <title>Accueil admin</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <!-- Font Awesome -->
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
  </head>
  <body>
  <?php
    session_start();
    include '../model/users.php';
    include '../model/notes.php';

    $userselect = selectuser($_SESSION['userid'],$_SESSION['userpass']);
    $user = $userselect->fetch();
    
    if (isset($_GET['eleve']))
    {
      $ficheeleve=ficheleve($_GET['eleve']);
      $ficheuser=$ficheeleve->fetch();
    }

    $listeuser=selectall();
    ?>

    <?php 
    if (isset($_GET['modifuser']))
    {?>
    <div class="alert alert-secondary text-center" role="alert">
      <b>L'utilisateur à bien été modifié !</b>
    </div>
    <?php 
    }

    if (isset($_GET['adduser']))
    {?>
    <div class="alert alert-secondary text-center" role="alert">
      <b>L'utilisateur à bien été ajouté !</b>
    </div>
    <?php 
    }
    ?>

    <h1> Coucou <?= $user['identifiant'];?> </h1>


    <!-- Partie popup ajout utilisateur -->
    <div class="modal fade" id="newuser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold">Ajouter un utilisateur</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
        </div>

        <form action="../controller/maincontroller.php" method="post" class="form-example">

        <div class="modal-body mx-3">
          <div class="md-form mb-5">
            <i class="fas fa-user prefix grey-text"></i>
            <input type="text" name="newuserid" id="form3" placeholder="Identifiant" class="form-control validate">
            <label>Identifiant</label>
          </div>

          <div>
            <input type=hidden id="newuser" name="newuser" value="ok">
          </div>

          <div class="md-form mb-4">
            <i class="fas fa-lock prefix grey-text"></i>
            <input type="password" placeholder="mot de passe" name="newuserpass" id="form2" class="form-control validate">
            <label>Mot de passe</label>
          </div>

          <div class="md-form mb-4">
            <i class="fas fa-user-graduate prefix grey-text"></i>
            <input type="text" placeholder="classe" name="newuserclasse" id="form2" class="form-control validate">
            <label>Classe</label>
          </div>

          <div class="md-form mb-4">
            <i class="fas fa-arrows-alt prefix grey-text"></i>
            <input type="text" placeholder="Rôle" name="newuserrole" id="form2" class="form-control validate">
            <label>Rôle</label>
          </div>

        </div>
        <div class="modal-footer d-flex justify-content-center">

        <input class="btn btn-indigo" type="submit" value="Valider">
        </form>
      </div>
    </div>
  </div>
</div>

<div>
  <a href="../controller/maincontroller.php?edituser=1" class="btn btn-lg btn-indigo" data-toggle="modal" data-target="#newuser">Ajouter un utilisateur</a>
</div>
    <!-- fin ajout nouvel utilisateur -->

    <h2> Liste des utilisateurs </h2>
    
    <div class="notes">
      <?php 
      while ($donnees = $listeuser->fetch())
      {
        if ($donnees['roleuser'] == "e")
        {
          $role = "éleve";
        }
        elseif ($donnees['roleuser']=="p")
        {
          $role="professeur";
        }
        else
        {
          $role="administrateur";
        }

        echo '
        <b><a class="eleve" href="accueiladmin.php?eleve='.$donnees['identifiant'].'">'.$donnees['identifiant'].'</a></b><br/>
        rôle : '  .$role.' <br />
        classe : ' .$donnees['classe']. '<br/>

        <!-- Button du pop up suppression user -->
        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#SupprimerUser">
          Supprimer
        </button>
        
        <!-- Pop up suppression user -->
        <div class="modal fade" id="SupprimerUser" tabindex="-1" role="dialog" aria-labelledby="SupprimerUser"
          aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="SupprimerUser">Etes-vous sûr de vouloir supprimer '.$donnees['identifiant'].' ?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                Cette action sera irréversible !
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                <a class="btn btn-danger" href="../controller/maincontroller.php?supprimereleveadmin='.$donnees['identifiant'].'" role="button">Supprimer</a>
              </div>
            </div>
          </div>
        </div>

        <div class="modal fade" id="modalSubscriptionForm'.$donnees['identifiant'].'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold">Modifier '.$donnees['identifiant'].'</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
        </div>

        <form action="../controller/maincontroller.php" method="post" class="form-example">

        <div class="modal-body mx-3">
          <div class="md-form mb-5">
            <i class="fas fa-user prefix grey-text"></i>
            <input type="text" name="username_edit_form" id="form3" placeholder="'.$donnees['identifiant'].'" class="form-control validate">
            <label>Identifiant</label>
          </div>

          <div>
            <input type=hidden id="ancienid" name="ancienid" value="'.$donnees['identifiant'].'">
          </div>

          <div class="md-form mb-4">
            <i class="fas fa-lock prefix grey-text"></i>
            <input type="password" placeholder="mot de passe" name="pass_user_edit_form" id="form2" class="form-control validate">
            <label>Mot de passe</label>
          </div>

          <div class="md-form mb-4">
            <i class="fas fa-user-graduate prefix grey-text"></i>
            <input type="text" placeholder="'.$donnees['classe'].'" name="classe_user_edit_form" id="form2" class="form-control validate">
            <label>Classe</label>
          </div>

        </div>
        <div class="modal-footer d-flex justify-content-center">
        <input class="btn btn-indigo" type="submit" value="Valider">
        </form>
      </div>
    </div>
  </div>
</div>

<div>
  <a href="../controller/maincontroller.php?edituser=1" class="btn btn-lg btn-indigo" data-toggle="modal" data-target="#modalSubscriptionForm'.$donnees['identifiant'].'">Modifier</a>
</div>
      
        
        <hr/>';
        
      }
      ?>
        </div>
    <!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
  </body>
</html>