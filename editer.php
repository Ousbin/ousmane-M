<?php
    require_once("connection.php");
    $id=$_GET['id'];
    $req = mysqli_query($conn, "select * from taches where (id=$id)");
    $ET = mysqli_fetch_assoc($req);
    
    //require_once("AfficherEtudiant.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<form action="ModifierTodo.php" method="post" style="width: 500px; padding: 50px ">
        <div class="mb-3">
          <label for="exampleInputEmail1"  class="form-label">Id</label>
          <input type="number" class="form-control" name="id" value="<?php echo($ET['id'])?>" readonly="true">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1"  class="form-label">Nom</label>
          <input type="text" class="form-control" name="nom" value="<?php echo($ET['NOM'])?>">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Statut</label>
          <input type="text" class="form-control" name="statut" value="<?php echo($ET['STATUT'])?>">
        </div>
    
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</body>
</html>