<?php
session_start();

if (isset($_POST['logout'])) {
    // Détruire la session lorsqu'un utilisateur se déconnecte
    session_destroy();
    header('Location:connexion.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SUPERCAR SERVICE</title>
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

    <!-- Page Header Start -->
    <div class="container-fluid page-header">
        <h1 class="display-3 text-uppercase text-white mb-3">Services</h1>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a class="text-white" href="car.php">Voiture</a></h6>
            <h6 class="text-body m-0 px-3">/</h6>
            <h6 class="text-uppercase text-body m-0"><a class="text-white" href="contact.php">Contact</a></h6>
        </div>
    </div>
    <!-- Page Header Start -->


    <!-- Services Start -->

    <?php

    include('bdd/connexion_bdd.php');
    $sql_service = "SELECT * FROM service ";

    $service = mysqli_query($conn, $sql_service);

    echo '<h1 class="display-4 text-uppercase text-center mb-5">Nos Services</h1>';

    if ($service->num_rows > 0) {
        echo '<div class="container-fluid py-5">';
        echo '  <div class="container pt-5 pb-3">';
        echo '    <div class="row">';
        while ($row_service = mysqli_fetch_assoc($service)) {
            echo '      <div class="col-lg-4 col-md-6 mb-2">';
            echo '        <div class="service-item d-flex flex-column justify-content-center px-4 mb-4">';
            echo '          <div class="d-flex align-items-center justify-content-between mb-3">';
            echo '            <div class="d-flex align-items-center justify-content-center bg-primary ml-n4" style="width: 80px; height: 80px;">';
            echo '              <i class="fa fa-2x fa-taxi text-secondary"></i>';
            echo '            </div>';

            echo '          </div>';
            echo '          <h4 class="text-uppercase mb-3">' . $row_service['titre'] . '</h4>';
            echo '          <p class="m-0" style="color:#898a94">' . $row_service['libelle'] . '</p>';
            echo '        </div>';
            echo '      </div>';
        }
        echo '    </div>';
        echo '  </div>';
        echo '</div>';
    }



    ?>

    <!-- Services End -->


    <!-- Banner Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="bg-banner py-5 px-4 text-center">
                <div class="py-5">
                    <h1 class="display-1 text-uppercase text-primary mb-4">20% de réduction</h1>
                    <h1 class="text-uppercase text-light mb-4">Offre spéciale pour les nouveaux membres</h1>
                    <p class="mb-4">Uniquement du 1er au 31 mai 2023</p>
                    <a class="btn btn-primary mt-2 py-3 px-5" href="traitement/dmdessai_vierge.php">Reserver
                        maintenant</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner End -->


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

    <!--  Javascript -->
    <script src="js/main.js"></script>
</body>

</html>