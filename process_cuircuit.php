<?php
include 'connexion.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nom = $_POST['nom'];
    $pays = $_POST['pays'];
    $annee = $_POST['annee'];
    $longueur = $_POST['longueur'];


    $sql = "INSERT INTO circuit (nom, pays, annee, longueur) VALUES ('$nom', '$pays', '$annee' , '$longueur')";


    if ($conn->query($sql) === TRUE) {
        echo "Nouveau circuit créé avec succès";
    } else {
        echo "Error: ". $sql. "<br>". $conn->error;
    }
    var_dump($sql);
    $conn->close();
}
?>