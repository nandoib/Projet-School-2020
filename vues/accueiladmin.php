<!doctype html>
<html lang="en">
  <head>
    <title>Accueil admin</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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

    <h1> Coucou <?= $user['identifiant'];?> </h1>

    <?php
     if(isset($_GET['eleve'])){
    ?>
      <div class="eleve">
        Voici la fiche de <?= $_GET['eleve']?><br/> 
    <?php
      }
    ?>
      </div>

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
        classe : ' .$donnees['classe']. '<br/><hr/>';
      }
      ?>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>