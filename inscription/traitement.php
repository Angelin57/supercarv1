<?php
session_start();
// Connexion à la base de données
include('../bdd/connexion_bdd.php');
// Vérifier la connexion
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Vérifier si le formulaire de connexion a été soumis
if (isset($_POST["login"])) {

  // Récupérer les données du formulaire
  $mail = $_POST["mail"];
  $password = $_POST["password"];



  // Vérifier si l'utilisateur existe dans la base de données
  $sql = "SELECT * FROM inscription WHERE mail='$mail' AND password='$password' ";
  $result = $conn->query($sql);

  if ($row = mysqli_fetch_assoc($result)) {
    // L'utilisateur est connecté avec succès
    $_SESSION['prenom'] = $row['prenom'];
    $_SESSION['user'] = $row['idco'];
    echo $_SESSION['prenom'];
    header("Location: ../index.php");
    exit;
  } else {
    // Afficher un message d'erreur si l'adressen mail et le mdp de connexion sont incorrectes
    echo "<script>alert('Adresse e-mail ou mot de passe incorrect.')</script>";
    echo "<meta http-equiv='refresh' content='0;url=../connexion.php'>";
    exit;
  }
}

// Vérifier si le formulaire d'inscription a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["signup"])) {
  //INSCRIPTION//
  // Récupérer les données du formulaire
  $nom = $_POST["nom"];
  $prenom = $_POST["prenom"];
  $mail = $_POST["mail"];
  $telephone = $_POST["telephone"];
  $adresse = $_POST["adresse"];
  $naissance = $_POST["naissance"];
  $sexe = $_POST["sexe"];
  $password = $_POST["password"];
  $password2 = $_POST["password2"];

  // Vérifier si les mots de passe correspondent
  if ($password !== $password2) {
    echo "<script>alert('Les deux mots de passe ne correspondent pas.')</script>";
    echo "<meta http-equiv='refresh' content='0;url=../connexion.php'>";
    exit;
  }

  // Vérifier si l'utilisateur existe déjà dans la base de données
  $sql = "SELECT * FROM inscription WHERE mail='$mail'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // Afficher un message d'erreur si le nom d'utilisateur est déjà pris
    echo "<script>alert('Le nom d'utilisateur est déjà pris.')</script>";
    echo "<meta http-equiv='refresh' content='0;url=../connexion.php'>";
    exit;
  } else {
    // Ajouter l'utilisateur à la base de données
    $sql = "INSERT INTO inscription (nom, prenom, mail, telephone, adresse, naissance, sexe, password ) 
    VALUES ('$nom', '$prenom', '$mail', '$telephone', '$adresse','$naissance','$sexe','$password')";

    if ($conn->query($sql) === TRUE) {
      // Rediriger l'utilisateur vers la page de connexion
      header("Location: ../after/inscription.php");
      exit;
    } else {
      echo "Erreur: " . $sql . "<br>" . $conn->error;
    }
  }
}

$conn->close();

?>