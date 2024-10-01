<?php
// Inclure le fichier de connexion
include 'connexion.php';

// Requête SQL pour sélectionner les données
$sql = "SELECT id, nom, pays, annee, longueur FROM circuit";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Afficher les données de chaque ligne
    echo"<table border='1'>
        <tr>
            <th>Id</th>
            <th>Nom</th>
            <th>Pays</th>
            <th>Annee</th>
            <th>Longueur</th>
        </tr>";

    while($row = $result->fetch_assoc()) {
        
        echo "<tr>
            <td>".$row["id"]."</td>
            <td>".$row["nom"]."</td>
            <td>".$row["pays"]."</td>
            <td>".$row["annee"]."</td>
            <td>".$row["longueur"]."</td>
            </tr>";
    }

    echo "</table>";

} else {
    echo "0 résultats";
}

// Fermer la connexion
$conn->close();
?>
