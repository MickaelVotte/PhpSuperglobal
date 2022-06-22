<?php require_once('../Public/data/data.php')  ?>

<?php include('../views/navbar.php')?>



<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../Public/css/style.css">
</head>
<body>

  <div class="row justify-content-evenly m-0 p-2">
  <?php foreach($array as $key => $value){?>
  

 <div class="col-lg-3 col-sm-12 p-2">
  <div class="card" style="width: 18rem;">
  <img src="/Public/img/<?= $value['image']?>.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text text-center">Pseudo: <?=$value['pseudo'] ?></p>
    <p class="card-text">Recherche: <?=$value['recherche'] ?></p>
  </div>
</div>

</div>
<?php } ?>
</div>




<?php foreach($array as $key => $value){ ?>





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
      <td> <img class="photocss" src="/Public/img/<?= $value['image']?>.jpg"alt=""></td>
      <td><?= $value['pseudo'] ?></td>
      <td><?= $value['recherche'] ?></td>
     
    </tr>
    
  </tbody>
</table>

<?php } ?>
</body>
</html>