<?php
session_start();
if (isset($_POST['logout'])) {
    // Détruire la session lorsqu'un utilisateur se déconnecte
    session_destroy();
    header('Location:connexion.php');

}

if (!isset($_SESSION['prenom'])) {
    // L'utilisateur n'est pas connecté, redirigez-le vers la page de dmdessai.
    header('Location: traitement/dmdessai.php');
    exit();
}

include('bdd/connexion_bdd.php');


// Vérifier si l'utilisateur est connecté
if (isset($_SESSION["user"])) {
    // Récupérer les informations de l'utilisateur depuis la base de données
    $user = $_SESSION["user"];
    $sql = "SELECT * FROM inscription WHERE idco = $user";
    $result = mysqli_query($mysqli, $sql);
    $user = mysqli_fetch_assoc($result);
    // Stocker le nom et le prénom de l'utilisateur dans des variables
    $nomUtilisateur = $user["nom"];
    $prenomUtilisateur = $user["prenom"];
    $id_client = $user["idco"];

}

if (isset($_POST['id_voiture'])) {
    $id_voiture = $_POST['id_voiture'];
    // Faites ce que vous devez faire avec l'ID de la voiture ici
}



$id = $_POST['id_voiture'];
$marque = $_POST['voiture_marque'];
$v_nom = $_POST['voiture_nom'];
$type = $_POST['voiture_type'];
$transmission = $_POST['voiture_transmission'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SUPERCAR DEMANDE D'ESSAI</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">


    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Rubik&display=swap"
        rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!--  Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <?php include_once('hd/header.php') ?>



    <!-- Search Start -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header">
        <h1 class="display-3 text-uppercase text-white mb-3">Demande d'essai</h1>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a class="text-white" href="index.php">Acceuil</a></h6>
            <h6 class="text-body m-0 px-3">/</h6>
            <h6 class="text-uppercase text-body m-0"><a class="text-white" href="service.php">Services</a></h6>
        </div>
    </div>
    <!-- Page Header Start -->

    <!--formulaire-->
    <p>
        <center style="color:#898a94">Bienvenue sur notre formulaire de demande d'essai, pour être recontacté afin de
            convenir d'un RDV pour l'essai du véhicule de votre choix,<br> merci de remplir tous les champs du
            formulaire ci-dessous : </center>
    </p>
    <center>
        <br>

        <div class="col-md-7 col-lg-6 mb-2">

            <form action="traitement/traitement1.php" method="post">

                <div class="bg-secondary p-5">

                    <h3 class="text-primary text-center mb-4">
                        FORMULAIRE DE DEMANDE D'ESSAIS
                    </h3>

                    <div class="form-group">
                        <?php

                        echo '<p style="color:#898a94">Marque de la voiture</p>';
                        echo '<div class="form-group">';
                        echo '<input type="text" class="form-control p-4" value=' . $marque . ' name="marque">';
                        echo '</div>';

                        echo '<p style="color:#898a94">Nom de la voiture</p>';
                        echo '<div class="form-group">';
                        echo '<input type="text" class="form-control p-4" value=' . $v_nom . ' required name="v_nom">';
                        echo '</div>';

                        echo '<p style="color:#898a94">Type de la voiture</p>';
                        echo '<div class="form-group">';
                        echo '<input type="text" class="form-control p-4" value=' . $type . ' required name="type">';
                        echo '</div>';

                        echo '<p style="color:#898a94">Transmission</p>';
                        echo '<div class="form-group">';
                        echo '<input type="text" class="form-control p-4" value=' . $transmission . ' required name="transmission">';
                        echo '</div>';

                        ?>

                    </div>
                    <div class="form-group">
                        <p style="color:#898a94">Saisissez vos coordonnées</p>
                        <select class="custom-select px-4" style="height: 50px;" name="civilite">

                            <option value="M.">M.</option>

                            <option value="Mme">Mme</option>

                            <option value="Mlle">Mlle</option>

                        </select>

                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control p-4" placeholder="Nom*" required name="nom"
                            value="<?= $nomUtilisateur ?>">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control p-4" placeholder="Prénom*" required name="prenom"
                            value="<?= $prenomUtilisateur ?>">
                    </div>


                    <p style="color:#898a94">Veuillez indiquez la date et l'heure de votre demande d'essais</p>
                    <div class="form-group">
                        <div class="date" id="date1" data-target-input="nearest">
                            <input type="date" class="form-control p-4 datetimepicker-input" placeholder="Date*"
                                data-toggle="datetimepicker" name="dates">
                        </div>
                    </div>
                    <select placeholder="Heure*" class="custom-select px-4" style="height: 50px;" name="heure">
                        <option value="9h-10h">9h-10h</option>
                        <option value="11h-12h">11h-12h</option>
                        <option value="13h-14h">13h-14h</option>
                        <option value="15h-16h">15h-16h</option>
                    </select>
                    <input type="hidden" name="id_voiture" value="<?php echo $id_voiture ?>">
                    <input type="hidden" name="idco" value="<?php echo $id_client ?>">


                    <div class="form-group mb-0">
                        <button class="btn btn-primary btn-block" type="submit" style="height: 50px;">Valider votre
                            demande</button>
                        <input class="btn btn-primary btn-block" type="reset">
                    </div>

                </div>

            </form>
        </div>
        </div>
    </center>
    <!--formulaire end-->

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

    <?php include_once('hd/footer.php') ?>



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

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

</body>

</html>