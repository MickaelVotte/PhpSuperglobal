<?php session_start(); ?>
<?php require_once('../Controllers/settings-controller.php') ?>

<?php include('./elements/header.php'); ?>

<?php include('../views/navbar.php'); ?>




<body class="d-flex flex-column min-vh-100">
  <p class="text-center fs-3">Type de Recherche</p>



  <form action="" method="POST">


    <fieldset class="text-center">
      <div>
        <input type="radio" name="choix" value="homme" <?= isset($_COOKIE['mySearch']) ? ($_COOKIE['mySearch'] == 'homme'? 'checked' :'') : ''?>>
        <label for="homme">homme</label>
      </div>

      <div>
        <input type="radio" name="choix" value="femme"<?= isset($_COOKIE['mySearch']) ? ($_COOKIE['mySearch'] == 'femme'? 'checked' :''):'' ?>>
        <label for="femme">femme</label>
      </div>

      <div>
        <input type="radio" name="choix" value="lesdeux"<?= isset($_COOKIE['mySearch']) ? ($_COOKIE['mySearch'] == 'lesdeux'? 'checked' :'') : 'checked' ?>>
        <label for="lesdeux">Les deux</label>
      </div>

    </fieldset>


    <p class="text-center fs-3">Type de Présentation</p>

    <div class="text-center m-5 ">
      <input type="radio" name="myview" value="card"<?= isset($_COOKIE['myView']) ? ($_COOKIE['myView'] == 'card'? 'checked' :'') : 'checked'?>>
      <label class="p-2" for="carte">carte</label>
      <input type="radio" name="myview" value="list" <?= isset($_COOKIE['myView']) ? ($_COOKIE['myView'] == 'list'? 'checked' :'') : ''?>>
      <label class="p-2" for="liste">liste</label>
    </div>



    <p class="text-center fs-3 mx-auto m-3">Thème</p>


    <div class="form-check form-switch mx-auto p-3">
      <input class="form-check-input m-4" type="checkbox" role="switch" id="flexSwitchCheckChecked" name="valentineTheme" <?=isset($_COOKIE['valentineTheme']) ? 'checked' : '' ?>>
      <label class="form-check-label m-3" for="flexSwitchCheckChecked">Spécial St Valentin</label>
    </div>
    <div>
      <button class="btn btn-danger mx-auto justify-content">Enregistrer</button>
    </div>
  </form>

  <?php include('../views/footer.php') ?>
</body>