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
    <title> SUPERCAR VOITURES</title>
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
    <!-- Topbar Start -->
    <?php include_once('hd/header.php') ?>





    <!-- Search Start -->


    <form action="recherche/recherche.php" method="post">

        <div class="container-fluid bg-white pt-3 px-lg-5">
            <div class="row mx-n2">
                <div class="col-xl-2 col-lg-4 col-md-6 px-2">
                    <select class="custom-select px-4 mb-3" style="height: 50px;" name="voiture_marque">
                        <option selected value="">Marque de la voiture</option>

                        <option value="Ford">Ford</option>
                        <option value="Mazda">Mazda</option>
                        <option value="Man">Man</option>
                        <option value="Mercedes-Benz">Mercedes-Benz</option>
                        <option value="Mitsubishi">Mitsubishi</option>
                        <option value="Nissan">Nissan</option>
                        <option value="Peugeot">Peugeot</option>
                        <option value="Renault">Renault</option>
                        <option value="Toyota">Toyota</option>
                        <option value="Volkswagen">Volkswagen</option>
                    </select>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-6 px-2">
                    <div class="" id="" data-target-input="nearest">
                        <input type="text" class="form-control p-4 datetimepicker-input" placeholder="Nom de la voiture"
                            name="voiture_nom">
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-6 px-2">
                    <select class="custom-select px-4 mb-3" style="height: 50px;" name="transmission">
                        <option selected value="">Transmission</option>
                        <option value="Automatique">Automatique</option>
                        <option value="Manuelle">Manuelle</option>
                    </select>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-6 px-2">
                    <select class="custom-select px-4 mb-3" style="height: 50px;" name="carburant">
                        <option selected value="">Carburant</option>
                        <option value="Essence">Essence</option>
                        <option value="Diesel">Diesel</option>
                    </select>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-6 px-2">
                    <select class="custom-select px-4 mb-3" style="height: 50px;" name="type">
                        <option selected value="">Type de la voiture</option>
                        <option value="CUV">CUV</option>
                        <option value="Pickup">Pickup</option>
                        <option value="Fourgon">Fourgon</option>
                    </select>
                </div>


                <div class="col-xl-2 col-lg-4 col-md-6 px-2">
                    <button type="submit" class="btn btn-primary btn-block mb-3" style="height: 50px;"
                        value="Rechercher">Rechercher</button>
                </div>
            </div>
        </div>
    </form>

    <!-- Search End -->

    <!-- Page Header Start -->
    <div class="container-fluid page-header">
        <h1 class="display-3 text-uppercase text-white mb-3">Liste</h1>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a class="text-white">Pickup</a></h6>
            <h6 class="text-body m-0 px-3">/</h6>
            <h6 class="text-uppercase text-body m-0"><a class="text-white">Fourgon</a></h6>
            <h6 class="text-body m-0 px-3">/</h6>
            <h6 class="text-uppercase text-body m-0"><a class="text-white">CUV</a></h6>
        </div>
    </div>
    <!-- Page Header Start -->

    <!-- Categorie 4x4-->
    <!-- Rent A Car Start -->

    <div class="container-fluid py-5" id="pickup">
        <div class="container pt-5 pb-3">

            <?php
            include('bdd/connexion_bdd.php');
            $sql_categorie = "SELECT * FROM voiture_categorie";
            $result_categorie = $conn->query($sql_categorie);

            echo '<div class="container">';
            if ($result_categorie->num_rows > 0) {
                while ($row_categorie = mysqli_fetch_assoc($result_categorie)) {
                    echo '<h1 class="display-4 text-uppercase text-center mb-5">' . $row_categorie['nom_categorie'] . '</h1>';
                    echo '<div class="row">';
                    $sql_voiture = "SELECT v.*, i.* 
                    FROM voiture v 
                    INNER JOIN image_voiture i ON v.id_voiture = i.id_voiture 
                    INNER JOIN voiture_categorie vc ON v.voiture_type = vc.nom_categorie 
                    WHERE vc.nom_categorie = '" . $row_categorie['nom_categorie'] . "' AND (i.sre LIKE '%(1)%' OR i.sre NOT LIKE '%(1)%')
                    GROUP BY v.id_voiture";

                    $result_voiture = $conn->query($sql_voiture);
                    if ($result_voiture->num_rows > 0) {
                        while ($row_voiture = mysqli_fetch_assoc($result_voiture)) {
                            echo '<div class="col-lg-4 col-md-6 mb-2">';
                            echo '    <div class="rent-item mb-4">';
                            echo '      <form action="detail/detail_voiture.php" method="post">';
                            echo '       <img class="img-fluid mb-4" src="' . $row_voiture['sre'] . '" alt="">';
                            echo '       <h4 class="text-uppercase mb-4">' . $row_voiture['voiture_marque'] . ' &nbsp' . $row_voiture['voiture_name'] . '</h4>';
                            echo '       <div class="d-flex justify-content-center mb-4">';
                            echo '            <div class="px-2">';
                            echo '                <i class="fa fa-car text-primary mr-1"></i>';
                            echo '                <span style="color:#898a94">' . $row_voiture['voiture_annee'] . '</span>';
                            echo '            </div>';
                            echo '           <div class="px-2 border-left border-right">';
                            echo '                <i class="fa fa-cogs text-primary mr-1"></i>';
                            echo '                <span style="color:#898a94">' . $row_voiture['voiture_transmission'] . '</span>';
                            echo '           </div>';
                            echo '           <div class="px-2">';
                            echo '               <i class="fa fa-road text-primary mr-1"></i>';
                            echo '               <span style="color:#898a94">' . $row_voiture['voiture_puissance'] . '</span>';
                            echo '           </div>';
                            echo '       </div>';
                            echo '      <input type="submit" class="btn btn-primary px-3" value="Voir plus de détail">';
                            echo '      <input type="hidden" value="' . $row_voiture['id_voiture'] . '" name="id_voiture">';
                            echo '      </form>';
                            echo '    </div>';
                            echo '</div>';
                        }
                    } else {
                        echo '<h1 class="display-4 text-uppercase text-center mb-5">Aucun résultat</h1>';
                    }
                    echo '</div>';
                }
            } else {
                echo '<h1 class="display-4 text-uppercase text-center mb-5">Aucun résultat</h1>';
            }
            echo '</div>';
            mysqli_close($conn);

            ?>
        </div>
    </div>

    <!-- Rent A Car End -->


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