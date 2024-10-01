<?php
include 'connexion.php';

$id = $_POST['id'];
$nom = $_POST['nom'];
$pays = $_POST['pays'];
$annee = $_POST['annee'];
$longueur = $_POST['longueur'];

$sql = "UPDATE circuit SET nom='$nom', pays='$pays', annee='$annee', longueur='$longueur' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Circuit mis à jour avec succès";
    //retour a la page index.html 
    header('Location: index.php');
} else {
    echo "Erreur de mise à jour: " . $conn->error;
}

$conn->close();
?>
