<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Demande d'essai</title>
</head>

<body>
  <?php
  include('../bdd/connexion_bdd.php');
  $sql = "SELECT * from dmdessai ";

  $sql_voiture = mysqli_query($conn, $sql);
  echo "<h1>demande d'essai des clients</h1>";
  echo "<table border='1'>";
  echo "<tr>";
  echo "<td>id</td>";
  echo "<td>civilite </td>";
  echo "<td>nom </td>";
  echo "<td>prenom </td>";
  echo "<td>date </td>";
  echo "<td>heure </td>";
  echo "<td>marque </td>";
  echo "<td>nom du voiture </td>";
  echo "<td>type </td>";
  echo "<td>transmission </td>";
  echo "<td>statut </td>";
  echo "</tr>";
  if ($sql_voiture->num_rows > 0) {
    # code...
    while ($row_voiture = mysqli_fetch_assoc($sql_voiture)) {
      # code...
      echo "  <tr>";
      echo "  <td>" . $row_voiture['id_dmdessai'] . "</td>";
      echo "   <td>" . $row_voiture['civilite'] . "</td>";
      echo "   <td>" . $row_voiture['nom'] . "</td>";
      echo "    <td>" . $row_voiture['prenom'] . "</td>";
      echo "   <td>" . $row_voiture['dates'] . "</td>";
      echo "    <td>" . $row_voiture['heure'] . "</td>";
      echo "    <td>" . $row_voiture['marque'] . "</td>";
      echo "    <td>" . $row_voiture['v_nom'] . "</td>";
      echo "    <td>" . $row_voiture['type'] . "</td>";
      echo "    <td>" . $row_voiture['transmission'] . "</td>";
      echo "    <td>" . $row_voiture['statut'] . "</td>";
      echo "  </tr>";
    }
  }

  echo "  </table>";
  ?>





</body>

</html>