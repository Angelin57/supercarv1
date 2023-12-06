<?php
$reference = $_POST['reference'];
$civilite = $_POST['civilite'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$marque = $_POST['marque'];
$transmission = $_POST['transmission'];
$v_nom = $_POST['v_nom'];
$type = $_POST['type'];
$dates = $_POST['dates'];
$heure = $_POST['heure'];
$id_voiture = $_POST['id_voiture'];
$id_client = $_POST['idco'];

include('../bdd/connexion_bdd.php');
$sql = "INSERT INTO dmdessai (transmission, civilite, nom, prenom, marque, v_nom, type, dates, heure, id_voiture,idco)
    VALUES ('$transmission', '$civilite', '$nom', '$prenom', '$marque', '$v_nom', '$type', '$dates', '$heure', '$id_voiture','$id_client')";




if (mysqli_query($bdd, $sql)) {
    # code...
    header("Location: ../after/dmdessai.php");
} else {
    # code...
    echo "Erreur " . $sql . "<br>" . mysqli_error($bdd);
}

mysqli_close($bdd);

?>