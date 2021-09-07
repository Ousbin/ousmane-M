<?php
require_once("connection.php");
    $id = $_POST['id'];
    $nom = $_POST['nom'];
    $statut = $_POST['statut'];

    $req = mysqli_query($conn, "update taches set NOM='$nom',STATUT='$statut' where (id=$id)");
    header("location:AfficherTodo.php");
?>

