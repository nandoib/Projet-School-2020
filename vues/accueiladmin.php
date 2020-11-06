<!doctype html>
<html lang="en">
  <head>
  <title>Accueil admin</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Feuille CSS -->
    <link rel="stylesheet" href="../css/style1.css" type="text/css" media="screen" />
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
  <!-- Main navigation -->

  <style>
    html,
    body,
    header,
    #intro 
    {
      height: 100%;
    }

    #intro 
    {
      background: url("../images/fond.jpg")no-repeat center center fixed;
      background-size: 2000px 1000px;
    }
    .test
    {
      margin-top:200px;
    }
  </style>
  <header>
    <?php
      session_start();
      include '../model/users.php';
      include '../model/notes.php';

      $userselect = selectuser($_SESSION['userid'],$_SESSION['userpass']);
      $user = $userselect->fetch();

      $listeuserCP=selectallbyclasse("CP");
      $listeuserCE1=selectallbyclasse("CE1");
      $listeuserCE2=selectallbyclasse("CE2");
      
      if (isset($_GET['eleve']))
      {
        $ficheeleve=ficheleve($_GET['eleve']);
        $ficheuser=$ficheeleve->fetch();
      }

      $listeuser=selectall();
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
    
  <header>
    <!--Mask-->
    <div id="intro" class="view">

      <div class="mask rgba-black-strong">

        <div class="container-fluid d-flex justify-content-center">

          <div class="row d-flex justify-content-center text-center">

            <div class="col-12">

              <!-- Heading -->
              <h2 class="test display-4 font-weight-bold white-text pt-5">Bienvenue admin</h2>

              <!-- Divider -->
              <hr class="hr-light">


                <!-- Partie popup ajout utilisateur -->
              <div class="modal fade" id="newuser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header text-center">
                      <h4 class="modal-title w-100 font-weight-bold ">Ajouter un utilisateur</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>

                    <form action="../controller/maincontroller.php" method="post" class="form-example">

                      <div class="modal-body mx-3">
                        <div class="md-form mb-6">
                          <i class="fas fa-user prefix grey-text"></i>
                          <input type="text" name="newuserid" id="form3" placeholder="Identifiant" class="form-control validate">
                        </div>

                        <div>
                          <input type=hidden id="newuser" name="newuser" value="ok">
                        </div>

                        <div class="md-form mb-4">
                          <i class="fas fa-lock prefix grey-text"></i>
                          <input type="password" placeholder="mot de passe" name="newuserpass" id="form2" class="form-control validate">
                        </div>

                        <div class="md-form mb-4">
                          <i class="fas fa-user-graduate prefix grey-text"></i>
                          <input type="text" placeholder="classe" name="newuserclasse" id="form2" class="form-control validate">
                        </div>

                        <div class="md-form mb-4">
                          <i class="fas fa-arrows-alt prefix grey-text"></i>
                          <input type="text" placeholder="Rôle" name="newuserrole" id="form2" class="form-control validate">
                        </div>

                      </div>

                      <div class="modal-footer d-flex justify-content-center">
                        <input class="btn btn-indigo" type="submit" value="Valider">
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>

            <a class="btn btn-outline-white" href="../controller/maincontroller.php?edituser=1"  data-toggle="modal" data-target="#newuser">Ajouter un utilisateur</a>


            <!-- Partie popup ajout utilisateur -->
            <div class="modal fade" id="voirclasse" tabindex="-1" role="dialog" aria-labelledby="voirclasse"
              aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold">Voir les classes</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>

                  <div id="accordion" role="tablist">
                    <div class="card">
                      <div class="card-header" role="tab" id="headingOne">
                        <h5 class="mb-0">
                          <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <b>Classe des CP</b>
                          </a>
                        </h5>
                      </div>

                      <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
                        <div class="card-body">
                          <table class="table table-striped table-bordered">
                          <!--Table head-->
                            <thead>
                              <tr>
                                <th>Prenom</th>
                                <th>Classe</th>
                                <th> Rôle </th>
                                <th>Modifier/Supprimer</th>
                              </tr>
                            </thead>
                            <!--Table head-->

                            <!--Table body-->
                          <tbody>
                            <?php 
                              while ($donnees = $listeuserCP->fetch())
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
                                  <tr class="table-info">
                                    <td>'.$donnees['identifiant'].'</td>
                                    <td>'.$donnees['classe'].'</td>
                                    <td>'.$role.'</td>

                                    <div class="row justify-content-md-center align-items-center">
                                      <td><!-- Button du pop up suppression user + boutton modification user -->
                                        <button type="button" class="btn btn-sm btn-indigo col-4" data-toggle="modal" data-target="#modalSubscriptionForm'.$donnees['identifiant'].'">
                                          Modifier
                                        </button>
                                        <button type="button" class="btn btn-sm btn-danger col-4" data-toggle="modal" data-target="#SupprimerUser">
                                          Supprimer
                                        </button>
                        
                                        <!-- Pop up suppression user -->
                                        <div class="modal fade" id="SupprimerUser" tabindex="-1" role="dialog" aria-labelledby="SupprimerUser"
                                          aria-hidden="true">
                                          <div class="modal-dialog " role="document">
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
                                                  <div class=" mb-5">
                                                    <i class="fas fa-user prefix grey-text"></i>
                                                    <input type="text" name="username_edit_form" id="form3" placeholder="'.$donnees['identifiant'].'" class="form-control validate">
                                                    <label>Identifiant</label>
                                                  </div>
                  
                                                  <div>
                                                    <input type=hidden id="ancienid" name="ancienid" value="'.$donnees['identifiant'].'">
                                                  </div>
                  
                                                  <div class=" mb-4">
                                                    <i class="fas fa-lock prefix grey-text"></i>
                                                    <input type="password" placeholder="mot de passe" name="pass_user_edit_form" id="form2" class="form-control validate">
                                                    <label>Mot de passe</label>
                                                  </div>
                  
                                                  <div class=" mb-4">
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
                                      </td>
                                    </div>
                                  </tr>
                                ';
                              }
                            ?>

                          </tbody>
                          <!--Table body-->
                          </table>
                          <!--Table-->         
                        </div>
                      </div>
                    </div>

                    <div class="card">
                      <div class="card-header" role="tab" id="headingTwo">
                        <h5 class="mb-0">
                          <a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                           <b>Classe des CE1</b>
                          </a>
                        </h5>
                      </div>
                      <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="card-body">
                        <table class="table table-striped table-bordered">
                          <!--Table head-->
                            <thead>
                              <tr>
                                <th>Prenom</th>
                                <th>Classe</th>
                                <th> Rôle </th>
                                <th>Modifier/Supprimer</th>
                              </tr>
                            </thead>
                            <!--Table head-->

                            <!--Table body-->
                          <tbody>
                            <?php 
                              while ($donnees = $listeuserCE1->fetch())
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
                                  <tr class="table-info">
                                    <td>'.$donnees['identifiant'].'</td>
                                    <td>'.$donnees['classe'].'</td>
                                    <td>'.$role.'</td>

                                    <div class="row justify-content-md-center align-items-center">
                                      <td><!-- Button du pop up suppression user + boutton modification user -->
                                        <button type="button" class="btn btn-sm btn-indigo col-4" data-toggle="modal" data-target="#modalSubscriptionForm'.$donnees['identifiant'].'">
                                          Modifier
                                        </button>
                                        <button type="button" class="btn btn-sm btn-danger col-4" data-toggle="modal" data-target="#SupprimerUser">
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
                                                  <div class=" mb-5">
                                                    <i class="fas fa-user prefix grey-text"></i>
                                                    <input type="text" name="username_edit_form" id="form3" placeholder="'.$donnees['identifiant'].'" class="form-control validate">
                                                    <label>Identifiant</label>
                                                  </div>
                  
                                                  <div>
                                                    <input type=hidden id="ancienid" name="ancienid" value="'.$donnees['identifiant'].'">
                                                  </div>
                  
                                                  <div class=" mb-4">
                                                    <i class="fas fa-lock prefix grey-text"></i>
                                                    <input type="password" placeholder="mot de passe" name="pass_user_edit_form" id="form2" class="form-control validate">
                                                    <label>Mot de passe</label>
                                                  </div>
                  
                                                  <div class=" mb-4">
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
                                      </td>
                                    </div>
                                  </tr>
                                ';
                              }
                            ?>

                          </tbody>
                          <!--Table body-->
                          </table>
                          <!--Table-->   
                        </div>
                      </div>
                    </div>


                    <div class="card">
                      <div class="card-header bg-primary text-white" role="tab" id="headingOne">
                        <h5 class="mb-0">
                          <a data-toggle="collapse" href="#collapse3" aria-expanded="true" aria-controls="collapse3">
                              <b>Classe des CE2</b>
                          </a>
                        </h5>
                      </div>
                      <div id="collapse3" class="collapse show" role="tabpanel" aria-labelledby="heading3">
                        <div class="card-body">
                          contenu 
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <a class="btn btn-outline-white" href="../controller/maincontroller.php?edituser=1"  data-toggle="modal" data-target="#voirclasse">Voir les classes</a>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!--Main Navigation-->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>