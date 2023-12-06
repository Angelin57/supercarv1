<?php
session_start();

if (isset($_POST['logout'])) {
    // Détruire la session lorsqu'un utilisateur se déconnecte
    session_destroy();
    header('Location:../connexion.php');

}

$id = $_POST['id_voiture'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Detail de la voiture</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Rubik&display=swap"
        rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <!-- Libraries Stylesheet -->
    <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!--  Stylesheet -->
    <link href="css/style1.css" rel="stylesheet">



    <!-- Bootstrap JS bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- jQuery library -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
</head>

<body>



    <!-- Navbar Start -->
    <?php
    include_once("../hd/header1.php");
    ?>
    <!-- Navbar End -->





    <!-- Page Header Start -->
    <div class="container-fluid page-header">

        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a class="text-white" href="../car.php">Pickup</a></h6>
            <h6 class="text-body m-0 px-3">/</h6>
            <h6 class="text-uppercase text-body m-0"><a class="text-white" href="../car.php">Fourgon</a></h6>
            <h6 class="text-body m-0 px-3">/</h6>
            <h6 class="text-uppercase text-body m-0"><a class="text-white" href="../car.php">CUV</a></h6>
        </div>
    </div>
    <!-- Page Header Start -->

    <!-- Carousel -->
    <center>


        <?php
        include('../bdd/connexion_bdd.php');
        $id_voiture = $_POST['id_voiture'];

        if ($result_categorie = mysqli_query($conn, "SELECT id_voiture FROM voiture")) {
            $sql_image = "SELECT * FROM image_voiture WHERE id_voiture='$id'";
            $sql_voiture = "SELECT * FROM voiture WHERE id_voiture='$id'";
            $result_image = $conn->query($sql_image);
            $result_voiture = $conn->query($sql_voiture);
            if ($result_image->num_rows > 0) {
                echo '<div class="kodfun-galeri">';

                while ($row_image = mysqli_fetch_assoc($result_image)) {
                    echo '<div class="kodfun-galeri-item" style="background-image: url(\'../' . $row_image['sre'] . '\');"></div>';
                }
                echo '</div>';
            }

            if ($result_voiture->num_rows > 0) {
                while ($row_voiture = mysqli_fetch_assoc($result_voiture)) {
                    echo '<table border="0">';
                    echo '<br>';
                    echo '<h3><U>Detaile de la voiture:</U></h3>';
                    echo '<td>';
                    echo '<ul>';
                    echo '<form action="../dmdessai.php" method="post">';
                    echo '<li>Marque: ' . $row_voiture['voiture_marque'] . '</li>';
                    echo '<li>Nom: ' . $row_voiture['voiture_name'] . '</li>';
                    echo '<li>Date de première mise en circulation: ' . $row_voiture['voiture_annee'] . '</li>';
                    echo '<li>Boite de vitesse ' . $row_voiture['voiture_transmission'] . '</li>';
                    echo '<li>Carburant: ' . $row_voiture['voiture_carburant'] . '</li>';
                    echo '<li>Puissance fiscale: ' . $row_voiture['voiture_puissance'] . '</li>';
                    echo '<li>Categorie: ' . $row_voiture['voiture_type'] . '</li>';

                    echo '<li>Prix: ' . $row_voiture['voiture_prix'] . '</li>';
                    echo '<li>Pays constructeur: ' . $row_voiture['provenance'] . '</li>';
                    echo '<input type="hidden" name="id_voiture" value="' . $row_voiture['id_voiture'] . '">';
                    echo ' <input type="submit" class="btn btn-primary px-3" value="Essayer cette voiture">';
                    echo '<input type="hidden" name="id_voiture" value="' . $row_voiture['id_voiture'] . '">';
                    echo '<input type="hidden" name="voiture_marque" value="' . $row_voiture['voiture_marque'] . '">';
                    echo '<input type="hidden" name="voiture_nom" value="' . $row_voiture['voiture_name'] . '">';
                    echo '<input type="hidden" name="voiture_type" value="' . $row_voiture['voiture_type'] . '">';
                    echo '<input type="hidden" name="voiture_transmission" value="' . $row_voiture['voiture_transmission'] . '">';
                    echo '</form> <br> ';
                    echo '<form action="pdf.php" method="post">';
                    echo '<input type="hidden" value="' . $row_voiture['id_voiture'] . '" name="id_voiture">';
                    echo '<input type="submit" class="btn btn-primary px-3" value="Télécharger la fiche technique ">';
                    echo '<span class="btn btn-primary px-3"><i class="fas fa-download"></i></span>';
                    echo '</form>';
                    echo '</ul>';
                    echo '</td>';
                    echo '</table>';

                }

            }


        }
        ?>


    </center>


</body>
<a class="btn btn-primary px-3" href="../car.php">Retour</a>

</html>