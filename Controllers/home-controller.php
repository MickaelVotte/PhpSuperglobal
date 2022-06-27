<?php
//chargement des données se trouvant dans data.php
require_once "../Public/data/data.php";



//arbitrairement nous définissons la variable display égale cards



if(isset($_COOKIE['myView'])){
    $display = $_COOKIE['myView'];
}else{
    $display = "list";
}


if(isset($_COOKIE['mySearch'])){
    $search = $_COOKIE['mySearch'];
}else{
    $search = 'lesDeux';
}


