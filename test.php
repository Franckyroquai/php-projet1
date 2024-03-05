<?php
session_start();

var_dump($_SESSION);
echo "<br>";
session_destroy();  // permet de détruire le contenu du tableau $_SESSION
                    // à la fin du script
unset($_SESSION); // détruit la variable

//var_dump($_SESSION);

?>