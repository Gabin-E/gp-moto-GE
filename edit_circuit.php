<?php
include 'connexion.php';

$id = $_GET['id'];
$sql = "SELECT * FROM circuit WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<form action="update_circuit.php" method="post">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    Nom: <input type="text" name="nom" value="<?php echo $row['nom']; ?>"><br>
    Pays: <input type="text" name="pays" value="<?php echo $row['pays']; ?>"><br>
    Année: <input type="text" name="annee" value="<?php echo $row['annee']; ?>"><br>
    Longueur: <input type="text" name="longueur" value="<?php echo $row['longueur']; ?>"><br>
    <input type="submit" value="Mettre à jour">
</form>

<?php
$conn->close();
?>
