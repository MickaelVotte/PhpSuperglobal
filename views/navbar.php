


 <h1 class="text-center m-5">Site de Rencontre</h1>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-5-strong mb-5 pb-5 m-0 p-0">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse d-flex justify-content-evenly pt-3" id="navbarNav">
      <ul class="navbar-nav ">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="../views/home.php">accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../views/settings.php">Paramètres</a>
        </li>
        <li class="nav-item">

<!-- Nous controllons si la session['user'] isset -->
   <?php if(isset($_SESSION['user'])) { ?>

       <a class="nav-link" href="../views/logout.php">Deconnexion</a>
      
  <?php  }else{ ?>
      <a class="nav-link" href="../views/login.php">Connexion</a>
   <?php } ?>



         
        </li>
      </ul>
    </div>
  </div>
</nav>
