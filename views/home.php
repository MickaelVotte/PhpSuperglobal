
<?php session_start()?>;
<!-- On charge les données de la page data.php -->
<?php require_once('../Controllers/home-controller.php'); ?>





<!DOCTYPE html>
<html lang="fr">
  
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="../Public/css/style.css">
    <title>Accueil</title>
  </head>
  
  <body class="d-flex flex-column min-vh-100">
    <?php include('../views/navbar.php'); ?>
    
  
<!-- affichage card -->

 <?php if($display == 'card') { ?>


  <div class="row justify-content-evenly m-0 p-2">
    <?php foreach ($array as $key => $value) {
      
      
      // noius allons trier en fonction du genre
      
      if($search != 'lesDeux' && $value["recherche"] != $search ){
        continue;
      }
      
      ?>


      <div class="col-lg-3 col-sm-12 p-2">
        <div class="card" style="width: 18rem;">
          <img src="/Public/img/<?= $value['image'] ?>.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text text-center">Pseudo: <?= $value['pseudo'] ?></p>
            <p class="card-text">Recherche: <?= $value['recherche'] ?></p>
          </div>
        </div>

      </div>
    <?php } ?>
  </div>

 <?php } else { ?>
<!-- affichage liste -->

  <?php foreach ($array as $key => $value) {
    
    
      
    if($search != 'lesDeux' && $value["recherche"] != $search ){
      continue;
    }
    
    
    ?>


    <table class="table table-striped text-center">
      <thead>
        <tr>
          <th scope="col">Numéro</th>
          <th scope="col">Photo</th>
          <th scope="col">Pseudo</th>
          <th scope="col">Recherche</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td> <img class="photocss" src="/Public/img/<?= $value['image'] ?>.jpg" alt=""></td>
          <td><?= $value['pseudo'] ?></td>
          <td><?= $value['recherche'] ?></td>

        </tr>

      </tbody>
    </table>

  <?php } ?>

  <?php } ?>
</body>



<?php include('../views/footer.php') ?>


</html>