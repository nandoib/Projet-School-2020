<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
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

  <style>
  html,
  body,
  header,
  .view {
    height: 100%;
  }

  .rgba-gradient {
    background: radial-gradient(circle, rgba(63,94,251,0.7903536414565826) 0%, rgba(252,70,107,0.6446953781512605) 100%);
  }

  .logoprincipal
  {
      margin-top:200px;
  }

  .boutton-rond 
    {
      border-radius: 25px;
      font-size:25px;
    }

    .boutton-cercle 
    {
        width: 70px;
        height: 70px;
        padding: 10px 16px;
        border-radius: 35px;
        font-size: 80px;
    }
  </style>
  </head>
<body>
<!-- Main navigation -->
<header>
    <!-- Full Page Intro -->
    <div id="intro-section" class="view">
        <video class="video-intro" poster="https://mdbootstrap.com/img/Photos/Others/background.jpg" playsinline
          autoplay muted loop>
          <source src="../images/videofond.mp4" type="video/mp4">
        </video>
        <!-- Mask & flexbox options-->
        <div class="mask rgba-gradient">
          <!-- Content -->
            <div class="container">
                <div class="row">
                    <div class="logoprincipal col-md-12 mb-4 white-text text-center">
                        <h3 class="display-1 mt-5 font-weight-bold white-text animated fadeInDownBig">Projet School</h3>
                        <hr class="hr-light my-2 w-50">
                        <h4 class="subtext-header mt-2">Projet School V2 crée par Nando Ibba</h4>
                        <button type="button" class="boutton-rond btn btn-outline-white waves-effect mt-5" data-toggle="modal" data-target="#Notes">
                            Mes notes
                        </button>

                        <div>  
                              <a class="boutton-cercle text-white mt-5 animated bounce" href="#start" type="button" role="button"><i class="fas fa-arrow-down"></i></a>
                        </div>
                    
                    </div>
                </div>
            </div>        
        </div>
    </div>
</header>

<div class="container-fluid">
    <div class="row">
        <div id="start" class="col-12">
            <h4 class="display-1 font-weight-bold text-center mt-3 mb-5">L'actualité de l'école</h4>
            <hr class=" my-2 w-50">
        </div>

        <!-- Les profs absent -->
        <div class="col-5 ml-5 z-depth-5">    
            <section class="p-md-3 mxmd-5 text-lg-left">
                <h2 class="text-center font-weight-bold mb-4 pb-1">Les profs absents</h2>
                <div class="row">

                    <div class="col-lg-6 col-sm-6 mb-5">
                        <div class="row d-flex align-items-center">
                            <div class="col-5 avatar w-100 white d-flex justify-content-center align-items-center">
                                <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(9).jpg" class="img-fluid rounded-circle z-depth-1"/>
                            </div>
                            <div class="col-7">
                                <h6 class="font-weight-bold pt-2">Alan Turing (Francais)</h6>
                                <p>06/11/2020 au 31/12/2020</p>
                            </div>
                        </div>          
                    </div>
                    <div class="col-lg-6 col-sm-6 mb-5">
                        <div class="row d-flex align-items-center">
                            <div class="col-5 avatar w-100 white d-flex justify-content-center align-items-center">
                                <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(32).jpg" class="img-fluid rounded-circle z-depth-1"/>
                            </div>
                            <div class="col-7">
                                <h6 class="font-weight-bold pt-2">Tom Johnson</h6>
                                <p>
                                    07/07/2020
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 mb-5">
                        <div class="row d-flex align-items-center">
                            <div class="col-5 avatar w-100 white d-flex justify-content-center align-items-center">
                                <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(3).jpg" class="img-fluid rounded-circle z-depth-1"/>
                            </div>
                            <div class="col-7">
                                <h6 class="font-weight-bold pt-2">Alax Laurie</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 mb-5">
                        <div class="row d-flex align-items-center">
                           <div class="col-5 avatar w-100 white d-flex justify-content-center align-items-center">
                                <img
                                    src="https://mdbootstrap.com/img/Photos/Avatars/img%20(2).jpg"
                                    class="img-fluid rounded-circle z-depth-1"
                                />
                            </div>  
                            <div class="col-7">
                                <h6 class="font-weight-bold pt-2">Nathalie Fry</h6>
                                <p class="text-muted">
                                Office Manager
                                </p>
                            </div>
                        </div>
                    </div>
      
                    <div class="col-lg-6 col-sm-6 mb-5">
                        <div class="row d-flex align-items-center">
                            <div class="col-5 avatar w-100 white d-flex justify-content-center align-items-center">
                                <img
                                    src="https://mdbootstrap.com/img/Photos/Avatars/img%20(19).jpg"
                                    class="img-fluid rounded-circle z-depth-1"
                                />
                            </div>
                            <div class="col-7">
                                <h6 class="font-weight-bold pt-2">Caroline Thompson</h6>
                                <p class="text-muted">
                                    Junior Data Engineer
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6 mb-5">
                        <div class="row d-flex align-items-center">
                            <div class="col-5 avatar w-100 white d-flex justify-content-center align-items-center">
                                <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(11).jpg" class="img-fluid rounded-circle z-depth-1"/>
                            </div>
                            <div class="col-7">
                                <h6 class="font-weight-bold pt-2">Anna Polkovsky</h6>
                                <p class="text-muted">Marketing Specialist</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- /Les profs absents fin -->
        
        <div class="col-5 offset-1 z-depth-5">
            <h2 class="text-center font-weight-bold mb-4 pb-1">Les prochaines rencontres</h2>
            <div class="row">
                <div class="col-md-6 mb-md-0 mb-5">
                    <div class="row">
                        <div class="col-lg-2 col-md-3 col-2">
                            <i class="fas fa-bullhorn blue-text fa-2x"></i>
                        </div>
                        <div class="col-lg-10 col-md-9 col-10 mb-5">
                            <h4 class="font-weight-bold">Marketing</h4>
                            <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                            <a class="btn btn-primary btn-sm">Learn more</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-md-0 mb-5">
                    <div class="row">


    <div class="col-lg-2 col-md-3 col-2">
      <i class="fas fa-cogs pink-text fa-2x"></i>
    </div>
   

    
    <div class="col-lg-10 col-md-9 col-10 mb-5">
      <h4 class="font-weight-bold">Customization</h4>
      <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
      <a class="btn btn-pink btn-sm">Learn more</a>
    </div>
    

  </div>
  

</div>



<div class="col-md-4">

 
  <div class="row">

 
    <div class="col-lg-2 col-md-3 col-2">
      <i class="fas fa-tachometer-alt purple-text fa-2x"></i>
    </div>


   
    <div class="col-lg-10 col-md-9 col-10">
      <h4 class="font-weight-bold">Support</h4>
      <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
      <a class="btn btn-purple btn-sm">Learn more</a>
    </div>


  </div>
 

</div>


</div>

        </div>


    </div>
</div>

<!-- Footer -->
<footer class="page-footer black-text">
 
  <!-- Footer Elements -->
  <div class="container">

    <!-- Grid row-->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-12 py-5">
        <div class="mb-5 flex-center">

          <!-- Facebook -->
          <a class="fb-ic">
            <i class="fab fa-facebook-f fa-lg mr-md-5 mr-3 fa-2x"> </i>
          </a>
          <!-- Twitter -->
          <a class="tw-ic">
            <i class="fab fa-twitter fa-lg mr-md-5 mr-3 fa-2x"> </i>
          </a>
          <!-- Google +-->
          <a class="gplus-ic">
            <i class="fab fa-google-plus-g fa-lg mr-md-5 mr-3 fa-2x"> </i>
          </a>
          <!--Linkedin -->
          <a class="li-ic">
            <i class="fab fa-linkedin-in fa-lgmr-md-5 mr-3 fa-2x"> </i>
          </a>
          <!--Instagram-->
          <a class="ins-ic">
            <i class="fab fa-instagram fa-lg mr-md-5 mr-3 fa-2x"> </i>
          </a>
          <!--Pinterest-->
          <a class="pin-ic">
            <i class="fab fa-pinterest fa-lgfa-2x"> </i>
          </a>
        </div>
      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row-->

</footer>
<!-- Footer -->

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
</body>
</html>



