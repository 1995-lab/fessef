<!DOCTYPE html>
<html>
    <head>
             <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta charset="UTF-8">
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
                integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
                integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
            <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;display=swap" rel="stylesheet">
            <link rel="icon" href="{{ url('asset/img/favicon-32x32.png') }}">
            <link href="../style.css" rel="stylesheet" type="text/css">
             <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
            
            <!-- cdn pour les scripts qui permet a bootstrap de fonctionner bien -->
            
            <script src="https://code.jquery.com/jquery-3.5.1.js" type="text/javascript"></script>
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
                integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
                crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
                integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
                crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
                integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
                crossorigin="anonymous"></script>
            <!--Script FontAwesome free-->
            <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
            
            <title>Bienvenue a FESSEF</title>
            <style>
                body {
                    background-color: lightgrey;
                }
            </style>
            </head>
            
            <body>
               <!--  <nav class="navbar navbar-expand-lg navbar-dark " style="background-color: #3563a9;">
                   <a class="navbar- " href="index.html">
                        <img src="{{url('asset/img/logo fessef.jpg')}}"  width="100" height="100" class="d-inline-block align-top" alt=""
                            style="border-radius: 50%;">
                        </b>
                    </a> -->
                    <!-- <a class="navbar-brand" href="#">Navbar</a> -->
                  <!--   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav ml-auto" style="margin-right: 75px; justify-content: end;">
                            <li class="nav-item">
                                <a class="nav-link text-white" href="index.html">
                                    <i class="fas fa-plus"></i>
                                    Actualite
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="../chat/chatHome.html">
                                    <i class="fas fa-envelope"></i>
                                    Messages <span class="badge badge-light">4</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="../etpse/home.html">
                                    <i class="far fa-eye"></i>
                                    Annonce
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="../xamxam/xamxam.html">
                                    <i class="fas fa-school"></i>
                                    Xamxam
                                </a>
                            </li>
                            <li class="nav-item dropdown" style="margin-right: 80px;">
                                <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="../association/pages.html">Page</a>
                                    <a class="dropdown-item" href="{% url 'change_password' %}">Editer mots de passe</a>
            
                                    <div class="dropdown-divider"></div>
            
                                    <form action=" {% url 'logout' %}" method="POST"
                                        class="dropdown-item text-black-50 text-center">
            
                                        <input type="submit" value="Deconnexion" class="btn btn-sm btn-danger">
                                    </form>
            
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav> -->
        <!-- </div> -->

<!-- Debut Carousel images -->
<div id="carouselExampleCaptions " class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{url('asset/img/pexels-christina-morillo-1181421.jpg')}}" class="d-block w-100" alt="">
        <div class="carousel-caption ">
          <h5>Lorem ipsum <span>fessef</span> </h5>
          <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{url('asset/img/pexels-christina-morillo-1181421.jpg')}}" class="d-block w-100" alt="">
        <div class="carousel-caption ">
          <h5>Lorem ipsum <span>fessef</span></h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{url('asset/img/pexels-christina-morillo-1181421.jpg')}}" class="d-block w-100" alt="">
        <div class="carousel-caption ">
          <h5>Lorem ipsum <span>fessef</span></h5>
          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
<!-- Fin Carousel images -->


<!-- Section feature -->
<section id="features" class="mt-4" id="home">
    <div class="container">
         <!-- row-->
        <div class="row text-center">

            <div class="col-md-12">
                <h2 class="font-70" style="text-transform: uppercase;">
                    fonctionnalites
                </h2>
                <p>Check out what you can do with this app theme!</p>
            </div>

        </div>
        <!-- end row-->
        <br> <br>

        <!-- row-->
        <div class="row">

            <div class="col-md-5 my-auto order-2">
                    <div class="device-container">
                        <div class="iphone-mockup white">
                            <div class="device">
                            <div class="screen">
                                <!-- Demo image for screen mockup, you can put an image here, some HTML, an animation, video, or anything else! -->
                                 <img src="{{url('asset/img/th.jpg')}}" class="img-fluid ml-4" alt="" height="300" width="300">
                            </div>
                            <div class="button">
                                <!-- You can hook the "home button" to some JavaScript events or just remove it -->
                            </div>
                            </div>
                        </div>
                    </div>
            </div>

            <div class="col-md-7 order-1">

                <!-- 1st row -->
                <div class="row text-center">

                    <div class="col-md-6 mt-2">
                        <div class="feature-item mt-4">

                            <i class="fa fa-book fa-5x icon-color " aria-hidden="true" style="color:  #3563A9;"></i>
                            <h3>Xamleul</h3>
                            <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit, Non assume.</p>
                        </div>
                    </div>

                    <div class="col-md-6 mt-2">
                            <div class="feature-item mt-4">

                                <i class="fa fa-share fa-5x icon-color" aria-hidden="true" style="color:  #3563A9;"></i>
                                <h3>Partage</h3>
                                <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit, Non assume.</p>
                            </div>
                     </div>

                </div>

                <div style="margin-top: 100px;"></div>

                <!-- 2nd row -->
                 <div class="row text-center">

                    <div class="col-md-6 mt-2">
                        <div class="feature-item  mt-4">

                            <i class="fa fa-umbrella fa-5x icon-color" aria-hidden="true" style="color:  #3563A9;"></i>
                            <h3>Flexiblite </h3>
                            <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit, Non assume.</p>
                        </div>
                    </div>

                    <div class="col-md-6 mt-2">
                        <div class="feature-item mt-4">

                            <i class="fa fa-desktop fa-5x icon-color" aria-hidden="true" style="color:  #3563A9;"></i>
                            <h3>Gratuit</h3>
                            <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit, Non assume.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- end row-->

    </div>
</section>
<!-- fin du section feature -->


<div class="container" id="utilisateurs">
    <div class="row ">
        <!-- debut du 1 er div -->
        <div class="col-md-6 text-center ">
            <h3 class="" style="margin-top: 20%;">Etudiant</h3>
            <p class="text-justify">
                ipsum dolor sit amet consectetur adipisicing elit. Ipsam expedita nostrum minima,
                perferendis obcaecati, optio explicabo quaerat delectus maxime
                officiis omnis dicta adipisci voluptas totam alias quisquam esse quae aspernatur.
            </p>
             <button class="btn btn-outline-primary"><a href="{{route('registerstudent')}}" style="text-decoration: none;">inscription</a></button>   
        </div>

        <img class="col-md-6 d-none d-sm-block" src="{{url('asset/img/fessef1.jpg')}}" class="img-fluid" alt=""
        style="height: 400px;object-fit:cover; width: 100%; padding : 0px; margin:0px">
        <!-- fin du 1 er div -->
        <!-- debut du 2 div -->
        <img class="col-md-6 d-none d-sm-block" src="{{url('asset/img/fessef3.jpg')}}" class="img-fluid" alt=""
        style="height: 400px;object-fit:cover;width: 100%; padding : 0px; margin:0px">
         <div class="col-md-6 text-center ">
            <h3 class="" style="margin-top: 20%;">Entreprise</h3>
            <p class="text-justify">
                ipsum dolor sit amet consectetur adipisicing elit. Ipsam expedita nostrum minima,
                perferendis obcaecati, optio explicabo quaerat delectus maxime
                officiis omnis dicta adipisci voluptas totam alias quisquam esse quae aspernatur.
            </p>
               <button class="btn btn-outline-primary"><a href="{{route('registercompany')}}" style="text-decoration: none;">inscription</a></button> 
         </div>  
        <!-- fin du 2 div -->
        <!-- debut du 3 div -->
        <div class="col-md-6 text-center ">
            <h3 class="" style="margin-top: 20%;">Association</h3>
           <p class="text-justify">
               ipsum dolor sit amet consectetur adipisicing elit. Ipsam expedita nostrum minima,
               perferendis obcaecati, optio explicabo quaerat delectus maxime
               officiis omnis dicta adipisci voluptas totam alias quisquam esse quae aspernatur.
           </p>
           <button class="btn btn-outline-primary"><a href="{{route('registerassociation')}}" style="text-decoration: none;">inscription</a></button>  
       </div>
       <img class="col-md-6 d-none d-sm-block" src="{{url('asset/img/fessef1.jpg')}}" class="img-fluid" alt=""
       style="height: 400px;object-fit:cover; width: 100%; padding : 0px; margin:0px">
        <!-- fin du 3 div -->

    </div>
</div>
<!-- Fin Section pour les trois divs -->


<!-- Debut du card -->
<div class="container-fluid pt-2 grise" style="background-color: lightgrey;">
    <div class="row ">
        <div class="container my-4">
            <div class="row my-4">
                <div class="col-md-4 my-4">
                    <hr style="border: #3563A9 solid 2px; width: 60px; float:left; ">
                    <h4 class="mt-4" >
                        Lorem ipsum dolor sit, amet consectetur.
                    </h4>
                    <hr style="border: #3563A9 solid 2px; width: 60px; float:right; margin-top:-5px; margin-right:50px;">
                    <p class="mt-4 text-justify" >
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo, animi maiores! Sequi praesentium at fugit.
                        Debitis rem nam sit. Nisi maxime nam ut laboriosam quae porro numquam ea sunt possimus?
                    </p>
                </div>
                <div class="col-md-8">
                    <div class="row">

                        <div class="card col-md-5 shadow-sm"  style="margin-left: 30px;
                                            margin-bottom:8px;  border-radius : 8px">
                            <div class="card-body">
                            <h3 class="" style="color: #3563A9;" >
                                <i class="fa fa-share " aria-hidden="true" ></i> Lorem ipsum
                            </h3>
                            <p>
                                This is some text within a card body.
                                This is some text within a card body.
                                This is some text within a card body.
                            </p>
                            </div>
                        </div>

                        <div class="card col-md-5 shadow-sm"style="margin-left: 10px; margin-bottom:8px;
                                                          border-radius : 8px">
                            <div class="card-body">
                            <h3 class="" style="color: #3563A9;">
                                <i class="fa fa-plane " aria-hidden="true"></i> Lorem ipsum
                            </h3>
                            <p>
                                This is some text within a card body.
                                This is some text within a card body.
                                This is some text within a card body.
                            </p>
                            </div>
                        </div>

                        <div class="card col-md-5 shadow-sm" style="margin-left: 10px; margin-bottom:8px;
                                                          border-radius : 8px">
                            <div class="card-body">
                            <h3 class="" style="color: #3563A9;">
                                <i class="fa fa-share " aria-hidden="true"></i> Lorem ipsum
                            </h3>
                            <p>
                                This is some text within a card body.
                                This is some text within a card body.
                                This is some text within a card body.
                            </p>
                            </div>
                        </div>

                        <div class="card col-md-5 shadow-sm" style="margin-left: 10px; margin-bottom:8px;
                                                          border-radius : 8px">
                            <div class="card-body">
                            <h3 class="" style="color: #3563A9;">
                                <i class="fa fa-plane " aria-hidden="true"></i> Lorem ipsum
                            </h3>
                            <p>
                                This is some text within a card body.
                                This is some text within a card body.
                                This is some text within a card body.
                            </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Fin du card -->

<!-- Qui somme nous -->
<div class="container-fluid" id="qsn" style="background-color: #F8F9FA;">
    <div class="row">
        <div class="container" >
            <div class="row" style="margin : 25px">

                <div class="col-md-6 mt-4">
                    <h1 class="font-weight-bolder" style="font-size: 45px;">Qui Sommes-Nous ?</h1>
                    <hr style="border: #3563A9 solid 2px; width: 60px; float:left; margin-top:-5px; margin-right:50px;">
                    <p class="mt-4 text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Modi hic deserunt ullam dignissimos repudiandae! Dolorum pariatur iste voluptates illo nulla,
                        neque fugiat quos! Cumque, molestias odio dolore at a molestiae!
                    </p>
                </div>
                <div class="col-md-6 mt-4" >
                    <div class="row" style="margin-top: 50px;">
                        <img class="col-md-6 d-none d-sm-block img-fluid" src="{{url('asset/img/fessef1.jpg')}}"
                        alt="" style="height: 200px;object-fit:cover; width: 100%; border-radius:5px;">
                        <img class="col-md-6 d-none d-sm-block img-fluid" src="{{url('asset/img/fessef4.jpg')}}"
                        alt="" style="height: 200px; width: 100%; object-fit:cover; border-radius:5px;">
                    </div>
                </div>
                <div class="col-md-6">
                    <img class=" img-fluid " src="{{url('asset/img/pexels-christina-morillo-1181421.jpg')}}"
                    alt="" style="height: 300px;object-fit:cover; width: 90%; border-radius:5px;">
                </div>
                <div class="col-md-6 mt-4">
                    <p class="mt-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                        Optio architecto recusandae impedit vel libero! Perspiciatis ad asperiores esse,
                        quasi a reiciendis animi quod eligendi laudantium at corrupti tempore unde eaque.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- fin du qui somme nous -->

<!-- div pour temoignage -->
<div class="container-fluid  grise " id="temoignages">
    <div class="row ">
        <div class="col-md-12 text-center">
          <h2 class="mt-4" style="font-size: 35px; text-transform: uppercase; font-weight:700;
              letter-spacing: 5px; font-family: poppins; font-style: italic;">
              Temoignages..
          </h2>
        </div>

        <div class="col-md-8 alignement" >

            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="card shadow-sm my-3 heighCard" id="etudiants"
                        style="background-image: url('asset/img/pexels-christina-morillo-1181421.jpg'); border : none;">
                    <div class="overlay ">
                        <h4 class="mt-4">Etudiants</h4>
                        <p>
                            <small>
                                Offrez le meilleur à ceux que vous aimez et partagez des moments
                            fabuleux Avec Vos Amis Etudiants woowww !!!
                            </small>
                        </p>
                        <a href="#" class="button-2">Continuez... </a>
                    </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card shadow-sm my-3 heighCard" id="etudiants"
                        style="background-image: url('asset/img/fessef4.jpg'); border : none;">
                    <div class="overlay ">
                        <h4 class="mt-4">Etudiants</h4>
                        <p>
                            <small>
                                Offrez le meilleur à ceux que vous aimez et partagez des moments
                            fabuleux Avec Vos Amis Etudiants woowww !!!
                            </small>
                        </p>
                        <a href="#" class="button-2">Continuez... </a>
                    </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card shadow-sm my-3 heighCard" id="etudiants"
                        style="background-image: url('asset/img/fessef3.jpg'); border : none;">
                    <div class="overlay ">
                        <h4 class="mt-4">Etudiants</h4>
                        <p>
                            <small>
                                Offrez le meilleur à ceux que vous aimez et partagez des moments
                            fabuleux Avec Vos Amis Etudiants woowww !!!
                            </small>
                        </p>
                        <a href="#" class="button-2">Continuez... </a>
                    </div>
                    </div>
                </div>
                </div>
              </div>
        </div>
    </div>
  </div>
<!-- fin div pour temoignage -->

<!-- formulaires de contact -->
<div class="row my-2" id="conatct" style="background-color: #FFFFFF;">
    <div class="col-md-3"></div>
    <div class="col-md-6  my-2" id="formB">
        <h3 class="text-center my-2 titreContact" style="font-weight:bold;border-bottom: 1px solid blue;">Contactez-nous</h3>
        <form >
            <div class="form-row">
              <div class="form-group col-md-6 ">
                <label for="inputEmail4">Nom</label>
                <input type="text" class="form-control" id="inputEmail4" placeholder="Nom">
              </div>
              <div class="form-group col-md-6 ">
                <label for="inputPassword4">Prenom</label>
                <input type="text" class="form-control" id="inputPassword4" placeholder="Prenom">
              </div>
            </div>
            <div class="form-group ">
              <label for="inputAddress">Email</label>
              <input type="email" class="form-control" id="inputAddress" placeholder="Email">
            </div>

            <div class="form-group ">
                <textarea name="message" class="form-control" id="" cols="30" rows="10" placeholder="Message..."></textarea>

              </div>


            <button type="submit" class="btn btn-primary" style="background-color: #3563a9; color:#fff">Envoyer</button>
          </form>

    </div>
    <div class="col-md-3"></div>
</div>
<!-- fin formulaires de contact -->

<div class="container" >
    <div class="row m-auto">
        <div class="col-md-2"></div>
        <div class="col-md-8 parte">
            <h3 style="text-align:center;font-size:24px;font-weight:bold;">NOS PARTENAIRES </h3>
                <div class="row">
                        <!--First Slide-->
                        <div class="col-md-3">
                            <img class="" src="{{url('asset/img/Logo defarsci.png')}}" style="width:100px; height:100px; padding:10px;">
                        </div>
                        <div class="col-md-3">
                            <img class="" src="{{url('asset/img/volk-white.png')}}"  style="width:100px; height:100px; padding:10px;">
                        </div>
                       <div class="col-md-3">
                            <img class="" src="{{url('asset/img/Logo-bakeli.png')}}" style="width:100px; height:100px; padding:10px;">
                        </div>
                        <div class="col-md-3">
                            <img class="" src="{{url('asset/img/logo fessef.jpg')}}"style="width:100px; height:100px; padding:10px;">
                        </div>
                    </div>
                </div>
                <div class="col-md-2"></div>
              </div>
        </div>
<br><br><br>
<!-- FIN NOS PARTENAIRES -->

<!-- Footer -->
<div class="conatainer-fluid" style="text-align: center;
  padding: 3px;
  background-color:#444444;
  color: white;">
    <div class="row footer">
        <div class="col-md-4">
            <h3>Fessef<span class="rouge">.</span></h3>
            <div class="copyright">Copyright © Tous droits réservés.</div>
        </div>
        <div class="col-md-5 col-sm-8 ">
            <div class="icon" style="justify-content: center;">
                
                    
                        <a style="margin-top: 45px; color: white; font-size: 30px;" class="btn  btn-social mx-2"href="https://web.facebook.com/fessef.fr/?_rdc=1&_rdr" target="_blank">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    
                        <a style="margin-top: 45px; color: white; font-size: 30px;" class="btn  btn-social mx-2"href="mailto:fessef.france@gmail.com" target="_blank">
                            <i class="fa fa-envelope"></i>
                        </a>
                    
                        <a style="margin-top: 45px; color: white; font-size: 30px;"class="btn  btn-social mx-2"href="https://twitter.com/fesseffrance?lang=fr" target="_blank">
                            <i class="fab fa-twitter"></i>
                        </a>
                    
                    
               
            </div>
        </div>

        <div class="col-md-3" id="dnon">
            <div class="blog_text">
                <h6 class="">Contactez nous sur :</h6>
                <p class="">
                    33-854-03-33 <br>
                    77-569-23-85 <br>
                    communication@fessef.com <br>
                    fessef.france@gmail.com
                </p>
            </div>
        </div>
    </div>
</div>
<!-- footer -->


</script>
<script src="{% static 'JS/postfeeds.js' %}"></script>
<script src="{% static 'JS/descAffi.js' %}"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js" type="text/javascript"></script>


<script src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
<script src="jquery.min.js"></script>
<script src=" {% static 'JS/emojionearea.min.js' %} "></script>


<!-- <script src="https://cdnjs.com/libraries/Chart.js"></script> -->
<!-- Pour les emojis -->
<script>
    //Pour implementer les emoticones
    $(document).ready(function () {
        $("#textarea").emojioneArea({
            pickerPosition: "bottom"
        });
    })
</script>
<!-- Mes scripts -->

    </body>
</html>
