    <?php
    
    session_start();


     require_once '../Controllers/login-controller.php';
    
    ?>

    <!-- On inclut le header contenant le cdn, title, doctype -->
    <?php include 'elements/header.php'?>

<body class="d-flex flex-column min-vh-100">

    <div class="row text-center m-0 p-0 pt-5">
        <h1>Connexion</h1>
    </div>

    <form action="" method="POST">
        <div class="row m-0 p-0 justify-content-center p-4">
            <div class="col-3">
                <div class="my-2">
                    <label class="form-label" for="firstname">Login:</label>
                    <span class="text-danger"><?= isset($errors['firstname']) ? $errors['firstname'] : '' ?></span> 
                    <br>
                    <input id="firstname" class="form-text" type="text" name="firstname" placeholder="ex. Jean" value="<?= isset($_POST['firstname']) ? $_POST['firstname'] : ''?>">
                </div>


                <div class="my-2">
                    <label class="form-label" for="password">Mot de passe:</label>
                    <span class="text-danger"><?= isset($errors['password']) ? $errors['password'] : '' ?></span> <br>
                    <input id="password" class="form-text" type="password" name="password">
                </div>

                <div>
                    <button class="btn btn-success">Valider</button>
                </div>

                <a href="../views/home.php">retour à l'acceuil</a>
            </div>

        </div>
    </form>










    <?php include('../views/footer.php') ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

