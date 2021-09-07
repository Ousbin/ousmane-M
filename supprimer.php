<?php
    require_once("connection.php");
    $id=$_GET['id'];
    $req = mysqli_query($conn, "delete  from taches where (id=$id)");
    header("location:AfficherTodo.php");
    //require_once("AfficherEtudiant.php");
?>