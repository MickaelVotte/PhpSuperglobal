    <?php
    

     require_once '../Controllers/login-controller.php';
    
    
    
    ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="../Public/css/style.css">
</head>

<body>

    <div class="row text-center m-0 p-0 pt-2">
        <h1>formulaire de contact</h1>
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


            </div>

        </div>
    </form>












    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>