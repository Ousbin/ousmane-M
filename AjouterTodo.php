<?php
require_once("connection.php");
    $nom = $_POST['nom'];
    $statut = $_POST['statut'];

    $req = mysqli_query($conn,"insert into taches(NOM,STATUT) values('$nom','$statut')");
    //mysqli_query($req) or (die(mysql_error()));
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Bootstrap Table with Add and Delete Row Feature</title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="script.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</head>
<body>
<div class="container-lg">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>Todo <b>Liste</b></h2></div>
                    <div class="col-sm-4">
                        <button type="button" onclick="window.location.href ='AfficherTodo.php';" class="btn btn-info add-new"> Voir Liste Todo</button>
                    </div>
                </div>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Statut</th>
                    </tr>
                </thead>
              
                <tbody>
                    <tr>
                        <td><?php echo($nom)?></td>
                        <td><?php echo($statut)?></td>
                    </tr>
                </tbody>
                
            </table>
        </div>
    </div>
</div>     
</body>
</html>