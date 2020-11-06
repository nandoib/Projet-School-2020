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
      margin-top:20px;
    }
  </style>
  <header>

    <?php
    session_start();
      include '../model/users.php';
      include '../model/notes.php';

      $elevebdd = selectuser($_SESSION['userid'],$_SESSION['userpass']);
      $eleve = $elevebdd->fetch();
      $noteseleve=getnotes($_SESSION['userid']);
    ?>

    <!--Mask-->
    <div id="intro" class="view">
      <div class="mask rgba-black-strong">
        <div class="container-fluid">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-12">
              <!-- Heading -->
              <h2 class="test display-4 font-weight-bold white-text pt-5 wow animated fadeInDown">Bonjour <?= $eleve['identifiant'];?>, éleve de la classe <?= $eleve['classe']?></h2>
              <!-- Divider -->
              <hr class="hr-light">
              <div class="notes text-white">
                <p> Voici vos notes </p>
                <table class="table table-bordered text-white col-6 offset-3">
                  <thead>
                    <tr>
                      <th scope="col">Date</th>
                      <th scope="col">Matiere</th>
                      <th scope="col">Note</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php 
                    while ($donnees = $noteseleve->fetch())
                    {
                      echo
                      '
                        <tr>
                          <td>'.$donnees['datenote'].'</td>
                          <td>'.$donnees['matiere'].'</td>
                          <td>'.$donnees['note'].'</td>
                        </tr>
                      ';
                    }
                  ?>
                  </tbody>
                </table>
                
              </div>
            </div>
          </div>


          <div class="row">
            <div class="card col-2">
          
              <!-- Card content -->
              <div class="card-body">

                <!-- Title -->
                <h4 class="card-title"><a>Card title</a></h4>
                <!-- Text -->
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                  content.</p>
                <!-- Button -->
                <a href="#" class="btn btn-primary">Button</a>
              </div>

            </div>


            <div class="card col-2">
          
              <!-- Card content -->
              <div class="card-body">

                <!-- Title -->
                <h4 class="card-title"><a>Card title</a></h4>
                <!-- Text -->
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                  content.</p>
                <!-- Button -->
                <a href="#" class="btn btn-primary">Button</a>
              </div>

            </div>

            <div class="card col-2 ml-3">
          
              <!-- Card content -->
              <div class="card-body">

                <!-- Title -->
                <h4 class="card-title"><a>Card title</a></h4>
                <!-- Text -->
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                  content.</p>
                <!-- Button -->
                <a href="#" class="btn btn-primary">Button</a>
              </div>

            </div>

            <div class="card col-2 ml-3">
          
              <!-- Card content -->
              <div class="card-body">

                <!-- Title -->
                <h4 class="card-title"><a>Card title</a></h4>
                <!-- Text -->
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                  content.</p>
                <!-- Button -->
                <a href="#" class="btn btn-primary">Button</a>
              </div>

            </div>
            

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
























































