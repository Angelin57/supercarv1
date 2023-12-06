<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SUPERCAR CONNEXION</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
  

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Rubik&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!--  Stylesheet -->
    <link href="css/style.connexion.css" rel="stylesheet">
</head>

<body>
<?php include_once('hd/header.php')?>


 <!-- Page Header Start -->
 <div class="container-fluid page-header">
        <h1 class="display-3 text-uppercase text-white mb-3">Connectez-vous </h1>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a class="text-white" href="index.php"></a></h6>
            <h6 class="text-body m-0 px-3"></h6>
            <h6 class="text-uppercase text-body m-0"><a class="text-white" href="service.php"></a></h6>
        </div>
    </div>
    <!-- Page Header Start -->
<!--body-->

    <div class="section">
            <div class="container">
                <div class="row full-height justify-content-center">
                    <div class="col-12 text-center align-self-center py-5">
                        <div class="section pb-5 pt-5 pt-sm-2 text-center">
                        <h6 class="mb-0 pb-3" style="font-family: Poppins; font-size: 20px; color: #99c3ec; letter-spacing: 1px;"><span>Connexion</span> <span style="margin-left: 20px;">Inscription</span></h6>
                            <input class="checkbox" type="checkbox" id="reg-log" name="reg-log"/>
                            <label for="reg-log"></label>
                            <div class="card-3d-wrap mx-auto">
                                <div class="card-3d-wrapper">
                                    <div class="card-front">
                                        <div class="center-wrap">
                                            <div class="section text-center">
                                                <form action="inscription/traitement.php" method="post"> 
                                                    <h4 class="mb-4 pb-3">CONNEXION</h4>
                                                    <div class="form-group">
                                                        <input type="email" class="form-style" placeholder="Email" name="mail">
                                                        <i class="input-icon uil uil-at"></i>
                                                    </div>	
                                                    <div class="form-group mt-2">
                                                        <input type="password" class="form-style" placeholder="Mot de passe" name="password">
                                                        <i class="input-icon uil uil-lock-alt"></i>
                                                    </div>
                                                    <button href="" class="btn mt-4" name="login" type="submit">Connecter</button>
                                                    <p class="mb-0 mt-4 text-center"><a href="" class="link">Mot de passe oublier</a></p>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-back">
                                        <div class="center-wrap">
                                            <div class="section text-center">
                                                <form action="inscription/traitement.php" method="post"> 
                                                    <h4 class="mb-3 pb-3">INSCRIPTION</h4>
                                                    
                                                        <div class="row">
                                                            <div class="col-sm-6 form-group">
                                                                <input type="text" class="form-style" placeholder="Nom" name="nom">
                                                                <i class="input-icon uil uil-user"></i>
                                                            </div>	
                                                            <div class="col-sm-6 form-group">
                                                                <input type="text" class="form-style" placeholder="Prenom" name="prenom">
                                                                <i class="input-icon uil uil-user"></i>
                                                            </div>	
                                                        </div>
                                                        <div class="form-group mt-2">
                                                            <input type="email" class="form-style" placeholder="Email" name="mail">
                                                            <i class="input-icon uil uil-at"></i>
                                                        </div>	
                                                        <div class="form-group mt-2">
                                                            <input type="tel" class="form-style" placeholder="Telephone" name="telephone">
                                                            <i class="input-icon uil uil-phone"></i>
                                                        </div>
                                                        <div class="form-group mt-2">
                                                            <input type="tel" class="form-style" placeholder="Adresse" name="adresse">
                                                            <i class="input-icon uil uil-map-marker"></i>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="birthdate" >Date de naissance:</label>
                                                            <input type="date" id="birthdate" name="naissance" class="form-control" >
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="gender">Sexe:</label>
                                                            <fieldset>
                                                                <label>
                                                                <input type="radio" name="sexe" value="Homme" checked> Homme
                                                                </label>
                                                                <label>
                                                                <input type="radio" name="sexe" value="Femme"> Femme
                                                                </label>
                                                            </fieldset>
                                                        </div>
                                                        <div class="form-group mt-2">
                                                            <input type="password" class="form-style" placeholder="Mot de passe"  name="password">
                                                            <i class="input-icon uil uil-lock-alt"></i>
                                                        </div>
                                                        <div class="form-group mt-2">
                                                            <input type="password" class="form-style" placeholder="Confirmer votre mot de passe"  name="password2">
                                                            <i class="input-icon uil uil-lock-alt"></i>
                                                        </div>
                                                        <button href="" class="btn mt-4" name="signup" type="submit">S'inscrire</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</form>

    <!-- Vendor Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="owl-carousel vendor-carousel">
                <div class="bg-light p-4">
                    <img src="img/vendor-1.png" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="img/vendor-3.png" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="img/vendor-5.png" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="img/vendor-6.png" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="img/vendor-7.png" alt="">
                </div>
               
            </div>
        </div>
    </div>
    <!-- Vendor End -->

    <?php include_once('hd/footer.php')?>



<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/tempusdominus/js/moment.min.js"></script>
<script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
<script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

<!--  Javascript -->
<script src="js/main.js"></script>


</body>
</html>
