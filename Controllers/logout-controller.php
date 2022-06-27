<?php

//lorsque nous arrivons sur la page logout nous lançon les fonctions suivantes
//permet de vider toutes les variables stockés dnas $_SESSION
session_unset();


//permet de supprimer les sessions  de l'utilissateur 
session_destroy();

?>