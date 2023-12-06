<?php
require('fpdf185/fpdf.php');

// Connexion à la base de données
$conn = mysqli_connect("localhost", "root", "", "supercar");

// Récupération de l'id de la voiture à partir du formulaire
$id_voiture = $_POST['id_voiture'];

// Requête pour récupérer les détails de la voiture
$sql_voiture = "SELECT * FROM voiture WHERE id_voiture='$id_voiture'";
$result_voiture = $conn->query($sql_voiture);

// Requête pour récupérer l'image de la voiture
$sql_image = "SELECT * FROM image_voiture WHERE id_voiture='$id_voiture' AND sre LIKE '%(1)%'";
$result_image = $conn->query($sql_image);

// Création du PDF
$pdf = new FPDF();
$pdf->AddPage();

// En-tête
$pdf->SetFont('Arial', 'B', 16);
$pdf->Image('../img/about.png', $pdf->GetPageWidth() - 50, 10, 40, 0); // ajout de l'image
$pdf->SetXY(0, 25); // positionnement du titre au centre
$pdf->Cell(210, 10, 'Fiche technique de la voiture', 0, 0, 'C');

// Détails de la voiture
$pdf->SetFont('Arial', '', 12);
while ($row_voiture = mysqli_fetch_assoc($result_voiture)) {
    $pdf->Ln();
    $pdf->Cell(0, 10, 'Marque : ' . $row_voiture['voiture_marque']);
    $pdf->Ln();
    $pdf->Cell(0, 10, 'Nom : ' . $row_voiture['voiture_name']);
    $pdf->Ln();
    $pdf->Cell(0, 10, utf8_decode('Date de première mise en circulation :') . utf8_decode($row_voiture['voiture_annee']));
    $pdf->Ln();
    $pdf->Cell(0, 10, 'Boite de vitesse : ' . $row_voiture['voiture_transmission']);
    $pdf->Ln();
    $pdf->Cell(0, 10, 'Carburant : ' . $row_voiture['voiture_carburant']);
    $pdf->Ln();
    $pdf->Cell(0, 10, 'Puissance fiscale : ' . $row_voiture['voiture_puissance']);
    $pdf->Ln();
    $pdf->Cell(0, 10, 'Categorie : ' . $row_voiture['voiture_type'] . utf8_decode('Euro'));
    $pdf->Ln();
    $pdf->Cell(0, 10, 'Prix : ' . $row_voiture['voiture_prix']);
    $pdf->Ln();
    $pdf->Cell(0, 10, 'Pays constructeur : ' . utf8_decode($row_voiture['provenance']));

    // Image de la voiture
    if ($result_image->num_rows > 0) {
        while ($row_image = mysqli_fetch_assoc($result_image)) {
            $image_path = '../' . $row_image['sre'];
            if (file_exists($image_path)) {
                $pdf->Image($image_path, 10, $pdf->GetY() + 10, 80, 0);
                $pdf->Ln();
            }
        }
    }

}
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Cell(0, 10, utf8_decode('Supercar© , Avenue des Capucines, Quatres Bornes, Mauritius, '), 0, 0, 'C');
$pdf->Ln();
$pdf->Cell(0, 10, 'supercarmaj@gmail.com , +012 345 67890 ', 0, 0, 'C');


// Téléchargement du PDF
$pdf->Output('Fiche_technique.pdf', 'D');
?>