
<!DOCTYPE html>
<html lang="en">
 <head>
  <title>Bootstrap Example</title>
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
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Rubik&display=swap" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
  <!-- Libraries Stylesheet -->
  <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="../lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
  <!-- Customized Bootstrap Stylesheet -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Template Stylesheet -->
  <link href="css/style1.css" rel="stylesheet">
  <!-- Bootstrap JS bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- jQuery library -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
</head>
<body >
    


<!-- Carousel -->
    <center>
        <?php
            echo " <h1>" Mitsubishi L200 DID 2021 "</h1>"
        ?>
        <br><br>
        <div id="demo" class="carousel slide" data-bs-ride="carousel" style="width: 50%";>

        <!-- Indicators/dots -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="4"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="5"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="6"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="7"></button>
            
        </div>
        
        <!-- The slideshow/carousel -->
        <?php
                echo'<div class="carousel-inner">';
                echo'<div class="carousel-item active">';
                echo'<img src="img/mitsubishi/4x4 1.jpg" alt="Los Angeles" class="d-block" style="width:100%">
                echo'</div>';
                echo'<div class="carousel-item ">';
                echo'<img src="img/mitsubishi/4x4 2.jpg" alt="Chicago" class="d-block" style="width:100%">
                echo'</div>';
                echo'<div class="carousel-item ">';
                echo'<img src="img/mitsubishi/4x4 3.jpg" alt="" class="d-block" style="width:100%">
                echo'</div>';
                echo'<div class="carousel-item">';
                echo'<img src="img/mitsubishi/4x4 4.jpg" alt="d" class="d-block" style="width:100%">
                echo'</div>';
                echo'<div class="carousel-item">';
                echo'<img src="img/mitsubishi/4x4 5.jpg" alt="d" class="d-block" style="width:100%">
                echo' </div>";
                echo'<div class="carousel-item">';
                echo'<img src="img/mitsubishi/4x4 6.jpg" alt="d" class="d-block" style="width:100%">
                echo'</div>';
                echo'<div class="carousel-item">';
                echo'<img src="img/mitsubishi/4x4 7.jpg" alt="d" class="d-block" style="width:100%">
                echo'</div>';
                echo'</div>';
        ?>   

        <!-- Left and right controls/icons -->
    
            <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>

        <div class="container-fluid mt-3">
        <h3><U>Detaille de la voiture:</U></h3>

        <table border="0">
            <td>
                <ul>
                    <?php
                       echo' <li> Date de première mise en circulation: " 25/04/21"</li>";
                       echo' <li>Boite de vitesse: " automatique et séquentielle "</li>";
                       echo' <li>Carburant :" Diesel"</li>";
                       echo' <li>Puissance :"fiscale: 8cv "</li>";
                       echo' <li>Categorie: " Pick up"</li>";
                       echo' <li>Nombre de porte: " 4"</li>";
                    ?>
                </ul>
            </td>
     
        </table>
    </center>


</body>

</html>
