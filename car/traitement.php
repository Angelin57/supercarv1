<?php
include('../bdd/connexion_bdd.php');
$sql = "SELECT * from voiture inner v join image_voiture  i on v.id_voiture = i.id_voiture GROUP BY v.id_voiture";
$result = $conn->query($sql);

if ($row = mysqli_fetch_assoc($result)) {
  // L'utilisateur est connecté avec succès
  echo '<img src="' . $row['sre'] . '" alt="">';
  exit;
} else {
  // Afficher un message d'erreur si les informations de connexion sont incorrectes
  echo "Nom d'utilisateur ou mot de passe incorrect.";
}

?>