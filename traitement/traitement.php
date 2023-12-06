<?php
$nom = $_POST['nom'];
$mail = $_POST['mail'];
$objet = $_POST['objet'];
$message = $_POST['message'];

include('../bdd/connexion_bdd.php');
$sql = " INSERT INTO contact (nom, mail,objet,message)
     values ('$nom', '$mail', '$objet', '$message')";

if (mysqli_query($bdd, $sql)) {
    # code...
    echo " Connection réussi, Merci " . $nom;
    header("location: ../after/contact.php");

} else {
    # code...
    echo " Erreur :" . $sql . "<br>" . mysqli_error($bdd);
}

mysqli_close($bdd);

?>