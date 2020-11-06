<!doctype html>
<html lang="fr">
  <head>
    <title>Projet School</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Feuille CSS -->
    <link rel="stylesheet" href="style1.css" type="text/css" media="screen" />
  </head>
  <body>
  <!doctype html>
<html lang="en">
  <head>
  <title>Accueil admin</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Feuille CSS -->
    <link rel="stylesheet" href="css/style1.css" type="text/css" media="screen" />
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
      background: url("images/fond.jpg")no-repeat center center fixed;
      background-size: 2000px 1000px;
    }
    .test
    {
      margin-top:200px;
    }
  </style>
  <header>
    <!--Mask-->
    <div id="intro" class="view">

      <div class="mask rgba-black-strong">

        <div class="container-fluid d-flex justify-content-center">

          <div class="row d-flex justify-content-center text-center">

            <div class="col-12">

              <!-- Heading -->
              <h2 class="test display-4 font-weight-bold white-text pt-5">Projet School</h2>

              <!-- Divider -->
              <hr class="hr-light">

              <div class="login-form">
                <form action="controller/maincontroller.php" method="post">
                  <h2 class="text-center">Connection</h2>       
                  <div class="form-group">
                      <input type="text" class="form-control" placeholder="Nom d'utilisateur" name="useridentifiant" id="useridentifiant" required="required">
                  </div>
                  <div class="form-group">
                      <input type="password" class="form-control" placeholder="Mot de passe" name="userpass" id="userpass" required="required">
                  </div>
                  <div class="form-group">
                      <button type="submit" class="btn btn-primary btn-block">Se connecter</button>
                  </div>
                  <div class="clearfix">
                      <label class="float-left form-check-label"><input type="checkbox"> Rester connecté</label>
                      <a href="#" class="float-right">Mot de passe oublié ?</a>
                  </div>        
                </form>
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